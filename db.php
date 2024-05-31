<?php

class db{
    private $koneksi;
    function __construct()
    {
        $this->koneksi= $koneksi=new mysqli("localhost","root","","aplikasi_kasir");
        
    }
    function get_user($username,$password){
        $data=$this->koneksi->query("select * from kasir where username='$username' and password='$password'");
        return $data;
    }

    // barang
    function get_allBrg(){
        $data=$this->koneksi->query("select * from barang");
        return $data;
    }

    function add_brg($ID_Barang,$NamaBarang,$Satuan,$HargaSatuan){
        $this->koneksi->query("insert into barang (ID_Barang,NamaBarang,Satuan,HargaSatuan) values('$ID_Barang','$NamaBarang','$Satuan','$HargaSatuan')");
        return true;

    }

    function update_brg($ID_Barang,$NamaBarang,$Satuan,$HargaSatuan){
            $this->koneksi->query("UPDATE barang SET NamaBarang = '$NamaBarang', Satuan = '$Satuan', HargaSatuan = '$HargaSatuan' WHERE ID_Barang='$ID_Barang'");
            return true;
    }

    function get_MhdByIDBrg($ID_Barang){
        $data=$this->koneksi->query("select * from barang where ID_Barang='$ID_Barang'");
        return $data;
    }

    function del_brg($ID_Barang){
        $this->koneksi->query("delete from barang where ID_Barang='$ID_Barang'");
        return true;

    }

        // kasir
        function get_allKsr(){
            $data=$this->koneksi->query("select * from kasir");
            return $data;
        }
    
        function add_ksr($ID_Kasir,$Username,$NamaKasir,$Alamat,$NomorHP,$NomorKTP,$Password){
            $this->koneksi->query("insert into kasir (ID_Kasir,Username,NamaKasir,Alamat,NomorHP,NomorKTP,Password) values ('$ID_Kasir','$Username','$NamaKasir','$Alamat','$NomorHP','$NomorKTP','$Password')");
            return true;
    
        }
    
        function update_ksr($ID_Kasir,$Username,$NamaKasir,$Alamat,$NomorHP,$NomorKTP,$Password){
                $this->koneksi->query("UPDATE kasir SET Username = '$Username', NamaKasir = '$NamaKasir', Alamat = '$Alamat', NomorHP = '$NomorHP', NomorKTP = '$NomorKTP', Password = '$Password' WHERE ID_Kasir='$ID_Kasir'");
                return true;
        }
    
        function get_MhdByIDKsr($ID_Kasir){
            $data=$this->koneksi->query("select * from kasir where ID_Kasir='$ID_Kasir'");
            return $data;
        }
    
        function del_ksr($ID_Kasir){
            $this->koneksi->query("delete from kasir where ID_Kasir='$ID_Kasir'");
            return true;
    
        }


} 

?>


