$(document).ready(function(){
	$.ajax({
		url: "../datos.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var datos = JSON.parse(data); 
			var nombre_proyecto = [];
			var total = [];

			for(var i in datos) {
				nombre_proyecto.push("Nombre del proyecto" + datos[i].nombre_proyecto);
				total.push(datos[i].total);
			}

			var ctx = $("#grafico");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});

			var chartdata = {
				labels: nombre_proyecto,
				datasets : [
					{
						label: 'Nombre del proyecto total',
						backgroundColor: 'rgba(66, 244, 122, 0.75)',
						borderColor: 'rgba(66, 244, 122, 0.75)',
						hoverBackgroundColor: 'rgba(66, 134, 244, 1)',
						hoverBorderColor: 'rgba(66, 134, 244, 1)',
						data: total
					}
				]
			};

			var ctx = $("#grafico");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(datos);
		}
	});
});