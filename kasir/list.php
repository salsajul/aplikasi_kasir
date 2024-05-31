<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Kasir</h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kasir</h6>
                        </div>
                        
                        <div class="card-body">
                        <button class="btn btn-info btn-user" id="addKsr" style="margin-bottom: 30px;">Tambah</button>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Kasir</th>
                                            <th>Username</th>
                                            <th>Nama Kasir</th>
                                            <th>Alamat</th>
                                            <th>Nomor HP</th>
                                            <th>Nomor KTP</th>
                                            <th>Password</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                    <?php
   include "../db.php";
   $db=new db;
   $ksr=$db->get_allKsr();
   $no=1;
   
   while ($result=$ksr->fetch_array()) {
    ?>
            <tr>
                <td>
                    <?php echo $no++; ?>
                </td>
                <td>
                    <?php echo $result['ID_Kasir']; ?>
                </td>
                <td>
                    <?php echo $result['Username']; ?>
                </td>
                <td>
                    <?php echo $result['NamaKasir']; ?>
                </td>
                <td>
                    <?php echo $result['Alamat']; ?>
                </td>
                <td>
                    <?php echo $result['NomorHP']; ?>
                </td>
                <td>
                    <?php echo $result['NomorKTP']; ?>
                </td>
                <td>
                    <?php echo $result['Password']; ?>
                </td>
               
                <td>
                    <button class="btn btn-success btn-user" id="editKsr" value="<?php echo $result['ID_Kasir']; ?>">Edit</button>
                    <button class="btn btn-danger btn-user" id="deleteKsr" value="<?php echo $result['ID_Kasir']; ?>">Delete</button>
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

            $("#addKsr").click(function(){
                $.ajax({
                    url: 'kasir/add.php',
                    type: 'get',
                    success: function(data) {
                        $('#contentData').html(data);
                    }
                });
        
            });  

        });
        </script>

   