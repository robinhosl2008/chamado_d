<?php



/**
 * This class defines the structure of the 'rl_projeto_versao_amb' table.
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
class RlProjetoVersaoAmbTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.RlProjetoVersaoAmbTableMap';

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
		$this->setName('rl_projeto_versao_amb');
		$this->setPhpName('RlProjetoVersaoAmb');
		$this->setClassname('RlProjetoVersaoAmb');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('rl_projeto_versao_amb_co_seq_proj_ver_amb_seq');
		// columns
		$this->addPrimaryKey('CO_SEQ_PROJ_VER_AMB', 'CoSeqProjVerAmb', 'INTEGER', true, null, null);
		$this->addForeignKey('CO_AMBIENTE', 'CoAmbiente', 'INTEGER', 'ambiente', 'CO_AMBIENTE', true, null, null);
		$this->addForeignKey('CO_VERSAO', 'CoVersao', 'INTEGER', 'versao', 'CO_VERSAO', true, null, null);
		$this->addForeignKey('CO_PROJETO', 'CoProjeto', 'INTEGER', 'projeto', 'CO_PROJETO', true, null, null);
		$this->addColumn('DT_INICIO_RL', 'DtInicioRl', 'TIMESTAMP', true, null, null);
		$this->addColumn('DT_FIM_RL', 'DtFimRl', 'TIMESTAMP', false, null, null);
		$this->addColumn('ST_PROJ_VER_AMB', 'StProjVerAmb', 'BOOLEAN', true, null, true);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Ambiente', 'Ambiente', RelationMap::MANY_TO_ONE, array('co_ambiente' => 'co_ambiente', ), null, null);
		$this->addRelation('Projeto', 'Projeto', RelationMap::MANY_TO_ONE, array('co_projeto' => 'co_projeto', ), null, null);
		$this->addRelation('Versao', 'Versao', RelationMap::MANY_TO_ONE, array('co_versao' => 'co_versao', ), null, null);
		$this->addRelation('Tarefa', 'Tarefa', RelationMap::ONE_TO_MANY, array('co_seq_proj_ver_amb' => 'co_seq_proj_ver_amb', ), null, null, 'Tarefas');
	} // buildRelations()

} // RlProjetoVersaoAmbTableMap
