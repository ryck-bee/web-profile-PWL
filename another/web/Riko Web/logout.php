<?php 
	require 'functions.php';
	session_start();
	session_destroy();
	echo "
    <script>
    alert('Succses Logout !');
    document.location.href = 'index.php'
    </script>
    ";
 ?>