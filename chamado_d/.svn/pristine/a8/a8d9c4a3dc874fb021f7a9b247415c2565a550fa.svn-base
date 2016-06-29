<?php
require_once '../head.php';

$arquivoIni = "acl.ini";

//Definicao de Constantes para uso no script
define("CO_USUARIO", 1);
define("CO_VISITANTE", -1);
define("CO_RECURSO_URL", 1);
define("SENHA_PADRAO", "12345678"); //12345678

define("DT_CADASTRO", date('Y-m-d H:i:s'));

$oAcl = new Zend_Config_Ini(MANUTENCAO_PATH . "/" . $arquivoIni);

$aAcl = array();

foreach ($oAcl as $secao => $objAcl) {

    #var_dump($secao);

    $aSecao = explode(".", $secao);

    if (count($aSecao) == 2) {

        switch ($aSecao[1]) {

            case "usuarios":

                foreach ($objAcl as $titulo => $valor) {
                    $aAcl[$aSecao[0]]['usuarios'][$titulo] = $valor;
                }

                break;

            case "recursos":

                foreach ($objAcl as $titulo => $valor) {
                    $aAcl[$aSecao[0]]['recursos'][$titulo] = $valor;
                }
                break;
        }
    }
}
$sqlInit = "
    
TRUNCATE perfil CASCADE;
TRUNCATE recurso CASCADE;
TRUNCATE permissao CASCADE;

SELECT pg_catalog.setval('usuario_co_usuario_seq', 2, true);
SELECT pg_catalog.setval('recurso_co_recurso_seq', 2, true);

INSERT INTO perfil VALUES (1, 'Administrador', 'Administrador', true);
INSERT INTO perfil VALUES (0, 'Visitante', 'Visitante', true);
INSERT INTO perfil VALUES (2, 'DGH', 'DGH', true);
INSERT INTO perfil VALUES (3, 'Direcao', 'Direção', true);

INSERT INTO usuario VALUES (-1, NULL, NULL, 'Visitante', 'Visitante', NULL, NULL, NULL, NULL);
INSERT INTO usuario VALUES (1, NULL, NULL, 'Sistema', 'Sistema', NULL, NULL, NULL, NULL);

";

try {

    echo "Populando Sistema \n\n";
    
    $pdo->beginTransaction();

    $pdo->exec($sqlInit);

    $pdo->commit();
  
} catch (Exception $e) {

    echo $e->getMessage();
    
    $pdo->rollBack();

}

//Verifica se 
if (count($aAcl) > 0) {

    ##Navega pelo perfis e adiciona recursos 
    foreach ($aAcl as $perfil => $aInfo) {

        try {

            //Verifica Perfil
            $objPerfil = PerfilQuery::create()
                    ->filterByNoPerfil($perfil)
                    ->findOne();
            
            if($objPerfil){
                echo $objPerfil->getNoPerfil() . "\n";
            
            $pdo->beginTransaction();

                //Cadastra Usuarios
                if (isset($aInfo['usuarios'])) {

                    foreach ($aInfo['usuarios'] as $cpfUsuario => $aUsuario) {
                            $aInfoUsuario = explode(",",$aUsuario);
                            echo "---" . $cpfUsuario . "\n";
                            $noLogin = $aInfoUsuario[0];
                            $noUsername = $aInfoUsuario[1];

                                $objUsuario = new Usuario();
                                $objUsuario->setPerfil($objPerfil);
                                $objUsuario->setNuCpf($cpfUsuario);
                                $objUsuario->setDsLogin($noLogin);
                                $objUsuario->setNoUsuario(strtoupper($noUsername));
                                $objUsuario->setDsPassword(SENHA_PADRAO);
                                $objUsuario->save($pdo);

                    }
                }

                //Cadastra recursos
                if (isset($aInfo['recursos'])) {
                    foreach ($aInfo['recursos'] as $noRecurso => $dsRecurso) {

                        //Procura se recurso já existe cadastrado
                        $objRecurso = RecursoQuery::create()
                                ->filterByNoRecurso($noRecurso)
                                ->findOne();
                        //Recurso nao encontrado
                        if (!$objRecurso) {

                            $objRecurso = new Recurso();
                            $objRecurso->setNoRecurso($noRecurso);
                            $objRecurso->setDsRecurso($dsRecurso);
                            $objRecurso->setTpRecurso(CO_RECURSO_URL);
                            $objRecurso->setCoUsuarioCadastro(CO_USUARIO);
                            $objRecurso->save($pdo);
                        }

                        //Permissoes
                        $objPermissao = PermissaoQuery::create()
                                ->filterByPerfil($objPerfil)
                                ->filterByRecurso($objRecurso)
                                ->findOne();

                        if (!$objPermissao) {
                            $objPermissao = new Permissao();
                            $objPermissao->setCoUsuarioCadastro(CO_USUARIO);
                            $objPermissao->setPerfil($objPerfil);
                            $objPermissao->setRecurso($objRecurso);
                            $objPermissao->save($pdo);
                        }
                    }
                }

                $pdo->commit();
           
            }
        } catch (Exception $e) {

            $pdo->rollBack();
            
            print "Erro ao importar acl" . $e->getMessage();
        }
             
    }
}

