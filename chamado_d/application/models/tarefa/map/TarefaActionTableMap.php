<?php



/**
 * This class defines the structure of the 'tarefa_action' table.
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
class TarefaActionTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.TarefaActionTableMap';

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
		$this->setName('tarefa_action');
		$this->setPhpName('TarefaAction');
		$this->setClassname('TarefaAction');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(false);
		// columns
		$this->addForeignPrimaryKey('CO_TAREFA', 'CoTarefa', 'INTEGER' , 'tarefa', 'CO_TAREFA', true, null, null);
		$this->addForeignPrimaryKey('CO_ACTION', 'CoAction', 'INTEGER' , 'action', 'CO_ACTION', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Action', 'Action', RelationMap::MANY_TO_ONE, array('co_action' => 'co_action', ), null, null);
		$this->addRelation('Tarefa', 'Tarefa', RelationMap::MANY_TO_ONE, array('co_tarefa' => 'co_tarefa', ), null, null);
	} // buildRelations()

} // TarefaActionTableMap
