<?php
// echo "<pre>";
// print_r($productDetail);
// echo "</pre>";

$sessionData = $this->session->userdata('uid');
// if(isset($sessionData)){
//     echo"yes";}
//     else {echo "no";}

?>
<section class="mt-8 mb-5">
    <div class="container">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active">Checkout</li>
        </ol>
    </div>

    <div class="text-center">
        <h1 class="display-4 letter-spacing-5 text-uppercase font-weight-bold">Checkout</h1>
    </div>
    </div>
</section>