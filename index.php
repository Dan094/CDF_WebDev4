<!DOCTYPE html>

<?php $url = dirname($_SERVER['PHP_SELF']);?>


<html>

<head>
    <link href="./css/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <script>
    var url = "<?php echo $url?>"
    </script>


    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>

<body style="overflow-x: hidden;">
    <nav style="position:fixed; z-index:3; height:7rem; padding:1rem;" class="navColor" id="nav">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo logo">
                <img src="./images/logo.png" width="200px" style="position: absolute; z-index: 100;">
            </a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="">Home</a></li>
                <li><a href="Index.php#section5">Services</a></li>
                <li><a href="Index.php#section3">News</a></li>
                <li><a href="collapsible.html">Contact</a></li>
                <li><a class="waves-effect waves-light btn-large waves-effect waves-light btn modal-trigger"
                        data-target="modal1" class="btn modal-trigger" id="loginBtn"
                        style="background-color: rgb(181, 211, 61);font-weight:bold;">Login</a></li>
            </ul>
        </div>


    </nav>

    <div id="modal1" class="modal">

        <div class="modal-content"
            style="display:flex; justify-content: center; align-items: center; flex-direction: column;">
            <h4>login</h4>
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <form id="loginForm">

                                <label for="email">Email</label>
                                <input id="email" type="email" class="validate">

                                <input id="password" type="password" class="validate">
                                <label for="password">Password</label>
                                <button class="submit modal-close waves-effect waves-green btn-flat">Submit</button>
                            </form>

                        </div>
                        <div class="row">

                        </div>

                        <a class="waves-effect waves-light btn-large waves-effect waves-light btn modal-trigger"
                            data-target="modal1"
                            style="background-color: rgb(181, 211, 61);font-weight:bold; width:100%;">Login</a>
                    </div>
                </form>
            </div>
        </div>




    </div>

    <div class="sec heroimg" id="section1" style="height:100vh;">
        <div class="container">
            <ul class="sidenav" id="mobile-demo">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">Javascript</a></li>
                <li><a href="mobile.html">Mobile</a></li>
            </ul>
            <div class=" heroimg">
                <div class="row">
                    <div class="col xl5 l5 m8 s10" style="margin-top:15rem; z-index:-20;">
                        <h1 class="bigtxt lax" data-lax-translate-y="0 0, 400 -400" data-lax-opacity="0 1, 100 0">Your
                            adventure of a lifetime awaits!</h1>
                    </div>
                    <div class="col l10 m5">
                        <a class="lax waves-effect waves-light btn-large"
                            style="background-color: #F3A530;font-weight:bold;" data-aos="fade-in"
                            data-lax-opacity="0 1, 100 0">Donate</a>
                    </div>
                    <div class="col l10 row scrollsection  lax" style="width:100%; position: relative;"
                        data-lax-translate-y="0, 0, 400, -400">
                        <a href="#section3" class="scrollbox">
                            <h5>Scroll Down</h5>
                            <img src="images/scroll_btn.svg" width="100px">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="aboutus">
        <div class="aboutusCont">
            <img src="images/logo.png" width="300px">
            <div class="aboutustxt">
                Our mission is to conserve and inspire the conservation of Canada’s wildlife and habitats for the use
                and enjoyment of all. We believe this is important to you too.
            </div>
            <img src="images/aboutusimg.png" width="200px" style="margin-top:10rem;">
        </div>
        <div class="aboutusEmpty"></div>
    </div>





    <div class="sec" id="section3" style="height:auto;">

        <div class="col s12">
            <div class="row">
                <div class="col s12" style="margin: 2rem; height:auto;">
                    <h2 class="secTitle" style="margin:5rem 0rem 0rem 0rem; padding:0rem; text-align: center;">News &
                        Events</h2>
                </div>


                <div class="col s12">
                    <div class="addCont col s3" data-aos="fade-left" data-aos-duration="1000"
                        style="display: flex; justify-content: center; align-items: center; flex-direction: column; margin-top: 50px;">

                       
                    </div>

                    <div id="contentModal" class="modal">

                        <div class="modal-content">
                            <h4>Add Content</h4>
                            <form id="contentForm">
                                <input type="text" name="title" placeholder="Title">
                                <input type="text" name="content" placeholder="Content">
                                <input type="text" name="img" placeholder="Image URL">
                                <input type="text" name="link" placeholder="Link">
                                <button class="submit modal-close waves-effect waves-green btn-flat">Submit</button>
                            </form>
                        </div>

                    </div>
                    <div class="sliderCont  ">
                        
                    <div class="post col s9" data-aos="fade-left" data-aos-delay="0">
                            <div
                                style="width:100%; height:100%; background-color:#B9B9B9; padding:10rem; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                                <a href="#"><img src="images/createBtn.svg" width="100px"></a>
                                <h4 style="color:#928F8F; font-size:2rem;text-align: center; width:12rem;"> Post a News
                                    or Event</h4>
                            </div>

                        </div>


                        <div class="post hoverable" data-aos="fade-left" data-aos-delay="500">
                            <img src="images/delete_24px.svg" width="10px" class="deleteBtn">
                            <img class="img" src="images/post_img.jpg" width="100%">
                            <div class="desp">
                                <h5 class="title">GLOBAL NEWS: 10TH NORTH ATLANTIC RIGHT WHALE CALF OF THE
                                    SEASON SPOTTED OFF SOUTH CAROLINA</h5>
                                <p>We are celebrating the arrival of a new baby North Atlantic whale after it
                                    was spotted with ...</p>
                                <a href="#" class="readmoreBtn">
                                    <h6>Read More</h6>
                                </a>
                            </div>
                        </div>

                        <div class="post hoverable" data-aos="fade-left" data-aos-delay="1000">
                            <img src="images/delete_24px.svg" width="10px" class="deleteBtn">
                            <img class="img" src="images/post_img.jpg" width="100%">
                            <div class="desp">
                                <h5 class="title">GLOBAL NEWS: 10TH NORTH ATLANTIC RIGHT WHALE CALF OF THE
                                    SEASON SPOTTED OFF SOUTH CAROLINA</h5>
                                <p>We are celebrating the arrival of a new baby North Atlantic whale after it
                                    was spotted with ...</p>
                                <a href="#" class="readmoreBtn">
                                    <h6>Read More</h6>
                                </a>
                            </div>
                        </div>

                        <div class="post hoverable" data-aos="fade-left" data-aos-delay="1500">
                            <img src="images/delete_24px.svg" width="10px" class="deleteBtn">
                            <img class="img" src="images/post_img.jpg" width="100%">
                            <div class="desp">
                                <h5 class="title">GLOBAL NEWS: 10TH NORTH ATLANTIC RIGHT WHALE CALF OF THE
                                    SEASON SPOTTED OFF SOUTH CAROLINA</h5>
                                <p>We are celebrating the arrival of a new baby North Atlantic whale after it
                                    was spotted with ...</p>
                                <a href="#" class="readmoreBtn">
                                    <h6>Read More</h6>
                                </a>
                            </div>
                        </div>

                        <div class="post hoverable" data-aos="fade-left" data-aos-delay="2000">
                            <img src="images/delete_24px.svg" width="10px" class="deleteBtn">
                            <img class="img" src="images/post_img.jpg" width="100%">
                            <div class="desp">
                                <h5 class="title">GLOBAL NEWS: 10TH NORTH ATLANTIC RIGHT WHALE CALF OF THE
                                    SEASON SPOTTED OFF SOUTH CAROLINA</h5>
                                <p>We are celebrating the arrival of a new baby North Atlantic whale after it
                                    was spotted with ...</p>
                                <a href="#" class="readmoreBtn">
                                    <h6>Read More</h6>
                                </a>
                            </div>
                        </div>

                        <div class="post hoverable" data-aos="fade-left" data-aos-delay="2500">
                            <img src="images/delete_24px.svg" width="10px" class="deleteBtn">
                            <img class="img" src="images/post_img.jpg" width="100%">
                            <div class="desp">
                                <h5 class="title">GLOBAL NEWS: 10TH NORTH ATLANTIC RIGHT WHALE CALF OF THE
                                    SEASON SPOTTED OFF SOUTH CAROLINA</h5>
                                <p>We are celebrating the arrival of a new baby North Atlantic whale after it
                                    was spotted with ...</p>
                                <a href="#" class="readmoreBtn">
                                    <h6>Read More</h6>
                                </a>
                            </div>
                        </div>

                        <div class="post hoverable" data-aos="fade-left" data-aos-delay="3000">
                            <img src="images/delete_24px.svg" width="10px" class="deleteBtn">
                            <img class="img" src="images/post_img.jpg" width="100%">
                            <div class="desp">
                                <h5 class="title">GLOBAL NEWS: 10TH NORTH ATLANTIC RIGHT WHALE CALF OF THE
                                    SEASON SPOTTED OFF SOUTH CAROLINA</h5>
                                <p>We are celebrating the arrival of a new baby North Atlantic whale after it
                                    was spotted with ...</p>
                                <a href="#" class="readmoreBtn">
                                    <h6>Read More</h6>
                                </a>
                            </div>
                        </div>

                        <div class="post hoverable" data-aos="fade-left" data-aos-delay="3500">
                            <img src="images/delete_24px.svg" width="10px" class="deleteBtn">
                            <img class="img" src="images/post_img.jpg" width="100%">

                            <div class="desp">
                                <h5 class="title">GLOBAL NEWS: 10TH NORTH ATLANTIC RIGHT WHALE CALF OF THE
                                    SEASON SPOTTED OFF SOUTH CAROLINA</h5>
                                <p>We are celebrating the arrival of a new baby North Atlantic whale after it
                                    was spotted with ...</p>
                                <a href="#" class="readmoreBtn">
                                    <h6>Read More</h6>
                                </a>
                            </div>
                        </div>

                        <div class="post hoverable" class="post hoverable" data-aos="fade-left" data-aos-delay="3500">
                            <img src="images/delete_24px.svg" width="10px" class="deleteBtn">
                            <img class="img" src="images/post_img.jpg" width="100%">
                            <div class="desp">
                                <h5 class="title">GLOBAL NEWS: 10TH NORTH ATLANTIC RIGHT WHALE CALF OF THE
                                    SEASON SPOTTED OFF SOUTH CAROLINA</h5>
                                <p>We are celebrating the arrival of a new baby North Atlantic whale after it
                                    was spotted with ...</p>
                                <a href="#" class="readmoreBtn">
                                    <h6>Read More</h6>
                                </a>
                            </div>

                        </div>

                    </div>





                </div>
            </div>




            <div class="col"></div>
        </div>

    </div>


    </div>





    </div>

    <div class="sec" style="height:150vh; width:100vw; background-color: #A8B66E; border:none;" id="section4">
        <div class="col s12" style="padding: 5rem 0rem 2rem; ">
            <h2 class="secTitle" style="margin:5rem 0rem 0rem 0rem; padding:0rem; text-align: center; color:white;"
                id="section5">What we do</h2>
        </div>
        <ul class="collapsible expandable" style="width:50vw; margin:0 auto; border:none;">
            <li class="active" data-aos="fade-in" data-aos-delay="100">
                <div class="collapsible-header" style="background-color:#434831; border:none; color:white;"><i
                        class="material-icons"><img src="images/badge1.svg" style="margin-left:-2rem;"></i>Lakes &
                    Rivers</div>
                <div class="collapsible-body"><span>With over two million lakes and rivers and 20 per cent of the
                        world’s freshwater, Canada has an incredible abundance of aquatic natural resources.
                        Canadians share a deep historical connection to freshwater; we rely on it for
                        transportation, for resources, for employment, for food and for recreation — swimming,
                        boating, fishing or simply admiring the scenery of a natural lake or wild river.</span>
                </div>
            </li>
            <li class="active" data-aos="fade-in" data-aos-delay="200">
                <div class="collapsible-header" style="background-color:#434831; border:none; color:white;"><i
                        class="material-icons"><img src="images/badge2.svg" style="margin-left:-2rem;"></i>Endangered
                    species & biodiversity </div>
                <div class="collapsible-body"><span>Canada is fortunate to be home to thousands of wildlife species
                        and the vast areas of land and water on which they depend. Unfortunately, many of these
                        species are in decline, due in part to human activities. There are currently more than 700
                        species of plants and animals at risk of being lost from Canada. There isn’t any one
                        culprit, but rather a combination of factors that are leading to species decline.</span>
                </div>
            </li>
            <li class="active" data-aos="fade-in" data-aos-delay="300">
                <div class="collapsible-header" style="background-color:#434831; border:none; color:white;"><i
                        class="material-icons"><img src="images/badge3.svg" style="margin-left:-2rem;"></i>Fields &
                    Forests</div>
                <div class="collapsible-body"><span>Canadian forests and fields have an important role to play in
                        supporting our communities, our economy and our wildlife. Loss and alteration of habitat,
                        toxic pollutants such the widespread use of pesticides and herbicides and climate change
                        threaten Canada’s wildlife in our forests and farmlands.</span></div>
            </li>
            <li class="active" data-aos="fade-in" ddata-aos-delay="400">
                <div class="collapsible-header" style="background-color:#434831; border:none; color:white;"><i
                        class="material-icons"><img src="images/badge4.svg" style="margin-left:-2rem;"></i>Coasts &
                    Oceans</div>
                <div class="collapsible-body"><span>Canada is the second largest country in the world; the land area
                        of our country is almost 10 million Km2. What is often forgotten is that our country also
                        includes more than seven million Km2 of ocean and more than 200,000 Km of coastline!

                        We utilize the ocean for many purposes</span></div>
            </li>
            <li class="active" data-aos="fade-in" data-aos-delay="500">
                <div class="collapsible-header" style="background-color:#434831; border:none; color:white;"><i
                        class="material-icons"><img src="images/badge5.svg" style="margin-left:-2rem;"></i>Education
                </div>
                <div class="collapsible-body"><span>CWF is dedicated to ensuring that our wildlife and natural
                        spaces remain a treasured part of our country. The challenge is inspiring that same
                        conservation ethic in new generations of Canadians to ensure they develop their own passion
                        for wildlife conservation. At CWF, we develop education programs to help connect Canadians
                        to nature. We encourage Canadians of all ages to participate in individual conservation
                        actions and to experience, enjoy and value nature. In an ever-increasing urban society, the
                        greatest challenge is developing those connections to our natural world. Education and
                        experiential learning are key pillars in programming designed to meet this challenge.</span>
                </div>
            </li>
            <li class="active" data-aos="fade-in" data-aos-duration="600">
                <div class="collapsible-header" style="background-color:#434831; border:none; color:white;"><i
                        class="material-icons"><img src="images/badge6.svg" style="margin-left:-2rem;"></i>Connect
                    with Nature</div>
                <div class="collapsible-body"><span>Canadians are spending most of their lives indoors – reports
                        indicate as much as 90 per cent of our time is spent inside. Both doctors and scientists
                        confirm that a lack of exposure to nature actually contributes to human illness. Our
                        disconnection from nearby nature is a prime reason for the declining state of human health,
                        both mental and physical.</span></div>
            </li>


        </ul>
    </div>


    <div class="sec" id="section5">
        <div class="container">
            <div class="row">
                <div class="col s12">

                    <div class="col s6" style="margin-top: 5%;">
                        <h3><b> Contact Us </b></h3>
                        <p>
                            Our regular business hours are Monday to Friday, 8am to 5pm ET.
                            <br><br>
                            You can contact Customer Service:
                            <br>
                            Monday to Friday, 8am to 8pm
                            <br>
                            Saturday, 10am to 1pm ET
                            <br>
                            If you call outside of business hours, please leave a message and we will get back to
                            you.

                            <br><br>
                            <b>Phone:</b> 1 - 800 - 563 - 9453
                            <br>
                            <b> Email: </b> info@cwf-fcf.org
                            <br>
                            <b>Mail:</b> Canadian Wildlife Federation (Ottawa - Head Office)

                            <br>
                            c/o Customer Service
                            <br>
                            350 Michael Cowpland Drive
                            <br>
                            Kanata, Ontario K2M 2W1

                        </p>
                        <br><br>
                        <p>Thank you for your interest in Canadian Wildlife.
                            We would love to hear from you!
                        </p>
                        <br><br>

                        <div class="row">
                            <div class="row">
                                <div class="input-field col s10">
                                    <input id="first_name" type="text" class="validate">
                                    <label for="first_name">First Name</label>
                                </div>

                            </div>

                            <div class="row">



                                <div class="input-field col s10">
                                    <input id="last_name" type="text" class="validate">
                                    <label for="last_name">Last Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s10">
                                    <input id="email" type="email" class="validate">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s10">
                                    <label for="email">Message</label>
                                    <textarea id="w3mission" rows="50" cols="50">

                                                                                                       </textarea>


                                </div>



                                <div class="col l10 m5">
                                    <a class="waves-effect waves-light btn-large"
                                        style="background-color: #F3A530;font-weight:bold;">Submit</a>
                                </div>
                                </form>
                            </div>
                        </div>


                    </div>

                    <div class="col s6">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="500" height="450" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=350%20Michael%20Cowpland%20Dr%2C%20Glen%20Cairn%20-%20Kanata%20South%20Business%20Park%2C%20Ottawa%2C%20ON%20K2M%202W1%2C%20Canada&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                <a href="https://www.whatismyip-address.com">whatismyip-address.com</a>
                            </div>
                            <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 450px;
                                width: 500px;
                                margin-top: 28%;
                                box-shadow: 1px 5px 10px rgba(0, 0, 0, 0.2);
                            }

                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 450px;
                                width: 500px;
                            }
                            </style>
                        </div>
                        <br><br>
                        <h5><b>To Update Your Contact Information:</b></h5>
                        <p>
                            If you are a current supporter of CWF and have changed your address/personal information
                            or would like to update your pre-authorized payments, please sign in and visit the
                            Supporter Centre, email <a href="mailto:info@cwf-fcf.org" target="_blank">
                                info@cwf-fcf.org </a> or call us 1 - 800 - 563 - 9453
                            <br><br>
                            For information on the Foundation, please visit: <a
                                href="https://cwf-fcf.org/en/foundation/"
                                target="_blank">CanadianWildlifeFoundation.org.</a>
                        </p>
                        <br><br>
                        <h5><b>Connect With Us!</b></h5>
                        <div class="col s12">
                            <a href="https://www.facebook.com/CanadianWildlifeFederation/" target="_blank">
                                <img src="images/icon_fb.png" width="40px" style="margin: 10px">
                            </a>
                            <a href="https://twitter.com/cwf_fcf" target="_blank">
                                <img src="images/icon_tw.png" width="40px" style="margin: 10px">
                            </a>
                            <a href="https://www.instagram.com/cwf_fcf/" target="_blank">
                                <img src="images/icon_ig.png" width="40px" style="margin: 10px">
                            </a>
                            <a href="https://www.pinterest.ca/cwf/" target="_blank">
                                <img src="images/icon_p.png" width="40px" style="margin: 10px">
                            </a>
                            <a href="https://www.youtube.com/user/CanadianWildlifeFed" target="_blank">
                                <img src="images/icon_yt.png" width="40px" style="margin: 10px">
                            </a>
                            <a href="http://blog.cwf-fcf.org/index.php/en/" target="_blank">
                                <img src="images/icon_wp.png" width="40px" style="margin: 10px">
                            </a>

                        </div>
                    </div>




                    <div class="row">

                    </div>

                </div>
            </div>
        </div>


        <footer class="page-footer" style="background-color: #1F1A1D;">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <img src="images/logo.png" width="60%">
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">External Websites</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">www.WHO.com</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">www.Natgeo.ca</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">www.jjbean.ca</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">www.jackyleeinfo.ca</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2020 Canadian Wildlife Federation. All Rights Reserved.
                    <a class="grey-text text-lighten-4 right" href="#!">www.instagram/csf.com</a>
                </div>
            </div>
        </footer>

        <script src="laxxx/lib/lax.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="<?php echo $url?>/js/php.js"></script>

        <script>
        window.onload = function() {
            lax.setup() // init

            const updateLax = () => {
                lax.update(window.scrollY)
                window.requestAnimationFrame(updateLax)
            }

            window.requestAnimationFrame(updateLax)
        }
        </script>

        <script>
        AOS.init({
            duration: 1000,
        });
        </script>
</body>

</html>