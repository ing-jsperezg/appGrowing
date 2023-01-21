<?php
    $peticionAjax = true;
    require_once "../config/App.php";

    if(isset($_POST['UserReg']) && isset($_POST['nomUsuerReg']) && isset($_POST['pswUserReg']) && 
       isset($_POST['pswUserReg2']) && isset($_POST['tUserReg']) && isset($_POST['estUserReg'])){
        
        // ========= instancia al controlador =========
        require_once "../controladores/usuariControlador.php";
        $ins_usuario = new usuarioControlador();

        // ========= agrega usuario =========
        echo $ins_usuario->agregarUsuarioControlador();

    }else{
        session_start(['name'=>'APP']);
        session_unset();
        session_destroy();
        header("Location: "._SERVERURL."login/");
    }