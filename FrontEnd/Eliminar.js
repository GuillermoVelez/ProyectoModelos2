var eli = document.getElementById('delete');

eli.addEventListener('submit', function(ev){
	ev.preventDefault();
	var datos= new FormData(eli);


	fetch('../BackEnd/eliminar.php',{
		method: 'POST',
		body: datos
	})
	.then(res => res.json())
	.then(data => {
		console.log(data)
		alert(data);
	})
})

