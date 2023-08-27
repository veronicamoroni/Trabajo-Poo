<?php
    require_once ('vehiculo.php');

    class ServiceVehiculo {

        private $vehiculos = [];


        public function altaVehiculo() {     // Funcion para agregar vehiculos

            $patente = readline('Ingrese la patente del vehiculo: ');            
            $modelo = readline('Ingrese modelo del Vehiculo: ');
            $marca = readline('Ingrese marca del Vehiculo: ');
            $vehiculos = new Vehiculo($patente, $marca, $modelo);
            $this->vehiculos[] = $vehiculos;
            echo ('El vehiculo se ha cargado correctamente.'.PHP_EOL);
            return true;
        }

        public function listaVehiculo() {     // Función para mostrar vehiculos
            foreach ($this->vehiculos as $x){
                $x->mostrar();
                }
            }   
        
           
        public function bajaVehiculo() {          // Función para eliminar vehiculos
            $patente = readline('La patente del vehiculo a dar de baja es: ');           
            foreach ($this->vehiculos as $vehiculos => $v) {
                if ($v->getPatente() === $patente) {
                    unset($this->vehiculos[$vehiculos]);
                    echo ('El vehiculo se ha eliminado correctamente.'.PHP_EOL);
                    return true;
                }
            }
            echo ('Vehiculo No encontrado.'.PHP_EOL);
            return false;
        }

           
        public function buscarVehiculo() {
            $patente = readline('La patente a buscar: ');
            foreach ($this->vehiculos as $vehiculos => $v) {
                if ($v->getpatente() == $patente) {
                    echo ('Vehiculo Encontrado.'.PHP_EOL);
                    echo ('La patente del vehiculo es: '.$v->getPatente().'; ');
                    echo ('La marca del vehiculo es: '.$v->getMarca().'; ');
                    echo ('El modelo del vehiculo es: '.$v->getModelo().'; '); 
                    
                }
            }

            return null;
        }

        public function modificarVehiculo() {
            $patente = readline('La patente del vehiculo a modificar es: ');
            foreach ($this->vehiculos as $vehiculos) {
                if ($vehiculos->getDni() == $patente) {
                    $newpatente = readline('Nueva patente: ');
                    $newmarca = readline ('Nuevo modelo: ');
                    $newmodelo = readline ('Nueva marca: ');
                    
                    $vehiculos->setDni($newpatente);
                    $vehiculos->setNombre($newmarca);
                    $vehiculos->setApellido($newmodelo);
                    
                    echo ('El vehiculo se ha modificado exitasamente.'.PHP_EOL); 
                    return true; 
                }     
            } 
                    echo ('El vehiculo No existe.'.PHP_EOL);
                    return false;  
        }

        public function grabar() {
            $arrSerVeh = serialize($this->vehiculos);
            file_put_contents("vehiculos.json", $arrSerVeh);
            //print_r ($arrSer); echo(PHP_EOL);
        }

        public function leer() {
            $recArrVeh = file_get_contents("vehiculos.json");
            $arrOrigVeh = unserialize($recArrVeh);
            //print_r ($arrOrig);
            $this->vehiculos = $arrOrigVeh;
        }
        /*
        public function salida() {
            echo ('================================='); echo(PHP_EOL);
            echo ('Gracias por utilizar el Servicio.'); echo(PHP_EOL);
            echo ('================================='); echo(PHP_EOL);
        }    
        */                      
    }