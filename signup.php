<?php 
include('_config.php');
include('_header.php'); 
?>
    <section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Sign Up</h2>
                        <p>Seja Bem Vindo ao Meu Site.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Signup Section Begin -->
    <section class="signup spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Sign Up</h3>
                        <form action="cadastro.php" method="post">
                            <div class="input__item">
                                <input name="email" type="text" placeholder="Endereço De Email">
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input name="usuario" type="text" placeholder="Seu Nome">
                                <span class="icon_profile"></span>
                            </div>
                            <div class="input__item">
                                <input name="password" type="password" placeholder="Senha" id="password">
                                <span class="icon_lock"></span>
                            </div>
                            <button type="submit" value="Submit" class="site-btn">Criar Conta</button>
                        </form>
                        <h5>ser ja tive conta <a href="login.html">login!</a></h5>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__social__links">
                        <h3>Login With:</h3>
                        <ul>
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> entra com o facebook</a>
                            </li>
                            <li><a href="#" class="google"><i class="fa fa-google"></i> Entra Com o Google</a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> Entra Com o Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include('_footer.php'); ?>