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

        // ===================== Limpiar cadenas =====================
        protected static function lipiarCadena($cadena){
            $cadena = trim($cadena);
            $cadena = stripcslashes($cadena);
            $cadena = str_ireplace("<script>","",$cadena);
            $cadena = str_ireplace("<script scr=","",$cadena);
            $cadena = str_ireplace("</script>","",$cadena);
            $cadena = str_ireplace("<script type=","",$cadena);
            $cadena = str_ireplace("SELECT * FROM","",$cadena);
            $cadena = str_ireplace("DELETE FROM","",$cadena);
            $cadena = str_ireplace("DELETE","",$cadena);
            $cadena = str_ireplace("INSERT INTO","",$cadena);
            $cadena = str_ireplace("UPDATE","",$cadena);
            $cadena = str_ireplace("DROP TABLE","",$cadena);
            $cadena = str_ireplace("DROP DATABASE","",$cadena);
            $cadena = str_ireplace("TRUNCATE TABLE","",$cadena);
            $cadena = str_ireplace("SHOW TABLES","",$cadena);
            $cadena = str_ireplace("SHOW DATABASE","",$cadena);
            $cadena = str_ireplace("<?php","",$cadena);
            $cadena = str_ireplace("?>","",$cadena);
            $cadena = str_ireplace("--","",$cadena);
            $cadena = str_ireplace(">","",$cadena);
            $cadena = str_ireplace("<","",$cadena);
            $cadena = str_ireplace("[","",$cadena); 
            $cadena = str_ireplace("]","",$cadena);
            $cadena = str_ireplace("^","",$cadena); 
            $cadena = str_ireplace("==","",$cadena);
            $cadena = str_ireplace(";","",$cadena); 
            $cadena = str_ireplace("::","",$cadena);
            $cadena = stripcslashes($cadena);
            $cadena = trim($cadena);

            return $cadena;
        }

        // ===================== Validar contenido de campos =====================
        protected static function verificarDato($filtro, $cadena){
            if(preg_match("/^".$filtro."$/", $cadena)){
                return false;
            }else{
                return true;
            }
        }

        // ===================== Validar fechas =====================
        protected static function verificarFecha($fecha){
            //entra dd/mm/aaaa checkdate(mm, dd, aaaa)
            $valores = explode("/", $fecha);
                                                
            if(count($valores) == 3 && checkdate($valores[1],$valores[0],$valores[2])){
                return false;
            }else{
                return true;
            }
        }
    }