
var xhr = new XMLHttpRequest();
xhr.open('GET','../BackEnd/mostrar.php');
xhr.onload = function (){
	if(xhr.status == 200){
		var json= JSON.parse(xhr.responseText);
		console.log(json)
		var template =``;
		json.map(function(data){
			aux=0;
			template += `
			<tr>
			<td>${data.Nombre}</td>
			<td>${data.Apellido}</td>
			<td>${data.IdAlumno}</td>
			<td>${data.Edad}</td>
			<td>${data.Direccion_Residencia}</td>
			</tr>	
			`
		});
		console.log(template)
		document.getElementById('tabla').innerHTML=template;
	}else{
		console.log("EXISTE UN ERROR DE TIPO:"+xhr.status)
	}
}
xhr.send();
