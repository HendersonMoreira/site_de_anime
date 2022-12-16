<?php 
include('_config.php');
include('_header.php'); 
?>
    <section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Login</h2>
                        <p>Seja Bem Vindo ao Meu Site.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Login</h3>
                        <form action="login.php" method="post">
                            <div class="input__item">
                                <input type="text" name="usuario" required value="" placeholder="Seu Apelido">
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input name="password" type="password" id="password" autocomplete="off" value="" placeholder="Password">
                                <span class="icon_lock"></span>
                            </div>
                            <button type="submit" class="site-btn">entrar</button>
                            <input type="checkbox" name="logged" id="logged" value="true">
                        </form>
                        <a href="#" class="forget_pass">Forgot Your Password?</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Crie Aqui Sua Conta</h3>
                        <a href="signup.html" class="primary-btn">Register Now</a>
                    </div>
                </div>
            </div>
            <div class="login__social">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="login__social__links">
                            <span>or</span>
                            <ul>
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Sign in With
                                Facebook</a></li>
                                <li><a href="#" class="google"><i class="fa fa-google"></i> Sign in With Google</a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> Sign in With Twitter</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <?php include('_footer.php'); ?>