<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style-main.css">
    <link rel="stylesheet" href="style-main.css">
</head>


<body>
    <div class="container-fluid bg-rules contact-bg contact-overlay">
        <div class="container">
            <div class="row">
                <h2 class="main-contact">Contact</h2>

            </div>

        </div>
    </div>

    <div class="container">
        <div class="row m-3">
            <div class="col-md-4">
                <div class="contact-paragraph text-center">
                    <img src="images/map.png" alt="contact">
                    <h3>Address Information</h3>
                    <p>11009 new delhi</p>
                </div>

            </div>


            <div class="col-md-4">
                <div class="contact-paragraph text-center">
                    <img src="images/smartphone.png" alt="contact">
                    <h3>Contact Details</h3>
                    <p>+91 9876543210</p>
                    <p>digitalmarketing@gmail.com</p>
                </div>

            </div>

            <div class="col-md-4">
                <div class="text-center contact-paragraph">
                    <img src="images/share.png" alt="contact">
                    <h3>Stay In Touch</h3>
                    <ul class="contact-ul">
                        <a class="contact-icon" href="" target="_blink">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a class="contact-icon" href="" target="_blink"><i class="fa-brands fa-instagram"></i></a>
                        <a class="contact-icon" href="" target="_blink"><i class="fa-brands fa-square-twitter"></i></a>
                        <a class="contact-icon" href="" target="_blink"><i class="fa-brands fa-linkedin"></i></a>
                    </ul>
                </div>

            </div>

        </div>

        <div class="row text-center">
            <h2>Contact Us</h2>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
        </div>
    </div>

    <div class="container-fluid contact-form-bg">
        <div class="container">


            <div class="row">
                <div class="col-md-6">
                    <form action="">



                        <div class="mb-3">
                            <label for="name" class="form-label contact-form-label">Name<span>*</span></label>
                            <input type="text" class="form-control" id="name" aria-describedby="name" name="name"
                                value="name" required>

                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label contact-form-label">Email<span>*</span></label>
                            <input type="email" class="form-control" id="email" aria-describedby="email" name="email"
                                value="email" required>

                        </div>


                        <div class="mb-3">
                            <label for="mobile" class="form-label contact-form-label">Mobile No.<span>*</span></label>
                            <input type="number" class="form-control" id="mobile" aria-describedby="mobile"
                                name="mobile" value="mobile" required>

                        </div>
                        <div class="mb-3">
                            <label for="select" class="form-label contact-form-label">What are you interested
                                in?<span>*</span></label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="message" class="form-label contact-form-label">Message<span>*</span></label>
                            <textarea type="text" class="form-control" id="message" aria-describedby="message"
                                name="message" value="message" rows="5" placeholder="message"></textarea>


                            <div class="contact-btan">
                                <button class="button-62" role="button">Submit</button>
                            </div>

                        </div>

                    </form>
                </div>

                <div class="col-md-6">
                    <div class="contact-image">
                        <img src="images/contact1.avif" alt="contact us">

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d111994.33950524937!2d77.152256!3d28.694937600000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1693719932696!5m2!1sen!2sin"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


</body>

</html>
