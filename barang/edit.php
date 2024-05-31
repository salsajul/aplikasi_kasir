<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Barang</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Edit Barang</h6>
                        </div>
                        
                        <div class="card-body">
                        
                            <div class="table-responsive">

                            <?php
                            include "../db.php";
                            $ID_Barang=$_GET['ID_Barang'];
                            $db=new db;

                            $brg=$db->get_MhdByIDBrg($ID_Barang);
                            $result=$brg->fetch_array();
                            ?>
                            <form method="POST" id="formEditBrg">
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ID Barang</label>
                                    <input type="text" class="form-control" name="ID_Barang" value="<?php echo $result['ID_Barang']; ?>" readonly> 
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Barang</label>
                                    <input type="text" class="form-control" name="NamaBarang" value="<?php echo $result['NamaBarang']; ?>">
                                   
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Satuan</label>
                                    <input type="text" class="form-control" name="Satuan" value="<?php echo $result['Satuan']; ?>">
                                   
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Harga Satuan</label>
                                    <input type="text" class="form-control" name="HargaSatuan" value="<?php echo $result['HargaSatuan']; ?>">
                                   
                                </div>
                               
                                <button type="submit" class="btn btn-primary" >Edit</button>
                                </form>
                                
                            </div>
                        </div>
                    </div>

                </div>

                 <!-- Page level plugins -->
    <script src="asset/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="asset/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="asset/js/demo/datatables-demo.js"></script>
    

   