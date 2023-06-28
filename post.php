<?php
$conn=mysqli_connect("localhost","root","","crudflutter");
$nisn=$_POST['nisn'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$data=mysqli_query($conn,"insert into mahasiswa set nisn='$nisn',nama='$nama',alamat='$alamat'");

if ($data) {
    echo json_encode(array('message'=>'data berhasil di tambahkan'));
} else {
    echo json_encode(array('message'=>'data gagal di tambahkan'));
}

?>