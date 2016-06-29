<?php


/**
 * Base class that represents a query for the 'menu' table.
 *
 * 
 *
 * @method     MenuQuery orderByCoMenu($order = Criteria::ASC) Order by the co_menu column
 * @method     MenuQuery orderByNoModulo($order = Criteria::ASC) Order by the no_modulo column
 * @method     MenuQuery orderByNoExibicao($order = Criteria::ASC) Order by the no_exibicao column
 * @method     MenuQuery orderByDsTooltip($order = Criteria::ASC) Order by the ds_tooltip column
 * @method     MenuQuery orderByDsUrl($order = Criteria::ASC) Order by the ds_url column
 * @method     MenuQuery orderByNuOrdem($order = Criteria::ASC) Order by the nu_ordem column
 * @method     MenuQuery orderByStAtivo($order = Criteria::ASC) Order by the st_ativo column
 * @method     MenuQuery orderByDtCadastro($order = Criteria::ASC) Order by the dt_cadastro column
 * @method     MenuQuery orderByCoUsuarioCadastro($order = Criteria::ASC) Order by the co_usuario_cadastro column
 * @method     MenuQuery orderByDtAlteracao($order = Criteria::ASC) Order by the dt_alteracao column
 * @method     MenuQuery orderByCoUsuarioAlteracao($order = Criteria::ASC) Order by the co_usuario_alteracao column
 * @method     MenuQuery orderByStNaoExibir($order = Criteria::ASC) Order by the st_nao_exibir column
 * @method     MenuQuery orderByNoIcon($order = Criteria::ASC) Order by the no_icon column
 *
 * @method     MenuQuery groupByCoMenu() Group by the co_menu column
 * @method     MenuQuery groupByNoModulo() Group by the no_modulo column
 * @method     MenuQuery groupByNoExibicao() Group by the no_exibicao column
 * @method     MenuQuery groupByDsTooltip() Group by the ds_tooltip column
 * @method     MenuQuery groupByDsUrl() Group by the ds_url column
 * @method     MenuQuery groupByNuOrdem() Group by the nu_ordem column
 * @method     MenuQuery groupByStAtivo() Group by the st_ativo column
 * @method     MenuQuery groupByDtCadastro() Group by the dt_cadastro column
 * @method     MenuQuery groupByCoUsuarioCadastro() Group by the co_usuario_cadastro column
 * @method     MenuQuery groupByDtAlteracao() Group by the dt_alteracao column
 * @method     MenuQuery groupByCoUsuarioAlteracao() Group by the co_usuario_alteracao column
 * @method     MenuQuery groupByStNaoExibir() Group by the st_nao_exibir column
 * @method     MenuQuery groupByNoIcon() Group by the no_icon column
 *
 * @method     MenuQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     MenuQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     MenuQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     MenuQuery leftJoinModulo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Modulo relation
 * @method     MenuQuery rightJoinModulo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Modulo relation
 * @method     MenuQuery innerJoinModulo($relationAlias = null) Adds a INNER JOIN clause to the query using the Modulo relation
 *
 * @method     Menu findOne(PropelPDO $con = null) Return the first Menu matching the query
 * @method     Menu findOneOrCreate(PropelPDO $con = null) Return the first Menu matching the query, or a new Menu object populated from the query conditions when no match is found
 *
 * @method     Menu findOneByCoMenu(int $co_menu) Return the first Menu filtered by the co_menu column
 * @method     Menu findOneByNoModulo(string $no_modulo) Return the first Menu filtered by the no_modulo column
 * @method     Menu findOneByNoExibicao(string $no_exibicao) Return the first Menu filtered by the no_exibicao column
 * @method     Menu findOneByDsTooltip(string $ds_tooltip) Return the first Menu filtered by the ds_tooltip column
 * @method     Menu findOneByDsUrl(string $ds_url) Return the first Menu filtered by the ds_url column
 * @method     Menu findOneByNuOrdem(int $nu_ordem) Return the first Menu filtered by the nu_ordem column
 * @method     Menu findOneByStAtivo(boolean $st_ativo) Return the first Menu filtered by the st_ativo column
 * @method     Menu findOneByDtCadastro(string $dt_cadastro) Return the first Menu filtered by the dt_cadastro column
 * @method     Menu findOneByCoUsuarioCadastro(int $co_usuario_cadastro) Return the first Menu filtered by the co_usuario_cadastro column
 * @method     Menu findOneByDtAlteracao(string $dt_alteracao) Return the first Menu filtered by the dt_alteracao column
 * @method     Menu findOneByCoUsuarioAlteracao(int $co_usuario_alteracao) Return the first Menu filtered by the co_usuario_alteracao column
 * @method     Menu findOneByStNaoExibir(boolean $st_nao_exibir) Return the first Menu filtered by the st_nao_exibir column
 * @method     Menu findOneByNoIcon(string $no_icon) Return the first Menu filtered by the no_icon column
 *
 * @method     array findByCoMenu(int $co_menu) Return Menu objects filtered by the co_menu column
 * @method     array findByNoModulo(string $no_modulo) Return Menu objects filtered by the no_modulo column
 * @method     array findByNoExibicao(string $no_exibicao) Return Menu objects filtered by the no_exibicao column
 * @method     array findByDsTooltip(string $ds_tooltip) Return Menu objects filtered by the ds_tooltip column
 * @method     array findByDsUrl(string $ds_url) Return Menu objects filtered by the ds_url column
 * @method     array findByNuOrdem(int $nu_ordem) Return Menu objects filtered by the nu_ordem column
 * @method     array findByStAtivo(boolean $st_ativo) Return Menu objects filtered by the st_ativo column
 * @method     array findByDtCadastro(string $dt_cadastro) Return Menu objects filtered by the dt_cadastro column
 * @method     array findByCoUsuarioCadastro(int $co_usuario_cadastro) Return Menu objects filtered by the co_usuario_cadastro column
 * @method     array findByDtAlteracao(string $dt_alteracao) Return Menu objects filtered by the dt_alteracao column
 * @method     array findByCoUsuarioAlteracao(int $co_usuario_alteracao) Return Menu objects filtered by the co_usuario_alteracao column
 * @method     array findByStNaoExibir(boolean $st_nao_exibir) Return Menu objects filtered by the st_nao_exibir column
 * @method     array findByNoIcon(string $no_icon) Return Menu objects filtered by the no_icon column
 *
 * @package    propel.generator.tarefa.om
 */
abstract class BaseMenuQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseMenuQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tarefa', $modelName = 'Menu', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MenuQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    MenuQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MenuQuery) {
            return $criteria;
        }
        $query = new MenuQuery();
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
     * @return    Menu|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = MenuPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    MenuQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(MenuPeer::CO_MENU, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    MenuQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(MenuPeer::CO_MENU, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the co_menu column
     *
     * Example usage:
     * <code>
     * $query->filterByCoMenu(1234); // WHERE co_menu = 1234
     * $query->filterByCoMenu(array(12, 34)); // WHERE co_menu IN (12, 34)
     * $query->filterByCoMenu(array('min' => 12)); // WHERE co_menu > 12
     * </code>
     *
     * @param     mixed $coMenu The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MenuQuery The current query, for fluid interface
     */
    public function filterByCoMenu($coMenu = null, $comparison = null)
    {
        if (is_array($coMenu) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(MenuPeer::CO_MENU, $coMenu, $comparison);
    }

    /**
     * Filter the query on the no_modulo column
     *
     * Example usage:
     * <code>
     * $query->filterByNoModulo('fooValue');   // WHERE no_modulo = 'fooValue'
     * $query->filterByNoModulo('%fooValue%'); // WHERE no_modulo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noModulo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MenuQuery The current query, for fluid interface
     */
    public function filterByNoModulo($noModulo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noModulo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noModulo)) {
                $noModulo = str_replace('*', '%', $noModulo);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MenuPeer::NO_MODULO, $noModulo, $comparison);
    }

    /**
     * Filter the query on the no_exibicao column
     *
     * Example usage:
     * <code>
     * $query->filterByNoExibicao('fooValue');   // WHERE no_exibicao = 'fooValue'
     * $query->filterByNoExibicao('%fooValue%'); // WHERE no_exibicao LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noExibicao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MenuQuery The current query, for fluid interface
     */
    public function filterByNoExibicao($noExibicao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noExibicao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noExibicao)) {
                $noExibicao = str_replace('*', '%', $noExibicao);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MenuPeer::NO_EXIBICAO, $noExibicao, $comparison);
    }

    /**
     * Filter the query on the ds_tooltip column
     *
     * Example usage:
     * <code>
     * $query->filterByDsTooltip('fooValue');   // WHERE ds_tooltip = 'fooValue'
     * $query->filterByDsTooltip('%fooValue%'); // WHERE ds_tooltip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dsTooltip The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MenuQuery The current query, for fluid interface
     */
    public function filterByDsTooltip($dsTooltip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dsTooltip)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dsTooltip)) {
                $dsTooltip = str_replace('*', '%', $dsTooltip);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MenuPeer::DS_TOOLTIP, $dsTooltip, $comparison);
    }

    /**
     * Filter the query on the ds_url column
     *
     * Example usage:
     * <code>
     * $query->filterByDsUrl('fooValue');   // WHERE ds_url = 'fooValue'
     * $query->filterByDsUrl('%fooValue%'); // WHERE ds_url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dsUrl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MenuQuery The current query, for fluid interface
     */
    public function filterByDsUrl($dsUrl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dsUrl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dsUrl)) {
                $dsUrl = str_replace('*', '%', $dsUrl);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MenuPeer::DS_URL, $dsUrl, $comparison);
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
     * @return    MenuQuery The current query, for fluid interface
     */
    public function filterByNuOrdem($nuOrdem = null, $comparison = null)
    {
        if (is_array($nuOrdem)) {
            $useMinMax = false;
            if (isset($nuOrdem['min'])) {
                $this->addUsingAlias(MenuPeer::NU_ORDEM, $nuOrdem['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nuOrdem['max'])) {
                $this->addUsingAlias(MenuPeer::NU_ORDEM, $nuOrdem['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(MenuPeer::NU_ORDEM, $nuOrdem, $comparison);
    }

    /**
     * Filter the query on the st_ativo column
     *
     * Example usage:
     * <code>
     * $query->filterByStAtivo(true); // WHERE st_ativo = true
     * $query->filterByStAtivo('yes'); // WHERE st_ativo = true
     * </code>
     *
     * @param     boolean|string $stAtivo The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MenuQuery The current query, for fluid interface
     */
    public function filterByStAtivo($stAtivo = null, $comparison = null)
    {
        if (is_string($stAtivo)) {
            $st_ativo = in_array(strtolower($stAtivo), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(MenuPeer::ST_ATIVO, $stAtivo, $comparison);
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
     * @return    MenuQuery The current query, for fluid interface
     */
    public function filterByDtCadastro($dtCadastro = null, $comparison = null)
    {
        if (is_array($dtCadastro)) {
            $useMinMax = false;
            if (isset($dtCadastro['min'])) {
                $this->addUsingAlias(MenuPeer::DT_CADASTRO, $dtCadastro['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtCadastro['max'])) {
                $this->addUsingAlias(MenuPeer::DT_CADASTRO, $dtCadastro['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(MenuPeer::DT_CADASTRO, $dtCadastro, $comparison);
    }

    /**
     * Filter the query on the co_usuario_cadastro column
     *
     * Example usage:
     * <code>
     * $query->filterByCoUsuarioCadastro(1234); // WHERE co_usuario_cadastro = 1234
     * $query->filterByCoUsuarioCadastro(array(12, 34)); // WHERE co_usuario_cadastro IN (12, 34)
     * $query->filterByCoUsuarioCadastro(array('min' => 12)); // WHERE co_usuario_cadastro > 12
     * </code>
     *
     * @param     mixed $coUsuarioCadastro The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MenuQuery The current query, for fluid interface
     */
    public function filterByCoUsuarioCadastro($coUsuarioCadastro = null, $comparison = null)
    {
        if (is_array($coUsuarioCadastro)) {
            $useMinMax = false;
            if (isset($coUsuarioCadastro['min'])) {
                $this->addUsingAlias(MenuPeer::CO_USUARIO_CADASTRO, $coUsuarioCadastro['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coUsuarioCadastro['max'])) {
                $this->addUsingAlias(MenuPeer::CO_USUARIO_CADASTRO, $coUsuarioCadastro['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(MenuPeer::CO_USUARIO_CADASTRO, $coUsuarioCadastro, $comparison);
    }

    /**
     * Filter the query on the dt_alteracao column
     *
     * Example usage:
     * <code>
     * $query->filterByDtAlteracao('2011-03-14'); // WHERE dt_alteracao = '2011-03-14'
     * $query->filterByDtAlteracao('now'); // WHERE dt_alteracao = '2011-03-14'
     * $query->filterByDtAlteracao(array('max' => 'yesterday')); // WHERE dt_alteracao > '2011-03-13'
     * </code>
     *
     * @param     mixed $dtAlteracao The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MenuQuery The current query, for fluid interface
     */
    public function filterByDtAlteracao($dtAlteracao = null, $comparison = null)
    {
        if (is_array($dtAlteracao)) {
            $useMinMax = false;
            if (isset($dtAlteracao['min'])) {
                $this->addUsingAlias(MenuPeer::DT_ALTERACAO, $dtAlteracao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtAlteracao['max'])) {
                $this->addUsingAlias(MenuPeer::DT_ALTERACAO, $dtAlteracao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(MenuPeer::DT_ALTERACAO, $dtAlteracao, $comparison);
    }

    /**
     * Filter the query on the co_usuario_alteracao column
     *
     * Example usage:
     * <code>
     * $query->filterByCoUsuarioAlteracao(1234); // WHERE co_usuario_alteracao = 1234
     * $query->filterByCoUsuarioAlteracao(array(12, 34)); // WHERE co_usuario_alteracao IN (12, 34)
     * $query->filterByCoUsuarioAlteracao(array('min' => 12)); // WHERE co_usuario_alteracao > 12
     * </code>
     *
     * @param     mixed $coUsuarioAlteracao The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MenuQuery The current query, for fluid interface
     */
    public function filterByCoUsuarioAlteracao($coUsuarioAlteracao = null, $comparison = null)
    {
        if (is_array($coUsuarioAlteracao)) {
            $useMinMax = false;
            if (isset($coUsuarioAlteracao['min'])) {
                $this->addUsingAlias(MenuPeer::CO_USUARIO_ALTERACAO, $coUsuarioAlteracao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coUsuarioAlteracao['max'])) {
                $this->addUsingAlias(MenuPeer::CO_USUARIO_ALTERACAO, $coUsuarioAlteracao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(MenuPeer::CO_USUARIO_ALTERACAO, $coUsuarioAlteracao, $comparison);
    }

    /**
     * Filter the query on the st_nao_exibir column
     *
     * Example usage:
     * <code>
     * $query->filterByStNaoExibir(true); // WHERE st_nao_exibir = true
     * $query->filterByStNaoExibir('yes'); // WHERE st_nao_exibir = true
     * </code>
     *
     * @param     boolean|string $stNaoExibir The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MenuQuery The current query, for fluid interface
     */
    public function filterByStNaoExibir($stNaoExibir = null, $comparison = null)
    {
        if (is_string($stNaoExibir)) {
            $st_nao_exibir = in_array(strtolower($stNaoExibir), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(MenuPeer::ST_NAO_EXIBIR, $stNaoExibir, $comparison);
    }

    /**
     * Filter the query on the no_icon column
     *
     * Example usage:
     * <code>
     * $query->filterByNoIcon('fooValue');   // WHERE no_icon = 'fooValue'
     * $query->filterByNoIcon('%fooValue%'); // WHERE no_icon LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noIcon The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MenuQuery The current query, for fluid interface
     */
    public function filterByNoIcon($noIcon = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noIcon)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noIcon)) {
                $noIcon = str_replace('*', '%', $noIcon);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MenuPeer::NO_ICON, $noIcon, $comparison);
    }

    /**
     * Filter the query by a related Modulo object
     *
     * @param     Modulo|PropelCollection $modulo The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MenuQuery The current query, for fluid interface
     */
    public function filterByModulo($modulo, $comparison = null)
    {
        if ($modulo instanceof Modulo) {
            return $this
                ->addUsingAlias(MenuPeer::NO_MODULO, $modulo->getNoModulo(), $comparison);
        } elseif ($modulo instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(MenuPeer::NO_MODULO, $modulo->toKeyValue('PrimaryKey', 'NoModulo'), $comparison);
        } else {
            throw new PropelException('filterByModulo() only accepts arguments of type Modulo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Modulo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    MenuQuery The current query, for fluid interface
     */
    public function joinModulo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Modulo');

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
            $this->addJoinObject($join, 'Modulo');
        }

        return $this;
    }

    /**
     * Use the Modulo relation Modulo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    ModuloQuery A secondary query class using the current class as primary query
     */
    public function useModuloQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinModulo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Modulo', 'ModuloQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     Menu $menu Object to remove from the list of results
     *
     * @return    MenuQuery The current query, for fluid interface
     */
    public function prune($menu = null)
    {
        if ($menu) {
            $this->addUsingAlias(MenuPeer::CO_MENU, $menu->getCoMenu(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseMenuQuery