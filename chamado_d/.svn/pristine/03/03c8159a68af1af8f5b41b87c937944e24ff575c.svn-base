<?php


/**
 * Base class that represents a query for the 'perfil' table.
 *
 * 
 *
 * @method     PerfilQuery orderByCoPerfil($order = Criteria::ASC) Order by the co_perfil column
 * @method     PerfilQuery orderByNoPerfil($order = Criteria::ASC) Order by the no_perfil column
 * @method     PerfilQuery orderByDsPerfil($order = Criteria::ASC) Order by the ds_perfil column
 * @method     PerfilQuery orderByStPerfil($order = Criteria::ASC) Order by the st_perfil column
 *
 * @method     PerfilQuery groupByCoPerfil() Group by the co_perfil column
 * @method     PerfilQuery groupByNoPerfil() Group by the no_perfil column
 * @method     PerfilQuery groupByDsPerfil() Group by the ds_perfil column
 * @method     PerfilQuery groupByStPerfil() Group by the st_perfil column
 *
 * @method     PerfilQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PerfilQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PerfilQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PerfilQuery leftJoinPermissao($relationAlias = null) Adds a LEFT JOIN clause to the query using the Permissao relation
 * @method     PerfilQuery rightJoinPermissao($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Permissao relation
 * @method     PerfilQuery innerJoinPermissao($relationAlias = null) Adds a INNER JOIN clause to the query using the Permissao relation
 *
 * @method     PerfilQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method     PerfilQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method     PerfilQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method     Perfil findOne(PropelPDO $con = null) Return the first Perfil matching the query
 * @method     Perfil findOneOrCreate(PropelPDO $con = null) Return the first Perfil matching the query, or a new Perfil object populated from the query conditions when no match is found
 *
 * @method     Perfil findOneByCoPerfil(int $co_perfil) Return the first Perfil filtered by the co_perfil column
 * @method     Perfil findOneByNoPerfil(string $no_perfil) Return the first Perfil filtered by the no_perfil column
 * @method     Perfil findOneByDsPerfil(string $ds_perfil) Return the first Perfil filtered by the ds_perfil column
 * @method     Perfil findOneByStPerfil(boolean $st_perfil) Return the first Perfil filtered by the st_perfil column
 *
 * @method     array findByCoPerfil(int $co_perfil) Return Perfil objects filtered by the co_perfil column
 * @method     array findByNoPerfil(string $no_perfil) Return Perfil objects filtered by the no_perfil column
 * @method     array findByDsPerfil(string $ds_perfil) Return Perfil objects filtered by the ds_perfil column
 * @method     array findByStPerfil(boolean $st_perfil) Return Perfil objects filtered by the st_perfil column
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BasePerfilQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BasePerfilQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tarefa', $modelName = 'Perfil', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PerfilQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    PerfilQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PerfilQuery) {
            return $criteria;
        }
        $query = new PerfilQuery();
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
     * @return    Perfil|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = PerfilPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    PerfilQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(PerfilPeer::CO_PERFIL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    PerfilQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(PerfilPeer::CO_PERFIL, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the co_perfil column
     *
     * Example usage:
     * <code>
     * $query->filterByCoPerfil(1234); // WHERE co_perfil = 1234
     * $query->filterByCoPerfil(array(12, 34)); // WHERE co_perfil IN (12, 34)
     * $query->filterByCoPerfil(array('min' => 12)); // WHERE co_perfil > 12
     * </code>
     *
     * @param     mixed $coPerfil The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PerfilQuery The current query, for fluid interface
     */
    public function filterByCoPerfil($coPerfil = null, $comparison = null)
    {
        if (is_array($coPerfil) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(PerfilPeer::CO_PERFIL, $coPerfil, $comparison);
    }

    /**
     * Filter the query on the no_perfil column
     *
     * Example usage:
     * <code>
     * $query->filterByNoPerfil('fooValue');   // WHERE no_perfil = 'fooValue'
     * $query->filterByNoPerfil('%fooValue%'); // WHERE no_perfil LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noPerfil The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PerfilQuery The current query, for fluid interface
     */
    public function filterByNoPerfil($noPerfil = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noPerfil)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noPerfil)) {
                $noPerfil = str_replace('*', '%', $noPerfil);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(PerfilPeer::NO_PERFIL, $noPerfil, $comparison);
    }

    /**
     * Filter the query on the ds_perfil column
     *
     * Example usage:
     * <code>
     * $query->filterByDsPerfil('fooValue');   // WHERE ds_perfil = 'fooValue'
     * $query->filterByDsPerfil('%fooValue%'); // WHERE ds_perfil LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dsPerfil The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PerfilQuery The current query, for fluid interface
     */
    public function filterByDsPerfil($dsPerfil = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dsPerfil)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dsPerfil)) {
                $dsPerfil = str_replace('*', '%', $dsPerfil);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(PerfilPeer::DS_PERFIL, $dsPerfil, $comparison);
    }

    /**
     * Filter the query on the st_perfil column
     *
     * Example usage:
     * <code>
     * $query->filterByStPerfil(true); // WHERE st_perfil = true
     * $query->filterByStPerfil('yes'); // WHERE st_perfil = true
     * </code>
     *
     * @param     boolean|string $stPerfil The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PerfilQuery The current query, for fluid interface
     */
    public function filterByStPerfil($stPerfil = null, $comparison = null)
    {
        if (is_string($stPerfil)) {
            $st_perfil = in_array(strtolower($stPerfil), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(PerfilPeer::ST_PERFIL, $stPerfil, $comparison);
    }

    /**
     * Filter the query by a related Permissao object
     *
     * @param     Permissao $permissao  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PerfilQuery The current query, for fluid interface
     */
    public function filterByPermissao($permissao, $comparison = null)
    {
        if ($permissao instanceof Permissao) {
            return $this
                ->addUsingAlias(PerfilPeer::CO_PERFIL, $permissao->getCoPerfil(), $comparison);
        } elseif ($permissao instanceof PropelCollection) {
            return $this
                ->usePermissaoQuery()
                ->filterByPrimaryKeys($permissao->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPermissao() only accepts arguments of type Permissao or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Permissao relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    PerfilQuery The current query, for fluid interface
     */
    public function joinPermissao($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Permissao');

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
            $this->addJoinObject($join, 'Permissao');
        }

        return $this;
    }

    /**
     * Use the Permissao relation Permissao object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    PermissaoQuery A secondary query class using the current class as primary query
     */
    public function usePermissaoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPermissao($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Permissao', 'PermissaoQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param     Usuario $usuario  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PerfilQuery The current query, for fluid interface
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(PerfilPeer::CO_PERFIL, $usuario->getCoPerfil(), $comparison);
        } elseif ($usuario instanceof PropelCollection) {
            return $this
                ->useUsuarioQuery()
                ->filterByPrimaryKeys($usuario->getPrimaryKeys())
                ->endUse();
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
     * @return    PerfilQuery The current query, for fluid interface
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
     * @param     Perfil $perfil Object to remove from the list of results
     *
     * @return    PerfilQuery The current query, for fluid interface
     */
    public function prune($perfil = null)
    {
        if ($perfil) {
            $this->addUsingAlias(PerfilPeer::CO_PERFIL, $perfil->getCoPerfil(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BasePerfilQuery