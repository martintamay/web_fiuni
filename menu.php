<?php
	$path = "../";
	if($_SERVER['REQUEST_URI']=="/" || $_SERVER['REQUEST_URI']=="/fiuni/"){
		$path = "";
	}
	echo "<div id='mySidenav' class='sidenav'>
	  <!--<a href='javascript:custom.js;' class='closebtn' onclick='closeNav()'>&times;</a>-->
	  <a href='".$path."' onclick='closeNav()' class='smoothScroll'>Inicio</a>
	  <a href='".$path."noticias'>Noticias</a>	 
	  <a href='".$path."materiales-pdf'>Materiales</a>	 
	  <a href='".$path."academico'>Académico</a>
	  <a href='".$path."administracion'>Administración</a>
	  <a href='".$path."carreras'>Carreras</a>
	  <a href='".$path."postgrados'>Postgrados</a>
	  <a href='".$path."alumnos'>Alumnos</a>
	  <a href='javascript:custom.js;' onclick='closeNav()'>Cerrar</a>
	</div>";
?>