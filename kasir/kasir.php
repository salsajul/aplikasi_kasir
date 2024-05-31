<?php
include "../db.php";
$db=new db;

switch ($_GET['action'])
{

    case 'save':

        $ID_Kasir = $_POST['ID_Kasir'];
        $Username = $_POST['Username'];
        $NamaKasir = $_POST['NamaKasir'];
        $Alamat = $_POST['Alamat'];
        $NomorHP = $_POST['NomorHP'];
        $NomorKTP = $_POST['NomorKTP'];
        $Password = $_POST['Password'];

        $query = $db->add_ksr($ID_Kasir,$Username,$NamaKasir,$Alamat,$NomorHP,$NomorKTP,$Password);
        if ($query)
        {
            echo "Simpan Data Berhasil";
        }
        else
        {
            echo "Simpan Data Gagal :";
        }
    break;

    case 'edit':

        $ID_Kasir = $_POST['ID_Kasir'];
        $Username = $_POST['Username'];
        $NamaKasir = $_POST['NamaKasir'];
        $Alamat = $_POST['Alamat'];
        $NomorHP = $_POST['NomorHP'];
        $NomorKTP = $_POST['NomorKTP'];
        $Password = $_POST['Password'];
      
        $query = $db->update_ksr($ID_Kasir,$Username,$NamaKasir,$Alamat,$NomorHP,$NomorKTP,$Password);
       
        if ($query)
        {
            echo "Edit Data Berhasil";
        }
        else
        {
            echo "Edit Data Gagal :";
        }
    break;

    case 'delete':

        $ID_Kasir = $_POST['ID_Kasir'];
        $query = $db->del_ksr($ID_Kasir);
        if ($query)
        {
            echo "Hapus Data Berhasil";
        }
        else
        {
            echo "Hapus Data Gagal :" ;
        }
    break;
}
?>
