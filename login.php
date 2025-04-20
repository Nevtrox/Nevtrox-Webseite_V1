<?php include 'app/db.php'; ?>

<?php

if(isset($_POST['login'])) {
  $check_user = $mysql->db()->prepare("SELECT * FROM `users` WHERE `username` = :username AND `password` = :password");
  $check_user->execute(array(":username" => $_POST['mc_name'], ":password" => $_POST['password']));

  if($check_user->rowCount() == null) {
    echo("Username or password invalid.");
  } else {
    $sessToken = rand(10000000000000,99999999999999999);

    $set_session = $mysql->db()->prepare("UPDATE `users` SET `session` = :session WHERE `username` = :username");
    $set_session->execute(array(":session" => $sessToken, ":username" => $_POST['mc_name']));

    setcookie('session', $sessToken, time()+864000, '/');
    echo('<meta http-equiv="refresh" content="0; url='.$url.'profil.php">');
  }
}

?>

<?php $loadDB = false; include 'head.php'; ?>

  <!-- Login Panel -->
  <main class="flex justify-center items-center min-h-screen px-4">
    <div class="w-full max-w-md bg-[#2c2c2c] border border-[#3a3a3a] p-6 rounded-xl shadow-lg">
      <h2 class="text-2xl mb-4 text-center text-primary">Login mit Minecraft-Account</h2>
      <form method="post" class="space-y-4">
        <div>
          <label for="mc-name" class="block mb-1">Minecraft-Name</label>
          <input type="text" id="mc_name" name="mc_name" required 
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
          <label for="agb">Ich akzeptiere die <a href="agb.php" class="text-primary hover:underline">AGBs</a></label>
        </div>

        <button type="submit" name="login" 
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
        <p>Hast du noch kein Konto? <a href="register.php" class="text-primary hover:underline">Erstelle ein neues Konto</a></p>
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
