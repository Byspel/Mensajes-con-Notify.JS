<?php 
// Aqui puedes meter todo el codigo php que quieras
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Notificaciones con Notifi.js</title>
	<script src="jquery.js"></script>
	<script src="notify.js"></script>
</head>
<body>
	<?php 
	//Aqui tambien :)
	 ?>
	<button id="btnNotificaicones">Mostrar Mensaje</button>
	<script>
	$("#btnNotificaicones").click(function  () {
		$.notify("Mensaje con notify.js");
		$.notify("Mensaje con notify.js","warn");
		$.notify("Mensaje con notify.js","success");
		$.notify("Mensaje con notify.js","info");
	});
	</script>
</body>
</html>
<?php 
//Aqui tambien y no tiene por que alterar el funcionamiento de tu script
 ?>