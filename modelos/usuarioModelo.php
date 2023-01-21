<?php

    require_once "mainModel.php";

    class usuarioModelo extends mainModel{

        // =========  agregar usuario =========
        protected static function agregarUsuarioModelo($datos){
            $sql = mainModel::conectarDB()->preapare("INSERT 
                                                      INTO usuarios(nomUsuario,pswUsuario,tipoUsuario,estUsuario,idPersonas,fAlta)
                                                      VALUES(:nomUsu, :pswUsu, :tUsu:, :eUsu, :idPersona: :altaUsu)");

            $sql->bindparam(":nomUsu",$datos['nomUsuerReg']);
            $sql->bindparam(":pswUsu",$datos['pswUserReg,pswUserReg']);
            $sql->bindparam(":tUsu",$datos['tUserReg']);
            $sql->bindparam(":eUsu",$datos['estUserReg']);
            $sql->bindparam(":idPersona",$datos['UserReg']);
            $sql->bindparam(":altaUsu",date('Y-m-d')); // fecha actual

            $sql->execute();

            return $sql;
        }
    }