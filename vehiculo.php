<?php
    class Vehiculo {
       private $patente; 
       private $marca;
       private $modelo;
       
       
       public function __construct($patente, $marca, $modelo,){
            $this->patente = $patente;
            $this->marca = $marca;
            $this-> modelo = $modelo;   
       }

        public function getPatente() {
            return $this-> patente;
        }

        public function getMarca(){
            return $this-> marca;
        }

        public function getModelo(){
            return $this-> modelo;
        }

       
        public function setPatente($patente) {
            $this->patente = $patente;
        } 

        public function setMarca($marca) {
           $this->marca = $marca;
        }

        public function setModelo($modelo) {
            $this->modelo = $modelo;
        }

              
        public function mostrar() {
            echo ('La patente del vehiculo es: '.$this->patente.'; '); echo(PHP_EOL);
            echo ('La marca del vehiculo es: '.$this->marca.'; '); echo(PHP_EOL);
            echo ('El modelo del vehiculo es: '.$this->modelo); echo(PHP_EOL);
       }
    }
