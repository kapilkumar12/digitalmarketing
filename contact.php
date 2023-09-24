<?php

include "header.php"
?>
<div class="container-fluid bg-rules contact-bg contact-overlay">
  <div class="container">
    <div class="row">
      <h2 class="main-contact">Contact</h2>
    </div>
  </div>
</div>

<div class="container">
  <div class="row m-3">
    <div class="col-lg-4">
      <div
        class="contact-paragraph text-center wow slideInLeft"
        data-wow-duration="2s"
        data-wow-delay="2s"
      >
        <img src="images/contact-location.webp" alt="contact" />
        <h3>Address Information</h3>
        <p>11009 new delhi</p>
      </div>
    </div>

    <div class="col-lg-4">
      <div
        class="contact-paragraph text-center wow slideInLeft"
        data-wow-duration="2s"
        data-wow-delay="5s"
      >
        <img src="images/contact-phone.webp" alt="contact" />
        <h3>Contact Details</h3>
        <p>+91 9876543210</p>
        <p>digitalmarketing@gmail.com</p>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="text-center contact-paragraph">
        <img src="images/contact-share.webp" alt="contact" />
        <h3>Stay In Touch</h3>
        <ul class="contact-ul">
          <a class="contact-icon" href="" target="_blink">
            <i class="fa-brands fa-facebook"></i>
          </a>
          <a class="contact-icon" href="" target="_blink"
            ><i class="fa-brands fa-instagram"></i
          ></a>
          <a class="contact-icon" href="" target="_blink"
            ><i class="fa-brands fa-square-twitter"></i
          ></a>
          <a class="contact-icon" href="" target="_blink"
            ><i class="fa-brands fa-linkedin"></i
          ></a>
        </ul>
      </div>
    </div>
  </div>

  <div class="row text-center">
    <h2>Contact Us</h2>
    <p>
      It is a long established fact that a reader will be distracted by the
      readable content of a page when looking at its layout. The point of using
      Lorem Ipsum is that it has a more-or-less normal
    </p>
  </div>
</div>

<div class="container-fluid contact-form-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form
          id="contactForm"
          action="https://formspree.io/f/myyqjvkk"
          method="POST"
        >
          <div class="mb-3">
            <label for="name" class="form-label contact-form-label"
              >Name<span>*</span></label
            >
            <input
              type="text"
              class="form-control contact-form-control"
              id="name"
              aria-describedby="name"
              name="name"
              placeholder="Enter your name"
              required
            />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label contact-form-label"
              >Email<span>*</span></label
            >
            <input
              type="email"
              class="form-control contact-form-control"
              id="email"
              aria-describedby="email"
              name="email"
              placeholder="Enter your email"
              required
            />
          </div>

          <div class="mb-3">
            <label for="mobile" class="form-label contact-form-label"
              >Mobile No.<span>*</span></label
            >
            <input
              type="number"
              class="form-control contact-form-control"
              id="mobile"
              aria-describedby="mobile"
              name="mobile"
              placeholder="Enter your mobile no"
              required
            />
          </div>

          <div class="mb-3">
            <label for="select" class="form-label contact-form-label"
              >What are you interested in?<span>*</span></label
            >
            <select
              class="form-select contact-form-select"
              aria-label="Default select example"
              name="Interested"
            >
              <option selected>Open this select menu</option>
              <option>Search Engine Optimization (SEO)</option>
              <option>Pay Per Click (PPC)</option>
              <option>Social Media Marketing</option>
              <option>Social Media Optimization</option>
              <option>Web Development</option>
              <option>Content Writing</option>
            </select>
          </div>
          <input
            name="subject"
            type="hidden"
            value="New submission from {{ email }}"
          />

          <div class="mb-3">
            <label for="message" class="form-label contact-form-label"
              >Message<span>*</span></label
            >
            <textarea
              type="text"
              class="form-control contact-form-control"
              id="message"
              aria-describedby="message"
              name="message"
              rows="5"
              placeholder="message"
            ></textarea>

            <!-- <div class="captcha">
              <div id="captchaValue"></div>
              <input
                type="text"
                name="captcha_code"
                class="form-control"
                id="captcha_code"
                placeholder=""
              />
            </div> -->
            <div class="contact-btan">
              <button class="button-62" role="button" type="submit" id="submit">
                Submit
              </button>
            </div>
          </div>
        </form>
      </div>

      <div class="col-md-6">
        <div class="contact-image">
          <img src="images/contact1.avif" alt="contact us" />
        </div>
      </div>
    </div>
  </div>
</div>

<div>
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d111994.33950524937!2d77.152256!3d28.694937600000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1693719932696!5m2!1sen!2sin"
    width="100%"
    height="450"
    style="border: 0"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"
  ></iframe>
</div>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
  setTimeout(() => {
    window.onbeforeunload = () => {
      for (const form of document.getElementsByTagName("form")) {
        form.reset();
      }
    };
  }, 5000);

  //   var allValue = [
  //     "A",
  //     "B",
  //     "C",
  //     "D",
  //     "E",
  //     "F",
  //     "G",
  //     "H",
  //     "I",
  //     "J",
  //     "K",
  //     "L",
  //     "M",
  //     "N",
  //     "O",
  //     "P",
  //     "Q",
  //     "R",
  //     "S",
  //     "T",
  //     "U",
  //     "V",
  //     "W",
  //     "X",
  //     "Y",
  //     "Z",
  //     "1",
  //     "2",
  //     "3",
  //     "4",
  //     "5",
  //     "6",
  //     "7",
  //     "8",
  //     "9",
  //     "0",
  //   ];

  //   function newCaptcha() {
  //     var cVal1 = allValue[Math.floor(Math.random() * allValue.length)];
  //     var cVal2 = allValue[Math.floor(Math.random() * allValue.length)];
  //     var cVal3 = allValue[Math.floor(Math.random() * allValue.length)];
  //     var cVal4 = allValue[Math.floor(Math.random() * allValue.length)];
  //     var cVal5 = allValue[Math.floor(Math.random() * allValue.length)];
  //     var cVal6 = allValue[Math.floor(Math.random() * allValue.length)];
  //     var cValue = cVal1 + cVal2 + cVal3 + cVal4 + cVal5 + cVal6;
  //     captchaValue.innerHTML = cValue;
  //   }
  //   newCaptcha();

  //   setTimeout(() => {
  //     document.querySelector("#submit").addEventListener("click", newCaptcha);
  //     thisValue = "";
  //     captcha_code.addEventListener("change", function () {
  //       thisValue = captcha_code.value;
  //     });
  //   }, "5000");
</script>
<?php

include "footer.php"
?>
