<?php

/* @var $this yii\web\View */

use yii\helpers\Html;



use app\assets\RoysAsset;
RoysAsset::register($this);


$this->title = 'Sample Code';
$this->params['breadcrumbs'][] = $this->title;
?>
<hr />

<class="container">
  <h1 class="text-center">Apple Like Content Section</h1>

  <!--  image left  -->
  <div class="row">
    <div class="col-md-6">

      <img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/Imac_alu.png" alt="" class="w-100" />
    </div>
    <!-- /.col-md-6 -->
    <div class="col-md-6">

      <div class="row align-items-center h-100">
        <div class="col">
          <h1 class="display-3">Vertically Centered Text</h1>
          <p class="lead">Flexbox grids help you build some really nice layouts.
            <br /><br />
            <a href="" class="">Learn More</a>
          </p>

        </div>
      </div>

    </div>
    <!-- /.col-md-6 -->

  </div>
  <!-- /.row -->

  <!--  image right  -->
  <div class="row">
    <div class="col-md-6 order-md-6">

      <img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/Imac_alu.png" alt="" class="w-100" />
    </div>
    <!-- /.col-md-6 -->
    <div class="col-md-6 order-md-1">

      <div class="row align-items-center h-100">
        <div class="col">
          <h1 class="display-3">Vertically Centered Text</h1>
          <p class="lead">Push and pull classes were added to change the order on desktop but still have the image before the text on mobile.
            <br /><br />
            <a href="" class="">Learn More</a>
          </p>

        </div>
      </div>

    </div>
    <!-- /.col-md-6 -->

  </div>
  <!-- /.row -->

</div>





<hr />

<div class="jumbotron text-center">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead"><strong>Please check your email</strong> for further instructions on how to complete your account setup.</p>
  <hr>
  <p>
    Having trouble? <a href="">Contact us</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="https://bootstrapcreative.com/" role="button">Continue to homepage</a>
  </p>
</div>


<hr />

<h5 class="text-center">Use Vertical align for inline elements</h5>
<div class="border mb-4">
  <span class="align-baseline">baseline</span>
  <span class="align-top">top</span>
  <span class="align-middle">middle</span>
  <span class="align-bottom">bottom</span>
  <span class="align-text-top">text-top</span>
  <span class="align-text-bottom">text-bottom</span>
</div>



<h5 class="text-center">Use Flexbox for block elements</h5>

<p class="text-center"><strong>Notes:</strong> It is important to set the body and html to 100% and give your parent container some height.</p>

<div class="d-flex flex-column justify-content-center h-25">
    <h1>Vertical Center</h1>
  <a href="https://bootstrapcreative.com/resources/flexbox-cheat-sheet/">Get Flexbox Cheat Sheet</a>
</div>

<div class="d-flex flex-column justify-content-center align-items-center h-25">
    <h1>Center Center</h1>
  <a href="https://bootstrapcreative.com/resources/flexbox-cheat-sheet/">Get Flexbox Cheat Sheet</a>
</div>


<div class="d-md-flex flex-md-column justify-content-md-center align-items-md-center h-25">
    <h1>Center Center</h1>
    <p>only on md breakpoint and up</p>
  <a href="https://bootstrapcreative.com/resources/flexbox-cheat-sheet/">Get Flexbox Cheat Sheet</a>
</div>



<hr />

<blockquote>
   <p>Some things never change, unless someone changes things!</p>
   <cite>
      <a href="https://bootstrapcreative.com/">Jacob Lett</a>
   </cite>
</blockquote>


<hr />

<!-- Design inspired from https://www.hotjar.com/ -->
<div class="jumbotron">
  <div class="container text-center text-lg-left">
    
    <div class="row">
      <div class="col-lg-8">
          <h1 class="display-4">The fast & visual way
to <span class="highlight-word">understand your users</span></h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <span class="text-center d-inline-block">
          <a class="btn btn-primary btn-lg w-100" href="#" role="button">Try it free</a>
        <p class="text-muted">No credit card required</p>
        </span>
        
      </div>
      <div class="col-lg-4 align-items-center d-flex">
        <img src="https://dummyimage.com/1200x800/949494/fff.png" alt="" class="img-fluid">
      </div>
    </div>

 
    </div>
</div>




<hr />

<div class="jumbotron jumbotron-fluid bg-dark">
  
  <div class="jumbotron-background">
    <img src="https://placeimg.com/2000/1000/nature" class="blur ">
  </div>

  <div class="container text-white">

    <h1 class="display-4">Hello, world!</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>

  </div>
  <!-- /.container -->
  
 
</div>
<!-- /.jumbotron -->

<!-- 
For IE support of object-fit add this to your document
&lt;script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.4/ofi.min.js"&gt;&lt;/script&gt;
-->




<hr />

<div class="jumbotron jumbotron-fluid">

<video autoplay muted loop poster="https://dummyimage.com/900x400/000/fff">    
    <source src="" data-src="https://upload.wikimedia.org/wikipedia/commons/7/79/Big_Buck_Bunny_small.mp4" type="video/mp4">
    <source src="" data-src="https://upload.wikimedia.org/wikipedia/commons/7/79/Big_Buck_Bunny_small.webm" type="video/webm">
    <source src="" data-src="https://upload.wikimedia.org/wikipedia/commons/7/79/Big_Buck_Bunny_small.ogv" type="video/ogg">
</video>

  <div class="container text-white">

    <h1 class="display-4">Hello, world!</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>

  </div>
  <!-- /.container -->
</div>
<!-- /.jumbotron -->


<hr />

<div class="container py-5">
  <!-- For Demo Purpose-->
  <header class="text-center">
    <h1 class="display-4">Bootstrap collapse</h1>
    <p class="text-muted font-italic mb-0">Using Bootstrap 4, build a collapse panel with up & down chevrons.</p>
    <p class="text-muted font-italic">Snippet by<a href="https://bootstrapious.com" class="text-muted">
        <u>Bootstrapious</u></a>
    </p>
  </header>

  <div class="py-5">
    <div class="row">

      <div class="col-lg-6 mb-5">
        <!-- Collapse Panel 1--><a data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="true" aria-controls="collapseExample1" class="btn btn-primary btn-block py-2 shadow-sm with-chevron">
          <p class="d-flex align-items-center justify-content-between mb-0 px-3 py-2"><strong class="text-uppercase">Collapse Panel</strong><i class="fa fa-angle-down"></i></p>
        </a>
        <div id="collapseExample1" class="collapse shadow-sm show">
          <div class="card">
            <div class="card-body">
              <p class="font-italic mb-0 text-muted">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5">
        <!-- Collapse Panel 2-->
        <button data-toggle="collapse" data-target="#collapseExample2" role="button" aria-expanded="true" aria-controls="collapseExample2" class="btn btn-success btn-block py-2 shadow-sm with-chevron">
          <p class="d-flex align-items-center justify-content-between mb-0 px-3 py-2"><strong class="text-uppercase">Collapse Panel</strong><i class="fa fa-angle-down"></i></p>
        </button>
        <div id="collapseExample2" class="collapse shadow-sm show">
          <div class="card">
            <div class="card-body">
              <p class="font-italic mb-0 text-muted">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5">
        <!-- Collapse Panel 3--><a data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="true" aria-controls="collapseExample3" class="btn btn-warning btn-block p2-3 shadow-sm with-chevron">
          <p class="d-flex align-items-center justify-content-between mb-0 px-3 py-2"><strong class="text-uppercase">Collapse Panel</strong><i class="fa fa-angle-down"></i></p>
        </a>
        <div id="collapseExample3" class="collapse shadow-sm show">
          <div class="card">
            <div class="card-body">
              <p class="font-italic mb-0 text-muted">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5">
        <!-- Collapse Panel 4--><a data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="true" aria-controls="collapseExample4" class="btn btn-danger btn-block p2-3 shadow-sm with-chevron">
          <p class="d-flex align-items-center justify-content-between mb-0 px-3 py-2"><strong class="text-uppercase">Collapse Panel</strong><i class="fa fa-angle-down"></i></p>
        </a>
        <div id="collapseExample4" class="collapse shadow-sm show">
          <div class="card">
            <div class="card-body">
              <p class="font-italic mb-0 text-muted">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


<hr />
<!-- Navbar-->
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container">
            <!-- Navbar Brand -->
            <a href="#" class="navbar-brand">
                <img src="https://res.cloudinary.com/mhmd/image/upload/v1571398888/Group_1514_tjekh3_zkts1c.svg" alt="logo" width="150">
            </a>
        </div>
    </nav>
</header>


<div class="container">
    <div class="row py-5 mt-4 align-items-center">
        <!-- For Demo Purpose -->
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="https://res.cloudinary.com/mhmd/image/upload/v1569543678/form_d9sh6m.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
            <h1>Create an Account</h1>
            <p class="font-italic text-muted mb-0">Create a minimal registeration page using Bootstrap 4 HTML form elements.</p>
            <p class="font-italic text-muted">Snippet By <a href="https://bootstrapious.com" class="text-muted">
                <u>Bootstrapious</u></a>
            </p>
        </div>

        <!-- Registeration Form -->
        <div class="col-md-7 col-lg-6 ml-auto">
            <form action="#">
                <div class="row">

                    <!-- First Name -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="firstName" type="text" name="firstname" placeholder="First Name" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Last Name -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="lastName" type="text" name="lastname" placeholder="Last Name" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Email Address -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Phone Number -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-phone-square text-muted"></i>
                            </span>
                        </div>
                        <select id="countryCode" name="countryCode" style="max-width: 80px" class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted">
                            <option value="">+12</option>
                            <option value="">+10</option>
                            <option value="">+15</option>
                            <option value="">+18</option>
                        </select>
                        <input id="phoneNumber" type="tel" name="phone" placeholder="Phone Number" class="form-control bg-white border-md border-left-0 pl-3">
                    </div>.


                    <!-- Job -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-black-tie text-muted"></i>
                            </span>
                        </div>
                        <select id="job" name="jobtitle" class="form-control custom-select bg-white border-left-0 border-md">
                            <option value="">Choose your job</option>
                            <option value="">Designer</option>
                            <option value="">Developer</option>
                            <option value="">Manager</option>
                            <option value="">Accountant</option>
                        </select>
                    </div>

                    <!-- Password -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Password Confirmation -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="passwordConfirmation" type="text" name="passwordConfirmation" placeholder="Confirm Password" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <a href="#" class="btn btn-primary btn-block py-2">
                            <span class="font-weight-bold">Create your account</span>
                        </a>
                    </div>

                    <!-- Divider Text -->
                    <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                        <div class="border-bottom w-100 ml-5"></div>
                        <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                        <div class="border-bottom w-100 mr-5"></div>
                    </div>

                    <!-- Social Login -->
                    <div class="form-group col-lg-12 mx-auto">
                        <a href="#" class="btn btn-primary btn-block py-2 btn-facebook">
                            <i class="fa fa-facebook-f mr-2"></i>
                            <span class="font-weight-bold">Continue with Facebook</span>
                        </a>
                        <a href="#" class="btn btn-primary btn-block py-2 btn-twitter">
                            <i class="fa fa-twitter mr-2"></i>
                            <span class="font-weight-bold">Continue with Twitter</span>
                        </a>
                    </div>

                    <!-- Already Registered -->
                    <div class="text-center w-100">
                        <p class="text-muted font-weight-bold">Already Registered? <a href="#" class="text-primary ml-2">Login</a></p>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>


<hr />

<section>
  <div class="container p-5">
    <!-- For demo purpose -->
    <div class="row mb-5 text-center text-dark">
      <div class="col-lg-10 mx-auto">
        <h1 class="display-4">File upload button </h1>
        <p class="lead">Build a simple file upload button using Bootstrap 4.</p>
      </div>
    </div>
    <!-- End -->


    <div class="row">
      <div class="col-lg-5 mx-auto">
        <div class="p-5 bg-white shadow rounded-lg"><img src="https://res.cloudinary.com/mhmd/image/upload/v1557366994/img_epm3iz.png" alt="" width="200" class="d-block mx-auto mb-4 rounded-pill">

          <!-- Default bootstrap file upload-->

          <h6 class="text-center mb-4 text-muted">
            You can use default Bootstrap file upload
          </h6>

          <div class="custom-file overflow-hidden rounded-pill mb-5">
            <input id="customFile" type="file" class="custom-file-input rounded-pill">
            <label for="customFile" class="custom-file-label rounded-pill">Choose file</label>
          </div>
          <!-- End -->

          <h6 class="text-center mb-4 text-muted">
            Or a custom button that launches file browser
          </h6>

          <!-- Custom bootstrap upload file-->
          <label for="fileUpload" class="file-upload btn btn-primary btn-block rounded-pill shadow"><i class="fa fa-upload mr-2"></i>Browse for file ...
                        <input id="fileUpload" type="file">
                    </label>
          <!-- End -->

        </div>
      </div>
    </div>
  </div>
</section>

<hr />

<div class="container py-5">
  <!-- For demo purpose -->
  <div class="row mb-5">
    <div class="col-lg-8 text-dark py-4 text-center mx-auto">
      <h1 class="display-4">Bootstrap 4 tabs</h1>
      <p class="lead mb-0">Build a few custom styled tab variants using Bootstrap 4.</p>
      <p class="lead">Snippet by <a href="https://bootstrapious.com/snippets" class="text-white">
                Bootstrapious</a>
      </p>
    </div>
  </div>
  <!-- End -->


  <div class="p-5 bg-white rounded shadow mb-5">
    <!-- Rounded tabs -->
    <ul id="myTab" role="tablist" class="nav nav-tabs nav-pills flex-column flex-sm-row text-center bg-light border-0 rounded-nav">
      <li class="nav-item flex-sm-fill">
        <a id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" class="nav-link border-0 text-uppercase font-weight-bold active">Home</a>
      </li>
      <li class="nav-item flex-sm-fill">
        <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Profile</a>
      </li>
      <li class="nav-item flex-sm-fill">
        <a id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Contact</a>
      </li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div id="home" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade px-4 py-5 show active">
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div id="profile" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div id="contact" role="tabpanel" aria-labelledby="contact-tab" class="tab-pane fade px-4 py-5">
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <!-- End rounded tabs -->
  </div>


  


  

</div>


<hr />

<div class="container-fluid">
  <div class="px-lg-5">

    <!-- For demo purpose -->
    <div class="row py-5">
      <div class="col-lg-12 mx-auto">
        <div class="text-dark p-5 shadow-sm rounded banner">
          <h1 class="display-4">Bootstrap 4 photo gallery</h1>
          <p class="lead">Bootstrap photogallery snippet.</p>
          <p class="lead">Snippet by <a href="https://bootstrapious.com/snippets" class="text-reset"> 
                        Bootstrapious</a>, Images by <a href="https://unsplash.com" class="text-reset">Unsplash</a>.
          </p>
        </div>
      </div>
    </div>
    <!-- End -->

    <div class="row">
      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294929/matthew-hamilton-351641-unsplash_zmvozs.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Red paint cup</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPG</span></p>
              <div class="badge badge-danger px-3 rounded-pill font-weight-normal">New</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294927/cody-davis-253928-unsplash_vfcdcl.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Blorange</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">PNG</span></p>
              <div class="badge badge-primary px-3 rounded-pill font-weight-normal">Trend</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294928/nicole-honeywill-546848-unsplash_ymprvp.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">And She Realized</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPG</span></p>
              <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">Featured</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294927/dose-juice-1184444-unsplash_bmbutn.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">DOSE Juice</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPEG</span></p>
              <div class="badge badge-success px-3 rounded-pill font-weight-normal">Hot</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294926/cody-davis-253925-unsplash_hsetv7.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Pineapple</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">PNG</span></p>
              <div class="badge badge-primary px-3 rounded-pill font-weight-normal">New</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294928/tim-foster-734470-unsplash_xqde00.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Yellow banana</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPG</span></p>
              <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">Featured</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294927/mike-meyers-737494-unsplash_yd11yq.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Teal Gameboy</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPEG</span></p>
              <div class="badge badge-info px-3 rounded-pill font-weight-normal">Hot</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294930/ronald-cuyan-434484-unsplash_iktjid.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Color in Guatemala.</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">PNG</span></p>
              <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">Featured</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294929/matthew-hamilton-351641-unsplash_zmvozs.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Red paint cup</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPG</span></p>
              <div class="badge badge-danger px-3 rounded-pill font-weight-normal">New</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294927/cody-davis-253928-unsplash_vfcdcl.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Lorem ipsum dolor</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">PNG</span></p>
              <div class="badge badge-primary px-3 rounded-pill font-weight-normal">Trend</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294928/nicole-honeywill-546848-unsplash_ymprvp.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Lorem ipsum dolor</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPG</span></p>
              <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">Featured</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294927/dose-juice-1184444-unsplash_bmbutn.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Lorem ipsum dolor</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPEG</span></p>
              <div class="badge badge-success px-3 rounded-pill font-weight-normal">Hot</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

    </div>
    <div class="py-5 text-right"><a href="#" class="btn btn-dark px-5 py-3 text-uppercase">Show me more</a></div>
  </div>
</div>


<hr />

<!-- For demo purpose -->
<div class="row">
    <div class="col-lg-7 mx-auto text-dark text-center pt-5">
        <h1 class="display-4">Bootstrap 4 profile page</h1>
        <p class="lead mb-0">Easily create a profile widget using bootstrap 4.</p>
        <p class="lead">Snippet by <a href="https://bootstrapious.com/snippets" class="text-white">
            <u>Bootstrapious</u></a>
        </p>
    </div>
</div><!-- End -->


<div class="row py-5 px-4">
    <div class="col-xl-4 col-md-6 col-sm-10 mx-auto">

        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 bg-dark">
                <div class="media align-items-end profile-header">
                    <div class="profile mr-3"><img src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-4.jpg" alt="..." width="130" class="rounded mb-2 img-thumbnail"><a href="#" class="btn btn-dark btn-sm btn-block">Edit profile</a></div>
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0">Manuella Tarly</h4>
                        <p class="small mb-4"> <i class="fa fa-map-marker mr-2"></i>San Farcisco</p>
                    </div>
                </div>
            </div>

            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">241</h5><small class="text-muted"> <i class="fa fa-picture-o mr-1"></i>Photos</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">84K</h5><small class="text-muted"> <i class="fa fa-user-circle-o mr-1"></i>Followers</small>
                    </li>
                </ul>
            </div>

            <div class="py-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-0">Recent photos</h5><a href="#" class="btn btn-link text-muted">Show all</a>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-2 pr-lg-1"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294928/nicole-honeywill-546848-unsplash_ymprvp.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 mb-2 pl-lg-1"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294927/dose-juice-1184444-unsplash_bmbutn.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 pr-lg-1 mb-2"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294926/cody-davis-253925-unsplash_hsetv7.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 pl-lg-1"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294928/tim-foster-734470-unsplash_xqde00.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                </div>
                <div class="py-4">
                    <h5 class="mb-3">Recent posts</h5>
                    <div class="p-4 bg-light rounded shadow-sm">
                        <p class="font-italic mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <ul class="list-inline small text-muted mt-3 mb-0">
                            <li class="list-inline-item"><i class="fa fa-comment-o mr-2"></i>12 Comments</li>
                            <li class="list-inline-item"><i class="fa fa-heart-o mr-2"></i>200 Likes</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- End profile widget -->

    </div>
</div>


<hr />


<!-- Demo header-->
<section class="py-5 header text-center text-dark">
    <div class="container py-4">
        <header>
            <h1 class="display-4">Bootstrap toggle switch</h1>
            <p class="font-italic mb-1">Create bootstrap toggle switches using Bootstrap custom form components.</p>
            <p class="font-italic">Snippet by
                <a class="text-white" href="https://bootstrapious.com/">
                    <u>Bootstrapious</u>
                </a>
            </p>
        </header>
    </div>
</section>


<section class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Default switches with radio inputs-->
                <p class="font-italic text-muted">Standard checkbox switches - with bootstrap theme colors.</p>
                <div class="row mb-5">
                    <div class="col-lg-4">
                        <div class="card rounded-0 border-0 shadow mb-4">
                            <div class="card-body p-4 text-center">
                                <!-- Custom switch -->
                                <p class="custom-control custom-switch">
                                    <input class="custom-control-input" id="customSwitch1" type="checkbox" checked>
                                    <label class="custom-control-label font-italic" for="customSwitch1">Feature one</label>
                                </p>

                                <!-- Custom switch -->
                                <p class="custom-control custom-switch m-0">
                                    <input class="custom-control-input" id="customSwitch2" type="checkbox">
                                    <label class="custom-control-label font-italic" for="customSwitch2">Feature two</label>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card rounded-0 border-0 shadow mb-4">
                            <div class="card-body p-4 text-center">
                                <!-- Custom switch -->
                                <p class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="customSwitch3" type="checkbox">
                                    <label class="custom-control-label font-italic" for="customSwitch3">Feature one</label>
                                </p>

                                <!-- Custom switch -->
                                <p class="custom-control custom-switch m-0">
                                    <input class="custom-control-input custom-control-input-success" id="customSwitch4" type="checkbox" checked>
                                    <label class="custom-control-label font-italic" for="customSwitch4">Feature two</label>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card rounded-0 border-0 shadow mb-4">
                            <div class="card-body p-4 text-center">
                                <!-- Custom switch -->
                                <p class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-warning" id="customSwitch5" type="checkbox" checked>
                                    <label class="custom-control-label font-italic" for="customSwitch5">Feature one</label>
                                </p>

                                <!-- Custom switch -->
                                <p class="custom-control custom-switch m-0">
                                    <input class="custom-control-input custom-control-input-warning" id="customSwitch6" type="checkbox">
                                    <label class="custom-control-label font-italic" for="customSwitch6">Feature two</label>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
               
                
                
                 <!-- Default switches with radio inputs-->
                <p class="font-italic text-muted">Standard radio switches.</p>
                <div class="row mb-5">
                    <div class="col-lg-4">
                        <div class="card rounded-0 border-0 shadow mb-4">
                            <div class="card-body p-4 text-center">
                                <!-- Custom switch -->
                                <p class="custom-control custom-switch">
                                    <input class="custom-control-input" id="customSwitch13" type="radio", name="switchradio-1" checked>
                                    <label class="custom-control-label font-italic" for="customSwitch13">Feature one</label>
                                </p>

                                <!-- Custom switch -->
                                <p class="custom-control custom-switch m-0">
                                    <input class="custom-control-input" id="customSwitch14" type="radio", name="switchradio-1">
                                    <label class="custom-control-label font-italic" for="customSwitch14">Feature two</label>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card rounded-0 border-0 shadow mb-4">
                            <div class="card-body p-4 text-center">
                                <!-- Custom switch -->
                                <p class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="customSwitch15" type="radio", name="switchradio-2">
                                    <label class="custom-control-label font-italic" for="customSwitch15">Feature one</label>
                                </p>

                                <!-- Custom switch -->
                                <p class="custom-control custom-switch m-0">
                                    <input class="custom-control-input custom-control-input-success" id="customSwitch16" type="radio", name="switchradio-2" checked>
                                    <label class="custom-control-label font-italic" for="customSwitch16">Feature two</label>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card rounded-0 border-0 shadow mb-4">
                            <div class="card-body p-4 text-center">
                                <!-- Custom switch -->
                                <p class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-warning" id="customSwitch17" type="radio", name="switchradio-3" checked>
                                    <label class="custom-control-label font-italic" for="customSwitch17">Feature one</label>
                                </p>

                                <!-- Custom switch -->
                                <p class="custom-control custom-switch m-0">
                                    <input class="custom-control-input custom-control-input-warning" id="customSwitch18" type="radio", name="switchradio-3">
                                    <label class="custom-control-label font-italic" for="customSwitch18">Feature two</label>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<hr />

<!-- Demo header-->
<section class="py-5 text-center">
    <div class="container py-4 text-dark">
        <header>
            <h1 class="display-4">Bootstrap carousel quotes</h1>
            <p class="font-italic mb-1">Create an elegant quote carousel using default Bootstrap 4 carousel component.</p>
            <p class="font-italic">Snippet by
                <a class="text-white" href="https://bootstrapious.com/">
                    <u>Bootstrapious</u>
                </a>
            </p>
        </header>
    </div>
</section>


<section class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 mx-auto">
                <div class="p-5 bg-white shadow rounded">
                    <!-- Bootstrap carousel-->
                    <div class="carousel slide" id="carouselExampleIndicators" data-ride="carousel">
                        <!-- Bootstrap carousel indicators [nav] -->
                        <ol class="carousel-indicators mb-0">
                            <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>


                        <!-- Bootstrap inner [slides]-->
                        <div class="carousel-inner px-5 pb-4">
                            <!-- Carousel slide-->
                            <div class="carousel-item active">
                                <div class="media"><img class="rounded-circle img-thumbnail" src="https://res.cloudinary.com/mhmd/image/upload/v1579676165/avatar-1_ffutqr.jpg" alt="" width="75">
                                    <div class="media-body ml-3">
                                        <blockquote class="blockquote border-0 p-0">
                                            <p class="font-italic lead"> <i class="fa fa-quote-left mr-3 text-success"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <footer class="blockquote-footer">Someone famous in
                                                <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Carousel slide-->
                            <div class="carousel-item">
                                <div class="media"><img class="rounded-circle img-thumbnail" src="https://res.cloudinary.com/mhmd/image/upload/v1579676165/avatar-3_hdxocq.jpg" alt="" width="75">
                                    <div class="media-body ml-3">
                                        <blockquote class="blockquote border-0 p-0">
                                            <p class="font-italic lead"> <i class="fa fa-quote-left mr-3 text-success"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <footer class="blockquote-footer">Someone famous in
                                                <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Carousel slide-->
                            <div class="carousel-item">
                                <div class="media"><img class="rounded-circle img-thumbnail" src="https://res.cloudinary.com/mhmd/image/upload/v1579676165/avatar-2_gibm2s.jpg" alt="" width="75">
                                    <div class="media-body ml-3">
                                        <blockquote class="blockquote border-0 p-0">
                                            <p class="font-italic lead"> <i class="fa fa-quote-left mr-3 text-success"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <footer class="blockquote-footer">Someone famous in
                                                <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Bootstrap controls [dots]-->
                        <a class="carousel-control-prev width-auto" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <i class="fa fa-angle-left text-dark text-lg"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next width-auto" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <i class="fa fa-angle-right text-dark text-lg"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<hr />

<nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
  <div class="container"><a href="#" class="navbar-brand d-flex align-items-center"> <i class="fa fa-snowflake-o fa-lg text-primary mr-2"></i><strong>Snowflake</strong></a>
    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
    <div id="navbarSupportedContent" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="#" class="nav-link font-italic"> Home </a></li>
        <li class="nav-item active"><a href="#" class="nav-link font-italic"> About </a></li>
        <li class="nav-item active"><a href="#" class="nav-link font-italic"> Services </a></li>
        <li class="nav-item active"><a href="#" class="nav-link font-italic"> Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="bg-light">
  <div class="container py-5">
    <div class="row h-100 align-items-center py-5">
      <div class="col-lg-6">
        <h1 class="display-4">About us page</h1>
        <p class="lead text-muted mb-0">Create a minimal about us page using Bootstrap 4.</p>
        <p class="lead text-muted">Snippet by <a href="https://bootstrapious.com/snippets" class="text-muted"> 
                    <u>Bootstrapious</u></a>
        </p>
      </div>
      <div class="col-lg-6 d-none d-lg-block"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/illus_kftyh4.png" alt="" class="img-fluid"></div>
    </div>
  </div>
</div>

<div class="bg-white py-5">
  <div class="container py-5">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Lorem ipsum dolor sit amet</h2>
        <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
      </div>
      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834139/img-1_e25nvh.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-5 px-5 mx-auto"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/img-2_vdgqgn.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
      <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Lorem ipsum dolor sit amet</h2>
        <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
      </div>
    </div>
  </div>
</div>




<footer class="bg-light pb-5">
  <div class="container text-center">
    <p class="font-italic text-muted mb-0">&copy; Copyrights Company.com All rights reserved.</p>
  </div>
</footer>




<hr />

<div class="container">

    <!-- For demo purpose -->
    <div class="row py-5">
        <div class="col-lg-9 mx-auto text-dark text-center">
            <h1 class="display-4">Bootstrap 4 accordion</h1>
            <p class="lead mb-0">Using Bootstrap 4 card component, build a vertical accrodion with up & down chevrons.</p>
            <p class="lead">Snippet by <a href="https://bootstrapious.com/snippets" class="text-white">
                <u>Bootstrapious</u></a>
            </p>
        </div>
    </div><!-- End -->


    <div class="row">
        <div class="col-lg-9 mx-auto">
            <!-- Accordion -->
            <div id="accordionExample" class="accordion shadow">

                <!-- Accordion item 1 -->
                <div class="card">
                    <div id="headingOne" class="card-header bg-white shadow-sm border-0">
                        <h2 class="mb-0">
                            <button type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="btn btn-link text-dark font-weight-bold text-uppercase collapsible-link">Collapsible Group Item #1</button> 
                        </h2>
                    </div>
                    <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse show">
                        <div class="card-body p-5">
                            <p class="font-weight-light m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                        </div>
                    </div>
                </div><!-- End -->

                <!-- Accordion item 2 -->
                <div class="card">
                    <div id="headingTwo" class="card-header bg-white shadow-sm border-0">
                        <h2 class="mb-0">
                            <button type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="btn btn-link collapsed text-dark font-weight-bold text-uppercase collapsible-link">Collapsible Group Item #2</button>
                        </h2>
                    </div>
                    <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse">
                        <div class="card-body p-5">
                            <p class="font-weight-light m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                        </div>
                    </div>
                </div><!-- End -->

                <!-- Accordion item 3 -->
                <div class="card">
                    <div id="headingThree" class="card-header bg-white shadow-sm border-0">
                        <h2 class="mb-0">
                            <button type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="btn btn-link collapsed text-dark font-weight-bold text-uppercase collapsible-link">Collapsible Group Item #3</button>
                        </h2>
                    </div>
                    <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample" class="collapse">
                        <div class="card-body p-5">
                            <p class="font-weight-light m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                        </div>
                    </div>
                </div><!-- End -->

            </div><!-- End -->
        </div>
    </div>
</div>



<hr />

<!-- Grid row -->
<div class="row accordion-gradient-bcg d-flex justify-content-center">

  <!-- Grid column -->
  <div class="col-md-10 col-xl-6 py-5">

    <!--Accordion wrapper-->
    <div class="accordion md-accordion accordion-2" id="accordionEx7" role="tablist"
      aria-multiselectable="true">

      <!-- Accordion card -->
      <div class="card">

        <!-- Card header -->
        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading1">
          <a data-toggle="collapse" data-parent="#accordionEx7" href="#collapse1" aria-expanded="true"
            aria-controls="collapse1">
            <h5 class="mb-0 white-text text-uppercase font-thin">
              #1 First Step <i class="fas fa-angle-down rotate-icon"></i>
            </h5>
          </a>
        </div>

        <!-- Card body -->
        <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="heading1"
          data-parent="#accordionEx7">
          <div class="card-body mb-1 rgba-grey-light white-text">
            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
              3 wolf moon officia aute,
              non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
              3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
              shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
              sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
              farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
              accusamus labore sustainable.</p>
          </div>
        </div>
      </div>
      <!-- Accordion card -->

      <!-- Accordion card -->
      <div class="card">

        <!-- Card header -->
        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading2">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7" href="#collapse2"
            aria-expanded="false" aria-controls="collapse2">
            <h5 class="mb-0 white-text text-uppercase font-thin">
              #2 Second Step <i class="fas fa-angle-down rotate-icon"></i>
            </h5>
          </a>
        </div>

        <!-- Card body -->
        <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2"
          data-parent="#accordionEx7">
          <div class="card-body mb-1 rgba-grey-light white-text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
      <!-- Accordion card -->

      <!-- Accordion card -->
      <div class="card">

        <!-- Card header -->
        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading3">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7" href="#collapse3"
            aria-expanded="false" aria-controls="collapse3">
            <h5 class="mb-0 white-text text-uppercase font-thin">
              #3 Third Step <i class="fas fa-angle-down rotate-icon"></i>
            </h5>
          </a>
        </div>

        <!-- Card body -->
        <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3"
          data-parent="#accordionEx7">
          <div class="card-body mb-1 rgba-grey-light white-text">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
              laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
              beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
              odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
              Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
              quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
              voluptatem.</p>
          </div>
        </div>
      </div>
      <!-- Accordion card -->
    </div>
    <!--/.Accordion wrapper-->

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->



<hr />

<!-- Demo header-->
<section class="py-5 header">
    <div class="container py-4">
        <header class="text-center mb-5 pb-5 text-dark">
            <h1 class="display-4">Bootstrap vertical tabs</h1>
            <p class="font-italic mb-1">Making advantage of Bootstrap 4 components, easily build an awesome tabbed interface.</p>
            <p class="font-italic">Snippet by
                <a class="text-white" href="https://bootstrapious.com/">
                    <u>Bootstrapious</u>
                </a>
            </p>
        </header>


        <div class="row">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Personal information</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <i class="fa fa-calendar mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Bookings</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <i class="fa fa-star mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Reviews</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <i class="fa fa-check mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Confirm booking</span></a>
                    </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h4 class="font-italic mb-4">Personal information</h4>
                        <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <h4 class="font-italic mb-4">Bookings</h4>
                        <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <h4 class="font-italic mb-4">Reviews</h4>
                        <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <h4 class="font-italic mb-4">Confirm booking</h4>
                        <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr />