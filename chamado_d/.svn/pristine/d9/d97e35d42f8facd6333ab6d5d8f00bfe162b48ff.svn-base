<?php


/**
 * Base class that represents a query for the 'controller' table.
 *
 * 
 *
 * @method     ControllerQuery orderByCoController($order = Criteria::ASC) Order by the co_controller column
 * @method     ControllerQuery orderByNoController($order = Criteria::ASC) Order by the no_controller column
 * @method     ControllerQuery orderByNoUrl($order = Criteria::ASC) Order by the no_url column
 * @method     ControllerQuery orderByCoModulo($order = Criteria::ASC) Order by the co_modulo column
 *
 * @method     ControllerQuery groupByCoController() Group by the co_controller column
 * @method     ControllerQuery groupByNoController() Group by the no_controller column
 * @method     ControllerQuery groupByNoUrl() Group by the no_url column
 * @method     ControllerQuery groupByCoModulo() Group by the co_modulo column
 *
 * @method     ControllerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ControllerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ControllerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ControllerQuery leftJoinModuloGerencia($relationAlias = null) Adds a LEFT JOIN clause to the query using the ModuloGerencia relation
 * @method     ControllerQuery rightJoinModuloGerencia($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ModuloGerencia relation
 * @method     ControllerQuery innerJoinModuloGerencia($relationAlias = null) Adds a INNER JOIN clause to the query using the ModuloGerencia relation
 *
 * @method     ControllerQuery leftJoinAction($relationAlias = null) Adds a LEFT JOIN clause to the query using the Action relation
 * @method     ControllerQuery rightJoinAction($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Action relation
 * @method     ControllerQuery innerJoinAction($relationAlias = null) Adds a INNER JOIN clause to the query using the Action relation
 *
 * @method     ControllerQuery leftJoinTarefa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tarefa relation
 * @method     ControllerQuery rightJoinTarefa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tarefa relation
 * @method     ControllerQuery innerJoinTarefa($relationAlias = null) Adds a INNER JOIN clause to the query using the Tarefa relation
 *
 * @method     Controller findOne(PropelPDO $con = null) Return the first Controller matching the query
 * @method     Controller findOneOrCreate(PropelPDO $con = null) Return the first Controller matching the query, or a new Controller object populated from the query conditions when no match is found
 *
 * @method     Controller findOneByCoController(int $co_controller) Return the first Controller filtered by the co_controller column
 * @method     Controller findOneByNoController(string $no_controller) Return the first Controller filtered by the no_controller column
 * @method     Controller findOneByNoUrl(string $no_url) Return the first Controller filtered by the no_url column
 * @method     Controller findOneByCoModulo(int $co_modulo) Return the first Controller filtered by the co_modulo column
 *
 * @method     array findByCoController(int $co_controller) Return Controller objects filtered by the co_controller column
 * @method     array findByNoController(string $no_controller) Return Controller objects filtered by the no_controller column
 * @method     array findByNoUrl(string $no_url) Return Controller objects filtered by the no_url column
 * @method     array findByCoModulo(int $co_modulo) Return Controller objects filtered by the co_modulo column
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseControllerQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseControllerQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tarefa', $modelName = 'Controller', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ControllerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    ControllerQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ControllerQuery) {
            return $criteria;
        }
        $query = new ControllerQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }
        return $query;
    }

    /**
     * Find object by primary key
     * Use instance pooling to avoid a database query if the object exists
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    Controller|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = ControllerPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
            // the object is alredy in the instance pool
            return $obj;
        } else {
            // the object has not been requested yet, or the formatter is not an object formatter
            $criteria = $this->isKeepQuery() ? clone $this : $this;
            $stmt = $criteria
                ->filterByPrimaryKey($key)
                ->getSelectStatement($con);
            return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
        }
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        return $this
            ->filterByPrimaryKeys($keys)
            ->find($con);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return    ControllerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(ControllerPeer::CO_CONTROLLER, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    ControllerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(ControllerPeer::CO_CONTROLLER, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the co_controller column
     *
     * Example usage:
     * <code>
     * $query->filterByCoController(1234); // WHERE co_controller = 1234
     * $query->filterByCoController(array(12, 34)); // WHERE co_controller IN (12, 34)
     * $query->filterByCoController(array('min' => 12)); // WHERE co_controller > 12
     * </code>
     *
     * @param     mixed $coController The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ControllerQuery The current query, for fluid interface
     */
    public function filterByCoController($coController = null, $comparison = null)
    {
        if (is_array($coController) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(ControllerPeer::CO_CONTROLLER, $coController, $comparison);
    }

    /**
     * Filter the query on the no_controller column
     *
     * Example usage:
     * <code>
     * $query->filterByNoController('fooValue');   // WHERE no_controller = 'fooValue'
     * $query->filterByNoController('%fooValue%'); // WHERE no_controller LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noController The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ControllerQuery The current query, for fluid interface
     */
    public function filterByNoController($noController = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noController)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noController)) {
                $noController = str_replace('*', '%', $noController);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ControllerPeer::NO_CONTROLLER, $noController, $comparison);
    }

    /**
     * Filter the query on the no_url column
     *
     * Example usage:
     * <code>
     * $query->filterByNoUrl('fooValue');   // WHERE no_url = 'fooValue'
     * $query->filterByNoUrl('%fooValue%'); // WHERE no_url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noUrl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ControllerQuery The current query, for fluid interface
     */
    public function filterByNoUrl($noUrl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noUrl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noUrl)) {
                $noUrl = str_replace('*', '%', $noUrl);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ControllerPeer::NO_URL, $noUrl, $comparison);
    }

    /**
     * Filter the query on the co_modulo column
     *
     * Example usage:
     * <code>
     * $query->filterByCoModulo(1234); // WHERE co_modulo = 1234
     * $query->filterByCoModulo(array(12, 34)); // WHERE co_modulo IN (12, 34)
     * $query->filterByCoModulo(array('min' => 12)); // WHERE co_modulo > 12
     * </code>
     *
     * @see       filterByModuloGerencia()
     *
     * @param     mixed $coModulo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ControllerQuery The current query, for fluid interface
     */
    public function filterByCoModulo($coModulo = null, $comparison = null)
    {
        if (is_array($coModulo)) {
            $useMinMax = false;
            if (isset($coModulo['min'])) {
                $this->addUsingAlias(ControllerPeer::CO_MODULO, $coModulo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coModulo['max'])) {
                $this->addUsingAlias(ControllerPeer::CO_MODULO, $coModulo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ControllerPeer::CO_MODULO, $coModulo, $comparison);
    }

    /**
     * Filter the query by a related ModuloGerencia object
     *
     * @param     ModuloGerencia|PropelCollection $moduloGerencia The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ControllerQuery The current query, for fluid interface
     */
    public function filterByModuloGerencia($moduloGerencia, $comparison = null)
    {
        if ($moduloGerencia instanceof ModuloGerencia) {
            return $this
                ->addUsingAlias(ControllerPeer::CO_MODULO, $moduloGerencia->getCoModulo(), $comparison);
        } elseif ($moduloGerencia instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(ControllerPeer::CO_MODULO, $moduloGerencia->toKeyValue('PrimaryKey', 'CoModulo'), $comparison);
        } else {
            throw new PropelException('filterByModuloGerencia() only accepts arguments of type ModuloGerencia or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ModuloGerencia relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    ControllerQuery The current query, for fluid interface
     */
    public function joinModuloGerencia($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ModuloGerencia');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'ModuloGerencia');
        }

        return $this;
    }

    /**
     * Use the ModuloGerencia relation ModuloGerencia object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    ModuloGerenciaQuery A secondary query class using the current class as primary query
     */
    public function useModuloGerenciaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinModuloGerencia($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ModuloGerencia', 'ModuloGerenciaQuery');
    }

    /**
     * Filter the query by a related Action object
     *
     * @param     Action $action  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ControllerQuery The current query, for fluid interface
     */
    public function filterByAction($action, $comparison = null)
    {
        if ($action instanceof Action) {
            return $this
                ->addUsingAlias(ControllerPeer::CO_CONTROLLER, $action->getCoController(), $comparison);
        } elseif ($action instanceof PropelCollection) {
            return $this
                ->useActionQuery()
                ->filterByPrimaryKeys($action->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAction() only accepts arguments of type Action or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Action relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    ControllerQuery The current query, for fluid interface
     */
    public function joinAction($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Action');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Action');
        }

        return $this;
    }

    /**
     * Use the Action relation Action object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    ActionQuery A secondary query class using the current class as primary query
     */
    public function useActionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAction($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Action', 'ActionQuery');
    }

    /**
     * Filter the query by a related Tarefa object
     *
     * @param     Tarefa $tarefa  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ControllerQuery The current query, for fluid interface
     */
    public function filterByTarefa($tarefa, $comparison = null)
    {
        if ($tarefa instanceof Tarefa) {
            return $this
                ->addUsingAlias(ControllerPeer::CO_CONTROLLER, $tarefa->getCoController(), $comparison);
        } elseif ($tarefa instanceof PropelCollection) {
            return $this
                ->useTarefaQuery()
                ->filterByPrimaryKeys($tarefa->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTarefa() only accepts arguments of type Tarefa or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Tarefa relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    ControllerQuery The current query, for fluid interface
     */
    public function joinTarefa($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Tarefa');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Tarefa');
        }

        return $this;
    }

    /**
     * Use the Tarefa relation Tarefa object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    TarefaQuery A secondary query class using the current class as primary query
     */
    public function useTarefaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTarefa($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Tarefa', 'TarefaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     Controller $controller Object to remove from the list of results
     *
     * @return    ControllerQuery The current query, for fluid interface
     */
    public function prune($controller = null)
    {
        if ($controller) {
            $this->addUsingAlias(ControllerPeer::CO_CONTROLLER, $controller->getCoController(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseControllerQuery