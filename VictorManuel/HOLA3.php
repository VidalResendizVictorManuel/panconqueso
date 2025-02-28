<!DOCTYPE html>
<html lang="en">
<head>

  <link href="https://fonts.cdnfonts.com/css/diablo" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victor Manuel Vidal Resendiz</title>

</head>
<body>

<nav class="navbar navbar-light" style="background-color:rgb(22, 27, 21) ;">
  <div class="contener">
    <a class="navbar-brand" href="" style="color: rgb(221, 159, 159);">Inicio</a>
    <!-- Un boton de inicio que lleva a si mismo, de color blanco, aqui pueden poner el color que quieran dependiendo de su estilo -->
   
    <!-- A continuacion es el menu dropdown para poner las ligas a las practicas -->
     <div class="collapse navbar-collapse" id="navbarNavDropdown">
     <ul class="nav navbar-nav">
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Unidad 1
         </a>
         <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <a class="dropdown-item" href="/VictorManuel/HOLA.php">Mosrtrar Datos 1</a><br>
           <a class="dropdown-item" href="/VictorManuel/HOLA.2.php">Mosrtrar Datos 2</a><br>
           <a class="dropdown-item" href="/VictorManuel/milu3.php">Meter Datos 3</a><br>
          </div>
       </li>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Unidad 2
         </a>
         <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a href="dropdown-item" href="/VictorManuel/Victor04.php">Mosrtrar Datos 4</a><br>
            <a href="dropdown-item" href="/VictorManuel/Victor05.php">Mosrtrar Datos 5</a><br>
            <a href="dropdown-item" href="/VictorManuel/Victor06.php">Meter Datos 6</a><br>
          </div>
       </li>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Unidad 3
         </a>
         <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a href="dropdown-item" href="/VictorManuel/Victor07.php">Mosrtrar Datos 7</a><br>
            <a href="dropdown-item" href="/VictorManuel/Victor08.php">Mosrtrar Datos 8</a><br>
            <a href="dropdown-item" href="/VictorManuel/Victor09.php">Mosrtrar Datos 9</a><br>
            <a href="dropdown-item" href="/VictorManuel/Victor010.php">Meter Datos 10</a><br>
          </div>
       </li>
     </ul>
     </div>
   </div>
  </nav>



        <style>

body {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
    background-color: #fff; 
}

.agua1 {
    background-color:rgb(255, 255, 255);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(67, 57, 57, 0.3);
    text-align: center;
    max-width: 400px;  
    width: 100%;
    margin: auto;  
}

}
  }
  h1 {
    text-align: center;
    color: #ff79c6;
    margin-bottom: 15px;
  }
  form {
    display: flex;
    flex-direction: column;
  }
  label {
    font-size: 16px;
    margin-bottom: 5px; 
  }
  input[type="text"] {
    padding: 8px;
    margin-bottom: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    background-color: #44475a;
    color: #fff;
  }
  input[type="submit"] {
    padding: 10px;
    background-color: #50fa7b;
    border: none;
    color: #282a36;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
  }
  input[type="submit"]:hover {
    background-color: #3ae374;
  }

  .navbar {
    background-color: limegreen;
    width: 100%;
    padding: 10px 0; 
    position: fixed; 
    top: 0; 
    left: 0;
    text-align: center; 
    z-index: 1000; 
    border-radius: 10px; 
}

.navbar a {
    color: red;
    font-weight: 
    margin: 0 15px;
    text-decoration:
}


.form-container {
    background-color:rgb(44, 44, 60);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(18, 17, 17, 0.3);
    text-align: center;
    width: 300px;
}
</style>



        <div class="agua1">

        <h1>Ingresa los datos</h1>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="formulario">
            <label for="Pokemon">Pokemon:</label>
            <input type="text" id="Pokemon" name="Pokemon" required><br>

            <label for="Evoluciones">Evoluciones</label>
            <input type="text" id="Evoluciones" name="Evoluciones" required><br>

            <label for="Tipo">Tipo:</label>
            <input type="text" id="Tipo" name="Tipo" required><br>

            <label for="Debilidades">Debilidades:</label>
            <input type="text" id="Debilidades" name="Debilidades" required><br>
            
            <label for="Efectivo">Efectivo:</label>
            <input type="text" id="Efectivo" name="Efectivo" required><br>

            <input type="submit" value="Agregar registro">
        </form>



        <?php
        $username = "root";
        $password = "";
        $servername = "localhost"; 
        $database = "pokemon";
        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("La conexion fallo: " . $conexion->connect_error);
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            $Pokemon = $_POST["Pokemon"];
            $Evoluciones = $_POST["Evoluciones"]; 
            $Tipo = $_POST["Tipo"];
            $Debilidades= $_POST["Debilidades"];
            $Efectivo= $_POST["Efectivo"];
            
            $sql = "INSERT INTO agua (Pokemon, Evoluciones, Tipo, Debilidades, Efectivo) VALUES ('$Pokemon', '$Evoluciones', '$Tipo', '$Debilidades', '$Efectivo')";
            
            if ($conexion->query($sql) == TRUE) {
                echo "<p class='success'>Nuevo Pokemon en la lista.</p>";
            } else {
                echo "<p class='error'>Error al agregar el Pokemon en la lista.:</p>" . $conexion->error . "<p>";
            }
        }

        ?>
    </div>


</body>
</html>