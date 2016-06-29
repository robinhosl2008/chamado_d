<?php


/**
 * Base class that represents a query for the 'usuario_orgao' table.
 *
 * 
 *
 * @method     UsuarioOrgaoQuery orderByCoUsuario($order = Criteria::ASC) Order by the co_usuario column
 * @method     UsuarioOrgaoQuery orderByCoOrgao($order = Criteria::ASC) Order by the co_orgao column
 *
 * @method     UsuarioOrgaoQuery groupByCoUsuario() Group by the co_usuario column
 * @method     UsuarioOrgaoQuery groupByCoOrgao() Group by the co_orgao column
 *
 * @method     UsuarioOrgaoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UsuarioOrgaoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UsuarioOrgaoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UsuarioOrgaoQuery leftJoinOrgao($relationAlias = null) Adds a LEFT JOIN clause to the query using the Orgao relation
 * @method     UsuarioOrgaoQuery rightJoinOrgao($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Orgao relation
 * @method     UsuarioOrgaoQuery innerJoinOrgao($relationAlias = null) Adds a INNER JOIN clause to the query using the Orgao relation
 *
 * @method     UsuarioOrgaoQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method     UsuarioOrgaoQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method     UsuarioOrgaoQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method     UsuarioOrgao findOne(PropelPDO $con = null) Return the first UsuarioOrgao matching the query
 * @method     UsuarioOrgao findOneOrCreate(PropelPDO $con = null) Return the first UsuarioOrgao matching the query, or a new UsuarioOrgao object populated from the query conditions when no match is found
 *
 * @method     UsuarioOrgao findOneByCoUsuario(int $co_usuario) Return the first UsuarioOrgao filtered by the co_usuario column
 * @method     UsuarioOrgao findOneByCoOrgao(int $co_orgao) Return the first UsuarioOrgao filtered by the co_orgao column
 *
 * @method     array findByCoUsuario(int $co_usuario) Return UsuarioOrgao objects filtered by the co_usuario column
 * @method     array findByCoOrgao(int $co_orgao) Return UsuarioOrgao objects filtered by the co_orgao column
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseUsuarioOrgaoQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseUsuarioOrgaoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tarefa', $modelName = 'UsuarioOrgao', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UsuarioOrgaoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    UsuarioOrgaoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UsuarioOrgaoQuery) {
            return $criteria;
        }
        $query = new UsuarioOrgaoQuery();
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
     * <code>
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     * @param     array[$co_usuario, $co_orgao] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    UsuarioOrgao|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = UsuarioOrgaoPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
     * @return    UsuarioOrgaoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(UsuarioOrgaoPeer::CO_USUARIO, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(UsuarioOrgaoPeer::CO_ORGAO, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    UsuarioOrgaoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(UsuarioOrgaoPeer::CO_USUARIO, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(UsuarioOrgaoPeer::CO_ORGAO, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return    UsuarioOrgaoQuery The current query, for fluid interface
     */
    public function filterByCoUsuario($coUsuario = null, $comparison = null)
    {
        if (is_array($coUsuario) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(UsuarioOrgaoPeer::CO_USUARIO, $coUsuario, $comparison);
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
     * @return    UsuarioOrgaoQuery The current query, for fluid interface
     */
    public function filterByCoOrgao($coOrgao = null, $comparison = null)
    {
        if (is_array($coOrgao) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(UsuarioOrgaoPeer::CO_ORGAO, $coOrgao, $comparison);
    }

    /**
     * Filter the query by a related Orgao object
     *
     * @param     Orgao|PropelCollection $orgao The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsuarioOrgaoQuery The current query, for fluid interface
     */
    public function filterByOrgao($orgao, $comparison = null)
    {
        if ($orgao instanceof Orgao) {
            return $this
                ->addUsingAlias(UsuarioOrgaoPeer::CO_ORGAO, $orgao->getCoOrgao(), $comparison);
        } elseif ($orgao instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(UsuarioOrgaoPeer::CO_ORGAO, $orgao->toKeyValue('PrimaryKey', 'CoOrgao'), $comparison);
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
     * @return    UsuarioOrgaoQuery The current query, for fluid interface
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
     * @return    UsuarioOrgaoQuery The current query, for fluid interface
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(UsuarioOrgaoPeer::CO_USUARIO, $usuario->getCoUsuario(), $comparison);
        } elseif ($usuario instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(UsuarioOrgaoPeer::CO_USUARIO, $usuario->toKeyValue('PrimaryKey', 'CoUsuario'), $comparison);
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
     * @return    UsuarioOrgaoQuery The current query, for fluid interface
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
     * @param     UsuarioOrgao $usuarioOrgao Object to remove from the list of results
     *
     * @return    UsuarioOrgaoQuery The current query, for fluid interface
     */
    public function prune($usuarioOrgao = null)
    {
        if ($usuarioOrgao) {
            $this->addCond('pruneCond0', $this->getAliasedColName(UsuarioOrgaoPeer::CO_USUARIO), $usuarioOrgao->getCoUsuario(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(UsuarioOrgaoPeer::CO_ORGAO), $usuarioOrgao->getCoOrgao(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseUsuarioOrgaoQuery