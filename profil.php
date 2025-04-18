<?php include 'head.php'; ?>
<?php

$session = $_COOKIE['session'] ?? null;

$check_user_session = $mysql->db()->prepare("SELECT * FROM `users` WHERE `session` = :session");
$check_user_session->execute(array(":session" => $session));

if($check_user_session->rowCount() == null) {
  echo('<meta http-equiv="refresh" content="0; url='.$url.'login">');
} else {
  while($user = $check_user_session -> fetch(PDO::FETCH_ASSOC)) {
    $username = $user['username'];
  }
}
?>
  <!-- Profil Panel -->
  <main class="flex justify-center items-center min-h-screen px-4">
    <div class="w-full max-w-md bg-[#2c2c2c] border border-[#3a3a3a] p-6 rounded-xl shadow-lg">
      <h2 class="text-2xl mb-4 text-center text-primary">Profil von Minecraft-Account</h2>
      <div class="text-center mb-4">
        <img id="profile-skin" src="https://minotar.net/avatar/<?= $username; ?>/100.png" alt="Minecraft Skin" class="mx-auto rounded-lg">
      </div>

      <div class="text-center mb-4">
        <p class="text-lg text-white">Minecraft-Name: <span id="mc-name"><?= $username; ?></span></p>
      </div>


      <!-- Passwort festlegen Formular -->
      <div id="password-form" class="hidden text-center mb-4">
        <label for="new-password" class="block text-white">Neues Passwort</label>
        <input type="password" id="new-password" class="w-full px-4 py-2 rounded-md bg-[#2c2c2c] border border-[#545454] text-white focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Neues Passwort">
        
        <div class="mt-4">
          <button class="minecraft-btn w-full text-white px-4 py-2 text-lg !rounded-button bg-[#4CAF50]" onclick="savePassword()">
            <i class="ri-save-line mr-2"></i> Passwort speichern
          </button>
        </div>
      </div>

      <div class="text-center mb-4">
        <button class="minecraft-btn w-full text-white px-4 py-2 text-lg !rounded-button bg-[#5c6bc0]" onclick="logout()">
          <i class="ri-logout-box-line mr-2"></i> Logout
        </button>
      </div>
    </div>
  </main>

</body>
</html>
