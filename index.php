<?php include 'header.php';?>

    <section id="image-carousel">
      <div class="slide-one">
        <div class="carousel-flag news-flag">News</div>
        <p class="carousel-text">Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Aenean sed egestas est, at euismod augue. Fusce vel
          sem accumsan, facilisis est varius, accumsan leo. Integer malesuada
          commodo laoreet.</p>
        <h2 class="carousel-header">Best of 2018</h2>
      </div>
      <div class="slide-two">
        <div class="carousel-flag event-flag">Events</div>
        <p class="carousel-text">This year we once again hosted the Sheringham Carnival. Our aim is to
          promote the town as a holiday destination, to foster our community spirit
          and to financially assist local charities and local organisations.</p>
        <h2 class="carousel-header">Sheringham Carnival</h2>
      </div>
      <div class="slide-three">
        <div class="carousel-flag event-flag">Events</div>
        <p class="carousel-text">Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Aenean sed egestas est, at euismod augue. Fusce vel
          sem accumsan, facilisis est varius, accumsan leo. Integer malesuada
          commodo laoreet.</p>
        <h2 class="carousel-header">Glastonbury</h2>
      </div>
    </section>

    <main>
      <section class="about-background-image"  id="about">
        <div class="about-content ">
          <h2 class="about-heading"> About us</h2>
          <p>Firefly is an event management company based out of Norwich. Our experienced and well adapted team perform a number of services for a wide range of clients.</p>
          <p>Spanning everything from inital ideasm hosting and even advertisement aspects.</p>
          <button class="button">Read More...</button>
        </div>
        <div class="about-pictures">
          <img class="about-pp" src="img/about/about-one.png">
          <img class="about-pp" src="img/about/about-two.png">
          <img class="about-pp about-pp-last" src="img/about/about-three.png">
        </div>
      </section>

      <section id="services">
        <h2 class="section-header">Services</h2>
        <div id="services-img-container">
          <div id="services-security" class="services-img">
            <span id="services-security-text" class="services-overlay-text">Security</span>
          </div>
          <div id="services-catering" class="services-img">
            <span id="services-catering-text" class="services-overlay-text">Catering</span>
          </div>
          <div id="services-hosting" class="services-img">
            <span id="services-hosting-text" class="services-overlay-text">Hosting</span>
          </div>
        </div>
      </section>

      <section id="latest-news">
      </section>

      <section id="testimonials">
        <div class="testimony-container">
          <img class="testimony-logo" src="img/logo/partners/helm-logo.png" alt="Helms Logo">
          <p class="testimony">FireFly events did a great job setting up and helping us run one of our first venues. we will definitely be useing them again.</p>
        </div>
        <div class="testimony-container">
          <img class="testimony-logo" src="img/logo/partners/film-festival-logo.png" alt="Film Festival Logo">
          <p class="testimony">FireFly events did a great job setting up and helping us run one of our first venues. we will definitely be useing them again.</p>
        </div>
        <div class="testimony-container">
          <img class="testimony-logo" src="img/logo/partners/vfestival-logo.png" alt="V Festival Logo">
          <p class="testimony">FireFly events did a great job setting up and helping us run one of our first venues. we will definitely be useing them again.</p>
        </div>
        <button class="button">Read More...</button>
      </section>

      <section id="partners">
        <img src="img/logo/partners/capital-events-logo.png" alt="Capital Events" />
        <img src="img/logo/partners/vfestival-logo-alt.png" alt="V Festival" />
        <img src="img/logo/partners/festival-republic-logo.png" alt="Festival Republic" />
        <img src="img/logo/partners/summer-camp-logo.png" alt="Summer Camp" />
      </section>

      <section id="social-media">
        <div class="embedded-media">
          <iframe id="facebook-feed" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpg%2Fnetmatters&tabs=timeline&width=500&height=350&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="500" height ="700" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        </div>

        <div class="embedded-media">
          <a class="twitter-timeline" data-width="100%" data-height="auto"
          href="https://twitter.com/netmattersltd?ref_src=twsrc%5Etfw">Tweets by netmattersltd</a>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </section>
    </main>

<?php include 'footer.php';?>
