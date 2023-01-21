<?php
    if($peticionAjax){
        require_once "../modelos/usuarioModelo.php";
    }else{
        require_once "./modelos/usuarioModelo.php";
    }

    class usuarioControlador extends usuarioModelo{
        
        // ========== Controlador agregar usuario ==========
        public function agregarUsuarioControlador(){

            // ========== Limpia los datos que viene del formulario ==========
            $nomUsu = mainModel::limpiarCadena($_POST['nomUsuerReg']);
            $pswUsu = mainModel::limpiarCadena($_POST['pswUserReg,pswUserReg']);
            $tUsu = mainModel::limpiarCadena($_POST['tUserReg']);
            $eUsu = mainModel::limpiarCadena($_POST['estUserReg']);
            $idPersona = mainModel::limpiarCadena($_POST['UserReg']);

            // ========== Valida que no vengan vacios ==========
            if($nomUsu == "" || $pswUsu == "" || $tUsu == "" || $eUsu == "" || $idPersona == ""){
                $alerta = [
                    "Alerta" => "simple",
                    "Titulo" => "Error...",
                    "Alerta" => "Uno o varios campos vacios, todos son oblogatorios",
                    "Alerta" => "error"
                ];
                echo json_encode($alerta);
                exit();
            }
        }
    }