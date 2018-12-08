<div class="container-fluid">
    <section class="main row">
        <div class="col-md-12" style="padding-left: 0px; padding-right: 0px;">
            <nav class="navbar navbar-default " role="navigation">
                         <div class="navbar-header">
                             <a class="navbar-brand" href="#"><img class="img-responsive logotipo" src="/webroot/img/logoProtectora.png" alt="Chania" width="80%" height="80%" ></a>                                
                        </div>
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav navbar-right "> 
                                <li style="">
                                    <form action="" class="form-inline forreg ocultoMovil" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        <div class="form-group">
                                            <input type="text" name="CodUsuario" placeholder="Usuario" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="Password" placeholder="Contraseña" class="form-control">
                                        </div>

                                        <input type="submit" name="enviar" value="Iniciar sesión" class="btn btn-rounded btnAceptar">
                                        <a class="nav-link regis" href="index.php?pagina=registrar">Regístrate</a>
                                   </form>
                                </li>
                            </ul>

                          </div>
                </nav>
        </div>
    </section>
</div>

<div class="container-fluid">
    <section class="main row">
        <div class="col-md-12" style="padding-left: 0px; padding-right: 0px;">
            <div id="carousel-1" class="carousel slide" data-ride="carousel">
                <!--Indicadores-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-1" data-slide-to="1"></li>
                    <li data-target="#carousel-1" data-slide-to="2"></li>
                </ol> 

                <!--Contenedor slide -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="webroot/img/imagen1.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="item">
                        <img src="webroot/img/imagen2.jpg" class="img-responsive" alt=""> 
                    </div>

                    <div class="item">
                        <img src="webroot/img/imagen3.jpg" class="img-responsive" alt="">
                    </div>

                </div>
                <!--controles-->
                <a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                </a>
                <a href="#carousel-1" class="right carousel-control" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
        
        
    </section>
</div>  

<div class="container-fluid ocultoPC">
     <section class="main row">
        <div class="col-sm-8">
            <br>
            <h1>Iniciar Sesion</h1>
            <br>
            <form action="" class="forreg " action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-group">
                    <input type="text" name="CodUsuario" placeholder="Usuario" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <input type="password" name="Password" placeholder="Contraseña" class="form-control">
                </div>
                <br>
                <input type="submit" name="enviar" value="Iniciar sesión" class="btn btn-rounded btnAceptar">
                <a class="nav-link regis" href="index.php?pagina=registrar" style="color: #000">Regístrate</a>
            </form>
            <br><br>
        </div>
     </section>
</div>


