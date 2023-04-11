// Enter The Wired Click
let enter = document.querySelector("div.enterwired");

enter.addEventListener('click', () => {
    document.querySelector("div.enterwired").remove();

    document.querySelector("source").src="./img/video/back-vid-2.mp4";
})