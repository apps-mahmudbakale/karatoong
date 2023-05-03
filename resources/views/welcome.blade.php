@extends('layouts.app')
<!-- Preloader Start -->
@section('content')
<!-- Banner Section Start -->
<section class="banner-2 section-padding">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-12 col-xl-6 col-lg-6">
        <div class="banner-content">
          <span class="subheading">Expert instruction</span>
          <h1>Convenient easy way of learning new skills!</h1>
          <p>The ultimate planning solution for busy women who want to reach their personal goals.Effortless comfortable eye-catching unique detail </p>
          <a href="" class="btn btn-main">Our Programmes </a>  
        </div>
      </div>

      <div class="col-md-12 col-xl-6 col-lg-6">
        <div class="banner-img-round mt-5 mt-lg-0">
          <img src="{{ asset('karatoo.png') }}" alt="" class="img-fluid">
        </div>
      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>
<!-- Banner Section End -->

<!-- Feature section start -->
<section class="feature-4">
  <div class="container">
    <div class="row ">
      <div class="col-lg-4 col-md-6 col-xl-4 col-sm-6">
        <div class="feature-item">
          <div class="feature-icon">
            <i class="flaticon-flag"></i>
          </div>
          <div class="feature-text">
            <h4>Expert Teacher</h4>
            <p>Develop skills for career of various majors including computer</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-xl-4 col-sm-6">
        <div class="feature-item">
          <div class="feature-icon">
            <i class="flaticon-layers"></i>
          </div>
          <div class="feature-text">
            <h4>Self Development</h4>
            <p>Develop skills for career of various majors including computer.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-xl-4 col-sm-6">
        <div class="feature-item">
          <div class="feature-icon">
            <i class="flaticon-video-camera"></i>
          </div>
          <div class="feature-text">
            <h4>Remote Learning</h4>
            <p>Develop skills for career of various majors including language</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Feature section End -->
<section class="section-padding popular-course-list">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-8 col-xl-8 col-md-8">
        <div class="section-heading mb-sm-0">
          <span class="subheading">Trending Courses</span>
          <h3>Popular Online Courses Around You</h3>
          <p>The ultimate planning solution for
          busy women who want to reach their personal goals</p>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4  col-md-4">
        <div class="text-md-right mb-5 mb-md-0">
          <a href="" class="btn btn-main">All Programmes</a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="course-block course-list-item">
          <div class="row align-items-center">
            <div class="col-lg-4 col-sm-4 ">
              <div class="course-img mb-4 mb-md-0">
                <img src="assets/images/course/course-sm1.jpg" alt="" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-8  col-sm-8">
              <div class="course-content">
                <div class="course-price ">$50 <del>$90</del></div>   
                <h4><a href="#">Information About UI/UX Design Degree</a></h4>    
                <div class="course-meta">
                  <span class="course-duration"><i class="far fa-file-alt"></i>82 Lessons</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-12">
        <div class="course-block course-list-item">
          <div class="row align-items-center">
            <div class="col-lg-4 col-sm-4">
              <div class="course-img mb-4 mb-md-0">
                <img src="assets/images/course/course-sm2.jpg" alt="" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-8  col-sm-8">
              <div class="course-content">
                <div class="course-price ">$80 <del>$100</del></div>   

                <h4><a href="#">Photography Crash Course for Photographer</a></h4>    
                <div class="course-meta">
                  <span class="course-duration"><i class="far fa-file-alt"></i>82 Lessons</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-12">
        <div class="course-block course-list-item">
          <div class="row align-items-center">
            <div class="col-lg-4  col-sm-4">
              <div class="course-img mb-4 mb-md-0">
                <img src="assets/images/course/course-sm3.jpg" alt="" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-8  col-sm-8">
              <div class="course-content">
                <div class="course-price ">$100 <del>$120</del></div>   

                <h4><a href="#">React – The Complete Guide (React Router)</a></h4>    
                <div class="course-meta">
                  <span class="course-duration"><i class="far fa-file-alt"></i>82 Lessons</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-lg-6 col-md-12">
        <div class="course-block course-list-item">
          <div class="row align-items-center">
            <div class="col-lg-4  col-sm-4">
              <div class="course-img mb-4 mb-md-0">
                <img src="assets/images/course/course-sm4.jpg" alt="" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-8  col-sm-8">
              <div class="course-content">
                <div class="course-price ">$180 <del>$190</del></div>   

                <h4><a href="#">WebCrash Course for Photographer</a></h4>    
                <div class="course-meta">
                  <span class="course-duration"><i class="far fa-file-alt"></i>82 Lessons</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-xl-6">
        <div class="text-center mt-5">
          Take the control of their life back and start doing things to make their dream come true. <a href="" class="font-weight-bold text-underline">View all Programmes </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About Section Start -->
<section class="about-section">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
        <div class="row ">
          <div class="col-xl-6 col-lg-6  col-md-6 col-sm-6">
            <div class="about-imgbox">
              <img src="{{ asset('images/home_1.jpeg')}}" alt="" class="img-fluid">
            </div>
            <div class="about-imgbox">
              <img src="{{ asset('images/home_2.jpeg') }}" alt="" class="img-fluid">
            </div>
          </div>

          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <div class="about-imgbox mt-5">
              <img src="assets/images/bg/feature3.png" alt="" class="img-fluid">
            </div>
            <div class="about-imgbox">
              <img src="assets/images/bg/about-img.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-6 col-lg-6">
        <div class="section-heading pl-lg-5 ">
          <span class="subheading">Self Development Course</span>
          <h3>Get Instant Access To <span> Expert solution</span></h3>
          <p class="mb-4">The ultimate planning solution for busy women who want to reach their personal goals.Effortless comfortable eye-catching unique detail.Take the control of their life back and start doing things </p>
          <a href="#" class="btn btn-solid-border">Enroll Now</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About Section End -->

<!-- CTA Sidebar start -->
<section class="cta bg-gray section-padding">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-7">
        <div class="section-heading center-heading mb-0">
          <span class="subheading">be a instructor</span>
          <h3>Want to Become an Instructor ?</h3>
          <p class="mb-4">Join millions of people from around the world
            learning together. Online learning is as easy and
          natural as chatting.</p>
          <a href="#" class="btn btn-main">Become Instructor</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- CTA Sidebar end -->

<!-- Footer section End -->
@endsection
