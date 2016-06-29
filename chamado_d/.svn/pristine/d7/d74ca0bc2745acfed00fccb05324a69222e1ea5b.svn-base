<?php


/**
 * Base class that represents a query for the 'projeto' table.
 *
 * 
 *
 * @method     ProjetoQuery orderByCoProjeto($order = Criteria::ASC) Order by the co_projeto column
 * @method     ProjetoQuery orderByNoProjeto($order = Criteria::ASC) Order by the no_projeto column
 *
 * @method     ProjetoQuery groupByCoProjeto() Group by the co_projeto column
 * @method     ProjetoQuery groupByNoProjeto() Group by the no_projeto column
 *
 * @method     ProjetoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ProjetoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ProjetoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ProjetoQuery leftJoinRlOrgaoProjeto($relationAlias = null) Adds a LEFT JOIN clause to the query using the RlOrgaoProjeto relation
 * @method     ProjetoQuery rightJoinRlOrgaoProjeto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RlOrgaoProjeto relation
 * @method     ProjetoQuery innerJoinRlOrgaoProjeto($relationAlias = null) Adds a INNER JOIN clause to the query using the RlOrgaoProjeto relation
 *
 * @method     ProjetoQuery leftJoinRlProjetoVersaoAmb($relationAlias = null) Adds a LEFT JOIN clause to the query using the RlProjetoVersaoAmb relation
 * @method     ProjetoQuery rightJoinRlProjetoVersaoAmb($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RlProjetoVersaoAmb relation
 * @method     ProjetoQuery innerJoinRlProjetoVersaoAmb($relationAlias = null) Adds a INNER JOIN clause to the query using the RlProjetoVersaoAmb relation
 *
 * @method     ProjetoQuery leftJoinTbModuloProjeto($relationAlias = null) Adds a LEFT JOIN clause to the query using the TbModuloProjeto relation
 * @method     ProjetoQuery rightJoinTbModuloProjeto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TbModuloProjeto relation
 * @method     ProjetoQuery innerJoinTbModuloProjeto($relationAlias = null) Adds a INNER JOIN clause to the query using the TbModuloProjeto relation
 *
 * @method     ProjetoQuery leftJoinVersao($relationAlias = null) Adds a LEFT JOIN clause to the query using the Versao relation
 * @method     ProjetoQuery rightJoinVersao($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Versao relation
 * @method     ProjetoQuery innerJoinVersao($relationAlias = null) Adds a INNER JOIN clause to the query using the Versao relation
 *
 * @method     Projeto findOne(PropelPDO $con = null) Return the first Projeto matching the query
 * @method     Projeto findOneOrCreate(PropelPDO $con = null) Return the first Projeto matching the query, or a new Projeto object populated from the query conditions when no match is found
 *
 * @method     Projeto findOneByCoProjeto(int $co_projeto) Return the first Projeto filtered by the co_projeto column
 * @method     Projeto findOneByNoProjeto(string $no_projeto) Return the first Projeto filtered by the no_projeto column
 *
 * @method     array findByCoProjeto(int $co_projeto) Return Projeto objects filtered by the co_projeto column
 * @method     array findByNoProjeto(string $no_projeto) Return Projeto objects filtered by the no_projeto column
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseProjetoQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseProjetoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tarefa', $modelName = 'Projeto', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProjetoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    ProjetoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProjetoQuery) {
            return $criteria;
        }
        $query = new ProjetoQuery();
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
     * @return    Projeto|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = ProjetoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    ProjetoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(ProjetoPeer::CO_PROJETO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    ProjetoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(ProjetoPeer::CO_PROJETO, $keys, Criteria::IN);
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
     * @param     mixed $coProjeto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProjetoQuery The current query, for fluid interface
     */
    public function filterByCoProjeto($coProjeto = null, $comparison = null)
    {
        if (is_array($coProjeto) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(ProjetoPeer::CO_PROJETO, $coProjeto, $comparison);
    }

    /**
     * Filter the query on the no_projeto column
     *
     * Example usage:
     * <code>
     * $query->filterByNoProjeto('fooValue');   // WHERE no_projeto = 'fooValue'
     * $query->filterByNoProjeto('%fooValue%'); // WHERE no_projeto LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noProjeto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProjetoQuery The current query, for fluid interface
     */
    public function filterByNoProjeto($noProjeto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noProjeto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noProjeto)) {
                $noProjeto = str_replace('*', '%', $noProjeto);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ProjetoPeer::NO_PROJETO, $noProjeto, $comparison);
    }

    /**
     * Filter the query by a related RlOrgaoProjeto object
     *
     * @param     RlOrgaoProjeto $rlOrgaoProjeto  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProjetoQuery The current query, for fluid interface
     */
    public function filterByRlOrgaoProjeto($rlOrgaoProjeto, $comparison = null)
    {
        if ($rlOrgaoProjeto instanceof RlOrgaoProjeto) {
            return $this
                ->addUsingAlias(ProjetoPeer::CO_PROJETO, $rlOrgaoProjeto->getCoProjeto(), $comparison);
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
     * @return    ProjetoQuery The current query, for fluid interface
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
     * Filter the query by a related RlProjetoVersaoAmb object
     *
     * @param     RlProjetoVersaoAmb $rlProjetoVersaoAmb  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProjetoQuery The current query, for fluid interface
     */
    public function filterByRlProjetoVersaoAmb($rlProjetoVersaoAmb, $comparison = null)
    {
        if ($rlProjetoVersaoAmb instanceof RlProjetoVersaoAmb) {
            return $this
                ->addUsingAlias(ProjetoPeer::CO_PROJETO, $rlProjetoVersaoAmb->getCoProjeto(), $comparison);
        } elseif ($rlProjetoVersaoAmb instanceof PropelCollection) {
            return $this
                ->useRlProjetoVersaoAmbQuery()
                ->filterByPrimaryKeys($rlProjetoVersaoAmb->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRlProjetoVersaoAmb() only accepts arguments of type RlProjetoVersaoAmb or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RlProjetoVersaoAmb relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    ProjetoQuery The current query, for fluid interface
     */
    public function joinRlProjetoVersaoAmb($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RlProjetoVersaoAmb');

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
            $this->addJoinObject($join, 'RlProjetoVersaoAmb');
        }

        return $this;
    }

    /**
     * Use the RlProjetoVersaoAmb relation RlProjetoVersaoAmb object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    RlProjetoVersaoAmbQuery A secondary query class using the current class as primary query
     */
    public function useRlProjetoVersaoAmbQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRlProjetoVersaoAmb($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RlProjetoVersaoAmb', 'RlProjetoVersaoAmbQuery');
    }

    /**
     * Filter the query by a related TbModuloProjeto object
     *
     * @param     TbModuloProjeto $tbModuloProjeto  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProjetoQuery The current query, for fluid interface
     */
    public function filterByTbModuloProjeto($tbModuloProjeto, $comparison = null)
    {
        if ($tbModuloProjeto instanceof TbModuloProjeto) {
            return $this
                ->addUsingAlias(ProjetoPeer::CO_PROJETO, $tbModuloProjeto->getCoProjeto(), $comparison);
        } elseif ($tbModuloProjeto instanceof PropelCollection) {
            return $this
                ->useTbModuloProjetoQuery()
                ->filterByPrimaryKeys($tbModuloProjeto->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTbModuloProjeto() only accepts arguments of type TbModuloProjeto or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TbModuloProjeto relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    ProjetoQuery The current query, for fluid interface
     */
    public function joinTbModuloProjeto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TbModuloProjeto');

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
            $this->addJoinObject($join, 'TbModuloProjeto');
        }

        return $this;
    }

    /**
     * Use the TbModuloProjeto relation TbModuloProjeto object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    TbModuloProjetoQuery A secondary query class using the current class as primary query
     */
    public function useTbModuloProjetoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTbModuloProjeto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TbModuloProjeto', 'TbModuloProjetoQuery');
    }

    /**
     * Filter the query by a related Versao object
     *
     * @param     Versao $versao  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ProjetoQuery The current query, for fluid interface
     */
    public function filterByVersao($versao, $comparison = null)
    {
        if ($versao instanceof Versao) {
            return $this
                ->addUsingAlias(ProjetoPeer::CO_PROJETO, $versao->getCoProjeto(), $comparison);
        } elseif ($versao instanceof PropelCollection) {
            return $this
                ->useVersaoQuery()
                ->filterByPrimaryKeys($versao->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVersao() only accepts arguments of type Versao or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Versao relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    ProjetoQuery The current query, for fluid interface
     */
    public function joinVersao($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Versao');

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
            $this->addJoinObject($join, 'Versao');
        }

        return $this;
    }

    /**
     * Use the Versao relation Versao object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    VersaoQuery A secondary query class using the current class as primary query
     */
    public function useVersaoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVersao($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Versao', 'VersaoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     Projeto $projeto Object to remove from the list of results
     *
     * @return    ProjetoQuery The current query, for fluid interface
     */
    public function prune($projeto = null)
    {
        if ($projeto) {
            $this->addUsingAlias(ProjetoPeer::CO_PROJETO, $projeto->getCoProjeto(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseProjetoQuery