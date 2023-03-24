<?= $header;?>
   <!-- end navbar -->
    <header class="slider">
      <div class="swiper-container slider-images">
        <div class="swiper-wrapper">
          <div class="swiper-slide" data-background="<?= base_url()?>assets/images/slide01.jpg">
			<div class="mobile-slide" data-background="<?= base_url()?>assets/images/slide-mobile01.jpg"></div>
			</div>
          <div class="swiper-slide" data-background="<?= base_url()?>assets/images/slide02.jpg">
			<div class="mobile-slide" data-background="<?= base_url()?>assets/images/slide-mobile02.jpg"></div>
			</div>
          <div class="swiper-slide" data-background="<?= base_url()?>assets/images/slide03.jpg">
			<div class="mobile-slide" data-background="<?= base_url()?>assets/images/slide-mobile03.jpg"></div>
			</div>
        </div>
        <!-- end swiper-wrapper -->
        <div class="container-fluid slider-nav">
          <div class="swiper-pagination"></div>
          <!-- end swiper-pagination -->
          <div class="swiper-fraction"></div>
          <!-- end swiper-fraction -->
          <div class="button-prev"><i class="far fa-chevron-down"></i></div>
          <!-- end swiper-button-prev -->
          <div class="button-next"><i class="far fa-chevron-up"></i></div>
          <!-- end swiper-button-next --> 
        </div>
        <!-- end slider-nav --> 
      </div>
      <!-- end slider-images -->
      <div class="swiper-container slider-texts">
        <svg width="580" height="400" class="svg-morph">
          <path id="svg_morph" d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z" />
        </svg>
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="container-fluid">
              <h1>Art Museums and <br>
                Galleries </h1>
              <p>of Karnataka Chitrakala Parishath</p>
            </div>
            <!-- end container --> 
          </div>
          <!-- end swiper-slide -->
          <div class="swiper-slide">
            <div class="container-fluid">
              <h1>Art Museums and <br>
                Galleries </h1>
              <p>of Karnataka Chitrakala Parishath</p>
            </div>
            <!-- end container --> 
          </div>
          <!-- end swiper-slide -->
          <div class="swiper-slide">
            <div class="container-fluid">
              <h1>Art Museums and <br>
                Galleries </h1>
              <p>of Karnataka Chitrakala Parishath</p>
            </div>
            <!-- end container --> 
          </div>
          <!-- end swiper-slide --> 
        </div>
        <!-- end swiper-wrapper --> 
      </div>
      <!-- end slider-texts -->
       
    </header>
    <!-- end slider -->
    <section class="content-section" data-background="#fffbf7">
      <div class="container">

        <div class="row align-items-center mb-5">
          <div class="col-12 mb-5">
            <div class=" text-center">
               
                <a href="<?= base_url().'profile';?>" class="btn btn-big card"><img src="<?= base_url()?>assets/images/995.png" class="img-fluid"/> <br> Artist Registration</a>
               
                <a href="gallery.html" class="btn btn-big card"><img src="<?= base_url()?>assets/images/gal.png" class="img-fluid"/> <br> Enter Gallery</a>
               
            </div>
          </div>
        </div>


        <div class="row align-items-center">
          <div class="col-12">
            <div class="section-title text-center">
              <figure><img src="<?= base_url()?>assets/images/title-shape.png" alt="Image"></figure>
              <h2>The world's leading <br>
                museum of art</h2>
            </div>
            <!-- end section-title --> 
          </div>
          <!-- end col-12 -->
          <div class="col-lg-7">
            <figure class="image-box" data-scroll data-scroll-speed="-1" > <img src="<?= base_url()?>assets/images/side-imag01.jpg" alt="Image"> </figure>
          </div>
          <!-- end col-7 -->
          <div class="col-lg-5">
            <div class="side-icon-list right-side">
              <ul>
                <li>
                  <figure> <img src="<?= base_url()?>assets/images/icon01.png" alt="Image"> </figure>
                  <div class="content">
                    <h5>Opening times</h5>
                    <p>From 27 August<br>
                      Thursday – Sunday: 11.00-19.00</p>
                  </div>
                  <!-- end content --> 
                </li>
                <li>
                  <figure> <img src="<?= base_url()?>assets/images/icon02.png" alt="Image"> </figure>
                  <div class="content">
                    <h5>Book Online</h5>
                    <p>Some exhibitions and events carry <br>
                      a separate charge</p>
                    <a href="<?= base_url().'profile';?>">Join Now and Book Online</a> </div>
                  <!-- end content --> 
                </li>
                <li>
                  <figure> <img src="<?= base_url()?>assets/images/icon03.png" alt="Image"> </figure>
                  <div class="content">
                    <h5>Where You Visit</h5>
                    <p>Art Complex, 1, Kumarakrupa Rd,<br>
                      near The Lalit Hotel, Kumara Park East,<br>
                      Seshadripuram, Bengaluru,<br>
                      Karnataka 560001</p>
                  </div>
                  <!-- end content --> 
                </li>
              </ul>
            </div>
            <!-- end side-icon-list --> 
          </div>
          <!-- end col-5 --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </section>
    <!-- end content-section -->
    <?php /*
    <section class="content-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <div class="section-title">
              <figure><img src="<?= base_url()?>assets/images/title-shape.png" alt="Image"></figure>
              <h6>DON’T MISS THE OPPORTUNITY</h6>
              <h2>Upcoming Events</h2>
            </div>
            <!-- end section-title --> 
          </div>
          <!-- end col-9 -->
          <div class="col-lg-3"> <a href="<?= base_url().'profile';?>" class="circle-button">BOOK AN <br>
            EVENT</a> </div>
          <!-- end col-3 --> 
        </div>
        <!-- end row -->
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6">
            <div class="exhibition-box" data-scroll data-scroll-speed="-1" >
              <figure> <a href="#"><img src="<?= base_url()?>assets/images/event01.jpg" alt="Image" class="img"></a>
                
                <!-- end info --> 
              </figure>
              <div class="content-box">
                <h4><a href="#">Artemisia Gentileschi
                  talk with Maria</a></h4>
                <p> 15 August – 31 October 2022 </p>
              </div>
              <!-- end content-box --> 
            </div>
            <!-- end exhibition-box --> 
          </div>
          <!-- end col-4 -->
          <div class="col-lg-4 col-md-6">
            <div class="exhibition-box" data-scroll data-scroll-speed="1">
              <figure> <a href="#"><img src="<?= base_url()?>assets/images/event02.jpg" alt="Image" class="img"></a>
                
                <!-- end info --> 
              </figure>
              <div class="content-box">
                <h4><a href="#">Arctic culture and 
                  climate Exhibition</a></h4>
                <p> 22 Oct 2022 - 21 Feb 2022</p>
              </div>
              <!-- end content-box --> 
            </div>
            <!-- end exhibition-box --> </div>
          <!-- end col-4 -->
          <div class="col-lg-4 col-md-6">
            <div class="exhibition-box" data-scroll data-scroll-speed="-0.5" >
              <figure> <a href="#"><img src="<?= base_url()?>assets/images/event03.jpg" alt="Image" class="img"></a>
                
                <!-- end info --> 
              </figure>
              <div class="content-box">
                <h4><a href="#">Thomas Becket murder and
                  the making of a saint</a></h4>
                <p> 22 Apr 2022 - 22 Aug 2022</p>
              </div>
              <!-- end content-box --> 
            </div>
            <!-- end exhibition-box --></div>
          <!-- end col-4 -->
          <div class="col-12 text-center"> <a href="#" class="custom-button">VIEW ALL UPCOMING EVENTS</a> </div>
          <!-- end col-12 --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </section>
    <!-- end content-section -->
    <section class="content-section no-bottom-spacing bottom-white" data-background="#fffbf7">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="section-title text-center">
              <figure><img src="images/title-shape.png" alt="Image"></figure>
              <h2>Art Inspiration of <br>
                19th Century</h2>
            </div>
            <!-- end section-title --> 
          </div>
          <!-- end col-12 -->
          <div class="col-lg-4 col-md-6">
            <div class="text-content" data-scroll data-scroll-speed="-1">
              <h6>The challenge</h6>
              <p>In the 1980s, “the UK’s national 
                museums faced political pressure 
                from the <strong>Conservative</strong> government 
                to charge for admission, to make 
                them less dependent on 
                government funding".</p>
            </div>
            <!-- end text-content --> 
          </div>
          <!-- end col-4 -->
          <div class="col-lg-4 col-md-6">
            <div class="text-content" data-scroll data-scroll-speed="0.5">
              <h6>The initiative</h6>
              <p>In 1997, the new Labour government 
                made a commitment to reinstate 
                free entry for <strong>national</strong> museums in 
                order to have a more diverse range 
                of visitors. “Following a campaign 
                led by the museums themselves, </p>
            </div>
            <!-- end text-content --> 
          </div>
          <!-- end col-4 -->
          <div class="col-lg-4 col-md-6">
            <div class="text-content" data-scroll data-scroll-speed="1">
              <h6>The impact</h6>
              <p>The national museums which 
                dropped charges all saw <strong>substantial</strong> increases to their 
                visitor numbers, an average of 
                70 percent. In the first year after 
                free admission was introduced
                visitor figures.</p>
            </div>
            <!-- end text-content --> 
          </div>
          <!-- end col-4 --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container -->
		<div class="clearfix spacing-100"></div>
      <div class="horizontal-scroll">
        <div class="scroll-inner" data-scroll data-scroll-direction="horizontal" data-scroll-speed="5">
          <div class="scroll-wrapper">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-3">
                  <figure class="image-box" data-scroll data-scroll-speed="0"> <img src="<?= base_url()?>assets/images/image01.jpg" alt="Image"> </figure>
                </div>
                <!-- end col-3 -->
                <div class="col-md-4 offset-md-1">
                  <figure class="image-box" data-scroll data-scroll-speed="0"> <img src="<?= base_url()?>assets/images/image02.jpg" alt="Image"> </figure>
                </div>
                <!-- end col-3 -->
                <div class="col-md-2 offset-md-1">
                  <figure class="image-box" data-scroll data-scroll-speed="0"> <img src="<?= base_url()?>assets/images/image03.jpg" alt="Image"> </figure>
                </div>
                <!-- end col-3 --> 
              </div>
              <!-- end row --> 
            </div>
            <!-- end container-fluid --> 
          </div>
          <!-- end scroll-wrapper -->
          <div class="scroll-wrapper">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-3">
                  <figure class="image-box" data-scroll data-scroll-speed="0"> <img src="<?= base_url()?>assets/images/image01.jpg" alt="Image"> </figure>
                </div>
                <!-- end col-3 -->
                <div class="col-md-4 offset-md-1">
                  <figure class="image-box" data-scroll data-scroll-speed="0"> <img src="<?= base_url()?>assets/images/image02.jpg" alt="Image"> </figure>
                </div>
                <!-- end col-3 -->
                <div class="col-md-2 offset-md-1">
                  <figure class="image-box" data-scroll data-scroll-speed="0"> <img src="<?= base_url()?>assets/images/image03.jpg" alt="Image"> </figure>
                </div>
                <!-- end col-3 --> 
              </div>
              <!-- end row --> 
            </div>
            <!-- container-fluid --> 
          </div>
          <!-- end scroll-wrapper --> 
        </div>
        <!-- end scroll-inner --> 
      </div>
      <!-- end horizontal-scroll --> 
    </section>
    <!-- end content-section -->
    <section class="content-section no-bottom-spacing">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="section-title text-center">
              <figure><img src="<?= base_url()?>assets/images/title-shape.png" alt="Image"></figure>
              <h6>Visit the National CKP Museum</h6>
              <h2>3 steps to be safe</h2>
            </div>
            <!-- end section-title --> 
          </div>
          <!-- end col-12 --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container -->
      <div class="container-fluid px-0">
        <div class="row g-0">
          <div class="col-lg-4">
            <div class="image-icon-box" data-scroll data-scroll-speed="-1">
              <figure class="icon"> <img src="<?= base_url()?>assets/images/icon04.png" alt="Image"> </figure>
              <figure class="content-image"> <img src="<?= base_url()?>assets/images/image04.jpg" alt="Image"> </figure>
              <div class="content-box"> <b>01.</b>
                <h4>Check What's Open</h4>
                <div class="expand">
                  <p>Your safety is our first priority. Entry to the 
                    Karnataka Chitrakala Parishath is still free, but to 
                    help us ensure social distancing.</p>
                  <a href="#" class="custom-link">Learn More</a> </div>
                <!-- end expand --> 
              </div>
              <!-- end content-box --> 
            </div>
            <!-- end image-icon-box --> 
          </div>
          <!-- end col-4 -->
          <div class="col-lg-4">
            <div class="image-icon-box" data-scroll data-scroll-speed="0.5">
              <figure class="icon"> <img src="<?= base_url()?>assets/images/icon05.png" alt="Image"> </figure>
              <figure class="content-image"> <img src="<?= base_url()?>assets/images/image05.jpg" alt="Image"> </figure>
              <div class="content-box"> <b>02.</b>
                <h4>Booking Online</h4>
                <div class="expand">
                  <p>Exhibition curator Venetia Porter presents this new exhibition of works by artists from Iran to Morocco drawn from the Museum collection.</p>
                  <a href="#" class="custom-link">Learn More</a> </div>
                <!-- end expand --> 
              </div>
              <!-- end content-box --> 
            </div>
            <!-- end image-icon-box --> </div>
          <!-- end col-4 -->
          <div class="col-lg-4">
            <div class="image-icon-box" data-scroll data-scroll-speed="1">
              <figure class="icon"> <img src="<?= base_url()?>assets/images/icon06.png" alt="Image"> </figure>
              <figure class="content-image"> <img src="<?= base_url()?>assets/images/image06.jpg" alt="Image"> </figure>
              <div class="content-box"> <b>03.</b>
                <h4>Keep Your Distance</h4>
                <div class="expand">
                  <p>Take a look at our past exhibitions and enjoy the articles, videos and photo galleries still available to view online.</p>
                  <a href="#" class="custom-link">Learn More</a> </div>
                <!-- end expand --> 
              </div>
              <!-- end content-box --> 
            </div>
            <!-- end image-icon-box --> </div>
          <!-- end col-4 --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </section>
   
    
    <section class="content-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="section-title text-center">
              <figure><img src="<?= base_url()?>assets/images/title-shape.png" alt="Image"></figure>
              <h6>Get Latest Updates and News</h6>
              <h2>Recent News</h2>
            </div>
            <!-- end section-title --> 
          </div>
          <!-- end col-12 --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container -->
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="recent-news">
              <div class="content-box"> <small>Dec 26, 2022</small>
                <h3>The Ultimate Guide To 
                  Knots Practice Kit</h3>
                <p>Learn to tie over 250 knots 
                  with step-by-step instructions. 
                  Supplied with 4...</p>
                <a href="#" class="custom-link">Continue reading</a> </div>
              <!-- end content-box -->
              <figure data-scroll data-scroll-speed="-1"><img src="<?= base_url()?>assets/images/recent-news01.jpg" alt="Image"></figure>
            </div>
            <!-- end recent-news --> 
          </div>
          <!-- end col-8 -->
          <div class="col-12">
            <div class="recent-news">
              <div class="content-box"><small>Dec 26, 2022</small>
                <h3>The Ultimate Guide To 
                  Knots Practice Kit</h3>
                <p>Learn to tie over 250 knots 
                  with step-by-step instructions. 
                  Supplied with 4...</p>
                <a href="#" class="custom-link">Continue reading</a> </div>
              <!-- end content-box -->
              <figure data-scroll data-scroll-speed="1"><img src="<?= base_url()?>assets/images/recent-news02.jpg" alt="Image"></figure>
            </div>
            <!-- end recent-news --> 
          </div>
          <!-- end col-9 -->
          <div class="col-12 text-center"> <a href="#" class="circle-button">SEE ALL<br>
            NEWS</a> </div>
          <!-- end col-12 --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </section>
    */ ?>
    <!-- end content-section -->
    <section class="content-section no-spacing" data-background="#f5f5f5">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="newsletter-box">
              <div class="form">
                <div class="titles">
                  <h6>Subscribe Newsletter</h6>
                  <h2>Sign up to get the
                    latest news</h2>
                </div>
                <!-- end titles -->
                <div class="inner">
                  <input type="email" placeholder="Enter your e-mail address">
                  <input type="submit" value="SIGN UP">
                </div>
                <!-- end inner --> 
                </div>
              <!-- end form -->
              <figure class="newsletter-image" data-scroll data-scroll-speed="0.7"><img src="<?= base_url()?>assets/images/newsletter-image.png" alt="Image"></figure>
            </div>
            <!-- end newsletter-box --> 
          </div>
          <!-- end col-12 --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </section>
<?= $footer;?>