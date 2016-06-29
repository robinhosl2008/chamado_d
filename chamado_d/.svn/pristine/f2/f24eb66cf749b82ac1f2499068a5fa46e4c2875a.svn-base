<?php



/**
 * This class defines the structure of the 'status' table.
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
class StatusTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.StatusTableMap';

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
		$this->setName('status');
		$this->setPhpName('Status');
		$this->setClassname('Status');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('status_co_status_seq');
		// columns
		$this->addPrimaryKey('CO_STATUS', 'CoStatus', 'INTEGER', true, null, null);
		$this->addColumn('NO_STATUS', 'NoStatus', 'VARCHAR', false, 200, null);
		$this->addColumn('SITUACAO', 'Situacao', 'BOOLEAN', true, null, true);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Tarefa', 'Tarefa', RelationMap::ONE_TO_MANY, array('co_status' => 'co_status', ), 'CASCADE', 'CASCADE', 'Tarefas');
		$this->addRelation('UsuarioTarefa', 'UsuarioTarefa', RelationMap::ONE_TO_MANY, array('co_status' => 'co_status', ), null, null, 'UsuarioTarefas');
	} // buildRelations()

} // StatusTableMap
