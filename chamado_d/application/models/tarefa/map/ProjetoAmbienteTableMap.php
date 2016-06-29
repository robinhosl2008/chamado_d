<?php



/**
 * This class defines the structure of the 'projeto_ambiente' table.
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
class ProjetoAmbienteTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.ProjetoAmbienteTableMap';

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
		$this->setName('projeto_ambiente');
		$this->setPhpName('ProjetoAmbiente');
		$this->setClassname('ProjetoAmbiente');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(false);
		// columns
		$this->addForeignPrimaryKey('CO_PROJETO', 'CoProjeto', 'INTEGER' , 'projeto', 'CO_PROJETO', true, null, null);
		$this->addForeignPrimaryKey('CO_AMBIENTE', 'CoAmbiente', 'INTEGER' , 'ambiente', 'CO_AMBIENTE', true, null, null);
		$this->addColumn('ST_PROJETO_AMBIENTE', 'StProjetoAmbiente', 'BOOLEAN', true, null, true);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Ambiente', 'Ambiente', RelationMap::MANY_TO_ONE, array('co_ambiente' => 'co_ambiente', ), null, null);
		$this->addRelation('Projeto', 'Projeto', RelationMap::MANY_TO_ONE, array('co_projeto' => 'co_projeto', ), null, null);
		$this->addRelation('Tarefa', 'Tarefa', RelationMap::ONE_TO_MANY, array('co_ambiente' => 'co_ambiente', 'co_projeto' => 'co_projeto', ), null, null, 'Tarefas');
	} // buildRelations()

} // ProjetoAmbienteTableMap
