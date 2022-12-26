@extends('layouts.app')
@section('title')
    Empower Air Technologies
@endsection

@section('hero')
Empower Air Technologies
@endsection

@section('contect')
     
 <main id="main">

      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <section id="portfolio" class="portfolio">
                <div class="container" data-aos="fade-up">
          
                  <div class="section-title">
                    <p style="text-align: center">About </p>
                    <a name="About"></a>
                  </div>
          
                  <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                      <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active"> WHO WEARE </li>

                        <li data-filter="{{route("whoware")}}">WHAT WE DO</li>
                        <li data-filter=".filter-web" >OUR VISION</li>
                        <li data-filter=".filter-web">OUR FACTORIES</li>
                        <li data-filter=".filter-web">DOWNLOAD BROCHURE</li>
                      </ul>
                    </div>
                  </div>
          
                  <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                  </div>
          
                </div>
              </section>


@yield('About')
        <div class="container" data-aos="fade-up">
  <div id="who">
          
<div class="row">
  <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
    <img src="assets/img/1.jpg" class="img-fluid" alt="">
  </div>
  <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">    <span class="tw-dropcap" style="background-color: #FF8F00;">
         E
       </span>


mpower Air Technologies (E.A.T.) is a limited liability company organized under Construction
Products Holding Company (C.P.C.) and managed by the Empower Team.

<p>
CPC is a Saudi Joint stock holding company and since 1982, its mission is to provide clients with
quality construction products and services as well as add value to their business strategy.
CPC operates as a "One Stop Shop” providing consistent services and quality work along with
a comprehensive range of building materials and services under one roof.
</p>
<p>
E.A.T. specializes in the manufacturing and production of all the elements of the Air
Distribution Installation along with all of the associated engineering services and technical
support.


With factories in both the Western and Central regions of Saudi Arabia and with over 250 staff 
and fabricators, E.A.T. can supply over 6,000 tons of ducting and accessories per annum.

The two factories are identical and equipped with state of art machinery mostly out of the
USA. The E.A.T. facilities stand among the most developed manufacturing entities of C.P.C.
The E.A.T. facilities stand among the most developed manufacturing entities of C.P.C.


In addition to manufacturing and supply, E.A.T. can offer as well all the associated engineering
services and technical support.

At E.A.T., we place the potential of our company and the expertise of our team at the disposal
of our clients in order to serve them better.     
</p> 

  </div>
</div>
  </div>
        </div>
      </section><!-- End About Section -->
      
						<!-- What We Do -->		

            <div id="whatwedo" style="display: none">
              <div class="row">
          <div class="tw-element  col-md-6 tw-animate-gen" data-animation="stretchLeft" data-animation-delay="0" data-animation-offset="90%">
<ul>

 E.A.T. produces, to the highest international standards:
<li class="bulletcolor">
                <span>
    Rectangular and spiral ducts and fittings.
                </span>
              </li>
<li class="bulletcolor">
                <span>
  Flexible ducts.

                </span>
              </li>
<li class="bulletcolor">
                <span>
  All types of dampers.

                </span>
              </li>
<li class="bulletcolor">
                <span>
  Access Doors and Plenum Boxes.

                </span>
              </li>
<li class="bulletcolor">
                <span>
  VAV Boxes.

                </span>
              </li>
<li class="bulletcolor">
                <span>
  Sand Trap Louvers.

                </span>


              </li>
  <!-- The Material used are: -->
  The material used are:
<li class="bulletcolor">
                <span>
  Galvanized Iron.

                </span>
              </li>
<li class="bulletcolor">
                <span>
  Stainless Steel.

                </span>
              </li>
<li class="bulletcolor">
                <span>
  Black Steel.

                </span>
              </li>
<li class="bulletcolor">
                <span>
  Aluminium.

                </span>
              </li>


                </ul>
                
 </div>
             <div class="tw-element  col-md-6 tw-animate-gen" data-animation="stretchLeft" data-animation-delay="0" data-animation-offset="90%">
           
            
            <ul>
           <!-- The produced products have the option: -->
The produced products have the option:

<li class="bulletcolor">
                <span>
  Of being Flame Retardant.

                </span>
              </li>
<li class="bulletcolor">
                <span>
  Of having double wall construction.

                </span>
              </li>
<li class="bulletcolor">
                <span>
  Of being insulated either internally or externally.

                </span>
              </li>
<!-- In addition, E.A.T. can provide engineering services and technical support in terms of:-->
In addition, E.A.T. can provide engineering services and technical support in terms of:
<li class="bulletcolor">
                <span>
  Air Distribution Design.

                </span>
              </li>
<li class="bulletcolor">
                <span>
  Air Distribution Drawings.

                </span>
              </li>
<li class="bulletcolor">
                <span>
 Selection of materials and proposing convenient technical options.

                </span>
              </li>
            
            </ul>
            
          </div>
  <br>
              </div>
            </div>
        
      
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">
  
          <div class="text-center">
            <h3>Jaddah Factory in number</h3>
           <p style="text-align: center">

            <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    {{-- <i class="bi bi-emoji-smile"></i> --}}
                 <p style="font-size:80px; text-align:left" >   <span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Factory Size ( in m2)</strong> </p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    {{-- <i class="bi bi-journal-richtext"></i> --}}
                    <p style="font-size:80px; text-align:center"><span data-purecounter-start="0" data-purecounter-end="3000" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Capacity (in tons)</strong> </p>
                  </div>
                </div>
  

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                      {{-- <i class="bi bi-journal-richtext"></i> --}}
                      <p style="font-size:80px; text-align:right"> <span data-purecounter-start="0" data-purecounter-end="130" data-purecounter-duration="2" class="purecounter"></span>
                      <p><strong>Emptyees</strong> </p>
                    </div>
                  </div>

                  
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    {{-- <i class="bi bi-journal-richtext"></i> --}}
                    <p style="font-size:80px; text-align:right"> <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Projects</strong> </p>
                  </div>
                </div>
            
              </div>
        
          </div>
  
        </div>
      </section><!-- End Cta Section -->
      
      <!-- ======= Product Section ======= -->
      <a name="product"></a>
                  <section id="portfolio" class="portfolio">
                    <div class="container" data-aos="fade-up">
              
                        <div class="section-title">
                            <p style="text-align: center">product</p>
                           
                          </div>

                  <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                      <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active"><img src="assets/img/product/1.jpg"width="50px" height="40px" ></li>

                        <li data-filter=".filter-v"><img src="assets/img/product/12.jpg"width="50px" height="40px" ></li>
                        <li data-filter=".filter-v6"><img src="assets/img/product/12.jpg"width="50px" height="40px" ></li>
                        <li data-filter=".filter-v4"><img src="assets/img/product/13.jpg"width="50px" height="40px" ></li>
                        <li data-filter=".filter-v3"><img src="assets/img/product/14.jpg"width="50px" height="40px" ></li>
                        <li data-filter=".filter-v2"><img src="assets/img/product/15.jpg"width="50px" height="40px" ></li>
                        <li data-filter=".filter-v1"><img src="assets/img/product/16.jpg"width="50px" height="40px" ></li>
                        <li data-filter=".filter-vv"><img src="assets/img/product/17.jpg"width="50px" height="40px" ></li>
                      </ul>
                    </div>
                  </div>
          
                  <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    {{-- ///////////////////////////////////////////////////////////////////// --}}
          <div class="col-lg-4 col-md-6 portfolio-item filter-vv">
            <div class="portfolio-wrap">
              <img src="assets/img/product/6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>straight Duct</h4>
                <p></p>
                <div class="portfolio-links">
                  <a href="assets/img/product/6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="{{route('productDetials')}}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-v1">
            <div class="portfolio-wrap">
              <img src="assets/img/product/13.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Circular Duct</h4>
                <p></p>
                <div class="portfolio-links">
                  <a href="assets/img/product/13.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="{{route('productDetials')}}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-v2">
            <div class="portfolio-wrap">
              <img src="assets/img/product/14.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Fire Reted Regtangular</h4>
                <p></p>
                <div class="portfolio-links">
                  <a href="assets/img/product/14.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="{{route('productDetials')}}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-v3">
            <div class="portfolio-wrap">
              <img src="assets/img/product/15.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Plenum Boxes For Ceiling Diffuser</h4>
                <p></p>
                <div class="portfolio-links">
                  <a href="assets/img/product/15.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="{{route('productDetials')}}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-v4">
            <div class="portfolio-wrap">
              <img src="assets/img/product/16.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Access Door</h4>
                <p></p>
                <div class="portfolio-links">
                  <a href="assets/img/product/16.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="{{route('productDetials')}}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-v6">
            <div class="portfolio-wrap">
              <img src="assets/img/product/17.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Circular Volume Control Damper</h4>
                <p></p>
                <div class="portfolio-links">
                  <a href="assets/img/product/17.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="{{route('productDetials')}}"title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
         </div>
        </div>
     </section>

   <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">
  
          <div class="text-center">
            <h3>Riyadh Factory in number</h3>
           <p style="text-align: center">

            <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    {{-- <i class="bi bi-emoji-smile"></i> --}}
                 <p style="font-size:80px; text-align:left" >   <span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Factory Size ( in m2)</strong> </p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    {{-- <i class="bi bi-journal-richtext"></i> --}}
                    <p style="font-size:80px; text-align:center"><span data-purecounter-start="0" data-purecounter-end="3000" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Capacity (in tons)</strong> </p>
                  </div>
                </div>
            

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                      {{-- <i class="bi bi-journal-richtext"></i> --}}
                      <p style="font-size:80px; text-align:right"> <span data-purecounter-start="0" data-purecounter-end="125" data-purecounter-duration="2" class="purecounter"></span>
                      <p><strong>Emptyees</strong> </p>
                    </div>
                  </div>

                  
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    {{-- <i class="bi bi-journal-richtext"></i> --}}
                    <p style="font-size:80px; text-align:right"> <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Projects</strong> </p>
                  </div>
                </div>
            
              </div>
            
        </p>
          </div>
          
        </div>
      </section><!-- End Cta Section -->
      <a name="project"></a>
          <div class="section-title">
            <h2></h2>
            <p style="text-align: center">Our latest projects</p>
           
          </div>
  
          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div >
                <img src="assets/img/img2.jpg" width="100px" height="100px">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4><a href="https://zdfduct.com/public/portfolio/King-Saud-University-Mental">King Saud University Mental</a></h4>
                <p>Manufacturing all types of ducts from GI</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
              <div >
                <img src="assets/img/img4.jpg" width="100px" height="100px">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4><a href="https://zdfduct.com/public/portfolio/King-Saud-University,-Riyadh">King Saud University, Riyadh</a></h4><p>Manufacturing all types of ducts from GI</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
              <div >
                <img src="assets/img/img5.jpg" width="100px" height="100px">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4>
                  <a href='https://zdfduct.com/public/portfolio/Sports-Landing-Page'>Sports Landing Page</a></h4><p>Manufacturing all types of ducts from GI</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
              <div >
                <img src="assets/img/img7.jpg" width="100px" height="100px">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4><a href="https://zdfduct.com/public/portfolio/King-Abdullah-University-for-Science-and-Technology">King Abdullah University for Science...</a><p>Manufacturing all types of ducts from GI</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
              <div >
                <img src="assets/img/img3.jpg" width="100px" height="100px">
                <div class="icon"><i class="bx bx-slideshow"></i></div>
                
              <h4><a href="https://zdfduct.com/public/portfolio/Capital-Market-Authority-Tower">Capital Market Authority Tower</a></h4><p>Manufacturing all types of ducts from GI</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
              <div >
                <img src="assets/img/img6.jpg" width="100px" height="100px">
                <div class="icon"><i class="bx bx-arch"></i></div>
                
              <h4><a href="https://zdfduct.com/public/portfolio/Tranvel-Agency'"> Agency</a></h4><p>Manufacturing all types of ducts from GI</p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Services Section -->
      
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <h3>IOS Certificates</h3>
                <img src="assets/img/product/ISO1.jpg" class="testimonial-img" alt="">
                
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <h3>IOS Certificates</h3>
                <img src="assets/img/product/ISO2.jpg" class="testimonial-img" alt="">
                
              
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p style="text-align: center">Contact Us</p>
          <a name="contact"></a>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <p >EMPOER AIR TECHNOLOGIES</p>
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Old kharj Road, after Aramco</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+966114065906</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

        <!-- ======= Clients Section ======= -->
      <section id="clients" class="clients">
        <div class="container" data-aos="zoom-in">
  <hr>
          <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide"><img src="assets/img/clients/1.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/2.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/3.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/4.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/5.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/6.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/7.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/8.png" class="img-fluid" alt=""></div>
              
              <div class="swiper-slide"><img src="assets/img/clients/9.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/10.png" class="img-fluid" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
      </section><!-- End Clients Section -->
  
  
    </main><!-- End #main -->
    
 @endsection