<?php


/**
 * Base class that represents a row from the 'menu' table.
 *
 * 
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseMenu extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'MenuPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        MenuPeer
	 */
	protected static $peer;

	/**
	 * The value for the co_menu field.
	 * @var        int
	 */
	protected $co_menu;

	/**
	 * The value for the no_modulo field.
	 * @var        string
	 */
	protected $no_modulo;

	/**
	 * The value for the no_exibicao field.
	 * @var        string
	 */
	protected $no_exibicao;

	/**
	 * The value for the ds_tooltip field.
	 * @var        string
	 */
	protected $ds_tooltip;

	/**
	 * The value for the ds_url field.
	 * @var        string
	 */
	protected $ds_url;

	/**
	 * The value for the nu_ordem field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $nu_ordem;

	/**
	 * The value for the st_ativo field.
	 * Note: this column has a database default value of: true
	 * @var        boolean
	 */
	protected $st_ativo;

	/**
	 * The value for the dt_cadastro field.
	 * Note: this column has a database default value of: (expression) now()
	 * @var        string
	 */
	protected $dt_cadastro;

	/**
	 * The value for the co_usuario_cadastro field.
	 * @var        int
	 */
	protected $co_usuario_cadastro;

	/**
	 * The value for the dt_alteracao field.
	 * @var        string
	 */
	protected $dt_alteracao;

	/**
	 * The value for the co_usuario_alteracao field.
	 * @var        int
	 */
	protected $co_usuario_alteracao;

	/**
	 * The value for the st_nao_exibir field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $st_nao_exibir;

	/**
	 * The value for the no_icon field.
	 * @var        string
	 */
	protected $no_icon;

	/**
	 * @var        Modulo
	 */
	protected $aModulo;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->nu_ordem = 0;
		$this->st_ativo = true;
		$this->st_nao_exibir = false;
	}

	/**
	 * Initializes internal state of BaseMenu object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [co_menu] column value.
	 * 
	 * @return     int
	 */
	public function getCoMenu()
	{
		return $this->co_menu;
	}

	/**
	 * Get the [no_modulo] column value.
	 * 
	 * @return     string
	 */
	public function getNoModulo()
	{
		return $this->no_modulo;
	}

	/**
	 * Get the [no_exibicao] column value.
	 * 
	 * @return     string
	 */
	public function getNoExibicao()
	{
		return $this->no_exibicao;
	}

	/**
	 * Get the [ds_tooltip] column value.
	 * 
	 * @return     string
	 */
	public function getDsTooltip()
	{
		return $this->ds_tooltip;
	}

	/**
	 * Get the [ds_url] column value.
	 * 
	 * @return     string
	 */
	public function getDsUrl()
	{
		return $this->ds_url;
	}

	/**
	 * Get the [nu_ordem] column value.
	 * 
	 * @return     int
	 */
	public function getNuOrdem()
	{
		return $this->nu_ordem;
	}

	/**
	 * Get the [st_ativo] column value.
	 * 
	 * @return     boolean
	 */
	public function getStAtivo()
	{
		return $this->st_ativo;
	}

	/**
	 * Get the [optionally formatted] temporal [dt_cadastro] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDtCadastro($format = 'd-m-Y H:i:s')
	{
		if ($this->dt_cadastro === null) {
			return null;
		}



		try {
			$dt = new DateTime($this->dt_cadastro);
		} catch (Exception $x) {
			throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dt_cadastro, true), $x);
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [co_usuario_cadastro] column value.
	 * 
	 * @return     int
	 */
	public function getCoUsuarioCadastro()
	{
		return $this->co_usuario_cadastro;
	}

	/**
	 * Get the [optionally formatted] temporal [dt_alteracao] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDtAlteracao($format = 'd-m-Y H:i:s')
	{
		if ($this->dt_alteracao === null) {
			return null;
		}



		try {
			$dt = new DateTime($this->dt_alteracao);
		} catch (Exception $x) {
			throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dt_alteracao, true), $x);
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [co_usuario_alteracao] column value.
	 * 
	 * @return     int
	 */
	public function getCoUsuarioAlteracao()
	{
		return $this->co_usuario_alteracao;
	}

	/**
	 * Get the [st_nao_exibir] column value.
	 * 
	 * @return     boolean
	 */
	public function getStNaoExibir()
	{
		return $this->st_nao_exibir;
	}

	/**
	 * Get the [no_icon] column value.
	 * 
	 * @return     string
	 */
	public function getNoIcon()
	{
		return $this->no_icon;
	}

	/**
	 * Set the value of [co_menu] column.
	 * 
	 * @param      int $v new value
	 * @return     Menu The current object (for fluent API support)
	 */
	public function setCoMenu($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_menu !== $v) {
			$this->co_menu = $v;
			$this->modifiedColumns[] = MenuPeer::CO_MENU;
		}

		return $this;
	} // setCoMenu()

	/**
	 * Set the value of [no_modulo] column.
	 * 
	 * @param      string $v new value
	 * @return     Menu The current object (for fluent API support)
	 */
	public function setNoModulo($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->no_modulo !== $v) {
			$this->no_modulo = $v;
			$this->modifiedColumns[] = MenuPeer::NO_MODULO;
		}

		if ($this->aModulo !== null && $this->aModulo->getNoModulo() !== $v) {
			$this->aModulo = null;
		}

		return $this;
	} // setNoModulo()

	/**
	 * Set the value of [no_exibicao] column.
	 * 
	 * @param      string $v new value
	 * @return     Menu The current object (for fluent API support)
	 */
	public function setNoExibicao($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->no_exibicao !== $v) {
			$this->no_exibicao = $v;
			$this->modifiedColumns[] = MenuPeer::NO_EXIBICAO;
		}

		return $this;
	} // setNoExibicao()

	/**
	 * Set the value of [ds_tooltip] column.
	 * 
	 * @param      string $v new value
	 * @return     Menu The current object (for fluent API support)
	 */
	public function setDsTooltip($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ds_tooltip !== $v) {
			$this->ds_tooltip = $v;
			$this->modifiedColumns[] = MenuPeer::DS_TOOLTIP;
		}

		return $this;
	} // setDsTooltip()

	/**
	 * Set the value of [ds_url] column.
	 * 
	 * @param      string $v new value
	 * @return     Menu The current object (for fluent API support)
	 */
	public function setDsUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ds_url !== $v) {
			$this->ds_url = $v;
			$this->modifiedColumns[] = MenuPeer::DS_URL;
		}

		return $this;
	} // setDsUrl()

	/**
	 * Set the value of [nu_ordem] column.
	 * 
	 * @param      int $v new value
	 * @return     Menu The current object (for fluent API support)
	 */
	public function setNuOrdem($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->nu_ordem !== $v) {
			$this->nu_ordem = $v;
			$this->modifiedColumns[] = MenuPeer::NU_ORDEM;
		}

		return $this;
	} // setNuOrdem()

	/**
	 * Sets the value of the [st_ativo] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Menu The current object (for fluent API support)
	 */
	public function setStAtivo($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->st_ativo !== $v) {
			$this->st_ativo = $v;
			$this->modifiedColumns[] = MenuPeer::ST_ATIVO;
		}

		return $this;
	} // setStAtivo()

	/**
	 * Sets the value of [dt_cadastro] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Menu The current object (for fluent API support)
	 */
	public function setDtCadastro($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->dt_cadastro !== null || $dt !== null) {
			$currentDateAsString = ($this->dt_cadastro !== null && $tmpDt = new DateTime($this->dt_cadastro)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->dt_cadastro = $newDateAsString;
				$this->modifiedColumns[] = MenuPeer::DT_CADASTRO;
			}
		} // if either are not null

		return $this;
	} // setDtCadastro()

	/**
	 * Set the value of [co_usuario_cadastro] column.
	 * 
	 * @param      int $v new value
	 * @return     Menu The current object (for fluent API support)
	 */
	public function setCoUsuarioCadastro($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_usuario_cadastro !== $v) {
			$this->co_usuario_cadastro = $v;
			$this->modifiedColumns[] = MenuPeer::CO_USUARIO_CADASTRO;
		}

		return $this;
	} // setCoUsuarioCadastro()

	/**
	 * Sets the value of [dt_alteracao] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Menu The current object (for fluent API support)
	 */
	public function setDtAlteracao($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->dt_alteracao !== null || $dt !== null) {
			$currentDateAsString = ($this->dt_alteracao !== null && $tmpDt = new DateTime($this->dt_alteracao)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->dt_alteracao = $newDateAsString;
				$this->modifiedColumns[] = MenuPeer::DT_ALTERACAO;
			}
		} // if either are not null

		return $this;
	} // setDtAlteracao()

	/**
	 * Set the value of [co_usuario_alteracao] column.
	 * 
	 * @param      int $v new value
	 * @return     Menu The current object (for fluent API support)
	 */
	public function setCoUsuarioAlteracao($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_usuario_alteracao !== $v) {
			$this->co_usuario_alteracao = $v;
			$this->modifiedColumns[] = MenuPeer::CO_USUARIO_ALTERACAO;
		}

		return $this;
	} // setCoUsuarioAlteracao()

	/**
	 * Sets the value of the [st_nao_exibir] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Menu The current object (for fluent API support)
	 */
	public function setStNaoExibir($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->st_nao_exibir !== $v) {
			$this->st_nao_exibir = $v;
			$this->modifiedColumns[] = MenuPeer::ST_NAO_EXIBIR;
		}

		return $this;
	} // setStNaoExibir()

	/**
	 * Set the value of [no_icon] column.
	 * 
	 * @param      string $v new value
	 * @return     Menu The current object (for fluent API support)
	 */
	public function setNoIcon($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->no_icon !== $v) {
			$this->no_icon = $v;
			$this->modifiedColumns[] = MenuPeer::NO_ICON;
		}

		return $this;
	} // setNoIcon()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			if ($this->nu_ordem !== 0) {
				return false;
			}

			if ($this->st_ativo !== true) {
				return false;
			}

			if ($this->st_nao_exibir !== false) {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->co_menu = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->no_modulo = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->no_exibicao = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->ds_tooltip = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->ds_url = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->nu_ordem = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->st_ativo = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
			$this->dt_cadastro = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->co_usuario_cadastro = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->dt_alteracao = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->co_usuario_alteracao = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->st_nao_exibir = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
			$this->no_icon = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 13; // 13 = MenuPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Menu object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->aModulo !== null && $this->no_modulo !== $this->aModulo->getNoModulo()) {
			$this->aModulo = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(MenuPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = MenuPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aModulo = null;
		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(MenuPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = MenuQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			if ($ret) {
				$deleteQuery->delete($con);
				$this->postDelete($con);
				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(MenuPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				MenuPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aModulo !== null) {
				if ($this->aModulo->isModified() || $this->aModulo->isNew()) {
					$affectedRows += $this->aModulo->save($con);
				}
				$this->setModulo($this->aModulo);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = MenuPeer::CO_MENU;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(MenuPeer::CO_MENU) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.MenuPeer::CO_MENU.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setCoMenu($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += MenuPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aModulo !== null) {
				if (!$this->aModulo->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aModulo->getValidationFailures());
				}
			}


			if (($retval = MenuPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = MenuPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCoMenu();
				break;
			case 1:
				return $this->getNoModulo();
				break;
			case 2:
				return $this->getNoExibicao();
				break;
			case 3:
				return $this->getDsTooltip();
				break;
			case 4:
				return $this->getDsUrl();
				break;
			case 5:
				return $this->getNuOrdem();
				break;
			case 6:
				return $this->getStAtivo();
				break;
			case 7:
				return $this->getDtCadastro();
				break;
			case 8:
				return $this->getCoUsuarioCadastro();
				break;
			case 9:
				return $this->getDtAlteracao();
				break;
			case 10:
				return $this->getCoUsuarioAlteracao();
				break;
			case 11:
				return $this->getStNaoExibir();
				break;
			case 12:
				return $this->getNoIcon();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
	 * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
	{
		if (isset($alreadyDumpedObjects['Menu'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Menu'][$this->getPrimaryKey()] = true;
		$keys = MenuPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCoMenu(),
			$keys[1] => $this->getNoModulo(),
			$keys[2] => $this->getNoExibicao(),
			$keys[3] => $this->getDsTooltip(),
			$keys[4] => $this->getDsUrl(),
			$keys[5] => $this->getNuOrdem(),
			$keys[6] => $this->getStAtivo(),
			$keys[7] => $this->getDtCadastro(),
			$keys[8] => $this->getCoUsuarioCadastro(),
			$keys[9] => $this->getDtAlteracao(),
			$keys[10] => $this->getCoUsuarioAlteracao(),
			$keys[11] => $this->getStNaoExibir(),
			$keys[12] => $this->getNoIcon(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aModulo) {
				$result['Modulo'] = $this->aModulo->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
		}
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = MenuPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCoMenu($value);
				break;
			case 1:
				$this->setNoModulo($value);
				break;
			case 2:
				$this->setNoExibicao($value);
				break;
			case 3:
				$this->setDsTooltip($value);
				break;
			case 4:
				$this->setDsUrl($value);
				break;
			case 5:
				$this->setNuOrdem($value);
				break;
			case 6:
				$this->setStAtivo($value);
				break;
			case 7:
				$this->setDtCadastro($value);
				break;
			case 8:
				$this->setCoUsuarioCadastro($value);
				break;
			case 9:
				$this->setDtAlteracao($value);
				break;
			case 10:
				$this->setCoUsuarioAlteracao($value);
				break;
			case 11:
				$this->setStNaoExibir($value);
				break;
			case 12:
				$this->setNoIcon($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = MenuPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoMenu($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNoModulo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNoExibicao($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDsTooltip($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDsUrl($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setNuOrdem($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setStAtivo($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDtCadastro($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCoUsuarioCadastro($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDtAlteracao($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setCoUsuarioAlteracao($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setStNaoExibir($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setNoIcon($arr[$keys[12]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(MenuPeer::DATABASE_NAME);

		if ($this->isColumnModified(MenuPeer::CO_MENU)) $criteria->add(MenuPeer::CO_MENU, $this->co_menu);
		if ($this->isColumnModified(MenuPeer::NO_MODULO)) $criteria->add(MenuPeer::NO_MODULO, $this->no_modulo);
		if ($this->isColumnModified(MenuPeer::NO_EXIBICAO)) $criteria->add(MenuPeer::NO_EXIBICAO, $this->no_exibicao);
		if ($this->isColumnModified(MenuPeer::DS_TOOLTIP)) $criteria->add(MenuPeer::DS_TOOLTIP, $this->ds_tooltip);
		if ($this->isColumnModified(MenuPeer::DS_URL)) $criteria->add(MenuPeer::DS_URL, $this->ds_url);
		if ($this->isColumnModified(MenuPeer::NU_ORDEM)) $criteria->add(MenuPeer::NU_ORDEM, $this->nu_ordem);
		if ($this->isColumnModified(MenuPeer::ST_ATIVO)) $criteria->add(MenuPeer::ST_ATIVO, $this->st_ativo);
		if ($this->isColumnModified(MenuPeer::DT_CADASTRO)) $criteria->add(MenuPeer::DT_CADASTRO, $this->dt_cadastro);
		if ($this->isColumnModified(MenuPeer::CO_USUARIO_CADASTRO)) $criteria->add(MenuPeer::CO_USUARIO_CADASTRO, $this->co_usuario_cadastro);
		if ($this->isColumnModified(MenuPeer::DT_ALTERACAO)) $criteria->add(MenuPeer::DT_ALTERACAO, $this->dt_alteracao);
		if ($this->isColumnModified(MenuPeer::CO_USUARIO_ALTERACAO)) $criteria->add(MenuPeer::CO_USUARIO_ALTERACAO, $this->co_usuario_alteracao);
		if ($this->isColumnModified(MenuPeer::ST_NAO_EXIBIR)) $criteria->add(MenuPeer::ST_NAO_EXIBIR, $this->st_nao_exibir);
		if ($this->isColumnModified(MenuPeer::NO_ICON)) $criteria->add(MenuPeer::NO_ICON, $this->no_icon);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(MenuPeer::DATABASE_NAME);
		$criteria->add(MenuPeer::CO_MENU, $this->co_menu);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getCoMenu();
	}

	/**
	 * Generic method to set the primary key (co_menu column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setCoMenu($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getCoMenu();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Menu (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setNoModulo($this->getNoModulo());
		$copyObj->setNoExibicao($this->getNoExibicao());
		$copyObj->setDsTooltip($this->getDsTooltip());
		$copyObj->setDsUrl($this->getDsUrl());
		$copyObj->setNuOrdem($this->getNuOrdem());
		$copyObj->setStAtivo($this->getStAtivo());
		$copyObj->setDtCadastro($this->getDtCadastro());
		$copyObj->setCoUsuarioCadastro($this->getCoUsuarioCadastro());
		$copyObj->setDtAlteracao($this->getDtAlteracao());
		$copyObj->setCoUsuarioAlteracao($this->getCoUsuarioAlteracao());
		$copyObj->setStNaoExibir($this->getStNaoExibir());
		$copyObj->setNoIcon($this->getNoIcon());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setCoMenu(NULL); // this is a auto-increment column, so set to default value
		}
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Menu Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     MenuPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new MenuPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Modulo object.
	 *
	 * @param      Modulo $v
	 * @return     Menu The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setModulo(Modulo $v = null)
	{
		if ($v === null) {
			$this->setNoModulo(NULL);
		} else {
			$this->setNoModulo($v->getNoModulo());
		}

		$this->aModulo = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Modulo object, it will not be re-added.
		if ($v !== null) {
			$v->addMenu($this);
		}

		return $this;
	}


	/**
	 * Get the associated Modulo object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Modulo The associated Modulo object.
	 * @throws     PropelException
	 */
	public function getModulo(PropelPDO $con = null)
	{
		if ($this->aModulo === null && (($this->no_modulo !== "" && $this->no_modulo !== null))) {
			$this->aModulo = ModuloQuery::create()->findPk($this->no_modulo, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aModulo->addMenus($this);
			 */
		}
		return $this->aModulo;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->co_menu = null;
		$this->no_modulo = null;
		$this->no_exibicao = null;
		$this->ds_tooltip = null;
		$this->ds_url = null;
		$this->nu_ordem = null;
		$this->st_ativo = null;
		$this->dt_cadastro = null;
		$this->co_usuario_cadastro = null;
		$this->dt_alteracao = null;
		$this->co_usuario_alteracao = null;
		$this->st_nao_exibir = null;
		$this->no_icon = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->applyDefaultValues();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all references to other model objects or collections of model objects.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect
	 * objects with circular references (even in PHP 5.3). This is currently necessary
	 * when using Propel in certain daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all referrer objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

		$this->aModulo = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(MenuPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseMenu
