<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Utenze & Servizi - Mockup</title>
    <meta name="description" content="Mockup funzionante per comparazione servizi: assicurazioni, telefonia, internet casa/aziende, streaming, luce & gas, mutuo. UI accessibile, responsive, senza dipendenze esterne." />
    <style>
         /* ==========================================
        Stili base, tema, layout
        - Mobile-first
        - Accessibilità: contrasti, focus
        ========================================== */
         :root {
             --bg: #f7f7f8; /* background chiaro */
             --text: #0f172a; /* testo scuro */
             --muted: #6b7280; /* testo secondario */
             --card: #ffffff; /* card background */
             --border: #e5e7eb; /* bordi */
             --accent: #22c55e; /* verde accento */
             --accent-2: #0ea5e9; /* azzurro */
             --danger: #ef4444; /* rosso */
             --warn: #f59e0b; /* giallo */
             --focus: #3b82f6; /* focus */
         }

         .theme-dark {
             --bg: 
             #0b1220;
             --text: #e5e7eb;
             --muted: #9ca3af;
             --card: #0f172a;
             --border: #1f2937;
             --accent: #22c55e;
             --accent-2: #60a5fa;
             --danger: #ef4444;
             --warn: #f59e0b;
             --focus: #60a5fa;
         }

         html, body {
             height: 100%;
         }

         body {
             margin: 0;
             font-family: system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif;
             background: var(--bg);
             color: var(--text);
             line-height: 1.5;
         }

         a {
             color: var(--accent-2);
             text-decoration: none;
         }

             a:focus, button:focus, input:focus, select:focus, textarea:focus {
                 outline: 3px solid var(--focus);
                 outline-offset: 2px;
             }

         /* Layout */
         header {
             border-bottom: 1px solid var(--border);
             background: var(--card);
             position: sticky;
             top: 0;
             z-index: 50;
         }

         .shell {
             max-width: 1080px;
             margin: 0 auto;
             padding: 12px 16px;
         }

         .row {
             display: flex;
             gap: 12px;
             flex-wrap: wrap;
         }

         .grid-2 {
             display: grid;
             grid-template-columns: 1fr 1fr;
             gap: 12px;
         }

         .grid-3 {
             display: grid;
             grid-template-columns: repeat(3, 1fr);
             gap: 12px;
         }

         @media (max-width: 840px) {
             .grid-2, .grid-3 {
                 grid-template-columns: 1fr;
             }
         }

         /* Navbar */
         .nav {
             display: flex;
             align-items: center;
             justify-content: space-between;
         }

         .brand {
             display: flex;
             align-items: center;
             gap: 10px;
             font-weight: 800;
         }

             .brand .logo {
                 width: 28px;
                 height: 28px;
                 border-radius: 8px;
                 background: linear-gradient(135deg, var(--accent), var(--accent-2));
                 display: inline-block;
             }

         nav ul {
             list-style: none;
             display: flex;
             gap: 8px;
             padding: 0;
             margin: 0;
         }

         nav a {
             padding: 8px 10px;
             border-radius: 8px;
         }

             nav a[aria-current="page"], nav a:hover {
                 background: var(--border);
             }

         .actions {
             display: flex;
             gap: 8px;
         }

         .btn {
             border: 1px solid var(--border);
             background: var(--card);
             color: var(--text);
             padding: 8px 12px;
             border-radius: 10px;
             cursor: pointer;
         }

             .btn.primary {
                 background: var(--accent);
                 color: #0b2a1a;
                 border-color: transparent;
                 font-weight: 700;
             }

             .btn.secondary {
                 background: transparent;
             }

             .btn.danger {
                 background: var(--danger);
                 color: #fff;
                 border-color: transparent;
             }

             .btn.warn {
                 background: var(--warn);
                 color: #1f2937;
                 border-color: transparent;
             }

         /* Cards */
         .card {
             background: var(--card);
             border: 1px solid var(--border);
             border-radius: 12px;
             padding: 14px;
         }

             .card h2, .card h3 {
                 margin-top: 0;
             }

         .muted {
             color: var(--muted);
         }

         .badge {
             display: inline-block;
             padding: 4px 8px;
             border-radius: 999px;
             border: 1px solid var(--border);
             margin: 2px 4px 2px 0;
             font-size: 12px;
             background: transparent;
         }

         .list {
             display: grid;
             grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
             gap: 12px;
         }

         /* Form */
         .form {
             display: grid;
             grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
             gap: 12px;
         }

         .field {
             display: flex;
             flex-direction: column;
             gap: 6px;
         }

         label {
             font-size: 13px;
             color: var(--muted);
         }

         input, select, textarea {
             padding: 10px;
             border-radius: 8px;
             border: 1px solid var(--border);
             background: transparent;
             color: var(--text);
         }

             input[type="range"] {
                 accent-color: var(--accent);
             }

         .help {
             font-size: 12px;
             color: var(--muted);
         }

         .error {
             font-size: 12px;
             color: var(--danger);
         }

         /* Stepper */
         .stepper {
             display: flex;
             gap: 8px;
             flex-wrap: wrap;
         }

         .step {
             display: flex;
             align-items: center;
             gap: 8px;
             border: 1px dashed var(--border);
             padding: 8px 10px;
             border-radius: 10px;
         }

             .step .dot {
                 width: 20px;
                 height: 20px;
                 border-radius: 999px;
                 background: var(--accent);
                 color: #0b2a1a;
                 display: inline-flex;
                 align-items: center;
                 justify-content: center;
                 font-weight: 800;
             }

         /* Footer */
         footer {
             margin-top: 24px;
             padding: 24px 16px;
             border-top: 1px solid var(--border);
             color: var(--muted);
         }

         /* Status / live regions */
         .status {
             padding: 8px;
             border-radius: 8px;
             border: 1px solid var(--border);
             background: transparent;
         }

         /* Utility */
         .sr-only {
             position: absolute;
             width: 1px;
             height: 1px;
             padding: 0;
             margin: -1px;
             overflow: hidden;
             clip: rect(0,0,0,0);
             white-space: nowrap;
             border: 0;
         }

         .hide {
             display: none !important;
         }

         .center {
             display: flex;
             align-items: center;
             justify-content: center;
         }
    </style>
</head>
<body>
    <!-- ==========================================
         Header & Navbar con toggle tema e routing
         ========================================== -->
    <header role="banner" aria-label="Intestazione">
        <div class="shell nav" aria-label="Barra di navigazione">
            <div class="brand">
                <span class="logo" aria-hidden="true"></span>
                <span>Utenze & Servizi</span>
            </div>
            <nav aria-label="Principale">
                <ul>
                    <li><a href="#/assicurazioni">Assicurazioni</a></li>
                    <li><a href="#/telefonia">Telefonia</a></li>
                    <li><a href="#/internet">Internet</a></li>
                    <li><a href="#/streaming">Streaming</a></li>
                    <li><a href="#/luce-gas">Luce & Gas</a></li>
                    <li><a href="#/mutuo">Mutuo</a></li>
                </ul>
            </nav>
            <div class="actions">
                <button class="btn" id="themeToggle" aria-pressed="false" aria-label="Cambia tema" title="Cambia tema">🌗 Tema</button>
            </div>
        </div>
    </header>

    <main id="routerView" class="shell" role="main">
        <!-- Live region per aggiornamenti -->
        <div aria-live="polite" aria-atomic="true" class="sr-only" id="live"></div>

        <!-- ===================== ASSICURAZIONI ===================== -->
        <section id="route-assicurazioni" data-route="/assicurazioni" class="card" aria-labelledby="assicurazioni-title">
            <h1 id="assicurazioni-title">Assicurazione Auto & Moto</h1>
            <p class="muted">Compila i dati del veicolo, aggiungi uno o più elementi e confronta le offerte. Tutti i valori sono esempi (mock).</p>

            <!-- Form veicoli -->
            <div class="form" aria-label="Form veicoli">
                <div class="field">
                    <label for="tipoVeicolo">Tipo veicolo <span class="sr-only">(obbligatorio)</span></label>
                    <select id="tipoVeicolo" aria-required="true">
                        <option value="auto">Auto</option>
                        <option value="moto">Moto</option>
                    </select>
                </div>
                <div class="field" id="usoAutoField">
                    <label for="usoAuto">Uso (solo per auto)</label>
                    <select id="usoAuto">
                        <option value="privato">Privato</option>
                        <option value="aziendale">Aziendale</option>
                    </select>
                </div>
                <div class="field">
                    <label for="targa">Targa (formato AB123CD)</label>
                    <input id="targa" placeholder="AB123CD" inputmode="latin" aria-describedby="targaHelp" />
                    <div id="targaHelp" class="help">Usa lettere maiuscole e numeri: es. AB123CD</div>
                    <div class="error" id="targaError" aria-live="polite"></div>
                </div>
                <div class="field">
                    <label for="premioAttuale">Premio annuo attuale (€)</label>
                    <input id="premioAttuale" type="number" min="0" step="0.01" placeholder="600.00" />
                </div>
            </div>
            <div class="row" style="margin-top:8px;">
                <button class="btn primary" id="addVeicolo">+ Aggiungi veicolo</button>
                <button class="btn secondary" id="resetVeicoli">Reset lista</button>
                <button class="btn" id="cercaAss">Cerca offerte</button>
            </div>

            <div class="grid-2" style="margin-top:12px;">
                <div class="card">
                    <h3>Veicoli selezionati</h3>
                    <ul id="listaVeicoli" class="muted" aria-live="polite"></ul>
                </div>
                <div class="card">
                    <h3>Riepilogo</h3>
                    <p>Risparmio totale stimato: <strong id="risparmioTotAss">€0.00</strong></p>
                    <div class="status" id="statusAss" role="status" aria-live="polite">Nessuna offerta selezionata.</div>
                </div>
            </div>

            <div class="card">
                <h3>Offerte disponibili</h3>
                <div id="offerteAss" class="list" aria-live="polite"></div>
            </div>
        </section>

        <!-- ===================== TELEFONIA ===================== -->
        <section id="route-telefonia" data-route="/telefonia" class="card" aria-labelledby="telefonia-title">
            <h1 id="telefonia-title">Telefonia Mobile</h1>
            <p class="muted">Mantieni il numero o richiedi una nuova SIM, filtra per reti e giga. I dati sono mock.</p>

            <div class="form">
                <div class="field">
                    <label for="keepNumber">Mantieni il numero?</label>
                    <select id="keepNumber">
                        <option value="si">Sì</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div class="field" id="operatoreField">
                    <label for="operatoreAttuale">Operatore attuale</label>
                    <select id="operatoreAttuale">
                        <option value="">-- seleziona --</option>
                        <option>TIM</option>
                        <option>Vodafone</option>
                        <option>WindTre</option>
                        <option>Iliad</option>
                        <option>Altro</option>
                    </select>
                </div>
                <div class="field" id="spesaField">
                    <label for="spesaMensile">Spesa mensile attuale (€)</label>
                    <input id="spesaMensile" type="number" min="0" step="0.01" placeholder="12.99" />
                </div>
            </div>

            <div id="nuovoNumeroBox" class="card hide">
                <h3>Nuovo numero: preferenze</h3>
                <div class="form">
                    <div class="field">
                        <label for="tipoTel">Tipo offerta</label>
                        <select id="tipoTel">
                            <option value="solo_internet">Solo Internet</option>
                            <option value="voce_internet">Voce + Internet</option>
                        </select>
                    </div>
                    <div class="field">
                        <label for="usoTel">Uso</label>
                        <select id="usoTel">
                            <option value="privato">Privato</option>
                            <option value="business">Business</option>
                        </select>
                    </div>
                    <div class="field">
                        <label for="gigaTel">Giga necessari</label>
                        <input id="gigaTel" type="range" min="10" max="300" step="10" value="100" />
                        <div class="help" id="gigaTelHelp">100 GB</div>
                    </div>
                    <div class="field">
                        <span>Filtri rete</span>
                        <label><input type="checkbox" class="rete-cb" value="4G" checked /> 4G</label>
                        <label><input type="checkbox" class="rete-cb" value="5G" /> 5G</label>
                        <label><input type="checkbox" class="rete-cb" value="VoLTE" /> VoLTE</label>
                    </div>
                    <div class="field" style="align-self:end;">
                        <button class="btn" id="cercaTel">Cerca offerte</button>
                    </div>
                </div>
            </div>

            <div class="grid-2">
                <div class="card">
                    <h3>Offerte disponibili</h3>
                    <div id="offerteTel" class="list" aria-live="polite"></div>
                </div>
                <div class="card">
                    <h3>Riepilogo costi</h3>
                    <p>Prima ricarica: <strong id="telPrima">€0.00</strong></p>
                    <p>Costo nuova SIM: <strong id="telSim">€0.00</strong></p>
                    <p>Costo attivazione: <strong id="telAtt">€0.00</strong></p>
                    <p>Rinnovo mensile: <strong id="telRinn">€0.00</strong></p>
                    <hr />
                    <p>Giga UE: <strong id="telUE">-</strong></p>
                    <p>Tecnologia: <strong id="telTech">-</strong></p>
                    <p>Dati inclusi: <strong id="telDati">-</strong></p>
                    <p>Velocità max: <strong id="telVel">-</strong></p>
                    <p>Hotspot: <strong id="telHot">-</strong></p>
                    <p>Chiamate: <strong id="telCall">-</strong></p>
                    <p>SMS: <strong id="telSms">-</strong></p>
                    <div class="status" id="telStatus" role="status" aria-live="polite">Nessuna offerta selezionata.</div>
                </div>
            </div>
        </section>

        <!-- ===================== INTERNET CASA/AZIENDE ===================== -->
        <section id="route-internet" data-route="/internet" class="card" aria-labelledby="internet-title">
            <h1 id="internet-title">Internet Casa & Aziende</h1>
            <p class="muted">Valutiamo la tua soluzione iniziale, proponiamo offerte migliori al tuo indirizzo, selezioni sul sito e confermi. Dati simulati.</p>

            <div class="form">
                <div class="field">
                    <label for="internetBusiness">Segmento</label>
                    <select id="internetBusiness">
                        <option value="privato">Privato</option>
                        <option value="business">Business</option>
                    </select>
                </div>
                <div class="field">
                    <label for="giaInternet">Hai già internet attivo a casa?</label>
                    <select id="giaInternet">
                        <option value="si">Sì</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div class="field">
                    <label for="indirizzo">Indirizzo</label>
                    <input id="indirizzo" placeholder="Via Esempio 1" />
                </div>
                <div class="field">
                    <label for="civico">Civico</label>
                    <input id="civico" placeholder="10" />
                </div>
                <div class="field">
                    <label for="citta">Città</label>
                    <input id="citta" placeholder="Arezzo" />
                </div>
            </div>

            <div id="internetAttivoBox" class="card">
                <h3>Se hai già internet</h3>
                <div class="form">
                    <div class="field">
                        <label for="fornitoreAtt">Fornitore attuale</label>
                        <select id="fornitoreAtt">
                            <option value="">-- seleziona --</option>
                            <option>TIM</option>
                            <option>Vodafone</option>
                            <option>Fastweb</option>
                            <option>WindTre</option>
                            <option>Altri</option>
                        </select>
                    </div>
                    <div class="field">
                        <label for="spesaInternet">Spesa mensile attuale (€)</label>
                        <input id="spesaInternet" type="number" min="0" step="0.01" placeholder="29.90" />
                    </div>
                </div>
            </div>

            <div class="grid-2">
                <div class="card">
                    <h3>Offerte disponibili</h3>
                    <div id="offerteInternet" class="list" aria-live="polite"></div>
                </div>
                <div class="card">
                    <h3>Riepilogo</h3>
                    <p>Costo iniziale: <strong id="intIniziale">€0.00</strong></p>
                    <p>Rinnovo mensile: <strong id="intMensile">€0.00</strong></p>
                    <p>Tecnologia: <strong id="intTech">-</strong></p>
                    <p>Velocità: <strong id="intVel">-</strong></p>
                    <p>Modem: <strong id="intModem">-</strong></p>
                    <p>Vincoli: <strong id="intVincoli">-</strong></p>
                    <p>Risparmio vs attuale: <strong id="intSave">€0.00</strong></p>
                    <div class="status" id="intStatus" role="status" aria-live="polite">Nessuna offerta selezionata.</div>
                </div>
            </div>
        </section>

        <!-- ===================== STREAMING ===================== -->
        <section id="route-streaming" data-route="/streaming" class="card" aria-labelledby="streaming-title">
            <h1 id="streaming-title">Streaming</h1>
            <p class="muted">Confronto trasparente delle piattaforme e piani disponibili. Dati simulati.</p>

            <div class="form">
                <div class="field">
                    <label for="pianoStreaming">Tipo di piano</label>
                    <select id="pianoStreaming">
                        <option value="base">Base</option>
                        <option value="premium">Premium</option>
                        <option value="famiglia">Famiglia</option>
                    </select>
                </div>
                <div class="field" style="align-self:end;">
                    <button class="btn" id="cercaStreaming">Cerca piani</button>
                </div>
            </div>

            <div class="grid-2">
                <div class="card">
                    <h3>Piani disponibili</h3>
                    <div id="offerteStreaming" class="list" aria-live="polite"></div>
                </div>
                <div class="card">
                    <h3>Riepilogo</h3>
                    <p>Piattaforma: <strong id="strPiattaforma">-</strong></p>
                    <p>Piano: <strong id="strPiano">-</strong></p>
                    <p>Prezzo/mese: <strong id="strPrezzo">€0.00</strong></p>
                    <p>Risoluzione: <strong id="strRes">-</strong></p>
                    <p>Schermi: <strong id="strSchermi">-</strong></p>
                    <p>Extra: <strong id="strExtra">-</strong></p>
                    <div class="status" id="strStatus" role="status" aria-live="polite">Nessun piano selezionato.</div>
                </div>
            </div>
        </section>

        <!-- ===================== LUCE & GAS ===================== -->
        <section id="route-lucegas" data-route="/luce-gas" class="card" aria-labelledby="lucegas-title">
            <h1 id="lucegas-title">Luce & Gas</h1>
            <p class="muted">Servizio gratuito: analisi bolletta (simulata), offerte personalizzate, confronto trasparente. Switcho guadagna tramite commissione dal fornitore scelto.</p>

            <div class="form">
                <div class="field">
                    <label for="lgSegmento">Segmento</label>
                    <select id="lgSegmento">
                        <option value="privati">Privati</option>
                        <option value="aziende">Aziende</option>
                    </select>
                </div>
                <div class="field">
                    <label for="fileBolletta">Carica bolletta (simulazione)</label>
                    <input id="fileBolletta" type="file" accept="text/plain,application/pdf,image/*" />
                    <div class="help">Per la demo, se carichi un .txt con una riga tipo "kWh: 2700; Smc: 900", verrà letta.</div>
                </div>
                <div class="field" style="align-self:end;">
                    <button class="btn" id="analizzaBolletta">Analizza</button>
                </div>
            </div>

            <div class="card">
                <div class="stepper" aria-label="Fasi del servizio">
                    <div class="step"><span class="dot" aria-hidden="true">1</span> Valutazione iniziale</div>
                    <div class="step"><span class="dot" aria-hidden="true">2</span> Email con offerte su misura</div>
                    <div class="step"><span class="dot" aria-hidden="true">3</span> Selezioni e confermi sul sito</div>
                </div>
            </div>

            <div class="grid-2">
                <div class="card">
                    <h3>Offerte personalizzate</h3>
                    <div id="offerteLG" class="list" aria-live="polite"></div>
                </div>
                <div class="card">
                    <h3>Analisi e riepilogo</h3>
                    <p>Consumo stimato: <strong id="lgConsumo">-</strong></p>
                    <p>Spesa stimata: <strong id="lgSpesa">€0.00</strong></p>
                    <p>Tipologia: <strong id="lgTipo">-</strong></p>
                    <p>Risparmio potenziale: <strong id="lgSave">€0.00</strong></p>
                    <div class="status" id="lgStatus" role="status" aria-live="polite">Carica una bolletta per ottenere analisi (mock).</div>
                </div>
            </div>
        </section>

        <!-- ===================== MUTUO ===================== -->
        <section id="route-mutuo" data-route="/mutuo" class="card" aria-labelledby="mutuo-title">
            <h1 id="mutuo-title">Mutuo</h1>
            <p class="muted">Servizio gratuito con oltre 20 banche; preventivi immediati; supporto consulenziale fino all’attivazione; tutto online; senza chiamate commerciali.</p>

            <div class="form" aria-label="Form mutuo">
                <div class="field">
                    <label for="tipoMutuo">Tipo mutuo</label>
                    <select id="tipoMutuo">
                        <option value="prima">Prima casa</option>
                        <option value="seconda">Seconda casa</option>
                        <option value="surroga">Surroga</option>
                    </select>
                </div>
                <div class="field">
                    <label for="importoMutuo">Importo richiesto (€)</label>
                    <input id="importoMutuo" type="number" min="10000" step="1000" placeholder="150000" />
                </div>
                <div class="field">
                    <label for="durataMutuo">Durata (anni)</label>
                    <select id="durataMutuo">
                        <option>10</option>
                        <option>15</option>
                        <option>20</option>
                        <option>25</option>
                        <option>30</option>
                    </select>
                </div>
                <div class="field">
                    <label for="tassoTipo">Tasso</label>
                    <select id="tassoTipo">
                        <option value="fisso">Fisso</option>
                        <option value="variabile">Variabile</option>
                    </select>
                </div>
                <div class="field">
                    <label for="tassoAnn">TAN (%)</label>
                    <input id="tassoAnn" type="number" min="0.1" step="0.01" placeholder="3.50" />
                </div>
                <div class="field">
                    <label for="redditoMens">Reddito mensile (€)</label>
                    <input id="redditoMens" type="number" min="500" step="10" placeholder="2200" />
                </div>
                <div class="field">
                    <label for="ltv">LTV stimato (%)</label>
                    <input id="ltv" type="number" min="10" max="100" step="1" placeholder="80" />
                </div>
            </div>
            <div class="row" style="margin-top:8px;">
                <button class="btn" id="calcolaMutuo">Calcola preventivi</button>
                <button class="btn secondary" id="resetMutuo">Reset</button>
            </div>

            <div class="grid-2" style="margin-top:12px;">
                <div class="card">
                    <h3>Preventivi disponibili</h3>
                    <div id="offerteMutuo" class="list" aria-live="polite"></div>
                </div>
                <div class="card">
                    <h3>Riepilogo</h3>
                    <p>Rata stimata: <strong id="mutuoRata">€0.00</strong></p>
                    <p>TAN/TAEG: <strong id="mutuoTassi">-</strong></p>
                    <p>Banca: <strong id="mutuoBanca">-</strong></p>
                    <p>Note: <strong id="mutuoNote">-</strong></p>
                    <div class="status" id="mutuoStatus" role="status" aria-live="polite">Inserisci i dati e calcola i preventivi.</div>
                    <p class="muted" style="margin-top:12px;">Disclaimer: Stima indicativa, non costituisce consulenza finanziaria.</p>
                </div>
            </div>
        </section>
    </main>

    <footer role="contentinfo" class="shell">
        <p>Demo offline — Tutti i dati sono fittizi. Nessuna chiamata di rete. UI in italiano.</p>
    </footer>

    <script>
    /* ============================================================
       Utility di formattazione e gestione stato
       ============================================================ */
    const $ = (sel, ctx=document) => ctx.querySelector(sel);
    const $$ = (sel, ctx=document) => Array.from(ctx.querySelectorAll(sel));

    const store = {
      get: (key, def=null) => {
        try { const v = localStorage.getItem(key); return v ? JSON.parse(v) : def; } catch(e) { return def; }
      },
      set: (key, val) => { try { localStorage.setItem(key, JSON.stringify(val)); } catch(e) {} },
      del: (key) => { try { localStorage.removeItem(key); } catch(e) {} }
    };

    const euro = (n) => `€${Number(n||0).toFixed(2)}`;
    const live = (msg) => { const el = document.getElementById('live'); el.textContent = msg; };

    /* ============================================================
       Tema (light/dark) con persistenza
       ============================================================ */
    const applyTheme = (t) => {
      document.body.classList.toggle('theme-dark', t === 'dark');
      document.body.classList.toggle('theme-light', t === 'light');
      const btn = document.getElementById('themeToggle');
      btn.setAttribute('aria-pressed', t === 'dark');
      store.set('theme', t);
    };
    const initTheme = () => {
      const saved = store.get('theme', 'light');
      applyTheme(saved);
      document.getElementById('themeToggle').addEventListener('click', () => {
        const now = document.body.classList.contains('theme-dark') ? 'light' : 'dark';
        applyTheme(now);
        live(`Tema impostato su ${now === 'dark' ? 'scuro' : 'chiaro'}.`);
      });
    };

    /* ============================================================
       Router hash: mostra/nasconde sezioni e aggiorna aria-current
       ============================================================ */
    const routes = {
      '/assicurazioni': '#route-assicurazioni',
      '/telefonia': '#route-telefonia',
      '/internet': '#route-internet',
      '/streaming': '#route-streaming',
      '/luce-gas': '#route-lucegas',
      '/mutuo': '#route-mutuo'
    };
    const applyRoute = () => {
      const hash = location.hash.replace('#', '') || '/assicurazioni';
      const target = routes[hash] || routes['/assicurazioni'];
      // Mostra/nasconde
      $$('main section').forEach(sec => { sec.classList.add('hide'); });
      $(target).classList.remove('hide');
      // Aggiorna aria-current nel menu
      $$('header nav a').forEach(a => {
        const href = a.getAttribute('href').replace('#', '');
        a.setAttribute('aria-current', href === hash ? 'page' : 'false');
      });
      live(`Navigazione: ${hash.replace('/', '')}`);
    };

    /* ============================================================
       Componenti riutilizzabili
       ============================================================ */
    function cardOfferHTML(o, actions=[]) {
      return `
        <article class="card" tabindex="0" aria-label="Offerta">
          <h3 style="margin:0 0 6px 0;">${o.titolo || o.compagnia || o.operatore || o.piattaforma || o.banca || 'Offerta'}</h3>
          ${o.sottotitolo ? `<p class=\"muted\">${o.sottotitolo}</p>` : ''}
          ${o.badges ? `<div class=\"muted\">${o.badges.map(b=>`<span class=\"badge\">${b}</span>`).join('')}</div>` : ''}
          ${o.righe ? o.righe.map(r=>`<p>${r.label}: <strong>${r.val}</strong></p>`).join('') : ''}
          <div class="row" style="margin-top:8px;">
            ${actions.map(a=>`<button class=\"btn\" data-action=\"${a.key}\">${a.label}</button>`).join('')}
          </div>
        </article>`;
    }

    function bindCardActions(container, handlers={}) {
      $$('.card button', container).forEach(btn => {
        const key = btn.getAttribute('data-action');
        btn.addEventListener('click', () => {
          if (handlers[key]) handlers[key]();
        });
      });
    }

    /* ============================================================
       Mock data per i moduli
       ============================================================ */
    const mock = {
      assicurazioni: [
        { compagnia: 'Compagnia A', premio: 480, vantaggi: ['Kasko','Assistenza','Cristalli'] },
        { compagnia: 'Compagnia B', premio: 520, vantaggi: ['RC base','Tutela legale'] },
        { compagnia: 'Compagnia C', premio: 450, vantaggi: ['RC + Furto','Incendio'] },
        { compagnia: 'Compagnia D', premio: 510, vantaggi: ['Kasko parziale','Carrozzeria convenzionata'] }
      ],
      telefonia: [
        { operatore:'Operatore X', reti:['4G','VoLTE'], tipo:'voce_internet', uso:'privato', prima:10, sim:5, attiv:0, rinn:7.99, det:{ ue:7, tech:'4G/VoLTE', dati:100, vel:300, hotspot:true, call:'illimitate', sms:'illimitati' } },
        { operatore:'Operatore Y', reti:['5G','VoLTE'], tipo:'solo_internet', uso:'business', prima:15, sim:10, attiv:5, rinn:9.99, det:{ ue:12, tech:'5G/VoLTE', dati:200, vel:1000, hotspot:true, call:'-', sms:'-' } },
        { operatore:'Operatore Z', reti:['4G','5G'], tipo:'voce_internet', uso:'privato', prima:5, sim:0, attiv:0, rinn:6.99, det:{ ue:8, tech:'5G', dati:150, vel:800, hotspot:false, call:'illimitate', sms:'illimitati' } },
        { operatore:'Operatore W', reti:['4G'], tipo:'solo_internet', uso:'privato', prima:0, sim:0, attiv:0, rinn:5.99, det:{ ue:5, tech:'4G', dati:50, vel:150, hotspot:true, call:'-', sms:'-' } }
      ],
      internet_priv: [
        { titolo:'FTTH 1 Gbps', tech:'FTTH', vel:'1000/300 Mbps', attiv:0, modem:'Incluso', vincoli:'24 mesi', mensile:27.90, iniziale:0 },
        { titolo:'FTTC 200 Mbps', tech:'FTTC', vel:'200/20 Mbps', attiv:19.90, modem:'Opzionale', vincoli:'12 mesi', mensile:24.90, iniziale:19.90 },
        { titolo:'FWA 100 Mbps', tech:'FWA', vel:'100/10 Mbps', attiv:29.90, modem:'Router FWA', vincoli:'12 mesi', mensile:22.90, iniziale:29.90 }
      ],
      internet_business: [
        { titolo:'FTTH Pro 2.5 Gbps', tech:'FTTH', vel:'2500/500 Mbps', attiv:49.90, modem:'Incluso + IP statico', vincoli:'36 mesi', mensile:39.90, iniziale:49.90, sla:'Assistenza prioritaria' },
        { titolo:'FTTC Pro 300 Mbps', tech:'FTTC', vel:'300/30 Mbps', attiv:39.90, modem:'Incluso', vincoli:'24 mesi', mensile:32.90, iniziale:39.90, sla:'SLA 99.9%' }
      ],
      streaming: [
        { piattaforma:'Netflix', piani:{ base:{ prezzo:7.99, res:'720p', schermi:1, extra:'Pubblicità limitata' }, premium:{ prezzo:17.99, res:'4K HDR', schermi:4, extra:'Download' }, famiglia:{ prezzo:19.99, res:'4K', schermi:5, extra:'Profili famiglia' } } },
        { piattaforma:'Prime Video', piani:{ base:{ prezzo:4.99, res:'1080p', schermi:3, extra:'Prime incluso' }, premium:{ prezzo:8.99, res:'4K', schermi:3, extra:'Channel opzionali' }, famiglia:{ prezzo:12.99, res:'4K', schermi:4, extra:'Controllo genitori' } } },
        { piattaforma:'Disney+', piani:{ base:{ prezzo:5.99, res:'1080p', schermi:2, extra:'Catalogo Disney/Marvel' }, premium:{ prezzo:11.99, res:'4K', schermi:4, extra:'Download' }, famiglia:{ prezzo:14.99, res:'4K', schermi:4, extra:'Condivisione famiglia' } } }
      ],
      lucegas_priv: [
        { titolo:'Fisso Luce', tipo:'fisso', prezzo_kwh:0.25, prezzo_smc:0.90, canone:5.00, note:'Prezzo fisso 12 mesi' },
        { titolo:'Indicizzato Luce/Gas', tipo:'indicizzato', prezzo_kwh:0.21, prezzo_smc:0.85, canone:7.00, note:'Indicizzato PUN/PSV' },
        { titolo:'Green', tipo:'fisso', prezzo_kwh:0.27, prezzo_smc:0.92, canone:6.00, note:'100% rinnovabile' }
      ],
      lucegas_bus: [
        { titolo:'Business Fisso', tipo:'fisso', prezzo_kwh:0.20, prezzo_smc:0.80, canone:9.00, note:'SLA e assistenza' },
        { titolo:'Business Indicizzato', tipo:'indicizzato', prezzo_kwh:0.18, prezzo_smc:0.75, canone:12.00, note:'Prezzi variabili' }
      ],
      mutuo_banche: [
        { banca:'Banca Alfa', tan:3.40, taeg:3.70, spese:350 },
        { banca:'Banca Beta', tan:3.55, taeg:3.85, spese:420 },
        { banca:'Banca Gamma', tan:3.20, taeg:3.50, spese:390 },
        { banca:'Banca Delta', tan:3.80, taeg:4.10, spese:450 }
      ]
    };

    /* ============================================================
       ASSICURAZIONI: stato, validazioni, rendering
       ============================================================ */
    const statoAss = {
      veicoli: store.get('ass.veicoli', []),
      premioAttuale: store.get('ass.premio', 600)
    };
    function renderVeicoli() {
      const ul = document.getElementById('listaVeicoli');
      if (!statoAss.veicoli.length) { ul.innerHTML = '<li class="muted">Nessun veicolo aggiunto.</li>'; return; }
      ul.innerHTML = statoAss.veicoli.map((v,i)=>`<li>#${i+1} • ${v.tipo.toUpperCase()}${v.tipo==='auto'?(' ('+v.uso+')'):''} • Targa: ${v.targa}</li>`).join('');
      store.set('ass.veicoli', statoAss.veicoli);
    }
    function validaTarga(t) { return /^[A-Z]{2}\d{3}[A-Z]{2}$/.test(t); }
    function cercaOfferteAss() {
      const premioAttuale = Number(document.getElementById('premioAttuale').value || statoAss.premioAttuale);
      statoAss.premioAttuale = premioAttuale; store.set('ass.premio', premioAttuale);
      const cont = document.getElementById('offerteAss');
      cont.innerHTML = '';
      let rispTot = 0;
      mock.assicurazioni.forEach(o => {
        const risp = Math.max(0, premioAttuale - o.premio);
        rispTot += risp;
        const html = cardOfferHTML({
          titolo: o.compagnia,
          badges: o.vantaggi,
          righe: [
            { label:'Premio annuo', val: euro(o.premio) },
            { label:'Risparmio vs attuale', val: euro(risp) }
          ]
        }, [ {key:'select', label:'Seleziona'} ]);
        const wrapper = document.createElement('div'); wrapper.innerHTML = html; const node = wrapper.firstChild;
        cont.appendChild(node);
        bindCardActions(node, {
          select: () => {
            document.getElementById('statusAss').textContent = `Selezionata ${o.compagnia} con premio ${euro(o.premio)} (risparmio ${euro(risp)}).`;
          }
        });
      });
      document.getElementById('risparmioTotAss').textContent = euro(rispTot);
    }
    function initAss() {
      const tipo = document.getElementById('tipoVeicolo');
      const usoField = document.getElementById('usoAutoField');
      const uso = document.getElementById('usoAuto');
      const targa = document.getElementById('targa');
      const err = document.getElementById('targaError');
      document.getElementById('premioAttuale').value = statoAss.premioAttuale;
      const toggleUso = () => { usoField.classList.toggle('hide', tipo.value !== 'auto'); };
      toggleUso(); tipo.addEventListener('change', toggleUso);
      document.getElementById('addVeicolo').addEventListener('click', () => {
        const targ = (targa.value || '').toUpperCase().trim();
        if (!validaTarga(targ)) { err.textContent = 'Targa non valida. Usa formato AB123CD.'; targa.focus(); return; }
        err.textContent = '';
        statoAss.veicoli.push({ tipo: tipo.value, uso: tipo.value==='auto' ? uso.value : null, targa: targ });
        targa.value = '';
        renderVeicoli();
      });
      document.getElementById('resetVeicoli').addEventListener('click', () => { statoAss.veicoli = []; renderVeicoli(); store.del('ass.veicoli'); });
      document.getElementById('cercaAss').addEventListener('click', () => {
        if (!statoAss.veicoli.length) { alert('Aggiungi almeno un veicolo.'); return; }
        cercaOfferteAss();
      });
      renderVeicoli();
    }

    /* ============================================================
       TELEFONIA: stato, filtri, rendering
       ============================================================ */
    const statoTel = { keep: store.get('tel.keep', 'si'), operatore: store.get('tel.op', ''), spesa: store.get('tel.spesa', 0) };
    function toggleTelKeep() {
      const keep = document.getElementById('keepNumber').value === 'si';
      document.getElementById('operatoreField').classList.toggle('hide', !keep);
      document.getElementById('spesaField').classList.toggle('hide', !keep);
      document.getElementById('nuovoNumeroBox').classList.toggle('hide', keep);
    }
    function renderTel(lista) {
      const cont = document.getElementById('offerteTel'); cont.innerHTML = '';
      if (!lista.length) { cont.innerHTML = '<p class="muted">Nessuna offerta trovata con i filtri selezionati.</p>'; return; }
      lista.forEach(o => {
        const html = cardOfferHTML({
          titolo: o.operatore,
          badges: [...o.reti, o.tipo, o.uso],
          righe: [
            { label:'Rinnovo', val: euro(o.rinn)+'/mese' },
            { label:'Dati inclusi', val: `${o.det.dati} GB` },
            { label:'Tecnologia', val: o.det.tech },
            { label:'Velocità', val: `${o.det.vel} Mbps` },
            { label:'UE', val: `${o.det.ue} GB` },
          ]
        }, [ {key:'riepilogo', label:'Vedi riepilogo'} ]);
        const wrapper = document.createElement('div'); wrapper.innerHTML = html; const node = wrapper.firstChild;
        cont.appendChild(node);
        bindCardActions(node, {
          riepilogo: () => {
            document.getElementById('telPrima').textContent = euro(o.prima);
            document.getElementById('telSim').textContent = euro(o.sim);
            document.getElementById('telAtt').textContent = euro(o.attiv);
            document.getElementById('telRinn').textContent = euro(o.rinn);
            document.getElementById('telUE').textContent = o.det.ue;
            document.getElementById('telTech').textContent = o.det.tech;
            document.getElementById('telDati').textContent = `${o.det.dati} GB`;
            document.getElementById('telVel').textContent = `${o.det.vel} Mbps`;
            document.getElementById('telHot').textContent = o.det.hotspot ? 'Sì' : 'No';
            document.getElementById('telCall').textContent = o.det.call;
            document.getElementById('telSms').textContent = o.det.sms;
            // Se keep == si, mostra risparmio
            const keep = document.getElementById('keepNumber').value === 'si';
            if (keep) {
              const spesa = Number(document.getElementById('spesaMensile').value || 0);
              const diff = spesa ? (spesa - o.rinn) : 0;
              document.getElementById('telStatus').textContent = `Risparmio stimato rispetto a ${spesa?euro(spesa):'spesa attuale'}: ${euro(diff)}`;
            } else {
              document.getElementById('telStatus').textContent = `Offerta selezionata: ${o.operatore}.`;
            }
          }
        });
      });
    }
    function cercaTel() {
      const tipo = document.getElementById('tipoTel').value;
      const uso = document.getElementById('usoTel').value;
      const gigaMin = Number(document.getElementById('gigaTel').value);
      const reteSel = $$('.rete-cb').filter(c=>c.checked).map(c=>c.value);
      const filtrate = mock.telefonia.filter(o => (
        o.tipo === tipo && o.uso === uso && reteSel.every(r => o.reti.includes(r)) && o.det.dati >= gigaMin
      ));
      renderTel(filtrate);
    }
    function initTel() {
      document.getElementById('keepNumber').value = statoTel.keep;
      document.getElementById('operatoreAttuale').value = statoTel.operatore;
      document.getElementById('spesaMensile').value = statoTel.spesa;
      toggleTelKeep();
      document.getElementById('keepNumber').addEventListener('change', () => {
        const v = document.getElementById('keepNumber').value; statoTel.keep = v; store.set('tel.keep', v); toggleTelKeep();
      });
      document.getElementById('operatoreAttuale').addEventListener('change', () => { const v = document.getElementById('operatoreAttuale').value; statoTel.operatore = v; store.set('tel.op', v); });
      document.getElementById('spesaMensile').addEventListener('input', () => { const v = Number(document.getElementById('spesaMensile').value||0); statoTel.spesa = v; store.set('tel.spesa', v); });
      document.getElementById('gigaTel').addEventListener('input', () => { document.getElementById('gigaTelHelp').textContent = `${document.getElementById('gigaTel').value} GB`; });
      document.getElementById('cercaTel').addEventListener('click', cercaTel);
      renderTel(mock.telefonia);
    }

    /* ============================================================
       INTERNET: stato, rendering, risparmio
       ============================================================ */
    const statoInt = { segmento: 'privato', attivo: 'si', fornitore: '', spesa: 0 };
    function renderInternet(lista) {
      const cont = document.getElementById('offerteInternet'); cont.innerHTML = '';
      lista.forEach(o => {
        const html = cardOfferHTML({
          titolo: o.titolo,
          badges: [o.tech, o.vel],
          righe: [
            { label:'Costo iniziale', val: euro(o.iniziale) },
            { label:'Rinnovo mensile', val: euro(o.mensile) },
            { label:'Modem', val: o.modem },
            { label:'Vincoli', val: o.vincoli }
          ]
        }, [ { key:'riepilogo', label:'Vedi riepilogo' } ]);
        const wrapper = document.createElement('div'); wrapper.innerHTML = html; const node = wrapper.firstChild;
        cont.appendChild(node);
        bindCardActions(node, {
          riepilogo: () => {
            document.getElementById('intIniziale').textContent = euro(o.iniziale);
            document.getElementById('intMensile').textContent = euro(o.mensile);
            document.getElementById('intTech').textContent = o.tech;
            document.getElementById('intVel').textContent = o.vel;
            document.getElementById('intModem').textContent = o.modem;
            document.getElementById('intVincoli').textContent = o.vincoli;
            const attivo = document.getElementById('giaInternet').value === 'si';
            const spesa = Number(document.getElementById('spesaInternet').value || 0);
            const diff = attivo && spesa ? (spesa - o.mensile) : 0;
            document.getElementById('intSave').textContent = euro(diff);
            document.getElementById('intStatus').textContent = `Selezionata offerta ${o.titolo}.`;
          }
        });
      });
    }
    function initInternet() {
      const segSel = document.getElementById('internetBusiness');
      const attSel = document.getElementById('giaInternet');
      const toggleAttivo = () => { document.getElementById('internetAttivoBox').classList.toggle('hide', attSel.value !== 'si'); };
      segSel.addEventListener('change', () => {
        const seg = segSel.value; statoInt.segmento = seg;
        const lista = seg === 'business' ? mock.internet_business : mock.internet_priv;
        renderInternet(lista);
      });
      attSel.addEventListener('change', toggleAttivo);
      toggleAttivo();
      renderInternet(mock.internet_priv);
    }

    /* ============================================================
       STREAMING: filtri e rendering
       ============================================================ */
    function renderStreaming(piano) {
      const cont = document.getElementById('offerteStreaming'); cont.innerHTML = '';
      mock.streaming.forEach(s => {
        const p = s.piani[piano];
        const html = cardOfferHTML({
          titolo: s.piattaforma,
          badges: [piano],
          righe: [
            { label:'Prezzo/mese', val: euro(p.prezzo) },
            { label:'Risoluzione', val: p.res },
            { label:'Schermi', val: p.schermi },
            { label:'Extra', val: p.extra }
          ]
        }, [ { key:'riepilogo', label:'Seleziona piano' } ]);
        const wrapper = document.createElement('div'); wrapper.innerHTML = html; const node = wrapper.firstChild;
        cont.appendChild(node);
        bindCardActions(node, {
          riepilogo: () => {
            document.getElementById('strPiattaforma').textContent = s.piattaforma;
            document.getElementById('strPiano').textContent = piano;
            document.getElementById('strPrezzo').textContent = euro(p.prezzo);
            document.getElementById('strRes').textContent = p.res;
            document.getElementById('strSchermi').textContent = p.schermi;
            document.getElementById('strExtra').textContent = p.extra;
            document.getElementById('strStatus').textContent = `Selezionato piano ${piano} su ${s.piattaforma}.`;
          }
        });
      });
    }
    function initStreaming() {
      document.getElementById('cercaStreaming').addEventListener('click', () => {
        const piano = document.getElementById('pianoStreaming').value; renderStreaming(piano);
      });
      renderStreaming('base');
    }

    /* ============================================================
       LUCE & GAS: parsing mock, offerte e riepilogo
       ============================================================ */
    const statoLG = { segmento: 'privati', consumo_kwh: 2200, consumo_smc: 800, spesa: 0 };
    async function parseBolletta(file) {
      if (!file) return null;
      const isText = file.type.startsWith('text');
      if (isText) {
        const txt = await file.text();
        const kMatch = txt.match(/kWh\s*:\s*(\d+)/i);
        const sMatch = txt.match(/Smc\s*:\s*(\d+)/i);
        const kwh = kMatch ? Number(kMatch[1]) : statoLG.consumo_kwh;
        const smc = sMatch ? Number(sMatch[1]) : statoLG.consumo_smc;
        return { kwh, smc };
      }
      // Per PDF/immagini, simuliamo
      return { kwh: statoLG.consumo_kwh, smc: statoLG.consumo_smc };
    }
    function costoAnnuale(off, kwh, smc) {
      const luce = (off.prezzo_kwh || 0) * kwh;
      const gas  = (off.prezzo_smc || 0) * smc;
      return luce + gas + (off.canone || 0) * 12;
    }
    function renderLG(lista, kwh=statoLG.consumo_kwh, smc=statoLG.consumo_smc) {
      const cont = document.getElementById('offerteLG'); cont.innerHTML = '';
      lista.forEach(o => {
        const ann = costoAnnuale(o, kwh, smc);
        const html = cardOfferHTML({
          titolo: o.titolo,
          badges: [o.tipo],
          righe: [
            { label:'Prezzo kWh', val: euro(o.prezzo_kwh) },
            { label:'Prezzo Smc', val: euro(o.prezzo_smc) },
            { label:'Canone', val: euro(o.canone)+'/mese' },
            { label:'Spesa annua stimata', val: euro(ann) },
            { label:'Note', val: o.note }
          ]
        }, [ { key:'riepilogo', label:'Vedi riepilogo' } ]);
        const wrapper = document.createElement('div'); wrapper.innerHTML = html; const node = wrapper.firstChild;
        cont.appendChild(node);
        bindCardActions(node, {
          riepilogo: () => {
            document.getElementById('lgConsumo').textContent = `${kwh} kWh; ${smc} Smc`;
            document.getElementById('lgSpesa').textContent = euro(ann);
            document.getElementById('lgTipo').textContent = o.tipo;
            const base = statoLG.spesa || ann + 120; // simuliamo una spesa attuale maggiore
            document.getElementById('lgSave').textContent = euro(base - ann);
            document.getElementById('lgStatus').textContent = `Selezionata offerta ${o.titolo}.`;
          }
        });
      });
    }
    function initLG() {
      const segSel = document.getElementById('lgSegmento');
      segSel.addEventListener('change', () => {
        const seg = segSel.value; statoLG.segmento = seg;
        const lista = seg === 'aziende' ? mock.lucegas_bus : mock.lucegas_priv;
        renderLG(lista);
      });
      document.getElementById('analizzaBolletta').addEventListener('click', async () => {
        const file = document.getElementById('fileBolletta').files[0];
        const parsed = await parseBolletta(file);
        const kwh = parsed ? parsed.kwh : statoLG.consumo_kwh;
        const smc = parsed ? parsed.smc : statoLG.consumo_smc;
        document.getElementById('lgConsumo').textContent = `${kwh} kWh; ${smc} Smc`;
        document.getElementById('lgStatus').textContent = 'Analisi effettuata (mock). Seleziona un’offerta per vedere risparmio.';
        const lista = statoLG.segmento === 'aziende' ? mock.lucegas_bus : mock.lucegas_priv;
        renderLG(lista, kwh, smc);
      });
      renderLG(mock.lucegas_priv);
    }

    /* ============================================================
       MUTUO: calcolo rata, preventivi mock
       ============================================================ */
    function rataMensile(importo, anni, tanPerc) {
      const i = (tanPerc/100) / 12; // tasso mensile
      const n = anni * 12; // numero rate
      if (i === 0) return importo / n;
      return importo * (i / (1 - Math.pow(1+i, -n)));
    }
    function renderMutuo(importo, anni, tanPerc) {
      const cont = document.getElementById('offerteMutuo'); cont.innerHTML='';
      const rata = rataMensile(importo, anni, tanPerc);
      mock.mutuo_banche.forEach(b => {
        // Generiamo una rata comparabile con TAN della banca, non quello inserito
        const rataBanca = rataMensile(importo, anni, b.tan);
        const html = cardOfferHTML({
          titolo: b.banca,
          righe: [
            { label:'TAN', val: `${b.tan.toFixed(2)}%` },
            { label:'TAEG', val: `${b.taeg.toFixed(2)}%` },
            { label:'Rata stimata', val: euro(rataBanca) },
            { label:'Spese accessorie', val: euro(b.spese) }
          ]
        }, [ { key:'riepilogo', label:'Vedi riepilogo' } ]);
        const wrapper = document.createElement('div'); wrapper.innerHTML = html; const node = wrapper.firstChild;
        cont.appendChild(node);
        bindCardActions(node, {
          riepilogo: () => {
            document.getElementById('mutuoRata').textContent = euro(rataBanca);
            document.getElementById('mutuoTassi').textContent = `${b.tan.toFixed(2)}% / ${b.taeg.toFixed(2)}%`;
            document.getElementById('mutuoBanca').textContent = b.banca;
            document.getElementById('mutuoNote').textContent = `Spese accessorie: ${euro(b.spese)}. Stima indicativa.`;
            document.getElementById('mutuoStatus').textContent = `Selezionato preventivo di ${b.banca}.`;
          }
        });
      });
    }
    function initMutuo() {
      document.getElementById('calcolaMutuo').addEventListener('click', () => {
        const imp = Number(document.getElementById('importoMutuo').value || 0);
        const anni = Number(document.getElementById('durataMutuo').value || 20);
        const tan = Number(document.getElementById('tassoAnn').value || 3.5);
        if (!imp || imp < 10000) { alert('Inserisci un importo valido (>= 10.000€).'); return; }
        renderMutuo(imp, anni, tan);
      });
      document.getElementById('resetMutuo').addEventListener('click', () => {
        document.getElementById('offerteMutuo').innerHTML = '';
        document.getElementById('mutuoRata').textContent = '€0.00';
        document.getElementById('mutuoTassi').textContent = '-';
        document.getElementById('mutuoBanca').textContent = '-';
        document.getElementById('mutuoNote').textContent = '-';
        document.getElementById('mutuoStatus').textContent = 'Inserisci i dati e calcola i preventivi.';
      });
    }

    /* ============================================================
       Inizializzazione generale
       ============================================================ */
    function init() {
      initTheme();
      window.addEventListener('hashchange', applyRoute);
      applyRoute();
      initAss();
      initTel();
      initInternet();
      initStreaming();
      initLG();
      initMutuo();
    }
    document.addEventListener('DOMContentLoaded', init);
    </script>
</body>
</html>
