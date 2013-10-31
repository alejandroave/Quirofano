<?php



/**
 * This class defines the structure of the 'siga_sala' table.
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Fri Oct 11 11:37:52 2013
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.config.map
 */
class SalaquirurgicaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.config.map.SalaquirurgicaTableMap';

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
        $this->setName('siga_sala');
        $this->setPhpName('Salaquirurgica');
        $this->setClassname('Salaquirurgica');
        $this->setPackage('lib.model.config');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('NOMBRE', 'Nombre', 'VARCHAR', true, 128, null);
        $this->getColumn('NOMBRE', false)->setPrimaryString(true);
        $this->addColumn('ACTIVO', 'Activo', 'BOOLEAN', false, 1, true);
        $this->addColumn('BLOQUEADO', 'Bloqueado', 'BOOLEAN', false, 1, null);
        $this->addForeignKey('QUIROFANO_ID', 'QuirofanoId', 'INTEGER', 'siga_quirofano', 'ID', false, null, null);
        $this->addColumn('PERMISOS', 'Permisos', 'OBJECT', false, null, null);
        $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('SLUG', 'Slug', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Quirofano', 'Quirofano', RelationMap::MANY_TO_ONE, array('quirofano_id' => 'id', ), 'SET NULL', 'CASCADE');
        $this->addRelation('Agenda', 'Agenda', RelationMap::ONE_TO_MANY, array('id' => 'sala_id', ), 'SET NULL', 'CASCADE', 'Agendas');
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
            'sluggable' => array('slug_column' => 'slug', 'slug_pattern' => '', 'replace_pattern' => '/\W+/', 'replacement' => '-', 'separator' => '-', 'permanent' => 'false', 'scope_column' => '', ),
            'symfony' => array('form' => 'true', 'filter' => 'true', ),
            'symfony_behaviors' => array(),
            'symfony_timestampable' => array('create_column' => 'created_at', 'update_column' => 'updated_at', ),
        );
    } // getBehaviors()

} // SalaquirurgicaTableMap
