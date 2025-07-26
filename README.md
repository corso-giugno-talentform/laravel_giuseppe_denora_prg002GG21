# 🌿 Wellness Blog - Laravel Project

Benvenuto nel progetto **Wellness Blog**, una piattaforma costruita con Laravel per pubblicare, leggere e gestire articoli a tema benessere. Il blog promuove pratiche salutari per corpo e mente attraverso contenuti scritti, immagini e una struttura pulita e responsive.

##  Funzionalità principali
-  Homepage dinamica con articoli recenti
-  Visualizzazione dettagliata per ogni articolo
-  Sidebar con articoli popolari
-  Utilizzo di componenti Blade (`x-card`, `x-layout`, `x-slot`)
-  Layout responsive con Bootstrap 5.3.7
-  Gestione controller → view → componenti senza `compact()`
-  Separazione logica dei dati e riutilizzo dei componenti

---

##  Architettura

### 1. **Controller**
I dati (articoli, popolari, ecc.) vengono passati alle view con:
```php
return view('home', ['articlesRec' => $articlesRecenti, 'popularArticles' => $popolari]);
``` 


##  UI e Stile
Basato su Bootstrap 5.3.7

Mobile-first, layout responsive

Sidebar con widget articoli popolari

Card dinamiche e riutilizzabili
