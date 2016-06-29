<?php



/**
 * This class defines the structure of the 'usuario_tarefa' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.tarefa.map
 */
class UsuarioTarefaTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.UsuarioTarefaTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
		// attributes
		$this->setName('usuario_tarefa');
		$this->setPhpName('UsuarioTarefa');
		$this->setClassname('UsuarioTarefa');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('usuario_tarefa_co_seq_usuario_tarefa_seq');
		// columns
		$this->addForeignKey('CO_USUARIO', 'CoUsuario', 'INTEGER', 'usuario', 'CO_USUARIO', true, null, null);
		$this->addForeignKey('CO_TAREFA', 'CoTarefa', 'INTEGER', 'tarefa', 'CO_TAREFA', true, null, null);
		$this->addForeignKey('CO_STATUS', 'CoStatus', 'INTEGER', 'status', 'CO_STATUS', true, null, null);
		$this->addColumn('DT_ATUALIZACAO', 'DtAtualizacao', 'TIMESTAMP', true, null, 'now()');
		$this->addPrimaryKey('CO_SEQ_USUARIO_TAREFA', 'CoSeqUsuarioTarefa', 'INTEGER', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Status', 'Status', RelationMap::MANY_TO_ONE, array('co_status' => 'co_status', ), null, null);
		$this->addRelation('Tarefa', 'Tarefa', RelationMap::MANY_TO_ONE, array('co_tarefa' => 'co_tarefa', ), null, null);
		$this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('co_usuario' => 'co_usuario', ), null, null);
	} // buildRelations()

} // UsuarioTarefaTableMap
