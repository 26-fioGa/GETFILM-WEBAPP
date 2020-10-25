<?php
/*Alamcenamos los datos en variables*/

$pelicula = $_POST['pelicula'];
$pApellido = $_POST['pApellido'];
$sApellido = $_POST['sApellido'];
$nombres = $_POST['nombres'];
$cElectronico = $_POST['cElectronico'];
$telefono = $_POST['telefono'];
$fAlquiler = $_POST['fAlquiler'];
$fDevolucion = $_POST['fDevolucion'];
$metodo = $_POST['metodo'];
$precio = $_POST['precio'];
$nCuenta = $_POST['nCuenta'];

/*codigo html*/
echo "
    <body>
        <div class='container'>
            <h3>SUS DATOS</h3>
            <p>Película: $pelicula</p>
            <p>Apeliido Paterno: $pApellido</p>
            <p>Apellido Materno: $sApellido</p>    
            <p>Nombres: $nombres</p>
            <p>Correo Electrónico: $cElectronico</p>
            <p>Teléfono: $telefono</p>
            <p>Fecha de alquiler: $fAlquiler</p>
            <p>Fecha de devolución: $fDevolucion</p>
            <p>Tarjeta: $metodo</p>
            <p>Precio: $precio</p>
            <p>Número de cuenta: $nCuenta</p>
            <div class='button'>
                <li><a class='b1' href='../index.html'>FINALIZAR</a></li>
            </div>
            
        </div>
    </body>
    <style>
    * {
        background-color: black; 
        color: white;
    }
    .container {
        background-color: black; 
        border: 2px solid white;
        border-radius: 10px;
        margin:  40px 300px;
        padding: 20px 180px;
         
    }

    .container h3{
        margin: 20px;
        margin-bottom: 30px;
        font-family: sans-serif;
        font-size: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        
    }

    .container p{
        margin: 20px;
        font-family: sans-serif;
        font-size: 15px;
        display: flex;
        align-items: center;
        justify-content: flex-start; 
        
        
    }
    
    .container .button{
        padding: 20px 20px;
        box-sizing: border-box;
        text-align: center;
        align-items: center;
    }
    
    .container .button li{
        list-style: none;
    }
    .container .button li a {
        color: white;
        text-decoration: none;
        border: 1px solid transparent;
        padding: 5px 10px;
        background: green;
        border-radius: 10px;
        font-family: sans-serif;
        font-size: 18px;
    }

    

    </style>  
    "

?>

