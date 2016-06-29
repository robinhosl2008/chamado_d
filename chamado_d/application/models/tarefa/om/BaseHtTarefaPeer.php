<?php


/**
 * Base static class for performing query and update operations on the 'ht_tarefa' table.
 *
 * 
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseHtTarefaPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'tarefa';

	/** the table name for this class */
	const TABLE_NAME = 'ht_tarefa';

	/** the related Propel class for this table */
	const OM_CLASS = 'HtTarefa';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'tarefa.HtTarefa';

	/** the related TableMap class for this table */
	const TM_CLASS = 'HtTarefaTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 19;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 19;

	/** the column name for the CO_SEQ_HT_TAREFA field */
	const CO_SEQ_HT_TAREFA = 'ht_tarefa.CO_SEQ_HT_TAREFA';

	/** the column name for the CO_TAREFA field */
	const CO_TAREFA = 'ht_tarefa.CO_TAREFA';

	/** the column name for the CO_CATEGORIA field */
	const CO_CATEGORIA = 'ht_tarefa.CO_CATEGORIA';

	/** the column name for the CO_STATUS field */
	const CO_STATUS = 'ht_tarefa.CO_STATUS';

	/** the column name for the CO_PRIORIDADE field */
	const CO_PRIORIDADE = 'ht_tarefa.CO_PRIORIDADE';

	/** the column name for the CO_USUARIO_FECHAMENTO field */
	const CO_USUARIO_FECHAMENTO = 'ht_tarefa.CO_USUARIO_FECHAMENTO';

	/** the column name for the CO_NIVEL field */
	const CO_NIVEL = 'ht_tarefa.CO_NIVEL';

	/** the column name for the CO_SEQ_PROJ_VER_AMB field */
	const CO_SEQ_PROJ_VER_AMB = 'ht_tarefa.CO_SEQ_PROJ_VER_AMB';

	/** the column name for the CO_USUARIO_ABERTO field */
	const CO_USUARIO_ABERTO = 'ht_tarefa.CO_USUARIO_ABERTO';

	/** the column name for the CO_USUARIO_ATUALIZACAO field */
	const CO_USUARIO_ATUALIZACAO = 'ht_tarefa.CO_USUARIO_ATUALIZACAO';

	/** the column name for the DT_INICIO field */
	const DT_INICIO = 'ht_tarefa.DT_INICIO';

	/** the column name for the DT_PREVISAO field */
	const DT_PREVISAO = 'ht_tarefa.DT_PREVISAO';

	/** the column name for the DT_FIM field */
	const DT_FIM = 'ht_tarefa.DT_FIM';

	/** the column name for the DT_ATUALIZACAO field */
	const DT_ATUALIZACAO = 'ht_tarefa.DT_ATUALIZACAO';

	/** the column name for the NO_RESUMO field */
	const NO_RESUMO = 'ht_tarefa.NO_RESUMO';

	/** the column name for the CO_ORGAO field */
	const CO_ORGAO = 'ht_tarefa.CO_ORGAO';

	/** the column name for the EMAIL_ADICIONAIS field */
	const EMAIL_ADICIONAIS = 'ht_tarefa.EMAIL_ADICIONAIS';

	/** the column name for the CO_SEQ_MODULO_PROJ field */
	const CO_SEQ_MODULO_PROJ = 'ht_tarefa.CO_SEQ_MODULO_PROJ';

	/** the column name for the NR_TAREFA field */
	const NR_TAREFA = 'ht_tarefa.NR_TAREFA';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of HtTarefa objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array HtTarefa[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CoSeqHtTarefa', 'CoTarefa', 'CoCategoria', 'CoStatus', 'CoPrioridade', 'CoUsuarioFechamento', 'CoNivel', 'CoSeqProjVerAmb', 'CoUsuarioAberto', 'CoUsuarioAtualizacao', 'DtInicio', 'DtPrevisao', 'DtFim', 'DtAtualizacao', 'NoResumo', 'CoOrgao', 'EmailAdicionais', 'CoSeqModuloProj', 'NrTarefa', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('coSeqHtTarefa', 'coTarefa', 'coCategoria', 'coStatus', 'coPrioridade', 'coUsuarioFechamento', 'coNivel', 'coSeqProjVerAmb', 'coUsuarioAberto', 'coUsuarioAtualizacao', 'dtInicio', 'dtPrevisao', 'dtFim', 'dtAtualizacao', 'noResumo', 'coOrgao', 'emailAdicionais', 'coSeqModuloProj', 'nrTarefa', ),
		BasePeer::TYPE_COLNAME => array (self::CO_SEQ_HT_TAREFA, self::CO_TAREFA, self::CO_CATEGORIA, self::CO_STATUS, self::CO_PRIORIDADE, self::CO_USUARIO_FECHAMENTO, self::CO_NIVEL, self::CO_SEQ_PROJ_VER_AMB, self::CO_USUARIO_ABERTO, self::CO_USUARIO_ATUALIZACAO, self::DT_INICIO, self::DT_PREVISAO, self::DT_FIM, self::DT_ATUALIZACAO, self::NO_RESUMO, self::CO_ORGAO, self::EMAIL_ADICIONAIS, self::CO_SEQ_MODULO_PROJ, self::NR_TAREFA, ),
		BasePeer::TYPE_RAW_COLNAME => array ('CO_SEQ_HT_TAREFA', 'CO_TAREFA', 'CO_CATEGORIA', 'CO_STATUS', 'CO_PRIORIDADE', 'CO_USUARIO_FECHAMENTO', 'CO_NIVEL', 'CO_SEQ_PROJ_VER_AMB', 'CO_USUARIO_ABERTO', 'CO_USUARIO_ATUALIZACAO', 'DT_INICIO', 'DT_PREVISAO', 'DT_FIM', 'DT_ATUALIZACAO', 'NO_RESUMO', 'CO_ORGAO', 'EMAIL_ADICIONAIS', 'CO_SEQ_MODULO_PROJ', 'NR_TAREFA', ),
		BasePeer::TYPE_FIELDNAME => array ('co_seq_ht_tarefa', 'co_tarefa', 'co_categoria', 'co_status', 'co_prioridade', 'co_usuario_fechamento', 'co_nivel', 'co_seq_proj_ver_amb', 'co_usuario_aberto', 'co_usuario_atualizacao', 'dt_inicio', 'dt_previsao', 'dt_fim', 'dt_atualizacao', 'no_resumo', 'co_orgao', 'email_adicionais', 'co_seq_modulo_proj', 'nr_tarefa', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CoSeqHtTarefa' => 0, 'CoTarefa' => 1, 'CoCategoria' => 2, 'CoStatus' => 3, 'CoPrioridade' => 4, 'CoUsuarioFechamento' => 5, 'CoNivel' => 6, 'CoSeqProjVerAmb' => 7, 'CoUsuarioAberto' => 8, 'CoUsuarioAtualizacao' => 9, 'DtInicio' => 10, 'DtPrevisao' => 11, 'DtFim' => 12, 'DtAtualizacao' => 13, 'NoResumo' => 14, 'CoOrgao' => 15, 'EmailAdicionais' => 16, 'CoSeqModuloProj' => 17, 'NrTarefa' => 18, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('coSeqHtTarefa' => 0, 'coTarefa' => 1, 'coCategoria' => 2, 'coStatus' => 3, 'coPrioridade' => 4, 'coUsuarioFechamento' => 5, 'coNivel' => 6, 'coSeqProjVerAmb' => 7, 'coUsuarioAberto' => 8, 'coUsuarioAtualizacao' => 9, 'dtInicio' => 10, 'dtPrevisao' => 11, 'dtFim' => 12, 'dtAtualizacao' => 13, 'noResumo' => 14, 'coOrgao' => 15, 'emailAdicionais' => 16, 'coSeqModuloProj' => 17, 'nrTarefa' => 18, ),
		BasePeer::TYPE_COLNAME => array (self::CO_SEQ_HT_TAREFA => 0, self::CO_TAREFA => 1, self::CO_CATEGORIA => 2, self::CO_STATUS => 3, self::CO_PRIORIDADE => 4, self::CO_USUARIO_FECHAMENTO => 5, self::CO_NIVEL => 6, self::CO_SEQ_PROJ_VER_AMB => 7, self::CO_USUARIO_ABERTO => 8, self::CO_USUARIO_ATUALIZACAO => 9, self::DT_INICIO => 10, self::DT_PREVISAO => 11, self::DT_FIM => 12, self::DT_ATUALIZACAO => 13, self::NO_RESUMO => 14, self::CO_ORGAO => 15, self::EMAIL_ADICIONAIS => 16, self::CO_SEQ_MODULO_PROJ => 17, self::NR_TAREFA => 18, ),
		BasePeer::TYPE_RAW_COLNAME => array ('CO_SEQ_HT_TAREFA' => 0, 'CO_TAREFA' => 1, 'CO_CATEGORIA' => 2, 'CO_STATUS' => 3, 'CO_PRIORIDADE' => 4, 'CO_USUARIO_FECHAMENTO' => 5, 'CO_NIVEL' => 6, 'CO_SEQ_PROJ_VER_AMB' => 7, 'CO_USUARIO_ABERTO' => 8, 'CO_USUARIO_ATUALIZACAO' => 9, 'DT_INICIO' => 10, 'DT_PREVISAO' => 11, 'DT_FIM' => 12, 'DT_ATUALIZACAO' => 13, 'NO_RESUMO' => 14, 'CO_ORGAO' => 15, 'EMAIL_ADICIONAIS' => 16, 'CO_SEQ_MODULO_PROJ' => 17, 'NR_TAREFA' => 18, ),
		BasePeer::TYPE_FIELDNAME => array ('co_seq_ht_tarefa' => 0, 'co_tarefa' => 1, 'co_categoria' => 2, 'co_status' => 3, 'co_prioridade' => 4, 'co_usuario_fechamento' => 5, 'co_nivel' => 6, 'co_seq_proj_ver_amb' => 7, 'co_usuario_aberto' => 8, 'co_usuario_atualizacao' => 9, 'dt_inicio' => 10, 'dt_previsao' => 11, 'dt_fim' => 12, 'dt_atualizacao' => 13, 'no_resumo' => 14, 'co_orgao' => 15, 'email_adicionais' => 16, 'co_seq_modulo_proj' => 17, 'nr_tarefa' => 18, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. HtTarefaPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(HtTarefaPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      Criteria $criteria object containing the columns to add.
	 * @param      string   $alias    optional table alias
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria, $alias = null)
	{
		if (null === $alias) {
			$criteria->addSelectColumn(HtTarefaPeer::CO_SEQ_HT_TAREFA);
			$criteria->addSelectColumn(HtTarefaPeer::CO_TAREFA);
			$criteria->addSelectColumn(HtTarefaPeer::CO_CATEGORIA);
			$criteria->addSelectColumn(HtTarefaPeer::CO_STATUS);
			$criteria->addSelectColumn(HtTarefaPeer::CO_PRIORIDADE);
			$criteria->addSelectColumn(HtTarefaPeer::CO_USUARIO_FECHAMENTO);
			$criteria->addSelectColumn(HtTarefaPeer::CO_NIVEL);
			$criteria->addSelectColumn(HtTarefaPeer::CO_SEQ_PROJ_VER_AMB);
			$criteria->addSelectColumn(HtTarefaPeer::CO_USUARIO_ABERTO);
			$criteria->addSelectColumn(HtTarefaPeer::CO_USUARIO_ATUALIZACAO);
			$criteria->addSelectColumn(HtTarefaPeer::DT_INICIO);
			$criteria->addSelectColumn(HtTarefaPeer::DT_PREVISAO);
			$criteria->addSelectColumn(HtTarefaPeer::DT_FIM);
			$criteria->addSelectColumn(HtTarefaPeer::DT_ATUALIZACAO);
			$criteria->addSelectColumn(HtTarefaPeer::NO_RESUMO);
			$criteria->addSelectColumn(HtTarefaPeer::CO_ORGAO);
			$criteria->addSelectColumn(HtTarefaPeer::EMAIL_ADICIONAIS);
			$criteria->addSelectColumn(HtTarefaPeer::CO_SEQ_MODULO_PROJ);
			$criteria->addSelectColumn(HtTarefaPeer::NR_TAREFA);
		} else {
			$criteria->addSelectColumn($alias . '.CO_SEQ_HT_TAREFA');
			$criteria->addSelectColumn($alias . '.CO_TAREFA');
			$criteria->addSelectColumn($alias . '.CO_CATEGORIA');
			$criteria->addSelectColumn($alias . '.CO_STATUS');
			$criteria->addSelectColumn($alias . '.CO_PRIORIDADE');
			$criteria->addSelectColumn($alias . '.CO_USUARIO_FECHAMENTO');
			$criteria->addSelectColumn($alias . '.CO_NIVEL');
			$criteria->addSelectColumn($alias . '.CO_SEQ_PROJ_VER_AMB');
			$criteria->addSelectColumn($alias . '.CO_USUARIO_ABERTO');
			$criteria->addSelectColumn($alias . '.CO_USUARIO_ATUALIZACAO');
			$criteria->addSelectColumn($alias . '.DT_INICIO');
			$criteria->addSelectColumn($alias . '.DT_PREVISAO');
			$criteria->addSelectColumn($alias . '.DT_FIM');
			$criteria->addSelectColumn($alias . '.DT_ATUALIZACAO');
			$criteria->addSelectColumn($alias . '.NO_RESUMO');
			$criteria->addSelectColumn($alias . '.CO_ORGAO');
			$criteria->addSelectColumn($alias . '.EMAIL_ADICIONAIS');
			$criteria->addSelectColumn($alias . '.CO_SEQ_MODULO_PROJ');
			$criteria->addSelectColumn($alias . '.NR_TAREFA');
		}
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(HtTarefaPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			HtTarefaPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(HtTarefaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Selects one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     HtTarefa
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = HtTarefaPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Selects several row from the DB.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return HtTarefaPeer::populateObjects(HtTarefaPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(HtTarefaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			HtTarefaPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      HtTarefa $value A HtTarefa object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getCoSeqHtTarefa();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A HtTarefa object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof HtTarefa) {
				$key = (string) $value->getCoSeqHtTarefa();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or HtTarefa object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     HtTarefa Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to ht_tarefa
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
	}

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
	}

	/**
	 * Retrieves the primary key from the DB resultset row
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, an array of the primary key columns will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     mixed The primary key of the row
	 */
	public static function getPrimaryKeyFromRow($row, $startcol = 0)
	{
		return (int) $row[$startcol];
	}
	
	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = HtTarefaPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = HtTarefaPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = HtTarefaPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				HtTarefaPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Populates an object of the default type or an object that inherit from the default.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     array (HtTarefa object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = HtTarefaPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = HtTarefaPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + HtTarefaPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = HtTarefaPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			HtTarefaPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}

	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BaseHtTarefaPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseHtTarefaPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new HtTarefaTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * If $withPrefix is true, the returned path
	 * uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @param      boolean $withPrefix Whether or not to return the path with the class name
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass($withPrefix = true)
	{
		return $withPrefix ? HtTarefaPeer::CLASS_DEFAULT : HtTarefaPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a HtTarefa or Criteria object.
	 *
	 * @param      mixed $values Criteria or HtTarefa object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(HtTarefaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from HtTarefa object
		}

		if ($criteria->containsKey(HtTarefaPeer::CO_SEQ_HT_TAREFA) && $criteria->keyContainsValue(HtTarefaPeer::CO_SEQ_HT_TAREFA) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.HtTarefaPeer::CO_SEQ_HT_TAREFA.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Performs an UPDATE on the database, given a HtTarefa or Criteria object.
	 *
	 * @param      mixed $values Criteria or HtTarefa object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(HtTarefaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(HtTarefaPeer::CO_SEQ_HT_TAREFA);
			$value = $criteria->remove(HtTarefaPeer::CO_SEQ_HT_TAREFA);
			if ($value) {
				$selectCriteria->add(HtTarefaPeer::CO_SEQ_HT_TAREFA, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(HtTarefaPeer::TABLE_NAME);
			}

		} else { // $values is HtTarefa object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the ht_tarefa table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(HtTarefaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(HtTarefaPeer::TABLE_NAME, $con, HtTarefaPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			HtTarefaPeer::clearInstancePool();
			HtTarefaPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a HtTarefa or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or HtTarefa object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(HtTarefaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			HtTarefaPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof HtTarefa) { // it's a model object
			// invalidate the cache for this single object
			HtTarefaPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(HtTarefaPeer::CO_SEQ_HT_TAREFA, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				HtTarefaPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			HtTarefaPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given HtTarefa object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      HtTarefa $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(HtTarefaPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(HtTarefaPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(HtTarefaPeer::DATABASE_NAME, HtTarefaPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     HtTarefa
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = HtTarefaPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(HtTarefaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(HtTarefaPeer::DATABASE_NAME);
		$criteria->add(HtTarefaPeer::CO_SEQ_HT_TAREFA, $pk);

		$v = HtTarefaPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(HtTarefaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(HtTarefaPeer::DATABASE_NAME);
			$criteria->add(HtTarefaPeer::CO_SEQ_HT_TAREFA, $pks, Criteria::IN);
			$objs = HtTarefaPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseHtTarefaPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseHtTarefaPeer::buildTableMap();

