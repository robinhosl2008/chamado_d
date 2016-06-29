<?php



/**
 * This class defines the structure of the 'prioridade' table.
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
class PrioridadeTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.PrioridadeTableMap';

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
		$this->setName('prioridade');
		$this->setPhpName('Prioridade');
		$this->setClassname('Prioridade');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('prioridade_co_prioridade_seq');
		// columns
		$this->addPrimaryKey('CO_PRIORIDADE', 'CoPrioridade', 'INTEGER', true, null, null);
		$this->addColumn('NO_PRIORIDADE', 'NoPrioridade', 'VARCHAR', true, 30, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Tarefa', 'Tarefa', RelationMap::ONE_TO_MANY, array('co_prioridade' => 'co_prioridade', ), 'CASCADE', 'CASCADE', 'Tarefas');
	} // buildRelations()

} // PrioridadeTableMap
