
<?php 

use yii\helpers\Html;

$this->title = 'Admin\'s Dashboard';
$this->params['breadcrumbs'][] = $this->title;


use app\assets\RoysAsset;
RoysAsset::register($this);

?> 










<div class="demo">
            <div class="container">




            
                <h4 style="padding-top:10px">Pricing Table Style : Demo-1</h4>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable">
                            <svg x="0" y="0" viewBox="0 0 360 220">
                                <g>
                                    <path fill="#ae003d" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                        c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                        s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                        L0.732,193.75z"></path>
                                </g>
                                <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$10</text>
                                <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                                <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
                            </svg>
                            <div class="pricing-content">
                                <h3 class="title">Standard</h3>
                                <ul class="pricing-content">
                                    <li><b>50GB</b> Disk Space</li>
                                    <li><b>50</b> Email Accounts</li>
                                    <li><b>50GB</b> Bandwidth</li>
                                    <li><b>10</b> Subdomains</li>
                                    <li><b>15</b> Domains</li>
                                </ul>
                                <a href="#" class="pricingTable-signup">Subscribe Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable blue">
                            <svg x="0" y="0" viewBox="0 0 360 220">
                                <g>
                                    <path fill="#005c99" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                        c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                        s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                        L0.732,193.75z"></path>
                                </g>
                                <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$20</text>
                                <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                                <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
                            </svg>
                            <div class="pricing-content">
                                <h3 class="title">Business</h3>
                                <ul class="pricing-content">
                                    <li><b>60GB</b> Disk Space</li>
                                    <li><b>60</b> Email Accounts</li>
                                    <li><b>60GB</b> Bandwidth</li>
                                    <li><b>15</b> Subdomains</li>
                                    <li><b>20</b> Domains</li>
                                </ul>
                                <a href="#" class="pricingTable-signup">Subscribe Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                    <div class="pricingTable red">
                        <svg x="0" y="0" viewBox="0 0 360 220">
                            <g>
                                <path fill="#db2c29" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                    c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                    s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                    L0.732,193.75z"></path>
                            </g>
                            <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$30</text>
                            <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                            <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
                        </svg>
                        <div class="pricing-content">
                            <h3 class="title">Premium</h3>
                            <ul class="pricing-content">
                                <li><b>70GB</b> Disk Space</li>
                                <li><b>70</b> Email Accounts</li>
                                <li><b>70GB</b> Bandwidth</li>
                                <li><b>20</b> Subdomains</li>
                                <li><b>25</b> Domains</li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Subscribe Now</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <hr>
        
        <div class="demo2">
            <div class="container">
                <h4 style="padding-top:10px">Pricing Table Style : Demo-2</h4>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable2">
                            <div class="pricingTable-header">
                                <h3 class="title">Standard</h3>
                                <div class="price-value">$10.99 per month</div>
                            </div>
                            <ul class="pricing-content">
                                <li><i class="fa fa-check"></i> 50GB Disk Space</li>
                                <li><i class="fa fa-times"></i> 50 Email Accounts</li>
                                <li><i class="fa fa-check"></i> 50GB Bandwidth</li>
                                <li><i class="fa fa-times"></i> 10 Subdomains</li>
                                <li><i class="fa fa-check"></i> 15 Domains</li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Subscribe Now</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable2 blue">
                            <div class="pricingTable-header">
                                <h3 class="title">Business</h3>
                                <div class="price-value">$20.99 per month</div>
                            </div>
                            <ul class="pricing-content">
                                <li><i class="fa fa-check"></i> 60GB Disk Space</li>
                                <li><i class="fa fa-check"></i> 60 Email Accounts</li>
                                <li><i class="fa fa-check"></i> 60GB Bandwidth</li>
                                <li><i class="fa fa-times"></i> 15 Subdomains</li>
                                <li><i class="fa fa-check"></i> 20 Domains</li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Subscribe Now</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable2 pink">
                            <div class="pricingTable-header">
                                <h3 class="title">Premium</h3>
                                <div class="price-value">$30.99 per month</div>
                            </div>
                            <ul class="pricing-content">
                                <li><i class="fa fa-check"></i> 70GB Disk Space</li>
                                <li><i class="fa fa-check"></i> 70 Email Accounts</li>
                                <li><i class="fa fa-check"></i> 70GB Bandwidth</li>
                                <li><i class="fa fa-check"></i> 20 Subdomains</li>
                                <li><i class="fa fa-check"></i> 25 Domains</li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Subscribe Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        
        <div class="demo3">
            <div class="container">
                <h4 style="padding-top:10px">Pricing Table Style : Demo-3</h4>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable3">
                            <h3 class="title">STANDARD</h3>
                            <div class="price-value">
                                <span class="currency">$</span>
                                <span class="amount">10.00</span>
                                <span class="month">/month</span>
                            </div>
                            <ul class="pricing-content">
                                <li><b>50GB</b> Disk Space</li>
                                <li><b>50</b> Email Accounts</li>
                                <li><b>50GB</b> Bandwidth</li>
                                <li><b>10</b> Subdomains</li>
                                <li><b>15</b> Domains</li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Order Now</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable3 pink">
                            <h3 class="title">BUSINESS</h3>
                            <div class="price-value">
                                <span class="currency">$</span>
                                <span class="amount">20.00</span>
                                <span class="month">/month</span>
                            </div>
                            <ul class="pricing-content">
                                <li><b>60GB</b> Disk Space</li>
                                <li><b>60</b> Email Accounts</li>
                                <li><b>60GB</b> Bandwidth</li>
                                <li><b>15</b> Subdomains</li>
                                <li><b>20</b> Domains</li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Order Now</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable3 blue">
                            <h3 class="title">PREMIUM</h3>
                            <div class="price-value">
                                <span class="currency">$</span>
                                <span class="amount">30.00</span>
                                <span class="month">/month</span>
                            </div>
                            <ul class="pricing-content">
                                <li><b>70GB</b> Disk Space</li>
                                <li><b>70</b> Email Accounts</li>
                                <li><b>70GB</b> Bandwidth</li>
                                <li><b>20</b> Subdomains</li>
                                <li><b>25</b> Domains</li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        
        <div class="demo4">
            <div class="container">
                <h4 style="padding-top:10px">Pricing Table Style : Demo-4</h4>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable4">
                            <div class="pricingTable-header">
                                <svg x="0px" y="0px" width="350px" height="230px" viewBox="0 5 350 200">
                                    <g>
                                        <path fill="#D7182A" d="M58.377,62.185c11.838-16.874,24.94-20.129,43.466-18.93C102.476,24.326,166.999,15.932,175.042,0
                        c13.916,18.501,71.028,22.526,72.926,43.769c18.436-3.169,39.31,6.852,42.563,17.131c76.091-0.171,82.236,75.631,0.633,78.715
                        c-9.939,13.106-23.496,19.87-43.287,17.988C244.805,176.36,190.766,183.04,174.59,200c-13.285-17.216-71.12-23.04-71.934-42.482
                        c-18.795,2.228-33.888-4.284-44.732-18.502C-31.088,134.903-6.688,54.989,58.377,62.185L58.377,62.185z"></path>
                                        <path fill="none" stroke="#FFFFFF" stroke-width="0" stroke-linecap="square" stroke-miterlimit="10" d="M58.377,62.185
                        c11.838-16.874,24.94-20.129,43.466-18.93C102.476,24.326,166.999,15.932,175.042,0c13.916,18.501,71.028,22.526,72.926,43.769
                        c18.436-3.169,39.31,6.852,42.563,17.131c76.091-0.171,82.236,75.631,0.633,78.715c-9.939,13.106-23.496,19.87-43.287,17.988
                        C244.805,176.36,190.766,183.04,174.59,200c-13.285-17.216-71.12-23.04-71.934-42.482c-18.795,2.228-33.888-4.284-44.732-18.502
                        C-31.088,134.903-6.688,54.989,58.377,62.185L58.377,62.185z"></path>
                                        <path fill="none" stroke="#FFFFFF" stroke-width="3.54" d="M112.326,54.133c-4.519-21.67,51.78-25.096,63.167-39.401
                    c12.741,16.617,67.686,18.501,61.993,39.829c18.615-4.54,45.183,6.509,46.81,17.216c68.048,0.771,75.367,54.562,0.542,57.303
                    c-5.873,13.104-26.024,20.128-46.9,17.217c1.898,22.182-47.263,25.096-63.076,39.144c-12.201-13.963-66.782-18.074-63.529-39.403
                    c-17.44,2.914-37.322,0.26-46.268-17.728c-78.982-0.173-61.27-62.014,1.716-55.761C70.305,53.019,100.036,52.676,112.326,54.133
                    L112.326,54.133z"></path>
                                    </g>
                                </svg>
                                <h3 class="title">Standard</h3>
                                <div class="price-value">
                                    <span class="amount">$10.00</span>
                                    <span class="month">per month</span>
                                </div>
                            </div>
                            <ul class="pricing-content">
                                <li><b>50GB</b> Disk Space</li>
                                <li><b>50</b> Email Accounts</li>
                                <li><b>50GB</b> Bandwidth</li>
                                <li><b>10</b> Subdomains</li>
                                <li><b>15</b> Domains</li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Sign Up</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable4 darkblue">
                            <div class="pricingTable-header">
                                <svg x="0px" y="0px" width="350px" height="230px" viewBox="0 5 350 200">
                                    <g>
                                        <path fill="#D7182A" d="M58.377,62.185c11.838-16.874,24.94-20.129,43.466-18.93C102.476,24.326,166.999,15.932,175.042,0
                        c13.916,18.501,71.028,22.526,72.926,43.769c18.436-3.169,39.31,6.852,42.563,17.131c76.091-0.171,82.236,75.631,0.633,78.715
                        c-9.939,13.106-23.496,19.87-43.287,17.988C244.805,176.36,190.766,183.04,174.59,200c-13.285-17.216-71.12-23.04-71.934-42.482
                        c-18.795,2.228-33.888-4.284-44.732-18.502C-31.088,134.903-6.688,54.989,58.377,62.185L58.377,62.185z"></path>
                                        <path fill="none" stroke="#FFFFFF" stroke-width="0" stroke-linecap="square" stroke-miterlimit="10" d="M58.377,62.185
                        c11.838-16.874,24.94-20.129,43.466-18.93C102.476,24.326,166.999,15.932,175.042,0c13.916,18.501,71.028,22.526,72.926,43.769
                        c18.436-3.169,39.31,6.852,42.563,17.131c76.091-0.171,82.236,75.631,0.633,78.715c-9.939,13.106-23.496,19.87-43.287,17.988
                        C244.805,176.36,190.766,183.04,174.59,200c-13.285-17.216-71.12-23.04-71.934-42.482c-18.795,2.228-33.888-4.284-44.732-18.502
                        C-31.088,134.903-6.688,54.989,58.377,62.185L58.377,62.185z"></path>
                                        <path fill="none" stroke="#FFFFFF" stroke-width="3.54" d="M112.326,54.133c-4.519-21.67,51.78-25.096,63.167-39.401
                    c12.741,16.617,67.686,18.501,61.993,39.829c18.615-4.54,45.183,6.509,46.81,17.216c68.048,0.771,75.367,54.562,0.542,57.303
                    c-5.873,13.104-26.024,20.128-46.9,17.217c1.898,22.182-47.263,25.096-63.076,39.144c-12.201-13.963-66.782-18.074-63.529-39.403
                    c-17.44,2.914-37.322,0.26-46.268-17.728c-78.982-0.173-61.27-62.014,1.716-55.761C70.305,53.019,100.036,52.676,112.326,54.133
                    L112.326,54.133z"></path>
                                    </g>
                                </svg>
                                <h3 class="title">Business</h3>
                                <div class="price-value">
                                    <span class="amount">$20.00</span>
                                    <span class="month">per month</span>
                                </div>
                            </div>
                            <ul class="pricing-content">
                                <li><b>60GB</b> Disk Space</li>
                                <li><b>60</b> Email Accounts</li>
                                <li><b>60GB</b> Bandwidth</li>
                                <li><b>15</b> Subdomains</li>
                                <li><b>20</b> Domains</li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Sign Up</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable4 blue">
                            <div class="pricingTable-header">
                                <svg x="0px" y="0px" width="350px" height="230px" viewBox="0 5 350 200">
                                    <g>
                                        <path fill="#D7182A" d="M58.377,62.185c11.838-16.874,24.94-20.129,43.466-18.93C102.476,24.326,166.999,15.932,175.042,0
                                            c13.916,18.501,71.028,22.526,72.926,43.769c18.436-3.169,39.31,6.852,42.563,17.131c76.091-0.171,82.236,75.631,0.633,78.715
                                            c-9.939,13.106-23.496,19.87-43.287,17.988C244.805,176.36,190.766,183.04,174.59,200c-13.285-17.216-71.12-23.04-71.934-42.482
                                            c-18.795,2.228-33.888-4.284-44.732-18.502C-31.088,134.903-6.688,54.989,58.377,62.185L58.377,62.185z"></path>
                                        <path fill="none" stroke="#FFFFFF" stroke-width="0" stroke-linecap="square" stroke-miterlimit="10" d="M58.377,62.185
                                            c11.838-16.874,24.94-20.129,43.466-18.93C102.476,24.326,166.999,15.932,175.042,0c13.916,18.501,71.028,22.526,72.926,43.769
                                            c18.436-3.169,39.31,6.852,42.563,17.131c76.091-0.171,82.236,75.631,0.633,78.715c-9.939,13.106-23.496,19.87-43.287,17.988
                                            C244.805,176.36,190.766,183.04,174.59,200c-13.285-17.216-71.12-23.04-71.934-42.482c-18.795,2.228-33.888-4.284-44.732-18.502
                                            C-31.088,134.903-6.688,54.989,58.377,62.185L58.377,62.185z"></path>
                                        <path fill="none" stroke="#FFFFFF" stroke-width="3.54" d="M112.326,54.133c-4.519-21.67,51.78-25.096,63.167-39.401
                                        c12.741,16.617,67.686,18.501,61.993,39.829c18.615-4.54,45.183,6.509,46.81,17.216c68.048,0.771,75.367,54.562,0.542,57.303
                                        c-5.873,13.104-26.024,20.128-46.9,17.217c1.898,22.182-47.263,25.096-63.076,39.144c-12.201-13.963-66.782-18.074-63.529-39.403
                                        c-17.44,2.914-37.322,0.26-46.268-17.728c-78.982-0.173-61.27-62.014,1.716-55.761C70.305,53.019,100.036,52.676,112.326,54.133
                                        L112.326,54.133z"></path>
                                    </g>
                                </svg>
                                <h3 class="title">Premium</h3>
                                <div class="price-value">
                                    <span class="amount">$30.00</span>
                                    <span class="month">per month</span>
                                </div>
                            </div>
                            <ul class="pricing-content">
                                <li><b>70GB</b> Disk Space</li>
                                <li><b>70</b> Email Accounts</li>
                                <li><b>70GB</b> Bandwidth</li>
                                <li><b>20</b> Subdomains</li>
                                <li><b>25</b> Domains</li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        
        <div class="demo4">
            <div class="container">
                <h4 style="padding-top:10px">Pricing Table Style : Demo-5</h4>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable5">
                            <div class="pricingTable-header">
                                <h3 class="title">Standard</h3>
                                <span class="sub-title">Lorem ipsum</span>
                                <span class="year">Pay only <br>$110/year</span>
                            </div>
                            <div class="price-value">
                                <div class="value">
                                    <span class="currency">$</span>
                                    <span class="amount">10.<span>99</span></span>
                                    <span class="month">/month</span>
                                </div>
                            </div>
                            <ul class="pricing-content">
                                <li>50GB Disk Space</li>
                                <li>50 Email Accounts</li>
                                <li>50GB Monthly Bandwidth</li>
                                <li class="disable">10 Subdomains</li>
                                <li class="disable">15 Domains</li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Sign up</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable5 purple">
                            <div class="pricingTable-header">
                                <h3 class="title">Business</h3>
                                <span class="sub-title">Lorem ipsum</span>
                                <span class="year">Pay only <br>$220/year</span>
                            </div>
                            <div class="price-value">
                                <div class="value">
                                    <span class="currency">$</span>
                                    <span class="amount">20.<span>99</span></span>
                                    <span class="month">/month</span>
                                </div>
                            </div>
                            <ul class="pricing-content">
                                <li>60GB Disk Space</li>
                                <li>60 Email Accounts</li>
                                <li>60GB Monthly Bandwidth</li>
                                <li>15 Subdomains</li>
                                <li class="disable">20 Domains</li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Sign up</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                            <div class="pricingTable5 blue">
                                <div class="pricingTable-header">
                                    <h3 class="title">Premium</h3>
                                    <span class="sub-title">Lorem ipsum</span>
                                    <span class="year">Pay only <br>$330/year</span>
                                </div>
                                <div class="price-value">
                                    <div class="value">
                                        <span class="currency">$</span>
                                        <span class="amount">30.<span>99</span></span>
                                        <span class="month">/month</span>
                                    </div>
                                </div>
                                <ul class="pricing-content">
                                    <li>70GB Disk Space</li>
                                    <li>70 Email Accounts</li>
                                    <li>70GB Monthly Bandwidth</li>
                                    <li>20 Subdomains</li>
                                    <li>25 Domains</li>
                                </ul>
                                <a href="#" class="pricingTable-signup">Sign up</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <hr>
        
        <div class="demo6">
            <div class="container">
                <h4 style="padding-top:10px">Pricing Table Style : Demo-6</h4>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable6">
                            <h3 class="title">Standard</h3>
                            <div class="price-value">$10.00
                                <span class="month">/month</span>
                            </div>
                            <ul class="pricing-content">
                                <li>50GB Disk Space</li>
                                <li>50 Email Accounts</li>
                                <li>50GB Monthly Bandwidth</li>
                                <li class="disable"><i class="fa fa-times"></i></li>
                                <li class="disable"><i class="fa fa-times"></i></li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Sign up</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable6 blue">
                            <h3 class="title">Business</h3>
                            <div class="price-value">$20.00
                                <span class="month">/month</span>
                            </div>
                            <ul class="pricing-content">
                                <li>60GB Disk Space</li>
                                <li>60 Email Accounts</li>
                                <li>60GB Monthly Bandwidth</li>
                                <li>15 Subdomains</li>
                                <li class="disable"><i class="fa fa-times"></i></li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Sign up</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable6 green">
                            <h3 class="title">Premium</h3>
                            <div class="price-value">$30.00
                                <span class="month">/month</span>
                            </div>
                            <ul class="pricing-content">
                                <li>70GB Disk Space</li>
                                <li>70 Email Accounts</li>
                                <li>70GB Monthly Bandwidth</li>
                                <li>20 Subdomains</li>
                                <li>25 Domains</li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        
        <div class="demo7">
            <div class="container">
                <h4 style="padding-top:10px">Pricing Table Style : Demo-7</h4>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable7">
                            <div class="pricingTable-header">
                                <h3 class="title">Standard</h3>
                                <span class="price-value">
                                    $10<span class="month">/ month</span>
                                </span>
                            </div>
                            <ul class="pricing-content">
                                <li>50GB Disk Space</li>
                                <li>50 Email Accounts</li>
                                <li>50GB Monthly Bandwidth</li>
                                <li>10 Subdomains</li>
                                <li>15 Domains</li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Sign Up</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable7 orange">
                            <div class="pricingTable-header">
                                <h3 class="title">Business</h3>
                                <span class="price-value">
                                    $20<span class="month">/ month</span>
                                </span>
                            </div>
                            <ul class="pricing-content">
                                <li>60GB Disk Space</li>
                                <li>60 Email Accounts</li>
                                <li>60GB Monthly Bandwidth</li>
                                <li>15 Subdomains</li>
                                <li>20 Domains</li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Sign Up</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable7 pink">
                            <div class="pricingTable-header">
                                <h3 class="title">Premium</h3>
                                <span class="price-value">
                                    $30<span class="month">/ month</span>
                                </span>
                            </div>
                            <ul class="pricing-content">
                                <li>70GB Disk Space</li>
                                <li>70 Email Accounts</li>
                                <li>70GB Monthly Bandwidth</li>
                                <li>20 Subdomains</li>
                                <li>25 Domains</li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        
        <div class="demo8">
            <div class="container">
                <h4 style="padding-top:10px">Pricing Table Style : Demo-8</h4>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable8">
                            <h3 class="title"><span>Standard</span></h3>
                            <ul class="pricing-content">
                                <li><i class="fa fa-check"></i> 50 GB Disk Space</li>
                                <li><i class="fa fa-check"></i> 50 Email Accounts</li>
                                <li><i class="fa fa-check"></i> 50 GB Monthly Bandwidth</li>
                                <li><i class="fa fa-check"></i> 10 Subdomains</li>
                                <li><i class="fa fa-check"></i> 15 Domains</li>
                            </ul>
                            <div class="price-value">
                                <a href="#" class="pricingTable-signup">Sign Up</a>
                                <span class="amount">
                                    $10<span>/mo</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable8 green">
                            <h3 class="title"><span>Business</span></h3>
                            <ul class="pricing-content">
                                <li><i class="fa fa-check"></i> 60 GB Disk Space</li>
                                <li><i class="fa fa-check"></i> 60 Email Accounts</li>
                                <li><i class="fa fa-check"></i> 60 GB Monthly Bandwidth</li>
                                <li><i class="fa fa-check"></i> 15 Subdomains</li>
                                <li><i class="fa fa-check"></i> 20 Domains</li>
                            </ul>
                            <div class="price-value">
                                <a href="#" class="pricingTable-signup">Sign Up</a>
                                <span class="amount">
                                    $20<span>/mo</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable8 purple">
                            <h3 class="title"><span>Premium</span></h3>
                            <ul class="pricing-content">
                                <li><i class="fa fa-check"></i> 70 GB Disk Space</li>
                                <li><i class="fa fa-check"></i> 70 Email Accounts</li>
                                <li><i class="fa fa-check"></i> 70 GB Monthly Bandwidth</li>
                                <li><i class="fa fa-check"></i> 20 Subdomains</li>
                                <li><i class="fa fa-check"></i> 25 Domains</li>
                            </ul>
                            <div class="price-value">
                                <a href="#" class="pricingTable-signup">Sign Up</a>
                                <span class="amount">
                                    $30<span>/mo</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        
        <div class="demo9">
            <div class="container">
                <h4 style="padding-top:10px">Pricing Table Style : Demo-9</h4>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable9">
                            <div class="pricingTable-header">
                                <span class="price-value">10<span class="currency">$</span></span>
                                <h3 class="title">Standard</h3>
                            </div>
                            <ul class="pricing-content">
                                <li>50GB Disk Space</li>
                                <li>50 Email Accounts</li>
                                <li>50GB Monthly Bandwidth</li>
                                <li>10 Subdomains</li>
                                <li>15 Domains</li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Sign Up</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable9 green">
                            <div class="pricingTable-header">
                                <span class="price-value">20<span class="currency">$</span></span>
                                <h3 class="title">Business</h3>
                            </div>
                            <ul class="pricing-content">
                                <li>60GB Disk Space</li>
                                <li>60 Email Accounts</li>
                                <li>60GB Monthly Bandwidth</li>
                                <li>15 Subdomains</li>
                                <li>20 Domains</li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Sign Up</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable9 orange">
                            <div class="pricingTable-header">
                                <span class="price-value">30<span class="currency">$</span></span>
                                <h3 class="title">Premium</h3>
                            </div>
                            <ul class="pricing-content">
                                <li>70GB Disk Space</li>
                                <li>70 Email Accounts</li>
                                <li>70GB Monthly Bandwidth</li>
                                <li>20 Subdomains</li>
                                <li>25 Domains</li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Sign Up</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable9 purple">
                            <div class="pricingTable-header">
                                <span class="price-value">40<span class="currency">$</span></span>
                                <h3 class="title">Extra</h3>
                            </div>
                            <ul class="pricing-content">
                                <li>80GB Disk Space</li>
                                <li>80 Email Accounts</li>
                                <li>80GB Monthly Bandwidth</li>
                                <li>25 Subdomains</li>
                                <li>30 Domains</li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        
        <div class="demo10">
            <div class="container">
                <h4 style="padding-top:10px">Pricing Table Style : Demo-10</h4>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable10">
                            <div class="pricingTable-header">
                                <h3 class="heading">Standard</h3>
                                <span class="price-value">
                                    <span class="currency">$</span> 10
                                    <span class="month">/mo</span>
                                </span>
                            </div>
                            <div class="pricing-content">
                                <ul>
                                    <li>50GB Disk Space</li>
                                    <li>50 Email Accounts</li>
                                    <li>50GB Monthly Bandwidth</li>
                                    <li>10 Subdomains</li>
                                    <li>15 Domains</li>
                                </ul>
                                <a href="#" class="read">sign up</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable10">
                            <div class="pricingTable-header">
                                <h3 class="heading">Business</h3>
                                <span class="price-value">
                                    <span class="currency">$</span> 20
                                    <span class="month">/mo</span>
                                </span>
                            </div>
                            <div class="pricing-content">
                                <ul>
                                    <li>60GB Disk Space</li>
                                    <li>60 Email Accounts</li>
                                    <li>60GB Monthly Bandwidth</li>
                                    <li>15 Subdomains</li>
                                    <li>20 Domains</li>
                                </ul>
                                <a href="#" class="read">sign up</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable10">
                            <div class="pricingTable-header">
                                <h3 class="heading">Premium</h3>
                                <span class="price-value">
                                    <span class="currency">$</span> 30
                                    <span class="month">/mo</span>
                                </span>
                            </div>
                            <div class="pricing-content">
                                <ul>
                                    <li>70GB Disk Space</li>
                                    <li>70 Email Accounts</li>
                                    <li>70GB Monthly Bandwidth</li>
                                    <li>20 Subdomains</li>
                                    <li>25 Domains</li>
                                </ul>
                                <a href="#" class="read">sign up</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable10">
                            <div class="pricingTable-header">
                                <h3 class="heading">Extra</h3>
                                <span class="price-value">
                                    <span class="currency">$</span> 40
                                    <span class="month">/mo</span>
                                </span>
                            </div>
                            <div class="pricing-content">
                                <ul>
                                    <li>80GB Disk Space</li>
                                    <li>80 Email Accounts</li>
                                    <li>80GB Monthly Bandwidth</li>
                                    <li>25 Subdomains</li>
                                    <li>30 Domains</li>
                                </ul>
                                <a href="#" class="read">sign up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        
        <div class="demo11">
            <div class="container">
                <h4 style="padding-top:10px">Pricing Table Style : Demo-11</h4>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable11">
                            <div class="pricingTable-header">
                                <i class="fa fa-adjust"></i>
                                <div class="price-value"> $10.00 <span class="month">per month</span> </div>
                            </div>
                            <h3 class="heading">Standard</h3>
                            <div class="pricing-content">
                                <ul>
                                    <li><b>50GB</b> Disk Space</li>
                                    <li><b>50</b> Email Accounts</li>
                                    <li><b>50GB</b> Monthly Bandwidth</li>
                                    <li><b>10</b> subdomains</li>
                                    <li><b>15</b> Domains</li>
                                </ul>
                            </div>
                            <div class="pricingTable-signup">
                                <a href="#">sign up</a>
                            </div>
                        </div>
                    </div>
         
                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable11 green">
                            <div class="pricingTable-header">
                                <i class="fa fa-briefcase"></i>
                                <div class="price-value"> $20.00 <span class="month">per month</span> </div>
                            </div>
                            <h3 class="heading">Business</h3>
                            <div class="pricing-content">
                                <ul>
                                    <li><b>60GB</b> Disk Space</li>
                                    <li><b>60</b> Email Accounts</li>
                                    <li><b>60GB</b> Monthly Bandwidth</li>
                                    <li><b>15</b> subdomains</li>
                                    <li><b>20</b> Domains</li>
                                </ul>
                            </div>
                            <div class="pricingTable-signup">
                                <a href="#">sign up</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable11 blue">
                            <div class="pricingTable-header">
                                <i class="fa fa-diamond"></i>
                                <div class="price-value"> $30.00 <span class="month">per month</span> </div>
                            </div>
                            <h3 class="heading">Premium</h3>
                            <div class="pricing-content">
                                <ul>
                                    <li><b>70GB</b> Disk Space</li>
                                    <li><b>70</b> Email Accounts</li>
                                    <li><b>70GB</b> Monthly Bandwidth</li>
                                    <li><b>20</b> subdomains</li>
                                    <li><b>25</b> Domains</li>
                                </ul>
                            </div>
                            <div class="pricingTable-signup">
                                <a href="#">sign up</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable11 red">
                            <div class="pricingTable-header">
                                <i class="fa fa-cube"></i>
                                <div class="price-value"> $40.00 <span class="month">per month</span> </div>
                            </div>
                            <h3 class="heading">Extra</h3>
                            <div class="pricing-content">
                                <ul>
                                    <li><b>80GB</b> Disk Space</li>
                                    <li><b>80</b> Email Accounts</li>
                                    <li><b>80GB</b> Monthly Bandwidth</li>
                                    <li><b>25</b> subdomains</li>
                                    <li><b>30</b> Domains</li>
                                </ul>
                            </div>
                            <div class="pricingTable-signup">
                                <a href="#">sign up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>