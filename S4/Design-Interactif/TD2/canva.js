
// INIT CANVAS
var canvas = document.getElementById("c");
var ctx = canvas.getContext('2d');
// INIT Width and Height
var h = 600;
var w = 600;
// APPLY Width and Height
canvas.height = h;
canvas.width = w;
// INIT STROKE COORDONATES
let x = 0;
let y = 300;

afficher();

// UPDATE FUNCTION to refresh the screen at 60Hz
function update() {
    x += 1;
    y += 0.4;

    afficher();
}

// SHOW FUNCTION to draw on CANVAS
function afficher() {

    // CREATE A RECTANGLE
    ctx.fillStyle = "blue";
    ctx.fillRect(20, 20, 100, 100);

    //Create a STROKE
    ctx.beginPath();
    ctx.strokeStyle = `rgba(46, 138, 138, 1)`;
    ctx.lineWidth = 10;
    ctx.moveTo(100, 200);
    ctx.lineTo(x, y);
    ctx.stroke();

    // requestAnimationFrame
    window.requestAnimationFrame(update);
}
