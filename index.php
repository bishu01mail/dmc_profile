<?php session_start(); ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Derek Bennington</title>
    <link rel="icon" href="img/favicon.png" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <?php if(isset($_SESSION["thankYouMsg"])){ ?>
    <div id="thankYouMsg" class="alert alert-success" role="alert">
      <?php echo $_SESSION["thankYouMsg"] ; ?> <span id="msgClose" onclick="msgClose()"> &#10060; </span>
    </div>
  <?php } ?>
  <?php if(isset($_SESSION["errorMsg"])){ ?>
    <div id="thankYouMsg" class="alert alert-danger" role="alert">
      <?php echo $_SESSION["errorMsg"] ; ?> <span id="msgClose" onclick="msgClose()"> &#10060; </span>
    </div>
  <?php } ?>
    <div class="fluid-container">
          <header class="header">
          <!-- navbar -->
            <div class="container">
              <nav class="d-lg-flex align-items-center justify-content-between nav pt-3">
                  <div class='menu_logo text-white'><img src="img/logo.png" /></div>
                  <div class="d-flex align-items-center">
                  <ul class="d-lg-flex d-none align-items-center mb-0 navManu">
                      <li class="nav-item navItem">
                          <a class="navLink">What I do</a>
                      </li>
                      <li class="nav-item navItem">
                        <a class="navLink" >Who i work with</a>
                      </li>
                      <li class="nav-item navItem">
                        <a class="navLink">About me</a>
                      </li>
                  </ul>
                  <button onClick="drawer(true)" class="menuBtn" ><img src="img/menu.png" /></button>
                  </div>
              </nav>
          </div>
          <!-- {/* mobile navbar */} -->
          <div class="mobile_nav">
              <button onClick="drawer(false)" class="btn cross_icon">
                  <img src="img/cross-sign.svg" class="w-100"/>
              </button>
              <ul class="navbarMobileManu">
                  <li class="nav-item navItem">
                    <a class="navLink" href="#" >What I do</a>
                  </li>
                  <li class="nav-item navItem">
                    <a class="navLink">Who i work with</a>
                  </li>
                  <li class="nav-item navItem">
                    <a class="navLink" href="#">About me</a>
                  </li>
              </ul>
          </div>
          <!-- end navbar -->
          <div class="container">
            <div class="mobile_headerText row">
              <div class="col-lg-7">
                <div class="headerTextArea d-flex align-items-center"> 
                  <div class="text-center text-lg-end text_center">
                    <h1 class="headText text-uppercase mb-5" >Creativity is the spoon that stirs innovation</h1>
                    <p class="text-capitalize text-white ms-auto mb-4">
                      No matter the <span>problem</span> to solve, or the <span>opportunity</span> to capture, there is an <span>Innovative solution</span> that will <span>change the game</span>. 
                    </p>
                    <p class="bold_p mb-5">
                      Does your business have what it takes? Let’s find out.
                    </p>
                  
                    <a href="#" class="btn text-white btn_border btn_defult text-capitalize">Leave your competition in Innovation Dust</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a href="#mainContain" class="text-white text-capitalize scroll_down">Scroll down</a>
        </header>
        <main class="" id="mainContain">
          <div class="container py-5">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <p class="how_">
                  High performing business know how to solve problems creatively to <span>drive growth through innovation</span>.
                </p>
              </div>
              <div class="col-lg-6">
                <div class='d-flex justify-content-lg-end justify-content-center py-5 py-lg-0'>
                  <img src="img/How_.png" alt="">
                </div>
              </div>
            </div>
          </div>
  
          <div class="some_text_about_creative">
            <div class="row">
              <div class="col-lg-4 col_4">
                <div class="d-flex align-items-center HumanCenteredDesign">
                  <p>
                    Human Centered Design And Design Thinking
                  </p>
                </div>
              </div>
              <div class="col-lg-4 col_4">
                <div class="CreativeProblemSolving d-flex align-items-center justify-content-center">
                 <p>
                  Creative Problem Solving
                 </p>
                </div>
              </div>
              <div class="col-lg-4 col_4">
                <div class="BusinessModel d-flex align-items-center">
                  <p>
                    Business strategy and customer driven innovation
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- {/* meet derek */} -->
          <div class="meetDerekArea">
            <div class="container">
              <div class="row">
                <div class="col-lg-5">
                  <img src="img/derek1.png" class="w-100"/>
                </div>
                <div class="col-lg-7">
                  <div class="ps-0 ps-lg-5 h-100 d-flex align-items-center meetDerek" >
                    <div>
                      <img class='mt-5 mt-lg-0' src="img/meet_derek.png"/>
                      <h2 class='text-uppercase mb-4 mt-4'>what makes me so dangerous?</h2>
                      <p class='mb-5'>
                        I craft creative problem-solving powerhouses that deliver sustainable innovation results, with the intention of making competition irrelevant.
                      </p>
                      <a href="#contactForm" class="btn text-white btn_border btn_defult text-capitalize">Meet Derek</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- {/* As a, I leverage, To create */} -->
          <div class="container">
            <div class="row">
              <div class="col-lg-3">
                <div class="asa pt-4">
                  <div class="asaHeaderText">
                    <h1 class='text-uppercase'>As a</h1>
                    <!-- <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum 
                    </p> -->
                  </div>
                  <div class='mt-5'>
                    <!-- asa header card -->
                    <div class="Card p-4 mb-4">
                        <h2 class='mb-3 text-capitalize'>Consultant</h2>
                        <p class='mb-0'>
                          Lead and direct you and your team through whatever journey lies ahead that creates significant value.
                        </p>
                    </div>
                    <div class="Card p-4 mb-4">
                        <h2 class='mb-3 text-capitalize'>Coach</h2>
                        <p class='mb-0'>
                          Support and guide you, while you take the leading role in learning and applying the concepts, tools and processes.
                        </p>
                    </div>
                    <div class="Card p-4 mb-4">
                        <h2 class='mb-3 text-capitalize'>Professor</h2>
                        <p class='mb-0'>
                          Teach, coach, and impart new ways of thinking, while learning how to apply the concepts, tools, and process to real life opportunities and challenges.
                        </p>
                    </div>
                    <div class="Card p-4 mb-4">
                        <h2 class='mb-3 text-capitalize'>Author</h2>
                        <p class='mb-0'>
                          Shed light on the simplic, yet complex,nature of human-centered problem-solving and invite you to engage and learn in new ways.
                        </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class='Leverage p-3 pt-4'> 
                <div class="leverage_title">
                    <h1 class='text-uppercase'>I leverage</h1> 
                    <!-- <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum 
                    </p> -->
                </div>
                <div class="mt-5">
                    <div class="accordion" id="accordionExample">
                        <div class="Leverage_dropdownItem mb-5">
                          <div class="row">
                              <div class="col-sm-4">
                                <div class="leverageImg ms-auto">
                                  <img src="img/design-sprint-process.png" alt="">
                                </div>
                              </div>
                              <div class="col-sm-8">
                              <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Sprints
                                  </button>
                                  </h2>
                                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <ul class="m-0 p-0">
                                      <li class="mb-3">
                                        Think of it as a business “hackathon”. A sprint is lean and mean process focused on a goal or problem to solve over a rapidly accelerated timeframe, typically a few days to a week.
                                      </li>
                                      <li class="mb-3">
                                        Sprints create an environment that invokes extreme focus, presence, and collaboration. This level of involvement promotes meaningful engagement, creative problem-solving, lean thinking, and innovative results.
                                      </li>
                                      <li class="mb-3">
                                        Why sprints? It compresses months of time into a single week and we rapidly implement to gain results.
                                      </li>
                                    </ul>
                                  </div>
                                  </div>
                              </div>
                              </div>
                          </div>
                        </div>
                        <div class="Leverage_dropdownItem mb-5">
                          <div class="row">
                            <div class="col-sm-4">
                              <div class="leverageImg ms-auto">
                                <img src="img/Workshop_Progam-owntmysgdev2f1l0crq62ph0bypxe76o3jon0qsgw0.jpg" alt="" />
                              </div>
                            </div>
                            <div class="col-sm-8">
                              <div class="accordion-item pb-4">
                                  <h2 class="accordion-header" id="headingTwo">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Workshops
                                  </button>
                                  </h2>
                                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <ul class="m-0 p-0">
                                      <li class="mb-3">
                                        Think of workshops as the bridge from learning to application. A workshop is focused on experiential learning and application.
                                      </li>
                                      <li class="mb-3">
                                        Workshops create an environment that spurs creative thinking and collaboration. The end goal is to instill the concepts and tools, so they can be applied at any time in the future to tackle business challenges.
                                      </li>
                                      <li class="mb-3">
                                        Why workshops? They engage and spark people in new ways, which leads to creative ideas and innovative results in a short time.
                                      </li>
                                    </ul> 
                                  </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="Leverage_dropdownItem">
                          <div class="row">
                            <div class="col-sm-4">
                              <div class="leverageImg ms-auto">
                                <img src="img/derekTeachImg.png" alt="" />
                              </div>
                            </div>
                            <div class="col-sm-8">
                              <div class="accordion-item pb-4">
                                  <h2 class="accordion-header" id="headingThree">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Upskilling and training
                                  </button>
                                  </h2>
                                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <ul class="m-0 p-0">
                                      <li class="mb-3">
                                        Think of upskilling and training as the foundations that allow bigger things to happen. Professional athletes, business leaders, and successful people in general do not get to where they are without sharpening their skills, learning new things, and practicing.                                      
                                      </li>
                                      <li class="mb-3">
                                        Upskilling and training supports an environment of curiosity and continuous learning, which in today’s world is a must have to survive in business.                                     
                                      </li>
                                      <li class="mb-3">
                                        Why upskilling and training? Investing in yourself and your people is one of the greatest investments you can make and it will pay dividends way into the future.                                      
                                      </li>
                                    </ul>
                                  </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="asa pt-4">
                  <div class="asaHeaderText">
                    <h1 class='text-uppercase'>To create</h1>
                    <!-- <p class=''>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum 
                    </p> -->
                  </div>
                  <div class='mt-5'>
                    <!-- Creative confidence -->
                    <div class="Card p-4 mb-4">
                        <h2 class='mb-3 text-capitalize'>Creative confidence</h2>
                        <p class='mb-0'>
                          Creativity is innate and confidence is a gift. Nurturing people’s faith in themselves to create ideas and share them is powerful and it is an essential ingredient to innovation.                        
                        </p>
                    </div>
                    <div class="Card p-4 mb-4">
                        <h2 class='mb-3 text-capitalize'>Culture that nurtures creativity and innovation</h2>
                        <p class='mb-0'>
                          To unlock the creative powerhouse inside, creativity and innovation has to become a part of the DNA of the business, with everyone tuned to the endless possibilities to improve and grow.                        
                        </p>
                    </div>
                    <div class="Card p-4 mb-4">
                        <h2 class='mb-3 text-capitalize'>Innovative solutions that drive growth and efficiencies</h2>
                        <p class='mb-0'>
                          Innovation is a necessity to sustain a healthy and successful business. Innovations are what rockets you to the next level, with creativity fueling the way.                        
                        </p>
                    </div>
                    <div class="Card p-4 mb-4">
                        <h2 class='mb-3 text-capitalize'>Custom tailored innovation operating systems</h2>
                        <p class='mb-0'>
                          Innovation isn’t something that just happens and it is something you cannot just pull off the shelf and install in the business. Every business is unique, people are unique, and what you do is unique. Therefore, you should have a custom operating system that allows your business to thrive under any conditions.                        
                        </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- {/* testimonial */} -->
          <!-- <div class="testimonial py-5">
            <div class="testimonial_container container pt-5">
              <div class="row">
                <div class="col-lg-6">
                  <h1 class="testimonial_head pe-lg-5 pe-0 text-uppercase mb-5 mb-lg-0" >
                    This changes lives. But Don’t take my word for it. <span>take theirs.</span>
                  </h1>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial_userNameDec_contant row align-items-center justify-content-between mb-5">
                        <div class="desc_area col-lg-6">
                            <p class="desc">
                                Green Bay Greg has been an active Realtor since 2006 and has been implementing the most cutting-edge technology. This has made a direct impact on his clients,
                            </p>
                            <hr />
                            <div class="testimonial_userName"> 
                                <h1>Erik Hatch</h1>
                                <p>Creative designer</p>
                            </div>
                        </div>
                        <div class="testimonial_img col-lg-6">
                            <img src="img/testimonial_img1.png" />
                        </div>
                    </div>
                    <div class="testimonial_userNameDec_contant row align-items-center justify-content-between mb-5">
                        <div class="desc_area col-lg-6">
                            <p class="desc">
                                Green Bay Greg has been an active Realtor since 2006 and has been implementing the most cutting-edge technology. This has made a direct impact on his clients,
                            </p>
                            <hr />
                            <div class="testimonial_userName"> 
                                <h1>Erik Hatch</h1>
                                <p>Creative designer</p>
                            </div>
                        </div>
                        <div class="testimonial_img col-lg-6">
                            <img src="img/testimonial_img1.png" />
                        </div>
                    </div>
                </div>
              </div>
                <div class="testimonial_userNameDec_contant testimonial_userNameDec_contant_video row align-items-center justify-content-between mb-5">
                    <div class="desc_area col-lg-6">
                        <div class="desc_innerArea ms-0 ms-lg-auto">
                            <p class="desc">
                                Green Bay Greg has been an active Realtor since 2006 and has been implementing the most cutting-edge technology. This has made a direct impact on his clients, 
                            </p>
                            <hr />
                            <div class="testimonial_userName">
                                <h1>Erik Hatch</h1>
                                <p>Creative designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_img col-lg-6">
                        <video controls>
                            <source src="video/Nature.mp4" type="video/mp4" />
                        </video>
                    </div>
                </div>
            </div>
          </div> -->
          <!-- {/* deal section */} -->
          <div class="dealArea">
            <div class="container">
              <div class="row">
                <div class="col-lg-6">
                  <h1 class="the_deal mb-5 mb-lg-0">So here’s the deal...</h1>
                </div>
                <div class="col-lg-6">
                  <p class="deal_desc">
                  To be bold, if you want to reap the benefits of innovation and take your business to a completely new level, you need me. So let’s talk.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- {/* contact form */} -->
          <div class="contactForm" id="contactForm">
            <div class="contactFormContainer container">
              <h1 class="leftContactH1 pt-5">
                Discover your Creative confidence and forge new roads. <span>Stronger innovation is closer than you think.</span>
              </h1>
              <!-- social icons -->
              <div class="socialIcons">
                <a href="https://www.linkedin.com/in/derekbennington" class="defultIcon">
                <div class="px-4">
                    <div class="defultIcon_area">
                        <svg width="61" height="61" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clipPath="url(#clip0_916_607)">
                            <path d="M60.1061 60.9361V60.9336H60.1211V38.9286C60.1211 28.1636 57.8036 19.8711 45.2187 19.8711C39.1687 19.8711 35.1087 23.1911 33.4512 26.3386H33.2762V20.8761H21.3438V60.9336H33.7687V41.0986C33.7687 35.8761 34.7587 30.8261 41.2262 30.8261C47.5987 30.8261 47.6937 36.7861 47.6937 41.4336V60.9361H60.1061Z" fill="white"/>
                            <path d="M1.11719 20.875H13.5572V60.9325H1.11719V20.875Z" fill="white"/>
                            <path d="M7.33 0.933594C3.3525 0.933594 0.125 4.16109 0.125 8.13859C0.125 12.1161 3.3525 15.4111 7.33 15.4111C11.3075 15.4111 14.535 12.1161 14.535 8.13859C14.5325 4.16109 11.305 0.933594 7.33 0.933594V0.933594Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_916_607">
                            <rect width="60" height="60" fill="white" transform="translate(0.125 0.933594)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <p>
                            Linkedin
                        </p>
                    </div>
                </div>
                </a>
                <a class="defultIcon">
                <div class="px-4">
                    <div class="defultIcon_area">
                      <svg version="1.1" id="Layer_1" width="70" height="auto" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 461.001 461.001" style="enable-background:new 0 0 461.001 461.001;" xml:space="preserve">
                        <g>
                          <path d="M365.257,67.393H95.744C42.866,67.393,0,110.259,0,163.137v134.728
                            c0,52.878,42.866,95.744,95.744,95.744h269.513c52.878,0,95.744-42.866,95.744-95.744V163.137
                            C461.001,110.259,418.135,67.393,365.257,67.393z M300.506,237.056l-126.06,60.123c-3.359,1.602-7.239-0.847-7.239-4.568V168.607
                            c0-3.774,3.982-6.22,7.348-4.514l126.06,63.881C304.363,229.873,304.298,235.248,300.506,237.056z"/>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>                      
                        <p>
                          YouTube
                        </p>
                    </div>
                </div>
                </a>
              </div>
              <div class="contact_form_ p-5 mt-5 mt-lg-0" >
                <h3 class='mb-4'>Just do it. no reason not too.</h3>
                <form action="<?php echo htmlspecialchars('mail.php') ?>" method="post" id="submitContactForm">
                  <div class="row">
                    <div class="col-lg-6">
                      <input type="text" class="contact_form_input form-control" name="firstName" placeholder="First name" aria-label="First name"  />
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                      <input type="text" class="contact_form_input form-control" name="lastName" placeholder="Last name" aria-label="last name" />
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-lg-6">
                      <input type="text" class="contact_form_input form-control" name="email" placeholder="Email" aria-label="First name"  />
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                      <input type="text" class="contact_form_input form-control" name="phoneNumber" placeholder="Phone" aria-label="last name"  />
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-lg-12">
                      <textarea class="contact_form_input form-control" name="message" placeholder="Message" id="floatingTextarea2" style="height: 150px" ></textarea>
                    </div>
                  </div>
                  <div class="row mt-4">
                      <div class="col-lg-12">
                        <button type="submit" class="sendMsg btn btn-primary w-100 py-3" > <img src="img/send.svg" /> Send Message</button>
                      </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </main>
        <!-- {/* footer section */} -->

        <footer class="footer py-5">
          <div class="footer_contant_area text-center">
                <img src="img/logo.png" alt="logo" width="262px"/>
               <ul class='d-lg-flex flex-lg-row flex-md-column mt-5'>
                   <li>
                      <a>My process and philosophy</a>
                   </li>
                   <li>
                      <a>MY books</a>
                   </li>
                   <li>
                      <a>Creative flashlight</a>
                   </li>
                   <li>
                      <a>Creative diamond</a>
                   </li>
                   <li>
                      <a>Who i work with</a>
                   </li>
                   <li>
                      <a>My story</a>
                   </li>
               </ul>
               <ul class="social_icon d-flex justify-content-center mt-5">
                   <li><a href="https://www.linkedin.com/in/derekbennington">
                      <svg width="61" height="61" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clipPath="url(#clip0_916_607)">
                        <path d="M60.1061 60.9361V60.9336H60.1211V38.9286C60.1211 28.1636 57.8036 19.8711 45.2187 19.8711C39.1687 19.8711 35.1087 23.1911 33.4512 26.3386H33.2762V20.8761H21.3438V60.9336H33.7687V41.0986C33.7687 35.8761 34.7587 30.8261 41.2262 30.8261C47.5987 30.8261 47.6937 36.7861 47.6937 41.4336V60.9361H60.1061Z" fill="white"/>
                        <path d="M1.11719 20.875H13.5572V60.9325H1.11719V20.875Z" fill="white"/>
                        <path d="M7.33 0.933594C3.3525 0.933594 0.125 4.16109 0.125 8.13859C0.125 12.1161 3.3525 15.4111 7.33 15.4111C11.3075 15.4111 14.535 12.1161 14.535 8.13859C14.5325 4.16109 11.305 0.933594 7.33 0.933594V0.933594Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_916_607">
                        <rect width="60" height="60" fill="white" transform="translate(0.125 0.933594)"/>
                        </clipPath>
                        </defs>
                      </svg>
                   </a></li>
                   <li><a >
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 461.001 461.001" style="enable-background:new 0 0 461.001 461.001;" xml:space="preserve">
                        <g>
                          <path d="M365.257,67.393H95.744C42.866,67.393,0,110.259,0,163.137v134.728
                            c0,52.878,42.866,95.744,95.744,95.744h269.513c52.878,0,95.744-42.866,95.744-95.744V163.137
                            C461.001,110.259,418.135,67.393,365.257,67.393z M300.506,237.056l-126.06,60.123c-3.359,1.602-7.239-0.847-7.239-4.568V168.607
                            c0-3.774,3.982-6.22,7.348-4.514l126.06,63.881C304.363,229.873,304.298,235.248,300.506,237.056z"/>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>
                   </a></li>
               </ul>
          </div>
       </footer>
      </div>
        <?php session_destroy() ; ?>
        
<Script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></Script>
<script src="js/custom.js"></script>
</body>
</html>