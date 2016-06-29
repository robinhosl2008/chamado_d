<?php



/**
 * This class defines the structure of the 'ht_tarefa' table.
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
class HtTarefaTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.HtTarefaTableMap';

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
		$this->setName('ht_tarefa');
		$this->setPhpName('HtTarefa');
		$this->setClassname('HtTarefa');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('ht_tarefa_co_seq_ht_tarefa_seq');
		// columns
		$this->addPrimaryKey('CO_SEQ_HT_TAREFA', 'CoSeqHtTarefa', 'INTEGER', true, null, null);
		$this->addColumn('CO_TAREFA', 'CoTarefa', 'INTEGER', true, null, null);
		$this->addColumn('CO_CATEGORIA', 'CoCategoria', 'INTEGER', true, null, null);
		$this->addColumn('CO_STATUS', 'CoStatus', 'INTEGER', true, null, null);
		$this->addColumn('CO_PRIORIDADE', 'CoPrioridade', 'INTEGER', true, null, null);
		$this->addColumn('CO_USUARIO_FECHAMENTO', 'CoUsuarioFechamento', 'INTEGER', false, null, null);
		$this->addColumn('CO_NIVEL', 'CoNivel', 'INTEGER', true, null, null);
		$this->addColumn('CO_SEQ_PROJ_VER_AMB', 'CoSeqProjVerAmb', 'INTEGER', true, null, null);
		$this->addColumn('CO_USUARIO_ABERTO', 'CoUsuarioAberto', 'INTEGER', true, null, null);
		$this->addColumn('CO_USUARIO_ATUALIZACAO', 'CoUsuarioAtualizacao', 'INTEGER', false, null, null);
		$this->addColumn('DT_INICIO', 'DtInicio', 'TIMESTAMP', false, null, 'now()');
		$this->addColumn('DT_PREVISAO', 'DtPrevisao', 'TIMESTAMP', false, null, null);
		$this->addColumn('DT_FIM', 'DtFim', 'TIMESTAMP', false, null, null);
		$this->addColumn('DT_ATUALIZACAO', 'DtAtualizacao', 'TIMESTAMP', true, null, null);
		$this->addColumn('NO_RESUMO', 'NoResumo', 'VARCHAR', true, 200, null);
		$this->addColumn('CO_ORGAO', 'CoOrgao', 'INTEGER', true, null, null);
		$this->addColumn('EMAIL_ADICIONAIS', 'EmailAdicionais', 'VARCHAR', false, null, null);
		$this->addColumn('CO_SEQ_MODULO_PROJ', 'CoSeqModuloProj', 'INTEGER', false, null, null);
		$this->addColumn('NR_TAREFA', 'NrTarefa', 'INTEGER', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // HtTarefaTableMap
