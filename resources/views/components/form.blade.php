@props(['article', 'type' => 'formArticolo'])


<div class="contact-form mb-4">
    {{-- send è il name della route post --}}
    <form id="contactForm" action="{{ route('send') }}" method="POST">
        @csrf
         {{ $hidden ?? '' }}
        <div class="row">
            <div class="col-md-6 mb-2">
                <input type="text" class="form-control" placeholder="Nome"  name="firstName"
                    value="{{ old('firstName') }}">
            </div>
            @error('firstName')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }} 
                 
                </div>
            @enderror
            <div class="col-md-6  mb-2">
                <input type="text" class="form-control" placeholder="Cognome"  name="lastName"
                    value="{{ old('lastName') }}">
            </div>
        </div>
        @error('lastName')
            <div class="alert alert-danger mt-2" role="alert">
                {{ $message }}
            </div>
        @enderror

        <div class="row">
            <div class="col-md-6  mb-2">
                <input type="email" class="form-control" placeholder="Email"  name="Email"
                    value="{{ old('email') }}">
            </div>
            @error('email')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <div class="col-md-6  mb-2">
                <input type="tel" class="form-control" placeholder="Telefono (opzionale)" name="tel"
                    value="{{ old('tel') }}">
            </div>
            @error('tel')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror

        </div>

        @if ($type === 'formArticolo')
            <input type="hidden" name="article_id" value="{{ $article['id'] }}">
            <input type="hidden" name="article_nome" value="{{ $article['nome'] }}">
        @endif

        @if ($type === 'formContattaci')
            <select class="form-select"  name="selection" value="{{ old('selection') }}">
                <option value="" disabled selected>Seleziona un argomento</option>
                <option>Informazioni generali</option>
                <option>Collaborazioni</option>
                <option>Feedback sul sito</option>
                <option>Problemi tecnici</option>
                <option>Altro</option>
            </select>
        @endif

        <textarea class="form-control" placeholder="Il tuo messaggio..."  name="textArea" name='textArea'> {{ old('textArea') }}</textarea>
        @error('textArea')
            <div class="alert alert-danger mt-4" role="alert">
                {{ $message }}
            </div>
        @enderror


        <div class="privacy-check form-check">
            <input class="form-check-input" type="checkbox" id="privacyCheck"  name="privacy">
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
