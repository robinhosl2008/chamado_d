<?php



/**
 * This class defines the structure of the 'tb_descricao_chamado' table.
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
class TbDescricaoChamadoTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.TbDescricaoChamadoTableMap';

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
		$this->setName('tb_descricao_chamado');
		$this->setPhpName('TbDescricaoChamado');
		$this->setClassname('TbDescricaoChamado');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('tb_descricao_chamado_co_seq_desc_chamado_seq');
		// columns
		$this->addPrimaryKey('CO_SEQ_DESC_CHAMADO', 'CoSeqDescChamado', 'INTEGER', true, null, null);
		$this->addForeignKey('CO_TAREFA', 'CoTarefa', 'INTEGER', 'tarefa', 'CO_TAREFA', true, null, null);
		$this->addForeignKey('CO_USUARIO', 'CoUsuario', 'INTEGER', 'usuario', 'CO_USUARIO', true, null, null);
		$this->addColumn('DS_CHAMADO', 'DsChamado', 'VARCHAR', true, 3000, null);
		$this->addColumn('DT_CADASTRO', 'DtCadastro', 'TIMESTAMP', true, null, null);
		$this->addColumn('DT_ATUALIZACAO', 'DtAtualizacao', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Tarefa', 'Tarefa', RelationMap::MANY_TO_ONE, array('co_tarefa' => 'co_tarefa', ), null, null);
		$this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('co_usuario' => 'co_usuario', ), null, null);
		$this->addRelation('TbImagem', 'TbImagem', RelationMap::ONE_TO_MANY, array('co_seq_desc_chamado' => 'co_seq_desc_chamado', ), null, null, 'TbImagems');
	} // buildRelations()

} // TbDescricaoChamadoTableMap
