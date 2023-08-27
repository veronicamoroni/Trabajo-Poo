<?php
    require_once ('Cliente.php');

    class ServiceCliente {

        private $listaCli = [];


        public function altaCliente() {     // Funcion para agregar cliente

            $dni = readline('Ingrese el DNI del cliente: ');            
            $nombre = readline('Ingrese nombre del Cliente: ');
            $apellido = readline('Ingrese el apellido del Cliente: ');
            $tel = readline('Ingrese tel del Cliente: ');
            $mail = readline('Ingrese mail del Cliente: ');
            $c = new Cliente($dni, $nombre, $apellido, $tel, $mail);
            $this->listaCli[] = $c;

            $arrSer = serialize($this->listaCli);
            //print_r ($arrSer);
            file_put_contents("clientes.json", $arrSer);

            echo ('El cliente se ha cargado correctamente.'.PHP_EOL);
            return true;
        }

        
        public function listaCliente() {     // Función para mostrar clientes
            foreach ($this->listaCli as $x){
                $x->mostrar();
                }
            }   
        
           
        public function bajaCliente() {          // Función para eliminar cliente
            $dni = readline('El DNI del cliente a dar de baja es: ');           
            foreach ($this->listaCli as $cli => $c) {
                if ($c->getDni() === $dni) {
                    unset($this->listaCli[$cli]);
                    echo ('El cliente se ha eliminado correctamente.'.PHP_EOL);
                    return true;
                }
            }
            echo ('Cliente No encontrado.'.PHP_EOL);
            return false;
        }

           
        public function buscarCliente() {
            $dni = readline('El DNI a buscar es:');
            foreach ($this->listaCli as $cliente => $c) {
                if ($c->getDni() == $dni) {
                    echo ('Cliente Encontrado.'.PHP_EOL);
                    echo ('El DNI del cliente es: '.$c->getDni().'; ');
                    echo ('El nombre del cliente es: '.$c->getNombre().'; ');
                    echo ('El apellido del cliente es '.$c->getApellido().'; '); 
                    echo ('El tel del cliente es '.$c->getTel().'; ');
                    echo ('El mail del cliente es '.$c->getMail()); echo(PHP_EOL);
                }
            }

            echo ('El cliente no existe.'); echo(PHP_EOL);
            return false;
        }

        public function modificarCliente() {
            $dni = readline('El Dni del cliente a modificar es: ');
            foreach ($this->listaCli as $cli) {
                if ($cli->getDni() == $dni) {
                    $newdni = readline('Nuevo Dni: ');
                    $newnombre = readline('Nuevo Nombre: ');
                    $newapellido = readline('Nuevo Apellido: ');
                    $newtel = readline('Nuevo Tel: ');
                    $newmail = readline('Nuevo Mail: ');
                    $cli->setDni($newdni);
                    $cli->setNombre($newnombre);
                    $cli->setApellido($newapellido);
                    $cli->setTel($newtel);
                    $cli->setMail($newmail);
                    
                    echo ('El Cliente se ha modificado exitasamente.'.PHP_EOL); 
                    return true; 
                }     
            } 
                    echo ('El Cliente No existe.'.PHP_EOL);
                    return false;  
        }
        
        public function grabar() {
            $arrSer = serialize($this->listaCli);
            file_put_contents("clientes.json", $arrSer);
            //print_r ($arrSer); echo(PHP_EOL);
        }

        public function leer() {
            $recArr = file_get_contents("clientes.json");
            $arrOrig = unserialize($recArr);
            //print_r ($arrOrig);
            $this->listaCli = $arrOrig;
        }
        
        public function salida() {
            echo ('================================='); echo(PHP_EOL);
            echo ('Gracias por utilizar el Servicio.'); echo(PHP_EOL);
            echo ('================================='); echo(PHP_EOL);
        }
        
        
    }

   