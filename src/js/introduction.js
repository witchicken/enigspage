console.log("introtest");

function receive_get_data(param) {
  var result = null,
    tmp = [];
  var items = window.location.search.substring(1).split("&");
  for (var i = 0; i < items.length; i++) {
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
console.log(receive_cr);
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
