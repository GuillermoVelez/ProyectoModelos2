var Editar = document.getElementById('Actualizar');


Editar.addEventListener('submit', function(e){
	e.preventDefault();
	var datos= new FormData(Editar);
	console.log(datos)

	fetch('../BackEnd/editar.php',{
		method: 'POST',
		body: datos
	})
	.then(res => res.json())
	.then(data => {
		console.log(data)
		alert(data);
	})
})
