@extends('layouts.mainlayout')
@section('content')

        <!-- Start Contact Area -->
        <section class="contact-area ptb-100">
                <div class="container">
                    <h3 style="text-align:right">QR Code Generator</h3>
                    <div class="contact-inner">
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-12">
                                                        <nav>
                                                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                                <a class="nav-item nav-link active" id="nav-url-tab" data-toggle="tab" href="#nav-url" role="tab" aria-controls="nav-url" aria-selected="true">Url</a>
                                                                <a class="nav-item nav-link" id="nav-vcard-tab" data-toggle="tab" href="#nav-vcard" role="tab" aria-controls="nav-vcard" aria-selected="false">vCard</a>
                                                                <a class="nav-item nav-link" id="nav-wifi-tab" data-toggle="tab" href="#nav-wifi" role="tab" aria-controls="nav-wifi" aria-selected="false">WiFi</a>
                                                                <a class="nav-item nav-link" id="nav-email-tab" data-toggle="tab" href="#nav-email" role="tab" aria-controls="nav-email" aria-selected="false">E-mail</a>

                                                                <!-- <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                                                                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">About</a> -->
                                                            </div>
                                                        </nav>
                                                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                                            <div class="tab-pane fade show active" id="nav-url" role="tabpanel" aria-labelledby="nav-home-tab">
                                                                <div class="contact-form">
                                                                    <!-- <h3>Let's Start Your Free Trial</h3> -->
                                                                    <form id="contactForm">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-md-12">
                                                                                <div class="form-group">
                                                                                    <input type="text" name="website" id="name" class="form-control" required data-error="Please enter your url" placeholder="Website Url">
                                                                                    <div class="help-block with-errors"></div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="col-lg-6 col-md-6">
                                                                                <div class="form-group">
                                                                                    <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                                                                                    <div class="help-block with-errors"></div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6 col-md-6">
                                                                                <div class="form-group">
                                                                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                                                                                    <div class="help-block with-errors"></div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-12 col-md-12">
                                                                                <div class="form-group">
                                                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Your Message"></textarea>
                                                                                    <div class="help-block with-errors"></div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-12 col-md-12">
                                                                                <button type="submit" class="default-btn"><i class='bx bxs-paper-plane'></i>Send Message<span></span></button>
                                                                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="nav-vcard" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                                <div class="contact-form">
                                                                    <!-- <h3>Let's Start Your Free Trial</h3> -->
                                                                    <form id="contactForm">
                                                                        <div class="row">
                                                                                <div class="col-lg-6 col-md-6">
                                                                                        <div class="form-group">
                                                                                            <input type="text" name="first_name" id="first_name" required data-error="Please enter your name" class="form-control" placeholder="QR Name">
                                                                                            <div class="help-block with-errors"></div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-lg-6 col-md-6">
                                                                                        <div class="form-group">
                                                                                            <input type="text" name="last_name" id="last_name" class="form-control" required data-error="Please enter your last anme" placeholder="Last Name">
                                                                                            <div class="help-block with-errors"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12 col-md-12">
                                                                                            <div class="form-group">
                                                                                                <input type="text" name="email" id="email" required data-error="Please enter your email" class="form-control" placeholder="Your Email">
                                                                                                <div class="help-block with-errors"></div>
                                                                                            </div>
                                                                                        </div>

                                                                            <div class="col-lg-12 col-md-12">
                                                                                <div class="form-group">
                                                                                    <input type="text" name="website" id="name" class="form-control" required data-error="Please enter your url" placeholder="Website Url">
                                                                                    <div class="help-block with-errors"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6">
                                                                                <div class="form-group">
                                                                                    <input type="text" name="phone_number" id="msg_subject" class="form-control" required data-error="Please enter your phone number" placeholder="Your Phone Number">
                                                                                    <div class="help-block with-errors"></div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </form>
                                                                </div>

                                                            </div>
                                                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                              asd12312  Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                                                            </div>
                                                            <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                                               a12312 Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                                                            </div>
                                                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                                    asd12312  Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                                                            </div>
                                                            <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                                                     a12312 Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                                                            </div>
                                                        </div>

                                                    </div>
                            <!--QR Generator-->
                                                    <div class="col-lg-4 col-md-12">
                                                            <div class="contact-form">

                                                                <form id="contactForm">
                                                                    <div class="row">
                                                                        <div class="col-lg-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <img src="assets/img/qrcode.png" alt="Italian Trulli">
                                                                                <button type="submit" class="default-btn-qr"><i class='bx bxs-paper-plane'></i>Download QRCode<span></span></button>
                                                                                <div id="msgSubmit" class="h3 text-center hidden">

                                                                                </div>
                                                                                <div class="clearfix">

                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>

                                    </div>
                                </div>
                    </div>
                </div>
            </section>
            <!-- End Contact Area -->

            <!-- Start Our Loving Clients Area -->
            <section class="our-loving-clients ptb-100 bg-f4f5fe">
                <div class="container">
                    <div class="section-title">
                        <h2>Our Loving Clients</h2>
                    </div>

                    <div class="clients-logo-list align-items-center">
                        <div class="single-clients-logo">
                            <a href="#">
                                <img src="assets/img/clients-image/1.png" alt="image">
                            </a>
                        </div>

                        <div class="single-clients-logo">
                            <a href="#">
                                <img src="assets/img/clients-image/2.png" alt="image">
                            </a>
                        </div>

                        <div class="single-clients-logo">
                            <a href="#">
                                <img src="assets/img/clients-image/3.png" alt="image">
                            </a>
                        </div>

                        <div class="single-clients-logo">
                            <a href="#">
                                <img src="assets/img/clients-image/4.png" alt="image">
                            </a>
                        </div>

                        <div class="single-clients-logo">
                            <a href="#">
                                <img src="assets/img/clients-image/5.png" alt="image">
                            </a>
                        </div>

                        <div class="single-clients-logo">
                            <a href="#">
                                <img src="assets/img/clients-image/6.png" alt="image">
                            </a>
                        </div>

                        <div class="single-clients-logo">
                            <a href="#">
                                <img src="assets/img/clients-image/7.png" alt="image">
                            </a>
                        </div>

                        <div class="single-clients-logo">
                            <a href="#">
                                <img src="assets/img/clients-image/8.png" alt="image">
                            </a>
                        </div>

                        <div class="single-clients-logo">
                            <a href="#">
                                <img src="assets/img/clients-image/9.png" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Our Loving Clients Area -->


@endsection
