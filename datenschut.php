<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Datenschutzerklärung - Minecraft Server Team</title>
    <link rel="Website icon" href="NevtroxIcon_withoutBG.png">
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: { primary: "#4CAF50", secondary: "#8B5D33" },
            borderRadius: {
              none: "0px",
              sm: "4px",
              DEFAULT: "8px",
              md: "12px",
              lg: "16px",
              xl: "20px",
              "2xl": "24px",
              "3xl": "32px",
              full: "9999px",
              button: "8px",
            },
          },
        },
      };
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=VT323&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <style>
      :where([class^="ri-"])::before { content: "\f3c2"; }
      body {
        background-color: #1a1a1a;
        color: #e0e0e0;
        font-family: 'VT323', monospace;
      }
      .minecraft-btn {
        background-color: #545454;
        border: 2px solid #000;
        box-shadow: inset 0 5px 0 0 rgba(255, 255, 255, 0.2), inset 0 -5px 0 0 rgba(0, 0, 0, 0.3);
        transition: all 0.1s;
      }
      .minecraft-btn:hover {
        background-color: #6b6b6b;
      }
      .minecraft-btn:active {
        box-shadow: inset 0 2px 0 0 rgba(255, 255, 255, 0.2), inset 0 -2px 0 0 rgba(0, 0, 0, 0.3);
        transform: translateY(2px);
      }
      .privacy-section {
        background-color: #2c2c2c;
        border: 3px solid #3a3a3a;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
      }
      .privacy-section:hover {
        border-color: #4CAF50;
      }
      .toc-link {
        transition: all 0.2s;
      }
      .toc-link:hover {
        color: #4CAF50;
        transform: translateX(5px);
      }
    </style>
  </head>
  <body>
    <!-- Header mit Navigation -->
    <header class="bg-[#1a1a1a] border-b-4 border-primary sticky top-0 z-50">
      <div
        class="container mx-auto px-4 py-3 flex justify-between items-center"
      >
        <a
          href=" "
          data-readdy="true"
          class="text-3xl font-['Pacifico'] text-white"
          >logo</a
        >
        <!-- Mobile Menu Button -->
        <button
          id="mobile-menu-button"
          class="lg:hidden w-10 h-10 flex items-center justify-center text-white"
        >
          <i class="ri-menu-line ri-2x"></i>
        </button>
        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex space-x-8 text-xl">
          <a
            href="./"
            data-readdy="true"
            class="text-white hover:text-primary transition-colors"
            >Zurück zur Hauptseite</a
          >
        </nav>
      </div>
      <!-- Mobile Navigation -->
      <nav
        id="mobile-menu"
        class="hidden bg-[#1a1a1a] border-t border-[#3a3a3a] lg:hidden"
      >
        <div
          class="container mx-auto px-4 py-2 flex flex-col space-y-3 text-xl"
        >
          <a
            href="./"
            data-readdy="true"
            class="text-white hover:text-primary transition-colors py-2"
            >Zurück zur Hauptseite</a
          >
        </div>
      </nav>
    </header>

    <!-- Hauptinhalt -->
    <main class="container mx-auto px-4 py-12">
      <!-- Zurück-Button und Titel -->
      <div class="flex flex-col md:flex-row justify-between items-center mb-10">
        <a
          href="index.php"
          data-readdy="true"
          class="minecraft-btn text-white px-4 py-2 text-xl !rounded-button whitespace-nowrap mb-4 md:mb-0 flex items-center"
        >
          <i class="ri-arrow-left-line mr-2"></i> Zurück zur Hauptseite
        </a>
        <h1 class="text-4xl md:text-5xl font-bold text-primary text-center">
          Datenschutzerklärung
        </h1>
      </div>

      <!-- Inhaltsverzeichnis und Inhalt -->
      <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        <!-- Inhaltsverzeichnis -->
        <div class="lg:col-span-1">
          <div class="privacy-section p-6 !rounded-lg sticky top-24">
            <h2 class="text-2xl font-bold mb-4 text-primary">
              Inhaltsverzeichnis
            </h2>
            <ul class="space-y-3">
              <li class="toc-link flex items-center">
                <i class="ri-arrow-right-line mr-2 text-primary"></i>
                <a href="#einleitung" class="text-gray-300 hover:text-primary"
                  >1. Einleitung</a
                >
              </li>
              <li class="toc-link flex items-center">
                <i class="ri-arrow-right-line mr-2 text-primary"></i>
                <a
                  href="#datenerhebung"
                  class="text-gray-300 hover:text-primary"
                  >2. Datenerhebung</a
                >
              </li>
              <li class="toc-link flex items-center">
                <i class="ri-arrow-right-line mr-2 text-primary"></i>
                <a
                  href="#serverprotokolle"
                  class="text-gray-300 hover:text-primary"
                  >3. Serverprotokolle</a
                >
              </li>
              <li class="toc-link flex items-center">
                <i class="ri-arrow-right-line mr-2 text-primary"></i>
                <a href="#cookies" class="text-gray-300 hover:text-primary"
                  >4. Cookies</a
                >
              </li>
              <li class="toc-link flex items-center">
                <i class="ri-arrow-right-line mr-2 text-primary"></i>
                <a href="#spielerdaten" class="text-gray-300 hover:text-primary"
                  >5. Spielerdaten</a
                >
              </li>
              <li class="toc-link flex items-center">
                <i class="ri-arrow-right-line mr-2 text-primary"></i>
                <a
                  href="#bewerbungsdaten"
                  class="text-gray-300 hover:text-primary"
                  >6. Bewerbungsdaten</a
                >
              </li>
              <li class="toc-link flex items-center">
                <i class="ri-arrow-right-line mr-2 text-primary"></i>
                <a
                  href="#betroffenenrechte"
                  class="text-gray-300 hover:text-primary"
                  >7. Betroffenenrechte</a
                >
              </li>
              <li class="toc-link flex items-center">
                <i class="ri-arrow-right-line mr-2 text-primary"></i>
                <a
                  href="#datensicherheit"
                  class="text-gray-300 hover:text-primary"
                  >8. Datensicherheit</a
                >
              </li>
              <li class="toc-link flex items-center">
                <i class="ri-arrow-right-line mr-2 text-primary"></i>
                <a href="#kontakt" class="text-gray-300 hover:text-primary"
                  >9. Kontakt</a
                >
              </li>
            </ul>
          </div>
        </div>

        <!-- Hauptinhalt -->
        <div class="lg:col-span-3 space-y-8">
          <!-- Einleitung -->
          <section id="einleitung" class="privacy-section p-6 !rounded-lg">
            <h2
              class="text-3xl font-bold mb-4 text-primary border-b-2 border-primary pb-2"
            >
              1. Einleitung
            </h2>
            <div class="space-y-4 text-gray-300">
              <p>
                Wir freuen uns über dein Interesse an unserem Minecraft-Server.
                Der Schutz deiner persönlichen Daten ist uns ein wichtiges
                Anliegen. Daher möchten wir dich in dieser Datenschutzerklärung
                darüber informieren, welche Daten wir erheben, wie wir sie
                verwenden und welche Rechte du hast.
              </p>
              <p>
                Diese Datenschutzerklärung gilt für die Nutzung unseres
                Minecraft-Servers, unserer Website und alle damit verbundenen
                Dienste wie Discord, Foren und Bewerbungsformulare.
              </p>
              <p>Verantwortlich für die Datenverarbeitung ist:</p>
              <div class="bg-[#1a1a1a] p-4 !rounded-lg">
                <p><strong>gemäß § 5 DDG</strong></p>
                <p>Daniel Kreie</p>
                <p> 16 </p>
                <p> 34434 Borgentreich/Natzungen </p>
                <p> Deutschland </p>
                <p> Kontakt </p>
                <p> Telefon: +49 160 3455324 </p>
                <p> E-Mail: nicerecordtv@gmail.com </p> 
                <p> Verantwortlich für den Inhalt </p>
                <p> Daniel Kreie </p> 
              </div>
            </div>
          </section>

          <!-- Datenerhebung -->
          <section id="datenerhebung" class="privacy-section p-6 !rounded-lg">
            <h2
              class="text-3xl font-bold mb-4 text-primary border-b-2 border-primary pb-2"
            >
              2. Datenerhebung und -verarbeitung
            </h2>
            <div class="space-y-4 text-gray-300">
              <p>
                Wir erheben und verarbeiten personenbezogene Daten nur, soweit
                dies zur Bereitstellung unserer Dienste erforderlich ist. Die
                Erhebung und Verarbeitung erfolgt auf Grundlage der folgenden
                Rechtsgrundlagen:
              </p>
              <ul class="list-disc pl-6 space-y-2">
                <li>Art. 6 Abs. 1 lit. a DSGVO (Einwilligung)</li>
                <li>Art. 6 Abs. 1 lit. b DSGVO (Vertragserfüllung)</li>
                <li>Art. 6 Abs. 1 lit. f DSGVO (berechtigtes Interesse)</li>
              </ul>
              <p>Wir erheben folgende Daten:</p>
              <ul class="list-disc pl-6 space-y-2">
                <li>
                  <strong>Minecraft-Nutzername und UUID:</strong> Zur
                  Identifikation auf dem Server
                </li>
                <li>
                  <strong>IP-Adresse:</strong> Zur Verbindungsherstellung und
                  Sicherheitsmaßnahmen
                </li>
                <li>
                  <strong>E-Mail-Adresse:</strong> Bei Registrierung auf der
                  Website oder für Bewerbungen
                </li>
                <li>
                  <strong>Discord-Nutzername:</strong> Bei Nutzung unseres
                  Discord-Servers
                </li>
                <li>
                  <strong>Spielbezogene Daten:</strong> Spielstatistiken,
                  Inventar, Spielfortschritt
                </li>
                <li>
                  <strong>Bewerbungsdaten:</strong> Bei Bewerbungen für das
                  Server-Team
                </li>
              </ul>
              <p>
                Die Daten werden nur so lange gespeichert, wie es für den
                jeweiligen Zweck erforderlich ist oder gesetzliche
                Aufbewahrungsfristen bestehen.
              </p>
            </div>
          </section>

          <!-- Serverprotokolle -->
          <section
            id="serverprotokolle"
            class="privacy-section p-6 !rounded-lg"
          >
            <h2
              class="text-3xl font-bold mb-4 text-primary border-b-2 border-primary pb-2"
            >
              3. Serverprotokolle und technische Daten
            </h2>
            <div class="space-y-4 text-gray-300">
              <p>
                Bei der Nutzung unseres Minecraft-Servers werden automatisch
                technische Daten in Serverprotokollen erfasst. Diese Daten
                umfassen:
              </p>
              <ul class="list-disc pl-6 space-y-2">
                <li>IP-Adresse</li>
                <li>Zeitpunkt und Dauer der Verbindung</li>
                <li>Minecraft-Version</li>
                <li>Verwendete Mods (falls zutreffend)</li>
                <li>Spielaktivitäten (Chatnachrichten, Befehle, etc.)</li>
              </ul>
              <p>Diese Daten werden für folgende Zwecke verarbeitet:</p>
              <ul class="list-disc pl-6 space-y-2">
                <li>Gewährleistung der Serversicherheit</li>
                <li>Erkennung und Verhinderung von Missbrauch</li>
                <li>Technische Problemlösung</li>
                <li>Verbesserung des Spielerlebnisses</li>
              </ul>
              <p>
                Die Serverprotokolle werden in der Regel für 30 Tage gespeichert
                und anschließend automatisch gelöscht, sofern keine längere
                Speicherung aus Sicherheitsgründen erforderlich ist.
              </p>
              <p>
                Chatnachrichten werden für einen Zeitraum von bis zu 90 Tagen
                gespeichert, um bei Regelverstößen entsprechend handeln zu
                können.
              </p>
            </div>
          </section>

          <!-- Cookies -->
          <section id="cookies" class="privacy-section p-6 !rounded-lg">
            <h2
              class="text-3xl font-bold mb-4 text-primary border-b-2 border-primary pb-2"
            >
              4. Cookies und Tracking
            </h2>
            <div class="space-y-4 text-gray-300">
              <p>
                Unsere Website verwendet Cookies, um die Benutzerfreundlichkeit
                zu verbessern. Cookies sind kleine Textdateien, die auf deinem
                Endgerät gespeichert werden.
              </p>
              <p>Wir verwenden folgende Arten von Cookies:</p>
              <ul class="list-disc pl-6 space-y-2">
                <li>
                  <strong>Technisch notwendige Cookies:</strong> Diese sind
                  erforderlich, um grundlegende Funktionen der Website zu
                  gewährleisten (z.B. Login-Status).
                </li>
                <li>
                  <strong>Funktionale Cookies:</strong> Diese ermöglichen uns,
                  deine Präferenzen zu speichern (z.B. Spracheinstellungen).
                </li>
                <li>
                  <strong>Analyse-Cookies:</strong> Diese helfen uns, die
                  Nutzung unserer Website zu analysieren und zu verbessern.
                </li>
              </ul>
              <p>
                Du kannst deine Browser-Einstellungen so anpassen, dass Cookies
                abgelehnt werden oder du über das Setzen von Cookies informiert
                wirst. Bitte beachte, dass einige Funktionen unserer Website
                möglicherweise nicht ordnungsgemäß funktionieren, wenn du
                Cookies deaktivierst.
              </p>
              <p>Wir verwenden auf unserer Website folgende Analyse-Tools:</p>
              <div class="bg-[#1a1a1a] p-4 !rounded-lg">
                <p><strong>Google Analytics</strong></p>
                <p>
                  Zweck: Analyse des Nutzerverhaltens zur Optimierung unserer
                  Website
                </p>
                <p>
                  Datenschutzhinweise:
                  <a
                    href="https://policies.google.com/privacy"
                    class="text-primary hover:underline"
                    target="_blank"
                    >https://policies.google.com/privacy</a
                  >
                </p>
                <p>
                  Opt-Out:
                  <a
                    href="https://tools.google.com/dlpage/gaoptout"
                    class="text-primary hover:underline"
                    target="_blank"
                    >https://tools.google.com/dlpage/gaoptout</a
                  >
                </p>
              </div>
            </div>
          </section>

          <!-- Spielerdaten -->
          <section id="spielerdaten" class="privacy-section p-6 !rounded-lg">
            <h2
              class="text-3xl font-bold mb-4 text-primary border-b-2 border-primary pb-2"
            >
              5. Spielerdaten und Statistiken
            </h2>
            <div class="space-y-4 text-gray-300">
              <p>
                Während der Nutzung unseres Minecraft-Servers werden
                verschiedene spielbezogene Daten gespeichert:
              </p>
              <ul class="list-disc pl-6 space-y-2">
                <li>
                  <strong>Spielstatistiken:</strong> Spielzeit, gesammelte
                  Ressourcen, getötete Monster, etc.
                </li>
                <li>
                  <strong>Inventar und Enderchest:</strong> Gespeicherte Items
                  und Ressourcen
                </li>
                <li>
                  <strong>Grundstücke und Bauten:</strong> Von dir beanspruchte
                  Gebiete und erstellte Bauwerke
                </li>
                <li>
                  <strong>Wirtschaftsdaten:</strong> Ingame-Währung,
                  Transaktionen, Shops
                </li>
                <li>
                  <strong>Rangdaten:</strong> Spielerränge, Berechtigungen,
                  Errungenschaften
                </li>
              </ul>
              <p>Diese Daten werden für folgende Zwecke verarbeitet:</p>
              <ul class="list-disc pl-6 space-y-2">
                <li>Bereitstellung des Spielerlebnisses</li>
                <li>Speicherung des Spielfortschritts</li>
                <li>Durchführung von Events und Wettbewerben</li>
                <li>Schutz vor Diebstahl und Griefing</li>
                <li>Verbesserung des Spielerlebnisses</li>
              </ul>
              <p>
                Die Spielerdaten werden für die Dauer deiner Aktivität auf
                unserem Server gespeichert. Bei längerer Inaktivität (in der
                Regel 6 Monate) können deine Spielerdaten archiviert oder
                gelöscht werden. Du hast jederzeit das Recht, die Löschung
                deiner Daten zu beantragen.
              </p>
            </div>
          </section>

          <!-- Bewerbungsdaten -->
          <section id="bewerbungsdaten" class="privacy-section p-6 !rounded-lg">
            <h2
              class="text-3xl font-bold mb-4 text-primary border-b-2 border-primary pb-2"
            >
              6. Bewerbungsdaten
            </h2>
            <div class="space-y-4 text-gray-300">
              <p>
                Wenn du dich für eine Position in unserem Server-Team bewirbst,
                erheben und verarbeiten wir folgende Daten:
              </p>
              <ul class="list-disc pl-6 space-y-2">
                <li>Name / Nickname</li>
                <li>E-Mail-Adresse</li>
                <li>Minecraft-Benutzername</li>
                <li>Discord-Benutzername</li>
                <li>Alter</li>
                <li>Minecraft-Erfahrung</li>
                <li>
                  Motivationsschreiben und weitere von dir bereitgestellte
                  Informationen
                </li>
              </ul>
              <p>
                Diese Daten werden ausschließlich für den Bewerbungsprozess
                verwendet und nur den zuständigen Teammitgliedern zugänglich
                gemacht.
              </p>
              <p>
                Die Bewerbungsdaten werden für folgende Zeiträume gespeichert:
              </p>
              <ul class="list-disc pl-6 space-y-2">
                <li>
                  <strong>Bei erfolgreicher Bewerbung:</strong> Für die Dauer
                  deiner Tätigkeit im Team und darüber hinaus gemäß gesetzlicher
                  Aufbewahrungsfristen
                </li>
                <li>
                  <strong>Bei abgelehnter Bewerbung:</strong> Bis zu 6 Monate
                  nach Abschluss des Bewerbungsverfahrens, um bei Rückfragen
                  antworten zu können
                </li>
              </ul>
              <p>
                Du hast jederzeit das Recht, deine Bewerbung zurückzuziehen und
                die Löschung deiner Bewerbungsdaten zu beantragen.
              </p>
            </div>
          </section>

          <!-- Betroffenenrechte -->
          <section
            id="betroffenenrechte"
            class="privacy-section p-6 !rounded-lg"
          >
            <h2
              class="text-3xl font-bold mb-4 text-primary border-b-2 border-primary pb-2"
            >
              7. Betroffenenrechte (DSGVO)
            </h2>
            <div class="space-y-4 text-gray-300">
              <p>
                Nach der Datenschutz-Grundverordnung (DSGVO) stehen dir folgende
                Rechte zu:
              </p>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-[#1a1a1a] p-4 !rounded-lg">
                  <h3 class="text-xl font-bold mb-2 text-primary">
                    Auskunftsrecht
                  </h3>
                  <p>
                    Du hast das Recht, eine Bestätigung darüber zu verlangen, ob
                    wir personenbezogene Daten über dich verarbeiten, und
                    Auskunft über diese Daten zu erhalten.
                  </p>
                </div>
                <div class="bg-[#1a1a1a] p-4 !rounded-lg">
                  <h3 class="text-xl font-bold mb-2 text-primary">
                    Recht auf Berichtigung
                  </h3>
                  <p>
                    Du hast das Recht, die Berichtigung unrichtiger
                    personenbezogener Daten zu verlangen sowie die
                    Vervollständigung unvollständiger Daten.
                  </p>
                </div>
                <div class="bg-[#1a1a1a] p-4 !rounded-lg">
                  <h3 class="text-xl font-bold mb-2 text-primary">
                    Recht auf Löschung
                  </h3>
                  <p>
                    Du hast das Recht, die Löschung deiner personenbezogenen
                    Daten zu verlangen, wenn bestimmte Voraussetzungen erfüllt
                    sind.
                  </p>
                </div>
                <div class="bg-[#1a1a1a] p-4 !rounded-lg">
                  <h3 class="text-xl font-bold mb-2 text-primary">
                    Recht auf Einschränkung
                  </h3>
                  <p>
                    Du hast das Recht, die Einschränkung der Verarbeitung deiner
                    personenbezogenen Daten zu verlangen.
                  </p>
                </div>
                <div class="bg-[#1a1a1a] p-4 !rounded-lg">
                  <h3 class="text-xl font-bold mb-2 text-primary">
                    Recht auf Datenübertragbarkeit
                  </h3>
                  <p>
                    Du hast das Recht, deine personenbezogenen Daten in einem
                    strukturierten, gängigen und maschinenlesbaren Format zu
                    erhalten.
                  </p>
                </div>
                <div class="bg-[#1a1a1a] p-4 !rounded-lg">
                  <h3 class="text-xl font-bold mb-2 text-primary">
                    Widerspruchsrecht
                  </h3>
                  <p>
                    Du hast das Recht, aus Gründen, die sich aus deiner
                    besonderen Situation ergeben, jederzeit gegen die
                    Verarbeitung deiner Daten Widerspruch einzulegen.
                  </p>
                </div>
              </div>
              <p class="mt-4">
                Um deine Rechte auszuüben, kontaktiere uns bitte unter den im
                Abschnitt "Kontakt" angegebenen Kontaktdaten. Bitte beachte,
                dass wir zur Identitätsprüfung weitere Informationen von dir
                anfordern können.
              </p>
              <p>
                Du hast außerdem das Recht, dich bei einer
                Datenschutzaufsichtsbehörde zu beschweren, wenn du der Ansicht
                bist, dass die Verarbeitung deiner personenbezogenen Daten gegen
                die DSGVO verstößt.
              </p>
            </div>
          </section>

          <!-- Datensicherheit -->
          <section id="datensicherheit" class="privacy-section p-6 !rounded-lg">
            <h2
              class="text-3xl font-bold mb-4 text-primary border-b-2 border-primary pb-2"
            >
              8. Datensicherheit
            </h2>
            <div class="space-y-4 text-gray-300">
              <p>
                Wir treffen angemessene technische und organisatorische
                Maßnahmen, um deine personenbezogenen Daten gegen zufällige oder
                vorsätzliche Manipulationen, Verlust, Zerstörung oder den
                Zugriff unberechtigter Personen zu schützen.
              </p>
              <p>Unsere Sicherheitsmaßnahmen umfassen unter anderem:</p>
              <ul class="list-disc pl-6 space-y-2">
                <li>
                  <strong>Verschlüsselung:</strong> Unsere Website verwendet
                  SSL/TLS-Verschlüsselung für die sichere Übertragung von Daten.
                </li>
                <li>
                  <strong>Zugangsbeschränkungen:</strong> Nur autorisierte
                  Personen haben Zugang zu personenbezogenen Daten.
                </li>
                <li>
                  <strong>Regelmäßige Backups:</strong> Um Datenverlust zu
                  vermeiden, führen wir regelmäßige Backups durch.
                </li>
                <li>
                  <strong>Firewall und Anti-Virus-Software:</strong> Zum Schutz
                  vor externen Angriffen.
                </li>
                <li>
                  <strong>Regelmäßige Updates:</strong> Unsere Systeme werden
                  regelmäßig aktualisiert, um Sicherheitslücken zu schließen.
                </li>
              </ul>
              <p>
                Trotz aller Maßnahmen kann keine vollständige Sicherheit
                garantiert werden. Wir empfehlen daher, auch selbst auf die
                Sicherheit deiner Daten zu achten, beispielsweise durch die
                Verwendung sicherer Passwörter.
              </p>
              <div class="bg-[#1a1a1a] p-4 !rounded-lg mt-4">
                <h3 class="text-xl font-bold mb-2 text-primary">
                  Meldung von Datenschutzvorfällen
                </h3>
                <p>
                  Im Falle einer Verletzung des Schutzes personenbezogener Daten
                  werden wir diese gemäß den gesetzlichen Bestimmungen an die
                  zuständige Aufsichtsbehörde melden. Wenn die Verletzung
                  voraussichtlich ein hohes Risiko für deine persönlichen Rechte
                  und Freiheiten darstellt, werden wir dich unverzüglich darüber
                  informieren.
                </p>
              </div>
            </div>
          </section>

          <!-- Kontakt -->
          <section id="kontakt" class="privacy-section p-6 !rounded-lg">
            <h2
              class="text-3xl font-bold mb-4 text-primary border-b-2 border-primary pb-2"
            >
              9. Kontaktmöglichkeiten für datenschutzbezogene Anfragen
            </h2>
            <div class="space-y-4 text-gray-300">
              <p>
                Für alle Fragen zum Thema Datenschutz, zur Ausübung deiner
                Rechte oder für sonstige datenschutzbezogene Anliegen stehen dir
                folgende Kontaktmöglichkeiten zur Verfügung:
              </p>
              <div class="bg-[#1a1a1a] p-6 !rounded-lg">
                <h3 class="text-xl font-bold mb-4 text-primary">
                  Datenschutzbeauftragter
                </h3>
                <div
                  class="flex flex-col md:flex-row md:items-center justify-between"
                >
                  <div>
                      <p><strong>Name:</strong>Daniel Kreie</p>
                      <p><strong>E-Mail:</strong>nicerecordtv@gmail.com</p>
                      <p><strong>Telefon:</strong>+49 160 3455324</p>
                      <p><strong>Adresse:</strong>Egelsberg 16 34434 Borgentreich/Natzungen Deutschland</p>
                  </div>
                  <button
                    id="copy-contact"
                    class="minecraft-btn text-white px-4 py-2 mt-4 md:mt-0 !rounded-button whitespace-nowrap flex items-center"
                  >
                    <i class="ri-file-copy-line mr-2"></i> Kontaktdaten kopieren
                  </button>
                </div>
              </div>
              <p class="mt-4">
                Bei Anfragen zur Ausübung deiner Rechte bitten wir dich, uns
                möglichst genau mitzuteilen, auf welche personenbezogenen Daten
                sich deine Anfrage bezieht. In einigen Fällen können wir
                zusätzliche Informationen anfordern, um deine Identität zu
                bestätigen.
              </p>
              <p>
                Wir werden uns bemühen, deine Anfragen so schnell wie möglich zu
                bearbeiten. Bitte beachte, dass wir gemäß DSGVO bis zu einem
                Monat Zeit haben, um auf deine Anfrage zu antworten. In
                komplexen Fällen kann diese Frist um weitere zwei Monate
                verlängert werden.
              </p>
            </div>
          </section>

          <!-- Aktualisierung -->
          <section class="privacy-section p-6 !rounded-lg">
            <h2
              class="text-3xl font-bold mb-4 text-primary border-b-2 border-primary pb-2"
            >
              10. Aktualisierung der Datenschutzerklärung
            </h2>
            <div class="space-y-4 text-gray-300">
              <p>
                Wir behalten uns vor, diese Datenschutzerklärung bei Bedarf zu
                aktualisieren, um sie an geänderte Rechtslagen oder bei
                Änderungen unserer Datenverarbeitungsaktivitäten anzupassen.
              </p>
              <p>
                Die aktuelle Version der Datenschutzerklärung ist stets auf
                unserer Website verfügbar. Bei wesentlichen Änderungen werden
                wir dich, soweit möglich, vorab informieren.
              </p>
              <p class="mt-4">
                <strong>Stand der Datenschutzerklärung:</strong> 17. April 2025
              </p>
            </div>
          </section>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <footer class="bg-[#121212] pt-12 pb-6">
      <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
          <!-- AGB -->
          <div>
            <h4 class="text-2xl font-bold mb-4 text-white">AGB</h4>
            <div class="text-gray-400 space-y-2">
              <p>
                Die folgenden Allgemeinen Geschäftsbedingungen gelten für die
                Nutzung unseres Minecraft-Servers.
              </p>
              <p>1. Die Nutzung des Servers erfolgt auf eigene Gefahr.</p>
              <p>
                2. Das Serverteam behält sich das Recht vor, Spieler ohne
                Vorwarnung vom Server zu verweisen.
              </p>
              <a href="AGB.php" class="text-primary hover:underline"
                >Vollständige AGB lesen</a
              >
            </div>
          </div>
          <!-- Impressum -->
          <div>
            <h4 class="text-2xl font-bold mb-4 text-white">Impressum</h4>
            <div class="text-gray-400 space-y-2">
              <p><strong>Vertreten durch:</strong> Daniel Kreie</p>
              <p><strong>Adresse:</strong>Egelsberg 16 34434 Borgentreich/Natzungen Deutschland</p>
              <p><strong>E-Mail:</strong> nicerecordtv@gmail.com</p>
              <p><strong>Telefon:</strong> +49 160 3455324</p>
            </div>
          </div>
          <!-- Datenschutz -->
          <div>
            <h4 class="text-2xl font-bold mb-4 text-white">Datenschutz</h4>
            <div class="text-gray-400 space-y-2">
              <p>Wir nehmen den Schutz Ihrer persönlichen Daten sehr ernst.</p>
              <p>
                1. Wir speichern Ihre Minecraft-UUID und IP-Adresse für
                Sicherheitszwecke.
              </p>
              <p>
                2. Bewerbungsdaten werden nur für den Bewerbungsprozess
                verwendet.
              </p>
              <p>
                Sie befinden sich aktuell auf der vollständigen
                Datenschutzerklärung.
              </p>
            </div>
          </div>
        </div>
        <div
          class="border-t border-[#3a3a3a] pt-6 flex flex-col md:flex-row justify-between items-center"
        >
          <p class="text-gray-400 mb-4 md:mb-0">
            &copy; 2025 Minecraft Server. Alle Rechte vorbehalten.
          </p>
          <div class="flex space-x-4">
            <a
              href="#"
              class="w-10 h-10 flex items-center justify-center text-gray-400 hover:text-primary transition-colors"
            >
              <i class="ri-discord-fill ri-lg"></i>
            </a>
            <a
              href="#"
              class="w-10 h-10 flex items-center justify-center text-gray-400 hover:text-primary transition-colors"
            >
              <i class="ri-youtube-fill ri-lg"></i>
            </a>
        
          </div>
        </div>
        <div class="text-center mt-6 text-gray-500 text-sm">
          <p>
            Minecraft ist eine eingetragene Marke von Mojang AB. Diese Website
            steht in keiner Verbindung zu Mojang AB.
          </p>
        </div>
      </div>
    </footer>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById("mobile-menu-button");
        const mobileMenu = document.getElementById("mobile-menu");

        mobileMenuButton.addEventListener("click", function () {
          mobileMenu.classList.toggle("hidden");
          if (mobileMenu.classList.contains("hidden")) {
            mobileMenuButton.innerHTML = '<i class="ri-menu-line ri-2x"></i>';
          } else {
            mobileMenuButton.innerHTML = '<i class="ri-close-line ri-2x"></i>';
          }
        });

        // Close mobile menu when clicking on a link
        const mobileLinks = mobileMenu.querySelectorAll("a");
        mobileLinks.forEach((link) => {
          link.addEventListener("click", function () {
            mobileMenu.classList.add("hidden");
            mobileMenuButton.innerHTML = '<i class="ri-menu-line ri-2x"></i>';
          });
        });
      });

      document.addEventListener("DOMContentLoaded", function () {
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
          anchor.addEventListener("click", function (e) {
            e.preventDefault();

            const targetId = this.getAttribute("href");
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
              window.scrollTo({
                top: targetElement.offsetTop - 100,
                behavior: "smooth",
              });
            }
          });
        });
      });

      document.addEventListener("DOMContentLoaded", function () {
        // Copy contact information
        const copyContactBtn = document.getElementById("copy-contact");

        if (copyContactBtn) {
          copyContactBtn.addEventListener("click", function () {
            const contactInfo =
              "Datenschutzbeauftragter:\n" +
              "Name: Daniel Kreie\n" +
              "E-Mail: nicerecordtv@gmail.com\n" +
              "Telefon: +49 160 3455324\n" +
              "Adresse: Egelsberg 16 34434 Borgentreich/Natzungen Deutschland";

            navigator.clipboard.writeText(contactInfo).then(function () {
              // Change button text temporarily
              const originalText = copyContactBtn.innerHTML;
              copyContactBtn.innerHTML =
                '<i class="ri-check-line mr-2"></i> Kopiert!';

              setTimeout(function () {
                copyContactBtn.innerHTML = originalText;
              }, 2000);
            });
          });
        }
      });
    </script>
  </body>
</html>
