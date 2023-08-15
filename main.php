<?php
    require_once('ServiceCliente.php');
    require_once('Cliente.php');
    require_once('ServiceVehiculo.php');
    require_once('vehiculo.php');

    $servicioCliente = new ServiceCliente();
    $servicioVehiculo = new ServiceVehiculo();
    
    function menuPrincipal() {
        echo ('========= Bienvenidos =========='); echo(PHP_EOL);
        echo ('===== PosService AutoMotion ===='); echo(PHP_EOL);
        echo ('Menu de opciones'); echo(PHP_EOL);
        echo ('================='); echo(PHP_EOL);
        echo ('1-Clientes.'); echo(PHP_EOL);
        echo ('2-Vehículos.'); echo(PHP_EOL);
        echo ('0-Salir.'); echo(PHP_EOL);
    }
            
           
    function menuCliente() {
        
        echo ('================='); echo(PHP_EOL);
        echo ('Menu de Clientes.'); echo(PHP_EOL);
        echo ('================='); echo(PHP_EOL);
        echo ('1 - Alta de Clientes.'); echo(PHP_EOL);
        echo ('2 - Modificar Clientes.'); echo(PHP_EOL);
        echo ('3 - Baja de Clientes.'); echo(PHP_EOL);
        echo ('4 - Buscar un Cliente.'); echo(PHP_EOL);
        echo ('5 - Mostrar Lista de Clientes.'); echo(PHP_EOL);
        echo ('0 - Salir.'); echo(PHP_EOL);
    }
        
    function menuVehiculo() {
        
        echo ('================='); echo(PHP_EOL);
        echo ('Menu de Vehículos.'); echo(PHP_EOL);
        echo ('================='); echo(PHP_EOL);
        echo ('1 - Alta de Vehículos.'); echo(PHP_EOL);
        echo ('2 - Modificar Vehículo.'); echo(PHP_EOL);
        echo ('3 - Baja de Vehículo.'); echo(PHP_EOL);
        echo ('4 - Buscar un Vehiculo.'); echo(PHP_EOL);
        echo ('5 - Mostrar Lista de Vehículos.'); echo(PHP_EOL);
        echo ('0 - Salir.'); echo(PHP_EOL);
    }
       
    $opcion = " ";
    while ($opcion != 0) {
        menuPrincipal();
        $opcion = readline('Ingrese una opción: ');

        switch ($opcion) {
            case 1:
                echo('Seleccionaste Menú de clientes.'.PHP_EOL); 
                $opcionC = "";
                while ($opcionC != 0) {
                    menuCliente();
                    $opcionC = readline('Ingrese una opción: ');
                    switch ($opcionC) {
                        case 1: 
                            echo('Seleccionaste dar de alta a un cliente.'.PHP_EOL);
                            $servicioCliente->altaCliente(); break;
                        case 2: 
                            echo('Seleccionaste modificar un cliente.'.PHP_EOL);
                            $servicioCliente->modificarCliente(); break;
                        case 3: 
                            echo('Seleccionaste dar de baja a un cliente.'.PHP_EOL);
                            $servicioCliente->bajaCliente(); break;
                        case 4: 
                            echo('Seleccionaste buscar un cliente.'.PHP_EOL);
                            $servicioCliente->buscarCliente(); break;
                        case 5: 
                            echo('Seleccionaste lista de clientes.'.PHP_EOL);
                            $servicioCliente->listaCliente(); break;
                        case 0: 
                            echo ('Regresar al Menú Principal.'.PHP_EOL); break;
                        default: 
                            echo('Opción inválida.'.PHP_EOL);
                    }
                }
                break;
            
            case 2: 
                echo('Seleccionaste Menú de vehículos.'.PHP_EOL);
                $opcionV = "";
                while ($opcionV != 0) {
                    menuVehiculo();
                    $opcionV = readline('Ingrese una opción: ');
                    switch ($opcionV) {
                        case 1: 
                            echo('Seleccionaste dar de alta a un vehículo.'.PHP_EOL);
                            $servicioVehiculo->altaVehiculo(); break;
                        case 2: 
                            echo('Seleccionaste modificar un vehículo.'.PHP_EOL);
                            $servicioVehiculo->modificarVehiculo(); break;
                        case 3: 
                            echo('Seleccionaste dar de baja a un vehículo.'.PHP_EOL);
                            $servicioVehiculo->bajaVehiculo(); break;
                        case 4: 
                            echo('Seleccionaste buscar un vehículo.'.PHP_EOL);
                            $servicioVehiculo->buscarVehiculo(); break;
                        case 5: 
                            echo('Seleccionaste lista de vehículos.'.PHP_EOL);
                            $servicioVehiculo->listaVehiculo(); break;
                        case 0: echo ('Regresar al Menú Principal.'.PHP_EOL); break;
                        default: 
                            echo('Opción inválida.'.PHP_EOL);
                    }
                }
                break;
            
            case 0: $servicioCliente->salida(); break;
        }
    }
    