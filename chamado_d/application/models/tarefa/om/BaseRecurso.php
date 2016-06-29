<?php


/**
 * Base class that represents a row from the 'recurso' table.
 *
 * 
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseRecurso extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'RecursoPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        RecursoPeer
	 */
	protected static $peer;

	/**
	 * The value for the co_recurso field.
	 * @var        int
	 */
	protected $co_recurso;

	/**
	 * The value for the no_recurso field.
	 * @var        string
	 */
	protected $no_recurso;

	/**
	 * The value for the ds_recurso field.
	 * @var        string
	 */
	protected $ds_recurso;

	/**
	 * The value for the tp_recurso field.
	 * @var        int
	 */
	protected $tp_recurso;

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
	 * @var        array Permissao[] Collection to store aggregation of Permissao objects.
	 */
	protected $collPermissaos;

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
	}

	/**
	 * Initializes internal state of BaseRecurso object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [co_recurso] column value.
	 * 
	 * @return     int
	 */
	public function getCoRecurso()
	{
		return $this->co_recurso;
	}

	/**
	 * Get the [no_recurso] column value.
	 * 
	 * @return     string
	 */
	public function getNoRecurso()
	{
		return $this->no_recurso;
	}

	/**
	 * Get the [ds_recurso] column value.
	 * 
	 * @return     string
	 */
	public function getDsRecurso()
	{
		return $this->ds_recurso;
	}

	/**
	 * Get the [tp_recurso] column value.
	 * 
	 * @return     int
	 */
	public function getTpRecurso()
	{
		return $this->tp_recurso;
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
	 * Set the value of [co_recurso] column.
	 * 
	 * @param      int $v new value
	 * @return     Recurso The current object (for fluent API support)
	 */
	public function setCoRecurso($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_recurso !== $v) {
			$this->co_recurso = $v;
			$this->modifiedColumns[] = RecursoPeer::CO_RECURSO;
		}

		return $this;
	} // setCoRecurso()

	/**
	 * Set the value of [no_recurso] column.
	 * 
	 * @param      string $v new value
	 * @return     Recurso The current object (for fluent API support)
	 */
	public function setNoRecurso($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->no_recurso !== $v) {
			$this->no_recurso = $v;
			$this->modifiedColumns[] = RecursoPeer::NO_RECURSO;
		}

		return $this;
	} // setNoRecurso()

	/**
	 * Set the value of [ds_recurso] column.
	 * 
	 * @param      string $v new value
	 * @return     Recurso The current object (for fluent API support)
	 */
	public function setDsRecurso($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ds_recurso !== $v) {
			$this->ds_recurso = $v;
			$this->modifiedColumns[] = RecursoPeer::DS_RECURSO;
		}

		return $this;
	} // setDsRecurso()

	/**
	 * Set the value of [tp_recurso] column.
	 * 
	 * @param      int $v new value
	 * @return     Recurso The current object (for fluent API support)
	 */
	public function setTpRecurso($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->tp_recurso !== $v) {
			$this->tp_recurso = $v;
			$this->modifiedColumns[] = RecursoPeer::TP_RECURSO;
		}

		return $this;
	} // setTpRecurso()

	/**
	 * Sets the value of [dt_cadastro] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Recurso The current object (for fluent API support)
	 */
	public function setDtCadastro($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->dt_cadastro !== null || $dt !== null) {
			$currentDateAsString = ($this->dt_cadastro !== null && $tmpDt = new DateTime($this->dt_cadastro)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->dt_cadastro = $newDateAsString;
				$this->modifiedColumns[] = RecursoPeer::DT_CADASTRO;
			}
		} // if either are not null

		return $this;
	} // setDtCadastro()

	/**
	 * Set the value of [co_usuario_cadastro] column.
	 * 
	 * @param      int $v new value
	 * @return     Recurso The current object (for fluent API support)
	 */
	public function setCoUsuarioCadastro($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_usuario_cadastro !== $v) {
			$this->co_usuario_cadastro = $v;
			$this->modifiedColumns[] = RecursoPeer::CO_USUARIO_CADASTRO;
		}

		return $this;
	} // setCoUsuarioCadastro()

	/**
	 * Sets the value of [dt_alteracao] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Recurso The current object (for fluent API support)
	 */
	public function setDtAlteracao($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->dt_alteracao !== null || $dt !== null) {
			$currentDateAsString = ($this->dt_alteracao !== null && $tmpDt = new DateTime($this->dt_alteracao)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->dt_alteracao = $newDateAsString;
				$this->modifiedColumns[] = RecursoPeer::DT_ALTERACAO;
			}
		} // if either are not null

		return $this;
	} // setDtAlteracao()

	/**
	 * Set the value of [co_usuario_alteracao] column.
	 * 
	 * @param      int $v new value
	 * @return     Recurso The current object (for fluent API support)
	 */
	public function setCoUsuarioAlteracao($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_usuario_alteracao !== $v) {
			$this->co_usuario_alteracao = $v;
			$this->modifiedColumns[] = RecursoPeer::CO_USUARIO_ALTERACAO;
		}

		return $this;
	} // setCoUsuarioAlteracao()

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

			$this->co_recurso = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->no_recurso = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->ds_recurso = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->tp_recurso = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->dt_cadastro = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->co_usuario_cadastro = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->dt_alteracao = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->co_usuario_alteracao = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 8; // 8 = RecursoPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Recurso object", $e);
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
			$con = Propel::getConnection(RecursoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = RecursoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collPermissaos = null;

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
			$con = Propel::getConnection(RecursoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = RecursoQuery::create()
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
			$con = Propel::getConnection(RecursoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				RecursoPeer::addInstanceToPool($this);
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

			if ($this->isNew() ) {
				$this->modifiedColumns[] = RecursoPeer::CO_RECURSO;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(RecursoPeer::CO_RECURSO) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.RecursoPeer::CO_RECURSO.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setCoRecurso($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = RecursoPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collPermissaos !== null) {
				foreach ($this->collPermissaos as $referrerFK) {
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


			if (($retval = RecursoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collPermissaos !== null) {
					foreach ($this->collPermissaos as $referrerFK) {
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
		$pos = RecursoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCoRecurso();
				break;
			case 1:
				return $this->getNoRecurso();
				break;
			case 2:
				return $this->getDsRecurso();
				break;
			case 3:
				return $this->getTpRecurso();
				break;
			case 4:
				return $this->getDtCadastro();
				break;
			case 5:
				return $this->getCoUsuarioCadastro();
				break;
			case 6:
				return $this->getDtAlteracao();
				break;
			case 7:
				return $this->getCoUsuarioAlteracao();
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
		if (isset($alreadyDumpedObjects['Recurso'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Recurso'][$this->getPrimaryKey()] = true;
		$keys = RecursoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCoRecurso(),
			$keys[1] => $this->getNoRecurso(),
			$keys[2] => $this->getDsRecurso(),
			$keys[3] => $this->getTpRecurso(),
			$keys[4] => $this->getDtCadastro(),
			$keys[5] => $this->getCoUsuarioCadastro(),
			$keys[6] => $this->getDtAlteracao(),
			$keys[7] => $this->getCoUsuarioAlteracao(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->collPermissaos) {
				$result['Permissaos'] = $this->collPermissaos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = RecursoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCoRecurso($value);
				break;
			case 1:
				$this->setNoRecurso($value);
				break;
			case 2:
				$this->setDsRecurso($value);
				break;
			case 3:
				$this->setTpRecurso($value);
				break;
			case 4:
				$this->setDtCadastro($value);
				break;
			case 5:
				$this->setCoUsuarioCadastro($value);
				break;
			case 6:
				$this->setDtAlteracao($value);
				break;
			case 7:
				$this->setCoUsuarioAlteracao($value);
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
		$keys = RecursoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoRecurso($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNoRecurso($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDsRecurso($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTpRecurso($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDtCadastro($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCoUsuarioCadastro($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDtAlteracao($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCoUsuarioAlteracao($arr[$keys[7]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(RecursoPeer::DATABASE_NAME);

		if ($this->isColumnModified(RecursoPeer::CO_RECURSO)) $criteria->add(RecursoPeer::CO_RECURSO, $this->co_recurso);
		if ($this->isColumnModified(RecursoPeer::NO_RECURSO)) $criteria->add(RecursoPeer::NO_RECURSO, $this->no_recurso);
		if ($this->isColumnModified(RecursoPeer::DS_RECURSO)) $criteria->add(RecursoPeer::DS_RECURSO, $this->ds_recurso);
		if ($this->isColumnModified(RecursoPeer::TP_RECURSO)) $criteria->add(RecursoPeer::TP_RECURSO, $this->tp_recurso);
		if ($this->isColumnModified(RecursoPeer::DT_CADASTRO)) $criteria->add(RecursoPeer::DT_CADASTRO, $this->dt_cadastro);
		if ($this->isColumnModified(RecursoPeer::CO_USUARIO_CADASTRO)) $criteria->add(RecursoPeer::CO_USUARIO_CADASTRO, $this->co_usuario_cadastro);
		if ($this->isColumnModified(RecursoPeer::DT_ALTERACAO)) $criteria->add(RecursoPeer::DT_ALTERACAO, $this->dt_alteracao);
		if ($this->isColumnModified(RecursoPeer::CO_USUARIO_ALTERACAO)) $criteria->add(RecursoPeer::CO_USUARIO_ALTERACAO, $this->co_usuario_alteracao);

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
		$criteria = new Criteria(RecursoPeer::DATABASE_NAME);
		$criteria->add(RecursoPeer::CO_RECURSO, $this->co_recurso);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getCoRecurso();
	}

	/**
	 * Generic method to set the primary key (co_recurso column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setCoRecurso($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getCoRecurso();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Recurso (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setNoRecurso($this->getNoRecurso());
		$copyObj->setDsRecurso($this->getDsRecurso());
		$copyObj->setTpRecurso($this->getTpRecurso());
		$copyObj->setDtCadastro($this->getDtCadastro());
		$copyObj->setCoUsuarioCadastro($this->getCoUsuarioCadastro());
		$copyObj->setDtAlteracao($this->getDtAlteracao());
		$copyObj->setCoUsuarioAlteracao($this->getCoUsuarioAlteracao());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getPermissaos() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addPermissao($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setCoRecurso(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Recurso Clone of current object.
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
	 * @return     RecursoPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new RecursoPeer();
		}
		return self::$peer;
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
		if ('Permissao' == $relationName) {
			return $this->initPermissaos();
		}
	}

	/**
	 * Clears out the collPermissaos collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addPermissaos()
	 */
	public function clearPermissaos()
	{
		$this->collPermissaos = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collPermissaos collection.
	 *
	 * By default this just sets the collPermissaos collection to an empty array (like clearcollPermissaos());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initPermissaos($overrideExisting = true)
	{
		if (null !== $this->collPermissaos && !$overrideExisting) {
			return;
		}
		$this->collPermissaos = new PropelObjectCollection();
		$this->collPermissaos->setModel('Permissao');
	}

	/**
	 * Gets an array of Permissao objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Recurso is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Permissao[] List of Permissao objects
	 * @throws     PropelException
	 */
	public function getPermissaos($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collPermissaos || null !== $criteria) {
			if ($this->isNew() && null === $this->collPermissaos) {
				// return empty collection
				$this->initPermissaos();
			} else {
				$collPermissaos = PermissaoQuery::create(null, $criteria)
					->filterByRecurso($this)
					->find($con);
				if (null !== $criteria) {
					return $collPermissaos;
				}
				$this->collPermissaos = $collPermissaos;
			}
		}
		return $this->collPermissaos;
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
	public function countPermissaos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collPermissaos || null !== $criteria) {
			if ($this->isNew() && null === $this->collPermissaos) {
				return 0;
			} else {
				$query = PermissaoQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByRecurso($this)
					->count($con);
			}
		} else {
			return count($this->collPermissaos);
		}
	}

	/**
	 * Method called to associate a Permissao object to this object
	 * through the Permissao foreign key attribute.
	 *
	 * @param      Permissao $l Permissao
	 * @return     Recurso The current object (for fluent API support)
	 */
	public function addPermissao(Permissao $l)
	{
		if ($this->collPermissaos === null) {
			$this->initPermissaos();
		}
		if (!$this->collPermissaos->contains($l)) { // only add it if the **same** object is not already associated
			$this->collPermissaos[]= $l;
			$l->setRecurso($this);
		}

		return $this;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Recurso is new, it will return
	 * an empty collection; or if this Recurso has previously
	 * been saved, it will retrieve related Permissaos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Recurso.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Permissao[] List of Permissao objects
	 */
	public function getPermissaosJoinPerfil($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = PermissaoQuery::create(null, $criteria);
		$query->joinWith('Perfil', $join_behavior);

		return $this->getPermissaos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Recurso is new, it will return
	 * an empty collection; or if this Recurso has previously
	 * been saved, it will retrieve related Permissaos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Recurso.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Permissao[] List of Permissao objects
	 */
	public function getPermissaosJoinUsuarioRelatedByCoUsuarioAlteracao($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = PermissaoQuery::create(null, $criteria);
		$query->joinWith('UsuarioRelatedByCoUsuarioAlteracao', $join_behavior);

		return $this->getPermissaos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Recurso is new, it will return
	 * an empty collection; or if this Recurso has previously
	 * been saved, it will retrieve related Permissaos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Recurso.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Permissao[] List of Permissao objects
	 */
	public function getPermissaosJoinUsuarioRelatedByCoUsuarioCadastro($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = PermissaoQuery::create(null, $criteria);
		$query->joinWith('UsuarioRelatedByCoUsuarioCadastro', $join_behavior);

		return $this->getPermissaos($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->co_recurso = null;
		$this->no_recurso = null;
		$this->ds_recurso = null;
		$this->tp_recurso = null;
		$this->dt_cadastro = null;
		$this->co_usuario_cadastro = null;
		$this->dt_alteracao = null;
		$this->co_usuario_alteracao = null;
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
			if ($this->collPermissaos) {
				foreach ($this->collPermissaos as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collPermissaos instanceof PropelCollection) {
			$this->collPermissaos->clearIterator();
		}
		$this->collPermissaos = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(RecursoPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseRecurso
