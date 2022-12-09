<?php 
// koneksi ke database("localhost", "user", "password", "nama database")
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}



function tambah($data){
    global $conn;

    $nama = htmlspecialchars( $data['nama']);
    $nis = htmlspecialchars($data['nis']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    
// upload gambar 
    $gambar = upload();
    if (!$gambar) {
        return false;
    }





    $query = "INSERT INTO
                mahasiswa
                VALUES
                (null, '$nama', '$nis', '$email', '$jurusan', '$gambar');
                ";
    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}



function upload () {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apkah ada gambar yamg diupload atau tidak
    if($error === 4) {
        echo "<script>
                alert('Mohon Masukkan Gambar');
              </script>";
        return false;
    }
    
    // Cek apakah yang diupload gambar atau bukan
    $ektensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ektensiGambar = explode('.', $namaFile);
    $ektensiGambar = strtolower(end($ektensiGambar));


    if(!in_array($ektensiGambar, $ektensiGambarValid)) {
        echo "<script>
                alert('Mohon Masukkan Gambar Dengan Benar');
              </script>";
        return false;
    };
    

    // cek jika ukuran gambar terlalu besar
    if ( $ukuranFile > 1000000 ) {
        echo "<script>
                alert('Gambar yang anda masukkan melebihi 1MB');
            </script>";
    return false;
    }; 
    $namaFilebaru = uniqid();
    $namaFilebaru .= '.';
    $namaFilebaru .= $ektensiGambar;

    // lolos pengecekan,gambar siap diupload
    move_uploaded_file($tmpName, 'img/'. $namaFilebaru);

    return $namaFilebaru; 
    
}




function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;

    $id = $data['id'];
    $nama = htmlspecialchars( $data['nama']);
    $nis = htmlspecialchars($data['nis']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $gambarlama = htmlspecialchars($data['gambarlama']);

    // cek apakah user memilih gambar atau tidak
    if ( $_FILES['gambar']['error']===4){
        $gambar = $gambarlama;
    } else (
        $gambar = upload()
    );
    

    $query = "UPDATE mahasiswa SET
                nama = '$nama',
                nis = '$nis',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
                WHERE id = $id";

    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}
function cari($keyword) {
	$query = "SELECT * FROM mahasiswa
				WHERE
			  nama LIKE '%$keyword%' OR
			  nis LIKE '%$keyword%' OR
			  email LIKE '%$keyword%' OR
			  jurusan LIKE '%$keyword%'
			";
	return query($query);
}







?>


