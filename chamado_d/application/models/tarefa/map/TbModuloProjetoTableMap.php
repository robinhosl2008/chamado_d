<?php



/**
 * This class defines the structure of the 'tb_modulo_projeto' table.
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
class TbModuloProjetoTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.TbModuloProjetoTableMap';

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
		$this->setName('tb_modulo_projeto');
		$this->setPhpName('TbModuloProjeto');
		$this->setClassname('TbModuloProjeto');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('tb_modulo_projeto_co_seq_modulo_proj_seq');
		// columns
		$this->addPrimaryKey('CO_SEQ_MODULO_PROJ', 'CoSeqModuloProj', 'INTEGER', true, null, null);
		$this->addForeignKey('CO_PROJETO', 'CoProjeto', 'INTEGER', 'projeto', 'CO_PROJETO', true, null, null);
		$this->addColumn('NO_MODULO', 'NoModulo', 'VARCHAR', true, null, null);
		$this->addColumn('DS_MODULO', 'DsModulo', 'VARCHAR', false, null, null);
		$this->addColumn('ST_MODULO', 'StModulo', 'BOOLEAN', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Projeto', 'Projeto', RelationMap::MANY_TO_ONE, array('co_projeto' => 'co_projeto', ), null, null);
		$this->addRelation('Tarefa', 'Tarefa', RelationMap::ONE_TO_MANY, array('co_seq_modulo_proj' => 'co_seq_modulo_proj', ), null, null, 'Tarefas');
	} // buildRelations()

} // TbModuloProjetoTableMap
