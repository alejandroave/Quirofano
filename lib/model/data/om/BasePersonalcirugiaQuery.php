<?php


/**
 * Base class that represents a query for the 'hc_agenda_personal' table.
 *
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Wed Dec  4 10:55:32 2013
 *
 * @method PersonalcirugiaQuery orderById($order = Criteria::ASC) Order by the id column
 * @method PersonalcirugiaQuery orderByPersonalId($order = Criteria::ASC) Order by the personal_id column
 * @method PersonalcirugiaQuery orderByAgendaId($order = Criteria::ASC) Order by the agenda_id column
 * @method PersonalcirugiaQuery orderByPersonalNombre($order = Criteria::ASC) Order by the personal_nombre column
 * @method PersonalcirugiaQuery orderByTipo($order = Criteria::ASC) Order by the tipo column
 * @method PersonalcirugiaQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method PersonalcirugiaQuery orderByPrograma($order = Criteria::ASC) Order by the programa column
 * @method PersonalcirugiaQuery orderByInicia($order = Criteria::ASC) Order by the inicia column
 * @method PersonalcirugiaQuery orderByTransoperatorio($order = Criteria::ASC) Order by the transoperatorio column
 * @method PersonalcirugiaQuery orderByFinaliza($order = Criteria::ASC) Order by the finaliza column
 * @method PersonalcirugiaQuery orderByTurno($order = Criteria::ASC) Order by the turno column
 * @method PersonalcirugiaQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method PersonalcirugiaQuery groupById() Group by the id column
 * @method PersonalcirugiaQuery groupByPersonalId() Group by the personal_id column
 * @method PersonalcirugiaQuery groupByAgendaId() Group by the agenda_id column
 * @method PersonalcirugiaQuery groupByPersonalNombre() Group by the personal_nombre column
 * @method PersonalcirugiaQuery groupByTipo() Group by the tipo column
 * @method PersonalcirugiaQuery groupByStatus() Group by the status column
 * @method PersonalcirugiaQuery groupByPrograma() Group by the programa column
 * @method PersonalcirugiaQuery groupByInicia() Group by the inicia column
 * @method PersonalcirugiaQuery groupByTransoperatorio() Group by the transoperatorio column
 * @method PersonalcirugiaQuery groupByFinaliza() Group by the finaliza column
 * @method PersonalcirugiaQuery groupByTurno() Group by the turno column
 * @method PersonalcirugiaQuery groupByCreatedAt() Group by the created_at column
 *
 * @method PersonalcirugiaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PersonalcirugiaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PersonalcirugiaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PersonalcirugiaQuery leftJoinAgenda($relationAlias = null) Adds a LEFT JOIN clause to the query using the Agenda relation
 * @method PersonalcirugiaQuery rightJoinAgenda($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Agenda relation
 * @method PersonalcirugiaQuery innerJoinAgenda($relationAlias = null) Adds a INNER JOIN clause to the query using the Agenda relation
 *
 * @method PersonalcirugiaQuery leftJoinsfGuardUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfGuardUser relation
 * @method PersonalcirugiaQuery rightJoinsfGuardUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfGuardUser relation
 * @method PersonalcirugiaQuery innerJoinsfGuardUser($relationAlias = null) Adds a INNER JOIN clause to the query using the sfGuardUser relation
 *
 * @method Personalcirugia findOne(PropelPDO $con = null) Return the first Personalcirugia matching the query
 * @method Personalcirugia findOneOrCreate(PropelPDO $con = null) Return the first Personalcirugia matching the query, or a new Personalcirugia object populated from the query conditions when no match is found
 *
 * @method Personalcirugia findOneById(int $id) Return the first Personalcirugia filtered by the id column
 * @method Personalcirugia findOneByPersonalId(int $personal_id) Return the first Personalcirugia filtered by the personal_id column
 * @method Personalcirugia findOneByAgendaId(int $agenda_id) Return the first Personalcirugia filtered by the agenda_id column
 * @method Personalcirugia findOneByPersonalNombre(string $personal_nombre) Return the first Personalcirugia filtered by the personal_nombre column
 * @method Personalcirugia findOneByTipo(int $tipo) Return the first Personalcirugia filtered by the tipo column
 * @method Personalcirugia findOneByStatus(int $status) Return the first Personalcirugia filtered by the status column
 * @method Personalcirugia findOneByPrograma(boolean $programa) Return the first Personalcirugia filtered by the programa column
 * @method Personalcirugia findOneByInicia(boolean $inicia) Return the first Personalcirugia filtered by the inicia column
 * @method Personalcirugia findOneByTransoperatorio(boolean $transoperatorio) Return the first Personalcirugia filtered by the transoperatorio column
 * @method Personalcirugia findOneByFinaliza(boolean $finaliza) Return the first Personalcirugia filtered by the finaliza column
 * @method Personalcirugia findOneByTurno(int $turno) Return the first Personalcirugia filtered by the turno column
 * @method Personalcirugia findOneByCreatedAt(string $created_at) Return the first Personalcirugia filtered by the created_at column
 *
 * @method array findById(int $id) Return Personalcirugia objects filtered by the id column
 * @method array findByPersonalId(int $personal_id) Return Personalcirugia objects filtered by the personal_id column
 * @method array findByAgendaId(int $agenda_id) Return Personalcirugia objects filtered by the agenda_id column
 * @method array findByPersonalNombre(string $personal_nombre) Return Personalcirugia objects filtered by the personal_nombre column
 * @method array findByTipo(int $tipo) Return Personalcirugia objects filtered by the tipo column
 * @method array findByStatus(int $status) Return Personalcirugia objects filtered by the status column
 * @method array findByPrograma(boolean $programa) Return Personalcirugia objects filtered by the programa column
 * @method array findByInicia(boolean $inicia) Return Personalcirugia objects filtered by the inicia column
 * @method array findByTransoperatorio(boolean $transoperatorio) Return Personalcirugia objects filtered by the transoperatorio column
 * @method array findByFinaliza(boolean $finaliza) Return Personalcirugia objects filtered by the finaliza column
 * @method array findByTurno(int $turno) Return Personalcirugia objects filtered by the turno column
 * @method array findByCreatedAt(string $created_at) Return Personalcirugia objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.data.om
 */
abstract class BasePersonalcirugiaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePersonalcirugiaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Personalcirugia', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PersonalcirugiaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     PersonalcirugiaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PersonalcirugiaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PersonalcirugiaQuery) {
            return $criteria;
        }
        $query = new PersonalcirugiaQuery();
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
     * @return   Personalcirugia|Personalcirugia[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PersonalcirugiaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PersonalcirugiaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Personalcirugia A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `PERSONAL_ID`, `AGENDA_ID`, `PERSONAL_NOMBRE`, `TIPO`, `STATUS`, `PROGRAMA`, `INICIA`, `TRANSOPERATORIO`, `FINALIZA`, `TURNO`, `CREATED_AT` FROM `hc_agenda_personal` WHERE `ID` = :p0';
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
            $obj = new Personalcirugia();
            $obj->hydrate($row);
            PersonalcirugiaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Personalcirugia|Personalcirugia[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Personalcirugia[]|mixed the list of results, formatted by the current formatter
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
     * @return PersonalcirugiaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PersonalcirugiaPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PersonalcirugiaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PersonalcirugiaPeer::ID, $keys, Criteria::IN);
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
     * @return PersonalcirugiaQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(PersonalcirugiaPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the personal_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPersonalId(1234); // WHERE personal_id = 1234
     * $query->filterByPersonalId(array(12, 34)); // WHERE personal_id IN (12, 34)
     * $query->filterByPersonalId(array('min' => 12)); // WHERE personal_id > 12
     * </code>
     *
     * @see       filterBysfGuardUser()
     *
     * @param     mixed $personalId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonalcirugiaQuery The current query, for fluid interface
     */
    public function filterByPersonalId($personalId = null, $comparison = null)
    {
        if (is_array($personalId)) {
            $useMinMax = false;
            if (isset($personalId['min'])) {
                $this->addUsingAlias(PersonalcirugiaPeer::PERSONAL_ID, $personalId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($personalId['max'])) {
                $this->addUsingAlias(PersonalcirugiaPeer::PERSONAL_ID, $personalId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonalcirugiaPeer::PERSONAL_ID, $personalId, $comparison);
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
     * @return PersonalcirugiaQuery The current query, for fluid interface
     */
    public function filterByAgendaId($agendaId = null, $comparison = null)
    {
        if (is_array($agendaId)) {
            $useMinMax = false;
            if (isset($agendaId['min'])) {
                $this->addUsingAlias(PersonalcirugiaPeer::AGENDA_ID, $agendaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agendaId['max'])) {
                $this->addUsingAlias(PersonalcirugiaPeer::AGENDA_ID, $agendaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonalcirugiaPeer::AGENDA_ID, $agendaId, $comparison);
    }

    /**
     * Filter the query on the personal_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByPersonalNombre('fooValue');   // WHERE personal_nombre = 'fooValue'
     * $query->filterByPersonalNombre('%fooValue%'); // WHERE personal_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $personalNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonalcirugiaQuery The current query, for fluid interface
     */
    public function filterByPersonalNombre($personalNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($personalNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $personalNombre)) {
                $personalNombre = str_replace('*', '%', $personalNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PersonalcirugiaPeer::PERSONAL_NOMBRE, $personalNombre, $comparison);
    }

    /**
     * Filter the query on the tipo column
     *
     * @param     mixed $tipo The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonalcirugiaQuery The current query, for fluid interface
     * @throws PropelException - if the value is not accepted by the enum.
     */
    public function filterByTipo($tipo = null, $comparison = null)
    {
        $valueSet = PersonalcirugiaPeer::getValueSet(PersonalcirugiaPeer::TIPO);
        if (is_scalar($tipo)) {
            if (!in_array($tipo, $valueSet)) {
                throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $tipo));
            }
            $tipo = array_search($tipo, $valueSet);
        } elseif (is_array($tipo)) {
            $convertedValues = array();
            foreach ($tipo as $value) {
                if (!in_array($value, $valueSet)) {
                    throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $value));
                }
                $convertedValues []= array_search($value, $valueSet);
            }
            $tipo = $convertedValues;
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonalcirugiaPeer::TIPO, $tipo, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus(1234); // WHERE status = 1234
     * $query->filterByStatus(array(12, 34)); // WHERE status IN (12, 34)
     * $query->filterByStatus(array('min' => 12)); // WHERE status > 12
     * </code>
     *
     * @param     mixed $status The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonalcirugiaQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (is_array($status)) {
            $useMinMax = false;
            if (isset($status['min'])) {
                $this->addUsingAlias(PersonalcirugiaPeer::STATUS, $status['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($status['max'])) {
                $this->addUsingAlias(PersonalcirugiaPeer::STATUS, $status['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonalcirugiaPeer::STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the programa column
     *
     * Example usage:
     * <code>
     * $query->filterByPrograma(true); // WHERE programa = true
     * $query->filterByPrograma('yes'); // WHERE programa = true
     * </code>
     *
     * @param     boolean|string $programa The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonalcirugiaQuery The current query, for fluid interface
     */
    public function filterByPrograma($programa = null, $comparison = null)
    {
        if (is_string($programa)) {
            $programa = in_array(strtolower($programa), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(PersonalcirugiaPeer::PROGRAMA, $programa, $comparison);
    }

    /**
     * Filter the query on the inicia column
     *
     * Example usage:
     * <code>
     * $query->filterByInicia(true); // WHERE inicia = true
     * $query->filterByInicia('yes'); // WHERE inicia = true
     * </code>
     *
     * @param     boolean|string $inicia The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonalcirugiaQuery The current query, for fluid interface
     */
    public function filterByInicia($inicia = null, $comparison = null)
    {
        if (is_string($inicia)) {
            $inicia = in_array(strtolower($inicia), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(PersonalcirugiaPeer::INICIA, $inicia, $comparison);
    }

    /**
     * Filter the query on the transoperatorio column
     *
     * Example usage:
     * <code>
     * $query->filterByTransoperatorio(true); // WHERE transoperatorio = true
     * $query->filterByTransoperatorio('yes'); // WHERE transoperatorio = true
     * </code>
     *
     * @param     boolean|string $transoperatorio The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonalcirugiaQuery The current query, for fluid interface
     */
    public function filterByTransoperatorio($transoperatorio = null, $comparison = null)
    {
        if (is_string($transoperatorio)) {
            $transoperatorio = in_array(strtolower($transoperatorio), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(PersonalcirugiaPeer::TRANSOPERATORIO, $transoperatorio, $comparison);
    }

    /**
     * Filter the query on the finaliza column
     *
     * Example usage:
     * <code>
     * $query->filterByFinaliza(true); // WHERE finaliza = true
     * $query->filterByFinaliza('yes'); // WHERE finaliza = true
     * </code>
     *
     * @param     boolean|string $finaliza The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonalcirugiaQuery The current query, for fluid interface
     */
    public function filterByFinaliza($finaliza = null, $comparison = null)
    {
        if (is_string($finaliza)) {
            $finaliza = in_array(strtolower($finaliza), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(PersonalcirugiaPeer::FINALIZA, $finaliza, $comparison);
    }

    /**
     * Filter the query on the turno column
     *
     * Example usage:
     * <code>
     * $query->filterByTurno(1234); // WHERE turno = 1234
     * $query->filterByTurno(array(12, 34)); // WHERE turno IN (12, 34)
     * $query->filterByTurno(array('min' => 12)); // WHERE turno > 12
     * </code>
     *
     * @param     mixed $turno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonalcirugiaQuery The current query, for fluid interface
     */
    public function filterByTurno($turno = null, $comparison = null)
    {
        if (is_array($turno)) {
            $useMinMax = false;
            if (isset($turno['min'])) {
                $this->addUsingAlias(PersonalcirugiaPeer::TURNO, $turno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($turno['max'])) {
                $this->addUsingAlias(PersonalcirugiaPeer::TURNO, $turno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonalcirugiaPeer::TURNO, $turno, $comparison);
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
     * @return PersonalcirugiaQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(PersonalcirugiaPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(PersonalcirugiaPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonalcirugiaPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query by a related Agenda object
     *
     * @param   Agenda|PropelObjectCollection $agenda The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PersonalcirugiaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByAgenda($agenda, $comparison = null)
    {
        if ($agenda instanceof Agenda) {
            return $this
                ->addUsingAlias(PersonalcirugiaPeer::AGENDA_ID, $agenda->getId(), $comparison);
        } elseif ($agenda instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PersonalcirugiaPeer::AGENDA_ID, $agenda->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return PersonalcirugiaQuery The current query, for fluid interface
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
     * Filter the query by a related sfGuardUser object
     *
     * @param   sfGuardUser|PropelObjectCollection $sfGuardUser The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PersonalcirugiaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterBysfGuardUser($sfGuardUser, $comparison = null)
    {
        if ($sfGuardUser instanceof sfGuardUser) {
            return $this
                ->addUsingAlias(PersonalcirugiaPeer::PERSONAL_ID, $sfGuardUser->getId(), $comparison);
        } elseif ($sfGuardUser instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PersonalcirugiaPeer::PERSONAL_ID, $sfGuardUser->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterBysfGuardUser() only accepts arguments of type sfGuardUser or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the sfGuardUser relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PersonalcirugiaQuery The current query, for fluid interface
     */
    public function joinsfGuardUser($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('sfGuardUser');

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
            $this->addJoinObject($join, 'sfGuardUser');
        }

        return $this;
    }

    /**
     * Use the sfGuardUser relation sfGuardUser object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   sfGuardUserQuery A secondary query class using the current class as primary query
     */
    public function usesfGuardUserQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinsfGuardUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'sfGuardUser', 'sfGuardUserQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Personalcirugia $personalcirugia Object to remove from the list of results
     *
     * @return PersonalcirugiaQuery The current query, for fluid interface
     */
    public function prune($personalcirugia = null)
    {
        if ($personalcirugia) {
            $this->addUsingAlias(PersonalcirugiaPeer::ID, $personalcirugia->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
