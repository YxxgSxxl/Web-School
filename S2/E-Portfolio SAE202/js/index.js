// Enter The Wired Click
let enter = document.querySelector("div.enterwired");

enter.addEventListener('click', () => {
    document.querySelector("div.enterwired").remove();

    document.querySelector(".back-vid").innerHTML = 
    `<div class="back-vid">
        <video autoplay muted plays-inline class="back-vid">
            <source src="./img/video/back-vid-2.mp4" type="video/mp4">
        </video>
    </div>`;
})