<?php



/**
 * Skeleton subclass for performing query and update operations on the 'usuario' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.report
 */
class UsuarioPeer extends BaseUsuarioPeer {
    
    public static function gravarUsuario(array $aForm) {

        $objLog = new Base_Util_FileLog();

        $cousuario = trim($aForm['co_usuario']);
        $username = trim($aForm['no_usuario']);
        $useremail = trim($aForm['ds_email']);
        $userlogin = trim($aForm['ds_login']);
        $userpassword = trim($aForm['userpassword']);
        $perfil = trim($aForm['perfil']);

        if (!$cousuario) {
            if (UsuarioQuery::create()->findOneByDsLogin($userlogin)) {
                throw new Exception("Login já cadastrado");
            }            
        }

        try {

            $pdo = Propel::getConnection();

            $pdo->beginTransaction();

            if ($cousuario) {
                $objUsuario = UsuarioQuery::create()->filterByCoUsuario($cousuario)->findOne();
            }
            if (!$objUsuario) {
                $objUsuario = new Usuario;
            }

            $objUsuario->setNoUsuario($username);
            $objUsuario->setDsEmail($useremail);
            $objUsuario->setCoPerfil((int) $perfil);

            $objUsuario->setDsLogin($userlogin);

            if ($cousuario) {

                if ($userpassword) {

                    $objUsuario->setDsPassword($userpassword);
                }
            } else {

                $objUsuario->setDsPassword($userpassword);
            }

          

            $objLog->write("Usuário ");

            $objUsuario->save($pdo);

            $pdo->commit();

            $objLog->write("Usuário inserido ");

            return true;
        } catch (Exception $e) {

            $objLog->write("Erro inserção " . __METHOD__ . " => " . $e->getMessage());

            $pdo->rollBack();

            return false;
        }
    }

    public static function getUsuarios($pdo, $tipoBusca, $porNome, $porPerfil, $porStatus, $numLinhasSelect, $paginaAtual){
        try{
            $select = "SELECT DISTINCT u.*, p.no_perfil FROM usuario u
					  INNER JOIN perfil p ON p.co_perfil = u.co_perfil
					  INNER JOIN rl_usuario_orgao rluo on u.co_usuario = rluo.co_usuario ";

            switch($tipoBusca){
                case 1:
                    $select .= " WHERE u.no_usuario ILIKE '%$porNome%' ";
                    break;
                case 2:
                    $select .= " WHERE u.co_perfil = '$porPerfil' ";//echo "estou no case 2: do perfil";exit;
                    break;
                case 3:
                    $select .= " WHERE u.st_usuario = '$porStatus' ";
            }

            if(CO_PERFIL != 1){
                $select .= " AND rluo.co_orgao = ".CO_USUARIO_ORGAO." ";
            }

            $select .= " ORDER BY u.no_usuario ";

            $stmt = $pdo->query($select);
            $dados = $stmt->fetchAll();

            $result = Zend_Paginator::factory($dados);
            $result->setItemCountPerPage($numLinhasSelect);
            $result->setCurrentPageNumber($paginaAtual);

            $oTotal = $result->getAdapter()->count();

            return array('0' => $result, '1' => $oTotal);

        }catch (Exception $e){
            echo $e;
        }
    }
} // UsuarioPeer
