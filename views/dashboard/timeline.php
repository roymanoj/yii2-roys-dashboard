
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Flip cards + card  + button + Flip Design +  ravi - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        
html {
  font-size: 62.5%; }

body {
  box-sizing: border-box; 
    background:#222;
}

.row {
  max-width: 114rem;
  margin: 0 auto; }
  .row::after {
    content: '';
    clear: both;
    display: table; }
  .row [class^="col-"] {
    float: left; }
    .row [class^="col-"]:not(:last-child) {
      margin-right: 6rem; }
  .row:not(:last-child) {
    margin-bottom: 6rem; }
  .row .col-1-of-2 {
    width: calc((100% - 6rem) / 2); }
  .row .col-1-of-3 {
    width: calc((100% - 2 * 6rem) / 3); }
  .row .col-1-of-4 {
    width: calc((100% - 3 * 6rem) / 4); }
  .row .col-2-of-4 {
    width: calc(2 * ((100% - 3 * 6rem) / 4) + 6rem); }
  .row .col-3-of-4 {
    width: calc(3 * ((100% - 3 * 6rem) / 4) + 2 * 6rem); }


.section-tours {
  background-color: #f7f7f7; }
  
.card {
  perspective: 150rem;
  -moz-perspective: 150rem;
  position: relative;
  height: 52rem; }
  .card__side {
    height: 52rem;
    transition: all .8s ease;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    backface-visibility: hidden;
    border-radius: 3px;
    overflow: hidden;
    box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15); }
    .card__side--front {
      background-color: #fff; }
    .card__side--back {
      transform: rotateY(180deg); }
      .card__side--back-1 {
        background-image: linear-gradient(to right bottom, #ffb900, #ff7730); }
      .card__side--back-2 {
        background-image: linear-gradient(to right bottom, #000428, #004e92); }
      .card__side--back-3 {
        background-image: linear-gradient(to right bottom, #2998ff, #5643fa); }
  .card:hover .card__side--front {
    transform: rotateY(-180deg); }
  .card:hover .card__side--back {
    transform: rotateY(0); }
  .card__picture {
    background-size: cover;
    height: 23rem;
    background-blend-mode: screen;
    clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%); }
    .card__picture--1 {
      background-image: linear-gradient(to right bottom, #ffb900, #ff7730), url(https://picsum.photos/300/250?random=5); }
    .card__picture--2 {
      background-image: linear-gradient(to right bottom, #000428, #004e92), url(https://picsum.photos/300/250?random=6); }
    .card__picture--3 {
      background-image: linear-gradient(to right bottom, #2998ff, #5643fa), url(https://picsum.photos/300/250?random=7); }
  .card__heading {
    font-size: 2.8rem;
    text-transform: uppercase;
    color: #fff;
    font-weight: 300;
    position: absolute;
    top: 12rem;
    right: 2rem;
    text-align: right;
    width: 74%; }
  .card__heading-span {
    padding: .5rem 1.5rem;
    -webkit-box-decoration-break: clone;
    box-decoration-break: clone; }
    .card__heading-span--1 {
      background-image: linear-gradient(to right bottom, rgba(255, 185, 0, 0.85), rgba(255, 119, 48, 0.85)); }
    .card__heading-span--2 {
      background-image: linear-gradient(to right bottom, rgba(0, 4, 40, 0.85), rgba(0, 78, 146, 0.85)); }
    .card__heading-span--3 {
      background-image: linear-gradient(to right bottom, rgba(41, 152, 255, 0.85), rgba(86, 67, 250, 0.85)); }
  .card__details {
    padding: 3rem; }
    .card__details ul {
      list-style: none;
      width: 80%;
      margin: 0 auto; }
      .card__details ul li {
        text-align: center;
        font-size: 1.5rem;
        padding: 1rem; }
        .card__details ul li:not(:last-child) {
          border-bottom: 1px solid #eee; }
  .card__cta {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%); }
  .card__price-box {
    color: #fff;
    text-align: center;
    margin-bottom: 8rem; }
  .card__price-only {
    font-size: 1.4rem;
    text-transform: uppercase; }
  .card__price-value {
    font-size: 6rem;
    font-weight: 100; }
    
    
.btn--animated {
  animation: fadeInUp .5s ease-out;
  animation-fill-mode: backwards; }

.btn:link, .btn:visited {
  text-transform: uppercase;
  padding: 1.5rem 4rem;
  display: inline-block;
  transition: all .2s;
  color: initial;
  position: relative;
  font-size: 1.6rem; }

.btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2); }

.btn:active {
  transform: translateY(-1px);
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2); }

.btn::after {
  content: '';
  display: inline-block;
  height: 100%;
  width: 100%;
  border-radius: 10rem;
  position: absolute;
  left: 0;
  top: 0;
  z-index: -1;
  transition: all .2s; }

.btn::after {
  background: #fff; }

.btn:hover::after {
  transform: scaleX(1.4) scaleY(1.6);
  opacity: 0; }

.btn--white {
  background-color: #fff;
  border-radius: 10rem; }

.btn--blue {
  background-color: #004e92;
  border-radius: 10rem;
  color: #fff !important; }

.text-center {
  text-align: center; }


  
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<body>

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Poppins" rel="stylesheet">
<section class="section-tours">
            <div class=" text-center  u-margin-bottom-medium">
                <br>  <br>  <h2 class="heading-secondary">
                    Most Popular Tours
                </h2>
                <br>  <br>
            </div>
            <div class="row">
                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--1">
                                 
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--1">The Sea Explore</span>

                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>3 day tours</li>
                                    <li>Up to 30 people</li>
                                    <li>2 tour guides</li>
                                    <li>Sleep in cozy hotels</li>
                                    <li>Difficulty: easy</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-1">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Only</p>
                                    <p class="card__price-value">$295</p>
                                </div>
                                <a href="#0" class="btn btn--white">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--2">
                                 
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--2">The Sea Explore</span>

                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>3 day tours</li>
                                    <li>Up to 30 people</li>
                                    <li>2 tour guides</li>
                                    <li>Sleep in cozy hotels</li>
                                    <li>Difficulty: easy</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-2">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Only</p>
                                    <p class="card__price-value">$295</p>
                                </div>
                                <a href="#0" class="btn btn--white">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--3">
                                 
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--3">The Sea Explore</span>

                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>3 day tours</li>
                                    <li>Up to 30 people</li>
                                    <li>2 tour guides</li>
                                    <li>Sleep in cozy hotels</li>
                                    <li>Difficulty: easy</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-3">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Only</p>
                                    <p class="card__price-value">$295</p>
                                </div>
                                <a href="#0" class="btn btn--white">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="text-center u-margin-top-big">
                <a href="#0" class="btn btn--blue">Discover All Tour</a>
            </div>
        </section>
<script type="text/javascript">

</script>
</body>
</htm