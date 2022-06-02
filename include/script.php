  <!-- Swiper JS -->
  <script src="js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      slidesPerColumn: 2,
      spaceBetween: 12,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });


   /* $('.like-btn').on('click', function() {
        $(this).toggleClass('is-active');       
      });*/
  </script>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  } 
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 1500); // Change image every 2 seconds
}
</script>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");
var menu = document.getElementById("menuz");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
    menu.style.display = "none";
  } else {
    mybutton.style.display = "none";
    menu.style.display = "block";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

</script>




<script>

  $('.like-btn').on('click', function() {
        $(this).toggleClass('is-active'); 

          var like_pro_id = this.id;
          var userid = $('#userid').val();

                      
                 $.ajax({
                   url: "like.php",
                   type: "POST",
                   data: {
                           like_pro_id: like_pro_id,
                           userid: userid
                                          
                         },
              cache: false,
              success: function(dataResult){
              var dataResult = JSON.parse(dataResult);
              if(dataResult.statusCode==200)
              {

                 $("#butsave").removeAttr("disabled");
                 $("#success").show();
                 $('#success').html('Liked successfully !');
                 alert("Liked");
                 
              }

              else if(dataResult.statusCode==201)
                    {
                           alert("You already liked !");
                    }
          
                    }
                  });

                    
    return true;

  });

  

      
  </script> 
    

