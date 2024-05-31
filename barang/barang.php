<?php
include "../db.php";
$db=new db;

switch ($_GET['action'])
{

    case 'save':

        $ID_Barang = $_POST['ID_Barang'];
        $NamaBarang = $_POST['NamaBarang'];
        $Satuan = $_POST['Satuan'];
        $HargaSatuan = $_POST['HargaSatuan'];

        $query = $db->add_brg($ID_Barang,$NamaBarang,$Satuan,$HargaSatuan);
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

        $ID_Barang = $_POST['ID_Barang'];
        $NamaBarang = $_POST['NamaBarang'];
        $Satuan = $_POST['Satuan'];
        $HargaSatuan = $_POST['HargaSatuan'];
      
        $query = $db->update_brg($ID_Barang,$NamaBarang,$Satuan,$HargaSatuan);
       
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

        $ID_Barang = $_POST['ID_Barang'];
        $query = $db->del_brg($ID_Barang);
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
