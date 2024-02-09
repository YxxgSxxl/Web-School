let body = document.querySelector("body");
let carre = document.querySelector(".carre");

let x = 0;
let y = 0;

let deltaX = 0;
let deltaY = 0;


body.addEventListener('keydown', keyPress);

// Fonction pour savoir quel touche est pressée
function keyPress(e) {
    e.stopPropagation();
    // console.log(e.key); // Debug
    switch (e.key) {
        case 'ArrowUp':
            // carre.style.transform=carre.style.transform = `translate(200px)`;
            y -= +100;
            console.log("up");
            break;
        case 'ArrowRight':
            x += 100;
            console.log("right");
            break;
        case 'ArrowDown':
            y -= -100;
            console.log("down");
            break;
            case 'ArrowLeft':
            x -= 100;
            console.log("left");
            break;
        case 'm':
            body.remove();
        default:
    }
    carre.style.transform = `translate(${x}px, ${y}px)`;
}

// Fonction pour permettre de déplacer la boite
// function deplacer(deltaX, deltaY) {
//     deltaX.stopPropagation();
//     deltaY.stopPropagation();

//     console.log(deltaX.key);

//     switch (deltaX.key) {
//         case 'ArrowRight':
//             x = 100;
//             console.log("right");
//         case 'ArrowLeft':
//             x = -100;
//     }

//     switch (deltaY.key) {

//     }

//     carre.style.transform = `translate(${x}px, ${y}px)`;
// }

// deplacer();