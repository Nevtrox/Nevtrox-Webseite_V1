<?php
    include 'app/db.php';
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Profil – Nevtrox</title>
  <link rel="Website icon" href="NevtroxIcon_withoutBG.png"/>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com/3.4.16"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#4CAF50',
            secondary: '#8B5D33',
          },
          borderRadius: {
            button: '8px',
          },
        },
      },
    };
  </script>

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
</head>
<body class="bg-[#1e1e1e] text-white font-sans">

  <main class="min-h-screen flex flex-col md:flex-row p-6 gap-6">
    
    <!-- Admin Profilbereich -->
    <div class="w-full md:w-2/3 bg-[#2c2c2c] rounded-xl border border-[#3a3a3a] p-8 shadow-lg">
      <div class="flex items-center space-x-4">
        <img src="admin-avatar.png" alt="Admin Avatar" class="w-20 h-20 rounded-full border-2 border-primary object-cover"/>
        <div>
          <h1 class="text-3xl font-semibold text-primary">NevtroxYT</h1>
          <p class="text-gray-400">Administrator</p>
        </div>
      </div>

      <div class="mt-6 border-t border-[#444] pt-6 space-y-4">
        <div>
          <h2 class="text-xl font-medium text-white">Profilinformationen</h2>
          <p class="text-gray-300 mt-2">E-Mail: <span class="text-white">admin@nevtrox.de</span></p>
          <p class="text-gray-300">Letzter Login: <span class="text-white">18. April 2025, 14:37 Uhr</span></p>
        </div>

        <div>
          <h2 class="text-xl font-medium text-white">Aktionen</h2>
          <div class="mt-2 space-x-4">
            <a href="einstellungen.php" class="inline-block px-4 py-2 bg-primary rounded-button hover:bg-green-600 transition">Einstellungen</a>
            <a href="logout.php" class="inline-block px-4 py-2 bg-red-600 rounded-button hover:bg-red-700 transition">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Nutzerliste -->
    <div class="w-full md:w-1/3 bg-[#2c2c2c] rounded-xl border border-[#3a3a3a] p-6 shadow-lg">
      <h2 class="text-xl font-medium text-primary mb-4">Benutzerliste</h2>
      <ul class="space-y-3 max-h-[500px] overflow-y-auto pr-2">

        <?php
        $users_table = $mysql->db()->prepare("SELECT * FROM `users`");
        $users_table->execute();
            while($users = $users_table -> fetch(PDO::FETCH_ASSOC)) {
            echo($users['username']);
            echo("<br>");
}
        ?>

      </ul>
    </div>

  </main>

</body>
</html>
