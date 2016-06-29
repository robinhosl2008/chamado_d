<?php



/**
 * This class defines the structure of the 'orgao' table.
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
class OrgaoTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.OrgaoTableMap';

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
		$this->setName('orgao');
		$this->setPhpName('Orgao');
		$this->setClassname('Orgao');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('orgao_co_orgao_seq');
		// columns
		$this->addPrimaryKey('CO_ORGAO', 'CoOrgao', 'INTEGER', true, null, null);
		$this->addColumn('NO_ORGAO', 'NoOrgao', 'VARCHAR', true, null, null);
		$this->addColumn('NU_TELEFONE_ORGAO', 'NuTelefoneOrgao', 'VARCHAR', true, 15, null);
		$this->addColumn('SG_ORGAO', 'SgOrgao', 'VARCHAR', false, 10, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('RlOrgaoProjeto', 'RlOrgaoProjeto', RelationMap::ONE_TO_MANY, array('co_orgao' => 'co_orgao', ), null, null, 'RlOrgaoProjetos');
		$this->addRelation('RlUsuarioOrgao', 'RlUsuarioOrgao', RelationMap::ONE_TO_MANY, array('co_orgao' => 'co_orgao', ), null, null, 'RlUsuarioOrgaos');
		$this->addRelation('Tarefa', 'Tarefa', RelationMap::ONE_TO_MANY, array('co_orgao' => 'co_orgao', ), null, null, 'Tarefas');
	} // buildRelations()

} // OrgaoTableMap
