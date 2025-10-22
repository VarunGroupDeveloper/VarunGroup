

    <!-- breadcrumb area start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
      <?php
        $img = isset($banners['image']) ? htmlspecialchars($banners['image'], ENT_QUOTES, 'UTF-8') : '';
        $bg  = $img ? base_url('uploads/banners/'.$img) : base_url('assets/images/about/team-banner.webp');
      ?>
      <div class="rs-breadcrumb-bg" data-background="<?= $bg; ?>" style="background-image:url('<?= $bg; ?>')"></div>

      <div class="container">
        <div class="row">
          <div class="col-xxl-6 col-xl-8 col-lg-8">
            <div class="rs-breadcrumb-content-wrapper">
              <div class="rs-breadcrumb-title-wrapper">
                <h1 class="rs-breadcrumb-title">Team</h1>
              </div>
              <div class="rs-breadcrumb-menu">
                <nav>
                  <ul>
                    <li><span><a href="<?= base_url(); ?>">Home</a></span></li>
                    <li><span>Team</span></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb area end -->


                <!-- team details area start -->
        <section class="rs-team-details-area section-space-top rs-team-details">
            <div class="container">
                <div class="row  g-5 section-title-space justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="rs-section-title-wrapper text-center">
                            <span class="rs-section-subtitle has-theme-orange">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="15" viewBox="0 0 11 15" fill="none">
                           <path d="M3.14286 10L0 15L8.78104e-07 0L3.14286 5V10Z" fill="#EA5501"></path>
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M6.28571 10L3.14286 15L3.14286 10L4.71428 7.5L3.14286 5L3.14286 0L6.28571 5L6.28571 10ZM6.28571 10L7.85714 7.5L6.28571 5V0L11 7.5L6.28571 15V10Z"
                              fill="#EA5501"></path>
                        </svg>
                        OUR LEADERS
                     </span>
                            <h2 class="rs-section-title rs-split-text-enable split-in-fade">Promoters of the Group
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-xl-6 col-lg-6">
                        <div class="rs-team-details-thumb">
                            <img src="assets/images/about/team-chairman.webp" alt="image">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="rs-team-details-content">
                            <h2 class="rs-team-details-title">Mr. V. Prabhu Kishore</h2>
                            <span class="rs-team-details-desig">Chairman & Founder</span>
                          
                            <div class="rs-team-details-bio">
                                <p>Mr. Prabhu Kishore is a visionary, entrepreneur and a successful businessman. He is the Chairman of Varun Group which is known across Andhra Pradesh and Telangana through their flagship company, Varun Motors Pvt Ltd.</p>

 

                                <p>Mr. Prabhu Kishore started his business career at the age of 19, taking care of his family business, Padmaja Commercial Corporation which was an Automobile Dealership in Vijayawada. He soon started his own Business ventures - Lakshmi Finance and Varsha Builders in the 1980s.</p>
                                 

                                 <p>In 1992, through the establishment of Varun Motors in Visakhapatnam he spread his automobile dealership business throughout Andhra Pradesh & Telangana.</p>

                                 

                                <p>Today, Varun Motors is a household name in the two states, serving millions of customers since its inception, representing automobile brands such as Bajaj Auto, Maruti Suzuki, JCB and Bharat Benz.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="rs-blog-area section-space rs-blog-two">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="rs-blog-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="rs-blog-thumb">
                                <a href="blog-details.html"> <img src="assets/images/home/team-varundev.webp" alt="image"></a>
                            </div>
                            <div class="rs-blog-content">
                                <h4 class="rs-team-details-title">Mr. V. Varun Dev</h4>
                                <span class="rs-team-details-desig">Managing Director</span>
                                
                                <p class="mt-4">Mr. Varun Dev, holds a Masters degree in Engineering from Warwick University, UK and has worked with Suzuki in Hungary. He joined the family business in 2007 and currently heads the Automobile Dealership division of Varun Group comprising leading automobile brands.</p>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="rs-blog-item wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            <div class="rs-blog-thumb">
                                <a href="blog-details.html"> <img src="assets/images/home/team-lakshmi.webp" alt="image"></a>
                            </div>
                           <div class="rs-blog-content">
                                <h4 class="rs-team-details-title">Mrs. V. Lakshmi Kishore</h4>
                                <span class="rs-team-details-desig">Director</span>
                                
                                <p class="mt-4">Mrs. Lakshmi Kishore hails from a business family in Vijayawada, Andhra Pradesh. Educated with a degree in English Literature, she has been a pillar of support to the Varun Group. Balancing the family responsibility with hands-on approach to various aspects of the Group business, Mrs. Lakshmi Kishore is a business woman par excellence.</p>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="rs-blog-item wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <div class="rs-blog-thumb">
                                <a href="blog-details.html"> <img src="assets/images/home/team-varsha.webp" alt="image"></a>
                            </div>
                            <div class="rs-blog-content">
                                <h4 class="rs-team-details-title">Ms. V. Varsha</h4>
                                <span class="rs-team-details-desig">Director</span>
                                
                                <p class="mt-4">Ms. Varsha holds an MBA degree in Hospitality from Les Roches School of Hotel Management. She is the Owner’s Representative for the hospitality business of the Group and was instrumental in the development of major projects for the Group. In addition, she also oversees a number of automobile dealerships in her capacity as a Chairwoman and advisor.</p>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team details area end -->
        <!-- team area start -->
        <section class="rs-team-area section-space-bottom rs-team-one">
            <div class="container">
                <div class="row  g-5 section-title-space justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="rs-section-title-wrapper text-center">
                            <span class="rs-section-subtitle has-theme-orange">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="15" viewBox="0 0 11 15" fill="none">
                           <path d="M3.14286 10L0 15L8.78104e-07 0L3.14286 5V10Z" fill="#EA5501"></path>
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M6.28571 10L3.14286 15L3.14286 10L4.71428 7.5L3.14286 5L3.14286 0L6.28571 5L6.28571 10ZM6.28571 10L7.85714 7.5L6.28571 5V0L11 7.5L6.28571 15V10Z"
                              fill="#EA5501"></path>
                        </svg>
                        OUR Team
                     </span>
                            <h2 class="rs-section-title rs-split-text-enable split-in-fade">Management Team
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-5ths">
                        <div class="rs-team-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="rs-team-thumb">
                                <a href="team-details.html"><img src="assets/images/about/team-harsha.webp" alt="image"></a>
                            </div>
                            <div class="rs-team-content-wrapper">
                              <div class="rs-team-content-box">
                                <h6 class="rs-team-title">
                                  <a href="team-details.html">Mr. Harsha Hanumara</a>
                                </h6>
                                <span class="rs-team-designation">Joint Managing Director</span><br>
                                <span class="rs-team-designation">Varun Group</span>
                              </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-5ths">
                        <div class="rs-team-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="rs-team-thumb">
                                <a href="team-details.html"><img src="assets/images/about/team-bangraju.webp" alt="image"></a>
                            </div>
                            <div class="rs-team-content-wrapper">
                                <div class="rs-team-content-box">
                                    <h6 class="rs-team-title"><a href="team-details.html">Dr. Bangaru Raju</a></h6>
                                    <span class="rs-team-designation">Vice President</span><br>
                                    <span class="rs-team-designation">Varun Health Centers</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-5ths">
                        <div class="rs-team-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="rs-team-thumb">
                                <a href="team-details.html"><img src="assets/images/about/team-rcraju.webp" alt="image"></a>
                            </div>
                            <div class="rs-team-content-wrapper">
                                <div class="rs-team-content-box">
                                    <h6 class="rs-team-title"><a href="team-details.html">Mr. R.C. Raju</a></h6>
                                    <span class="rs-team-designation">Executive Director </span><br>
                                    <span class="rs-team-designation">Varun Maruti</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-5ths">
                        <div class="rs-team-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="rs-team-thumb">
                                <a href="team-details.html"><img src="assets/images/about/team-dkraju.webp" alt="image"></a>
                            </div>
                            <div class="rs-team-content-wrapper">
                                <div class="rs-team-content-box">
                                    <h6 class="rs-team-title"><a href="team-details.html">Mr. D. K. Raju</a></h6>
                                    <span class="rs-team-designation">Executive Director </span><br>
                                    <span class="rs-team-designation">Nexa</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-5ths">
                        <div class="rs-team-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="rs-team-thumb">
                                <a href="team-details.html"><img src="assets/images/about/team-gvpr.webp" alt="image"></a>
                            </div>
                            <div class="rs-team-content-wrapper">
                                <div class="rs-team-content-box">
                                    <h6 class="rs-team-title"><a href="team-details.html">Mr. G. V. P. Raju</a></h6>
                                    <span class="rs-team-designation">Vice President</span><br>
                                    <span class="rs-team-designation">Finance</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-5ths">
                        <div class="rs-team-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="rs-team-thumb">
                                <a href="team-details.html"><img src="assets/images/about/team-satyanarayana.webp" alt="image"></a>
                            </div>
                            <div class="rs-team-content-wrapper">
                                <div class="rs-team-content-box">
                                    <h6 class="rs-team-title"><a href="team-details.html">Mr.P.V.Satyanarayana</a></h6>
                                    <span class="rs-team-designation">Executive Director</span><br>
                                    <span class="rs-team-designation">Varun Bajaj</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-5ths">
                        <div class="rs-team-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="rs-team-thumb">
                                <a href="team-details.html"><img src="assets/images/about/team-subbarao.webp" alt="image"></a>
                            </div>
                            <div class="rs-team-content-wrapper">
                                <div class="rs-team-content-box">
                                    <h6 class="rs-team-title"><a href="team-details.html">Mr. V. Subba Rao</a></h6>
                                    <span class="rs-team-designation">Executive Director</span><br>
                                    <span class="rs-team-designation"> Varun Trucking</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-5ths">
                        <div class="rs-team-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="rs-team-thumb">
                                <a href="team-details.html"><img src="assets/images/about/team-VINOD.webp" alt="image"></a>
                            </div>
                            <div class="rs-team-content-wrapper">
                                <div class="rs-team-content-box">
                                    <h6 class="rs-team-title"><a href="team-details.html">Mr.T.Vinod Kumar</a></h6>
                                    <span class="rs-team-designation">Executive Director</span><br>
                                    <span class="rs-team-designation"> Varun JCB</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-5ths">
                        <div class="rs-team-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="rs-team-thumb">
                                <a href="team-details.html"><img src="assets/images/about/team-b-chandrasekhar.webp" alt="image"></a>
                            </div>
                            <div class="rs-team-content-wrapper">
                                <div class="rs-team-content-box">
                                    <h6 class="rs-team-title"><a href="team-details.html">Mr.B.Chandra Sekhar</a></h6>
                                    <span class="rs-team-designation"> Director </span><br>
                                    <span class="rs-team-designation">Neon Motors, Neon Hyundai</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-5ths">
                        <div class="rs-team-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="rs-team-thumb">
                                <a href="team-details.html"><img src="assets/images/about/team-k-kapil.webp" alt="image"></a>
                            </div>
                            <div class="rs-team-content-wrapper">
                                <div class="rs-team-content-box">
                                    <h6 class="rs-team-title"><a href="team-details.html">Mr.K.Kapil</a></h6>
                                     <span class="rs-team-designation">Managing Director</span><br>
                                    <span class="rs-team-designation">Green Honda, BMW</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team area end -->

