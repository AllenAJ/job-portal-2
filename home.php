<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
    integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


  <link rel="stylesheet" href="css/main.css" type="text/css">
  <title>Online Job Portal</title>
  <style>
    .single-working {
      padding: 50px 15px;
      background-color: #fff;
      -webkit-box-shadow: 0 5px 20px 3px rgb(230 233 249 / 90%);
      box-shadow: 0 5px 20px 3px rgb(230 233 249 / 90%);
      text-align: center;
      border-radius: 30px 0 30px 0;
      margin-bottom: 30px;
      -webkit-transition: all ease .5s;
      transition: all ease .5s;
    }

    .working-area.working-area-two .single-working h3 {
      margin-bottom: 15px;
      -webkit-transition: all ease .5s;
      transition: all ease .5s;
      font-size: 21px;
    }

    .working-area.working-area-two .single-working i {
      -webkit-transition: all ease .5s;
      transition: all ease .5s;
      font-size: 55px;
      color: #317bbc;
    }


    html {}

    body {}

    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active,
    .nav-tabs,
    .nav-tabs .nav-link:focus,
    .nav-tabs .nav-link:hover {
      border: none;
    }

    .bg-5 {
      background-image: url("http://regaltheme.com/tf/multi/rnr/assets/img/bg/5.png");
      background-position: center 65%;
      background-size: auto;
      background-repeat: no-repeat;
    }

    .client-testimonial .client-nav .nav-item {
      position: absolute;
      z-index: 5;
      width: 10.5rem;
    }

    .client-testimonial .client-nav .nav-item:nth-child(1) {
      top: 2.5rem;
      right: 16%;
      width: 7rem;
    }

    .client-testimonial .client-nav .nav-item:nth-child(2) {
      bottom: 3rem;
      right: 0;
    }

    @media (min-width: 1281px) {
      .client-testimonial .client-nav .nav-item:nth-child(2) {
        right: -3rem;
      }
    }

    .client-testimonial .client-nav .nav-item:nth-child(3) {
      bottom: 9rem;
      left: 4%;
    }

    .client-testimonial .client-nav .nav-item:nth-child(4) {
      top: -2rem;
      left: 0;
      width: 7rem;
    }

    @media (min-width: 1281px) {
      .client-testimonial .client-nav .nav-item:nth-child(4) {
        left: -8rem;
      }
    }

    .client-testimonial .client-nav .nav-item:nth-child(5) {
      top: -9rem;
      right: 0;
      width: 7rem;
    }

    @media (min-width: 1281px) {
      .client-testimonial .client-nav .nav-item:nth-child(5) {
        right: -5.5rem;
      }
    }

    @media (max-width: 767.98px) {
      .client-testimonial .client-nav .nav-item {
        position: relative !important;
        top: 0 !important;
        left: 0 !important;
        right: inherit;
        width: 7rem !important;
      }
    }

    .client-testimonial .tab-content .fade {
      -webkit-transition: all 0.4s ease-in;
      -o-transition: all 0.4s ease-in;
      transition: all 0.4s ease-in;
    }

    .client-testimonial .tab-content .client-thumb {
      width: 10.5rem;
    }

    .client-testimonial .tab-content .client-desc {
      -webkit-box-shadow: 0px 15px 50px 0px rgba(115, 115, 115, 0.06);
      box-shadow: 0px 15px 50px 0px rgba(115, 115, 115, 0.06);
      min-height: 21rem;
      padding: 2rem;
    }

    .client-testimonial .tab-content .client-desc h6 {
      font-size: 1.3rem;
    }

    .section-ptb,
    .section-pt,
    .section-pb {
      padding-top: 12rem;
      padding-bottom: 12rem;
    }

    @media (min-width: 768px) and (max-width: 991.98px) {

      .section-ptb,
      .section-pt,
      .section-pb {
        padding-top: 8rem;
        padding-bottom: 8rem;
      }
    }

    @media (max-width: 767.98px) {

      .section-ptb,
      .section-pt,
      .section-pb {
        padding-top: 6rem;
        padding-bottom: 6rem;
      }
    }

    hr.line {
      margin: 0;
      border-color: #1c223a;
      border-width: 1px;
      width: 4.5rem;
    }

    hr.line.line-sm {
      width: 8.6rem;
    }

    hr.line.bw-2 {
      border-width: 2px;
    }

    .mb-5 {
      margin-bottom: 0.5rem !important;
    }

    .mb-80 {
      margin-bottom: 8rem !important;
    }

    .mb-20 {
      margin-bottom: 2rem !important;
    }

    .mb-25 {
      margin-bottom: 2.5rem !important;
    }

    img {
      /*  max-width: 100%;  */
    }

    .scale-up-center {
      -webkit-animation: scale-up-center 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
      animation: scale-up-center 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
    }
  </style>

</head>

<body>
  <!-- START HERE -->

	<!-- SIMPLE NAVBAR -->
	<nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
		<div class="container"> <img class="ml-5 m" src="img/logo.png" height="30px" width="110px"></img>
			<ul class="navbar-nav ">
				<li class="nav-item"> <a class="nav-link" href="home.php">Home</a> </li>
			<!-- 	<li class="nav-item"> <a class="nav-link" href="jobseekerd.php">Find a Job</a> </li>
				<li class="nav-item"> <a class="nav-link" href="recruiter.php">Recruit</a> </li> -->
<!-- 				<li class="nav-item"> <a class="nav-link" href="#">Find a Job</a> </li>
				<li class="nav-item"> <a class="nav-link" href="#">About Us</a> </li> -->
			</ul>
		</div>
	</nav>

  <!-- SIMPLE Header -->
  <header id="home-section" class="p-5">

    <div class="container">
      <div class="home-innter container mt-5">
        <div class="row">
          <div class="col-lg-8" data-aos="fade-right">
            <h1 class="display-4 mt-5"><b class="h1">Your Future Starts <br>Here</b>
            </h1>
            <p> Find your next job<br> or career.</p>
            <button class="btn btn-primary" onClick="parent.location='login.php'" type="button">Register/Login
              Now</button>
          </div>

          <div class="col-lg-4">
            <img data-aos="fade-left" data-aos-delay="200" class="mr-5" src="img/hero.png" height="400px" width="480px">
          </div>

        </div>

      </div>
  </header>

  <!-- SIMPLE Section Job listing -->
<!--   <section class="list-jobs">
    <div class="container mt-5  p-5">
      <div class="text-center">
        <h1 class="h2" >Listed Jobs</h1>
        <hr style="height: 3px;border:none;color:#333;" width="5%" color="black">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus pariatur dolores commodi nemo dolor hic
          tempore expedita molestias, sit amet aut voluptatem quae at incidunt. Repellendus nemo eaque dolor corporis?
        </p>
      </div>
      <div class="d-flex justify-content-center align-items-center ">
        <div class="hot-jobs-list mb-3 " data-aos="fade-left" style="max-width: 840px;">
          <div class="row no-gutters">
            <div>
              <img class="m-4" height="80px" width="80px" data-aos="zoom-in" data-aos-delay="200"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROzWodUIoD4HlQaO-2CF6cLjAah7T6HUAUxdGzM8pd7SfWkSTF_AKZS1rmCSBYR-xZB6M&usqp=CAU"
                alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><b>Frontend Engineer</b></h5>
                <p class="card-text">As a team, we’re moderately federated and our work is defined by the sectors we operate in. Public Finance, Law & Justice and Urban Local governance are a few sectors where we’re actively engaging with our collaborators..</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center align-items-center">
        <div class="hot-jobs-list mb-3" data-aos="fade-left" style="max-width: 840px;">
          <div class="row no-gutters">
            <div>
              <img class="m-4" height="80px" width="80px" data-aos="zoom-in" data-aos-delay="200"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROzWodUIoD4HlQaO-2CF6cLjAah7T6HUAUxdGzM8pd7SfWkSTF_AKZS1rmCSBYR-xZB6M&usqp=CAU"
                alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><b>Ethereum Blockchain Developer</b></h5>
                <p class="card-text">Design and develop resilient and scalable solutions that receive, custody, and broadcast digital assets for millions of users across all major blockchain networks.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center align-items-center">
        <div class="hot-jobs-list mb-3" data-aos="fade-left" style="max-width: 840px;">
          <div class="row no-gutters">
            <div>
              <img class="m-4" height="80px" width="80px" data-aos="zoom-in" data-aos-delay="200"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROzWodUIoD4HlQaO-2CF6cLjAah7T6HUAUxdGzM8pd7SfWkSTF_AKZS1rmCSBYR-xZB6M&usqp=CAU"
                alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><b>Mern developer</b></h5>
                <p class="card-text">Fawr Bsol focuses on Educational Technology, Artificial Intelligence, Product Design, Mobile Games, Software, and Internet of Things. Their company has offices in coimbatore and Bengaluru.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center">
        <button class="btn btn-outline-primary" type="button">View More</button>
      </div>
    </div>
    </div>

  </section> -->

  <!-- SIMPLE Section- How it works? -->
  <section class="section-ptb bg-white bg-5">
    <div class="container mt-5 p-5">
      <div class="text-center">
        <h1 class="h2">How it Works</h1>
        <hr style="height: 3px;border:none;color:#333;" width="5%" color="black">
        <p>Find out how our website works below!.</p>
      </div>
      <div class="working-area working-area-two pt-100 pb-70">
        <div class="row">
          <div class="col-lg-3 col-sm-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="single-working">
              <i class="fa fa-search pb-3"></i>
              <h3>Find The Right Job</h3>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sint tempore.</p> -->
            </div>
          </div>
          <div class="col-lg-3 col-sm-6" data-aos="zoom-in" data-aos-delay="900">
            <div class="single-working">
              <i class="fa fa-building pb-3"></i>
              <h3>Research Companies</h3>
             <!--  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sint tempore.</p> -->
            </div>
          </div>
          <div class="col-lg-3 col-sm-6" data-aos="zoom-in" data-aos-delay="1300">
            <div class="single-working">
              <i class="fa fa-credit-card pb-3"></i>
              <h3>Compare Salaries</h3>
             <!--  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sint tempore.</p> -->
            </div>
          </div>
          <div class="col-lg-3 col-sm-6" data-aos="zoom-in" data-aos-delay="1700">
            <div class="single-working">
              <i class="fa fa-check-circle pb-3"></i>
              <h3>Quick Apply</h3>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sint tempore.</p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SIMPLE Section- For Recruiters? -->
  <section class="for-recruiters  p-5">

    <div class="container mt-5">
      <div class="text-center">

        <h1 class="h2">For Recruiters</h1>
        <hr style="height: 3px;border:none;color:#333;" width="5%" color="black">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus pariatur dolores commodi nemo dolor hic
          tempore expedita molestias, sit amet aut voluptatem quae at incidunt. Repellendus nemo eaque dolor corporis?
        </p>
      </div>
    </div>

    <div class="home-innter container mt-5" data-aos="fade" data-aos-delay="300">
      <div class="row">
        <div class="col-lg-6">
          <img class="mr-5 mt-5" src="img/illus3.png" height="450px">
        </div>

        <div class="col-lg-6 mt-5" data-aos="zoom-in" data-aos-delay="300">
          <span style="color: #317bbc;">Global Talent</span>
          <h1 class=""><b class="h3">Hire the leading talents in the industry</b></h1>
          <p style="font-size:15px"> At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
            no sea takimata sanctus est Lorem ipsum dolor sit amet. consetetur sadipscing elitr, sed diam nonumy eirmod
            tempor invidunt labore et dolore magna aliquyam erat, sed diam voluptua.At vero eos et accusam et justo duo
            dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore et dolore magna aliquyam erat,
            sed diam voluptua. sed diam nonumy eirmod tempor invidunt labore et dolore magna aliquyam erat, sed diam
            voluptua. </p>
          <div class="row">
            <div class="col-lg-6">
              <div class="talent-single-item">
                <h3>What we believe</h3>
                <p style="font-size:15px">Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod
                  tempor incididunt.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="talent-single-item">
                <h3>What We Offer</h3>
                <p style="font-size:15px">Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod
                  tempor incididunt.</p>
              </div>
            </div>
          </div>
          <button class="btn btn-primary" type="button">Post A Job</button>
        </div>
      </div>
    </div>
  </section>

  <!--   <section class="testimonails  p-5">
    <div class="d-flex justify-content-center mt-5">
      <div class="gtco-testimonials" class="  position: relative;
      margin-top: 30px;">
        <h2>Testimonials Carousel - Cards Comments</h2>
        <div class="owl-carousel owl-carousel1 owl-theme">
          <div>
            <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1572561300743-2dd367ed0c9a?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=300" alt="">
              <div class="card-body">
                <h5>Ronne Galle <br />
                  <span> Project Manager </span>
                </h5>
                <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                  impedit quo minus id quod maxime placeat ” </p>
              </div>
            </div>
          </div>
          <div>
            <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1588361035994-295e21daa761?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=301" alt="">
              <div class="card-body">
                <h5>Missy Limana<br />
                  <span> Engineer </span>
                </h5>
                <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                  impedit quo minus id quod maxime placeat ” </p>
              </div>
            </div>
          </div>
          <div>
            <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1575377222312-dd1a63a51638?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=302&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=302" alt="">
              <div class="card-body">
                <h5>Martha Brown<br />
                  <span> Project Manager </span>
                </h5>
                <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                  impedit quo minus id quod maxime placeat ” </p>
              </div>
            </div>
          </div>
          <div>
            <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1549836938-d278c5d46d20?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=303&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=303" alt="">
              <div class="card-body">
                <h5>Hanna Lisem<br />
                  <span> Project Manager </span>
                </h5>
                <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                  impedit quo minus id quod maxime placeat ” </p>
              </div>
            </div>
          </div>
        </div>
      </div>    </div>
  </section> -->

  <section class="section-ptb bg-white bg-5">
    <div class="container">
      <div class="row text-center">
        <div class="container mt-5">
          <div class="text-center">

            <h1 class="h2">Testimonials</h1>
            <hr style="height: 3px;border:none;color:#333;" width="5%" color="black">
            <p>Online Job Portal
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="client-testimonial position-relative">
            <div class="client-nav">
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#client1" data-toggle="tab">
                    <img class="drop-shadow" src="http://regaltheme.com/tf/multi/rnr/assets/img/client/thumb/1.png"
                      alt="Client Image" data-aos="zoom-in" data-aos-delay="300">
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#client2" data-toggle="tab">
                    <img class="drop-shadow" src="http://regaltheme.com/tf/multi/rnr/assets/img/client/thumb/2.png"
                      alt="Client Image" data-aos="zoom-in" data-aos-delay="300">
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#client3" data-toggle="tab">
                    <img class="drop-shadow" src="http://regaltheme.com/tf/multi/rnr/assets/img/client/thumb/3.png"
                      alt="Client Image" data-aos="zoom-in" data-aos-delay="300">
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#client4" data-toggle="tab">
                    <img class="drop-shadow" src="http://regaltheme.com/tf/multi/rnr/assets/img/client/thumb/4.png"
                      alt="Client Image" data-aos="zoom-in" data-aos-delay="300">
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#client5" data-toggle="tab">
                    <img class="drop-shadow" src="http://regaltheme.com/tf/multi/rnr/assets/img/client/thumb/5.png"
                      alt="Client Image"  data-aos="zoom-in" data-aos-delay="300">
                  </a>
                </li>
              </ul>
            </div>
            <div class="row text-center">
              <div class="col-10 col-md-8 col-lg-6 mx-auto">
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="client1">
                    <div class="client-thumb mx-auto mb-25">
                      <img class="drop-shadow" src="http://regaltheme.com/tf/multi/rnr/assets/img/client/thumb/1.png"
                        alt="Client Image" data-aos="zoom-in" data-aos-delay="300">
                    </div>
                    <div class="client-desc bg-white d-flex align-items-center">
                      <div class="text mx-auto">
                        <h4 class="mb-10">Evelyn Riley</h4>
                        <h6>Hade Of Idea</h6>
                        <p>Richard McClintock, a Latin professor at Hampden <br class="d-none d-lg-block">College in
                          Virginia, looked up one of the more obscure Latin words</p>
                      </div>
                    </div>
                  </div>
                  <!-- Single Client End -->
                  <div class="tab-pane fade" id="client2">
                    <div class="client-thumb mx-auto mb-25">
                      <img class="drop-shadow" data-aos="zoom-in" data-aos-delay="300" src="http://regaltheme.com/tf/multi/rnr/assets/img/client/thumb/2.png"
                        alt="Client Image">
                    </div>
                    <div class="client-desc bg-white d-flex align-items-center">
                      <div class="text mx-auto">
                        <h4 class="mb-10">Ethan Green</h4>
                        <h6>Photograper</h6>
                        <p>Many desktop publishing packages and web page editors <br class="d-none d-lg-block"> now use
                          Lorem Ipsum as their default model text, and a search for 'lorem ipsum'</p>
                      </div>
                    </div>
                  </div>
                  <!-- Single Client End -->
                  <div class="tab-pane fade" id="client3">
                    <div class="client-thumb mx-auto mb-25">
                      <img class="drop-shadow" data-aos="zoom-in" data-aos-delay="300" src="http://regaltheme.com/tf/multi/rnr/assets/img/client/thumb/3.png"
                        alt="Client Image">
                    </div>
                    <div class="client-desc bg-white d-flex align-items-center">
                      <div class="text mx-auto">
                        <h4 class="mb-10">Marie Soto</h4>
                        <h6>Designer</h6>
                        <p>Virginia, looked up one of the more obscure Latin <br class="d-none d-lg-block"> words,
                          consectetur, from a Lorem Ipsum passage, and going through the cites of looked</p>
                      </div>
                    </div>
                  </div>
                  <!-- Single Client End -->
                  <div class="tab-pane fade" id="client4">
                    <div class="client-thumb mx-auto mb-25">
                      <img class="drop-shadow" data-aos="zoom-in" data-aos-delay="300" src="http://regaltheme.com/tf/multi/rnr/assets/img/client/thumb/4.png"
                        alt="Client Image">
                    </div>
                    <div class="client-desc bg-white d-flex align-items-center">
                      <div class="text mx-auto">
                        <h4 class="mb-10">Willie Munoz</h4>
                        <h6>Content Writer</h6>
                        <p>Words which don't look even slightly believable. <br class="d-none d-lg-block">If you are
                          going to use a passage of Lorem Ipsum, you need to be sure there isn't anything</p>
                      </div>
                    </div>
                  </div>
                  <!-- Single Client End -->
                  <div class="tab-pane fade" id="client5">
                    <div class="client-thumb mx-auto mb-25">
                      <img class="drop-shadow" data-aos="zoom-in" data-aos-delay="300" src="http://regaltheme.com/tf/multi/rnr/assets/img/client/thumb/5.png"
                        alt="Client Image">
                    </div>
                    <div class="client-desc bg-white d-flex align-items-center">
                      <div class="text mx-auto">
                        <h4 class="mb-10">Susan Gardner</h4>
                        <h6>Manager</h6>
                        <p>The point of using Lorem Ipsum is that it has a more <br class="d-none d-lg-block"> normal
                          distribution of letters, as opposed to using 'Content here, content here point of using</p>
                      </div>
                    </div>
                  </div>
                  <!-- Single Client End -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="text-center m-5 p-5">
      <div class="container mt-5">
        <h1 class="h2">Check out our latest article</h1>
        <hr style="height: 3px;border:none;color:#333;" width="5%" color="black">
<!--         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus pariatur dolores commodi nemo dolor hic
          tempore expedita molestias, sit amet aut voluptatem quae at incidunt. Repellendus nemo eaque dolor corporis?
        </p> -->
      </div>
    </div>
    <div class="container" style="max-width: 840px;">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100" data-aos="zoom-in" data-aos-delay="600" style="-webkit-box-shadow: 0 5px 20px 3px rgb(230 233 249 / 90%);
          box-shadow: 0 5px 20px 3px rgb(230 233 249 / 90%);  border-style: none;
      ">
            <img src="https://mdbootstrap.com/img/new/standard/city/044.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">The Most Popular Job in The Country </h5>
              <p class="card-text" style="font-size:15px">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus pariatur dolores commodi nemo dolor
                hic
                tempore expedita molestias, sit amet aut voluptatem quae at incidunt. Repellendus nemo eaque dolor
                corporis?
              </p>
            </div>

          </div>
        </div>
        <div class="col">
          <div class="card h-100" data-aos="zoom-in" data-aos-delay="900" style="-webkit-box-shadow: 0 5px 20px 3px rgb(230 233 249 / 90%);
          box-shadow: 0 5px 20px 3px rgb(230 233 249 / 90%);  border-style: none;
      ">
            <img src="https://mdbootstrap.com/img/new/standard/city/043.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">
                10 Questions to Ask Before Joining a Company</h5>
              <p class="card-text" style="font-size:15px">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus pariatur dolores commodi nemo dolor
                hic
                tempore expedita molestias, sit amet aut voluptatem quae at incidunt. Repellendus nemo eaque dolor
                corporis?
              </p>
            </div>

          </div>
        </div>
        <div class="col">
          <div class="card h-100" data-aos="zoom-in" data-aos-delay="300" style="-webkit-box-shadow: 0 5px 20px 3px rgb(230 233 249 / 90%);
          box-shadow: 0 5px 20px 3px rgb(230 233 249 / 90%);  border-style: none;
      ">
            <img src="https://mdbootstrap.com/img/new/standard/city/042.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">
                How to Hire Your First Growth Online Designer</h5>
              <p class="card-text" style="font-size:15px">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus pariatur dolores commodi nemo dolor
                hic
                tempore expedita molestias, sit amet aut voluptatem quae at incidunt. Repellendus nemo eaque dolor
                corporis?
              </p>
            </div>

          </div>
        </div>
      </div>
      <div class="text-center mt-3">
<!--         <button class="btn btn-outline-primary" type="button">View More</button>
 -->      </div>
    </div>
  </section>

  <!-- Footer -->
  <div class="mt-5 pt-5 pb-5 footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-xs-12 about-company">
          <h2>Job Portal</h2>
          <p class="pr-5 text-white-50">Find your next dream job here</p>
          <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i
                class="fa fa-linkedin-square"></i></a></p>
        </div>
        <div class="col-lg-3 col-xs-12 links">
<!--           <h4 class="mt-lg-0 mt-sm-3">Links</h4>
          <ul class="m-0 p-0">
            <li>- <a href="#">Lorem ipsum</a></li>
            <li>- <a href="#">Nam mauris velit</a></li>
            <li>- <a href="#">Etiam vitae mauris</a></li>
            <li>- <a href="#">Fusce scelerisque</a></li>
            <li>- <a href="#">Sed faucibus</a></li>
            <li>- <a href="#">Mauris efficitur nulla</a></li>
          </ul> -->
        </div>
        <div class="col-lg-4 col-xs-12 location">
          <h4 class="mt-lg-0 mt-sm-4">Location</h4>
          <p>22, Lorem ipsum dolor, consectetur adipiscing</p>
          <p class="mb-0"><i class="fa fa-phone mr-3"></i>(541) 754-3010</p>
          <p><i class="fa fa-envelope-o mr-3"></i>info@hsdf.com</p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col copyright">
          <p class=""><small class="text-white-50">© 2019. All Rights Reserved.</small></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->

  <script src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<!-- <script src="http://localhost:3002/dist/aos.js"></script> -->

		<script>
			AOS.init({
				easing: 'ease-out-back',
				duration: 1000
			});
		</script>
  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());
  </script>
</body>

</html>