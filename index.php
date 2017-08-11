<!DOCTYPE html>
<html lang="en">

<head>
    <link rel=icon href=image/200_200.png type=image/png sizes=16x16>
    <title>OTM Brew Co.</title>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/roboto-font.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel=stylesheet> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
    <link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css>
    <!-- <script src=https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js></script> -->
    <!-- <script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js></script> -->
    <link rel=stylesheet type=text/css href=css/style.css>
    <!-- <link rel=stylesheet type=text/css href=css/animate.css> -->
</head>

<body onload=initialize()>
    <div class=bg>
        <div class=clouds></div>
    </div>
    <div id=home class=bgImage>
        <div class="row linear">
            <div class="col-md-12 col-sm-12 col-xs-12 bookbutton">
                <div class=pull-left style=padding:20px>
                    <button type=button class=reservation data-toggle=modal data-target=#skin-hair>BOOK A RESERVATION</button>
                </div>
                <div class=pull-right> <img src=image/200_200.png class="img-responsive logoImage" alt=logo></div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 heroText">
                <h1>
                    <span class="word hero1text">
                        <span class="blink blink-5">O</span>
                        <span class="blink blink-1 blink-5">V</span>
                        <span class="blink blink-2 blink-5">E</span>
                        <span class="blink blink-3 blink-5">R</span>
                    </span>
                    <span class="word hero1text">
                        <span class="blink blink-5">T</span>
                        <span class="blink blink-1 blink-5">H</span>
                        <span class="blink blink-2 blink-5">E</span>
                    </span>
                    <span class="word hero1text">
                        <span class="blink blink-5">M</span>
                        <span class="blink blink-1 blink-5">O</span>
                        <span class="blink blink-2 blink-5">O</span>
                        <span class="blink blink-3 blink-5">N</span>
                    </span>
                    <br/>
                    <span class="word hero1text">
                        <span class="blink blink-5">B</span>
                        <span class="blink blink-1 blink-5">R</span>
                        <span class="blink blink-2 blink-5">E</span>
                        <span class="blink blink-3 blink-5">W</span>
                    </span>
                    <span class="word hero1text">
                        <span class="blink blink-5">C</span>
                        <span class="blink blink-1 blink-5">O</span>
                        <span class="blink blink-3 blink-5">.</span>
                    </span>
                </h1> 
            </div>
            <div class="col-xs-12 hidden-md hidden-sm hidden-lg arrow">
                <a href=#event id=scroll> <img src=image/arrow-down.png class=img-responsive alt=arrow-down> </a>
            </div>
        </div>
    </div>
    <div id=skin-hair class=modal role=dialog>
        <div class=modal-dialog>
            <div class=modal-content>
                <div class=modal-header style=border-bottom:0>
                    <h4 class=modal-title style=display:inline-grid>
                        <a href=tel:+919100623334 style=color:black;display:flex;padding:10px>
                            <span class="glyphicon glyphicon-phone" aria-hidden=true></span>+919100623334
                        </a>
                        <a href=tel:+919100623335 style=color:black;display:flex;padding:10px>
                            <span class="glyphicon glyphicon-phone" aria-hidden=true></span>+919100623335
                        </a>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <div class=row style=z-index:8>
        <div id=event class="col-md-12 col-sm-12 col-xs-12">
            <h1 class="center topSpace h1-font-size">
                <span id=link>E</span><span id=link1>v</span><span id=link2>e</span><span id=link3>n</span><span id=link4>t</span><span id=link5>s</span>
            </h1>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 center eventlist">
            <div class="col-md-3 col-sm-3 col-xs-12 anandmobile" style=height:300px>
                <div id=f1_container>
                    <div id=f1_card class=shadow>
                        <div class="front face face1"> <img src="image/6.8.17.jpg" class="img-responsive" alt="event calender1">
                            <h1>1st - 6th August</h1>
                        </div>
                        <div class="back face face1 center" style="background-color: black; padding: 15px;">
                            <div>
                                <p>2nd August – Paradise Circus</p>
                                <p>4th August – Seven</p>
                                <p>5th August – Dj Kave</p>
                                <p>6th August - The Rugmuffins (Evening) + Morning (Shawn)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 anandmobile" style=height:300px>
                <div id=f2_container>
                    <div id=f2_card class=shadow>
                        <div class="front face face1"> <img src="image/13.8.17.jpg" class="img-responsive" alt="event calender1">
                            <h1>7th - 13th August</h1> </div>
                        <div class="back face face1 center" style="background-color: black; padding: 15px;">
                            <div>
                                <p>9th August - (Looking for Sufi Artist)</p>
                                <p>11th August - Junkyard Groove </p>
                                <p>13th August - Afternoon - Shiv Menon / Evening - When Chai Met Toast</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 anandmobile" style=height:300px>
                <div id=f3_container>
                    <div id=f3_card class=shadow>
                        <div class="front face face1"> <img src="image/16.8.17.jpg" class="img-responsive" alt="event calender1">
                            <h1>14th - 20th August</h1> </div>
                        <div class="back face face1 center" style="background-color: black; padding: 15px;">
                            <div>
                                <p>16th August – Three of us and her</p>
                                <p>18th August – Vernon Duo</p>
                                <p>19th August – Dj Cas</p>
                                <p>20th August – Arpit Chourey (Afternoon and Duo in the evening)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 anandmobile" style=height:300px>
                <div id=f4_container>
                    <div id=f4_card class=shadow>
                        <div class="front face face1"> <img src="image/20.8.17.jpg" class="img-responsive" alt="event calender1">
                            <h1>21st - 31st August</h1> </div>
                        <div class="back face face1 center" style="background-color: black; padding: 15px;">
                            <div>
                                <p>23rd August – Tapa Corda</p>
                                <p>25th August – Mixed Pickle</p>
                                <p>27th August – Vernon Duo (Evening and Afternoon)</p> 
                                <p>30th August – Paradise Circus</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id=gallery class="col-md-12 col-sm-12 col-xs-12 center">
            <h1 class="h1-font-size topSpace">
                <span id=gallerylink>G</span><span id=gallerylink1>a</span><span id=gallerylink2>l</span><span id=gallerylink3>l</span><span id=gallerylink4>e</span><span id=gallerylink5>r</span><span id=gallerylink6>y</span>
            </h1>
        </div>
        <?php include 'partial/gallery.php' ?>
        <div class="col-md-12 col-sm-12 col-xs-12 testimonialsTopSpace">
            <div class="col-md-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-xs-12" style=text-align:center>
                <div id=myCarousel class="carousel slide" data-ride=carousel>
                    <div class=carousel-inner>
                        <div class="item active">
                            <blockquote style=height:125px;border-left:none>
                                <p style=font-family:Roboto-Regular>&#39;Everything you see at Over The Moon Brew Co. is there for a purpose&#39;</p>
                                <footer style=font-family:Roboto-Regular>Ameet Mirpuri</footer>
                            </blockquote> <img src=image/Untitled-1.png class=img-responsive alt=testimonial1 style=width:100%>
                        </div>
                        <div class=item>
                            <blockquote style=height:125px;border-left:none>
                                <p style=font-family:Roboto-Regular>'All we tried to dohere is create a one o f kind experience where people have everything they’d want'</p>
                                <footer style=font-family:Roboto-Regular>Sanjay Bathla</footer>
                            </blockquote> <img src=image/Untitled-2.png class=img-responsive alt=testimonial2 style=width:100%>
                        </div>
                        <div class=item>
                            <blockquote style=height:125px;border-left:none>
                                <p style=font-family:Roboto-Regular>'We worked very hard to build a brewbar that's not only the finest in Hyderabad, but in India'</p>
                                <footer style=font-family:Roboto-Regular>Sanjeev Mehta</footer>
                            </blockquote> <img src=image/Untitled-3.png class=img-responsive alt=testimonial2 style=width:100%>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id=ourMenu class="col-md-12 col-sm-12 col-xs-12">
            <h1 class="center h1-font-size topSpace menuh1">
                <span id=menulink>E</span><span id=menulink1>x</span><span id=menulink2>p</span><span id=menulink3>l</span><span id=menulink4>o</span><span id=menulink5>r</span><span id=menulink6>e</span>
                <span id=menulink7>O</span><span id=menulink8>u</span><span id=menulink9>r</span>
                <span id=menulink10>M</span><span id=menulink11>e</span><span id=menulink12>n</span><span id=menulink13>u</span><span id=menulink14>s</span>
            </h1>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 menuheight">
            <a href=menu/food.pdf target=_blank>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div id=f_container>
                        <div id=f_card class=shadow>
                            <div class="front face">
                                <h1 class="center h1-font-size-remove" style=font-family:Roboto-Medium>FOOD</h1> </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href=menu/otmspecial.pdf target=_blank>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div id=f_container>
                        <div id=f_card class=shadow>
                            <div class="front face">
                                <h1 class="center h1-font-size-remove" style=font-family:Roboto-Medium>OTM SPECIALS</h1> </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="menu/bar.pdf" target=_blank>
                <div class="col-md-4 col-sm-4 col-xs-12 h1-font-size-remove">
                    <div id=f_container>
                        <div id=f_card class=shadow>
                            <div class="front face">
                                <h1 class="center h1-font-size-remove" style=font-family:Roboto-Medium>BAR</h1> </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div id=ohso class="col-md-12 col-sm-12 col-xs-12">
            <h1 class="center h1-font-size topSpace menuh1">
                <span id=ohsolink>O</span><span id=ohsolink1>H</span><span id=ohsolink2>S</span><span id=ohsolink3>O</span>
                <span id=ohsolink4>I</span><span id=ohsolink5>m</span><span>a</span><span id=ohsolink6>g</span><span id=ohsolink7>e</span>
                <span id=ohsolink8>C</span><span id=ohsolink9>o</span><span id=ohsolink10>n</span><span id=ohsolink11>t</span><span id=ohsolink12>e</span><span id=ohsolink13>n</span><span id=ohsolink14>t</span>
            </h1>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-6 col-sm-6 col-xs-12"> <img src=image/UPSTAIRS-white-area-1600-1000.jpg class=img-responsive alt=UPSTAIRS> </div>
            <div class="col-md-6 col-sm-6 col-xs-12 oso-content osomobile">
                <p>OhSo is a restaurant and bar above Over The Moon Brew Co. which has its own distinctive unique style. It's a place where you can come down with your loved ones to enjoy an appetizing meal over gala conversations. A soothing ambience with the most impeccable buffet and food spread for you to rejoice your day with. The subtle and soothing look of the place just makes it an ideal joint for family and friends to catch up and have a sound joyful day over delightful food and drinks.</p>
            </div>
        </div>
        <div id=about class="col-md-12 col-sm-12 col-xs-12 topSpace aboutImage" style=margin-bottom:0!important>
            <div class=linear>
                <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-12 about-content">
                    <div>
                        <h1 class=h1-font-size>
                            <span id=aboutlink>A</span><span id=aboutlink1>b</span><span id=aboutlink2>o</span><span id=aboutlink3>u</span><span id=aboutlink4>t</span>
                            <span id=aboutlink5>U</span><span id=aboutlink6>s</span>
                        </h1>
                        <p>Another edition of Over The Moon with the same old soul but with whole new concept!</p>
                        <p>Gachibowli’s First Brew House</p>
                        <p>&#39;Where old world charm meets modern twist’</p>
                        <p>Over The Moon Brew Company is sprawling young and vibrant place to entertain the crowd with a one of a kind experience. We’ve got afancy food tuck called the truc ker’s shop which will woo you away and make you go all gaga over our delightful delicacies.</p>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'partial/map.php' ?>
        <div class="col-md-12 col-sm-12 col-xs-12 topSpace footer-nav-center" style=list-style-type:none;text-align:center;font-size:16px;margin-top:1%!important;margin-bottom:1%!important>
            <li><a href=#home>Home</a></li>
            <li><a href=#about>About Us</a></li>
            <li><a href=#event>Events</a></li>
            <li><a href=#gallery>Gallery</a></li>
            <li><a href=#ourMenu>Our Menus</a></li>
            <li><a href=#ohso>OHSO</a></li>
            <li><a href=#>Book a Reservation</a></li>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <p class=copyrights>All Rights Reserved. © 2017. OTM Brew.</p>
            <p class=copyrights>Powered By <a target=_blank href=http://www.thinkdigital.xyz/>Think Digital</a></p>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src=js/wow.js></script> -->
    <script>
        $("#scroll").click(function () {
            $("html,body").animate({
                scrollTop: $("#event").offset().top
            }, 1000)
        });
        $('a[href^="#"]').on('click', function(event) {
            var target = $( $(this).attr('href') );

            if( target.length ) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1500);
            }
        });
    </script>
    <script>
        $(window).scroll(function () {
            var c = $("#link").offset().top
                , d = $("#link").outerHeight()
                , b = $(window).height()
                , a = $(this).scrollTop();
            if (a > (c + d - b)) {
                $("#link").addClass("blink blink-5");
                $("#link1").addClass("blink blink-1 blink-5");
                $("#link2").addClass("blink blink-2 blink-5");
                $("#link3").addClass("blink blink-3 blink-5");
                $("#link4").addClass("blink blink-5");
                $("#link5").addClass("blink blink-1 blink-5");
                $("#link6").addClass("blink blink-3 blink-5")
            }
            else {
                $("#link").removeClass("blink blink-5");
                $("#link1").removeClass("blink blink-1 blink-5");
                $("#link2").removeClass("blink blink-2 blink-5");
                $("#link3").removeClass("blink blink-3 blink-5");
                $("#link4").removeClass("blink blink-5");
                $("#link5").removeClass("blink blink-1 blink-5");
                $("#link6").removeClass("blink blink-3 blink-5")
            }
        });
    </script>
    <script>
        $(window).scroll(function () {
            var c = $("#gallerylink").offset().top
                , d = $("#gallerylink").outerHeight()
                , b = $(window).height()
                , a = $(this).scrollTop();
            if (a > (c + d - b)) {
                $("#gallerylink").addClass("blink blink-5");
                $("#gallerylink1").addClass("blink blink-1 blink-5");
                $("#gallerylink2").addClass("blink blink-2 blink-5");
                $("#gallerylink3").addClass("blink blink-3 blink-5");
                $("#gallerylink4").addClass("blink blink-5");
                $("#gallerylink5").addClass("blink blink-1 blink-5");
                $("#gallerylink6").addClass("blink blink-3 blink-5")
            }
            else {
                $("#gallerylink").removeClass("blink blink-5");
                $("#gallerylink1").removeClass("blink blink-1 blink-5");
                $("#gallerylink2").removeClass("blink blink-2 blink-5");
                $("#gallerylink3").removeClass("blink blink-3 blink-5");
                $("#gallerylink4").removeClass("blink blink-5");
                $("#gallerylink5").removeClass("blink blink-1 blink-5");
                $("#gallerylink6").removeClass("blink blink-3 blink-5")
            }
        });
    </script>
    <script>
        $(window).scroll(function () {
            var c = $("#menulink").offset().top
                , d = $("#menulink").outerHeight()
                , b = $(window).height()
                , a = $(this).scrollTop();
            if (a > (c + d - b)) {
                $("#menulink").addClass("blink blink-5");
                $("#menulink1").addClass("blink blink-1 blink-5");
                $("#menulink2").addClass("blink blink-2 blink-5");
                $("#menulink3").addClass("blink blink-3 blink-5");
                $("#menulink4").addClass("blink blink-5");
                $("#menulink5").addClass("blink blink-1 blink-5");
                $("#menulink6").addClass("blink blink-2 blink-5");
                $("#menulink7").addClass("blink blink-3 blink-5");
                $("#menulink8").addClass("blink blink-5");
                $("#menulink9").addClass("blink blink-1 blink-5");
                $("#menulink10").addClass("blink blink-2 blink-5");
                $("#menulink11").addClass("blink blink-3 blink-5");
                $("#menulink12").addClass("blink blink-5");
                $("#menulink13").addClass("blink blink-1 blink-5");
                $("#menulink14").addClass("blink blink-2 blink-5")
            }
            else {
                $("#menulink").removeClass("blink blink-5");
                $("#menulink1").removeClass("blink blink-1 blink-5");
                $("#menulink2").removeClass("blink blink-2 blink-5");
                $("#menulink3").removeClass("blink blink-3 blink-5");
                $("#menulink4").removeClass("blink blink-5");
                $("#menulink5").removeClass("blink blink-1 blink-5");
                $("#menulink6").removeClass("blink blink-2 blink-5");
                $("#menulink7").removeClass("blink blink-3 blink-5");
                $("#menulink8").removeClass("blink blink-5");
                $("#menulink9").removeClass("blink blink-1 blink-5");
                $("#menulink10").removeClass("blink blink-2 blink-5");
                $("#menulink11").removeClass("blink blink-3 blink-5");
                $("#menulink12").removeClass("blink blink-5");
                $("#menulink13").removeClass("blink blink-1 blink-5");
                $("#menulink14").removeClass("blink blink-2 blink-5")
            }
        });
    </script>
    <script>
        $(window).scroll(function () {
            var c = $("#ohsolink").offset().top
                , d = $("#ohsolink").outerHeight()
                , b = $(window).height()
                , a = $(this).scrollTop();
            if (a > (c + d - b)) {
                $("#ohsolink").addClass("blink blink-5");
                $("#ohsolink1").addClass("blink blink-1 blink-5");
                $("#ohsolink2").addClass("blink blink-2 blink-5");
                $("#ohsolink3").addClass("blink blink-3 blink-5");
                $("#ohsolink4").addClass("blink blink-5");
                $("#ohsolink5").addClass("blink blink-1 blink-5");
                $("#ohsolink6").addClass("blink blink-2 blink-5");
                $("#ohsolink7").addClass("blink blink-3 blink-5");
                $("#ohsolink8").addClass("blink blink-5");
                $("#ohsolink9").addClass("blink blink-1 blink-5");
                $("#ohsolink10").addClass("blink blink-2 blink-5");
                $("#ohsolink11").addClass("blink blink-3 blink-5");
                $("#ohsolink12").addClass("blink blink-5");
                $("#ohsolink13").addClass("blink blink-1 blink-5");
                $("#ohsolink14").addClass("blink blink-2 blink-5")
            }
            else {
                $("#ohsolink").removeClass("blink blink-5");
                $("#ohsolink1").removeClass("blink blink-1 blink-5");
                $("#ohsolink2").removeClass("blink blink-2 blink-5");
                $("#ohsolink3").removeClass("blink blink-3 blink-5");
                $("#ohsolink4").removeClass("blink blink-5");
                $("#ohsolink5").removeClass("blink blink-1 blink-5");
                $("#ohsolink6").removeClass("blink blink-2 blink-5");
                $("#ohsolink7").removeClass("blink blink-3 blink-5");
                $("#ohsolink8").removeClass("blink blink-5");
                $("#ohsolink9").removeClass("blink blink-1 blink-5");
                $("#ohsolink10").removeClass("blink blink-2 blink-5");
                $("#ohsolink11").removeClass("blink blink-3 blink-5");
                $("#ohsolink12").removeClass("blink blink-5");
                $("#ohsolink13").removeClass("blink blink-1 blink-5");
                $("#ohsolink14").removeClass("blink blink-2 blink-5")
            }
        });
    </script>
    <script>
        $(window).scroll(function () {
            var c = $("#aboutlink").offset().top
                , d = $("#aboutlink").outerHeight()
                , b = $(window).height()
                , a = $(this).scrollTop();
            if (a > (c + d - b)) {
                $("#aboutlink").addClass("blink blink-5");
                $("#aboutlink1").addClass("blink blink-1 blink-5");
                $("#aboutlink2").addClass("blink blink-2 blink-5");
                $("#aboutlink3").addClass("blink blink-3 blink-5");
                $("#aboutlink4").addClass("blink blink-5");
                $("#aboutlink5").addClass("blink blink-1 blink-5");
                $("#aboutlink6").addClass("blink blink-2 blink-5")
            }
            else {
                $("#aboutlink").removeClass("blink blink-5");
                $("#aboutlink1").removeClass("blink blink-1 blink-5");
                $("#aboutlink2").removeClass("blink blink-2 blink-5");
                $("#aboutlink3").removeClass("blink blink-3 blink-5");
                $("#aboutlink4").removeClass("blink blink-5");
                $("#aboutlink5").removeClass("blink blink-1 blink-5");
                $("#aboutlink6").removeClass("blink blink-2 blink-5")
            }
            
        });
    </script>
    <script>

        // auto rotate of divs in ( only )mobile screen


        var div_ids = ['f1_container','f2_container','f3_container','f4_container'];
        var div_cards = ['f1_card','f2_card','f3_card','f4_card'];
        
        var dwidth = $(window).width();

        $(window).on('scroll',function(){
            if(dwidth<=767){
               doanimation($('#'+div_ids[0]),div_cards[0]);
               doanimation($('#'+div_ids[1]),div_cards[1]);
               doanimation($('#'+div_ids[2]),div_cards[2]);
               doanimation($('#'+div_ids[3]),div_cards[3]);
            }
        });3
        function doanimation(ele,ele_child){
            var epos = ( ele.offset().top - $('body').scrollTop() );
            if(epos <= $(window).height()/2 && epos >= 0){
                document.getElementById(ele_child).style = 'transform: rotateY(180deg);';
            }
            else{
                document.getElementById(ele_child).style = 'transform: rotateY(0deg);';  
            } 
        }
    </script>
</body>

</html>