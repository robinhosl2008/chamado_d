<?php



/**
 * This class defines the structure of the 'rl_usuario_orgao' table.
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
class RlUsuarioOrgaoTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.RlUsuarioOrgaoTableMap';

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
		$this->setName('rl_usuario_orgao');
		$this->setPhpName('RlUsuarioOrgao');
		$this->setClassname('RlUsuarioOrgao');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('rl_usuario_orgao_co_seq_usuario_orgao_seq');
		// columns
		$this->addPrimaryKey('CO_SEQ_USUARIO_ORGAO', 'CoSeqUsuarioOrgao', 'INTEGER', true, null, null);
		$this->addForeignKey('CO_ORGAO', 'CoOrgao', 'INTEGER', 'orgao', 'CO_ORGAO', true, null, null);
		$this->addForeignKey('CO_USUARIO', 'CoUsuario', 'INTEGER', 'usuario', 'CO_USUARIO', true, null, null);
		$this->addColumn('DT_INICIO_RL', 'DtInicioRl', 'TIMESTAMP', true, null, null);
		$this->addColumn('DT_FIM_RL', 'DtFimRl', 'TIMESTAMP', false, null, null);
		$this->addColumn('ST_RL_USUARIO_ORGAO', 'StRlUsuarioOrgao', 'BOOLEAN', true, null, true);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Orgao', 'Orgao', RelationMap::MANY_TO_ONE, array('co_orgao' => 'co_orgao', ), null, null);
		$this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('co_usuario' => 'co_usuario', ), null, null);
	} // buildRelations()

} // RlUsuarioOrgaoTableMap
