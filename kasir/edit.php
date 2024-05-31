<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Kasir</h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Edit Kasir</h6>
                        </div>
                        
                        <div class="card-body">
                        
                            <div class="table-responsive">

                            <?php
                            include "../db.php";
                            $ID_Kasir=$_GET['ID_Kasir'];
                            $db=new db;

                            $ksr =$db->get_MhdByIDksr($ID_Kasir);
                            $result=$ksr->fetch_array();
                            ?>
                            <form method="POST" id="formEditKsr">
                                
                            <div class="form-group">
                                    <label for="exampleInputEmail1">ID Kasir</label>
                                    <input type="text" class="form-control" name="ID_Kasir" value="<?php echo $result['ID_Kasir']; ?>" readonly>                               
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="text" class="form-control" name="Username" value="<?php echo $result['Username']; ?>">                            
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Kasir</label>
                                    <input type="text" class="form-control" name="NamaKasir" value="<?php echo $result['NamaKasir']; ?>">                            
                                </div> 
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat</label>
                                    <input type="text" class="form-control" name="Alamat" value="<?php echo $result['Alamat']; ?>">                            
                                </div>  
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor HP</label>
                                    <input type="text" class="form-control" name="NomorHP" value="<?php echo $result['NomorHP']; ?>">                            
                                </div> 
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor KTP</label>
                                    <input type="text" class="form-control" name="NomorKTP" value="<?php echo $result['NomorKTP']; ?>">                            
                                </div>  
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="password" class="form-control" name="Password" value="<?php echo $result['Password']; ?>">                            
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
    

   