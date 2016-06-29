<?php


/**
 * Base class that represents a query for the 'orgao' table.
 *
 * 
 *
 * @method     OrgaoQuery orderByCoOrgao($order = Criteria::ASC) Order by the co_orgao column
 * @method     OrgaoQuery orderByNoOrgao($order = Criteria::ASC) Order by the no_orgao column
 * @method     OrgaoQuery orderByNuTelefoneOrgao($order = Criteria::ASC) Order by the nu_telefone_orgao column
 * @method     OrgaoQuery orderBySgOrgao($order = Criteria::ASC) Order by the sg_orgao column
 *
 * @method     OrgaoQuery groupByCoOrgao() Group by the co_orgao column
 * @method     OrgaoQuery groupByNoOrgao() Group by the no_orgao column
 * @method     OrgaoQuery groupByNuTelefoneOrgao() Group by the nu_telefone_orgao column
 * @method     OrgaoQuery groupBySgOrgao() Group by the sg_orgao column
 *
 * @method     OrgaoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     OrgaoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     OrgaoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     OrgaoQuery leftJoinRlOrgaoProjeto($relationAlias = null) Adds a LEFT JOIN clause to the query using the RlOrgaoProjeto relation
 * @method     OrgaoQuery rightJoinRlOrgaoProjeto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RlOrgaoProjeto relation
 * @method     OrgaoQuery innerJoinRlOrgaoProjeto($relationAlias = null) Adds a INNER JOIN clause to the query using the RlOrgaoProjeto relation
 *
 * @method     OrgaoQuery leftJoinRlUsuarioOrgao($relationAlias = null) Adds a LEFT JOIN clause to the query using the RlUsuarioOrgao relation
 * @method     OrgaoQuery rightJoinRlUsuarioOrgao($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RlUsuarioOrgao relation
 * @method     OrgaoQuery innerJoinRlUsuarioOrgao($relationAlias = null) Adds a INNER JOIN clause to the query using the RlUsuarioOrgao relation
 *
 * @method     OrgaoQuery leftJoinTarefa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tarefa relation
 * @method     OrgaoQuery rightJoinTarefa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tarefa relation
 * @method     OrgaoQuery innerJoinTarefa($relationAlias = null) Adds a INNER JOIN clause to the query using the Tarefa relation
 *
 * @method     Orgao findOne(PropelPDO $con = null) Return the first Orgao matching the query
 * @method     Orgao findOneOrCreate(PropelPDO $con = null) Return the first Orgao matching the query, or a new Orgao object populated from the query conditions when no match is found
 *
 * @method     Orgao findOneByCoOrgao(int $co_orgao) Return the first Orgao filtered by the co_orgao column
 * @method     Orgao findOneByNoOrgao(string $no_orgao) Return the first Orgao filtered by the no_orgao column
 * @method     Orgao findOneByNuTelefoneOrgao(string $nu_telefone_orgao) Return the first Orgao filtered by the nu_telefone_orgao column
 * @method     Orgao findOneBySgOrgao(string $sg_orgao) Return the first Orgao filtered by the sg_orgao column
 *
 * @method     array findByCoOrgao(int $co_orgao) Return Orgao objects filtered by the co_orgao column
 * @method     array findByNoOrgao(string $no_orgao) Return Orgao objects filtered by the no_orgao column
 * @method     array findByNuTelefoneOrgao(string $nu_telefone_orgao) Return Orgao objects filtered by the nu_telefone_orgao column
 * @method     array findBySgOrgao(string $sg_orgao) Return Orgao objects filtered by the sg_orgao column
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseOrgaoQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseOrgaoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tarefa', $modelName = 'Orgao', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OrgaoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    OrgaoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OrgaoQuery) {
            return $criteria;
        }
        $query = new OrgaoQuery();
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
     * @return    Orgao|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = OrgaoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    OrgaoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(OrgaoPeer::CO_ORGAO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    OrgaoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(OrgaoPeer::CO_ORGAO, $keys, Criteria::IN);
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
     * @param     mixed $coOrgao The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OrgaoQuery The current query, for fluid interface
     */
    public function filterByCoOrgao($coOrgao = null, $comparison = null)
    {
        if (is_array($coOrgao) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(OrgaoPeer::CO_ORGAO, $coOrgao, $comparison);
    }

    /**
     * Filter the query on the no_orgao column
     *
     * Example usage:
     * <code>
     * $query->filterByNoOrgao('fooValue');   // WHERE no_orgao = 'fooValue'
     * $query->filterByNoOrgao('%fooValue%'); // WHERE no_orgao LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noOrgao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OrgaoQuery The current query, for fluid interface
     */
    public function filterByNoOrgao($noOrgao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noOrgao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noOrgao)) {
                $noOrgao = str_replace('*', '%', $noOrgao);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(OrgaoPeer::NO_ORGAO, $noOrgao, $comparison);
    }

    /**
     * Filter the query on the nu_telefone_orgao column
     *
     * Example usage:
     * <code>
     * $query->filterByNuTelefoneOrgao('fooValue');   // WHERE nu_telefone_orgao = 'fooValue'
     * $query->filterByNuTelefoneOrgao('%fooValue%'); // WHERE nu_telefone_orgao LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nuTelefoneOrgao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OrgaoQuery The current query, for fluid interface
     */
    public function filterByNuTelefoneOrgao($nuTelefoneOrgao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nuTelefoneOrgao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nuTelefoneOrgao)) {
                $nuTelefoneOrgao = str_replace('*', '%', $nuTelefoneOrgao);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(OrgaoPeer::NU_TELEFONE_ORGAO, $nuTelefoneOrgao, $comparison);
    }

    /**
     * Filter the query on the sg_orgao column
     *
     * Example usage:
     * <code>
     * $query->filterBySgOrgao('fooValue');   // WHERE sg_orgao = 'fooValue'
     * $query->filterBySgOrgao('%fooValue%'); // WHERE sg_orgao LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sgOrgao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OrgaoQuery The current query, for fluid interface
     */
    public function filterBySgOrgao($sgOrgao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sgOrgao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sgOrgao)) {
                $sgOrgao = str_replace('*', '%', $sgOrgao);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(OrgaoPeer::SG_ORGAO, $sgOrgao, $comparison);
    }

    /**
     * Filter the query by a related RlOrgaoProjeto object
     *
     * @param     RlOrgaoProjeto $rlOrgaoProjeto  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OrgaoQuery The current query, for fluid interface
     */
    public function filterByRlOrgaoProjeto($rlOrgaoProjeto, $comparison = null)
    {
        if ($rlOrgaoProjeto instanceof RlOrgaoProjeto) {
            return $this
                ->addUsingAlias(OrgaoPeer::CO_ORGAO, $rlOrgaoProjeto->getCoOrgao(), $comparison);
        } elseif ($rlOrgaoProjeto instanceof PropelCollection) {
            return $this
                ->useRlOrgaoProjetoQuery()
                ->filterByPrimaryKeys($rlOrgaoProjeto->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRlOrgaoProjeto() only accepts arguments of type RlOrgaoProjeto or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RlOrgaoProjeto relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    OrgaoQuery The current query, for fluid interface
     */
    public function joinRlOrgaoProjeto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RlOrgaoProjeto');

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
            $this->addJoinObject($join, 'RlOrgaoProjeto');
        }

        return $this;
    }

    /**
     * Use the RlOrgaoProjeto relation RlOrgaoProjeto object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    RlOrgaoProjetoQuery A secondary query class using the current class as primary query
     */
    public function useRlOrgaoProjetoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRlOrgaoProjeto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RlOrgaoProjeto', 'RlOrgaoProjetoQuery');
    }

    /**
     * Filter the query by a related RlUsuarioOrgao object
     *
     * @param     RlUsuarioOrgao $rlUsuarioOrgao  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OrgaoQuery The current query, for fluid interface
     */
    public function filterByRlUsuarioOrgao($rlUsuarioOrgao, $comparison = null)
    {
        if ($rlUsuarioOrgao instanceof RlUsuarioOrgao) {
            return $this
                ->addUsingAlias(OrgaoPeer::CO_ORGAO, $rlUsuarioOrgao->getCoOrgao(), $comparison);
        } elseif ($rlUsuarioOrgao instanceof PropelCollection) {
            return $this
                ->useRlUsuarioOrgaoQuery()
                ->filterByPrimaryKeys($rlUsuarioOrgao->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRlUsuarioOrgao() only accepts arguments of type RlUsuarioOrgao or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RlUsuarioOrgao relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    OrgaoQuery The current query, for fluid interface
     */
    public function joinRlUsuarioOrgao($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RlUsuarioOrgao');

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
            $this->addJoinObject($join, 'RlUsuarioOrgao');
        }

        return $this;
    }

    /**
     * Use the RlUsuarioOrgao relation RlUsuarioOrgao object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    RlUsuarioOrgaoQuery A secondary query class using the current class as primary query
     */
    public function useRlUsuarioOrgaoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRlUsuarioOrgao($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RlUsuarioOrgao', 'RlUsuarioOrgaoQuery');
    }

    /**
     * Filter the query by a related Tarefa object
     *
     * @param     Tarefa $tarefa  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    OrgaoQuery The current query, for fluid interface
     */
    public function filterByTarefa($tarefa, $comparison = null)
    {
        if ($tarefa instanceof Tarefa) {
            return $this
                ->addUsingAlias(OrgaoPeer::CO_ORGAO, $tarefa->getCoOrgao(), $comparison);
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
     * @return    OrgaoQuery The current query, for fluid interface
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
     * @param     Orgao $orgao Object to remove from the list of results
     *
     * @return    OrgaoQuery The current query, for fluid interface
     */
    public function prune($orgao = null)
    {
        if ($orgao) {
            $this->addUsingAlias(OrgaoPeer::CO_ORGAO, $orgao->getCoOrgao(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseOrgaoQuery