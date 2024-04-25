<?php
         $ser ="localhost";
         $user="root";
         $password= "";
         $basededatos="dinamico";


         $enlace= mysqli_connect($ser,$user,$password,$basededatos);
         if (!$enlace) {
            die("Error de conexión: " . mysqli_connect_error());
        }
        
?>
<?php
        if (isset($_POST['registro'])){
            $name=$_POST['name'];
            $date=$_POST['date'];
            $Ocupacion=$_POST['Ocupacion'];
            $contacto=$_POST['contacto'];
            ///dinamico

            $experiencia = isset($_POST["cantidadexp"]) ? implode(", ", $_POST["cantidadexp"]) : "";
            $formacion = isset($_POST["cantidadfor"]) ? implode(", ", $_POST["cantidadfor"]) : "";
            $idiomas = isset($_POST["cantidadidi"]) ? implode(", ", $_POST["cantidadidi"]) : "";
            $aptitudes = isset($_POST["cantidadapt"]) ? implode(", ", $_POST["cantidadapt"]) : "";

            $datosdebase= "INSERT INTO datosdebase VALUES('','$name','$date','$Ocupacion','$contacto','$experiencia','$formacion','$idiomas','$aptitudes')";
            $insertar = mysqli_query($enlace,$datosdebase);


        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinamico</title>
    <script defer src="scripts.js"></script>
    <link rel="stylesheet" href="css.css">
</head>
<body>

    <form action="#" name="dinamico" method="post">
        <h2>FORMULARIO</h2> 
        <p> A continuación, rellena el formulario</p><br>
        <div class="input-wrapper">
        <label for="name">Nombre y Apellidos: </label>
            <input type="text" name="name" >
        <br><br>
        </div>
        
        <div class="input-wrapper">
        <label for="date">Fecha de nacimiento:</label>
            <input type="date" name="date" ><br><br>
            
        </div>
        <div class="input-wrapper">
            <label for="Ocupacion">Ocupacion:</label>
                <input type="text" name="Ocupacion" ><br><br>
                
            </div>
    
    
        <div class="input-wrapper">
        <label for="contacto">Contacto (teléfono, email): </label>
            <input type="text" name="contacto" >
            <br><br>
        </div>
        
        <div class="input-wrapper">

            <label>Experiencia laboral(cantidad)</label>
            <a href="#" class ="add">&plus;</a>
        </div>
        <div class="in-group">

        </div>
        <div>
            <label>Formacion(cantidad)</label>
            <a href="#" class ="add2">&plus;</a>
        </div>
        <div class="in-group2">

        </div><div>
            <label>Idiomas(cantidad)</label>
            <a href="#" class ="add3">&plus;</a>
        </div>
        <div class="in-group3">

        </div>
        <div>
            <label>Aptitudes(cantidad maxima 3)</label>
            <a href="#" class ="add4">&plus;</a>
        </div>
        <div class="in-group4">

        </div>
        
        <button type="submit" name="registro">GUARDAR</button>
    </form>
    

    
</body>
</html>
