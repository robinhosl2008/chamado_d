<?php


/**
 * Base class that represents a query for the 'ambiente' table.
 *
 * 
 *
 * @method     AmbienteQuery orderByCoAmbiente($order = Criteria::ASC) Order by the co_ambiente column
 * @method     AmbienteQuery orderByNoAmbiente($order = Criteria::ASC) Order by the no_ambiente column
 *
 * @method     AmbienteQuery groupByCoAmbiente() Group by the co_ambiente column
 * @method     AmbienteQuery groupByNoAmbiente() Group by the no_ambiente column
 *
 * @method     AmbienteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AmbienteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AmbienteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AmbienteQuery leftJoinRlProjetoVersaoAmb($relationAlias = null) Adds a LEFT JOIN clause to the query using the RlProjetoVersaoAmb relation
 * @method     AmbienteQuery rightJoinRlProjetoVersaoAmb($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RlProjetoVersaoAmb relation
 * @method     AmbienteQuery innerJoinRlProjetoVersaoAmb($relationAlias = null) Adds a INNER JOIN clause to the query using the RlProjetoVersaoAmb relation
 *
 * @method     Ambiente findOne(PropelPDO $con = null) Return the first Ambiente matching the query
 * @method     Ambiente findOneOrCreate(PropelPDO $con = null) Return the first Ambiente matching the query, or a new Ambiente object populated from the query conditions when no match is found
 *
 * @method     Ambiente findOneByCoAmbiente(int $co_ambiente) Return the first Ambiente filtered by the co_ambiente column
 * @method     Ambiente findOneByNoAmbiente(string $no_ambiente) Return the first Ambiente filtered by the no_ambiente column
 *
 * @method     array findByCoAmbiente(int $co_ambiente) Return Ambiente objects filtered by the co_ambiente column
 * @method     array findByNoAmbiente(string $no_ambiente) Return Ambiente objects filtered by the no_ambiente column
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseAmbienteQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseAmbienteQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tarefa', $modelName = 'Ambiente', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AmbienteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    AmbienteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AmbienteQuery) {
            return $criteria;
        }
        $query = new AmbienteQuery();
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
     * @return    Ambiente|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = AmbientePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    AmbienteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(AmbientePeer::CO_AMBIENTE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    AmbienteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(AmbientePeer::CO_AMBIENTE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the co_ambiente column
     *
     * Example usage:
     * <code>
     * $query->filterByCoAmbiente(1234); // WHERE co_ambiente = 1234
     * $query->filterByCoAmbiente(array(12, 34)); // WHERE co_ambiente IN (12, 34)
     * $query->filterByCoAmbiente(array('min' => 12)); // WHERE co_ambiente > 12
     * </code>
     *
     * @param     mixed $coAmbiente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AmbienteQuery The current query, for fluid interface
     */
    public function filterByCoAmbiente($coAmbiente = null, $comparison = null)
    {
        if (is_array($coAmbiente) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(AmbientePeer::CO_AMBIENTE, $coAmbiente, $comparison);
    }

    /**
     * Filter the query on the no_ambiente column
     *
     * Example usage:
     * <code>
     * $query->filterByNoAmbiente('fooValue');   // WHERE no_ambiente = 'fooValue'
     * $query->filterByNoAmbiente('%fooValue%'); // WHERE no_ambiente LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noAmbiente The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AmbienteQuery The current query, for fluid interface
     */
    public function filterByNoAmbiente($noAmbiente = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noAmbiente)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noAmbiente)) {
                $noAmbiente = str_replace('*', '%', $noAmbiente);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AmbientePeer::NO_AMBIENTE, $noAmbiente, $comparison);
    }

    /**
     * Filter the query by a related RlProjetoVersaoAmb object
     *
     * @param     RlProjetoVersaoAmb $rlProjetoVersaoAmb  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AmbienteQuery The current query, for fluid interface
     */
    public function filterByRlProjetoVersaoAmb($rlProjetoVersaoAmb, $comparison = null)
    {
        if ($rlProjetoVersaoAmb instanceof RlProjetoVersaoAmb) {
            return $this
                ->addUsingAlias(AmbientePeer::CO_AMBIENTE, $rlProjetoVersaoAmb->getCoAmbiente(), $comparison);
        } elseif ($rlProjetoVersaoAmb instanceof PropelCollection) {
            return $this
                ->useRlProjetoVersaoAmbQuery()
                ->filterByPrimaryKeys($rlProjetoVersaoAmb->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRlProjetoVersaoAmb() only accepts arguments of type RlProjetoVersaoAmb or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RlProjetoVersaoAmb relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    AmbienteQuery The current query, for fluid interface
     */
    public function joinRlProjetoVersaoAmb($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RlProjetoVersaoAmb');

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
            $this->addJoinObject($join, 'RlProjetoVersaoAmb');
        }

        return $this;
    }

    /**
     * Use the RlProjetoVersaoAmb relation RlProjetoVersaoAmb object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    RlProjetoVersaoAmbQuery A secondary query class using the current class as primary query
     */
    public function useRlProjetoVersaoAmbQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRlProjetoVersaoAmb($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RlProjetoVersaoAmb', 'RlProjetoVersaoAmbQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     Ambiente $ambiente Object to remove from the list of results
     *
     * @return    AmbienteQuery The current query, for fluid interface
     */
    public function prune($ambiente = null)
    {
        if ($ambiente) {
            $this->addUsingAlias(AmbientePeer::CO_AMBIENTE, $ambiente->getCoAmbiente(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseAmbienteQuery