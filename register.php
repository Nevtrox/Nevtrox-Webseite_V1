<?php include 'head.php'; ?>

<?php
$allowPWSet = false;

if(isset($_POST['register'])) {

  $check_username = $mysql->db()->prepare("SELECT * FROM `users` WHERE `username` = :username AND `code` = :code");
  $check_username->execute(array(":username" => $_POST['mc_name'], ":code" => $_POST['code']));

  if($check_username->rowCount() == null) {
    echo("Username or code is invalid");
  } else {
    $allowPWSet = true;
  }

}

if(isset($_POST['setPW'])) {
  
  $set_password = $mysql->db()->prepare("UPDATE `users` SET `password` = :password WHERE `username` = :username");
  $set_password->execute(array(":password" => $_POST['password'], ":username" => $_POST['mc_name']));

  echo('<meta http-equiv="refresh" content="0; url='.$url.'login">');

}
?>
  <!-- Login Panel -->
  <main class="flex justify-center items-center min-h-screen px-4">
    <div class="w-full max-w-md bg-[#2c2c2c] border border-[#3a3a3a] p-6 rounded-xl shadow-lg">

    <?php if($allowPWSet == false) { ?>
      <h2 class="text-2xl mb-4 text-center text-primary">Regsestriere mit Minecraft-Code</h2>

      <form method="post" class="space-y-4">
        <div>
          <label for="mc-name" class="block mb-1">Minecraft-Name</label>
          <input type="text" id="mc-name" name="mc_name" required 
                 class="w-full px-4 py-2 rounded-md bg-[#2c2c2c] border border-[#545454] text-white focus:outline-none focus:ring-2 focus:ring-primary"
                 placeholder="z.B. NevtroxYT">
        </div>

        <div>
          <label  for="code" class="block mb-1">Einmalcode (Ingame mit <code>/web</code>)</label>
          <input type="text" id="code" name="code" required 
                 class="w-full px-4 py-2 rounded-md bg-[#2c2c2c] border border-[#545454] text-white focus:outline-none focus:ring-2 focus:ring-primary"
                 placeholder="z.B. A1B2-C3D4">
        </div>

        <div class="flex items-center space-x-2">
          <input type="checkbox" id="agb" name="agb" class="custom-checkbox" required>
          <label for="agb">Ich akzeptiere die <a href="agb.php" class="text-primary hover:underline">AGBs</a></label>
        </div>

        <button type="submit" name="register" 
                class="minecraft-btn w-full text-white px-4 py-2 text-lg !rounded-button bg-[#5c6bc0]">
          <i class="ri-login-circle-line mr-2"></i> Mit Code einloggen
        </button>
      </form>
    <?php } else { ?>
      <h2 class="text-2xl mb-4 text-center text-primary">Setze dein Passwort</h2>

      <form method="post" class="space-y-4">

      <input hidden name="mc_name" value="<?= $_POST['mc_name'];?>">

        <div>
          <label  for="code" class="block mb-1">Setze dein Passwort</label>
          <input type="text" id="password" name="password" required 
                class="w-full px-4 py-2 rounded-md bg-[#2c2c2c] border border-[#545454] text-white focus:outline-none focus:ring-2 focus:ring-primary"
                placeholder="Passwort">
        </div>

        <button type="submit" name="setPW" 
                class="minecraft-btn w-full text-white px-4 py-2 text-lg !rounded-button bg-[#5c6bc0]">
          <i class="ri-login-circle-line mr-2"></i> Passwort setzen und einloggen
        </button>
      </form>
    <?php } ?>

      <div class="mt-6 text-center">
        <p>Skin-Vorschau:</p>
        <img id="skin-preview" src="https://minotar.net/avatar/Steve/100.png" alt="Skin" class="mx-auto rounded">
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
