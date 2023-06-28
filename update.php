<?php
$conn=mysqli_connect("localhost","root","","crudflutter");
$id=$_POST['id'];
$nisn=$_POST['nisn'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$data=mysqli_query($conn,"update mahasiswa set nisn='$nisn',nama='$nama',alamat='$alamat' where id='$id'");

if ($data) {
    echo json_encode(array('message'=>'data berhasil di tambahkan'));
} else {
    echo json_encode(array('message'=>'data gagal di tambahkan'));
}

?>