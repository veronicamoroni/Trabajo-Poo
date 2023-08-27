<?php
    class Cliente {
       private $dni; 
       private $nombre;
       private $apellido;
       private $tel;
       private $mail;
       
       public function __construct($dni, $nombre, $apellido, $tel, $mail){
            $this->dni = $dni;
            $this->nombre = $nombre;
            $this-> apellido = $apellido;
            $this->tel = $tel;
            $this->mail = $mail;
       }

        public function getDni() {
            return $this-> dni;
        }

        public function getNombre(){
            return $this-> nombre;
        }

        public function getApellido(){
            return $this-> apellido;
        }

        public function getTel(){
            return $this-> tel;
        }

        public function getMail(){
            return $this-> mail;
        }

        public function setDni($dni) {
            $this->dni = $dni;
        } 

        public function setNombre($nombre) {
           $this->nombre = $nombre;
        }

        public function setApellido($apellido) {
            $this->apellido = $apellido;
        }

        public function setTel($tel) {
            $this->tel = $tel;
        } 

        public function setMail($mail) {
            $this->mail = $mail;
        } 
       
        public function mostrar() {
            
            echo ('DNI: '.$this->dni.';'); //echo(PHP_EOL);
            echo (' Nombre: '.$this->nombre.';'); //echo(PHP_EOL);
            echo (' Apellido: '.$this->apellido.';');
            echo (' Tel: '.$this->tel.';');  
            echo (' Mail: '.$this->mail); echo(PHP_EOL);
        }
    }
