<?php


/**
 * Base static class for performing query and update operations on the 'permissao' table.
 *
 * 
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BasePermissaoPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'tarefa';

	/** the table name for this class */
	const TABLE_NAME = 'permissao';

	/** the related Propel class for this table */
	const OM_CLASS = 'Permissao';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'tarefa.Permissao';

	/** the related TableMap class for this table */
	const TM_CLASS = 'PermissaoTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 7;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 7;

	/** the column name for the CO_PERFIL field */
	const CO_PERFIL = 'permissao.CO_PERFIL';

	/** the column name for the DT_ALTERACAO field */
	const DT_ALTERACAO = 'permissao.DT_ALTERACAO';

	/** the column name for the CO_USUARIO_ALTERACAO field */
	const CO_USUARIO_ALTERACAO = 'permissao.CO_USUARIO_ALTERACAO';

	/** the column name for the CO_RECURSO field */
	const CO_RECURSO = 'permissao.CO_RECURSO';

	/** the column name for the ST_PERMISSAO field */
	const ST_PERMISSAO = 'permissao.ST_PERMISSAO';

	/** the column name for the DT_CADASTRO field */
	const DT_CADASTRO = 'permissao.DT_CADASTRO';

	/** the column name for the CO_USUARIO_CADASTRO field */
	const CO_USUARIO_CADASTRO = 'permissao.CO_USUARIO_CADASTRO';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of Permissao objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Permissao[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CoPerfil', 'DtAlteracao', 'CoUsuarioAlteracao', 'CoRecurso', 'StPermissao', 'DtCadastro', 'CoUsuarioCadastro', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('coPerfil', 'dtAlteracao', 'coUsuarioAlteracao', 'coRecurso', 'stPermissao', 'dtCadastro', 'coUsuarioCadastro', ),
		BasePeer::TYPE_COLNAME => array (self::CO_PERFIL, self::DT_ALTERACAO, self::CO_USUARIO_ALTERACAO, self::CO_RECURSO, self::ST_PERMISSAO, self::DT_CADASTRO, self::CO_USUARIO_CADASTRO, ),
		BasePeer::TYPE_RAW_COLNAME => array ('CO_PERFIL', 'DT_ALTERACAO', 'CO_USUARIO_ALTERACAO', 'CO_RECURSO', 'ST_PERMISSAO', 'DT_CADASTRO', 'CO_USUARIO_CADASTRO', ),
		BasePeer::TYPE_FIELDNAME => array ('co_perfil', 'dt_alteracao', 'co_usuario_alteracao', 'co_recurso', 'st_permissao', 'dt_cadastro', 'co_usuario_cadastro', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CoPerfil' => 0, 'DtAlteracao' => 1, 'CoUsuarioAlteracao' => 2, 'CoRecurso' => 3, 'StPermissao' => 4, 'DtCadastro' => 5, 'CoUsuarioCadastro' => 6, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('coPerfil' => 0, 'dtAlteracao' => 1, 'coUsuarioAlteracao' => 2, 'coRecurso' => 3, 'stPermissao' => 4, 'dtCadastro' => 5, 'coUsuarioCadastro' => 6, ),
		BasePeer::TYPE_COLNAME => array (self::CO_PERFIL => 0, self::DT_ALTERACAO => 1, self::CO_USUARIO_ALTERACAO => 2, self::CO_RECURSO => 3, self::ST_PERMISSAO => 4, self::DT_CADASTRO => 5, self::CO_USUARIO_CADASTRO => 6, ),
		BasePeer::TYPE_RAW_COLNAME => array ('CO_PERFIL' => 0, 'DT_ALTERACAO' => 1, 'CO_USUARIO_ALTERACAO' => 2, 'CO_RECURSO' => 3, 'ST_PERMISSAO' => 4, 'DT_CADASTRO' => 5, 'CO_USUARIO_CADASTRO' => 6, ),
		BasePeer::TYPE_FIELDNAME => array ('co_perfil' => 0, 'dt_alteracao' => 1, 'co_usuario_alteracao' => 2, 'co_recurso' => 3, 'st_permissao' => 4, 'dt_cadastro' => 5, 'co_usuario_cadastro' => 6, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
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
	 * @param      string $column The column name for current table. (i.e. PermissaoPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(PermissaoPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(PermissaoPeer::CO_PERFIL);
			$criteria->addSelectColumn(PermissaoPeer::DT_ALTERACAO);
			$criteria->addSelectColumn(PermissaoPeer::CO_USUARIO_ALTERACAO);
			$criteria->addSelectColumn(PermissaoPeer::CO_RECURSO);
			$criteria->addSelectColumn(PermissaoPeer::ST_PERMISSAO);
			$criteria->addSelectColumn(PermissaoPeer::DT_CADASTRO);
			$criteria->addSelectColumn(PermissaoPeer::CO_USUARIO_CADASTRO);
		} else {
			$criteria->addSelectColumn($alias . '.CO_PERFIL');
			$criteria->addSelectColumn($alias . '.DT_ALTERACAO');
			$criteria->addSelectColumn($alias . '.CO_USUARIO_ALTERACAO');
			$criteria->addSelectColumn($alias . '.CO_RECURSO');
			$criteria->addSelectColumn($alias . '.ST_PERMISSAO');
			$criteria->addSelectColumn($alias . '.DT_CADASTRO');
			$criteria->addSelectColumn($alias . '.CO_USUARIO_CADASTRO');
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
		$criteria->setPrimaryTableName(PermissaoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PermissaoPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(PermissaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     Permissao
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = PermissaoPeer::doSelect($critcopy, $con);
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
		return PermissaoPeer::populateObjects(PermissaoPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(PermissaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			PermissaoPeer::addSelectColumns($criteria);
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
	 * @param      Permissao $value A Permissao object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = serialize(array((string) $obj->getCoPerfil(), (string) $obj->getCoRecurso()));
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
	 * @param      mixed $value A Permissao object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Permissao) {
				$key = serialize(array((string) $value->getCoPerfil(), (string) $value->getCoRecurso()));
			} elseif (is_array($value) && count($value) === 2) {
				// assume we've been passed a primary key
				$key = serialize(array((string) $value[0], (string) $value[1]));
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Permissao object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     Permissao Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to permissao
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
		if ($row[$startcol] === null && $row[$startcol + 3] === null) {
			return null;
		}
		return serialize(array((string) $row[$startcol], (string) $row[$startcol + 3]));
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
		return array((int) $row[$startcol], (int) $row[$startcol + 3]);
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
		$cls = PermissaoPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = PermissaoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = PermissaoPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				PermissaoPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (Permissao object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = PermissaoPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = PermissaoPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + PermissaoPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = PermissaoPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			PermissaoPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Perfil table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinPerfil(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PermissaoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PermissaoPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PermissaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(PermissaoPeer::CO_PERFIL, PerfilPeer::CO_PERFIL, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related Recurso table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinRecurso(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PermissaoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PermissaoPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PermissaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(PermissaoPeer::CO_RECURSO, RecursoPeer::CO_RECURSO, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related UsuarioRelatedByCoUsuarioAlteracao table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinUsuarioRelatedByCoUsuarioAlteracao(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PermissaoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PermissaoPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PermissaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(PermissaoPeer::CO_USUARIO_ALTERACAO, UsuarioPeer::CO_USUARIO, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related UsuarioRelatedByCoUsuarioCadastro table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinUsuarioRelatedByCoUsuarioCadastro(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PermissaoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PermissaoPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PermissaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(PermissaoPeer::CO_USUARIO_CADASTRO, UsuarioPeer::CO_USUARIO, $join_behavior);

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
	 * Selects a collection of Permissao objects pre-filled with their Perfil objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Permissao objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinPerfil(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		PermissaoPeer::addSelectColumns($criteria);
		$startcol = PermissaoPeer::NUM_HYDRATE_COLUMNS;
		PerfilPeer::addSelectColumns($criteria);

		$criteria->addJoin(PermissaoPeer::CO_PERFIL, PerfilPeer::CO_PERFIL, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PermissaoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PermissaoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = PermissaoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PermissaoPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = PerfilPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = PerfilPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = PerfilPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					PerfilPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (Permissao) to $obj2 (Perfil)
				$obj2->addPermissao($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Permissao objects pre-filled with their Recurso objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Permissao objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinRecurso(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		PermissaoPeer::addSelectColumns($criteria);
		$startcol = PermissaoPeer::NUM_HYDRATE_COLUMNS;
		RecursoPeer::addSelectColumns($criteria);

		$criteria->addJoin(PermissaoPeer::CO_RECURSO, RecursoPeer::CO_RECURSO, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PermissaoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PermissaoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = PermissaoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PermissaoPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = RecursoPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = RecursoPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = RecursoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					RecursoPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (Permissao) to $obj2 (Recurso)
				$obj2->addPermissao($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Permissao objects pre-filled with their Usuario objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Permissao objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinUsuarioRelatedByCoUsuarioAlteracao(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		PermissaoPeer::addSelectColumns($criteria);
		$startcol = PermissaoPeer::NUM_HYDRATE_COLUMNS;
		UsuarioPeer::addSelectColumns($criteria);

		$criteria->addJoin(PermissaoPeer::CO_USUARIO_ALTERACAO, UsuarioPeer::CO_USUARIO, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PermissaoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PermissaoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = PermissaoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PermissaoPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = UsuarioPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = UsuarioPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					UsuarioPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (Permissao) to $obj2 (Usuario)
				$obj2->addPermissaoRelatedByCoUsuarioAlteracao($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Permissao objects pre-filled with their Usuario objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Permissao objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinUsuarioRelatedByCoUsuarioCadastro(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		PermissaoPeer::addSelectColumns($criteria);
		$startcol = PermissaoPeer::NUM_HYDRATE_COLUMNS;
		UsuarioPeer::addSelectColumns($criteria);

		$criteria->addJoin(PermissaoPeer::CO_USUARIO_CADASTRO, UsuarioPeer::CO_USUARIO, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PermissaoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PermissaoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = PermissaoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PermissaoPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = UsuarioPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = UsuarioPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					UsuarioPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (Permissao) to $obj2 (Usuario)
				$obj2->addPermissaoRelatedByCoUsuarioCadastro($obj1);

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
		$criteria->setPrimaryTableName(PermissaoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PermissaoPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PermissaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(PermissaoPeer::CO_PERFIL, PerfilPeer::CO_PERFIL, $join_behavior);

		$criteria->addJoin(PermissaoPeer::CO_RECURSO, RecursoPeer::CO_RECURSO, $join_behavior);

		$criteria->addJoin(PermissaoPeer::CO_USUARIO_ALTERACAO, UsuarioPeer::CO_USUARIO, $join_behavior);

		$criteria->addJoin(PermissaoPeer::CO_USUARIO_CADASTRO, UsuarioPeer::CO_USUARIO, $join_behavior);

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
	 * Selects a collection of Permissao objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Permissao objects.
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

		PermissaoPeer::addSelectColumns($criteria);
		$startcol2 = PermissaoPeer::NUM_HYDRATE_COLUMNS;

		PerfilPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + PerfilPeer::NUM_HYDRATE_COLUMNS;

		RecursoPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + RecursoPeer::NUM_HYDRATE_COLUMNS;

		UsuarioPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

		UsuarioPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(PermissaoPeer::CO_PERFIL, PerfilPeer::CO_PERFIL, $join_behavior);

		$criteria->addJoin(PermissaoPeer::CO_RECURSO, RecursoPeer::CO_RECURSO, $join_behavior);

		$criteria->addJoin(PermissaoPeer::CO_USUARIO_ALTERACAO, UsuarioPeer::CO_USUARIO, $join_behavior);

		$criteria->addJoin(PermissaoPeer::CO_USUARIO_CADASTRO, UsuarioPeer::CO_USUARIO, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PermissaoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PermissaoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = PermissaoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PermissaoPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined Perfil rows

			$key2 = PerfilPeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = PerfilPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = PerfilPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					PerfilPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 loaded

				// Add the $obj1 (Permissao) to the collection in $obj2 (Perfil)
				$obj2->addPermissao($obj1);
			} // if joined row not null

			// Add objects for joined Recurso rows

			$key3 = RecursoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
			if ($key3 !== null) {
				$obj3 = RecursoPeer::getInstanceFromPool($key3);
				if (!$obj3) {

					$cls = RecursoPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					RecursoPeer::addInstanceToPool($obj3, $key3);
				} // if obj3 loaded

				// Add the $obj1 (Permissao) to the collection in $obj3 (Recurso)
				$obj3->addPermissao($obj1);
			} // if joined row not null

			// Add objects for joined Usuario rows

			$key4 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol4);
			if ($key4 !== null) {
				$obj4 = UsuarioPeer::getInstanceFromPool($key4);
				if (!$obj4) {

					$cls = UsuarioPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					UsuarioPeer::addInstanceToPool($obj4, $key4);
				} // if obj4 loaded

				// Add the $obj1 (Permissao) to the collection in $obj4 (Usuario)
				$obj4->addPermissaoRelatedByCoUsuarioAlteracao($obj1);
			} // if joined row not null

			// Add objects for joined Usuario rows

			$key5 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol5);
			if ($key5 !== null) {
				$obj5 = UsuarioPeer::getInstanceFromPool($key5);
				if (!$obj5) {

					$cls = UsuarioPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					UsuarioPeer::addInstanceToPool($obj5, $key5);
				} // if obj5 loaded

				// Add the $obj1 (Permissao) to the collection in $obj5 (Usuario)
				$obj5->addPermissaoRelatedByCoUsuarioCadastro($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Perfil table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptPerfil(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PermissaoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PermissaoPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PermissaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(PermissaoPeer::CO_RECURSO, RecursoPeer::CO_RECURSO, $join_behavior);

		$criteria->addJoin(PermissaoPeer::CO_USUARIO_ALTERACAO, UsuarioPeer::CO_USUARIO, $join_behavior);

		$criteria->addJoin(PermissaoPeer::CO_USUARIO_CADASTRO, UsuarioPeer::CO_USUARIO, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related Recurso table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptRecurso(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PermissaoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PermissaoPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PermissaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(PermissaoPeer::CO_PERFIL, PerfilPeer::CO_PERFIL, $join_behavior);

		$criteria->addJoin(PermissaoPeer::CO_USUARIO_ALTERACAO, UsuarioPeer::CO_USUARIO, $join_behavior);

		$criteria->addJoin(PermissaoPeer::CO_USUARIO_CADASTRO, UsuarioPeer::CO_USUARIO, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related UsuarioRelatedByCoUsuarioAlteracao table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptUsuarioRelatedByCoUsuarioAlteracao(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PermissaoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PermissaoPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PermissaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(PermissaoPeer::CO_PERFIL, PerfilPeer::CO_PERFIL, $join_behavior);

		$criteria->addJoin(PermissaoPeer::CO_RECURSO, RecursoPeer::CO_RECURSO, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related UsuarioRelatedByCoUsuarioCadastro table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptUsuarioRelatedByCoUsuarioCadastro(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PermissaoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PermissaoPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PermissaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(PermissaoPeer::CO_PERFIL, PerfilPeer::CO_PERFIL, $join_behavior);

		$criteria->addJoin(PermissaoPeer::CO_RECURSO, RecursoPeer::CO_RECURSO, $join_behavior);

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
	 * Selects a collection of Permissao objects pre-filled with all related objects except Perfil.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Permissao objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptPerfil(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		PermissaoPeer::addSelectColumns($criteria);
		$startcol2 = PermissaoPeer::NUM_HYDRATE_COLUMNS;

		RecursoPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + RecursoPeer::NUM_HYDRATE_COLUMNS;

		UsuarioPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

		UsuarioPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(PermissaoPeer::CO_RECURSO, RecursoPeer::CO_RECURSO, $join_behavior);

		$criteria->addJoin(PermissaoPeer::CO_USUARIO_ALTERACAO, UsuarioPeer::CO_USUARIO, $join_behavior);

		$criteria->addJoin(PermissaoPeer::CO_USUARIO_CADASTRO, UsuarioPeer::CO_USUARIO, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PermissaoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PermissaoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = PermissaoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PermissaoPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Recurso rows

				$key2 = RecursoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = RecursoPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = RecursoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					RecursoPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (Permissao) to the collection in $obj2 (Recurso)
				$obj2->addPermissao($obj1);

			} // if joined row is not null

				// Add objects for joined Usuario rows

				$key3 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = UsuarioPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = UsuarioPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					UsuarioPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (Permissao) to the collection in $obj3 (Usuario)
				$obj3->addPermissaoRelatedByCoUsuarioAlteracao($obj1);

			} // if joined row is not null

				// Add objects for joined Usuario rows

				$key4 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = UsuarioPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = UsuarioPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					UsuarioPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (Permissao) to the collection in $obj4 (Usuario)
				$obj4->addPermissaoRelatedByCoUsuarioCadastro($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Permissao objects pre-filled with all related objects except Recurso.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Permissao objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptRecurso(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		PermissaoPeer::addSelectColumns($criteria);
		$startcol2 = PermissaoPeer::NUM_HYDRATE_COLUMNS;

		PerfilPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + PerfilPeer::NUM_HYDRATE_COLUMNS;

		UsuarioPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

		UsuarioPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(PermissaoPeer::CO_PERFIL, PerfilPeer::CO_PERFIL, $join_behavior);

		$criteria->addJoin(PermissaoPeer::CO_USUARIO_ALTERACAO, UsuarioPeer::CO_USUARIO, $join_behavior);

		$criteria->addJoin(PermissaoPeer::CO_USUARIO_CADASTRO, UsuarioPeer::CO_USUARIO, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PermissaoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PermissaoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = PermissaoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PermissaoPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Perfil rows

				$key2 = PerfilPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = PerfilPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = PerfilPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					PerfilPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (Permissao) to the collection in $obj2 (Perfil)
				$obj2->addPermissao($obj1);

			} // if joined row is not null

				// Add objects for joined Usuario rows

				$key3 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = UsuarioPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = UsuarioPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					UsuarioPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (Permissao) to the collection in $obj3 (Usuario)
				$obj3->addPermissaoRelatedByCoUsuarioAlteracao($obj1);

			} // if joined row is not null

				// Add objects for joined Usuario rows

				$key4 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = UsuarioPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = UsuarioPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					UsuarioPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (Permissao) to the collection in $obj4 (Usuario)
				$obj4->addPermissaoRelatedByCoUsuarioCadastro($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Permissao objects pre-filled with all related objects except UsuarioRelatedByCoUsuarioAlteracao.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Permissao objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptUsuarioRelatedByCoUsuarioAlteracao(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		PermissaoPeer::addSelectColumns($criteria);
		$startcol2 = PermissaoPeer::NUM_HYDRATE_COLUMNS;

		PerfilPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + PerfilPeer::NUM_HYDRATE_COLUMNS;

		RecursoPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + RecursoPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(PermissaoPeer::CO_PERFIL, PerfilPeer::CO_PERFIL, $join_behavior);

		$criteria->addJoin(PermissaoPeer::CO_RECURSO, RecursoPeer::CO_RECURSO, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PermissaoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PermissaoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = PermissaoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PermissaoPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Perfil rows

				$key2 = PerfilPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = PerfilPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = PerfilPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					PerfilPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (Permissao) to the collection in $obj2 (Perfil)
				$obj2->addPermissao($obj1);

			} // if joined row is not null

				// Add objects for joined Recurso rows

				$key3 = RecursoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = RecursoPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = RecursoPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					RecursoPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (Permissao) to the collection in $obj3 (Recurso)
				$obj3->addPermissao($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Permissao objects pre-filled with all related objects except UsuarioRelatedByCoUsuarioCadastro.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Permissao objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptUsuarioRelatedByCoUsuarioCadastro(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		PermissaoPeer::addSelectColumns($criteria);
		$startcol2 = PermissaoPeer::NUM_HYDRATE_COLUMNS;

		PerfilPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + PerfilPeer::NUM_HYDRATE_COLUMNS;

		RecursoPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + RecursoPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(PermissaoPeer::CO_PERFIL, PerfilPeer::CO_PERFIL, $join_behavior);

		$criteria->addJoin(PermissaoPeer::CO_RECURSO, RecursoPeer::CO_RECURSO, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PermissaoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PermissaoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = PermissaoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PermissaoPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Perfil rows

				$key2 = PerfilPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = PerfilPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = PerfilPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					PerfilPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (Permissao) to the collection in $obj2 (Perfil)
				$obj2->addPermissao($obj1);

			} // if joined row is not null

				// Add objects for joined Recurso rows

				$key3 = RecursoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = RecursoPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = RecursoPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					RecursoPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (Permissao) to the collection in $obj3 (Recurso)
				$obj3->addPermissao($obj1);

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
	  $dbMap = Propel::getDatabaseMap(BasePermissaoPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BasePermissaoPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new PermissaoTableMap());
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
		return $withPrefix ? PermissaoPeer::CLASS_DEFAULT : PermissaoPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a Permissao or Criteria object.
	 *
	 * @param      mixed $values Criteria or Permissao object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PermissaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Permissao object
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
	 * Performs an UPDATE on the database, given a Permissao or Criteria object.
	 *
	 * @param      mixed $values Criteria or Permissao object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PermissaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(PermissaoPeer::CO_PERFIL);
			$value = $criteria->remove(PermissaoPeer::CO_PERFIL);
			if ($value) {
				$selectCriteria->add(PermissaoPeer::CO_PERFIL, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(PermissaoPeer::TABLE_NAME);
			}

			$comparison = $criteria->getComparison(PermissaoPeer::CO_RECURSO);
			$value = $criteria->remove(PermissaoPeer::CO_RECURSO);
			if ($value) {
				$selectCriteria->add(PermissaoPeer::CO_RECURSO, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(PermissaoPeer::TABLE_NAME);
			}

		} else { // $values is Permissao object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the permissao table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PermissaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(PermissaoPeer::TABLE_NAME, $con, PermissaoPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			PermissaoPeer::clearInstancePool();
			PermissaoPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a Permissao or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Permissao object or primary key or array of primary keys
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
			$con = Propel::getConnection(PermissaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			PermissaoPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Permissao) { // it's a model object
			// invalidate the cache for this single object
			PermissaoPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			// primary key is composite; we therefore, expect
			// the primary key passed to be an array of pkey values
			if (count($values) == count($values, COUNT_RECURSIVE)) {
				// array is not multi-dimensional
				$values = array($values);
			}
			foreach ($values as $value) {
				$criterion = $criteria->getNewCriterion(PermissaoPeer::CO_PERFIL, $value[0]);
				$criterion->addAnd($criteria->getNewCriterion(PermissaoPeer::CO_RECURSO, $value[1]));
				$criteria->addOr($criterion);
				// we can invalidate the cache for this single PK
				PermissaoPeer::removeInstanceFromPool($value);
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
			PermissaoPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Permissao object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Permissao $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(PermissaoPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(PermissaoPeer::TABLE_NAME);

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

		return BasePeer::doValidate(PermissaoPeer::DATABASE_NAME, PermissaoPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve object using using composite pkey values.
	 * @param      int $co_perfil
	 * @param      int $co_recurso
	 * @param      PropelPDO $con
	 * @return     Permissao
	 */
	public static function retrieveByPK($co_perfil, $co_recurso, PropelPDO $con = null) {
		$_instancePoolKey = serialize(array((string) $co_perfil, (string) $co_recurso));
 		if (null !== ($obj = PermissaoPeer::getInstanceFromPool($_instancePoolKey))) {
 			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(PermissaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		$criteria = new Criteria(PermissaoPeer::DATABASE_NAME);
		$criteria->add(PermissaoPeer::CO_PERFIL, $co_perfil);
		$criteria->add(PermissaoPeer::CO_RECURSO, $co_recurso);
		$v = PermissaoPeer::doSelect($criteria, $con);

		return !empty($v) ? $v[0] : null;
	}
} // BasePermissaoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePermissaoPeer::buildTableMap();

