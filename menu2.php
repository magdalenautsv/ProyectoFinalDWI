<div class="content">
  <ul class="section_buttons">
    <li class="btn btn_home">
      <a href="./Login.php"><img style="width: 50px;" src="./Img/MarSys.jpg"></a>
    </li>
    <li class="btn btn_home">
      <a class="nav-link active" href="index.php">INICIO</a>
    </li>

    <?php if (!isset($_SESSION["User_Logueado"])) { ?>
      <li class="btn btn_login">
        <a class="nav-link active" href="Login.php">LOGIN</a>
      </li>
      <li class="btn btn_info">
        <a class="nav-link active" href="Info.php">MAGDA SANCHEZ</a>
      </li>
    <?php } ?>

    <?php if (isset($_SESSION["User_Logueado"])) { ?>
      <li class="btn btn_producto">
        <a class="nav-link active" href="Producto/index.php">PRODUCTO</a>
      </li>
      <li class="btn btn_empleados">
        <a class="nav-link active" href="Empleados/index.php">EMPLEADOS</a>
      </li>
    <?php } ?>

    <li class="btn btn_user">
      <span style="font-size:20px;color:blue;">
        <i class="fa fa-user"></i>
      </span>

      <?php if (!isset($_SESSION["User_Logueado"])) { ?>
        &nbsp<b>Iniciar Sesion</b>
      <?php } else { ?>
        &nbsp<b><?php echo $_SESSION["User_Logueado"]; ?></b>
        <span style="font-size:20px; color:red;">
          <i class="fa fa-power-off"></i>
        </span>
        <b><a href="logout.php" style="color:red;"> SALIR </a></b>
      <?php } ?>
    </li>
  </ul>
</div>
