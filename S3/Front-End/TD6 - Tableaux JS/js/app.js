let filles = ["Laurine", "Anita", "Gwladys"];
let garcons = ["Paul", "André", "Jojo la praline"];

let gens = filles.concat(garcons).sort().join(", ");

document.getElementById("affichage-gens").innerHTML = gens;



let mail = "sebastien.lehmann@uha.fr";

console.log(mail.split('@')[0].split('.').join(" "));



let dateISO = "2022-12-24";

let dateFR = dateISO.split('-').reverse().join("/");

document.querySelector("div.affichage-date").innerHTML = "Nous sommes le " + dateFR;



let poids = [42, 100, 33, 72, 56, 164, 13, 66];

let tot = poids.reduce(calcul);

function calcul(total, num) {
    return total + num;
}

if (tot <= 500) {
    document.querySelector("div.affichage-calcul").innerHTML = tot + " : T'es pas assez lourd :(";
} else {
    document.querySelector("div.affichage-calcul").innerHTML = tot + " : T'es trop lourd gros";
}


let moyenne = poids.reduce(moyennecalc);

function moyennecalc(total, num) {
    return total + num / poids.length;
}

document.querySelector("div.affichage-calcul").innerHTML += "<br><br>" + moyenne + " est la moyenne du poids.";

poids.sort(function(a, b){return a - b})

document.querySelector("div.affichage-calcul").innerHTML += "<br><br>" + poids.join(" => ");