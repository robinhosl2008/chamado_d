<?php


/**
 * Base class that represents a query for the 'status' table.
 *
 * 
 *
 * @method     StatusQuery orderByCoStatus($order = Criteria::ASC) Order by the co_status column
 * @method     StatusQuery orderByNoStatus($order = Criteria::ASC) Order by the no_status column
 * @method     StatusQuery orderBySituacao($order = Criteria::ASC) Order by the situacao column
 *
 * @method     StatusQuery groupByCoStatus() Group by the co_status column
 * @method     StatusQuery groupByNoStatus() Group by the no_status column
 * @method     StatusQuery groupBySituacao() Group by the situacao column
 *
 * @method     StatusQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     StatusQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     StatusQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     StatusQuery leftJoinTarefa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tarefa relation
 * @method     StatusQuery rightJoinTarefa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tarefa relation
 * @method     StatusQuery innerJoinTarefa($relationAlias = null) Adds a INNER JOIN clause to the query using the Tarefa relation
 *
 * @method     StatusQuery leftJoinUsuarioTarefa($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioTarefa relation
 * @method     StatusQuery rightJoinUsuarioTarefa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioTarefa relation
 * @method     StatusQuery innerJoinUsuarioTarefa($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioTarefa relation
 *
 * @method     Status findOne(PropelPDO $con = null) Return the first Status matching the query
 * @method     Status findOneOrCreate(PropelPDO $con = null) Return the first Status matching the query, or a new Status object populated from the query conditions when no match is found
 *
 * @method     Status findOneByCoStatus(int $co_status) Return the first Status filtered by the co_status column
 * @method     Status findOneByNoStatus(string $no_status) Return the first Status filtered by the no_status column
 * @method     Status findOneBySituacao(boolean $situacao) Return the first Status filtered by the situacao column
 *
 * @method     array findByCoStatus(int $co_status) Return Status objects filtered by the co_status column
 * @method     array findByNoStatus(string $no_status) Return Status objects filtered by the no_status column
 * @method     array findBySituacao(boolean $situacao) Return Status objects filtered by the situacao column
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseStatusQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseStatusQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tarefa', $modelName = 'Status', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new StatusQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    StatusQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof StatusQuery) {
            return $criteria;
        }
        $query = new StatusQuery();
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
     * @return    Status|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = StatusPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    StatusQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(StatusPeer::CO_STATUS, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    StatusQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(StatusPeer::CO_STATUS, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the co_status column
     *
     * Example usage:
     * <code>
     * $query->filterByCoStatus(1234); // WHERE co_status = 1234
     * $query->filterByCoStatus(array(12, 34)); // WHERE co_status IN (12, 34)
     * $query->filterByCoStatus(array('min' => 12)); // WHERE co_status > 12
     * </code>
     *
     * @param     mixed $coStatus The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    StatusQuery The current query, for fluid interface
     */
    public function filterByCoStatus($coStatus = null, $comparison = null)
    {
        if (is_array($coStatus) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(StatusPeer::CO_STATUS, $coStatus, $comparison);
    }

    /**
     * Filter the query on the no_status column
     *
     * Example usage:
     * <code>
     * $query->filterByNoStatus('fooValue');   // WHERE no_status = 'fooValue'
     * $query->filterByNoStatus('%fooValue%'); // WHERE no_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    StatusQuery The current query, for fluid interface
     */
    public function filterByNoStatus($noStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noStatus)) {
                $noStatus = str_replace('*', '%', $noStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(StatusPeer::NO_STATUS, $noStatus, $comparison);
    }

    /**
     * Filter the query on the situacao column
     *
     * Example usage:
     * <code>
     * $query->filterBySituacao(true); // WHERE situacao = true
     * $query->filterBySituacao('yes'); // WHERE situacao = true
     * </code>
     *
     * @param     boolean|string $situacao The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    StatusQuery The current query, for fluid interface
     */
    public function filterBySituacao($situacao = null, $comparison = null)
    {
        if (is_string($situacao)) {
            $situacao = in_array(strtolower($situacao), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(StatusPeer::SITUACAO, $situacao, $comparison);
    }

    /**
     * Filter the query by a related Tarefa object
     *
     * @param     Tarefa $tarefa  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    StatusQuery The current query, for fluid interface
     */
    public function filterByTarefa($tarefa, $comparison = null)
    {
        if ($tarefa instanceof Tarefa) {
            return $this
                ->addUsingAlias(StatusPeer::CO_STATUS, $tarefa->getCoStatus(), $comparison);
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
     * @return    StatusQuery The current query, for fluid interface
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
     * Filter the query by a related UsuarioTarefa object
     *
     * @param     UsuarioTarefa $usuarioTarefa  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    StatusQuery The current query, for fluid interface
     */
    public function filterByUsuarioTarefa($usuarioTarefa, $comparison = null)
    {
        if ($usuarioTarefa instanceof UsuarioTarefa) {
            return $this
                ->addUsingAlias(StatusPeer::CO_STATUS, $usuarioTarefa->getCoStatus(), $comparison);
        } elseif ($usuarioTarefa instanceof PropelCollection) {
            return $this
                ->useUsuarioTarefaQuery()
                ->filterByPrimaryKeys($usuarioTarefa->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByUsuarioTarefa() only accepts arguments of type UsuarioTarefa or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UsuarioTarefa relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    StatusQuery The current query, for fluid interface
     */
    public function joinUsuarioTarefa($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UsuarioTarefa');

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
            $this->addJoinObject($join, 'UsuarioTarefa');
        }

        return $this;
    }

    /**
     * Use the UsuarioTarefa relation UsuarioTarefa object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    UsuarioTarefaQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioTarefaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsuarioTarefa($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UsuarioTarefa', 'UsuarioTarefaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     Status $status Object to remove from the list of results
     *
     * @return    StatusQuery The current query, for fluid interface
     */
    public function prune($status = null)
    {
        if ($status) {
            $this->addUsingAlias(StatusPeer::CO_STATUS, $status->getCoStatus(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseStatusQuery