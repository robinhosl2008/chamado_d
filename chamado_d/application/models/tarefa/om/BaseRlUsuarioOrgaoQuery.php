<?php


/**
 * Base class that represents a query for the 'rl_usuario_orgao' table.
 *
 * 
 *
 * @method     RlUsuarioOrgaoQuery orderByCoSeqUsuarioOrgao($order = Criteria::ASC) Order by the co_seq_usuario_orgao column
 * @method     RlUsuarioOrgaoQuery orderByCoOrgao($order = Criteria::ASC) Order by the co_orgao column
 * @method     RlUsuarioOrgaoQuery orderByCoUsuario($order = Criteria::ASC) Order by the co_usuario column
 * @method     RlUsuarioOrgaoQuery orderByDtInicioRl($order = Criteria::ASC) Order by the dt_inicio_rl column
 * @method     RlUsuarioOrgaoQuery orderByDtFimRl($order = Criteria::ASC) Order by the dt_fim_rl column
 * @method     RlUsuarioOrgaoQuery orderByStRlUsuarioOrgao($order = Criteria::ASC) Order by the st_rl_usuario_orgao column
 *
 * @method     RlUsuarioOrgaoQuery groupByCoSeqUsuarioOrgao() Group by the co_seq_usuario_orgao column
 * @method     RlUsuarioOrgaoQuery groupByCoOrgao() Group by the co_orgao column
 * @method     RlUsuarioOrgaoQuery groupByCoUsuario() Group by the co_usuario column
 * @method     RlUsuarioOrgaoQuery groupByDtInicioRl() Group by the dt_inicio_rl column
 * @method     RlUsuarioOrgaoQuery groupByDtFimRl() Group by the dt_fim_rl column
 * @method     RlUsuarioOrgaoQuery groupByStRlUsuarioOrgao() Group by the st_rl_usuario_orgao column
 *
 * @method     RlUsuarioOrgaoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RlUsuarioOrgaoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RlUsuarioOrgaoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RlUsuarioOrgaoQuery leftJoinOrgao($relationAlias = null) Adds a LEFT JOIN clause to the query using the Orgao relation
 * @method     RlUsuarioOrgaoQuery rightJoinOrgao($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Orgao relation
 * @method     RlUsuarioOrgaoQuery innerJoinOrgao($relationAlias = null) Adds a INNER JOIN clause to the query using the Orgao relation
 *
 * @method     RlUsuarioOrgaoQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method     RlUsuarioOrgaoQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method     RlUsuarioOrgaoQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method     RlUsuarioOrgao findOne(PropelPDO $con = null) Return the first RlUsuarioOrgao matching the query
 * @method     RlUsuarioOrgao findOneOrCreate(PropelPDO $con = null) Return the first RlUsuarioOrgao matching the query, or a new RlUsuarioOrgao object populated from the query conditions when no match is found
 *
 * @method     RlUsuarioOrgao findOneByCoSeqUsuarioOrgao(int $co_seq_usuario_orgao) Return the first RlUsuarioOrgao filtered by the co_seq_usuario_orgao column
 * @method     RlUsuarioOrgao findOneByCoOrgao(int $co_orgao) Return the first RlUsuarioOrgao filtered by the co_orgao column
 * @method     RlUsuarioOrgao findOneByCoUsuario(int $co_usuario) Return the first RlUsuarioOrgao filtered by the co_usuario column
 * @method     RlUsuarioOrgao findOneByDtInicioRl(string $dt_inicio_rl) Return the first RlUsuarioOrgao filtered by the dt_inicio_rl column
 * @method     RlUsuarioOrgao findOneByDtFimRl(string $dt_fim_rl) Return the first RlUsuarioOrgao filtered by the dt_fim_rl column
 * @method     RlUsuarioOrgao findOneByStRlUsuarioOrgao(boolean $st_rl_usuario_orgao) Return the first RlUsuarioOrgao filtered by the st_rl_usuario_orgao column
 *
 * @method     array findByCoSeqUsuarioOrgao(int $co_seq_usuario_orgao) Return RlUsuarioOrgao objects filtered by the co_seq_usuario_orgao column
 * @method     array findByCoOrgao(int $co_orgao) Return RlUsuarioOrgao objects filtered by the co_orgao column
 * @method     array findByCoUsuario(int $co_usuario) Return RlUsuarioOrgao objects filtered by the co_usuario column
 * @method     array findByDtInicioRl(string $dt_inicio_rl) Return RlUsuarioOrgao objects filtered by the dt_inicio_rl column
 * @method     array findByDtFimRl(string $dt_fim_rl) Return RlUsuarioOrgao objects filtered by the dt_fim_rl column
 * @method     array findByStRlUsuarioOrgao(boolean $st_rl_usuario_orgao) Return RlUsuarioOrgao objects filtered by the st_rl_usuario_orgao column
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseRlUsuarioOrgaoQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseRlUsuarioOrgaoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tarefa', $modelName = 'RlUsuarioOrgao', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RlUsuarioOrgaoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    RlUsuarioOrgaoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RlUsuarioOrgaoQuery) {
            return $criteria;
        }
        $query = new RlUsuarioOrgaoQuery();
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
     * @return    RlUsuarioOrgao|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = RlUsuarioOrgaoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    RlUsuarioOrgaoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(RlUsuarioOrgaoPeer::CO_SEQ_USUARIO_ORGAO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    RlUsuarioOrgaoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(RlUsuarioOrgaoPeer::CO_SEQ_USUARIO_ORGAO, $keys, Criteria::IN);
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
     * @param     mixed $coSeqUsuarioOrgao The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RlUsuarioOrgaoQuery The current query, for fluid interface
     */
    public function filterByCoSeqUsuarioOrgao($coSeqUsuarioOrgao = null, $comparison = null)
    {
        if (is_array($coSeqUsuarioOrgao) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(RlUsuarioOrgaoPeer::CO_SEQ_USUARIO_ORGAO, $coSeqUsuarioOrgao, $comparison);
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
     * @return    RlUsuarioOrgaoQuery The current query, for fluid interface
     */
    public function filterByCoOrgao($coOrgao = null, $comparison = null)
    {
        if (is_array($coOrgao)) {
            $useMinMax = false;
            if (isset($coOrgao['min'])) {
                $this->addUsingAlias(RlUsuarioOrgaoPeer::CO_ORGAO, $coOrgao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coOrgao['max'])) {
                $this->addUsingAlias(RlUsuarioOrgaoPeer::CO_ORGAO, $coOrgao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(RlUsuarioOrgaoPeer::CO_ORGAO, $coOrgao, $comparison);
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
     * @return    RlUsuarioOrgaoQuery The current query, for fluid interface
     */
    public function filterByCoUsuario($coUsuario = null, $comparison = null)
    {
        if (is_array($coUsuario)) {
            $useMinMax = false;
            if (isset($coUsuario['min'])) {
                $this->addUsingAlias(RlUsuarioOrgaoPeer::CO_USUARIO, $coUsuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coUsuario['max'])) {
                $this->addUsingAlias(RlUsuarioOrgaoPeer::CO_USUARIO, $coUsuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(RlUsuarioOrgaoPeer::CO_USUARIO, $coUsuario, $comparison);
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
     * @return    RlUsuarioOrgaoQuery The current query, for fluid interface
     */
    public function filterByDtInicioRl($dtInicioRl = null, $comparison = null)
    {
        if (is_array($dtInicioRl)) {
            $useMinMax = false;
            if (isset($dtInicioRl['min'])) {
                $this->addUsingAlias(RlUsuarioOrgaoPeer::DT_INICIO_RL, $dtInicioRl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtInicioRl['max'])) {
                $this->addUsingAlias(RlUsuarioOrgaoPeer::DT_INICIO_RL, $dtInicioRl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(RlUsuarioOrgaoPeer::DT_INICIO_RL, $dtInicioRl, $comparison);
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
     * @return    RlUsuarioOrgaoQuery The current query, for fluid interface
     */
    public function filterByDtFimRl($dtFimRl = null, $comparison = null)
    {
        if (is_array($dtFimRl)) {
            $useMinMax = false;
            if (isset($dtFimRl['min'])) {
                $this->addUsingAlias(RlUsuarioOrgaoPeer::DT_FIM_RL, $dtFimRl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtFimRl['max'])) {
                $this->addUsingAlias(RlUsuarioOrgaoPeer::DT_FIM_RL, $dtFimRl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(RlUsuarioOrgaoPeer::DT_FIM_RL, $dtFimRl, $comparison);
    }

    /**
     * Filter the query on the st_rl_usuario_orgao column
     *
     * Example usage:
     * <code>
     * $query->filterByStRlUsuarioOrgao(true); // WHERE st_rl_usuario_orgao = true
     * $query->filterByStRlUsuarioOrgao('yes'); // WHERE st_rl_usuario_orgao = true
     * </code>
     *
     * @param     boolean|string $stRlUsuarioOrgao The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RlUsuarioOrgaoQuery The current query, for fluid interface
     */
    public function filterByStRlUsuarioOrgao($stRlUsuarioOrgao = null, $comparison = null)
    {
        if (is_string($stRlUsuarioOrgao)) {
            $st_rl_usuario_orgao = in_array(strtolower($stRlUsuarioOrgao), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(RlUsuarioOrgaoPeer::ST_RL_USUARIO_ORGAO, $stRlUsuarioOrgao, $comparison);
    }

    /**
     * Filter the query by a related Orgao object
     *
     * @param     Orgao|PropelCollection $orgao The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RlUsuarioOrgaoQuery The current query, for fluid interface
     */
    public function filterByOrgao($orgao, $comparison = null)
    {
        if ($orgao instanceof Orgao) {
            return $this
                ->addUsingAlias(RlUsuarioOrgaoPeer::CO_ORGAO, $orgao->getCoOrgao(), $comparison);
        } elseif ($orgao instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(RlUsuarioOrgaoPeer::CO_ORGAO, $orgao->toKeyValue('PrimaryKey', 'CoOrgao'), $comparison);
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
     * @return    RlUsuarioOrgaoQuery The current query, for fluid interface
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
     * Filter the query by a related Usuario object
     *
     * @param     Usuario|PropelCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    RlUsuarioOrgaoQuery The current query, for fluid interface
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(RlUsuarioOrgaoPeer::CO_USUARIO, $usuario->getCoUsuario(), $comparison);
        } elseif ($usuario instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(RlUsuarioOrgaoPeer::CO_USUARIO, $usuario->toKeyValue('PrimaryKey', 'CoUsuario'), $comparison);
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
     * @return    RlUsuarioOrgaoQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param     RlUsuarioOrgao $rlUsuarioOrgao Object to remove from the list of results
     *
     * @return    RlUsuarioOrgaoQuery The current query, for fluid interface
     */
    public function prune($rlUsuarioOrgao = null)
    {
        if ($rlUsuarioOrgao) {
            $this->addUsingAlias(RlUsuarioOrgaoPeer::CO_SEQ_USUARIO_ORGAO, $rlUsuarioOrgao->getCoSeqUsuarioOrgao(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseRlUsuarioOrgaoQuery