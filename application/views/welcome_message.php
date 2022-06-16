<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<title>Drixo - Responsive Booststrap 4 Admin & Dashboard</title>
	<meta content="Admin Dashboard" name="description" />
	<meta content="ThemeDesign" name="author" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/icons.css" rel="stylesheet" type="text/css">
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

<form method="post" action="">
	<textarea id="elm1" name="area"></textarea>
	<input type="submit" name="save" value="print">
</form>

</body>
</html>

<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/plugins/tinymce/tinymce.min.js"></script>
<!-- App js -->
<script src="assets/js/app.js"></script>

<script>
	$(document).ready(function () {
		if($("#elm1").length > 0){
			tinymce.init({
				selector: "textarea#elm1",
				theme: "modern",
				height:300,
				toolbar: "bold italic | bullist numlist",
				style_formats: [
					{title: 'Bold text', inline: 'b'}
				]
			});
		}
	});
</script>

<?php
if (isset($_POST['save'])){
	$display = $_POST["area"];
	echo $display;
}
