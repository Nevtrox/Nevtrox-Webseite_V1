<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Allgemeine Geschäftsbedingungen - Minecraft Server</title>
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
      .agb-section {
        background-color: #2c2c2c;
        border: 3px solid #3a3a3a;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
      }
      .toc-link {
        transition: all 0.2s;
      }
      .toc-link:hover {
        background-color: #3a3a3a;
        color: #4CAF50;
      }
      .toc-link.active {
        background-color: #3a3a3a;
        color: #4CAF50;
        border-left: 3px solid #4CAF50;
      }
      .back-to-top {
        opacity: 0;
        transition: opacity 0.3s;
      }
      .back-to-top.visible {
        opacity: 1;
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
          href="./"
          data-readdy="true"
          class="text-3xl font-['Pacifico'] text-white"
          >Nevtrox</a
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
            >Staterseite</a
          >         
             <a
            href="datenschut.php"
            data-readdy="true"
            class="text-white hover:text-primary transition-colors"
            >Datenschutz</a
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
            >Staterseite</a
          >
          <a
            href="datenschut.php"
            data-readdy="true"
            class="text-white hover:text-primary transition-colors py-2"
            >Datenschutz</a
          >
        </div>
      </nav>
    </header>

    <!-- AGB Banner -->
    <section
      class="relative h-[300px] flex items-center"
      style="background-image: url('https://readdy.ai/api/search-image?query=A%2520Minecraft%2520scene%2520showing%2520a%2520legal%2520document%2520or%2520scroll%2520on%2520a%2520wooden%2520table%2520with%2520bookshelves%2520in%2520the%2520background.%2520The%2520scene%2520has%2520warm%2520lighting%2520from%2520torches%2520and%2520lanterns%2520creating%2520a%2520cozy%2520library%2520atmosphere.%2520The%2520image%2520has%2520space%2520on%2520the%2520left%2520for%2520text%2520overlay%2520with%2520the%2520detailed%2520Minecraft%2520scene%2520more%2520visible%2520on%2520the%2520right.&width=1920&height=600&seq=12&orientation=landscape'); background-size: cover; background-position: center;"
    >
      <div class="absolute inset-0 bg-black bg-opacity-60"></div>
      <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl">
          <h1 class="text-5xl md:text-6xl font-bold mb-4 text-white">
            Allgemeine Geschäftsbedingungen
          </h1>
          <p class="text-xl md:text-2xl mb-8 text-gray-200">
            Nutzungsbedingungen und Regelwerk für unseren Minecraft-Server
          </p>
          <a
            href="./"
            data-readdy="true"
            class="minecraft-btn text-white px-6 py-3 text-xl !rounded-button whitespace-nowrap flex items-center"
          >
            <i class="ri-arrow-left-line mr-2"></i> Zurück zur Hauptseite
          </a>
        </div>
      </div>
    </section>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
      <div class="flex flex-col lg:flex-row gap-8">
        <!-- Sidebar / TOC -->
        <div class="lg:w-1/4">
          <div class="sticky top-24 agb-section p-6 !rounded-lg">
            <h2 class="text-2xl font-bold mb-4 text-primary">
              Inhaltsverzeichnis
            </h2>
            <ul class="space-y-2" id="toc">
              <li>
                <a
                  href="#praeambel"
                  class="toc-link block px-4 py-2 !rounded-lg"
                  >Präambel</a
                >
              </li>
              <li>
                <a
                  href="#nutzungsbedingungen"
                  class="toc-link block px-4 py-2 !rounded-lg"
                  >Nutzungsbedingungen</a
                >
              </li>
              <li>
                <a
                  href="#serverregeln"
                  class="toc-link block px-4 py-2 !rounded-lg"
                  >Serverregeln</a
                >
              </li>
              <li>
                <a
                  href="#verhaltensrichtlinien"
                  class="toc-link block px-4 py-2 !rounded-lg"
                  >Verhaltensrichtlinien</a
                >
              </li>
              <li>
                <a
                  href="#datenschutz"
                  class="toc-link block px-4 py-2 !rounded-lg"
                  >Datenschutz & Sicherheit</a
                >
              </li>
              <li>
                <a
                  href="#sanktionen"
                  class="toc-link block px-4 py-2 !rounded-lg"
                  >Sanktionen bei Regelverstößen</a
                >
              </li>
              <li>
                <a
                  href="#schlussbestimmungen"
                  class="toc-link block px-4 py-2 !rounded-lg"
                  >Schlussbestimmungen</a
                >
              </li>
            </ul>
          </div>
        </div>

        <!-- Main Content -->
        <div class="lg:w-3/4">
          <!-- Präambel -->
          <section id="praeambel" class="agb-section p-8 !rounded-lg mb-8">
            <h2 class="text-3xl font-bold mb-6 text-primary">Präambel</h2>
            <div class="space-y-4 text-lg">
              <p>
                Die nachfolgenden Allgemeinen Geschäftsbedingungen (AGB) regeln
                das Vertragsverhältnis zwischen dem Betreiber des
                Minecraft-Servers (nachfolgend "Betreiber" genannt) und den
                Nutzern des Servers (nachfolgend "Spieler" genannt).
              </p>

              <p>
                Der Betreiber stellt einen Minecraft-Server zur Verfügung, auf
                dem Spieler im Rahmen der festgelegten Regeln und Bedingungen
                spielen können. Mit der Nutzung des Servers akzeptiert der
                Spieler diese AGB vollständig und ohne Einschränkungen.
              </p>

              <p>
                Diese AGB können jederzeit ohne vorherige Ankündigung geändert
                werden. Die aktuellste Version ist stets auf unserer Website
                verfügbar. Es liegt in der Verantwortung des Spielers, sich
                regelmäßig über Änderungen zu informieren.
              </p>

              <p>
                Sollten einzelne Bestimmungen dieser AGB unwirksam sein oder
                werden, bleibt die Wirksamkeit der übrigen Bestimmungen davon
                unberührt.
              </p>
            </div>
          </section>

          <!-- Nutzungsbedingungen -->
          <section
            id="nutzungsbedingungen"
            class="agb-section p-8 !rounded-lg mb-8"
          >
            <h2 class="text-3xl font-bold mb-6 text-primary">
              Nutzungsbedingungen
            </h2>
            <div class="space-y-4 text-lg">
              <h3 class="text-2xl font-bold mb-3 text-white">
                §1 Allgemeine Bestimmungen
              </h3>
              <ol class="list-decimal pl-6 space-y-2 mb-6">
                <li>
                  Die Nutzung des Servers erfolgt auf eigene Gefahr. Der
                  Betreiber übernimmt keine Haftung für Schäden, die durch die
                  Nutzung des Servers entstehen können.
                </li>
                <li>
                  Der Spieler muss mindestens 13 Jahre alt sein, um den Server
                  nutzen zu dürfen. Spieler unter 18 Jahren benötigen die
                  Zustimmung ihrer Erziehungsberechtigten.
                </li>
                <li>
                  Der Betreiber behält sich das Recht vor, den Zugang zum Server
                  jederzeit und ohne Vorankündigung einzuschränken oder zu
                  beenden.
                </li>
                <li>
                  Der Server kann zu Wartungszwecken oder aufgrund technischer
                  Probleme vorübergehend nicht verfügbar sein. Ein Anspruch auf
                  ständige Verfügbarkeit besteht nicht.
                </li>
                <li>
                  Der Betreiber behält sich das Recht vor, den Server jederzeit
                  zu aktualisieren oder zu ändern, ohne die Spieler darüber
                  informieren zu müssen.
                </li>
              </ol>

              <h3 class="text-2xl font-bold mb-3 text-white">
                §2 Accounts und Sicherheit
              </h3>
              <ol class="list-decimal pl-6 space-y-2 mb-6">
                <li>
                  Jeder Spieler ist für die Sicherheit seines Minecraft-Accounts
                  selbst verantwortlich.
                </li>
                <li>
                  Das Teilen von Account-Informationen mit anderen Personen ist
                  strengstens untersagt.
                </li>
                <li>
                  Der Spieler ist verpflichtet, sein Passwort geheim zu halten
                  und regelmäßig zu ändern.
                </li>
                <li>
                  Bei Verdacht auf unbefugten Zugriff auf den Account ist der
                  Spieler verpflichtet, den Betreiber umgehend zu informieren.
                </li>
                <li>
                  Der Betreiber haftet nicht für Schäden, die durch Hacking,
                  Phishing oder andere Formen des unbefugten Zugriffs auf den
                  Account entstehen.
                </li>
              </ol>

              <h3 class="text-2xl font-bold mb-3 text-white">
                §3 Ingame-Käufe und Spenden
              </h3>
              <ol class="list-decimal pl-6 space-y-2">
                <li>
                  Der Betreiber bietet die Möglichkeit, virtuelle Güter und
                  Dienstleistungen gegen reales Geld zu erwerben.
                </li>
                <li>
                  Alle Käufe sind freiwillig und stellen eine Spende an den
                  Betreiber dar, um den Betrieb des Servers zu unterstützen.
                </li>
                <li>
                  Gekaufte virtuelle Güter sind nicht erstattungsfähig und
                  können nicht in reales Geld umgetauscht werden.
                </li>
                <li>
                  Der Betreiber behält sich das Recht vor, die Preise für
                  virtuelle Güter jederzeit zu ändern.
                </li>
                <li>
                  Bei Sperrung eines Accounts verfallen alle gekauften
                  virtuellen Güter ohne Anspruch auf Erstattung.
                </li>
                <li>
                  Der Handel mit virtuellen Gütern gegen reales Geld zwischen
                  Spielern ist strengstens untersagt.
                </li>
              </ol>
            </div>
          </section>

          <!-- Serverregeln -->
          <section id="serverregeln" class="agb-section p-8 !rounded-lg mb-8">
            <h2 class="text-3xl font-bold mb-6 text-primary">Serverregeln</h2>
            <div class="space-y-4 text-lg">
              <h3 class="text-2xl font-bold mb-3 text-white">
                §1 Grundlegende Spielregeln
              </h3>
              <ol class="list-decimal pl-6 space-y-2 mb-6">
                <li>
                  Das Verwenden von Cheats, Hacks, Mods oder anderen unerlaubten
                  Hilfsmitteln, die einen unfairen Spielvorteil verschaffen, ist
                  strengstens verboten.
                </li>
                <li>
                  Das Ausnutzen von Bugs oder Glitches ist untersagt und muss
                  dem Serverteam gemeldet werden.
                </li>
                <li>
                  Das Umgehen von Servereinschränkungen oder -begrenzungen ist
                  verboten.
                </li>
                <li>
                  Das Erstellen von Konstruktionen, die den Server stark
                  belasten (Lag-Maschinen), ist nicht erlaubt.
                </li>
                <li>
                  AFK-Farming ist nur in begrenztem Umfang und unter Einhaltung
                  der serverseitigen Einschränkungen erlaubt.
                </li>
              </ol>

              <h3 class="text-2xl font-bold mb-3 text-white">
                §2 Grundstücke und Bauwerke
              </h3>
              <ol class="list-decimal pl-6 space-y-2 mb-6">
                <li>
                  Jeder Spieler kann Grundstücke gemäß den serverseitigen
                  Einschränkungen beanspruchen und schützen.
                </li>
                <li>
                  Das unbefugte Betreten, Verändern oder Zerstören fremder
                  Grundstücke ist verboten.
                </li>
                <li>
                  Grundstücke, die längere Zeit nicht genutzt werden, können vom
                  Serverteam zurückgesetzt werden.
                </li>
                <li>
                  Das Bauen anstößiger oder beleidigender Strukturen ist
                  verboten.
                </li>
                <li>
                  Das Serverteam behält sich das Recht vor, Bauwerke zu
                  entfernen, die gegen diese Regeln verstoßen oder den Server
                  belasten.
                </li>
              </ol>

              <h3 class="text-2xl font-bold mb-3 text-white">
                §3 Wirtschaft und Handel
              </h3>
              <ol class="list-decimal pl-6 space-y-2">
                <li>
                  Der Handel zwischen Spielern ist erlaubt und wird gefördert.
                </li>
                <li>
                  Betrug beim Handel ist verboten und wird mit Sanktionen
                  bestraft.
                </li>
                <li>
                  Das Manipulieren der Serverökonomie durch künstliche
                  Preisabsprachen oder Monopolbildung ist untersagt.
                </li>
                <li>
                  Der Betreiber behält sich das Recht vor, in die Wirtschaft
                  einzugreifen, um Stabilität zu gewährleisten.
                </li>
                <li>
                  Das Erstellen von Shops mit unangemessenen Preisen kann vom
                  Serverteam reguliert werden.
                </li>
              </ol>
            </div>
          </section>

          <!-- Verhaltensrichtlinien -->
          <section
            id="verhaltensrichtlinien"
            class="agb-section p-8 !rounded-lg mb-8"
          >
            <h2 class="text-3xl font-bold mb-6 text-primary">
              Verhaltensrichtlinien
            </h2>
            <div class="space-y-4 text-lg">
              <h3 class="text-2xl font-bold mb-3 text-white">
                §1 Kommunikation
              </h3>
              <ol class="list-decimal pl-6 space-y-2 mb-6">
                <li>
                  Jegliche Form von Beleidigungen, Diskriminierung, Rassismus,
                  Sexismus oder Hassrede ist strengstens verboten.
                </li>
                <li>Das Spammen des Chats oder der Befehle ist untersagt.</li>
                <li>
                  Die Verwendung von Großbuchstaben im Chat sollte auf ein
                  Minimum beschränkt werden.
                </li>
                <li>
                  Das Bewerben anderer Server oder kommerzieller Dienste ist
                  nicht erlaubt.
                </li>
                <li>
                  Die Kommunikationssprache auf dem Server ist Deutsch. Andere
                  Sprachen sind in privaten Nachrichten erlaubt.
                </li>
              </ol>

              <h3 class="text-2xl font-bold mb-3 text-white">
                §2 Umgang mit anderen Spielern
              </h3>
              <ol class="list-decimal pl-6 space-y-2 mb-6">
                <li>
                  Respektvoller Umgang mit allen Spielern und dem Serverteam
                  wird erwartet.
                </li>
                <li>
                  Das Belästigen, Stalken oder Mobben anderer Spieler ist
                  verboten.
                </li>
                <li>
                  Das absichtliche Stören des Spielerlebnisses anderer Spieler
                  ist untersagt.
                </li>
                <li>
                  Konflikte sollten friedlich gelöst werden. Bei Bedarf kann das
                  Serverteam zur Schlichtung hinzugezogen werden.
                </li>
                <li>
                  Das Ausgeben als Teammitglied oder das Vortäuschen offizieller
                  Befugnisse ist verboten.
                </li>
              </ol>

              <h3 class="text-2xl font-bold mb-3 text-white">
                §3 Teamarbeit und Events
              </h3>
              <ol class="list-decimal pl-6 space-y-2">
                <li>
                  Die Teilnahme an Server-Events ist freiwillig, sollte aber
                  nach Anmeldung auch wahrgenommen werden.
                </li>
                <li>
                  Bei teambasierten Events wird faires Spielverhalten erwartet.
                </li>
                <li>
                  Das Sabotieren von Events oder Teamaktivitäten ist verboten.
                </li>
                <li>
                  Konstruktive Kritik zu Events ist willkommen, sollte aber
                  respektvoll formuliert werden.
                </li>
                <li>
                  Das Serverteam behält sich das Recht vor, Spieler von Events
                  auszuschließen, die gegen die Regeln verstoßen.
                </li>
              </ol>
            </div>
          </section>

          <!-- Datenschutz & Sicherheit -->
          <section id="datenschutz" class="agb-section p-8 !rounded-lg mb-8">
            <h2 class="text-3xl font-bold mb-6 text-primary">
              Datenschutz & Sicherheit
            </h2>
            <div class="space-y-4 text-lg">
              <h3 class="text-2xl font-bold mb-3 text-white">
                §1 Datenerhebung und -speicherung
              </h3>
              <ol class="list-decimal pl-6 space-y-2 mb-6">
                <li>
                  Der Betreiber speichert folgende Daten zur Gewährleistung des
                  Serverbetriebs: Minecraft-Benutzername, UUID, IP-Adresse,
                  Spielzeiten, Chat-Logs und Spielaktivitäten.
                </li>
                <li>
                  Bei der Bewerbung für das Serverteam werden zusätzliche
                  personenbezogene Daten erhoben, die ausschließlich für den
                  Bewerbungsprozess verwendet werden.
                </li>
                <li>
                  Die Daten werden nur so lange gespeichert, wie es für den
                  jeweiligen Zweck erforderlich ist.
                </li>
                <li>
                  Der Spieler hat das Recht auf Auskunft, Berichtigung und
                  Löschung seiner Daten, soweit dies den Serverbetrieb nicht
                  beeinträchtigt.
                </li>
                <li>
                  Eine detaillierte Datenschutzerklärung ist auf unserer Website
                  verfügbar.
                </li>
              </ol>

              <h3 class="text-2xl font-bold mb-3 text-white">
                §2 Datensicherheit
              </h3>
              <ol class="list-decimal pl-6 space-y-2 mb-6">
                <li>
                  Der Betreiber verpflichtet sich, angemessene technische und
                  organisatorische Maßnahmen zum Schutz der Spielerdaten zu
                  treffen.
                </li>
                <li>
                  Trotz aller Sicherheitsmaßnahmen kann keine vollständige
                  Sicherheit garantiert werden.
                </li>
                <li>
                  Der Spieler ist verpflichtet, seine Zugangsdaten sicher
                  aufzubewahren und nicht an Dritte weiterzugeben.
                </li>
                <li>
                  Bei Verdacht auf Datenmissbrauch ist der Betreiber umgehend zu
                  informieren.
                </li>
                <li>
                  Der Betreiber haftet nicht für Schäden, die durch unbefugten
                  Zugriff auf Spielerdaten entstehen.
                </li>
              </ol>

              <h3 class="text-2xl font-bold mb-3 text-white">
                §3 Weitergabe von Daten
              </h3>
              <ol class="list-decimal pl-6 space-y-2">
                <li>
                  Der Betreiber gibt Spielerdaten grundsätzlich nicht an Dritte
                  weiter, es sei denn, dies ist gesetzlich vorgeschrieben oder
                  zur Durchsetzung dieser AGB erforderlich.
                </li>
                <li>
                  Bei Verdacht auf strafbare Handlungen können Daten an die
                  zuständigen Behörden weitergegeben werden.
                </li>
                <li>
                  Anonymisierte Statistiken über Servernutzung und
                  Spielerverhalten können zu Analysezwecken erstellt und
                  veröffentlicht werden.
                </li>
                <li>
                  Der Betreiber kann Dienstleister einsetzen, die Zugriff auf
                  Spielerdaten haben. Diese sind vertraglich zur Einhaltung des
                  Datenschutzes verpflichtet.
                </li>
                <li>
                  Die Nutzung von Plugins Dritter kann zur Übermittlung von
                  Daten an deren Betreiber führen. Der Spieler erklärt sich
                  damit einverstanden.
                </li>
              </ol>
            </div>
          </section>

          <!-- Sanktionen bei Regelverstößen -->
          <section id="sanktionen" class="agb-section p-8 !rounded-lg mb-8">
            <h2 class="text-3xl font-bold mb-6 text-primary">
              Sanktionen bei Regelverstößen
            </h2>
            <div class="space-y-4 text-lg">
              <h3 class="text-2xl font-bold mb-3 text-white">
                §1 Arten von Sanktionen
              </h3>
              <ol class="list-decimal pl-6 space-y-2 mb-6">
                <li>
                  <strong>Verwarnung:</strong> Bei leichten Verstößen wird
                  zunächst eine Verwarnung ausgesprochen.
                </li>
                <li>
                  <strong>Mute:</strong> Bei Verstößen gegen die
                  Kommunikationsregeln kann der Spieler temporär oder permanent
                  vom Chat ausgeschlossen werden.
                </li>
                <li>
                  <strong>Temporärer Bann:</strong> Bei schwereren oder
                  wiederholten Verstößen kann der Spieler für einen bestimmten
                  Zeitraum vom Server ausgeschlossen werden.
                </li>
                <li>
                  <strong>Permanenter Bann:</strong> Bei schwerwiegenden oder
                  wiederholten Verstößen kann der Spieler dauerhaft vom Server
                  ausgeschlossen werden.
                </li>
                <li>
                  <strong>IP-Bann:</strong> In besonders schweren Fällen kann
                  die IP-Adresse des Spielers gesperrt werden, um die Erstellung
                  neuer Accounts zu verhindern.
                </li>
              </ol>

              <h3 class="text-2xl font-bold mb-3 text-white">
                §2 Durchsetzung von Sanktionen
              </h3>
              <ol class="list-decimal pl-6 space-y-2 mb-6">
                <li>
                  Sanktionen werden durch das Serverteam nach eigenem Ermessen
                  verhängt.
                </li>
                <li>
                  Die Schwere der Sanktion richtet sich nach der Schwere des
                  Verstoßes und dem Verhalten des Spielers.
                </li>
                <li>
                  Bei wiederholten Verstößen werden die Sanktionen progressiv
                  verschärft.
                </li>
                <li>
                  Das Serverteam ist nicht verpflichtet, vor der Verhängung von
                  Sanktionen zu warnen.
                </li>
                <li>
                  Die Umgehung von Sanktionen, z.B. durch Erstellung neuer
                  Accounts, führt zu verschärften Sanktionen.
                </li>
              </ol>

              <h3 class="text-2xl font-bold mb-3 text-white">
                §3 Einspruch gegen Sanktionen
              </h3>
              <ol class="list-decimal pl-6 space-y-2">
                <li>
                  Gegen verhängte Sanktionen kann Einspruch eingelegt werden.
                </li>
                <li>
                  Der Einspruch muss schriftlich per E-Mail an die angegebene
                  Kontaktadresse erfolgen.
                </li>
                <li>
                  Der Einspruch muss eine detaillierte Begründung enthalten,
                  warum die Sanktion ungerechtfertigt ist.
                </li>
                <li>
                  Über den Einspruch entscheidet die Serverleitung nach eigenem
                  Ermessen.
                </li>
                <li>
                  Die Entscheidung der Serverleitung ist endgültig und kann
                  nicht angefochten werden.
                </li>
              </ol>
            </div>
          </section>

          <!-- Schlussbestimmungen -->
          <section id="schlussbestimmungen" class="agb-section p-8 !rounded-lg">
            <h2 class="text-3xl font-bold mb-6 text-primary">
              Schlussbestimmungen
            </h2>
            <div class="space-y-4 text-lg">
              <h3 class="text-2xl font-bold mb-3 text-white">
                §1 Änderungen der AGB
              </h3>
              <ol class="list-decimal pl-6 space-y-2 mb-6">
                <li>
                  Der Betreiber behält sich das Recht vor, diese AGB jederzeit
                  und ohne vorherige Ankündigung zu ändern.
                </li>
                <li>
                  Die aktuellste Version der AGB ist stets auf unserer Website
                  verfügbar.
                </li>
                <li>
                  Es liegt in der Verantwortung des Spielers, sich regelmäßig
                  über Änderungen zu informieren.
                </li>
                <li>
                  Mit der weiteren Nutzung des Servers nach einer Änderung der
                  AGB erklärt sich der Spieler mit den geänderten Bedingungen
                  einverstanden.
                </li>
                <li>
                  Widerspricht der Spieler den geänderten AGB, ist er
                  verpflichtet, die Nutzung des Servers einzustellen.
                </li>
              </ol>

              <h3 class="text-2xl font-bold mb-3 text-white">
                §2 Salvatorische Klausel
              </h3>
              <ol class="list-decimal pl-6 space-y-2 mb-6">
                <li>
                  Sollten einzelne Bestimmungen dieser AGB unwirksam sein oder
                  werden, bleibt die Wirksamkeit der übrigen Bestimmungen davon
                  unberührt.
                </li>
                <li>
                  An die Stelle der unwirksamen Bestimmung tritt eine wirksame
                  Bestimmung, die dem wirtschaftlichen Zweck der unwirksamen
                  Bestimmung am nächsten kommt.
                </li>
                <li>Gleiches gilt für etwaige Regelungslücken.</li>
              </ol>

              <h3 class="text-2xl font-bold mb-3 text-white">
                §3 Anwendbares Recht und Gerichtsstand
              </h3>
              <ol class="list-decimal pl-6 space-y-2">
                <li>
                  Es gilt ausschließlich das Recht der Bundesrepublik
                  Deutschland unter Ausschluss des UN-Kaufrechts.
                </li>
                <li>
                  Gerichtsstand für alle Streitigkeiten aus oder im Zusammenhang
                  mit diesen AGB ist, soweit gesetzlich zulässig, der Sitz des
                  Betreibers.
                </li>
                <li>
                  Der Betreiber ist berechtigt, den Spieler auch an seinem
                  allgemeinen Gerichtsstand zu verklagen.
                </li>
              </ol>

              <div
                class="mt-8 p-6 bg-[#1a1a1a] !rounded-lg border-l-4 border-primary"
              >
                <p class="text-xl">
                  Diese Allgemeinen Geschäftsbedingungen gelten ab dem
                  17.04.2025.
                </p>
                <p class="mt-2">
                  Minecraft Server GmbH<br />
                  Musterstraße 123<br />
                  12345 Musterstadt<br />
                  Deutschland
                </p>
                <p class="mt-2">
                  E-Mail: kontakt@minecraft-server.de<br />
                  Telefon: +49 123 456789
                </p>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>

    <!-- Back to Top Button -->
    <button
      id="back-to-top"
      class="back-to-top fixed bottom-8 right-8 w-12 h-12 flex items-center justify-center bg-primary text-white !rounded-full shadow-lg"
    >
      <i class="ri-arrow-up-line ri-lg"></i>
    </button>

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
              <p>
                3. Gekaufte Ingame-Items können nicht zurückerstattet werden.
              </p>
              <p>
                4. Der Server kann jederzeit ohne Vorankündigung gewartet oder
                aktualisiert werden.
              </p>
              <p class="text-primary">
                Sie befinden sich bereits auf der vollständigen AGB-Seite.
              </p>
            </div>
          </div>
          <!-- Impressum -->
          <div>
            <h4 class="text-2xl font-bold mb-4 text-white">Impressum</h4>
            <div class="text-gray-400 space-y-2">
              <p><strong>Betreiber:</strong> Minecraft Server GmbH</p>
              <p><strong>Vertreten durch:</strong> Max Mustermann</p>
              <p>
                <strong>Adresse:</strong> Musterstraße 123, 12345 Musterstadt
              </p>
              <p><strong>E-Mail:</strong> kontakt@minecraft-server.de</p>
              <p><strong>Telefon:</strong> +49 123 456789</p>
              <p><strong>Handelsregister:</strong> HRB 12345</p>
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
              <p>3. Ihre Daten werden nicht an Dritte weitergegeben.</p>
              <p>
                4. Sie haben jederzeit das Recht auf Auskunft, Berichtigung und
                Löschung Ihrer Daten.
              </p>
              <a
                href="datenschut.html"
                data-readdy="true"
                class="text-primary hover:underline"
                >Vollständige Datenschutzerklärung lesen</a
              >
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
            <a
              href="#"
              class="w-10 h-10 flex items-center justify-center text-gray-400 hover:text-primary transition-colors"
            >
              <i class="ri-instagram-fill ri-lg"></i>
            </a>
            <a
              href="#"
              class="w-10 h-10 flex items-center justify-center text-gray-400 hover:text-primary transition-colors"
            >
              <i class="ri-twitter-x-fill ri-lg"></i>
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
        // TOC active link highlighting
        const sections = document.querySelectorAll("section[id]");
        const tocLinks = document.querySelectorAll(".toc-link");

        function highlightTocLink() {
          let scrollPosition = window.scrollY;

          // Add offset for header height
          scrollPosition += 100;

          sections.forEach((section) => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute("id");

            if (
              scrollPosition >= sectionTop &&
              scrollPosition < sectionTop + sectionHeight
            ) {
              tocLinks.forEach((link) => {
                link.classList.remove("active");
                if (link.getAttribute("href") === "#" + sectionId) {
                  link.classList.add("active");
                }
              });
            }
          });
        }

        window.addEventListener("scroll", highlightTocLink);
        highlightTocLink(); // Run once on load

        // Back to top button
        const backToTopButton = document.getElementById("back-to-top");

        function toggleBackToTopButton() {
          if (window.scrollY > 300) {
            backToTopButton.classList.add("visible");
          } else {
            backToTopButton.classList.remove("visible");
          }
        }

        window.addEventListener("scroll", toggleBackToTopButton);
        toggleBackToTopButton(); // Run once on load

        backToTopButton.addEventListener("click", function () {
          window.scrollTo({
            top: 0,
            behavior: "smooth",
          });
        });

        // Smooth scrolling for TOC links
        tocLinks.forEach((link) => {
          link.addEventListener("click", function (e) {
            e.preventDefault();

            const targetId = this.getAttribute("href");
            const targetSection = document.querySelector(targetId);

            window.scrollTo({
              top: targetSection.offsetTop - 80, // Offset for header
              behavior: "smooth",
            });
          });
        });
      });
    </script>
  </body>
</html>
