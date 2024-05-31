<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tambah Barang</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Barang</h6>
                        </div>
                        
                        <div class="card-body">
                       
                            <div class="table-responsive">
                            <form method="POST" id="formBrg">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"></label>
                                    <input type="number" class="form-control" name="ID_Barang" hidden>
                                   
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Barang</label>
                                    <input type="text" class="form-control" name="NamaBarang">
                                   
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Satuan</label>
                                    <input type="text" class="form-control" name="Satuan">
                                   
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Harga Satuan</label>
                                    <input type="text" class="form-control" name="HargaSatuan">
                                   
                                </div>
                               
                                <button type="submit" class="btn btn-primary" id="simpanBrg">Simpan</button>
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
    

   