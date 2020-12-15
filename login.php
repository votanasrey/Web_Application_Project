<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" href="../image/MyLogo.jpg" type="image/icon type">
    <title>ដើមឈើ | ចូលគណនី</title>
  </head>
  <body style="background-color: #94BD3D;">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../web/home.php"><img src="../image/MyLogo.jpg" style="width: 40px; height: 40px;" class="rounded-circle" alt="..."></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../web/home.php">ទំព័រដើម<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: #94BD3D" href="../web/about.php">អំពី</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: #94BD3D" href="../web/event.php">កម្មវិធី</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: #94BD3D" href="../web/shop.php">ហាង</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: #94BD3D" href="../web/contact.php">ទំនាក់ទំនង</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: #94BD3D" href="../web/video.php">វីដេអូ</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn text-light"​​​​ style="background-color: #94BD3D;" type="submit">បង្កើតគណនី</button>
    </form>
  </div>
</nav>

<div class="container col-md-6 mt-5">
      <div class="card">
        <div class="card-header">
          <h2 style="color: #94BD3D">ចូលគណនី</h2>
        </div>
        <div class="card-body">
          <form method="POST">
            <div class="form-group">
              <label for="email"><strong>អ៊ីម៉ែល</strong></label>
              <input type="text" name="username_email" id="username_email" class="form-control" placeholder="សូមបញ្ចូលអ៊ីម៉ែល">
              <span class="text-danger" name="wrusername_email"></span>
            </div>
            <div class="form-group">
              <label for="Password"><strong>លេខសម្ងាត់</strong></label>
              <input type="password" name="password" id="password" class="form-control" placeholder="សូមបញ្ចូលលេខសម្ងាត់">
              <span class="text-danger" name="wrpasword"></span>
            </div>
            <div class="form-group">
              <input type="submit" name="login" id="login"​​​​​​ value="បញ្ជូន" class="form-control btn text-light" style="background-color: #94BD3D;">
            </div>
            <div class="form-group">
              <a href="../web/register.php" class="btn text-danger mx-auto d-block" name="register" id="register" value="register">តើអ្នកមិនទាន់មានគណនីមែនទេ?</a>
            </div>
            <div class="form-group">
              <a class="btn text-danger mx-auto d-block" name="forget" id="forget">តើអ្នកភ្លេចលេខសម្ងាត់មែនទេ?</a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>