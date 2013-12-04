<?php



/**
 * This class defines the structure of the 'hc_agenda_diagnosticos' table.
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Wed Dec  4 10:55:32 2013
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.data.map
 */
class DiagnosticocirugiaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.data.map.DiagnosticocirugiaTableMap';

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
        $this->setName('hc_agenda_diagnosticos');
        $this->setPhpName('Diagnosticocirugia');
        $this->setClassname('Diagnosticocirugia');
        $this->setPackage('lib.model.data');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('AGENDA_ID', 'AgendaId', 'INTEGER', 'hc_agenda', 'ID', false, null, null);
        $this->addColumn('DIAGNOSTICO_CIE10', 'DiagnosticoCie10', 'VARCHAR', false, 256, null);
        $this->addColumn('DIAGNOSTICO_ID', 'DiagnosticoId', 'VARCHAR', false, 8, null);
        $this->addColumn('TIPO_DIAGNOSTICO', 'TipoDiagnostico', 'INTEGER', false, null, null);
        $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Agenda', 'Agenda', RelationMap::MANY_TO_ONE, array('agenda_id' => 'id', ), null, null);
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
            'symfony_timestampable' => array('create_column' => 'created_at', ),
        );
    } // getBehaviors()

} // DiagnosticocirugiaTableMap
