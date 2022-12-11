<?php
    include "Client.php";

    if($_POST['aksi'] == 'tambahobat'){
        $data = array("id_obat"=>$_POST['id_obat'], 
        "nama_obat"=>$_POST['nama_obat'],
        "stok_obat"=>$_POST['stok_obat'],
        "harga_obat"=>$_POST['harga_obat'],
        "aksi"=>$_POST['aksi']);
        $abc->tambah_obat($data);
        header('location:index.php?page=daftar-data');
    } else if($_POST['aksi'] == 'tambahpasien'){
        $data = array("id_pasien"=>$_POST['id_pasien'], 
        "nama_pasien"=>$_POST['nama_pasien'],
        "aksi"=>$_POST['aksi']);
        $abc->tambah_pasien($data);
        header('location:index.php?page=daftar-data');
    }else if($_POST['aksi'] == 'ubah'){
        $data = array("nama_pasien"=>$_POST['nama_pasien'],
        "nama_obat"=>$_POST['nama_obat'],
        "harga_obat"=>$_POST['harga_obat'],
        "aksi"=>$_POST['aksi']);
        $abc->ubah_data($data);
        header('location:index.php?page=daftar-data');
    } else if($_GET['aksi'] == 'hapus'){
        $data = array("id_pasien"=>$_GET['id_pasien'], "aksi"=>$_GET['aksi']);
        $abc->hapus_data($data);
        header('location:index.php?page=daftar-data');
    }
    unset($abc, $data);
?>