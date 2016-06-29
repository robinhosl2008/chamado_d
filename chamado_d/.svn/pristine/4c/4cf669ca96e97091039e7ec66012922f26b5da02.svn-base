<?php



/**
 * This class defines the structure of the 'ambiente' table.
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
class AmbienteTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.AmbienteTableMap';

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
		$this->setName('ambiente');
		$this->setPhpName('Ambiente');
		$this->setClassname('Ambiente');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('ambiente_co_ambiente_seq');
		// columns
		$this->addPrimaryKey('CO_AMBIENTE', 'CoAmbiente', 'INTEGER', true, null, null);
		$this->addColumn('NO_AMBIENTE', 'NoAmbiente', 'VARCHAR', true, 30, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('RlProjetoVersaoAmb', 'RlProjetoVersaoAmb', RelationMap::ONE_TO_MANY, array('co_ambiente' => 'co_ambiente', ), null, null, 'RlProjetoVersaoAmbs');
	} // buildRelations()

} // AmbienteTableMap
