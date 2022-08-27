<?php

$Documento = $_SESSION['Documento'];
$users = "SELECT * FROM usuarios WHERE Documento='$Documento'";
$pqrs = "SELECT * FROM tipospqrs";

include("model/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Footer</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="./images/Logo.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Coming+Soon&family=Lobster&display=swap" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util-reg.css">
  <link rel="stylesheet" type="text/css" href="./css/footer.css">
  <!--===============================================================================================-->
</head>

<body>

  <!-- bloque 2 -->

  <p>Opina sobre tu experiencia</p>
  <form class="formfooter" action="insertarpqrs.php" method="post">
    <?php
    $show = mysqli_query($conx, $users);
    while ($row = mysqli_fetch_assoc($show)) { ?>
      <div class="inputsu">
        <input class="fun" type="text" name="Documento" placeholder="" value="<?php echo $row["Documento"]; ?>">
      </div>
      <div class="column-1">

<select class="inputpqrs" name="Tipopqrs" >
  <option ></option>
<?php
    $show = mysqli_query($conx, $pqrs);
    while ($row = mysqli_fetch_assoc($show)) { ?> 
    
    <option><?php echo $row['Tipopqrs'] ?></option>
    
    
    <?php  } ?>
</select>

        <input class="inputpqrs" type="text" id="asunto" name="Asunto" placeholder="Asunto" />


      </div>
      <textarea cols="30" rows="10" name="Cuerpo" placeholder="Escribe Aqui tu PQR'S"></textarea>

      <button class="send" type="summit" onclick="location.reload()">Enviar</button>

    <?php } ?>
  </form>


  <!-- JS -->
  <script src="/JS/Footer.js"></script>
</body>

</html>



<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/tilt/tilt.jquery.min.js"></script>
<script>
  $('.js-tilt').tilt({
    scale: 1.1
  })
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>