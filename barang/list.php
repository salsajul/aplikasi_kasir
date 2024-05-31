<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Barang</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
                        </div>
                        
                        <div class="card-body">
                        <button class="btn btn-info btn-user" id="addBrg" style="margin-bottom: 30px;">Tambah</button>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Satuan</th>
                                            <th>Harga Satuan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                    <?php
   include "../db.php";
   $db=new db;
   $brg=$db->get_allBrg();
   $no=1;
   
   while ($result=$brg->fetch_array()) {
    ?>
            <tr>
                <td>
                    <?php echo $no++; ?>
                </td>
                <td>
                    <?php echo $result['ID_Barang']; ?>
                </td>
                <td>
                    <?php echo $result['NamaBarang']; ?>
                </td>
                <td>
                    <?php echo $result['Satuan']; ?>
                </td>
                <td>
                    <?php echo $result['HargaSatuan']; ?>
                </td>
               
                <td>
                    <button class="btn btn-success btn-user" id="editBrg" value="<?php echo $result['ID_Barang']; ?>">Edit</button>
                    <button class="btn btn-danger btn-user" id="deleteBrg" value="<?php echo $result['ID_Barang']; ?>">Delete</button>
                </td>
            </tr>
            <?php
   }
  ?>
                                      
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

                 <!-- Page level plugins -->
    <script src="asset/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="asset/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="asset/js/demo/datatables-demo.js"></script>
    <script>
        $(document).ready(function(){  

            $("#addBrg").click(function(){
                $.ajax({
                    url: 'barang/add.php',
                    type: 'get',
                    success: function(data) {
                        $('#contentData').html(data);
                    }
                });
        
            });  

        });
        </script>

   