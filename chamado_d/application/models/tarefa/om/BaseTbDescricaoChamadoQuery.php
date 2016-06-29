<?php


/**
 * Base class that represents a query for the 'tb_descricao_chamado' table.
 *
 * 
 *
 * @method     TbDescricaoChamadoQuery orderByCoSeqDescChamado($order = Criteria::ASC) Order by the co_seq_desc_chamado column
 * @method     TbDescricaoChamadoQuery orderByCoTarefa($order = Criteria::ASC) Order by the co_tarefa column
 * @method     TbDescricaoChamadoQuery orderByCoUsuario($order = Criteria::ASC) Order by the co_usuario column
 * @method     TbDescricaoChamadoQuery orderByDsChamado($order = Criteria::ASC) Order by the ds_chamado column
 * @method     TbDescricaoChamadoQuery orderByDtCadastro($order = Criteria::ASC) Order by the dt_cadastro column
 * @method     TbDescricaoChamadoQuery orderByDtAtualizacao($order = Criteria::ASC) Order by the dt_atualizacao column
 *
 * @method     TbDescricaoChamadoQuery groupByCoSeqDescChamado() Group by the co_seq_desc_chamado column
 * @method     TbDescricaoChamadoQuery groupByCoTarefa() Group by the co_tarefa column
 * @method     TbDescricaoChamadoQuery groupByCoUsuario() Group by the co_usuario column
 * @method     TbDescricaoChamadoQuery groupByDsChamado() Group by the ds_chamado column
 * @method     TbDescricaoChamadoQuery groupByDtCadastro() Group by the dt_cadastro column
 * @method     TbDescricaoChamadoQuery groupByDtAtualizacao() Group by the dt_atualizacao column
 *
 * @method     TbDescricaoChamadoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TbDescricaoChamadoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TbDescricaoChamadoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TbDescricaoChamadoQuery leftJoinTarefa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tarefa relation
 * @method     TbDescricaoChamadoQuery rightJoinTarefa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tarefa relation
 * @method     TbDescricaoChamadoQuery innerJoinTarefa($relationAlias = null) Adds a INNER JOIN clause to the query using the Tarefa relation
 *
 * @method     TbDescricaoChamadoQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method     TbDescricaoChamadoQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method     TbDescricaoChamadoQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method     TbDescricaoChamadoQuery leftJoinTbImagem($relationAlias = null) Adds a LEFT JOIN clause to the query using the TbImagem relation
 * @method     TbDescricaoChamadoQuery rightJoinTbImagem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TbImagem relation
 * @method     TbDescricaoChamadoQuery innerJoinTbImagem($relationAlias = null) Adds a INNER JOIN clause to the query using the TbImagem relation
 *
 * @method     TbDescricaoChamado findOne(PropelPDO $con = null) Return the first TbDescricaoChamado matching the query
 * @method     TbDescricaoChamado findOneOrCreate(PropelPDO $con = null) Return the first TbDescricaoChamado matching the query, or a new TbDescricaoChamado object populated from the query conditions when no match is found
 *
 * @method     TbDescricaoChamado findOneByCoSeqDescChamado(int $co_seq_desc_chamado) Return the first TbDescricaoChamado filtered by the co_seq_desc_chamado column
 * @method     TbDescricaoChamado findOneByCoTarefa(int $co_tarefa) Return the first TbDescricaoChamado filtered by the co_tarefa column
 * @method     TbDescricaoChamado findOneByCoUsuario(int $co_usuario) Return the first TbDescricaoChamado filtered by the co_usuario column
 * @method     TbDescricaoChamado findOneByDsChamado(string $ds_chamado) Return the first TbDescricaoChamado filtered by the ds_chamado column
 * @method     TbDescricaoChamado findOneByDtCadastro(string $dt_cadastro) Return the first TbDescricaoChamado filtered by the dt_cadastro column
 * @method     TbDescricaoChamado findOneByDtAtualizacao(string $dt_atualizacao) Return the first TbDescricaoChamado filtered by the dt_atualizacao column
 *
 * @method     array findByCoSeqDescChamado(int $co_seq_desc_chamado) Return TbDescricaoChamado objects filtered by the co_seq_desc_chamado column
 * @method     array findByCoTarefa(int $co_tarefa) Return TbDescricaoChamado objects filtered by the co_tarefa column
 * @method     array findByCoUsuario(int $co_usuario) Return TbDescricaoChamado objects filtered by the co_usuario column
 * @method     array findByDsChamado(string $ds_chamado) Return TbDescricaoChamado objects filtered by the ds_chamado column
 * @method     array findByDtCadastro(string $dt_cadastro) Return TbDescricaoChamado objects filtered by the dt_cadastro column
 * @method     array findByDtAtualizacao(string $dt_atualizacao) Return TbDescricaoChamado objects filtered by the dt_atualizacao column
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseTbDescricaoChamadoQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseTbDescricaoChamadoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tarefa', $modelName = 'TbDescricaoChamado', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TbDescricaoChamadoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    TbDescricaoChamadoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TbDescricaoChamadoQuery) {
            return $criteria;
        }
        $query = new TbDescricaoChamadoQuery();
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
     * @return    TbDescricaoChamado|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = TbDescricaoChamadoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    TbDescricaoChamadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(TbDescricaoChamadoPeer::CO_SEQ_DESC_CHAMADO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    TbDescricaoChamadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(TbDescricaoChamadoPeer::CO_SEQ_DESC_CHAMADO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the co_seq_desc_chamado column
     *
     * Example usage:
     * <code>
     * $query->filterByCoSeqDescChamado(1234); // WHERE co_seq_desc_chamado = 1234
     * $query->filterByCoSeqDescChamado(array(12, 34)); // WHERE co_seq_desc_chamado IN (12, 34)
     * $query->filterByCoSeqDescChamado(array('min' => 12)); // WHERE co_seq_desc_chamado > 12
     * </code>
     *
     * @param     mixed $coSeqDescChamado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TbDescricaoChamadoQuery The current query, for fluid interface
     */
    public function filterByCoSeqDescChamado($coSeqDescChamado = null, $comparison = null)
    {
        if (is_array($coSeqDescChamado) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(TbDescricaoChamadoPeer::CO_SEQ_DESC_CHAMADO, $coSeqDescChamado, $comparison);
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
     * @see       filterByTarefa()
     *
     * @param     mixed $coTarefa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TbDescricaoChamadoQuery The current query, for fluid interface
     */
    public function filterByCoTarefa($coTarefa = null, $comparison = null)
    {
        if (is_array($coTarefa)) {
            $useMinMax = false;
            if (isset($coTarefa['min'])) {
                $this->addUsingAlias(TbDescricaoChamadoPeer::CO_TAREFA, $coTarefa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coTarefa['max'])) {
                $this->addUsingAlias(TbDescricaoChamadoPeer::CO_TAREFA, $coTarefa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(TbDescricaoChamadoPeer::CO_TAREFA, $coTarefa, $comparison);
    }

    /**
     * Filter the query on the co_usuario column
     *
     * Example usage:
     * <code>
     * $query->filterByCoUsuario(1234); // WHERE co_usuario = 1234
     * $query->filterByCoUsuario(array(12, 34)); // WHERE co_usuario IN (12, 34)
     * $query->filterByCoUsuario(array('min' => 12)); // WHERE co_usuario > 12
     * </code>
     *
     * @see       filterByUsuario()
     *
     * @param     mixed $coUsuario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TbDescricaoChamadoQuery The current query, for fluid interface
     */
    public function filterByCoUsuario($coUsuario = null, $comparison = null)
    {
        if (is_array($coUsuario)) {
            $useMinMax = false;
            if (isset($coUsuario['min'])) {
                $this->addUsingAlias(TbDescricaoChamadoPeer::CO_USUARIO, $coUsuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coUsuario['max'])) {
                $this->addUsingAlias(TbDescricaoChamadoPeer::CO_USUARIO, $coUsuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(TbDescricaoChamadoPeer::CO_USUARIO, $coUsuario, $comparison);
    }

    /**
     * Filter the query on the ds_chamado column
     *
     * Example usage:
     * <code>
     * $query->filterByDsChamado('fooValue');   // WHERE ds_chamado = 'fooValue'
     * $query->filterByDsChamado('%fooValue%'); // WHERE ds_chamado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dsChamado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TbDescricaoChamadoQuery The current query, for fluid interface
     */
    public function filterByDsChamado($dsChamado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dsChamado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dsChamado)) {
                $dsChamado = str_replace('*', '%', $dsChamado);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TbDescricaoChamadoPeer::DS_CHAMADO, $dsChamado, $comparison);
    }

    /**
     * Filter the query on the dt_cadastro column
     *
     * Example usage:
     * <code>
     * $query->filterByDtCadastro('2011-03-14'); // WHERE dt_cadastro = '2011-03-14'
     * $query->filterByDtCadastro('now'); // WHERE dt_cadastro = '2011-03-14'
     * $query->filterByDtCadastro(array('max' => 'yesterday')); // WHERE dt_cadastro > '2011-03-13'
     * </code>
     *
     * @param     mixed $dtCadastro The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TbDescricaoChamadoQuery The current query, for fluid interface
     */
    public function filterByDtCadastro($dtCadastro = null, $comparison = null)
    {
        if (is_array($dtCadastro)) {
            $useMinMax = false;
            if (isset($dtCadastro['min'])) {
                $this->addUsingAlias(TbDescricaoChamadoPeer::DT_CADASTRO, $dtCadastro['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtCadastro['max'])) {
                $this->addUsingAlias(TbDescricaoChamadoPeer::DT_CADASTRO, $dtCadastro['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(TbDescricaoChamadoPeer::DT_CADASTRO, $dtCadastro, $comparison);
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
     * @return    TbDescricaoChamadoQuery The current query, for fluid interface
     */
    public function filterByDtAtualizacao($dtAtualizacao = null, $comparison = null)
    {
        if (is_array($dtAtualizacao)) {
            $useMinMax = false;
            if (isset($dtAtualizacao['min'])) {
                $this->addUsingAlias(TbDescricaoChamadoPeer::DT_ATUALIZACAO, $dtAtualizacao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtAtualizacao['max'])) {
                $this->addUsingAlias(TbDescricaoChamadoPeer::DT_ATUALIZACAO, $dtAtualizacao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(TbDescricaoChamadoPeer::DT_ATUALIZACAO, $dtAtualizacao, $comparison);
    }

    /**
     * Filter the query by a related Tarefa object
     *
     * @param     Tarefa|PropelCollection $tarefa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TbDescricaoChamadoQuery The current query, for fluid interface
     */
    public function filterByTarefa($tarefa, $comparison = null)
    {
        if ($tarefa instanceof Tarefa) {
            return $this
                ->addUsingAlias(TbDescricaoChamadoPeer::CO_TAREFA, $tarefa->getCoTarefa(), $comparison);
        } elseif ($tarefa instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(TbDescricaoChamadoPeer::CO_TAREFA, $tarefa->toKeyValue('PrimaryKey', 'CoTarefa'), $comparison);
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
     * @return    TbDescricaoChamadoQuery The current query, for fluid interface
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
     * Filter the query by a related Usuario object
     *
     * @param     Usuario|PropelCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TbDescricaoChamadoQuery The current query, for fluid interface
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(TbDescricaoChamadoPeer::CO_USUARIO, $usuario->getCoUsuario(), $comparison);
        } elseif ($usuario instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(TbDescricaoChamadoPeer::CO_USUARIO, $usuario->toKeyValue('PrimaryKey', 'CoUsuario'), $comparison);
        } else {
            throw new PropelException('filterByUsuario() only accepts arguments of type Usuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Usuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    TbDescricaoChamadoQuery The current query, for fluid interface
     */
    public function joinUsuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Usuario');

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
            $this->addJoinObject($join, 'Usuario');
        }

        return $this;
    }

    /**
     * Use the Usuario relation Usuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    UsuarioQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Usuario', 'UsuarioQuery');
    }

    /**
     * Filter the query by a related TbImagem object
     *
     * @param     TbImagem $tbImagem  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TbDescricaoChamadoQuery The current query, for fluid interface
     */
    public function filterByTbImagem($tbImagem, $comparison = null)
    {
        if ($tbImagem instanceof TbImagem) {
            return $this
                ->addUsingAlias(TbDescricaoChamadoPeer::CO_SEQ_DESC_CHAMADO, $tbImagem->getCoSeqDescChamado(), $comparison);
        } elseif ($tbImagem instanceof PropelCollection) {
            return $this
                ->useTbImagemQuery()
                ->filterByPrimaryKeys($tbImagem->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTbImagem() only accepts arguments of type TbImagem or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TbImagem relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    TbDescricaoChamadoQuery The current query, for fluid interface
     */
    public function joinTbImagem($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TbImagem');

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
            $this->addJoinObject($join, 'TbImagem');
        }

        return $this;
    }

    /**
     * Use the TbImagem relation TbImagem object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    TbImagemQuery A secondary query class using the current class as primary query
     */
    public function useTbImagemQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTbImagem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TbImagem', 'TbImagemQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     TbDescricaoChamado $tbDescricaoChamado Object to remove from the list of results
     *
     * @return    TbDescricaoChamadoQuery The current query, for fluid interface
     */
    public function prune($tbDescricaoChamado = null)
    {
        if ($tbDescricaoChamado) {
            $this->addUsingAlias(TbDescricaoChamadoPeer::CO_SEQ_DESC_CHAMADO, $tbDescricaoChamado->getCoSeqDescChamado(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseTbDescricaoChamadoQuery