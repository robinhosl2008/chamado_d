<?php



/**
 * This class defines the structure of the 'modulo' table.
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
class ModuloTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.ModuloTableMap';

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
		$this->setName('modulo');
		$this->setPhpName('Modulo');
		$this->setClassname('Modulo');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('NO_MODULO', 'NoModulo', 'VARCHAR', true, 50, null);
		$this->addColumn('NO_EXIBICAO', 'NoExibicao', 'VARCHAR', true, 100, null);
		$this->addColumn('DS_MODULO', 'DsModulo', 'LONGVARCHAR', false, null, null);
		$this->addColumn('NU_ORDEM', 'NuOrdem', 'INTEGER', false, null, 0);
		$this->addColumn('NO_ICON', 'NoIcon', 'VARCHAR', false, 200, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Menu', 'Menu', RelationMap::ONE_TO_MANY, array('no_modulo' => 'no_modulo', ), 'RESTRICT', 'CASCADE', 'Menus');
	} // buildRelations()

} // ModuloTableMap
