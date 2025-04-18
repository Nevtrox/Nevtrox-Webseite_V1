<?php

if($_SERVER['SERVER_NAME']) {
   $url = "http://localhost/Nevtrox-webseite_v1/";
} else {
   $url = "https://nevtrox.de/";
}

if(!isset($loadDB)) {
   include 'app/db.php'; 
}
$session = $_COOKIE['session'] ?? null;

?>

<!DOCTYPE html>
<html lang="de">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Nevtrox.de</title>
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
               <a href="./#team" class="text-white hover:text-primary transition-colors">Team</a>
               <a href="./#bewerbung" class="text-white hover:text-primary transition-colors">Bewerbung</a>
               <a href="./#wiki" class="text-white hover:text-primary transition-colors">Wiki</a>
               <a href="./#server" class="text-white hover:text-primary transition-colors">Server Info</a>
               <?php if($session != null) { ?>
                  <a href="gem_shop.php" class="text-white hover:text-primary transition-colors">Gem Shop</a>
                  <button 
                  class="minecraft-btn text-white px-4 py-2 text-sm inline-block !rounded-button whitespace-nowrap bg-[#5c6bc0]">
               <i class="ri-gamepad-line mr-2"></i> Logout
               </button>
               <?php } else { ?>
                  
                  <button 
                  class="minecraft-btn text-white px-4 py-2 text-sm inline-block !rounded-button whitespace-nowrap bg-[#5c6bc0]">
               <i class="ri-gamepad-line mr-2"></i> Login
               </button>
               <?php } ?>
            
            </nav>
         </div>
         <!-- Mobile Navigation -->
         <nav id="mobile-menu" class="hidden bg-[#1a1a1a] border-t border-[#3a3a3a] lg:hidden">
            <div class="./container mx-auto px-4 py-2 flex flex-col space-y-3 text-xl">
               <a href="./#team" class="text-white hover:text-primary transition-colors py-2">Team</a>
               <a href="./#bewerbung" class="text-white hover:text-primary transition-colors py-2">Bewerbung</a>
               <a href="./#wiki" class="text-white hover:text-primary transition-colors py-2">Wiki</a>
               <a href="./#server" class="text-white hover:text-primary transition-colors py-2">Server Info</a>
               <a href="./login">
               <button 
                  class="minecraft-btn text-white px-4 py-2 text-sm inline-block !rounded-button whitespace-nowrap bg-[#5c6bc0]">
               <i class="ri-gamepad-line mr-2"></i> Login
               </button>
               <?php if($session != null) { ?>
                  logout button
               <?php } else { ?>
                  login button
               <?php } ?>
               </a>
            </div>
         </nav>
      </header>