<?php



/**
 * This class defines the structure of the 'tb_tipo_versao' table.
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
class TbTipoVersaoTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.TbTipoVersaoTableMap';

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
		$this->setName('tb_tipo_versao');
		$this->setPhpName('TbTipoVersao');
		$this->setClassname('TbTipoVersao');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('tb_tipo_versao_co_seq_tipo_versao_seq');
		// columns
		$this->addPrimaryKey('CO_SEQ_TIPO_VERSAO', 'CoSeqTipoVersao', 'INTEGER', true, null, null);
		$this->addColumn('NO_TIPO_VERSAO', 'NoTipoVersao', 'VARCHAR', true, 70, null);
		$this->addColumn('ST_TIPO_VERSAO', 'StTipoVersao', 'BOOLEAN', true, null, true);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Versao', 'Versao', RelationMap::ONE_TO_MANY, array('co_seq_tipo_versao' => 'co_seq_tipo_versao', ), null, null, 'Versaos');
	} // buildRelations()

} // TbTipoVersaoTableMap
