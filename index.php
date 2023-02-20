<?php include_once "header.php" ?>
<?php include_once "produk.php" ?>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow justify-content-center fixed-top">
    <div class="container">
        <a class="navbar-brand w-50 order-1 order-md-0 me-auto" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse w-100 mx-auto order-0" id="navbarNav">
            <ul class="nav navbar-nav  mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">New Arrival</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tops</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Accessories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Konfirmasi Pembayaran</a>
                </li>
            </ul>
            
        </div>
        <div class="collapse navbar-collapse w-50 order-3 " id="navbarNav">
            <ul class="nav navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-person-fill"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-bag-check-fill"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-search"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/slide-1.webp" class="d-block w-100" alt="...">
        </div>
            <div class="carousel-item">
        <img src="img/slide-2.webp" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container">
    
    <div class="row">
        <section class="productHighlightTitleContainer">
            <h2 class="productHighlightTitle">Produk Unggulan</h2>
        </section>
        <div class="row">
            <?php foreach($product as $prod): ?>
            <div class="col-md-3 col-sm-4 col-6 products__item">
                <div class="stiker">
                    <span class="products__item-sticker--new">Baru</span>
                </div>
                <a href="">
                    <img src="img/<?php echo $prod['gambar'] ?>" alt="<?php echo $prod['nama'] ?>" title="<?php echo $prod['nama'] ?>" width="100%">
                </a>
                <div class="products__item--content products__productLabelContainer">
                    <div class="products__titleContainer">
                        <p class="products__item--content-title" data-identity="product-SV 4086 - Arellia Set Dress">SV 4086 - Arellia Set Dress</p>
                    </div>
                    <div class="products__salePriceContainer">
                        <p class="products__item--content-price">IDR&nbsp;185,000</p>
                    </div>
                    <div class="products__addToCartAndBuyNowButtonContainer">
                        <div class="products__addToCartButtonContainer">
                            <button data-identity="button-add-to-cart" class="products__addToCartButton">
                               <i class="bi bi-bag-check-fill"></i>
                            </button>
                        </div>
                        <div class="products__buyNowButtonContainer">
                            <button data-identity="button-buy-now" class="products__buyNowButton">Beli Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<?php include_once "footer.php" ?>