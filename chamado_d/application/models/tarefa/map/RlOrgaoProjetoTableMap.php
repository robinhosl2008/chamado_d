<?php



/**
 * This class defines the structure of the 'rl_orgao_projeto' table.
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
class RlOrgaoProjetoTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.RlOrgaoProjetoTableMap';

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
		$this->setName('rl_orgao_projeto');
		$this->setPhpName('RlOrgaoProjeto');
		$this->setClassname('RlOrgaoProjeto');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(false);
		// columns
		$this->addForeignPrimaryKey('CO_ORGAO', 'CoOrgao', 'INTEGER' , 'orgao', 'CO_ORGAO', true, null, null);
		$this->addForeignPrimaryKey('CO_PROJETO', 'CoProjeto', 'INTEGER' , 'projeto', 'CO_PROJETO', true, null, null);
		$this->addColumn('DT_OGAO_PROJETO', 'DtOgaoProjeto', 'TIMESTAMP', true, null, null);
		$this->addColumn('ST_OGAO_PROJETO', 'StOgaoProjeto', 'BOOLEAN', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Orgao', 'Orgao', RelationMap::MANY_TO_ONE, array('co_orgao' => 'co_orgao', ), null, null);
		$this->addRelation('Projeto', 'Projeto', RelationMap::MANY_TO_ONE, array('co_projeto' => 'co_projeto', ), null, null);
	} // buildRelations()

} // RlOrgaoProjetoTableMap
