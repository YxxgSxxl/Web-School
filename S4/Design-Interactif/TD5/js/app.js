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
let yCube = 100;

let deltaX = 0;
let deltaY = 0;

afficher();

function update() {
    xCube += 2;
    yCube += 2;
}

function afficher() {
    // Cube Canvas init
    ctx.fillstyle = "blue";
    ctx.fillRect(xCube, yCube, 20, 20);
    ctx.moveTo(100, 200);

    // requestAnimationFrame
    window.requestAnimationFrame(update);
}

// Récupération d'informations touches
body.addEventListener('keydown', keyPress);

// Fonction pour savoir quel touche est pressée
function keyPress(e) {
    e.stopPropagation();
    // console.log(e.key); // Debug
    switch (e.key) {
        case 'ArrowUp':
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
    cube.style.transform = `translate(${x}px, ${y}px)`;
}

