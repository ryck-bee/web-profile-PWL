<?php 

require 'functions.php';

$id = $_GET["id"];

if (dell($id) > 0) {
echo "
	<script>
	alert('Success Delete');
	document.location.href = 'haslogin.php'
	</script>
	";
}
else {
	echo "
	<script>
	alert('Error Delete');
	documennt.location.href = 'haslogin.php'
	</script>
	";
}

 ?>