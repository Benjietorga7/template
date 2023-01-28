@extends('homepage.layouts.app')
 
@section('title', 'Homepage')
 
@section('content')


        @include('homepage.includes.nav')
        <style>
         .banner-image{
            background-image: url('assets/img/a2.jpg');
            background-size: cover;

         }

         .image-resize {
            height: 500px;
            width:500px;
         }
         .gallery img{
            max-width: 100%;
            max-height:100%;
            padding: 5px;
            background: white;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.3);
            cursor: pointer;
         }
         .gallery{
            padding: 80px 0px;
         }
         .gallery h3{
            margin-bottom: 25px;
            color: gray;
         } 

        </style>

        <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
           <div class="content text center">
            <h1 class="text-white"> REY ROSE CONSTRUCTION AND SUPPLY
            
            </h1>
            </div>
        
        </div>
        
       
        <!-- About-->
        <section class="about-section text-center bg-dark" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-5">
                      </div>
                      
        <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/tools.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-80 my-auto text-right text-lg-left">
                                    
                                    <p class="mb-0 text-white-50 texts">Rey Rose Construction and supply is a “One-Stop Shop” for high quality homebuilding hardware and construction materials, paints, home furnishing and a complete line of hardware items and accessories. It is now on its 34th year of dedicated service to its patrons and customers which include contractors, engineers, architects, interior designers, real estate developers, institutions and homeowners    </p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ro1-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/loc.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                   
                                    <p class="mb-0 text-white-50">We are located   @XH4J+CVM, National Highway, Crossing Tiniwisan, Alviola Village, Butuan City, 8600 Agusan Del Norte  0853423319</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                               </div>
              
        </section>
        <!-- Projects-->
        <section class="about-section text-center bg-gray" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Service-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/eq1.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4 class="text-white-50">Service</h4>
                            <p class="mb-0 text-white-50">Our company offers free delivery of materials that has been bought from our company, We do also offer electrical works, mechanical works, structural works, material & equipment supply, inspection, planning, design, logistics, and the like.</p>
                        </div>
                    </div>
                </div>
                <!-- gallery-->
                <section class="gallery">
                    <h3 >Here are the list of our Products</h3>
                    <div class="container-lg">
                        <div class="row gy-5 row-cols-1 row-cols-sm-2 row-cols-md-3">
                            
                            <div class="col">
                                <img src="assets/img/tool.jpg" class="gallery-item" alt="Gallery1">
                                <p class="text-white">complete set of tools</p>
                            </div>
                            <div class="col">
                                <img src="assets/img/semento.jpg" class="gallery-item" alt="Gallery1">
                                <p class="text-white">Cements</p>
                            </div>
                            <div class="col">
                                 <img src="assets/img/ko.jpg" class="gallery-item" alt="Gallery1">
                                <p class="text-white">Heavy equipments</p>
                            </div>
                            <div class="col">
                                <img src="assets/img/tiles.jpg" class="gallery-item" alt="Gallery1">
                                <p class="text-white">floor tiles</p>
                            </div>
                            <div class="col">
                                <img src="assets/img/puthaw.jpg" class="gallery-item" alt="Gallery1">
                                <p class="text-white">iron rod</p>
                            </div>
                            <div class="col">
                                <img src="assets/img/bas.jpg" class="gallery-item" alt="Gallery1">
                                <p class="text-white">sand dumps</p>
                            </div>
                            <div class="col">
                                <img src="assets/img/rocks.jpg" class="gallery-item" alt="Gallery1">
                                <p class="text-white">rock pebbles</p>
                            </div>
                            <div class="col">
                                <img src="assets/img/pipe.jpg" class="gallery-item" alt="Gallery1">
                                <p class="text-white">pipe</p>
                            </div>
                            <div class="col">
                                <img src="assets/img/roofs.jpg" class="gallery-item" alt="Gallery1">
                                <p class="text-white">Variety of Roofs</p>
                            </div>
                           
                        </div>
                    </div>
                
                </section>
                
               <div class="modal fade" id="gallery-popup" tabinex="-1" aria-labelledby="exampleModalLabel"aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                                    <div class="modal-body">
                                        <img src="assets/img/q2.jpg" class="modal-img" alt="Modal Image">
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                  
                     <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                   
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Signup-->
        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Subscribe to receive updates!</h2>
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Email address input-->
                            <div class="row input-group-newsletter">
                                <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="Enter email address..." aria-label="Enter email address..." data-sb-validations="required,email" /></div>
                                <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Notify Me!</button></div>
                            </div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is required.</div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.</div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="https://www.google.com/maps/place/Rey+Rose+Construction+and+Supply/@8.956078,125.5799941,17z/data=!4m5!3m4!1s0x3301ead3e9d33801:0x79ca49d34a61a9c!8m2!3d8.9560844!4d125.5822134" target="https://www.google.com/maps/place/Rey+Rose+Construction+and+Supply/@8.956078,125.5799941,17z/data=!4m5!3m4!1s0x3301ead3e9d33801:0x79ca49d34a61a9c!8m2!3d8.9560844!4d125.5822134">4923 Market Street, Orlando FL</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><p>hello@yourdomain.com</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">+1 (555) 902-8832</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    
                    <a class="mx-2" href="https://www.facebook.com/pages/Rey-Rose-Construction-Supply/656232811244186" target="https://www.facebook.com/pages/Rey-Rose-Construction-Supply/656232811244186"><i class="fab fa-facebook-f"></i></a>
                    
                </div>
            </div>
        </section>
      
    @endsection