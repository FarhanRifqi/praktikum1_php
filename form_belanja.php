<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form POST</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Daftar Belanja</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="form_belanja.php">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label>Customer</label>
                                <input type="text" name="customer" value="" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="">Pilih Produk</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="produk" id="inlineRadio1" value="TV">
                                    <label class="form-check-label" for="inlineRadio1">TV
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="produk" id="inlineRadio2" value="KULKAS">
                                    <label class="form-check-label" for="inlineRadio2">KULKAS</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="produk" id="inlineRadio2" value="MESIN CUCI">
                                    <label class="form-check-label" for="inlineRadio2">MESIN CUCI</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jumlah</label>
                                <input type="number" name="jumlah" value="" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Simpan" name="proses" class="btn btn-primary">
                </form>

                <?php
                    $proses = $_POST['proses'];
                    $customer = $_POST['customer'];
                    $produk = $_POST['produk'];
                    $jumlah = $_POST['jumlah'];

                    if ($produk == "TV") {
                        $total = $jumlah * 4200000;
                    } else if ($produk == "KULKAS") {
                        $total = $jumlah * 3100000;
                    } else if ($produk == "MESIN CUCI") {
                        $total = $jumlah * 3800000;
                    }      
                    
                ?>
                <table class="table table-dark">
                    <thead>
                        <tr>
                        <th scope="col"><?php  echo '<br/> Nama Customer : ' . $customer; ?></th>
                        <th scope="col"><?php  echo '<br/> Produk PIlihan : ' . $produk; ?></th>
                        <th scope="col"><?php echo '<br/> Jumlah Beli : ' . $jumlah; ?> </th>
                        <th scope="col"><?php echo '<br/> Jumlah Beli : ' . $jumlah; ?></th>
                        <th scope="col"><?php echo '<br/> Total Belanja : ' . $total; ?></th>
                        </tr>
                    </thead>


               <div class="card-body">
                <form method="POST" action="form_belanja.php">
                    <div class="row">
                        <div class="col-md-3">
                        <table class="table table-striped custab">
                <?php
                    $_barang = [
                        ['barang'=>'TV','harga'=>4200000],
                        ['barang'=>'Kulkas','harga'=>3100000],
                        ['barang'=>'Mesin Cuci','harga'=>3800000],

                    ];

                ?>
                
                <h1>Daftar Harga barang</h1>
            
            
                    <?php
                    foreach($_barang as $perabot){
                        echo '<tr><th scope="col">'.$perabot ['barang'].' : ' . $perabot['harga'].'</th></tr>';
                    }
                    ?>
                
                </table>

                        </div>
                    </div>
                </div>    
                
            </div>
        </div>
    </div>
               
                
                
  </tbody>
</table>
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>