<?php



/**
 * This class defines the structure of the 'tarefa' table.
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
class TarefaTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.TarefaTableMap';

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
		$this->setName('tarefa');
		$this->setPhpName('Tarefa');
		$this->setClassname('Tarefa');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('tarefa_co_tarefa_seq');
		// columns
		$this->addPrimaryKey('CO_TAREFA', 'CoTarefa', 'INTEGER', true, null, null);
		$this->addColumn('DT_INICIO', 'DtInicio', 'TIMESTAMP', false, null, 'now()');
		$this->addColumn('DT_PREVISAO', 'DtPrevisao', 'TIMESTAMP', false, null, null);
		$this->addColumn('DT_FIM', 'DtFim', 'TIMESTAMP', false, null, null);
		$this->addForeignKey('CO_CATEGORIA', 'CoCategoria', 'INTEGER', 'categoria', 'CO_CATEGORIA', true, null, 1);
		$this->addForeignKey('CO_NIVEL', 'CoNivel', 'INTEGER', 'nivel', 'CO_NIVEL', true, null, 1);
		$this->addForeignKey('CO_PRIORIDADE', 'CoPrioridade', 'INTEGER', 'prioridade', 'CO_PRIORIDADE', true, null, 1);
		$this->addForeignKey('CO_STATUS', 'CoStatus', 'INTEGER', 'status', 'CO_STATUS', true, null, 1);
		$this->addColumn('CO_USUARIO_FECHAMENTO', 'CoUsuarioFechamento', 'INTEGER', false, null, null);
		$this->addForeignKey('CO_SEQ_PROJ_VER_AMB', 'CoSeqProjVerAmb', 'INTEGER', 'rl_projeto_versao_amb', 'CO_SEQ_PROJ_VER_AMB', true, null, null);
		$this->addColumn('CO_USUARIO_ABERTO', 'CoUsuarioAberto', 'INTEGER', true, null, null);
		$this->addColumn('CO_USUARIO_ATUALIZACAO', 'CoUsuarioAtualizacao', 'INTEGER', false, null, null);
		$this->addColumn('NO_RESUMO', 'NoResumo', 'VARCHAR', true, 200, null);
		$this->addForeignKey('CO_ORGAO', 'CoOrgao', 'INTEGER', 'orgao', 'CO_ORGAO', true, null, null);
		$this->addColumn('EMAIL_ADICIONAIS', 'EmailAdicionais', 'VARCHAR', false, null, null);
		$this->addForeignKey('CO_SEQ_MODULO_PROJ', 'CoSeqModuloProj', 'INTEGER', 'tb_modulo_projeto', 'CO_SEQ_MODULO_PROJ', false, null, null);
		$this->addColumn('NR_TAREFA', 'NrTarefa', 'INTEGER', false, null, null);
		$this->addColumn('NR_SIRIUS', 'NrSirius', 'INTEGER', false, null, null);
		$this->addColumn('CO_USUARIO_ATENDIMENTO', 'CoUsuarioAtendimento', 'INTEGER', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Orgao', 'Orgao', RelationMap::MANY_TO_ONE, array('co_orgao' => 'co_orgao', ), null, null);
		$this->addRelation('RlProjetoVersaoAmb', 'RlProjetoVersaoAmb', RelationMap::MANY_TO_ONE, array('co_seq_proj_ver_amb' => 'co_seq_proj_ver_amb', ), null, null);
		$this->addRelation('Categoria', 'Categoria', RelationMap::MANY_TO_ONE, array('co_categoria' => 'co_categoria', ), 'CASCADE', 'CASCADE');
		$this->addRelation('Nivel', 'Nivel', RelationMap::MANY_TO_ONE, array('co_nivel' => 'co_nivel', ), null, null);
		$this->addRelation('Prioridade', 'Prioridade', RelationMap::MANY_TO_ONE, array('co_prioridade' => 'co_prioridade', ), 'CASCADE', 'CASCADE');
		$this->addRelation('Status', 'Status', RelationMap::MANY_TO_ONE, array('co_status' => 'co_status', ), 'CASCADE', 'CASCADE');
		$this->addRelation('TbModuloProjeto', 'TbModuloProjeto', RelationMap::MANY_TO_ONE, array('co_seq_modulo_proj' => 'co_seq_modulo_proj', ), null, null);
		$this->addRelation('TbDescricaoChamado', 'TbDescricaoChamado', RelationMap::ONE_TO_MANY, array('co_tarefa' => 'co_tarefa', ), null, null, 'TbDescricaoChamados');
		$this->addRelation('UsuarioTarefa', 'UsuarioTarefa', RelationMap::ONE_TO_MANY, array('co_tarefa' => 'co_tarefa', ), null, null, 'UsuarioTarefas');
	} // buildRelations()

} // TarefaTableMap
