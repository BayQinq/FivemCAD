
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BQ | Online CAD/MDT System</title>
<style>
  #discord-button {
	
	.icon {
		width: 25px;
		height: 25px;
		margin-right: 15px;
		
		svg {
			fill: white;
		}
	}
	
	a {
		color: white;
		font-weight: bold;
		border-radius: 8px;
		display: inline-flex;
		align-items: center;
		padding: 10px 15px;
		background-color: #7289da;
		text-decoration: none;
		
		&:hover {
			background-color: #6a7fc9;
		}
	}
}
</style>
  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Mulish:wght@600;700;900&family=Quicksand:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body>

  <!-- 
    - HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="<?php echo url('/')?>" class="logo">
        <img src="{{ asset('assets/front/images/logo.svg') }}" alt="Landio logo">
      </a>

      <button class="menu-toggle-btn" data-nav-toggle-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar">
        <ul class="navbar-list">

          <li>
            <a href="{{ route('landing-home') }}" class="navbar-link">Anasayfa</a>
          </li>

          <li>
            <a href="#features" class="navbar-link">Özellikler</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Ücret</a>
          </li>

          <li>
            <a href="#blog" class="navbar-link">Blog</a>
          </li>

          <li>
            <a href="#contact" class="navbar-link">İletişim</a>
          </li>

        </ul>
            <div class="header-actions">
              <!-- IGNORE - just for the live preview -->
<div id="discord-button">
	<a href="{{ route('login') }}">
		<div class="icon">
			<svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 245 240">
				<path class="st0" d="M104.4 103.9c-5.7 0-10.2 5-10.2 11.1s4.6 11.1 10.2 11.1c5.7 0 10.2-5 10.2-11.1.1-6.1-4.5-11.1-10.2-11.1zM140.9 103.9c-5.7 0-10.2 5-10.2 11.1s4.6 11.1 10.2 11.1c5.7 0 10.2-5 10.2-11.1s-4.5-11.1-10.2-11.1z" />
				<path class="st0" d="M189.5 20h-134C44.2 20 35 29.2 35 40.6v135.2c0 11.4 9.2 20.6 20.5 20.6h113.4l-5.3-18.5 12.8 11.9 12.1 11.2 21.5 19V40.6c0-11.4-9.2-20.6-20.5-20.6zm-38.6 130.6s-3.6-4.3-6.6-8.1c13.1-3.7 18.1-11.9 18.1-11.9-4.1 2.7-8 4.6-11.5 5.9-5 2.1-9.8 3.5-14.5 4.3-9.6 1.8-18.4 1.3-25.9-.1-5.7-1.1-10.6-2.7-14.7-4.3-2.3-.9-4.8-2-7.3-3.4-.3-.2-.6-.3-.9-.5-.2-.1-.3-.2-.4-.3-1.8-1-2.8-1.7-2.8-1.7s4.8 8 17.5 11.8c-3 3.8-6.7 8.3-6.7 8.3-22.1-.7-30.5-15.2-30.5-15.2 0-32.2 14.4-58.3 14.4-58.3 14.4-10.8 28.1-10.5 28.1-10.5l1 1.2c-18 5.2-26.3 13.1-26.3 13.1s2.2-1.2 5.9-2.9c10.7-4.7 19.2-6 22.7-6.3.6-.1 1.1-.2 1.7-.2 6.1-.8 13-1 20.2-.2 9.5 1.1 19.7 3.9 30.1 9.6 0 0-7.9-7.5-24.9-12.7l1.4-1.6s13.7-.3 28.1 10.5c0 0 14.4 26.1 14.4 58.3 0 0-8.5 14.5-30.6 15.2z" />
			</svg>
		</div>
		<span>{{ __('Discord İle Giriş Yap') }}</span>
	</a>
</div>
                </div>
        </div>
      </nav>

    </div>
  </header>
