<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="./assets/css/style.css">
    
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <title> MedicareLK |Home</title>   

    <style>
      * {
        box-sizing: border-box;
      }
      
      body {
        background-color: #f1f1f1;
      }
      
      #regForm {
        background-color: #ffffff;
        margin: 100px auto;
        font-family: Raleway;
        padding: 40px;
        width: 70%;
        min-width: 300px;
      }
      
      h1 {
        text-align: center;  
      }
      
      input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        
      }
      
      
      
      /* Hide all steps by default: */
      .tab {
        display: none;
      }
      
      button {
        background-color: #04AA6D;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
      }
      
      button:hover {
        opacity: 0.8;
      }
      
      #prevBtn {
        background-color: #bbbbbb;
      }
      
      /* Make circles that indicate the steps of the form: */
      .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;  
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
      }
      
      .step.active {
        opacity: 1;
      }
      
      /* Mark the steps that are finished and valid: */
      .step.finish {
        background-color: #04AA6D;
      }
      </style>

</head>
<body>
  
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  <div class="icon-bar">
    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
    <a href="#" class="email"><i class="fa fa-envelope"></i></a> 
    <a href="#" class="phone"><i class="fa fa-phone"></i></a>
    <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> 
  </div>
    

      <nav id="navbar-example2" class="navbar fixed-top navbar-expand-lg navbar-light bg-light px-3 " style="height: 65px;" right>
        <a class="navbar-brand bg-light" href="#"><img src="./assets/images/mainlogo.png" width="175" height="55"></a>

        
        <div class="container-fluid bg-light ">
          <div class="navbar-header">
          </div>
        
          <ul class="nav navbar-nav navbar-right" style="font-family: Arial, Helvetica, sans-serif;color:black;">
            <li class="nav-item">
              <a class="nav-link " href="#scrollspyHeading1"><span class="badge bg-success">COVID-19</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#scrollspyHeading2"><span class="badge bg-success">Health Calculators</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#scrollspyHeading3"><span class="badge bg-success">Take Mental Test</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#scrollspyHeading4"><span class="badge bg-success">HIV Info Blog</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#scrollspyHeading5"><span class="badge bg-success">Health Tips</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#scrollspyHeading6"><span class="badge bg-success">Counseling Reservation</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#scrollspyHeading7"><span class="badge bg-success">Well-Being Forum</span></a>
            </li>
          </ul>

        </div>
        
      </nav>
      
      <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
        <section id = "scrollspyHeading1" >
          
            <div class="container">
                <div class="row">
                  <div class="col-sm-6"><img src="./assets/images/careers.png" class="img-fluid" alt="..." style="margin-top: 0px;"></div>
                  <div class="col-sm-6">
                    <div class="card" style="margin-top: 200px;">
                      <h5 class="card-header text-white bg-dark" >COVID-19 : Live Situational Analysis Dashboard of Sri Lanka</h5>
                      <div class="card-body bg-light">
                        <p class="card-text"> Please Note, Daily count of COVID-19 confirmed cases and deaths reported to <b>WHO</b>
                            headquaters on Saturdays and Sundays will be updated on this dashboard on the subsequent Monday.
                            Pleasse click below button for further information.</p>
                        <a href="https://hpb.health.gov.lk/covid19-dashboard/" class="btn btn-info text-white bg-dark">COVID-19 Updates</a>
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
              <img src="./assets/images/wave1.png">
              <img src="./assets/images/wave2.png">
              
          </section>
          <section id="scrollspyHeading2" style="background-color: teal;">
            <div class="container">
              <div class="row">
                <div class="col-sm-6">
                  <div class="h-100 p-5 text-white bg-dark rounded-3" >
                    <h2>Calculate Your Body Mask Index</h2>
                    <p>Body mass index (BMI) is a measure of body fat based on height and weight that applies to adult men and women. Click  below "Calculate BMI" button to compute your BMI index .</p>
                   <a href="./bmi.php"> <button class="btn btn-outline-light" type="button" >Calculate BMI</button></a>
                  </div>
                </div>
                <div class="col-sm-6">  
                  <div class="h-100 p-5 text-white bg-dark rounded-3">
                    <h2>Waist-to-hip ratio</h2>
                    <p>Waist-to-hip ratio (WHR) is one of several measurements your doctor can use to see if you’re overweight.WHR measures the ratio of your waist circumference to your hip circumference. It determines how much fat is stored on your waist, hips, and buttocks.</p>
                    <a href="./ratio.php"><button class="btn btn-outline-light" type="button">Calculate WHR</button></a>
                  </div> 
                </div>
              </div>
            </div>
          </section>
          <section id="scrollspyHeading3">
            <div class="b-example-divider"></div>

            <div class="container my-5">
             <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
               <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                 <h1 class="display-4 fw-bold lh-1">Take a Mental Health Test</h1>
                   <p class="lead">Online screening is one of the quickest and easiest ways to determine whether you are experiencing symptoms of a mental health condition.<br>
                     <em><b>Mental health conditions, such as depression or anxiety, are real, common and treatable. And recovery is possible.</b></em></p>
                      <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                          <a href="./quiz.php"><button type="button" class="btn btn-dark btn-lg px-4 me-md-2 fw-bold">Take Test</button></a>
                       </div>
                        </div>
                    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                  <img class="rounded-lg-3" src="./assets/images/mental health.png" alt="" width="480">
                </div>
               </div>
            </div>
              
          </section>
          <section id="scrollspyHeading4" style="padding: 50px;background-color:#00b38f;">
            <div class="p-4 p-md-4 text-white rounded bg-secondary">
              <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic">New HIV/AIDS political declaration seeks to end AIDS by 2030</h1>
                <p class="lead my-3">Member States at the High-Level Meeting on HIV and AIDS adopted a Political Declaration in order to get the world on track to end AIDS as a public health threat by 2030</p>
                <p class="lead mb-0"><a href="https://endinghiv.org.au/blog/#" class="text-white fw-bold" style="color:white;">Continue reading...</a></p>
              </div>
            </div>
            <br>
            <div class="row mb-2">
              <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-secondary">
                  <div class="col p-4 d-flex flex-column position-static bg-dark">
                    <h3 class="mb-0 text-white">Living with HIV</h3>
                    <p class="card-text mb-auto  text-white">Living with HIV personal stories and experiances.Learning that you are HIV-positive can be one of the most difficult experiences you go through in life.</p>
                    <a href="https://www.avert.org/living-with-hiv/stories" class="stretched-link"  style="color:#f1f1f1;">Continue reading</a>
                  </div>
                  <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="200" height="250" src="./assets/images/hiv-aids.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>
          
                  </div>
                </div>
              </div>
            <div class="col-md-6">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static bg-dark">
                  <strong class="d-inline-block mb-2 text-success"  style="color: white;"></strong>
                  <h3 class="mb-0 text-white">HIV Without Borders</h3>
                  <p class="mb-auto text-white">HIV is a virus that gradually weakens the body’s immune system, over a period of up to ten years. AIDS is the late stage of HIV, 
                    when a person’s immune system is so weak it can no longer fight off certain infections, 
                    such as pneumonia.</p>
                  <a href="https://blogs.msf.org/topics/hiv-aids" class="stretched-link"  style="color: white;">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img" width="200" height="250" src="./assets/images/hiv5.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>
        
                </div>
              </div>
            </div>
           
          </section>
          <section id="scrollspyHeading5" style="padding: 50px;">
            <div class="container">

              <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                  <div class="bd-heading sticky-xl-top align-self-start mt-5 mt-xl-0 mb-xl-2">
                  </div>
                  <br><br><br>
                  <div>
                    <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <a href="https://www.youtube.com/results?search_query=yoga+for+beginners"><img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" src="./assets/images/tip1.jpg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#555" dy=".3em"></text></img>
            
                          <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p class="bg-success"> Click on the image to watch the video.</p>
                          </div>

                        </a>
                        </div>
                        <div class="carousel-item">
                          <a href="https://www.youtube.com/watch?v=AzV3EA-1-yM">
                          <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" src="./assets/images/tip2.jpg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"/><text x="50%" y="50%" fill="#444" dy=".3em"></text></img>
            
                          <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p class="bg-warning">Click on the image to watch the video.</p>
                          </div>
                        </a>
                        </div>
                        <div class="carousel-item">
                          <a href="https://www.youtube.com/watch?v=0aNNYEUARAk">
                          <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" src="./assets/images/tip3.jpg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"/><text x="50%" y="50%" fill="#333" dy=".3em"></text></img>
            
                          <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p class="bg-warning">Click on the image to watch the video.</p>
                          </div>
                        </a>
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                    </div>
                  </div>
                </div>
                
              </div>

              
              
            </div>  
        
          
          </section>
          <section id="scrollspyHeading6" style="background-color:#00b38f;">
                  <div class="container col-xxl-8 px-4 py-5  ">
                    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                      <div class="col-10 col-sm-8 col-lg-6">
                         <img src="./assets/images/ReservationSystem.png" class="d-block mx-lg-auto img-fluid " alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                      </div>
                        <div class="col-lg-6">
                            <h1 class="display-5 fw-bold text-white lh-1 mb-3">24/7 Counselling Reservation System</h1>
                               <p class="lead text-dark">We are always offering  great Psychologists & Counsellors in Sri Lanka. Using our platform to offer Counselling in Sri Lanka is a cost effective way to provide our clients the mental health support they need.</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                         <a href="reserve.php"><button type="button" class="btn btn-dark btn-lg px-4 me-md-2 fw-bold">Reserve Me</button></a> 
                       </div>
                      </div>
                    </div>
           </section>

          <section id="scrollspyHeading7">
          
              <div class="container col-xl-10 col-xxl-8 px-4 ">
                <div class="row align-items-center g-lg-5 ">
                  <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-6 fw-bold lh-1 mb-3 text-dark">Keep in touch with our Well-Being Forum </h1>
                    <br>
                    <p class="col-lg-10 fs-5 text-white">Protecting people’s health and wellbeing is crucial to helping people realise their abilities, and cope with the stresses of life. We aim to promote a positive physical and mental health .
                       By empowering you to be the best version of yourself, we help them, and our business, to work safely and effectively.
                      Submit forum  to connect with our well-being forum.</p>
                  </div>
                  <div class="col-md-10 mx-auto col-lg-5">
                    <form class="p-4 p-md-5 border rounded-3 bg-secondary">
                      <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="fullname" placeholder="Password">
                        <label for="fullname">Name </label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="contactNumber" placeholder="Password">
                        <label for="contactNumber">Contact Number</label>
                      </div>
                      
                      <button class="w-100 btn btn-lg btn-dark text-white" type="submit">Submit </button>
                      <hr class="my-4">
                    </form>
                  </div>
                </div>
              </div>
            
          </section>
          
  
          <footer class="bg-dark text-white pt-5 pb-4">
            <div class="container text-center text-md-left">
              <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                  <h5 class="text-uppercase mb-4 font-weight-bold text-warning"> Company Name</h5>
                  <p> This project was created for Web Application Development module Final Assignment.  We are group of First Year Undergraduates representing National School of Business Management (NSBM),Sri Lanka.
                     This web template is a real world sample web demonstration for healthcare sector.</p>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                      <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Products</h5>
                      <p>
                        <a href="./quiz.php" class="text-white" style="text-decoration: none;">Self Mental Analysis</a>
                      </p>
                      <p>
                        <a href="./bmi.php" class="text-white" style="text-decoration: none;">BMI Calculator</a>
                      </p>
                      <p>
                        <a href="./ratio.php" class="text-white" style="text-decoration: none;">Waist-to-hip ratio Calculator</a>
                      </p>
                      <p>
                        <a href="./reserve.php" class="text-white" style="text-decoration: none;">Counsilling Reservation System</a>
                      </p>
                      <p>
                        <a href="https://endinghiv.org.au/blog/" class="text-white" style="text-decoration: none;">HIV Info Blog</a>
                      </p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                      <h5 class="text-uppercase mb-4 font-wright-bold text-warning"> Useful Links</h5>
                        <p>
                          <a href="https://www.who.int/" class="text-white" style="text-decoration: none;">World Health Organization </a>
                        </p>
                        <p>
                          <a href="https://www.hpb.health.gov.lk/en" class="text-white" style="text-decoration: none;">Health Promotion Bureau</a>
                        </p>
                        <p>
                          <a href="https://www.who.int/westernpacific/emergencies/covid-19/covid-19-vaccines" class="text-white" style="text-decoration: none;">COVID-19 Vaccines </a>
                        </p>
                        <p>
                          <a href="https://screening.mhanational.org/" class="text-white" style="text-decoration: none;">Mental Health America </a>
                        </p>
                        <p>
                          <a href="https://hpb.health.gov.lk/covid19-dashboard/" class="text-white" style="text-decoration: none;">COVID-19 Analysis Dashboard</a>
                         </p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                      <h5 class="text-uppercase mb-4 font-wright-bold text-warning">Team Members</h5>
                          <p>
                              <i class="fas fa-male mr-3 fa-2x"></i>  Viraj Dissanayake
                          </p>
                          <p>
                              <i class="fas fa-male mr-3 fa-2x"></i> Hashan Chathuranga
                          </p>
                          <p>
                              <i class="fas fa-female mr-3 fa-2x"></i> Gayani Chathurika
                          </p>
                          <p>
                              <i class="fas fa-male mr-3 fa-2x"></i>  Kavindu Kithmina
                          </p>
                        <p>
                              <i class="fas fa-female mr-3 fa-2x"></i>  Sachinthika Bandara
                        </p>
                    </div>
                    <hr class="mb-4">
                    <div class=" row align-items-center">
                        <div class="col-md-7 col-lg-8">
                            <p>Copyright ©2021 All rights reserved by:
                              <a href="#" style="text-decoration: none;">
                                <strong class="text-warning" >MedicareLK</strong>
                              </a> </p>
                        </div>
                        <div class="col-md-5 col-lg-4">
                            <div class="text-center text-md-right">
                                <ul class="list-unstyled list-inline">
                                  <li class="list-inline-item">
                                    <a href="#" class=" btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
                                  </li>
                                  <li class="list-inline-item">
                                    <a href="#" class=" btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-instagram"></i></a>
                                  </li>
                                  <li class="list-inline-item">
                                    <a href="#" class=" btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-youtube"></i></a>
                                  </li>
                                  <li class="list-inline-item">
                                    <a href="#" class=" btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-google"></i></a>
                                  </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </footer>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script>
  //Get the button
  var mybutton = document.getElementById("myBtn");
  
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};
  
  
  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }
  
  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  </script>

<script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
  showTab(currentTab); // Display the current tab
  
  function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
      document.getElementById("prevBtn").style.display = "none";
    } else {
      document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
      document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
      document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
  }
  
  function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
      // ... the form gets submitted:
      document.getElementById("regForm").submit();
      return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
  }
  
  function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
      // If a field is empty...
      if (y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false
        valid = false;
      }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
      document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
  }
  
  function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
      x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
  }
  </script>

</body>
</html>