const range = document.querySelectorAll("input");
const value = document.querySelectorAll("span");
const basePageBtn = document.querySelector(".basePageBtn");
const armPageBtn = document.querySelector(".armPageBtn");
let url = window.location.href.split("/");

range.forEach((e) => {
  e.addEventListener("change", () => {
    let controlNumber = e.getAttribute("name").slice(-1);
    value[controlNumber - 1].innerText = e.value;
  });
});

url = url[url.length - 1];

if (url == "index.php" || url == "retriveBase.php") {
  basePageBtn.classList.add("active");
  armPageBtn.classList.remove("active");
  console.log("Base");
} else if (url == "arm.php" || url == "retriveArm.php") {
  armPageBtn.classList.add("active");
  basePageBtn.classList.remove("active");
  console.log("Arm");
} else {
  console.log(+65);
}
