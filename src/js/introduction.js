function receive_get_data(param) {
  let result = null,
    tmp = [];
  var items = window.location.search.substring(1).split("&");
  for (let i = 0; i < items.length; i++) {
    tmp = items[i].split("=");
    if (tmp[0] === param) result = decodeURIComponent(tmp[1]);
  }
  return result;
}
const intro_hello = document.querySelector(".intro_hello");
const intro_career = document.querySelector(".intro_career");
const intro_news = document.querySelector(".intro_news");
const intro_location = document.querySelector(".intro_location");
let receive_cr = receive_get_data("cr");
switch (receive_cr) {
  case "hello":
    intro_hello.classList.add("intro_active");
    break;
  case "career":
    intro_career.classList.add("intro_active");
    break;
  case "news":
    intro_news.classList.add("intro_active");
    break;
  case "location":
    intro_location.classList.add("intro_active");
    break;
  default:
    intro_hello.classList.add("intro_active");
    break;
}
const year_2021 = document.querySelector(".year_2021");
const year_2020 = document.querySelector(".year_2020");

const header = document.querySelector(".header");
const year_txt = document.querySelector(".introduction_career_year");
const introduction_career_container = document.querySelector(
  ".introduction_career_container"
);

window.addEventListener("scroll", () => {
  if (
    document.documentElement.scrollTop >
    introduction_career_container.offsetTop - header.clientHeight - 50
  ) {
    year_txt.innerText = 2022;
    year_txt.classList.add("year_fixed");
  } else {
    year_txt.classList.remove("year_fixed");
  }
  if (
    document.documentElement.scrollTop >
    year_2021.offsetTop - header.clientHeight - 70
  ) {
    year_txt.innerText = 2021;
  }
  if (
    document.documentElement.scrollTop >
    year_2020.offsetTop - header.clientHeight - 100
  ) {
    year_txt.innerText = 2020;
  }
});
