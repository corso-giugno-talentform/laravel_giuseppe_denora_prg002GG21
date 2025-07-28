<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'ND' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="/css/style.css">
</head>

<body>






    <x-navbar />

    {{ $slot }}


    <x-banner />


    <!-- Newsletter Section -->
    <section class="newsletter">
        <div class="container">
            <h2>Iscriviti alla Nostra Newsletter</h2>
            <p>Ricevi consigli esclusivi, guide pratiche e ispirazioni per il tuo percorso di benessere direttamente
                nella tua inbox.</p>
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
                    <p class="mt-3">Il tuo spazio per consigli, tecniche e ispirazioni per una vita sana e bilanciata.
                    </p>
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

    <script src="/js/script.js"></script>

</body>

</body>

</html>
