<?php


/**
 * Base static class for performing query and update operations on the 'tarefa' table.
 *
 * 
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseTarefaPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'tarefa';

	/** the table name for this class */
	const TABLE_NAME = 'tarefa';

	/** the related Propel class for this table */
	const OM_CLASS = 'Tarefa';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'tarefa.Tarefa';

	/** the related TableMap class for this table */
	const TM_CLASS = 'TarefaTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 19;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 19;

	/** the column name for the CO_TAREFA field */
	const CO_TAREFA = 'tarefa.CO_TAREFA';

	/** the column name for the DT_INICIO field */
	const DT_INICIO = 'tarefa.DT_INICIO';

	/** the column name for the DT_PREVISAO field */
	const DT_PREVISAO = 'tarefa.DT_PREVISAO';

	/** the column name for the DT_FIM field */
	const DT_FIM = 'tarefa.DT_FIM';

	/** the column name for the CO_CATEGORIA field */
	const CO_CATEGORIA = 'tarefa.CO_CATEGORIA';

	/** the column name for the CO_NIVEL field */
	const CO_NIVEL = 'tarefa.CO_NIVEL';

	/** the column name for the CO_PRIORIDADE field */
	const CO_PRIORIDADE = 'tarefa.CO_PRIORIDADE';

	/** the column name for the CO_STATUS field */
	const CO_STATUS = 'tarefa.CO_STATUS';

	/** the column name for the CO_USUARIO_FECHAMENTO field */
	const CO_USUARIO_FECHAMENTO = 'tarefa.CO_USUARIO_FECHAMENTO';

	/** the column name for the CO_SEQ_PROJ_VER_AMB field */
	const CO_SEQ_PROJ_VER_AMB = 'tarefa.CO_SEQ_PROJ_VER_AMB';

	/** the column name for the CO_USUARIO_ABERTO field */
	const CO_USUARIO_ABERTO = 'tarefa.CO_USUARIO_ABERTO';

	/** the column name for the CO_USUARIO_ATUALIZACAO field */
	const CO_USUARIO_ATUALIZACAO = 'tarefa.CO_USUARIO_ATUALIZACAO';

	/** the column name for the NO_RESUMO field */
	const NO_RESUMO = 'tarefa.NO_RESUMO';

	/** the column name for the CO_ORGAO field */
	const CO_ORGAO = 'tarefa.CO_ORGAO';

	/** the column name for the EMAIL_ADICIONAIS field */
	const EMAIL_ADICIONAIS = 'tarefa.EMAIL_ADICIONAIS';

	/** the column name for the CO_SEQ_MODULO_PROJ field */
	const CO_SEQ_MODULO_PROJ = 'tarefa.CO_SEQ_MODULO_PROJ';

	/** the column name for the NR_TAREFA field */
	const NR_TAREFA = 'tarefa.NR_TAREFA';

	/** the column name for the NR_SIRIUS field */
	const NR_SIRIUS = 'tarefa.NR_SIRIUS';

	/** the column name for the CO_USUARIO_ATENDIMENTO field */
	const CO_USUARIO_ATENDIMENTO = 'tarefa.CO_USUARIO_ATENDIMENTO';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of Tarefa objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Tarefa[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CoTarefa', 'DtInicio', 'DtPrevisao', 'DtFim', 'CoCategoria', 'CoNivel', 'CoPrioridade', 'CoStatus', 'CoUsuarioFechamento', 'CoSeqProjVerAmb', 'CoUsuarioAberto', 'CoUsuarioAtualizacao', 'NoResumo', 'CoOrgao', 'EmailAdicionais', 'CoSeqModuloProj', 'NrTarefa', 'NrSirius', 'CoUsuarioAtendimento', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('coTarefa', 'dtInicio', 'dtPrevisao', 'dtFim', 'coCategoria', 'coNivel', 'coPrioridade', 'coStatus', 'coUsuarioFechamento', 'coSeqProjVerAmb', 'coUsuarioAberto', 'coUsuarioAtualizacao', 'noResumo', 'coOrgao', 'emailAdicionais', 'coSeqModuloProj', 'nrTarefa', 'nrSirius', 'coUsuarioAtendimento', ),
		BasePeer::TYPE_COLNAME => array (self::CO_TAREFA, self::DT_INICIO, self::DT_PREVISAO, self::DT_FIM, self::CO_CATEGORIA, self::CO_NIVEL, self::CO_PRIORIDADE, self::CO_STATUS, self::CO_USUARIO_FECHAMENTO, self::CO_SEQ_PROJ_VER_AMB, self::CO_USUARIO_ABERTO, self::CO_USUARIO_ATUALIZACAO, self::NO_RESUMO, self::CO_ORGAO, self::EMAIL_ADICIONAIS, self::CO_SEQ_MODULO_PROJ, self::NR_TAREFA, self::NR_SIRIUS, self::CO_USUARIO_ATENDIMENTO, ),
		BasePeer::TYPE_RAW_COLNAME => array ('CO_TAREFA', 'DT_INICIO', 'DT_PREVISAO', 'DT_FIM', 'CO_CATEGORIA', 'CO_NIVEL', 'CO_PRIORIDADE', 'CO_STATUS', 'CO_USUARIO_FECHAMENTO', 'CO_SEQ_PROJ_VER_AMB', 'CO_USUARIO_ABERTO', 'CO_USUARIO_ATUALIZACAO', 'NO_RESUMO', 'CO_ORGAO', 'EMAIL_ADICIONAIS', 'CO_SEQ_MODULO_PROJ', 'NR_TAREFA', 'NR_SIRIUS', 'CO_USUARIO_ATENDIMENTO', ),
		BasePeer::TYPE_FIELDNAME => array ('co_tarefa', 'dt_inicio', 'dt_previsao', 'dt_fim', 'co_categoria', 'co_nivel', 'co_prioridade', 'co_status', 'co_usuario_fechamento', 'co_seq_proj_ver_amb', 'co_usuario_aberto', 'co_usuario_atualizacao', 'no_resumo', 'co_orgao', 'email_adicionais', 'co_seq_modulo_proj', 'nr_tarefa', 'nr_sirius', 'co_usuario_atendimento', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CoTarefa' => 0, 'DtInicio' => 1, 'DtPrevisao' => 2, 'DtFim' => 3, 'CoCategoria' => 4, 'CoNivel' => 5, 'CoPrioridade' => 6, 'CoStatus' => 7, 'CoUsuarioFechamento' => 8, 'CoSeqProjVerAmb' => 9, 'CoUsuarioAberto' => 10, 'CoUsuarioAtualizacao' => 11, 'NoResumo' => 12, 'CoOrgao' => 13, 'EmailAdicionais' => 14, 'CoSeqModuloProj' => 15, 'NrTarefa' => 16, 'NrSirius' => 17, 'CoUsuarioAtendimento' => 18, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('coTarefa' => 0, 'dtInicio' => 1, 'dtPrevisao' => 2, 'dtFim' => 3, 'coCategoria' => 4, 'coNivel' => 5, 'coPrioridade' => 6, 'coStatus' => 7, 'coUsuarioFechamento' => 8, 'coSeqProjVerAmb' => 9, 'coUsuarioAberto' => 10, 'coUsuarioAtualizacao' => 11, 'noResumo' => 12, 'coOrgao' => 13, 'emailAdicionais' => 14, 'coSeqModuloProj' => 15, 'nrTarefa' => 16, 'nrSirius' => 17, 'coUsuarioAtendimento' => 18, ),
		BasePeer::TYPE_COLNAME => array (self::CO_TAREFA => 0, self::DT_INICIO => 1, self::DT_PREVISAO => 2, self::DT_FIM => 3, self::CO_CATEGORIA => 4, self::CO_NIVEL => 5, self::CO_PRIORIDADE => 6, self::CO_STATUS => 7, self::CO_USUARIO_FECHAMENTO => 8, self::CO_SEQ_PROJ_VER_AMB => 9, self::CO_USUARIO_ABERTO => 10, self::CO_USUARIO_ATUALIZACAO => 11, self::NO_RESUMO => 12, self::CO_ORGAO => 13, self::EMAIL_ADICIONAIS => 14, self::CO_SEQ_MODULO_PROJ => 15, self::NR_TAREFA => 16, self::NR_SIRIUS => 17, self::CO_USUARIO_ATENDIMENTO => 18, ),
		BasePeer::TYPE_RAW_COLNAME => array ('CO_TAREFA' => 0, 'DT_INICIO' => 1, 'DT_PREVISAO' => 2, 'DT_FIM' => 3, 'CO_CATEGORIA' => 4, 'CO_NIVEL' => 5, 'CO_PRIORIDADE' => 6, 'CO_STATUS' => 7, 'CO_USUARIO_FECHAMENTO' => 8, 'CO_SEQ_PROJ_VER_AMB' => 9, 'CO_USUARIO_ABERTO' => 10, 'CO_USUARIO_ATUALIZACAO' => 11, 'NO_RESUMO' => 12, 'CO_ORGAO' => 13, 'EMAIL_ADICIONAIS' => 14, 'CO_SEQ_MODULO_PROJ' => 15, 'NR_TAREFA' => 16, 'NR_SIRIUS' => 17, 'CO_USUARIO_ATENDIMENTO' => 18, ),
		BasePeer::TYPE_FIELDNAME => array ('co_tarefa' => 0, 'dt_inicio' => 1, 'dt_previsao' => 2, 'dt_fim' => 3, 'co_categoria' => 4, 'co_nivel' => 5, 'co_prioridade' => 6, 'co_status' => 7, 'co_usuario_fechamento' => 8, 'co_seq_proj_ver_amb' => 9, 'co_usuario_aberto' => 10, 'co_usuario_atualizacao' => 11, 'no_resumo' => 12, 'co_orgao' => 13, 'email_adicionais' => 14, 'co_seq_modulo_proj' => 15, 'nr_tarefa' => 16, 'nr_sirius' => 17, 'co_usuario_atendimento' => 18, ),
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
	 * @param      string $column The column name for current table. (i.e. TarefaPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(TarefaPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(TarefaPeer::CO_TAREFA);
			$criteria->addSelectColumn(TarefaPeer::DT_INICIO);
			$criteria->addSelectColumn(TarefaPeer::DT_PREVISAO);
			$criteria->addSelectColumn(TarefaPeer::DT_FIM);
			$criteria->addSelectColumn(TarefaPeer::CO_CATEGORIA);
			$criteria->addSelectColumn(TarefaPeer::CO_NIVEL);
			$criteria->addSelectColumn(TarefaPeer::CO_PRIORIDADE);
			$criteria->addSelectColumn(TarefaPeer::CO_STATUS);
			$criteria->addSelectColumn(TarefaPeer::CO_USUARIO_FECHAMENTO);
			$criteria->addSelectColumn(TarefaPeer::CO_SEQ_PROJ_VER_AMB);
			$criteria->addSelectColumn(TarefaPeer::CO_USUARIO_ABERTO);
			$criteria->addSelectColumn(TarefaPeer::CO_USUARIO_ATUALIZACAO);
			$criteria->addSelectColumn(TarefaPeer::NO_RESUMO);
			$criteria->addSelectColumn(TarefaPeer::CO_ORGAO);
			$criteria->addSelectColumn(TarefaPeer::EMAIL_ADICIONAIS);
			$criteria->addSelectColumn(TarefaPeer::CO_SEQ_MODULO_PROJ);
			$criteria->addSelectColumn(TarefaPeer::NR_TAREFA);
			$criteria->addSelectColumn(TarefaPeer::NR_SIRIUS);
			$criteria->addSelectColumn(TarefaPeer::CO_USUARIO_ATENDIMENTO);
		} else {
			$criteria->addSelectColumn($alias . '.CO_TAREFA');
			$criteria->addSelectColumn($alias . '.DT_INICIO');
			$criteria->addSelectColumn($alias . '.DT_PREVISAO');
			$criteria->addSelectColumn($alias . '.DT_FIM');
			$criteria->addSelectColumn($alias . '.CO_CATEGORIA');
			$criteria->addSelectColumn($alias . '.CO_NIVEL');
			$criteria->addSelectColumn($alias . '.CO_PRIORIDADE');
			$criteria->addSelectColumn($alias . '.CO_STATUS');
			$criteria->addSelectColumn($alias . '.CO_USUARIO_FECHAMENTO');
			$criteria->addSelectColumn($alias . '.CO_SEQ_PROJ_VER_AMB');
			$criteria->addSelectColumn($alias . '.CO_USUARIO_ABERTO');
			$criteria->addSelectColumn($alias . '.CO_USUARIO_ATUALIZACAO');
			$criteria->addSelectColumn($alias . '.NO_RESUMO');
			$criteria->addSelectColumn($alias . '.CO_ORGAO');
			$criteria->addSelectColumn($alias . '.EMAIL_ADICIONAIS');
			$criteria->addSelectColumn($alias . '.CO_SEQ_MODULO_PROJ');
			$criteria->addSelectColumn($alias . '.NR_TAREFA');
			$criteria->addSelectColumn($alias . '.NR_SIRIUS');
			$criteria->addSelectColumn($alias . '.CO_USUARIO_ATENDIMENTO');
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
		$criteria->setPrimaryTableName(TarefaPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TarefaPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     Tarefa
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = TarefaPeer::doSelect($critcopy, $con);
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
		return TarefaPeer::populateObjects(TarefaPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			TarefaPeer::addSelectColumns($criteria);
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
	 * @param      Tarefa $value A Tarefa object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getCoTarefa();
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
	 * @param      mixed $value A Tarefa object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Tarefa) {
				$key = (string) $value->getCoTarefa();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Tarefa object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     Tarefa Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to tarefa
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
		$cls = TarefaPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = TarefaPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = TarefaPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				TarefaPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (Tarefa object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = TarefaPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = TarefaPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + TarefaPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = TarefaPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			TarefaPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Orgao table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinOrgao(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TarefaPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TarefaPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(TarefaPeer::CO_ORGAO, OrgaoPeer::CO_ORGAO, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related RlProjetoVersaoAmb table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinRlProjetoVersaoAmb(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TarefaPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TarefaPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(TarefaPeer::CO_SEQ_PROJ_VER_AMB, RlProjetoVersaoAmbPeer::CO_SEQ_PROJ_VER_AMB, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related Categoria table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinCategoria(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TarefaPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TarefaPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(TarefaPeer::CO_CATEGORIA, CategoriaPeer::CO_CATEGORIA, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related Nivel table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinNivel(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TarefaPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TarefaPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(TarefaPeer::CO_NIVEL, NivelPeer::CO_NIVEL, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related Prioridade table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinPrioridade(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TarefaPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TarefaPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(TarefaPeer::CO_PRIORIDADE, PrioridadePeer::CO_PRIORIDADE, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related Status table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinStatus(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TarefaPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TarefaPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(TarefaPeer::CO_STATUS, StatusPeer::CO_STATUS, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related TbModuloProjeto table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinTbModuloProjeto(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TarefaPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TarefaPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(TarefaPeer::CO_SEQ_MODULO_PROJ, TbModuloProjetoPeer::CO_SEQ_MODULO_PROJ, $join_behavior);

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
	 * Selects a collection of Tarefa objects pre-filled with their Orgao objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Tarefa objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinOrgao(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TarefaPeer::addSelectColumns($criteria);
		$startcol = TarefaPeer::NUM_HYDRATE_COLUMNS;
		OrgaoPeer::addSelectColumns($criteria);

		$criteria->addJoin(TarefaPeer::CO_ORGAO, OrgaoPeer::CO_ORGAO, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TarefaPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TarefaPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = TarefaPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TarefaPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = OrgaoPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = OrgaoPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = OrgaoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					OrgaoPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (Tarefa) to $obj2 (Orgao)
				$obj2->addTarefa($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Tarefa objects pre-filled with their RlProjetoVersaoAmb objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Tarefa objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinRlProjetoVersaoAmb(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TarefaPeer::addSelectColumns($criteria);
		$startcol = TarefaPeer::NUM_HYDRATE_COLUMNS;
		RlProjetoVersaoAmbPeer::addSelectColumns($criteria);

		$criteria->addJoin(TarefaPeer::CO_SEQ_PROJ_VER_AMB, RlProjetoVersaoAmbPeer::CO_SEQ_PROJ_VER_AMB, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TarefaPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TarefaPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = TarefaPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TarefaPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = RlProjetoVersaoAmbPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = RlProjetoVersaoAmbPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = RlProjetoVersaoAmbPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					RlProjetoVersaoAmbPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (Tarefa) to $obj2 (RlProjetoVersaoAmb)
				$obj2->addTarefa($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Tarefa objects pre-filled with their Categoria objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Tarefa objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinCategoria(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TarefaPeer::addSelectColumns($criteria);
		$startcol = TarefaPeer::NUM_HYDRATE_COLUMNS;
		CategoriaPeer::addSelectColumns($criteria);

		$criteria->addJoin(TarefaPeer::CO_CATEGORIA, CategoriaPeer::CO_CATEGORIA, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TarefaPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TarefaPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = TarefaPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TarefaPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = CategoriaPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = CategoriaPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = CategoriaPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					CategoriaPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (Tarefa) to $obj2 (Categoria)
				$obj2->addTarefa($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Tarefa objects pre-filled with their Nivel objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Tarefa objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNivel(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TarefaPeer::addSelectColumns($criteria);
		$startcol = TarefaPeer::NUM_HYDRATE_COLUMNS;
		NivelPeer::addSelectColumns($criteria);

		$criteria->addJoin(TarefaPeer::CO_NIVEL, NivelPeer::CO_NIVEL, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TarefaPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TarefaPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = TarefaPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TarefaPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = NivelPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = NivelPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = NivelPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					NivelPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (Tarefa) to $obj2 (Nivel)
				$obj2->addTarefa($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Tarefa objects pre-filled with their Prioridade objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Tarefa objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinPrioridade(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TarefaPeer::addSelectColumns($criteria);
		$startcol = TarefaPeer::NUM_HYDRATE_COLUMNS;
		PrioridadePeer::addSelectColumns($criteria);

		$criteria->addJoin(TarefaPeer::CO_PRIORIDADE, PrioridadePeer::CO_PRIORIDADE, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TarefaPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TarefaPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = TarefaPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TarefaPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = PrioridadePeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = PrioridadePeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = PrioridadePeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					PrioridadePeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (Tarefa) to $obj2 (Prioridade)
				$obj2->addTarefa($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Tarefa objects pre-filled with their Status objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Tarefa objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinStatus(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TarefaPeer::addSelectColumns($criteria);
		$startcol = TarefaPeer::NUM_HYDRATE_COLUMNS;
		StatusPeer::addSelectColumns($criteria);

		$criteria->addJoin(TarefaPeer::CO_STATUS, StatusPeer::CO_STATUS, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TarefaPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TarefaPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = TarefaPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TarefaPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = StatusPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = StatusPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = StatusPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					StatusPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (Tarefa) to $obj2 (Status)
				$obj2->addTarefa($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Tarefa objects pre-filled with their TbModuloProjeto objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Tarefa objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinTbModuloProjeto(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TarefaPeer::addSelectColumns($criteria);
		$startcol = TarefaPeer::NUM_HYDRATE_COLUMNS;
		TbModuloProjetoPeer::addSelectColumns($criteria);

		$criteria->addJoin(TarefaPeer::CO_SEQ_MODULO_PROJ, TbModuloProjetoPeer::CO_SEQ_MODULO_PROJ, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TarefaPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TarefaPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = TarefaPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TarefaPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = TbModuloProjetoPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = TbModuloProjetoPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = TbModuloProjetoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					TbModuloProjetoPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (Tarefa) to $obj2 (TbModuloProjeto)
				$obj2->addTarefa($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining all related tables
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TarefaPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TarefaPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(TarefaPeer::CO_ORGAO, OrgaoPeer::CO_ORGAO, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_PROJ_VER_AMB, RlProjetoVersaoAmbPeer::CO_SEQ_PROJ_VER_AMB, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_CATEGORIA, CategoriaPeer::CO_CATEGORIA, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_NIVEL, NivelPeer::CO_NIVEL, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_PRIORIDADE, PrioridadePeer::CO_PRIORIDADE, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_STATUS, StatusPeer::CO_STATUS, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_MODULO_PROJ, TbModuloProjetoPeer::CO_SEQ_MODULO_PROJ, $join_behavior);

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
	 * Selects a collection of Tarefa objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Tarefa objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TarefaPeer::addSelectColumns($criteria);
		$startcol2 = TarefaPeer::NUM_HYDRATE_COLUMNS;

		OrgaoPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + OrgaoPeer::NUM_HYDRATE_COLUMNS;

		RlProjetoVersaoAmbPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + RlProjetoVersaoAmbPeer::NUM_HYDRATE_COLUMNS;

		CategoriaPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + CategoriaPeer::NUM_HYDRATE_COLUMNS;

		NivelPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + NivelPeer::NUM_HYDRATE_COLUMNS;

		PrioridadePeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + PrioridadePeer::NUM_HYDRATE_COLUMNS;

		StatusPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + StatusPeer::NUM_HYDRATE_COLUMNS;

		TbModuloProjetoPeer::addSelectColumns($criteria);
		$startcol9 = $startcol8 + TbModuloProjetoPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(TarefaPeer::CO_ORGAO, OrgaoPeer::CO_ORGAO, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_PROJ_VER_AMB, RlProjetoVersaoAmbPeer::CO_SEQ_PROJ_VER_AMB, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_CATEGORIA, CategoriaPeer::CO_CATEGORIA, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_NIVEL, NivelPeer::CO_NIVEL, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_PRIORIDADE, PrioridadePeer::CO_PRIORIDADE, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_STATUS, StatusPeer::CO_STATUS, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_MODULO_PROJ, TbModuloProjetoPeer::CO_SEQ_MODULO_PROJ, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TarefaPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TarefaPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = TarefaPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TarefaPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined Orgao rows

			$key2 = OrgaoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = OrgaoPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = OrgaoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					OrgaoPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 loaded

				// Add the $obj1 (Tarefa) to the collection in $obj2 (Orgao)
				$obj2->addTarefa($obj1);
			} // if joined row not null

			// Add objects for joined RlProjetoVersaoAmb rows

			$key3 = RlProjetoVersaoAmbPeer::getPrimaryKeyHashFromRow($row, $startcol3);
			if ($key3 !== null) {
				$obj3 = RlProjetoVersaoAmbPeer::getInstanceFromPool($key3);
				if (!$obj3) {

					$cls = RlProjetoVersaoAmbPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					RlProjetoVersaoAmbPeer::addInstanceToPool($obj3, $key3);
				} // if obj3 loaded

				// Add the $obj1 (Tarefa) to the collection in $obj3 (RlProjetoVersaoAmb)
				$obj3->addTarefa($obj1);
			} // if joined row not null

			// Add objects for joined Categoria rows

			$key4 = CategoriaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
			if ($key4 !== null) {
				$obj4 = CategoriaPeer::getInstanceFromPool($key4);
				if (!$obj4) {

					$cls = CategoriaPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					CategoriaPeer::addInstanceToPool($obj4, $key4);
				} // if obj4 loaded

				// Add the $obj1 (Tarefa) to the collection in $obj4 (Categoria)
				$obj4->addTarefa($obj1);
			} // if joined row not null

			// Add objects for joined Nivel rows

			$key5 = NivelPeer::getPrimaryKeyHashFromRow($row, $startcol5);
			if ($key5 !== null) {
				$obj5 = NivelPeer::getInstanceFromPool($key5);
				if (!$obj5) {

					$cls = NivelPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					NivelPeer::addInstanceToPool($obj5, $key5);
				} // if obj5 loaded

				// Add the $obj1 (Tarefa) to the collection in $obj5 (Nivel)
				$obj5->addTarefa($obj1);
			} // if joined row not null

			// Add objects for joined Prioridade rows

			$key6 = PrioridadePeer::getPrimaryKeyHashFromRow($row, $startcol6);
			if ($key6 !== null) {
				$obj6 = PrioridadePeer::getInstanceFromPool($key6);
				if (!$obj6) {

					$cls = PrioridadePeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					PrioridadePeer::addInstanceToPool($obj6, $key6);
				} // if obj6 loaded

				// Add the $obj1 (Tarefa) to the collection in $obj6 (Prioridade)
				$obj6->addTarefa($obj1);
			} // if joined row not null

			// Add objects for joined Status rows

			$key7 = StatusPeer::getPrimaryKeyHashFromRow($row, $startcol7);
			if ($key7 !== null) {
				$obj7 = StatusPeer::getInstanceFromPool($key7);
				if (!$obj7) {

					$cls = StatusPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					StatusPeer::addInstanceToPool($obj7, $key7);
				} // if obj7 loaded

				// Add the $obj1 (Tarefa) to the collection in $obj7 (Status)
				$obj7->addTarefa($obj1);
			} // if joined row not null

			// Add objects for joined TbModuloProjeto rows

			$key8 = TbModuloProjetoPeer::getPrimaryKeyHashFromRow($row, $startcol8);
			if ($key8 !== null) {
				$obj8 = TbModuloProjetoPeer::getInstanceFromPool($key8);
				if (!$obj8) {

					$cls = TbModuloProjetoPeer::getOMClass(false);

					$obj8 = new $cls();
					$obj8->hydrate($row, $startcol8);
					TbModuloProjetoPeer::addInstanceToPool($obj8, $key8);
				} // if obj8 loaded

				// Add the $obj1 (Tarefa) to the collection in $obj8 (TbModuloProjeto)
				$obj8->addTarefa($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Orgao table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptOrgao(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TarefaPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TarefaPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(TarefaPeer::CO_SEQ_PROJ_VER_AMB, RlProjetoVersaoAmbPeer::CO_SEQ_PROJ_VER_AMB, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_CATEGORIA, CategoriaPeer::CO_CATEGORIA, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_NIVEL, NivelPeer::CO_NIVEL, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_PRIORIDADE, PrioridadePeer::CO_PRIORIDADE, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_STATUS, StatusPeer::CO_STATUS, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_MODULO_PROJ, TbModuloProjetoPeer::CO_SEQ_MODULO_PROJ, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related RlProjetoVersaoAmb table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptRlProjetoVersaoAmb(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TarefaPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TarefaPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(TarefaPeer::CO_ORGAO, OrgaoPeer::CO_ORGAO, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_CATEGORIA, CategoriaPeer::CO_CATEGORIA, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_NIVEL, NivelPeer::CO_NIVEL, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_PRIORIDADE, PrioridadePeer::CO_PRIORIDADE, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_STATUS, StatusPeer::CO_STATUS, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_MODULO_PROJ, TbModuloProjetoPeer::CO_SEQ_MODULO_PROJ, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related Categoria table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptCategoria(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TarefaPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TarefaPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(TarefaPeer::CO_ORGAO, OrgaoPeer::CO_ORGAO, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_PROJ_VER_AMB, RlProjetoVersaoAmbPeer::CO_SEQ_PROJ_VER_AMB, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_NIVEL, NivelPeer::CO_NIVEL, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_PRIORIDADE, PrioridadePeer::CO_PRIORIDADE, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_STATUS, StatusPeer::CO_STATUS, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_MODULO_PROJ, TbModuloProjetoPeer::CO_SEQ_MODULO_PROJ, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related Nivel table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptNivel(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TarefaPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TarefaPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(TarefaPeer::CO_ORGAO, OrgaoPeer::CO_ORGAO, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_PROJ_VER_AMB, RlProjetoVersaoAmbPeer::CO_SEQ_PROJ_VER_AMB, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_CATEGORIA, CategoriaPeer::CO_CATEGORIA, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_PRIORIDADE, PrioridadePeer::CO_PRIORIDADE, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_STATUS, StatusPeer::CO_STATUS, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_MODULO_PROJ, TbModuloProjetoPeer::CO_SEQ_MODULO_PROJ, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related Prioridade table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptPrioridade(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TarefaPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TarefaPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(TarefaPeer::CO_ORGAO, OrgaoPeer::CO_ORGAO, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_PROJ_VER_AMB, RlProjetoVersaoAmbPeer::CO_SEQ_PROJ_VER_AMB, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_CATEGORIA, CategoriaPeer::CO_CATEGORIA, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_NIVEL, NivelPeer::CO_NIVEL, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_STATUS, StatusPeer::CO_STATUS, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_MODULO_PROJ, TbModuloProjetoPeer::CO_SEQ_MODULO_PROJ, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related Status table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptStatus(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TarefaPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TarefaPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(TarefaPeer::CO_ORGAO, OrgaoPeer::CO_ORGAO, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_PROJ_VER_AMB, RlProjetoVersaoAmbPeer::CO_SEQ_PROJ_VER_AMB, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_CATEGORIA, CategoriaPeer::CO_CATEGORIA, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_NIVEL, NivelPeer::CO_NIVEL, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_PRIORIDADE, PrioridadePeer::CO_PRIORIDADE, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_MODULO_PROJ, TbModuloProjetoPeer::CO_SEQ_MODULO_PROJ, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related TbModuloProjeto table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptTbModuloProjeto(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TarefaPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TarefaPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(TarefaPeer::CO_ORGAO, OrgaoPeer::CO_ORGAO, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_PROJ_VER_AMB, RlProjetoVersaoAmbPeer::CO_SEQ_PROJ_VER_AMB, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_CATEGORIA, CategoriaPeer::CO_CATEGORIA, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_NIVEL, NivelPeer::CO_NIVEL, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_PRIORIDADE, PrioridadePeer::CO_PRIORIDADE, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_STATUS, StatusPeer::CO_STATUS, $join_behavior);

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
	 * Selects a collection of Tarefa objects pre-filled with all related objects except Orgao.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Tarefa objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptOrgao(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TarefaPeer::addSelectColumns($criteria);
		$startcol2 = TarefaPeer::NUM_HYDRATE_COLUMNS;

		RlProjetoVersaoAmbPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + RlProjetoVersaoAmbPeer::NUM_HYDRATE_COLUMNS;

		CategoriaPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + CategoriaPeer::NUM_HYDRATE_COLUMNS;

		NivelPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + NivelPeer::NUM_HYDRATE_COLUMNS;

		PrioridadePeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + PrioridadePeer::NUM_HYDRATE_COLUMNS;

		StatusPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + StatusPeer::NUM_HYDRATE_COLUMNS;

		TbModuloProjetoPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + TbModuloProjetoPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(TarefaPeer::CO_SEQ_PROJ_VER_AMB, RlProjetoVersaoAmbPeer::CO_SEQ_PROJ_VER_AMB, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_CATEGORIA, CategoriaPeer::CO_CATEGORIA, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_NIVEL, NivelPeer::CO_NIVEL, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_PRIORIDADE, PrioridadePeer::CO_PRIORIDADE, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_STATUS, StatusPeer::CO_STATUS, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_MODULO_PROJ, TbModuloProjetoPeer::CO_SEQ_MODULO_PROJ, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TarefaPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TarefaPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = TarefaPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TarefaPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined RlProjetoVersaoAmb rows

				$key2 = RlProjetoVersaoAmbPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = RlProjetoVersaoAmbPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = RlProjetoVersaoAmbPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					RlProjetoVersaoAmbPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj2 (RlProjetoVersaoAmb)
				$obj2->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined Categoria rows

				$key3 = CategoriaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = CategoriaPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = CategoriaPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					CategoriaPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj3 (Categoria)
				$obj3->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined Nivel rows

				$key4 = NivelPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = NivelPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = NivelPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					NivelPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj4 (Nivel)
				$obj4->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined Prioridade rows

				$key5 = PrioridadePeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = PrioridadePeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = PrioridadePeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					PrioridadePeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj5 (Prioridade)
				$obj5->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined Status rows

				$key6 = StatusPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = StatusPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = StatusPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					StatusPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj6 (Status)
				$obj6->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined TbModuloProjeto rows

				$key7 = TbModuloProjetoPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = TbModuloProjetoPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = TbModuloProjetoPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					TbModuloProjetoPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj7 (TbModuloProjeto)
				$obj7->addTarefa($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Tarefa objects pre-filled with all related objects except RlProjetoVersaoAmb.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Tarefa objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptRlProjetoVersaoAmb(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TarefaPeer::addSelectColumns($criteria);
		$startcol2 = TarefaPeer::NUM_HYDRATE_COLUMNS;

		OrgaoPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + OrgaoPeer::NUM_HYDRATE_COLUMNS;

		CategoriaPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + CategoriaPeer::NUM_HYDRATE_COLUMNS;

		NivelPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + NivelPeer::NUM_HYDRATE_COLUMNS;

		PrioridadePeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + PrioridadePeer::NUM_HYDRATE_COLUMNS;

		StatusPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + StatusPeer::NUM_HYDRATE_COLUMNS;

		TbModuloProjetoPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + TbModuloProjetoPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(TarefaPeer::CO_ORGAO, OrgaoPeer::CO_ORGAO, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_CATEGORIA, CategoriaPeer::CO_CATEGORIA, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_NIVEL, NivelPeer::CO_NIVEL, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_PRIORIDADE, PrioridadePeer::CO_PRIORIDADE, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_STATUS, StatusPeer::CO_STATUS, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_MODULO_PROJ, TbModuloProjetoPeer::CO_SEQ_MODULO_PROJ, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TarefaPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TarefaPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = TarefaPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TarefaPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Orgao rows

				$key2 = OrgaoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = OrgaoPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = OrgaoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					OrgaoPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj2 (Orgao)
				$obj2->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined Categoria rows

				$key3 = CategoriaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = CategoriaPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = CategoriaPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					CategoriaPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj3 (Categoria)
				$obj3->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined Nivel rows

				$key4 = NivelPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = NivelPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = NivelPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					NivelPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj4 (Nivel)
				$obj4->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined Prioridade rows

				$key5 = PrioridadePeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = PrioridadePeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = PrioridadePeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					PrioridadePeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj5 (Prioridade)
				$obj5->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined Status rows

				$key6 = StatusPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = StatusPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = StatusPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					StatusPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj6 (Status)
				$obj6->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined TbModuloProjeto rows

				$key7 = TbModuloProjetoPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = TbModuloProjetoPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = TbModuloProjetoPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					TbModuloProjetoPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj7 (TbModuloProjeto)
				$obj7->addTarefa($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Tarefa objects pre-filled with all related objects except Categoria.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Tarefa objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptCategoria(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TarefaPeer::addSelectColumns($criteria);
		$startcol2 = TarefaPeer::NUM_HYDRATE_COLUMNS;

		OrgaoPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + OrgaoPeer::NUM_HYDRATE_COLUMNS;

		RlProjetoVersaoAmbPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + RlProjetoVersaoAmbPeer::NUM_HYDRATE_COLUMNS;

		NivelPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + NivelPeer::NUM_HYDRATE_COLUMNS;

		PrioridadePeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + PrioridadePeer::NUM_HYDRATE_COLUMNS;

		StatusPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + StatusPeer::NUM_HYDRATE_COLUMNS;

		TbModuloProjetoPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + TbModuloProjetoPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(TarefaPeer::CO_ORGAO, OrgaoPeer::CO_ORGAO, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_PROJ_VER_AMB, RlProjetoVersaoAmbPeer::CO_SEQ_PROJ_VER_AMB, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_NIVEL, NivelPeer::CO_NIVEL, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_PRIORIDADE, PrioridadePeer::CO_PRIORIDADE, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_STATUS, StatusPeer::CO_STATUS, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_MODULO_PROJ, TbModuloProjetoPeer::CO_SEQ_MODULO_PROJ, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TarefaPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TarefaPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = TarefaPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TarefaPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Orgao rows

				$key2 = OrgaoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = OrgaoPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = OrgaoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					OrgaoPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj2 (Orgao)
				$obj2->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined RlProjetoVersaoAmb rows

				$key3 = RlProjetoVersaoAmbPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = RlProjetoVersaoAmbPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = RlProjetoVersaoAmbPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					RlProjetoVersaoAmbPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj3 (RlProjetoVersaoAmb)
				$obj3->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined Nivel rows

				$key4 = NivelPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = NivelPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = NivelPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					NivelPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj4 (Nivel)
				$obj4->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined Prioridade rows

				$key5 = PrioridadePeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = PrioridadePeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = PrioridadePeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					PrioridadePeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj5 (Prioridade)
				$obj5->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined Status rows

				$key6 = StatusPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = StatusPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = StatusPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					StatusPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj6 (Status)
				$obj6->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined TbModuloProjeto rows

				$key7 = TbModuloProjetoPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = TbModuloProjetoPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = TbModuloProjetoPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					TbModuloProjetoPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj7 (TbModuloProjeto)
				$obj7->addTarefa($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Tarefa objects pre-filled with all related objects except Nivel.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Tarefa objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNivel(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TarefaPeer::addSelectColumns($criteria);
		$startcol2 = TarefaPeer::NUM_HYDRATE_COLUMNS;

		OrgaoPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + OrgaoPeer::NUM_HYDRATE_COLUMNS;

		RlProjetoVersaoAmbPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + RlProjetoVersaoAmbPeer::NUM_HYDRATE_COLUMNS;

		CategoriaPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + CategoriaPeer::NUM_HYDRATE_COLUMNS;

		PrioridadePeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + PrioridadePeer::NUM_HYDRATE_COLUMNS;

		StatusPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + StatusPeer::NUM_HYDRATE_COLUMNS;

		TbModuloProjetoPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + TbModuloProjetoPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(TarefaPeer::CO_ORGAO, OrgaoPeer::CO_ORGAO, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_PROJ_VER_AMB, RlProjetoVersaoAmbPeer::CO_SEQ_PROJ_VER_AMB, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_CATEGORIA, CategoriaPeer::CO_CATEGORIA, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_PRIORIDADE, PrioridadePeer::CO_PRIORIDADE, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_STATUS, StatusPeer::CO_STATUS, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_MODULO_PROJ, TbModuloProjetoPeer::CO_SEQ_MODULO_PROJ, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TarefaPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TarefaPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = TarefaPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TarefaPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Orgao rows

				$key2 = OrgaoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = OrgaoPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = OrgaoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					OrgaoPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj2 (Orgao)
				$obj2->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined RlProjetoVersaoAmb rows

				$key3 = RlProjetoVersaoAmbPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = RlProjetoVersaoAmbPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = RlProjetoVersaoAmbPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					RlProjetoVersaoAmbPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj3 (RlProjetoVersaoAmb)
				$obj3->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined Categoria rows

				$key4 = CategoriaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = CategoriaPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = CategoriaPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					CategoriaPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj4 (Categoria)
				$obj4->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined Prioridade rows

				$key5 = PrioridadePeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = PrioridadePeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = PrioridadePeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					PrioridadePeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj5 (Prioridade)
				$obj5->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined Status rows

				$key6 = StatusPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = StatusPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = StatusPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					StatusPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj6 (Status)
				$obj6->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined TbModuloProjeto rows

				$key7 = TbModuloProjetoPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = TbModuloProjetoPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = TbModuloProjetoPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					TbModuloProjetoPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj7 (TbModuloProjeto)
				$obj7->addTarefa($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Tarefa objects pre-filled with all related objects except Prioridade.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Tarefa objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptPrioridade(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TarefaPeer::addSelectColumns($criteria);
		$startcol2 = TarefaPeer::NUM_HYDRATE_COLUMNS;

		OrgaoPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + OrgaoPeer::NUM_HYDRATE_COLUMNS;

		RlProjetoVersaoAmbPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + RlProjetoVersaoAmbPeer::NUM_HYDRATE_COLUMNS;

		CategoriaPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + CategoriaPeer::NUM_HYDRATE_COLUMNS;

		NivelPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + NivelPeer::NUM_HYDRATE_COLUMNS;

		StatusPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + StatusPeer::NUM_HYDRATE_COLUMNS;

		TbModuloProjetoPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + TbModuloProjetoPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(TarefaPeer::CO_ORGAO, OrgaoPeer::CO_ORGAO, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_PROJ_VER_AMB, RlProjetoVersaoAmbPeer::CO_SEQ_PROJ_VER_AMB, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_CATEGORIA, CategoriaPeer::CO_CATEGORIA, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_NIVEL, NivelPeer::CO_NIVEL, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_STATUS, StatusPeer::CO_STATUS, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_MODULO_PROJ, TbModuloProjetoPeer::CO_SEQ_MODULO_PROJ, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TarefaPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TarefaPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = TarefaPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TarefaPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Orgao rows

				$key2 = OrgaoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = OrgaoPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = OrgaoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					OrgaoPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj2 (Orgao)
				$obj2->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined RlProjetoVersaoAmb rows

				$key3 = RlProjetoVersaoAmbPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = RlProjetoVersaoAmbPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = RlProjetoVersaoAmbPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					RlProjetoVersaoAmbPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj3 (RlProjetoVersaoAmb)
				$obj3->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined Categoria rows

				$key4 = CategoriaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = CategoriaPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = CategoriaPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					CategoriaPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj4 (Categoria)
				$obj4->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined Nivel rows

				$key5 = NivelPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = NivelPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = NivelPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					NivelPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj5 (Nivel)
				$obj5->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined Status rows

				$key6 = StatusPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = StatusPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = StatusPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					StatusPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj6 (Status)
				$obj6->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined TbModuloProjeto rows

				$key7 = TbModuloProjetoPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = TbModuloProjetoPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = TbModuloProjetoPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					TbModuloProjetoPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj7 (TbModuloProjeto)
				$obj7->addTarefa($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Tarefa objects pre-filled with all related objects except Status.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Tarefa objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptStatus(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TarefaPeer::addSelectColumns($criteria);
		$startcol2 = TarefaPeer::NUM_HYDRATE_COLUMNS;

		OrgaoPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + OrgaoPeer::NUM_HYDRATE_COLUMNS;

		RlProjetoVersaoAmbPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + RlProjetoVersaoAmbPeer::NUM_HYDRATE_COLUMNS;

		CategoriaPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + CategoriaPeer::NUM_HYDRATE_COLUMNS;

		NivelPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + NivelPeer::NUM_HYDRATE_COLUMNS;

		PrioridadePeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + PrioridadePeer::NUM_HYDRATE_COLUMNS;

		TbModuloProjetoPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + TbModuloProjetoPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(TarefaPeer::CO_ORGAO, OrgaoPeer::CO_ORGAO, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_PROJ_VER_AMB, RlProjetoVersaoAmbPeer::CO_SEQ_PROJ_VER_AMB, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_CATEGORIA, CategoriaPeer::CO_CATEGORIA, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_NIVEL, NivelPeer::CO_NIVEL, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_PRIORIDADE, PrioridadePeer::CO_PRIORIDADE, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_MODULO_PROJ, TbModuloProjetoPeer::CO_SEQ_MODULO_PROJ, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TarefaPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TarefaPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = TarefaPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TarefaPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Orgao rows

				$key2 = OrgaoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = OrgaoPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = OrgaoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					OrgaoPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj2 (Orgao)
				$obj2->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined RlProjetoVersaoAmb rows

				$key3 = RlProjetoVersaoAmbPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = RlProjetoVersaoAmbPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = RlProjetoVersaoAmbPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					RlProjetoVersaoAmbPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj3 (RlProjetoVersaoAmb)
				$obj3->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined Categoria rows

				$key4 = CategoriaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = CategoriaPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = CategoriaPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					CategoriaPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj4 (Categoria)
				$obj4->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined Nivel rows

				$key5 = NivelPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = NivelPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = NivelPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					NivelPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj5 (Nivel)
				$obj5->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined Prioridade rows

				$key6 = PrioridadePeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = PrioridadePeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = PrioridadePeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					PrioridadePeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj6 (Prioridade)
				$obj6->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined TbModuloProjeto rows

				$key7 = TbModuloProjetoPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = TbModuloProjetoPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = TbModuloProjetoPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					TbModuloProjetoPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj7 (TbModuloProjeto)
				$obj7->addTarefa($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Tarefa objects pre-filled with all related objects except TbModuloProjeto.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Tarefa objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptTbModuloProjeto(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TarefaPeer::addSelectColumns($criteria);
		$startcol2 = TarefaPeer::NUM_HYDRATE_COLUMNS;

		OrgaoPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + OrgaoPeer::NUM_HYDRATE_COLUMNS;

		RlProjetoVersaoAmbPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + RlProjetoVersaoAmbPeer::NUM_HYDRATE_COLUMNS;

		CategoriaPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + CategoriaPeer::NUM_HYDRATE_COLUMNS;

		NivelPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + NivelPeer::NUM_HYDRATE_COLUMNS;

		PrioridadePeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + PrioridadePeer::NUM_HYDRATE_COLUMNS;

		StatusPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + StatusPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(TarefaPeer::CO_ORGAO, OrgaoPeer::CO_ORGAO, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_SEQ_PROJ_VER_AMB, RlProjetoVersaoAmbPeer::CO_SEQ_PROJ_VER_AMB, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_CATEGORIA, CategoriaPeer::CO_CATEGORIA, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_NIVEL, NivelPeer::CO_NIVEL, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_PRIORIDADE, PrioridadePeer::CO_PRIORIDADE, $join_behavior);

		$criteria->addJoin(TarefaPeer::CO_STATUS, StatusPeer::CO_STATUS, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TarefaPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TarefaPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = TarefaPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TarefaPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Orgao rows

				$key2 = OrgaoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = OrgaoPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = OrgaoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					OrgaoPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj2 (Orgao)
				$obj2->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined RlProjetoVersaoAmb rows

				$key3 = RlProjetoVersaoAmbPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = RlProjetoVersaoAmbPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = RlProjetoVersaoAmbPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					RlProjetoVersaoAmbPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj3 (RlProjetoVersaoAmb)
				$obj3->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined Categoria rows

				$key4 = CategoriaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = CategoriaPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = CategoriaPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					CategoriaPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj4 (Categoria)
				$obj4->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined Nivel rows

				$key5 = NivelPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = NivelPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = NivelPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					NivelPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj5 (Nivel)
				$obj5->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined Prioridade rows

				$key6 = PrioridadePeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = PrioridadePeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = PrioridadePeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					PrioridadePeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj6 (Prioridade)
				$obj6->addTarefa($obj1);

			} // if joined row is not null

				// Add objects for joined Status rows

				$key7 = StatusPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = StatusPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = StatusPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					StatusPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (Tarefa) to the collection in $obj7 (Status)
				$obj7->addTarefa($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
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
	  $dbMap = Propel::getDatabaseMap(BaseTarefaPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseTarefaPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new TarefaTableMap());
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
		return $withPrefix ? TarefaPeer::CLASS_DEFAULT : TarefaPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a Tarefa or Criteria object.
	 *
	 * @param      mixed $values Criteria or Tarefa object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Tarefa object
		}

		if ($criteria->containsKey(TarefaPeer::CO_TAREFA) && $criteria->keyContainsValue(TarefaPeer::CO_TAREFA) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.TarefaPeer::CO_TAREFA.')');
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
	 * Performs an UPDATE on the database, given a Tarefa or Criteria object.
	 *
	 * @param      mixed $values Criteria or Tarefa object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(TarefaPeer::CO_TAREFA);
			$value = $criteria->remove(TarefaPeer::CO_TAREFA);
			if ($value) {
				$selectCriteria->add(TarefaPeer::CO_TAREFA, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(TarefaPeer::TABLE_NAME);
			}

		} else { // $values is Tarefa object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the tarefa table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(TarefaPeer::TABLE_NAME, $con, TarefaPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			TarefaPeer::clearInstancePool();
			TarefaPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a Tarefa or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Tarefa object or primary key or array of primary keys
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
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			TarefaPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Tarefa) { // it's a model object
			// invalidate the cache for this single object
			TarefaPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(TarefaPeer::CO_TAREFA, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				TarefaPeer::removeInstanceFromPool($singleval);
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
			TarefaPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Tarefa object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Tarefa $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(TarefaPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(TarefaPeer::TABLE_NAME);

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

		return BasePeer::doValidate(TarefaPeer::DATABASE_NAME, TarefaPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Tarefa
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = TarefaPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(TarefaPeer::DATABASE_NAME);
		$criteria->add(TarefaPeer::CO_TAREFA, $pk);

		$v = TarefaPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(TarefaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(TarefaPeer::DATABASE_NAME);
			$criteria->add(TarefaPeer::CO_TAREFA, $pks, Criteria::IN);
			$objs = TarefaPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseTarefaPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseTarefaPeer::buildTableMap();

