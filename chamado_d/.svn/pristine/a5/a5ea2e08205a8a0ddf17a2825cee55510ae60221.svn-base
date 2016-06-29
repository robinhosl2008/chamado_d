<?php


/**
 * Base static class for performing query and update operations on the 'rl_orgao_projeto_versao_amb' table.
 *
 * 
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseRlOrgaoProjetoVersaoAmbPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'tarefa';

	/** the table name for this class */
	const TABLE_NAME = 'rl_orgao_projeto_versao_amb';

	/** the related Propel class for this table */
	const OM_CLASS = 'RlOrgaoProjetoVersaoAmb';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'tarefa.RlOrgaoProjetoVersaoAmb';

	/** the related TableMap class for this table */
	const TM_CLASS = 'RlOrgaoProjetoVersaoAmbTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 8;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 8;

	/** the column name for the CO_SEQ_RL_ORGAO_PROJ_VER_AMB field */
	const CO_SEQ_RL_ORGAO_PROJ_VER_AMB = 'rl_orgao_projeto_versao_amb.CO_SEQ_RL_ORGAO_PROJ_VER_AMB';

	/** the column name for the CO_AMBIENTE field */
	const CO_AMBIENTE = 'rl_orgao_projeto_versao_amb.CO_AMBIENTE';

	/** the column name for the CO_VERSAO field */
	const CO_VERSAO = 'rl_orgao_projeto_versao_amb.CO_VERSAO';

	/** the column name for the CO_PROJETO field */
	const CO_PROJETO = 'rl_orgao_projeto_versao_amb.CO_PROJETO';

	/** the column name for the CO_SEQ_USUARIO_ORGAO field */
	const CO_SEQ_USUARIO_ORGAO = 'rl_orgao_projeto_versao_amb.CO_SEQ_USUARIO_ORGAO';

	/** the column name for the DT_INICIO_RL field */
	const DT_INICIO_RL = 'rl_orgao_projeto_versao_amb.DT_INICIO_RL';

	/** the column name for the DT_FIM_RL field */
	const DT_FIM_RL = 'rl_orgao_projeto_versao_amb.DT_FIM_RL';

	/** the column name for the ST_RL_ORGAO_PROJ_VER_AMB field */
	const ST_RL_ORGAO_PROJ_VER_AMB = 'rl_orgao_projeto_versao_amb.ST_RL_ORGAO_PROJ_VER_AMB';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of RlOrgaoProjetoVersaoAmb objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array RlOrgaoProjetoVersaoAmb[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CoSeqRlOrgaoProjVerAmb', 'CoAmbiente', 'CoVersao', 'CoProjeto', 'CoSeqUsuarioOrgao', 'DtInicioRl', 'DtFimRl', 'StRlOrgaoProjVerAmb', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('coSeqRlOrgaoProjVerAmb', 'coAmbiente', 'coVersao', 'coProjeto', 'coSeqUsuarioOrgao', 'dtInicioRl', 'dtFimRl', 'stRlOrgaoProjVerAmb', ),
		BasePeer::TYPE_COLNAME => array (self::CO_SEQ_RL_ORGAO_PROJ_VER_AMB, self::CO_AMBIENTE, self::CO_VERSAO, self::CO_PROJETO, self::CO_SEQ_USUARIO_ORGAO, self::DT_INICIO_RL, self::DT_FIM_RL, self::ST_RL_ORGAO_PROJ_VER_AMB, ),
		BasePeer::TYPE_RAW_COLNAME => array ('CO_SEQ_RL_ORGAO_PROJ_VER_AMB', 'CO_AMBIENTE', 'CO_VERSAO', 'CO_PROJETO', 'CO_SEQ_USUARIO_ORGAO', 'DT_INICIO_RL', 'DT_FIM_RL', 'ST_RL_ORGAO_PROJ_VER_AMB', ),
		BasePeer::TYPE_FIELDNAME => array ('co_seq_rl_orgao_proj_ver_amb', 'co_ambiente', 'co_versao', 'co_projeto', 'co_seq_usuario_orgao', 'dt_inicio_rl', 'dt_fim_rl', 'st_rl_orgao_proj_ver_amb', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CoSeqRlOrgaoProjVerAmb' => 0, 'CoAmbiente' => 1, 'CoVersao' => 2, 'CoProjeto' => 3, 'CoSeqUsuarioOrgao' => 4, 'DtInicioRl' => 5, 'DtFimRl' => 6, 'StRlOrgaoProjVerAmb' => 7, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('coSeqRlOrgaoProjVerAmb' => 0, 'coAmbiente' => 1, 'coVersao' => 2, 'coProjeto' => 3, 'coSeqUsuarioOrgao' => 4, 'dtInicioRl' => 5, 'dtFimRl' => 6, 'stRlOrgaoProjVerAmb' => 7, ),
		BasePeer::TYPE_COLNAME => array (self::CO_SEQ_RL_ORGAO_PROJ_VER_AMB => 0, self::CO_AMBIENTE => 1, self::CO_VERSAO => 2, self::CO_PROJETO => 3, self::CO_SEQ_USUARIO_ORGAO => 4, self::DT_INICIO_RL => 5, self::DT_FIM_RL => 6, self::ST_RL_ORGAO_PROJ_VER_AMB => 7, ),
		BasePeer::TYPE_RAW_COLNAME => array ('CO_SEQ_RL_ORGAO_PROJ_VER_AMB' => 0, 'CO_AMBIENTE' => 1, 'CO_VERSAO' => 2, 'CO_PROJETO' => 3, 'CO_SEQ_USUARIO_ORGAO' => 4, 'DT_INICIO_RL' => 5, 'DT_FIM_RL' => 6, 'ST_RL_ORGAO_PROJ_VER_AMB' => 7, ),
		BasePeer::TYPE_FIELDNAME => array ('co_seq_rl_orgao_proj_ver_amb' => 0, 'co_ambiente' => 1, 'co_versao' => 2, 'co_projeto' => 3, 'co_seq_usuario_orgao' => 4, 'dt_inicio_rl' => 5, 'dt_fim_rl' => 6, 'st_rl_orgao_proj_ver_amb' => 7, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
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
	 * @param      string $column The column name for current table. (i.e. RlOrgaoProjetoVersaoAmbPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(RlOrgaoProjetoVersaoAmbPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_RL_ORGAO_PROJ_VER_AMB);
			$criteria->addSelectColumn(RlOrgaoProjetoVersaoAmbPeer::CO_AMBIENTE);
			$criteria->addSelectColumn(RlOrgaoProjetoVersaoAmbPeer::CO_VERSAO);
			$criteria->addSelectColumn(RlOrgaoProjetoVersaoAmbPeer::CO_PROJETO);
			$criteria->addSelectColumn(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_USUARIO_ORGAO);
			$criteria->addSelectColumn(RlOrgaoProjetoVersaoAmbPeer::DT_INICIO_RL);
			$criteria->addSelectColumn(RlOrgaoProjetoVersaoAmbPeer::DT_FIM_RL);
			$criteria->addSelectColumn(RlOrgaoProjetoVersaoAmbPeer::ST_RL_ORGAO_PROJ_VER_AMB);
		} else {
			$criteria->addSelectColumn($alias . '.CO_SEQ_RL_ORGAO_PROJ_VER_AMB');
			$criteria->addSelectColumn($alias . '.CO_AMBIENTE');
			$criteria->addSelectColumn($alias . '.CO_VERSAO');
			$criteria->addSelectColumn($alias . '.CO_PROJETO');
			$criteria->addSelectColumn($alias . '.CO_SEQ_USUARIO_ORGAO');
			$criteria->addSelectColumn($alias . '.DT_INICIO_RL');
			$criteria->addSelectColumn($alias . '.DT_FIM_RL');
			$criteria->addSelectColumn($alias . '.ST_RL_ORGAO_PROJ_VER_AMB');
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
		$criteria->setPrimaryTableName(RlOrgaoProjetoVersaoAmbPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			RlOrgaoProjetoVersaoAmbPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(RlOrgaoProjetoVersaoAmbPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     RlOrgaoProjetoVersaoAmb
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = RlOrgaoProjetoVersaoAmbPeer::doSelect($critcopy, $con);
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
		return RlOrgaoProjetoVersaoAmbPeer::populateObjects(RlOrgaoProjetoVersaoAmbPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(RlOrgaoProjetoVersaoAmbPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			RlOrgaoProjetoVersaoAmbPeer::addSelectColumns($criteria);
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
	 * @param      RlOrgaoProjetoVersaoAmb $value A RlOrgaoProjetoVersaoAmb object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getCoSeqRlOrgaoProjVerAmb();
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
	 * @param      mixed $value A RlOrgaoProjetoVersaoAmb object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof RlOrgaoProjetoVersaoAmb) {
				$key = (string) $value->getCoSeqRlOrgaoProjVerAmb();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or RlOrgaoProjetoVersaoAmb object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     RlOrgaoProjetoVersaoAmb Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to rl_orgao_projeto_versao_amb
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
		$cls = RlOrgaoProjetoVersaoAmbPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = RlOrgaoProjetoVersaoAmbPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = RlOrgaoProjetoVersaoAmbPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				RlOrgaoProjetoVersaoAmbPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (RlOrgaoProjetoVersaoAmb object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = RlOrgaoProjetoVersaoAmbPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = RlOrgaoProjetoVersaoAmbPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + RlOrgaoProjetoVersaoAmbPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = RlOrgaoProjetoVersaoAmbPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			RlOrgaoProjetoVersaoAmbPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Ambiente table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAmbiente(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(RlOrgaoProjetoVersaoAmbPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			RlOrgaoProjetoVersaoAmbPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(RlOrgaoProjetoVersaoAmbPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_AMBIENTE, AmbientePeer::CO_AMBIENTE, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related Projeto table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinProjeto(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(RlOrgaoProjetoVersaoAmbPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			RlOrgaoProjetoVersaoAmbPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(RlOrgaoProjetoVersaoAmbPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_PROJETO, ProjetoPeer::CO_PROJETO, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related RlUsuarioOrgao table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinRlUsuarioOrgao(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(RlOrgaoProjetoVersaoAmbPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			RlOrgaoProjetoVersaoAmbPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(RlOrgaoProjetoVersaoAmbPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_USUARIO_ORGAO, RlUsuarioOrgaoPeer::CO_SEQ_USUARIO_ORGAO, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related Versao table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinVersao(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(RlOrgaoProjetoVersaoAmbPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			RlOrgaoProjetoVersaoAmbPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(RlOrgaoProjetoVersaoAmbPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_VERSAO, VersaoPeer::CO_VERSAO, $join_behavior);

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
	 * Selects a collection of RlOrgaoProjetoVersaoAmb objects pre-filled with their Ambiente objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of RlOrgaoProjetoVersaoAmb objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAmbiente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		RlOrgaoProjetoVersaoAmbPeer::addSelectColumns($criteria);
		$startcol = RlOrgaoProjetoVersaoAmbPeer::NUM_HYDRATE_COLUMNS;
		AmbientePeer::addSelectColumns($criteria);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_AMBIENTE, AmbientePeer::CO_AMBIENTE, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = RlOrgaoProjetoVersaoAmbPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = RlOrgaoProjetoVersaoAmbPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = RlOrgaoProjetoVersaoAmbPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				RlOrgaoProjetoVersaoAmbPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = AmbientePeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = AmbientePeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = AmbientePeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					AmbientePeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (RlOrgaoProjetoVersaoAmb) to $obj2 (Ambiente)
				$obj2->addRlOrgaoProjetoVersaoAmb($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of RlOrgaoProjetoVersaoAmb objects pre-filled with their Projeto objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of RlOrgaoProjetoVersaoAmb objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinProjeto(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		RlOrgaoProjetoVersaoAmbPeer::addSelectColumns($criteria);
		$startcol = RlOrgaoProjetoVersaoAmbPeer::NUM_HYDRATE_COLUMNS;
		ProjetoPeer::addSelectColumns($criteria);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_PROJETO, ProjetoPeer::CO_PROJETO, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = RlOrgaoProjetoVersaoAmbPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = RlOrgaoProjetoVersaoAmbPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = RlOrgaoProjetoVersaoAmbPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				RlOrgaoProjetoVersaoAmbPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = ProjetoPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = ProjetoPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = ProjetoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					ProjetoPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (RlOrgaoProjetoVersaoAmb) to $obj2 (Projeto)
				$obj2->addRlOrgaoProjetoVersaoAmb($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of RlOrgaoProjetoVersaoAmb objects pre-filled with their RlUsuarioOrgao objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of RlOrgaoProjetoVersaoAmb objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinRlUsuarioOrgao(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		RlOrgaoProjetoVersaoAmbPeer::addSelectColumns($criteria);
		$startcol = RlOrgaoProjetoVersaoAmbPeer::NUM_HYDRATE_COLUMNS;
		RlUsuarioOrgaoPeer::addSelectColumns($criteria);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_USUARIO_ORGAO, RlUsuarioOrgaoPeer::CO_SEQ_USUARIO_ORGAO, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = RlOrgaoProjetoVersaoAmbPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = RlOrgaoProjetoVersaoAmbPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = RlOrgaoProjetoVersaoAmbPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				RlOrgaoProjetoVersaoAmbPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = RlUsuarioOrgaoPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = RlUsuarioOrgaoPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = RlUsuarioOrgaoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					RlUsuarioOrgaoPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (RlOrgaoProjetoVersaoAmb) to $obj2 (RlUsuarioOrgao)
				$obj2->addRlOrgaoProjetoVersaoAmb($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of RlOrgaoProjetoVersaoAmb objects pre-filled with their Versao objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of RlOrgaoProjetoVersaoAmb objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinVersao(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		RlOrgaoProjetoVersaoAmbPeer::addSelectColumns($criteria);
		$startcol = RlOrgaoProjetoVersaoAmbPeer::NUM_HYDRATE_COLUMNS;
		VersaoPeer::addSelectColumns($criteria);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_VERSAO, VersaoPeer::CO_VERSAO, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = RlOrgaoProjetoVersaoAmbPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = RlOrgaoProjetoVersaoAmbPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = RlOrgaoProjetoVersaoAmbPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				RlOrgaoProjetoVersaoAmbPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = VersaoPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = VersaoPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = VersaoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					VersaoPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (RlOrgaoProjetoVersaoAmb) to $obj2 (Versao)
				$obj2->addRlOrgaoProjetoVersaoAmb($obj1);

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
		$criteria->setPrimaryTableName(RlOrgaoProjetoVersaoAmbPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			RlOrgaoProjetoVersaoAmbPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(RlOrgaoProjetoVersaoAmbPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_AMBIENTE, AmbientePeer::CO_AMBIENTE, $join_behavior);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_PROJETO, ProjetoPeer::CO_PROJETO, $join_behavior);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_USUARIO_ORGAO, RlUsuarioOrgaoPeer::CO_SEQ_USUARIO_ORGAO, $join_behavior);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_VERSAO, VersaoPeer::CO_VERSAO, $join_behavior);

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
	 * Selects a collection of RlOrgaoProjetoVersaoAmb objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of RlOrgaoProjetoVersaoAmb objects.
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

		RlOrgaoProjetoVersaoAmbPeer::addSelectColumns($criteria);
		$startcol2 = RlOrgaoProjetoVersaoAmbPeer::NUM_HYDRATE_COLUMNS;

		AmbientePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + AmbientePeer::NUM_HYDRATE_COLUMNS;

		ProjetoPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + ProjetoPeer::NUM_HYDRATE_COLUMNS;

		RlUsuarioOrgaoPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + RlUsuarioOrgaoPeer::NUM_HYDRATE_COLUMNS;

		VersaoPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + VersaoPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_AMBIENTE, AmbientePeer::CO_AMBIENTE, $join_behavior);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_PROJETO, ProjetoPeer::CO_PROJETO, $join_behavior);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_USUARIO_ORGAO, RlUsuarioOrgaoPeer::CO_SEQ_USUARIO_ORGAO, $join_behavior);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_VERSAO, VersaoPeer::CO_VERSAO, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = RlOrgaoProjetoVersaoAmbPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = RlOrgaoProjetoVersaoAmbPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = RlOrgaoProjetoVersaoAmbPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				RlOrgaoProjetoVersaoAmbPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined Ambiente rows

			$key2 = AmbientePeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = AmbientePeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = AmbientePeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					AmbientePeer::addInstanceToPool($obj2, $key2);
				} // if obj2 loaded

				// Add the $obj1 (RlOrgaoProjetoVersaoAmb) to the collection in $obj2 (Ambiente)
				$obj2->addRlOrgaoProjetoVersaoAmb($obj1);
			} // if joined row not null

			// Add objects for joined Projeto rows

			$key3 = ProjetoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
			if ($key3 !== null) {
				$obj3 = ProjetoPeer::getInstanceFromPool($key3);
				if (!$obj3) {

					$cls = ProjetoPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					ProjetoPeer::addInstanceToPool($obj3, $key3);
				} // if obj3 loaded

				// Add the $obj1 (RlOrgaoProjetoVersaoAmb) to the collection in $obj3 (Projeto)
				$obj3->addRlOrgaoProjetoVersaoAmb($obj1);
			} // if joined row not null

			// Add objects for joined RlUsuarioOrgao rows

			$key4 = RlUsuarioOrgaoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
			if ($key4 !== null) {
				$obj4 = RlUsuarioOrgaoPeer::getInstanceFromPool($key4);
				if (!$obj4) {

					$cls = RlUsuarioOrgaoPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					RlUsuarioOrgaoPeer::addInstanceToPool($obj4, $key4);
				} // if obj4 loaded

				// Add the $obj1 (RlOrgaoProjetoVersaoAmb) to the collection in $obj4 (RlUsuarioOrgao)
				$obj4->addRlOrgaoProjetoVersaoAmb($obj1);
			} // if joined row not null

			// Add objects for joined Versao rows

			$key5 = VersaoPeer::getPrimaryKeyHashFromRow($row, $startcol5);
			if ($key5 !== null) {
				$obj5 = VersaoPeer::getInstanceFromPool($key5);
				if (!$obj5) {

					$cls = VersaoPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					VersaoPeer::addInstanceToPool($obj5, $key5);
				} // if obj5 loaded

				// Add the $obj1 (RlOrgaoProjetoVersaoAmb) to the collection in $obj5 (Versao)
				$obj5->addRlOrgaoProjetoVersaoAmb($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Ambiente table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptAmbiente(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(RlOrgaoProjetoVersaoAmbPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			RlOrgaoProjetoVersaoAmbPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(RlOrgaoProjetoVersaoAmbPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_PROJETO, ProjetoPeer::CO_PROJETO, $join_behavior);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_USUARIO_ORGAO, RlUsuarioOrgaoPeer::CO_SEQ_USUARIO_ORGAO, $join_behavior);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_VERSAO, VersaoPeer::CO_VERSAO, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related Projeto table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptProjeto(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(RlOrgaoProjetoVersaoAmbPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			RlOrgaoProjetoVersaoAmbPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(RlOrgaoProjetoVersaoAmbPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_AMBIENTE, AmbientePeer::CO_AMBIENTE, $join_behavior);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_USUARIO_ORGAO, RlUsuarioOrgaoPeer::CO_SEQ_USUARIO_ORGAO, $join_behavior);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_VERSAO, VersaoPeer::CO_VERSAO, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related RlUsuarioOrgao table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptRlUsuarioOrgao(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(RlOrgaoProjetoVersaoAmbPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			RlOrgaoProjetoVersaoAmbPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(RlOrgaoProjetoVersaoAmbPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_AMBIENTE, AmbientePeer::CO_AMBIENTE, $join_behavior);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_PROJETO, ProjetoPeer::CO_PROJETO, $join_behavior);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_VERSAO, VersaoPeer::CO_VERSAO, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related Versao table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptVersao(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(RlOrgaoProjetoVersaoAmbPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			RlOrgaoProjetoVersaoAmbPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(RlOrgaoProjetoVersaoAmbPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_AMBIENTE, AmbientePeer::CO_AMBIENTE, $join_behavior);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_PROJETO, ProjetoPeer::CO_PROJETO, $join_behavior);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_USUARIO_ORGAO, RlUsuarioOrgaoPeer::CO_SEQ_USUARIO_ORGAO, $join_behavior);

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
	 * Selects a collection of RlOrgaoProjetoVersaoAmb objects pre-filled with all related objects except Ambiente.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of RlOrgaoProjetoVersaoAmb objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptAmbiente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		RlOrgaoProjetoVersaoAmbPeer::addSelectColumns($criteria);
		$startcol2 = RlOrgaoProjetoVersaoAmbPeer::NUM_HYDRATE_COLUMNS;

		ProjetoPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + ProjetoPeer::NUM_HYDRATE_COLUMNS;

		RlUsuarioOrgaoPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + RlUsuarioOrgaoPeer::NUM_HYDRATE_COLUMNS;

		VersaoPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + VersaoPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_PROJETO, ProjetoPeer::CO_PROJETO, $join_behavior);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_USUARIO_ORGAO, RlUsuarioOrgaoPeer::CO_SEQ_USUARIO_ORGAO, $join_behavior);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_VERSAO, VersaoPeer::CO_VERSAO, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = RlOrgaoProjetoVersaoAmbPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = RlOrgaoProjetoVersaoAmbPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = RlOrgaoProjetoVersaoAmbPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				RlOrgaoProjetoVersaoAmbPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Projeto rows

				$key2 = ProjetoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = ProjetoPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = ProjetoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					ProjetoPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (RlOrgaoProjetoVersaoAmb) to the collection in $obj2 (Projeto)
				$obj2->addRlOrgaoProjetoVersaoAmb($obj1);

			} // if joined row is not null

				// Add objects for joined RlUsuarioOrgao rows

				$key3 = RlUsuarioOrgaoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = RlUsuarioOrgaoPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = RlUsuarioOrgaoPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					RlUsuarioOrgaoPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (RlOrgaoProjetoVersaoAmb) to the collection in $obj3 (RlUsuarioOrgao)
				$obj3->addRlOrgaoProjetoVersaoAmb($obj1);

			} // if joined row is not null

				// Add objects for joined Versao rows

				$key4 = VersaoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = VersaoPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = VersaoPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					VersaoPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (RlOrgaoProjetoVersaoAmb) to the collection in $obj4 (Versao)
				$obj4->addRlOrgaoProjetoVersaoAmb($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of RlOrgaoProjetoVersaoAmb objects pre-filled with all related objects except Projeto.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of RlOrgaoProjetoVersaoAmb objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptProjeto(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		RlOrgaoProjetoVersaoAmbPeer::addSelectColumns($criteria);
		$startcol2 = RlOrgaoProjetoVersaoAmbPeer::NUM_HYDRATE_COLUMNS;

		AmbientePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + AmbientePeer::NUM_HYDRATE_COLUMNS;

		RlUsuarioOrgaoPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + RlUsuarioOrgaoPeer::NUM_HYDRATE_COLUMNS;

		VersaoPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + VersaoPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_AMBIENTE, AmbientePeer::CO_AMBIENTE, $join_behavior);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_USUARIO_ORGAO, RlUsuarioOrgaoPeer::CO_SEQ_USUARIO_ORGAO, $join_behavior);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_VERSAO, VersaoPeer::CO_VERSAO, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = RlOrgaoProjetoVersaoAmbPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = RlOrgaoProjetoVersaoAmbPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = RlOrgaoProjetoVersaoAmbPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				RlOrgaoProjetoVersaoAmbPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Ambiente rows

				$key2 = AmbientePeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = AmbientePeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = AmbientePeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					AmbientePeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (RlOrgaoProjetoVersaoAmb) to the collection in $obj2 (Ambiente)
				$obj2->addRlOrgaoProjetoVersaoAmb($obj1);

			} // if joined row is not null

				// Add objects for joined RlUsuarioOrgao rows

				$key3 = RlUsuarioOrgaoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = RlUsuarioOrgaoPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = RlUsuarioOrgaoPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					RlUsuarioOrgaoPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (RlOrgaoProjetoVersaoAmb) to the collection in $obj3 (RlUsuarioOrgao)
				$obj3->addRlOrgaoProjetoVersaoAmb($obj1);

			} // if joined row is not null

				// Add objects for joined Versao rows

				$key4 = VersaoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = VersaoPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = VersaoPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					VersaoPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (RlOrgaoProjetoVersaoAmb) to the collection in $obj4 (Versao)
				$obj4->addRlOrgaoProjetoVersaoAmb($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of RlOrgaoProjetoVersaoAmb objects pre-filled with all related objects except RlUsuarioOrgao.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of RlOrgaoProjetoVersaoAmb objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptRlUsuarioOrgao(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		RlOrgaoProjetoVersaoAmbPeer::addSelectColumns($criteria);
		$startcol2 = RlOrgaoProjetoVersaoAmbPeer::NUM_HYDRATE_COLUMNS;

		AmbientePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + AmbientePeer::NUM_HYDRATE_COLUMNS;

		ProjetoPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + ProjetoPeer::NUM_HYDRATE_COLUMNS;

		VersaoPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + VersaoPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_AMBIENTE, AmbientePeer::CO_AMBIENTE, $join_behavior);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_PROJETO, ProjetoPeer::CO_PROJETO, $join_behavior);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_VERSAO, VersaoPeer::CO_VERSAO, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = RlOrgaoProjetoVersaoAmbPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = RlOrgaoProjetoVersaoAmbPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = RlOrgaoProjetoVersaoAmbPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				RlOrgaoProjetoVersaoAmbPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Ambiente rows

				$key2 = AmbientePeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = AmbientePeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = AmbientePeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					AmbientePeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (RlOrgaoProjetoVersaoAmb) to the collection in $obj2 (Ambiente)
				$obj2->addRlOrgaoProjetoVersaoAmb($obj1);

			} // if joined row is not null

				// Add objects for joined Projeto rows

				$key3 = ProjetoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = ProjetoPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = ProjetoPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					ProjetoPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (RlOrgaoProjetoVersaoAmb) to the collection in $obj3 (Projeto)
				$obj3->addRlOrgaoProjetoVersaoAmb($obj1);

			} // if joined row is not null

				// Add objects for joined Versao rows

				$key4 = VersaoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = VersaoPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = VersaoPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					VersaoPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (RlOrgaoProjetoVersaoAmb) to the collection in $obj4 (Versao)
				$obj4->addRlOrgaoProjetoVersaoAmb($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of RlOrgaoProjetoVersaoAmb objects pre-filled with all related objects except Versao.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of RlOrgaoProjetoVersaoAmb objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptVersao(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		RlOrgaoProjetoVersaoAmbPeer::addSelectColumns($criteria);
		$startcol2 = RlOrgaoProjetoVersaoAmbPeer::NUM_HYDRATE_COLUMNS;

		AmbientePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + AmbientePeer::NUM_HYDRATE_COLUMNS;

		ProjetoPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + ProjetoPeer::NUM_HYDRATE_COLUMNS;

		RlUsuarioOrgaoPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + RlUsuarioOrgaoPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_AMBIENTE, AmbientePeer::CO_AMBIENTE, $join_behavior);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_PROJETO, ProjetoPeer::CO_PROJETO, $join_behavior);

		$criteria->addJoin(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_USUARIO_ORGAO, RlUsuarioOrgaoPeer::CO_SEQ_USUARIO_ORGAO, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = RlOrgaoProjetoVersaoAmbPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = RlOrgaoProjetoVersaoAmbPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = RlOrgaoProjetoVersaoAmbPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				RlOrgaoProjetoVersaoAmbPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Ambiente rows

				$key2 = AmbientePeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = AmbientePeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = AmbientePeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					AmbientePeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (RlOrgaoProjetoVersaoAmb) to the collection in $obj2 (Ambiente)
				$obj2->addRlOrgaoProjetoVersaoAmb($obj1);

			} // if joined row is not null

				// Add objects for joined Projeto rows

				$key3 = ProjetoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = ProjetoPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = ProjetoPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					ProjetoPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (RlOrgaoProjetoVersaoAmb) to the collection in $obj3 (Projeto)
				$obj3->addRlOrgaoProjetoVersaoAmb($obj1);

			} // if joined row is not null

				// Add objects for joined RlUsuarioOrgao rows

				$key4 = RlUsuarioOrgaoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = RlUsuarioOrgaoPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = RlUsuarioOrgaoPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					RlUsuarioOrgaoPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (RlOrgaoProjetoVersaoAmb) to the collection in $obj4 (RlUsuarioOrgao)
				$obj4->addRlOrgaoProjetoVersaoAmb($obj1);

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
	  $dbMap = Propel::getDatabaseMap(BaseRlOrgaoProjetoVersaoAmbPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseRlOrgaoProjetoVersaoAmbPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new RlOrgaoProjetoVersaoAmbTableMap());
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
		return $withPrefix ? RlOrgaoProjetoVersaoAmbPeer::CLASS_DEFAULT : RlOrgaoProjetoVersaoAmbPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a RlOrgaoProjetoVersaoAmb or Criteria object.
	 *
	 * @param      mixed $values Criteria or RlOrgaoProjetoVersaoAmb object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(RlOrgaoProjetoVersaoAmbPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from RlOrgaoProjetoVersaoAmb object
		}

		if ($criteria->containsKey(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_RL_ORGAO_PROJ_VER_AMB) && $criteria->keyContainsValue(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_RL_ORGAO_PROJ_VER_AMB) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_RL_ORGAO_PROJ_VER_AMB.')');
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
	 * Performs an UPDATE on the database, given a RlOrgaoProjetoVersaoAmb or Criteria object.
	 *
	 * @param      mixed $values Criteria or RlOrgaoProjetoVersaoAmb object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(RlOrgaoProjetoVersaoAmbPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_RL_ORGAO_PROJ_VER_AMB);
			$value = $criteria->remove(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_RL_ORGAO_PROJ_VER_AMB);
			if ($value) {
				$selectCriteria->add(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_RL_ORGAO_PROJ_VER_AMB, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(RlOrgaoProjetoVersaoAmbPeer::TABLE_NAME);
			}

		} else { // $values is RlOrgaoProjetoVersaoAmb object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the rl_orgao_projeto_versao_amb table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(RlOrgaoProjetoVersaoAmbPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(RlOrgaoProjetoVersaoAmbPeer::TABLE_NAME, $con, RlOrgaoProjetoVersaoAmbPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			RlOrgaoProjetoVersaoAmbPeer::clearInstancePool();
			RlOrgaoProjetoVersaoAmbPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a RlOrgaoProjetoVersaoAmb or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or RlOrgaoProjetoVersaoAmb object or primary key or array of primary keys
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
			$con = Propel::getConnection(RlOrgaoProjetoVersaoAmbPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			RlOrgaoProjetoVersaoAmbPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof RlOrgaoProjetoVersaoAmb) { // it's a model object
			// invalidate the cache for this single object
			RlOrgaoProjetoVersaoAmbPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_RL_ORGAO_PROJ_VER_AMB, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				RlOrgaoProjetoVersaoAmbPeer::removeInstanceFromPool($singleval);
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
			RlOrgaoProjetoVersaoAmbPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given RlOrgaoProjetoVersaoAmb object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      RlOrgaoProjetoVersaoAmb $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(RlOrgaoProjetoVersaoAmbPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(RlOrgaoProjetoVersaoAmbPeer::TABLE_NAME);

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

		return BasePeer::doValidate(RlOrgaoProjetoVersaoAmbPeer::DATABASE_NAME, RlOrgaoProjetoVersaoAmbPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     RlOrgaoProjetoVersaoAmb
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = RlOrgaoProjetoVersaoAmbPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(RlOrgaoProjetoVersaoAmbPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(RlOrgaoProjetoVersaoAmbPeer::DATABASE_NAME);
		$criteria->add(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_RL_ORGAO_PROJ_VER_AMB, $pk);

		$v = RlOrgaoProjetoVersaoAmbPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(RlOrgaoProjetoVersaoAmbPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(RlOrgaoProjetoVersaoAmbPeer::DATABASE_NAME);
			$criteria->add(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_RL_ORGAO_PROJ_VER_AMB, $pks, Criteria::IN);
			$objs = RlOrgaoProjetoVersaoAmbPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseRlOrgaoProjetoVersaoAmbPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseRlOrgaoProjetoVersaoAmbPeer::buildTableMap();

