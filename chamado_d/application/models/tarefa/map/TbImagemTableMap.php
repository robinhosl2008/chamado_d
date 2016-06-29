<?php



/**
 * This class defines the structure of the 'tb_imagem' table.
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
class TbImagemTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.TbImagemTableMap';

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
		$this->setName('tb_imagem');
		$this->setPhpName('TbImagem');
		$this->setClassname('TbImagem');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('tb_imagem_co_seq_imagem_seq');
		// columns
		$this->addPrimaryKey('CO_SEQ_IMAGEM', 'CoSeqImagem', 'INTEGER', true, null, null);
		$this->addForeignKey('CO_SEQ_DESC_CHAMADO', 'CoSeqDescChamado', 'INTEGER', 'tb_descricao_chamado', 'CO_SEQ_DESC_CHAMADO', true, null, null);
		$this->addColumn('NO_IMAGEM', 'NoImagem', 'VARCHAR', true, null, null);
		$this->addColumn('DT_IMAGEM', 'DtImagem', 'TIMESTAMP', false, null, null);
		$this->addColumn('DS_EXTENSAO', 'DsExtensao', 'CHAR', false, 4, null);
		$this->addColumn('DS_CAMINHO', 'DsCaminho', 'VARCHAR', false, 60, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('TbDescricaoChamado', 'TbDescricaoChamado', RelationMap::MANY_TO_ONE, array('co_seq_desc_chamado' => 'co_seq_desc_chamado', ), null, null);
	} // buildRelations()

} // TbImagemTableMap
