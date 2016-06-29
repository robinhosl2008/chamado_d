<?php


/**
 * Base class that represents a query for the 'usuario_categoria' table.
 *
 * 
 *
 * @method     UsuarioCategoriaQuery orderByCoUsuario($order = Criteria::ASC) Order by the co_usuario column
 * @method     UsuarioCategoriaQuery orderByCoCategoria($order = Criteria::ASC) Order by the co_categoria column
 *
 * @method     UsuarioCategoriaQuery groupByCoUsuario() Group by the co_usuario column
 * @method     UsuarioCategoriaQuery groupByCoCategoria() Group by the co_categoria column
 *
 * @method     UsuarioCategoriaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UsuarioCategoriaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UsuarioCategoriaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UsuarioCategoriaQuery leftJoinCategoria($relationAlias = null) Adds a LEFT JOIN clause to the query using the Categoria relation
 * @method     UsuarioCategoriaQuery rightJoinCategoria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Categoria relation
 * @method     UsuarioCategoriaQuery innerJoinCategoria($relationAlias = null) Adds a INNER JOIN clause to the query using the Categoria relation
 *
 * @method     UsuarioCategoriaQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method     UsuarioCategoriaQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method     UsuarioCategoriaQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method     UsuarioCategoria findOne(PropelPDO $con = null) Return the first UsuarioCategoria matching the query
 * @method     UsuarioCategoria findOneOrCreate(PropelPDO $con = null) Return the first UsuarioCategoria matching the query, or a new UsuarioCategoria object populated from the query conditions when no match is found
 *
 * @method     UsuarioCategoria findOneByCoUsuario(int $co_usuario) Return the first UsuarioCategoria filtered by the co_usuario column
 * @method     UsuarioCategoria findOneByCoCategoria(int $co_categoria) Return the first UsuarioCategoria filtered by the co_categoria column
 *
 * @method     array findByCoUsuario(int $co_usuario) Return UsuarioCategoria objects filtered by the co_usuario column
 * @method     array findByCoCategoria(int $co_categoria) Return UsuarioCategoria objects filtered by the co_categoria column
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseUsuarioCategoriaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseUsuarioCategoriaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tarefa', $modelName = 'UsuarioCategoria', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UsuarioCategoriaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    UsuarioCategoriaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UsuarioCategoriaQuery) {
            return $criteria;
        }
        $query = new UsuarioCategoriaQuery();
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
     * @param     array[$co_usuario, $co_categoria] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    UsuarioCategoria|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = UsuarioCategoriaPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    UsuarioCategoriaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(UsuarioCategoriaPeer::CO_USUARIO, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(UsuarioCategoriaPeer::CO_CATEGORIA, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    UsuarioCategoriaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(UsuarioCategoriaPeer::CO_USUARIO, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(UsuarioCategoriaPeer::CO_CATEGORIA, $key[1], Criteria::EQUAL);
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
     * @return    UsuarioCategoriaQuery The current query, for fluid interface
     */
    public function filterByCoUsuario($coUsuario = null, $comparison = null)
    {
        if (is_array($coUsuario) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(UsuarioCategoriaPeer::CO_USUARIO, $coUsuario, $comparison);
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
     * @see       filterByCategoria()
     *
     * @param     mixed $coCategoria The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsuarioCategoriaQuery The current query, for fluid interface
     */
    public function filterByCoCategoria($coCategoria = null, $comparison = null)
    {
        if (is_array($coCategoria) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(UsuarioCategoriaPeer::CO_CATEGORIA, $coCategoria, $comparison);
    }

    /**
     * Filter the query by a related Categoria object
     *
     * @param     Categoria|PropelCollection $categoria The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsuarioCategoriaQuery The current query, for fluid interface
     */
    public function filterByCategoria($categoria, $comparison = null)
    {
        if ($categoria instanceof Categoria) {
            return $this
                ->addUsingAlias(UsuarioCategoriaPeer::CO_CATEGORIA, $categoria->getCoCategoria(), $comparison);
        } elseif ($categoria instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(UsuarioCategoriaPeer::CO_CATEGORIA, $categoria->toKeyValue('PrimaryKey', 'CoCategoria'), $comparison);
        } else {
            throw new PropelException('filterByCategoria() only accepts arguments of type Categoria or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Categoria relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    UsuarioCategoriaQuery The current query, for fluid interface
     */
    public function joinCategoria($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Categoria');

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
            $this->addJoinObject($join, 'Categoria');
        }

        return $this;
    }

    /**
     * Use the Categoria relation Categoria object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CategoriaQuery A secondary query class using the current class as primary query
     */
    public function useCategoriaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCategoria($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Categoria', 'CategoriaQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param     Usuario|PropelCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    UsuarioCategoriaQuery The current query, for fluid interface
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(UsuarioCategoriaPeer::CO_USUARIO, $usuario->getCoUsuario(), $comparison);
        } elseif ($usuario instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(UsuarioCategoriaPeer::CO_USUARIO, $usuario->toKeyValue('PrimaryKey', 'CoUsuario'), $comparison);
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
     * @return    UsuarioCategoriaQuery The current query, for fluid interface
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
     * @param     UsuarioCategoria $usuarioCategoria Object to remove from the list of results
     *
     * @return    UsuarioCategoriaQuery The current query, for fluid interface
     */
    public function prune($usuarioCategoria = null)
    {
        if ($usuarioCategoria) {
            $this->addCond('pruneCond0', $this->getAliasedColName(UsuarioCategoriaPeer::CO_USUARIO), $usuarioCategoria->getCoUsuario(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(UsuarioCategoriaPeer::CO_CATEGORIA), $usuarioCategoria->getCoCategoria(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseUsuarioCategoriaQuery