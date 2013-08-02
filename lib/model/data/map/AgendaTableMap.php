<?php



/**
 * This class defines the structure of the 'hc_agenda' table.
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Fri Aug  2 01:25:29 2013
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.data.map
 */
class AgendaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.data.map.AgendaTableMap';

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
        $this->setName('hc_agenda');
        $this->setPhpName('Agenda');
        $this->setClassname('Agenda');
        $this->setPackage('lib.model.data');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('PROGRAMACION', 'Programacion', 'DATE', false, null, null);
        $this->addColumn('HORA', 'Hora', 'TIME', false, null, null);
        $this->addColumn('INICIO', 'Inicio', 'TIMESTAMP', false, null, null);
        $this->addColumn('LAST_TIME', 'LastTime', 'TIMESTAMP', false, null, null);
        $this->addColumn('INGRESO', 'Ingreso', 'TIMESTAMP', false, null, null);
        $this->addColumn('SALA_ID', 'SalaId', 'INTEGER', false, null, null);
        $this->addColumn('QUIROFANO_ID', 'QuirofanoId', 'INTEGER', false, null, null);
        $this->addColumn('EGRESO', 'Egreso', 'TIMESTAMP', false, null, null);
        $this->addColumn('CIE9MC', 'Cie9mc', 'LONGVARCHAR', false, null, null);
        $this->addColumn('CIE9MC_ID', 'Cie9mcId', 'VARCHAR', false, 8, null);
        $this->addColumn('CX_REALIZADA', 'CxRealizada', 'LONGVARCHAR', false, null, null);
        $this->addColumn('CX_REALIZADA_ID', 'CxRealizadaId', 'VARCHAR', false, 8, null);
        $this->addColumn('TIPO_CX', 'TipoCx', 'INTEGER', false, null, null);
        $this->addColumn('DIAGNOSTICO', 'Diagnostico', 'VARCHAR', false, 256, null);
        $this->addColumn('DIAGNOSTICO_ID', 'DiagnosticoId', 'VARCHAR', false, 8, null);
        $this->addColumn('PACIENTE_NAME', 'PacienteName', 'VARCHAR', false, 256, null);
        $this->addColumn('PACIENTE_ID', 'PacienteId', 'INTEGER', false, null, null);
        $this->addColumn('EDAD', 'Edad', 'VARCHAR', false, 16, null);
        $this->addColumn('GENERO', 'Genero', 'VARCHAR', false, 16, null);
        $this->addColumn('GENERO_ID', 'GeneroId', 'INTEGER', false, null, null);
        $this->addColumn('REGISTRO', 'Registro', 'VARCHAR', false, 16, null);
        $this->addColumn('SERVICIO', 'Servicio', 'INTEGER', false, null, null);
        $this->addColumn('ANESTESIA_ID', 'AnestesiaId', 'INTEGER', false, null, null);
        $this->addColumn('ANESTESIA_EMPLEADA', 'AnestesiaEmpleada', 'VARCHAR', false, 256, null);
        $this->addColumn('EV_ADVERSOS_ANESTESIA', 'EvAdversosAnestesia', 'LONGVARCHAR', false, null, null);
        $this->addColumn('OBSERVACIONES', 'Observaciones', 'LONGVARCHAR', false, null, null);
        $this->addColumn('REQUERIMIENTO', 'Requerimiento', 'LONGVARCHAR', false, null, null);
        $this->addColumn('REQ_INSUMOS', 'ReqInsumos', 'LONGVARCHAR', false, null, null);
        $this->addColumn('REQ_HEMODERIV', 'ReqHemoderiv', 'LONGVARCHAR', false, null, null);
        $this->addColumn('REQ_LABORATORIO', 'ReqLaboratorio', 'LONGVARCHAR', false, null, null);
        $this->addColumn('REQ_ANESTESICO', 'ReqAnestesico', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STATUS', 'Status', 'INTEGER', false, null, 1);
        $this->addColumn('CAUSA_DIFERIDO_ID', 'CausaDiferidoId', 'INTEGER', false, null, null);
        $this->addColumn('SOLICITADO', 'Solicitado', 'BOOLEAN', false, 1, null);
        $this->addColumn('RIESGOQX_ID', 'RiesgoqxId', 'INTEGER', false, null, null);
        $this->addColumn('CONTAMINACIONQX_ID', 'ContaminacionqxId', 'INTEGER', false, null, null);
        $this->addColumn('EVENTOQX_ID', 'EventoqxId', 'INTEGER', false, null, null);
        $this->addColumn('COMPLICACIONES', 'Complicaciones', 'LONGVARCHAR', false, null, null);
        $this->addColumn('VAL_PRE_ANESTESICA', 'ValPreAnestesica', 'LONGVARCHAR', false, null, null);
        $this->addColumn('REINTERVENCION', 'Reintervencion', 'BOOLEAN', false, 1, null);
        $this->addColumn('PERMISOS', 'Permisos', 'OBJECT', false, null, null);
        $this->addColumn('TIPO_PROC_ID', 'TipoProcId', 'INTEGER', false, null, null);
        $this->addColumn('ATENCION_ID', 'AtencionId', 'INTEGER', false, null, null);
        $this->addColumn('TIEMPO_FUERA', 'TiempoFuera', 'BOOLEAN', false, 1, null);
        $this->addColumn('PROCEDENCIA', 'Procedencia', 'VARCHAR', false, 128, null);
        $this->addColumn('CLASIFICACIONQX', 'Clasificacionqx', 'INTEGER', false, null, null);
        $this->addColumn('REGION_PX', 'RegionPx', 'INTEGER', false, null, null);
        $this->addColumn('EXTENSION_PX', 'ExtensionPx', 'INTEGER', false, null, null);
        $this->addColumn('ANEXO_DETALLE', 'AnexoDetalle', 'INTEGER', false, null, null);
        $this->addColumn('DESTINO_PX', 'DestinoPx', 'INTEGER', false, null, null);
        $this->addColumn('LIBERACION_SALA', 'LiberacionSala', 'TIME', false, null, null);
        $this->addColumn('TIEMPO_EST', 'TiempoEst', 'TIME', false, null, null);
        $this->addColumn('RIESGO_QX_PRE', 'RiesgoQxPre', 'VARCHAR', false, 256, null);
        $this->addColumn('SHOW_IN_INDEX', 'ShowInIndex', 'BOOLEAN', false, 1, true);
        $this->addColumn('PROTOCOLO', 'Protocolo', 'BOOLEAN', false, 1, false);
        $this->addColumn('CANCELADA', 'Cancelada', 'BOOLEAN', false, 1, false);
        $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Personalcirugia', 'Personalcirugia', RelationMap::ONE_TO_MANY, array('id' => 'agenda_id', ), 'SET NULL', 'CASCADE', 'Personalcirugias');
        $this->addRelation('Diagnosticocirugia', 'Diagnosticocirugia', RelationMap::ONE_TO_MANY, array('id' => 'agenda_id', ), null, null, 'Diagnosticocirugias');
        $this->addRelation('Procedimientocirugia', 'Procedimientocirugia', RelationMap::ONE_TO_MANY, array('id' => 'agenda_id', ), null, null, 'Procedimientocirugias');
        $this->addRelation('Procedimientregrogramado', 'Procedimientregrogramado', RelationMap::ONE_TO_MANY, array('id' => 'agenda_id', ), 'SET NULL', 'CASCADE', 'Procedimientregrogramados');
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
            'symfony_timestampable' => array('create_column' => 'created_at', 'update_column' => 'updated_at', ),
        );
    } // getBehaviors()

} // AgendaTableMap
