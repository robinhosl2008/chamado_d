<?php


/**
 * Base class that represents a query for the 'ht_tarefa' table.
 *
 * 
 *
 * @method     HtTarefaQuery orderByCoSeqHtTarefa($order = Criteria::ASC) Order by the co_seq_ht_tarefa column
 * @method     HtTarefaQuery orderByCoTarefa($order = Criteria::ASC) Order by the co_tarefa column
 * @method     HtTarefaQuery orderByCoCategoria($order = Criteria::ASC) Order by the co_categoria column
 * @method     HtTarefaQuery orderByCoStatus($order = Criteria::ASC) Order by the co_status column
 * @method     HtTarefaQuery orderByCoPrioridade($order = Criteria::ASC) Order by the co_prioridade column
 * @method     HtTarefaQuery orderByCoUsuarioFechamento($order = Criteria::ASC) Order by the co_usuario_fechamento column
 * @method     HtTarefaQuery orderByCoNivel($order = Criteria::ASC) Order by the co_nivel column
 * @method     HtTarefaQuery orderByCoSeqProjVerAmb($order = Criteria::ASC) Order by the co_seq_proj_ver_amb column
 * @method     HtTarefaQuery orderByCoUsuarioAberto($order = Criteria::ASC) Order by the co_usuario_aberto column
 * @method     HtTarefaQuery orderByCoUsuarioAtualizacao($order = Criteria::ASC) Order by the co_usuario_atualizacao column
 * @method     HtTarefaQuery orderByDtInicio($order = Criteria::ASC) Order by the dt_inicio column
 * @method     HtTarefaQuery orderByDtPrevisao($order = Criteria::ASC) Order by the dt_previsao column
 * @method     HtTarefaQuery orderByDtFim($order = Criteria::ASC) Order by the dt_fim column
 * @method     HtTarefaQuery orderByDtAtualizacao($order = Criteria::ASC) Order by the dt_atualizacao column
 * @method     HtTarefaQuery orderByNoResumo($order = Criteria::ASC) Order by the no_resumo column
 * @method     HtTarefaQuery orderByCoOrgao($order = Criteria::ASC) Order by the co_orgao column
 * @method     HtTarefaQuery orderByEmailAdicionais($order = Criteria::ASC) Order by the email_adicionais column
 * @method     HtTarefaQuery orderByCoSeqModuloProj($order = Criteria::ASC) Order by the co_seq_modulo_proj column
 * @method     HtTarefaQuery orderByNrTarefa($order = Criteria::ASC) Order by the nr_tarefa column
 *
 * @method     HtTarefaQuery groupByCoSeqHtTarefa() Group by the co_seq_ht_tarefa column
 * @method     HtTarefaQuery groupByCoTarefa() Group by the co_tarefa column
 * @method     HtTarefaQuery groupByCoCategoria() Group by the co_categoria column
 * @method     HtTarefaQuery groupByCoStatus() Group by the co_status column
 * @method     HtTarefaQuery groupByCoPrioridade() Group by the co_prioridade column
 * @method     HtTarefaQuery groupByCoUsuarioFechamento() Group by the co_usuario_fechamento column
 * @method     HtTarefaQuery groupByCoNivel() Group by the co_nivel column
 * @method     HtTarefaQuery groupByCoSeqProjVerAmb() Group by the co_seq_proj_ver_amb column
 * @method     HtTarefaQuery groupByCoUsuarioAberto() Group by the co_usuario_aberto column
 * @method     HtTarefaQuery groupByCoUsuarioAtualizacao() Group by the co_usuario_atualizacao column
 * @method     HtTarefaQuery groupByDtInicio() Group by the dt_inicio column
 * @method     HtTarefaQuery groupByDtPrevisao() Group by the dt_previsao column
 * @method     HtTarefaQuery groupByDtFim() Group by the dt_fim column
 * @method     HtTarefaQuery groupByDtAtualizacao() Group by the dt_atualizacao column
 * @method     HtTarefaQuery groupByNoResumo() Group by the no_resumo column
 * @method     HtTarefaQuery groupByCoOrgao() Group by the co_orgao column
 * @method     HtTarefaQuery groupByEmailAdicionais() Group by the email_adicionais column
 * @method     HtTarefaQuery groupByCoSeqModuloProj() Group by the co_seq_modulo_proj column
 * @method     HtTarefaQuery groupByNrTarefa() Group by the nr_tarefa column
 *
 * @method     HtTarefaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     HtTarefaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     HtTarefaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     HtTarefa findOne(PropelPDO $con = null) Return the first HtTarefa matching the query
 * @method     HtTarefa findOneOrCreate(PropelPDO $con = null) Return the first HtTarefa matching the query, or a new HtTarefa object populated from the query conditions when no match is found
 *
 * @method     HtTarefa findOneByCoSeqHtTarefa(int $co_seq_ht_tarefa) Return the first HtTarefa filtered by the co_seq_ht_tarefa column
 * @method     HtTarefa findOneByCoTarefa(int $co_tarefa) Return the first HtTarefa filtered by the co_tarefa column
 * @method     HtTarefa findOneByCoCategoria(int $co_categoria) Return the first HtTarefa filtered by the co_categoria column
 * @method     HtTarefa findOneByCoStatus(int $co_status) Return the first HtTarefa filtered by the co_status column
 * @method     HtTarefa findOneByCoPrioridade(int $co_prioridade) Return the first HtTarefa filtered by the co_prioridade column
 * @method     HtTarefa findOneByCoUsuarioFechamento(int $co_usuario_fechamento) Return the first HtTarefa filtered by the co_usuario_fechamento column
 * @method     HtTarefa findOneByCoNivel(int $co_nivel) Return the first HtTarefa filtered by the co_nivel column
 * @method     HtTarefa findOneByCoSeqProjVerAmb(int $co_seq_proj_ver_amb) Return the first HtTarefa filtered by the co_seq_proj_ver_amb column
 * @method     HtTarefa findOneByCoUsuarioAberto(int $co_usuario_aberto) Return the first HtTarefa filtered by the co_usuario_aberto column
 * @method     HtTarefa findOneByCoUsuarioAtualizacao(int $co_usuario_atualizacao) Return the first HtTarefa filtered by the co_usuario_atualizacao column
 * @method     HtTarefa findOneByDtInicio(string $dt_inicio) Return the first HtTarefa filtered by the dt_inicio column
 * @method     HtTarefa findOneByDtPrevisao(string $dt_previsao) Return the first HtTarefa filtered by the dt_previsao column
 * @method     HtTarefa findOneByDtFim(string $dt_fim) Return the first HtTarefa filtered by the dt_fim column
 * @method     HtTarefa findOneByDtAtualizacao(string $dt_atualizacao) Return the first HtTarefa filtered by the dt_atualizacao column
 * @method     HtTarefa findOneByNoResumo(string $no_resumo) Return the first HtTarefa filtered by the no_resumo column
 * @method     HtTarefa findOneByCoOrgao(int $co_orgao) Return the first HtTarefa filtered by the co_orgao column
 * @method     HtTarefa findOneByEmailAdicionais(string $email_adicionais) Return the first HtTarefa filtered by the email_adicionais column
 * @method     HtTarefa findOneByCoSeqModuloProj(int $co_seq_modulo_proj) Return the first HtTarefa filtered by the co_seq_modulo_proj column
 * @method     HtTarefa findOneByNrTarefa(int $nr_tarefa) Return the first HtTarefa filtered by the nr_tarefa column
 *
 * @method     array findByCoSeqHtTarefa(int $co_seq_ht_tarefa) Return HtTarefa objects filtered by the co_seq_ht_tarefa column
 * @method     array findByCoTarefa(int $co_tarefa) Return HtTarefa objects filtered by the co_tarefa column
 * @method     array findByCoCategoria(int $co_categoria) Return HtTarefa objects filtered by the co_categoria column
 * @method     array findByCoStatus(int $co_status) Return HtTarefa objects filtered by the co_status column
 * @method     array findByCoPrioridade(int $co_prioridade) Return HtTarefa objects filtered by the co_prioridade column
 * @method     array findByCoUsuarioFechamento(int $co_usuario_fechamento) Return HtTarefa objects filtered by the co_usuario_fechamento column
 * @method     array findByCoNivel(int $co_nivel) Return HtTarefa objects filtered by the co_nivel column
 * @method     array findByCoSeqProjVerAmb(int $co_seq_proj_ver_amb) Return HtTarefa objects filtered by the co_seq_proj_ver_amb column
 * @method     array findByCoUsuarioAberto(int $co_usuario_aberto) Return HtTarefa objects filtered by the co_usuario_aberto column
 * @method     array findByCoUsuarioAtualizacao(int $co_usuario_atualizacao) Return HtTarefa objects filtered by the co_usuario_atualizacao column
 * @method     array findByDtInicio(string $dt_inicio) Return HtTarefa objects filtered by the dt_inicio column
 * @method     array findByDtPrevisao(string $dt_previsao) Return HtTarefa objects filtered by the dt_previsao column
 * @method     array findByDtFim(string $dt_fim) Return HtTarefa objects filtered by the dt_fim column
 * @method     array findByDtAtualizacao(string $dt_atualizacao) Return HtTarefa objects filtered by the dt_atualizacao column
 * @method     array findByNoResumo(string $no_resumo) Return HtTarefa objects filtered by the no_resumo column
 * @method     array findByCoOrgao(int $co_orgao) Return HtTarefa objects filtered by the co_orgao column
 * @method     array findByEmailAdicionais(string $email_adicionais) Return HtTarefa objects filtered by the email_adicionais column
 * @method     array findByCoSeqModuloProj(int $co_seq_modulo_proj) Return HtTarefa objects filtered by the co_seq_modulo_proj column
 * @method     array findByNrTarefa(int $nr_tarefa) Return HtTarefa objects filtered by the nr_tarefa column
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseHtTarefaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseHtTarefaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tarefa', $modelName = 'HtTarefa', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new HtTarefaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    HtTarefaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof HtTarefaQuery) {
            return $criteria;
        }
        $query = new HtTarefaQuery();
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
     * @return    HtTarefa|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = HtTarefaPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    HtTarefaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(HtTarefaPeer::CO_SEQ_HT_TAREFA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    HtTarefaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(HtTarefaPeer::CO_SEQ_HT_TAREFA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the co_seq_ht_tarefa column
     *
     * Example usage:
     * <code>
     * $query->filterByCoSeqHtTarefa(1234); // WHERE co_seq_ht_tarefa = 1234
     * $query->filterByCoSeqHtTarefa(array(12, 34)); // WHERE co_seq_ht_tarefa IN (12, 34)
     * $query->filterByCoSeqHtTarefa(array('min' => 12)); // WHERE co_seq_ht_tarefa > 12
     * </code>
     *
     * @param     mixed $coSeqHtTarefa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    HtTarefaQuery The current query, for fluid interface
     */
    public function filterByCoSeqHtTarefa($coSeqHtTarefa = null, $comparison = null)
    {
        if (is_array($coSeqHtTarefa) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(HtTarefaPeer::CO_SEQ_HT_TAREFA, $coSeqHtTarefa, $comparison);
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
     * @param     mixed $coTarefa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    HtTarefaQuery The current query, for fluid interface
     */
    public function filterByCoTarefa($coTarefa = null, $comparison = null)
    {
        if (is_array($coTarefa)) {
            $useMinMax = false;
            if (isset($coTarefa['min'])) {
                $this->addUsingAlias(HtTarefaPeer::CO_TAREFA, $coTarefa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coTarefa['max'])) {
                $this->addUsingAlias(HtTarefaPeer::CO_TAREFA, $coTarefa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(HtTarefaPeer::CO_TAREFA, $coTarefa, $comparison);
    }

    /**
     * Filter the query on the co_categoria column
     *
     * Example usage:
     * <code>
     * $query->filterByCoCategoria(1234); // WHERE co_categoria = 1234
     * $query->filterByCoCategoria(array(12, 34)); // WHERE co_categoria IN (12, 34)
     * $query->filterByCoCategoria(array('min' => 12)); // WHERE co_categoria > 12
     * </code>
     *
     * @param     mixed $coCategoria The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    HtTarefaQuery The current query, for fluid interface
     */
    public function filterByCoCategoria($coCategoria = null, $comparison = null)
    {
        if (is_array($coCategoria)) {
            $useMinMax = false;
            if (isset($coCategoria['min'])) {
                $this->addUsingAlias(HtTarefaPeer::CO_CATEGORIA, $coCategoria['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coCategoria['max'])) {
                $this->addUsingAlias(HtTarefaPeer::CO_CATEGORIA, $coCategoria['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(HtTarefaPeer::CO_CATEGORIA, $coCategoria, $comparison);
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
     * @return    HtTarefaQuery The current query, for fluid interface
     */
    public function filterByCoStatus($coStatus = null, $comparison = null)
    {
        if (is_array($coStatus)) {
            $useMinMax = false;
            if (isset($coStatus['min'])) {
                $this->addUsingAlias(HtTarefaPeer::CO_STATUS, $coStatus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coStatus['max'])) {
                $this->addUsingAlias(HtTarefaPeer::CO_STATUS, $coStatus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(HtTarefaPeer::CO_STATUS, $coStatus, $comparison);
    }

    /**
     * Filter the query on the co_prioridade column
     *
     * Example usage:
     * <code>
     * $query->filterByCoPrioridade(1234); // WHERE co_prioridade = 1234
     * $query->filterByCoPrioridade(array(12, 34)); // WHERE co_prioridade IN (12, 34)
     * $query->filterByCoPrioridade(array('min' => 12)); // WHERE co_prioridade > 12
     * </code>
     *
     * @param     mixed $coPrioridade The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    HtTarefaQuery The current query, for fluid interface
     */
    public function filterByCoPrioridade($coPrioridade = null, $comparison = null)
    {
        if (is_array($coPrioridade)) {
            $useMinMax = false;
            if (isset($coPrioridade['min'])) {
                $this->addUsingAlias(HtTarefaPeer::CO_PRIORIDADE, $coPrioridade['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coPrioridade['max'])) {
                $this->addUsingAlias(HtTarefaPeer::CO_PRIORIDADE, $coPrioridade['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(HtTarefaPeer::CO_PRIORIDADE, $coPrioridade, $comparison);
    }

    /**
     * Filter the query on the co_usuario_fechamento column
     *
     * Example usage:
     * <code>
     * $query->filterByCoUsuarioFechamento(1234); // WHERE co_usuario_fechamento = 1234
     * $query->filterByCoUsuarioFechamento(array(12, 34)); // WHERE co_usuario_fechamento IN (12, 34)
     * $query->filterByCoUsuarioFechamento(array('min' => 12)); // WHERE co_usuario_fechamento > 12
     * </code>
     *
     * @param     mixed $coUsuarioFechamento The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    HtTarefaQuery The current query, for fluid interface
     */
    public function filterByCoUsuarioFechamento($coUsuarioFechamento = null, $comparison = null)
    {
        if (is_array($coUsuarioFechamento)) {
            $useMinMax = false;
            if (isset($coUsuarioFechamento['min'])) {
                $this->addUsingAlias(HtTarefaPeer::CO_USUARIO_FECHAMENTO, $coUsuarioFechamento['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coUsuarioFechamento['max'])) {
                $this->addUsingAlias(HtTarefaPeer::CO_USUARIO_FECHAMENTO, $coUsuarioFechamento['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(HtTarefaPeer::CO_USUARIO_FECHAMENTO, $coUsuarioFechamento, $comparison);
    }

    /**
     * Filter the query on the co_nivel column
     *
     * Example usage:
     * <code>
     * $query->filterByCoNivel(1234); // WHERE co_nivel = 1234
     * $query->filterByCoNivel(array(12, 34)); // WHERE co_nivel IN (12, 34)
     * $query->filterByCoNivel(array('min' => 12)); // WHERE co_nivel > 12
     * </code>
     *
     * @param     mixed $coNivel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    HtTarefaQuery The current query, for fluid interface
     */
    public function filterByCoNivel($coNivel = null, $comparison = null)
    {
        if (is_array($coNivel)) {
            $useMinMax = false;
            if (isset($coNivel['min'])) {
                $this->addUsingAlias(HtTarefaPeer::CO_NIVEL, $coNivel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coNivel['max'])) {
                $this->addUsingAlias(HtTarefaPeer::CO_NIVEL, $coNivel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(HtTarefaPeer::CO_NIVEL, $coNivel, $comparison);
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
     * @return    HtTarefaQuery The current query, for fluid interface
     */
    public function filterByCoSeqProjVerAmb($coSeqProjVerAmb = null, $comparison = null)
    {
        if (is_array($coSeqProjVerAmb)) {
            $useMinMax = false;
            if (isset($coSeqProjVerAmb['min'])) {
                $this->addUsingAlias(HtTarefaPeer::CO_SEQ_PROJ_VER_AMB, $coSeqProjVerAmb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coSeqProjVerAmb['max'])) {
                $this->addUsingAlias(HtTarefaPeer::CO_SEQ_PROJ_VER_AMB, $coSeqProjVerAmb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(HtTarefaPeer::CO_SEQ_PROJ_VER_AMB, $coSeqProjVerAmb, $comparison);
    }

    /**
     * Filter the query on the co_usuario_aberto column
     *
     * Example usage:
     * <code>
     * $query->filterByCoUsuarioAberto(1234); // WHERE co_usuario_aberto = 1234
     * $query->filterByCoUsuarioAberto(array(12, 34)); // WHERE co_usuario_aberto IN (12, 34)
     * $query->filterByCoUsuarioAberto(array('min' => 12)); // WHERE co_usuario_aberto > 12
     * </code>
     *
     * @param     mixed $coUsuarioAberto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    HtTarefaQuery The current query, for fluid interface
     */
    public function filterByCoUsuarioAberto($coUsuarioAberto = null, $comparison = null)
    {
        if (is_array($coUsuarioAberto)) {
            $useMinMax = false;
            if (isset($coUsuarioAberto['min'])) {
                $this->addUsingAlias(HtTarefaPeer::CO_USUARIO_ABERTO, $coUsuarioAberto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coUsuarioAberto['max'])) {
                $this->addUsingAlias(HtTarefaPeer::CO_USUARIO_ABERTO, $coUsuarioAberto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(HtTarefaPeer::CO_USUARIO_ABERTO, $coUsuarioAberto, $comparison);
    }

    /**
     * Filter the query on the co_usuario_atualizacao column
     *
     * Example usage:
     * <code>
     * $query->filterByCoUsuarioAtualizacao(1234); // WHERE co_usuario_atualizacao = 1234
     * $query->filterByCoUsuarioAtualizacao(array(12, 34)); // WHERE co_usuario_atualizacao IN (12, 34)
     * $query->filterByCoUsuarioAtualizacao(array('min' => 12)); // WHERE co_usuario_atualizacao > 12
     * </code>
     *
     * @param     mixed $coUsuarioAtualizacao The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    HtTarefaQuery The current query, for fluid interface
     */
    public function filterByCoUsuarioAtualizacao($coUsuarioAtualizacao = null, $comparison = null)
    {
        if (is_array($coUsuarioAtualizacao)) {
            $useMinMax = false;
            if (isset($coUsuarioAtualizacao['min'])) {
                $this->addUsingAlias(HtTarefaPeer::CO_USUARIO_ATUALIZACAO, $coUsuarioAtualizacao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coUsuarioAtualizacao['max'])) {
                $this->addUsingAlias(HtTarefaPeer::CO_USUARIO_ATUALIZACAO, $coUsuarioAtualizacao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(HtTarefaPeer::CO_USUARIO_ATUALIZACAO, $coUsuarioAtualizacao, $comparison);
    }

    /**
     * Filter the query on the dt_inicio column
     *
     * Example usage:
     * <code>
     * $query->filterByDtInicio('2011-03-14'); // WHERE dt_inicio = '2011-03-14'
     * $query->filterByDtInicio('now'); // WHERE dt_inicio = '2011-03-14'
     * $query->filterByDtInicio(array('max' => 'yesterday')); // WHERE dt_inicio > '2011-03-13'
     * </code>
     *
     * @param     mixed $dtInicio The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    HtTarefaQuery The current query, for fluid interface
     */
    public function filterByDtInicio($dtInicio = null, $comparison = null)
    {
        if (is_array($dtInicio)) {
            $useMinMax = false;
            if (isset($dtInicio['min'])) {
                $this->addUsingAlias(HtTarefaPeer::DT_INICIO, $dtInicio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtInicio['max'])) {
                $this->addUsingAlias(HtTarefaPeer::DT_INICIO, $dtInicio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(HtTarefaPeer::DT_INICIO, $dtInicio, $comparison);
    }

    /**
     * Filter the query on the dt_previsao column
     *
     * Example usage:
     * <code>
     * $query->filterByDtPrevisao('2011-03-14'); // WHERE dt_previsao = '2011-03-14'
     * $query->filterByDtPrevisao('now'); // WHERE dt_previsao = '2011-03-14'
     * $query->filterByDtPrevisao(array('max' => 'yesterday')); // WHERE dt_previsao > '2011-03-13'
     * </code>
     *
     * @param     mixed $dtPrevisao The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    HtTarefaQuery The current query, for fluid interface
     */
    public function filterByDtPrevisao($dtPrevisao = null, $comparison = null)
    {
        if (is_array($dtPrevisao)) {
            $useMinMax = false;
            if (isset($dtPrevisao['min'])) {
                $this->addUsingAlias(HtTarefaPeer::DT_PREVISAO, $dtPrevisao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtPrevisao['max'])) {
                $this->addUsingAlias(HtTarefaPeer::DT_PREVISAO, $dtPrevisao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(HtTarefaPeer::DT_PREVISAO, $dtPrevisao, $comparison);
    }

    /**
     * Filter the query on the dt_fim column
     *
     * Example usage:
     * <code>
     * $query->filterByDtFim('2011-03-14'); // WHERE dt_fim = '2011-03-14'
     * $query->filterByDtFim('now'); // WHERE dt_fim = '2011-03-14'
     * $query->filterByDtFim(array('max' => 'yesterday')); // WHERE dt_fim > '2011-03-13'
     * </code>
     *
     * @param     mixed $dtFim The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    HtTarefaQuery The current query, for fluid interface
     */
    public function filterByDtFim($dtFim = null, $comparison = null)
    {
        if (is_array($dtFim)) {
            $useMinMax = false;
            if (isset($dtFim['min'])) {
                $this->addUsingAlias(HtTarefaPeer::DT_FIM, $dtFim['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtFim['max'])) {
                $this->addUsingAlias(HtTarefaPeer::DT_FIM, $dtFim['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(HtTarefaPeer::DT_FIM, $dtFim, $comparison);
    }

    /**
     * Filter the query on the dt_atualizacao column
     *
     * Example usage:
     * <code>
     * $query->filterByDtAtualizacao('2011-03-14'); // WHERE dt_atualizacao = '2011-03-14'
     * $query->filterByDtAtualizacao('now'); // WHERE dt_atualizacao = '2011-03-14'
     * $query->filterByDtAtualizacao(array('max' => 'yesterday')); // WHERE dt_atualizacao > '2011-03-13'
     * </code>
     *
     * @param     mixed $dtAtualizacao The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    HtTarefaQuery The current query, for fluid interface
     */
    public function filterByDtAtualizacao($dtAtualizacao = null, $comparison = null)
    {
        if (is_array($dtAtualizacao)) {
            $useMinMax = false;
            if (isset($dtAtualizacao['min'])) {
                $this->addUsingAlias(HtTarefaPeer::DT_ATUALIZACAO, $dtAtualizacao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtAtualizacao['max'])) {
                $this->addUsingAlias(HtTarefaPeer::DT_ATUALIZACAO, $dtAtualizacao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(HtTarefaPeer::DT_ATUALIZACAO, $dtAtualizacao, $comparison);
    }

    /**
     * Filter the query on the no_resumo column
     *
     * Example usage:
     * <code>
     * $query->filterByNoResumo('fooValue');   // WHERE no_resumo = 'fooValue'
     * $query->filterByNoResumo('%fooValue%'); // WHERE no_resumo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noResumo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    HtTarefaQuery The current query, for fluid interface
     */
    public function filterByNoResumo($noResumo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noResumo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noResumo)) {
                $noResumo = str_replace('*', '%', $noResumo);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(HtTarefaPeer::NO_RESUMO, $noResumo, $comparison);
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
     * @return    HtTarefaQuery The current query, for fluid interface
     */
    public function filterByCoOrgao($coOrgao = null, $comparison = null)
    {
        if (is_array($coOrgao)) {
            $useMinMax = false;
            if (isset($coOrgao['min'])) {
                $this->addUsingAlias(HtTarefaPeer::CO_ORGAO, $coOrgao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coOrgao['max'])) {
                $this->addUsingAlias(HtTarefaPeer::CO_ORGAO, $coOrgao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(HtTarefaPeer::CO_ORGAO, $coOrgao, $comparison);
    }

    /**
     * Filter the query on the email_adicionais column
     *
     * Example usage:
     * <code>
     * $query->filterByEmailAdicionais('fooValue');   // WHERE email_adicionais = 'fooValue'
     * $query->filterByEmailAdicionais('%fooValue%'); // WHERE email_adicionais LIKE '%fooValue%'
     * </code>
     *
     * @param     string $emailAdicionais The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    HtTarefaQuery The current query, for fluid interface
     */
    public function filterByEmailAdicionais($emailAdicionais = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($emailAdicionais)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $emailAdicionais)) {
                $emailAdicionais = str_replace('*', '%', $emailAdicionais);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(HtTarefaPeer::EMAIL_ADICIONAIS, $emailAdicionais, $comparison);
    }

    /**
     * Filter the query on the co_seq_modulo_proj column
     *
     * Example usage:
     * <code>
     * $query->filterByCoSeqModuloProj(1234); // WHERE co_seq_modulo_proj = 1234
     * $query->filterByCoSeqModuloProj(array(12, 34)); // WHERE co_seq_modulo_proj IN (12, 34)
     * $query->filterByCoSeqModuloProj(array('min' => 12)); // WHERE co_seq_modulo_proj > 12
     * </code>
     *
     * @param     mixed $coSeqModuloProj The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    HtTarefaQuery The current query, for fluid interface
     */
    public function filterByCoSeqModuloProj($coSeqModuloProj = null, $comparison = null)
    {
        if (is_array($coSeqModuloProj)) {
            $useMinMax = false;
            if (isset($coSeqModuloProj['min'])) {
                $this->addUsingAlias(HtTarefaPeer::CO_SEQ_MODULO_PROJ, $coSeqModuloProj['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coSeqModuloProj['max'])) {
                $this->addUsingAlias(HtTarefaPeer::CO_SEQ_MODULO_PROJ, $coSeqModuloProj['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(HtTarefaPeer::CO_SEQ_MODULO_PROJ, $coSeqModuloProj, $comparison);
    }

    /**
     * Filter the query on the nr_tarefa column
     *
     * Example usage:
     * <code>
     * $query->filterByNrTarefa(1234); // WHERE nr_tarefa = 1234
     * $query->filterByNrTarefa(array(12, 34)); // WHERE nr_tarefa IN (12, 34)
     * $query->filterByNrTarefa(array('min' => 12)); // WHERE nr_tarefa > 12
     * </code>
     *
     * @param     mixed $nrTarefa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    HtTarefaQuery The current query, for fluid interface
     */
    public function filterByNrTarefa($nrTarefa = null, $comparison = null)
    {
        if (is_array($nrTarefa)) {
            $useMinMax = false;
            if (isset($nrTarefa['min'])) {
                $this->addUsingAlias(HtTarefaPeer::NR_TAREFA, $nrTarefa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nrTarefa['max'])) {
                $this->addUsingAlias(HtTarefaPeer::NR_TAREFA, $nrTarefa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(HtTarefaPeer::NR_TAREFA, $nrTarefa, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     HtTarefa $htTarefa Object to remove from the list of results
     *
     * @return    HtTarefaQuery The current query, for fluid interface
     */
    public function prune($htTarefa = null)
    {
        if ($htTarefa) {
            $this->addUsingAlias(HtTarefaPeer::CO_SEQ_HT_TAREFA, $htTarefa->getCoSeqHtTarefa(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseHtTarefaQuery