<?php


/**
 * Base class that represents a query for the 'projeto_ambiente' table.
 *
 * 
 *
 * @method     ProjetoAmbienteQuery orderByCoProjeto($order = Criteria::ASC) Order by the co_projeto column
 * @method     ProjetoAmbienteQuery orderByCoAmbiente($order = Criteria::ASC) Order by the co_ambiente column
 * @method     ProjetoAmbienteQuery orderByStProjetoAmbiente($order = Criteria::ASC) Order by the st_projeto_ambiente column
 *
 * @method     ProjetoAmbienteQuery groupByCoProjeto() Group by the co_projeto column
 * @method     ProjetoAmbienteQuery groupByCoAmbiente() Group by the co_ambiente column
 * @method     ProjetoAmbienteQuery groupByStProjetoAmbiente() Group by the st_projeto_ambiente column
 *
 * @method     ProjetoAmbienteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ProjetoAmbienteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ProjetoAmbienteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ProjetoAmbienteQuery leftJoinAmbiente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ambiente relation
 * @method     ProjetoAmbienteQuery rightJoinAmbiente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ambiente relation
 * @method     ProjetoAmbienteQuery innerJoinAmbiente($relationAlias = null) Adds a INNER JOIN clause to the query using the Ambiente relation
 *
 * @method     ProjetoAmbienteQuery leftJoinProjeto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Projeto relation
 * @method     ProjetoAmbienteQuery rightJoinProjeto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Projeto relation
 * @method     ProjetoAmbienteQuery innerJoinProjeto($relationAlias = null) Adds a INNER JOIN clause to the query using the Projeto relation
 *
 * @method     ProjetoAmbienteQuery leftJoinTarefa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tarefa relation
 * @method     ProjetoAmbienteQuery rightJoinTarefa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tarefa relation
 * @method     ProjetoAmbienteQuery innerJoinTarefa($relationAlias = null) Adds a INNER JOIN clause to the query using the Tarefa relation
 *
 * @method     ProjetoAmbiente findOne(PropelPDO $con = null) Return the first ProjetoAmbiente matching the query
 * @method     ProjetoAmbiente findOneOrCreate(PropelPDO $con = null) Return the first ProjetoAmbiente matching the query, or a new ProjetoAmbiente object populated from the query conditions when no match is found
 *
 * @method     ProjetoAmbiente findOneByCoProjeto(int $co_projeto) Return the first ProjetoAmbiente filtered by the co_projeto column
 * @method     ProjetoAmbiente findOneByCoAmbiente(int $co_ambiente) Return the first ProjetoAmbiente filtered by the co_ambiente column
 * @method     ProjetoAmbiente findOneByStProjetoAmbiente(boolean $st_projeto_ambiente) Return the first ProjetoAmbiente filtered by the st_projeto_ambiente column
 *
 * @method     array findByCoProjeto(int $co_projeto) Return ProjetoAmbiente objects filtered by the co_projeto column
 * @method     array findByCoAmbiente(int $co_ambiente) Return ProjetoAmbiente objects filtered by the co_ambiente column
 * @method     array findByStProjetoAmbiente(boolean $st_projeto_ambiente) Return ProjetoAmbiente objects filtered by the st_projeto_ambiente column
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseProjetoAmbienteQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseProjetoAmbienteQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tarefa', $modelName = 'ProjetoAmbiente', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProjetoAmbienteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    ProjetoAmbienteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProjetoAmbienteQuery) {
            return $criteria;
        }
        $query = new ProjetoAmbienteQuery();
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
     * @param     array[$co_projeto, $co_ambiente] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    ProjetoAmbiente|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = ProjetoAmbientePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    ProjetoAmbienteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ProjetoAmbientePeer::CO_PROJETO, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ProjetoAmbientePeer::CO_AMBIENTE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    ProjetoAmbienteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ProjetoAmbientePeer::CO_PROJETO, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ProjetoAmbientePeer::CO_AMBIENTE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the co_projeto column
     *
     * Example usage:
     * <code>
     * $query->filterByCoProjeto(1234); // WHERE co_projeto = 1234
     * $query->filterByCoProjeto(array(12, 34)); // WHERE co_projeto IN (12, 34)
     * $query->filterByCoProjeto(array('min' => 12)); // WHERE co_projeto > 12
     * </code>
     *
     * @see       filterByProjeto()
     *
     * @param     mixed $coProjeto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProjetoAmbienteQuery The current query, for fluid interface
     */
    public function filterByCoProjeto($coProjeto = null, $comparison = null)
    {
        if (is_array($coProjeto) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(ProjetoAmbientePeer::CO_PROJETO, $coProjeto, $comparison);
    }

    /**
     * Filter the query on the co_ambiente column
     *
     * Example usage:
     * <code>
     * $query->filterByCoAmbiente(1234); // WHERE co_ambiente = 1234
     * $query->filterByCoAmbiente(array(12, 34)); // WHERE co_ambiente IN (12, 34)
     * $query->filterByCoAmbiente(array('min' => 12)); // WHERE co_ambiente > 12
     * </code>
     *
     * @see       filterByAmbiente()
     *
     * @param     mixed $coAmbiente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProjetoAmbienteQuery The current query, for fluid interface
     */
    public function filterByCoAmbiente($coAmbiente = null, $comparison = null)
    {
        if (is_array($coAmbiente) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(ProjetoAmbientePeer::CO_AMBIENTE, $coAmbiente, $comparison);
    }

    /**
     * Filter the query on the st_projeto_ambiente column
     *
     * Example usage:
     * <code>
     * $query->filterByStProjetoAmbiente(true); // WHERE st_projeto_ambiente = true
     * $query->filterByStProjetoAmbiente('yes'); // WHERE st_projeto_ambiente = true
     * </code>
     *
     * @param     boolean|string $stProjetoAmbiente The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProjetoAmbienteQuery The current query, for fluid interface
     */
    public function filterByStProjetoAmbiente($stProjetoAmbiente = null, $comparison = null)
    {
        if (is_string($stProjetoAmbiente)) {
            $st_projeto_ambiente = in_array(strtolower($stProjetoAmbiente), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(ProjetoAmbientePeer::ST_PROJETO_AMBIENTE, $stProjetoAmbiente, $comparison);
    }

    /**
     * Filter the query by a related Ambiente object
     *
     * @param     Ambiente|PropelCollection $ambiente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProjetoAmbienteQuery The current query, for fluid interface
     */
    public function filterByAmbiente($ambiente, $comparison = null)
    {
        if ($ambiente instanceof Ambiente) {
            return $this
                ->addUsingAlias(ProjetoAmbientePeer::CO_AMBIENTE, $ambiente->getCoAmbiente(), $comparison);
        } elseif ($ambiente instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(ProjetoAmbientePeer::CO_AMBIENTE, $ambiente->toKeyValue('PrimaryKey', 'CoAmbiente'), $comparison);
        } else {
            throw new PropelException('filterByAmbiente() only accepts arguments of type Ambiente or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ambiente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    ProjetoAmbienteQuery The current query, for fluid interface
     */
    public function joinAmbiente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ambiente');

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
            $this->addJoinObject($join, 'Ambiente');
        }

        return $this;
    }

    /**
     * Use the Ambiente relation Ambiente object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    AmbienteQuery A secondary query class using the current class as primary query
     */
    public function useAmbienteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAmbiente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ambiente', 'AmbienteQuery');
    }

    /**
     * Filter the query by a related Projeto object
     *
     * @param     Projeto|PropelCollection $projeto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProjetoAmbienteQuery The current query, for fluid interface
     */
    public function filterByProjeto($projeto, $comparison = null)
    {
        if ($projeto instanceof Projeto) {
            return $this
                ->addUsingAlias(ProjetoAmbientePeer::CO_PROJETO, $projeto->getCoProjeto(), $comparison);
        } elseif ($projeto instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(ProjetoAmbientePeer::CO_PROJETO, $projeto->toKeyValue('PrimaryKey', 'CoProjeto'), $comparison);
        } else {
            throw new PropelException('filterByProjeto() only accepts arguments of type Projeto or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Projeto relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    ProjetoAmbienteQuery The current query, for fluid interface
     */
    public function joinProjeto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Projeto');

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
            $this->addJoinObject($join, 'Projeto');
        }

        return $this;
    }

    /**
     * Use the Projeto relation Projeto object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    ProjetoQuery A secondary query class using the current class as primary query
     */
    public function useProjetoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProjeto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Projeto', 'ProjetoQuery');
    }

    /**
     * Filter the query by a related Tarefa object
     *
     * @param     Tarefa $tarefa  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProjetoAmbienteQuery The current query, for fluid interface
     */
    public function filterByTarefa($tarefa, $comparison = null)
    {
        if ($tarefa instanceof Tarefa) {
            return $this
                ->addUsingAlias(ProjetoAmbientePeer::CO_AMBIENTE, $tarefa->getCoAmbiente(), $comparison)
                ->addUsingAlias(ProjetoAmbientePeer::CO_PROJETO, $tarefa->getCoProjeto(), $comparison);
        } else {
            throw new PropelException('filterByTarefa() only accepts arguments of type Tarefa');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Tarefa relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    ProjetoAmbienteQuery The current query, for fluid interface
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
     * @param     ProjetoAmbiente $projetoAmbiente Object to remove from the list of results
     *
     * @return    ProjetoAmbienteQuery The current query, for fluid interface
     */
    public function prune($projetoAmbiente = null)
    {
        if ($projetoAmbiente) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ProjetoAmbientePeer::CO_PROJETO), $projetoAmbiente->getCoProjeto(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ProjetoAmbientePeer::CO_AMBIENTE), $projetoAmbiente->getCoAmbiente(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseProjetoAmbienteQuery