window.onscroll = function () {
  scrollFunction();
  console.log(document.body.scrollTop);
};
console.log("test");
function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document
      .querySelectorAll(".header_nav ul li")
      .forEach((item) => (item.style.color = "black"));
    document.querySelector(".header").style.height = "100px";
    document.querySelector(".header").style.backgroundColor = "white";
    document.querySelector(".header").style.position = "fixed";
    document
      .querySelectorAll(".header_back a")
      .forEach((item) => (item.style.color = "black"));
    document.querySelector(".header_company_name span:last-child").style.color =
      "black";
    document.querySelector(".btn_toTop").classList.toggle("if_scroll");
  } else {
    document
      .querySelectorAll(".header_nav ul li")
      .forEach((item) => (item.style.color = "white"));
    document.querySelector(".header").style.height = "";
    document.querySelector(".header").style.backgroundColor = "";
    document.querySelector(".header").style.position = "relative";
    document
      .querySelectorAll(".header_back a")
      .forEach((item) => (item.style.color = "white"));
    document.querySelector(".header_company_name span:last-child").style.color =
      "white";
    document.querySelector(".btn_toTop").classList.toggle("if_scroll");
  }
}
