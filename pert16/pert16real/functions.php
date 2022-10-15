<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "tugasbesar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows   = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $nis = htmlspecialchars($data["nis"]);
    $nama  = htmlspecialchars($data["nama"]);
    $jkel = htmlspecialchars($data["jkel"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $query = "INSERT INTO datasiswa
                VALUES
                ('', '$nis', '$nama', '$jkel', '$kelas', '$alamat')
             ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM datasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}


function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nis = htmlspecialchars($data["nis"]);
    $nama  = htmlspecialchars($data["nama"]);
    $jkel = htmlspecialchars($data["jkel"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $query = "UPDATE datasiswa SET
                 nis = '$nis',
                 nama = '$nama',
                 jkel = '$jkel',
                 kelas = '$kelas',
                 alamat = '$alamat'
                WHERE id = $id
             ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM datasiswa
                WHERE
            nama LIKE  '%$keyword%' OR
            nis LIKE '%$keyword%' OR
            jkel LIKE '%$keyword%' OR
            kelas LIKE '%$keyword%'
            ";

        return query($query);
}

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_escape_string($conn, $data["password2"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('username sudah terdaftar!');
              </script>";

        return false;
    }

    //cek konfirmasi password
    if( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
              </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username' , '$password')");

    return mysqli_affected_rows($conn);
}

?>