<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DiscoverMagelang - Buy Tickets</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style>
      .ticket-section {
        background-color: #f8f9fa;
        padding: 2rem;
        border-radius: 1rem;
        margin-top: 2rem;
      }
      .ticket-section h2 {
        margin-bottom: 1.5rem;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <?php include 'components/navbar.php'; ?>

    <!-- Ticket Purchase Section -->
    <div class="container ticket-section">
      <h2>Buy Tickets</h2>
      <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $destination = $_POST['destination'];
          $visit_date = $_POST['visit_date'];
          $ticket_quantity = $_POST['ticket_quantity'];

          // Processing logic here
          echo "<div class='alert alert-success'>Thank you for purchasing $ticket_quantity ticket(s) to $destination on $visit_date.</div>";
      } ?>
      <form method="post" action="<?php echo htmlspecialchars(
          $_SERVER['PHP_SELF']
      ); ?>">
        <div class="mb-3">
          <label for="destination" class="form-label">Choose Your Destination</label>
          <select class="form-select" id="destination" name="destination" required>
            <option value="" selected disabled>Select a destination</option>
            <option value="Candi Borobudur">Candi Borobudur</option>
            <option value="Nepal Van Java">Nepal Van Java</option>
            <option value="Gunung Andong">Gunung Andong</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="visit-date" class="form-label">Select Visit Date</label>
          <input type="date" class="form-control" id="visit-date" name="visit_date" required>
        </div>

        <div class="mb-3">
          <label for="ticket-quantity" class="form-label">Number of Tickets</label>
          <input type="number" class="form-control" id="ticket-quantity" name="ticket_quantity" min="1" max="10" required>
        </div>

        <button type="submit" class="btn btn-success">Purchase Tickets</button>
      </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
  </body>
</html>
