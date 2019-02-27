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

    <div class="container" style="width:900px;">
    <h3 align="center">Ajax Image Insert Update Delete in Mysql Database using PHP</h3>
    <br />
    <div id="loader" class="progress">
       <div class="indeterminate"></div>
    </div>
    <br />
    <div align="right">
     <button type="button" name="add" id="add" class="btn btn-success">Add</button>
    </div>
    <br />
    <div id="image_data">

    </div>
   </div>
  </body>
 </html>

 <div id="imageModal" class="modal fade" role="dialog">
   <div class="modal-content">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Add Image</h4>
         <div class="row">
           <form id="image_form" method="post" enctype="multipart/form-data">
            <p><label>Select Image</label>
            <input type="file" name="image" id="image" /></p><br />
            <input type="hidden" name="action" id="action" value="insert" />
            <input type="hidden" name="image_id" id="image_id" />
            <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
           </form>
          </div>
          <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
     </div>
 </div>

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
    //navbar change on scroll
    window.onscroll = () => {
      const nav = document.querySelector('#navbar');
      if(this.scrollY <= 10) nav.className = ''; else nav.className = 'scroll';
    };

    //Image Gallery AJAX
    $(document).ready(function(){

     fetch_data();

     $('.modal').modal({
         dismissible: true
     });

     $(document).ajaxStop(function(){
        $("#loader").hide();
     });
     $(document).ajaxStart(function(){
         $("#loader").show();
     });

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
