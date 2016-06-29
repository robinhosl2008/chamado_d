<?php


/**
 * Base class that represents a row from the 'usuario' table.
 *
 * 
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseUsuario extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'UsuarioPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        UsuarioPeer
	 */
	protected static $peer;

	/**
	 * The value for the co_usuario field.
	 * @var        int
	 */
	protected $co_usuario;

	/**
	 * The value for the nu_cpf field.
	 * @var        string
	 */
	protected $nu_cpf;

	/**
	 * The value for the ds_password field.
	 * @var        string
	 */
	protected $ds_password;

	/**
	 * The value for the no_usuario field.
	 * @var        string
	 */
	protected $no_usuario;

	/**
	 * The value for the ds_login field.
	 * @var        string
	 */
	protected $ds_login;

	/**
	 * The value for the dt_ultimo_login field.
	 * @var        string
	 */
	protected $dt_ultimo_login;

	/**
	 * The value for the ds_email field.
	 * @var        string
	 */
	protected $ds_email;

	/**
	 * The value for the co_perfil field.
	 * @var        int
	 */
	protected $co_perfil;

	/**
	 * The value for the nu_celular field.
	 * @var        string
	 */
	protected $nu_celular;

	/**
	 * The value for the nu_telefone field.
	 * @var        string
	 */
	protected $nu_telefone;

	/**
	 * The value for the st_usuario field.
	 * Note: this column has a database default value of: true
	 * @var        boolean
	 */
	protected $st_usuario;

	/**
	 * @var        Perfil
	 */
	protected $aPerfil;

	/**
	 * @var        array Permissao[] Collection to store aggregation of Permissao objects.
	 */
	protected $collPermissaosRelatedByCoUsuarioAlteracao;

	/**
	 * @var        array Permissao[] Collection to store aggregation of Permissao objects.
	 */
	protected $collPermissaosRelatedByCoUsuarioCadastro;

	/**
	 * @var        array RlUsuarioOrgao[] Collection to store aggregation of RlUsuarioOrgao objects.
	 */
	protected $collRlUsuarioOrgaos;

	/**
	 * @var        array TbDescricaoChamado[] Collection to store aggregation of TbDescricaoChamado objects.
	 */
	protected $collTbDescricaoChamados;

	/**
	 * @var        array UsuarioCategoria[] Collection to store aggregation of UsuarioCategoria objects.
	 */
	protected $collUsuarioCategorias;

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
		$this->st_usuario = true;
	}

	/**
	 * Initializes internal state of BaseUsuario object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [co_usuario] column value.
	 * 
	 * @return     int
	 */
	public function getCoUsuario()
	{
		return $this->co_usuario;
	}

	/**
	 * Get the [nu_cpf] column value.
	 * 
	 * @return     string
	 */
	public function getNuCpf()
	{
		return $this->nu_cpf;
	}

	/**
	 * Get the [ds_password] column value.
	 * 
	 * @return     string
	 */
	public function getDsPassword()
	{
		return $this->ds_password;
	}

	/**
	 * Get the [no_usuario] column value.
	 * 
	 * @return     string
	 */
	public function getNoUsuario()
	{
		return $this->no_usuario;
	}

	/**
	 * Get the [ds_login] column value.
	 * 
	 * @return     string
	 */
	public function getDsLogin()
	{
		return $this->ds_login;
	}

	/**
	 * Get the [optionally formatted] temporal [dt_ultimo_login] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDtUltimoLogin($format = 'd-m-Y H:i:s')
	{
		if ($this->dt_ultimo_login === null) {
			return null;
		}



		try {
			$dt = new DateTime($this->dt_ultimo_login);
		} catch (Exception $x) {
			throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dt_ultimo_login, true), $x);
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
	 * Get the [ds_email] column value.
	 * 
	 * @return     string
	 */
	public function getDsEmail()
	{
		return $this->ds_email;
	}

	/**
	 * Get the [co_perfil] column value.
	 * 
	 * @return     int
	 */
	public function getCoPerfil()
	{
		return $this->co_perfil;
	}

	/**
	 * Get the [nu_celular] column value.
	 * 
	 * @return     string
	 */
	public function getNuCelular()
	{
		return $this->nu_celular;
	}

	/**
	 * Get the [nu_telefone] column value.
	 * 
	 * @return     string
	 */
	public function getNuTelefone()
	{
		return $this->nu_telefone;
	}

	/**
	 * Get the [st_usuario] column value.
	 * 
	 * @return     boolean
	 */
	public function getStUsuario()
	{
		return $this->st_usuario;
	}

	/**
	 * Set the value of [co_usuario] column.
	 * 
	 * @param      int $v new value
	 * @return     Usuario The current object (for fluent API support)
	 */
	public function setCoUsuario($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_usuario !== $v) {
			$this->co_usuario = $v;
			$this->modifiedColumns[] = UsuarioPeer::CO_USUARIO;
		}

		return $this;
	} // setCoUsuario()

	/**
	 * Set the value of [nu_cpf] column.
	 * 
	 * @param      string $v new value
	 * @return     Usuario The current object (for fluent API support)
	 */
	public function setNuCpf($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->nu_cpf !== $v) {
			$this->nu_cpf = $v;
			$this->modifiedColumns[] = UsuarioPeer::NU_CPF;
		}

		return $this;
	} // setNuCpf()

	/**
	 * Set the value of [ds_password] column.
	 * 
	 * @param      string $v new value
	 * @return     Usuario The current object (for fluent API support)
	 */
	public function setDsPassword($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ds_password !== $v) {
			$this->ds_password = $v;
			$this->modifiedColumns[] = UsuarioPeer::DS_PASSWORD;
		}

		return $this;
	} // setDsPassword()

	/**
	 * Set the value of [no_usuario] column.
	 * 
	 * @param      string $v new value
	 * @return     Usuario The current object (for fluent API support)
	 */
	public function setNoUsuario($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->no_usuario !== $v) {
			$this->no_usuario = $v;
			$this->modifiedColumns[] = UsuarioPeer::NO_USUARIO;
		}

		return $this;
	} // setNoUsuario()

	/**
	 * Set the value of [ds_login] column.
	 * 
	 * @param      string $v new value
	 * @return     Usuario The current object (for fluent API support)
	 */
	public function setDsLogin($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ds_login !== $v) {
			$this->ds_login = $v;
			$this->modifiedColumns[] = UsuarioPeer::DS_LOGIN;
		}

		return $this;
	} // setDsLogin()

	/**
	 * Sets the value of [dt_ultimo_login] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Usuario The current object (for fluent API support)
	 */
	public function setDtUltimoLogin($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->dt_ultimo_login !== null || $dt !== null) {
			$currentDateAsString = ($this->dt_ultimo_login !== null && $tmpDt = new DateTime($this->dt_ultimo_login)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->dt_ultimo_login = $newDateAsString;
				$this->modifiedColumns[] = UsuarioPeer::DT_ULTIMO_LOGIN;
			}
		} // if either are not null

		return $this;
	} // setDtUltimoLogin()

	/**
	 * Set the value of [ds_email] column.
	 * 
	 * @param      string $v new value
	 * @return     Usuario The current object (for fluent API support)
	 */
	public function setDsEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ds_email !== $v) {
			$this->ds_email = $v;
			$this->modifiedColumns[] = UsuarioPeer::DS_EMAIL;
		}

		return $this;
	} // setDsEmail()

	/**
	 * Set the value of [co_perfil] column.
	 * 
	 * @param      int $v new value
	 * @return     Usuario The current object (for fluent API support)
	 */
	public function setCoPerfil($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_perfil !== $v) {
			$this->co_perfil = $v;
			$this->modifiedColumns[] = UsuarioPeer::CO_PERFIL;
		}

		if ($this->aPerfil !== null && $this->aPerfil->getCoPerfil() !== $v) {
			$this->aPerfil = null;
		}

		return $this;
	} // setCoPerfil()

	/**
	 * Set the value of [nu_celular] column.
	 * 
	 * @param      string $v new value
	 * @return     Usuario The current object (for fluent API support)
	 */
	public function setNuCelular($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->nu_celular !== $v) {
			$this->nu_celular = $v;
			$this->modifiedColumns[] = UsuarioPeer::NU_CELULAR;
		}

		return $this;
	} // setNuCelular()

	/**
	 * Set the value of [nu_telefone] column.
	 * 
	 * @param      string $v new value
	 * @return     Usuario The current object (for fluent API support)
	 */
	public function setNuTelefone($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->nu_telefone !== $v) {
			$this->nu_telefone = $v;
			$this->modifiedColumns[] = UsuarioPeer::NU_TELEFONE;
		}

		return $this;
	} // setNuTelefone()

	/**
	 * Sets the value of the [st_usuario] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Usuario The current object (for fluent API support)
	 */
	public function setStUsuario($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->st_usuario !== $v) {
			$this->st_usuario = $v;
			$this->modifiedColumns[] = UsuarioPeer::ST_USUARIO;
		}

		return $this;
	} // setStUsuario()

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
			if ($this->st_usuario !== true) {
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

			$this->co_usuario = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->nu_cpf = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->ds_password = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->no_usuario = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->ds_login = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->dt_ultimo_login = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->ds_email = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->co_perfil = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->nu_celular = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->nu_telefone = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->st_usuario = ($row[$startcol + 10] !== null) ? (boolean) $row[$startcol + 10] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 11; // 11 = UsuarioPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Usuario object", $e);
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

		if ($this->aPerfil !== null && $this->co_perfil !== $this->aPerfil->getCoPerfil()) {
			$this->aPerfil = null;
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
			$con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = UsuarioPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aPerfil = null;
			$this->collPermissaosRelatedByCoUsuarioAlteracao = null;

			$this->collPermissaosRelatedByCoUsuarioCadastro = null;

			$this->collRlUsuarioOrgaos = null;

			$this->collTbDescricaoChamados = null;

			$this->collUsuarioCategorias = null;

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
			$con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = UsuarioQuery::create()
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
			$con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				UsuarioPeer::addInstanceToPool($this);
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

			if ($this->aPerfil !== null) {
				if ($this->aPerfil->isModified() || $this->aPerfil->isNew()) {
					$affectedRows += $this->aPerfil->save($con);
				}
				$this->setPerfil($this->aPerfil);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = UsuarioPeer::CO_USUARIO;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(UsuarioPeer::CO_USUARIO) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.UsuarioPeer::CO_USUARIO.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setCoUsuario($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += UsuarioPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collPermissaosRelatedByCoUsuarioAlteracao !== null) {
				foreach ($this->collPermissaosRelatedByCoUsuarioAlteracao as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collPermissaosRelatedByCoUsuarioCadastro !== null) {
				foreach ($this->collPermissaosRelatedByCoUsuarioCadastro as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collRlUsuarioOrgaos !== null) {
				foreach ($this->collRlUsuarioOrgaos as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collTbDescricaoChamados !== null) {
				foreach ($this->collTbDescricaoChamados as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collUsuarioCategorias !== null) {
				foreach ($this->collUsuarioCategorias as $referrerFK) {
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

			if ($this->aPerfil !== null) {
				if (!$this->aPerfil->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aPerfil->getValidationFailures());
				}
			}


			if (($retval = UsuarioPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collPermissaosRelatedByCoUsuarioAlteracao !== null) {
					foreach ($this->collPermissaosRelatedByCoUsuarioAlteracao as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collPermissaosRelatedByCoUsuarioCadastro !== null) {
					foreach ($this->collPermissaosRelatedByCoUsuarioCadastro as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collRlUsuarioOrgaos !== null) {
					foreach ($this->collRlUsuarioOrgaos as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTbDescricaoChamados !== null) {
					foreach ($this->collTbDescricaoChamados as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collUsuarioCategorias !== null) {
					foreach ($this->collUsuarioCategorias as $referrerFK) {
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
		$pos = UsuarioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCoUsuario();
				break;
			case 1:
				return $this->getNuCpf();
				break;
			case 2:
				return $this->getDsPassword();
				break;
			case 3:
				return $this->getNoUsuario();
				break;
			case 4:
				return $this->getDsLogin();
				break;
			case 5:
				return $this->getDtUltimoLogin();
				break;
			case 6:
				return $this->getDsEmail();
				break;
			case 7:
				return $this->getCoPerfil();
				break;
			case 8:
				return $this->getNuCelular();
				break;
			case 9:
				return $this->getNuTelefone();
				break;
			case 10:
				return $this->getStUsuario();
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
		if (isset($alreadyDumpedObjects['Usuario'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Usuario'][$this->getPrimaryKey()] = true;
		$keys = UsuarioPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCoUsuario(),
			$keys[1] => $this->getNuCpf(),
			$keys[2] => $this->getDsPassword(),
			$keys[3] => $this->getNoUsuario(),
			$keys[4] => $this->getDsLogin(),
			$keys[5] => $this->getDtUltimoLogin(),
			$keys[6] => $this->getDsEmail(),
			$keys[7] => $this->getCoPerfil(),
			$keys[8] => $this->getNuCelular(),
			$keys[9] => $this->getNuTelefone(),
			$keys[10] => $this->getStUsuario(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aPerfil) {
				$result['Perfil'] = $this->aPerfil->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->collPermissaosRelatedByCoUsuarioAlteracao) {
				$result['PermissaosRelatedByCoUsuarioAlteracao'] = $this->collPermissaosRelatedByCoUsuarioAlteracao->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collPermissaosRelatedByCoUsuarioCadastro) {
				$result['PermissaosRelatedByCoUsuarioCadastro'] = $this->collPermissaosRelatedByCoUsuarioCadastro->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collRlUsuarioOrgaos) {
				$result['RlUsuarioOrgaos'] = $this->collRlUsuarioOrgaos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collTbDescricaoChamados) {
				$result['TbDescricaoChamados'] = $this->collTbDescricaoChamados->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collUsuarioCategorias) {
				$result['UsuarioCategorias'] = $this->collUsuarioCategorias->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = UsuarioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCoUsuario($value);
				break;
			case 1:
				$this->setNuCpf($value);
				break;
			case 2:
				$this->setDsPassword($value);
				break;
			case 3:
				$this->setNoUsuario($value);
				break;
			case 4:
				$this->setDsLogin($value);
				break;
			case 5:
				$this->setDtUltimoLogin($value);
				break;
			case 6:
				$this->setDsEmail($value);
				break;
			case 7:
				$this->setCoPerfil($value);
				break;
			case 8:
				$this->setNuCelular($value);
				break;
			case 9:
				$this->setNuTelefone($value);
				break;
			case 10:
				$this->setStUsuario($value);
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
		$keys = UsuarioPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoUsuario($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNuCpf($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDsPassword($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setNoUsuario($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDsLogin($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDtUltimoLogin($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDsEmail($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCoPerfil($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setNuCelular($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setNuTelefone($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setStUsuario($arr[$keys[10]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(UsuarioPeer::DATABASE_NAME);

		if ($this->isColumnModified(UsuarioPeer::CO_USUARIO)) $criteria->add(UsuarioPeer::CO_USUARIO, $this->co_usuario);
		if ($this->isColumnModified(UsuarioPeer::NU_CPF)) $criteria->add(UsuarioPeer::NU_CPF, $this->nu_cpf);
		if ($this->isColumnModified(UsuarioPeer::DS_PASSWORD)) $criteria->add(UsuarioPeer::DS_PASSWORD, $this->ds_password);
		if ($this->isColumnModified(UsuarioPeer::NO_USUARIO)) $criteria->add(UsuarioPeer::NO_USUARIO, $this->no_usuario);
		if ($this->isColumnModified(UsuarioPeer::DS_LOGIN)) $criteria->add(UsuarioPeer::DS_LOGIN, $this->ds_login);
		if ($this->isColumnModified(UsuarioPeer::DT_ULTIMO_LOGIN)) $criteria->add(UsuarioPeer::DT_ULTIMO_LOGIN, $this->dt_ultimo_login);
		if ($this->isColumnModified(UsuarioPeer::DS_EMAIL)) $criteria->add(UsuarioPeer::DS_EMAIL, $this->ds_email);
		if ($this->isColumnModified(UsuarioPeer::CO_PERFIL)) $criteria->add(UsuarioPeer::CO_PERFIL, $this->co_perfil);
		if ($this->isColumnModified(UsuarioPeer::NU_CELULAR)) $criteria->add(UsuarioPeer::NU_CELULAR, $this->nu_celular);
		if ($this->isColumnModified(UsuarioPeer::NU_TELEFONE)) $criteria->add(UsuarioPeer::NU_TELEFONE, $this->nu_telefone);
		if ($this->isColumnModified(UsuarioPeer::ST_USUARIO)) $criteria->add(UsuarioPeer::ST_USUARIO, $this->st_usuario);

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
		$criteria = new Criteria(UsuarioPeer::DATABASE_NAME);
		$criteria->add(UsuarioPeer::CO_USUARIO, $this->co_usuario);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getCoUsuario();
	}

	/**
	 * Generic method to set the primary key (co_usuario column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setCoUsuario($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getCoUsuario();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Usuario (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setNuCpf($this->getNuCpf());
		$copyObj->setDsPassword($this->getDsPassword());
		$copyObj->setNoUsuario($this->getNoUsuario());
		$copyObj->setDsLogin($this->getDsLogin());
		$copyObj->setDtUltimoLogin($this->getDtUltimoLogin());
		$copyObj->setDsEmail($this->getDsEmail());
		$copyObj->setCoPerfil($this->getCoPerfil());
		$copyObj->setNuCelular($this->getNuCelular());
		$copyObj->setNuTelefone($this->getNuTelefone());
		$copyObj->setStUsuario($this->getStUsuario());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getPermissaosRelatedByCoUsuarioAlteracao() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addPermissaoRelatedByCoUsuarioAlteracao($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getPermissaosRelatedByCoUsuarioCadastro() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addPermissaoRelatedByCoUsuarioCadastro($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getRlUsuarioOrgaos() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addRlUsuarioOrgao($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getTbDescricaoChamados() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addTbDescricaoChamado($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getUsuarioCategorias() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addUsuarioCategoria($relObj->copy($deepCopy));
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
			$copyObj->setCoUsuario(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Usuario Clone of current object.
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
	 * @return     UsuarioPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new UsuarioPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Perfil object.
	 *
	 * @param      Perfil $v
	 * @return     Usuario The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setPerfil(Perfil $v = null)
	{
		if ($v === null) {
			$this->setCoPerfil(NULL);
		} else {
			$this->setCoPerfil($v->getCoPerfil());
		}

		$this->aPerfil = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Perfil object, it will not be re-added.
		if ($v !== null) {
			$v->addUsuario($this);
		}

		return $this;
	}


	/**
	 * Get the associated Perfil object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Perfil The associated Perfil object.
	 * @throws     PropelException
	 */
	public function getPerfil(PropelPDO $con = null)
	{
		if ($this->aPerfil === null && ($this->co_perfil !== null)) {
			$this->aPerfil = PerfilQuery::create()->findPk($this->co_perfil, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aPerfil->addUsuarios($this);
			 */
		}
		return $this->aPerfil;
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
		if ('PermissaoRelatedByCoUsuarioAlteracao' == $relationName) {
			return $this->initPermissaosRelatedByCoUsuarioAlteracao();
		}
		if ('PermissaoRelatedByCoUsuarioCadastro' == $relationName) {
			return $this->initPermissaosRelatedByCoUsuarioCadastro();
		}
		if ('RlUsuarioOrgao' == $relationName) {
			return $this->initRlUsuarioOrgaos();
		}
		if ('TbDescricaoChamado' == $relationName) {
			return $this->initTbDescricaoChamados();
		}
		if ('UsuarioCategoria' == $relationName) {
			return $this->initUsuarioCategorias();
		}
		if ('UsuarioTarefa' == $relationName) {
			return $this->initUsuarioTarefas();
		}
	}

	/**
	 * Clears out the collPermissaosRelatedByCoUsuarioAlteracao collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addPermissaosRelatedByCoUsuarioAlteracao()
	 */
	public function clearPermissaosRelatedByCoUsuarioAlteracao()
	{
		$this->collPermissaosRelatedByCoUsuarioAlteracao = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collPermissaosRelatedByCoUsuarioAlteracao collection.
	 *
	 * By default this just sets the collPermissaosRelatedByCoUsuarioAlteracao collection to an empty array (like clearcollPermissaosRelatedByCoUsuarioAlteracao());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initPermissaosRelatedByCoUsuarioAlteracao($overrideExisting = true)
	{
		if (null !== $this->collPermissaosRelatedByCoUsuarioAlteracao && !$overrideExisting) {
			return;
		}
		$this->collPermissaosRelatedByCoUsuarioAlteracao = new PropelObjectCollection();
		$this->collPermissaosRelatedByCoUsuarioAlteracao->setModel('Permissao');
	}

	/**
	 * Gets an array of Permissao objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Usuario is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Permissao[] List of Permissao objects
	 * @throws     PropelException
	 */
	public function getPermissaosRelatedByCoUsuarioAlteracao($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collPermissaosRelatedByCoUsuarioAlteracao || null !== $criteria) {
			if ($this->isNew() && null === $this->collPermissaosRelatedByCoUsuarioAlteracao) {
				// return empty collection
				$this->initPermissaosRelatedByCoUsuarioAlteracao();
			} else {
				$collPermissaosRelatedByCoUsuarioAlteracao = PermissaoQuery::create(null, $criteria)
					->filterByUsuarioRelatedByCoUsuarioAlteracao($this)
					->find($con);
				if (null !== $criteria) {
					return $collPermissaosRelatedByCoUsuarioAlteracao;
				}
				$this->collPermissaosRelatedByCoUsuarioAlteracao = $collPermissaosRelatedByCoUsuarioAlteracao;
			}
		}
		return $this->collPermissaosRelatedByCoUsuarioAlteracao;
	}

	/**
	 * Returns the number of related Permissao objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Permissao objects.
	 * @throws     PropelException
	 */
	public function countPermissaosRelatedByCoUsuarioAlteracao(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collPermissaosRelatedByCoUsuarioAlteracao || null !== $criteria) {
			if ($this->isNew() && null === $this->collPermissaosRelatedByCoUsuarioAlteracao) {
				return 0;
			} else {
				$query = PermissaoQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUsuarioRelatedByCoUsuarioAlteracao($this)
					->count($con);
			}
		} else {
			return count($this->collPermissaosRelatedByCoUsuarioAlteracao);
		}
	}

	/**
	 * Method called to associate a Permissao object to this object
	 * through the Permissao foreign key attribute.
	 *
	 * @param      Permissao $l Permissao
	 * @return     Usuario The current object (for fluent API support)
	 */
	public function addPermissaoRelatedByCoUsuarioAlteracao(Permissao $l)
	{
		if ($this->collPermissaosRelatedByCoUsuarioAlteracao === null) {
			$this->initPermissaosRelatedByCoUsuarioAlteracao();
		}
		if (!$this->collPermissaosRelatedByCoUsuarioAlteracao->contains($l)) { // only add it if the **same** object is not already associated
			$this->collPermissaosRelatedByCoUsuarioAlteracao[]= $l;
			$l->setUsuarioRelatedByCoUsuarioAlteracao($this);
		}

		return $this;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Usuario is new, it will return
	 * an empty collection; or if this Usuario has previously
	 * been saved, it will retrieve related PermissaosRelatedByCoUsuarioAlteracao from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Usuario.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Permissao[] List of Permissao objects
	 */
	public function getPermissaosRelatedByCoUsuarioAlteracaoJoinPerfil($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = PermissaoQuery::create(null, $criteria);
		$query->joinWith('Perfil', $join_behavior);

		return $this->getPermissaosRelatedByCoUsuarioAlteracao($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Usuario is new, it will return
	 * an empty collection; or if this Usuario has previously
	 * been saved, it will retrieve related PermissaosRelatedByCoUsuarioAlteracao from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Usuario.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Permissao[] List of Permissao objects
	 */
	public function getPermissaosRelatedByCoUsuarioAlteracaoJoinRecurso($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = PermissaoQuery::create(null, $criteria);
		$query->joinWith('Recurso', $join_behavior);

		return $this->getPermissaosRelatedByCoUsuarioAlteracao($query, $con);
	}

	/**
	 * Clears out the collPermissaosRelatedByCoUsuarioCadastro collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addPermissaosRelatedByCoUsuarioCadastro()
	 */
	public function clearPermissaosRelatedByCoUsuarioCadastro()
	{
		$this->collPermissaosRelatedByCoUsuarioCadastro = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collPermissaosRelatedByCoUsuarioCadastro collection.
	 *
	 * By default this just sets the collPermissaosRelatedByCoUsuarioCadastro collection to an empty array (like clearcollPermissaosRelatedByCoUsuarioCadastro());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initPermissaosRelatedByCoUsuarioCadastro($overrideExisting = true)
	{
		if (null !== $this->collPermissaosRelatedByCoUsuarioCadastro && !$overrideExisting) {
			return;
		}
		$this->collPermissaosRelatedByCoUsuarioCadastro = new PropelObjectCollection();
		$this->collPermissaosRelatedByCoUsuarioCadastro->setModel('Permissao');
	}

	/**
	 * Gets an array of Permissao objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Usuario is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Permissao[] List of Permissao objects
	 * @throws     PropelException
	 */
	public function getPermissaosRelatedByCoUsuarioCadastro($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collPermissaosRelatedByCoUsuarioCadastro || null !== $criteria) {
			if ($this->isNew() && null === $this->collPermissaosRelatedByCoUsuarioCadastro) {
				// return empty collection
				$this->initPermissaosRelatedByCoUsuarioCadastro();
			} else {
				$collPermissaosRelatedByCoUsuarioCadastro = PermissaoQuery::create(null, $criteria)
					->filterByUsuarioRelatedByCoUsuarioCadastro($this)
					->find($con);
				if (null !== $criteria) {
					return $collPermissaosRelatedByCoUsuarioCadastro;
				}
				$this->collPermissaosRelatedByCoUsuarioCadastro = $collPermissaosRelatedByCoUsuarioCadastro;
			}
		}
		return $this->collPermissaosRelatedByCoUsuarioCadastro;
	}

	/**
	 * Returns the number of related Permissao objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Permissao objects.
	 * @throws     PropelException
	 */
	public function countPermissaosRelatedByCoUsuarioCadastro(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collPermissaosRelatedByCoUsuarioCadastro || null !== $criteria) {
			if ($this->isNew() && null === $this->collPermissaosRelatedByCoUsuarioCadastro) {
				return 0;
			} else {
				$query = PermissaoQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUsuarioRelatedByCoUsuarioCadastro($this)
					->count($con);
			}
		} else {
			return count($this->collPermissaosRelatedByCoUsuarioCadastro);
		}
	}

	/**
	 * Method called to associate a Permissao object to this object
	 * through the Permissao foreign key attribute.
	 *
	 * @param      Permissao $l Permissao
	 * @return     Usuario The current object (for fluent API support)
	 */
	public function addPermissaoRelatedByCoUsuarioCadastro(Permissao $l)
	{
		if ($this->collPermissaosRelatedByCoUsuarioCadastro === null) {
			$this->initPermissaosRelatedByCoUsuarioCadastro();
		}
		if (!$this->collPermissaosRelatedByCoUsuarioCadastro->contains($l)) { // only add it if the **same** object is not already associated
			$this->collPermissaosRelatedByCoUsuarioCadastro[]= $l;
			$l->setUsuarioRelatedByCoUsuarioCadastro($this);
		}

		return $this;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Usuario is new, it will return
	 * an empty collection; or if this Usuario has previously
	 * been saved, it will retrieve related PermissaosRelatedByCoUsuarioCadastro from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Usuario.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Permissao[] List of Permissao objects
	 */
	public function getPermissaosRelatedByCoUsuarioCadastroJoinPerfil($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = PermissaoQuery::create(null, $criteria);
		$query->joinWith('Perfil', $join_behavior);

		return $this->getPermissaosRelatedByCoUsuarioCadastro($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Usuario is new, it will return
	 * an empty collection; or if this Usuario has previously
	 * been saved, it will retrieve related PermissaosRelatedByCoUsuarioCadastro from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Usuario.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Permissao[] List of Permissao objects
	 */
	public function getPermissaosRelatedByCoUsuarioCadastroJoinRecurso($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = PermissaoQuery::create(null, $criteria);
		$query->joinWith('Recurso', $join_behavior);

		return $this->getPermissaosRelatedByCoUsuarioCadastro($query, $con);
	}

	/**
	 * Clears out the collRlUsuarioOrgaos collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addRlUsuarioOrgaos()
	 */
	public function clearRlUsuarioOrgaos()
	{
		$this->collRlUsuarioOrgaos = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collRlUsuarioOrgaos collection.
	 *
	 * By default this just sets the collRlUsuarioOrgaos collection to an empty array (like clearcollRlUsuarioOrgaos());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initRlUsuarioOrgaos($overrideExisting = true)
	{
		if (null !== $this->collRlUsuarioOrgaos && !$overrideExisting) {
			return;
		}
		$this->collRlUsuarioOrgaos = new PropelObjectCollection();
		$this->collRlUsuarioOrgaos->setModel('RlUsuarioOrgao');
	}

	/**
	 * Gets an array of RlUsuarioOrgao objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Usuario is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array RlUsuarioOrgao[] List of RlUsuarioOrgao objects
	 * @throws     PropelException
	 */
	public function getRlUsuarioOrgaos($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collRlUsuarioOrgaos || null !== $criteria) {
			if ($this->isNew() && null === $this->collRlUsuarioOrgaos) {
				// return empty collection
				$this->initRlUsuarioOrgaos();
			} else {
				$collRlUsuarioOrgaos = RlUsuarioOrgaoQuery::create(null, $criteria)
					->filterByUsuario($this)
					->find($con);
				if (null !== $criteria) {
					return $collRlUsuarioOrgaos;
				}
				$this->collRlUsuarioOrgaos = $collRlUsuarioOrgaos;
			}
		}
		return $this->collRlUsuarioOrgaos;
	}

	/**
	 * Returns the number of related RlUsuarioOrgao objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related RlUsuarioOrgao objects.
	 * @throws     PropelException
	 */
	public function countRlUsuarioOrgaos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collRlUsuarioOrgaos || null !== $criteria) {
			if ($this->isNew() && null === $this->collRlUsuarioOrgaos) {
				return 0;
			} else {
				$query = RlUsuarioOrgaoQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUsuario($this)
					->count($con);
			}
		} else {
			return count($this->collRlUsuarioOrgaos);
		}
	}

	/**
	 * Method called to associate a RlUsuarioOrgao object to this object
	 * through the RlUsuarioOrgao foreign key attribute.
	 *
	 * @param      RlUsuarioOrgao $l RlUsuarioOrgao
	 * @return     Usuario The current object (for fluent API support)
	 */
	public function addRlUsuarioOrgao(RlUsuarioOrgao $l)
	{
		if ($this->collRlUsuarioOrgaos === null) {
			$this->initRlUsuarioOrgaos();
		}
		if (!$this->collRlUsuarioOrgaos->contains($l)) { // only add it if the **same** object is not already associated
			$this->collRlUsuarioOrgaos[]= $l;
			$l->setUsuario($this);
		}

		return $this;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Usuario is new, it will return
	 * an empty collection; or if this Usuario has previously
	 * been saved, it will retrieve related RlUsuarioOrgaos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Usuario.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array RlUsuarioOrgao[] List of RlUsuarioOrgao objects
	 */
	public function getRlUsuarioOrgaosJoinOrgao($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = RlUsuarioOrgaoQuery::create(null, $criteria);
		$query->joinWith('Orgao', $join_behavior);

		return $this->getRlUsuarioOrgaos($query, $con);
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
	 * If this Usuario is new, it will return
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
					->filterByUsuario($this)
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
					->filterByUsuario($this)
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
	 * @return     Usuario The current object (for fluent API support)
	 */
	public function addTbDescricaoChamado(TbDescricaoChamado $l)
	{
		if ($this->collTbDescricaoChamados === null) {
			$this->initTbDescricaoChamados();
		}
		if (!$this->collTbDescricaoChamados->contains($l)) { // only add it if the **same** object is not already associated
			$this->collTbDescricaoChamados[]= $l;
			$l->setUsuario($this);
		}

		return $this;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Usuario is new, it will return
	 * an empty collection; or if this Usuario has previously
	 * been saved, it will retrieve related TbDescricaoChamados from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Usuario.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array TbDescricaoChamado[] List of TbDescricaoChamado objects
	 */
	public function getTbDescricaoChamadosJoinTarefa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TbDescricaoChamadoQuery::create(null, $criteria);
		$query->joinWith('Tarefa', $join_behavior);

		return $this->getTbDescricaoChamados($query, $con);
	}

	/**
	 * Clears out the collUsuarioCategorias collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addUsuarioCategorias()
	 */
	public function clearUsuarioCategorias()
	{
		$this->collUsuarioCategorias = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collUsuarioCategorias collection.
	 *
	 * By default this just sets the collUsuarioCategorias collection to an empty array (like clearcollUsuarioCategorias());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initUsuarioCategorias($overrideExisting = true)
	{
		if (null !== $this->collUsuarioCategorias && !$overrideExisting) {
			return;
		}
		$this->collUsuarioCategorias = new PropelObjectCollection();
		$this->collUsuarioCategorias->setModel('UsuarioCategoria');
	}

	/**
	 * Gets an array of UsuarioCategoria objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Usuario is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array UsuarioCategoria[] List of UsuarioCategoria objects
	 * @throws     PropelException
	 */
	public function getUsuarioCategorias($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collUsuarioCategorias || null !== $criteria) {
			if ($this->isNew() && null === $this->collUsuarioCategorias) {
				// return empty collection
				$this->initUsuarioCategorias();
			} else {
				$collUsuarioCategorias = UsuarioCategoriaQuery::create(null, $criteria)
					->filterByUsuario($this)
					->find($con);
				if (null !== $criteria) {
					return $collUsuarioCategorias;
				}
				$this->collUsuarioCategorias = $collUsuarioCategorias;
			}
		}
		return $this->collUsuarioCategorias;
	}

	/**
	 * Returns the number of related UsuarioCategoria objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related UsuarioCategoria objects.
	 * @throws     PropelException
	 */
	public function countUsuarioCategorias(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collUsuarioCategorias || null !== $criteria) {
			if ($this->isNew() && null === $this->collUsuarioCategorias) {
				return 0;
			} else {
				$query = UsuarioCategoriaQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUsuario($this)
					->count($con);
			}
		} else {
			return count($this->collUsuarioCategorias);
		}
	}

	/**
	 * Method called to associate a UsuarioCategoria object to this object
	 * through the UsuarioCategoria foreign key attribute.
	 *
	 * @param      UsuarioCategoria $l UsuarioCategoria
	 * @return     Usuario The current object (for fluent API support)
	 */
	public function addUsuarioCategoria(UsuarioCategoria $l)
	{
		if ($this->collUsuarioCategorias === null) {
			$this->initUsuarioCategorias();
		}
		if (!$this->collUsuarioCategorias->contains($l)) { // only add it if the **same** object is not already associated
			$this->collUsuarioCategorias[]= $l;
			$l->setUsuario($this);
		}

		return $this;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Usuario is new, it will return
	 * an empty collection; or if this Usuario has previously
	 * been saved, it will retrieve related UsuarioCategorias from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Usuario.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array UsuarioCategoria[] List of UsuarioCategoria objects
	 */
	public function getUsuarioCategoriasJoinCategoria($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = UsuarioCategoriaQuery::create(null, $criteria);
		$query->joinWith('Categoria', $join_behavior);

		return $this->getUsuarioCategorias($query, $con);
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
	 * If this Usuario is new, it will return
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
					->filterByUsuario($this)
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
					->filterByUsuario($this)
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
	 * @return     Usuario The current object (for fluent API support)
	 */
	public function addUsuarioTarefa(UsuarioTarefa $l)
	{
		if ($this->collUsuarioTarefas === null) {
			$this->initUsuarioTarefas();
		}
		if (!$this->collUsuarioTarefas->contains($l)) { // only add it if the **same** object is not already associated
			$this->collUsuarioTarefas[]= $l;
			$l->setUsuario($this);
		}

		return $this;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Usuario is new, it will return
	 * an empty collection; or if this Usuario has previously
	 * been saved, it will retrieve related UsuarioTarefas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Usuario.
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
	 * Otherwise if this Usuario is new, it will return
	 * an empty collection; or if this Usuario has previously
	 * been saved, it will retrieve related UsuarioTarefas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Usuario.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array UsuarioTarefa[] List of UsuarioTarefa objects
	 */
	public function getUsuarioTarefasJoinTarefa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = UsuarioTarefaQuery::create(null, $criteria);
		$query->joinWith('Tarefa', $join_behavior);

		return $this->getUsuarioTarefas($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->co_usuario = null;
		$this->nu_cpf = null;
		$this->ds_password = null;
		$this->no_usuario = null;
		$this->ds_login = null;
		$this->dt_ultimo_login = null;
		$this->ds_email = null;
		$this->co_perfil = null;
		$this->nu_celular = null;
		$this->nu_telefone = null;
		$this->st_usuario = null;
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
			if ($this->collPermissaosRelatedByCoUsuarioAlteracao) {
				foreach ($this->collPermissaosRelatedByCoUsuarioAlteracao as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collPermissaosRelatedByCoUsuarioCadastro) {
				foreach ($this->collPermissaosRelatedByCoUsuarioCadastro as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collRlUsuarioOrgaos) {
				foreach ($this->collRlUsuarioOrgaos as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collTbDescricaoChamados) {
				foreach ($this->collTbDescricaoChamados as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collUsuarioCategorias) {
				foreach ($this->collUsuarioCategorias as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collUsuarioTarefas) {
				foreach ($this->collUsuarioTarefas as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collPermissaosRelatedByCoUsuarioAlteracao instanceof PropelCollection) {
			$this->collPermissaosRelatedByCoUsuarioAlteracao->clearIterator();
		}
		$this->collPermissaosRelatedByCoUsuarioAlteracao = null;
		if ($this->collPermissaosRelatedByCoUsuarioCadastro instanceof PropelCollection) {
			$this->collPermissaosRelatedByCoUsuarioCadastro->clearIterator();
		}
		$this->collPermissaosRelatedByCoUsuarioCadastro = null;
		if ($this->collRlUsuarioOrgaos instanceof PropelCollection) {
			$this->collRlUsuarioOrgaos->clearIterator();
		}
		$this->collRlUsuarioOrgaos = null;
		if ($this->collTbDescricaoChamados instanceof PropelCollection) {
			$this->collTbDescricaoChamados->clearIterator();
		}
		$this->collTbDescricaoChamados = null;
		if ($this->collUsuarioCategorias instanceof PropelCollection) {
			$this->collUsuarioCategorias->clearIterator();
		}
		$this->collUsuarioCategorias = null;
		if ($this->collUsuarioTarefas instanceof PropelCollection) {
			$this->collUsuarioTarefas->clearIterator();
		}
		$this->collUsuarioTarefas = null;
		$this->aPerfil = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(UsuarioPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseUsuario
