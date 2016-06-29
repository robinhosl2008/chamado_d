<?php


/**
 * Base class that represents a row from the 'tb_imagem' table.
 *
 * 
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseTbImagem extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'TbImagemPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        TbImagemPeer
	 */
	protected static $peer;

	/**
	 * The value for the co_seq_imagem field.
	 * @var        int
	 */
	protected $co_seq_imagem;

	/**
	 * The value for the co_seq_desc_chamado field.
	 * @var        int
	 */
	protected $co_seq_desc_chamado;

	/**
	 * The value for the no_imagem field.
	 * @var        string
	 */
	protected $no_imagem;

	/**
	 * The value for the dt_imagem field.
	 * @var        string
	 */
	protected $dt_imagem;

	/**
	 * The value for the ds_extensao field.
	 * @var        string
	 */
	protected $ds_extensao;

	/**
	 * The value for the ds_caminho field.
	 * @var        string
	 */
	protected $ds_caminho;

	/**
	 * @var        TbDescricaoChamado
	 */
	protected $aTbDescricaoChamado;

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
	 * Get the [co_seq_imagem] column value.
	 * 
	 * @return     int
	 */
	public function getCoSeqImagem()
	{
		return $this->co_seq_imagem;
	}

	/**
	 * Get the [co_seq_desc_chamado] column value.
	 * 
	 * @return     int
	 */
	public function getCoSeqDescChamado()
	{
		return $this->co_seq_desc_chamado;
	}

	/**
	 * Get the [no_imagem] column value.
	 * 
	 * @return     string
	 */
	public function getNoImagem()
	{
		return $this->no_imagem;
	}

	/**
	 * Get the [optionally formatted] temporal [dt_imagem] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDtImagem($format = 'd-m-Y H:i:s')
	{
		if ($this->dt_imagem === null) {
			return null;
		}



		try {
			$dt = new DateTime($this->dt_imagem);
		} catch (Exception $x) {
			throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dt_imagem, true), $x);
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
	 * Get the [ds_extensao] column value.
	 * 
	 * @return     string
	 */
	public function getDsExtensao()
	{
		return $this->ds_extensao;
	}

	/**
	 * Get the [ds_caminho] column value.
	 * 
	 * @return     string
	 */
	public function getDsCaminho()
	{
		return $this->ds_caminho;
	}

	/**
	 * Set the value of [co_seq_imagem] column.
	 * 
	 * @param      int $v new value
	 * @return     TbImagem The current object (for fluent API support)
	 */
	public function setCoSeqImagem($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_seq_imagem !== $v) {
			$this->co_seq_imagem = $v;
			$this->modifiedColumns[] = TbImagemPeer::CO_SEQ_IMAGEM;
		}

		return $this;
	} // setCoSeqImagem()

	/**
	 * Set the value of [co_seq_desc_chamado] column.
	 * 
	 * @param      int $v new value
	 * @return     TbImagem The current object (for fluent API support)
	 */
	public function setCoSeqDescChamado($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_seq_desc_chamado !== $v) {
			$this->co_seq_desc_chamado = $v;
			$this->modifiedColumns[] = TbImagemPeer::CO_SEQ_DESC_CHAMADO;
		}

		if ($this->aTbDescricaoChamado !== null && $this->aTbDescricaoChamado->getCoSeqDescChamado() !== $v) {
			$this->aTbDescricaoChamado = null;
		}

		return $this;
	} // setCoSeqDescChamado()

	/**
	 * Set the value of [no_imagem] column.
	 * 
	 * @param      string $v new value
	 * @return     TbImagem The current object (for fluent API support)
	 */
	public function setNoImagem($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->no_imagem !== $v) {
			$this->no_imagem = $v;
			$this->modifiedColumns[] = TbImagemPeer::NO_IMAGEM;
		}

		return $this;
	} // setNoImagem()

	/**
	 * Sets the value of [dt_imagem] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     TbImagem The current object (for fluent API support)
	 */
	public function setDtImagem($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->dt_imagem !== null || $dt !== null) {
			$currentDateAsString = ($this->dt_imagem !== null && $tmpDt = new DateTime($this->dt_imagem)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->dt_imagem = $newDateAsString;
				$this->modifiedColumns[] = TbImagemPeer::DT_IMAGEM;
			}
		} // if either are not null

		return $this;
	} // setDtImagem()

	/**
	 * Set the value of [ds_extensao] column.
	 * 
	 * @param      string $v new value
	 * @return     TbImagem The current object (for fluent API support)
	 */
	public function setDsExtensao($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ds_extensao !== $v) {
			$this->ds_extensao = $v;
			$this->modifiedColumns[] = TbImagemPeer::DS_EXTENSAO;
		}

		return $this;
	} // setDsExtensao()

	/**
	 * Set the value of [ds_caminho] column.
	 * 
	 * @param      string $v new value
	 * @return     TbImagem The current object (for fluent API support)
	 */
	public function setDsCaminho($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ds_caminho !== $v) {
			$this->ds_caminho = $v;
			$this->modifiedColumns[] = TbImagemPeer::DS_CAMINHO;
		}

		return $this;
	} // setDsCaminho()

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

			$this->co_seq_imagem = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->co_seq_desc_chamado = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->no_imagem = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->dt_imagem = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->ds_extensao = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->ds_caminho = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 6; // 6 = TbImagemPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating TbImagem object", $e);
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

		if ($this->aTbDescricaoChamado !== null && $this->co_seq_desc_chamado !== $this->aTbDescricaoChamado->getCoSeqDescChamado()) {
			$this->aTbDescricaoChamado = null;
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
			$con = Propel::getConnection(TbImagemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = TbImagemPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aTbDescricaoChamado = null;
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
			$con = Propel::getConnection(TbImagemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = TbImagemQuery::create()
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
			$con = Propel::getConnection(TbImagemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				TbImagemPeer::addInstanceToPool($this);
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

			if ($this->aTbDescricaoChamado !== null) {
				if ($this->aTbDescricaoChamado->isModified() || $this->aTbDescricaoChamado->isNew()) {
					$affectedRows += $this->aTbDescricaoChamado->save($con);
				}
				$this->setTbDescricaoChamado($this->aTbDescricaoChamado);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = TbImagemPeer::CO_SEQ_IMAGEM;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(TbImagemPeer::CO_SEQ_IMAGEM) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.TbImagemPeer::CO_SEQ_IMAGEM.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setCoSeqImagem($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += TbImagemPeer::doUpdate($this, $con);
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

			if ($this->aTbDescricaoChamado !== null) {
				if (!$this->aTbDescricaoChamado->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTbDescricaoChamado->getValidationFailures());
				}
			}


			if (($retval = TbImagemPeer::doValidate($this, $columns)) !== true) {
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
		$pos = TbImagemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCoSeqImagem();
				break;
			case 1:
				return $this->getCoSeqDescChamado();
				break;
			case 2:
				return $this->getNoImagem();
				break;
			case 3:
				return $this->getDtImagem();
				break;
			case 4:
				return $this->getDsExtensao();
				break;
			case 5:
				return $this->getDsCaminho();
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
		if (isset($alreadyDumpedObjects['TbImagem'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['TbImagem'][$this->getPrimaryKey()] = true;
		$keys = TbImagemPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCoSeqImagem(),
			$keys[1] => $this->getCoSeqDescChamado(),
			$keys[2] => $this->getNoImagem(),
			$keys[3] => $this->getDtImagem(),
			$keys[4] => $this->getDsExtensao(),
			$keys[5] => $this->getDsCaminho(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aTbDescricaoChamado) {
				$result['TbDescricaoChamado'] = $this->aTbDescricaoChamado->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
		$pos = TbImagemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCoSeqImagem($value);
				break;
			case 1:
				$this->setCoSeqDescChamado($value);
				break;
			case 2:
				$this->setNoImagem($value);
				break;
			case 3:
				$this->setDtImagem($value);
				break;
			case 4:
				$this->setDsExtensao($value);
				break;
			case 5:
				$this->setDsCaminho($value);
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
		$keys = TbImagemPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoSeqImagem($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCoSeqDescChamado($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNoImagem($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDtImagem($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDsExtensao($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDsCaminho($arr[$keys[5]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(TbImagemPeer::DATABASE_NAME);

		if ($this->isColumnModified(TbImagemPeer::CO_SEQ_IMAGEM)) $criteria->add(TbImagemPeer::CO_SEQ_IMAGEM, $this->co_seq_imagem);
		if ($this->isColumnModified(TbImagemPeer::CO_SEQ_DESC_CHAMADO)) $criteria->add(TbImagemPeer::CO_SEQ_DESC_CHAMADO, $this->co_seq_desc_chamado);
		if ($this->isColumnModified(TbImagemPeer::NO_IMAGEM)) $criteria->add(TbImagemPeer::NO_IMAGEM, $this->no_imagem);
		if ($this->isColumnModified(TbImagemPeer::DT_IMAGEM)) $criteria->add(TbImagemPeer::DT_IMAGEM, $this->dt_imagem);
		if ($this->isColumnModified(TbImagemPeer::DS_EXTENSAO)) $criteria->add(TbImagemPeer::DS_EXTENSAO, $this->ds_extensao);
		if ($this->isColumnModified(TbImagemPeer::DS_CAMINHO)) $criteria->add(TbImagemPeer::DS_CAMINHO, $this->ds_caminho);

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
		$criteria = new Criteria(TbImagemPeer::DATABASE_NAME);
		$criteria->add(TbImagemPeer::CO_SEQ_IMAGEM, $this->co_seq_imagem);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getCoSeqImagem();
	}

	/**
	 * Generic method to set the primary key (co_seq_imagem column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setCoSeqImagem($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getCoSeqImagem();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of TbImagem (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setCoSeqDescChamado($this->getCoSeqDescChamado());
		$copyObj->setNoImagem($this->getNoImagem());
		$copyObj->setDtImagem($this->getDtImagem());
		$copyObj->setDsExtensao($this->getDsExtensao());
		$copyObj->setDsCaminho($this->getDsCaminho());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setCoSeqImagem(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     TbImagem Clone of current object.
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
	 * @return     TbImagemPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new TbImagemPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a TbDescricaoChamado object.
	 *
	 * @param      TbDescricaoChamado $v
	 * @return     TbImagem The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setTbDescricaoChamado(TbDescricaoChamado $v = null)
	{
		if ($v === null) {
			$this->setCoSeqDescChamado(NULL);
		} else {
			$this->setCoSeqDescChamado($v->getCoSeqDescChamado());
		}

		$this->aTbDescricaoChamado = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the TbDescricaoChamado object, it will not be re-added.
		if ($v !== null) {
			$v->addTbImagem($this);
		}

		return $this;
	}


	/**
	 * Get the associated TbDescricaoChamado object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     TbDescricaoChamado The associated TbDescricaoChamado object.
	 * @throws     PropelException
	 */
	public function getTbDescricaoChamado(PropelPDO $con = null)
	{
		if ($this->aTbDescricaoChamado === null && ($this->co_seq_desc_chamado !== null)) {
			$this->aTbDescricaoChamado = TbDescricaoChamadoQuery::create()->findPk($this->co_seq_desc_chamado, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aTbDescricaoChamado->addTbImagems($this);
			 */
		}
		return $this->aTbDescricaoChamado;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->co_seq_imagem = null;
		$this->co_seq_desc_chamado = null;
		$this->no_imagem = null;
		$this->dt_imagem = null;
		$this->ds_extensao = null;
		$this->ds_caminho = null;
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
		} // if ($deep)

		$this->aTbDescricaoChamado = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(TbImagemPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseTbImagem
