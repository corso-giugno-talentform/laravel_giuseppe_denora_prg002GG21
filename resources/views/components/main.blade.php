<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'ND' }}</title>
    
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-spa me-2 text-green"></i>Wellness<span>Blog</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active"  href="{{ route('homepage') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#articles">Articoli</a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contatti</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


 {{ $slot }}




     <!-- Newsletter Section -->
    <section class="newsletter">
        <div class="container">
            <h2>Iscriviti alla Nostra Newsletter</h2>
            <p>Ricevi consigli esclusivi, guide pratiche e ispirazioni per il tuo percorso di benessere direttamente nella tua inbox.</p>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="input-group">
                        <input type="email" class="form-control form-control-lg" placeholder="La tua email">
                        <button class="btn btn-light btn-lg">Iscriviti</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h5><i class="fas fa-spa me-2"></i>WellnessBlog</h5>
                    <p class="mt-3">Il tuo spazio per consigli, tecniche e ispirazioni per una vita sana e bilanciata.</p>
                    <div class="social-icons mt-4">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 mb-5 mb-md-0">
                    <h5>Link Utili</h5>
                    <div class="footer-links mt-4">
                        <a href="#home">Home</a>
                        <a href="#articles">Articoli</a>
                        <a href="#categories">Categorie</a>
                        <a href="#about">Chi Siamo</a>
                        <a href="#contact">Contatti</a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 mb-5 mb-md-0">
                    <h5>Categorie</h5>
                    <div class="footer-links mt-4">
                        <a href="#">Meditazione</a>
                        <a href="#">Alimentazione</a>
                        <a href="#">Yoga</a>
                        <a href="#">Fitness</a>
                        <a href="#">Mindfulness</a>
                        <a href="#">Sonno</a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4">
                    <h5>Contatti</h5>
                    <div class="footer-links mt-4">
                        <p><i class="fas fa-envelope me-2"></i> info@wellnessblog.it</p>
                        <p><i class="fas fa-phone me-2"></i> +39 02 1234567</p>
                        <p><i class="fas fa-map-marker-alt me-2"></i> Via del Benessere 123, Milano</p>
                    </div>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2025 WellnessBlog. Tutti i diritti riservati.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
  
</body>
</html>