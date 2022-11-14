
// Logic for hamburger menu to appear for smartphones and tablets

const hamburger = document.querySelector(".hamburger-menu");
const list = document.querySelector(".hamburger-list");

hamburger.addEventListener("click",()=>{
    hamburger.classList.toggle("active");
    list.classList.toggle("active");
})
