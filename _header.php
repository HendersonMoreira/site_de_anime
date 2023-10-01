<?php
if (isset($_COOKIE['tioanimes_user_cookie'])) {
    $foto = json_decode($_COOKIE['tioanimes_user_cookie'], true)["foto"];
    $profile = '<a href="/painel.php" class="foto_usuario" ><img src="' . $foto . '"></a>';
    $drop = '';
} else{
    $profile = '<a href="./logi.php"><span class="icon_profile"></span></a>';
    $drop = '<li><a href="signup.php">Sign Up</a></li>
             <li><a href="logi.php">Login</a></li>';
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/anime/favicon.ico" type="image/x-icon">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tio Animes</title>

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

    <div id="preloder">
        <div class="loader"></div>
    </div>

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.php">
                            <img src="img/logo02 126.png" alt="logo de cima">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="index.php">Inicio</a></li>
                                <li><a href="categories.php">Categorias <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="categories.php">Categories</a></li>
                                        <li><a href="anime-details.php">Detalhes Dos Animes</a></li>
                                        <li><a href="anime-watching.php">Anime Watching</a></li>
                                        <li><a href="blog-details.php">Detalhes Do Blog</a></li>
                                        <?php echo $drop ?>
                                    </ul>
                                </li>
                                <li><a href="./blog.php">Data Blog</a></li>
                                <li><a href="./blog-details.php">Blog Detalhes</a></li>
                                <li><a href="contato.php">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <?php echo $profile ?>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>