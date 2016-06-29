<?php


/**
 * Base class that represents a query for the 'rl_orgao_projeto' table.
 *
 * 
 *
 * @method     RlOrgaoProjetoQuery orderByCoOrgao($order = Criteria::ASC) Order by the co_orgao column
 * @method     RlOrgaoProjetoQuery orderByCoProjeto($order = Criteria::ASC) Order by the co_projeto column
 * @method     RlOrgaoProjetoQuery orderByDtOgaoProjeto($order = Criteria::ASC) Order by the dt_ogao_projeto column
 * @method     RlOrgaoProjetoQuery orderByStOgaoProjeto($order = Criteria::ASC) Order by the st_ogao_projeto column
 *
 * @method     RlOrgaoProjetoQuery groupByCoOrgao() Group by the co_orgao column
 * @method     RlOrgaoProjetoQuery groupByCoProjeto() Group by the co_projeto column
 * @method     RlOrgaoProjetoQuery groupByDtOgaoProjeto() Group by the dt_ogao_projeto column
 * @method     RlOrgaoProjetoQuery groupByStOgaoProjeto() Group by the st_ogao_projeto column
 *
 * @method     RlOrgaoProjetoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RlOrgaoProjetoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RlOrgaoProjetoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RlOrgaoProjetoQuery leftJoinOrgao($relationAlias = null) Adds a LEFT JOIN clause to the query using the Orgao relation
 * @method     RlOrgaoProjetoQuery rightJoinOrgao($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Orgao relation
 * @method     RlOrgaoProjetoQuery innerJoinOrgao($relationAlias = null) Adds a INNER JOIN clause to the query using the Orgao relation
 *
 * @method     RlOrgaoProjetoQuery leftJoinProjeto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Projeto relation
 * @method     RlOrgaoProjetoQuery rightJoinProjeto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Projeto relation
 * @method     RlOrgaoProjetoQuery innerJoinProjeto($relationAlias = null) Adds a INNER JOIN clause to the query using the Projeto relation
 *
 * @method     RlOrgaoProjeto findOne(PropelPDO $con = null) Return the first RlOrgaoProjeto matching the query
 * @method     RlOrgaoProjeto findOneOrCreate(PropelPDO $con = null) Return the first RlOrgaoProjeto matching the query, or a new RlOrgaoProjeto object populated from the query conditions when no match is found
 *
 * @method     RlOrgaoProjeto findOneByCoOrgao(int $co_orgao) Return the first RlOrgaoProjeto filtered by the co_orgao column
 * @method     RlOrgaoProjeto findOneByCoProjeto(int $co_projeto) Return the first RlOrgaoProjeto filtered by the co_projeto column
 * @method     RlOrgaoProjeto findOneByDtOgaoProjeto(string $dt_ogao_projeto) Return the first RlOrgaoProjeto filtered by the dt_ogao_projeto column
 * @method     RlOrgaoProjeto findOneByStOgaoProjeto(boolean $st_ogao_projeto) Return the first RlOrgaoProjeto filtered by the st_ogao_projeto column
 *
 * @method     array findByCoOrgao(int $co_orgao) Return RlOrgaoProjeto objects filtered by the co_orgao column
 * @method     array findByCoProjeto(int $co_projeto) Return RlOrgaoProjeto objects filtered by the co_projeto column
 * @method     array findByDtOgaoProjeto(string $dt_ogao_projeto) Return RlOrgaoProjeto objects filtered by the dt_ogao_projeto column
 * @method     array findByStOgaoProjeto(boolean $st_ogao_projeto) Return RlOrgaoProjeto objects filtered by the st_ogao_projeto column
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseRlOrgaoProjetoQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseRlOrgaoProjetoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tarefa', $modelName = 'RlOrgaoProjeto', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RlOrgaoProjetoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    RlOrgaoProjetoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RlOrgaoProjetoQuery) {
            return $criteria;
        }
        $query = new RlOrgaoProjetoQuery();
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
     * @param     array[$co_orgao, $co_projeto] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    RlOrgaoProjeto|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = RlOrgaoProjetoPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    RlOrgaoProjetoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(RlOrgaoProjetoPeer::CO_ORGAO, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(RlOrgaoProjetoPeer::CO_PROJETO, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    RlOrgaoProjetoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(RlOrgaoProjetoPeer::CO_ORGAO, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(RlOrgaoProjetoPeer::CO_PROJETO, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the co_orgao column
     *
     * Example usage:
     * <code>
     * $query->filterByCoOrgao(1234); // WHERE co_orgao = 1234
     * $query->filterByCoOrgao(array(12, 34)); // WHERE co_orgao IN (12, 34)
     * $query->filterByCoOrgao(array('min' => 12)); // WHERE co_orgao > 12
     * </code>
     *
     * @see       filterByOrgao()
     *
     * @param     mixed $coOrgao The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RlOrgaoProjetoQuery The current query, for fluid interface
     */
    public function filterByCoOrgao($coOrgao = null, $comparison = null)
    {
        if (is_array($coOrgao) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(RlOrgaoProjetoPeer::CO_ORGAO, $coOrgao, $comparison);
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
     * @return    RlOrgaoProjetoQuery The current query, for fluid interface
     */
    public function filterByCoProjeto($coProjeto = null, $comparison = null)
    {
        if (is_array($coProjeto) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(RlOrgaoProjetoPeer::CO_PROJETO, $coProjeto, $comparison);
    }

    /**
     * Filter the query on the dt_ogao_projeto column
     *
     * Example usage:
     * <code>
     * $query->filterByDtOgaoProjeto('2011-03-14'); // WHERE dt_ogao_projeto = '2011-03-14'
     * $query->filterByDtOgaoProjeto('now'); // WHERE dt_ogao_projeto = '2011-03-14'
     * $query->filterByDtOgaoProjeto(array('max' => 'yesterday')); // WHERE dt_ogao_projeto > '2011-03-13'
     * </code>
     *
     * @param     mixed $dtOgaoProjeto The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RlOrgaoProjetoQuery The current query, for fluid interface
     */
    public function filterByDtOgaoProjeto($dtOgaoProjeto = null, $comparison = null)
    {
        if (is_array($dtOgaoProjeto)) {
            $useMinMax = false;
            if (isset($dtOgaoProjeto['min'])) {
                $this->addUsingAlias(RlOrgaoProjetoPeer::DT_OGAO_PROJETO, $dtOgaoProjeto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtOgaoProjeto['max'])) {
                $this->addUsingAlias(RlOrgaoProjetoPeer::DT_OGAO_PROJETO, $dtOgaoProjeto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(RlOrgaoProjetoPeer::DT_OGAO_PROJETO, $dtOgaoProjeto, $comparison);
    }

    /**
     * Filter the query on the st_ogao_projeto column
     *
     * Example usage:
     * <code>
     * $query->filterByStOgaoProjeto(true); // WHERE st_ogao_projeto = true
     * $query->filterByStOgaoProjeto('yes'); // WHERE st_ogao_projeto = true
     * </code>
     *
     * @param     boolean|string $stOgaoProjeto The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RlOrgaoProjetoQuery The current query, for fluid interface
     */
    public function filterByStOgaoProjeto($stOgaoProjeto = null, $comparison = null)
    {
        if (is_string($stOgaoProjeto)) {
            $st_ogao_projeto = in_array(strtolower($stOgaoProjeto), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(RlOrgaoProjetoPeer::ST_OGAO_PROJETO, $stOgaoProjeto, $comparison);
    }

    /**
     * Filter the query by a related Orgao object
     *
     * @param     Orgao|PropelCollection $orgao The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RlOrgaoProjetoQuery The current query, for fluid interface
     */
    public function filterByOrgao($orgao, $comparison = null)
    {
        if ($orgao instanceof Orgao) {
            return $this
                ->addUsingAlias(RlOrgaoProjetoPeer::CO_ORGAO, $orgao->getCoOrgao(), $comparison);
        } elseif ($orgao instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(RlOrgaoProjetoPeer::CO_ORGAO, $orgao->toKeyValue('PrimaryKey', 'CoOrgao'), $comparison);
        } else {
            throw new PropelException('filterByOrgao() only accepts arguments of type Orgao or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Orgao relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    RlOrgaoProjetoQuery The current query, for fluid interface
     */
    public function joinOrgao($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Orgao');

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
            $this->addJoinObject($join, 'Orgao');
        }

        return $this;
    }

    /**
     * Use the Orgao relation Orgao object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    OrgaoQuery A secondary query class using the current class as primary query
     */
    public function useOrgaoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOrgao($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Orgao', 'OrgaoQuery');
    }

    /**
     * Filter the query by a related Projeto object
     *
     * @param     Projeto|PropelCollection $projeto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RlOrgaoProjetoQuery The current query, for fluid interface
     */
    public function filterByProjeto($projeto, $comparison = null)
    {
        if ($projeto instanceof Projeto) {
            return $this
                ->addUsingAlias(RlOrgaoProjetoPeer::CO_PROJETO, $projeto->getCoProjeto(), $comparison);
        } elseif ($projeto instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(RlOrgaoProjetoPeer::CO_PROJETO, $projeto->toKeyValue('PrimaryKey', 'CoProjeto'), $comparison);
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
     * @return    RlOrgaoProjetoQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param     RlOrgaoProjeto $rlOrgaoProjeto Object to remove from the list of results
     *
     * @return    RlOrgaoProjetoQuery The current query, for fluid interface
     */
    public function prune($rlOrgaoProjeto = null)
    {
        if ($rlOrgaoProjeto) {
            $this->addCond('pruneCond0', $this->getAliasedColName(RlOrgaoProjetoPeer::CO_ORGAO), $rlOrgaoProjeto->getCoOrgao(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(RlOrgaoProjetoPeer::CO_PROJETO), $rlOrgaoProjeto->getCoProjeto(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseRlOrgaoProjetoQuery