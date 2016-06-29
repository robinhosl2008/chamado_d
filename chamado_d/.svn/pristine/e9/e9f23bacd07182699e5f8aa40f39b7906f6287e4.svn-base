<?php


/**
 * Base class that represents a query for the 'usuario_tarefa' table.
 *
 * 
 *
 * @method     UsuarioTarefaQuery orderByCoUsuario($order = Criteria::ASC) Order by the co_usuario column
 * @method     UsuarioTarefaQuery orderByCoTarefa($order = Criteria::ASC) Order by the co_tarefa column
 * @method     UsuarioTarefaQuery orderByCoStatus($order = Criteria::ASC) Order by the co_status column
 * @method     UsuarioTarefaQuery orderByDtAtualizacao($order = Criteria::ASC) Order by the dt_atualizacao column
 * @method     UsuarioTarefaQuery orderByCoSeqUsuarioTarefa($order = Criteria::ASC) Order by the co_seq_usuario_tarefa column
 *
 * @method     UsuarioTarefaQuery groupByCoUsuario() Group by the co_usuario column
 * @method     UsuarioTarefaQuery groupByCoTarefa() Group by the co_tarefa column
 * @method     UsuarioTarefaQuery groupByCoStatus() Group by the co_status column
 * @method     UsuarioTarefaQuery groupByDtAtualizacao() Group by the dt_atualizacao column
 * @method     UsuarioTarefaQuery groupByCoSeqUsuarioTarefa() Group by the co_seq_usuario_tarefa column
 *
 * @method     UsuarioTarefaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UsuarioTarefaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UsuarioTarefaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UsuarioTarefaQuery leftJoinStatus($relationAlias = null) Adds a LEFT JOIN clause to the query using the Status relation
 * @method     UsuarioTarefaQuery rightJoinStatus($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Status relation
 * @method     UsuarioTarefaQuery innerJoinStatus($relationAlias = null) Adds a INNER JOIN clause to the query using the Status relation
 *
 * @method     UsuarioTarefaQuery leftJoinTarefa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tarefa relation
 * @method     UsuarioTarefaQuery rightJoinTarefa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tarefa relation
 * @method     UsuarioTarefaQuery innerJoinTarefa($relationAlias = null) Adds a INNER JOIN clause to the query using the Tarefa relation
 *
 * @method     UsuarioTarefaQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method     UsuarioTarefaQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method     UsuarioTarefaQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method     UsuarioTarefa findOne(PropelPDO $con = null) Return the first UsuarioTarefa matching the query
 * @method     UsuarioTarefa findOneOrCreate(PropelPDO $con = null) Return the first UsuarioTarefa matching the query, or a new UsuarioTarefa object populated from the query conditions when no match is found
 *
 * @method     UsuarioTarefa findOneByCoUsuario(int $co_usuario) Return the first UsuarioTarefa filtered by the co_usuario column
 * @method     UsuarioTarefa findOneByCoTarefa(int $co_tarefa) Return the first UsuarioTarefa filtered by the co_tarefa column
 * @method     UsuarioTarefa findOneByCoStatus(int $co_status) Return the first UsuarioTarefa filtered by the co_status column
 * @method     UsuarioTarefa findOneByDtAtualizacao(string $dt_atualizacao) Return the first UsuarioTarefa filtered by the dt_atualizacao column
 * @method     UsuarioTarefa findOneByCoSeqUsuarioTarefa(int $co_seq_usuario_tarefa) Return the first UsuarioTarefa filtered by the co_seq_usuario_tarefa column
 *
 * @method     array findByCoUsuario(int $co_usuario) Return UsuarioTarefa objects filtered by the co_usuario column
 * @method     array findByCoTarefa(int $co_tarefa) Return UsuarioTarefa objects filtered by the co_tarefa column
 * @method     array findByCoStatus(int $co_status) Return UsuarioTarefa objects filtered by the co_status column
 * @method     array findByDtAtualizacao(string $dt_atualizacao) Return UsuarioTarefa objects filtered by the dt_atualizacao column
 * @method     array findByCoSeqUsuarioTarefa(int $co_seq_usuario_tarefa) Return UsuarioTarefa objects filtered by the co_seq_usuario_tarefa column
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseUsuarioTarefaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseUsuarioTarefaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tarefa', $modelName = 'UsuarioTarefa', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UsuarioTarefaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    UsuarioTarefaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UsuarioTarefaQuery) {
            return $criteria;
        }
        $query = new UsuarioTarefaQuery();
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
     * @return    UsuarioTarefa|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = UsuarioTarefaPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    UsuarioTarefaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(UsuarioTarefaPeer::CO_SEQ_USUARIO_TAREFA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    UsuarioTarefaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(UsuarioTarefaPeer::CO_SEQ_USUARIO_TAREFA, $keys, Criteria::IN);
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
     * @return    UsuarioTarefaQuery The current query, for fluid interface
     */
    public function filterByCoUsuario($coUsuario = null, $comparison = null)
    {
        if (is_array($coUsuario)) {
            $useMinMax = false;
            if (isset($coUsuario['min'])) {
                $this->addUsingAlias(UsuarioTarefaPeer::CO_USUARIO, $coUsuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coUsuario['max'])) {
                $this->addUsingAlias(UsuarioTarefaPeer::CO_USUARIO, $coUsuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(UsuarioTarefaPeer::CO_USUARIO, $coUsuario, $comparison);
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
     * @return    UsuarioTarefaQuery The current query, for fluid interface
     */
    public function filterByCoTarefa($coTarefa = null, $comparison = null)
    {
        if (is_array($coTarefa)) {
            $useMinMax = false;
            if (isset($coTarefa['min'])) {
                $this->addUsingAlias(UsuarioTarefaPeer::CO_TAREFA, $coTarefa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coTarefa['max'])) {
                $this->addUsingAlias(UsuarioTarefaPeer::CO_TAREFA, $coTarefa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(UsuarioTarefaPeer::CO_TAREFA, $coTarefa, $comparison);
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
     * @see       filterByStatus()
     *
     * @param     mixed $coStatus The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsuarioTarefaQuery The current query, for fluid interface
     */
    public function filterByCoStatus($coStatus = null, $comparison = null)
    {
        if (is_array($coStatus)) {
            $useMinMax = false;
            if (isset($coStatus['min'])) {
                $this->addUsingAlias(UsuarioTarefaPeer::CO_STATUS, $coStatus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coStatus['max'])) {
                $this->addUsingAlias(UsuarioTarefaPeer::CO_STATUS, $coStatus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(UsuarioTarefaPeer::CO_STATUS, $coStatus, $comparison);
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
     * @return    UsuarioTarefaQuery The current query, for fluid interface
     */
    public function filterByDtAtualizacao($dtAtualizacao = null, $comparison = null)
    {
        if (is_array($dtAtualizacao)) {
            $useMinMax = false;
            if (isset($dtAtualizacao['min'])) {
                $this->addUsingAlias(UsuarioTarefaPeer::DT_ATUALIZACAO, $dtAtualizacao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtAtualizacao['max'])) {
                $this->addUsingAlias(UsuarioTarefaPeer::DT_ATUALIZACAO, $dtAtualizacao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(UsuarioTarefaPeer::DT_ATUALIZACAO, $dtAtualizacao, $comparison);
    }

    /**
     * Filter the query on the co_seq_usuario_tarefa column
     *
     * Example usage:
     * <code>
     * $query->filterByCoSeqUsuarioTarefa(1234); // WHERE co_seq_usuario_tarefa = 1234
     * $query->filterByCoSeqUsuarioTarefa(array(12, 34)); // WHERE co_seq_usuario_tarefa IN (12, 34)
     * $query->filterByCoSeqUsuarioTarefa(array('min' => 12)); // WHERE co_seq_usuario_tarefa > 12
     * </code>
     *
     * @param     mixed $coSeqUsuarioTarefa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsuarioTarefaQuery The current query, for fluid interface
     */
    public function filterByCoSeqUsuarioTarefa($coSeqUsuarioTarefa = null, $comparison = null)
    {
        if (is_array($coSeqUsuarioTarefa) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(UsuarioTarefaPeer::CO_SEQ_USUARIO_TAREFA, $coSeqUsuarioTarefa, $comparison);
    }

    /**
     * Filter the query by a related Status object
     *
     * @param     Status|PropelCollection $status The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsuarioTarefaQuery The current query, for fluid interface
     */
    public function filterByStatus($status, $comparison = null)
    {
        if ($status instanceof Status) {
            return $this
                ->addUsingAlias(UsuarioTarefaPeer::CO_STATUS, $status->getCoStatus(), $comparison);
        } elseif ($status instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(UsuarioTarefaPeer::CO_STATUS, $status->toKeyValue('PrimaryKey', 'CoStatus'), $comparison);
        } else {
            throw new PropelException('filterByStatus() only accepts arguments of type Status or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Status relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    UsuarioTarefaQuery The current query, for fluid interface
     */
    public function joinStatus($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Status');

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
            $this->addJoinObject($join, 'Status');
        }

        return $this;
    }

    /**
     * Use the Status relation Status object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    StatusQuery A secondary query class using the current class as primary query
     */
    public function useStatusQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinStatus($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Status', 'StatusQuery');
    }

    /**
     * Filter the query by a related Tarefa object
     *
     * @param     Tarefa|PropelCollection $tarefa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsuarioTarefaQuery The current query, for fluid interface
     */
    public function filterByTarefa($tarefa, $comparison = null)
    {
        if ($tarefa instanceof Tarefa) {
            return $this
                ->addUsingAlias(UsuarioTarefaPeer::CO_TAREFA, $tarefa->getCoTarefa(), $comparison);
        } elseif ($tarefa instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(UsuarioTarefaPeer::CO_TAREFA, $tarefa->toKeyValue('PrimaryKey', 'CoTarefa'), $comparison);
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
     * @return    UsuarioTarefaQuery The current query, for fluid interface
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
     * @return    UsuarioTarefaQuery The current query, for fluid interface
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(UsuarioTarefaPeer::CO_USUARIO, $usuario->getCoUsuario(), $comparison);
        } elseif ($usuario instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(UsuarioTarefaPeer::CO_USUARIO, $usuario->toKeyValue('PrimaryKey', 'CoUsuario'), $comparison);
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
     * @return    UsuarioTarefaQuery The current query, for fluid interface
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
     * @param     UsuarioTarefa $usuarioTarefa Object to remove from the list of results
     *
     * @return    UsuarioTarefaQuery The current query, for fluid interface
     */
    public function prune($usuarioTarefa = null)
    {
        if ($usuarioTarefa) {
            $this->addUsingAlias(UsuarioTarefaPeer::CO_SEQ_USUARIO_TAREFA, $usuarioTarefa->getCoSeqUsuarioTarefa(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseUsuarioTarefaQuery