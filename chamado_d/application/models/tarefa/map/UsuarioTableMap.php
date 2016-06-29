<?php



/**
 * This class defines the structure of the 'usuario' table.
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
class UsuarioTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'tarefa.map.UsuarioTableMap';

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
		$this->setName('usuario');
		$this->setPhpName('Usuario');
		$this->setClassname('Usuario');
		$this->setPackage('tarefa');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('usuario_co_usuario_seq');
		// columns
		$this->addPrimaryKey('CO_USUARIO', 'CoUsuario', 'INTEGER', true, null, null);
		$this->addColumn('NU_CPF', 'NuCpf', 'VARCHAR', false, 11, null);
		$this->addColumn('DS_PASSWORD', 'DsPassword', 'VARCHAR', true, 10, null);
		$this->addColumn('NO_USUARIO', 'NoUsuario', 'VARCHAR', true, 70, null);
		$this->addColumn('DS_LOGIN', 'DsLogin', 'VARCHAR', false, 39, null);
		$this->addColumn('DT_ULTIMO_LOGIN', 'DtUltimoLogin', 'TIMESTAMP', false, null, null);
		$this->addColumn('DS_EMAIL', 'DsEmail', 'VARCHAR', false, 120, null);
		$this->addForeignKey('CO_PERFIL', 'CoPerfil', 'INTEGER', 'perfil', 'CO_PERFIL', true, null, null);
		$this->addColumn('NU_CELULAR', 'NuCelular', 'VARCHAR', false, 15, null);
		$this->addColumn('NU_TELEFONE', 'NuTelefone', 'VARCHAR', true, 15, null);
		$this->addColumn('ST_USUARIO', 'StUsuario', 'BOOLEAN', false, null, true);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Perfil', 'Perfil', RelationMap::MANY_TO_ONE, array('co_perfil' => 'co_perfil', ), 'RESTRICT', 'CASCADE');
		$this->addRelation('PermissaoRelatedByCoUsuarioAlteracao', 'Permissao', RelationMap::ONE_TO_MANY, array('co_usuario' => 'co_usuario_alteracao', ), 'RESTRICT', 'CASCADE', 'PermissaosRelatedByCoUsuarioAlteracao');
		$this->addRelation('PermissaoRelatedByCoUsuarioCadastro', 'Permissao', RelationMap::ONE_TO_MANY, array('co_usuario' => 'co_usuario_cadastro', ), 'RESTRICT', 'CASCADE', 'PermissaosRelatedByCoUsuarioCadastro');
		$this->addRelation('RlUsuarioOrgao', 'RlUsuarioOrgao', RelationMap::ONE_TO_MANY, array('co_usuario' => 'co_usuario', ), null, null, 'RlUsuarioOrgaos');
		$this->addRelation('TbDescricaoChamado', 'TbDescricaoChamado', RelationMap::ONE_TO_MANY, array('co_usuario' => 'co_usuario', ), null, null, 'TbDescricaoChamados');
		$this->addRelation('UsuarioCategoria', 'UsuarioCategoria', RelationMap::ONE_TO_MANY, array('co_usuario' => 'co_usuario', ), null, null, 'UsuarioCategorias');
		$this->addRelation('UsuarioTarefa', 'UsuarioTarefa', RelationMap::ONE_TO_MANY, array('co_usuario' => 'co_usuario', ), null, null, 'UsuarioTarefas');
	} // buildRelations()

} // UsuarioTableMap
