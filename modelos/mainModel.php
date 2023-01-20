<?php
    if($peticionAjax){
        require_once "../config/Server.php";
    }else{
        require_once "./config/Server.php";
    }

    class mainModel{

        // ===================== Conectar a BD =====================
        protected static function conectarDB(){
            $conexion = new PDO(SGBD,USER,PSW);
            $conexion->exec("SET CHARACTER SET utf8");
            return $conexion;
        }

        // ===================== Consultas simples a DB =====================
        protected static function ejecutarConsultaSimple($consulta){
            $sql = self::conectarDB()->prepare($consulta);
            $sql->execute();
            return $sql;
        }

        // ===================== Encriptar =====================
        public function encryption($string){
			$output=FALSE;
			$key=hash('sha256', SECRET_KEY);
			$iv=substr(hash('sha256', SECRET_IV), 0, 16);
			$output=openssl_encrypt($string, METHOD, $key, 0, $iv);
			$output=base64_encode($output);
			return $output;
		}

        // ===================== Desencriptar =====================
		protected static function decryption($string){
			$key=hash('sha256', SECRET_KEY);
			$iv=substr(hash('sha256', SECRET_IV), 0, 16);
			$output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
			return $output;
		}

        // ===================== Generador de codigos aleatorios =====================
        protected static function generarCodigoAleatorio($letra, $longitud, $numero){
            //P876-1
            for($i=1;$i<=$longitud;$i++){
                $aleatorio = rand(0,9);
                $letra.= $aleatorio;
            }
            return $letra."-".$numero;  
        }
    }