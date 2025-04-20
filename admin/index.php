<?php include '../app/db.php'; ?>

<?php

if(isset($_POST['login'])) {
  $check_user = $mysql->db()->prepare("SELECT * FROM `users` WHERE `username` = :username AND `password` = :password AND `rank` = 'admin'");
  $check_user->execute(array(":username" => $_POST['mc_name'], ":password" => $_POST['password']));

  if($check_user->rowCount() == null) {
    echo("Username or password invalid.");
  } else {
    $sessToken = rand(10000000000000,99999999999999999);

    $set_session = $mysql->db()->prepare("UPDATE `users` SET `session` = :session WHERE `username` = :username");
    $set_session->execute(array(":session" => $sessToken, ":username" => $_POST['mc_name']));

    setcookie('session', $sessToken, time()+864000, '/');
    echo('<meta http-equiv="refresh" content="0; url='.$url.'admin_login.php">');
  }
}

?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nevtrox-Admin Login</title>
  <link rel="Website icon" href="NevtroxIcon_withoutBG.png">

  <!-- Tailwind CSS -->
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
    };
  </script>

  <!-- Fonts & Icons -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=VT323&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body class="bg-[#1e1e1e] text-white font-sans">

  <main class="flex justify-center items-center min-h-screen px-4">
    <div class="w-full max-w-md bg-[#2c2c2c] border border-[#3a3a3a] p-6 rounded-xl shadow-lg">
      <h2 class="text-2xl mb-4 text-center text-primary font-pacifico">Admin Login</h2>
      <form method="post" class="space-y-4">
        <div>
          <label for="mc_name" class="block mb-1">Admin-Name</label>
          <input type="text" id="mc_name" name="mc_name" required 
                 class="w-full px-4 py-2 rounded-md bg-[#2c2c2c] border border-[#545454] text-white focus:outline-none focus:ring-2 focus:ring-primary"
                 placeholder="z.B. NevtroxYT">
        </div>

        <div>
          <label for="password" class="block mb-1">Admin-Passwort</label>
          <input type="password" id="password" name="password" required 
                 class="w-full px-4 py-2 rounded-md bg-[#2c2c2c] border border-[#545454] text-white focus:outline-none focus:ring-2 focus:ring-primary"
                 placeholder="Passwort eingeben">
        </div>

        <button type="submit" name="login" 
                class="w-full text-white px-4 py-2 text-lg rounded-button bg-[#5c6bc0] hover:bg-[#3f51b5] transition-colors duration-200">
          <i class="ri-login-circle-line mr-2"></i> Einloggen
        </button>
      </form>
    </div>
  </main>

</body>
</html>
