<?php


/**
 * Base class that represents a query for the 'action' table.
 *
 * 
 *
 * @method     ActionQuery orderByCoAction($order = Criteria::ASC) Order by the co_action column
 * @method     ActionQuery orderByNoAction($order = Criteria::ASC) Order by the no_action column
 * @method     ActionQuery orderByCoController($order = Criteria::ASC) Order by the co_controller column
 *
 * @method     ActionQuery groupByCoAction() Group by the co_action column
 * @method     ActionQuery groupByNoAction() Group by the no_action column
 * @method     ActionQuery groupByCoController() Group by the co_controller column
 *
 * @method     ActionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ActionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ActionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ActionQuery leftJoinController($relationAlias = null) Adds a LEFT JOIN clause to the query using the Controller relation
 * @method     ActionQuery rightJoinController($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Controller relation
 * @method     ActionQuery innerJoinController($relationAlias = null) Adds a INNER JOIN clause to the query using the Controller relation
 *
 * @method     Action findOne(PropelPDO $con = null) Return the first Action matching the query
 * @method     Action findOneOrCreate(PropelPDO $con = null) Return the first Action matching the query, or a new Action object populated from the query conditions when no match is found
 *
 * @method     Action findOneByCoAction(int $co_action) Return the first Action filtered by the co_action column
 * @method     Action findOneByNoAction(string $no_action) Return the first Action filtered by the no_action column
 * @method     Action findOneByCoController(int $co_controller) Return the first Action filtered by the co_controller column
 *
 * @method     array findByCoAction(int $co_action) Return Action objects filtered by the co_action column
 * @method     array findByNoAction(string $no_action) Return Action objects filtered by the no_action column
 * @method     array findByCoController(int $co_controller) Return Action objects filtered by the co_controller column
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseActionQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseActionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tarefa', $modelName = 'Action', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ActionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    ActionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ActionQuery) {
            return $criteria;
        }
        $query = new ActionQuery();
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
     * @return    Action|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = ActionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    ActionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(ActionPeer::CO_ACTION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    ActionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(ActionPeer::CO_ACTION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the co_action column
     *
     * Example usage:
     * <code>
     * $query->filterByCoAction(1234); // WHERE co_action = 1234
     * $query->filterByCoAction(array(12, 34)); // WHERE co_action IN (12, 34)
     * $query->filterByCoAction(array('min' => 12)); // WHERE co_action > 12
     * </code>
     *
     * @param     mixed $coAction The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ActionQuery The current query, for fluid interface
     */
    public function filterByCoAction($coAction = null, $comparison = null)
    {
        if (is_array($coAction) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(ActionPeer::CO_ACTION, $coAction, $comparison);
    }

    /**
     * Filter the query on the no_action column
     *
     * Example usage:
     * <code>
     * $query->filterByNoAction('fooValue');   // WHERE no_action = 'fooValue'
     * $query->filterByNoAction('%fooValue%'); // WHERE no_action LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noAction The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ActionQuery The current query, for fluid interface
     */
    public function filterByNoAction($noAction = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noAction)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noAction)) {
                $noAction = str_replace('*', '%', $noAction);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ActionPeer::NO_ACTION, $noAction, $comparison);
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
     * @see       filterByController()
     *
     * @param     mixed $coController The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ActionQuery The current query, for fluid interface
     */
    public function filterByCoController($coController = null, $comparison = null)
    {
        if (is_array($coController)) {
            $useMinMax = false;
            if (isset($coController['min'])) {
                $this->addUsingAlias(ActionPeer::CO_CONTROLLER, $coController['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coController['max'])) {
                $this->addUsingAlias(ActionPeer::CO_CONTROLLER, $coController['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ActionPeer::CO_CONTROLLER, $coController, $comparison);
    }

    /**
     * Filter the query by a related Controller object
     *
     * @param     Controller|PropelCollection $controller The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ActionQuery The current query, for fluid interface
     */
    public function filterByController($controller, $comparison = null)
    {
        if ($controller instanceof Controller) {
            return $this
                ->addUsingAlias(ActionPeer::CO_CONTROLLER, $controller->getCoController(), $comparison);
        } elseif ($controller instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(ActionPeer::CO_CONTROLLER, $controller->toKeyValue('PrimaryKey', 'CoController'), $comparison);
        } else {
            throw new PropelException('filterByController() only accepts arguments of type Controller or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Controller relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    ActionQuery The current query, for fluid interface
     */
    public function joinController($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Controller');

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
            $this->addJoinObject($join, 'Controller');
        }

        return $this;
    }

    /**
     * Use the Controller relation Controller object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    ControllerQuery A secondary query class using the current class as primary query
     */
    public function useControllerQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinController($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Controller', 'ControllerQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     Action $action Object to remove from the list of results
     *
     * @return    ActionQuery The current query, for fluid interface
     */
    public function prune($action = null)
    {
        if ($action) {
            $this->addUsingAlias(ActionPeer::CO_ACTION, $action->getCoAction(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseActionQuery