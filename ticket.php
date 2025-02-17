<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Magelang Discover | Tiket</title>
  <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="./js/calculate.js"></script>
</head>

<body class="dark:bg-gray-900">
  <!-- Navbar -->
  <?php include 'components/navbar.php'; ?>

  <div class="container mx-auto flex flex-col gap-10 py-10 items-center">
    <h3 class="text-center text-2xl dark:text-white">Pesan Tiket Trip Magelang</h3>
    <?php include 'components/form.php'; ?>

    <div>
      <h3 class="text-center text-2xl dark:text-white">List Pesanan Tiket Trip Magelang</h3>
      <?php include 'components/table.php'; ?>
    </div>
  </div>

  <div class="container mx-auto flex flex-col max-w-screen-xl">
    <?php include 'components/footer.php'; ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>

</html>