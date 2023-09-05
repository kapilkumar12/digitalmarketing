<link rel="stylesheet" href="css/home.css" />

<?php

include "header.php"
?>

<div class="container-fluid">
  <div
    id="carouselExampleDark"
    class="carousel carousel-dark slide"
    data-bs-ride="carousel"
  >
    <div class="carousel-indicators">
      <button
        type="button"
        data-bs-target="#carouselExampleDark"
        data-bs-slide-to="0"
        class="active"
        aria-current="true"
        aria-label="Slide 1"
      ></button>
      <button
        type="button"
        data-bs-target="#carouselExampleDark"
        data-bs-slide-to="1"
        aria-label="Slide 2"
      ></button>
      <button
        type="button"
        data-bs-target="#carouselExampleDark"
        data-bs-slide-to="2"
        aria-label="Slide 3"
      ></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="..." class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="..." class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button
      class="carousel-control-prev"
      type="button"
      data-bs-target="#carouselExampleDark"
      data-bs-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button
      class="carousel-control-next"
      type="button"
      data-bs-target="#carouselExampleDark"
      data-bs-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
      <div class="home-service-section">
        <img src="images/seo.png" alt="search engine optimization" />
        <h3>Search Engine Optimization (SEO)</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus
          maiores perferendis saepe autem in iusto, quis, unde officia
          reprehenderit ut dolore perspiciatis? Facere quas assumenda et vel
          minima, nulla quam.
        </p>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
      <div class="home-service-section">
        <img src="images/pay-per-click.png" alt="pay per click" />
        <h3>Pay Per Click (PPC)</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus
          maiores perferendis saepe autem in iusto, quis, unde officia
          reprehenderit ut dolore perspiciatis? Facere quas assumenda et vel
          minima, nulla quam.
        </p>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
      <div class="home-service-section">
        <img src="images/digital-campaign.png" alt="social media marketing" />
        <h3>Social Media Marketing</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus
          maiores perferendis saepe autem in iusto, quis, unde officia
          reprehenderit ut dolore perspiciatis? Facere quas assumenda et vel
          minima, nulla quam.
        </p>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
      <div class="home-service-section">
        <img src="images/social-media.png" alt="search engine optimization" />
        <h3>Search Media Optimization (SMO)</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus
          maiores perferendis saepe autem in iusto, quis, unde officia
          reprehenderit ut dolore perspiciatis? Facere quas assumenda et vel
          minima, nulla quam.
        </p>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
      <div class="home-service-section">
        <img src="images/programming.png" alt="web development" />
        <h3>Web Development</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus
          maiores perferendis saepe autem in iusto, quis, unde officia
          reprehenderit ut dolore perspiciatis? Facere quas assumenda et vel
          minima, nulla quam.
        </p>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
      <div class="home-service-section">
        <img src="images/blogger.png" alt="content writing" />
        <h3>Content Writing</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus
          maiores perferendis saepe autem in iusto, quis, unde officia
          reprehenderit ut dolore perspiciatis? Facere quas assumenda et vel
          minima, nulla quam.
        </p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid home-accordian home-accordian-overlay">
  <div class="container">
    <div class="row bg-white grid-section-row">
      <div class="col-md-6">
        <div class="accordian-left-image">
          <img src="images/choose-img.jpg" alt="" />
        </div>
      </div>
      <div class="col-md-6 accordian-right-section">
        <h3 class="home-headings mt-3">WHY CHOOSE US</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque iure
          tempore nam quibusdam illo ex reprehenderit, dicta quia, iste, quis
          consequatur ad quaerat voluptatum repellendus? Eos quisquam
          consequuntur nobis natus.
        </p>

        <div class="accordion" id="myAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button
                type="button"
                class="accordion-button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseOne"
              >
                1. What is HTML?
              </button>
            </h2>
            <div
              id="collapseOne"
              class="accordion-collapse collapse show"
              data-bs-parent="#myAccordion"
            >
              <div class="card-body">
                <p>
                  HTML stands for HyperText Markup Language. HTML is the
                  standard markup language for describing the structure of web
                  pages.
                  <a
                    href="https://www.tutorialrepublic.com/html-tutorial/"
                    target="_blank"
                    >Learn more.</a
                  >
                </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button
                type="button"
                class="accordion-button collapsed"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwo"
              >
                2. What is Bootstrap?
              </button>
            </h2>
            <div
              id="collapseTwo"
              class="accordion-collapse collapse"
              data-bs-parent="#myAccordion"
            >
              <div class="card-body">
                <p>
                  Bootstrap is a sleek, intuitive, and powerful front-end
                  framework for faster and easier web development. It is a
                  collection of CSS and HTML conventions.
                  <a
                    href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/"
                    target="_blank"
                    >Learn more.</a
                  >
                </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button
                type="button"
                class="accordion-button collapsed"
                data-bs-toggle="collapse"
                data-bs-target="#collapseThree"
              >
                3. What is CSS?
              </button>
            </h2>
            <div
              id="collapseThree"
              class="accordion-collapse collapse"
              data-bs-parent="#myAccordion"
            >
              <div class="card-body">
                <p>
                  CSS stands for Cascading Style Sheet. CSS allows you to
                  specify various style properties for a given HTML element such
                  as colors, backgrounds, fonts etc.
                  <a
                    href="https://www.tutorialrepublic.com/css-tutorial/"
                    target="_blank"
                    >Learn more.</a
                  >
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php

include "footer.php"
?>
