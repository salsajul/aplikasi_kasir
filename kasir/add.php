<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tambah Kasir</h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Kasir</h6>
                        </div>
                        
                        <div class="card-body">
                       
                            <div class="table-responsive">
                            <form method="POST" id="formKsr">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"></label>
                                    <input type="number" class="form-control" name="ID_Kasir" hidden>                                   
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="text" class="form-control" name="Username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Kasir</label>
                                    <input type="text" class="form-control" name="NamaKasir">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat</label>
                                    <input type="text" class="form-control" name="Alamat">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor HP</label>
                                    <input type="text" class="form-control" name="NomorHP">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor KTP</label>
                                    <input type="text" class="form-control" name="NomorKTP">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="password" class="form-control" name="Password">
                                </div>
                               
                                <button type="submit" class="btn btn-primary" id="simpanKsr">Simpan</button>
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
    

   