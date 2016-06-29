<?php



/**
 * This class defines the structure of the 'projeto' table.
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
class ProjetoTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.ProjetoTableMap';

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
		$this->setName('projeto');
		$this->setPhpName('Projeto');
		$this->setClassname('Projeto');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('projeto_co_projeto_seq');
		// columns
		$this->addPrimaryKey('CO_PROJETO', 'CoProjeto', 'INTEGER', true, null, null);
		$this->addColumn('NO_PROJETO', 'NoProjeto', 'VARCHAR', true, 20, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('RlOrgaoProjeto', 'RlOrgaoProjeto', RelationMap::ONE_TO_MANY, array('co_projeto' => 'co_projeto', ), null, null, 'RlOrgaoProjetos');
		$this->addRelation('RlProjetoVersaoAmb', 'RlProjetoVersaoAmb', RelationMap::ONE_TO_MANY, array('co_projeto' => 'co_projeto', ), null, null, 'RlProjetoVersaoAmbs');
		$this->addRelation('TbModuloProjeto', 'TbModuloProjeto', RelationMap::ONE_TO_MANY, array('co_projeto' => 'co_projeto', ), null, null, 'TbModuloProjetos');
		$this->addRelation('Versao', 'Versao', RelationMap::ONE_TO_MANY, array('co_projeto' => 'co_projeto', ), null, null, 'Versaos');
	} // buildRelations()

} // ProjetoTableMap
