<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edite Barang</h4>
                    </div>
                    <div class="content">
                  
                        <form enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/updateProduct'); ?>">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Barang</label>
                                        <input type="text" class="form-control" placeholder="Enter Product Name" required name="productName">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Tipe</label>
                                        <!-- <input type="text" class="form-control" placeholder="Username" value="michael23"> -->
                                        <select class="form-control" name="gender" required>
                                            <option value="barang hilang">Barang Hilang</option>
                                            <option value="barang temuan">Barang Temuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <select class="form-control" name="category" required>
                                            <option value="elektronik">Elektronik</option>
                                            <option value="aksesoris">Aksesoris</option>
                                            <option value="document">Document</option>
                                            <option value="pakaian">Pakaian</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="subcategory">Subcategory</label>
                                        <input type="text" class="form-control" placeholder="Sub-Category nya .... " required name="subcategory">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check-inline">
                                        <label class=" form-check-inline">Status: </label>
                                       <label class="form-check-inline"><input type="checkbox" name="status[]" value="ditemukan">&nbsp;Di Temukan</label>
                                       <label class="form-check-inline"><input type="checkbox" name="status[]" value="hilang">&nbsp;Hilang</label>
                                       <label class="form-check-inline"><input type="checkbox" name="status[]" value="pencarian">&nbsp;Pencarian</label>
                                       <label class="form-check-inline"><input type="checkbox" name="status[]" value="tidakditemukan">&nbsp;Tidak Di Temukan</label>
                                    </div>
                                </div>
                            </div>

                         
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label>Unggah Gambar Barang</label>
                                        <input type="file" class="form-control" required name="image">
                                    </div>
                                </div>
                            </div>                             
                        
                            <button type="submit" class="btn btn-info btn-fill pull-right">Add Product</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</div>