// document.querySelector("main section.accueil div.flex div svg").addEventListener("click", () => {
//     console.log("Magnitude 5");
// });

// document.querySelector("main section.accueil div.flex div svg").addEventListener("click", pouce)

// function pouce() {
//     console.log("pouce");
// }

// document.querySelector("h1").addEventListener("click", () => {
//     console.log("lolilol");
// })

// this.addEventListener("click", tuto)

// function tuto() {
//     console.log(this);
// }

function chaton() {
    console.log("Maouw");
}

// log sur l'agence
document.querySelector("h1").addEventListener("click", lagence);

function lagence() {
    console.log("mashallah");
}

// log avec stop propagation sur le span
document.querySelector("h1>span").addEventListener("click", pouce);

function pouce(event) {
    console.log("c ki la ki pu la");
    event.stopPropagation();
}

document.addEventListener("keydown", function(event){
    console.log(event.key);
})

// document.addEventListener("click", lol);

// function lol(e) {
//     e.target.remove();
// }

// let a = document.querySelector("section.exemple div.zoneExemple div.contenu div.flex.flex1 div div.barres div div");

// a.addEventListener("click", () => {
//     a.style.height="1000%";
// })

document.addEventListener("click", lol);

function lol(e) {
    e.target.style.height="100%";
}