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

let xPath = 550;
let yPath = 500;

let xCube = 600;
let yCube = 200;

let vxCube = 1.2;
let vyCube = 1.2;

gravity = 1.1; // Force de la gravité

let deltaX = 0;
let deltaY = 0;

// Récupération d'informations touches
let press = body.addEventListener('keydown', keyPress);


afficher();

function update() {
     // Appliquer la gravité
     yCube -= gravity;
     yCube += vyCube;
 
     // Vérifier si le cube touche le sol
     if (yCube + 20 > h) { // 20 est la hauteur du cube
        yCube -= gravity;

     }
}

function afficher() {
    // Cube Canvas init
    ctx.clearRect(0, 0, w, h); // Efface le canvas avant de redessiner
    ctx.fillStyle = "blue";
    ctx.fillRect(xCube, yCube, 20, 20);

    // Line Canvas init
    ctx.beginPath();
    ctx.strokeStyle = `rgba(46, 138, 138, 1)`;
    ctx.lineWidth = 5;
    ctx.moveTo(700, 550);
    ctx.lineTo(500, 550);
    ctx.stroke();

    // requestAnimationFrame
    window.requestAnimationFrame(update);
}


// Fonction pour savoir quel touche est pressée
function keyPress(e) {
    e.preventDefault(); // Ajouté pour empêcher le comportement par défaut des touches (scroll, etc.)
    e.stopPropagation();
    // console.log(e.key); // Debug
    switch (e.key) {
        case 'ArrowUp':
            yCube -= 10; // Modification pour déplacer le cube sur le canvas
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
    // cube.style.transform = `translate(${x}px, ${y}px)`;
}