<?php



/**
 * This class defines the structure of the 'modulo_gerencia' table.
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
class ModuloGerenciaTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.ModuloGerenciaTableMap';

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
		$this->setName('modulo_gerencia');
		$this->setPhpName('ModuloGerencia');
		$this->setClassname('ModuloGerencia');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('modulo_gerencia_co_modulo_seq');
		// columns
		$this->addPrimaryKey('CO_MODULO', 'CoModulo', 'INTEGER', true, null, null);
		$this->addColumn('NO_MODULO', 'NoModulo', 'VARCHAR', false, 250, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Controller', 'Controller', RelationMap::ONE_TO_MANY, array('co_modulo' => 'co_modulo', ), 'CASCADE', 'CASCADE', 'Controllers');
	} // buildRelations()

} // ModuloGerenciaTableMap
