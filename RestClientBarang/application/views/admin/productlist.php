<?php 
// print_r($productDetails);

?>

<div class="content">
    <div class="container-fluid">

    <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Product List</h4>
                        <!-- <p class="category"></p> -->
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Tipe</th>
                                <th>Category</th>
                                <th>SubCategory</th>
                                <th>Status</th>
                                <th>Gambar Barang</th>
                                <!-- <th></th> -->
                                <th></th>
                            </thead>
                            <tbody>
                                <?php foreach ($productDetails as $details) { ?>
                                    <tr>
                                        <td><?php echo $details['pid']; ?></td>
                                        <td><?php echo $details['pname']; ?></td>
                                        <td><?php echo $details['tipe']; ?></td>
                                        <td><?php echo $details['category']; ?></td>
                                        <td><?php echo $details['subcategory']; ?></td>
                                        <td><?php echo $details['status']; ?></td>
                                        <td><img src= "<?php echo base_url().'assets/img/'.$details['pimage']; ?>" class="img-fluid" style="height: 50px; width: 40px;"></td>
                                        <td><?php echo '<a href ="' .  base_url().'admin/updateProduct?id=' .$details['pid'], '"><i class="fas fa-edit" style="color:green"></i></a>'; ?></td>
                                        <td><?php echo '<a href ="' . base_url() . 'admin/deleteProduct?id=' . $details['pid'], '"><i class="fas fa-trash-alt" style="color:red;"></i></a>'; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>