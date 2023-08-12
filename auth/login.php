


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Tienda de Café</title>

    <!-- BOOTSTRAP  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <!-- Style  -->
     <link rel="stylesheet" href="../css/style.css">

</head>
<body class="fcafe" >

  <div class=" py-5">


<div class="row">

<div class="card text-bg-dark col-8 m-0 p-0 d-none d-xl-block">
  <img src="../img/ejemplo3.jpg" class="card-img opacity-75 rounded-3 bg-body " alt="...">

  <div class="card-img-overlay d-flex flex-column justify-content-end p-5">
    <h5 class="card-title fs-2">Tienda de Café</h5>
   
   <div class="d-flex justify-content-start">
    <a href="../pages/registrarse.php" type="button" class="btn fcafeButton">Registrate</a>
    </div>
  </div>
</div>





<div class="col-xl-4 p-3">

<div class="text-end">
    <button class="btn fcafeButton m-3"> <a class="nav-link" href="../pages/index.php">Volver</a> </button>
</div>

<div class="d-flex justify-content-center align-items-end ">
<h1 class="mt-5 text-center">
Tienda de <br>
Café

</h1>
</div>


<div class="d-flex justify-content-center align-items-end h-50">

<form action="../dataBase/login.php" method="post" class="mx-3">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="contrasena" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="contrasena" name="contrasena">
    </div>
    <div class="mb-3">
      
    </div>
    <button type="submit" class="btn btn-dark" name="submit">Ingresar</button>
    <small>O<a href="../pages/registrarse.php"> Registrate</a></small>
</form>

  
  
  
  
  </div>

</div>


</div>



</div>









<!-- Font Awesome  -->
<script src="https://kit.fontawesome.com/60be70fbe4.js" crossorigin="anonymous"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

<script src="../js/main.js"></script>

    
</body>
</html>