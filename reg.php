<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nevtrox Minecraft Login</title>
  <link rel="Website icon" href="NevtroxIcon_withoutBG.png">
  <script src="https://cdn.tailwindcss.com/3.4.16"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#4CAF50',
            secondary: '#8B5D33'
          },
          borderRadius: {
            'button': '8px'
          }
        }
      }
    }
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
  <style>
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
  </style>
</head>
<body>
  <!-- Header -->
  <header class="bg-[#1a1a1a] border-b-4 border-primary sticky top-0 z-50">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      <a href="index.html" class="text-3xl font-['Pacifico'] text-white">Nevtrox</a>
      <nav class="hidden lg:flex space-x-8 text-xl">
        <a href="index.html" class="text-white hover:text-primary transition-colors">Zurück zur Startseite</a>
      </nav>
    </div>
  </header>

  <!-- Login Panel -->
  <main class="flex justify-center items-center min-h-screen px-4">
    <div class="w-full max-w-md bg-[#2c2c2c] border border-[#3a3a3a] p-6 rounded-xl shadow-lg">
      <h2 class="text-2xl mb-4 text-center text-primary">Login mit Minecraft-Account</h2>
      <form action="profil.html" method="post" class="space-y-4">
        <div>
          <label for="mc-name" class="block mb-1">Minecraft-Name</label>
          <input type="text" id="mc-name" name="mc-name" required 
                 class="w-full px-4 py-2 rounded-md bg-[#2c2c2c] border border-[#545454] text-white focus:outline-none focus:ring-2 focus:ring-primary"
                 placeholder="z.B. NevtroxYT">
        </div>

        <div>
          <label for="password" class="block mb-1">Passwort</label>
          <input type="password" id="password" name="password" required 
                 class="w-full px-4 py-2 rounded-md bg-[#2c2c2c] border border-[#545454] text-white focus:outline-none focus:ring-2 focus:ring-primary"
                 placeholder="Passwort eingeben">
        </div>

        <div class="flex items-center space-x-2">
          <input type="checkbox" id="agb" name="agb" class="custom-checkbox" required>
          <label for="agb">Ich akzeptiere die <a href="agb.html" class="text-primary hover:underline">AGBs</a></label>
        </div>

        <button type="submit" 
                class="minecraft-btn w-full text-white px-4 py-2 text-lg !rounded-button bg-[#5c6bc0]">
          <i class="ri-login-circle-line mr-2"></i> Mit Minecraft-Namen und Passwort einloggen
        </button>
      </form>

      <div class="mt-6 text-center">
        <p>Skin-Vorschau:</p>
        <img id="skin-preview" src="https://minotar.net/avatar/Steve/100.png" alt="Skin" class="mx-auto rounded">
      </div>

      <!-- Hinweis für die Kontoerstellung -->
      <div class="mt-6 text-center text-white">
        <p>Hast du noch kein Konto? <a href="register.html" class="text-primary hover:underline">Erstelle ein neues Konto</a></p>
      </div>
    </div>
  </main>

  <script>
    const input = document.getElementById("mc-name");
    const skinImg = document.getElementById("skin-preview");

    input.addEventListener("input", () => {
      const username = input.value.trim();
      if (username.length > 2) {
        skinImg.src = `https://minotar.net/avatar/${username}/100.png`;
      }
    });
  </script>
</body>
</html>
