<x-main>
     <x-slot name="title">
      Wellness Blog | Contattaci
    </x-slot>

    <section class="contact-section" id="contact">
        <div class="container">
            <h2 class="section-title">Scrivici un Messaggio</h2>
            <div class="row">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Nome" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Cognome" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" class="form-control" placeholder="Telefono (opzionale)">
                                </div>
                            </div>
                            
                            <select class="form-select" required>
                                <option value="" disabled selected>Seleziona un argomento</option>
                                <option>Informazioni generali</option>
                                <option>Collaborazioni</option>
                                <option>Feedback sul sito</option>
                                <option>Problemi tecnici</option>
                                <option>Altro</option>
                            </select>
                            
                            <textarea class="form-control" placeholder="Il tuo messaggio..." required></textarea>
                            
                            <div class="privacy-check form-check">
                                <input class="form-check-input" type="checkbox" id="privacyCheck" required>
                                <label class="form-check-label" for="privacyCheck">
                                    Acconsento al trattamento dei miei dati personali secondo la 
                                    <a href="#" target="_blank">Privacy Policy</a>
                                </label>
                            </div>
                            
                            <button type="submit" class="btn btn-primary w-100 py-3">
                                Invia Messaggio <i class="fas fa-paper-plane ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
                
                <div class="col-lg-5">
                    <div class="contact-info-card text-center">
                        <i class="fas fa-envelope-open-text"></i>
                        <h3>Informazioni di Contatto</h3>
                        <p><i class="fas fa-map-marker-alt me-2 text-green"></i> Via del Benessere 123, 20100 Milano</p>
                        <p><i class="fas fa-phone me-2 text-green"></i> +39 02 123 4567</p>
                        <p><i class="fas fa-envelope me-2 text-green"></i> info@wellnessblog.it</p>
                        <p><i class="fas fa-clock me-2 text-green"></i> Lun-Ven: 9:00 - 18:00</p>
                        
                        <div class="social-icons mt-4">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    
                    <div class="contact-info-card mt-4 text-center">
                        <i class="fas fa-headset"></i>
                        <h3>Supporto</h3>
                        <p>Il nostro team è disponibile per rispondere alle tue domande dal lunedì al venerdì.</p>
                        <p class="mt-3"><i class="fas fa-comments me-2 text-green"></i> Chat online: 10:00 - 16:00</p>
                        <p><i class="fas fa-envelope me-2 text-green"></i> supporto@wellnessblog.it</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-main>