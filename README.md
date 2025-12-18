<div align="center">
  <img src="https://raw.githubusercontent.com/Ashif-Chowdhury/Savyst/refs/heads/main/icons/logo-scritta-nero-Savyst.png" alt="Savyst Logo" width="400"/>
  
  ![Utenze & Servizi](https://img.shields.io/badge/demo-offline-success)
  ![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white)
  ![CSS3](https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white)
  ![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?logo=javascript&logoColor=black)
  ![Responsive](https://img.shields.io/badge/responsive-mobile--first-blueviolet)
  ![A11y](https://img.shields.io/badge/accessibility-WCAG-green)
</div>

# 🎯 SAVYST - Taglia le bollette non i tuoi sogni

# Piattaforma Comparazione Servizi

**Single-page application** moderna e interattiva (pure HTML/CSS/JS, **zero dipendenze**) per confrontare e gestire utenze e servizi consumer/business. Completamente **offline-first**: dati mock, persistenza locale, nessuna chiamata di rete.

📄 **File principale:** <a href="https://AshifC99.github.io/Savyst/index.html" target="_blank">**Apri Demo Live** ↗️</a>

## ✨ Caratteristiche Principali

### 🎨 Design Moderno e Colorato

- **Gradienti vibranti** con palette multicolore (azzurro → giallo → rosa)
- **7 temi cromatici** dedicati per ogni sezione servizio
- **Glassmorphism** con backdrop blur e card semi-trasparenti
- **Animazioni fluide** con transizioni ed effetti hover
- **Badge colorati** interattivi con effetti di trasformazione

### 🌓 Tema Chiaro/Scuro

- **Toggle persistente** con salvataggio preferenze in `localStorage`
- **Palette ottimizzata** per entrambe le modalità
- **Transizioni smooth** tra i temi
- **Accessibilità** mantenuta con contrasti adeguati

### 🧭 Navigazione e Routing

- **Hash-based routing** (`#/assicurazioni`, `#/telefonia`, ecc.)
- **7 sezioni principali** con navigazione fluida
- **Menu dinamico** con indicatore pagina corrente
- **Animazioni di entrata** per ogni sezione

---

## 📋 Funzionalità per Sezione

### 🚗 Assicurazioni Auto & Moto

**Confronta assicurazioni per veicoli con risparmio immediato**

**Funzionalità:**

- ➕ **Aggiungi multipli veicoli** alla lista comparazione
- 🏷️ **Validazione targhe** formato italiano (AB123CD)
- 🔀 **Distinzione Auto/Moto** con uso privato/aziendale
- 💰 **Calcolo risparmio** automatico vs premio attuale
- 📊 **4 compagnie mock** con vantaggi dettagliati
- 💾 **Persistenza dati** veicoli in localStorage
- 🔄 **Reset lista** con conferma

**Campi:**

- Tipo veicolo (Auto/Moto)
- Uso (Privato/Aziendale - solo auto)
- Targa (validata)
- Premio annuo attuale (€)

---

### 📱 Telefonia Mobile

**Trova l'offerta mobile perfetta con filtri avanzati**

**Funzionalità:**

- 🔢 **Portabilità numero** o richiesta nuova SIM
- 🎚️ **Slider giga** da 10 a 300 GB
- 📡 **Filtri tecnologia** (4G, 5G, VoLTE)
- 💼 **Segmento** Privato/Business
- 📞 **Tipo offerta** Solo Internet o Voce+Internet
- 📊 **4 operatori mock** con dettagli completi
- 💵 **Riepilogo costi** dettagliato:
  - Prima ricarica
  - Costo SIM
  - Attivazione
  - Rinnovo mensile
  - Giga UE, velocità max, hotspot
  - Chiamate e SMS inclusi

**Calcolo risparmio** automatico rispetto a spesa attuale

---

### 🌐 Internet Casa & Aziende

**Connessioni fibra e wireless per privati e business**

**Funzionalità:**

- 🏢 **Segmento** Privato/Business (offerte dedicate)
- 🔌 **Verifica disponibilità** per indirizzo
- 📍 **Form indirizzo** (Via, Civico, Città)
- 💡 **Opzione internet esistente** con confronto spesa
- ⚡ **Tecnologie** FTTH, FTTC, FWA
- 📈 **Velocità** da 100 Mbps a 2.5 Gbps
- 🎁 **Modem incluso** o opzionale
- ⏱️ **Vincoli contrattuali** trasparenti
- 💰 **Calcolo risparmio** vs fornitore attuale

**Offerte Business** con IP statico e SLA 99.9%

---

### 🎬 Streaming

**Confronta piattaforme e piani di abbonamento**

**Funzionalità:**

- 🎭 **3 piattaforme** (Netflix, Prime Video, Disney+)
- 📦 **3 tipi di piano** per piattaforma:
  - Base (720p-1080p)
  - Premium (4K HDR)
  - Famiglia (Multi-profilo)
- 📺 **Dettagli completi:**
  - Risoluzione video
  - Numero schermi simultanei
  - Extra (Download, Pubblicità, Cataloghi)
- 💵 **Prezzi da €4.99 a €19.99/mese**

---

### ⚡ Luce & Gas

**Analisi bolletta e confronto fornitori energia**

**Funzionalità:**

- 🏠 **Segmento** Privati/Aziende
- 📄 **Upload bolletta** (simulato - accetta .txt, PDF, immagini)
- 🔍 **Parsing intelligente** consumi kWh e Smc
- 📊 **Offerte personalizzate:**
  - Prezzo fisso 12 mesi
  - Indicizzato PUN/PSV
  - 100% energia rinnovabile (Green)
- 💰 **Calcolo spesa annua** stimata
- 📈 **Risparmio potenziale** vs bolletta attuale
- 🔄 **3 step visuali:**
  1. Valutazione iniziale
  2. Email offerte su misura
  3. Selezione e conferma

**Business:** SLA e assistenza dedicata

---

### 🏠 Mutuo

**Preventivi mutuo con calcolo rata da 4 banche**

**Funzionalità:**

- 🏡 **Tipologie:**
  - Prima casa
  - Seconda casa
  - Surroga
- 💶 **Importo** da €10.000 in su
- ⏳ **Durata** da 10 a 30 anni
- 📊 **Tasso** Fisso/Variabile
- 📐 **TAN personalizzabile** (%)
- 💼 **Reddito mensile** per calcolo fattibilità
- 📈 **LTV** (Loan to Value) stimato
- 🏦 **4 banche** con preventivi comparati:
  - TAN e TAEG specifici
  - Rata mensile calcolata
  - Spese accessorie
- 🧮 **Formula matematica** rata corretta
- ⚠️ **Disclaimer** consulenza finanziaria

---

### 💼 Richiedi Consulenza

**Form contatto avanzato con validazione completa**

**Funzionalità:**

- 📝 **Form completo:**
  - Nome completo (min 3 caratteri)
  - Email (validata formato)
  - Telefono (validato formati IT: +39, 3XX)
  - Categoria interesse (7 opzioni)
  - Budget mensile indicativo
  - Messaggio libero (max 500 caratteri)
- ✅ **Checkbox obbligatoria** privacy policy
- 📧 **Optin marketing** newsletter e offerte
- 🔐 **Validazione real-time** con messaggi errore
- 💾 **Auto-save** form in localStorage
- ✨ **Feedback successo** con animazione
- 🔄 **Auto-reset** dopo 3 secondi

**3 canali contatto alternativi:**

- 📞 Telefonico (lun-sab, orari ufficio)
- ✉️ Email (risposta 24h)
- 💬 Chat live (24/7)

---

## 🛠️ Stack Tecnologico

### Frontend Puro

- **HTML5 Semantico** con ARIA labels completi
- **CSS3 Moderno:**
  - Variabili CSS (Custom Properties)
  - Grid e Flexbox layout
  - Gradienti lineari multicolore
  - Backdrop filter (glassmorphism)
  - Animazioni e transizioni
  - Media queries responsive
- **JavaScript Vanilla ES6+:**
  - Arrow functions
  - Template literals
  - Async/await
  - Destructuring
  - Moduli funzionali

### Caratteristiche Tecniche

- ✅ **Zero dipendenze** esterne
- ✅ **Nessuna build** richiesta
- ✅ **Single-file** architecture (1480+ righe)
- ✅ **Offline-first** con localStorage
- ✅ **Mobile-first** responsive design
- ✅ **Accessibilità WCAG** compliant

---

## 🎨 Sistema di Design

### Palette Colori

**Tema Chiaro:**

- Background: Gradiente azzurro → giallo → rosa
- 6 colori accent (verde, ciano, viola, arancione, rosa, blu)
- Card semi-trasparenti con blur

**Tema Scuro:**

- Background: Gradiente viola scuro → blu navy
- Colori accent più luminosi
- Maggiore contrasto

### Gradienti Tematici

- 🚗 Assicurazioni: Viola → Porpora
- 📱 Telefonia: Rosa → Rosso
- 🌐 Internet: Azzurro → Ciano
- 🎬 Streaming: Verde → Ciano
- ⚡ Luce & Gas: Rosa → Giallo
- 🏠 Mutuo: Ciano → Viola scuro
- 💼 Consulenza: Menta → Rosa

### Componenti UI

- **Bottoni** con gradienti e effetti hover
- **Card** con ombre dinamiche e hover lift
- **Badge** interattivi colorati
- **Form** con focus states colorati
- **Stepper** per processi multi-step
- **Status** regions con live updates

---

## ♿ Accessibilità

### ARIA Implementation

- `aria-label` su tutte le regioni
- `aria-live` per aggiornamenti dinamici
- `aria-current` per navigazione
- `aria-required` su campi obbligatori
- `aria-describedby` per helper text

### Keyboard Navigation

- ⌨️ Tab navigation completa
- Focus visibile (outline viola 3px)
- Skip links impliciti
- Form submission con Enter

### Screen Reader

- Semantic HTML (header, nav, main, footer, section)
- Hidden labels con `.sr-only`
- Role attributes appropriati
- Live regions per feedback

---

## 🚀 Come Avviare

### Opzione 1: Apertura Diretta

```bash
# Apri direttamente il file nel browser
open index.html  # macOS
xdg-open index.html  # Linux
start index.html  # Windows
```

✅ Funziona anche via `file://` (nessuna chiamata di rete)

### Opzione 2: Server Locale

**Python:**

```bash
python -m http.server 8000
# Visita: http://localhost:8000/index.html
```

**PHP:**

```bash
php -S localhost:8000
# Visita: http://localhost:8000/index.html
```

**Node.js (con http-server):**

```bash
npx http-server -p 8000
# Visita: http://localhost:8000/index.html
```

**Live Server (VS Code):**

```bash
# Installa estensione "Live Server"
# Right-click su index.html → "Open with Live Server"
```

---

## 💾 Persistenza e Gestione Dati

### LocalStorage Keys

```javascript
// Tema
'theme' → 'light' | 'dark'

// Assicurazioni
'ass.veicoli' → Array di oggetti veicolo
'ass.premio' → Premio attuale (number)

// Telefonia
'tel.keep' → 'si' | 'no'
'tel.op' → Operatore attuale (string)
'tel.spesa' → Spesa mensile (number)

// Consulenza
'consulenza.dati' → Oggetto form completo
```

### Mock Data

**Tutti i dataset sono hardcoded in JavaScript:**

- 4 compagnie assicurazione
- 4 operatori telefonia
- 3 offerte internet privati
- 2 offerte internet business
- 3 piattaforme streaming (x3 piani)
- 3 offerte luce/gas privati
- 2 offerte luce/gas business
- 4 banche mutuo

**Nessuna API esterna** - tutto funziona offline

### Reset Dati

```javascript
// Da console browser
localStorage.clear();
location.reload();
```

O cancella manualmente da DevTools → Application → Local Storage

---

## 📱 Responsive Design

### Breakpoints

```css
/* Desktop: Grid 2-3 colonne */
@media (min-width: 841px) {
  .grid-2 {
    grid-template-columns: 1fr 1fr;
  }
  .grid-3 {
    grid-template-columns: repeat(3, 1fr);
  }
}

/* Mobile: Colonna singola */
@media (max-width: 840px) {
  .grid-2,
  .grid-3 {
    grid-template-columns: 1fr;
  }
}
```

### Mobile-First Approach

- Layout adattivo con CSS Grid
- Touch-friendly (target 44x44px min)
- Font scalabili (rem units)
- Immagini responsive
- Hamburger menu (se necessario)

### Device Support

- ✅ Desktop (Chrome, Firefox, Safari, Edge)
- ✅ Tablet (iPad, Android tablets)
- ✅ Mobile (iPhone, Android phones)
- ✅ Landscape/Portrait orientations

---

## 🎯 User Experience

### Interazioni

- **Hover effects** su tutti gli elementi interattivi
- **Focus states** chiari per accessibilità
- **Transizioni smooth** (0.3s ease)
- **Feedback visivo** immediato
- **Loading states** (se necessario)
- **Error messages** contestuali

### Navigazione

- **Breadcrumb visuale** nel menu
- **Smooth scroll** tra sezioni
- **Browser back/forward** supportati
- **Deep linking** con hash URLs

### Validazione Form

- **Real-time validation** durante digitazione
- **Error messages** specifici per campo
- **Success feedback** con animazioni
- **Disabled states** su bottoni quando invalido

---

## 🔧 Personalizzazione

### Modificare Offerte Mock

**Trova l'oggetto `mock` in index.html (riga ~1200):**

```javascript
const mock = {
  assicurazioni: [
    { compagnia: 'Nome', premio: 480, vantaggi: ['...'] }
  ],
  telefonia: [...],
  // ... altri servizi
};
```

### Cambiare Colori

**Modifica le variabili CSS in `:root` (riga ~10):**

```css
:root {
  --accent: #10b981; /* Verde */
  --accent-2: #06b6d4; /* Ciano */
  --accent-3: #8b5cf6; /* Viola */
  /* ... altri colori */

  /* Gradienti per sezioni */
  --grad-assicurazioni: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  /* ... altri gradienti */
}
```

### Aggiungere Nuove Sezioni

1. **Aggiungi route** in `routes` object (riga ~1155):

```javascript
const routes = {
  "/nuova-sezione": "#route-nuova-sezione",
};
```

2. **Crea sezione HTML**:

```html
<section id="route-nuova-sezione" data-route="/nuova-sezione" class="card hide">
  <h1>Titolo Sezione</h1>
  <!-- Contenuto -->
</section>
```

3. **Aggiungi link nel menu**:

```html
<li><a href="#/nuova-sezione">Nuova Sezione</a></li>
```

4. **Crea funzione init**:

```javascript
function initNuovaSezione() {
  // Logica inizializzazione
}

// Aggiungi a init()
function init() {
  // ... altre init
  initNuovaSezione();
}
```

### Modificare Layout

**Grid columns** (riga ~160):

```css
.grid-2 {
  grid-template-columns: 1fr 1fr;
} /* 2 colonne */
.grid-3 {
  grid-template-columns: repeat(3, 1fr);
} /* 3 colonne */
```

**Breakpoint mobile** (riga ~168):

```css
@media (max-width: 840px) {
  /* Layout mobile */
}
```

---

## 📊 Performance

### Metriche

- **File size:** ~90KB (HTML+CSS+JS inline)
- **HTTP requests:** 1 (solo index.html) + 1 logo
- **First Paint:** < 100ms
- **Interactive:** < 200ms
- **No external dependencies**
- **No build process**

### Ottimizzazioni

- ✅ Inline CSS (no external stylesheet)
- ✅ Inline JS (no external scripts)
- ✅ LocalStorage caching
- ✅ CSS animations (GPU accelerated)
- ✅ Lazy evaluation del rendering

---

## 🔌 Integrazione WordPress

### Opzione 1: Pagina Statica

```php
<?php
/*
Template Name: Savyst Comparatore
*/
?>
<?php get_header(); ?>

<div id="savyst-app">
  <?php include(get_template_directory() . '/savyst/index.html'); ?>
</div>

<?php get_footer(); ?>
```

### Opzione 2: Shortcode

```php
// functions.php
function savyst_comparatore_shortcode() {
  ob_start();
  include(get_template_directory() . '/savyst/index.html');
  return ob_get_clean();
}
add_shortcode('savyst_comparatore', 'savyst_comparatore_shortcode');

// Uso: [savyst_comparatore]
```

### Opzione 3: Custom Post Type

```php
// Crea CPT "Servizi" e usa index.html come template
```

---

## 🐛 Debug e Troubleshooting

### Console Errors

```javascript
// Abilita logging dettagliato
const DEBUG = true;
const log = (msg) => DEBUG && console.log("[Savyst]", msg);
```

### LocalStorage Issues

```javascript
// Verifica supporto
if (typeof Storage !== "undefined") {
  console.log("LocalStorage disponibile");
} else {
  console.log("LocalStorage non supportato");
}

// Clear problematic data
localStorage.removeItem("problematic-key");
```

### Form Validation

```javascript
// Test regex validazione
const testEmail = "test@example.com";
console.log(/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(testEmail)); // true

const testTel = "+39 333 1234567";
console.log(/^(\+39|0039|39)?\s?3[0-9]{2}\s?[0-9]{6,7}$/.test(testTel)); // true
```

---

## 🌟 Roadmap Future

### Planned Features

- [ ] Export dati in PDF
- [ ] Comparazione side-by-side
- [ ] Grafici interattivi
- [ ] Filtri avanzati multipli
- [ ] PWA (Progressive Web App)
- [ ] Dark mode automatico (OS preference)
- [ ] Multi-lingua (EN, ES, FR)
- [ ] Integrazione API reali
- [ ] Sistema notifiche push
- [ ] Storico comparazioni

### Nice to Have

- [ ] Condivisione social
- [ ] QR code per mobile
- [ ] Voice commands
- [ ] Chatbot assistente
- [ ] Gamification (badge, achievements)

---

## 📄 Licenza

Questo progetto è una **demo offline** per scopi didattici e di testing.

**Utilizzo:**

- ✅ Uso personale e commerciale
- ✅ Modifiche e personalizzazioni
- ✅ Integrazione in progetti esistenti
- ⚠️ Dati mock - non per uso produzione senza validazione
- ⚠️ Marchi e loghi appartengono ai rispettivi proprietari

---

## 🤝 Contributi

### Come Contribuire

1. Fork del repository
2. Crea feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit changes (`git commit -m 'Add some AmazingFeature'`)
4. Push al branch (`git push origin feature/AmazingFeature`)
5. Apri Pull Request

### Coding Standards

- Commenti in italiano
- Indentazione 4 spazi
- Naming conventions: camelCase JS, kebab-case CSS
- Semantic HTML5
- BEM methodology per CSS (opzionale)

---

## 📞 Supporto

### Issues

Hai trovato un bug? [Apri una issue](https://github.com/Ashif-Chowdhury/Savyst/issues)

### Contatti

- 📧 Email: consulenza@savyst.it
- 💬 Discussioni: [GitHub Discussions](https://github.com/Ashif-Chowdhury/Savyst/discussions)

---

## 📚 Risorse Aggiuntive

### Documentazione

- [ARIA Guidelines](https://www.w3.org/WAI/ARIA/apg/)
- [CSS Grid Guide](https://css-tricks.com/snippets/css/complete-guide-grid/)
- [JavaScript Best Practices](https://github.com/ryanmcdermott/clean-code-javascript)

### Tools Utili

- [Can I Use](https://caniuse.com/) - Browser compatibility
- [Wave](https://wave.webaim.org/) - Accessibility checker
- [Lighthouse](https://developers.google.com/web/tools/lighthouse) - Performance audit

---

<div align="center">
  
  **⭐ Se questo progetto ti è stato utile, lascia una stella! ⭐**
  
  Made with 💚 by [Savyst Team](https://github.com/Ashif-Chowdhury/Savyst)
  
</div>
