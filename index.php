<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nevtrox-Staterseite</title>
<link rel="Website icon" href="NevtroxIcon_withoutBG.png">
<script src="https://cdn.tailwindcss.com/3.4.16"></script>
<script>tailwind.config={theme:{extend:{colors:{primary:'#4CAF50',secondary:'#8B5D33'},borderRadius:{'none':'0px','sm':'4px',DEFAULT:'8px','md':'12px','lg':'16px','xl':'20px','2xl':'24px','3xl':'32px','full':'9999px','button':'8px'}}}}</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
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
.team-card {
background-color: #2c2c2c;
border: 3px solid #3a3a3a;
box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
transition: transform 0.3s, box-shadow 0.3s;
}
.team-card:hover {
transform: translateY(-5px);
box-shadow: 0 10px 15px rgba(0, 0, 0, 0.6);
border-color: #4CAF50;
}
.custom-checkbox {
appearance: none;
width: 20px;
height: 20px;
background-color: #2c2c2c;
border: 2px solid #545454;
cursor: pointer;
position: relative;
}
.custom-checkbox:checked {
background-color: #4CAF50;
border-color: #4CAF50;
}
.custom-checkbox:checked:after {
content: '';
position: absolute;
left: 6px;
top: 2px;
width: 5px;
height: 10px;
border: solid white;
border-width: 0 2px 2px 0;
transform: rotate(45deg);
}
.custom-radio {
appearance: none;
width: 20px;
height: 20px;
background-color: #2c2c2c;
border: 2px solid #545454;
border-radius: 50%;
cursor: pointer;
position: relative;
}
.custom-radio:checked {
border-color: #4CAF50;
}
.custom-radio:checked:after {
content: '';
position: absolute;
width: 10px;
height: 10px;
background-color: #4CAF50;
border-radius: 50%;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
}
.custom-switch {
position: relative;
display: inline-block;
width: 50px;
height: 24px;
}
.custom-switch input {
opacity: 0;
width: 0;
height: 0;
}
.slider {
position: absolute;
cursor: pointer;
top: 0;
left: 0;
right: 0;
bottom: 0;
background-color: #2c2c2c;
transition: .4s;
border-radius: 24px;
border: 2px solid #545454;
}
.slider:before {
position: absolute;
content: "";
height: 16px;
width: 16px;
left: 4px;
bottom: 2px;
background-color: #e0e0e0;
transition: .4s;
border-radius: 50%;
}
input:checked + .slider {
background-color: #4CAF50;
border-color: #4CAF50;
}
input:checked + .slider:before {
transform: translateX(24px);
}
.pixel-border {
position: relative;
z-index: 1;
}
.pixel-border:before {
content: "";
position: absolute;
z-index: -1;
top: 5px;
left: 5px;
right: -5px;
bottom: -5px;
border: 3px solid #3a3a3a;
}
</style>
</head>
<body>
<!-- Header mit Navigation -->
<header class="bg-[#1a1a1a] border-b-4 border-primary sticky top-0 z-50">
<div class="container mx-auto px-4 py-3 flex justify-between items-center">
<a href="./" class="text-3xl font-['Pacifico'] text-white">Nevtrox</a>
<!-- Mobile Menu Button -->
<button id="mobile-menu-button" class="lg:hidden w-10 h-10 flex items-center justify-center text-white">
<i class="ri-menu-line ri-2x"></i>
</button>
<!-- Desktop Navigation -->
<nav class="hidden lg:flex space-x-8 text-xl">
<a href="#team" class="text-white hover:text-primary transition-colors">Team</a>
<a href="#bewerbung" class="text-white hover:text-primary transition-colors">Bewerbung</a>
<a href="#wiki" class="text-white hover:text-primary transition-colors">Wiki</a>
<a href="#server" class="text-white hover:text-primary transition-colors">Server Info</a>
<a href="login.php">
  <button 
    class="minecraft-btn text-white px-4 py-2 text-sm inline-block !rounded-button whitespace-nowrap bg-[#5c6bc0]">
    <i class="ri-gamepad-line mr-2"></i> Login
  </button>
</a>

</nav>
</div>
<!-- Mobile Navigation -->
<nav id="mobile-menu" class="hidden bg-[#1a1a1a] border-t border-[#3a3a3a] lg:hidden">
<div class="container mx-auto px-4 py-2 flex flex-col space-y-3 text-xl">
<a href="#team" class="text-white hover:text-primary transition-colors py-2">Team</a>
<a href="#bewerbung" class="text-white hover:text-primary transition-colors py-2">Bewerbung</a>
<a href="#wiki" class="text-white hover:text-primary transition-colors py-2">Wiki</a>
<a href="#server" class="text-white hover:text-primary transition-colors py-2">Server Info</a>
<a href="login.php">
  <button 
    class="minecraft-btn text-white px-4 py-2 text-sm inline-block !rounded-button whitespace-nowrap bg-[#5c6bc0]">
    <i class="ri-gamepad-line mr-2"></i> Login
  </button>
</a>
</div>
</nav>
</header>
<!-- Hero Banner -->
<section class="relative h-[500px] flex items-center" style="background-image: url('https://readdy.ai/api/search-image?query=A%20dramatic%20Minecraft%20landscape%20with%20mountains%2C%20forests%2C%20and%20a%20medieval%20castle%20in%20the%20distance.%20The%20scene%20has%20a%20dark%20atmospheric%20lighting%20with%20torches%20illuminating%20parts%20of%20the%20landscape.%20The%20image%20should%20have%20space%20on%20the%20left%20side%20for%20text%20overlay%20while%20the%20detailed%20Minecraft%20world%20is%20more%20visible%20on%20the%20right%20side.&width=1920&height=1080&seq=1&orientation=landscape'); background-size: cover; background-position: center;">
<div class="absolute inset-0 bg-black bg-opacity-50"></div>
<div class="container mx-auto px-4 relative z-10">
<div class="max-w-2xl">
<h1 class="text-5xl md:text-6xl font-bold mb-4 text-white">Willkommen bei Nevtrox.de</h1>
<p class="text-xl md:text-2xl mb-8 text-gray-200">Endeckt unseren Einfach vantastischen Server!</p>
<div class="flex flex-wrap gap-4">
<a href="#team" class="minecraft-btn text-white px-6 py-3 text-xl !rounded-button whitespace-nowrap">Team kennenlernen</a>
<a href="#bewerbung" class="minecraft-btn text-white px-6 py-3 text-xl !rounded-button whitespace-nowrap">Jetzt bewerben</a>
</div>
</div>
</div>
</section>
<!-- Team Section -->
<section id="team" class="py-16 bg-[#1a1a1a]">
<div class="container mx-auto px-4">
<div class="text-center mb-12 pixel-border inline-block mx-auto p-6 bg-[#2c2c2c]">
<h2 class="text-4xl md:text-5xl font-bold mb-4 text-primary">Unser Team</h2>
<p class="text-xl text-gray-300">Die Köpfe hinter unserem Minecraft-Server</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<!-- Team Member 1 -->
<div class="team-card p-6 !rounded-lg">
<div class="mb-4 aspect-square overflow-hidden !rounded-lg" style="background-image: url('https://mc-heads.net/avatar/Rewan11/500/nohelm.png'); background-size: cover; background-position: center;"></div>
<h3 class="text-2xl font-bold mb-2 text-primary">Rewan11</h3>
<p class="text-lg font-semibold mb-2 text-secondary">Owner</p>
<p class="text-gray-300">Gründer des Serversfür alle administrativen Entscheidungen. Spielt Minecraft seit der Beta und liebt komplexe Redstone-Konstruktionen.</p>
</div>
<!-- Team Member 2 -->
<div class="team-card p-6 !rounded-lg">
<div class="mb-4 aspect-square overflow-hidden !rounded-lg" style="background-image: url('https://mc-heads.net/avatar/NiceRecord/500/nohelm.png'); background-size: cover; background-position: center;"></div>
<h3 class="text-2xl font-bold mb-2 text-primary">NiceRecord</h3>
<p class="text-lg font-semibold mb-2 text-secondary">Owner</p>
<p class="text-gray-300">Kümmert sich um alle Community-Anliegen und organisiert Events. Bekannt für ihre kreativen Bauideen und freundliche Art bei der Konfliktlösung.</p>
</div>
<!-- Team Member 3 -->
<div class="team-card p-6 !rounded-lg">
<div class="mb-4 aspect-square overflow-hidden !rounded-lg" style="background-image: url('https://mc-heads.net/avatar/MysticNich/500/nohelm.png'); background-size: cover; background-position: center;"></div>
<h3 class="text-2xl font-bold mb-2 text-primary">MysticNich</h3>
<p class="text-lg font-semibold mb-2 text-secondary">Developer</p>
<p class="text-gray-300">Zuständig für unseren Discord Bot.</p>
</div>
<!-- Team Member 4 -->
<div class="team-card p-6 !rounded-lg">
<div class="mb-4 aspect-square overflow-hidden !rounded-lg" style="background-image: url('samyx300.jpg'); background-size: cover; background-position: center;"></div>
<h3 class="text-2xl font-bold mb-2 text-primary">Samyx300</h3>
<p class="text-lg font-semibold mb-2 text-secondary">Developer</p>
<p class="text-gray-300">Verantwortlich für Server-Bauprojekte und Spawn-Gestaltung. Seine mittelalterlichen Burgen und detaillierten Städte sind legendär in der Community.</p>
</div>
<!-- Team Member 5 -->
<div class="team-card p-6 !rounded-lg">
<div class="mb-4 aspect-square overflow-hidden !rounded-lg" style="background-image: url('lukashasmeta.jpg'); background-size: cover; background-position: center;"></div>
<h3 class="text-2xl font-bold mb-2 text-primary">Lukashasmeta</h3>
<p class="text-lg font-semibold mb-2 text-secondary">Developer</p>
<p class="text-gray-300">Überwacht die Einhaltung der Serverregeln und hilft bei Konflikten. Bekannt für seine faire und geduldige Art bei der Moderation des Chats.</p>
</div>
<!-- Team Member 6 -->
<div class="team-card p-6 !rounded-lg">
<div class="mb-4 aspect-square overflow-hidden !rounded-lg" style="background-image: url('https://mc-heads.net/avatar/Nova_boy/500/nohelm.png'); background-size: cover; background-position: center;"></div>
<h3 class="text-2xl font-bold mb-2 text-primary">Nova_boy</h3>
<p class="text-lg font-semibold mb-2 text-secondary">Moderator</p>
<p class="text-gray-300">Plant und organisiert alle Server-Events und Wettbewerbe. Ihre kreativen Ideen sorgen immer für Begeisterung und hohe Teilnehmerzahlen.</p>
</div>
<!-- Team Member 7 -->
<div class="team-card p-6 !rounded-lg">
<div class="mb-4 aspect-square overflow-hidden !rounded-lg" style="background-image: url('https://mc-heads.net/avatar/thekingbasti19/500/nohelm.png'); background-size: cover; background-position: center;"></div>
<h3 class="text-2xl font-bold mb-2 text-primary">TheKingBasti19</h3>
<p class="text-lg font-semibold mb-2 text-secondary">SrSupport</p>
<p class="text-gray-300">Erste Anlaufstelle für Spielerfragen und Probleme. Bekannt für seine Geduld und umfassende Kenntnis aller Server-Systeme und Plugins.</p>
</div>
<!-- Team Member 8 -->
<div class="team-card p-6 !rounded-lg">
<div class="mb-4 aspect-square overflow-hidden !rounded-lg" style="background-image: url('https://mc-heads.net/avatar/BarukoHD/500/nohelm.png'); background-size: cover; background-position: center;"></div>
<h3 class="text-2xl font-bold mb-2 text-primary">BarukoHD</h3>
<p class="text-lg font-semibold mb-2 text-secondary">Supporter</p>
<p class="text-gray-300">Erstellt Videos und Streams über den Server. Seine unterhaltsamen Let's Plays haben viele neue Spieler auf den Server gebracht.</p>
</div>
<!-- Team Member 9 -->
<div class="team-card p-6 !rounded-lg">
<div class="mb-4 aspect-square overflow-hidden !rounded-lg" style="background-image: url('https://mc-heads.net/avatar/DvD8209/500/nohelm.png'); background-size: cover; background-position: center;"></div>
<h3 class="text-2xl font-bold mb-2 text-primary">!DvD8209</h3>
<p class="text-lg font-semibold mb-2 text-secondary">Supporter</p>
<p class="text-gray-300">Entwickelt maßgeschneiderte Plugins für den Server. Seine innovativen Ideen haben viele einzigartige Spielmechaniken auf den Server gebracht.</p>
</div>
<!-- Team Member 10 -->
<div class="team-card p-6 !rounded-lg">
<div class="mb-4 aspect-square overflow-hidden !rounded-lg" style="background-image: url('https://mc-heads.net/avatar/sili0710/500/nohelm.png'); background-size: cover; background-position: center;"></div>
<h3 class="text-2xl font-bold mb-2 text-primary">sili0710</h3>
<p class="text-lg font-semibold mb-2 text-secondary">Builder</p>
<p class="text-gray-300">Zuständig für Serverabsicherung und Anti-Cheat-Systeme. Dank seiner Wachsamkeit ist der Server vor Hackern und Cheatern sicher.</p>
</div>
<div class="team-card p-6 !rounded-lg">
<div class="mb-4 aspect-square overflow-hidden !rounded-lg" style="background-image: url(''); background-size: cover; background-position: center;"></div>
<h3 class="text-2xl font-bold mb-2 text-primary"> - </h3>
<p class="text-lg font-semibold mb-2 text-secondary">Builder</p>
<p class="text-gray-300">Zuständig für Serverabsicherung und Anti-Cheat-Systeme. Dank seiner Wachsamkeit ist der Server vor Hackern und Cheatern sicher.</p>
</div>
<div class="team-card p-6 !rounded-lg">
<div class="mb-4 aspect-square overflow-hidden !rounded-lg" style="background-image: url('https://mc-heads.net/avatar/Clyex/500/nohelm.png'); background-size: cover; background-position: center;"></div>
<h3 class="text-2xl font-bold mb-2 text-primary">Clyex</h3>
<p class="text-lg font-semibold mb-2 text-secondary">Creator</p>
<p class="text-gray-300">Zuständig für Serverabsicherung und Anti-Cheat-Systeme. Dank seiner Wachsamkeit ist der Server vor Hackern und Cheatern sicher.</p>
</div>
<div class="team-card p-6 !rounded-lg">
<div class="mb-4 aspect-square overflow-hidden !rounded-lg" style="background-image: url('https://mc-heads.net/avatar/Goldbrocken/500/nohelm.png'); background-size: cover; background-position: center;"></div>
<h3 class="text-2xl font-bold mb-2 text-primary">Goldbrocken</h3>
<p class="text-lg font-semibold mb-2 text-secondary">Creator
<p class="text-gray-300">Zuständig für Serverabsicherung und Anti-Cheat-Systeme. Dank seiner Wachsamkeit ist der Server vor Hackern und Cheatern sicher.</p>
</div>
</div>
</div>
</div>
</section>
<!-- Bewerbungsbereich -->
<section id="bewerbung" class="py-16 bg-[#212121]">
<div class="container mx-auto px-4">
<div class="text-center mb-12">
<h2 class="text-4xl md:text-5xl font-bold mb-4 text-primary">Werde Teil unseres Teams</h2>
<p class="text-xl text-gray-300">Wir suchen engagierte Spieler, die unser Team verstärken möchten</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
<!-- Offene Positionen -->
<div>
<h3 class="text-3xl font-bold mb-6 text-white border-b-2 border-primary pb-2">Offene Positionen</h3>
<!-- Position 1 -->
<div class="mb-8 bg-[#2c2c2c] p-6 !rounded-lg">
<h4 class="text-2xl font-bold mb-2 text-primary">Moderator</h4>
<div class="mb-4">
<h5 class="text-xl font-semibold mb-2 text-white">Anforderungen:</h5>
<ul class="list-disc pl-5 text-gray-300 space-y-1">
<li>Mindestens 16 Jahre alt</li>
<li>Mindestens 3 Monate aktiv auf unserem Server</li>
<li>Gute Kommunikationsfähigkeiten</li>
<li>Konfliktlösungskompetenz</li>
<li>Mindestens 10 Stunden Zeit pro Woche</li>
</ul>
</div>
<div>
<h5 class="text-xl font-semibold mb-2 text-white">Aufgaben:</h5>
<ul class="list-disc pl-5 text-gray-300 space-y-1">
<li>Überwachung des Server-Chats</li>
<li>Durchsetzung der Serverregeln</li>
<li>Hilfestellung für neue Spieler</li>
<li>Konfliktlösung zwischen Spielern</li>
<li>Teilnahme an Team-Meetings</li>
</ul>
</div>
</div>
<!-- Position 2 -->
<div class="mb-8 bg-[#2c2c2c] p-6 !rounded-lg">
<h4 class="text-2xl font-bold mb-2 text-primary">Builder</h4>
<div class="mb-4">
<h5 class="text-xl font-semibold mb-2 text-white">Anforderungen:</h5>
<ul class="list-disc pl-5 text-gray-300 space-y-1">
<li>Exzellente Baufähigkeiten in Minecraft</li>
<li>Portfolio mit eigenen Bauprojekten</li>
<li>Kreativität und Detailverliebtheit</li>
<li>Teamfähigkeit</li>
<li>Mindestens 8 Stunden Zeit pro Woche</li>
</ul>
</div>
<div>
<h5 class="text-xl font-semibold mb-2 text-white">Aufgaben:</h5>
<ul class="list-disc pl-5 text-gray-300 space-y-1">
<li>Gestaltung von Server-Bauprojekten</li>
<li>Mitarbeit an der Spawn-Gestaltung</li>
<li>Erstellung von Event-Arenen</li>
<li>Gestaltung von thematischen Bauten</li>
<li>Unterstützung bei Community-Bauprojekten</li>
</ul>
</div>
</div>
<!-- Position 3 -->
<div class="bg-[#2c2c2c] p-6 !rounded-lg">
<h4 class="text-2xl font-bold mb-2 text-primary">Event-Manager</h4>
<div class="mb-4">
<h5 class="text-xl font-semibold mb-2 text-white">Anforderungen:</h5>
<ul class="list-disc pl-5 text-gray-300 space-y-1">
<li>Kreativität und Organisationstalent</li>
<li>Gute Kommunikationsfähigkeiten</li>
<li>Erfahrung mit Minecraft-Events</li>
<li>Zuverlässigkeit</li>
<li>Mindestens 6 Stunden Zeit pro Woche</li>
</ul>
</div>
<div>
<h5 class="text-xl font-semibold mb-2 text-white">Aufgaben:</h5>
<ul class="list-disc pl-5 text-gray-300 space-y-1">
<li>Planung und Organisation von Server-Events</li>
<li>Entwicklung neuer Event-Ideen</li>
<li>Durchführung von Events</li>
<li>Koordination mit dem Builder-Team</li>
<li>Bekanntmachung von Events in der Community</li>
</ul>
</div>
</div>
</div>
<!-- Bewerbungsformular -->
<div>
<h3 class="text-3xl font-bold mb-6 text-white border-b-2 border-primary pb-2">Bewerbungsformular</h3>
<form class="bg-[#2c2c2c] p-6 !rounded-lg">
<div class="mb-4">
<label for="name" class="block text-white text-lg mb-2">Name / Nickname</label>
<input type="text" id="name" class="w-full bg-[#1a1a1a] text-white p-3 !rounded-lg border-2 border-[#3a3a3a] focus:border-primary outline-none" required>
</div>
<div class="mb-4">
<label for="email" class="block text-white text-lg mb-2">E-Mail</label>
<input type="email" id="email" class="w-full bg-[#1a1a1a] text-white p-3 !rounded-lg border-2 border-[#3a3a3a] focus:border-primary outline-none" required>
</div>
<div class="mb-4">
<label for="minecraft" class="block text-white text-lg mb-2">Minecraft Username</label>
<input type="text" id="minecraft" class="w-full bg-[#1a1a1a] text-white p-3 !rounded-lg border-2 border-[#3a3a3a] focus:border-primary outline-none" required>
</div>
<div class="mb-4">
<label for="discord" class="block text-white text-lg mb-2">Discord Username</label>
<input type="text" id="discord" class="w-full bg-[#1a1a1a] text-white p-3 !rounded-lg border-2 border-[#3a3a3a] focus:border-primary outline-none" required>
</div>
<div class="mb-4">
<label class="block text-white text-lg mb-2">Gewünschte Position</label>
<div class="space-y-2">
<div class="flex items-center">
<input type="radio" id="moderator" name="position" value="moderator" class="custom-radio mr-2" required>
<label for="moderator" class="text-gray-300">Moderator</label>
</div>
<div class="flex items-center">
<input type="radio" id="builder" name="position" value="builder" class="custom-radio mr-2">
<label for="builder" class="text-gray-300">Builder</label>
</div>
<div class="flex items-center">
<input type="radio" id="event" name="position" value="event" class="custom-radio mr-2">
<label for="event" class="text-gray-300">Event-Manager</label>
</div>
</div>
</div>
<div class="mb-4">
<label for="alter" class="block text-white text-lg mb-2">Alter</label>
<input type="number" id="alter" min="13" max="99" class="w-full bg-[#1a1a1a] text-white p-3 !rounded-lg border-2 border-[#3a3a3a] focus:border-primary outline-none" required>
</div>
<div class="mb-4">
<label for="erfahrung" class="block text-white text-lg mb-2">Minecraft-Erfahrung (in Jahren)</label>
<input type="number" id="erfahrung" min="0" max="15" class="w-full bg-[#1a1a1a] text-white p-3 !rounded-lg border-2 border-[#3a3a3a] focus:border-primary outline-none" required>
</div>
<div class="mb-4">
<label for="motivation" class="block text-white text-lg mb-2">Motivationsschreiben</label>
<textarea id="motivation" rows="5" class="w-full bg-[#1a1a1a] text-white p-3 !rounded-lg border-2 border-[#3a3a3a] focus:border-primary outline-none resize-none" required></textarea>
<p class="text-gray-400 text-sm mt-1">Erzähle uns, warum du Teil unseres Teams werden möchtest und was dich für die Position qualifiziert.</p>
</div>
<div class="mb-6">
<div class="flex items-start">
<input type="checkbox" id="datenschutz" class="custom-checkbox mt-1 mr-2" required>
<label for="datenschutz" class="text-gray-300">Ich habe die <a href="#datenschutz" class="text-primary hover:underline">Datenschutzerklärung</a> gelesen und stimme der Verarbeitung meiner Daten zu.</label>
</div>
</div>
<button type="submit" class="minecraft-btn text-white px-6 py-3 text-xl w-full !rounded-button whitespace-nowrap">Bewerbung absenden</button>
</form>
</div>
</div>
</div>
</section>
<!-- Wiki Section -->
<section id="wiki" class="py-16 bg-[#212121]">
<div class="container mx-auto px-4">
<div class="text-center mb-12">
<h2 class="text-4xl md:text-5xl font-bold mb-4 text-primary">Du brauchst Hilfe?</h2>
<p class="text-xl text-gray-300 mb-8">Schau in unser ausführliches Wiki mit Anleitungen und Tipps</p>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto mb-12">
    <div class="bg-[#2c2c2c] p-6 !rounded-lg">
        <div class="w-12 h-12 flex items-center justify-center text-primary mb-4 mx-auto">
            <i class="ri-guide-line ri-2x"></i>
        </div>
        <h3 class="text-xl font-bold mb-2 text-white">Erste Schritte</h3>
        <p class="text-gray-300">Alles was du für den Start auf unserem Server wissen musst</p>
    </div>
    <div class="bg-[#2c2c2c] p-6 !rounded-lg">
        <div class="w-12 h-12 flex items-center justify-center text-primary mb-4 mx-auto">
            <i class="ri-book-2-line ri-2x"></i>
        </div>
        <h3 class="text-xl font-bold mb-2 text-white">Befehle & Plugins</h3>
        <p class="text-gray-300">Übersicht aller wichtigen Befehle und Server-Funktionen</p>
    </div>
    <div class="bg-[#2c2c2c] p-6 !rounded-lg">
        <div class="w-12 h-12 flex items-center justify-center text-primary mb-4 mx-auto">
            <i class="ri-question-line ri-2x"></i>
        </div>
        <h3 class="text-xl font-bold mb-2 text-white">FAQ</h3>
        <p class="text-gray-300">Häufig gestellte Fragen und deren Antworten</p>
    </div>
</div>
<a href="#" class="minecraft-btn text-white px-8 py-4 text-xl inline-block !rounded-button whitespace-nowrap">
<i class="ri-book-open-line mr-2"></i> Zum Wiki
</a>
</div>
</div>
</section>
<!-- Server Info Section -->
<section id="server" class="py-16 bg-[#1a1a1a]">
<div class="container mx-auto px-4">
<div class="text-center mb-12">
<h2 class="text-4xl md:text-5xl font-bold mb-4 text-primary">Unser Server</h2>
<p class="text-xl text-gray-300">Alle Informationen zu unserem Minecraft-Server</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
<div class="bg-[#2c2c2c] p-6 !rounded-lg">
<h3 class="text-2xl font-bold mb-4 text-primary">Server-Informationen</h3>
<ul class="space-y-3 text-gray-300">
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center mr-2 text-primary">
<i class="ri-server-line"></i>
</div>
<span><strong>IP-Adresse:</strong> Nevtrox.de</span>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center mr-2 text-primary">
<i class="ri-gamepad-line"></i>
</div>
<span><strong>Version:</strong> 1.21.3 </span>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center mr-2 text-primary">
<i class="ri-group-line"></i>
</div>
<span><strong>Spieleranzahl:</strong> Max. 20 Spieler</span>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center mr-2 text-primary">
<i class="ri-global-line"></i>
</div>
<span><strong>Standort:</strong> - </span>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center mr-2 text-primary">
<i class="ri-settings-line"></i>
</div>
<span><strong>Spielmodus:</strong> Survival mit Economy und Landclaiming</span>
</li>
</ul>
</div>
<div class="bg-[#2c2c2c] p-6 !rounded-lg">
<h3 class="text-2xl font-bold mb-4 text-primary">Server-Features</h3>
<ul class="space-y-3 text-gray-300">
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center mr-2 text-primary">
<i class="ri-shield-check-line"></i>
</div>
<span><strong>Landclaiming:</strong> Schütze dein Grundstück vor anderen Spielern</span>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center mr-2 text-primary">
<i class="ri-coins-line"></i>
</div>
<span><strong>Economy:</strong> Verdiene Geld und handle mit anderen Spielern</span>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center mr-2 text-primary">
<i class="ri-store-2-line"></i>
</div>
<span><strong>Spielershops:</strong> Eröffne deinen eigenen Shop</span>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center mr-2 text-primary">
<i class="ri-calendar-event-line"></i>
</div>
<span><strong>Regelmäßige Events:</strong> Wöchentliche Events mit tollen Preisen</span>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center mr-2 text-primary">
<i class="ri-community-line"></i>
</div>
<span><strong>Aktive Community:</strong> Freundliche Spieler und hilfsbereites Team</span>
</li>
</ul>
</div>
</div>
<div class="mt-8 bg-[#2c2c2c] p-6 !rounded-lg">
<h3 class="text-2xl font-bold mb-4 text-primary">Server-Karte</h3>
<div class="aspect-video !rounded-lg overflow-hidden"  style=" background-image: url('2025-04-17_16.32.08.jpg');  background-size: cover; background-position: center;"></div>
<div class="mt-8 text-center">
    <button onclick="choosePlatform()" 
            class="minecraft-btn text-white px-8 py-4 text-xl inline-block !rounded-button whitespace-nowrap bg-[#5c6bc0]">
      <i class="ri-gamepad-line mr-2"></i> Jetzt spielen
    </button>
    <p class="text-sm mt-2 text-gray-400">Klicke und wähle deine Plattform</p>
  </div>
  
  <script>
  function choosePlatform() {
    const platform = prompt("Mit welcher Version willst du verbinden? (Java / Bedrock)");
  
    if (!platform) return;
  
    const choice = platform.toLowerCase();
  
    if (choice === "java") {
      navigator.clipboard.writeText("nevtrox.de").then(() => {
        alert("IP für Java wurde in die Zwischenablage kopiert!\nFüge sie im Minecraft-Mehrspieler-Menü ein.");
      });
    } else if (choice === "bedrock") {
        navigator.clipboard.writeText("IP: nevtrox.de Port: 19132").then(() => {
        alert("IP für Bedrock wurde in die Zwischenablage kopiert!\nFüge sie im Minecraft-Mehrspieler-Menü ein.");
      });
      alert("Ungültige Eingabe. Bitte gib 'Java' oder 'Bedrock' ein.");
    }
  }
  </script>
  
</section>
<!-- Footer -->
<footer class="bg-[#121212] pt-12 pb-6">
<div class="container mx-auto px-4">
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
<!-- AGB -->
<div id="agb">
<h4 class="text-2xl font-bold mb-4 text-white">AGB</h4>
<div class="text-gray-400 space-y-2">
<p>Die folgenden Allgemeinen Geschäftsbedingungen gelten für die Nutzung unseres Minecraft-Servers.</p>
<p>1. Die Nutzung des Servers erfolgt auf eigene Gefahr.</p>
<p>2. Das Serverteam behält sich das Recht vor, Spieler ohne Vorwarnung vom Server zu verweisen.</p>
<p>3. Gekaufte Ingame-Items können nicht zurückerstattet werden.</p>
<p>4. Der Server kann jederzeit ohne Vorankündigung gewartet oder aktualisiert werden.</p>
<a href="AGB.php" class="text-primary hover:underline">Vollständige AGB lesen</a>
</div>
</div>
<!-- Impressum -->
<div id="impressum">
<h4 class="text-2xl font-bold mb-4 text-white">Impressum</h4>
<div class="text-gray-400 space-y-2">
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
    
<p><strong> Haftungsausschluss </strong></p>
<p> Die Inhalte unserer Seiten wurden mit größter Sorgfalt erstellt. Für die Richtigkeit, Vollständigkeit und Aktualität der Inhalte können wir jedoch keine Gewähr übernehmen.</p>
    
<p><strong> Urheberrecht </strong></p>
<P> Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers.</P>
</div>
</div>
<!-- Datenschutz -->
<div id="datenschutz">
<h4 class="text-2xl font-bold mb-4 text-white">Datenschutz</h4>
<div class="text-gray-400 space-y-2">
<p>Wir nehmen den Schutz Ihrer persönlichen Daten sehr ernst.</p>
<p>1. Wir speichern Ihre Minecraft-UUID und IP-Adresse für Sicherheitszwecke.</p>
<p>2. Bewerbungsdaten werden nur für den Bewerbungsprozess verwendet.</p>
<p>3. Ihre Daten werden nicht an Dritte weitergegeben.</p>
<p>4. Sie haben jederzeit das Recht auf Auskunft, Berichtigung und Löschung Ihrer Daten.</p>
<a href="datenschut.php" class="text-primary hover:underline">Vollständige Datenschutzerklärung lesen</a>
</div>
</div>
</div>
<div class="border-t border-[#3a3a3a] pt-6 flex flex-col md:flex-row justify-between items-center">
<p class="text-gray-400 mb-4 md:mb-0">&copy; 2025 Minecraft Server. Alle Rechte vorbehalten.</p>
<div class="flex space-x-4">
<a href="https://discord.gg/uPr4CVh6ub" class="w-10 h-10 flex items-center justify-center text-gray-400 hover:text-primary transition-colors">
<i class="ri-discord-fill ri-lg"></i>
</a>
<a href="https://youtube.com/@nevtrox?si=Cb0KC_5jAGVKZ6IA" class="w-10 h-10 flex items-center justify-center text-gray-400 hover:text-primary transition-colors">
<i class="ri-youtube-fill ri-lg"></i>
</a>
</div>
</div>
<div class="text-center mt-6 text-gray-500 text-sm">
<p>Minecraft ist eine eingetragene Marke von Mojang AB. Diese Website steht in keiner Verbindung zu Mojang AB.</p>
</div>
</div>
</footer>
<script>
document.addEventListener('DOMContentLoaded', function() {
// Mobile Menu Toggle
const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');
mobileMenuButton.addEventListener('click', function() {
mobileMenu.classList.toggle('hidden');
if (mobileMenu.classList.contains('hidden')) {
mobileMenuButton.innerHTML = '<i class="ri-menu-line ri-2x"></i>';
} else {
mobileMenuButton.innerHTML = '<i class="ri-close-line ri-2x"></i>';
}
});
// Close mobile menu when clicking on a link
const mobileLinks = mobileMenu.querySelectorAll('a');
mobileLinks.forEach(link => {
link.addEventListener('click', function() {
mobileMenu.classList.add('hidden');
mobileMenuButton.innerHTML = '<i class="ri-menu-line ri-2x"></i>';
});
});
});
document.addEventListener('DOMContentLoaded', function() {
// Form validation
const bewerbungsForm = document.querySelector('form');
bewerbungsForm.addEventListener('submit', function(e) {
e.preventDefault();
// Simple validation
const name = document.getElementById('name').value;
const email = document.getElementById('email').value;
const minecraft = document.getElementById('minecraft').value;
const discord = document.getElementById('discord').value;
const motivation = document.getElementById('motivation').value;
const datenschutz = document.getElementById('datenschutz').checked;
let isValid = true;
let errorMessage = '';
if (!name) {
isValid = false;
errorMessage += 'Bitte gib deinen Namen ein.\n';
}
if (!email || !email.includes('@')) {
isValid = false;
errorMessage += 'Bitte gib eine gültige E-Mail-Adresse ein.\n';
}
if (!minecraft) {
isValid = false;
errorMessage += 'Bitte gib deinen Minecraft-Benutzernamen ein.\n';
}
if (!discord) {
isValid = false;
errorMessage += 'Bitte gib deinen Discord-Benutzernamen ein.\n';
}
if (!motivation || motivation.length < 50) {
isValid = false;
errorMessage += 'Bitte schreibe ein ausführlicheres Motivationsschreiben (mindestens 50 Zeichen).\n';
}
if (!datenschutz) {
isValid = false;
errorMessage += 'Bitte akzeptiere die Datenschutzerklärung.\n';
}
if (isValid) {
alert('Vielen Dank für deine Bewerbung! Wir werden sie prüfen und uns in Kürze bei dir melden.');
bewerbungsForm.reset();
} else {
alert('Bitte korrigiere die folgenden Fehler:\n\n' + errorMessage);
}
});
});
</script>
</body>
</html>