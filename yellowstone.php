<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--CDN jQuery-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/croppie.min.js"></script>
    <link rel="stylesheet" href="css/croppie.css" />
    <script>
    // scrollSpy
    $(document).ready(function(){
        $('.scrollspy').scrollSpy();
      });
      // sidenav
      $(document).ready(function(){
        $('.sidenav').sidenav();

        //google map modals
        $(function () {
            //initialize all modals
            $('.modal').modal();
            //click on trigger
            $('.modal-trigger').modal(open);
        });
      });
    </script>
    <!--CDN Stylesheet-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--My Stylesheet-->
    <link rel="stylesheet" href="css/styles.css">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Unica+One|Thasadith" rel="stylesheet">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>ParkSmith</title>
  </head>

  <body class="scrollspy">
    <!-- Navbar -->
    <div class="navbar-fixed">
      <nav class="transparent z-depth-0" id="navbar">
        <div class="container">
          <div class="nav-wrapper">
            <a href="index.php" class="brand-logo white-text">ParkSmith</a>
            <!--mobile navbar icon-->
            <a href="#" data-target="mobile-nav" class="sidenav-trigger">
              <i class="material-icons white-text">menu</i></a>
            <!--navbar links-->
            <ul class="right hide-on-med-and-down">
              <li><a class="white-text" href="#hikes">Hikes</a></li>
              <li><a class="white-text" href="#hotels">Places to Stay</a></li>
              <li><a class="white-text" href="#eats">Good Eats</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <!--MOBILE navbar links-->
    <ul class="sidenav" id="mobile-nav">
      <li><a href="#hikes">Hikes</a></li>
      <li><a href="#hotels">Places to Stay</a></li>
      <li><a href="#eats">Good Eats</a></li>
    </ul>

    <!--Slider Images-->
    <section class="slider">
      <ul class="slides black">
        <li>
          <img src="img/yellowstone/yellowsonte_mast.jpg">
          <!-- image 1 -->
          <div class="caption center-align">
            <section id="search" class="section section-search center white-text scrollspy">
              <div class="container">
                <div class="row">
                  <div class="col s12">
                    <h1>Yellowstone</h1>
                    <h4>National Park</h4>
                    <h6>Wyoming / Montana, USA</h6>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </li>
      </ul>
    </section>

  <!--National Park Cards-->
  <div id="hikes" class="container">
    <section class="section">
      <h3 class="center">Yellowstone Hikes</h3>
      <hr><br>
      <div class="row">
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image hide-on-med-only">
              <img src="img/yellowstone/washburn.jpg">
            </div>
            <div class="card-content">
              <p>6.4 Miles Round-Trip; This trail takes you to the lookout tower on the summit of Mount Washburn. If you're lucky, you may even run
              into a family of longhorn sheep!</p>
            </div>
            <div class="card-action">
              <a href="#">Mount Washburn Trail</a>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card">
            <div class="card-image hide-on-med-only">
              <img src="img/yellowstone/uncle-tom.jpg">
            </div>
            <div class="card-content">
              <p>Trailhead Location: Canyon Area – South Rim; The trail descends 500 feet toward the base of the Lower
                Falls along a metal staircase attached to the rim of the canyon.</p>
            </div>
            <div class="card-action">
              <a href="#">Uncle Tom's Trail</a>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card">
            <div class="card-image hide-on-med-only">
              <img src="img/yellowstone/elephant_back.jpg">
            </div>
            <div class="card-content">
              <p>2.8 Miles Round-Trip; This is a popular day hike that has spectacular views across much of Yellowstone Lake and toward the eastern edge of the park.</p>
            </div>
            <div class="card-action">
              <a href="#">Elephant Back Loop Trail</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image hide-on-med-only">
              <img src="img/yellowstone/obs_trail.jpg">
            </div>
            <div class="card-content">
              <p>1.1 Mile Round-Trip; Observation Point gives you a birds-eye view of the many thermal features and geysers that surround the historic Old Faithful Inn.</p>
            </div>
            <div class="card-action">
              <a href="#">Observation Point Trail</a>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card">
            <div class="card-image hide-on-med-only">
              <img src="img/yellowstone/mystic-falls.jpg">
            </div>
            <div class="card-content">
              <p>2.5 Miles as a Loop; Mystic Falls is located along the Little Firehole River, which begins high on the Madison Plateau near the western edge of the park.</p>
            </div>
            <div class="card-action">
              <a href="#">Mystic Falls Trail</a>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card">
            <div class="card-image hide-on-med-only">
              <img src="img/yellowstone/fairy-falls.jpg">
            </div>
            <div class="card-content">
              <p>5.0 Miles Round-Trip; Along the trail there are exceptional views of the largest and most
                color hot spring in Yellowstone, Grand Prismatic Spring.</p>
            </div>
            <div class="card-action">
              <a href="#">Fairy Falls Trail</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


  <!--Places to Stay-->
  <section id="hotels" class="section section-icons grey lighten-4 center">
    <div class="container">
      <h3 class="center">Places to Stay</h3>
      <hr><br>
      <div class="row">
        <div class="col s12 m4">
            <h4 class="amenity-head">Gardiner, Montana</h4>

              <!-- Map Modals -->
              <div>
                <!-- Modal Trigger -->
                <a style="cursor:pointer" data-target="modal1" class="modal-trigger">Yellowstone Village Inn</a>
                <!-- Modal Structure -->
                <div id="modal1" class="modal" style="background-color:white;">
                  <div class="modal-content">
                    <div class="mapouter">
                      <div class="gmap_canvas">
                        <iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=400&amp;hl=en&amp;q=1102%20Scott%20St%20W%2C%20Gardiner%2C%20MT%2059030+(Yellowstone%20Village%20Inn)&amp;ie=UTF8&amp;t=&amp;z=12&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                      </div>
                  </div>
                  <br>
                  <a style="margin-top:10px;margin-bottom:10px;" href="http://www.yellowstonevinn.com" target="_blank">Yellowstone Village Inn</a>
                </div>
              </div>
            </div>

            <!-- Map Modals -->
            <div>
              <!-- Modal Trigger -->
              <a style="cursor:pointer" data-target="modal2" class="modal-trigger">Absaroka Lodge</a>
              <!-- Modal Structure -->
              <div id="modal2" class="modal" style="background-color:white;">
                <div class="modal-content">
                  <div class="mapouter">
                      <iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=400&amp;hl=en&amp;q=310%20Scott%20St%20W%2C%20Gardiner%2C%20MT%2059030+(Absaroka%20Lodge)&amp;ie=UTF8&amp;t=&amp;z=12&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                    <br>
                    <a style="margin-top:10px;margin-bottom:10px;" href="https://www.yellowstonemotel.com/en-us" target="_blank">Absaroka Lodge</a>
                </div>
              </div>
            </div>

          <!-- Map Modals -->
          <div>
            <!-- Modal Trigger -->
            <a style="cursor:pointer" data-target="modal3" class="modal-trigger">Yellowstone River Motel</a>
            <!-- Modal Structure -->
            <div id="modal3" class="modal" style="background-color:white;">
              <div class="modal-content">
                <div class="mapouter">
                  <div class="gmap_canvas">
                    <iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=400&amp;hl=en&amp;q=14%20E%20Park%20St%2C%20Gardiner%2C%20MT%2059030+(Yellowstone%20River%20Motel)&amp;ie=UTF8&amp;t=&amp;z=12&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                  </div>
              </div>
              <br>
              <a style="margin-top:10px;margin-bottom:10px;" href="http://www.yellowstonerivermotel.com" target="_blank">Yellowstone River Motel</a>
            </div>
          </div>
        </div>

        <!-- Map Modals -->
        <div>
          <!-- Modal Trigger -->
          <a style="cursor:pointer" data-target="modal4" class="modal-trigger">Yellowstone Basin Inn</a>
          <!-- Modal Structure -->
          <div id="modal4" class="modal" style="background-color:white;">
            <div class="modal-content">
              <div class="mapouter">
                <div class="gmap_canvas">
                  <iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=400&amp;hl=en&amp;q=%204%20Maiden%20Basin%20Dr%2C%20Gardiner%2C%20MT%2059030+(Yellowstone%20Basin%20Inn)&amp;ie=UTF8&amp;t=&amp;z=12&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
            <br>
            <a style="margin-top:10px;margin-bottom:10px;" href="https://www.yellowstonebasininn.com" target="_blank">Yellowstone Basin Inn</a>
          </div>
        </div>
      </div>

      <!-- Map Modals -->
      <div>
        <!-- Modal Trigger -->
        <a style="cursor:pointer" data-target="modal5" class="modal-trigger">Park Hotel</a>
        <!-- Modal Structure -->
        <div id="modal5" class="modal" style="background-color:white;">
          <div class="modal-content">
            <div class="mapouter">
              <div class="gmap_canvas">
                <iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=400&amp;hl=en&amp;q=107%20Main%20St%2C%20Gardiner%2C%20MT%2059030+(Park%20Hotel)&amp;ie=UTF8&amp;t=&amp;z=12&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
              </div>
          </div>
          <br>
          <a style="margin-top:10px;margin-bottom:10px;" href="https://www.guestreservations.com/yellowstone-park-hotel/booking?gclid=EAIaIQobChMI06mblKfL4AIVV57ACh0Y6QMCEAAYBCAAEgLrIvD_BwE" target="_blank">Park Hotel</a>
        </div>
      </div>
    </div>

    <!-- Map Modals -->
    <div>
      <!-- Modal Trigger -->
      <a style="cursor:pointer" data-target="modal6" class="modal-trigger">Chico Hot Springs Resort & Day Spa</a>
      <!-- Modal Structure -->
      <div id="modal6" class="modal" style="background-color:white;">
        <div class="modal-content">
          <div class="mapouter">
            <div class="gmap_canvas">
              <iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=400&amp;hl=en&amp;q=163%20Chico%20Rd%2C%20Pray%2C%20MT%2059065+(Chico%20Hot%20Springs%20Resort%20%26%20Day%20Spa)&amp;ie=UTF8&amp;t=&amp;z=12&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
        <br>
        <a style="margin-top:10px;margin-bottom:10px;" href="http://www.chicohotsprings.com" target="_blank">Chico Hot Springs Resort & Day Spa</a>
      </div>
    </div>
  </div>
</div>

<div class="col s12 m4">
    <h4 class="amenity-head">Inside the Park</h4>

      <!-- Map Modals -->
      <div>
        <!-- Modal Trigger -->
        <a style="cursor:pointer" data-target="modal7" class="modal-trigger">Canyon Lodge and Cabins</a>
        <!-- Modal Structure -->
        <div id="modal7" class="modal" style="background-color:white;">
          <div class="modal-content">
            <div class="mapouter">
              <div class="gmap_canvas">
                <iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=400&amp;hl=en&amp;q=Yellowstone%20National%20Park%2C%2041%20Clover%20Ln%2C%20Yellowstone%20National%20Park%2C%20WY%2082190+(Canyon%20Lodge%20and%20Cabins)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
              </div>
          </div>
          <br>
          <a style="margin-top:10px;margin-bottom:10px;" href="https://www.yellowstonenationalparklodges.com/lodgings/cabin/canyon-lodge-cabins/" target="_blank">Canyon Lodge and Cabins</a>
        </div>
      </div>
    </div>

    <!-- Map Modals -->
    <div>
      <!-- Modal Trigger -->
      <a style="cursor:pointer" data-target="modal8" class="modal-trigger">Grant Village</a>
      <!-- Modal Structure -->
      <div id="modal8" class="modal" style="background-color:white;">
        <div class="modal-content">
          <div class="mapouter">
              <iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=400&amp;hl=en&amp;q=%20159%20Grant%20Campground%20Road%2C%20Yellowstone%20National%20Park%2C%20WY%2082190+(Grant%20Village%20Campground)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
            <br>
            <a style="margin-top:10px;margin-bottom:10px;" href="https://www.yellowstonenationalparklodges.com/lodgings/campground/grant-village-campground/" target="_blank">Grant Village</a>
        </div>
      </div>
    </div>

  <!-- Map Modals -->
  <div>
    <!-- Modal Trigger -->
    <a style="cursor:pointer" data-target="modal9" class="modal-trigger">Lake Yellowstone Hotel and Cabins</a>
    <!-- Modal Structure -->
    <div id="modal9" class="modal" style="background-color:white;">
      <div class="modal-content">
        <div class="mapouter">
          <div class="gmap_canvas">
            <iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=400&amp;hl=en&amp;q=Yellowstone%20National%20Park%2C%20459%20Lake%20Village%20Rd%2C%20Yellowstone%20National%20Park%2C%20WY%2082190+(Lake%20Yellowstone%20Hotel%20and%20Cabins)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          </div>
      </div>
      <br>
      <a style="margin-top:10px;margin-bottom:10px;" href="https://www.yellowstonenationalparklodges.com/lodgings/cabin/lake-yellowstone-hotel-cabins/" target="_blank">Lake Yellowstone Hotel and Cabins</a>
    </div>
  </div>
</div>

  <!-- Map Modals -->
  <div>
    <!-- Modal Trigger -->
    <a style="cursor:pointer" data-target="modal10" class="modal-trigger">Mammoth Hot Springs Hotel and Cabins</a>
    <!-- Modal Structure -->
    <div id="modal10" class="modal" style="background-color:white;">
      <div class="modal-content">
        <div class="mapouter">
          <div class="gmap_canvas">
            <iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=400&amp;hl=en&amp;q=Yellowstone%20National%20Park%2C%202%20Mammoth%20Hotel%20Avenue%2C%20Yellowstone%20National%20Park%2C%20WY%2082190+(Mammoth%20Hot%20Springs%20Hotel%20and%20Cabins)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          </div>
      </div>
      <br>
      <a style="margin-top:10px;margin-bottom:10px;" href="https://www.yellowstonenationalparklodges.com/lodgings/cabin/mammoth-hot-springs-hotel-cabins/" target="_blank">Mammoth Hot Springs Hotel and Cabins</a>
    </div>
  </div>
</div>

  <!-- Map Modals -->
  <div>
    <!-- Modal Trigger -->
    <a style="cursor:pointer" data-target="modal11" class="modal-trigger">Old Faithful Lodge Cabins</a>
    <!-- Modal Structure -->
    <div id="modal11" class="modal" style="background-color:white;">
      <div class="modal-content">
        <div class="mapouter">
          <div class="gmap_canvas">
            <iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=400&amp;hl=en&amp;q=Yellowstone%20National%20Park%2C%202051%20Snow%20Lodge%20Ave%2C%20Yellowstone%20National%20Park%2C%20WY%2082190+(Old%20Faithful%20Lodge%20Cabins)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          </div>
      </div>
      <br>
      <a style="margin-top:10px;margin-bottom:10px;" href="https://www.yellowstonenationalparklodges.com/lodgings/cabin/old-faithful-lodge-cabins/" target="_blank">Old Faithful Lodge Cabins</a>
    </div>
  </div>
</div>
</div>


        <div class="col s12 m4">
            <h4 class="amenity-head">Airbnb</h4>
            <p><a href="https://www.airbnb.com/a/Yellowstone-National-Park--WY?af=&c=.pi0.pk61993100134_320510206301_c_27257566561&sem_position=1t1&sem_target=kwd-27257566561&location_of_interest=&location_physical=9011767&gclid=EAIaIQobChMI-ufx5qbh3wIViEsNCh0tqAJEEAAYASAAEgLLc_D_BwE" target="_blank">Rent out an apartment, cottage or eclectic home for your stay.</a></p>
        </div>
      </div>
      <br><br>
      <div class="mapouter">
        <div class="gmap_canvas">
          <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Yellowstone%20national%20park&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
          </iframe>
        </div>
    </div>
    </div>
  </section>

    <!-- Good Eats -->
    <section id="eats" class="section section-contact scrollspy">
      <div class="container">
        <h3 class="center">Where's the food?</h3>
        <hr><br>
        <h6>Besides your best bet of packing a lunch to go and picnicing on the trails...</h6>
        <div class="row">
          <div class="col s12 m12">
            <div class="card horizontal">
              <div class="card-image hide-on-med-and-down">
                <img src="img/yellowstone/huckleberry_ice-cream.jpg">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h3 class="amenity-head">Huckleberry Ice Cream</h3>
                  <p>You'll find this in near every store. Huckleberry is a big deal in Yellowstone and you definitely should try it!</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col s12 m12">
            <div class="card horizontal">
              <div class="card-image hide-on-med-and-down">
                <img src="img/yellowstone/bitch-creek-ale.jpg">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h3 class="amenity-head">Alcohol</h3>
                  <p>The West knows a good brew. Yellowstone has many good beers from locals around Montana and Wyoming. Drink Responsibly!</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col s12 m12">
            <div class="card horizontal">
              <div class="card-image hide-on-med-and-down">
                <img src="img/yellowstone/old-fait-inn.jpg">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h3 class="amenity-head">The Old Faithful Inn</h3>
                  <p>No complaints on their breakfast,lunch and dinner buffets. You may also find yourself grabbing a drink upstairs with a great view of Old Faithful.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col s12 m12">
            <div class="card horizontal">
              <div class="card-image hide-on-med-and-down">
                <img src="img/yellowstone/las-palmitas.jpg">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h3 class="amenity-head">Las Palmitas</h3>
                  <p>Hippie Taco bus? Count me in! Catch yourself at this whimsical place if hunger strikes near West Yellowstone, MT.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col s12 m12">
            <div class="card horizontal">
              <div class="card-image hide-on-med-and-down">
                <img src="img/yellowstone/two-bit.jpg">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h3 class="amenity-head">Two Bit Saloon</h3>
                  <p>Named the best bar in Gardiner by the locals, they've got meals, deals and even slots. AND they're open late.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col s12 m12">
            <div class="card horizontal">
              <div class="card-image hide-on-med-and-down">
                <img src="img/yellowstone/iron_horse.jpg">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h3 class="amenity-head">Iron Horse</h3>
                  <p>Another Gardiner favorite and you can enjoy your drink and meal on the deck overlooking the river.</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>


    <!-- Image Gallery -->
      <section id="images" class="section section-contact scrollspy">
       <div class="container" style="max-width:70%;">
          <h3 align="center">Image Gallery</h3>
          <br />
          <div id="loader" class="progress">
             <div class="indeterminate"></div>
          </div>
          <br />
          <div align="right">
           <button type="button" name="add" id="add" class="btn cyan accent-4">Add</button>
          </div>
          <br />
          <div id="image_data">
        </div>
      </div>

      <div id="imageModal" class="modal fade" role="dialog">
        <div class="modal-content">
              <h4 class="modal-title">Add Image</h4>
              <div class="row">
                <form id="image_form" method="post" enctype="multipart/form-data">
                 <p><label>Select Image</label>
                 <input type="file" name="image" id="image" /></p><br />
                 <input type="hidden" name="action" id="action" value="insert" />
                 <input type="hidden" name="image_id" id="image_id" />
                 <input type="submit" name="insert" id="insert" value="Insert" class="btn cyan accent-4" />
                </form>
               </div>
               <div class="modal-footer">
                <button type="button" class="btn grey lighten-2 grey-text modal-close" data-dismiss="modal">Close</button>
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
    // Slider
    const slider = document.querySelector('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 600,
      transition: 500,
      interval: 4000
    });

    //navbar change on scroll
    window.onscroll = () => {
      const nav = document.querySelector('#navbar');
      if(this.scrollY <= 10) nav.className = ''; else nav.className = 'scroll';
    };

    //Image Gallery AJAX
    $(document).ready(function(){

     fetch_data();

    //activate modal
     $('.modal').modal({
         dismissible: true
     });

     //loader upon ajax request
     $(document).ajaxStop(function(){
        $("#loader").hide();
     });
     //loader hide when ajax is finished
     $(document).ajaxStart(function(){
         $("#loader").show();
     });

    //display images from database
     function fetch_data()
     {
      var action = "fetch";
      $.ajax({
       url:"action.php",
       method:"POST",
       data:{action:action},
       success:function(data)
       {
        $('#image_data').html(data);
       }
      })
     }

     //adds image
     $('#add').click(function(){
      $('#imageModal').modal('open');
      $('#image_form')[0].reset();
      $('.modal-title').text("Add Image");
      $('#image_id').val('');
      $('#action').val('insert');
      $('#insert').val("Insert");
     });
     $('#image_form').submit(function(event){
      event.preventDefault();
      var image_name = $('#image').val();
      if(image_name == '')
      {
       alert("Please Select Image");
       return false;
      }
      else
      {
       var extension = $('#image').val().split('.').pop().toLowerCase();
       if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
       {
        alert("Invalid Image File");
        $('#image').val('');
        return false;
       }
       else
       {
        $.ajax({
         url:"action.php",
         method:"POST",
         data:new FormData(this),
         contentType:false,
         processData:false,
         success:function(data)
         {
          fetch_data();
          $('#image_form')[0].reset();
          $('#imageModal').modal('close');
         }
        });
      }
    }
  });

  //delete image
   $(document).on('click', '.delete', function(){
        var image_id = $(this).attr("id");
        var action = "delete";
        if(confirm("Are you sure you want to remove this image from database?"))
        {
         $.ajax({
          url:"action.php",
          method:"POST",
          data:{image_id:image_id, action:action},
          success:function(data)
          {
           fetch_data();
          }
         })
        }
        else
        {
         return false;
        }
       });
    });
    </script>

    <!-- Google Map API Doc -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyRe2jKq2Qkm904gNMwb54UZ6WymJg4aI&callback=initMap">
    </script>

  </body>
</html>
