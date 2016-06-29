<?php


/**
 * Base class that represents a row from the 'status' table.
 *
 * 
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseStatus extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'StatusPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        StatusPeer
	 */
	protected static $peer;

	/**
	 * The value for the co_status field.
	 * @var        int
	 */
	protected $co_status;

	/**
	 * The value for the no_status field.
	 * @var        string
	 */
	protected $no_status;

	/**
	 * The value for the situacao field.
	 * Note: this column has a database default value of: true
	 * @var        boolean
	 */
	protected $situacao;

	/**
	 * @var        array Tarefa[] Collection to store aggregation of Tarefa objects.
	 */
	protected $collTarefas;

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
		$this->situacao = true;
	}

	/**
	 * Initializes internal state of BaseStatus object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
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
	 * Get the [no_status] column value.
	 * 
	 * @return     string
	 */
	public function getNoStatus()
	{
		return $this->no_status;
	}

	/**
	 * Get the [situacao] column value.
	 * 
	 * @return     boolean
	 */
	public function getSituacao()
	{
		return $this->situacao;
	}

	/**
	 * Set the value of [co_status] column.
	 * 
	 * @param      int $v new value
	 * @return     Status The current object (for fluent API support)
	 */
	public function setCoStatus($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_status !== $v) {
			$this->co_status = $v;
			$this->modifiedColumns[] = StatusPeer::CO_STATUS;
		}

		return $this;
	} // setCoStatus()

	/**
	 * Set the value of [no_status] column.
	 * 
	 * @param      string $v new value
	 * @return     Status The current object (for fluent API support)
	 */
	public function setNoStatus($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->no_status !== $v) {
			$this->no_status = $v;
			$this->modifiedColumns[] = StatusPeer::NO_STATUS;
		}

		return $this;
	} // setNoStatus()

	/**
	 * Sets the value of the [situacao] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Status The current object (for fluent API support)
	 */
	public function setSituacao($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->situacao !== $v) {
			$this->situacao = $v;
			$this->modifiedColumns[] = StatusPeer::SITUACAO;
		}

		return $this;
	} // setSituacao()

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
			if ($this->situacao !== true) {
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

			$this->co_status = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->no_status = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->situacao = ($row[$startcol + 2] !== null) ? (boolean) $row[$startcol + 2] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 3; // 3 = StatusPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Status object", $e);
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
			$con = Propel::getConnection(StatusPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = StatusPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collTarefas = null;

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
			$con = Propel::getConnection(StatusPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = StatusQuery::create()
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
			$con = Propel::getConnection(StatusPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				StatusPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = StatusPeer::CO_STATUS;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(StatusPeer::CO_STATUS) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.StatusPeer::CO_STATUS.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setCoStatus($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = StatusPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collTarefas !== null) {
				foreach ($this->collTarefas as $referrerFK) {
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


			if (($retval = StatusPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collTarefas !== null) {
					foreach ($this->collTarefas as $referrerFK) {
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
		$pos = StatusPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCoStatus();
				break;
			case 1:
				return $this->getNoStatus();
				break;
			case 2:
				return $this->getSituacao();
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
		if (isset($alreadyDumpedObjects['Status'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Status'][$this->getPrimaryKey()] = true;
		$keys = StatusPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCoStatus(),
			$keys[1] => $this->getNoStatus(),
			$keys[2] => $this->getSituacao(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->collTarefas) {
				$result['Tarefas'] = $this->collTarefas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = StatusPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCoStatus($value);
				break;
			case 1:
				$this->setNoStatus($value);
				break;
			case 2:
				$this->setSituacao($value);
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
		$keys = StatusPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoStatus($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNoStatus($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setSituacao($arr[$keys[2]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(StatusPeer::DATABASE_NAME);

		if ($this->isColumnModified(StatusPeer::CO_STATUS)) $criteria->add(StatusPeer::CO_STATUS, $this->co_status);
		if ($this->isColumnModified(StatusPeer::NO_STATUS)) $criteria->add(StatusPeer::NO_STATUS, $this->no_status);
		if ($this->isColumnModified(StatusPeer::SITUACAO)) $criteria->add(StatusPeer::SITUACAO, $this->situacao);

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
		$criteria = new Criteria(StatusPeer::DATABASE_NAME);
		$criteria->add(StatusPeer::CO_STATUS, $this->co_status);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getCoStatus();
	}

	/**
	 * Generic method to set the primary key (co_status column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setCoStatus($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getCoStatus();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Status (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setNoStatus($this->getNoStatus());
		$copyObj->setSituacao($this->getSituacao());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getTarefas() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addTarefa($relObj->copy($deepCopy));
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
			$copyObj->setCoStatus(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Status Clone of current object.
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
	 * @return     StatusPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new StatusPeer();
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
		if ('Tarefa' == $relationName) {
			return $this->initTarefas();
		}
		if ('UsuarioTarefa' == $relationName) {
			return $this->initUsuarioTarefas();
		}
	}

	/**
	 * Clears out the collTarefas collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addTarefas()
	 */
	public function clearTarefas()
	{
		$this->collTarefas = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collTarefas collection.
	 *
	 * By default this just sets the collTarefas collection to an empty array (like clearcollTarefas());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initTarefas($overrideExisting = true)
	{
		if (null !== $this->collTarefas && !$overrideExisting) {
			return;
		}
		$this->collTarefas = new PropelObjectCollection();
		$this->collTarefas->setModel('Tarefa');
	}

	/**
	 * Gets an array of Tarefa objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Status is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Tarefa[] List of Tarefa objects
	 * @throws     PropelException
	 */
	public function getTarefas($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collTarefas || null !== $criteria) {
			if ($this->isNew() && null === $this->collTarefas) {
				// return empty collection
				$this->initTarefas();
			} else {
				$collTarefas = TarefaQuery::create(null, $criteria)
					->filterByStatus($this)
					->find($con);
				if (null !== $criteria) {
					return $collTarefas;
				}
				$this->collTarefas = $collTarefas;
			}
		}
		return $this->collTarefas;
	}

	/**
	 * Returns the number of related Tarefa objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Tarefa objects.
	 * @throws     PropelException
	 */
	public function countTarefas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collTarefas || null !== $criteria) {
			if ($this->isNew() && null === $this->collTarefas) {
				return 0;
			} else {
				$query = TarefaQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByStatus($this)
					->count($con);
			}
		} else {
			return count($this->collTarefas);
		}
	}

	/**
	 * Method called to associate a Tarefa object to this object
	 * through the Tarefa foreign key attribute.
	 *
	 * @param      Tarefa $l Tarefa
	 * @return     Status The current object (for fluent API support)
	 */
	public function addTarefa(Tarefa $l)
	{
		if ($this->collTarefas === null) {
			$this->initTarefas();
		}
		if (!$this->collTarefas->contains($l)) { // only add it if the **same** object is not already associated
			$this->collTarefas[]= $l;
			$l->setStatus($this);
		}

		return $this;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Status is new, it will return
	 * an empty collection; or if this Status has previously
	 * been saved, it will retrieve related Tarefas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Status.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Tarefa[] List of Tarefa objects
	 */
	public function getTarefasJoinOrgao($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TarefaQuery::create(null, $criteria);
		$query->joinWith('Orgao', $join_behavior);

		return $this->getTarefas($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Status is new, it will return
	 * an empty collection; or if this Status has previously
	 * been saved, it will retrieve related Tarefas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Status.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Tarefa[] List of Tarefa objects
	 */
	public function getTarefasJoinRlProjetoVersaoAmb($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TarefaQuery::create(null, $criteria);
		$query->joinWith('RlProjetoVersaoAmb', $join_behavior);

		return $this->getTarefas($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Status is new, it will return
	 * an empty collection; or if this Status has previously
	 * been saved, it will retrieve related Tarefas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Status.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Tarefa[] List of Tarefa objects
	 */
	public function getTarefasJoinCategoria($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TarefaQuery::create(null, $criteria);
		$query->joinWith('Categoria', $join_behavior);

		return $this->getTarefas($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Status is new, it will return
	 * an empty collection; or if this Status has previously
	 * been saved, it will retrieve related Tarefas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Status.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Tarefa[] List of Tarefa objects
	 */
	public function getTarefasJoinNivel($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TarefaQuery::create(null, $criteria);
		$query->joinWith('Nivel', $join_behavior);

		return $this->getTarefas($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Status is new, it will return
	 * an empty collection; or if this Status has previously
	 * been saved, it will retrieve related Tarefas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Status.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Tarefa[] List of Tarefa objects
	 */
	public function getTarefasJoinPrioridade($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TarefaQuery::create(null, $criteria);
		$query->joinWith('Prioridade', $join_behavior);

		return $this->getTarefas($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Status is new, it will return
	 * an empty collection; or if this Status has previously
	 * been saved, it will retrieve related Tarefas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Status.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Tarefa[] List of Tarefa objects
	 */
	public function getTarefasJoinTbModuloProjeto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TarefaQuery::create(null, $criteria);
		$query->joinWith('TbModuloProjeto', $join_behavior);

		return $this->getTarefas($query, $con);
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
	 * If this Status is new, it will return
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
					->filterByStatus($this)
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
					->filterByStatus($this)
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
	 * @return     Status The current object (for fluent API support)
	 */
	public function addUsuarioTarefa(UsuarioTarefa $l)
	{
		if ($this->collUsuarioTarefas === null) {
			$this->initUsuarioTarefas();
		}
		if (!$this->collUsuarioTarefas->contains($l)) { // only add it if the **same** object is not already associated
			$this->collUsuarioTarefas[]= $l;
			$l->setStatus($this);
		}

		return $this;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Status is new, it will return
	 * an empty collection; or if this Status has previously
	 * been saved, it will retrieve related UsuarioTarefas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Status.
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
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Status is new, it will return
	 * an empty collection; or if this Status has previously
	 * been saved, it will retrieve related UsuarioTarefas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Status.
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
		$this->co_status = null;
		$this->no_status = null;
		$this->situacao = null;
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
			if ($this->collTarefas) {
				foreach ($this->collTarefas as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collUsuarioTarefas) {
				foreach ($this->collUsuarioTarefas as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collTarefas instanceof PropelCollection) {
			$this->collTarefas->clearIterator();
		}
		$this->collTarefas = null;
		if ($this->collUsuarioTarefas instanceof PropelCollection) {
			$this->collUsuarioTarefas->clearIterator();
		}
		$this->collUsuarioTarefas = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(StatusPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseStatus
