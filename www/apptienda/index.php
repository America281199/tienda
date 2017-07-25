<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-type" content="text/html"; charset=utf-8">
<title>Tienda</title>

<!--grupo CSS-->
<link rel="stylesheet" href="css/tema-app.min.css"/>
<link rel="stylesheet" href="css/jquery.mobile.icons-1.4.5.min.css"/>
<link rel="stylesheet" href="css/jquery.mobile.structure-1.4.5.min.css"/>
<!--grupo JavaScript-->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/jquery.mobile-1.4.5.min.js"></script>
<script src="js/acciones.js"></script>
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<script src="phonegap.js"></script>
<script type="text/javascript"> </script>
</head>

<body>
<div data-role="page" id="Principal" data-theme="b">
    <div data-role ="header" data-add-back-btn="true" data-back-btn-text="Regresar"  data-back-btn-theme="a">
      <h1>Inicio</h1>
    </div>
<br>
     <div>
       <ul data-role="listview" data-theme="b" class="ui-listview ui-group-theme-b">
       <li class="ui-first-child ui-last-child">
         <a href="#Pagina1" class="ui-btn ui-btn-icon-right ui-icon-carat-r">
              <h2>Productos</h2>
         </a>
       </li>
       <li class="ui-first-child ui-last-child">
         <a href="#Pagina2" class="ui-btn ui-btn-icon-right ui-icon-carat-r">
              <h2>Buscar</h2>
         </a>
       </li>
       <li class="ui-first-child ui-last-child">
         <a href="#Pagina3" class="ui-btn ui-btn-icon-right ui-icon-carat-r">
              <h2>Registrar venta</h2>
         </a>
       </li>
       <li class="ui-first-child ui-last-child">
         <a href="#Pagina4" class="ui-btn ui-btn-icon-right ui-icon-carat-r">
              <h2>Inventario</h2>
         </a>
       </li>
     </ul>
     

     
  </div>
     <div data-role="footer" align="center" data-theme="b" data-position="fixed">
        <div> 
          <img src="imagenes/mdpi.png" width="100">
        </div>
        <div>
            <h4>Tienda</h4>
            <h4>ADBO</h4>
        </div>
     </div>
</div>


<div data-role="page" id="Pagina1" data-add-back-btn="true" data-theme="b">
<div data-role="header" data-add-back-btn="true" data-back-btn-text="Regresar" data-back-btn-theme="b">
       <h1>Productos</h1>
      </div>
    <div>
    
    </div>

  <div data-role="collapsible" data-content-theme="false">
      <h1>Bimbo</h1>
        
                  
        <table border='2' width="90%">
      
        <td width="200px">Nombre</td>
        <td width='20px'>Piezas</td>
        <td width='50px'>Precio</td>
        <td width='100px'>Tipo</td>
      
   
       
         
            <?php
		 $conexion=mysqli_connect("localhost","root")or die("Problemas en la conexion");
	$var5="";
	   $var6="";
	   $var7="";
	   $var8="";
	   $var9="";
	mysqli_select_db($conexion,"tienda") or die("Problemas en la seleccion de Bd");
	$bimbo=mysqli_query($conexion,"SELECT * FROM bimbo") or die("Problemas en el select:".mysqli_error());
	while ($reg=mysqli_fetch_array($bimbo))
{
			 
			echo "<tr> <td width='200px''>".$reg['nombre']."</td><td width='20px'>".$reg['piezas']."</td><td width='50px'>".$reg['precio']."</td><td width='100px'>".$reg['tipo']."</td></tr>";
			
	} 
	echo "</table>";
	mysqli_close($conexion);			
?>
</li>
        </ul>

  </div>
    
  <div data-role="collapsible" data-content-theme="false">
      <h1>Marinela</h1>
        
                  
        <table border='2' width="90%">
      
        <td width="200px">Nombre</td>
        <td width='20px'>Piezas</td>
        <td width='50px'>Precio</td>
        <td width='100px'>Tipo</td>
      
   
       
         
            <?php
		 $conexion=mysqli_connect("localhost","root")or die("Problemas en la conexion");
	$var5="";
	   $var6="";
	   $var7="";
	   $var8="";
	   $var9="";
	mysqli_select_db($conexion,"tienda") or die("Problemas en la seleccion de Bd");
	$marinela=mysqli_query($conexion,"SELECT * FROM marinela") or die("Problemas en el select:".mysqli_error());
	while ($reg=mysqli_fetch_array($marinela))
{
			 
			echo "<tr> <td width='200px''>".$reg['nombre']."</td><td width='20px'>".$reg['piezas']."</td><td width='50px'>".$reg['precio']."</td><td width='100px'>".$reg['tipo']."</td></tr>";
			
	} 
	echo "</table>";
	mysqli_close($conexion);			
?>
</li>
        </ul>

  </div>

<div data-role="footer" data-theme="b" data-position="fixed">
     <div>
     <center><img src="imagenes/mdpi.png" width="100"></center>
     </div>
    <h4> Tienda</h4>
    <p>ADBO</p>
  </div>
</div> 
</body>
</html>
