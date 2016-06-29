<?php


/**
 * Base class that represents a row from the 'orgao' table.
 *
 * 
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseOrgao extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'OrgaoPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        OrgaoPeer
	 */
	protected static $peer;

	/**
	 * The value for the co_orgao field.
	 * @var        int
	 */
	protected $co_orgao;

	/**
	 * The value for the no_orgao field.
	 * @var        string
	 */
	protected $no_orgao;

	/**
	 * The value for the nu_telefone_orgao field.
	 * @var        string
	 */
	protected $nu_telefone_orgao;

	/**
	 * The value for the sg_orgao field.
	 * @var        string
	 */
	protected $sg_orgao;

	/**
	 * @var        array RlOrgaoProjeto[] Collection to store aggregation of RlOrgaoProjeto objects.
	 */
	protected $collRlOrgaoProjetos;

	/**
	 * @var        array RlUsuarioOrgao[] Collection to store aggregation of RlUsuarioOrgao objects.
	 */
	protected $collRlUsuarioOrgaos;

	/**
	 * @var        array Tarefa[] Collection to store aggregation of Tarefa objects.
	 */
	protected $collTarefas;

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
	 * Get the [co_orgao] column value.
	 * 
	 * @return     int
	 */
	public function getCoOrgao()
	{
		return $this->co_orgao;
	}

	/**
	 * Get the [no_orgao] column value.
	 * 
	 * @return     string
	 */
	public function getNoOrgao()
	{
		return $this->no_orgao;
	}

	/**
	 * Get the [nu_telefone_orgao] column value.
	 * 
	 * @return     string
	 */
	public function getNuTelefoneOrgao()
	{
		return $this->nu_telefone_orgao;
	}

	/**
	 * Get the [sg_orgao] column value.
	 * 
	 * @return     string
	 */
	public function getSgOrgao()
	{
		return $this->sg_orgao;
	}

	/**
	 * Set the value of [co_orgao] column.
	 * 
	 * @param      int $v new value
	 * @return     Orgao The current object (for fluent API support)
	 */
	public function setCoOrgao($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_orgao !== $v) {
			$this->co_orgao = $v;
			$this->modifiedColumns[] = OrgaoPeer::CO_ORGAO;
		}

		return $this;
	} // setCoOrgao()

	/**
	 * Set the value of [no_orgao] column.
	 * 
	 * @param      string $v new value
	 * @return     Orgao The current object (for fluent API support)
	 */
	public function setNoOrgao($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->no_orgao !== $v) {
			$this->no_orgao = $v;
			$this->modifiedColumns[] = OrgaoPeer::NO_ORGAO;
		}

		return $this;
	} // setNoOrgao()

	/**
	 * Set the value of [nu_telefone_orgao] column.
	 * 
	 * @param      string $v new value
	 * @return     Orgao The current object (for fluent API support)
	 */
	public function setNuTelefoneOrgao($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->nu_telefone_orgao !== $v) {
			$this->nu_telefone_orgao = $v;
			$this->modifiedColumns[] = OrgaoPeer::NU_TELEFONE_ORGAO;
		}

		return $this;
	} // setNuTelefoneOrgao()

	/**
	 * Set the value of [sg_orgao] column.
	 * 
	 * @param      string $v new value
	 * @return     Orgao The current object (for fluent API support)
	 */
	public function setSgOrgao($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sg_orgao !== $v) {
			$this->sg_orgao = $v;
			$this->modifiedColumns[] = OrgaoPeer::SG_ORGAO;
		}

		return $this;
	} // setSgOrgao()

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

			$this->co_orgao = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->no_orgao = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->nu_telefone_orgao = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->sg_orgao = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 4; // 4 = OrgaoPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Orgao object", $e);
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
			$con = Propel::getConnection(OrgaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = OrgaoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collRlOrgaoProjetos = null;

			$this->collRlUsuarioOrgaos = null;

			$this->collTarefas = null;

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
			$con = Propel::getConnection(OrgaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = OrgaoQuery::create()
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
			$con = Propel::getConnection(OrgaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				OrgaoPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = OrgaoPeer::CO_ORGAO;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(OrgaoPeer::CO_ORGAO) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.OrgaoPeer::CO_ORGAO.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setCoOrgao($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = OrgaoPeer::doUpdate($this, $con);
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

			if ($this->collRlUsuarioOrgaos !== null) {
				foreach ($this->collRlUsuarioOrgaos as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collTarefas !== null) {
				foreach ($this->collTarefas as $referrerFK) {
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


			if (($retval = OrgaoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collRlOrgaoProjetos !== null) {
					foreach ($this->collRlOrgaoProjetos as $referrerFK) {
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

				if ($this->collTarefas !== null) {
					foreach ($this->collTarefas as $referrerFK) {
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
		$pos = OrgaoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCoOrgao();
				break;
			case 1:
				return $this->getNoOrgao();
				break;
			case 2:
				return $this->getNuTelefoneOrgao();
				break;
			case 3:
				return $this->getSgOrgao();
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
		if (isset($alreadyDumpedObjects['Orgao'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Orgao'][$this->getPrimaryKey()] = true;
		$keys = OrgaoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCoOrgao(),
			$keys[1] => $this->getNoOrgao(),
			$keys[2] => $this->getNuTelefoneOrgao(),
			$keys[3] => $this->getSgOrgao(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->collRlOrgaoProjetos) {
				$result['RlOrgaoProjetos'] = $this->collRlOrgaoProjetos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collRlUsuarioOrgaos) {
				$result['RlUsuarioOrgaos'] = $this->collRlUsuarioOrgaos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collTarefas) {
				$result['Tarefas'] = $this->collTarefas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = OrgaoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCoOrgao($value);
				break;
			case 1:
				$this->setNoOrgao($value);
				break;
			case 2:
				$this->setNuTelefoneOrgao($value);
				break;
			case 3:
				$this->setSgOrgao($value);
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
		$keys = OrgaoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoOrgao($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNoOrgao($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNuTelefoneOrgao($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSgOrgao($arr[$keys[3]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(OrgaoPeer::DATABASE_NAME);

		if ($this->isColumnModified(OrgaoPeer::CO_ORGAO)) $criteria->add(OrgaoPeer::CO_ORGAO, $this->co_orgao);
		if ($this->isColumnModified(OrgaoPeer::NO_ORGAO)) $criteria->add(OrgaoPeer::NO_ORGAO, $this->no_orgao);
		if ($this->isColumnModified(OrgaoPeer::NU_TELEFONE_ORGAO)) $criteria->add(OrgaoPeer::NU_TELEFONE_ORGAO, $this->nu_telefone_orgao);
		if ($this->isColumnModified(OrgaoPeer::SG_ORGAO)) $criteria->add(OrgaoPeer::SG_ORGAO, $this->sg_orgao);

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
		$criteria = new Criteria(OrgaoPeer::DATABASE_NAME);
		$criteria->add(OrgaoPeer::CO_ORGAO, $this->co_orgao);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getCoOrgao();
	}

	/**
	 * Generic method to set the primary key (co_orgao column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setCoOrgao($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getCoOrgao();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Orgao (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setNoOrgao($this->getNoOrgao());
		$copyObj->setNuTelefoneOrgao($this->getNuTelefoneOrgao());
		$copyObj->setSgOrgao($this->getSgOrgao());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getRlOrgaoProjetos() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addRlOrgaoProjeto($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getRlUsuarioOrgaos() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addRlUsuarioOrgao($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getTarefas() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addTarefa($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setCoOrgao(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Orgao Clone of current object.
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
	 * @return     OrgaoPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new OrgaoPeer();
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
		if ('RlUsuarioOrgao' == $relationName) {
			return $this->initRlUsuarioOrgaos();
		}
		if ('Tarefa' == $relationName) {
			return $this->initTarefas();
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
	 * If this Orgao is new, it will return
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
					->filterByOrgao($this)
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
					->filterByOrgao($this)
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
	 * @return     Orgao The current object (for fluent API support)
	 */
	public function addRlOrgaoProjeto(RlOrgaoProjeto $l)
	{
		if ($this->collRlOrgaoProjetos === null) {
			$this->initRlOrgaoProjetos();
		}
		if (!$this->collRlOrgaoProjetos->contains($l)) { // only add it if the **same** object is not already associated
			$this->collRlOrgaoProjetos[]= $l;
			$l->setOrgao($this);
		}

		return $this;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Orgao is new, it will return
	 * an empty collection; or if this Orgao has previously
	 * been saved, it will retrieve related RlOrgaoProjetos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Orgao.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array RlOrgaoProjeto[] List of RlOrgaoProjeto objects
	 */
	public function getRlOrgaoProjetosJoinProjeto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = RlOrgaoProjetoQuery::create(null, $criteria);
		$query->joinWith('Projeto', $join_behavior);

		return $this->getRlOrgaoProjetos($query, $con);
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
	 * If this Orgao is new, it will return
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
					->filterByOrgao($this)
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
					->filterByOrgao($this)
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
	 * @return     Orgao The current object (for fluent API support)
	 */
	public function addRlUsuarioOrgao(RlUsuarioOrgao $l)
	{
		if ($this->collRlUsuarioOrgaos === null) {
			$this->initRlUsuarioOrgaos();
		}
		if (!$this->collRlUsuarioOrgaos->contains($l)) { // only add it if the **same** object is not already associated
			$this->collRlUsuarioOrgaos[]= $l;
			$l->setOrgao($this);
		}

		return $this;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Orgao is new, it will return
	 * an empty collection; or if this Orgao has previously
	 * been saved, it will retrieve related RlUsuarioOrgaos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Orgao.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array RlUsuarioOrgao[] List of RlUsuarioOrgao objects
	 */
	public function getRlUsuarioOrgaosJoinUsuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = RlUsuarioOrgaoQuery::create(null, $criteria);
		$query->joinWith('Usuario', $join_behavior);

		return $this->getRlUsuarioOrgaos($query, $con);
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
	 * If this Orgao is new, it will return
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
					->filterByOrgao($this)
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
					->filterByOrgao($this)
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
	 * @return     Orgao The current object (for fluent API support)
	 */
	public function addTarefa(Tarefa $l)
	{
		if ($this->collTarefas === null) {
			$this->initTarefas();
		}
		if (!$this->collTarefas->contains($l)) { // only add it if the **same** object is not already associated
			$this->collTarefas[]= $l;
			$l->setOrgao($this);
		}

		return $this;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Orgao is new, it will return
	 * an empty collection; or if this Orgao has previously
	 * been saved, it will retrieve related Tarefas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Orgao.
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
	 * Otherwise if this Orgao is new, it will return
	 * an empty collection; or if this Orgao has previously
	 * been saved, it will retrieve related Tarefas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Orgao.
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
	 * Otherwise if this Orgao is new, it will return
	 * an empty collection; or if this Orgao has previously
	 * been saved, it will retrieve related Tarefas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Orgao.
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
	 * Otherwise if this Orgao is new, it will return
	 * an empty collection; or if this Orgao has previously
	 * been saved, it will retrieve related Tarefas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Orgao.
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
	 * Otherwise if this Orgao is new, it will return
	 * an empty collection; or if this Orgao has previously
	 * been saved, it will retrieve related Tarefas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Orgao.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Tarefa[] List of Tarefa objects
	 */
	public function getTarefasJoinStatus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TarefaQuery::create(null, $criteria);
		$query->joinWith('Status', $join_behavior);

		return $this->getTarefas($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Orgao is new, it will return
	 * an empty collection; or if this Orgao has previously
	 * been saved, it will retrieve related Tarefas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Orgao.
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
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->co_orgao = null;
		$this->no_orgao = null;
		$this->nu_telefone_orgao = null;
		$this->sg_orgao = null;
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
			if ($this->collRlUsuarioOrgaos) {
				foreach ($this->collRlUsuarioOrgaos as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collTarefas) {
				foreach ($this->collTarefas as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collRlOrgaoProjetos instanceof PropelCollection) {
			$this->collRlOrgaoProjetos->clearIterator();
		}
		$this->collRlOrgaoProjetos = null;
		if ($this->collRlUsuarioOrgaos instanceof PropelCollection) {
			$this->collRlUsuarioOrgaos->clearIterator();
		}
		$this->collRlUsuarioOrgaos = null;
		if ($this->collTarefas instanceof PropelCollection) {
			$this->collTarefas->clearIterator();
		}
		$this->collTarefas = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(OrgaoPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseOrgao
