<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-3">Detail Informasi Produk</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                    <img src="<?php echo base_url('upload/product/'.$product['product_img']) ?>" class="card-img" alt="..." />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product['product_name']; ?></h5>
                            <p class="card-text"><?php echo $product['product_description']; ?></p>
                            <p class="card-text"><small class="text-muted">Rp. <?php echo $product['product_price']; ?></small></p>

                            <a href="/dashboard">HOME</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>