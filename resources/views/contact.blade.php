@extends('layouts.default')

@section('content')

 <div class="page sub-page">

  @include('includes.navbar2')

        

        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <section class="content">
            <section class="block">
                <div class="map height-500px" id="map-contact"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h2>Get In Touch</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit
                                amet fermentum sem. Class aptent taciti sociosqu ad litora
                            </p>
                            <br>
                            <figure class="with-icon">
                                <i class="fa fa-map-marker"></i>
                                <span> Vojvode Stepe Stepanovic<br>Bujanovac, bb </span>
                            </figure>
                            <br>
                            <figure class="with-icon">
                                <i class="fa fa-phone"></i>
                                <span>+381 62220330</span>
                            </figure>
                            <figure class="with-icon">
                                <i class="fa fa-envelope"></i>
                                <a href="#">katrori-shop@katrori.net</a>
                            </figure>
                            <figure class="with-icon">
                                <i class="fa fa-envelope"></i>
                                <a href="#">support@example.com</a>
                            </figure>
                        </div>
                        <!--end col-md-4-->
                        <div class="col-md-8">
                            <h2>Contact Form</h2>
                            <form class="form email">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="col-form-label required">Your Name</label>
                                            <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="col-form-label required">Your Email</label>
                                            <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" required>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                </div>
                                <!--end row-->
                                <div class="form-group">
                                    <label for="subject" class="col-form-label">Subject</label>
                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject">
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="message" class="col-form-label required">Your Message</label>
                                    <textarea name="message" id="message" class="form-control" rows="4" placeholder="Your Message" required></textarea>
                                </div>
                                <!--end form-group-->
                                <button type="submit" class="btn btn-primary float-right">Send Message</button>
                            </form>
                            <!--end form-->
                        </div>
                        <!--end col-md-8 -->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
        <!--end content-->

    @include('includes.footer')
        
    </div>

    

   

@stop