<?php


/**
 * Base class that represents a query for the 'versao' table.
 *
 * 
 *
 * @method     VersaoQuery orderByCoVersao($order = Criteria::ASC) Order by the co_versao column
 * @method     VersaoQuery orderByCoProjeto($order = Criteria::ASC) Order by the co_projeto column
 * @method     VersaoQuery orderByDsVersao($order = Criteria::ASC) Order by the ds_versao column
 * @method     VersaoQuery orderByStVersao($order = Criteria::ASC) Order by the st_versao column
 * @method     VersaoQuery orderByNoVersao($order = Criteria::ASC) Order by the no_versao column
 * @method     VersaoQuery orderByCoSeqTipoVersao($order = Criteria::ASC) Order by the co_seq_tipo_versao column
 * @method     VersaoQuery orderByDtCadastroVersao($order = Criteria::ASC) Order by the dt_cadastro_versao column
 *
 * @method     VersaoQuery groupByCoVersao() Group by the co_versao column
 * @method     VersaoQuery groupByCoProjeto() Group by the co_projeto column
 * @method     VersaoQuery groupByDsVersao() Group by the ds_versao column
 * @method     VersaoQuery groupByStVersao() Group by the st_versao column
 * @method     VersaoQuery groupByNoVersao() Group by the no_versao column
 * @method     VersaoQuery groupByCoSeqTipoVersao() Group by the co_seq_tipo_versao column
 * @method     VersaoQuery groupByDtCadastroVersao() Group by the dt_cadastro_versao column
 *
 * @method     VersaoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     VersaoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     VersaoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     VersaoQuery leftJoinProjeto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Projeto relation
 * @method     VersaoQuery rightJoinProjeto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Projeto relation
 * @method     VersaoQuery innerJoinProjeto($relationAlias = null) Adds a INNER JOIN clause to the query using the Projeto relation
 *
 * @method     VersaoQuery leftJoinTbTipoVersao($relationAlias = null) Adds a LEFT JOIN clause to the query using the TbTipoVersao relation
 * @method     VersaoQuery rightJoinTbTipoVersao($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TbTipoVersao relation
 * @method     VersaoQuery innerJoinTbTipoVersao($relationAlias = null) Adds a INNER JOIN clause to the query using the TbTipoVersao relation
 *
 * @method     VersaoQuery leftJoinRlProjetoVersaoAmb($relationAlias = null) Adds a LEFT JOIN clause to the query using the RlProjetoVersaoAmb relation
 * @method     VersaoQuery rightJoinRlProjetoVersaoAmb($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RlProjetoVersaoAmb relation
 * @method     VersaoQuery innerJoinRlProjetoVersaoAmb($relationAlias = null) Adds a INNER JOIN clause to the query using the RlProjetoVersaoAmb relation
 *
 * @method     Versao findOne(PropelPDO $con = null) Return the first Versao matching the query
 * @method     Versao findOneOrCreate(PropelPDO $con = null) Return the first Versao matching the query, or a new Versao object populated from the query conditions when no match is found
 *
 * @method     Versao findOneByCoVersao(int $co_versao) Return the first Versao filtered by the co_versao column
 * @method     Versao findOneByCoProjeto(int $co_projeto) Return the first Versao filtered by the co_projeto column
 * @method     Versao findOneByDsVersao(string $ds_versao) Return the first Versao filtered by the ds_versao column
 * @method     Versao findOneByStVersao(boolean $st_versao) Return the first Versao filtered by the st_versao column
 * @method     Versao findOneByNoVersao(string $no_versao) Return the first Versao filtered by the no_versao column
 * @method     Versao findOneByCoSeqTipoVersao(int $co_seq_tipo_versao) Return the first Versao filtered by the co_seq_tipo_versao column
 * @method     Versao findOneByDtCadastroVersao(string $dt_cadastro_versao) Return the first Versao filtered by the dt_cadastro_versao column
 *
 * @method     array findByCoVersao(int $co_versao) Return Versao objects filtered by the co_versao column
 * @method     array findByCoProjeto(int $co_projeto) Return Versao objects filtered by the co_projeto column
 * @method     array findByDsVersao(string $ds_versao) Return Versao objects filtered by the ds_versao column
 * @method     array findByStVersao(boolean $st_versao) Return Versao objects filtered by the st_versao column
 * @method     array findByNoVersao(string $no_versao) Return Versao objects filtered by the no_versao column
 * @method     array findByCoSeqTipoVersao(int $co_seq_tipo_versao) Return Versao objects filtered by the co_seq_tipo_versao column
 * @method     array findByDtCadastroVersao(string $dt_cadastro_versao) Return Versao objects filtered by the dt_cadastro_versao column
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseVersaoQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseVersaoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tarefa', $modelName = 'Versao', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new VersaoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    VersaoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof VersaoQuery) {
            return $criteria;
        }
        $query = new VersaoQuery();
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
     * @return    Versao|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = VersaoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    VersaoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(VersaoPeer::CO_VERSAO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    VersaoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(VersaoPeer::CO_VERSAO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the co_versao column
     *
     * Example usage:
     * <code>
     * $query->filterByCoVersao(1234); // WHERE co_versao = 1234
     * $query->filterByCoVersao(array(12, 34)); // WHERE co_versao IN (12, 34)
     * $query->filterByCoVersao(array('min' => 12)); // WHERE co_versao > 12
     * </code>
     *
     * @param     mixed $coVersao The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    VersaoQuery The current query, for fluid interface
     */
    public function filterByCoVersao($coVersao = null, $comparison = null)
    {
        if (is_array($coVersao) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(VersaoPeer::CO_VERSAO, $coVersao, $comparison);
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
     * @return    VersaoQuery The current query, for fluid interface
     */
    public function filterByCoProjeto($coProjeto = null, $comparison = null)
    {
        if (is_array($coProjeto)) {
            $useMinMax = false;
            if (isset($coProjeto['min'])) {
                $this->addUsingAlias(VersaoPeer::CO_PROJETO, $coProjeto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coProjeto['max'])) {
                $this->addUsingAlias(VersaoPeer::CO_PROJETO, $coProjeto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(VersaoPeer::CO_PROJETO, $coProjeto, $comparison);
    }

    /**
     * Filter the query on the ds_versao column
     *
     * Example usage:
     * <code>
     * $query->filterByDsVersao('fooValue');   // WHERE ds_versao = 'fooValue'
     * $query->filterByDsVersao('%fooValue%'); // WHERE ds_versao LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dsVersao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    VersaoQuery The current query, for fluid interface
     */
    public function filterByDsVersao($dsVersao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dsVersao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dsVersao)) {
                $dsVersao = str_replace('*', '%', $dsVersao);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(VersaoPeer::DS_VERSAO, $dsVersao, $comparison);
    }

    /**
     * Filter the query on the st_versao column
     *
     * Example usage:
     * <code>
     * $query->filterByStVersao(true); // WHERE st_versao = true
     * $query->filterByStVersao('yes'); // WHERE st_versao = true
     * </code>
     *
     * @param     boolean|string $stVersao The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    VersaoQuery The current query, for fluid interface
     */
    public function filterByStVersao($stVersao = null, $comparison = null)
    {
        if (is_string($stVersao)) {
            $st_versao = in_array(strtolower($stVersao), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(VersaoPeer::ST_VERSAO, $stVersao, $comparison);
    }

    /**
     * Filter the query on the no_versao column
     *
     * Example usage:
     * <code>
     * $query->filterByNoVersao('fooValue');   // WHERE no_versao = 'fooValue'
     * $query->filterByNoVersao('%fooValue%'); // WHERE no_versao LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noVersao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    VersaoQuery The current query, for fluid interface
     */
    public function filterByNoVersao($noVersao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noVersao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noVersao)) {
                $noVersao = str_replace('*', '%', $noVersao);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(VersaoPeer::NO_VERSAO, $noVersao, $comparison);
    }

    /**
     * Filter the query on the co_seq_tipo_versao column
     *
     * Example usage:
     * <code>
     * $query->filterByCoSeqTipoVersao(1234); // WHERE co_seq_tipo_versao = 1234
     * $query->filterByCoSeqTipoVersao(array(12, 34)); // WHERE co_seq_tipo_versao IN (12, 34)
     * $query->filterByCoSeqTipoVersao(array('min' => 12)); // WHERE co_seq_tipo_versao > 12
     * </code>
     *
     * @see       filterByTbTipoVersao()
     *
     * @param     mixed $coSeqTipoVersao The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    VersaoQuery The current query, for fluid interface
     */
    public function filterByCoSeqTipoVersao($coSeqTipoVersao = null, $comparison = null)
    {
        if (is_array($coSeqTipoVersao)) {
            $useMinMax = false;
            if (isset($coSeqTipoVersao['min'])) {
                $this->addUsingAlias(VersaoPeer::CO_SEQ_TIPO_VERSAO, $coSeqTipoVersao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coSeqTipoVersao['max'])) {
                $this->addUsingAlias(VersaoPeer::CO_SEQ_TIPO_VERSAO, $coSeqTipoVersao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(VersaoPeer::CO_SEQ_TIPO_VERSAO, $coSeqTipoVersao, $comparison);
    }

    /**
     * Filter the query on the dt_cadastro_versao column
     *
     * Example usage:
     * <code>
     * $query->filterByDtCadastroVersao('2011-03-14'); // WHERE dt_cadastro_versao = '2011-03-14'
     * $query->filterByDtCadastroVersao('now'); // WHERE dt_cadastro_versao = '2011-03-14'
     * $query->filterByDtCadastroVersao(array('max' => 'yesterday')); // WHERE dt_cadastro_versao > '2011-03-13'
     * </code>
     *
     * @param     mixed $dtCadastroVersao The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    VersaoQuery The current query, for fluid interface
     */
    public function filterByDtCadastroVersao($dtCadastroVersao = null, $comparison = null)
    {
        if (is_array($dtCadastroVersao)) {
            $useMinMax = false;
            if (isset($dtCadastroVersao['min'])) {
                $this->addUsingAlias(VersaoPeer::DT_CADASTRO_VERSAO, $dtCadastroVersao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtCadastroVersao['max'])) {
                $this->addUsingAlias(VersaoPeer::DT_CADASTRO_VERSAO, $dtCadastroVersao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(VersaoPeer::DT_CADASTRO_VERSAO, $dtCadastroVersao, $comparison);
    }

    /**
     * Filter the query by a related Projeto object
     *
     * @param     Projeto|PropelCollection $projeto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    VersaoQuery The current query, for fluid interface
     */
    public function filterByProjeto($projeto, $comparison = null)
    {
        if ($projeto instanceof Projeto) {
            return $this
                ->addUsingAlias(VersaoPeer::CO_PROJETO, $projeto->getCoProjeto(), $comparison);
        } elseif ($projeto instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(VersaoPeer::CO_PROJETO, $projeto->toKeyValue('PrimaryKey', 'CoProjeto'), $comparison);
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
     * @return    VersaoQuery The current query, for fluid interface
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
     * Filter the query by a related TbTipoVersao object
     *
     * @param     TbTipoVersao|PropelCollection $tbTipoVersao The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    VersaoQuery The current query, for fluid interface
     */
    public function filterByTbTipoVersao($tbTipoVersao, $comparison = null)
    {
        if ($tbTipoVersao instanceof TbTipoVersao) {
            return $this
                ->addUsingAlias(VersaoPeer::CO_SEQ_TIPO_VERSAO, $tbTipoVersao->getCoSeqTipoVersao(), $comparison);
        } elseif ($tbTipoVersao instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(VersaoPeer::CO_SEQ_TIPO_VERSAO, $tbTipoVersao->toKeyValue('PrimaryKey', 'CoSeqTipoVersao'), $comparison);
        } else {
            throw new PropelException('filterByTbTipoVersao() only accepts arguments of type TbTipoVersao or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TbTipoVersao relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    VersaoQuery The current query, for fluid interface
     */
    public function joinTbTipoVersao($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TbTipoVersao');

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
            $this->addJoinObject($join, 'TbTipoVersao');
        }

        return $this;
    }

    /**
     * Use the TbTipoVersao relation TbTipoVersao object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    TbTipoVersaoQuery A secondary query class using the current class as primary query
     */
    public function useTbTipoVersaoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTbTipoVersao($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TbTipoVersao', 'TbTipoVersaoQuery');
    }

    /**
     * Filter the query by a related RlProjetoVersaoAmb object
     *
     * @param     RlProjetoVersaoAmb $rlProjetoVersaoAmb  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    VersaoQuery The current query, for fluid interface
     */
    public function filterByRlProjetoVersaoAmb($rlProjetoVersaoAmb, $comparison = null)
    {
        if ($rlProjetoVersaoAmb instanceof RlProjetoVersaoAmb) {
            return $this
                ->addUsingAlias(VersaoPeer::CO_VERSAO, $rlProjetoVersaoAmb->getCoVersao(), $comparison);
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
     * @return    VersaoQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param     Versao $versao Object to remove from the list of results
     *
     * @return    VersaoQuery The current query, for fluid interface
     */
    public function prune($versao = null)
    {
        if ($versao) {
            $this->addUsingAlias(VersaoPeer::CO_VERSAO, $versao->getCoVersao(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseVersaoQuery