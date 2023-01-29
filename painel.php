<?php
session_start();
include('verifica_login.php');
include('_config.php');
include('_header.php');
?>
    <section>
        <section class="banner"> 
       <img src="isekai.png" alt="" width="100%" height="100%" id="imagens"> 
       <div class="max-width">
       <div class="imageContainer">
       </div>
       </div> 
       </section>
<div class="container2">
    <div id="foto_usuario">
   <img src="favorita.png" alt="">
    </div>
    <p id="nome"><?php echo $_SESSION['usuario'];?></p>
    </section>
    <section ng-app="App">
    <div class="conteiner4">
    <ul>
    <li><h5 id="geral">Geral</h5></li>
    <li ><a href="#home" id="so">Preferências</a></li>
    <li ><a href="#about" id="so">Alterar E-mail</a></li>
    <li ><a href="#contact" id="so">Alterar Senha</a></li>
    <li ><a href="teste.php" id="so">Sair</a></li>
    </ul>
    </div>
    </section>

    <main id="root">
    </main>

    <?php include('_footer.php'); ?>
    