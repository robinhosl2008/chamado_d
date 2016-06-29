<?php


/**
 * Base class that represents a query for the 'categoria' table.
 *
 * 
 *
 * @method     CategoriaQuery orderByCoCategoria($order = Criteria::ASC) Order by the co_categoria column
 * @method     CategoriaQuery orderByNoCategoria($order = Criteria::ASC) Order by the no_categoria column
 * @method     CategoriaQuery orderByNuOrdem($order = Criteria::ASC) Order by the nu_ordem column
 *
 * @method     CategoriaQuery groupByCoCategoria() Group by the co_categoria column
 * @method     CategoriaQuery groupByNoCategoria() Group by the no_categoria column
 * @method     CategoriaQuery groupByNuOrdem() Group by the nu_ordem column
 *
 * @method     CategoriaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CategoriaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CategoriaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CategoriaQuery leftJoinTarefa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tarefa relation
 * @method     CategoriaQuery rightJoinTarefa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tarefa relation
 * @method     CategoriaQuery innerJoinTarefa($relationAlias = null) Adds a INNER JOIN clause to the query using the Tarefa relation
 *
 * @method     CategoriaQuery leftJoinUsuarioCategoria($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioCategoria relation
 * @method     CategoriaQuery rightJoinUsuarioCategoria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioCategoria relation
 * @method     CategoriaQuery innerJoinUsuarioCategoria($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioCategoria relation
 *
 * @method     Categoria findOne(PropelPDO $con = null) Return the first Categoria matching the query
 * @method     Categoria findOneOrCreate(PropelPDO $con = null) Return the first Categoria matching the query, or a new Categoria object populated from the query conditions when no match is found
 *
 * @method     Categoria findOneByCoCategoria(int $co_categoria) Return the first Categoria filtered by the co_categoria column
 * @method     Categoria findOneByNoCategoria(string $no_categoria) Return the first Categoria filtered by the no_categoria column
 * @method     Categoria findOneByNuOrdem(int $nu_ordem) Return the first Categoria filtered by the nu_ordem column
 *
 * @method     array findByCoCategoria(int $co_categoria) Return Categoria objects filtered by the co_categoria column
 * @method     array findByNoCategoria(string $no_categoria) Return Categoria objects filtered by the no_categoria column
 * @method     array findByNuOrdem(int $nu_ordem) Return Categoria objects filtered by the nu_ordem column
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseCategoriaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseCategoriaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tarefa', $modelName = 'Categoria', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CategoriaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    CategoriaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CategoriaQuery) {
            return $criteria;
        }
        $query = new CategoriaQuery();
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
     * @return    Categoria|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = CategoriaPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    CategoriaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(CategoriaPeer::CO_CATEGORIA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    CategoriaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(CategoriaPeer::CO_CATEGORIA, $keys, Criteria::IN);
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
     * @return    CategoriaQuery The current query, for fluid interface
     */
    public function filterByCoCategoria($coCategoria = null, $comparison = null)
    {
        if (is_array($coCategoria) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(CategoriaPeer::CO_CATEGORIA, $coCategoria, $comparison);
    }

    /**
     * Filter the query on the no_categoria column
     *
     * Example usage:
     * <code>
     * $query->filterByNoCategoria('fooValue');   // WHERE no_categoria = 'fooValue'
     * $query->filterByNoCategoria('%fooValue%'); // WHERE no_categoria LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noCategoria The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CategoriaQuery The current query, for fluid interface
     */
    public function filterByNoCategoria($noCategoria = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noCategoria)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noCategoria)) {
                $noCategoria = str_replace('*', '%', $noCategoria);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CategoriaPeer::NO_CATEGORIA, $noCategoria, $comparison);
    }

    /**
     * Filter the query on the nu_ordem column
     *
     * Example usage:
     * <code>
     * $query->filterByNuOrdem(1234); // WHERE nu_ordem = 1234
     * $query->filterByNuOrdem(array(12, 34)); // WHERE nu_ordem IN (12, 34)
     * $query->filterByNuOrdem(array('min' => 12)); // WHERE nu_ordem > 12
     * </code>
     *
     * @param     mixed $nuOrdem The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CategoriaQuery The current query, for fluid interface
     */
    public function filterByNuOrdem($nuOrdem = null, $comparison = null)
    {
        if (is_array($nuOrdem)) {
            $useMinMax = false;
            if (isset($nuOrdem['min'])) {
                $this->addUsingAlias(CategoriaPeer::NU_ORDEM, $nuOrdem['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nuOrdem['max'])) {
                $this->addUsingAlias(CategoriaPeer::NU_ORDEM, $nuOrdem['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CategoriaPeer::NU_ORDEM, $nuOrdem, $comparison);
    }

    /**
     * Filter the query by a related Tarefa object
     *
     * @param     Tarefa $tarefa  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CategoriaQuery The current query, for fluid interface
     */
    public function filterByTarefa($tarefa, $comparison = null)
    {
        if ($tarefa instanceof Tarefa) {
            return $this
                ->addUsingAlias(CategoriaPeer::CO_CATEGORIA, $tarefa->getCoCategoria(), $comparison);
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
     * @return    CategoriaQuery The current query, for fluid interface
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
     * Filter the query by a related UsuarioCategoria object
     *
     * @param     UsuarioCategoria $usuarioCategoria  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CategoriaQuery The current query, for fluid interface
     */
    public function filterByUsuarioCategoria($usuarioCategoria, $comparison = null)
    {
        if ($usuarioCategoria instanceof UsuarioCategoria) {
            return $this
                ->addUsingAlias(CategoriaPeer::CO_CATEGORIA, $usuarioCategoria->getCoCategoria(), $comparison);
        } elseif ($usuarioCategoria instanceof PropelCollection) {
            return $this
                ->useUsuarioCategoriaQuery()
                ->filterByPrimaryKeys($usuarioCategoria->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByUsuarioCategoria() only accepts arguments of type UsuarioCategoria or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UsuarioCategoria relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CategoriaQuery The current query, for fluid interface
     */
    public function joinUsuarioCategoria($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UsuarioCategoria');

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
            $this->addJoinObject($join, 'UsuarioCategoria');
        }

        return $this;
    }

    /**
     * Use the UsuarioCategoria relation UsuarioCategoria object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    UsuarioCategoriaQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioCategoriaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsuarioCategoria($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UsuarioCategoria', 'UsuarioCategoriaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     Categoria $categoria Object to remove from the list of results
     *
     * @return    CategoriaQuery The current query, for fluid interface
     */
    public function prune($categoria = null)
    {
        if ($categoria) {
            $this->addUsingAlias(CategoriaPeer::CO_CATEGORIA, $categoria->getCoCategoria(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseCategoriaQuery