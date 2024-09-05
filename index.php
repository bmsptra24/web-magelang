<?php include 'components/card.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Magelang Discover | Beranda</title>
  <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="dark:bg-gray-900">
  <!-- Navbar -->
  <?php include 'components/navbar.php'; ?>

  <div class="container mx-auto flex flex-col gap-10 py-10 max-w-screen-xl">
    <?php include 'components/carousel.php'; ?>

    <div class="flex items-center md:justify-between flex-col md:flex-row gap-4">
      <?php
      echo renderCard(
        'assets/images/borobudur.jpg',
        'Borobudur',
        'Borobudur adalah candi Buddha terbesar di dunia yang terletak di Magelang, Jawa Tengah. Dibangun pada abad ke-9 selama pemerintahan Dinasti Syailendra, Borobudur terkenal dengan reliefnya.',
        './ticket.php',
        'Pesan Tiket'
      );

      echo renderCard(
        'assets/images/gunung-andong.jpg',
        'Gunung Andong',
        'Gunung Andong adalah gunung kecil di Kabupaten Magelang, Jawa Tengah, yang populer sebagai destinasi pendakian bagi pemula. Dengan ketinggian sekitar 1.726 meter di atas permukaan laut, Gunung Andong menawarkan jalur pendakian yang ramah, namun tetap menantang. ',
        './ticket.php',
        'Pesan Tiket'
      );

      echo renderCard(
        'assets/images/nepal-van-java.webp',
        'Nepal van Java',
        'Nepal van Java adalah julukan untuk Dusun Butuh di lereng Gunung Sumbing, Kabupaten Magelang. Desa ini dikenal dengan rumah-rumah yang bertingkat di lereng bukit, yang mengingatkan pada pemandangan desa-desa di pegunungan Himalaya. ',
        './ticket.php',
        'Pesan Tiket'
      );
      ?>
    </div>
  </div>

  <!-- YouTube Video -->
  <div class="container mx-auto pb-10 w-[80%] sm:max-w-screen-xl">
    <iframe
      class="embed-yt w-full h-[720px]"
      src="https://www.youtube.com/embed/PbaQVSe-sys"
      allowfullscreen></iframe>
  </div>

  <div class="container mx-auto flex flex-col max-w-screen-xl">
    <?php include 'components/footer.php'; ?>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>

</html>