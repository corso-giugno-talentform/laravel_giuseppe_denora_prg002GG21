<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grazie per il tuo messaggio {{ $firstName ?? 'Utente' }}</title>

    <style>
        @media only screen and (max-width: 600px) {
            .container {
                width: 100% !important;
            }

            .logo {
                text-align: center !important;
            }
        }
    </style>

</head>

<body
    style="margin:0; padding:0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f8f9fa;">
    <!-- Contenitore principale -->
    <table class="container" width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff"
        style="margin: 20px auto; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
        <!-- Intestazione -->
        <tr>
            <td align="center" bgcolor="#e3f2ed" style="padding: 30px 20px;">
                <div class="logo">
                    <h1 style="color: #2e7d67; margin:0;">🌿 BlogWellness</h1>
                    <p style="color: #4a9e86; font-style: italic; margin: 8px 0 0;">Benessere sostenibile per la vita
                        quotidiana</p>
                </div>
            </td>
        </tr>

        <!-- Contenuto principale -->
        <tr>
            <td style="padding: 40px 30px; line-height: 1.6; color: #333;">
                <h2 style="color: #2e7d67; margin-top:0;">Ciao {{ $firstName ?? 'Utente' }},</h2>
                <h4 style="color: #2e7d67; margin-top:0;">il tuo messaggio riguarda :
                    {{ $article_nome ?? 'nome articolo' }},</h4>
                <p>Grazie di cuore per averci contattato attraverso il nostro form. Abbiamo ricevuto il tuo messaggio e
                    lo apprezziamo profondamente 💚</p>

                <div
                    style="background-color: #f8f9fa; border-left: 4px solid #4a9e86; padding: 12px 20px; margin: 25px 0; font-style: italic;">
                    <p style="margin:0;">"<em>{{ $textArea }}...</em>"</p>
                </div>

                <p>Il nostro team dedicato al benessere sta esaminando la tua richiesta e ti risponderà personalmente
                    entro <strong>48 ore lavorative</strong>.</p>

                <p>Nel frattempo, ti invitiamo a scoprire le nostre ultime risorse:</p>
                <ul style="padding-left: 20px;">
                    <li><a href="#" style="color: #2e7d67; text-decoration: none;">Guida alla mindfulness
                            quotidiana</a></li>
                    <li><a href="#" style="color: #2e7d67; text-decoration: none;">Ricette stagionali
                            equilibrate</a></li>
                    <li><a href="#" style="color: #2e7d67; text-decoration: none;">Yoga per principianti: video
                            corso</a></li>
                </ul>
            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td bgcolor="#2e7d67" style="padding: 25px 30px; color: #ffffff; font-size: 14px;">
                <p style="margin:0 0 10px;">Con gratitudine,<br>Il team di <strong>BlogWellness</strong></p>

                <div style="margin-top: 20px;">
                    <p style="margin:0; font-size: 12px; opacity: 0.8;">
                        Questo messaggio è stato inviato in risposta alla tua richiesta.
                        <br>Non vuoi più ricevere comunicazioni? <a href="#" style="color: #a5d6c9;">Cancella
                            l'iscrizione</a>
                    </p>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>
