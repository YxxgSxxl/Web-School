
setTimeout(matrix, 2000);
setTimeout(show2steps, 1500);
setInterval(function(){ decodeText(); }, 1000);

let slideL = document.querySelector("div.carousel-slideL svg");
let slideR = document.querySelector("div.carousel-slideR svg");

document.querySelector(".page_show").classList.add("show");
// document.querySelector("footer").classList.add("show");

// FILTER CLICKS
document.querySelectorAll("input").forEach(e=>{
    e.addEventListener("change", filtre)
})

function filtre(){
    document.querySelector("main").classList.toggle(this.checkmark)
}

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

// Matrix Background Effect
function matrix() {
    var canvas = document.getElementById('canvas'),
        ctx = canvas.getContext('2d'),
        canvas2 = document.getElementById('canvas2'),
        ctx2 = canvas2.getContext('2d'),
        // full screen dimensions
        cw = window.innerWidth,
        ch = window.innerHeight,
        charArr = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'],
        maxCharCount = 100,
        fallingCharArr = [],
        fontSize = 10,
        maxColums = cw / (fontSize);
    canvas.width = canvas2.width = cw;
    canvas.height = canvas2.height = ch;


    function randomInt(min, max) {
        return Math.floor(Math.random() * (max - min) + min);
    }

    function randomFloat(min, max) {
        return Math.random() * (max - min) + min;
    }

    function Point(x, y) {
        this.x = x;
        this.y = y;
    }

    let color = `rgb(${colorRand()},${colorRand()},${colorRand()})`;

    function colorRand() {
        return Math.floor(100 + Math.random() * 220);
    }
    const random_hex_color_code = () => {
        let n = (Math.random() * 0xfffff * 1000000).toString(16);
        return '#' + n.slice(0, 6);
    };

    Point.prototype.draw = function (ctx) {

        this.value = charArr[randomInt(0, charArr.length - 1)].toUpperCase();
        this.speed = randomFloat(1, 5);


        ctx2.fillStyle = color;
        ctx2.font = fontSize + "px san-serif";
        ctx2.fillText(this.value, this.x, this.y);

        ctx.fillStyle = color;
        ctx.font = fontSize + "px san-serif";
        ctx.fillText(this.value, this.x, this.y);



        this.y += this.speed;
        if (this.y > ch) {
            this.y = randomFloat(-100, 0);
            this.speed = randomFloat(2, 5);
        }
    }

    for (var i = 0; i < maxColums; i++) {
        fallingCharArr.push(new Point(i * fontSize, randomFloat(-1000, 0)));
    }


    var update = function () {

        ctx.fillStyle = "rgba(0,0,0,0.10)";
        ctx.fillRect(0, 0, cw, ch);

        ctx2.clearRect(0, 0, cw, ch);

        var i = fallingCharArr.length;

        while (i--) {
            fallingCharArr[i].draw(ctx);
            var v = fallingCharArr[i];
        }

        requestAnimationFrame(update);
    }

    update();
}

// Random letters effect on SAE's LIST (FOR SAE PAGE)
function decodeText(){
    var text = document.getElementsByClassName('decode-text')[0];
    // debug with
    // console.log(text, text.children.length);

    // assign the placeholder array its places
    var state = [];
    for(var i = 0, j = text.children.length; i < j; i++ ){
        text.children[i].classList.remove('state-1','state-2','state-3');
        state[i] = i;
    }

    // shuffle the array to get new sequences each time
    var shuffled = shuffle(state);
 
    for(var i = 0, j = shuffled.length; i < j; i++ ){
        var child = text.children[shuffled[i]];
        classes = child.classList;

        // fire the first one at random times
        var state1Time = Math.round( Math.random() * (2000 - 300) ) + 50;
        if(classes.contains('text-animation')){ 
            setTimeout(firstStages.bind(null, child), state1Time);
        }
    }
}

// send the node for later .state changes
function firstStages(child){
    if( child.classList.contains('state-2') ){   
        child.classList.add('state-3');
    } else if( child.classList.contains('state-1') ){
        child.classList.add('state-2')
    } else if( !child.classList.contains('state-1') ){
        child.classList.add('state-1');
        setTimeout(secondStages.bind(null, child), 100);
    }    
}
function secondStages(child){
    if( child.classList.contains('state-1') ){
        child.classList.add('state-2')
        setTimeout(thirdStages.bind(null, child), 100);
    } 
    else if( !child.classList.contains('state-1') )
    {
        child.classList.add('state-1')
    }
}
function thirdStages(child){
    if( child.classList.contains('state-2') ){
        child.classList.add('state-3')
    }
}

function shuffle(array) {
    var currentIndex = array.length, temporaryValue, randomIndex;

    // While there remain elements to shuffle...
    while (0 !== currentIndex) {
        // Pick a remaining element...
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;

        // And swap it with the current element.
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
    }
    return array;
}



// Show the footer with little animations (FOR ABOUT PAGE)
function show2steps() {
    // document.querySelector("footer").classList.add("show2");
}