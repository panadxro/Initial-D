<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Licencia</title>
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="shortcut icon" href="img/logo-initial.png" type="image/x-icon">
</head>
<body>
  <header>
    <h1><a href="index.html"><img height="35px" src="img/Initial-D-logo-white.png" alt="Initial-D"></a></h1>
    <nav id="drop">
      <button id="drop-btn">☰</button>
      <ul id="drop-menu">
        <li><a href="temporadas.html">Temporadas</a></li>
        <li><a href="personajes.html">Personajes</a></li>
        <li><a href="autos.html">Autos</a></li>
        <li><a href="licencia.html">Licencia</a></li>
      </ul>
    </nav>
  </header>
  <main>
  <?php
      $nombre;
      $domicilio;
      $nlicencia;
      $fechaNacimiento;
      $sexo;
      $marca;
      $modelo;
      $anio;
      $clase;
      ?>
    <section>
      <h2 class="titulo">Licencia de conducir</h2>
      <div id="tarjeta">
        <table border="1" cellpadding="0" cellspacing="0">
          <thead>
            <tr>
              <th>Conductor</th>
              <th>Domicilio</th>
              <th>N° Licencia</th>
              <th>Automovil</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <td><?php
                if ($_GET['nombre']) {
                  $nombre = $_GET['nombre'];
                  echo "$nombre";
                }?>
              </td>
              <td><?php
                if ($_GET['domicilio']) {
                  $domicilio = $_GET['domicilio'];
                  echo "$domicilio";
                }?>
              </td>
              <td>
                <?php
                if ($_GET['nlicencia']) {
                  $nlicencia = $_GET['nlicencia'];
                  echo "$nlicencia";
                }
                ?>
              </td>
              <td>
                <?php
                if ($_GET['marca']) {
                  $marca = $_GET['marca'];
                  echo "$marca ";
                }
                if ($_GET['modelo']) {
                  $modelo = $_GET['modelo'];
                  echo "$modelo ";
                }
                if ($_GET['anio']) {
                  $anio = $_GET['anio'];
                  echo "$anio ";
                }
                ?>
              </td>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <th>Clase</th>
              <th id="clase">
                <?php
                if ($_GET['clase']) {
                  $clase = $_GET['clase'];
                  echo "$clase";
                }
                ?>
              </th>
              <th><figure><img height="180px" src="img/carnet-hombre.jpg" alt="Foto carnet del conductor"></figure></td>
            </tr>
          </tbody>
        </table>
        <ul>
          <li>
            <?php
            if ($_GET['fechaNacimiento']) {
              $fechaNacimiento = $_GET['fechaNacimiento'];
              echo "Fecha de nac: $fechaNacimiento";
            }
            ?>
          </li>
          <li>
            <?php
            if ($_GET['sexo']) {
              $sexo = $_GET['sexo'];
              echo "Sexo: $sexo";
            }
            ?>
          </li>
        </ul>
        <figure id="img-carnet">
          <img height="160px" src="img/Initial-D-logo.png" alt="Logo Initial-D en carnet de conducir">
        </figure>
        <figure id="firma-carnet">
          <img height="85px" src="img/firma.png" alt="Firma del conductor">
        </figure>
      </div>
      <div class="btn">
        <button><a href="index.html">Inicio</a></button>
      </div>
    </section>
  </main>
  <footer>
    <h3><a href="index.html"><img height="35px" src="img/Initial-D-logo-white.png" alt="Initial-D"></a></h3>
    <article>
      <p>Shuichi Shigeno &copy; 1998</p>
    </article>
  </footer>
</body>
</html>

