<?php
include "database_connection.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--CDN jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
    //AJAX search results
      function showResult(str) {
        if (str.length==0) {
          document.getElementById("livesearch").innerHTML="";
          document.getElementById("livesearch").style.border="0px";
          return;
        }
        if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
        } else {  // code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
          if (this.readyState==4 && this.status==200) {
            document.getElementById("livesearch").innerHTML=this.responseText;
          //  document.getElementById("livesearch").style.border="1px solid #A5ACB2";
            document.getElementById("livesearch").setAttribute("style", "background: #fff; border-radius:3px;padding:2%;");
          }
        }
        xmlhttp.open("GET","livesearch.php?q="+str,true);
        xmlhttp.send();
      }
    </script>
    <script>
    // ScrollSpy
    $(document).ready(function(){
        $('.scrollspy').scrollSpy();
      });

    // sidenav
    $(document).ready(function(){
      $('.sidenav').sidenav();
    });
    </script>
    <!--CDN Stylesheet-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--My Stylesheet-->
    <link rel="stylesheet" href="css/styles.css">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Unica+One|Thasadith" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>ParkSmith</title>
  </head>

  <body id="search" class="scrollspy">
    <!-- Navbar -->
    <div class="navbar-fixed">
      <nav class="transparent z-depth-0" id="navbar">
        <div class="container">
          <div class="nav-wrapper">
            <a href="#!" class="brand-logo white-text">ParkSmith</a>
            <!--mobile navbar icon-->
            <a href="#" data-target="mobile-nav" class="sidenav-trigger">
              <i class="material-icons white-text">menu</i></a>
            <!--navbar links-->
            <ul class="right hide-on-med-and-down">
              <li><a class="white-text" href="#search">Search</a></li>
              <li><a class="white-text" href="#parks">Parks</a></li>
              <li><a class="white-text" href="#amenities">Amenities</a></li>
              <li><a class="white-text" href="#contact">Let's Chat</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <!--MOBILE navbar links-->
    <ul class="sidenav" id="mobile-nav">
      <li><a href="#search">Search</a></li>
      <li><a href="#parks">Parks</a></li>
      <li><a href="#amenities">Amenities</a></li>
      <li><a href="#contact">Let's Chat</a></li>
    </ul>

    <!--Mast-->
    <div id="search" class = "mntn center white-text" style="margin-top:-20%;">
      <div class="container">
        <div class="section">
         <h4 style="margin-top:40%;">Find your next adventure</h4>
         <div class="input-field">
          <form action="yellowstone.php" onsubmit="handle">
            <div class="row">
              <div class="col s1">
               <i class="material-icons">search</i>
             </div>
             <div class="col s11">
               <input type="text" class="white grey-text autocomplete" size="30" onkeyup="showResult(this.value)" placeholder="Yellowstone, Acadia, Olympic etc...">
              <div id="livesearch"></div>
             </form>
            </div>
          </div>
         </div>
       <h6>Visiting America's wonders just got easier</h6>
      </div>
      </div>
    </div>


  <!--National Park Cards-->
  <div id="parks" class="container">
    <section class="section">
      <h3 class="center">National Parks</h3>
      <hr><br>
      <div class="row">
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image hide-on-med-only">
              <img src="img/home/sequoia.jpg">
            </div>
            <div class="card-content">
              <p>Trees bigger than you can imagine! Good luck hugging the largest tree species in the world.
              Immerse yourself in a sequoia wonderland!</p>
            </div>
            <div class="card-action">
              <a href="sequoia.html">Sequioa National Park</a>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card">
            <div class="card-image hide-on-med-only">
              <img src="img/home/yellowstone.jpg">
            </div>
            <div class="card-content">
              <p>Located in Wyoming and spanning into Montana, Yellowstone is full of wonders such as
              waterfalls, gysers, mountains, bison and more!</p>
            </div>
            <div class="card-action">
              <a href="yellowstone.php">Yellowstone National Park</a>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card">
            <div class="card-image hide-on-med-only">
              <img src="img/home/glacier.JPG">
            </div>
            <div class="card-content">
              <p>Ever seen glacier water? The bluest of blues, directly from melting glaciers. Even safe to drink, so they say. Explore all that Glacier
                Nationl Park has to offer!</p>
            </div>
            <div class="card-action">
              <a href="glacier.html">Glacier National Park</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image hide-on-med-only">
              <img src="img/home/smokies.jpg">
            </div>
            <div class="card-content">
              <p>Follow the Blue Ridge Parkway and you'll end up in the Smokey Mountains. Beautiful in all seasons of the year. And say
              hi to smokey the bear if you see him!</p>
            </div>
            <div class="card-action">
              <a href="yellowstone.php">The Great Smokey Mountains</a>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card">
            <div class="card-image hide-on-med-only">
              <img src="img/home/yosemite.jpg">
            </div>
            <div class="card-content">
              <p>Famed for its giant, ancient sequoia trees, and for Tunnel View, the iconic vista of towering Bridalveil
                Fall and the granite cliffs of El Capitan and Half Dome.</p>
            </div>
            <div class="card-action">
              <a href="yellowstone.php">Yosemite National Park</a>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card">
            <div class="card-image hide-on-med-only">
              <img src="img/home/olympic.jpg">
            </div>
            <div class="card-content">
              <p>In the Pacific Northwest, the park sprawls across several different ecosystems,
                from the dramatic peaks of the Olympic Mountains to old-growth forests. </p>
            </div>
            <div class="card-action">
              <a href="yellowstone.php">Olympic National Park</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image hide-on-med-only">
              <img src="img/home/grand_canyon.gif">
            </div>
            <div class="card-content">
              <p>home to much of the immense Grand Canyon, with its layered bands of red rock
                revealing millions of years of geological history.</p>
            </div>
            <div class="card-action">
              <a href="yellowstone.php">Grand Canyon National Park</a>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card">
            <div class="card-image hide-on-med-only">
              <img src="img/home/death_valley.jpg">
            </div>
            <div class="card-content">
              <p>It’s known for Titus Canyon, with a ghost town and colorful rocks,
                and Badwater Basin’s salt flats, North America's lowest point.</p>
            </div>
            <div class="card-action">
              <a href="yellowstone.php">Death Valley National Park</a>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card">
            <div class="card-image hide-on-med-only">
              <img src="img/home/rainier.jpg">
            </div>
            <div class="card-content">
              <p>Atop 6,400-ft.-high Sunrise, the highest point in the park reachable by car, visitors can admire
                Rainier and other nearby volcanoes, including Mount Adams.</p>
            </div>
            <div class="card-action">
              <a href="yellowstone.php">Mount Rainier National Park</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


    <!--Amenities-->
    <section id="amenities" class="section section-icons grey lighten-4 center">
      <div class="container">
        <div class="row">
          <div class="col s12 m4">
              <i class="material-icons large lime-text">hotel</i>
              <h4 class="amenity-head">Hotels</h4>
              <p>Discover the greatest home away from home for your park's stay.</p>
          </div>

          <div class="col s12 m4">
              <i class="material-icons large lime-text">local_dining</i>
              <h4 class="amenity-head">Good Eats</h4>
              <p>Re-energize after a day of adventure! Hear what the foodies have to say about go-to's of the woods.</p>
          </div>

          <div class="col s12 m4">
              <i class="material-icons large lime-text">rowing</i>
              <h4 class="amenity-head">Activities</h4>
              <p>Hiking? Kayaking? Climbing? Find out all of the endeavours you can take in your park!</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Form -->
    <section id="contact" class="section section-contact scrollspy">
      <div class="container">
        <div class="row">
          <div class="col s12 m12">
            <div class="card-panel grey lighten-4">
              <h5>Questions, comments or an adventure worth sharing?</h5>
              <h6>We want to hear about it!</h6>

              <form name="contactForm" method="POST" action="contact.php">
                <div class="input-field">
                  <input type="text" name="name" placeholder="Name">
                </div>
                <div class="input-field">
                  <input type="email" name="email" placeholder="Email" class="validate">
                </div>
                <div class="input-field">
                  <textarea class="materialize-textarea" name="message" placeholder="Enter Message"></textarea>
                </div>
                <input type="submit" name="submit" value="Submit" class="btn cyan accent-4">
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Footer -->
    <footer class="page-footer cyan accent-4">
      <div class="footer-copyright cyan accent-4">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Other Things</h5>
              <h6>
                <a class="grey-text text-lighten-3" href="#!">Privacy and Terms</a>   |
                <a class="grey-text text-lighten-3" href="careers.html">Careers</a>    |
                <a class="grey-text text-lighten-3" href="news.html">News</a>
              </h6>
            </div>
            <div class="col l4 offset-l2 s12">
              <p>ParkSmith &copy; 2018</p>
              <p>Designed & Coded by Rachel Waag</p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!--CDN Script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
    // Search on Enter
    function handle(e){
      e.preventDefault();
    }

    //navbar change on scroll
    window.onscroll = () => {
      const nav = document.querySelector('#navbar');
      if(this.scrollY <= 10) nav.className = ''; else nav.className = 'scroll';
    };
    </script>

  </body>
</html>
