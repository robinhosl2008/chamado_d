<?php



/**
 * This class defines the structure of the 'versao' table.
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
class VersaoTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.VersaoTableMap';

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
		$this->setName('versao');
		$this->setPhpName('Versao');
		$this->setClassname('Versao');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('versao_co_versao_seq');
		// columns
		$this->addPrimaryKey('CO_VERSAO', 'CoVersao', 'INTEGER', true, null, null);
		$this->addForeignKey('CO_PROJETO', 'CoProjeto', 'INTEGER', 'projeto', 'CO_PROJETO', true, null, null);
		$this->addColumn('DS_VERSAO', 'DsVersao', 'VARCHAR', false, null, null);
		$this->addColumn('ST_VERSAO', 'StVersao', 'BOOLEAN', true, null, true);
		$this->addColumn('NO_VERSAO', 'NoVersao', 'VARCHAR', true, 70, null);
		$this->addForeignKey('CO_SEQ_TIPO_VERSAO', 'CoSeqTipoVersao', 'INTEGER', 'tb_tipo_versao', 'CO_SEQ_TIPO_VERSAO', true, null, null);
		$this->addColumn('DT_CADASTRO_VERSAO', 'DtCadastroVersao', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Projeto', 'Projeto', RelationMap::MANY_TO_ONE, array('co_projeto' => 'co_projeto', ), null, null);
		$this->addRelation('TbTipoVersao', 'TbTipoVersao', RelationMap::MANY_TO_ONE, array('co_seq_tipo_versao' => 'co_seq_tipo_versao', ), null, null);
		$this->addRelation('RlProjetoVersaoAmb', 'RlProjetoVersaoAmb', RelationMap::ONE_TO_MANY, array('co_versao' => 'co_versao', ), null, null, 'RlProjetoVersaoAmbs');
	} // buildRelations()

} // VersaoTableMap
