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
      <form method="post" action="php.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="archvio">File</label>
            <input type="file" class="form-control-file" id="archivo" aria-describedby="fileHelp" name="upload">

        </div>
        <button type="submit" class="btn btn-primary" name="boton">Upload</button>
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
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Files</td>
                  <td>Archives</td>
                  <td>548MB</td>
                  <td>10/01/2023</td>
                  <td class="cvDelete"><button type="button" class="btn btn-danger btn-sm deleteRow">Delete</button></td>
                  <td class="cvUpload"><button type="button" type="file" name= "image" class="btn btn-warning btn-sm">Upload</button></td>
                  <td class="cvp"><button type="button" class="btn btn-primary btn-sm">Primary</button></button></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Imagenes</td>
                  <td>.jpg</td>
                  <td>372MB</td>
                  <td>10/01/2023</td>
                  <label>
                  <td class="cvDelete"><button type="button" class="btn btn-danger btn-sm deleteRow">Delete</button></td>
                  </label>
                  <label>
                  <td class="cvUpload"><button type="button"  class="btn btn-warning btn-sm">Upload</button></td>
                  Upload
                  <imput type="file" name= "image">
                  </label>
                  <label>
                  <td class="cvp"><button type="button" class="btn btn-primary btn-sm">Primary</button></button></td>
                  </label>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Videos</td>
                  <td>mp3</td>
                  <td>345MB</td>
                  <td>10/01/2023</td>
                  <td class="Delete"><button type="button" class="btn btn-danger btn-sm deleteRow">Delete</button></td>
                  <td class="Upload"><button type="button" type="file" name= "image" class="btn btn-warning btn-sm">Upload</button></td>
                  <td class="cvp"><button type="button" class="btn btn-primary btn-sm">Primary</button></button></td>
                </tr>
              </tbody>
            </table>
          </form>
    </body>

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
