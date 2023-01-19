<?php
    class vistasmodelo{

    // ===================== Modelo para obtener vistas =====================
        protected static function obtener_Vistas_Modelo($vista){
            $listaVistas = [];
            if(in_array($vista, $listaVistas)){
                if(is_file("./vistas/contenidos/".$vista."-app.php")){
                    $contenido = "./vistas/contenidos/".$vista."-app.php";
                }else{
                    $contenido = "404";
                }
            }elseif($vista == "login" || $vista == "index"){
                $contenido = "login";
            }else{
                $contenido = "404";
            }
            return $contenido;
        }

    }