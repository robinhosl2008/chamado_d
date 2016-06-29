<?php


/**
 * Base class that represents a query for the 'tb_modulo' table.
 *
 * 
 *
 * @method     TbModuloQuery orderByCoSeqModulo($order = Criteria::ASC) Order by the co_seq_modulo column
 * @method     TbModuloQuery orderByCoProjeto($order = Criteria::ASC) Order by the co_projeto column
 * @method     TbModuloQuery orderByNoModulo($order = Criteria::ASC) Order by the no_modulo column
 * @method     TbModuloQuery orderByDsModulo($order = Criteria::ASC) Order by the ds_modulo column
 * @method     TbModuloQuery orderByStModulo($order = Criteria::ASC) Order by the st_modulo column
 *
 * @method     TbModuloQuery groupByCoSeqModulo() Group by the co_seq_modulo column
 * @method     TbModuloQuery groupByCoProjeto() Group by the co_projeto column
 * @method     TbModuloQuery groupByNoModulo() Group by the no_modulo column
 * @method     TbModuloQuery groupByDsModulo() Group by the ds_modulo column
 * @method     TbModuloQuery groupByStModulo() Group by the st_modulo column
 *
 * @method     TbModuloQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TbModuloQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TbModuloQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TbModuloQuery leftJoinProjeto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Projeto relation
 * @method     TbModuloQuery rightJoinProjeto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Projeto relation
 * @method     TbModuloQuery innerJoinProjeto($relationAlias = null) Adds a INNER JOIN clause to the query using the Projeto relation
 *
 * @method     TbModuloQuery leftJoinRlProjetoVersaoAmb($relationAlias = null) Adds a LEFT JOIN clause to the query using the RlProjetoVersaoAmb relation
 * @method     TbModuloQuery rightJoinRlProjetoVersaoAmb($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RlProjetoVersaoAmb relation
 * @method     TbModuloQuery innerJoinRlProjetoVersaoAmb($relationAlias = null) Adds a INNER JOIN clause to the query using the RlProjetoVersaoAmb relation
 *
 * @method     TbModulo findOne(PropelPDO $con = null) Return the first TbModulo matching the query
 * @method     TbModulo findOneOrCreate(PropelPDO $con = null) Return the first TbModulo matching the query, or a new TbModulo object populated from the query conditions when no match is found
 *
 * @method     TbModulo findOneByCoSeqModulo(string $co_seq_modulo) Return the first TbModulo filtered by the co_seq_modulo column
 * @method     TbModulo findOneByCoProjeto(int $co_projeto) Return the first TbModulo filtered by the co_projeto column
 * @method     TbModulo findOneByNoModulo(string $no_modulo) Return the first TbModulo filtered by the no_modulo column
 * @method     TbModulo findOneByDsModulo(string $ds_modulo) Return the first TbModulo filtered by the ds_modulo column
 * @method     TbModulo findOneByStModulo(boolean $st_modulo) Return the first TbModulo filtered by the st_modulo column
 *
 * @method     array findByCoSeqModulo(string $co_seq_modulo) Return TbModulo objects filtered by the co_seq_modulo column
 * @method     array findByCoProjeto(int $co_projeto) Return TbModulo objects filtered by the co_projeto column
 * @method     array findByNoModulo(string $no_modulo) Return TbModulo objects filtered by the no_modulo column
 * @method     array findByDsModulo(string $ds_modulo) Return TbModulo objects filtered by the ds_modulo column
 * @method     array findByStModulo(boolean $st_modulo) Return TbModulo objects filtered by the st_modulo column
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseTbModuloQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseTbModuloQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tarefa', $modelName = 'TbModulo', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TbModuloQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    TbModuloQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TbModuloQuery) {
            return $criteria;
        }
        $query = new TbModuloQuery();
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
     * @return    TbModulo|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = TbModuloPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    TbModuloQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(TbModuloPeer::CO_SEQ_MODULO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    TbModuloQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(TbModuloPeer::CO_SEQ_MODULO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the co_seq_modulo column
     *
     * Example usage:
     * <code>
     * $query->filterByCoSeqModulo('fooValue');   // WHERE co_seq_modulo = 'fooValue'
     * $query->filterByCoSeqModulo('%fooValue%'); // WHERE co_seq_modulo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $coSeqModulo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TbModuloQuery The current query, for fluid interface
     */
    public function filterByCoSeqModulo($coSeqModulo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($coSeqModulo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $coSeqModulo)) {
                $coSeqModulo = str_replace('*', '%', $coSeqModulo);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TbModuloPeer::CO_SEQ_MODULO, $coSeqModulo, $comparison);
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
     * @return    TbModuloQuery The current query, for fluid interface
     */
    public function filterByCoProjeto($coProjeto = null, $comparison = null)
    {
        if (is_array($coProjeto)) {
            $useMinMax = false;
            if (isset($coProjeto['min'])) {
                $this->addUsingAlias(TbModuloPeer::CO_PROJETO, $coProjeto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coProjeto['max'])) {
                $this->addUsingAlias(TbModuloPeer::CO_PROJETO, $coProjeto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(TbModuloPeer::CO_PROJETO, $coProjeto, $comparison);
    }

    /**
     * Filter the query on the no_modulo column
     *
     * Example usage:
     * <code>
     * $query->filterByNoModulo('fooValue');   // WHERE no_modulo = 'fooValue'
     * $query->filterByNoModulo('%fooValue%'); // WHERE no_modulo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noModulo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TbModuloQuery The current query, for fluid interface
     */
    public function filterByNoModulo($noModulo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noModulo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noModulo)) {
                $noModulo = str_replace('*', '%', $noModulo);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TbModuloPeer::NO_MODULO, $noModulo, $comparison);
    }

    /**
     * Filter the query on the ds_modulo column
     *
     * Example usage:
     * <code>
     * $query->filterByDsModulo('fooValue');   // WHERE ds_modulo = 'fooValue'
     * $query->filterByDsModulo('%fooValue%'); // WHERE ds_modulo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dsModulo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TbModuloQuery The current query, for fluid interface
     */
    public function filterByDsModulo($dsModulo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dsModulo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dsModulo)) {
                $dsModulo = str_replace('*', '%', $dsModulo);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TbModuloPeer::DS_MODULO, $dsModulo, $comparison);
    }

    /**
     * Filter the query on the st_modulo column
     *
     * Example usage:
     * <code>
     * $query->filterByStModulo(true); // WHERE st_modulo = true
     * $query->filterByStModulo('yes'); // WHERE st_modulo = true
     * </code>
     *
     * @param     boolean|string $stModulo The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TbModuloQuery The current query, for fluid interface
     */
    public function filterByStModulo($stModulo = null, $comparison = null)
    {
        if (is_string($stModulo)) {
            $st_modulo = in_array(strtolower($stModulo), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(TbModuloPeer::ST_MODULO, $stModulo, $comparison);
    }

    /**
     * Filter the query by a related Projeto object
     *
     * @param     Projeto|PropelCollection $projeto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TbModuloQuery The current query, for fluid interface
     */
    public function filterByProjeto($projeto, $comparison = null)
    {
        if ($projeto instanceof Projeto) {
            return $this
                ->addUsingAlias(TbModuloPeer::CO_PROJETO, $projeto->getCoProjeto(), $comparison);
        } elseif ($projeto instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(TbModuloPeer::CO_PROJETO, $projeto->toKeyValue('PrimaryKey', 'CoProjeto'), $comparison);
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
     * @return    TbModuloQuery The current query, for fluid interface
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
     * Filter the query by a related RlProjetoVersaoAmb object
     *
     * @param     RlProjetoVersaoAmb $rlProjetoVersaoAmb  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TbModuloQuery The current query, for fluid interface
     */
    public function filterByRlProjetoVersaoAmb($rlProjetoVersaoAmb, $comparison = null)
    {
        if ($rlProjetoVersaoAmb instanceof RlProjetoVersaoAmb) {
            return $this
                ->addUsingAlias(TbModuloPeer::CO_SEQ_MODULO, $rlProjetoVersaoAmb->getCoSeqModulo(), $comparison);
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
     * @return    TbModuloQuery The current query, for fluid interface
     */
    public function joinRlProjetoVersaoAmb($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useRlProjetoVersaoAmbQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRlProjetoVersaoAmb($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RlProjetoVersaoAmb', 'RlProjetoVersaoAmbQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     TbModulo $tbModulo Object to remove from the list of results
     *
     * @return    TbModuloQuery The current query, for fluid interface
     */
    public function prune($tbModulo = null)
    {
        if ($tbModulo) {
            $this->addUsingAlias(TbModuloPeer::CO_SEQ_MODULO, $tbModulo->getCoSeqModulo(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseTbModuloQuery