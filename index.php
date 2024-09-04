<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap Navbar Example</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style>
      .container-hero {
        margin-top: 3rem;
      }
      .container-hero img {
        height: 600px;
        object-fit: cover;
        border-radius: 2rem;
      }

      .card {
        border-radius: 2rem;
      }
      .card-image {
        border-radius: 2rem 2rem 0 0;
        aspect-ratio: 16/9;
        object-fit: cover;
      }
      .embed-yt {
        width: 100%;
        aspect-ratio: 16/9;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <?php include 'components/navbar.php'; ?>

    <!-- Carousel -->
    <div class="container-hero container">
      <div
        id="carouselExampleCaptions"
        class="carousel slide hero"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="./assets/images/borobudur.jpg"
              class="d-block w-100"
              alt="First Slide"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>Candi Borobudur</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="./assets/images/nepal-van-java.webp"
              class="d-block w-100"
              alt="Second Slide"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>Nepal Van Java</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="./assets/images/gunung-andong.jpg"
              class="d-block w-100"
              alt="Third Slide"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>Gunung Andong</h5>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!-- Cards -->
    <div class="container my-5">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img
              src="./assets/images/borobudur.jpg"
              class="card-img-top card-image"
              alt="Card 1"
            />
            <div class="card-body">
              <h5 class="card-title">Candi Borobudur</h5>
              <p class="card-text">
                Candi Borobudur adalah candi Buddha terbesar di Indonesia,
                terkenal dengan ukiran-ukiran dan strukturnya yang megah.
              </p>
              <a href="#" class="btn btn-success">Lihat</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img
              src="./assets/images/nepal-van-java.webp"
              class="card-img-top card-image"
              alt="Card 2"
            />
            <div class="card-body">
              <h5 class="card-title">Nepal Van Java</h5>
              <p class="card-text">
                Kawasan di Indonesia yang mirip dengan lanskap Nepal, seperti
                daerah pegunungan atau perkebunan teh di Jawa.
              </p>
              <a href="#" class="btn btn-success">Lihat</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img
              src="./assets/images/gunung-andong.jpg"
              class="card-img-top card-image"
              alt="Card 3"
            />
            <div class="card-body">
              <h5 class="card-title">Gunung Andong</h5>
              <p class="card-text">
                Gunung Andong adalah gunung berapi kecil di Jawa Tengah,
                Indonesia, yang terkenal dengan pemandangan dan jalur pendakian
                yang indah.
              </p>
              <a href="#" class="btn btn-success">Lihat</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- YouTube Video -->
    <div class="container my-5">
      <iframe
        class="embed-yt"
        src="https://www.youtube.com/embed/PbaQVSe-sys"
        allowfullscreen
      ></iframe>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
  </body>
</html>
