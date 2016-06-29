<?php



/**
 * This class defines the structure of the 'controller' table.
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
class ControllerTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.ControllerTableMap';

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
		$this->setName('controller');
		$this->setPhpName('Controller');
		$this->setClassname('Controller');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('controller_co_controller_seq');
		// columns
		$this->addPrimaryKey('CO_CONTROLLER', 'CoController', 'INTEGER', true, null, null);
		$this->addColumn('NO_CONTROLLER', 'NoController', 'VARCHAR', true, 250, null);
		$this->addColumn('NO_URL', 'NoUrl', 'VARCHAR', false, 250, null);
		$this->addForeignKey('CO_MODULO', 'CoModulo', 'INTEGER', 'modulo_gerencia', 'CO_MODULO', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('ModuloGerencia', 'ModuloGerencia', RelationMap::MANY_TO_ONE, array('co_modulo' => 'co_modulo', ), 'CASCADE', 'CASCADE');
		$this->addRelation('Action', 'Action', RelationMap::ONE_TO_MANY, array('co_controller' => 'co_controller', ), 'CASCADE', 'CASCADE', 'Actions');
		$this->addRelation('Tarefa', 'Tarefa', RelationMap::ONE_TO_MANY, array('co_controller' => 'co_controller', ), 'CASCADE', 'CASCADE', 'Tarefas');
	} // buildRelations()

} // ControllerTableMap
