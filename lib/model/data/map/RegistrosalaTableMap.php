<?php



/**
 * This class defines the structure of the 'siga_sala_log' table.
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Thu Oct 10 11:40:15 2013
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.data.map
 */
class RegistrosalaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.data.map.RegistrosalaTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('siga_sala_log');
        $this->setPhpName('Registrosala');
        $this->setClassname('Registrosala');
        $this->setPackage('lib.model.data');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('SALA_ID', 'SalaId', 'INTEGER', false, null, null);
        $this->addColumn('MOTIVO', 'Motivo', 'VARCHAR', false, 255, null);
        $this->addColumn('INICIO', 'Inicio', 'TIMESTAMP', false, null, null);
        $this->addColumn('FIN', 'Fin', 'TIMESTAMP', false, null, null);
        $this->addColumn('DURACION', 'Duracion', 'VARCHAR', false, 32, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'symfony' => array('form' => 'true', 'filter' => 'true', ),
            'symfony_behaviors' => array(),
        );
    } // getBehaviors()

} // RegistrosalaTableMap
