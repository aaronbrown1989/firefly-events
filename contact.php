<?php include 'header.php';?>
  <main>
    <h1>Contact Us</h1>
    <p class="tagline">If you want to hire us for your event or just touch base, fill in the form below or give us a call!</p>
    <form id="contact-form" onsubmit="FormValidation()" name="contact-form">
      <label for="contact-name">Name <strong class="large-req"> *</strong></label>
      <input type="text" name="name" id="contact-name" />
      <label for="contact-email">Email<strong class="large-req"> *</strong></label>
      <input type="text" name="email" id="contact-email" />
      <label for="contact-message">Message<strong class="large-req"> *</strong></label>
      <textarea name="message" id="contact-message" style="max-width: 39.4rem;" maxlength="500"></textarea>
      <button class="button" type="submit">Send</button>
    </form>

    <div class="contact-info-container">
      <div class="map-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2424.6604577145145!2d1.1342178160005023!3d52.57575133984825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9ddac8dba0b4b%3A0x9c77ffbfe7911dab!2sNetmatters!5e0!3m2!1sen!2suk!4v1554296578146!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <ul class="contact-info">
        <li><ion-icon name="ios-home"></ion-icon> <span><a class="link-contact" href="https://www.google.com/maps/place/Netmatters/@52.5757513,1.1342178,17z/data=!3m1!4b1!4m5!3m4!1s0x47d9ddac8dba0b4b:0x9c77ffbfe7911dab!8m2!3d52.5757481!4d1.1364065" target="_blank" >Penfold Drive, Gateway 11 Business Park, Wymondham, Norfolk, NR18 0WZ</a></span></li>
        <li><ion-icon name="ios-call"></ion-icon> <span><a class="link-contact"  href="tel:01234456789">01234-456-789</a></span></li>
        <li><ion-icon name="ios-mail"></ion-icon> <span><a class="link-contact" href="mailto:info@ffevents.co.uk">info@ffevents.co.uk</a></span></li>
      </ul>
    </div>
  </main>
<?php include 'footer.php';?>

