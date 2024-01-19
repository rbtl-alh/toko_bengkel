<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <h4>Home</h4>
                    <p>Rekomendasi</p>
                    <p>Kategori Produk</p>
                    <p>Layanan</p>
                </div>
                <div class="col-3">
                    <h4>Produk</h4>
                    <p>Katalog</p>
                </div>
                <div class="col-3">
                    <h4 >Hubungi Kami</h4>
                    <p>
                        <i class="fab fa-instagram-square pe-2"></i>@Tbengkel
                    </p>
                    <p>
                        <i class="fab fa-whatsapp-square pe-2"></i>1234567890
                    </p>
                    <p>
                        <i class="fas fa-envelope pe-2"></i>TokoBeng@bengkel.com
                    </p>
                    <p>
                        <i class="fab fa-facebook pe-2"></i>TokoBengkel
                    </p>
                </div>
                <div class="col-3">
                    <img src="{{ asset('images/LogoTokoBengkel.png') }}" class="logo">
                </div>

                
                <div class="col">
                    <a href="https://api.whatsapp.com/send?phone=085337150957" class="icon-text btn" target="_blank">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comment-dots" class="svg-inline--fa fa-comment-dots fa-w-16 icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 32C114.6 32 0 125.1 0 240c0 49.6 21.4 95 57 130.7C44.5 421.1 2.7 466 2.2 466.5c-2.2 2.3-2.8 5.7-1.5 8.7S4.8 480 8 480c66.3 0 116-31.8 140.6-51.4 32.7 12.3 69 19.4 107.4 19.4 141.4 0 256-93.1 256-208S397.4 32 256 32zM128 272c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z"></path></svg>
                    </a>
                    {{-- <div class="card"> --}}
                        {{-- <div class="card-body icon-bg"> --}}
                            {{-- <button class="icon">
                                <i class="fas fa-comment-dots "></i>

                            </button> --}}
                        {{-- </div> --}}
                    {{-- </div> --}}
                </div>            
            </div>
        </div>
        </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
</body>
</html>