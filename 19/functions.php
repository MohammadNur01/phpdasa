<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "mmmmmma8", "phpdasar");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $gns = [];
    while($gn = mysqli_fetch_assoc($result)){
        $gns[] = $gn;
    }
    return $gns;
}


function tambah($data) {
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $elevasi = htmlspecialchars($data["elevasi"]);
    $lokasi = htmlspecialchars($data["lokasi"]);
    $akomodasi = htmlspecialchars($data["akomodasi"]);
    $basecamp = htmlspecialchars($data["basecamp"]);
    
    // upload gambar
    $gambar = upload();
    if ( !$gambar){
    return false;
}
    $query = "INSERT INTO gunung
                VALUES
                ('0', '$nama', '$elevasi', '$lokasi', '$akomodasi', '$basecamp', '$gambar')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function upload(){
    
    $namaFile = $_FILES['gambar'] ['name'];
    $ukuranFile =$_FILES['gambar'] ['size'];
    $error = $_FILES['gambar'] ['error'];
    $tmpName = $_FILES['gambar'] ['tmp_name'];

    // cek apakah tidak ada gambar yand di upload
    if ($error === 4){
        echo "<script>
                alert('pilih gambar dahulu');
            </script>";
        return false;
    }

    // cek apakah yg diupload adalah gambar
    $ekstensiGambarValid = ['jpeg', 'jpg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
                alert('yang anda upload bukan gambar!');
            </script>";
        return false;
    } 

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000){
        echo "<script>
            alert('ukuran gambar terlalu besar!');
            </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img2/'. $namaFileBaru);

    return $namaFileBaru;
}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM gunung WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $elevasi = htmlspecialchars($data["elevasi"]);
    $lokasi = htmlspecialchars($data["lokasi"]);
    $akomodasi = htmlspecialchars($data["akomodasi"]);
    $basecamp = htmlspecialchars($data["basecamp"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru
    if ($_FILES['gambar']['error'] === 4){
        $gambar = $gambarLama;
    } else{
        $gambar = upload();
    }
    

    $query = "UPDATE gunung SET 
                nama = '$nama',
                elevasi = '$elevasi',
                lokasi = '$lokasi',
                akomodasi = '$akomodasi',
                basecamp = '$basecamp',
                gambar = '$gambar'
            WHERE id = '$id'
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM gunung WHERE
    nama LIKE '%$keyword%' OR
    elevasi LIKE '%$keyword%' OR
    lokasi LIKE '%$keyword%' OR
    akomodasi LIKE '%$keyword%' OR
    basecamp LIKE '%$keyword%'
    ";
    return query($query);
}

function registrasi($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek apakah user udah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)){
        echo "<script>
            alert('username sudah terdaftar!');
            </script>";
        return false;
    }

    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
            alert('konfirmasi password tidak sesuai!');
            </script>";
        return false;
    }
    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan username ke data base
    mysqli_query($conn, "INSERT INTO user VALUES('0', '$username', '$password')");

    return mysqli_affected_rows($conn);
    
}

?>

