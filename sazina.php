<!DOCTYPE html>
<php lang="en">
<body>
<head>
  

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 
 



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

   <header>
      <div class="container">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home.php">Sākums</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="sakums.php">Avangar<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="sakums1.php">Virtus Pro <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="sakums2.php">EX-Virtus Pro<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
      <li class="nav-item active">
        <a class="nav-link" href="sazina.php">Sazina<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php">Ieiet</a>
          <a class="dropdown-item" href="register.php">Registrēšana</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

      </div> 

    </header>
</head>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="js/main.js"></script>
    <script src="/jquery.fancybox-1.3.4/fancybox/jquery.fancybox.min.js"></script>

 <div class="row">
        <div class="col-md-2">
            <p></p>
        </div>
        <div class = "col-md-6">
            <form action="sazina" method="post">
                <div class="form-group">
                    <label for="name">Lietotājs:</label>
                    <input type="text" class="form-control" id="name" placeholder="Vārds" name="name">
                </div>
                <div class="form-group">
                    <label for="nane">Parole:</label>
                    <input type="password" class="form-control" id="surname" placeholder="Ievadiet savu Paroli" name="surname">
                </div>
                <div class="form-group">
                    <label for="email">E-pasts:</label>
                    <input type="email" class="form-control" id="email" placeholder="Ievadiet savu e-pastu" name="email">
                </div>
                <div class="form-group">
                    <label for="name">Vecums:</label>
                    <input type="number" class="form-control" id="mobile" placeholder="Vecums" name="mobile">
                </div>
                <div class="form-group">
                    <label for="question">Jūsu jautājums;</label>
                    <textarea class="form-control" id="question" rows="3" name="question" placeholder="Ievadiet savu Jautājumu"></textarea>
                </div>
                <button class="btn btn-success" type="submit" name="save">Nosūtīt</button>
            </form>
        </div>
        <div class="col-md-2">
            <p></p>
        </div>
    </div>
</div>
<?php
    if(isset($_POST['save'])){
        echo "<b>Vārds:</b>{$_POST['name']}";
        echo "<b>Parole:</b>{$_POST['surname']}<br/>";
        echo "<b>E-pasts:</b>{$_POST['email']}<br/>";
        echo "<b>Telefons:</b>{$_POST['mobile']}<br/>";
        echo "<b>Jūsu jautājums:</b>{$_POST['question']}";
    }

?>



</p>
</body>
</php>