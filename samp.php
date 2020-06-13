<?php

    $results  = $results_pop = "";
    //send to mail
    if(isset($_POST['send_email'])){
        //send message to your email
        $email_users = $_POST['mail'];
        $name_users = $_POST['name'];
        $message_users = $_POST['message'];
        $to = "starnets@yahoo.com";
        $subject = "Sample Subject";
        $headers = "FROM: " . $email_users . "\r\n";
        $headers .= "CC: noreply@sample.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859\r\n";
        $message = "<html><body>";
        $message  .= "$$name_users " . "\n" . "$message_users";
        $message  .= "</body></html>";
        if(mail($to, $subject, $message, $headers)){
            $results .= " <div class='popup_main'>
                            <div class='popup_image'>
                                Message Has Been Sent Successfully
                            <div class='pop_up_close' onclick='close_pop()'>&times;</div>
                            </div>
                        </div>";
            $results_pop = $results;
        //send message to users email
        $email_users = $_POST['mail'];
        $name_users = $_POST['name'];
        $message_users = $_POST['message'];
        $to = "$email_users";
        $subject = "Sample Subject";
        $headers = "FROM: " . "starnets@yahoo.com" . "\r\n";
        $headers .= "CC: starnets@yahoo.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859\r\n";
        $message = "<html><body>";
        $message  .= "Thank you for sending to us";
        $message  .= "</body></html>";
        mail($to, $subject, $message, $headers);
        }
        else{
            $results = " <div class='popup_main'>
                                <div class='popup_image'>
                                    Error in sending messsage
                                <div class='pop_up_close' onclick='close_pop()'>&times;</div>
                                </div>
                            </div>";
            $results_pop = $results;
            
        }
        
    
        
    }
    else{
        $results_pop ="
                 <div class='popup_main'>
            <div class='popup_image'>
                <img src='images/starnet123l99.png' alt='popup'>
            <div class='pop_up_close' onclick='close_pop()'>&times;</div>
            </div>
        </div>
            " . $results;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
    <link rel='icon' href='favicon.ico' type='image/x-icon'>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script rel="javascript" src="js/ran.js"></script>
    <title>StarNet</title>
 
   
</head>
<body onload="slideit()">
    <style>
        /*/ popup /*/
        #popup_cont{
            display: block;
            position: fixed;
            height: 100%;
            width: 100%;
            padding: 0px;
            margin: 0px;
            overflow: hidden;
            z-index: 11;
        }
        .popup_main{
            display: block;
            padding: 20px 131px;
            margin: 0px auto;
            align-content: center;
            text-align: center;
            justify-content: center;
            width: 50%;
            height:80%;
            overflow: hidden;
            position: absolute;
            top:5%;
            left: 25%;
            bottom: auto;
            
            
        }
        .popup_image{
            display: block;
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 100%;
        }
        .pop_up_close{
            display: block;
            padding: 20px;
            font-size: 20px;
            background-color: grey;
            color: white;
            position: absolute;
            top: 0px;
            font-weight: bolder;
            right: 0px;
        }
        .pop_up_close:hover{
            color: cadetblue;
            background-color: red;
            cursor: pointer;
            box-shadow: 2px 4px 5px rgba(0, 0, 0, .6);
        }
        @media screen and (max-width: 500px){
            .popup_main{
                display: block;
                padding: 20px;
                margin: 0px auto;
                align-content: center;
                text-align: center;
                justify-content: center;
                width: 80%;
                height: 100%;
                overflow: hidden;
                position: absolute;
                top: 5%;
                left: 10%;
                box-shadow: 2px 4px 5px rgba(0, 0, 0, .6);
                
            }
        }
    </style>
    
    
    <div id="popup_cont">
       <?php
            echo $results_pop;
        ?>
       
    </div>
    
    

    
    
    <div class="slideshow-container">
        <div class="slideshow-inner">
            <div class="mySlides fade">
                <img  src='images/ml-website-banner2.jpg' style='width: 100%;' alt="sally lightfoot crab"/>
                
                 
            </div>
            <div class="mySlides fade">
                <img  src='images/website-banner1.jpg' style='width: 100%;' alt="fighting nazca boobies"/>
               
            </div>
            <div class="mySlides fade">
                <img  src='images/12.jpg' style='width: 100%;' alt="otovalo waterfall"/>
              
            </div>
            <div class="mySlides fade">
                <img  src='images/monitoring.jpg' style='width: 100%;' alt="pelican"/>
                
                </div>
        </div>
            <a class="prev" onclick='plusSlides(-1)'>&#10094;</a>
            <a class="next" onclick='plusSlides(1)'>&#10095;</a>
        </div>
        <div class="side_dot">
            <span class="dot" onclick='currentSlide(1)'></span>
            <span class="dot" onclick='currentSlide(2)'></span>
            <span class="dot" onclick='currentSlide(3)'></span>
            <span class="dot" onclick='currentSlide(4)'></span>
        </div>
       <div>
    </div>
       
        <div class="all_header">
            <!---header laptop-->
            <div id="header_lp">
                <div class="header_cont">
                    <div class="header_content">
                        <div class="top_head">
                            <!-- search -->
                            <div class="srh_logo" id="srch" onclick="show_search()">
                                <svg version="1.1" x="0px" y="0px"
                                    width="512px" height="512px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path d="M344.5,298c15-23.6,23.8-51.6,23.8-81.7c0-84.1-68.1-152.3-152.1-152.3C132.1,64,64,132.2,64,216.3
                                    c0,84.1,68.1,152.3,152.1,152.3c30.5,0,58.9-9,82.7-24.4l6.9-4.8L414.3,448l33.7-34.3L339.5,305.1L344.5,298z M301.4,131.2
                                    c22.7,22.7,35.2,52.9,35.2,85c0,32.1-12.5,62.3-35.2,85c-22.7,22.7-52.9,35.2-85,35.2c-32.1,0-62.3-12.5-85-35.2
                                    c-22.7-22.7-35.2-52.9-35.2-85c0-32.1,12.5-62.3,35.2-85c22.7-22.7,52.9-35.2,85-35.2C248.5,96,278.7,108.5,301.4,131.2z">
                                    </path>
                            </svg>
                            </div>
                            <div class="search" id="search">
                                <span class="exit" onclick="close_search()">&times;</span>
                                <div class="form_cont">
                                    <form name="search_form" action="search.php" method="GET">
                                        <div class="form_input">
                                            <input type="search" name="search" class="input" placeholder="search">
                                        </div>
                                        <div class="search_btn">
                                            <input type="submit" name="search_go" value="Search" class="search_go">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="top_head_cont">
                           
                            </div>
                        </div>
                        <div class="head">
                            <!-- logo -->
                            <div class="logo">
                                <span class="images">
                                    <img src="images/11.png" alt="logo" href="#">
                                </span>
                            </div>
                            
                            <div class="nav">
                                <ul>
                                <li class="bold liside"> <a href="#">Home</a><hr class="sample"></li>
                                <li class="bold liside"><a href="#1">About Us</a> <hr class="sample"></li>
                                <li class="bold liside"><a href="#2">Our Services</a><hr class="sample"></li>
                                <li class="bold liside"><a href="#3">Our Client </a><hr class="sample"></li>
                                <li class="bold liside"><a href="#4">Our Laction</a> <hr class="sample"></li>
                                </ul>
                                
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            
            <!-- header phones-->
            <div id="header_ph">
                <div class="header_ph_cont">
                    <div class="head_ph_txt">
                        <div class="head">
                            <section class="head_logo">
                                <img src="images/11.png" alt="logo">
                            </section>
                          
                            <section class="equiv" id="equiv" onclick="show_side_nav()">&equiv;</section>
                        </div>
                        <section class="nav" id="nav">
                            <section class="times" onclick="close_side_nav()" id="times">&times;</section>
                            <!-- search -->
                            <div class="search">
                                <div class="form_cont">
                                    <form name="search_form" action="search.php" method="GET">
                                        <div class="form_input">
                                            <input type="search" name="search" class="input" placeholder="search">
                                        </div>
                                        <div class="search_btn">
                                            <input type="submit" name="search_go" value="Search" class="search_go">
                                            <span class="exit" onclick="close_search()">&times;</span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                             <ul>
                                <li class="bold liside"> <a href="#">Home</a><hr class="sample"></li>
                                <li class="bold liside"><a href="#1">About Us</a> <hr class="sample"></li>
                                <li class="bold liside"><a href="#2">Our Services</a><hr class="sample"></li>
                                <li class="bold liside"><a href="#3">Our Client </a><hr class="sample"></li>
                                <li class="bold liside"><a href="#4">Our Laction</a> <hr class="sample"></li>
                                </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>
	<!--contents-->
    <div id="contents">
        <div class="container_visit">
            <div class="local_map">
                <div class="map">
                    <!-- google map-->
                    <iframe src="https://www.youtube.com/embed/k6veDQ6nWUQ" class="iframe_map" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0" style="height: 300px;"></iframe>
                    
                </div>
            </div>
        </div>
        <div class="main_container">
            <span class="imgbx"><img src="images/12.jpg" alt="ice_berg"> </span>
            <span class="details">
                <span class="contents_container">
                    <span class="cont_top" id="1">About Us</span>
                    <span class="cont_top_txt">Extreme ice</span>
                    <span class="cont_sec">We’re the professionals.</span>
                    <span class="cont_sec"> We’re a team of highly dedicated solar specialists whose main focus is helping homeowner’s who’ve gone solar make sure they get the most out of their solar decision. We applaud those homeowner’s who’ve made the switch and we are dedicated to making sure your system works to capacity and meets your expectations for decades to come. </span>
                </span>
            </span>
        </div>
    </div>
   
    <style>
        .txt_show{
            position: absolute;
            padding: 20px;
            margin: 0px auto;
            display: flex;
            width: 24%;
            overflow: hidden;
            text-align: center;
            font-size: 1.5em;
            
        }
    </style>
    
<div class="head_2" id="2">OUR SERVICES</div>
    <div class="main_contents">
        <section class="about">
            <ul class="showcase">
                <li>
                    <span class="txt_show">
                    SYSTEM REPAIR <br>
                    Are your panels or inverter broken? Maybe you're not sure?</span>
                    <figure class="photo"><img src="images/unnamed.jpg" alt=""></figure>
                </li>
                <li>
                    <span class="txt_show">
                    SOLAR ROOF LEAK REPAIR<br>
                    Did you get solar and now your roof is leaking? Your roofer can’t touch the solar panels?
                    </span>
                    <figure  class="photo"><img src="images/Damage-to-Solar-Panel1.jpg" alt=""></figure>
                </li>
                <li>
                    <span class="txt_show">
                    PANEL WASHING<br>
                    Did you know that dirt, dust, smog, bird droppings, and grime will reduce your solar power production?</span>
                    <figure  class="photo"><img src="images/Sidebar-Raybot2.jpg" alt=""></figure>
                </li>
                <li>
                    <span class="txt_show">
                    CRITTER GUARD INSTALLATION<br>
                    Are animals living under your panels or running around your roof?.</span>
                    <figure  class="photo"><img src="images/critter20guard13.jpg" alt=""></figure>
                </li>
                <li>
                    <span class="txt_show">
                    HIGH ELECTRIC BILL AUDIT<br>
                    Are you paying two bills now? Is your electric bill the same or more than before solar?</span>
                    <figure  class="photo"><img src="images/Bill-audits.png" alt=""></figure>
                </li>
                <li>
                    <span class="txt_show">
                    MAINTENANCE & MONITORING<br>
                    Do you know how much your solar is producing? Do you know if your solar is even on?</span>
                    <figure  class="photo"><img src="images/monitoring.jpg" alt=""></figure>
                </li>
            </ul>
        </section>
        
        </div>
        <style>
            .showcase{
                list-style: none;
                width: 100%;
            }
            .showcase li{
                display: inline-block;
                float:left;
                width: 30%;
                margin-left: 30px;
            }
            .photo{
                width:auto;
                margin: 0;
                overflow: hidden;
                background-color: rgba(255, 255, 255, 0.77);
            }
            .photo img{
                opacity: 1;
                width: 100%;
                height: 200px;
                transform: scale(1.15);
                transition: transfrom 0.5s , opacity 0.1s;
            }

            .photo img:hover{
                opacity: .30;
                transform: scale(1.03);
            }
            .port_mem{
                display: block;
                position: relative;
                padding: 20px;
                margin: 0px;
                overflow: hidden;
            }
            .head_2{
                display: block;
                padding: 20px;
                font-size: 30px;
                font-style: normal;
                position: relative;
                text-align: center;
            }
            .card{
                display: flex;
                padding: 0px;
                position: relative;
                overflow: hidden;
            }
            .image-card, .image-card1, .image-card2, .image-card3{
                width: 20%;
                position: relative;
                padding: 0px;
                float: left;
                height: max-content;
                margin: 0px auto;
                box-shadow: 4px 4px 5px rgba(0,0,0,.6);
                text-align: center;
                padding-bottom: 30px;
                height: 380px;
                overflow: hidden;
            }
            .card{
                padding: 20px;
                margin: 0px;
                overflow: hidden;
            }
            .card img{
                width: 200px;
                height: 200px;
                position: relative;
                overflow: hidden;
                box-shadow: 2px 4px 5px rgba(0,0,0,.6);
                border: 2px solid cadetblue;
                border-radius: 50%;
                display: block;
                opacity: .4;
                cursor: pointer;
                transition: all 1s ease-in-out;
                margin: 0px auto;
            }
            
            .image-card:hover .card img, .image-card1:hover .card img, .image-card2:hover .card img, .image-card3:hover .card img{
                width: 80px;
                height: 80px;
                margin: 0px auto;
                opacity: 1;
            }
            .image-card:hover #show_image, .image-card1:hover #show_image1, .image-card2:hover #show_image2, .image-card3:hover #show_image3{
                opacity: 1;
                display: block;
                transition: all 3s ease-in-out;
                animation: samplee 4s cubic-bezier(0.075, 0.82, 0.165, 1);
                cursor: pointer;
            }
            @keyframes samplee{
                from{
                    height: 30px;
                    overflow: hidden;
                    opacity: .2;
                }
                to{
                    height: max-content;
                    overflow: hidden;
                    opacity: 1;
                }
            }
            #show_image, #show_image1, #show_image2, #show_image3{
                display: none;
                transition: all 3s ease-in-out 0s;
                cursor: pointer;
            }
            .head_name{
                display: block;
                position: relative;
                overflow: hidden;
                font-size: 1.5em;
                margin: 10px;
            }


            @media screen and (max-width: 900px){
                .txt_show{
                    width: auto;
                    display: block;
                    overflow: hidden;
                    margin: 0px auto;
                    align-content: center;
                    justify-content: center;
                    margin: 7%;
                    text-align: center;
                }
                .about{
                    display: block;
                    padding: 0px;
                    margin: 20px;
                    position: relative;
                    overflow: hidden;
                }
                .showcase li{
                    width: 100%;
                }
                .port_mem{
                    padding: 0px;
                    margin: 20px;
                }
                .image-card:hover .card img, .image-card1:hover .card img, .image-card2:hover .card img, .image-card3:hover .card img{
                    width: 200px;
                    height: 200px;
                    margin: 0px auto;
                    opacity: 1;
                }
                .card img{
                    transition: all 1s ease-in-out 0s;
                }
                .card, img{
                    display: block;
                    padding: 0px;
                    margin: 0px auto;
                    width: 100%;
                    overflow: hidden;
                    position: relative;
                    transition: all 1s ease-in-out 0s;
                }
                .image-card, .image-card1, .image-card2, .image-card3{
                    width: 91%;
                    height: auto;
                    display: block;
                    float: none;
                    clear: both;
                    text-align: center;
                    align-content: center;
                    justify-content: center;
                    margin-top: 20px;
                    margin-bottom: 20px;
                    padding: 20px;
                }
            }
        </style>

		<div class="port_mem">
            <div class="head_2" id="3">OUR CLIENT</div>
            <div class="card">
                <div class="image-card">
                    <span class="card"><img src="images/IMG-20200508-WA0008.jpg"></span>
                    <span class="head_name"> Ademide </span>
                    <section id="show_image">
                        <span class="head_post">Client</span><br>
                        <span class="head_post">ayoademide@gmail.com</span><br><br>
                        <span class="head_post">I tought i will always depend on Napa but whhen they introduce me to their solar promo  that when i realize that all i need in my house instead of waiting for nepa</span>
                    </section>
                </div>
                <div class="image-card1">
                    <span class="card"><img src="images/IMG-20200508-WA0010.jpg"></span>
                    <span class="head_name">Princelee</span>
                    <section id="show_image1">
                        <span class="head_post">Client</span><br>
                        <span class="head_post">princelee@gmail.com</span><br><br>
                        <span class="head_post">I received my utility bill in the mail and was shocked to see my bill was double what I usually pay. They came to me and told me i should not border that they have an energy ligth which can power all my eletricity  house hold material. They are the best  </span>
                    </section>
                </div>
                <div class="image-card2">
                    <span class="card"><img src="images/IMG-20200508-WA0014.jpg"></span>
                    <span class="head_name">ozi</span>
                    <section id="show_image2">
                        <span class="head_post">Client</span><br>
                        <span class="head_post">ozi@yahoo.com</span><br><br>
                        <span class="head_post">Thanks to StarNet for been a there for me when i need them  </span>
                    </section>
                </div>
                <div class="image-card3">
                    <span class="card"><img src="images/IMG-20200508-WA0015.jpg"></span>
                    <span class="head_name">oluwatemilade </span>
                    <section id="show_image3">
                        <span class="head_post">Client</span><br>
                        <span class="head_post">demilola@yahoo.com</span><br><br>
                        <span class="head_post">I was looking for a solar company online and i meet with them on facebook so i decided to patner with them. They made my house trun to magic  now i use light 24/7  apart from Napa . </span>
                    </section>
                </div>
            </div>
        </div>
        <div class="head_2" id="4">OUR LOCATION </div>
		<div class="top_footer">
			<div class="top_footer_cont" style="background-color: #3cc357; text-align: left;">
				<div class="top_footer_cont_txt" style="height: 580px; padding: 0px;">
                    <div class="container_visit_address">
                            <span class="container_visit_address_top" style="font-weight: bolder; font-size: 20px;" id="5">Contact Us</span>
                    </div>
					<div class="form_email" style="color: white;">
                        <div class="footer_form">
                            <form action="samp.php" method="post">
                                <label for="name">Name:</label>
                                <input type="text" name="name" placeholder="Enter_your_name" style="float: right; background-color: #ffffff; width: 100%; box-shadow: 2px 4px 5px rgba(0,0,0,.6);"><br>
                                <label for="email">Email:</label>
                                <input type="email" name="mail" placeholder="Enter_your_email"style="float: right; background-color: #ffffff; width: 100%; box-shadow: 2px 4px 5px rgba(0,0,0,.6);"><br>
                                <label for="Comment">Comment:</label>
                                <textarea placeholder="Enter_your_comment" size="50" style="float: right; width: 100%; height: 180px; box-shadow: 2px 4px 5px rgba(0,0,0,.6);" name="message"></textarea><br><br>
                                <div class="footer_submit" style="overflow: visible;display: block;">
                                    <input type="submit" value="Send" name="send_email" style="margin: 20px 0px;">
                                </div>
                            </form>
                            <div class="results">
                                <?php
                                    echo  $results;
                                ?>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
			<div class="top_footer_cont_img">
				<div class="top_footer_img" id="7">
					<!-- google map-->
                   
                
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7924.89085276453!2d3.4027415760738653!3d6.715371405448034!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sng!4v1590948664851!5m2!1sen!2sng" class="iframe_map" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0" style="width: 100%; height: 100%;"></iframe>
				</div>
			</div>
		</div>

    <!--footer-->
    <div id="footer" style="background-position: fixed;">
            <div class="footer">
                <div class="footer_cont">
                    <div class="footer_head">
                        <div class="footer_si">
                            <span class="sub_txt">Subscribe To Our Newsletter</span>
                            <div class="footer_form">
                                <form name="newsletter_form" action="newsletter.php" method="POST">
                                    <input type="text" name="newsletter" placeholder="Enter your email" >
                                    <div class="footer_submit">
                                        <input type="submit" name="news_go" value="subscribe">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- social btn-->
                        <div class="social">
                            <div class="social_btn">                        
                               <!--whatsapp social btn-->
                            <div class="social_btn_logo">
                               <span class="soc_btn soc_btn_1 naa"> 
                               
                                 <a href="https://wa.me/2348148122327?text=Hello%20i%20will%20to%20buy%20some%20of%20your%20product%20my%20name%20is%20__________________" target="_blank"> 
                             <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="enable-background:new 0, 0, 24, 24;" class="whatsapp_logo" fill='#000000'>   
                                 <path d="M19.077,4.928C17.191,3.041,14.683,2.001,12.011,2c-5.506,0-9.987,4.479-9.989,9.985 c-0.001,1.76,0.459,3.478,1.333,4.992L2,22l5.233-1.237c1.459,0.796,3.101,1.215,4.773,1.216h0.004 c5.505,0,9.986-4.48,9.989-9.985C22.001,9.325,20.963,6.816,19.077,4.928z M16.898,15.554c-0.208,0.583-1.227,1.145-1.685,1.186 c-0.458,0.042-0.887,0.207-2.995-0.624c-2.537-1-4.139-3.601-4.263-3.767c-0.125-0.167-1.019-1.353-1.019-2.581 S7.581,7.936,7.81,7.687c0.229-0.25,0.499-0.312,0.666-0.312c0.166,0,0.333,0,0.478,0.006c0.178,0.007,0.375,0.016,0.562,0.431 c0.222,0.494,0.707,1.728,0.769,1.853s0.104,0.271,0.021,0.437s-0.125,0.27-0.249,0.416c-0.125,0.146-0.262,0.325-0.374,0.437 c-0.125,0.124-0.255,0.26-0.11,0.509c0.146,0.25,0.646,1.067,1.388,1.728c0.954,0.85,1.757,1.113,2.007,1.239 c0.25,0.125,0.395,0.104,0.541-0.063c0.146-0.166,0.624-0.728,0.79-0.978s0.333-0.208,0.562-0.125s1.456,0.687,1.705,0.812 c0.25,0.125,0.416,0.187,0.478,0.291C17.106,14.471,17.106,14.971,16.898,15.554z"></path></svg>
                               </a>
                                   
                                </span>
                                </div>
                               <style>
                                   .whatsapp_logo path{
                                       fill: white;
                                   }
                                   .soc_btn_1:hover svg path ,.whatsapp_logo:hover path{
                                       fill: green;
                                   }
                                   
                                </style>
                                <!--facebook social btn-->
                                <div class="social_btn_logo">
                                    <span class="soc_btn">
                                        <a href="https://web.facebook.com/StarNet-108876750839742" target="_blank">
                                            <!-- facebook-->
                                            <svg version="1.1" id="Layer_1" x="0px" y="0px"
                                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                <path d="M288,192v-38.1c0-17.2,3.8-25.9,30.5-25.9H352V64h-55.9c-68.5,0-91.1,31.4-91.1,85.3V192h-45v64h45v192h83V256h56.4l7.6-64
                                                    H288z"></path>
                                            </svg>
                                        </a>
                                    </span>
                                </div>
                                <!--twitter social btn-->
                                <div class="social_btn_logo">
                                    <span class="soc_btn"><a href="#" target="_blank">
                                        <!-- twitter-->
                                        <svg version="1.1" id="Layer_1" x="0px" y="0px"
                                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <path d="M492,109.5c-17.4,7.7-36,12.9-55.6,15.3c20-12,35.4-31,42.6-53.6c-18.7,11.1-39.4,19.2-61.5,23.5
                                            C399.8,75.8,374.6,64,346.8,64c-53.5,0-96.8,43.4-96.8,96.9c0,7.6,0.8,15,2.5,22.1c-80.5-4-151.9-42.6-199.6-101.3
                                            c-8.3,14.3-13.1,31-13.1,48.7c0,33.6,17.2,63.3,43.2,80.7C67,210.7,52,206.3,39,199c0,0.4,0,0.8,0,1.2c0,47,33.4,86.1,77.7,95
                                            c-8.1,2.2-16.7,3.4-25.5,3.4c-6.2,0-12.3-0.6-18.2-1.8c12.3,38.5,48.1,66.5,90.5,67.3c-33.1,26-74.9,41.5-120.3,41.5
                                            c-7.8,0-15.5-0.5-23.1-1.4C62.8,432,113.7,448,168.3,448C346.6,448,444,300.3,444,172.2c0-4.2-0.1-8.4-0.3-12.5
                                            C462.6,146,479,129,492,109.5z"></path>
                                        </svg></a>
                                    </span>
                                </div>
                                <!--instagram social btn-->
                                <div class="social_btn_logo">
                                    <span class="soc_btn">
                                       <a href="#" target="_blank">
                                        <!-- instagram-->
                                        <svg version="1.1" id="Layer_1"  x="0px" y="0px"
                                        viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                        <g>
                                            <circle cx="256" cy="255.833" r="80"></circle>
                                        </g>
                                        <g>
                                            <path d="M177.805,176.887c21.154-21.154,49.279-32.929,79.195-32.929s58.041,11.837,79.195,32.991
                                            c13.422,13.422,23.011,29.551,28.232,47.551H448.5v-113c0-26.51-20.49-47-47-47h-288c-26.51,0-49,20.49-49,47v113h85.072
                                                C154.794,206.5,164.383,190.309,177.805,176.887z M416.5,147.7c0,7.069-5.73,12.8-12.8,12.8h-38.4c-7.069,0-12.8-5.73-12.8-12.8
                                                    v-38.4c0-7.069,5.73-12.8,12.8-12.8h38.4c7.069,0,12.8,5.73,12.8,12.8V147.7z"></path>
                                                <path d="M336.195,335.279c-21.154,21.154-49.279,32.679-79.195,32.679s-58.041-11.462-79.195-32.616
                                                c-21.115-21.115-32.759-49.842-32.803-78.842H64.5v143c0,26.51,22.49,49,49,49h288c26.51,0,47-22.49,47-49v-143h-79.502
                                                C368.955,285.5,357.311,314.164,336.195,335.279z" ></path>
                                            </g>
                                        </svg></a>
                                    </span>
                                </div>
                                <!--pinterest social btn-->
                                <div class="social_btn_logo">
                                    <span class="soc_btn"><a href="#" target="_blank">
                                        <!-- pinterest-->
                                        <svg version="1.1" id="Layer_1"  x="0px" y="0px"
                                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <g>
                                                <path d="M256,32C132.3,32,32,132.3,32,256c0,91.7,55.2,170.5,134.1,205.2c-0.6-15.6-0.1-34.4,3.9-51.4
                                                    c4.3-18.2,28.8-122.1,28.8-122.1s-7.2-14.3-7.2-35.4c0-33.2,19.2-58,43.2-58c20.4,0,30.2,15.3,30.2,33.6
                                                    c0,20.5-13.1,51.1-19.8,79.5c-5.6,23.8,11.9,43.1,35.4,43.1c42.4,0,71-54.5,71-119.1c0-49.1-33.1-85.8-93.2-85.8
                                                    c-67.9,0-110.3,50.7-110.3,107.3c0,19.5,5.8,33.3,14.8,43.9c4.1,4.9,4.7,6.9,3.2,12.5c-1.1,4.1-3.5,14-4.6,18
                                                    c-1.5,5.7-6.1,7.7-11.2,5.6c-31.3-12.8-45.9-47-45.9-85.6c0-63.6,53.7-139.9,160.1-139.9c85.5,0,141.8,61.9,141.8,128.3
                                                    c0,87.9-48.9,153.5-120.9,153.5c-24.2,0-46.9-13.1-54.7-27.9c0,0-13,51.6-15.8,61.6c-4.7,17.3-14,34.5-22.5,48
                                                    c20.1,5.9,41.4,9.2,63.5,9.2c123.7,0,224-100.3,224-224C480,132.3,379.7,32,256,32z" ></path>
                                            </g>
                                        </svg></a>
                                    </span>
                                </div>
                                <!--youtube btn-->
                                <div class="social_btn_logo">
                                    <span class="soc_btn youtube">
                                       <a href="https:www.youtube.com/watch?v=k6veDQ6nWUQ" target="_blank">
                                        <!-- youtube-->
                                        <svg version="1.1" x="0px" y="0px"
                                                width="512px" height="512px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <g>
                                                <path d="M508.6,148.8c0-45-33.1-81.2-74-81.2C379.2,65,322.7,64,265,64c-3,0-6,0-9,0s-6,0-9,0c-57.6,0-114.2,1-169.6,3.6
                                                    c-40.8,0-73.9,36.4-73.9,81.4C1,184.6-0.1,220.2,0,255.8C-0.1,291.4,1,327,3.4,362.7c0,45,33.1,81.5,73.9,81.5
                                                    c58.2,2.7,117.9,3.9,178.6,3.8c60.8,0.2,120.3-1,178.6-3.8c40.9,0,74-36.5,74-81.5c2.4-35.7,3.5-71.3,3.4-107
                                                    C512.1,220.1,511,184.5,508.6,148.8z M207,353.9V157.4l145,98.2L207,353.9z"></path>
                                            </g>
                                        </svg></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
              </div>
            
             <div class="sec_footer">
                    <div class="sec_foot_cont">
                        <div class="sec_foot_left w3">
                            <span class="sec_foot_head">Suppport us</span>
                            <span class="sec_foot_txt bold">Help us transform lives through the power of science and science education.</span><br><br>
                            
                            </div>
                        <div class="sec_foot_left w3">
                            <span class="sec_foot_head">Visit</span>
                            <span class="sec_foot_txt_2 bold"><a href="#7">Map</a></span>
                            <span class="sec_foot_txt_2 bold"><a href="#">Plan a Vists</a></span>
                           
                        </div>
                        <div class="sec_foot_left w3">
                            <span class="sec_foot_head">Explore</span>
                            <span class="sec_foot_txt_2 bold"><a href="#">Home</a></span>
                            <span class="sec_foot_txt_2 bold"><a href="#1">About Us</a></span>
                            <span class="sec_foot_txt_2 bold"><a href="#2">Our Services </a></span>
                            <span class="sec_foot_txt_2 bold"><a href="#3">Our Client</a></span>
                            <span class="sec_foot_txt_2 bold"><a href="#4">Our Location</a></span>
                            <span class="sec_foot_txt_2 bold"><a href="#5">Contact Us</a></span>
                        </div>
                        <div class="sec_foot_left w3">
                            <span class="sec_foot_head">Location + hours</span>
                            <span class="sec_foot_txt bold">5,Surulere Close Magboro <br>Ogun State<br> Nigeria.</span><br>   
                    <div class="col-md-5">
                    <h4 class="text-light">Have Something To Discuss?</h4>
                    <p class="text-muted">Send me an Email</p>
                    <a href="mailto: oguntusiopeyemi@gmail.com" class="mail-link"><span>oguntusiopeyemi@gmail.com</span></a>
                    <p class="text-muted">Or give me a Call</p>
                    <a href="tel: +2347084244204" class="mail-link"><span>+234 7084244204</span></a>
                </div>

                           
                           
                           
                                </div>
                    </div>
                </div>
            </div>
            <div class="copy">
                <div class="copy_cont">
                    <span class="copy_sign">&copy;</span>
                    <span class="copy_txt">  StarNetlith, Nigeria.</span>
                    <span class="copy_txt_2"><a href="https://starnetslite.netlify.com">design  byStarNet Group</a></span>
                </div>
            </div>
     
            

            
        
    </body>
    
    <script rel="javascript" src="js/main.js"></script>
    <script rel="javascript" src="js/styles_ran.js"></script>
    <script>
         var x = document.getElementById("popup_cont");
            function close_pop(){
                if(x.style.display == "block"){
                    x.style.display = "none";
                }else{
                    x.style.display = "block";
                }
            }

    </script>
</html>