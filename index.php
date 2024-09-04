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

  <div class="container mx-auto flex flex-col gap-10 py-10">
    <?php include 'components/carousel.php'; ?>

    <div class="flex items-center md:justify-between flex-col md:flex-row gap-4">
      <?php
      echo renderCard(
        'assets/images/borobudur.jpg',
        'Borobudur',
        'Borobudur adalah candi Buddha terbesar di dunia yang terletak di Magelang, Jawa Tengah. Dibangun pada abad ke-9 selama pemerintahan Dinasti Syailendra, Borobudur terkenal dengan reliefnya yang menggambarkan ajaran Buddha dan perjalanan spiritual menuju pencerahan.',
        './ticket.php',
        'Pesan Tiket'
      );

      echo renderCard(
        'assets/images/borobudur.jpg',
        'Borobudur',
        'Borobudur adalah candi Buddha terbesar di dunia yang terletak di Magelang, Jawa Tengah. Dibangun pada abad ke-9 selama pemerintahan Dinasti Syailendra, Borobudur terkenal dengan reliefnya yang menggambarkan ajaran Buddha dan perjalanan spiritual menuju pencerahan.',
        './ticket.php',
        'Pesan Tiket'
      );

      echo renderCard(
        'assets/images/borobudur.jpg',
        'Borobudur',
        'Borobudur adalah candi Buddha terbesar di dunia yang terletak di Magelang, Jawa Tengah. Dibangun pada abad ke-9 selama pemerintahan Dinasti Syailendra, Borobudur terkenal dengan reliefnya yang menggambarkan ajaran Buddha dan perjalanan spiritual menuju pencerahan.',
        './ticket.php',
        'Pesan Tiket'
      );
      ?>
    </div>
  </div>

  <!-- YouTube Video -->
  <div class="container mx-auto pb-10">
    <iframe
      class="embed-yt w-full h-[720px]"
      src="https://www.youtube.com/embed/PbaQVSe-sys"
      allowfullscreen></iframe>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>

</html>