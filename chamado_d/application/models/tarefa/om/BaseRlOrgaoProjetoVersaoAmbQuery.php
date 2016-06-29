<?php


/**
 * Base class that represents a query for the 'rl_orgao_projeto_versao_amb' table.
 *
 * 
 *
 * @method     RlOrgaoProjetoVersaoAmbQuery orderByCoSeqRlOrgaoProjVerAmb($order = Criteria::ASC) Order by the co_seq_rl_orgao_proj_ver_amb column
 * @method     RlOrgaoProjetoVersaoAmbQuery orderByCoAmbiente($order = Criteria::ASC) Order by the co_ambiente column
 * @method     RlOrgaoProjetoVersaoAmbQuery orderByCoVersao($order = Criteria::ASC) Order by the co_versao column
 * @method     RlOrgaoProjetoVersaoAmbQuery orderByCoProjeto($order = Criteria::ASC) Order by the co_projeto column
 * @method     RlOrgaoProjetoVersaoAmbQuery orderByCoSeqUsuarioOrgao($order = Criteria::ASC) Order by the co_seq_usuario_orgao column
 * @method     RlOrgaoProjetoVersaoAmbQuery orderByDtInicioRl($order = Criteria::ASC) Order by the dt_inicio_rl column
 * @method     RlOrgaoProjetoVersaoAmbQuery orderByDtFimRl($order = Criteria::ASC) Order by the dt_fim_rl column
 * @method     RlOrgaoProjetoVersaoAmbQuery orderByStRlOrgaoProjVerAmb($order = Criteria::ASC) Order by the st_rl_orgao_proj_ver_amb column
 *
 * @method     RlOrgaoProjetoVersaoAmbQuery groupByCoSeqRlOrgaoProjVerAmb() Group by the co_seq_rl_orgao_proj_ver_amb column
 * @method     RlOrgaoProjetoVersaoAmbQuery groupByCoAmbiente() Group by the co_ambiente column
 * @method     RlOrgaoProjetoVersaoAmbQuery groupByCoVersao() Group by the co_versao column
 * @method     RlOrgaoProjetoVersaoAmbQuery groupByCoProjeto() Group by the co_projeto column
 * @method     RlOrgaoProjetoVersaoAmbQuery groupByCoSeqUsuarioOrgao() Group by the co_seq_usuario_orgao column
 * @method     RlOrgaoProjetoVersaoAmbQuery groupByDtInicioRl() Group by the dt_inicio_rl column
 * @method     RlOrgaoProjetoVersaoAmbQuery groupByDtFimRl() Group by the dt_fim_rl column
 * @method     RlOrgaoProjetoVersaoAmbQuery groupByStRlOrgaoProjVerAmb() Group by the st_rl_orgao_proj_ver_amb column
 *
 * @method     RlOrgaoProjetoVersaoAmbQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RlOrgaoProjetoVersaoAmbQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RlOrgaoProjetoVersaoAmbQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RlOrgaoProjetoVersaoAmbQuery leftJoinAmbiente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ambiente relation
 * @method     RlOrgaoProjetoVersaoAmbQuery rightJoinAmbiente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ambiente relation
 * @method     RlOrgaoProjetoVersaoAmbQuery innerJoinAmbiente($relationAlias = null) Adds a INNER JOIN clause to the query using the Ambiente relation
 *
 * @method     RlOrgaoProjetoVersaoAmbQuery leftJoinProjeto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Projeto relation
 * @method     RlOrgaoProjetoVersaoAmbQuery rightJoinProjeto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Projeto relation
 * @method     RlOrgaoProjetoVersaoAmbQuery innerJoinProjeto($relationAlias = null) Adds a INNER JOIN clause to the query using the Projeto relation
 *
 * @method     RlOrgaoProjetoVersaoAmbQuery leftJoinRlUsuarioOrgao($relationAlias = null) Adds a LEFT JOIN clause to the query using the RlUsuarioOrgao relation
 * @method     RlOrgaoProjetoVersaoAmbQuery rightJoinRlUsuarioOrgao($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RlUsuarioOrgao relation
 * @method     RlOrgaoProjetoVersaoAmbQuery innerJoinRlUsuarioOrgao($relationAlias = null) Adds a INNER JOIN clause to the query using the RlUsuarioOrgao relation
 *
 * @method     RlOrgaoProjetoVersaoAmbQuery leftJoinVersao($relationAlias = null) Adds a LEFT JOIN clause to the query using the Versao relation
 * @method     RlOrgaoProjetoVersaoAmbQuery rightJoinVersao($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Versao relation
 * @method     RlOrgaoProjetoVersaoAmbQuery innerJoinVersao($relationAlias = null) Adds a INNER JOIN clause to the query using the Versao relation
 *
 * @method     RlOrgaoProjetoVersaoAmbQuery leftJoinTarefa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tarefa relation
 * @method     RlOrgaoProjetoVersaoAmbQuery rightJoinTarefa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tarefa relation
 * @method     RlOrgaoProjetoVersaoAmbQuery innerJoinTarefa($relationAlias = null) Adds a INNER JOIN clause to the query using the Tarefa relation
 *
 * @method     RlOrgaoProjetoVersaoAmb findOne(PropelPDO $con = null) Return the first RlOrgaoProjetoVersaoAmb matching the query
 * @method     RlOrgaoProjetoVersaoAmb findOneOrCreate(PropelPDO $con = null) Return the first RlOrgaoProjetoVersaoAmb matching the query, or a new RlOrgaoProjetoVersaoAmb object populated from the query conditions when no match is found
 *
 * @method     RlOrgaoProjetoVersaoAmb findOneByCoSeqRlOrgaoProjVerAmb(int $co_seq_rl_orgao_proj_ver_amb) Return the first RlOrgaoProjetoVersaoAmb filtered by the co_seq_rl_orgao_proj_ver_amb column
 * @method     RlOrgaoProjetoVersaoAmb findOneByCoAmbiente(int $co_ambiente) Return the first RlOrgaoProjetoVersaoAmb filtered by the co_ambiente column
 * @method     RlOrgaoProjetoVersaoAmb findOneByCoVersao(int $co_versao) Return the first RlOrgaoProjetoVersaoAmb filtered by the co_versao column
 * @method     RlOrgaoProjetoVersaoAmb findOneByCoProjeto(int $co_projeto) Return the first RlOrgaoProjetoVersaoAmb filtered by the co_projeto column
 * @method     RlOrgaoProjetoVersaoAmb findOneByCoSeqUsuarioOrgao(int $co_seq_usuario_orgao) Return the first RlOrgaoProjetoVersaoAmb filtered by the co_seq_usuario_orgao column
 * @method     RlOrgaoProjetoVersaoAmb findOneByDtInicioRl(string $dt_inicio_rl) Return the first RlOrgaoProjetoVersaoAmb filtered by the dt_inicio_rl column
 * @method     RlOrgaoProjetoVersaoAmb findOneByDtFimRl(string $dt_fim_rl) Return the first RlOrgaoProjetoVersaoAmb filtered by the dt_fim_rl column
 * @method     RlOrgaoProjetoVersaoAmb findOneByStRlOrgaoProjVerAmb(boolean $st_rl_orgao_proj_ver_amb) Return the first RlOrgaoProjetoVersaoAmb filtered by the st_rl_orgao_proj_ver_amb column
 *
 * @method     array findByCoSeqRlOrgaoProjVerAmb(int $co_seq_rl_orgao_proj_ver_amb) Return RlOrgaoProjetoVersaoAmb objects filtered by the co_seq_rl_orgao_proj_ver_amb column
 * @method     array findByCoAmbiente(int $co_ambiente) Return RlOrgaoProjetoVersaoAmb objects filtered by the co_ambiente column
 * @method     array findByCoVersao(int $co_versao) Return RlOrgaoProjetoVersaoAmb objects filtered by the co_versao column
 * @method     array findByCoProjeto(int $co_projeto) Return RlOrgaoProjetoVersaoAmb objects filtered by the co_projeto column
 * @method     array findByCoSeqUsuarioOrgao(int $co_seq_usuario_orgao) Return RlOrgaoProjetoVersaoAmb objects filtered by the co_seq_usuario_orgao column
 * @method     array findByDtInicioRl(string $dt_inicio_rl) Return RlOrgaoProjetoVersaoAmb objects filtered by the dt_inicio_rl column
 * @method     array findByDtFimRl(string $dt_fim_rl) Return RlOrgaoProjetoVersaoAmb objects filtered by the dt_fim_rl column
 * @method     array findByStRlOrgaoProjVerAmb(boolean $st_rl_orgao_proj_ver_amb) Return RlOrgaoProjetoVersaoAmb objects filtered by the st_rl_orgao_proj_ver_amb column
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseRlOrgaoProjetoVersaoAmbQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseRlOrgaoProjetoVersaoAmbQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tarefa', $modelName = 'RlOrgaoProjetoVersaoAmb', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RlOrgaoProjetoVersaoAmbQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    RlOrgaoProjetoVersaoAmbQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RlOrgaoProjetoVersaoAmbQuery) {
            return $criteria;
        }
        $query = new RlOrgaoProjetoVersaoAmbQuery();
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
     * @return    RlOrgaoProjetoVersaoAmb|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = RlOrgaoProjetoVersaoAmbPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    RlOrgaoProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_RL_ORGAO_PROJ_VER_AMB, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    RlOrgaoProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_RL_ORGAO_PROJ_VER_AMB, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the co_seq_rl_orgao_proj_ver_amb column
     *
     * Example usage:
     * <code>
     * $query->filterByCoSeqRlOrgaoProjVerAmb(1234); // WHERE co_seq_rl_orgao_proj_ver_amb = 1234
     * $query->filterByCoSeqRlOrgaoProjVerAmb(array(12, 34)); // WHERE co_seq_rl_orgao_proj_ver_amb IN (12, 34)
     * $query->filterByCoSeqRlOrgaoProjVerAmb(array('min' => 12)); // WHERE co_seq_rl_orgao_proj_ver_amb > 12
     * </code>
     *
     * @param     mixed $coSeqRlOrgaoProjVerAmb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RlOrgaoProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByCoSeqRlOrgaoProjVerAmb($coSeqRlOrgaoProjVerAmb = null, $comparison = null)
    {
        if (is_array($coSeqRlOrgaoProjVerAmb) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_RL_ORGAO_PROJ_VER_AMB, $coSeqRlOrgaoProjVerAmb, $comparison);
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
     * @return    RlOrgaoProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByCoAmbiente($coAmbiente = null, $comparison = null)
    {
        if (is_array($coAmbiente)) {
            $useMinMax = false;
            if (isset($coAmbiente['min'])) {
                $this->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::CO_AMBIENTE, $coAmbiente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coAmbiente['max'])) {
                $this->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::CO_AMBIENTE, $coAmbiente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::CO_AMBIENTE, $coAmbiente, $comparison);
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
     * @return    RlOrgaoProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByCoVersao($coVersao = null, $comparison = null)
    {
        if (is_array($coVersao)) {
            $useMinMax = false;
            if (isset($coVersao['min'])) {
                $this->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::CO_VERSAO, $coVersao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coVersao['max'])) {
                $this->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::CO_VERSAO, $coVersao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::CO_VERSAO, $coVersao, $comparison);
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
     * @return    RlOrgaoProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByCoProjeto($coProjeto = null, $comparison = null)
    {
        if (is_array($coProjeto)) {
            $useMinMax = false;
            if (isset($coProjeto['min'])) {
                $this->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::CO_PROJETO, $coProjeto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coProjeto['max'])) {
                $this->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::CO_PROJETO, $coProjeto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::CO_PROJETO, $coProjeto, $comparison);
    }

    /**
     * Filter the query on the co_seq_usuario_orgao column
     *
     * Example usage:
     * <code>
     * $query->filterByCoSeqUsuarioOrgao(1234); // WHERE co_seq_usuario_orgao = 1234
     * $query->filterByCoSeqUsuarioOrgao(array(12, 34)); // WHERE co_seq_usuario_orgao IN (12, 34)
     * $query->filterByCoSeqUsuarioOrgao(array('min' => 12)); // WHERE co_seq_usuario_orgao > 12
     * </code>
     *
     * @see       filterByRlUsuarioOrgao()
     *
     * @param     mixed $coSeqUsuarioOrgao The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RlOrgaoProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByCoSeqUsuarioOrgao($coSeqUsuarioOrgao = null, $comparison = null)
    {
        if (is_array($coSeqUsuarioOrgao)) {
            $useMinMax = false;
            if (isset($coSeqUsuarioOrgao['min'])) {
                $this->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_USUARIO_ORGAO, $coSeqUsuarioOrgao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coSeqUsuarioOrgao['max'])) {
                $this->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_USUARIO_ORGAO, $coSeqUsuarioOrgao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_USUARIO_ORGAO, $coSeqUsuarioOrgao, $comparison);
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
     * @return    RlOrgaoProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByDtInicioRl($dtInicioRl = null, $comparison = null)
    {
        if (is_array($dtInicioRl)) {
            $useMinMax = false;
            if (isset($dtInicioRl['min'])) {
                $this->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::DT_INICIO_RL, $dtInicioRl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtInicioRl['max'])) {
                $this->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::DT_INICIO_RL, $dtInicioRl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::DT_INICIO_RL, $dtInicioRl, $comparison);
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
     * @return    RlOrgaoProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByDtFimRl($dtFimRl = null, $comparison = null)
    {
        if (is_array($dtFimRl)) {
            $useMinMax = false;
            if (isset($dtFimRl['min'])) {
                $this->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::DT_FIM_RL, $dtFimRl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtFimRl['max'])) {
                $this->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::DT_FIM_RL, $dtFimRl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::DT_FIM_RL, $dtFimRl, $comparison);
    }

    /**
     * Filter the query on the st_rl_orgao_proj_ver_amb column
     *
     * Example usage:
     * <code>
     * $query->filterByStRlOrgaoProjVerAmb(true); // WHERE st_rl_orgao_proj_ver_amb = true
     * $query->filterByStRlOrgaoProjVerAmb('yes'); // WHERE st_rl_orgao_proj_ver_amb = true
     * </code>
     *
     * @param     boolean|string $stRlOrgaoProjVerAmb The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RlOrgaoProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByStRlOrgaoProjVerAmb($stRlOrgaoProjVerAmb = null, $comparison = null)
    {
        if (is_string($stRlOrgaoProjVerAmb)) {
            $st_rl_orgao_proj_ver_amb = in_array(strtolower($stRlOrgaoProjVerAmb), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::ST_RL_ORGAO_PROJ_VER_AMB, $stRlOrgaoProjVerAmb, $comparison);
    }

    /**
     * Filter the query by a related Ambiente object
     *
     * @param     Ambiente|PropelCollection $ambiente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RlOrgaoProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByAmbiente($ambiente, $comparison = null)
    {
        if ($ambiente instanceof Ambiente) {
            return $this
                ->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::CO_AMBIENTE, $ambiente->getCoAmbiente(), $comparison);
        } elseif ($ambiente instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::CO_AMBIENTE, $ambiente->toKeyValue('PrimaryKey', 'CoAmbiente'), $comparison);
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
     * @return    RlOrgaoProjetoVersaoAmbQuery The current query, for fluid interface
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
     * @return    RlOrgaoProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByProjeto($projeto, $comparison = null)
    {
        if ($projeto instanceof Projeto) {
            return $this
                ->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::CO_PROJETO, $projeto->getCoProjeto(), $comparison);
        } elseif ($projeto instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::CO_PROJETO, $projeto->toKeyValue('PrimaryKey', 'CoProjeto'), $comparison);
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
     * @return    RlOrgaoProjetoVersaoAmbQuery The current query, for fluid interface
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
     * Filter the query by a related RlUsuarioOrgao object
     *
     * @param     RlUsuarioOrgao|PropelCollection $rlUsuarioOrgao The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RlOrgaoProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByRlUsuarioOrgao($rlUsuarioOrgao, $comparison = null)
    {
        if ($rlUsuarioOrgao instanceof RlUsuarioOrgao) {
            return $this
                ->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_USUARIO_ORGAO, $rlUsuarioOrgao->getCoSeqUsuarioOrgao(), $comparison);
        } elseif ($rlUsuarioOrgao instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_USUARIO_ORGAO, $rlUsuarioOrgao->toKeyValue('PrimaryKey', 'CoSeqUsuarioOrgao'), $comparison);
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
     * @return    RlOrgaoProjetoVersaoAmbQuery The current query, for fluid interface
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
     * Filter the query by a related Versao object
     *
     * @param     Versao|PropelCollection $versao The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RlOrgaoProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByVersao($versao, $comparison = null)
    {
        if ($versao instanceof Versao) {
            return $this
                ->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::CO_VERSAO, $versao->getCoVersao(), $comparison);
        } elseif ($versao instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::CO_VERSAO, $versao->toKeyValue('PrimaryKey', 'CoVersao'), $comparison);
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
     * @return    RlOrgaoProjetoVersaoAmbQuery The current query, for fluid interface
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
     * @return    RlOrgaoProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function filterByTarefa($tarefa, $comparison = null)
    {
        if ($tarefa instanceof Tarefa) {
            return $this
                ->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_RL_ORGAO_PROJ_VER_AMB, $tarefa->getCoSeqRlOrgaoProjVerAmb(), $comparison);
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
     * @return    RlOrgaoProjetoVersaoAmbQuery The current query, for fluid interface
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
     * @param     RlOrgaoProjetoVersaoAmb $rlOrgaoProjetoVersaoAmb Object to remove from the list of results
     *
     * @return    RlOrgaoProjetoVersaoAmbQuery The current query, for fluid interface
     */
    public function prune($rlOrgaoProjetoVersaoAmb = null)
    {
        if ($rlOrgaoProjetoVersaoAmb) {
            $this->addUsingAlias(RlOrgaoProjetoVersaoAmbPeer::CO_SEQ_RL_ORGAO_PROJ_VER_AMB, $rlOrgaoProjetoVersaoAmb->getCoSeqRlOrgaoProjVerAmb(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseRlOrgaoProjetoVersaoAmbQuery