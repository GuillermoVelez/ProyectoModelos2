var formulario = document.getElementById('formulario');



formulario.addEventListener('submit', function(ev){
	ev.preventDefault();
	var datos= new FormData(formulario);
	console.log(datos)

	fetch('../BackEnd/AgregarEstudiante.php',{
		method: 'POST',
		body: datos
	})
	.then(res => res.json())
	.then(data => {
		console.log(data)
		alert(data);
	})
})
