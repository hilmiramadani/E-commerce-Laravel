<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tokotokoan | {{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Ambalabu Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="ms-auto d-flex gap-2 align-items-center">
                    <!-- Search Bar -->
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
    
                    <!-- Login/Register Button and Cart Icon -->
                    <button class="btn btn-success ms-3" type="button">Login | Register</button>
                    <a href="#" class="fs-5">
                        <i class="fa-solid fa-cart-shopping text-white"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    

    <div class="carousel">
        <div class="carousel-track">
            <div class="carousel-slide">
                <img src="https://cf.shopee.co.id/file/id-11134258-7ras9-m1dvckjj54112c_xhdpi" alt="Labubu">
            </div>
            <div class="carousel-slide">
                <img src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2024/11/5/6e597fa5-6669-489e-8ad3-5e4993195676.jpg.webp?ect=4g" alt="Labubu">
            </div>
            <div class="carousel-slide">
                <img src="https://cf.shopee.co.id/file/id-11134258-7r98o-m0bdmvjtcuz013_xhdpi" alt="Labubu">
            </div>
            <div class="carousel-slide">
                <img src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2024/11/5/914b0932-521f-4869-95bf-9b3402099360.jpg.webp?ect=4g" alt="Labubu">
            </div>
        </div>
        <button class="carousel-button carousel-button-prev">&#10094;</button>
        <button class="carousel-button carousel-button-next">&#10095;</button>
    </div>  

    {{-- Kategori list --}}
    <div class="k-container">
        <div class="kategori-list">
            <div class="kategori-header">
                Kategori Produk
            </div>
            <div class="kategori-grid">
                <div class="kategori-card">
                    <img src="https://down-id.img.susercontent.com/file/dcd61dcb7c1448a132f49f938b0cb553@resize_w640_nl.webp" alt="" class="kategori-image">
                    <div class="kategori-card-title">
                        Elektronik
                    </div>
                </div>
                <div class="kategori-card">
                    <img src="https://down-id.img.susercontent.com/file/3c8ff51aab1692a80c5883972a679168@resize_w640_nl.webp" alt="" class="kategori-image">
                    <div class="kategori-card-title">
                        Sepatu Pria
                    </div>
                </div>
                <div class="kategori-card">
                    <img src="https://down-id.img.susercontent.com/file/5230277eefafad8611aaf703d3e99568@resize_w640_nl.webp" alt="" class="kategori-image">
                    <div class="kategori-card-title">
                        Handphone
                    </div>
                </div>
                <div class="kategori-card">
                    <img src="https://down-id.img.susercontent.com/file/04dba508f1ad19629518defb94999ef9@resize_w640_nl.webp" alt="" class="kategori-image">
                    <div class="kategori-card-title">
                        Pakaian Pria
                    </div>
                </div>
                <div class="kategori-card">
                    <img src="https://down-id.img.susercontent.com/file/c1494110e0383780cdea73ed890e0299@resize_w640_nl.webp" alt="" class="kategori-image">
                    <div class="kategori-card-title">
                        Alat Masak
                    </div>
                </div>
                <div class="kategori-card">
                    <img src="https://down-id.img.susercontent.com/file/9251edd6d6dd98855ff5a99497835d9c@resize_w640_nl.webp" alt="" class="kategori-image">
                    <div class="kategori-card-title">
                        Pakaian Bayi
                    </div>
                </div>
                <div class="kategori-card">
                    <img src="https://down-id.img.susercontent.com/file/id-50009109-0bd6a9ebd0f2ae9b7e8b9ce7d89897d6@resize_w640_nl.webp" alt="" class="kategori-image">
                    <div class="kategori-card-title">
                        Laptop
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="product-grid">
            <div class="product-card">
                <img src="https://media.karousell.com/media/photos/products/2016/05/14/adibas_shoes_1463191580_a31d30ba.jpg" alt="Produk 1" class="product-image">
                <div class="product-info">
                    <h2 class="product-name">Adibas Ori 100%</h2>
                    <p class="product-price">Rp150.000</p>
                </div>
            </div>
            <div class="product-card">
                <img src="https://i.ytimg.com/vi/1refAiXwNeQ/maxres2.jpg?sqp=-oaymwEoCIAKENAF8quKqQMcGADwAQH4Ac4FgALQBYoCDAgAEAEYZSBVKE4wDw==&rs=AOn4CLCsVfMDt2N8BfPeaaOJvfoETHli3g" alt="Produk 2" class="product-image">
                <div class="product-info">
                    <h2 class="product-name">Ambalabu</h2>
                    <p class="product-price">Rp200.000</p>
                </div>
            </div>
            <div class="product-card">
                <img src="https://th.bing.com/th/id/R.89a98ea5990e6b075d37337fd2326330?rik=Gix%2fdOm3bBwmGg&pid=ImgRaw&r=0" alt="Produk 3" class="product-image">
                <div class="product-info">
                    <h2 class="product-name">Aqua Mineral</h2>
                    <p class="product-price">Rp250.000</p>
                </div>
            </div>
            <div class="product-card">
                <img src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2023/6/14/ba038778-03c8-4976-bbdc-bfdcacf4d969.jpg.webp?ect=4g" alt="Produk 4" class="product-image">
                <div class="product-info">
                    <h2 class="product-name">Laptop</h2>
                    <p class="product-price">Rp300.000</p>
                </div>
            </div>
            <div class="product-card">
                <img src="https://motorlandia.com.ph/wp-content/uploads/2023/02/AEROX-155-I-NON-ABS-Cyan-2023.jpg" alt="Produk 5" class="product-image">
                <div class="product-info">
                    <h2 class="product-name">Erok</h2>
                    <p class="product-price">Rp350.000</p>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
