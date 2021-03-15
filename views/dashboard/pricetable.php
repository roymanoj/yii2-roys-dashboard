
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Pricing Table - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .demo,h4{padding:30px 0}
.pricingTable,h4{text-align:center}
body{padding:0;margin:0}
.demo{background:#B2B2B2}
h4{color:#444}
.pricingTable{background:#fff;border-radius:10px;overflow:hidden;position:relative;transition:all .3s ease 0s}
.pricingTable:hover{box-shadow:0 0 5px rgba(0,0,0,.8) inset,0 0 10px rgba(0,0,0,.8)}
.pricingTable svg{display:block;margin-left:-1px}
.pricingTable .pricing-content{padding:50px 0 30px;position:relative}
.pricingTable .title{font-size:35px;font-weight:600;color:#ae003d;text-transform:uppercase;margin:0 0 10px}
.pricingTable .pricing-content ul{padding:0;margin:0 0 30px;list-style:none}
.pricingTable .pricing-content ul li{font-size:18px;color:rgba(0,0,0,.3);line-height:40px;text-transform:capitalize}
.pricingTable .pricingTable-signup{display:inline-block;padding:8px 50px;background:#ae003d;border-radius:20px;font-size:20px;font-weight:600;color:#fff;text-transform:uppercase;position:relative;transition:all .3s ease 0s}
.pricingTable:hover .pricingTable-signup{box-shadow:0 0 10px #ae003d}
.pricingTable .pricingTable-signup:hover{color:#ae003d;background:#fff;box-shadow:0 0 10px #ae003d,0 0 10px #000 inset}
.pricingTable.blue .title{color:#005c99}
.pricingTable.blue .pricingTable-signup{background:#005c99}
.pricingTable.blue:hover .pricingTable-signup{box-shadow:0 0 10px #005c99}
.pricingTable.blue .pricingTable-signup:hover{color:#005c99;background:#fff;box-shadow:0 0 10px #005c99,0 0 10px #000 inset}
.pricingTable.red .title{color:#db2c29}
.pricingTable.red .pricingTable-signup{background:#db2c29}
.pricingTable.red:hover .pricingTable-signup{box-shadow:0 0 10px #db2c29}
.pricingTable.red .pricingTable-signup:hover{color:#db2c29;background:#fff;box-shadow:0 0 10px #db2c29,0 0 10px #000 inset}
@media only screen and (max-width:990px){.pricingTable{margin-bottom:30px}
}

/******************* Pricing Table Demo - 2 *****************/
.demo2{background:#f2f2f2;padding:30px 0}
.pricingTable2{padding-bottom:30px;margin:0 15px;background:#fff;text-align:center;border-radius:15px;overflow:hidden}
.pricingTable2:hover{box-shadow:0 0 10px rgba(195,67,67,.3) inset,0 0 20px -5px rgba(0,0,0,.8)}
.pricingTable2 .pricingTable-header{padding:20px 15px 45px;background:#66ce04;-webkit-clip-path:polygon(50% 100%,100% 60%,100% 0,0 0,0 60%);clip-path:polygon(50% 100%,100% 60%,100% 0,0 0,0 60%);position:relative}
.pricingTable2 .pricingTable-header:before{content:"";width:400px;height:400px;border-radius:50%;position:absolute;right:-50%;top:-130%;background:repeating-radial-gradient(rgba(255,255,255,.05),rgba(255,255,255,.2) 20%);transition:all .5s ease 0s}
.pricingTable2:hover .pricingTable-header:before{right:50%}
.pricingTable2 .title{font-size:40px;color:#fff;margin:0}
.pricingTable2 .price-value{display:block;font-size:25px;color:#000;margin:0 0 20px;transition:all .3s ease 0s}
.pricingTable2 .pricing-content{padding:30px 25px 0;margin:0;list-style:none}
.pricingTable2 .pricing-content li{font-size:18px;color:#909090;line-height:40px;letter-spacing:1px;text-transform:capitalize;border-bottom:2px solid rgba(0,0,0,.15);margin-bottom:10px;position:relative}
.pricingTable2 .pricing-content li:last-child{border-bottom:none}
.pricingTable2 .pricing-content li i{color:#66ce04}
.pricingTable2 .pricingTable-signup{display:block;padding:18px 0;margin:0 25px;border-radius:10px;background:#66ce04;font-size:20px;color:#fff;letter-spacing:1px;text-transform:uppercase;overflow:hidden;position:relative;transition:all .3s ease 0s}
.pricingTable2 .pricingTable-signup:hover{letter-spacing:2px;box-shadow:0 0 10px rgba(0,0,0,.7),0 0 0 7px rgba(255,255,255,.5) inset}
.pricingTable2 .pricingTable-signup:before{content:"";width:230px;height:230px;border-radius:50%;background:repeating-radial-gradient(rgba(255,255,255,.05),rgba(255,255,255,.2) 20%);position:absolute;top:-180%;right:-40%;transition:all .8s ease 0s}
.pricingTable2 .pricingTable-signup:hover:before{right:40%}
.pricingTable2.blue .pricingTable-header,.pricingTable2.blue .pricingTable-signup{background:#15b8f3}
.pricingTable2.blue .pricing-content li i{color:#15b8f3}
.pricingTable2.pink .pricingTable-header,.pricingTable2.pink .pricingTable-signup{background:#f03c79}
.pricingTable2.pink .pricing-content li i{color:#f03c79}
@media only screen and (max-width:990px){.pricingTable2{margin-bottom:30px}
}
@media only screen and (max-width:479px){.pricingTable2{margin:0}
.pricingTable2 .pricing-content li{font-size:15px}
}

/******************* Pricing Table Demo - 3 *****************/
.demo3{background:#FAD2C8;padding:30px 0}
.pricingTable3{padding:25px 10px 70px;margin:0 15px;text-align:center;z-index:1;position:relative}
.pricingTable3:after,.pricingTable3:before{content:"";position:absolute;left:0}
.pricingTable3 .price-value .amount{display:inline-block;font-size:50px;font-weight:700}
.pricingTable3 .price-value .month{display:block;font-size:20px;font-weight:500;line-height:10px;text-transform:uppercase}
.pricingTable3:before{width:100%;height:100%;background:#fff;top:0;z-index:-1;-webkit-clip-path:polygon(100% 0,100% 85%,50% 100%,0 85%,0 0);clip-path:polygon(100% 0,100% 85%,50% 100%,0 85%,0 0)}
.pricingTable3:after{width:70px;height:30px;background:#1daa72;margin:0 auto;top:70px;right:0;-webkit-clip-path:polygon(50% 100%,0 0,100% 0);clip-path:polygon(50% 100%,0 0,100% 0)}
.pricingTable3 .title{padding:15px 0;margin:0 -25px 30px;background:#1daa72;font-size:25px;font-weight:600;color:#fff;text-transform:uppercase;position:relative}
.pricingTable3 .title:after,.pricingTable3 .title:before{border-top:15px solid #51836d;border-bottom:15px solid transparent;position:absolute;bottom:-30px;content:""}
.pricingTable3 .title:before{border-left:15px solid transparent;left:0}
.pricingTable3 .title:after{border-right:15px solid transparent;right:0}
.pricingTable3 .price-value{margin-bottom:25px;color:#1daa72}
.pricingTable3 .currency{display:inline-block;font-size:30px;vertical-align:top;margin-top:8px}
.price-value3 .amount{display:inline-block;font-size:50px;font-weight:700}
.price-value3 .month{display:block;font-size:20px;font-weight:500;line-height:10px;text-transform:uppercase}
.pricingTable3 .pricing-content{padding:0;margin:0 0 25px;list-style:none;border-top:1px solid #8f8f8f;border-bottom:1px solid #8f8f8f}
.pricingTable3 .pricing-content li{font-size:17px;color:#8f8f8f;line-height:55px}
.pricingTable3 .pricingTable-signup{display:inline-block;padding:10px 30px;background:#1daa72;font-size:18px;font-weight:600;color:#fff;overflow:hidden;position:relative;transition:all .7s ease 0s}
.pricingTable3 .pricingTable-signup:before{content:"";display:inline-block;width:100%;height:100%;background:linear-gradient(to bottom,rgba(255,255,255,0) 0,rgba(255,255,255,1) 50%,rgba(255,255,255,0) 100%);position:absolute;top:0;left:0;opacity:0;transform:translate(0,100%);transition:all .6s ease-in-out 0s}
.pricingTable3 .pricingTable-signup:hover:before{opacity:1;transform:translate(0,-100%)}
.pricingTable3.blue .pricingTable-signup,.pricingTable3.blue .title,.pricingTable3.blue:after{background:#49b0ca}
.pricingTable3.blue .title:after,.pricingTable3.blue .title:before{border-top:15px solid #407a88}
.pricingTable3.blue .price-value{color:#49b0ca}
.pricingTable3.pink .pricingTable-signup,.pricingTable3.pink .title,.pricingTable3.pink:after{background:#f06ace}
.pricingTable3.pink .price-value{color:#f06ace}
.pricingTable3.pink .title:after,.pricingTable3.pink .title:before{border-top:15px solid #773667}
@media only screen and (max-width:990px){.pricingTable3{margin-bottom:30px}
}

/******************* Pricing Table Demo - 4 *****************/
.pricingTable4 .pricingTable-signup:before,.pricingTable4:before{content:"";transition:all .3s ease 0s}
.demo4{background:#E6E6E8;padding:30px 0}
.pricingTable4{text-align:center;padding-bottom:12px;position:relative}
.pricingTable4:before{width:98%;height:85%;border-radius:40px;background:#fff;margin:0 auto;position:absolute;box-shadow:0 0 0 10px #fff inset,0 0 0 17px #d7182a inset;bottom:0;left:0;right:0}
.pricingTable4:hover:before{box-shadow:0 0 0 10px #fff inset,0 0 0 17px #D7182A inset,0 0 60px rgba(0,0,0,.5) inset}
.pricingTable4 .pricingTable-header{width:110%;position:relative;left:50%;transform:translateX(-50%)}
.pricingTable4 .pricingTable-header svg{width:94%}
.pricingTable4 .title{display:inline-block;padding:0 0 10px;margin:0 0 20px;font-size:30px;color:#d7182a;text-transform:uppercase;border-bottom:7px dotted rgba(0,0,0,.2);transition:all .3s ease 0s}
.pricingTable4:hover .title{padding:0 20px 10px}
.pricingTable4 .price-value{color:#fff;position:absolute;top:67px;left:50%;transform:translateX(-50%)}
.price-value .amount{display:block;font-size:50px;font-weight:600}
.price-value .month{display:block;font-size:16px;font-weight:500;line-height:0;text-transform:lowercase}
.pricingTable4 .pricing-content{padding:0;margin:0 0 20px;list-style:none;position:relative}
.pricingTable4 .pricing-content li{font-size:18px;color:#707070;line-height:40px}
.pricingTable4 .pricingTable-signup{display:inline-block;padding:10px 20px;background:#d7182a;font-size:22px;font-weight:600;color:#fff;letter-spacing:1px;text-transform:uppercase;border-radius:20px 20px 0 0;overflow:hidden;z-index:1;position:relative;transition:all .3s ease 0s}
.pricingTable4 .pricingTable-signup:hover{color:#d7182a}
.pricingTable4 .pricingTable-signup:before{width:90%;height:80%;background:#fff;border-radius:20px 20px 0 0;position:absolute;top:150%;left:50%;z-index:-1;opacity:0;transform:translate(-50%,-50%)}
.pricingTable4 .pricingTable-signup:hover:before{top:50%;opacity:1}
.pricingTable4.darkblue:before{box-shadow:0 0 0 10px #fff inset,0 0 0 17px #1a6bac inset}
.pricingTable4.darkblue:hover:before{box-shadow:0 0 0 10px #fff inset,0 0 0 17px #1a6bac inset,0 0 60px rgba(0,0,0,.5) inset}
.pricingTable4.darkblue .pricingTable-header svg path{fill:#1a6bac}
.pricingTable4.darkblue .pricingTable-signup{background:#1a6bac}
.pricingTable4.darkblue .pricingTable-header h3,.pricingTable4.darkblue .pricingTable-signup:hover{color:#1a6bac}
.pricingTable4.blue:before{box-shadow:0 0 0 10px #fff inset,0 0 0 17px #2998c5 inset}
.pricingTable4.blue:hover:before{box-shadow:0 0 0 10px #fff inset,0 0 0 17px #2998c5 inset,0 0 60px rgba(0,0,0,.5) inset}
.pricingTable4.blue .pricingTable-header svg path{fill:#2998c5}
.pricingTable4.blue .pricingTable-signup{background:#2998c5}
.pricingTable4.blue .pricingTable-header h3,.pricingTable4.blue .pricingTable-signup:hover{color:#2998c5}
@media only screen and (max-width:990px){.pricingTable4{margin-bottom:40px}
}
@media only screen and (max-width:767px){.pricingTable4 .pricingTable-header{width:102%}
}
@media only screen and (max-width:479px){.pricingTable4 .price-value{top:80px}
.price-value .amount{font-size:40px}
}

/******************* Pricing Table Demo - 5 *****************/
	.demo5{background:#DEDDDB;padding:30px 0}
:root{--pricingTable-yellow:#faac01;--pricingTable-purple:#be4f91;--pricingTable-blue:#0192af}
.pricingTable5{padding-bottom:10px;background:#fff;border-bottom:15px solid var(--pricingTable-yellow);text-align:center;overflow:hidden;position:relative}
.pricingTable5:before{content:"";width:100%;height:350px;background:var(--pricingTable-yellow);position:absolute;top:-150px;left:0;transform:skewY(-20deg)}
.pricingTable5 .price-value:after,.pricingTable5 .price-value:before,.pricingTable5 .value:after,.pricingTable5 .value:before,.pricingTable5 .year:after,.pricingTable5 .year:before{content:"";left:50%;transform:translateX(-50%) scaleY(.5) rotate(45deg)}
.pricingTable5 .pricingTable-header{padding:20px 20px 60px;text-align:left;position:relative}
.pricingTable5 .title{font-size:30px;font-weight:600;color:#fff;text-transform:uppercase;margin:0}
.pricingTable5 .sub-title{display:block;font-size:16px;color:#fff;text-transform:uppercase}
.pricingTable5 .value,.pricingTable5 .year{color:var(--pricingTable-yellow);background:#fff}
.pricingTable5 .year{width:80px;height:55px;padding:7px 0;font-size:15px;font-weight:600;font-style:italic;text-align:center;position:absolute;top:30px;right:20px;z-index:1}
.pricingTable5 .year:after,.pricingTable5 .year:before{width:57px;height:57px;background:#fff;position:absolute;top:-28px;z-index:-1}
.pricingTable5 .year:after{top:auto;bottom:-28px}
.pricingTable5 .price-value{display:inline-block;width:170px;height:110px;padding:15px;border:2px solid var(--pricingTable-yellow);border-top:none;border-bottom:none;position:relative}
.pricingTable5 .price-value:after,.pricingTable5 .price-value:before{width:121px;height:121px;border:3px solid var(--pricingTable-yellow);border-right:none;border-bottom:none;position:absolute;top:-60px}
.pricingTable5 .price-value:after{border-top:none;border-left:none;border-bottom:3px solid var(--pricingTable-yellow);border-right:3px solid var(--pricingTable-yellow);top:auto;bottom:-60px}
.pricingTable5 .value{width:100%;height:100%;border:2px solid var(--pricingTable-yellow);border-top:none;border-bottom:none;z-index:1;position:relative}
.pricingTable5 .value:after,.pricingTable5 .value:before{width:97px;height:97px;background:#fff;border:3px solid var(--pricingTable-yellow);border-bottom:none;border-right:none;position:absolute;top:-48px;z-index:-1}
.pricingTable5 .value:after{border-right:3px solid var(--pricingTable-yellow);border-bottom:3px solid var(--pricingTable-yellow);border-top:none;border-left:none;top:auto;bottom:-48px}
.pricingTable5 .currency{display:inline-block;font-size:30px;margin-top:7px;vertical-align:top}
.pricingTable5 .amount{display:inline-block;font-size:40px;font-weight:600;line-height:65px}
.pricingTable5 .amount span{display:inline-block;font-size:30px;font-weight:400;vertical-align:top;margin-top:-7px}
.pricingTable5 .month{display:block;font-size:16px;line-height:0}
.pricingTable5 .pricing-content{padding:50px 0 0 80px;margin-bottom:20px;list-style:none;text-align:left;transition:all .3s ease 0s}
.pricingTable5 .pricing-content li{padding:7px 0;font-size:16px;color:grey;position:relative}
.pricingTable5 .pricing-content li.disable:before,.pricingTable5 .pricing-content li:before{content:"\f00c";font-family:"Font Awesome 5 Free";font-weight:900;width:25px;height:25px;line-height:25px;border-radius:50%;background:#98c458;text-align:center;color:#fff;position:absolute;left:-50px}
.pricingTable5 .pricing-content li.disable:before{content:"\f00d";background:#fe6c6c}
.pricingTable5 .pricingTable-signup{display:inline-block;width:60%;height:50px;line-height:50px;font-size:22px;font-weight:700;color:var(--pricingTable-yellow);text-transform:uppercase;border:2px solid var(--pricingTable-yellow);margin:0 auto 10px;position:relative;transition:all .3s ease 0s}
.pricingTable5.purple .price-value:before,.pricingTable5.purple .value:before{border-left-color:var(--pricingTable-purple);border-top-color:var(--pricingTable-purple)}
.pricingTable5.purple .price-value,.pricingTable5.purple .price-value:after,.pricingTable5.purple .value,.pricingTable5.purple .value:after{border-right-color:var(--pricingTable-purple)}
.pricingTable5.purple,.pricingTable5.purple .price-value:after,.pricingTable5.purple .value:after{border-bottom-color:var(--pricingTable-purple)}
.pricingTable5 .pricingTable-signup:hover{background:var(--pricingTable-yellow);color:#fff}
.pricingTable5.purple .value,.pricingTable5.purple .year{color:var(--pricingTable-purple)}
.pricingTable5.purple:before{background:var(--pricingTable-purple)}
.pricingTable5.purple .price-value{border-left-color:var(--pricingTable-purple)}
.pricingTable5.purple .value{border-left-color:var(--pricingTable-purple)}
.pricingTable5.purple .pricingTable-signup{color:var(--pricingTable-purple);border-color:var(--pricingTable-purple)}
.pricingTable5.blue .price-value:before,.pricingTable5.blue .value:before{border-left-color:var(--pricingTable-blue);border-top-color:var(--pricingTable-blue)}
.pricingTable5.blue .price-value,.pricingTable5.blue .price-value:after,.pricingTable5.blue .value,.pricingTable5.blue .value:after{border-right-color:var(--pricingTable-blue)}
.pricingTable5.blue,.pricingTable5.blue .price-value:after,.pricingTable5.blue .value:after{border-bottom-color:var(--pricingTable-blue)}
.pricingTable5.purple .pricingTable-signup:hover{color:#fff;background:var(--pricingTable-purple)}
.pricingTable5.blue .value,.pricingTable5.blue .year{color:var(--pricingTable-blue)}
.pricingTable5.blue:before{background:var(--pricingTable-blue)}
.pricingTable5.blue .price-value{border-left-color:var(--pricingTable-blue)}
.pricingTable5.blue .value{border-left-color:var(--pricingTable-blue)}
.pricingTable5.blue .pricingTable-signup{color:var(--pricingTable-blue);border-color:var(--pricingTable-blue)}
.pricingTable5.blue .pricingTable-signup:hover{color:#fff;background:var(--pricingTable-blue)}
@media only screen and (max-width:990px){.pricingTable5{margin-bottom:30px}
}
@media only screen and (max-width:767px){.pricingTable5:before{transform:skewY(-15deg)}
.pricingTable5 .title{font-size:22px}
}

/******************* Pricing Table Demo - 6 *****************/
.demo6{background:#DEDDDB;padding:30px 0}
.pricingTable6{padding-bottom:20px;background:#fff;border-radius:10px;text-align:center;position:relative;transition:all .3s ease 0s}
.pricingTable6 .title{padding:40px 20px 170px;margin:0 0 30px;background:linear-gradient(to bottom right,#fa6fe6,#ffef65);font-size:30px;font-weight:600;color:#fff;text-transform:uppercase;overflow:hidden;position:relative}
.pricingTable6 .title:after,.pricingTable6 .title:before{content:"";width:280px;height:200px;border-radius:80px;background:#fff;position:absolute;bottom:-175px;left:-46px;transform:rotate(-85deg)}
.pricingTable6 .title:after{border-radius:100px;bottom:auto;top:150px;left:auto;right:-70px;transform:rotate(-40deg)}
.pricingTable6 .price-value{display:inline-block;width:140px;height:140px;line-height:65px;border-radius:50%;background:#fff;box-shadow:0 0 0 8px rgba(0,0,0,.3);padding:30px 0;font-size:35px;font-weight:600;color:#404040;position:absolute;top:110px;left:50%;transform:translateX(-50%);transition:all .3s ease 0s}
.pricingTable6:hover .price-value{background:linear-gradient(to bottom,#fa6fe6,#ffef65);color:#fff}
.pricingTable6 .month{display:block;font-size:16px;font-weight:400;line-height:0}
.pricingTable6 .pricing-content{list-style:none;padding:0;margin-bottom:20px;text-align:left;transition:all .3s ease 0s}
.pricingTable6 .pricing-content li{padding:7px 0 7px 50px;font-size:16px;font-weight:600;color:#000;letter-spacing:1px;position:relative}
.pricingTable6 .pricing-content li:before{content:"\f00c";font-family:"Font Awesome 5 Free";font-weight:900;width:24px;height:24px;line-height:20px;border-radius:50%;border:2px solid #fb6ee5;color:#fb6ee5;text-align:center;position:absolute;top:50%;left:12px;transform:translateY(-50%)}
.pricingTable6 .pricing-content li.disable{color:#707070}
.pricingTable6 .pricing-content li.disable:before{display:none}
.pricingTable6 .pricingTable-signup{display:inline-block;padding:13px 45px;border-radius:30px;background:linear-gradient(to right,#fa6fe6,#ffef65);font-size:22px;font-weight:700;color:#404040;text-transform:uppercase;z-index:1;position:relative;transition:all .3s ease 0s}
.pricingTable6 .pricingTable-signup:hover{color:#fff}
.pricingTable6 .pricingTable-signup:before{content:"";width:98%;height:92%;border-radius:30px;background:#fff;position:absolute;top:2px;left:2px;z-index:-1}
.pricingTable6 .pricingTable-signup:hover:before{background:0 0}
.pricingTable6.blue .title{background:linear-gradient(to bottom right,#44f2b5,#4cbde2)}
.pricingTable6.blue:hover .price-value{background:linear-gradient(to bottom,#44f2b5,#4cbde2)}
.pricingTable6.blue .pricing-content li:before{border-color:#44f2b5;color:#44f2b5}
.pricingTable6.blue .pricingTable-signup{background:linear-gradient(to bottom right,#44f2b5,#4cbde2)}
.pricingTable6.green .title{background:linear-gradient(to bottom right,#66fd9c,#f6fa60)}
.pricingTable6.green:hover .price-value{background:linear-gradient(to bottom,#66fd9c,#f6fa60)}
.pricingTable6.green .pricing-content li:before{border-color:#66fd9c;color:#66fd9c}
.pricingTable6.green .pricingTable-signup{background:linear-gradient(to bottom right,#66fd9c,#f6fa60)}
@media only screen and (max-width:990px){.pricingTable6{margin-bottom:30px}
}
@media only screen and (max-width:767px){.pricingTable6 .title:before{height:400px;top:100px;left:55px}
.pricingTable6 .title:after{width:550px;height:550px;top:150px;right:-100px;transform:rotate(-20deg)}
}
@media only screen and (max-width:480px){.pricingTable6 .title:after,.pricingTable6 .title:before{width:280px;height:200px;top:220px;left:-46px}
.pricingTable6 .title:after{top:150px;left:auto;right:-70px}
}

/******************* Pricing Table Demo - 7 *****************/
.pricingTable7,.pricingTable7 .pricingTable-header{position:relative}
.demo7{background:#C2C8C9;padding:30px 0}
.pricingTable7{padding-bottom:25px;margin:0 20px;background:#fff;border-radius:20px;border-bottom:5px solid #4fc2f8;text-align:center;z-index:1}
.pricingTable7 .pricingTable-header:after,.pricingTable7 .pricingTable-header:before{content:"";border-top:10px solid #48434a;border-left:10px solid transparent;position:absolute;bottom:-10px;left:-10px}
.pricingTable7 .pricingTable-header:after{border-left:none;border-right:10px solid transparent;left:auto;right:-10px}
.pricingTable7 .title{padding:25px 5px;margin:0;background:#030004;background:linear-gradient(to top,#030004,#314047);border-radius:20px 20px 0 0;font-size:26px;font-weight:700;color:#fff;text-transform:uppercase;position:relative}
.pricingTable7 .title:after,.pricingTable7 .title:before{content:"";border-left:10px solid #c2c8c9;border-top:37px solid transparent;border-bottom:37px solid transparent;position:absolute;bottom:-114px;left:-30px}
.pricingTable7 .title:after{border-left:none;border-right:10px solid #c2c8c9;left:auto;right:-30px}
.pricingTable7 .price-value{display:block;padding:15px 5px;margin:0 -10px;background:#4fc2f8;font-size:36px;font-weight:700;color:#fff;position:relative}
.pricingTable7 .price-value:after,.pricingTable7 .price-value:before{content:"";width:30px;height:90%;background:#0082d4;position:absolute;top:50%;left:-20px;z-index:-1}
.pricingTable7 .price-value:after{left:auto;right:-20px}
.pricingTable7 .month{font-size:15px;font-weight:700;margin-left:3px;position:relative;top:-12px}
.pricingTable7 .pricing-content{list-style:none;padding:15px 0;margin:0}
.pricingTable7 .pricing-content li{padding:8px 0;font-size:15px;font-weight:700;color:#b2bbc0;line-height:30px;border-bottom:2px dashed #e3e3e3;position:relative}
.pricingTable7 .pricing-content li:last-child{border-bottom:none}
.pricingTable7 .pricingTable-signup{display:inline-block;padding:10px 30px;font-size:16px;color:#fff;text-transform:uppercase;border:2px solid #4fc2f8;box-shadow:3px 3px 10px 0 rgba(0,0,0,.08);perspective:300px;z-index:1;position:relative;transition:all .3s ease 0s}
.pricingTable7 .pricingTable-signup:hover{color:#4fc2f8}
.pricingTable7 .pricingTable-signup:before{content:"";width:100%;height:100%;background:#4fc2f8;position:absolute;top:0;left:0;z-index:-1;transform-origin:left center 0;transition:all .3s ease 0s}
.pricingTable7 .pricingTable-signup:hover:before{transform:rotateY(90deg)}
.pricingTable.orange{border-bottom-color:#fb8c00}
.pricingTable7.orange .price-value,.pricingTable7.orange .pricingTable-signup:before{background:#fb8c00}
.pricingTable7.orange .price-value:after,.pricingTable7.orange .price-value:before{background:#cd4410}
.pricingTable7.orange .pricingTable-signup{border-color:#fb8c00}
.pricingTable7.orange .pricingTable-signup:hover{color:#fb8c00}
.pricingTable7.pink{border-bottom-color:#d81a60}
.pricingTable7.pink .price-value,.pricingTable7.pink .pricingTable-signup:before{background:#d81a60}
.pricingTable7.pink .price-value:after,.pricingTable7.pink .price-value:before{background:#a91a58}
.pricingTable7.pink .pricingTable-signup{border-color:#d81a60}
.pricingTable7.pink .pricingTable-signup:hover{color:#d81a60}
@media only screen and (max-width:990px){.pricingTable7{margin-bottom:30px}
}

/******************* Pricing Table Demo - 8 *****************/
.demo8{background:#B7B7B7;padding:30px 0}
.pricingTable8{padding-bottom:100px;background:#fff;text-align:center;margin-bottom:50px;position:relative}
.pricingTable8:before{content:"";width:80%;height:10px;background:#727cb6;margin:0 auto;position:absolute;top:-10px;left:0;right:0}
.pricingTable8 .title{display:inline-block;width:80%;margin:0 0 40px;background:#727cb6;font-size:30px;font-weight:700;color:#fff;letter-spacing:1px;text-transform:uppercase;position:relative}
.pricingTable8 .title:after,.pricingTable8 .title:before{content:"";border-right:10px solid #4a59ab;border-top:10px solid transparent;position:absolute;top:-10px;left:-10px}
.pricingTable8 .title:after{border-right:none;border-left:10px solid #4a59ab;left:auto;right:-10px}
.pricingTable8 .title span{display:block;padding:25px 0}
.pricingTable8 .title span:after{content:"";display:block;width:100%;height:21px;position:absolute;bottom:-21px;background:linear-gradient(-45deg,transparent 75%,#727cb6 75%) 0 50%,linear-gradient(45deg,transparent 75%,#727cb6 75%) 0 50%;background-repeat:repeat-x;background-size:16px}
.pricingTable8 .pricing-content{list-style:none;padding:0;margin:0}
.pricingTable8 .pricing-content li{font-size:16px;font-weight:700;color:#727cb6;line-height:30px;margin-bottom:20px;position:relative}
.pricingTable8 .pricing-content li:last-child{margin-bottom:0}
.pricingTable8 .pricing-content li:before{content:"";width:30px;height:100%;background:#727cb6;position:absolute;top:0;left:-10px}
.pricingTable8 .pricing-content li:after{content:"";border-left:15px solid #727cb6;border-top:15px solid transparent;border-bottom:15px solid transparent;position:absolute;top:0;left:20px}
.pricingTable8 .pricing-content i{font-size:16px;color:#fff;position:absolute;top:6px;left:0}
.pricingTable8 .pricing-content i:after{content:"";border-right:10px solid #4a59ab;border-top:10px solid transparent;position:absolute;top:-16px;left:-10px}
.pricingTable8 .price-value{width:150px;height:150px;border-radius:50%;background:#727cb6;margin:0 auto;overflow:hidden;position:absolute;bottom:-75px;left:0;right:0}
.pricingTable8 .pricingTable-signup{display:block;padding:21px 0;font-size:20px;font-weight:700;color:#fff;position:relative}
.pricingTable8 .pricingTable-signup:after,.pricingTable8 .pricingTable-signup:before{content:"";width:53%;height:15px;background:#fff;position:absolute;bottom:-5px;left:0;transform:rotate(20deg)}
.pricingTable8 .pricingTable-signup:after{left:auto;right:0;transform:rotate(-20deg)}
.pricingTable8 .amount{display:block;padding:15px 0;font-size:28px;font-weight:700;color:#fff}
.pricingTable8 .amount span{display:inline;font-size:16px;border-bottom:2px solid #fff;position:relative;top:-8px}
.pricingTable8.green .price-value,.pricingTable8.green .pricing-content li:before,.pricingTable8.green .title,.pricingTable8.green:before{background:#1abc9c}
.pricingTable.green .title span:after{background:linear-gradient(-45deg,transparent 75%,#1abc9c 75%) 0 50%,linear-gradient(45deg,transparent 75%,#1abc9c 75%) 0 50%;background-size:16px}
.pricingTable8.green .pricing-content li{color:#1abc9c}
.pricingTable8.green .pricing-content li:after{border-left:15px solid #1abc9c}
.pricingTable8.green .pricing-content i:after,.pricingTable8.green .title:before{border-right:10px solid #11927a}
.pricingTable8.green .title:after{border-left:10px solid #11927a}
.pricingTable8.purple .price-value,.pricingTable8.purple .pricing-content li:before,.pricingTable8.purple .title,.pricingTable8.purple:before{background:#cf4d78}
.pricingTable.purple .title span:after{background:linear-gradient(-45deg,transparent 75%,#cf4d78 75%) 0 50%,linear-gradient(45deg,transparent 75%,#cf4d78 75%) 0 50%;background-size:16px}
.pricingTable8.purple .pricing-content li{color:#cf4d78}
.pricingTable8.purple .pricing-content li:after{border-left:15px solid #cf4d78}
.pricingTable8.purple .pricing-content i:after,.pricingTable8.purple .title:before{border-right:10px solid #ae365e}
.pricingTable8.purple .title:after{border-left:10px solid #ae365e}
@media only screen and (max-width:990px){.pricingTable8{margin-bottom:100px}
}

/******************* Pricing Table Demo - 9 *****************/
.demo9{background:#A7A7A7;padding:30px 0}
.pricingTable9{background:#fff;padding-bottom:20px;overflow:hidden}
.pricingTable9 .pricingTable-header{margin-bottom:40px;position:relative;z-index:1}
.pricingTable9 .pricingTable-header:before{content:"";width:100%;height:150%;background:#606aa3;position:absolute;top:-90%;left:-20%;z-index:-1;transform:rotate(-42deg)}
.pricingTable9 .pricingTable-header:after{content:"";width:100%;height:190%;background:#727cb6;position:absolute;top:-76%;right:-16%;z-index:-2;transform:rotate(20deg)}
.pricingTable9 .price-value,.pricingTable9 .title{display:inline-block;width:50%;padding:30px 0;color:#fff;line-height:20px}
.pricingTable9 .price-value{float:left;font-size:30px;position:relative;top:10px;left:20px}
.pricingTable9 .currency{font-size:20px;position:relative;top:-10px;right:-3px}
.pricingTable9 .title{margin:0;font-size:20px;font-weight:700;text-transform:uppercase;position:relative;top:10px;right:7px}
.pricingTable9 .pricing-content{list-style:none;padding:0;margin:0 0 20px;text-align:center;clear:both}
.pricingTable9 .pricing-content li{font-size:17px;color:#828282;line-height:40px}
.pricingTable9 .pricingTable-signup{display:block;width:80%;padding:10px 0;text-align:center;border:1px solid #606aa3;border-radius:40px;margin:0 auto;font-size:18px;color:#606aa3;z-index:1;text-transform:uppercase;overflow:hidden;position:relative}
.pricingTable9 .pricingTable-signup:after,.pricingTable9 .pricingTable-signup:before{content:"";border-width:0;border-style:solid;position:absolute;z-index:-1;transition:all .7s ease 0s}
.pricingTable9 .pricingTable-signup:before{border-color:transparent transparent transparent #606aa3;bottom:0;left:0}
.pricingTable9 .pricingTable-signup:after{border-color:transparent #606aa3 transparent transparent;top:0;right:0}
.pricingTable9 .pricingTable-signup:hover:after,.pricingTable9 .pricingTable-signup:hover:before{border-width:150px 262px}
.pricingTable9.green .pricingTable-header:before{background:#18a288}
.pricingTable9.green .pricingTable-header:after{background:#1abc9c}
.pricingTable9.green .pricingTable-signup{border-color:#1abc9c;color:#1abc9c}
.pricingTable9.green .pricingTable-signup:before{border-color:transparent transparent transparent #18a288}
.pricingTable9.green .pricingTable-signup:after{border-color:transparent #18a288 transparent transparent}
.pricingTable9.orange .pricingTable-header:before{background:#ee6e00}
.pricingTable9.orange .pricingTable-header:after{background:#e67e22}
.pricingTable9.orange .pricingTable-signup{border-color:#e67e22;color:#e67e22}
.pricingTable9.orange .pricingTable-signup:before{border-color:transparent transparent transparent #ee6e00}
.pricingTable9.orange .pricingTable-signup:after{border-color:transparent #ee6e00 transparent transparent}
.pricingTable9.purple .pricingTable-header:before{background:#b14468}
.pricingTable9.purple .pricingTable-header:after{background:#cf4d78}
.pricingTable9.purple .pricingTable-signup{border-color:#cf4d78;color:#cf4d78}
.pricingTable9.purple .pricingTable-signup:before{border-color:transparent transparent transparent #b14468}
.pricingTable9.purple .pricingTable-signup:after{border-color:transparent #b14468 transparent transparent}
@media only screen and (max-width:990px){.pricingTable9{margin-bottom:30px}
}
@media only screen and (max-width:767px){.pricingTable9 .pricingTable-header:before{height:300%;top:-267%}
.pricingTable9 .pricingTable-header:after{height:270%;top:-106%}
.pricingTable9 .title{text-align:center}
}
@media only screen and (max-width:480px){.pricingTable9 .pricingTable-header:after{top:-146%}
}
@media only screen and (max-width:479px){.pricingTable9 .pricingTable-header:before{height:200%;top:-120%;left:-20%}
}

/******************* Pricing Table Demo - 10 *****************/
.demo10{background:#C0BFBF;padding:30px 0}
.pricingTable10{text-align:center}
.pricingTable10 .pricingTable-header{padding:30px 0;background:#4d4d4d;position:relative;transition:all .3s ease 0s}
.pricingTable10:hover .pricingTable-header{background:#09b2c6}
.pricingTable10 .pricingTable-header:after,.pricingTable10 .pricingTable-header:before{content:"";width:16px;height:16px;border-radius:50%;border:1px solid #d9d9d8;position:absolute;bottom:12px}
.pricingTable10 .pricingTable-header:before{left:40px}
.pricingTable10 .pricingTable-header:after{right:40px}
.pricingTable10 .heading{font-size:20px;color:#fff;text-transform:uppercase;letter-spacing:2px;margin-top:0}
.pricingTable10 .price-value{display:inline-block;position:relative;font-size:55px;font-weight:700;color:#09b1c5;transition:all .3s ease 0s}
.pricingTable10:hover .price-value{color:#fff}
.pricingTable10 .currency{font-size:30px;font-weight:700;position:absolute;top:6px;left:-19px}
.pricingTable10 .month{font-size:16px;color:#fff;position:absolute;bottom:15px;right:-30px;text-transform:uppercase}
.pricingTable10 .pricing-content{padding-top:50px;background:#fff;position:relative}
.pricingTable10 .pricing-content:after,.pricingTable10 .pricing-content:before{content:"";width:16px;height:16px;border-radius:50%;border:1px solid #7c7c7c;position:absolute;top:12px}
.pricingTable10 .pricing-content:before{left:40px}
.pricingTable10 .pricing-content:after{right:40px}
.pricingTable10 .pricing-content ul{padding:0 20px;margin:0;list-style:none}
.pricingTable10 .pricing-content ul:after,.pricingTable10 .pricing-content ul:before{content:"";width:8px;height:46px;border-radius:3px;background:linear-gradient(to bottom,#818282 50%,#727373 50%);position:absolute;top:-22px;z-index:1;box-shadow:0 0 5px #707070;transition:all .3s ease 0s}
.pricingTable10:hover .pricing-content ul:after,.pricingTable10:hover .pricing-content ul:before{background:linear-gradient(to bottom,#40c4db 50%,#34bacc 50%)}
.pricingTable10 .pricing-content ul:before{left:44px}
.pricingTable10 .pricing-content ul:after{right:44px}
.pricingTable10 .pricing-content ul li{font-size:15px;font-weight:700;color:#777473;padding:10px 0;border-bottom:1px solid #d9d9d8}
.pricingTable10 .pricing-content ul li:last-child{border-bottom:none}
.pricingTable10 .read{display:inline-block;font-size:16px;color:#fff;text-transform:uppercase;background:#d9d9d8;padding:8px 25px;margin:30px 0;transition:all .3s ease 0s}
.pricingTable10 .read:hover{text-decoration:none}
.pricingTable10:hover .read{background:#09b1c5}
@media screen and (max-width:990px){.pricingTable10{margin-bottom:25px}
}

/******************* Pricing Table Demo - 11 *****************/
.demo11{background:#B1EA86;padding:30px 0}
.pricingTable11{text-align:center;background:#fff;margin:0 -15px;box-shadow:0 0 10px #ababab;padding-bottom:40px;border-radius:10px;color:#cad0de;transform:scale(1);transition:all .5s ease 0s}
.pricingTable11:hover{transform:scale(1.05);z-index:1}
.pricingTable11 .pricingTable-header{padding:40px 0;background:#f5f6f9;border-radius:10px 10px 50% 50%;transition:all .5s ease 0s}
.pricingTable11:hover .pricingTable-header{background:#ff9624}
.pricingTable11 .pricingTable-header i{font-size:50px;color:#858c9a;margin-bottom:10px;transition:all .5s ease 0s}
.pricingTable11 .price-value{font-size:35px;color:#ff9624;transition:all .5s ease 0s}
.pricingTable11 .month{display:block;font-size:14px;color:#cad0de}
.pricingTable11:hover .month,.pricingTable11:hover .price-value,.pricingTable11:hover .pricingTable-header i{color:#fff}
.pricingTable11 .heading{font-size:24px;color:#ff9624;margin-bottom:20px;text-transform:uppercase}
.pricingTable11 .pricing-content ul{list-style:none;padding:0;margin-bottom:30px}
.pricingTable11 .pricing-content ul li{line-height:30px;color:#a7a8aa}
.pricingTable11 .pricingTable-signup a{display:inline-block;font-size:15px;color:#fff;padding:10px 35px;border-radius:20px;background:#ffa442;text-transform:uppercase;transition:all .3s ease 0s}
.pricingTable11 .pricingTable-signup a:hover{box-shadow:0 0 10px #ffa442}
.pricingTable11.blue .heading,.pricingTable11.blue .price-value{color:#4b64ff}
.pricingTable11.blue .pricingTable-signup a,.pricingTable11.blue:hover .pricingTable-header{background:#4b64ff}
.pricingTable11.blue .pricingTable-signup a:hover{box-shadow:0 0 10px #4b64ff}
.pricingTable11.red .heading,.pricingTable11.red .price-value{color:#ff4b4b}
.pricingTable11.red .pricingTable-signup a,.pricingTable11.red:hover .pricingTable-header{background:#ff4b4b}
.pricingTable.red .pricingTable-signup a:hover{box-shadow:0 0 10px #ff4b4b}
.pricingTable11.green .heading,.pricingTable11.green .price-value{color:#40c952}
.pricingTable11.green .pricingTable-signup a,.pricingTable11.green:hover .pricingTable-header{background:#40c952}
.pricingTable11.green .pricingTable-signup a:hover{box-shadow:0 0 10px #40c952}
.pricingTable11.blue:hover .price-value,.pricingTable11.green:hover .price-value,.pricingTable11.red:hover .price-value{color:#fff}
@media screen and (max-width:990px){.pricingTable11{margin:0 0 20px}
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pricing Table</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    </head>
    <body>
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
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    </body>
</html>
<script type="text/javascript">

</script>
</body>
</html>
