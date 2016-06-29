<?php


/**
 * Base class that represents a query for the 'tb_imagem' table.
 *
 * 
 *
 * @method     TbImagemQuery orderByCoSeqImagem($order = Criteria::ASC) Order by the co_seq_imagem column
 * @method     TbImagemQuery orderByCoSeqDescChamado($order = Criteria::ASC) Order by the co_seq_desc_chamado column
 * @method     TbImagemQuery orderByNoImagem($order = Criteria::ASC) Order by the no_imagem column
 * @method     TbImagemQuery orderByDtImagem($order = Criteria::ASC) Order by the dt_imagem column
 * @method     TbImagemQuery orderByDsExtensao($order = Criteria::ASC) Order by the ds_extensao column
 * @method     TbImagemQuery orderByDsCaminho($order = Criteria::ASC) Order by the ds_caminho column
 *
 * @method     TbImagemQuery groupByCoSeqImagem() Group by the co_seq_imagem column
 * @method     TbImagemQuery groupByCoSeqDescChamado() Group by the co_seq_desc_chamado column
 * @method     TbImagemQuery groupByNoImagem() Group by the no_imagem column
 * @method     TbImagemQuery groupByDtImagem() Group by the dt_imagem column
 * @method     TbImagemQuery groupByDsExtensao() Group by the ds_extensao column
 * @method     TbImagemQuery groupByDsCaminho() Group by the ds_caminho column
 *
 * @method     TbImagemQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TbImagemQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TbImagemQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TbImagemQuery leftJoinTbDescricaoChamado($relationAlias = null) Adds a LEFT JOIN clause to the query using the TbDescricaoChamado relation
 * @method     TbImagemQuery rightJoinTbDescricaoChamado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TbDescricaoChamado relation
 * @method     TbImagemQuery innerJoinTbDescricaoChamado($relationAlias = null) Adds a INNER JOIN clause to the query using the TbDescricaoChamado relation
 *
 * @method     TbImagem findOne(PropelPDO $con = null) Return the first TbImagem matching the query
 * @method     TbImagem findOneOrCreate(PropelPDO $con = null) Return the first TbImagem matching the query, or a new TbImagem object populated from the query conditions when no match is found
 *
 * @method     TbImagem findOneByCoSeqImagem(int $co_seq_imagem) Return the first TbImagem filtered by the co_seq_imagem column
 * @method     TbImagem findOneByCoSeqDescChamado(int $co_seq_desc_chamado) Return the first TbImagem filtered by the co_seq_desc_chamado column
 * @method     TbImagem findOneByNoImagem(string $no_imagem) Return the first TbImagem filtered by the no_imagem column
 * @method     TbImagem findOneByDtImagem(string $dt_imagem) Return the first TbImagem filtered by the dt_imagem column
 * @method     TbImagem findOneByDsExtensao(string $ds_extensao) Return the first TbImagem filtered by the ds_extensao column
 * @method     TbImagem findOneByDsCaminho(string $ds_caminho) Return the first TbImagem filtered by the ds_caminho column
 *
 * @method     array findByCoSeqImagem(int $co_seq_imagem) Return TbImagem objects filtered by the co_seq_imagem column
 * @method     array findByCoSeqDescChamado(int $co_seq_desc_chamado) Return TbImagem objects filtered by the co_seq_desc_chamado column
 * @method     array findByNoImagem(string $no_imagem) Return TbImagem objects filtered by the no_imagem column
 * @method     array findByDtImagem(string $dt_imagem) Return TbImagem objects filtered by the dt_imagem column
 * @method     array findByDsExtensao(string $ds_extensao) Return TbImagem objects filtered by the ds_extensao column
 * @method     array findByDsCaminho(string $ds_caminho) Return TbImagem objects filtered by the ds_caminho column
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseTbImagemQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseTbImagemQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tarefa', $modelName = 'TbImagem', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TbImagemQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    TbImagemQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TbImagemQuery) {
            return $criteria;
        }
        $query = new TbImagemQuery();
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
     * @return    TbImagem|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = TbImagemPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    TbImagemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(TbImagemPeer::CO_SEQ_IMAGEM, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    TbImagemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(TbImagemPeer::CO_SEQ_IMAGEM, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the co_seq_imagem column
     *
     * Example usage:
     * <code>
     * $query->filterByCoSeqImagem(1234); // WHERE co_seq_imagem = 1234
     * $query->filterByCoSeqImagem(array(12, 34)); // WHERE co_seq_imagem IN (12, 34)
     * $query->filterByCoSeqImagem(array('min' => 12)); // WHERE co_seq_imagem > 12
     * </code>
     *
     * @param     mixed $coSeqImagem The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TbImagemQuery The current query, for fluid interface
     */
    public function filterByCoSeqImagem($coSeqImagem = null, $comparison = null)
    {
        if (is_array($coSeqImagem) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(TbImagemPeer::CO_SEQ_IMAGEM, $coSeqImagem, $comparison);
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
     * @see       filterByTbDescricaoChamado()
     *
     * @param     mixed $coSeqDescChamado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TbImagemQuery The current query, for fluid interface
     */
    public function filterByCoSeqDescChamado($coSeqDescChamado = null, $comparison = null)
    {
        if (is_array($coSeqDescChamado)) {
            $useMinMax = false;
            if (isset($coSeqDescChamado['min'])) {
                $this->addUsingAlias(TbImagemPeer::CO_SEQ_DESC_CHAMADO, $coSeqDescChamado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coSeqDescChamado['max'])) {
                $this->addUsingAlias(TbImagemPeer::CO_SEQ_DESC_CHAMADO, $coSeqDescChamado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(TbImagemPeer::CO_SEQ_DESC_CHAMADO, $coSeqDescChamado, $comparison);
    }

    /**
     * Filter the query on the no_imagem column
     *
     * Example usage:
     * <code>
     * $query->filterByNoImagem('fooValue');   // WHERE no_imagem = 'fooValue'
     * $query->filterByNoImagem('%fooValue%'); // WHERE no_imagem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noImagem The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TbImagemQuery The current query, for fluid interface
     */
    public function filterByNoImagem($noImagem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noImagem)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noImagem)) {
                $noImagem = str_replace('*', '%', $noImagem);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TbImagemPeer::NO_IMAGEM, $noImagem, $comparison);
    }

    /**
     * Filter the query on the dt_imagem column
     *
     * Example usage:
     * <code>
     * $query->filterByDtImagem('2011-03-14'); // WHERE dt_imagem = '2011-03-14'
     * $query->filterByDtImagem('now'); // WHERE dt_imagem = '2011-03-14'
     * $query->filterByDtImagem(array('max' => 'yesterday')); // WHERE dt_imagem > '2011-03-13'
     * </code>
     *
     * @param     mixed $dtImagem The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TbImagemQuery The current query, for fluid interface
     */
    public function filterByDtImagem($dtImagem = null, $comparison = null)
    {
        if (is_array($dtImagem)) {
            $useMinMax = false;
            if (isset($dtImagem['min'])) {
                $this->addUsingAlias(TbImagemPeer::DT_IMAGEM, $dtImagem['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtImagem['max'])) {
                $this->addUsingAlias(TbImagemPeer::DT_IMAGEM, $dtImagem['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(TbImagemPeer::DT_IMAGEM, $dtImagem, $comparison);
    }

    /**
     * Filter the query on the ds_extensao column
     *
     * Example usage:
     * <code>
     * $query->filterByDsExtensao('fooValue');   // WHERE ds_extensao = 'fooValue'
     * $query->filterByDsExtensao('%fooValue%'); // WHERE ds_extensao LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dsExtensao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TbImagemQuery The current query, for fluid interface
     */
    public function filterByDsExtensao($dsExtensao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dsExtensao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dsExtensao)) {
                $dsExtensao = str_replace('*', '%', $dsExtensao);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TbImagemPeer::DS_EXTENSAO, $dsExtensao, $comparison);
    }

    /**
     * Filter the query on the ds_caminho column
     *
     * Example usage:
     * <code>
     * $query->filterByDsCaminho('fooValue');   // WHERE ds_caminho = 'fooValue'
     * $query->filterByDsCaminho('%fooValue%'); // WHERE ds_caminho LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dsCaminho The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TbImagemQuery The current query, for fluid interface
     */
    public function filterByDsCaminho($dsCaminho = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dsCaminho)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dsCaminho)) {
                $dsCaminho = str_replace('*', '%', $dsCaminho);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TbImagemPeer::DS_CAMINHO, $dsCaminho, $comparison);
    }

    /**
     * Filter the query by a related TbDescricaoChamado object
     *
     * @param     TbDescricaoChamado|PropelCollection $tbDescricaoChamado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TbImagemQuery The current query, for fluid interface
     */
    public function filterByTbDescricaoChamado($tbDescricaoChamado, $comparison = null)
    {
        if ($tbDescricaoChamado instanceof TbDescricaoChamado) {
            return $this
                ->addUsingAlias(TbImagemPeer::CO_SEQ_DESC_CHAMADO, $tbDescricaoChamado->getCoSeqDescChamado(), $comparison);
        } elseif ($tbDescricaoChamado instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(TbImagemPeer::CO_SEQ_DESC_CHAMADO, $tbDescricaoChamado->toKeyValue('PrimaryKey', 'CoSeqDescChamado'), $comparison);
        } else {
            throw new PropelException('filterByTbDescricaoChamado() only accepts arguments of type TbDescricaoChamado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TbDescricaoChamado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    TbImagemQuery The current query, for fluid interface
     */
    public function joinTbDescricaoChamado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TbDescricaoChamado');

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
            $this->addJoinObject($join, 'TbDescricaoChamado');
        }

        return $this;
    }

    /**
     * Use the TbDescricaoChamado relation TbDescricaoChamado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    TbDescricaoChamadoQuery A secondary query class using the current class as primary query
     */
    public function useTbDescricaoChamadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTbDescricaoChamado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TbDescricaoChamado', 'TbDescricaoChamadoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     TbImagem $tbImagem Object to remove from the list of results
     *
     * @return    TbImagemQuery The current query, for fluid interface
     */
    public function prune($tbImagem = null)
    {
        if ($tbImagem) {
            $this->addUsingAlias(TbImagemPeer::CO_SEQ_IMAGEM, $tbImagem->getCoSeqImagem(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseTbImagemQuery