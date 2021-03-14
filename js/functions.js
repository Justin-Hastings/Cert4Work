
window.onscroll = function() {
  scrollFunction()
  stickyNavbarFunction()
};

//Scroll to top button ------------
//Get the button
var scrlTopButton = document.getElementById("scrollTopBtn");

// When the user scrolls down 20px from the top of the document, show the button


function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    scrlTopButton.style.display = "block";
  } else {
    scrlTopButton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function scrollTopFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

//-----------------------


// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var stickyNavbar = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function stickyNavbarFunction() {
  if (window.pageYOffset >= stickyNavbar) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}


//Locate us map SCRIPT -----------------
function initMap() {
  //set location
  var tropicsMarine = {lat: -16.93786, lng: 145.7653};
  //the map, centered at tropics marine
  var map = new google.maps.Map(
    document.getElementById('locateUsMap'), {zoom: 15, center: tropicsMarine});
  //the marker, positioned at tropics Marine
  var marker = new google.maps.Marker({position: tropicsMarine, map:map});
  }
