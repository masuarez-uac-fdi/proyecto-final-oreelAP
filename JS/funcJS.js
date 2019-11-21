document.querySelector('#boton').addEventListener('click', traerDatos());
function traerDatos(){
	const xhttp = new XMLHttpRequest();
	xhttp.open('GET', 'JS/productos.json', true);
	xhttp.send();
	xhttp.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200) {
			let datos = JSON.parse(this.responseText);
			let res = document.querySelector('#res');
			res.innerHTML = '';
			for(let prod of datos){
				res.innerHTML += `
					<tr>
						<td>${prod.producto}</td>
						<td>${prod.descripcion}</td>
					</tr>
				`
			}
		}
	}
}