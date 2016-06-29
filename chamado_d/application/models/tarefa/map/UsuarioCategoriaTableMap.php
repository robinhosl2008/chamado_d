<?php



/**
 * This class defines the structure of the 'usuario_categoria' table.
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
class UsuarioCategoriaTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.UsuarioCategoriaTableMap';

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
		$this->setName('usuario_categoria');
		$this->setPhpName('UsuarioCategoria');
		$this->setClassname('UsuarioCategoria');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(false);
		// columns
		$this->addForeignPrimaryKey('CO_USUARIO', 'CoUsuario', 'INTEGER' , 'usuario', 'CO_USUARIO', true, null, null);
		$this->addForeignPrimaryKey('CO_CATEGORIA', 'CoCategoria', 'INTEGER' , 'categoria', 'CO_CATEGORIA', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Categoria', 'Categoria', RelationMap::MANY_TO_ONE, array('co_categoria' => 'co_categoria', ), null, null);
		$this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('co_usuario' => 'co_usuario', ), null, null);
	} // buildRelations()

} // UsuarioCategoriaTableMap