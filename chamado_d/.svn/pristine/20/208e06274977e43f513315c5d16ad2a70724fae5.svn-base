<?php


/**
 * Base class that represents a row from the 'tb_descricao_chamado' table.
 *
 * 
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseTbDescricaoChamado extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'TbDescricaoChamadoPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        TbDescricaoChamadoPeer
	 */
	protected static $peer;

	/**
	 * The value for the co_seq_desc_chamado field.
	 * @var        int
	 */
	protected $co_seq_desc_chamado;

	/**
	 * The value for the co_tarefa field.
	 * @var        int
	 */
	protected $co_tarefa;

	/**
	 * The value for the co_usuario field.
	 * @var        int
	 */
	protected $co_usuario;

	/**
	 * The value for the ds_chamado field.
	 * @var        string
	 */
	protected $ds_chamado;

	/**
	 * The value for the dt_cadastro field.
	 * @var        string
	 */
	protected $dt_cadastro;

	/**
	 * The value for the dt_atualizacao field.
	 * @var        string
	 */
	protected $dt_atualizacao;

	/**
	 * @var        Tarefa
	 */
	protected $aTarefa;

	/**
	 * @var        Usuario
	 */
	protected $aUsuario;

	/**
	 * @var        array TbImagem[] Collection to store aggregation of TbImagem objects.
	 */
	protected $collTbImagems;

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
	 * Get the [co_seq_desc_chamado] column value.
	 * 
	 * @return     int
	 */
	public function getCoSeqDescChamado()
	{
		return $this->co_seq_desc_chamado;
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
	 * Get the [co_usuario] column value.
	 * 
	 * @return     int
	 */
	public function getCoUsuario()
	{
		return $this->co_usuario;
	}

	/**
	 * Get the [ds_chamado] column value.
	 * 
	 * @return     string
	 */
	public function getDsChamado()
	{
		return $this->ds_chamado;
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
	 * Get the [optionally formatted] temporal [dt_atualizacao] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDtAtualizacao($format = 'd-m-Y H:i:s')
	{
		if ($this->dt_atualizacao === null) {
			return null;
		}



		try {
			$dt = new DateTime($this->dt_atualizacao);
		} catch (Exception $x) {
			throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dt_atualizacao, true), $x);
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
	 * Set the value of [co_seq_desc_chamado] column.
	 * 
	 * @param      int $v new value
	 * @return     TbDescricaoChamado The current object (for fluent API support)
	 */
	public function setCoSeqDescChamado($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_seq_desc_chamado !== $v) {
			$this->co_seq_desc_chamado = $v;
			$this->modifiedColumns[] = TbDescricaoChamadoPeer::CO_SEQ_DESC_CHAMADO;
		}

		return $this;
	} // setCoSeqDescChamado()

	/**
	 * Set the value of [co_tarefa] column.
	 * 
	 * @param      int $v new value
	 * @return     TbDescricaoChamado The current object (for fluent API support)
	 */
	public function setCoTarefa($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_tarefa !== $v) {
			$this->co_tarefa = $v;
			$this->modifiedColumns[] = TbDescricaoChamadoPeer::CO_TAREFA;
		}

		if ($this->aTarefa !== null && $this->aTarefa->getCoTarefa() !== $v) {
			$this->aTarefa = null;
		}

		return $this;
	} // setCoTarefa()

	/**
	 * Set the value of [co_usuario] column.
	 * 
	 * @param      int $v new value
	 * @return     TbDescricaoChamado The current object (for fluent API support)
	 */
	public function setCoUsuario($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->co_usuario !== $v) {
			$this->co_usuario = $v;
			$this->modifiedColumns[] = TbDescricaoChamadoPeer::CO_USUARIO;
		}

		if ($this->aUsuario !== null && $this->aUsuario->getCoUsuario() !== $v) {
			$this->aUsuario = null;
		}

		return $this;
	} // setCoUsuario()

	/**
	 * Set the value of [ds_chamado] column.
	 * 
	 * @param      string $v new value
	 * @return     TbDescricaoChamado The current object (for fluent API support)
	 */
	public function setDsChamado($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ds_chamado !== $v) {
			$this->ds_chamado = $v;
			$this->modifiedColumns[] = TbDescricaoChamadoPeer::DS_CHAMADO;
		}

		return $this;
	} // setDsChamado()

	/**
	 * Sets the value of [dt_cadastro] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     TbDescricaoChamado The current object (for fluent API support)
	 */
	public function setDtCadastro($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->dt_cadastro !== null || $dt !== null) {
			$currentDateAsString = ($this->dt_cadastro !== null && $tmpDt = new DateTime($this->dt_cadastro)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->dt_cadastro = $newDateAsString;
				$this->modifiedColumns[] = TbDescricaoChamadoPeer::DT_CADASTRO;
			}
		} // if either are not null

		return $this;
	} // setDtCadastro()

	/**
	 * Sets the value of [dt_atualizacao] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     TbDescricaoChamado The current object (for fluent API support)
	 */
	public function setDtAtualizacao($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->dt_atualizacao !== null || $dt !== null) {
			$currentDateAsString = ($this->dt_atualizacao !== null && $tmpDt = new DateTime($this->dt_atualizacao)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->dt_atualizacao = $newDateAsString;
				$this->modifiedColumns[] = TbDescricaoChamadoPeer::DT_ATUALIZACAO;
			}
		} // if either are not null

		return $this;
	} // setDtAtualizacao()

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

			$this->co_seq_desc_chamado = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->co_tarefa = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->co_usuario = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->ds_chamado = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->dt_cadastro = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->dt_atualizacao = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 6; // 6 = TbDescricaoChamadoPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating TbDescricaoChamado object", $e);
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

		if ($this->aTarefa !== null && $this->co_tarefa !== $this->aTarefa->getCoTarefa()) {
			$this->aTarefa = null;
		}
		if ($this->aUsuario !== null && $this->co_usuario !== $this->aUsuario->getCoUsuario()) {
			$this->aUsuario = null;
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
			$con = Propel::getConnection(TbDescricaoChamadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = TbDescricaoChamadoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aTarefa = null;
			$this->aUsuario = null;
			$this->collTbImagems = null;

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
			$con = Propel::getConnection(TbDescricaoChamadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = TbDescricaoChamadoQuery::create()
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
			$con = Propel::getConnection(TbDescricaoChamadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				TbDescricaoChamadoPeer::addInstanceToPool($this);
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

			if ($this->aTarefa !== null) {
				if ($this->aTarefa->isModified() || $this->aTarefa->isNew()) {
					$affectedRows += $this->aTarefa->save($con);
				}
				$this->setTarefa($this->aTarefa);
			}

			if ($this->aUsuario !== null) {
				if ($this->aUsuario->isModified() || $this->aUsuario->isNew()) {
					$affectedRows += $this->aUsuario->save($con);
				}
				$this->setUsuario($this->aUsuario);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = TbDescricaoChamadoPeer::CO_SEQ_DESC_CHAMADO;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(TbDescricaoChamadoPeer::CO_SEQ_DESC_CHAMADO) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.TbDescricaoChamadoPeer::CO_SEQ_DESC_CHAMADO.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setCoSeqDescChamado($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += TbDescricaoChamadoPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collTbImagems !== null) {
				foreach ($this->collTbImagems as $referrerFK) {
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

			if ($this->aTarefa !== null) {
				if (!$this->aTarefa->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTarefa->getValidationFailures());
				}
			}

			if ($this->aUsuario !== null) {
				if (!$this->aUsuario->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUsuario->getValidationFailures());
				}
			}


			if (($retval = TbDescricaoChamadoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collTbImagems !== null) {
					foreach ($this->collTbImagems as $referrerFK) {
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
		$pos = TbDescricaoChamadoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCoSeqDescChamado();
				break;
			case 1:
				return $this->getCoTarefa();
				break;
			case 2:
				return $this->getCoUsuario();
				break;
			case 3:
				return $this->getDsChamado();
				break;
			case 4:
				return $this->getDtCadastro();
				break;
			case 5:
				return $this->getDtAtualizacao();
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
		if (isset($alreadyDumpedObjects['TbDescricaoChamado'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['TbDescricaoChamado'][$this->getPrimaryKey()] = true;
		$keys = TbDescricaoChamadoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCoSeqDescChamado(),
			$keys[1] => $this->getCoTarefa(),
			$keys[2] => $this->getCoUsuario(),
			$keys[3] => $this->getDsChamado(),
			$keys[4] => $this->getDtCadastro(),
			$keys[5] => $this->getDtAtualizacao(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aTarefa) {
				$result['Tarefa'] = $this->aTarefa->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aUsuario) {
				$result['Usuario'] = $this->aUsuario->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->collTbImagems) {
				$result['TbImagems'] = $this->collTbImagems->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = TbDescricaoChamadoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCoSeqDescChamado($value);
				break;
			case 1:
				$this->setCoTarefa($value);
				break;
			case 2:
				$this->setCoUsuario($value);
				break;
			case 3:
				$this->setDsChamado($value);
				break;
			case 4:
				$this->setDtCadastro($value);
				break;
			case 5:
				$this->setDtAtualizacao($value);
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
		$keys = TbDescricaoChamadoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCoSeqDescChamado($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCoTarefa($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCoUsuario($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDsChamado($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDtCadastro($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDtAtualizacao($arr[$keys[5]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(TbDescricaoChamadoPeer::DATABASE_NAME);

		if ($this->isColumnModified(TbDescricaoChamadoPeer::CO_SEQ_DESC_CHAMADO)) $criteria->add(TbDescricaoChamadoPeer::CO_SEQ_DESC_CHAMADO, $this->co_seq_desc_chamado);
		if ($this->isColumnModified(TbDescricaoChamadoPeer::CO_TAREFA)) $criteria->add(TbDescricaoChamadoPeer::CO_TAREFA, $this->co_tarefa);
		if ($this->isColumnModified(TbDescricaoChamadoPeer::CO_USUARIO)) $criteria->add(TbDescricaoChamadoPeer::CO_USUARIO, $this->co_usuario);
		if ($this->isColumnModified(TbDescricaoChamadoPeer::DS_CHAMADO)) $criteria->add(TbDescricaoChamadoPeer::DS_CHAMADO, $this->ds_chamado);
		if ($this->isColumnModified(TbDescricaoChamadoPeer::DT_CADASTRO)) $criteria->add(TbDescricaoChamadoPeer::DT_CADASTRO, $this->dt_cadastro);
		if ($this->isColumnModified(TbDescricaoChamadoPeer::DT_ATUALIZACAO)) $criteria->add(TbDescricaoChamadoPeer::DT_ATUALIZACAO, $this->dt_atualizacao);

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
		$criteria = new Criteria(TbDescricaoChamadoPeer::DATABASE_NAME);
		$criteria->add(TbDescricaoChamadoPeer::CO_SEQ_DESC_CHAMADO, $this->co_seq_desc_chamado);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getCoSeqDescChamado();
	}

	/**
	 * Generic method to set the primary key (co_seq_desc_chamado column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setCoSeqDescChamado($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getCoSeqDescChamado();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of TbDescricaoChamado (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setCoTarefa($this->getCoTarefa());
		$copyObj->setCoUsuario($this->getCoUsuario());
		$copyObj->setDsChamado($this->getDsChamado());
		$copyObj->setDtCadastro($this->getDtCadastro());
		$copyObj->setDtAtualizacao($this->getDtAtualizacao());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getTbImagems() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addTbImagem($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setCoSeqDescChamado(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     TbDescricaoChamado Clone of current object.
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
	 * @return     TbDescricaoChamadoPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new TbDescricaoChamadoPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Tarefa object.
	 *
	 * @param      Tarefa $v
	 * @return     TbDescricaoChamado The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setTarefa(Tarefa $v = null)
	{
		if ($v === null) {
			$this->setCoTarefa(NULL);
		} else {
			$this->setCoTarefa($v->getCoTarefa());
		}

		$this->aTarefa = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Tarefa object, it will not be re-added.
		if ($v !== null) {
			$v->addTbDescricaoChamado($this);
		}

		return $this;
	}


	/**
	 * Get the associated Tarefa object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Tarefa The associated Tarefa object.
	 * @throws     PropelException
	 */
	public function getTarefa(PropelPDO $con = null)
	{
		if ($this->aTarefa === null && ($this->co_tarefa !== null)) {
			$this->aTarefa = TarefaQuery::create()->findPk($this->co_tarefa, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aTarefa->addTbDescricaoChamados($this);
			 */
		}
		return $this->aTarefa;
	}

	/**
	 * Declares an association between this object and a Usuario object.
	 *
	 * @param      Usuario $v
	 * @return     TbDescricaoChamado The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setUsuario(Usuario $v = null)
	{
		if ($v === null) {
			$this->setCoUsuario(NULL);
		} else {
			$this->setCoUsuario($v->getCoUsuario());
		}

		$this->aUsuario = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Usuario object, it will not be re-added.
		if ($v !== null) {
			$v->addTbDescricaoChamado($this);
		}

		return $this;
	}


	/**
	 * Get the associated Usuario object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Usuario The associated Usuario object.
	 * @throws     PropelException
	 */
	public function getUsuario(PropelPDO $con = null)
	{
		if ($this->aUsuario === null && ($this->co_usuario !== null)) {
			$this->aUsuario = UsuarioQuery::create()->findPk($this->co_usuario, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aUsuario->addTbDescricaoChamados($this);
			 */
		}
		return $this->aUsuario;
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
		if ('TbImagem' == $relationName) {
			return $this->initTbImagems();
		}
	}

	/**
	 * Clears out the collTbImagems collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addTbImagems()
	 */
	public function clearTbImagems()
	{
		$this->collTbImagems = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collTbImagems collection.
	 *
	 * By default this just sets the collTbImagems collection to an empty array (like clearcollTbImagems());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initTbImagems($overrideExisting = true)
	{
		if (null !== $this->collTbImagems && !$overrideExisting) {
			return;
		}
		$this->collTbImagems = new PropelObjectCollection();
		$this->collTbImagems->setModel('TbImagem');
	}

	/**
	 * Gets an array of TbImagem objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this TbDescricaoChamado is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array TbImagem[] List of TbImagem objects
	 * @throws     PropelException
	 */
	public function getTbImagems($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collTbImagems || null !== $criteria) {
			if ($this->isNew() && null === $this->collTbImagems) {
				// return empty collection
				$this->initTbImagems();
			} else {
				$collTbImagems = TbImagemQuery::create(null, $criteria)
					->filterByTbDescricaoChamado($this)
					->find($con);
				if (null !== $criteria) {
					return $collTbImagems;
				}
				$this->collTbImagems = $collTbImagems;
			}
		}
		return $this->collTbImagems;
	}

	/**
	 * Returns the number of related TbImagem objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related TbImagem objects.
	 * @throws     PropelException
	 */
	public function countTbImagems(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collTbImagems || null !== $criteria) {
			if ($this->isNew() && null === $this->collTbImagems) {
				return 0;
			} else {
				$query = TbImagemQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByTbDescricaoChamado($this)
					->count($con);
			}
		} else {
			return count($this->collTbImagems);
		}
	}

	/**
	 * Method called to associate a TbImagem object to this object
	 * through the TbImagem foreign key attribute.
	 *
	 * @param      TbImagem $l TbImagem
	 * @return     TbDescricaoChamado The current object (for fluent API support)
	 */
	public function addTbImagem(TbImagem $l)
	{
		if ($this->collTbImagems === null) {
			$this->initTbImagems();
		}
		if (!$this->collTbImagems->contains($l)) { // only add it if the **same** object is not already associated
			$this->collTbImagems[]= $l;
			$l->setTbDescricaoChamado($this);
		}

		return $this;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->co_seq_desc_chamado = null;
		$this->co_tarefa = null;
		$this->co_usuario = null;
		$this->ds_chamado = null;
		$this->dt_cadastro = null;
		$this->dt_atualizacao = null;
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
			if ($this->collTbImagems) {
				foreach ($this->collTbImagems as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collTbImagems instanceof PropelCollection) {
			$this->collTbImagems->clearIterator();
		}
		$this->collTbImagems = null;
		$this->aTarefa = null;
		$this->aUsuario = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(TbDescricaoChamadoPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseTbDescricaoChamado
