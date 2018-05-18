<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BakinSweets</title>
    <meta name="description" content="Venta de dulces caseros">
    <meta name="keywords" content="dulces, sweets, galletas, cupcakes, tartas">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <!--Navigation bar-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
                <a class="navbar-brand" href="index.html">Bakin<span>Sweets</span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">La Pastelería</a></li>
                    <?php 
                    $listadoCategoria=Categorias::listadoCategorias();
                    foreach ($listadoCategoria as $key => $value) {
                        echo "<li><a href='#".$value['idCategoria']."'>".$value['nombreCategoria']."</a></li>";

                    }?>    
                    
                    <li><a href="#contacto">Contáctanos</a></li>
                    <li><a href="#" data-target="#login" data-toggle="modal"><i class="fas fa-sign-in-alt"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/ Navigation bar-->
      <!--Modal box-->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">

      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Iniciar Sesión</h4>
        </div>
        <div class="modal-body padtrbl">

          <div class="login-box-body">
            <p class="login-box-msg">Inicia sesión para comenzar</p>
            <div class="form-group">
              <form name="" id="loginForm">
                <div class="form-group has-feedback">
                  <!----- username -------------->
                  <input class="form-control" placeholder="Usuario (email)" id="loginid" type="text" autocomplete="on" />
                  <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                  <!---Alredy exists  ! -->
                  <span class="form-control-feedback"><i class="fas fa-user"></i></span>
                </div>
                <div class="form-group has-feedback">
                  <!----- password -------------->
                  <input class="form-control" placeholder="Contraseña" id="loginpsw" type="password" autocomplete="on" />
                  <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
                  <!---Alredy exists  ! -->
                  <span class="form-control-feedback"><i class="fas fa-unlock-alt"></i></span>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="checkbox icheck">
                      <label>
                                <input type="checkbox" id="loginrem" > Recuérdame
                              </label>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button type="button" class="btn btn-green btn-block btn-flat" onclick="userlogin()">Entrar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!--/ Modal box-->
    <!--Banner-->
    <div class="banner">
        <div class="bg-color">
            <div class="container">
                <div class="row">
                    <div class="banner-text text-center">
                        <div class="text-border">
                            <h2 class="text-dec">Pasión por el dulce</h2>
                        </div>
                        <div class="intro-para text-center quote">
                            <p class="big-text">Vive Ama . . . Hornea.</p>
                            <p class="small-text">No sólo los ingredientes hacen rico a un pastel. El amor con que se hace le da el toque especial.</p>
                        </div>

                        <a href="#pasteleria" class="mouse-hover">
                            <div class="mouse"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Banner-->