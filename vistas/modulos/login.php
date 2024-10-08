<div id="back" style="background-color: rgba(0, 0, 0, 0.7)"></div>

<div class="login-box">
  
  <div class="login-logo">

    <img src="vistas/img/plantilla/disensa_logo.png" class="img-responsive" style="padding:3px ">

  </div>

  <div class="login-box-body" style="background-color: rgba(0, 0, 0, 0.7)">

    <h2 class="login-box-msg">Iniciar Sesion</h2>
   

    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      
      </div>

      <div class="row">
       
        <div class="col-xs-4">

          <button type="submit" class="btn btn-danger btn-block btn-flat">Ingresar</button>
        
        </div>

      </div>

      <?php

        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();
        
      ?>

    </form>

  </div>
  <style>
  /* Estilo general del fondo de la página */
  #back {
    background: url('https://www.pmgchile.com/wp-content/uploads/2018/08/shutterstock_710141932baja.jpg') no-repeat center center fixed;
    background-size: cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  /* Estilo para el contenedor del login */
  .login-box {
    width: 360px;
    padding: 20px;
    background-color: rgba(0, 0, 0, 0.7); /* Fondo negro con opacidad */
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
    color: white;
  }

  /* Estilo del logo */
  .login-logo img {
    max-width: 100%;
    height: auto;
  }

  /* Título de inicio de sesión */
  .login-box-msg {
    font-size: 24px;
    font-weight: bold;
    color: white;
    text-align: center;
  }

  /* Estilo de los inputs */
  .form-control {
    background-color: rgba(255, 255, 255, 0.1); /* Fondo blanco con opacidad */
    border: 1px solid rgba(255, 255, 255, 0.3);
    color: white;
    border-radius: 5px;
    box-shadow: none;
  }

  .form-control::placeholder {
    color: rgba(255, 255, 255, 0.6); /* Color del placeholder */
  }

  /* Estilo de los íconos dentro de los inputs */
  .form-group.has-feedback .form-control-feedback {
    color: rgba(255, 255, 255, 0.8);
  }

  /* Estilo del botón */
  .btn-danger {
    background-color: #e74c3c;
    border: none;
    border-radius: 5px;
    padding: 10px;
    transition: background-color 0.3s ease;
  }

  .btn-danger:hover {
    background-color: #c0392b;
  }

  /* Estilo del botón de enviar */
  .btn-block {
    width: 100%;
    margin-top: 10px;
  }
</style>

</div>
