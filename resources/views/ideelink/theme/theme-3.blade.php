<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ideelink {{$ideelink->name_account}}</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    /* Custom CSS */
    /* Add your custom styles here */
    html, body {
      height: 100%;
      margin: 0;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      overflow: hidden; /* Prevent scrollbars */
    }

    video {
      position: fixed;
      top: 50%;
      left: 50%;
      min-width: 100%;
      min-height: 100%;
      width: auto;
      height: auto;
      z-index: -1;
      transform: translate(-50%, -50%);
      background-size: cover;
    }

    .social-list {
      list-style: none;
      padding: 0;
    }

    .social-list-item {
      margin-bottom: 10px;
    }

    .social-list-item a {
      display: block;
      padding: 10px;
      border-radius: 5px;
      text-decoration: none;
      color: #333;
      transition: background-color 0.3s ease;
    }

    .social-list-item a:hover {
      background-color: #f0f0f0;
    }

    .social-list-item i {
      margin-right: 10px;
    }

    .container {
      background-color: rgba(255, 255, 255, 0.8); /* Optional: adds a semi-transparent background to make text more readable */
      padding: 20px;
      border-radius: 10px;
      z-index: 1; /* Ensures container is above the video */
    }

    .create-button {
      /* make center */
      margin: 0 auto;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 10px;
      margin-top: 20px;
      border-radius: 50%;
      background-color: #000000;
      color: #fff;
      font-size: 18px;
      font-weight: bold;
      text-decoration: none;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .create-button:hover {
      background-color: #ad8c8c;
      transform: scale(1.1);
      color: #4e3d3d;
    }
  </style>
</head>
<body>
  <video autoplay muted loop>
    <source src="https://media.istockphoto.com/id/1329998662/id/video/natal-abstrak-dinamis-berputar-fraktal-wireframe-grid-bersinar-gelombang-partikel-4k-uhd-3d.mp4?s=mp4-640x640-is&k=20&c=u5sMOooPQdnGUEN3460En8dwodwOWy0vMSbwa9PerjA=" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center mb-4">{{ $ideelink->name_account }}</h1>
        <ul class="social-list">
          @if($ideelink->youtube != null)
            <li class="social-list-item bg-white border border-primary">
              <a href="https://www.youtube.com/{{ $ideelink->youtube }}" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-youtube"></i> YouTube
              </a>
            </li>
          @endif
          @if($ideelink->tiktok != null)
            <li class="social-list-item bg-white border border-primary">
              <a href="https://www.tiktok.com/{{ $ideelink->tiktok }}" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-tiktok"></i> TikTok
              </a>
            </li>
          @endif
          @if($ideelink->instagram != null)
            <li class="social-list-item bg-white border border-primary">
              <a href="https://www.instagram.com/{{ $ideelink->instagram }}" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-instagram"></i> Instagram
              </a>
            </li>
          @endif
          @if($ideelink->googleplay != null)
            <li class="social-list-item bg-white border border-primary">
              <a href="{{ $ideelink->googleplay }}" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-google-play"></i> Google Play
              </a>
            </li>
          @endif
          @if($ideelink->shopee != null)
            <li class="social-list-item bg-white border border-primary">
                <a href="https://shopee.com/{{ $ideelink->shopee }}" target="_blank">
                <i class="fas fa-shopping-bag"></i> Shopee
                </a>
            </li>
          @endif
          @if($ideelink->whatsapp != null)
            <li class="social-list-item bg-white border border-primary">
                <a href="https://api.whatsapp.com/send?phone={{ $ideelink->whatsapp }}" target="_blank">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
            </li>
          @endif
          <!-- You can add more list items for additional social media links -->
        </ul>
        <a href="#" class="create-button">Create Your Ideelink</a>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and Font Awesome Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
