<?php
    function routes($serve, $appName){
        
        $ruta = array();
        if (isset($_GET["p"])) {
            $p = $_GET["p"];
            $ruta = explode("/", $p);
        }

        switch ($ruta[0]) {
            case "inicio":
                include "../web/views/".$ruta[0].".php";
                inicio($appName, $serve);
                break;
            case "junta_directiva":
                include "../web/views/".$ruta[0].".php";
                junta_directiva($serve);
                break;
            case "filosofia_y_metodos":
                include "../web/views/".$ruta[0].".php";
                filosofia_y_metodos($serve);
                break;
            case "comites":
                include "../web/views/".$ruta[0].".php";
                comites($serve);
                break;
            case "inscrpciones":
                include "../web/views/".$ruta[0].".php";
                inscrpciones($serve);
                break;
            case "contactanos":
                include "../web/views/".$ruta[0].".php";
                contactanos($serve);
                break;
            case "manual_del_delegado":
                include "../web/views/".$ruta[0].".php";
                manual_del_delegado($serve);
                break;
            case "portafolio":
                include "../web/views/".$ruta[0].".php";
                portafolio($serve);
                break;
            case "login":
                include "../web/views/".$ruta[0].".php";
                login($serve);
                break;
            case "dashboard":
                include "../web/views/".$ruta[0].".php";
                dashboard($serve);
                break;
            case "exit_session":
                include "../web/views/".$ruta[0].".php";
                exit_session($serve);
                break;
            case "e403":
                include "../web/views/".$ruta[0].".php";
                e403();
                break;
            default:
                include "../web/views/e404.php";
                e404($serve);
                break;
        }
    }

    function now(){
        $ruta = array();
        if (isset($_GET["p"])) {
            $p = $_GET["p"];
            $ruta = explode("/", $p);
        }

        return $ruta[0];
    }
?>