<?php


/**
 * Base class that represents a query for the 'tarefa_action' table.
 *
 * 
 *
 * @method     TarefaActionQuery orderByCoTarefa($order = Criteria::ASC) Order by the co_tarefa column
 * @method     TarefaActionQuery orderByCoAction($order = Criteria::ASC) Order by the co_action column
 *
 * @method     TarefaActionQuery groupByCoTarefa() Group by the co_tarefa column
 * @method     TarefaActionQuery groupByCoAction() Group by the co_action column
 *
 * @method     TarefaActionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TarefaActionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TarefaActionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TarefaActionQuery leftJoinAction($relationAlias = null) Adds a LEFT JOIN clause to the query using the Action relation
 * @method     TarefaActionQuery rightJoinAction($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Action relation
 * @method     TarefaActionQuery innerJoinAction($relationAlias = null) Adds a INNER JOIN clause to the query using the Action relation
 *
 * @method     TarefaActionQuery leftJoinTarefa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tarefa relation
 * @method     TarefaActionQuery rightJoinTarefa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tarefa relation
 * @method     TarefaActionQuery innerJoinTarefa($relationAlias = null) Adds a INNER JOIN clause to the query using the Tarefa relation
 *
 * @method     TarefaAction findOne(PropelPDO $con = null) Return the first TarefaAction matching the query
 * @method     TarefaAction findOneOrCreate(PropelPDO $con = null) Return the first TarefaAction matching the query, or a new TarefaAction object populated from the query conditions when no match is found
 *
 * @method     TarefaAction findOneByCoTarefa(int $co_tarefa) Return the first TarefaAction filtered by the co_tarefa column
 * @method     TarefaAction findOneByCoAction(int $co_action) Return the first TarefaAction filtered by the co_action column
 *
 * @method     array findByCoTarefa(int $co_tarefa) Return TarefaAction objects filtered by the co_tarefa column
 * @method     array findByCoAction(int $co_action) Return TarefaAction objects filtered by the co_action column
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseTarefaActionQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseTarefaActionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tarefa', $modelName = 'TarefaAction', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TarefaActionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    TarefaActionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TarefaActionQuery) {
            return $criteria;
        }
        $query = new TarefaActionQuery();
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
     * <code>
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     * @param     array[$co_tarefa, $co_action] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    TarefaAction|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = TarefaActionPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
     * @return    TarefaActionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(TarefaActionPeer::CO_TAREFA, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(TarefaActionPeer::CO_ACTION, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    TarefaActionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(TarefaActionPeer::CO_TAREFA, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(TarefaActionPeer::CO_ACTION, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the co_tarefa column
     *
     * Example usage:
     * <code>
     * $query->filterByCoTarefa(1234); // WHERE co_tarefa = 1234
     * $query->filterByCoTarefa(array(12, 34)); // WHERE co_tarefa IN (12, 34)
     * $query->filterByCoTarefa(array('min' => 12)); // WHERE co_tarefa > 12
     * </code>
     *
     * @see       filterByTarefa()
     *
     * @param     mixed $coTarefa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TarefaActionQuery The current query, for fluid interface
     */
    public function filterByCoTarefa($coTarefa = null, $comparison = null)
    {
        if (is_array($coTarefa) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(TarefaActionPeer::CO_TAREFA, $coTarefa, $comparison);
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
     * @see       filterByAction()
     *
     * @param     mixed $coAction The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TarefaActionQuery The current query, for fluid interface
     */
    public function filterByCoAction($coAction = null, $comparison = null)
    {
        if (is_array($coAction) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(TarefaActionPeer::CO_ACTION, $coAction, $comparison);
    }

    /**
     * Filter the query by a related Action object
     *
     * @param     Action|PropelCollection $action The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TarefaActionQuery The current query, for fluid interface
     */
    public function filterByAction($action, $comparison = null)
    {
        if ($action instanceof Action) {
            return $this
                ->addUsingAlias(TarefaActionPeer::CO_ACTION, $action->getCoAction(), $comparison);
        } elseif ($action instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(TarefaActionPeer::CO_ACTION, $action->toKeyValue('PrimaryKey', 'CoAction'), $comparison);
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
     * @return    TarefaActionQuery The current query, for fluid interface
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
     * @param     Tarefa|PropelCollection $tarefa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TarefaActionQuery The current query, for fluid interface
     */
    public function filterByTarefa($tarefa, $comparison = null)
    {
        if ($tarefa instanceof Tarefa) {
            return $this
                ->addUsingAlias(TarefaActionPeer::CO_TAREFA, $tarefa->getCoTarefa(), $comparison);
        } elseif ($tarefa instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(TarefaActionPeer::CO_TAREFA, $tarefa->toKeyValue('PrimaryKey', 'CoTarefa'), $comparison);
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
     * @return    TarefaActionQuery The current query, for fluid interface
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
     * @param     TarefaAction $tarefaAction Object to remove from the list of results
     *
     * @return    TarefaActionQuery The current query, for fluid interface
     */
    public function prune($tarefaAction = null)
    {
        if ($tarefaAction) {
            $this->addCond('pruneCond0', $this->getAliasedColName(TarefaActionPeer::CO_TAREFA), $tarefaAction->getCoTarefa(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(TarefaActionPeer::CO_ACTION), $tarefaAction->getCoAction(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseTarefaActionQuery