<?php


/**
 * Base class that represents a query for the 'hc_agenda_regrogramar' table.
 *
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Thu Aug  1 20:31:52 2013
 *
 * @method ProcedimientregrogramadoQuery orderById($order = Criteria::ASC) Order by the id column
 * @method ProcedimientregrogramadoQuery orderByAgendaId($order = Criteria::ASC) Order by the agenda_id column
 * @method ProcedimientregrogramadoQuery orderByProgramacion($order = Criteria::ASC) Order by the programacion column
 * @method ProcedimientregrogramadoQuery orderByHora($order = Criteria::ASC) Order by the hora column
 * @method ProcedimientregrogramadoQuery orderBySalaId($order = Criteria::ASC) Order by the sala_id column
 * @method ProcedimientregrogramadoQuery orderByTiempoEst($order = Criteria::ASC) Order by the tiempo_est column
 * @method ProcedimientregrogramadoQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method ProcedimientregrogramadoQuery groupById() Group by the id column
 * @method ProcedimientregrogramadoQuery groupByAgendaId() Group by the agenda_id column
 * @method ProcedimientregrogramadoQuery groupByProgramacion() Group by the programacion column
 * @method ProcedimientregrogramadoQuery groupByHora() Group by the hora column
 * @method ProcedimientregrogramadoQuery groupBySalaId() Group by the sala_id column
 * @method ProcedimientregrogramadoQuery groupByTiempoEst() Group by the tiempo_est column
 * @method ProcedimientregrogramadoQuery groupByCreatedAt() Group by the created_at column
 *
 * @method ProcedimientregrogramadoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProcedimientregrogramadoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProcedimientregrogramadoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProcedimientregrogramadoQuery leftJoinAgenda($relationAlias = null) Adds a LEFT JOIN clause to the query using the Agenda relation
 * @method ProcedimientregrogramadoQuery rightJoinAgenda($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Agenda relation
 * @method ProcedimientregrogramadoQuery innerJoinAgenda($relationAlias = null) Adds a INNER JOIN clause to the query using the Agenda relation
 *
 * @method Procedimientregrogramado findOne(PropelPDO $con = null) Return the first Procedimientregrogramado matching the query
 * @method Procedimientregrogramado findOneOrCreate(PropelPDO $con = null) Return the first Procedimientregrogramado matching the query, or a new Procedimientregrogramado object populated from the query conditions when no match is found
 *
 * @method Procedimientregrogramado findOneById(int $id) Return the first Procedimientregrogramado filtered by the id column
 * @method Procedimientregrogramado findOneByAgendaId(int $agenda_id) Return the first Procedimientregrogramado filtered by the agenda_id column
 * @method Procedimientregrogramado findOneByProgramacion(string $programacion) Return the first Procedimientregrogramado filtered by the programacion column
 * @method Procedimientregrogramado findOneByHora(string $hora) Return the first Procedimientregrogramado filtered by the hora column
 * @method Procedimientregrogramado findOneBySalaId(int $sala_id) Return the first Procedimientregrogramado filtered by the sala_id column
 * @method Procedimientregrogramado findOneByTiempoEst(string $tiempo_est) Return the first Procedimientregrogramado filtered by the tiempo_est column
 * @method Procedimientregrogramado findOneByCreatedAt(string $created_at) Return the first Procedimientregrogramado filtered by the created_at column
 *
 * @method array findById(int $id) Return Procedimientregrogramado objects filtered by the id column
 * @method array findByAgendaId(int $agenda_id) Return Procedimientregrogramado objects filtered by the agenda_id column
 * @method array findByProgramacion(string $programacion) Return Procedimientregrogramado objects filtered by the programacion column
 * @method array findByHora(string $hora) Return Procedimientregrogramado objects filtered by the hora column
 * @method array findBySalaId(int $sala_id) Return Procedimientregrogramado objects filtered by the sala_id column
 * @method array findByTiempoEst(string $tiempo_est) Return Procedimientregrogramado objects filtered by the tiempo_est column
 * @method array findByCreatedAt(string $created_at) Return Procedimientregrogramado objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.data.om
 */
abstract class BaseProcedimientregrogramadoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProcedimientregrogramadoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Procedimientregrogramado', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProcedimientregrogramadoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     ProcedimientregrogramadoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProcedimientregrogramadoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProcedimientregrogramadoQuery) {
            return $criteria;
        }
        $query = new ProcedimientregrogramadoQuery();
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
     * @return   Procedimientregrogramado|Procedimientregrogramado[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProcedimientregrogramadoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProcedimientregrogramadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Procedimientregrogramado A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `AGENDA_ID`, `PROGRAMACION`, `HORA`, `SALA_ID`, `TIEMPO_EST`, `CREATED_AT` FROM `hc_agenda_regrogramar` WHERE `ID` = :p0';
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
            $obj = new Procedimientregrogramado();
            $obj->hydrate($row);
            ProcedimientregrogramadoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Procedimientregrogramado|Procedimientregrogramado[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Procedimientregrogramado[]|mixed the list of results, formatted by the current formatter
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
     * @return ProcedimientregrogramadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProcedimientregrogramadoPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProcedimientregrogramadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProcedimientregrogramadoPeer::ID, $keys, Criteria::IN);
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
     * @return ProcedimientregrogramadoQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(ProcedimientregrogramadoPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the agenda_id column
     *
     * Example usage:
     * <code>
     * $query->filterByAgendaId(1234); // WHERE agenda_id = 1234
     * $query->filterByAgendaId(array(12, 34)); // WHERE agenda_id IN (12, 34)
     * $query->filterByAgendaId(array('min' => 12)); // WHERE agenda_id > 12
     * </code>
     *
     * @see       filterByAgenda()
     *
     * @param     mixed $agendaId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProcedimientregrogramadoQuery The current query, for fluid interface
     */
    public function filterByAgendaId($agendaId = null, $comparison = null)
    {
        if (is_array($agendaId)) {
            $useMinMax = false;
            if (isset($agendaId['min'])) {
                $this->addUsingAlias(ProcedimientregrogramadoPeer::AGENDA_ID, $agendaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agendaId['max'])) {
                $this->addUsingAlias(ProcedimientregrogramadoPeer::AGENDA_ID, $agendaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProcedimientregrogramadoPeer::AGENDA_ID, $agendaId, $comparison);
    }

    /**
     * Filter the query on the programacion column
     *
     * Example usage:
     * <code>
     * $query->filterByProgramacion('2011-03-14'); // WHERE programacion = '2011-03-14'
     * $query->filterByProgramacion('now'); // WHERE programacion = '2011-03-14'
     * $query->filterByProgramacion(array('max' => 'yesterday')); // WHERE programacion > '2011-03-13'
     * </code>
     *
     * @param     mixed $programacion The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProcedimientregrogramadoQuery The current query, for fluid interface
     */
    public function filterByProgramacion($programacion = null, $comparison = null)
    {
        if (is_array($programacion)) {
            $useMinMax = false;
            if (isset($programacion['min'])) {
                $this->addUsingAlias(ProcedimientregrogramadoPeer::PROGRAMACION, $programacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($programacion['max'])) {
                $this->addUsingAlias(ProcedimientregrogramadoPeer::PROGRAMACION, $programacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProcedimientregrogramadoPeer::PROGRAMACION, $programacion, $comparison);
    }

    /**
     * Filter the query on the hora column
     *
     * Example usage:
     * <code>
     * $query->filterByHora('2011-03-14'); // WHERE hora = '2011-03-14'
     * $query->filterByHora('now'); // WHERE hora = '2011-03-14'
     * $query->filterByHora(array('max' => 'yesterday')); // WHERE hora > '2011-03-13'
     * </code>
     *
     * @param     mixed $hora The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProcedimientregrogramadoQuery The current query, for fluid interface
     */
    public function filterByHora($hora = null, $comparison = null)
    {
        if (is_array($hora)) {
            $useMinMax = false;
            if (isset($hora['min'])) {
                $this->addUsingAlias(ProcedimientregrogramadoPeer::HORA, $hora['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hora['max'])) {
                $this->addUsingAlias(ProcedimientregrogramadoPeer::HORA, $hora['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProcedimientregrogramadoPeer::HORA, $hora, $comparison);
    }

    /**
     * Filter the query on the sala_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySalaId(1234); // WHERE sala_id = 1234
     * $query->filterBySalaId(array(12, 34)); // WHERE sala_id IN (12, 34)
     * $query->filterBySalaId(array('min' => 12)); // WHERE sala_id > 12
     * </code>
     *
     * @param     mixed $salaId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProcedimientregrogramadoQuery The current query, for fluid interface
     */
    public function filterBySalaId($salaId = null, $comparison = null)
    {
        if (is_array($salaId)) {
            $useMinMax = false;
            if (isset($salaId['min'])) {
                $this->addUsingAlias(ProcedimientregrogramadoPeer::SALA_ID, $salaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salaId['max'])) {
                $this->addUsingAlias(ProcedimientregrogramadoPeer::SALA_ID, $salaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProcedimientregrogramadoPeer::SALA_ID, $salaId, $comparison);
    }

    /**
     * Filter the query on the tiempo_est column
     *
     * Example usage:
     * <code>
     * $query->filterByTiempoEst('2011-03-14'); // WHERE tiempo_est = '2011-03-14'
     * $query->filterByTiempoEst('now'); // WHERE tiempo_est = '2011-03-14'
     * $query->filterByTiempoEst(array('max' => 'yesterday')); // WHERE tiempo_est > '2011-03-13'
     * </code>
     *
     * @param     mixed $tiempoEst The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProcedimientregrogramadoQuery The current query, for fluid interface
     */
    public function filterByTiempoEst($tiempoEst = null, $comparison = null)
    {
        if (is_array($tiempoEst)) {
            $useMinMax = false;
            if (isset($tiempoEst['min'])) {
                $this->addUsingAlias(ProcedimientregrogramadoPeer::TIEMPO_EST, $tiempoEst['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tiempoEst['max'])) {
                $this->addUsingAlias(ProcedimientregrogramadoPeer::TIEMPO_EST, $tiempoEst['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProcedimientregrogramadoPeer::TIEMPO_EST, $tiempoEst, $comparison);
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
     * @return ProcedimientregrogramadoQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(ProcedimientregrogramadoPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(ProcedimientregrogramadoPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProcedimientregrogramadoPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query by a related Agenda object
     *
     * @param   Agenda|PropelObjectCollection $agenda The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   ProcedimientregrogramadoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByAgenda($agenda, $comparison = null)
    {
        if ($agenda instanceof Agenda) {
            return $this
                ->addUsingAlias(ProcedimientregrogramadoPeer::AGENDA_ID, $agenda->getId(), $comparison);
        } elseif ($agenda instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProcedimientregrogramadoPeer::AGENDA_ID, $agenda->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return ProcedimientregrogramadoQuery The current query, for fluid interface
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
     * @param   Procedimientregrogramado $procedimientregrogramado Object to remove from the list of results
     *
     * @return ProcedimientregrogramadoQuery The current query, for fluid interface
     */
    public function prune($procedimientregrogramado = null)
    {
        if ($procedimientregrogramado) {
            $this->addUsingAlias(ProcedimientregrogramadoPeer::ID, $procedimientregrogramado->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
