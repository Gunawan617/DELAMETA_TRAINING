<?php

    require "koneksidb.php";

    //GET DATA DARI DAFTAR RFID
    $get_addrfid          = $_GET['addrfid'];
    $get_addnama          = $_GET['addnama'];
    $get_addalamat        = $_GET['addalamat'];
    $get_addtelepon       = $_GET['addtelepon'];
    $get_addsaldo         = $_GET['addsaldo'];

      //EDIT DATA DARI DAFTAR RFID
    $get_editrfid          = $_GET['editrfid'];
    $get_editnama          = $_GET['editnama'];
    $get_editalamat        = $_GET['editalamat'];
    $get_edittelepon       = $_GET['edittelepon'];
    $get_editsaldo         = $_GET['editsaldo'];

    //GET HAPUS RFID
    $hapusrfid = $_GET['hapusrfid'];
      

    //GET DATA DARI DAFTAR TOL
    $get_addnamatol       = $_GET['addnamatol'];
    $get_addhargatol      = $_GET['addhargatol'];

    //EDIT DAFTAR Tol
    $get_editdatatol       = $_GET['editdatatol'];
    $get_editnamatol       = $_GET['editnamatol'];
    $get_edithargatol      = $_GET['edithargatol'];

    //GET HAPUS
     $hapustol = $_GET['hapustol'];
  
   
// data

    //JIKA RFID MENERIMA DATA BARU TAMBAH
    if($get_addrfid>0){
        $input = "INSERT INTO tb_daftarrfid (rfid,nama, alamat,telepon,saldo) 
                  VALUES ('" . $get_addrfid . "', '" . $get_addnama . "', '" . $get_addalamat . "', 
                          '" . $get_addtelepon . "', '" . $get_addsaldo . "')";
        $koneksi->query($input);
        header("Location: data.php?pesan=Rfid Baru Berhasil disimpan!");
    }

    //JIKA EDIT RFID MENERIMA PERUBAHAN
    if($get_editrfid>0){
        $sql      = "UPDATE tb_daftarrfid SET 
				nama = '$get_editnama',alamat = '$get_editalamat',
                telepon = '$get_edittelepon',saldo = '$get_editsaldo' 
                WHERE rfid='$get_editrfid'"; 
                $koneksi->query($sql);

                header("Location: data.php?pesan=Data Rfid Berhasil Dirubah");
    }

    //JIKA HAPUS DATA RFID MENERIMA PERUBAHAN
    if($hapusrfid>0){
        $sql      = "DELETE FROM tb_daftarrfid WHERE id ='$hapusrfid'";

        if($koneksi->query($sql) === TRUE){
            header("Location: data.php");
        } else{
            echo " Error deleting record : " . $koneksi->error;
        }
        header("Location: data.php");
    }


//  INI UNTUK TOL

    //JIKA TOL MENERIMA DATA BARU
    else if($get_addnamatol>0){
        $input1 = "INSERT INTO tb_tol (namatol,harga) 
                  VALUES ('" . $get_addnamatol . "', '" . $get_addhargatol . "')";
        $koneksi->query($input1);
        header("Location: data.php?pesan=Nama Tol Baru Berhasil disimpan!");
    }


     //JIKA EDIT  TOL MENERIMA PERUBAHAN
     if($get_editdatatol>0){
        $sql      = "UPDATE tb_tol SET 
                  namatol='$get_editnamatol',
			      harga= '$get_edithargatol' 
                WHERE  namatol='$get_editdatatol'"; 
                $koneksi->query($sql);

                header("Location: data.php?pesan=Data TOL Berhasil Dirubah");
    }

    //JIKA HAPUS TOL MENERIMA PERUBAHAN
    if($hapustol>0){
        $sql      = "DELETE FROM tb_tol WHERE id ='$hapustol'";

        if($koneksi->query($sql) === TRUE){
            header("Location: data.php");
        } else{
            echo " Error deleting record : " . $koneksi->error;
        }
        header("Location: data.php");
    }

?>