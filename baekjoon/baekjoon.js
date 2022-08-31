let fs = require("fs");
const line = require("fs").readFileSync("/dev/stdin", "utf8");
let input = line.trim().split("\n");
function enigkim() {
  let sum = 0;

  input.forEach(function (item, index) {
    if (Number(item) < 40) {
      input[index] = 40;
    }
    sum += Number(input[index]);
  });
  return sum / 5;
}
console.log(enigkim());
