<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    /* protected static  $articlesEvidence = [
        [
            'id' => 1,
            'slug' => '5-tecniche-meditazione',
            'nome' => '5 Tecniche di Meditazione per Principianti',
            'descrizione' => 'Scopri come iniziare a meditare con semplici tecniche che puoi praticare ovunque, anche solo per 5 minuti al giorno.o.',
            'span'=>'Meditazione',
            
            'immagine' => 'https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
        ],
        [
            'id' => 2,
            'slug' => 'superfoods',
            'nome' => 'Superfoods: Cosa Sono e Perché Dovresti Inserirli nella Tua Dieta',
            'descrizione' => 'Una guida completa ai superfoods, i loro benefici e come integrarli facilmente nella tua alimentazione quotidiana.',
            'span'=>'Alimentazione',
            'immagine' => 'https://images.unsplash.com/photo-1517836357463-d25dfeac3438?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
        ],
        [
            'id' => 3,
            'slug' => 'yoga-stress',
            'nome' => 'Lo Yoga per Combattere lo Stress: Sequenze per Ogni Livello',
            'descrizione' => 'Impara sequenze yoga specifiche per ridurre lo stress e ritrovare equilibrio, adatte sia a principianti che a praticanti avanzati.',
            'span'=>'Yoga',
            'immagine' => 'https://images.unsplash.com/photo-1534258936925-c58bed479fcb?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
        ],
       
    ]; */
    protected static $articlesEvidence = [
        [
            'id' => 1,
            'slug' => '5-tecniche-meditazione',
            'nome' => '5 Tecniche di Meditazione per Principianti',
            'descrizione' => 'Scopri come iniziare a meditare con semplici tecniche che puoi praticare ovunque, anche solo per 5 minuti al giorno.',
            'span' => 'Meditazione',
            'immagine' => 'https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'autore' => 'Giulia Moretti',
            'autore_img' => 'https://randomuser.me/api/portraits/women/45.jpg',
            'data_pubblicazione' => '10 Marzo 2025',
            'data_aggiornamento' => '3 giorni fa',
            'durata_lettura' => '5 min read',
            'contenuto' => 'La meditazione è una pratica antica che può aiutare a ridurre lo stress e migliorare il benessere mentale. In questo articolo esploriamo 5 tecniche facili da integrare nella vita quotidiana: meditazione sul respiro, body scan, mantra, camminata consapevole e visualizzazione.',
            'citazione' => 'La meditazione è l’arte di ascoltare se stessi – Thich Nhat Hanh',
            'sottotitoli' => ['Tecnica 1: Respiro', 'Tecnica 2: Body Scan', 'Tecnica 3: Mantra', 'Tecnica 4: Camminata', 'Tecnica 5: Visualizzazione'],
            'benefici' => [
                'Aumentano energia e resistenza',
                'Favoriscono concentrazione e lucidità',
                'Regolano gli zuccheri nel sangue',
                'Combattono l’affaticamento cronico'
            ],

            'esercizio_guidato' => [
                'titolo' => 'Esercizio Guidato di Meditazione',
                'descrizione' => 'Prova questa semplice meditazione da 5 minuti per calmare la mente e ritrovare concentrazione:',
                'passaggi' => [
                    'Siediti comodamente con la schiena dritta ma rilassata',
                    'Chiudi gli occhi e concentra l\'attenzione sul respiro',
                    'Segui il ritmo naturale del respiro senza forzarlo',
                    'Quando la mente si distrae, riportala dolcemente al respiro',
                    'Espandi la consapevolezza al tuo corpo e alle sensazioni',
                    'Riapri gli occhi lentamente e prenditi un momento di silenzio',
                ],
            ],

        ],
        [
            'id' => 2,
            'slug' => 'superfoods',
            'nome' => 'Superfoods: Cosa Sono e Perché Dovresti Inserirli nella Tua Dieta',
            'descrizione' => 'Guida ai superfoods, i loro benefici e come integrarli facilmente nella tua alimentazione quotidiana.',
            'span' => 'Alimentazione',
            'immagine' => 'https://images.unsplash.com/photo-1517836357463-d25dfeac3438?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'autore' => 'Marco Bianchi',
            'autore_img' => 'https://randomuser.me/api/portraits/men/22.jpg',
            'data_pubblicazione' => '15 Febbraio 2025',
            'data_aggiornamento' => '1 settimana fa',
            'durata_lettura' => '6 min read',
            'contenuto' => 'I superfoods sono alimenti ricchi di nutrienti, come antiossidanti, vitamine e fibre. Scopri le proprietà di quinoa, bacche di goji, curcuma, semi di chia e spirulina e come introdurli facilmente nella tua dieta.',
            'benefici' => [
                'Aumentano l’energia e la resistenza',
                'Favoriscono la digestione',
                'Combattono l’infiammazione',
                'Migliorano l’umore e la concentrazione'
            ],
            'sottotitoli' => ['Cos’è un Superfood?', 'Top 5 da provare', 'Come integrarli'],
            'citazione' => 'La meditazione è l’arte di ascoltare se stessi – Thich Nhat Hanh',
            'esercizio_guidato' => [
                'titolo' => 'Consapevolezza Alimentare',
                'descrizione' => 'Un semplice esercizio per apprezzare ogni pasto e i benefici dei superfoods:',
                'passaggi' => [
                    'Prenditi un momento prima di mangiare per osservare il cibo',
                    'Nota i colori, le forme e i profumi degli alimenti nel piatto',
                    'Assapora lentamente ogni boccone, concentrandoti sul sapore',
                    'Rifletti su come ogni alimento nutre il tuo corpo',
                    'Mangia senza fretta, ascoltando i segnali di sazietà',
                ],
            ],
        ],
        [
            'id' => 3,
            'slug' => 'yoga-stress',
            'nome' => 'Lo Yoga per Combattere lo Stress: Sequenze per Ogni Livello',
            'descrizione' => 'Sequenze yoga per ridurre lo stress e ritrovare equilibrio, adatte a tutti i livelli.',
            'span' => 'Yoga',
            'immagine' => 'https://images.unsplash.com/photo-1534258936925-c58bed479fcb?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'autore' => 'Elena Rossi',
            'autore_img' => 'https://randomuser.me/api/portraits/women/67.jpg',
            'data_pubblicazione' => '28 Gennaio 2025',
            'data_aggiornamento' => '5 giorni fa',
            'durata_lettura' => '7 min read',
            'contenuto' => 'Lo yoga è uno strumento efficace per gestire ansia e tensioni. In questa guida proponiamo tre sequenze: una breve per la mattina, una per il lavoro e una per la sera, adatte anche ai principianti.',
            'citazione' => 'Nella calma troviamo la forza – Antico proverbio yogico',
            'sottotitoli' => ['Yoga del Risveglio', 'Yoga Antistress in ufficio', 'Sequenza serale'],
            'benefici' => [
                'Aumentano l’energia e la resistenza',
                'Favoriscono la digestione',
                'Combattono l’infiammazione',
                'Migliorano l’umore e la concentrazione'
            ],
            'esercizio_guidato' => [
                'titolo' => 'Sequenza Yoga Antistress',
                'descrizione' => 'Esegui questa breve sequenza per rilassarti e sciogliere le tensioni:',
                'passaggi' => [
                    'Inizia con una posizione comoda in piedi o seduti',
                    'Respira profondamente e porta consapevolezza al corpo',
                    'Esegui lentamente piegamenti laterali del busto, mantenendo il respiro calmo',
                    'Allunga le braccia sopra la testa e poi rilassale lungo i fianchi',
                    'Chiudi la sequenza con qualche minuto di respirazione profonda a occhi chiusi',
                ],
            ],
        ]
    ];


    /*     protected static  $articlesRecent = [
        [
            'id' => 4,
            'slug' => '10-cibi-che-aumentano-la-tua-energia',
            'nome' => '10 Cibi che Aumentano la Tua Energia Naturalmente',
            'descrizione' => 'Scopri i migliori 10 cibi che stimolano l\’energia in modo naturale, senza bisogno di caffeina o zuccheri raffinati. Dalla frutta secca ai cereali integrali, questi alimenti aiutano a combattere la stanchezza e migliorare la concentrazione. Integra questi super-cibi nella tua dieta quotidiana per sentirti più attivo e vitale ogni giorno.
',
            'span'=>'Alimentazione',
            
            'immagine' => 'https://images.unsplash.com/photo-1535914254981-b5012eebbd15?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'date'=>'25 Lug 2025'
        ],
        [
            'id' => 5,
            'slug' => 'yoga-nitra',
            'nome' => 'Yoga Nidra: Il Sonno Consapevole per Rigenerarti',
            'descrizione' => 'Lo Yoga Nidra è una pratica di rilassamento profondo che guida la mente in uno stato tra veglia e sonno, favorendo rigenerazione fisica e mentale. Ideale per ridurre lo stress, migliorare il sonno e ritrovare equilibrio interiore.',
            'span'=>'yoga',
            'descrizione'=>'Lo Yoga Nidra è una pratica di rilassamento profondo che guida la mente in uno stato tra veglia e sonno, favorendo rigenerazione fisica e mentale. Ideale per ridurre lo stress, migliorare il sonno e ritrovare equilibrio interiore.',

            'immagine' => 'https://images.unsplash.com/photo-1545389336-cf090694435e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'date'=>'15 Lug 2025'
        ],
        [
            'id' => 6,
            'slug' => 'meditaziome-camminata',
            'nome' => 'Meditazione Camminata: Guida Passo dopo Passo',
            'span'=>'meditazione',
            'immagine' => 'https://images.unsplash.com/photo-1498758536662-35b82cd15e29?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'descrizione'=>'La meditazione camminata unisce il movimento consapevole alla presenza mentale, trasformando ogni passo in un atto di piena attenzione. Questa pratica aiuta a ridurre lo stress, migliorare la concentrazione e riconnettersi con il momento presente. Scopri come camminare con consapevolezza può diventare una forma semplice ma potente di meditazione quotidiana.',
            'date'=>'1 Lug 2025'

        ],
         [
            'id' => 7,
            'slug' => 'allenamento-a-casa-20-min',
            'nome' => 'Allenamento a Casa: 20 Minuti per Tutto il Corpo',
            'span'=>'Fitness',
            'immagine' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8d29ya291dCUyMGhvbWV8ZW58MHx8MHx8fDA%3D',
            'descrizione'=>'Allenarsi a casa è possibile anche con soli 20 minuti al giorno, senza attrezzi e con esercizi mirati per tutto il corpo. Questa routine compatta migliora forza, resistenza e tono muscolare. Ideale per chi ha poco tempo ma vuole restare in forma e attivo.',
            'date'=>'30 Giu 2025'

        ],
       
    ]; */

    protected static $articlesRecentFull = [
        [
            'id' => 4,
            'slug' => '10-cibi-che-aumentano-la-tua-energia',
            'nome' => '10 Cibi che Aumentano la Tua Energia Naturalmente',
            'span' => 'Alimentazione',
            'immagine' => 'https://images.unsplash.com/photo-1535914254981-b5012eebbd15?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'data_pubblicazione' => '25 Lug 2025',
            'autore' => 'Luca Bianchi',
            'autore_img' => 'https://randomuser.me/api/portraits/men/35.jpg',
            'data_aggiornamento' => '2 giorni fa',
            'durata_lettura' => '6 min read',
            'descrizione' => 'Scopri i migliori 10 cibi che stimolano l’energia in modo naturale, senza bisogno di caffeina o zuccheri raffinati.',
            'contenuto' => 'Dalla frutta secca ai cereali integrali, questi alimenti aiutano a combattere la stanchezza e migliorare la concentrazione. Integra questi super-cibi nella tua dieta quotidiana per sentirti più attivo e vitale ogni giorno.',
            'benefici' => [
                'Aumentano energia e resistenza',
                'Favoriscono concentrazione e lucidità',
                'Regolano gli zuccheri nel sangue',
                'Combattono l’affaticamento cronico'
            ],
            'sottotitoli' => ['Frutta secca', 'Cereali integrali', 'Legumi energizzanti', 'Superfrutti'],
            'citazione' => 'Il benessere nasce dall’equilibrio tra mente, corpo e spirito – Anonimo',
            'esercizio_guidato' => [
                'titolo' => 'Esercizio di Energia Consapevole',
                'descrizione' => 'Un semplice rituale per connetterti con l\'energia naturale del cibo:',
                'passaggi' => [
                    'Prima di mangiare, osserva attentamente il tuo pasto',
                    'Respira profondamente e riconosci l\'energia che il cibo ti dona',
                    'Mangia lentamente, assaporando ogni boccone con attenzione',
                    'Visualizza il cibo che nutre ogni cellula del tuo corpo',
                    'Ringrazia per il benessere che stai ricevendo',
                ],
            ],
        ],
        [
            'id' => 5,
            'slug' => 'yoga-nitra',
            'nome' => 'Yoga Nidra: Il Sonno Consapevole per Rigenerarti',
            'span' => 'Yoga',
            'immagine' => 'https://images.unsplash.com/photo-1545389336-cf090694435e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'data_pubblicazione' => '15 Lug 2025',
            'autore' => 'Francesca De Luca',
            'autore_img' => 'https://randomuser.me/api/portraits/women/40.jpg',
            'data_aggiornamento' => '1 settimana fa',
            'durata_lettura' => '5 min read',
            'descrizione' => 'Lo Yoga Nidra è una pratica di rilassamento profondo che guida la mente in uno stato tra veglia e sonno.',
            'contenuto' => 'Favorisce rigenerazione fisica e mentale, ideale per chi soffre di insonnia, ansia o affaticamento cronico. Può essere praticato comodamente sdraiati, anche 20 minuti al giorno portano benefici significativi.',
            'citazione' => 'Nel rilassamento profondo trovi la vera forza – Swami Satyananda Saraswati',
            'sottotitoli' => ['Cos’è lo Yoga Nidra', 'Benefici mentali e fisici', 'Come iniziare'],
            'benefici' => [
                'Aumentano energia e resistenza',
                'Favoriscono concentrazione e lucidità',
                'Regolano gli zuccheri nel sangue',
                'Combattono l’affaticamento cronico'
            ],
            'esercizio_guidato' => [
                'titolo' => 'Meditazione Yoga Nidra Guidata',
                'descrizione' => 'Pratica questa meditazione di rilassamento profondo per rigenerarti:',
                'passaggi' => [
                    'Sdraiati comodamente in un luogo tranquillo',
                    'Chiudi gli occhi e porta l\'attenzione al respiro',
                    'Fai un rilassamento progressivo di tutto il corpo, partendo dai piedi',
                    'Mantieni la mente vigile ma rilassata, senza giudizio',
                    'Rimani in questo stato per 20 minuti, poi apri gli occhi lentamente',
                ],
            ],
        ],
        [
            'id' => 6,
            'slug' => 'meditazione-camminata',
            'nome' => 'Meditazione Camminata: Guida Passo dopo Passo',
            'span' => 'Meditazione',
            'immagine' => 'https://images.unsplash.com/photo-1498758536662-35b82cd15e29?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'data_pubblicazione' => '1 Lug 2025',
            'autore' => 'Chiara Neri',
            'autore_img' => 'https://randomuser.me/api/portraits/women/52.jpg',
            'data_aggiornamento' => '3 settimane fa',
            'durata_lettura' => '4 min read',
            'descrizione' => 'La meditazione camminata unisce il movimento consapevole alla presenza mentale.',
            'contenuto' => 'Questa pratica aiuta a ridurre lo stress, migliorare la concentrazione e riconnettersi con il momento presente. Camminare lentamente, con attenzione a ogni passo e respiro, può trasformarsi in una forma potente di benessere quotidiano.',
            'sottotitoli' => ['Camminare con consapevolezza', 'Postura e respirazione', 'Meditazione nei luoghi quotidiani'],
            'benefici' => [
                'Aumentano energia e resistenza',
                'Favoriscono concentrazione e lucidità',
                'Regolano gli zuccheri nel sangue',
                'Combattono l’affaticamento cronico'
            ],
            'citazione' => 'Nel rilassamento profondo trovi la vera forza – Swami Satyananda Saraswati',
            'esercizio_guidato' => [
                'titolo' => 'Esercizio di Meditazione Camminata',
                'descrizione' => 'Segui questi passi per trasformare la tua camminata in una pratica meditativa:',
                'passaggi' => [
                    'Cammina lentamente, concentrandoti sul contatto dei piedi col suolo',
                    'Respira profondamente e sincronizza il respiro con il passo',
                    'Nota le sensazioni del corpo e l\'ambiente circostante',
                    'Se la mente si distrae, riportala gentilmente al camminare e al respiro',
                    'Continua per almeno 10 minuti mantenendo la consapevolezza',
                ],
            ],
        ],
        [
            'id' => 7,
            'slug' => 'allenamento-a-casa-20-min',
            'nome' => 'Allenamento a Casa: 20 Minuti per Tutto il Corpo',
            'span' => 'Fitness',
            'immagine' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8d29ya291dCUyMGhvbWV8ZW58MHx8MHx8fDA%3D',
            'data_pubblicazione' => '30 Giu 2025',
            'autore' => 'Davide Conti',
            'autore_img' => 'https://randomuser.me/api/portraits/men/27.jpg',
            'data_aggiornamento' => '5 giorni fa',
            'durata_lettura' => '5 min read',
            'descrizione' => 'Allenarsi a casa è possibile anche con soli 20 minuti al giorno, senza attrezzi.',
            'contenuto' => 'Questa routine migliora forza, resistenza e tono muscolare. Con esercizi a corpo libero, puoi lavorare su tutti i gruppi muscolari mantenendo flessibilità e benessere fisico, anche con poco tempo.',
            'sottotitoli' => ['Riscaldamento veloce', 'Circuito full-body', 'Defaticamento e stretching'],
            'citazione' => 'Prenditi cura di te stesso, sei il tuo più grande tesoro – Saggio contemporaneo',
            'benefici' => [
                'Aumentano energia e resistenza',
                'Favoriscono concentrazione e lucidità',
                'Regolano gli zuccheri nel sangue',
                'Combattono l’affaticamento cronico'
            ],
            'esercizio_guidato' => [
                'titolo' => 'Routine di Allenamento Breve',
                'descrizione' => 'Ecco un allenamento semplice e veloce da fare a casa:',
                'passaggi' => [
                    'Inizia con 3 minuti di riscaldamento leggero (saltelli o corsa sul posto)',
                    'Esegui 3 serie di 10 squat, mantenendo la schiena dritta',
                    'Passa a 3 serie di 10 piegamenti sulle braccia (o sulle ginocchia)',
                    'Fai 2 minuti di plank per rafforzare il core',
                    'Concludi con 3 minuti di stretching per rilassare i muscoli',
                ],
            ],
        ]
    ];


    protected static $sidebarCategories = [
        [
            'id' => 1,
            'nome' => 'Meditazione',
            'span' => 12
        ],
        [
            'id' => 2,
            'nome' => 'Alimentazione Sana',
            'span' => 18
        ],
        [
            'id' => 3,
            'nome' => 'Yoga',
            'span' => 9
        ],
        [
            'id' => 4,
            'nome' => 'Fitness',
            'span' => 15
        ],
        [
            'id' => 5,
            'nome' => 'Gestione dello stress',
            'span' => 7
        ],
        [
            'id' => 6,
            'nome' => 'Sonno',
            'span' => 5
        ],
        [
            'id' => 7,
            'nome' => 'Mindfulness',
            'span' => 5
        ],
    ];

    public  function homepage()
    {
        return view(
            'home',
            [
                'articlesRec' => self::$articlesRecentFull,
                'articlesEvid' => self::$articlesEvidence,
                'sidebarCat' => self::$sidebarCategories,
            ]
        );
    }




    public function article($slug)
    {
        $article = collect(self::$articlesRecentFull)->firstWhere('slug', $slug);

        if (!$article) {
            abort(404);
        }

        return view('article', [
            'article' => $article,
            'sidebarCat' => self::$sidebarCategories,
            'articlesEvid' => self::$articlesEvidence,
            'articlesRec' => self::$articlesRecentFull,
        ]);
    }
    public function articleEvid($slug)
    {
        $article = collect(self::$articlesEvidence)->firstWhere('slug', $slug);

        if (!$article) {
            abort(404);
        }

        return view('article', [
            'article' => $article,
            'sidebarCat' => self::$sidebarCategories,
            'articlesEvid' => self::$articlesEvidence,
            'articlesRec' => self::$articlesRecentFull,
        ]);
    }
};
