// google translator


function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en', layout:
      google.translate.TranslateElement.InlineLayout.HORIZONTAL, autoDisplay:
      false, includedLanguages: 'bn,hi,en', gaTrack: true, gaId: 'YOUR_API_KEY'
  }, 'google_translate_element');
}



// search bar js  

function searchfunction() {
  document.getElementById('search-form').style.display = 'block';
}
function searchfunctionclose() {
  document.getElementById('search-form').style.display = 'none';
}


// banner slider

var responsiveSlider = function () {

  var slider = document.getElementById("slider");
  var sliderWidth = slider.offsetWidth;
  var slideList = document.getElementById("slideWrap");
  var count = 1;
  var items = slideList.querySelectorAll("li").length;
  var prev = document.getElementById("prev");
  var next = document.getElementById("next");

  window.addEventListener('resize', function () {
    sliderWidth = slider.offsetWidth;
  });

  var prevSlide = function () {
    if (count > 1) {
      count = count - 2;
      slideList.style.left = "-" + count * sliderWidth + "px";
      count++;
    }
    else if (count = 1) {
      count = items - 1;
      slideList.style.left = "-" + count * sliderWidth + "px";
      count++;
    }
  };

  var nextSlide = function () {
    if (count < items) {
      slideList.style.left = "-" + count * sliderWidth + "px";
      count++;
    }
    else if (count = items) {
      slideList.style.left = "0px";
      count = 1;
    }
  };

  next.addEventListener("click", function () {
    nextSlide();
  });

  prev.addEventListener("click", function () {
    prevSlide();
  });

  setInterval(function () {
    nextSlide()
  }, 8000);

};

window.onload = function () {
  responsiveSlider();
}



// footer slider
var swiper = new Swiper(".slide-content-filter", {
  slidesPerView: 6,
  spaceBetween: 16,
  loop: true,
  autoplay: false,
  autoplayTimeout: 1000, //2000ms = 2s;
  autoplayHoverPause: true,
  centerSlide: 'true',
  fade: 'true',
  grabCursor: 'true',
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    520: {
      slidesPerView: 3,
    },
    1250: {
      slidesPerView: 6,
    },
  },
});

//// Mobile menu

function openNav() {
  document.getElementById("mySidepanel").style.left = "0";
}
function closeNav() {
  document.getElementById("mySidepanel").style.left = "-100%";
}


//// Sticky navbar


// window.onscroll = function () { stickynavbar() };

var navbar = document.getElementById("header");
var sticky = navbar.offsetTop;

window.addEventListener("scroll", function() {
  if (window.scrollY > 24) {
    stickynavbar()
  }
});
window.addEventListener("scroll", function() {
  if (window.scrollY < 24) {
    removenavbar()
  }
});

function stickynavbar() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
function removenavbar() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.remove("sticky")
  } else {
    navbar.classList.add("sticky");
  }
}


//visitor Counter

var counterContainer = document.querySelector(".website-counter");
var resetButton = document.querySelector("#reset");
var visitCount = localStorage.getItem("page_view");

// Check if page_view entry is present
if (visitCount) {
  visitCount = Number(visitCount) + 1;
  localStorage.setItem("page_view", visitCount);
} else {
  visitCount = 1;
  localStorage.setItem("page_view", 1);
}
counterContainer.innerHTML = visitCount;

// Adding onClick event listener
resetButton.addEventListener("click", () => {
  visitCount = 1;
  localStorage.setItem("page_view", 1);
  counterContainer.innerHTML = visitCount;
});
