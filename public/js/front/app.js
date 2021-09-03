// Single Products Pictures
const singleProductPictures = document.querySelectorAll(
  ".singleProduct__pictures img"
);
const singleProductImg = document.querySelector(".singleProduct__img img");

singleProductPictures.forEach((i) => {
  i.addEventListener("click", () => {
    singleProductImg.src = i.src;
  });
});

// Tabs Toggle

const tabs = document.querySelectorAll(".tabs li");
const tabsContent = document.querySelectorAll(".tabsContent");

function tabsToggle(tabID, tabActive) {
  tabsContent.forEach((i) => {
    i.style.display = "none";
  });
  document.getElementById(tabID).style.display = "block";
  tabs.forEach((i) => {
    i.classList.remove("active");
    tabActive.classList.add("active");
  });
}

if (document.getElementById("defaultTabOpen")) {
  document.getElementById("defaultTabOpen").click();
} else {
  console.log("Tabs Working");
}

// Initialize WOW
new WOW().init();

// Initialize Slick Sliders
$(document).ready(function () {
  if ($(".banner__slider")) {
    $(".banner__slider").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 2000,
      dots: true,
    });
  }
  if ($(".default__slider")) {
    $(".default__slider").slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
    });
  }
  if ($(".joinCommunity__slider")) {
    $(".joinCommunity__slider").slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 2000,
    });
  }
});
