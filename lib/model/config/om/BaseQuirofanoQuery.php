<?php


/**
 * Base class that represents a query for the 'siga_quirofano' table.
 *
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Fri Oct 11 11:37:52 2013
 *
 * @method QuirofanoQuery orderById($order = Criteria::ASC) Order by the id column
 * @method QuirofanoQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method QuirofanoQuery orderByActivo($order = Criteria::ASC) Order by the activo column
 * @method QuirofanoQuery orderByAmbulatorio($order = Criteria::ASC) Order by the ambulatorio column
 * @method QuirofanoQuery orderByPermisos($order = Criteria::ASC) Order by the permisos column
 * @method QuirofanoQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method QuirofanoQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method QuirofanoQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 *
 * @method QuirofanoQuery groupById() Group by the id column
 * @method QuirofanoQuery groupByNombre() Group by the nombre column
 * @method QuirofanoQuery groupByActivo() Group by the activo column
 * @method QuirofanoQuery groupByAmbulatorio() Group by the ambulatorio column
 * @method QuirofanoQuery groupByPermisos() Group by the permisos column
 * @method QuirofanoQuery groupByCreatedAt() Group by the created_at column
 * @method QuirofanoQuery groupByUpdatedAt() Group by the updated_at column
 * @method QuirofanoQuery groupBySlug() Group by the slug column
 *
 * @method QuirofanoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QuirofanoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QuirofanoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QuirofanoQuery leftJoinAgenda($relationAlias = null) Adds a LEFT JOIN clause to the query using the Agenda relation
 * @method QuirofanoQuery rightJoinAgenda($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Agenda relation
 * @method QuirofanoQuery innerJoinAgenda($relationAlias = null) Adds a INNER JOIN clause to the query using the Agenda relation
 *
 * @method QuirofanoQuery leftJoinSalaquirurgica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Salaquirurgica relation
 * @method QuirofanoQuery rightJoinSalaquirurgica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Salaquirurgica relation
 * @method QuirofanoQuery innerJoinSalaquirurgica($relationAlias = null) Adds a INNER JOIN clause to the query using the Salaquirurgica relation
 *
 * @method Quirofano findOne(PropelPDO $con = null) Return the first Quirofano matching the query
 * @method Quirofano findOneOrCreate(PropelPDO $con = null) Return the first Quirofano matching the query, or a new Quirofano object populated from the query conditions when no match is found
 *
 * @method Quirofano findOneById(int $id) Return the first Quirofano filtered by the id column
 * @method Quirofano findOneByNombre(string $nombre) Return the first Quirofano filtered by the nombre column
 * @method Quirofano findOneByActivo(boolean $activo) Return the first Quirofano filtered by the activo column
 * @method Quirofano findOneByAmbulatorio(boolean $ambulatorio) Return the first Quirofano filtered by the ambulatorio column
 * @method Quirofano findOneByPermisos( $permisos) Return the first Quirofano filtered by the permisos column
 * @method Quirofano findOneByCreatedAt(string $created_at) Return the first Quirofano filtered by the created_at column
 * @method Quirofano findOneByUpdatedAt(string $updated_at) Return the first Quirofano filtered by the updated_at column
 * @method Quirofano findOneBySlug(string $slug) Return the first Quirofano filtered by the slug column
 *
 * @method array findById(int $id) Return Quirofano objects filtered by the id column
 * @method array findByNombre(string $nombre) Return Quirofano objects filtered by the nombre column
 * @method array findByActivo(boolean $activo) Return Quirofano objects filtered by the activo column
 * @method array findByAmbulatorio(boolean $ambulatorio) Return Quirofano objects filtered by the ambulatorio column
 * @method array findByPermisos( $permisos) Return Quirofano objects filtered by the permisos column
 * @method array findByCreatedAt(string $created_at) Return Quirofano objects filtered by the created_at column
 * @method array findByUpdatedAt(string $updated_at) Return Quirofano objects filtered by the updated_at column
 * @method array findBySlug(string $slug) Return Quirofano objects filtered by the slug column
 *
 * @package    propel.generator.lib.model.config.om
 */
abstract class BaseQuirofanoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQuirofanoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Quirofano', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QuirofanoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     QuirofanoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QuirofanoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QuirofanoQuery) {
            return $criteria;
        }
        $query = new QuirofanoQuery();
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
     * @return   Quirofano|Quirofano[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QuirofanoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QuirofanoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Quirofano A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `NOMBRE`, `ACTIVO`, `AMBULATORIO`, `PERMISOS`, `CREATED_AT`, `UPDATED_AT`, `SLUG` FROM `siga_quirofano` WHERE `ID` = :p0';
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
            $obj = new Quirofano();
            $obj->hydrate($row);
            QuirofanoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Quirofano|Quirofano[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Quirofano[]|mixed the list of results, formatted by the current formatter
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
     * @return QuirofanoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QuirofanoPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QuirofanoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QuirofanoPeer::ID, $keys, Criteria::IN);
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
     * @return QuirofanoQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(QuirofanoPeer::ID, $id, $comparison);
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
     * @return QuirofanoQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QuirofanoPeer::NOMBRE, $nombre, $comparison);
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
     * @return QuirofanoQuery The current query, for fluid interface
     */
    public function filterByActivo($activo = null, $comparison = null)
    {
        if (is_string($activo)) {
            $activo = in_array(strtolower($activo), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(QuirofanoPeer::ACTIVO, $activo, $comparison);
    }

    /**
     * Filter the query on the ambulatorio column
     *
     * Example usage:
     * <code>
     * $query->filterByAmbulatorio(true); // WHERE ambulatorio = true
     * $query->filterByAmbulatorio('yes'); // WHERE ambulatorio = true
     * </code>
     *
     * @param     boolean|string $ambulatorio The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QuirofanoQuery The current query, for fluid interface
     */
    public function filterByAmbulatorio($ambulatorio = null, $comparison = null)
    {
        if (is_string($ambulatorio)) {
            $ambulatorio = in_array(strtolower($ambulatorio), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(QuirofanoPeer::AMBULATORIO, $ambulatorio, $comparison);
    }

    /**
     * Filter the query on the permisos column
     *
     * @param     mixed $permisos The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QuirofanoQuery The current query, for fluid interface
     */
    public function filterByPermisos($permisos = null, $comparison = null)
    {
        if (is_object($permisos)) {
            $permisos = serialize($permisos);
        }

        return $this->addUsingAlias(QuirofanoPeer::PERMISOS, $permisos, $comparison);
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
     * @return QuirofanoQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(QuirofanoPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(QuirofanoPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuirofanoPeer::CREATED_AT, $createdAt, $comparison);
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
     * @return QuirofanoQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(QuirofanoPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(QuirofanoPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuirofanoPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query on the slug column
     *
     * Example usage:
     * <code>
     * $query->filterBySlug('fooValue');   // WHERE slug = 'fooValue'
     * $query->filterBySlug('%fooValue%'); // WHERE slug LIKE '%fooValue%'
     * </code>
     *
     * @param     string $slug The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QuirofanoQuery The current query, for fluid interface
     */
    public function filterBySlug($slug = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($slug)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $slug)) {
                $slug = str_replace('*', '%', $slug);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QuirofanoPeer::SLUG, $slug, $comparison);
    }

    /**
     * Filter the query by a related Agenda object
     *
     * @param   Agenda|PropelObjectCollection $agenda  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   QuirofanoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByAgenda($agenda, $comparison = null)
    {
        if ($agenda instanceof Agenda) {
            return $this
                ->addUsingAlias(QuirofanoPeer::ID, $agenda->getQuirofanoId(), $comparison);
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
     * @return QuirofanoQuery The current query, for fluid interface
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
     * Filter the query by a related Salaquirurgica object
     *
     * @param   Salaquirurgica|PropelObjectCollection $salaquirurgica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   QuirofanoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterBySalaquirurgica($salaquirurgica, $comparison = null)
    {
        if ($salaquirurgica instanceof Salaquirurgica) {
            return $this
                ->addUsingAlias(QuirofanoPeer::ID, $salaquirurgica->getQuirofanoId(), $comparison);
        } elseif ($salaquirurgica instanceof PropelObjectCollection) {
            return $this
                ->useSalaquirurgicaQuery()
                ->filterByPrimaryKeys($salaquirurgica->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySalaquirurgica() only accepts arguments of type Salaquirurgica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Salaquirurgica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return QuirofanoQuery The current query, for fluid interface
     */
    public function joinSalaquirurgica($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Salaquirurgica');

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
            $this->addJoinObject($join, 'Salaquirurgica');
        }

        return $this;
    }

    /**
     * Use the Salaquirurgica relation Salaquirurgica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SalaquirurgicaQuery A secondary query class using the current class as primary query
     */
    public function useSalaquirurgicaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSalaquirurgica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Salaquirurgica', 'SalaquirurgicaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Quirofano $quirofano Object to remove from the list of results
     *
     * @return QuirofanoQuery The current query, for fluid interface
     */
    public function prune($quirofano = null)
    {
        if ($quirofano) {
            $this->addUsingAlias(QuirofanoPeer::ID, $quirofano->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    // sluggable behavior

    /**
     * Find one object based on its slug
     *
     * @param     string $slug The value to use as filter.
     * @param     PropelPDO $con The optional connection object
     *
     * @return    Quirofano the result, formatted by the current formatter
     */
    public function findOneBySlug($slug, $con = null)
    {
        return $this->filterBySlug($slug)->findOne($con);
    }

}
