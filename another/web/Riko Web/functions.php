<?php 
// koneksi
$conn = mysqli_connect("localhost", "root", "", "hitech");

// read
function query($query) {
	global $conn;

	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}

	return $rows;
}
// create 1
function buat($daftar){
	global $conn;

	$username = $daftar["username"];
	$email = $daftar["email"];
	$password = mysqli_real_escape_string($conn, $daftar["password"]);
	$password2 = mysqli_real_escape_string($conn, $daftar["password2"]);


	$hasil = mysqli_query($conn, "SELECT username FROM tb_user WHERE username = '$username'");

	

	if( $password !== $password2) {
		echo "<script>
				alert('Wrong Password');
			  </script>";
		return false;		
	}

	$password = password_hash($password, PASSWORD_DEFAULT);

	$query = "INSERT INTO tb_user VALUES ('','$username','$email','$password')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}
// create 2
function gambar($tambah){
	global $conn;

	$namacontent = mysqli_real_escape_string($conn, $tambah["cname"]);
	$desccontent = mysqli_real_escape_string($conn, $tambah["desc"]);

	$gmbcontent = upload();

	if ( !$gmbcontent ) {
		return false;
	}

	$query = "INSERT INTO tb_content VALUES ('','$namacontent','$desccontent','$gmbcontent')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}
// upload
function upload() {
	$namafile = $_FILES['gambar']['name'];
	$ukuranfile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$lok = $_FILES['gambar']['tmp_name'];

	if ( $error === 4 ) {
		echo "<script>
			alert('Choose Picture !!');	
		</script>";
		return false;
	}

	// cek ekstensi gambar
	$ekstensivalid = ['jpg', 'jpeg', 'png'];
	$ekstensi = explode('.', $namafile);
	$ekstensi = strtolower(end($ekstensi));

	if ( !in_array($ekstensi, $ekstensivalid)) {
		echo "<script>
			alert('This is not Picture !!');	
		</script>";
		return false;
	}

	// cek ukuran file
	if ( $ukuranfile > 1000000 ) {
		echo "<script>
			alert('Size is too Large !!');	
		</script>";
		return false;
	}

	$namafilenew = uniqid();
	$namafilenew .= '.';
	$namafilenew .= $ekstensi;

	move_uploaded_file($lok, 'images/tech/' . $namafilenew);

	return $namafilenew;
}
// edit
function edit($update){
	global $conn;

	$id = $update["id"];
	$namacontent = mysqli_real_escape_string($conn, $update["cname"]);
	$desccontent = mysqli_real_escape_string($conn, $update["desc"]);

	$gambarold = mysqli_real_escape_string($conn, $update["gambarold"]);
	if ( $_FILES['gambar']['error'] === 4 ) {
		$gmbcontent = $gambarold;
	}else{
		$gmbcontent = upload();
	}


	$query = "UPDATE tb_content SET 
		nama_content = '$namacontent',
		desc_content = '$desccontent',
		gmb_content = '$gmbcontent'
		
	WHERE id = $id;
	";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}
// delete
function dell($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM tb_content WHERE id = $id");
	return mysqli_affected_rows($conn);
}
// search
function finding($keyword){

	if (!$keyword > 0) {

		return false;
	}

	$query = "SELECT * FROM tb_content 
				WHERE 
				nama_content LIKE '%$keyword%' OR
				desc_content LIKE '%$keyword%'
			";
	return query($query);
}


 ?>