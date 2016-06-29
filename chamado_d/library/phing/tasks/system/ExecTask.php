<?php

/*
 *  $Id: ExecTask.php 1195 2011-06-29 19:51:52Z mrook $
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPL. For more information please see
 * <http://phing.info>.
 */

require_once 'phing/Task.php';

/**
 * Executes a command on the shell.
 *
 * @author   Andreas Aderhold <andi@binarycloud.com>
 * @author   Hans Lellelid <hans@xmpl.org>
 * @version  $Revision: 1195 $
 * @package  phing.tasks.system
 */
class ExecTask extends Task {

    /**
     * Command to execute.
     * @var string
     */
    protected $command;

    /**
     * Working directory.
     * @var PhingFile
     */
    protected $dir;

    /**
     * Operating system.
     * @var string
     */
    protected $os;

    /**
     * Whether to escape shell command using escapeshellcmd().
     * @var boolean
     */
    protected $escape = false;

    /**
     * Where to direct output.
     * @var File
     */
    protected $output;

    /**
     * Whether to use PHP's passthru() function instead of exec()
     * @var boolean
     */
    protected $passthru = false;

    /**
     * Whether to log returned output as MSG_INFO instead of MSG_VERBOSE
     * @var boolean
     */
    protected $logOutput = false;
    
    /**
     * Logging level for status messages
     * @var integer
     */
    protected $logLevel = Project::MSG_VERBOSE;

    /**
     * Where to direct error output.
     * @var File
     */
    protected $error;

    /**
     * If spawn is set then [unix] programs will redirect stdout and add '&'.
     * @var boolean
     */
    protected $spawn = false;

    /**
     * Property name to set with return value from exec call.
     *
     * @var string
     */
    protected $returnProperty;

    /**
     * Property name to set with output value from exec call.
     *
     * @var string
     */
    protected $outputProperty;

    /**
     * Whether to check the return code.
     * @var boolean
     */
    protected $checkreturn = false;

    /**
     * Main method: wraps execute() command.
     * @return void
     */
    public function main() {
        $this->execute();
    }

    /**
     * Executes a program and returns the return code.
     * Output from command is logged at INFO level.
     * @return int Return code from execution.
     */
    public function execute() {

        // test if os match
        $myos = Phing::getProperty("os.name");
        $this->log("Myos = " . $myos, Project::MSG_VERBOSE);
        if (($this->os !== null) && (strpos($this->os, $myos) === false)) {
            // this command will be executed only on the specified OS
            $this->log("Not found in " . $this->os, Project::MSG_VERBOSE);
            return 0;
        }

        if ($this->dir !== null) {
            // expand any symbolic links first
            if ($this->dir->getCanonicalFile()->isDirectory()) {
                $currdir = getcwd();
                @chdir($this->dir->getPath());
            } else {
                throw new BuildException("'" . (string) $this->dir . "' is not a valid directory");
            }
        }


        if ($this->escape == true) {
            // FIXME - figure out whether this is correct behavior
            $this->command = escapeshellcmd($this->command);
        }

        if ($this->error !== null) {
            $this->command .= ' 2> ' . $this->error->getPath();
            $this->log("Writing error output to: " . $this->error->getPath(), $this->logLevel);
        }

        if ($this->output !== null) {
            $this->command .= ' 1> ' . $this->output->getPath();
            $this->log("Writing standard output to: " . $this->output->getPath(), $this->logLevel);
        } elseif ($this->spawn) {
            $this->command .= ' 1>/dev/null';
            $this->log("Sending ouptut to /dev/null", $this->logLevel);
        }

        // If neither output nor error are being written to file
        // then we'll redirect error to stdout so that we can dump
        // it to screen below.

        if ($this->output === null && $this->error === null) {
            $this->command .= ' 2>&1';
        }

        // we ignore the spawn boolean for windows
        if ($this->spawn) {
            $this->command .= ' &';
        }

        $this->log("Executing command: " . $this->command, $this->logLevel);

        $output = array();
        $return = null;
        
        if ($this->passthru)
        {
            passthru($this->command, $return);
        }
        else
        {
            exec($this->command, $output, $return);
        }

        if ($this->dir !== null) {
            @chdir($currdir);
        }

        foreach($output as $line) {
            $this->log($line,  ($this->logOutput ? Project::MSG_INFO : Project::MSG_VERBOSE));
        }

        if ($this->returnProperty) {
            $this->project->setProperty($this->returnProperty, $return);
        }

        if ($this->outputProperty) {
            $this->project->setProperty($this->outputProperty, implode("\n", $output));
        }

        if($return != 0 && $this->checkreturn) {
            throw new BuildException("Task exited with code $return");
        }

        return $return;
    }

    /**
     * The command to use.
     * @param mixed $command String or string-compatible (e.g. w/ __toString()).
     */
    function setCommand($command) {
        $this->command = "" . $command;
    }

    /**
     * Whether to use escapeshellcmd() to escape command.
     * @param boolean $escape
     */
    function setEscape($escape) {
        $this->escape = (bool) $escape;
    }

    /**
     * Specify the working directory for executing this command.
     * @param PhingFile $dir
     */
    function setDir(PhingFile $dir) {
        $this->dir = $dir;
    }

    /**
     * Specify OS (or muliple OS) that must match in order to execute this command.
     * @param string $os
     */
    function setOs($os) {
        $this->os = (string) $os;
    }

    /**
     * File to which output should be written.
     * @param PhingFile $output
     */
    function setOutput(PhingFile $f) {
        $this->output = $f;
    }

    /**
     * File to which error output should be written.
     * @param PhingFile $output
     */
    function setError(PhingFile $f) {
        $this->error = $f;
    }

    /**
     * Whether to use PHP's passthru() function instead of exec()
     * @param boolean $passthru
     */
    function setPassthru($passthru) {
        $this->passthru = (bool) $passthru;
    }

    /**
     * Whether to log returned output as MSG_INFO instead of MSG_VERBOSE
     * @param boolean $passthru
     */
    function setLogoutput($logOutput) {
        $this->logOutput = (bool) $logOutput;
    }

    /**
     * Whether to suppress all output and run in the background.
     * @param boolean $spawn
     */
    function setSpawn($spawn) {
        $this->spawn  = (bool) $spawn;
    }

    /**
     * Whether to check the return code.
     * @param boolean $checkreturn
     */
    function setCheckreturn($checkreturn) {
        $this->checkreturn = (bool) $checkreturn;
    }
    
    /**
     * The name of property to set to return value from exec() call.
     * @param string $prop
     */
    function setReturnProperty($prop) {
        $this->returnProperty = $prop;
    }

    /**
     * The name of property to set to output value from exec() call.
     * @param string $prop
     */
    function setOutputProperty($prop) {
        $this->outputProperty = $prop;
    }
    
    /**
     * Set level of log messages generated (default = verbose)
     * @param string $level
     */
    public function setLevel($level)
    {
        switch ($level)
        {
            case "error": $this->logLevel = Project::MSG_ERR; break;
            case "warning": $this->logLevel = Project::MSG_WARN; break;
            case "info": $this->logLevel = Project::MSG_INFO; break;
            case "verbose": $this->logLevel = Project::MSG_VERBOSE; break;
            case "debug": $this->logLevel = Project::MSG_DEBUG; break;
        }
    }
}
