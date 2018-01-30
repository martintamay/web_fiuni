var pag = 0;

var textoPag = "";

var noticias = [];

function mostrarNoticias(){
	textoPag = '<div class="container"> ';
	textoPag +=	'  <div class="row">' ;
	textoPag +=	'    <div class="col-md-12 col-sm-12 text-center"> ';
	textoPag +=	'      <div class="section-title"> ';
	textoPag +=	'        <h1 class="heading bold rojo">Últimas Noticias</h1> ';
	textoPag +=	'        <hr> ';
	textoPag +=	'      </div>' ;
	textoPag +=	'    </div>' ;
	textoPag +=	'  </div>';

	textoPag += generarNoticias();

	textoPag +=	'<div class="container nav-noticias" style="text-align: center;">' ;
	textoPag +=	'  <a class="btn btn-danger" onClick="noticiasAnt();">Anterior</a> ';
	textoPag +=	'  <a class="btn btn-danger" onClick="noticiasSig();">Siguiente</a> ';
	textoPag +=	'</div>';
	document.getElementById("noticias").innerHTML = textoPag;
}

function noticiasSig(){
	pag++;
	mostrarNoticias();
}

function noticiasAnt(){
	pag--;
	mostrarNoticias();
}

function generarNoticias(){
	var textNoticias = "";
	var init = pag*10;
	var fin = (pag+1)*10-1;
	for(var c = init; c<fin && c<noticias.length; c++){
		textNoticias+=formatearNoticia(noticias[c]);
	}
	return textNoticias;
}

function formatearNoticia(noticia){
	var texto = '<div class="row panel panel-default"> ';
	texto += '	<div class="panel-heading">';
	texto += '		<h3>'+noticia.titulo+'</h3>';
	texto += '		<small>Publicado el <strong>'+noticia.fecha+'</strong></small>';
	texto += '		<span class="label label-success">FIUNI</span>';
	texto += '	</div>';
	texto += '	<div class="panel-body">';
	texto += '  	<div class="row"> ';
	texto += '    	<div class="col-md-9 col-sm-12"> ';
	texto += '      	<p>'+noticia.contenido+'</p> ';
	if (noticia.hasOwnProperty("botonUrl")) {
		texto += '       	<a href="'+noticia.botonUrl+'" class="btn btn-danger">'+noticia.botonTexto+'</a>';
	}
	texto += '    	</div> ';
	texto += '    	<div class="col-md-3 col-sm-12"> ';
	if (noticia.hasOwnProperty("imagen")) {
		texto += '       	<img src="'+noticia.imagen+'" alt="noticia img"> ';
	}else{
		texto += '       	<img src="../images/noticias/LogoT.png" alt="noticia img"> ';
	}
	texto += '    	</div> ';
	texto += '  	</div> ';
	texto += '	</div>';
	texto += '</div>';
	return texto;
}

$(document).ready(
);

function cargarArrayNoticias(data){
	var todasLasNoticias = data.split(/\r?\n|\r/);
	for (var cNot = 0; cNot < todasLasNoticias.length; cNot++){
		var campos = todasLasNoticias[cNot].split(';');
		var noticia = null;
		if (campos.length == 3 || campos[3]=="") {
			//sin imagen ni boton
			var noticia = {
					titulo: campos[0],
					fecha: campos[1],
					contenido: campos[2]
				};
		}else if (campos.length == 4 || campos[5]=="") {
			//sin botón
			var noticia = {
					titulo: campos[0],
					fecha: campos[1],
					contenido: campos[2],
					imagen: campos[3]
				};
		}else if (campos.length == 6) {
			//ccon todo
			var noticia = {
					titulo: campos[0],
					fecha: campos[1],
					contenido: campos[2],
					imagen: campos[3],
					botonUrl: campos[4],
					botonTexto: campos[5]
				};
		}
		if (noticia!=null && noticia.titulo!="") {
			noticias.push(noticia);
		}
	}

	mostrarNoticias();
}

$.ajax({
		url: 'noticias2.csv',
		dataType: 'text',
    	contentType: "text/plain; charset=Windows-1252",
	}).done(cargarArrayNoticias);
