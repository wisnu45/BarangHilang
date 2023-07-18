<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>API Penjualan by Yudha Pratama</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- CDN CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>


    <!-- copy dari sini -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    </nav> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand col-md-2 mx-0 px-0" href="#">
           <h1>Yudha API</h1>
        </a>
    </nav>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="display-4">Selamat Datang di API penjualan</div><br><span>by : yudha pratama</span>
                <br><br>
                <div class="bg-dark text-white h1 text-center" style="height:60px;width:400px"> HTTP Request </div>
            </div>
            <div class="col-md-6">  
                <div class="bg-dark text-white p text-center" style="height:60px;width:400px;margin-top:210px;">API key <br> keyapipenjualan=p3nju4l4n  </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card bg-light">
                    <div class="card-body">
                    <div class="h3">Barang</div>
                     <?= base_url().'api/barang/';?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card bg-light">
                    <div class="card-body">
                        <div class="h3">parameter</div>
                        <br>
                        <table class="table table-bordered">
                            <tr>
                                <td></td>
                                <td>Deskripsi</td>
                            </tr>
                            <tr>
                                <td>  <b>tanpa parameter</b> </td>
                                <td>ambil semua data barang</td>
                            </tr>
                            <tr>
                                <td> <b>KdBarang</b> </td>
                                <td>ambil data kode barang</td>
                            </tr>
                            <tr>
                                <td> <b>StokBarang</b> </td>
                                <td>ambil data stok barang</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card bg-light">
                    <div class="card-body">
                    <div class="h3">Penjualan</div>
                     <?= base_url().'api/penjualan/';?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="h3">parameter</div>
                        <br>
                        <table class="table table-bordered">
                            <tr>
                                <td></td>
                                <td>Deskripsi</td>
                            </tr>
                            <tr>
                                <td>  <b>tanpa parameter</b> </td>
                                <td>ambil semua data penjualan</td>
                            </tr>
                            <tr>
                                <td> <b>barangKeluar</b> </td>
                                <td>ambil data barang keluar</td>
                            </tr>
                            <tr>
                                <td> <b>pemasukan</b> </td>
                                <td>ambil data uang masuk / income</td>
                            </tr>
                            <tr>
                                <td> <b>QT</b> </td>
                                <td>ambil data jumlah semua barang dan jumlah total uang masuk / total</td>
                            </tr>
                            <tr>
                                <td> <b>Jml</b> </td>
                                <td>ambil data jumlah total barang</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer class="footer fixed-bottom bg-dark mt-5">
        <div class="container text-center mt-3 mb-3">
            <span class="text-white">Copyright by @ Yudha Pratama - 2020</span>
        </div>
    </footer>

</body>

</html>