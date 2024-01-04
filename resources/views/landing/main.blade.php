
@extends('landing/index')

@section('content')
<main>
    <article>

      <!-- 
        - HERO
      -->

      <section class="hero" id="hero">
        <div class="container">

          <div class="hero-content">
            <h1 class="h1 hero-title">Online CAD/MDT System</h1>

            <p class="hero-text">
            Oyunlardaki rol tabanlı polis tabletleri (CAD / MDT) sistemini online olarak hayata geçirerek, gerçekçi bir rol oyunu deneyimi sunan bir web sayfası oluşturulmuştur
            </p>

            <p class="form-text">
              <span>🥳</span> Ücretsiz 14 günlük premium paketten faydalanmak için hemen kayıt olun.
            </p>

            <button onclick="redirectToPage()" class="btn btn-outline">Kayıt Ol</button></div>

          <figure class="hero-banner">
            <img src="{{ asset('assets/front/images/hero-banner.png') }}" alt="Hero image">
          </figure>

        </div>
      </section>





      <!-- 
        - ABOUT
      -->

      <section class="about">
        <div class="container">

          <div class="about-content">

            <div class="about-icon">
              <ion-icon name="cube"></ion-icon>
            </div>

            <h2 class="h2 about-title">Özelliklerimiz</h2>

            <p class="about-text">
              Olayları birbirine bağlayın ve gizemleri çözmek için ipuçlarını kullanın. Profesyonel dedektifler gibi düşünün ve kilit noktaları tespit edin.
            </p>

          </div>

          <ul class="about-list">

            <li>
              <div class="about-card">

                <div class="card-icon">
                  <ion-icon name="thumbs-up"></ion-icon>
                </div>

                <h3 class="h3 card-title">Rapor Takibi</h3>

                <p class="card-text">
                  Gerçek zamanlı olarak oyuncuların başlattığı raporları takip edin ve detaylı raporlar oluşturun.
                </p>

              </div>
            </li>

            <li>
              <div class="about-card">

                <div class="card-icon">
                  <ion-icon name="trending-up"></ion-icon>
                </div>

                <h3 class="h3 card-title">Bolo Kaydı</h3>

                <p class="card-text">
                  Araç takibini kolaylaştırın! Oyuncuların koyduğu bolo (araç arama) kayıtlarını listeleyin ve çözülen olayları vurgulayın.
                </p>

              </div>
            </li>

            <li>
              <div class="about-card">

                <div class="card-icon">
                  <ion-icon name="shield-checkmark"></ion-icon>
                </div>

                <h3 class="h3 card-title">Güvenlik Raporları</h3>

                <p class="card-text">
                  Sunucu üzerindeki güvenlik durumunu izleyin. Oyuncuların raporlarına dayalı olarak olası güvenlik ihlallerini belirleyin.
                </p>

              </div>
            </li>

            <li>
              <div class="about-card">

                <div class="card-icon">
                  <ion-icon name="server"></ion-icon>
                </div>

                <h3 class="h3 card-title">İstihbarat Paylaşımı</h3>

                <p class="card-text">
                  Oyuncular arasında istihbarat paylaşımını teşvik edin. Bilgileri güvenli bir şekilde paylaşma ve değerlendirme özelliği ekleyin.
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - FEATURES
      -->

      <section class="features" id="features">
        <div class="container">

          <h2 class="h2 section-title">Yeni Güncellemeler</h2>

          <p class="section-text">
            Et harum quidem rerum facilis est et expedita distinctio nam libero tempore cum soluta nobis eligendi
            cumque.
          </p>

          <div class="features-wrapper">

            <figure class="features-banner">
              <img src="assets/front/images/features-img-1.png" alt="illustration art">
            </figure>

            <div class="features-content">

              <p class="features-content-subtitle">
                <ion-icon name="sparkles"></ion-icon>

                <span>YENİ GÜNCELLEME</span>
              </p>

              <h3 class="features-content-title">
                Yapay Zeka Desteği
              </h3>

              <p class="features-content-text">
                <b>Yapay Zeka Destekli</b> Detaylı Olay Örgüsü! Artık yazdığınız hikayeleri, olayları veya polis raporlarını daha etkileyici, daha gerçekçi ve daha detaylı hale getirmek için yapay zeka ile buluşturuyoruz.
              </p>

              <ul class="features-list">

                <li class="features-list-item">
                  <p>Yazınızı girdikten sadece birkaç saniye sonra etkileyici sonuçları görebilirsiniz.</p>
                </li>

                <li class="features-list-item">
                  <p>Hikayelerinizden polis raporlarına, bu özellikle her tür metni daha ilgi çekici hale getirin.</p>
                </li>

                <li class="features-list-item">

                  <p>Yapay zeka, sizi daha iyi yazar yapacak ve hikayelerinizi daha unutulmaz kılacaktır.</p>
                </li>


              </ul>

              <div class="btn-group">
                <button class="btn btn-primary">Read More</button>

                <button class="btn btn-secondary">Buy Now</button>
              </div>

            </div>

          </div>

          <div class="features-wrapper">

            <figure class="features-banner">
              <img src="assets/front/images/features-img-2.png" alt="illustration art">
            </figure>

            <div class="features-content">

              <p class="features-content-subtitle">
                <ion-icon name="sparkles"></ion-icon>

                <span>CREATIVE FEATURES</span>
              </p>

              <h3 class="features-content-title">
                We do the work you <strong>stay focused</strong> on <strong>your customers.</strong>
              </h3>

              <p class="features-content-text">
                Temporibus autem quibusdam et aut officiis debitis aut rerum a necessitatibus saepe eveniet ut et
                voluptates repudiandae
                sint molestiae non recusandae itaque.
              </p>

              <ul class="features-list">

                <li class="features-list-item">
                  <ion-icon name="rocket-outline"></ion-icon>

                  <p>Donec pede justo fringilla vel nec.</p>
                </li>

                <li class="features-list-item">
                  <ion-icon name="wifi-outline"></ion-icon>

                  <p>Cras ultricies mi eu turpis hendrerit fringilla.</p>
                </li>

              </ul>

              <div class="btn-group">
                <button class="btn btn-primary">Read More</button>

                <button class="btn btn-secondary">Buy Now</button>
              </div>

            </div>

          </div>

        </div>
      </section>





      <!-- 
        - BLOG
      -->

      <section class="blog" id="blog">
        <div class="container">

          <h2 class="h2 section-title">Latest News</h2>

          <p class="section-text">
            Et harum quidem rerum facilis est et expedita distinctio nam libero tempore cum soluta nobis eligendi
            cumque.
          </p>

          <ul class="blog-list">

            <li>
              <div class="blog-card">

                <figure class="blog-banner">
                  <img src="assets/front/images/blog-banner-1.jpg" alt="Best Traveling Place">
                </figure>

                <div class="blog-meta">

                  <span>
                    <ion-icon name="calendar-outline"></ion-icon>

                    <time datetime="2021-04-10">april 10 2021</time>
                  </span>

                  <span>
                    <ion-icon name="person-outline"></ion-icon>

                    <p>admin</p>
                  </span>

                </div>

                <h3 class="blog-title">Best Traveling Place</h3>

                <p class="blog-text">
                  Integer ante arcu accumsan a consectetuer eget posuere mauris praesent adipiscing phasellus
                  ullamcorper ipsum rutrum
                  punc.
                </p>

                <a href="#" class="blog-link-btn">
                  <span>Learn More</span>

                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="blog-banner">
                  <img src="assets/front/images/blog-banner-2.jpg" alt="Private Meeting Room">
                </figure>

                <div class="blog-meta">

                  <span>
                    <ion-icon name="calendar-outline"></ion-icon>

                    <time datetime="2021-04-10">april 10 2021</time>
                  </span>

                  <span>
                    <ion-icon name="person-outline"></ion-icon>

                    <p>admin</p>
                  </span>

                </div>

                <h3 class="blog-title">Private Meeting Room</h3>

                <p class="blog-text">
                  Integer ante arcu accumsan a consectetuer eget posuere mauris praesent adipiscing phasellus
                  ullamcorper ipsum rutrum
                  punc.
                </p>

                <a href="#" class="blog-link-btn">
                  <span>Learn More</span>

                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="blog-banner">
                  <img src="assets/front/images/blog-banner-3.jpg" alt="The Best Business Ideas">
                </figure>

                <div class="blog-meta">

                  <span>
                    <ion-icon name="calendar-outline"></ion-icon>

                    <time datetime="2021-04-10">april 10 2021</time>
                  </span>

                  <span>
                    <ion-icon name="person-outline"></ion-icon>

                    <p>admin</p>
                  </span>

                </div>

                <h3 class="blog-title">The Best Business Ideas</h3>

                <p class="blog-text">
                  Integer ante arcu accumsan a consectetuer eget posuere mauris praesent adipiscing phasellus
                  ullamcorper ipsum rutrum
                  punc.
                </p>

                <a href="#" class="blog-link-btn">
                  <span>Learn More</span>

                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </a>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - CONTACT
      -->

      <section class="contact" id="contact">
        <div class="container">

          <h2 class="h2 section-title">İletişime Geç</h2>

          <p class="section-text">
            Et harum quidem rerum facilis est et expedita distinctio nam libero tempore cum soluta nobis eligendi
            cumque.
          </p>

          <div class="contact-wrapper">

            <form action="" class="contact-form">

              <div class="wrapper-flex">

                <div class="input-wrapper">
                  <label for="name">Name*</label>

                  <input type="text" name="name" id="name" required placeholder="Enter Your Name" class="input-field">
                </div>

                <div class="input-wrapper">
                  <label for="emai">Email*</label>

                  <input type="text" name="email" id="email" required placeholder="Enter Your Email"
                    class="input-field">
                </div>

              </div>

              <label for="message">Message*</label>

              <textarea name="message" id="message" required placeholder="Type Your Message"
                class="input-field"></textarea>

              <button type="submit" class="btn btn-primary">
                <span>Send Message</span>

                <ion-icon name="paper-plane-outline"></ion-icon>
              </button>

            </form>

            <ul class="contact-list">

              <li>
                <a href="mailto:support@website.com" class="contact-link">
                  <ion-icon name="mail-outline"></ion-icon>

                  <span>: support@website.com</span>
                </a>
              </li>

              <li>
                <a href="#" class="contact-link">
                  <ion-icon name="globe-outline"></ion-icon>

                  <span>: www.website.com</span>
                </a>
              </li>

              <li>
                <a href="tel:+0011234567890" class="contact-link">
                  <ion-icon name="call-outline"></ion-icon>

                  <span>: (+001) 123 456 7890</span>
                </a>
              </li>

              <li>
                <div class="contact-link">
                  <ion-icon name="time-outline"></ion-icon>

                  <span>: 9:00 AM - 6:00 PM</span>
                </div>
              </li>

              <li>
                <a href="#" class="contact-link">
                  <ion-icon name="location-outline"></ion-icon>

                  <address>: 1644 Deer Ridge Drive Rochelle Park, NJ 07662</address>
                </a>
              </li>

            </ul>

          </div>

        </div>
      </section>

    </article>
  </main>
  <script>
function redirectToPage() {
    // Yönlendirilecek sayfa URL'sini belirtin
    var targetPage = "{{ route('login')}}";

    // Yönlendirme işlemi
    window.location.href = targetPage;
}
</script>
@endsection