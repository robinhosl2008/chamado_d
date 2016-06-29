<?php


/**
 * Base class that represents a row from the 'projeto' table.
 *
 * 
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseProjeto extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'ProjetoPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ProjetoPeer
	 */
	protected static $peer;

	/**
	 * The value for the co_projeto field.
	 * @var        int
	 */
	protected $co_projeto;

	/**
	 * The value for the no_projeto field.
	 * @var        string
	 */
	protected $no_projeto;

	/**
	 * @var        array RlOrgaoProjeto[] Collection to store aggregation of RlOrgaoProjeto objects.
	 */
	protected $collRlOrgaoProjetos;

	/**
	 * @var        array RlProjetoVersaoAmb[] Collection to store aggregation of RlProjetoVersaoAmb objects.
	 */
	protected $collRlProjetoVersaoAmbs;

	/**
	 * @var        array TbModuloProjeto[] Collection to store aggregation of TbModuloProjeto objects.
	 */
	protected $collTbModuloProjetos;

	/**
	 * @var        array Versao[] Collection to store aggregation of Versao objects.
	 */
	protected $collVersaos;

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
	 * Get the [co_projeto] column value.
	 * 
	 * @return     int
	 */
	public function getCoProjeto()
	{
		return $this->co_projeto;
	}

	/**
	 * Get the [no_projeto] column value.
	 * 
	 * @return     string
	 */
	public function getNoProjeto()
	{
		return $this->no_projeto;
	}

	/**
	 * Set the value of [co_projeto] column.
	 * 
	 * @param      int $v new value
	 * @return     Projeto The current object (for fluent API support)
	 */
	public function setCoProjeto($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_projeto !== $v) {
			$this->co_projeto = $v;
			$this->modifiedColumns[] = ProjetoPeer::CO_PROJETO;
		}

		return $this;
	} // setCoProjeto()

	/**
	 * Set the value of [no_projeto] column.
	 * 
	 * @param      string $v new value
	 * @return     Projeto The current object (for fluent API support)
	 */
	public function setNoProjeto($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->no_projeto !== $v) {
			$this->no_projeto = $v;
			$this->modifiedColumns[] = ProjetoPeer::NO_PROJETO;
		}

		return $this;
	} // setNoProjeto()

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

			$this->co_projeto = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->no_projeto = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 2; // 2 = ProjetoPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Projeto object", $e);
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
			$con = Propel::getConnection(ProjetoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ProjetoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collRlOrgaoProjetos = null;

			$this->collRlProjetoVersaoAmbs = null;

			$this->collTbModuloProjetos = null;

			$this->collVersaos = null;

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
			$con = Propel::getConnection(ProjetoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = ProjetoQuery::create()
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
			$con = Propel::getConnection(ProjetoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				ProjetoPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = ProjetoPeer::CO_PROJETO;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(ProjetoPeer::CO_PROJETO) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.ProjetoPeer::CO_PROJETO.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setCoProjeto($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = ProjetoPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collRlOrgaoProjetos !== null) {
				foreach ($this->collRlOrgaoProjetos as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collRlProjetoVersaoAmbs !== null) {
				foreach ($this->collRlProjetoVersaoAmbs as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collTbModuloProjetos !== null) {
				foreach ($this->collTbModuloProjetos as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collVersaos !== null) {
				foreach ($this->collVersaos as $referrerFK) {
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


			if (($retval = ProjetoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collRlOrgaoProjetos !== null) {
					foreach ($this->collRlOrgaoProjetos as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collRlProjetoVersaoAmbs !== null) {
					foreach ($this->collRlProjetoVersaoAmbs as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTbModuloProjetos !== null) {
					foreach ($this->collTbModuloProjetos as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collVersaos !== null) {
					foreach ($this->collVersaos as $referrerFK) {
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
		$pos = ProjetoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCoProjeto();
				break;
			case 1:
				return $this->getNoProjeto();
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
		if (isset($alreadyDumpedObjects['Projeto'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Projeto'][$this->getPrimaryKey()] = true;
		$keys = ProjetoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCoProjeto(),
			$keys[1] => $this->getNoProjeto(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->collRlOrgaoProjetos) {
				$result['RlOrgaoProjetos'] = $this->collRlOrgaoProjetos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collRlProjetoVersaoAmbs) {
				$result['RlProjetoVersaoAmbs'] = $this->collRlProjetoVersaoAmbs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collTbModuloProjetos) {
				$result['TbModuloProjetos'] = $this->collTbModuloProjetos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collVersaos) {
				$result['Versaos'] = $this->collVersaos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = ProjetoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCoProjeto($value);
				break;
			case 1:
				$this->setNoProjeto($value);
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
		$keys = ProjetoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoProjeto($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNoProjeto($arr[$keys[1]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ProjetoPeer::DATABASE_NAME);

		if ($this->isColumnModified(ProjetoPeer::CO_PROJETO)) $criteria->add(ProjetoPeer::CO_PROJETO, $this->co_projeto);
		if ($this->isColumnModified(ProjetoPeer::NO_PROJETO)) $criteria->add(ProjetoPeer::NO_PROJETO, $this->no_projeto);

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
		$criteria = new Criteria(ProjetoPeer::DATABASE_NAME);
		$criteria->add(ProjetoPeer::CO_PROJETO, $this->co_projeto);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getCoProjeto();
	}

	/**
	 * Generic method to set the primary key (co_projeto column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setCoProjeto($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getCoProjeto();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Projeto (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setNoProjeto($this->getNoProjeto());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getRlOrgaoProjetos() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addRlOrgaoProjeto($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getRlProjetoVersaoAmbs() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addRlProjetoVersaoAmb($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getTbModuloProjetos() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addTbModuloProjeto($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getVersaos() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addVersao($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setCoProjeto(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Projeto Clone of current object.
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
	 * @return     ProjetoPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ProjetoPeer();
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
		if ('RlOrgaoProjeto' == $relationName) {
			return $this->initRlOrgaoProjetos();
		}
		if ('RlProjetoVersaoAmb' == $relationName) {
			return $this->initRlProjetoVersaoAmbs();
		}
		if ('TbModuloProjeto' == $relationName) {
			return $this->initTbModuloProjetos();
		}
		if ('Versao' == $relationName) {
			return $this->initVersaos();
		}
	}

	/**
	 * Clears out the collRlOrgaoProjetos collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addRlOrgaoProjetos()
	 */
	public function clearRlOrgaoProjetos()
	{
		$this->collRlOrgaoProjetos = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collRlOrgaoProjetos collection.
	 *
	 * By default this just sets the collRlOrgaoProjetos collection to an empty array (like clearcollRlOrgaoProjetos());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initRlOrgaoProjetos($overrideExisting = true)
	{
		if (null !== $this->collRlOrgaoProjetos && !$overrideExisting) {
			return;
		}
		$this->collRlOrgaoProjetos = new PropelObjectCollection();
		$this->collRlOrgaoProjetos->setModel('RlOrgaoProjeto');
	}

	/**
	 * Gets an array of RlOrgaoProjeto objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Projeto is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array RlOrgaoProjeto[] List of RlOrgaoProjeto objects
	 * @throws     PropelException
	 */
	public function getRlOrgaoProjetos($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collRlOrgaoProjetos || null !== $criteria) {
			if ($this->isNew() && null === $this->collRlOrgaoProjetos) {
				// return empty collection
				$this->initRlOrgaoProjetos();
			} else {
				$collRlOrgaoProjetos = RlOrgaoProjetoQuery::create(null, $criteria)
					->filterByProjeto($this)
					->find($con);
				if (null !== $criteria) {
					return $collRlOrgaoProjetos;
				}
				$this->collRlOrgaoProjetos = $collRlOrgaoProjetos;
			}
		}
		return $this->collRlOrgaoProjetos;
	}

	/**
	 * Returns the number of related RlOrgaoProjeto objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related RlOrgaoProjeto objects.
	 * @throws     PropelException
	 */
	public function countRlOrgaoProjetos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collRlOrgaoProjetos || null !== $criteria) {
			if ($this->isNew() && null === $this->collRlOrgaoProjetos) {
				return 0;
			} else {
				$query = RlOrgaoProjetoQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByProjeto($this)
					->count($con);
			}
		} else {
			return count($this->collRlOrgaoProjetos);
		}
	}

	/**
	 * Method called to associate a RlOrgaoProjeto object to this object
	 * through the RlOrgaoProjeto foreign key attribute.
	 *
	 * @param      RlOrgaoProjeto $l RlOrgaoProjeto
	 * @return     Projeto The current object (for fluent API support)
	 */
	public function addRlOrgaoProjeto(RlOrgaoProjeto $l)
	{
		if ($this->collRlOrgaoProjetos === null) {
			$this->initRlOrgaoProjetos();
		}
		if (!$this->collRlOrgaoProjetos->contains($l)) { // only add it if the **same** object is not already associated
			$this->collRlOrgaoProjetos[]= $l;
			$l->setProjeto($this);
		}

		return $this;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Projeto is new, it will return
	 * an empty collection; or if this Projeto has previously
	 * been saved, it will retrieve related RlOrgaoProjetos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Projeto.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array RlOrgaoProjeto[] List of RlOrgaoProjeto objects
	 */
	public function getRlOrgaoProjetosJoinOrgao($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = RlOrgaoProjetoQuery::create(null, $criteria);
		$query->joinWith('Orgao', $join_behavior);

		return $this->getRlOrgaoProjetos($query, $con);
	}

	/**
	 * Clears out the collRlProjetoVersaoAmbs collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addRlProjetoVersaoAmbs()
	 */
	public function clearRlProjetoVersaoAmbs()
	{
		$this->collRlProjetoVersaoAmbs = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collRlProjetoVersaoAmbs collection.
	 *
	 * By default this just sets the collRlProjetoVersaoAmbs collection to an empty array (like clearcollRlProjetoVersaoAmbs());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initRlProjetoVersaoAmbs($overrideExisting = true)
	{
		if (null !== $this->collRlProjetoVersaoAmbs && !$overrideExisting) {
			return;
		}
		$this->collRlProjetoVersaoAmbs = new PropelObjectCollection();
		$this->collRlProjetoVersaoAmbs->setModel('RlProjetoVersaoAmb');
	}

	/**
	 * Gets an array of RlProjetoVersaoAmb objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Projeto is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array RlProjetoVersaoAmb[] List of RlProjetoVersaoAmb objects
	 * @throws     PropelException
	 */
	public function getRlProjetoVersaoAmbs($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collRlProjetoVersaoAmbs || null !== $criteria) {
			if ($this->isNew() && null === $this->collRlProjetoVersaoAmbs) {
				// return empty collection
				$this->initRlProjetoVersaoAmbs();
			} else {
				$collRlProjetoVersaoAmbs = RlProjetoVersaoAmbQuery::create(null, $criteria)
					->filterByProjeto($this)
					->find($con);
				if (null !== $criteria) {
					return $collRlProjetoVersaoAmbs;
				}
				$this->collRlProjetoVersaoAmbs = $collRlProjetoVersaoAmbs;
			}
		}
		return $this->collRlProjetoVersaoAmbs;
	}

	/**
	 * Returns the number of related RlProjetoVersaoAmb objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related RlProjetoVersaoAmb objects.
	 * @throws     PropelException
	 */
	public function countRlProjetoVersaoAmbs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collRlProjetoVersaoAmbs || null !== $criteria) {
			if ($this->isNew() && null === $this->collRlProjetoVersaoAmbs) {
				return 0;
			} else {
				$query = RlProjetoVersaoAmbQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByProjeto($this)
					->count($con);
			}
		} else {
			return count($this->collRlProjetoVersaoAmbs);
		}
	}

	/**
	 * Method called to associate a RlProjetoVersaoAmb object to this object
	 * through the RlProjetoVersaoAmb foreign key attribute.
	 *
	 * @param      RlProjetoVersaoAmb $l RlProjetoVersaoAmb
	 * @return     Projeto The current object (for fluent API support)
	 */
	public function addRlProjetoVersaoAmb(RlProjetoVersaoAmb $l)
	{
		if ($this->collRlProjetoVersaoAmbs === null) {
			$this->initRlProjetoVersaoAmbs();
		}
		if (!$this->collRlProjetoVersaoAmbs->contains($l)) { // only add it if the **same** object is not already associated
			$this->collRlProjetoVersaoAmbs[]= $l;
			$l->setProjeto($this);
		}

		return $this;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Projeto is new, it will return
	 * an empty collection; or if this Projeto has previously
	 * been saved, it will retrieve related RlProjetoVersaoAmbs from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Projeto.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array RlProjetoVersaoAmb[] List of RlProjetoVersaoAmb objects
	 */
	public function getRlProjetoVersaoAmbsJoinAmbiente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = RlProjetoVersaoAmbQuery::create(null, $criteria);
		$query->joinWith('Ambiente', $join_behavior);

		return $this->getRlProjetoVersaoAmbs($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Projeto is new, it will return
	 * an empty collection; or if this Projeto has previously
	 * been saved, it will retrieve related RlProjetoVersaoAmbs from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Projeto.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array RlProjetoVersaoAmb[] List of RlProjetoVersaoAmb objects
	 */
	public function getRlProjetoVersaoAmbsJoinVersao($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = RlProjetoVersaoAmbQuery::create(null, $criteria);
		$query->joinWith('Versao', $join_behavior);

		return $this->getRlProjetoVersaoAmbs($query, $con);
	}

	/**
	 * Clears out the collTbModuloProjetos collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addTbModuloProjetos()
	 */
	public function clearTbModuloProjetos()
	{
		$this->collTbModuloProjetos = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collTbModuloProjetos collection.
	 *
	 * By default this just sets the collTbModuloProjetos collection to an empty array (like clearcollTbModuloProjetos());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initTbModuloProjetos($overrideExisting = true)
	{
		if (null !== $this->collTbModuloProjetos && !$overrideExisting) {
			return;
		}
		$this->collTbModuloProjetos = new PropelObjectCollection();
		$this->collTbModuloProjetos->setModel('TbModuloProjeto');
	}

	/**
	 * Gets an array of TbModuloProjeto objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Projeto is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array TbModuloProjeto[] List of TbModuloProjeto objects
	 * @throws     PropelException
	 */
	public function getTbModuloProjetos($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collTbModuloProjetos || null !== $criteria) {
			if ($this->isNew() && null === $this->collTbModuloProjetos) {
				// return empty collection
				$this->initTbModuloProjetos();
			} else {
				$collTbModuloProjetos = TbModuloProjetoQuery::create(null, $criteria)
					->filterByProjeto($this)
					->find($con);
				if (null !== $criteria) {
					return $collTbModuloProjetos;
				}
				$this->collTbModuloProjetos = $collTbModuloProjetos;
			}
		}
		return $this->collTbModuloProjetos;
	}

	/**
	 * Returns the number of related TbModuloProjeto objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related TbModuloProjeto objects.
	 * @throws     PropelException
	 */
	public function countTbModuloProjetos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collTbModuloProjetos || null !== $criteria) {
			if ($this->isNew() && null === $this->collTbModuloProjetos) {
				return 0;
			} else {
				$query = TbModuloProjetoQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByProjeto($this)
					->count($con);
			}
		} else {
			return count($this->collTbModuloProjetos);
		}
	}

	/**
	 * Method called to associate a TbModuloProjeto object to this object
	 * through the TbModuloProjeto foreign key attribute.
	 *
	 * @param      TbModuloProjeto $l TbModuloProjeto
	 * @return     Projeto The current object (for fluent API support)
	 */
	public function addTbModuloProjeto(TbModuloProjeto $l)
	{
		if ($this->collTbModuloProjetos === null) {
			$this->initTbModuloProjetos();
		}
		if (!$this->collTbModuloProjetos->contains($l)) { // only add it if the **same** object is not already associated
			$this->collTbModuloProjetos[]= $l;
			$l->setProjeto($this);
		}

		return $this;
	}

	/**
	 * Clears out the collVersaos collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addVersaos()
	 */
	public function clearVersaos()
	{
		$this->collVersaos = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collVersaos collection.
	 *
	 * By default this just sets the collVersaos collection to an empty array (like clearcollVersaos());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initVersaos($overrideExisting = true)
	{
		if (null !== $this->collVersaos && !$overrideExisting) {
			return;
		}
		$this->collVersaos = new PropelObjectCollection();
		$this->collVersaos->setModel('Versao');
	}

	/**
	 * Gets an array of Versao objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Projeto is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Versao[] List of Versao objects
	 * @throws     PropelException
	 */
	public function getVersaos($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collVersaos || null !== $criteria) {
			if ($this->isNew() && null === $this->collVersaos) {
				// return empty collection
				$this->initVersaos();
			} else {
				$collVersaos = VersaoQuery::create(null, $criteria)
					->filterByProjeto($this)
					->find($con);
				if (null !== $criteria) {
					return $collVersaos;
				}
				$this->collVersaos = $collVersaos;
			}
		}
		return $this->collVersaos;
	}

	/**
	 * Returns the number of related Versao objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Versao objects.
	 * @throws     PropelException
	 */
	public function countVersaos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collVersaos || null !== $criteria) {
			if ($this->isNew() && null === $this->collVersaos) {
				return 0;
			} else {
				$query = VersaoQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByProjeto($this)
					->count($con);
			}
		} else {
			return count($this->collVersaos);
		}
	}

	/**
	 * Method called to associate a Versao object to this object
	 * through the Versao foreign key attribute.
	 *
	 * @param      Versao $l Versao
	 * @return     Projeto The current object (for fluent API support)
	 */
	public function addVersao(Versao $l)
	{
		if ($this->collVersaos === null) {
			$this->initVersaos();
		}
		if (!$this->collVersaos->contains($l)) { // only add it if the **same** object is not already associated
			$this->collVersaos[]= $l;
			$l->setProjeto($this);
		}

		return $this;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Projeto is new, it will return
	 * an empty collection; or if this Projeto has previously
	 * been saved, it will retrieve related Versaos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Projeto.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Versao[] List of Versao objects
	 */
	public function getVersaosJoinTbTipoVersao($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = VersaoQuery::create(null, $criteria);
		$query->joinWith('TbTipoVersao', $join_behavior);

		return $this->getVersaos($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->co_projeto = null;
		$this->no_projeto = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
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
			if ($this->collRlOrgaoProjetos) {
				foreach ($this->collRlOrgaoProjetos as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collRlProjetoVersaoAmbs) {
				foreach ($this->collRlProjetoVersaoAmbs as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collTbModuloProjetos) {
				foreach ($this->collTbModuloProjetos as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collVersaos) {
				foreach ($this->collVersaos as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collRlOrgaoProjetos instanceof PropelCollection) {
			$this->collRlOrgaoProjetos->clearIterator();
		}
		$this->collRlOrgaoProjetos = null;
		if ($this->collRlProjetoVersaoAmbs instanceof PropelCollection) {
			$this->collRlProjetoVersaoAmbs->clearIterator();
		}
		$this->collRlProjetoVersaoAmbs = null;
		if ($this->collTbModuloProjetos instanceof PropelCollection) {
			$this->collTbModuloProjetos->clearIterator();
		}
		$this->collTbModuloProjetos = null;
		if ($this->collVersaos instanceof PropelCollection) {
			$this->collVersaos->clearIterator();
		}
		$this->collVersaos = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(ProjetoPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseProjeto
