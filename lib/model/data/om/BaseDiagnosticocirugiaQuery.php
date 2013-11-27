<?php


/**
 * Base class that represents a query for the 'hc_agenda_diagnosticos' table.
 *
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Wed Nov 27 12:15:21 2013
 *
 * @method DiagnosticocirugiaQuery orderById($order = Criteria::ASC) Order by the id column
 * @method DiagnosticocirugiaQuery orderByAgendaId($order = Criteria::ASC) Order by the agenda_id column
 * @method DiagnosticocirugiaQuery orderByDiagnosticoCie10($order = Criteria::ASC) Order by the diagnostico_cie10 column
 * @method DiagnosticocirugiaQuery orderByDiagnosticoId($order = Criteria::ASC) Order by the diagnostico_id column
 * @method DiagnosticocirugiaQuery orderByTipoDiagnostico($order = Criteria::ASC) Order by the tipo_diagnostico column
 * @method DiagnosticocirugiaQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method DiagnosticocirugiaQuery groupById() Group by the id column
 * @method DiagnosticocirugiaQuery groupByAgendaId() Group by the agenda_id column
 * @method DiagnosticocirugiaQuery groupByDiagnosticoCie10() Group by the diagnostico_cie10 column
 * @method DiagnosticocirugiaQuery groupByDiagnosticoId() Group by the diagnostico_id column
 * @method DiagnosticocirugiaQuery groupByTipoDiagnostico() Group by the tipo_diagnostico column
 * @method DiagnosticocirugiaQuery groupByCreatedAt() Group by the created_at column
 *
 * @method DiagnosticocirugiaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DiagnosticocirugiaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DiagnosticocirugiaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method DiagnosticocirugiaQuery leftJoinAgenda($relationAlias = null) Adds a LEFT JOIN clause to the query using the Agenda relation
 * @method DiagnosticocirugiaQuery rightJoinAgenda($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Agenda relation
 * @method DiagnosticocirugiaQuery innerJoinAgenda($relationAlias = null) Adds a INNER JOIN clause to the query using the Agenda relation
 *
 * @method Diagnosticocirugia findOne(PropelPDO $con = null) Return the first Diagnosticocirugia matching the query
 * @method Diagnosticocirugia findOneOrCreate(PropelPDO $con = null) Return the first Diagnosticocirugia matching the query, or a new Diagnosticocirugia object populated from the query conditions when no match is found
 *
 * @method Diagnosticocirugia findOneById(int $id) Return the first Diagnosticocirugia filtered by the id column
 * @method Diagnosticocirugia findOneByAgendaId(int $agenda_id) Return the first Diagnosticocirugia filtered by the agenda_id column
 * @method Diagnosticocirugia findOneByDiagnosticoCie10(string $diagnostico_cie10) Return the first Diagnosticocirugia filtered by the diagnostico_cie10 column
 * @method Diagnosticocirugia findOneByDiagnosticoId(string $diagnostico_id) Return the first Diagnosticocirugia filtered by the diagnostico_id column
 * @method Diagnosticocirugia findOneByTipoDiagnostico(int $tipo_diagnostico) Return the first Diagnosticocirugia filtered by the tipo_diagnostico column
 * @method Diagnosticocirugia findOneByCreatedAt(string $created_at) Return the first Diagnosticocirugia filtered by the created_at column
 *
 * @method array findById(int $id) Return Diagnosticocirugia objects filtered by the id column
 * @method array findByAgendaId(int $agenda_id) Return Diagnosticocirugia objects filtered by the agenda_id column
 * @method array findByDiagnosticoCie10(string $diagnostico_cie10) Return Diagnosticocirugia objects filtered by the diagnostico_cie10 column
 * @method array findByDiagnosticoId(string $diagnostico_id) Return Diagnosticocirugia objects filtered by the diagnostico_id column
 * @method array findByTipoDiagnostico(int $tipo_diagnostico) Return Diagnosticocirugia objects filtered by the tipo_diagnostico column
 * @method array findByCreatedAt(string $created_at) Return Diagnosticocirugia objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.data.om
 */
abstract class BaseDiagnosticocirugiaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDiagnosticocirugiaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Diagnosticocirugia', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DiagnosticocirugiaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     DiagnosticocirugiaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DiagnosticocirugiaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DiagnosticocirugiaQuery) {
            return $criteria;
        }
        $query = new DiagnosticocirugiaQuery();
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
     * @return   Diagnosticocirugia|Diagnosticocirugia[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DiagnosticocirugiaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DiagnosticocirugiaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Diagnosticocirugia A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `AGENDA_ID`, `DIAGNOSTICO_CIE10`, `DIAGNOSTICO_ID`, `TIPO_DIAGNOSTICO`, `CREATED_AT` FROM `hc_agenda_diagnosticos` WHERE `ID` = :p0';
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
            $obj = new Diagnosticocirugia();
            $obj->hydrate($row);
            DiagnosticocirugiaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Diagnosticocirugia|Diagnosticocirugia[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Diagnosticocirugia[]|mixed the list of results, formatted by the current formatter
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
     * @return DiagnosticocirugiaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DiagnosticocirugiaPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DiagnosticocirugiaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DiagnosticocirugiaPeer::ID, $keys, Criteria::IN);
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
     * @return DiagnosticocirugiaQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(DiagnosticocirugiaPeer::ID, $id, $comparison);
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
     * @return DiagnosticocirugiaQuery The current query, for fluid interface
     */
    public function filterByAgendaId($agendaId = null, $comparison = null)
    {
        if (is_array($agendaId)) {
            $useMinMax = false;
            if (isset($agendaId['min'])) {
                $this->addUsingAlias(DiagnosticocirugiaPeer::AGENDA_ID, $agendaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agendaId['max'])) {
                $this->addUsingAlias(DiagnosticocirugiaPeer::AGENDA_ID, $agendaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DiagnosticocirugiaPeer::AGENDA_ID, $agendaId, $comparison);
    }

    /**
     * Filter the query on the diagnostico_cie10 column
     *
     * Example usage:
     * <code>
     * $query->filterByDiagnosticoCie10('fooValue');   // WHERE diagnostico_cie10 = 'fooValue'
     * $query->filterByDiagnosticoCie10('%fooValue%'); // WHERE diagnostico_cie10 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $diagnosticoCie10 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DiagnosticocirugiaQuery The current query, for fluid interface
     */
    public function filterByDiagnosticoCie10($diagnosticoCie10 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($diagnosticoCie10)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $diagnosticoCie10)) {
                $diagnosticoCie10 = str_replace('*', '%', $diagnosticoCie10);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DiagnosticocirugiaPeer::DIAGNOSTICO_CIE10, $diagnosticoCie10, $comparison);
    }

    /**
     * Filter the query on the diagnostico_id column
     *
     * Example usage:
     * <code>
     * $query->filterByDiagnosticoId('fooValue');   // WHERE diagnostico_id = 'fooValue'
     * $query->filterByDiagnosticoId('%fooValue%'); // WHERE diagnostico_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $diagnosticoId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DiagnosticocirugiaQuery The current query, for fluid interface
     */
    public function filterByDiagnosticoId($diagnosticoId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($diagnosticoId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $diagnosticoId)) {
                $diagnosticoId = str_replace('*', '%', $diagnosticoId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DiagnosticocirugiaPeer::DIAGNOSTICO_ID, $diagnosticoId, $comparison);
    }

    /**
     * Filter the query on the tipo_diagnostico column
     *
     * Example usage:
     * <code>
     * $query->filterByTipoDiagnostico(1234); // WHERE tipo_diagnostico = 1234
     * $query->filterByTipoDiagnostico(array(12, 34)); // WHERE tipo_diagnostico IN (12, 34)
     * $query->filterByTipoDiagnostico(array('min' => 12)); // WHERE tipo_diagnostico > 12
     * </code>
     *
     * @param     mixed $tipoDiagnostico The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DiagnosticocirugiaQuery The current query, for fluid interface
     */
    public function filterByTipoDiagnostico($tipoDiagnostico = null, $comparison = null)
    {
        if (is_array($tipoDiagnostico)) {
            $useMinMax = false;
            if (isset($tipoDiagnostico['min'])) {
                $this->addUsingAlias(DiagnosticocirugiaPeer::TIPO_DIAGNOSTICO, $tipoDiagnostico['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tipoDiagnostico['max'])) {
                $this->addUsingAlias(DiagnosticocirugiaPeer::TIPO_DIAGNOSTICO, $tipoDiagnostico['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DiagnosticocirugiaPeer::TIPO_DIAGNOSTICO, $tipoDiagnostico, $comparison);
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
     * @return DiagnosticocirugiaQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(DiagnosticocirugiaPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(DiagnosticocirugiaPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DiagnosticocirugiaPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query by a related Agenda object
     *
     * @param   Agenda|PropelObjectCollection $agenda The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   DiagnosticocirugiaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByAgenda($agenda, $comparison = null)
    {
        if ($agenda instanceof Agenda) {
            return $this
                ->addUsingAlias(DiagnosticocirugiaPeer::AGENDA_ID, $agenda->getId(), $comparison);
        } elseif ($agenda instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DiagnosticocirugiaPeer::AGENDA_ID, $agenda->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return DiagnosticocirugiaQuery The current query, for fluid interface
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
     * @param   Diagnosticocirugia $diagnosticocirugia Object to remove from the list of results
     *
     * @return DiagnosticocirugiaQuery The current query, for fluid interface
     */
    public function prune($diagnosticocirugia = null)
    {
        if ($diagnosticocirugia) {
            $this->addUsingAlias(DiagnosticocirugiaPeer::ID, $diagnosticocirugia->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
