<?php



/**
 * This class defines the structure of the 'menu' table.
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
class MenuTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.MenuTableMap';

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
		$this->setName('menu');
		$this->setPhpName('Menu');
		$this->setClassname('Menu');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('menu_co_menu_seq');
		// columns
		$this->addPrimaryKey('CO_MENU', 'CoMenu', 'INTEGER', true, null, null);
		$this->addForeignKey('NO_MODULO', 'NoModulo', 'VARCHAR', 'modulo', 'NO_MODULO', true, 50, null);
		$this->addColumn('NO_EXIBICAO', 'NoExibicao', 'VARCHAR', false, 100, null);
		$this->addColumn('DS_TOOLTIP', 'DsTooltip', 'VARCHAR', false, 255, null);
		$this->addColumn('DS_URL', 'DsUrl', 'VARCHAR', true, 255, null);
		$this->addColumn('NU_ORDEM', 'NuOrdem', 'INTEGER', true, null, 0);
		$this->addColumn('ST_ATIVO', 'StAtivo', 'BOOLEAN', true, null, true);
		$this->addColumn('DT_CADASTRO', 'DtCadastro', 'TIMESTAMP', true, null, 'now()');
		$this->addColumn('CO_USUARIO_CADASTRO', 'CoUsuarioCadastro', 'INTEGER', false, null, null);
		$this->addColumn('DT_ALTERACAO', 'DtAlteracao', 'TIMESTAMP', false, null, null);
		$this->addColumn('CO_USUARIO_ALTERACAO', 'CoUsuarioAlteracao', 'INTEGER', false, null, null);
		$this->addColumn('ST_NAO_EXIBIR', 'StNaoExibir', 'BOOLEAN', false, null, false);
		$this->addColumn('NO_ICON', 'NoIcon', 'VARCHAR', false, 100, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Modulo', 'Modulo', RelationMap::MANY_TO_ONE, array('no_modulo' => 'no_modulo', ), 'RESTRICT', 'CASCADE');
	} // buildRelations()

} // MenuTableMap
