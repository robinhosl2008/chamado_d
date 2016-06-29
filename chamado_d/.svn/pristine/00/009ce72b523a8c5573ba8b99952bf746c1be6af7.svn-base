<?php



/**
 * This class defines the structure of the 'categoria' table.
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
class CategoriaTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.CategoriaTableMap';

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
		$this->setName('categoria');
		$this->setPhpName('Categoria');
		$this->setClassname('Categoria');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('categoria_co_categoria_seq');
		// columns
		$this->addPrimaryKey('CO_CATEGORIA', 'CoCategoria', 'INTEGER', true, null, null);
		$this->addColumn('NO_CATEGORIA', 'NoCategoria', 'VARCHAR', true, 250, null);
		$this->addColumn('NU_ORDEM', 'NuOrdem', 'INTEGER', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Tarefa', 'Tarefa', RelationMap::ONE_TO_MANY, array('co_categoria' => 'co_categoria', ), 'CASCADE', 'CASCADE', 'Tarefas');
		$this->addRelation('UsuarioCategoria', 'UsuarioCategoria', RelationMap::ONE_TO_MANY, array('co_categoria' => 'co_categoria', ), null, null, 'UsuarioCategorias');
	} // buildRelations()

} // CategoriaTableMap
