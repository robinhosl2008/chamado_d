<?php


/**
 * Base class that represents a query for the 'rl_projeto_versao_amb' table.
 *
 * 
 *
 * @method     RlProjetoVersaoAmbQuery orderByCoSeqProjVerAmb($order = Criteria::ASC) Order by the co_seq_proj_ver_amb column
 * @method     RlProjetoVersaoAmbQuery orderByCoAmbiente($order = Criteria::ASC) Order by the co_ambiente column
 * @method     RlProjetoVersaoAmbQuery orderByCoVersao($order = Criteria::ASC) Order by the co_versao column
 * @method     RlProjetoVersaoAmbQuery orderByCoProjeto($order = Criteria::ASC) Order by the co_projeto column
 * @method     RlProjetoVersaoAmbQuery orderByDtInicioRl($order = Criteria::ASC) Order by the dt_inicio_rl column
 * @method     RlProjetoVersaoAmbQuery orderByDtFimRl($order = Criteria::ASC) Order by the dt_fim_rl column
 * @method     RlProjetoVersaoAmbQuery orderByStProjVerAmb($order = Criteria::ASC) Order by the st_proj_ver_amb column
 *
 * @method     RlProjetoVersaoAmbQuery groupByCoSeqProjVerAmb() Group by the co_seq_proj_ver_amb column
 * @method     RlProjetoVersaoAmbQuery groupByCoAmbiente() Group by the co_ambiente column
 * @method     RlProjetoVersaoAmbQuery groupByCoVersao() Group by the co_versao column
 * @method     RlProjetoVersaoAmbQuery groupByCoProjeto() Group by the co_projeto column
 * @method     RlProjetoVersaoAmbQuery groupByDtInicioRl() Group by the dt_inicio_rl column
 * @method     RlProjetoVersaoAmbQuery groupByDtFimRl() Group by the dt_fim_rl column
 * @method     RlProjetoVersaoAmbQuery groupByStProjVerAmb() Group by the st_proj_ver_amb column
 *
 * @method     RlProjetoVersaoAmbQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RlProjetoVersaoAmbQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RlProjetoVersaoAmbQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RlProjetoVersaoAmbQuery leftJoinAmbiente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ambiente relation
 * @method     RlProjetoVersaoAmbQuery rightJoinAmbiente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ambiente relation
 * @method     RlProjetoVersaoAmbQuery innerJoinAmbiente($relationAlias = null) Adds a INNER JOIN clause to the query using the Ambiente relation
 *
 * @method     RlProjetoVersaoAmbQuery leftJoinProjeto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Projeto relation
 * @method     RlProjetoVersaoAmbQuery rightJoinProjeto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Projeto relation
 * @method     RlProjetoVersaoAmbQuery innerJoinProjeto($relationAlias = null) Adds a INNER JOIN clause to the query using the Projeto relation
 *
 * @method     RlProjetoVersaoAmbQuery leftJoinVersao($relationAlias = null) Adds a LEFT JOIN clause to the query using the Versao relation
 * @method     RlProjetoVersaoAmbQuery rightJoinVersao($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Versao relation
 * @method     RlProjetoVersaoAmbQuery innerJoinVersao($relationAlias = null) Adds a INNER JOIN clause to the query using the Versao relation
 *
 * @method     RlProjetoVersaoAmbQuery leftJoinTarefa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tarefa relation
 * @method     RlProjetoVersaoAmbQuery rightJoinTarefa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tarefa relation
 * @method     RlProjetoVersaoAmbQuery innerJoinTarefa($relationAlias = null) Adds a INNER JOIN clause to the query using the Tarefa relation
 *
 * @method     RlProjetoVersaoAmb findOne(PropelPDO $con = null) Return the first RlProjetoVersaoAmb matching the query
 * @method     RlProjetoVersaoAmb findOneOrCreate(PropelPDO $con = null) Return the first RlProjetoVersaoAmb matching the query, or a new RlProjetoVersaoAmb object populated from the query conditions when no match is found
 *
 * @method     RlProjetoVersaoAmb findOneByCoSeqProjVerAmb(int $co_seq_proj_ver_amb) Return the first RlProjetoVersaoAmb filtered by the co_seq_proj_ver_amb column
 * @method     RlProjetoVersaoAmb findOneByCoAmbiente(int $co_ambiente) Return the first RlProjetoVersaoAmb filtered by the co_ambiente column
 * @method     RlProjetoVersaoAmb findOneByCoVersao(int $co_versao) Return the first RlProjetoVersaoAmb filtered by the co_versao column
 * @method     RlProjetoVersaoAmb findOneByCoProjeto(int $co_projeto) Return the first RlProjetoVersaoAmb filtered by the co_projeto column
 * @method     RlProjetoVersaoAmb findOneByDtInicioRl(string $dt_inicio_rl) Return the first RlProjetoVersaoAmb filtered by the dt_inicio_rl column
 * @method     RlProjetoVersaoAmb findOneByDtFimRl(string $dt_fim_rl) Return the first RlProjetoVersaoAmb filtered by the dt_fim_rl column
 * @method     RlProjetoVersaoAmb findOneByStProjVerAmb(boolean $st_proj_ver_amb) Return the first RlProjetoVersaoAmb filtered by the st_proj_ver_amb column
 *
 * @method     array findByCoSeqProjVerAmb(int $co_seq_proj_ver_amb) Return RlProjetoVersaoAmb objects filtered by the co_seq_proj_ver_amb column
 * @method     array findByCoAmbiente(int $co_ambiente) Return RlProjetoVersaoAmb objects filtered by the co_ambiente column
 * @method     array findByCoVersao(int $co_versao) Return RlProjetoVersaoAmb objects filtered by the co_versao column
 * @method     array findByCoProjeto(int $co_projeto) Return RlProjetoVersaoAmb objects filtered by the co_projeto column
 * @method     array findByDtInicioRl(string $dt_inicio_rl) Return RlProjetoVersaoAmb objects filtered by the dt_inicio_rl column
 * @method     array findByDtFimRl(string $dt_fim_rl) Return RlProjetoVersaoAmb objects filtered by the dt_fim_rl column
 * @method     array findByStProjVerAmb(boolean $st_proj_ver_amb) Return RlProjetoVersaoAmb objects filtered by the st_proj_ver_amb column
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseRlProjetoVersaoAmbQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseRlProjetoVersaoAmbQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tarefa', $modelName = 'RlProjetoVersaoAmb', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RlProjetoVersaoAmbQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    RlProjetoVersaoAmbQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RlProjetoVersaoAmbQuery) {
            return $criteria;
        }
        $query = new RlProjetoVersaoAmbQuery();
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
     * @return    RlProjetoVersaoAmb|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = RlProjetoVersaoAmbPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    RlProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(RlProjetoVersaoAmbPeer::CO_SEQ_PROJ_VER_AMB, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    RlProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(RlProjetoVersaoAmbPeer::CO_SEQ_PROJ_VER_AMB, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the co_seq_proj_ver_amb column
     *
     * Example usage:
     * <code>
     * $query->filterByCoSeqProjVerAmb(1234); // WHERE co_seq_proj_ver_amb = 1234
     * $query->filterByCoSeqProjVerAmb(array(12, 34)); // WHERE co_seq_proj_ver_amb IN (12, 34)
     * $query->filterByCoSeqProjVerAmb(array('min' => 12)); // WHERE co_seq_proj_ver_amb > 12
     * </code>
     *
     * @param     mixed $coSeqProjVerAmb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RlProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByCoSeqProjVerAmb($coSeqProjVerAmb = null, $comparison = null)
    {
        if (is_array($coSeqProjVerAmb) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(RlProjetoVersaoAmbPeer::CO_SEQ_PROJ_VER_AMB, $coSeqProjVerAmb, $comparison);
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
     * @return    RlProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByCoAmbiente($coAmbiente = null, $comparison = null)
    {
        if (is_array($coAmbiente)) {
            $useMinMax = false;
            if (isset($coAmbiente['min'])) {
                $this->addUsingAlias(RlProjetoVersaoAmbPeer::CO_AMBIENTE, $coAmbiente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coAmbiente['max'])) {
                $this->addUsingAlias(RlProjetoVersaoAmbPeer::CO_AMBIENTE, $coAmbiente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(RlProjetoVersaoAmbPeer::CO_AMBIENTE, $coAmbiente, $comparison);
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
     * @see       filterByVersao()
     *
     * @param     mixed $coVersao The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RlProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByCoVersao($coVersao = null, $comparison = null)
    {
        if (is_array($coVersao)) {
            $useMinMax = false;
            if (isset($coVersao['min'])) {
                $this->addUsingAlias(RlProjetoVersaoAmbPeer::CO_VERSAO, $coVersao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coVersao['max'])) {
                $this->addUsingAlias(RlProjetoVersaoAmbPeer::CO_VERSAO, $coVersao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(RlProjetoVersaoAmbPeer::CO_VERSAO, $coVersao, $comparison);
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
     * @return    RlProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByCoProjeto($coProjeto = null, $comparison = null)
    {
        if (is_array($coProjeto)) {
            $useMinMax = false;
            if (isset($coProjeto['min'])) {
                $this->addUsingAlias(RlProjetoVersaoAmbPeer::CO_PROJETO, $coProjeto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coProjeto['max'])) {
                $this->addUsingAlias(RlProjetoVersaoAmbPeer::CO_PROJETO, $coProjeto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(RlProjetoVersaoAmbPeer::CO_PROJETO, $coProjeto, $comparison);
    }

    /**
     * Filter the query on the dt_inicio_rl column
     *
     * Example usage:
     * <code>
     * $query->filterByDtInicioRl('2011-03-14'); // WHERE dt_inicio_rl = '2011-03-14'
     * $query->filterByDtInicioRl('now'); // WHERE dt_inicio_rl = '2011-03-14'
     * $query->filterByDtInicioRl(array('max' => 'yesterday')); // WHERE dt_inicio_rl > '2011-03-13'
     * </code>
     *
     * @param     mixed $dtInicioRl The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RlProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByDtInicioRl($dtInicioRl = null, $comparison = null)
    {
        if (is_array($dtInicioRl)) {
            $useMinMax = false;
            if (isset($dtInicioRl['min'])) {
                $this->addUsingAlias(RlProjetoVersaoAmbPeer::DT_INICIO_RL, $dtInicioRl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtInicioRl['max'])) {
                $this->addUsingAlias(RlProjetoVersaoAmbPeer::DT_INICIO_RL, $dtInicioRl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(RlProjetoVersaoAmbPeer::DT_INICIO_RL, $dtInicioRl, $comparison);
    }

    /**
     * Filter the query on the dt_fim_rl column
     *
     * Example usage:
     * <code>
     * $query->filterByDtFimRl('2011-03-14'); // WHERE dt_fim_rl = '2011-03-14'
     * $query->filterByDtFimRl('now'); // WHERE dt_fim_rl = '2011-03-14'
     * $query->filterByDtFimRl(array('max' => 'yesterday')); // WHERE dt_fim_rl > '2011-03-13'
     * </code>
     *
     * @param     mixed $dtFimRl The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RlProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByDtFimRl($dtFimRl = null, $comparison = null)
    {
        if (is_array($dtFimRl)) {
            $useMinMax = false;
            if (isset($dtFimRl['min'])) {
                $this->addUsingAlias(RlProjetoVersaoAmbPeer::DT_FIM_RL, $dtFimRl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtFimRl['max'])) {
                $this->addUsingAlias(RlProjetoVersaoAmbPeer::DT_FIM_RL, $dtFimRl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(RlProjetoVersaoAmbPeer::DT_FIM_RL, $dtFimRl, $comparison);
    }

    /**
     * Filter the query on the st_proj_ver_amb column
     *
     * Example usage:
     * <code>
     * $query->filterByStProjVerAmb(true); // WHERE st_proj_ver_amb = true
     * $query->filterByStProjVerAmb('yes'); // WHERE st_proj_ver_amb = true
     * </code>
     *
     * @param     boolean|string $stProjVerAmb The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RlProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByStProjVerAmb($stProjVerAmb = null, $comparison = null)
    {
        if (is_string($stProjVerAmb)) {
            $st_proj_ver_amb = in_array(strtolower($stProjVerAmb), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(RlProjetoVersaoAmbPeer::ST_PROJ_VER_AMB, $stProjVerAmb, $comparison);
    }

    /**
     * Filter the query by a related Ambiente object
     *
     * @param     Ambiente|PropelCollection $ambiente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RlProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByAmbiente($ambiente, $comparison = null)
    {
        if ($ambiente instanceof Ambiente) {
            return $this
                ->addUsingAlias(RlProjetoVersaoAmbPeer::CO_AMBIENTE, $ambiente->getCoAmbiente(), $comparison);
        } elseif ($ambiente instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(RlProjetoVersaoAmbPeer::CO_AMBIENTE, $ambiente->toKeyValue('PrimaryKey', 'CoAmbiente'), $comparison);
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
     * @return    RlProjetoVersaoAmbQuery The current query, for fluid interface
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
     * @return    RlProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByProjeto($projeto, $comparison = null)
    {
        if ($projeto instanceof Projeto) {
            return $this
                ->addUsingAlias(RlProjetoVersaoAmbPeer::CO_PROJETO, $projeto->getCoProjeto(), $comparison);
        } elseif ($projeto instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(RlProjetoVersaoAmbPeer::CO_PROJETO, $projeto->toKeyValue('PrimaryKey', 'CoProjeto'), $comparison);
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
     * @return    RlProjetoVersaoAmbQuery The current query, for fluid interface
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
     * Filter the query by a related Versao object
     *
     * @param     Versao|PropelCollection $versao The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RlProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByVersao($versao, $comparison = null)
    {
        if ($versao instanceof Versao) {
            return $this
                ->addUsingAlias(RlProjetoVersaoAmbPeer::CO_VERSAO, $versao->getCoVersao(), $comparison);
        } elseif ($versao instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(RlProjetoVersaoAmbPeer::CO_VERSAO, $versao->toKeyValue('PrimaryKey', 'CoVersao'), $comparison);
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
     * @return    RlProjetoVersaoAmbQuery The current query, for fluid interface
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
     * Filter the query by a related Tarefa object
     *
     * @param     Tarefa $tarefa  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RlProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByTarefa($tarefa, $comparison = null)
    {
        if ($tarefa instanceof Tarefa) {
            return $this
                ->addUsingAlias(RlProjetoVersaoAmbPeer::CO_SEQ_PROJ_VER_AMB, $tarefa->getCoSeqProjVerAmb(), $comparison);
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
     * @return    RlProjetoVersaoAmbQuery The current query, for fluid interface
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
     * @param     RlProjetoVersaoAmb $rlProjetoVersaoAmb Object to remove from the list of results
     *
     * @return    RlProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function prune($rlProjetoVersaoAmb = null)
    {
        if ($rlProjetoVersaoAmb) {
            $this->addUsingAlias(RlProjetoVersaoAmbPeer::CO_SEQ_PROJ_VER_AMB, $rlProjetoVersaoAmb->getCoSeqProjVerAmb(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseRlProjetoVersaoAmbQuery