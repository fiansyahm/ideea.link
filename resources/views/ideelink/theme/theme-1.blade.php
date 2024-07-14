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
      background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20220913/pngtree-rainbow-color-gradation-with-triangle-shadow-and-mandala-art-image_1464141.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
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
      background-color: #007bff;
      color: #fff;
      font-size: 18px;
      font-weight: bold;
      text-decoration: none;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .create-button:hover {
      background-color: #0056b3;
      transform: scale(1.1);
      color: #f0f0f0;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center mb-5">{{ $ideelink->name_account }}</h1>
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
