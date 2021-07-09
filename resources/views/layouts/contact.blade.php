<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.includes.meta')
    <title>ParaGone Cineplex | Contact</title>
</head>

<body>

    @include('layouts.includes.header')
    <!--/breadcrumbs -->
    <div class="w3l-breadcrumbs">
        <nav id="breadcrumbs" class="breadcrumbs">
            <div class="container page-wrapper">
                <a href="/">Home</a> » <span class="breadcrumb_last" aria-current="page">Contact</span>
            </div>
        </nav>
    </div>
    <!--//breadcrumbs -->
    <!-- contact1 -->
    <section class="w3l-contact-1">
        <div class="contacts-9 py-5">
            <div class="container py-lg-4">
                <div class="headerhny-title text-center">
                    <h4 class="sub-title text-center">Contact us</h4>
                    <h3 class="hny-title mb-0">Leave a Message</h3>
                    <p class="hny-title mb-lg-5 mb-4">If you have a question regarding our services, feel free to contact us using the form below.</p>
                </div>
                <div class="contact-view mt-lg-5 mt-4">
                    <div class="conhny-form-section">
                        <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="formhny-sec">
                            <div class="form-grids">
                                <div class="form-input">
                                    <input type="text" name="w3lName" id="w3lName" placeholder="Enter your name *" required="" />
                                </div>
                                <div class="form-input">
                                    <input type="text" name="w3lSubject" id="w3lSubject" placeholder="Enter subject " required />
                                </div>
                                <div class="form-input">
                                    <input type="email" name="w3lSender" id="w3lSender" placeholder="Enter your email *" required />
                                </div>
                                <div class="form-input">
                                    <input type="text" name="w3lPhone" id="w3lPhone" placeholder="Enter your Phone Number *" required />
                                </div>
                            </div>
                            <div class="form-input mt-4">
                                <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your query here" required=""></textarea>
                            </div>
                            <div class="submithny text-right mt-4">
                                <button class="btn read-button">Submit Message</button>
                            </div>
                        </form>
                    </div>

                    <div class="d-grid contact-addres-inf mt-5 pt-lg-4">
                        <div class="contact-info-left d-grid">
                            <div class="contact-info">
                                <div class="icon">
                                    <span class="fa fa-location-arrow" aria-hidden="true"></span>
                                </div>
                                <div class="contact-details">
                                    <h4>Address:</h4>
                                    <p>ToulKork, Phnom Penh, Cambodia</p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="icon">
                                    <span class="fa fa-phone-alt" aria-hidden="true"></span>
                                </div>
                                <div class="contact-details">
                                    <h4>Phone:</h4>
                                    <p><a href="tel:+598-658-456">+855 88 888 88</a></p>
                                    <p><a href="tel:+598-658-457">+855 88 888 88</a></p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="icon">
                                    <span class="fa fa-envelope" aria-hidden="true"></span>
                                </div>
                                <div class="contact-details">
                                    <h4>Mail:</h4>
                                    <p><a href="mailto:mail@example.com" class="email">info@gmail.com</a></p>
                                    <p><a href="mailto:mail@example.com" class="email">contact@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.5734929013533!2d104.89578755075172!3d11.58240269173736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109517bf7757d23%3A0x965c34888684bf1!2sParagon%20International%20University!5e0!3m2!1sen!2skh!4v1625685201308!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>        </div>
    </section>
    <!-- /contact1 -->
    @include('layouts.includes.footer')
</body>

</html>
