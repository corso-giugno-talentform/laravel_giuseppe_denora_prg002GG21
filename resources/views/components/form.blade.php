@props(['article', 'type' => 'formArticolo'])


<div class="contact-form mb-4">
    {{-- send è il name della route post --}}
    <form id="contactForm" action="{{ route('send') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-2">
                <input type="text" class="form-control" placeholder="Nome" required name="firstName">
            </div>
            <div class="col-md-6  mb-2">
                <input type="text" class="form-control" placeholder="Cognome" required name="lastName">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6  mb-2">
                <input type="email" class="form-control" placeholder="Email" required name="Email">
            </div>
            <div class="col-md-6  mb-2">
                <input type="tel" class="form-control" placeholder="Telefono (opzionale)" name="tel">
            </div>
        </div>

        @if ($type === 'formArticolo')
           
            <input type="hidden" name="article_id" value="{{ $article['id'] }}">
            <input type="hidden" name="article_nome" value="{{ $article['nome'] }}">
        @endif

        @if ($type === 'formContattaci')
            <select class="form-select" required name="selection">
                <option value="" disabled selected>Seleziona un argomento</option>
                <option>Informazioni generali</option>
                <option>Collaborazioni</option>
                <option>Feedback sul sito</option>
                <option>Problemi tecnici</option>
                <option>Altro</option>
            </select>
        @endif

        <textarea class="form-control" placeholder="Il tuo messaggio..." required name="textArea"></textarea>

        <div class="privacy-check form-check">
            <input class="form-check-input" type="checkbox" id="privacyCheck" required name="privacy">
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
