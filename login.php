<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Igor Šula">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>mixit / Kompletace balíků</title>
</head>

<body>
    <header class="header container-fluid">
        <nav class="navigation">
            <ul>
                <li><a class="selected" href=""><i class="fas fa-box"></i>Kompletace balíků</a></li>
                <li><a href=""><i class="fas fa-cog"></i>Nastavení</a></li>
            </ul>
        </nav>
    </header>

    <main class="main">
        <div class="container-fluid">
            <h1>Vyberte uživatele</h1>
            <ul class="users">
                <?php 
                    require 'assets/src/users.php';                
                    foreach($users as $user) : 
                ?>
                    
                <li class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1">
                    <img src="assets/img/<?php echo $user->getAvatar() ?>">
                    <span><?php echo $user->getName() ?></span>                        
                </li>
                         
                <?php endforeach ?>
            </ul>
        </div>
    </main>

    <footer class="footer">
        <div class="container-fluid">
        
        </div>
    </footer>
    
    <div id="login">
        <div class="container">
            <div id="escape"><i class="fas fa-times-circle"></i></div>
            <form class="col-12" action="">
                <input type="password">
                <button>Přihlásit</button>
            </form>                
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
