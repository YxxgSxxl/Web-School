// INIT
let slideL = document.querySelector("div.carousel-slideL svg");
let slideR = document.querySelector("div.carousel-slideR svg");

document.querySelector(".page_show").classList.add("show");
// document.querySelector("footer").classList.add("show");

// Slide carousel RIGHT button
let R = 0;
const carouselElements = document.querySelector(".carousel-elements");

slideR.addEventListener('click', () => {
    console.log(carouselElements.offsetWidth);
    console.log(R)
    if (Math.abs(R) > (carouselElements.scrollWidth - carouselElements.offsetWidth)) {
        return;
    }
    R -= 300;
    carouselElements.style.transform = "translateX(" + R.toString() + "px)";
})

// Slide carousel LEFT button

slideL.addEventListener('click', () => {
    console.log(carouselElements.offsetWidth);
    console.log(R)
    if (Math.abs(R) <= 0) {
        return;
    }
    R += 300;
    carouselElements.style.transform = "translateX(" + R.toString() + "px)";
})