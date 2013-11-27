<?php


/**
 * Base class that represents a query for the 'siga_causa_diferido' table.
 *
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Wed Nov 27 12:15:22 2013
 *
 * @method CausadiferidoQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CausadiferidoQuery orderByCodigo($order = Criteria::ASC) Order by the codigo column
 * @method CausadiferidoQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method CausadiferidoQuery orderByActivo($order = Criteria::ASC) Order by the activo column
 * @method CausadiferidoQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method CausadiferidoQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method CausadiferidoQuery orderByTreeLeft($order = Criteria::ASC) Order by the tree_left column
 * @method CausadiferidoQuery orderByTreeRight($order = Criteria::ASC) Order by the tree_right column
 * @method CausadiferidoQuery orderByTreeLevel($order = Criteria::ASC) Order by the tree_level column
 * @method CausadiferidoQuery orderByTreeScope($order = Criteria::ASC) Order by the tree_scope column
 *
 * @method CausadiferidoQuery groupById() Group by the id column
 * @method CausadiferidoQuery groupByCodigo() Group by the codigo column
 * @method CausadiferidoQuery groupByNombre() Group by the nombre column
 * @method CausadiferidoQuery groupByActivo() Group by the activo column
 * @method CausadiferidoQuery groupByCreatedAt() Group by the created_at column
 * @method CausadiferidoQuery groupByUpdatedAt() Group by the updated_at column
 * @method CausadiferidoQuery groupByTreeLeft() Group by the tree_left column
 * @method CausadiferidoQuery groupByTreeRight() Group by the tree_right column
 * @method CausadiferidoQuery groupByTreeLevel() Group by the tree_level column
 * @method CausadiferidoQuery groupByTreeScope() Group by the tree_scope column
 *
 * @method CausadiferidoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CausadiferidoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CausadiferidoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CausadiferidoQuery leftJoinAgenda($relationAlias = null) Adds a LEFT JOIN clause to the query using the Agenda relation
 * @method CausadiferidoQuery rightJoinAgenda($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Agenda relation
 * @method CausadiferidoQuery innerJoinAgenda($relationAlias = null) Adds a INNER JOIN clause to the query using the Agenda relation
 *
 * @method Causadiferido findOne(PropelPDO $con = null) Return the first Causadiferido matching the query
 * @method Causadiferido findOneOrCreate(PropelPDO $con = null) Return the first Causadiferido matching the query, or a new Causadiferido object populated from the query conditions when no match is found
 *
 * @method Causadiferido findOneById(int $id) Return the first Causadiferido filtered by the id column
 * @method Causadiferido findOneByCodigo(string $codigo) Return the first Causadiferido filtered by the codigo column
 * @method Causadiferido findOneByNombre(string $nombre) Return the first Causadiferido filtered by the nombre column
 * @method Causadiferido findOneByActivo(boolean $activo) Return the first Causadiferido filtered by the activo column
 * @method Causadiferido findOneByCreatedAt(string $created_at) Return the first Causadiferido filtered by the created_at column
 * @method Causadiferido findOneByUpdatedAt(string $updated_at) Return the first Causadiferido filtered by the updated_at column
 * @method Causadiferido findOneByTreeLeft(int $tree_left) Return the first Causadiferido filtered by the tree_left column
 * @method Causadiferido findOneByTreeRight(int $tree_right) Return the first Causadiferido filtered by the tree_right column
 * @method Causadiferido findOneByTreeLevel(int $tree_level) Return the first Causadiferido filtered by the tree_level column
 * @method Causadiferido findOneByTreeScope(int $tree_scope) Return the first Causadiferido filtered by the tree_scope column
 *
 * @method array findById(int $id) Return Causadiferido objects filtered by the id column
 * @method array findByCodigo(string $codigo) Return Causadiferido objects filtered by the codigo column
 * @method array findByNombre(string $nombre) Return Causadiferido objects filtered by the nombre column
 * @method array findByActivo(boolean $activo) Return Causadiferido objects filtered by the activo column
 * @method array findByCreatedAt(string $created_at) Return Causadiferido objects filtered by the created_at column
 * @method array findByUpdatedAt(string $updated_at) Return Causadiferido objects filtered by the updated_at column
 * @method array findByTreeLeft(int $tree_left) Return Causadiferido objects filtered by the tree_left column
 * @method array findByTreeRight(int $tree_right) Return Causadiferido objects filtered by the tree_right column
 * @method array findByTreeLevel(int $tree_level) Return Causadiferido objects filtered by the tree_level column
 * @method array findByTreeScope(int $tree_scope) Return Causadiferido objects filtered by the tree_scope column
 *
 * @package    propel.generator.lib.model.config.om
 */
abstract class BaseCausadiferidoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCausadiferidoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Causadiferido', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CausadiferidoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     CausadiferidoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CausadiferidoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CausadiferidoQuery) {
            return $criteria;
        }
        $query = new CausadiferidoQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Causadiferido|Causadiferido[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CausadiferidoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CausadiferidoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   Causadiferido A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `CODIGO`, `NOMBRE`, `ACTIVO`, `CREATED_AT`, `UPDATED_AT`, `TREE_LEFT`, `TREE_RIGHT`, `TREE_LEVEL`, `TREE_SCOPE` FROM `siga_causa_diferido` WHERE `ID` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Causadiferido();
            $obj->hydrate($row);
            CausadiferidoPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Causadiferido|Causadiferido[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Causadiferido[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CausadiferidoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CausadiferidoPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CausadiferidoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CausadiferidoPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CausadiferidoQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(CausadiferidoPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the codigo column
     *
     * Example usage:
     * <code>
     * $query->filterByCodigo('fooValue');   // WHERE codigo = 'fooValue'
     * $query->filterByCodigo('%fooValue%'); // WHERE codigo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codigo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CausadiferidoQuery The current query, for fluid interface
     */
    public function filterByCodigo($codigo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codigo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codigo)) {
                $codigo = str_replace('*', '%', $codigo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CausadiferidoPeer::CODIGO, $codigo, $comparison);
    }

    /**
     * Filter the query on the nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByNombre('fooValue');   // WHERE nombre = 'fooValue'
     * $query->filterByNombre('%fooValue%'); // WHERE nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CausadiferidoQuery The current query, for fluid interface
     */
    public function filterByNombre($nombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nombre)) {
                $nombre = str_replace('*', '%', $nombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CausadiferidoPeer::NOMBRE, $nombre, $comparison);
    }

    /**
     * Filter the query on the activo column
     *
     * Example usage:
     * <code>
     * $query->filterByActivo(true); // WHERE activo = true
     * $query->filterByActivo('yes'); // WHERE activo = true
     * </code>
     *
     * @param     boolean|string $activo The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CausadiferidoQuery The current query, for fluid interface
     */
    public function filterByActivo($activo = null, $comparison = null)
    {
        if (is_string($activo)) {
            $activo = in_array(strtolower($activo), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CausadiferidoPeer::ACTIVO, $activo, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CausadiferidoQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(CausadiferidoPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(CausadiferidoPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CausadiferidoPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CausadiferidoQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(CausadiferidoPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(CausadiferidoPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CausadiferidoPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query on the tree_left column
     *
     * Example usage:
     * <code>
     * $query->filterByTreeLeft(1234); // WHERE tree_left = 1234
     * $query->filterByTreeLeft(array(12, 34)); // WHERE tree_left IN (12, 34)
     * $query->filterByTreeLeft(array('min' => 12)); // WHERE tree_left > 12
     * </code>
     *
     * @param     mixed $treeLeft The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CausadiferidoQuery The current query, for fluid interface
     */
    public function filterByTreeLeft($treeLeft = null, $comparison = null)
    {
        if (is_array($treeLeft)) {
            $useMinMax = false;
            if (isset($treeLeft['min'])) {
                $this->addUsingAlias(CausadiferidoPeer::TREE_LEFT, $treeLeft['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($treeLeft['max'])) {
                $this->addUsingAlias(CausadiferidoPeer::TREE_LEFT, $treeLeft['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CausadiferidoPeer::TREE_LEFT, $treeLeft, $comparison);
    }

    /**
     * Filter the query on the tree_right column
     *
     * Example usage:
     * <code>
     * $query->filterByTreeRight(1234); // WHERE tree_right = 1234
     * $query->filterByTreeRight(array(12, 34)); // WHERE tree_right IN (12, 34)
     * $query->filterByTreeRight(array('min' => 12)); // WHERE tree_right > 12
     * </code>
     *
     * @param     mixed $treeRight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CausadiferidoQuery The current query, for fluid interface
     */
    public function filterByTreeRight($treeRight = null, $comparison = null)
    {
        if (is_array($treeRight)) {
            $useMinMax = false;
            if (isset($treeRight['min'])) {
                $this->addUsingAlias(CausadiferidoPeer::TREE_RIGHT, $treeRight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($treeRight['max'])) {
                $this->addUsingAlias(CausadiferidoPeer::TREE_RIGHT, $treeRight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CausadiferidoPeer::TREE_RIGHT, $treeRight, $comparison);
    }

    /**
     * Filter the query on the tree_level column
     *
     * Example usage:
     * <code>
     * $query->filterByTreeLevel(1234); // WHERE tree_level = 1234
     * $query->filterByTreeLevel(array(12, 34)); // WHERE tree_level IN (12, 34)
     * $query->filterByTreeLevel(array('min' => 12)); // WHERE tree_level > 12
     * </code>
     *
     * @param     mixed $treeLevel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CausadiferidoQuery The current query, for fluid interface
     */
    public function filterByTreeLevel($treeLevel = null, $comparison = null)
    {
        if (is_array($treeLevel)) {
            $useMinMax = false;
            if (isset($treeLevel['min'])) {
                $this->addUsingAlias(CausadiferidoPeer::TREE_LEVEL, $treeLevel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($treeLevel['max'])) {
                $this->addUsingAlias(CausadiferidoPeer::TREE_LEVEL, $treeLevel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CausadiferidoPeer::TREE_LEVEL, $treeLevel, $comparison);
    }

    /**
     * Filter the query on the tree_scope column
     *
     * Example usage:
     * <code>
     * $query->filterByTreeScope(1234); // WHERE tree_scope = 1234
     * $query->filterByTreeScope(array(12, 34)); // WHERE tree_scope IN (12, 34)
     * $query->filterByTreeScope(array('min' => 12)); // WHERE tree_scope > 12
     * </code>
     *
     * @param     mixed $treeScope The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CausadiferidoQuery The current query, for fluid interface
     */
    public function filterByTreeScope($treeScope = null, $comparison = null)
    {
        if (is_array($treeScope)) {
            $useMinMax = false;
            if (isset($treeScope['min'])) {
                $this->addUsingAlias(CausadiferidoPeer::TREE_SCOPE, $treeScope['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($treeScope['max'])) {
                $this->addUsingAlias(CausadiferidoPeer::TREE_SCOPE, $treeScope['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CausadiferidoPeer::TREE_SCOPE, $treeScope, $comparison);
    }

    /**
     * Filter the query by a related Agenda object
     *
     * @param   Agenda|PropelObjectCollection $agenda  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   CausadiferidoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByAgenda($agenda, $comparison = null)
    {
        if ($agenda instanceof Agenda) {
            return $this
                ->addUsingAlias(CausadiferidoPeer::ID, $agenda->getCausaDiferidoId(), $comparison);
        } elseif ($agenda instanceof PropelObjectCollection) {
            return $this
                ->useAgendaQuery()
                ->filterByPrimaryKeys($agenda->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAgenda() only accepts arguments of type Agenda or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Agenda relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CausadiferidoQuery The current query, for fluid interface
     */
    public function joinAgenda($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Agenda');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Agenda');
        }

        return $this;
    }

    /**
     * Use the Agenda relation Agenda object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AgendaQuery A secondary query class using the current class as primary query
     */
    public function useAgendaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinAgenda($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Agenda', 'AgendaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Causadiferido $causadiferido Object to remove from the list of results
     *
     * @return CausadiferidoQuery The current query, for fluid interface
     */
    public function prune($causadiferido = null)
    {
        if ($causadiferido) {
            $this->addUsingAlias(CausadiferidoPeer::ID, $causadiferido->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    // nested_set behavior

    /**
     * Filter the query to restrict the result to root objects
     *
     * @return    CausadiferidoQuery The current query, for fluid interface
     */
    public function treeRoots()
    {
        return $this->addUsingAlias(CausadiferidoPeer::LEFT_COL, 1, Criteria::EQUAL);
    }

    /**
     * Returns the objects in a certain tree, from the tree scope
     *
     * @param     int $scope		Scope to determine which objects node to return
     *
     * @return    CausadiferidoQuery The current query, for fluid interface
     */
    public function inTree($scope = null)
    {
        return $this->addUsingAlias(CausadiferidoPeer::SCOPE_COL, $scope, Criteria::EQUAL);
    }

    /**
     * Filter the query to restrict the result to descendants of an object
     *
     * @param     Causadiferido $causadiferido The object to use for descendant search
     *
     * @return    CausadiferidoQuery The current query, for fluid interface
     */
    public function descendantsOf($causadiferido)
    {
        return $this
            ->inTree($causadiferido->getScopeValue())
            ->addUsingAlias(CausadiferidoPeer::LEFT_COL, $causadiferido->getLeftValue(), Criteria::GREATER_THAN)
            ->addUsingAlias(CausadiferidoPeer::LEFT_COL, $causadiferido->getRightValue(), Criteria::LESS_THAN);
    }

    /**
     * Filter the query to restrict the result to the branch of an object.
     * Same as descendantsOf(), except that it includes the object passed as parameter in the result
     *
     * @param     Causadiferido $causadiferido The object to use for branch search
     *
     * @return    CausadiferidoQuery The current query, for fluid interface
     */
    public function branchOf($causadiferido)
    {
        return $this
            ->inTree($causadiferido->getScopeValue())
            ->addUsingAlias(CausadiferidoPeer::LEFT_COL, $causadiferido->getLeftValue(), Criteria::GREATER_EQUAL)
            ->addUsingAlias(CausadiferidoPeer::LEFT_COL, $causadiferido->getRightValue(), Criteria::LESS_EQUAL);
    }

    /**
     * Filter the query to restrict the result to children of an object
     *
     * @param     Causadiferido $causadiferido The object to use for child search
     *
     * @return    CausadiferidoQuery The current query, for fluid interface
     */
    public function childrenOf($causadiferido)
    {
        return $this
            ->descendantsOf($causadiferido)
            ->addUsingAlias(CausadiferidoPeer::LEVEL_COL, $causadiferido->getLevel() + 1, Criteria::EQUAL);
    }

    /**
     * Filter the query to restrict the result to siblings of an object.
     * The result does not include the object passed as parameter.
     *
     * @param     Causadiferido $causadiferido The object to use for sibling search
     * @param      PropelPDO $con Connection to use.
     *
     * @return    CausadiferidoQuery The current query, for fluid interface
     */
    public function siblingsOf($causadiferido, PropelPDO $con = null)
    {
        if ($causadiferido->isRoot()) {
            return $this->
                add(CausadiferidoPeer::LEVEL_COL, '1<>1', Criteria::CUSTOM);
        } else {
            return $this
                ->childrenOf($causadiferido->getParent($con))
                ->prune($causadiferido);
        }
    }

    /**
     * Filter the query to restrict the result to ancestors of an object
     *
     * @param     Causadiferido $causadiferido The object to use for ancestors search
     *
     * @return    CausadiferidoQuery The current query, for fluid interface
     */
    public function ancestorsOf($causadiferido)
    {
        return $this
            ->inTree($causadiferido->getScopeValue())
            ->addUsingAlias(CausadiferidoPeer::LEFT_COL, $causadiferido->getLeftValue(), Criteria::LESS_THAN)
            ->addUsingAlias(CausadiferidoPeer::RIGHT_COL, $causadiferido->getRightValue(), Criteria::GREATER_THAN);
    }

    /**
     * Filter the query to restrict the result to roots of an object.
     * Same as ancestorsOf(), except that it includes the object passed as parameter in the result
     *
     * @param     Causadiferido $causadiferido The object to use for roots search
     *
     * @return    CausadiferidoQuery The current query, for fluid interface
     */
    public function rootsOf($causadiferido)
    {
        return $this
            ->inTree($causadiferido->getScopeValue())
            ->addUsingAlias(CausadiferidoPeer::LEFT_COL, $causadiferido->getLeftValue(), Criteria::LESS_EQUAL)
            ->addUsingAlias(CausadiferidoPeer::RIGHT_COL, $causadiferido->getRightValue(), Criteria::GREATER_EQUAL);
    }

    /**
     * Order the result by branch, i.e. natural tree order
     *
     * @param     bool $reverse if true, reverses the order
     *
     * @return    CausadiferidoQuery The current query, for fluid interface
     */
    public function orderByBranch($reverse = false)
    {
        if ($reverse) {
            return $this
                ->addDescendingOrderByColumn(CausadiferidoPeer::LEFT_COL);
        } else {
            return $this
                ->addAscendingOrderByColumn(CausadiferidoPeer::LEFT_COL);
        }
    }

    /**
     * Order the result by level, the closer to the root first
     *
     * @param     bool $reverse if true, reverses the order
     *
     * @return    CausadiferidoQuery The current query, for fluid interface
     */
    public function orderByLevel($reverse = false)
    {
        if ($reverse) {
            return $this
                ->addAscendingOrderByColumn(CausadiferidoPeer::RIGHT_COL);
        } else {
            return $this
                ->addDescendingOrderByColumn(CausadiferidoPeer::RIGHT_COL);
        }
    }

    /**
     * Returns a root node for the tree
     *
     * @param      int $scope		Scope to determine which root node to return
     * @param      PropelPDO $con	Connection to use.
     *
     * @return     Causadiferido The tree root object
     */
    public function findRoot($scope = null, $con = null)
    {
        return $this
            ->addUsingAlias(CausadiferidoPeer::LEFT_COL, 1, Criteria::EQUAL)
            ->inTree($scope)
            ->findOne($con);
    }

    /**
     * Returns the root objects for all trees.
     *
     * @param      PropelPDO $con	Connection to use.
     *
     * @return    mixed the list of results, formatted by the current formatter
     */
    public function findRoots($con = null)
    {
        return $this
            ->treeRoots()
            ->find($con);
    }

    /**
     * Returns a tree of objects
     *
     * @param      int $scope		Scope to determine which tree node to return
     * @param      PropelPDO $con	Connection to use.
     *
     * @return     mixed the list of results, formatted by the current formatter
     */
    public function findTree($scope = null, $con = null)
    {
        return $this
            ->inTree($scope)
            ->orderByBranch()
            ->find($con);
    }

}
