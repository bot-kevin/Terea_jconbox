<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>


    <nav>
      <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="sass.html">Clientes</a></li>
          <li><a href="badges.html">Productos</a></li>
          <li><a href="collapsible.html">Proveedores</a></li>
        </ul>
      </div>
    </nav>

    <div class="row">
    <form class="col s6" method="post" action="logica.php">
      <div class="row">

        <div class="input-field col s6">
          <i class="material-icons prefix">assignment_ind</i>
          <input id="txtcedula" name="txtcedula" type="text" class="validate">
          <label for="txtcedula">Cedula</label>
        </div>

        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="txtnombre" name="txtnombre" type="text" class="validate">
          <label for="txtnombre">Nombre</label>
        </div>              
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="txtapellido" name="txtapellido" type="text" class="validate">
          <label for="txtapellido">Apellido</label>      
        </div>

        <div class="input-field col s6">
         <p>
          <label>
            <input class="with-gap" name="rEst" value="1" type="radio" checked />
            <span>Activo</span>
          </label>        
          <label>
            <input class="with-gap" name="rEst" value="0" type="radio"  />
            <span>Incactivo</span>
          </label>
         </p>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <select class="browser-default" name="txtrol">
          <option value="H">Rol</option>
          <option value="P">Profesor</option>
          <option value="C">Coordinador</option>          
          </select>
        </div>
        <div class="input-field col s6">  
          <button class="btn waves-effect waves-light" type="submit" name="action" >Enviar
          <i class="material-icons right">send</i>
          </button>
        </div>  
      </div>
         <div class="input-field col s6">
          <select class="browser-default" name="txtrol">
          <?php
            require_once('logica.php');
                       
              foreach (llenarcombo() as $j){                                                
             echo '<option value="">'.$j["dnombre"].'</option>';          
           }
          ?>
        </select>
        </div>
    </form>
    </div>


    </body>
  </html>

<script>
  $(document).ready(function(){
    $('select').formSelect();
  });
</script>