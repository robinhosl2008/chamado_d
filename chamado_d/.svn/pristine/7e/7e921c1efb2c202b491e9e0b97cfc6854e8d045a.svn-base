<?php


/**
 * Base class that represents a row from the 'tarefa' table.
 *
 * 
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseTarefa extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'TarefaPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        TarefaPeer
	 */
	protected static $peer;

	/**
	 * The value for the co_tarefa field.
	 * @var        int
	 */
	protected $co_tarefa;

	/**
	 * The value for the dt_inicio field.
	 * Note: this column has a database default value of: (expression) now()
	 * @var        string
	 */
	protected $dt_inicio;

	/**
	 * The value for the dt_previsao field.
	 * @var        string
	 */
	protected $dt_previsao;

	/**
	 * The value for the dt_fim field.
	 * @var        string
	 */
	protected $dt_fim;

	/**
	 * The value for the co_categoria field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $co_categoria;

	/**
	 * The value for the co_nivel field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $co_nivel;

	/**
	 * The value for the co_prioridade field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $co_prioridade;

	/**
	 * The value for the co_status field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $co_status;

	/**
	 * The value for the co_usuario_fechamento field.
	 * @var        int
	 */
	protected $co_usuario_fechamento;

	/**
	 * The value for the co_seq_proj_ver_amb field.
	 * @var        int
	 */
	protected $co_seq_proj_ver_amb;

	/**
	 * The value for the co_usuario_aberto field.
	 * @var        int
	 */
	protected $co_usuario_aberto;

	/**
	 * The value for the co_usuario_atualizacao field.
	 * @var        int
	 */
	protected $co_usuario_atualizacao;

	/**
	 * The value for the no_resumo field.
	 * @var        string
	 */
	protected $no_resumo;

	/**
	 * The value for the co_orgao field.
	 * @var        int
	 */
	protected $co_orgao;

	/**
	 * The value for the email_adicionais field.
	 * @var        string
	 */
	protected $email_adicionais;

	/**
	 * The value for the co_seq_modulo_proj field.
	 * @var        int
	 */
	protected $co_seq_modulo_proj;

	/**
	 * The value for the nr_tarefa field.
	 * @var        int
	 */
	protected $nr_tarefa;

	/**
	 * The value for the nr_sirius field.
	 * @var        int
	 */
	protected $nr_sirius;

	/**
	 * The value for the co_usuario_atendimento field.
	 * @var        int
	 */
	protected $co_usuario_atendimento;

	/**
	 * @var        Orgao
	 */
	protected $aOrgao;

	/**
	 * @var        RlProjetoVersaoAmb
	 */
	protected $aRlProjetoVersaoAmb;

	/**
	 * @var        Categoria
	 */
	protected $aCategoria;

	/**
	 * @var        Nivel
	 */
	protected $aNivel;

	/**
	 * @var        Prioridade
	 */
	protected $aPrioridade;

	/**
	 * @var        Status
	 */
	protected $aStatus;

	/**
	 * @var        TbModuloProjeto
	 */
	protected $aTbModuloProjeto;

	/**
	 * @var        array TbDescricaoChamado[] Collection to store aggregation of TbDescricaoChamado objects.
	 */
	protected $collTbDescricaoChamados;

	/**
	 * @var        array UsuarioTarefa[] Collection to store aggregation of UsuarioTarefa objects.
	 */
	protected $collUsuarioTarefas;

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
		$this->co_categoria = 1;
		$this->co_nivel = 1;
		$this->co_prioridade = 1;
		$this->co_status = 1;
	}

	/**
	 * Initializes internal state of BaseTarefa object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [co_tarefa] column value.
	 * 
	 * @return     int
	 */
	public function getCoTarefa()
	{
		return $this->co_tarefa;
	}

	/**
	 * Get the [optionally formatted] temporal [dt_inicio] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDtInicio($format = 'd-m-Y H:i:s')
	{
		if ($this->dt_inicio === null) {
			return null;
		}



		try {
			$dt = new DateTime($this->dt_inicio);
		} catch (Exception $x) {
			throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dt_inicio, true), $x);
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
	 * Get the [optionally formatted] temporal [dt_previsao] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDtPrevisao($format = 'd-m-Y H:i:s')
	{
		if ($this->dt_previsao === null) {
			return null;
		}



		try {
			$dt = new DateTime($this->dt_previsao);
		} catch (Exception $x) {
			throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dt_previsao, true), $x);
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
	 * Get the [optionally formatted] temporal [dt_fim] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDtFim($format = 'd-m-Y H:i:s')
	{
		if ($this->dt_fim === null) {
			return null;
		}



		try {
			$dt = new DateTime($this->dt_fim);
		} catch (Exception $x) {
			throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dt_fim, true), $x);
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
	 * Get the [co_categoria] column value.
	 * 
	 * @return     int
	 */
	public function getCoCategoria()
	{
		return $this->co_categoria;
	}

	/**
	 * Get the [co_nivel] column value.
	 * 
	 * @return     int
	 */
	public function getCoNivel()
	{
		return $this->co_nivel;
	}

	/**
	 * Get the [co_prioridade] column value.
	 * 
	 * @return     int
	 */
	public function getCoPrioridade()
	{
		return $this->co_prioridade;
	}

	/**
	 * Get the [co_status] column value.
	 * 
	 * @return     int
	 */
	public function getCoStatus()
	{
		return $this->co_status;
	}

	/**
	 * Get the [co_usuario_fechamento] column value.
	 * 
	 * @return     int
	 */
	public function getCoUsuarioFechamento()
	{
		return $this->co_usuario_fechamento;
	}

	/**
	 * Get the [co_seq_proj_ver_amb] column value.
	 * 
	 * @return     int
	 */
	public function getCoSeqProjVerAmb()
	{
		return $this->co_seq_proj_ver_amb;
	}

	/**
	 * Get the [co_usuario_aberto] column value.
	 * 
	 * @return     int
	 */
	public function getCoUsuarioAberto()
	{
		return $this->co_usuario_aberto;
	}

	/**
	 * Get the [co_usuario_atualizacao] column value.
	 * 
	 * @return     int
	 */
	public function getCoUsuarioAtualizacao()
	{
		return $this->co_usuario_atualizacao;
	}

	/**
	 * Get the [no_resumo] column value.
	 * 
	 * @return     string
	 */
	public function getNoResumo()
	{
		return $this->no_resumo;
	}

	/**
	 * Get the [co_orgao] column value.
	 * 
	 * @return     int
	 */
	public function getCoOrgao()
	{
		return $this->co_orgao;
	}

	/**
	 * Get the [email_adicionais] column value.
	 * 
	 * @return     string
	 */
	public function getEmailAdicionais()
	{
		return $this->email_adicionais;
	}

	/**
	 * Get the [co_seq_modulo_proj] column value.
	 * 
	 * @return     int
	 */
	public function getCoSeqModuloProj()
	{
		return $this->co_seq_modulo_proj;
	}

	/**
	 * Get the [nr_tarefa] column value.
	 * 
	 * @return     int
	 */
	public function getNrTarefa()
	{
		return $this->nr_tarefa;
	}

	/**
	 * Get the [nr_sirius] column value.
	 * 
	 * @return     int
	 */
	public function getNrSirius()
	{
		return $this->nr_sirius;
	}

	/**
	 * Get the [co_usuario_atendimento] column value.
	 * 
	 * @return     int
	 */
	public function getCoUsuarioAtendimento()
	{
		return $this->co_usuario_atendimento;
	}

	/**
	 * Set the value of [co_tarefa] column.
	 * 
	 * @param      int $v new value
	 * @return     Tarefa The current object (for fluent API support)
	 */
	public function setCoTarefa($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_tarefa !== $v) {
			$this->co_tarefa = $v;
			$this->modifiedColumns[] = TarefaPeer::CO_TAREFA;
		}

		return $this;
	} // setCoTarefa()

	/**
	 * Sets the value of [dt_inicio] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Tarefa The current object (for fluent API support)
	 */
	public function setDtInicio($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->dt_inicio !== null || $dt !== null) {
			$currentDateAsString = ($this->dt_inicio !== null && $tmpDt = new DateTime($this->dt_inicio)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->dt_inicio = $newDateAsString;
				$this->modifiedColumns[] = TarefaPeer::DT_INICIO;
			}
		} // if either are not null

		return $this;
	} // setDtInicio()

	/**
	 * Sets the value of [dt_previsao] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Tarefa The current object (for fluent API support)
	 */
	public function setDtPrevisao($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->dt_previsao !== null || $dt !== null) {
			$currentDateAsString = ($this->dt_previsao !== null && $tmpDt = new DateTime($this->dt_previsao)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->dt_previsao = $newDateAsString;
				$this->modifiedColumns[] = TarefaPeer::DT_PREVISAO;
			}
		} // if either are not null

		return $this;
	} // setDtPrevisao()

	/**
	 * Sets the value of [dt_fim] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Tarefa The current object (for fluent API support)
	 */
	public function setDtFim($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->dt_fim !== null || $dt !== null) {
			$currentDateAsString = ($this->dt_fim !== null && $tmpDt = new DateTime($this->dt_fim)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->dt_fim = $newDateAsString;
				$this->modifiedColumns[] = TarefaPeer::DT_FIM;
			}
		} // if either are not null

		return $this;
	} // setDtFim()

	/**
	 * Set the value of [co_categoria] column.
	 * 
	 * @param      int $v new value
	 * @return     Tarefa The current object (for fluent API support)
	 */
	public function setCoCategoria($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_categoria !== $v) {
			$this->co_categoria = $v;
			$this->modifiedColumns[] = TarefaPeer::CO_CATEGORIA;
		}

		if ($this->aCategoria !== null && $this->aCategoria->getCoCategoria() !== $v) {
			$this->aCategoria = null;
		}

		return $this;
	} // setCoCategoria()

	/**
	 * Set the value of [co_nivel] column.
	 * 
	 * @param      int $v new value
	 * @return     Tarefa The current object (for fluent API support)
	 */
	public function setCoNivel($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_nivel !== $v) {
			$this->co_nivel = $v;
			$this->modifiedColumns[] = TarefaPeer::CO_NIVEL;
		}

		if ($this->aNivel !== null && $this->aNivel->getCoNivel() !== $v) {
			$this->aNivel = null;
		}

		return $this;
	} // setCoNivel()

	/**
	 * Set the value of [co_prioridade] column.
	 * 
	 * @param      int $v new value
	 * @return     Tarefa The current object (for fluent API support)
	 */
	public function setCoPrioridade($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_prioridade !== $v) {
			$this->co_prioridade = $v;
			$this->modifiedColumns[] = TarefaPeer::CO_PRIORIDADE;
		}

		if ($this->aPrioridade !== null && $this->aPrioridade->getCoPrioridade() !== $v) {
			$this->aPrioridade = null;
		}

		return $this;
	} // setCoPrioridade()

	/**
	 * Set the value of [co_status] column.
	 * 
	 * @param      int $v new value
	 * @return     Tarefa The current object (for fluent API support)
	 */
	public function setCoStatus($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_status !== $v) {
			$this->co_status = $v;
			$this->modifiedColumns[] = TarefaPeer::CO_STATUS;
		}

		if ($this->aStatus !== null && $this->aStatus->getCoStatus() !== $v) {
			$this->aStatus = null;
		}

		return $this;
	} // setCoStatus()

	/**
	 * Set the value of [co_usuario_fechamento] column.
	 * 
	 * @param      int $v new value
	 * @return     Tarefa The current object (for fluent API support)
	 */
	public function setCoUsuarioFechamento($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_usuario_fechamento !== $v) {
			$this->co_usuario_fechamento = $v;
			$this->modifiedColumns[] = TarefaPeer::CO_USUARIO_FECHAMENTO;
		}

		return $this;
	} // setCoUsuarioFechamento()

	/**
	 * Set the value of [co_seq_proj_ver_amb] column.
	 * 
	 * @param      int $v new value
	 * @return     Tarefa The current object (for fluent API support)
	 */
	public function setCoSeqProjVerAmb($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_seq_proj_ver_amb !== $v) {
			$this->co_seq_proj_ver_amb = $v;
			$this->modifiedColumns[] = TarefaPeer::CO_SEQ_PROJ_VER_AMB;
		}

		if ($this->aRlProjetoVersaoAmb !== null && $this->aRlProjetoVersaoAmb->getCoSeqProjVerAmb() !== $v) {
			$this->aRlProjetoVersaoAmb = null;
		}

		return $this;
	} // setCoSeqProjVerAmb()

	/**
	 * Set the value of [co_usuario_aberto] column.
	 * 
	 * @param      int $v new value
	 * @return     Tarefa The current object (for fluent API support)
	 */
	public function setCoUsuarioAberto($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_usuario_aberto !== $v) {
			$this->co_usuario_aberto = $v;
			$this->modifiedColumns[] = TarefaPeer::CO_USUARIO_ABERTO;
		}

		return $this;
	} // setCoUsuarioAberto()

	/**
	 * Set the value of [co_usuario_atualizacao] column.
	 * 
	 * @param      int $v new value
	 * @return     Tarefa The current object (for fluent API support)
	 */
	public function setCoUsuarioAtualizacao($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_usuario_atualizacao !== $v) {
			$this->co_usuario_atualizacao = $v;
			$this->modifiedColumns[] = TarefaPeer::CO_USUARIO_ATUALIZACAO;
		}

		return $this;
	} // setCoUsuarioAtualizacao()

	/**
	 * Set the value of [no_resumo] column.
	 * 
	 * @param      string $v new value
	 * @return     Tarefa The current object (for fluent API support)
	 */
	public function setNoResumo($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->no_resumo !== $v) {
			$this->no_resumo = $v;
			$this->modifiedColumns[] = TarefaPeer::NO_RESUMO;
		}

		return $this;
	} // setNoResumo()

	/**
	 * Set the value of [co_orgao] column.
	 * 
	 * @param      int $v new value
	 * @return     Tarefa The current object (for fluent API support)
	 */
	public function setCoOrgao($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_orgao !== $v) {
			$this->co_orgao = $v;
			$this->modifiedColumns[] = TarefaPeer::CO_ORGAO;
		}

		if ($this->aOrgao !== null && $this->aOrgao->getCoOrgao() !== $v) {
			$this->aOrgao = null;
		}

		return $this;
	} // setCoOrgao()

	/**
	 * Set the value of [email_adicionais] column.
	 * 
	 * @param      string $v new value
	 * @return     Tarefa The current object (for fluent API support)
	 */
	public function setEmailAdicionais($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->email_adicionais !== $v) {
			$this->email_adicionais = $v;
			$this->modifiedColumns[] = TarefaPeer::EMAIL_ADICIONAIS;
		}

		return $this;
	} // setEmailAdicionais()

	/**
	 * Set the value of [co_seq_modulo_proj] column.
	 * 
	 * @param      int $v new value
	 * @return     Tarefa The current object (for fluent API support)
	 */
	public function setCoSeqModuloProj($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_seq_modulo_proj !== $v) {
			$this->co_seq_modulo_proj = $v;
			$this->modifiedColumns[] = TarefaPeer::CO_SEQ_MODULO_PROJ;
		}

		if ($this->aTbModuloProjeto !== null && $this->aTbModuloProjeto->getCoSeqModuloProj() !== $v) {
			$this->aTbModuloProjeto = null;
		}

		return $this;
	} // setCoSeqModuloProj()

	/**
	 * Set the value of [nr_tarefa] column.
	 * 
	 * @param      int $v new value
	 * @return     Tarefa The current object (for fluent API support)
	 */
	public function setNrTarefa($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->nr_tarefa !== $v) {
			$this->nr_tarefa = $v;
			$this->modifiedColumns[] = TarefaPeer::NR_TAREFA;
		}

		return $this;
	} // setNrTarefa()

	/**
	 * Set the value of [nr_sirius] column.
	 * 
	 * @param      int $v new value
	 * @return     Tarefa The current object (for fluent API support)
	 */
	public function setNrSirius($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->nr_sirius !== $v) {
			$this->nr_sirius = $v;
			$this->modifiedColumns[] = TarefaPeer::NR_SIRIUS;
		}

		return $this;
	} // setNrSirius()

	/**
	 * Set the value of [co_usuario_atendimento] column.
	 * 
	 * @param      int $v new value
	 * @return     Tarefa The current object (for fluent API support)
	 */
	public function setCoUsuarioAtendimento($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_usuario_atendimento !== $v) {
			$this->co_usuario_atendimento = $v;
			$this->modifiedColumns[] = TarefaPeer::CO_USUARIO_ATENDIMENTO;
		}

		return $this;
	} // setCoUsuarioAtendimento()

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
			if ($this->co_categoria !== 1) {
				return false;
			}

			if ($this->co_nivel !== 1) {
				return false;
			}

			if ($this->co_prioridade !== 1) {
				return false;
			}

			if ($this->co_status !== 1) {
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

			$this->co_tarefa = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->dt_inicio = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->dt_previsao = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->dt_fim = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->co_categoria = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->co_nivel = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->co_prioridade = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->co_status = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->co_usuario_fechamento = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->co_seq_proj_ver_amb = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->co_usuario_aberto = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->co_usuario_atualizacao = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
			$this->no_resumo = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->co_orgao = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
			$this->email_adicionais = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->co_seq_modulo_proj = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
			$this->nr_tarefa = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
			$this->nr_sirius = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
			$this->co_usuario_atendimento = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 19; // 19 = TarefaPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Tarefa object", $e);
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

		if ($this->aCategoria !== null && $this->co_categoria !== $this->aCategoria->getCoCategoria()) {
			$this->aCategoria = null;
		}
		if ($this->aNivel !== null && $this->co_nivel !== $this->aNivel->getCoNivel()) {
			$this->aNivel = null;
		}
		if ($this->aPrioridade !== null && $this->co_prioridade !== $this->aPrioridade->getCoPrioridade()) {
			$this->aPrioridade = null;
		}
		if ($this->aStatus !== null && $this->co_status !== $this->aStatus->getCoStatus()) {
			$this->aStatus = null;
		}
		if ($this->aRlProjetoVersaoAmb !== null && $this->co_seq_proj_ver_amb !== $this->aRlProjetoVersaoAmb->getCoSeqProjVerAmb()) {
			$this->aRlProjetoVersaoAmb = null;
		}
		if ($this->aOrgao !== null && $this->co_orgao !== $this->aOrgao->getCoOrgao()) {
			$this->aOrgao = null;
		}
		if ($this->aTbModuloProjeto !== null && $this->co_seq_modulo_proj !== $this->aTbModuloProjeto->getCoSeqModuloProj()) {
			$this->aTbModuloProjeto = null;
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
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = TarefaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aOrgao = null;
			$this->aRlProjetoVersaoAmb = null;
			$this->aCategoria = null;
			$this->aNivel = null;
			$this->aPrioridade = null;
			$this->aStatus = null;
			$this->aTbModuloProjeto = null;
			$this->collTbDescricaoChamados = null;

			$this->collUsuarioTarefas = null;

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
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = TarefaQuery::create()
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
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				TarefaPeer::addInstanceToPool($this);
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

			if ($this->aOrgao !== null) {
				if ($this->aOrgao->isModified() || $this->aOrgao->isNew()) {
					$affectedRows += $this->aOrgao->save($con);
				}
				$this->setOrgao($this->aOrgao);
			}

			if ($this->aRlProjetoVersaoAmb !== null) {
				if ($this->aRlProjetoVersaoAmb->isModified() || $this->aRlProjetoVersaoAmb->isNew()) {
					$affectedRows += $this->aRlProjetoVersaoAmb->save($con);
				}
				$this->setRlProjetoVersaoAmb($this->aRlProjetoVersaoAmb);
			}

			if ($this->aCategoria !== null) {
				if ($this->aCategoria->isModified() || $this->aCategoria->isNew()) {
					$affectedRows += $this->aCategoria->save($con);
				}
				$this->setCategoria($this->aCategoria);
			}

			if ($this->aNivel !== null) {
				if ($this->aNivel->isModified() || $this->aNivel->isNew()) {
					$affectedRows += $this->aNivel->save($con);
				}
				$this->setNivel($this->aNivel);
			}

			if ($this->aPrioridade !== null) {
				if ($this->aPrioridade->isModified() || $this->aPrioridade->isNew()) {
					$affectedRows += $this->aPrioridade->save($con);
				}
				$this->setPrioridade($this->aPrioridade);
			}

			if ($this->aStatus !== null) {
				if ($this->aStatus->isModified() || $this->aStatus->isNew()) {
					$affectedRows += $this->aStatus->save($con);
				}
				$this->setStatus($this->aStatus);
			}

			if ($this->aTbModuloProjeto !== null) {
				if ($this->aTbModuloProjeto->isModified() || $this->aTbModuloProjeto->isNew()) {
					$affectedRows += $this->aTbModuloProjeto->save($con);
				}
				$this->setTbModuloProjeto($this->aTbModuloProjeto);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = TarefaPeer::CO_TAREFA;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(TarefaPeer::CO_TAREFA) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.TarefaPeer::CO_TAREFA.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setCoTarefa($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += TarefaPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collTbDescricaoChamados !== null) {
				foreach ($this->collTbDescricaoChamados as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collUsuarioTarefas !== null) {
				foreach ($this->collUsuarioTarefas as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
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

			if ($this->aOrgao !== null) {
				if (!$this->aOrgao->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aOrgao->getValidationFailures());
				}
			}

			if ($this->aRlProjetoVersaoAmb !== null) {
				if (!$this->aRlProjetoVersaoAmb->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aRlProjetoVersaoAmb->getValidationFailures());
				}
			}

			if ($this->aCategoria !== null) {
				if (!$this->aCategoria->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCategoria->getValidationFailures());
				}
			}

			if ($this->aNivel !== null) {
				if (!$this->aNivel->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNivel->getValidationFailures());
				}
			}

			if ($this->aPrioridade !== null) {
				if (!$this->aPrioridade->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aPrioridade->getValidationFailures());
				}
			}

			if ($this->aStatus !== null) {
				if (!$this->aStatus->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aStatus->getValidationFailures());
				}
			}

			if ($this->aTbModuloProjeto !== null) {
				if (!$this->aTbModuloProjeto->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTbModuloProjeto->getValidationFailures());
				}
			}


			if (($retval = TarefaPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collTbDescricaoChamados !== null) {
					foreach ($this->collTbDescricaoChamados as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collUsuarioTarefas !== null) {
					foreach ($this->collUsuarioTarefas as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
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
		$pos = TarefaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCoTarefa();
				break;
			case 1:
				return $this->getDtInicio();
				break;
			case 2:
				return $this->getDtPrevisao();
				break;
			case 3:
				return $this->getDtFim();
				break;
			case 4:
				return $this->getCoCategoria();
				break;
			case 5:
				return $this->getCoNivel();
				break;
			case 6:
				return $this->getCoPrioridade();
				break;
			case 7:
				return $this->getCoStatus();
				break;
			case 8:
				return $this->getCoUsuarioFechamento();
				break;
			case 9:
				return $this->getCoSeqProjVerAmb();
				break;
			case 10:
				return $this->getCoUsuarioAberto();
				break;
			case 11:
				return $this->getCoUsuarioAtualizacao();
				break;
			case 12:
				return $this->getNoResumo();
				break;
			case 13:
				return $this->getCoOrgao();
				break;
			case 14:
				return $this->getEmailAdicionais();
				break;
			case 15:
				return $this->getCoSeqModuloProj();
				break;
			case 16:
				return $this->getNrTarefa();
				break;
			case 17:
				return $this->getNrSirius();
				break;
			case 18:
				return $this->getCoUsuarioAtendimento();
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
		if (isset($alreadyDumpedObjects['Tarefa'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Tarefa'][$this->getPrimaryKey()] = true;
		$keys = TarefaPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCoTarefa(),
			$keys[1] => $this->getDtInicio(),
			$keys[2] => $this->getDtPrevisao(),
			$keys[3] => $this->getDtFim(),
			$keys[4] => $this->getCoCategoria(),
			$keys[5] => $this->getCoNivel(),
			$keys[6] => $this->getCoPrioridade(),
			$keys[7] => $this->getCoStatus(),
			$keys[8] => $this->getCoUsuarioFechamento(),
			$keys[9] => $this->getCoSeqProjVerAmb(),
			$keys[10] => $this->getCoUsuarioAberto(),
			$keys[11] => $this->getCoUsuarioAtualizacao(),
			$keys[12] => $this->getNoResumo(),
			$keys[13] => $this->getCoOrgao(),
			$keys[14] => $this->getEmailAdicionais(),
			$keys[15] => $this->getCoSeqModuloProj(),
			$keys[16] => $this->getNrTarefa(),
			$keys[17] => $this->getNrSirius(),
			$keys[18] => $this->getCoUsuarioAtendimento(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aOrgao) {
				$result['Orgao'] = $this->aOrgao->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aRlProjetoVersaoAmb) {
				$result['RlProjetoVersaoAmb'] = $this->aRlProjetoVersaoAmb->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aCategoria) {
				$result['Categoria'] = $this->aCategoria->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aNivel) {
				$result['Nivel'] = $this->aNivel->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aPrioridade) {
				$result['Prioridade'] = $this->aPrioridade->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aStatus) {
				$result['Status'] = $this->aStatus->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aTbModuloProjeto) {
				$result['TbModuloProjeto'] = $this->aTbModuloProjeto->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->collTbDescricaoChamados) {
				$result['TbDescricaoChamados'] = $this->collTbDescricaoChamados->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collUsuarioTarefas) {
				$result['UsuarioTarefas'] = $this->collUsuarioTarefas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = TarefaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCoTarefa($value);
				break;
			case 1:
				$this->setDtInicio($value);
				break;
			case 2:
				$this->setDtPrevisao($value);
				break;
			case 3:
				$this->setDtFim($value);
				break;
			case 4:
				$this->setCoCategoria($value);
				break;
			case 5:
				$this->setCoNivel($value);
				break;
			case 6:
				$this->setCoPrioridade($value);
				break;
			case 7:
				$this->setCoStatus($value);
				break;
			case 8:
				$this->setCoUsuarioFechamento($value);
				break;
			case 9:
				$this->setCoSeqProjVerAmb($value);
				break;
			case 10:
				$this->setCoUsuarioAberto($value);
				break;
			case 11:
				$this->setCoUsuarioAtualizacao($value);
				break;
			case 12:
				$this->setNoResumo($value);
				break;
			case 13:
				$this->setCoOrgao($value);
				break;
			case 14:
				$this->setEmailAdicionais($value);
				break;
			case 15:
				$this->setCoSeqModuloProj($value);
				break;
			case 16:
				$this->setNrTarefa($value);
				break;
			case 17:
				$this->setNrSirius($value);
				break;
			case 18:
				$this->setCoUsuarioAtendimento($value);
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
		$keys = TarefaPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoTarefa($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDtInicio($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDtPrevisao($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDtFim($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCoCategoria($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCoNivel($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCoPrioridade($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCoStatus($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCoUsuarioFechamento($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCoSeqProjVerAmb($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setCoUsuarioAberto($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setCoUsuarioAtualizacao($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setNoResumo($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setCoOrgao($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setEmailAdicionais($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setCoSeqModuloProj($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setNrTarefa($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setNrSirius($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setCoUsuarioAtendimento($arr[$keys[18]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(TarefaPeer::DATABASE_NAME);

		if ($this->isColumnModified(TarefaPeer::CO_TAREFA)) $criteria->add(TarefaPeer::CO_TAREFA, $this->co_tarefa);
		if ($this->isColumnModified(TarefaPeer::DT_INICIO)) $criteria->add(TarefaPeer::DT_INICIO, $this->dt_inicio);
		if ($this->isColumnModified(TarefaPeer::DT_PREVISAO)) $criteria->add(TarefaPeer::DT_PREVISAO, $this->dt_previsao);
		if ($this->isColumnModified(TarefaPeer::DT_FIM)) $criteria->add(TarefaPeer::DT_FIM, $this->dt_fim);
		if ($this->isColumnModified(TarefaPeer::CO_CATEGORIA)) $criteria->add(TarefaPeer::CO_CATEGORIA, $this->co_categoria);
		if ($this->isColumnModified(TarefaPeer::CO_NIVEL)) $criteria->add(TarefaPeer::CO_NIVEL, $this->co_nivel);
		if ($this->isColumnModified(TarefaPeer::CO_PRIORIDADE)) $criteria->add(TarefaPeer::CO_PRIORIDADE, $this->co_prioridade);
		if ($this->isColumnModified(TarefaPeer::CO_STATUS)) $criteria->add(TarefaPeer::CO_STATUS, $this->co_status);
		if ($this->isColumnModified(TarefaPeer::CO_USUARIO_FECHAMENTO)) $criteria->add(TarefaPeer::CO_USUARIO_FECHAMENTO, $this->co_usuario_fechamento);
		if ($this->isColumnModified(TarefaPeer::CO_SEQ_PROJ_VER_AMB)) $criteria->add(TarefaPeer::CO_SEQ_PROJ_VER_AMB, $this->co_seq_proj_ver_amb);
		if ($this->isColumnModified(TarefaPeer::CO_USUARIO_ABERTO)) $criteria->add(TarefaPeer::CO_USUARIO_ABERTO, $this->co_usuario_aberto);
		if ($this->isColumnModified(TarefaPeer::CO_USUARIO_ATUALIZACAO)) $criteria->add(TarefaPeer::CO_USUARIO_ATUALIZACAO, $this->co_usuario_atualizacao);
		if ($this->isColumnModified(TarefaPeer::NO_RESUMO)) $criteria->add(TarefaPeer::NO_RESUMO, $this->no_resumo);
		if ($this->isColumnModified(TarefaPeer::CO_ORGAO)) $criteria->add(TarefaPeer::CO_ORGAO, $this->co_orgao);
		if ($this->isColumnModified(TarefaPeer::EMAIL_ADICIONAIS)) $criteria->add(TarefaPeer::EMAIL_ADICIONAIS, $this->email_adicionais);
		if ($this->isColumnModified(TarefaPeer::CO_SEQ_MODULO_PROJ)) $criteria->add(TarefaPeer::CO_SEQ_MODULO_PROJ, $this->co_seq_modulo_proj);
		if ($this->isColumnModified(TarefaPeer::NR_TAREFA)) $criteria->add(TarefaPeer::NR_TAREFA, $this->nr_tarefa);
		if ($this->isColumnModified(TarefaPeer::NR_SIRIUS)) $criteria->add(TarefaPeer::NR_SIRIUS, $this->nr_sirius);
		if ($this->isColumnModified(TarefaPeer::CO_USUARIO_ATENDIMENTO)) $criteria->add(TarefaPeer::CO_USUARIO_ATENDIMENTO, $this->co_usuario_atendimento);

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
		$criteria = new Criteria(TarefaPeer::DATABASE_NAME);
		$criteria->add(TarefaPeer::CO_TAREFA, $this->co_tarefa);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getCoTarefa();
	}

	/**
	 * Generic method to set the primary key (co_tarefa column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setCoTarefa($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getCoTarefa();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Tarefa (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setDtInicio($this->getDtInicio());
		$copyObj->setDtPrevisao($this->getDtPrevisao());
		$copyObj->setDtFim($this->getDtFim());
		$copyObj->setCoCategoria($this->getCoCategoria());
		$copyObj->setCoNivel($this->getCoNivel());
		$copyObj->setCoPrioridade($this->getCoPrioridade());
		$copyObj->setCoStatus($this->getCoStatus());
		$copyObj->setCoUsuarioFechamento($this->getCoUsuarioFechamento());
		$copyObj->setCoSeqProjVerAmb($this->getCoSeqProjVerAmb());
		$copyObj->setCoUsuarioAberto($this->getCoUsuarioAberto());
		$copyObj->setCoUsuarioAtualizacao($this->getCoUsuarioAtualizacao());
		$copyObj->setNoResumo($this->getNoResumo());
		$copyObj->setCoOrgao($this->getCoOrgao());
		$copyObj->setEmailAdicionais($this->getEmailAdicionais());
		$copyObj->setCoSeqModuloProj($this->getCoSeqModuloProj());
		$copyObj->setNrTarefa($this->getNrTarefa());
		$copyObj->setNrSirius($this->getNrSirius());
		$copyObj->setCoUsuarioAtendimento($this->getCoUsuarioAtendimento());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getTbDescricaoChamados() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addTbDescricaoChamado($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getUsuarioTarefas() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addUsuarioTarefa($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setCoTarefa(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Tarefa Clone of current object.
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
	 * @return     TarefaPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new TarefaPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Orgao object.
	 *
	 * @param      Orgao $v
	 * @return     Tarefa The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setOrgao(Orgao $v = null)
	{
		if ($v === null) {
			$this->setCoOrgao(NULL);
		} else {
			$this->setCoOrgao($v->getCoOrgao());
		}

		$this->aOrgao = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Orgao object, it will not be re-added.
		if ($v !== null) {
			$v->addTarefa($this);
		}

		return $this;
	}


	/**
	 * Get the associated Orgao object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Orgao The associated Orgao object.
	 * @throws     PropelException
	 */
	public function getOrgao(PropelPDO $con = null)
	{
		if ($this->aOrgao === null && ($this->co_orgao !== null)) {
			$this->aOrgao = OrgaoQuery::create()->findPk($this->co_orgao, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aOrgao->addTarefas($this);
			 */
		}
		return $this->aOrgao;
	}

	/**
	 * Declares an association between this object and a RlProjetoVersaoAmb object.
	 *
	 * @param      RlProjetoVersaoAmb $v
	 * @return     Tarefa The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setRlProjetoVersaoAmb(RlProjetoVersaoAmb $v = null)
	{
		if ($v === null) {
			$this->setCoSeqProjVerAmb(NULL);
		} else {
			$this->setCoSeqProjVerAmb($v->getCoSeqProjVerAmb());
		}

		$this->aRlProjetoVersaoAmb = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the RlProjetoVersaoAmb object, it will not be re-added.
		if ($v !== null) {
			$v->addTarefa($this);
		}

		return $this;
	}


	/**
	 * Get the associated RlProjetoVersaoAmb object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     RlProjetoVersaoAmb The associated RlProjetoVersaoAmb object.
	 * @throws     PropelException
	 */
	public function getRlProjetoVersaoAmb(PropelPDO $con = null)
	{
		if ($this->aRlProjetoVersaoAmb === null && ($this->co_seq_proj_ver_amb !== null)) {
			$this->aRlProjetoVersaoAmb = RlProjetoVersaoAmbQuery::create()->findPk($this->co_seq_proj_ver_amb, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aRlProjetoVersaoAmb->addTarefas($this);
			 */
		}
		return $this->aRlProjetoVersaoAmb;
	}

	/**
	 * Declares an association between this object and a Categoria object.
	 *
	 * @param      Categoria $v
	 * @return     Tarefa The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCategoria(Categoria $v = null)
	{
		if ($v === null) {
			$this->setCoCategoria(1);
		} else {
			$this->setCoCategoria($v->getCoCategoria());
		}

		$this->aCategoria = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Categoria object, it will not be re-added.
		if ($v !== null) {
			$v->addTarefa($this);
		}

		return $this;
	}


	/**
	 * Get the associated Categoria object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Categoria The associated Categoria object.
	 * @throws     PropelException
	 */
	public function getCategoria(PropelPDO $con = null)
	{
		if ($this->aCategoria === null && ($this->co_categoria !== null)) {
			$this->aCategoria = CategoriaQuery::create()->findPk($this->co_categoria, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aCategoria->addTarefas($this);
			 */
		}
		return $this->aCategoria;
	}

	/**
	 * Declares an association between this object and a Nivel object.
	 *
	 * @param      Nivel $v
	 * @return     Tarefa The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNivel(Nivel $v = null)
	{
		if ($v === null) {
			$this->setCoNivel(1);
		} else {
			$this->setCoNivel($v->getCoNivel());
		}

		$this->aNivel = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Nivel object, it will not be re-added.
		if ($v !== null) {
			$v->addTarefa($this);
		}

		return $this;
	}


	/**
	 * Get the associated Nivel object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Nivel The associated Nivel object.
	 * @throws     PropelException
	 */
	public function getNivel(PropelPDO $con = null)
	{
		if ($this->aNivel === null && ($this->co_nivel !== null)) {
			$this->aNivel = NivelQuery::create()->findPk($this->co_nivel, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aNivel->addTarefas($this);
			 */
		}
		return $this->aNivel;
	}

	/**
	 * Declares an association between this object and a Prioridade object.
	 *
	 * @param      Prioridade $v
	 * @return     Tarefa The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setPrioridade(Prioridade $v = null)
	{
		if ($v === null) {
			$this->setCoPrioridade(1);
		} else {
			$this->setCoPrioridade($v->getCoPrioridade());
		}

		$this->aPrioridade = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Prioridade object, it will not be re-added.
		if ($v !== null) {
			$v->addTarefa($this);
		}

		return $this;
	}


	/**
	 * Get the associated Prioridade object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Prioridade The associated Prioridade object.
	 * @throws     PropelException
	 */
	public function getPrioridade(PropelPDO $con = null)
	{
		if ($this->aPrioridade === null && ($this->co_prioridade !== null)) {
			$this->aPrioridade = PrioridadeQuery::create()->findPk($this->co_prioridade, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aPrioridade->addTarefas($this);
			 */
		}
		return $this->aPrioridade;
	}

	/**
	 * Declares an association between this object and a Status object.
	 *
	 * @param      Status $v
	 * @return     Tarefa The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setStatus(Status $v = null)
	{
		if ($v === null) {
			$this->setCoStatus(1);
		} else {
			$this->setCoStatus($v->getCoStatus());
		}

		$this->aStatus = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Status object, it will not be re-added.
		if ($v !== null) {
			$v->addTarefa($this);
		}

		return $this;
	}


	/**
	 * Get the associated Status object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Status The associated Status object.
	 * @throws     PropelException
	 */
	public function getStatus(PropelPDO $con = null)
	{
		if ($this->aStatus === null && ($this->co_status !== null)) {
			$this->aStatus = StatusQuery::create()->findPk($this->co_status, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aStatus->addTarefas($this);
			 */
		}
		return $this->aStatus;
	}

	/**
	 * Declares an association between this object and a TbModuloProjeto object.
	 *
	 * @param      TbModuloProjeto $v
	 * @return     Tarefa The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setTbModuloProjeto(TbModuloProjeto $v = null)
	{
		if ($v === null) {
			$this->setCoSeqModuloProj(NULL);
		} else {
			$this->setCoSeqModuloProj($v->getCoSeqModuloProj());
		}

		$this->aTbModuloProjeto = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the TbModuloProjeto object, it will not be re-added.
		if ($v !== null) {
			$v->addTarefa($this);
		}

		return $this;
	}


	/**
	 * Get the associated TbModuloProjeto object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     TbModuloProjeto The associated TbModuloProjeto object.
	 * @throws     PropelException
	 */
	public function getTbModuloProjeto(PropelPDO $con = null)
	{
		if ($this->aTbModuloProjeto === null && ($this->co_seq_modulo_proj !== null)) {
			$this->aTbModuloProjeto = TbModuloProjetoQuery::create()->findPk($this->co_seq_modulo_proj, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aTbModuloProjeto->addTarefas($this);
			 */
		}
		return $this->aTbModuloProjeto;
	}


	/**
	 * Initializes a collection based on the name of a relation.
	 * Avoids crafting an 'init[$relationName]s' method name
	 * that wouldn't work when StandardEnglishPluralizer is used.
	 *
	 * @param      string $relationName The name of the relation to initialize
	 * @return     void
	 */
	public function initRelation($relationName)
	{
		if ('TbDescricaoChamado' == $relationName) {
			return $this->initTbDescricaoChamados();
		}
		if ('UsuarioTarefa' == $relationName) {
			return $this->initUsuarioTarefas();
		}
	}

	/**
	 * Clears out the collTbDescricaoChamados collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addTbDescricaoChamados()
	 */
	public function clearTbDescricaoChamados()
	{
		$this->collTbDescricaoChamados = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collTbDescricaoChamados collection.
	 *
	 * By default this just sets the collTbDescricaoChamados collection to an empty array (like clearcollTbDescricaoChamados());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initTbDescricaoChamados($overrideExisting = true)
	{
		if (null !== $this->collTbDescricaoChamados && !$overrideExisting) {
			return;
		}
		$this->collTbDescricaoChamados = new PropelObjectCollection();
		$this->collTbDescricaoChamados->setModel('TbDescricaoChamado');
	}

	/**
	 * Gets an array of TbDescricaoChamado objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Tarefa is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array TbDescricaoChamado[] List of TbDescricaoChamado objects
	 * @throws     PropelException
	 */
	public function getTbDescricaoChamados($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collTbDescricaoChamados || null !== $criteria) {
			if ($this->isNew() && null === $this->collTbDescricaoChamados) {
				// return empty collection
				$this->initTbDescricaoChamados();
			} else {
				$collTbDescricaoChamados = TbDescricaoChamadoQuery::create(null, $criteria)
					->filterByTarefa($this)
					->find($con);
				if (null !== $criteria) {
					return $collTbDescricaoChamados;
				}
				$this->collTbDescricaoChamados = $collTbDescricaoChamados;
			}
		}
		return $this->collTbDescricaoChamados;
	}

	/**
	 * Returns the number of related TbDescricaoChamado objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related TbDescricaoChamado objects.
	 * @throws     PropelException
	 */
	public function countTbDescricaoChamados(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collTbDescricaoChamados || null !== $criteria) {
			if ($this->isNew() && null === $this->collTbDescricaoChamados) {
				return 0;
			} else {
				$query = TbDescricaoChamadoQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByTarefa($this)
					->count($con);
			}
		} else {
			return count($this->collTbDescricaoChamados);
		}
	}

	/**
	 * Method called to associate a TbDescricaoChamado object to this object
	 * through the TbDescricaoChamado foreign key attribute.
	 *
	 * @param      TbDescricaoChamado $l TbDescricaoChamado
	 * @return     Tarefa The current object (for fluent API support)
	 */
	public function addTbDescricaoChamado(TbDescricaoChamado $l)
	{
		if ($this->collTbDescricaoChamados === null) {
			$this->initTbDescricaoChamados();
		}
		if (!$this->collTbDescricaoChamados->contains($l)) { // only add it if the **same** object is not already associated
			$this->collTbDescricaoChamados[]= $l;
			$l->setTarefa($this);
		}

		return $this;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Tarefa is new, it will return
	 * an empty collection; or if this Tarefa has previously
	 * been saved, it will retrieve related TbDescricaoChamados from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Tarefa.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array TbDescricaoChamado[] List of TbDescricaoChamado objects
	 */
	public function getTbDescricaoChamadosJoinUsuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TbDescricaoChamadoQuery::create(null, $criteria);
		$query->joinWith('Usuario', $join_behavior);

		return $this->getTbDescricaoChamados($query, $con);
	}

	/**
	 * Clears out the collUsuarioTarefas collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addUsuarioTarefas()
	 */
	public function clearUsuarioTarefas()
	{
		$this->collUsuarioTarefas = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collUsuarioTarefas collection.
	 *
	 * By default this just sets the collUsuarioTarefas collection to an empty array (like clearcollUsuarioTarefas());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initUsuarioTarefas($overrideExisting = true)
	{
		if (null !== $this->collUsuarioTarefas && !$overrideExisting) {
			return;
		}
		$this->collUsuarioTarefas = new PropelObjectCollection();
		$this->collUsuarioTarefas->setModel('UsuarioTarefa');
	}

	/**
	 * Gets an array of UsuarioTarefa objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Tarefa is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array UsuarioTarefa[] List of UsuarioTarefa objects
	 * @throws     PropelException
	 */
	public function getUsuarioTarefas($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collUsuarioTarefas || null !== $criteria) {
			if ($this->isNew() && null === $this->collUsuarioTarefas) {
				// return empty collection
				$this->initUsuarioTarefas();
			} else {
				$collUsuarioTarefas = UsuarioTarefaQuery::create(null, $criteria)
					->filterByTarefa($this)
					->find($con);
				if (null !== $criteria) {
					return $collUsuarioTarefas;
				}
				$this->collUsuarioTarefas = $collUsuarioTarefas;
			}
		}
		return $this->collUsuarioTarefas;
	}

	/**
	 * Returns the number of related UsuarioTarefa objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related UsuarioTarefa objects.
	 * @throws     PropelException
	 */
	public function countUsuarioTarefas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collUsuarioTarefas || null !== $criteria) {
			if ($this->isNew() && null === $this->collUsuarioTarefas) {
				return 0;
			} else {
				$query = UsuarioTarefaQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByTarefa($this)
					->count($con);
			}
		} else {
			return count($this->collUsuarioTarefas);
		}
	}

	/**
	 * Method called to associate a UsuarioTarefa object to this object
	 * through the UsuarioTarefa foreign key attribute.
	 *
	 * @param      UsuarioTarefa $l UsuarioTarefa
	 * @return     Tarefa The current object (for fluent API support)
	 */
	public function addUsuarioTarefa(UsuarioTarefa $l)
	{
		if ($this->collUsuarioTarefas === null) {
			$this->initUsuarioTarefas();
		}
		if (!$this->collUsuarioTarefas->contains($l)) { // only add it if the **same** object is not already associated
			$this->collUsuarioTarefas[]= $l;
			$l->setTarefa($this);
		}

		return $this;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Tarefa is new, it will return
	 * an empty collection; or if this Tarefa has previously
	 * been saved, it will retrieve related UsuarioTarefas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Tarefa.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array UsuarioTarefa[] List of UsuarioTarefa objects
	 */
	public function getUsuarioTarefasJoinStatus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = UsuarioTarefaQuery::create(null, $criteria);
		$query->joinWith('Status', $join_behavior);

		return $this->getUsuarioTarefas($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Tarefa is new, it will return
	 * an empty collection; or if this Tarefa has previously
	 * been saved, it will retrieve related UsuarioTarefas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Tarefa.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array UsuarioTarefa[] List of UsuarioTarefa objects
	 */
	public function getUsuarioTarefasJoinUsuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = UsuarioTarefaQuery::create(null, $criteria);
		$query->joinWith('Usuario', $join_behavior);

		return $this->getUsuarioTarefas($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->co_tarefa = null;
		$this->dt_inicio = null;
		$this->dt_previsao = null;
		$this->dt_fim = null;
		$this->co_categoria = null;
		$this->co_nivel = null;
		$this->co_prioridade = null;
		$this->co_status = null;
		$this->co_usuario_fechamento = null;
		$this->co_seq_proj_ver_amb = null;
		$this->co_usuario_aberto = null;
		$this->co_usuario_atualizacao = null;
		$this->no_resumo = null;
		$this->co_orgao = null;
		$this->email_adicionais = null;
		$this->co_seq_modulo_proj = null;
		$this->nr_tarefa = null;
		$this->nr_sirius = null;
		$this->co_usuario_atendimento = null;
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
			if ($this->collTbDescricaoChamados) {
				foreach ($this->collTbDescricaoChamados as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collUsuarioTarefas) {
				foreach ($this->collUsuarioTarefas as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collTbDescricaoChamados instanceof PropelCollection) {
			$this->collTbDescricaoChamados->clearIterator();
		}
		$this->collTbDescricaoChamados = null;
		if ($this->collUsuarioTarefas instanceof PropelCollection) {
			$this->collUsuarioTarefas->clearIterator();
		}
		$this->collUsuarioTarefas = null;
		$this->aOrgao = null;
		$this->aRlProjetoVersaoAmb = null;
		$this->aCategoria = null;
		$this->aNivel = null;
		$this->aPrioridade = null;
		$this->aStatus = null;
		$this->aTbModuloProjeto = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(TarefaPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseTarefa
