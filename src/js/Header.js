window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document
      .querySelectorAll(".header_nav ul li a p")
      .forEach((item) => (item.style.color = "black"));
    document.querySelector(".header").style.height = "120px";
    document.querySelector(".header").style.backgroundColor = "white";

    document
      .querySelectorAll(".header_back a")
      .forEach((item) => (item.style.color = "black"));
    document.querySelector(".header_company_name span:last-child").style.color =
      "black";
    document.querySelector(".btn_toTop").classList.add("if_scroll");
    if (document.querySelector(".Home_movebtn")) {
      document.querySelector(".Home_movebtn").style.opacity = 1;
    }
  } else {
    document
      .querySelectorAll(".header_nav ul li a p")
      .forEach((item) => (item.style.color = "white"));
    document.querySelector(".header").style.height = "";
    document.querySelector(".header").style.backgroundColor = "";

    document
      .querySelectorAll(".header_back a")
      .forEach((item) => (item.style.color = "white"));
    document.querySelector(".header_company_name span:last-child").style.color =
      "white";
    document.querySelector(".btn_toTop").classList.remove("if_scroll");
    if (document.querySelector(".Home_movebtn")) {
      document.querySelector(".Home_movebtn").style.opacity = 0;
    }
  }
}
document.querySelector(".btn_toTop").addEventListener("click", () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
});

//hamburger
const hamburger = document.querySelector(".hamburger");

console.log("headertest");
function hamclick() {
  console.log(this);
}

hamburger.addEventListener("click", hamclick);
