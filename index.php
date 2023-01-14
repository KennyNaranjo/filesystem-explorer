<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>

<body>
  <header>
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">Kennyse file archive</a>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </nav>
  </header>
      <br>
      <h1> FILE MANAGER</h1>
      <br>
      <form method="post" action="php.php" enctype="multipart/form-data" class="form">
        <div class="form-group">
            <label for="archvio">File</label>
            <input type="file" class="form-control-file" id="archivo" aria-describedby="fileHelp" name="upload">

        </div>
        <button type="submit" class="btn btn-primary" name="boton">Upload</button>
        </form>
          <form method="post" action="directorio.php">
            <input type="text" name="crear-carpeta">
        <button name="name-directory" type="text"><img class="create-carpet" src="carpeta-azul.jpg" width=40px height=40px></button>
      </form>
      <form method="post" action="delete.php" >
            <input type="text" name="delete-folder">
        <button name="name-directory" type="text"><img class="delete-f" src="icons/trash-solid.svg" width=40px height=40px></button>
      </form>


      
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Type</th>
                  <th scope="col">Size</th>
                  <th scope="col">Date</th>
                  <th></th>
                </tr>
              </thead>
             
          

      
      
      <?php
      
      showRequest();

      function showRequest() {

        $carpeta = "root/";

        if (isset($_REQUEST['name'])){

          $carpeta = $carpeta . $_REQUEST['name'] . "/";
          showCarpeta($carpeta);

        } else {

          showCarpeta($carpeta);


        }
      }

      function showCarpeta($carpeta){

        foreach (glob("$carpeta/*") as $dir) {

          if (strpos(basename($dir), '.')) {

            echo "<tr>\n<th scope='row'>1</th>\n<td><form method='GET'>". basename($dir);
          }

        }

      }



      

      ?>
      

      </table>
      </form>  
      </body>

/*
    <!-- <div class="dropdown-menu">
    <form class="px-4 py-3">
      <div class="mb-3">
        <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
      </div>
      <div class="mb-3">
        <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
      </div>
      <div class="mb-3">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="dropdownCheck">
          <label class="form-check-label" for="dropdownCheck">
            Remember me
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">New around here? Sign up</a>
    <a class="dropdown-item" href="#">Forgot password?</a>
  </div> -->
</html>
