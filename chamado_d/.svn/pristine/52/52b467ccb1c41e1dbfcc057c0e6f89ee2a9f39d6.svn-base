<?php


/**
 * Base class that represents a query for the 'nivel' table.
 *
 * 
 *
 * @method     NivelQuery orderByCoNivel($order = Criteria::ASC) Order by the co_nivel column
 * @method     NivelQuery orderByNoNivel($order = Criteria::ASC) Order by the no_nivel column
 *
 * @method     NivelQuery groupByCoNivel() Group by the co_nivel column
 * @method     NivelQuery groupByNoNivel() Group by the no_nivel column
 *
 * @method     NivelQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NivelQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NivelQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NivelQuery leftJoinTarefa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tarefa relation
 * @method     NivelQuery rightJoinTarefa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tarefa relation
 * @method     NivelQuery innerJoinTarefa($relationAlias = null) Adds a INNER JOIN clause to the query using the Tarefa relation
 *
 * @method     Nivel findOne(PropelPDO $con = null) Return the first Nivel matching the query
 * @method     Nivel findOneOrCreate(PropelPDO $con = null) Return the first Nivel matching the query, or a new Nivel object populated from the query conditions when no match is found
 *
 * @method     Nivel findOneByCoNivel(int $co_nivel) Return the first Nivel filtered by the co_nivel column
 * @method     Nivel findOneByNoNivel(string $no_nivel) Return the first Nivel filtered by the no_nivel column
 *
 * @method     array findByCoNivel(int $co_nivel) Return Nivel objects filtered by the co_nivel column
 * @method     array findByNoNivel(string $no_nivel) Return Nivel objects filtered by the no_nivel column
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseNivelQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseNivelQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tarefa', $modelName = 'Nivel', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new NivelQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    NivelQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof NivelQuery) {
            return $criteria;
        }
        $query = new NivelQuery();
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
     * @return    Nivel|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = NivelPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    NivelQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(NivelPeer::CO_NIVEL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    NivelQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(NivelPeer::CO_NIVEL, $keys, Criteria::IN);
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
     * @return    NivelQuery The current query, for fluid interface
     */
    public function filterByCoNivel($coNivel = null, $comparison = null)
    {
        if (is_array($coNivel) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(NivelPeer::CO_NIVEL, $coNivel, $comparison);
    }

    /**
     * Filter the query on the no_nivel column
     *
     * Example usage:
     * <code>
     * $query->filterByNoNivel('fooValue');   // WHERE no_nivel = 'fooValue'
     * $query->filterByNoNivel('%fooValue%'); // WHERE no_nivel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noNivel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    NivelQuery The current query, for fluid interface
     */
    public function filterByNoNivel($noNivel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noNivel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noNivel)) {
                $noNivel = str_replace('*', '%', $noNivel);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(NivelPeer::NO_NIVEL, $noNivel, $comparison);
    }

    /**
     * Filter the query by a related Tarefa object
     *
     * @param     Tarefa $tarefa  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    NivelQuery The current query, for fluid interface
     */
    public function filterByTarefa($tarefa, $comparison = null)
    {
        if ($tarefa instanceof Tarefa) {
            return $this
                ->addUsingAlias(NivelPeer::CO_NIVEL, $tarefa->getCoNivel(), $comparison);
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
     * @return    NivelQuery The current query, for fluid interface
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
     * @param     Nivel $nivel Object to remove from the list of results
     *
     * @return    NivelQuery The current query, for fluid interface
     */
    public function prune($nivel = null)
    {
        if ($nivel) {
            $this->addUsingAlias(NivelPeer::CO_NIVEL, $nivel->getCoNivel(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseNivelQuery