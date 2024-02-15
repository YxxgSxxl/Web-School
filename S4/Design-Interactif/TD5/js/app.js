// VARIABLES
var canvApp = document.getElementById("canvApp"); // Récupération du canvas avec son ID
var ctx = canvApp.getContext("2d"); // Définition du canva en contexte "2d"

// DEFINE Width and Height Values
var h = 600;
var w = 1200;
// APPLY Width and Height
canvApp.height = h;
canvApp.width = w;

let body = document.querySelector("body"); // Déclaration de la page
let cube = document.querySelector(".cube");

let x = 0;
let y = 0;

let xCube = 600;
let yCube = 500;

let vxCube = 1.2;
let vyCube = 1.2;

let deltaX = 0;
let deltaY = 0;

afficher();

function update() {
    x += 2;
    y += 2;
}

function afficher() {
    // Cube Canvas init
    ctx.clearRect(0, 0, w, h); // Efface le canvas avant de redessiner
    ctx.fillStyle = "blue";
    ctx.fillRect(xCube, yCube, 20, 20);
    ctx.moveTo(x, y);

    // requestAnimationFrame
    window.requestAnimationFrame(update);
}

// Récupération d'informations touches
body.addEventListener('keydown', keyPress);

// Fonction pour savoir quel touche est pressée
function keyPress(e) {
    e.preventDefault(); // Ajouté pour empêcher le comportement par défaut des touches (scroll, etc.)
    e.stopPropagation();
    // console.log(e.key); // Debug
    switch (e.key) {
        case 'ArrowUp':
            yCube -= 10 * vxCube; // Modification pour déplacer le cube sur le canvas
            console.log("up");
            break;
        case 'ArrowRight':
            xCube += 10;
            console.log("right");
            break;
        case 'ArrowDown':
            yCube += 10;
            console.log("down");
            break;
        case 'ArrowLeft':
            xCube -= 10;
            console.log("left");
            break;
        case 'm':
            body.remove();
        default:
            break;
    }
    afficher(); // Redessine le cube après le déplacement
    cube.style.transform = `translate(${x}px, ${y}px)`;
}
