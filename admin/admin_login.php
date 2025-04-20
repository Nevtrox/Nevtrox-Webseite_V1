<?php
    include '../app/db.php';
?>
<?php

$session = $_COOKIE['session'] ?? null;

$check_user_session = $mysql->db()->prepare("SELECT * FROM `users` WHERE `session` = :session");
$check_user_session->execute(array(":session" => $session));

if($check_user_session->rowCount() == null) {
  echo('<meta http-equiv="refresh" content="0; url='.$url.'admin">');
} else {
  while($user = $check_user_session -> fetch(PDO::FETCH_ASSOC)) {
    $username = $user['username'];
  }
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

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

</head>
<body class="bg-[#1e1e1e] text-white font-sans">

  <main class="min-h-screen flex flex-col md:flex-row p-6 gap-6">
    
    <!-- Admin Profilbereich -->
    <div class="w-full md:w-2/3 bg-[#2c2c2c] rounded-xl border border-[#3a3a3a] p-8 shadow-lg">
      <div class="flex items-center space-x-4">
        <div>
        <div class="text-center mb-4">
        <p class="text-lg text-white">Minecraft-Name: <span id="mc-name"><?= $username; ?></span></p>
        </div>
          <p class="text-gray-400">Administrator</p>
        </div>
      </div>

        <div>
          <h2 class="text-xl font-medium text-white">Aktionen</h2>
          <div class="mt-2 space-x-4">
            <a href="einstellungen.php" class="inline-block px-4 py-2 bg-primary rounded-button hover:bg-green-600 transition">Einstellungen</a>
            <a href="login.php" class="inline-block px-4 py-2 bg-red-600 rounded-button hover:bg-red-700 transition">Logout</a>
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
            echo($users['username']. " (". $users['password'].")");
            echo("<br>");
}
        ?>

      </ul>
    </div>

  </main>

</body>
</html>
