<?php



/**
 * This class defines the structure of the 'recurso' table.
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
class RecursoTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.RecursoTableMap';

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
		$this->setName('recurso');
		$this->setPhpName('Recurso');
		$this->setClassname('Recurso');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('recurso_co_recurso_seq');
		// columns
		$this->addPrimaryKey('CO_RECURSO', 'CoRecurso', 'INTEGER', true, null, null);
		$this->addColumn('NO_RECURSO', 'NoRecurso', 'VARCHAR', false, 150, null);
		$this->addColumn('DS_RECURSO', 'DsRecurso', 'VARCHAR', false, 255, null);
		$this->addColumn('TP_RECURSO', 'TpRecurso', 'INTEGER', false, null, null);
		$this->addColumn('DT_CADASTRO', 'DtCadastro', 'TIMESTAMP', true, null, 'now()');
		$this->addColumn('CO_USUARIO_CADASTRO', 'CoUsuarioCadastro', 'INTEGER', false, null, null);
		$this->addColumn('DT_ALTERACAO', 'DtAlteracao', 'TIMESTAMP', false, null, null);
		$this->addColumn('CO_USUARIO_ALTERACAO', 'CoUsuarioAlteracao', 'INTEGER', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Permissao', 'Permissao', RelationMap::ONE_TO_MANY, array('co_recurso' => 'co_recurso', ), 'RESTRICT', 'CASCADE', 'Permissaos');
	} // buildRelations()

} // RecursoTableMap
