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

function cari2($keyword){
    $query = "SELECT * FROM dataguru
                WHERE
            nama LIKE  '%$keyword%' OR
            nip LIKE '%$keyword%' OR
            jkel LIKE '%$keyword%' OR
            mp LIKE '%$keyword%'
            ";

        return query($query);
}

function tambah2($data) {
    global $conn;

    $nip = htmlspecialchars($data["nip"]);
    $nama  = htmlspecialchars($data["nama"]);
    $jkel = htmlspecialchars($data["jkel"]);
    $mp = htmlspecialchars($data["mp"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $query = "INSERT INTO dataguru
                VALUES
                ('', '$nip', '$nama', '$jkel', '$mp', '$alamat')
             ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus2($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM dataguru WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah2($data) {
    global $conn;

    $id = $data["id"];
    $nip = htmlspecialchars($data["nip"]);
    $nama  = htmlspecialchars($data["nama"]);
    $jkel = htmlspecialchars($data["jkel"]);
    $mp = htmlspecialchars($data["mp"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $query = "UPDATE dataguru SET
                 nip = '$nip',
                 nama = '$nama',
                 jkel = '$jkel',
                 mp = '$mp',
                 alamat = '$alamat'
                WHERE id = $id
             ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>