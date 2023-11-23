let valeurs = [
    0.1,
    0.16,
    0.256,
    0.4096,
    0.6553,
    1.0485,
    1.6777,
    2.6843,
    4.2949,
    6.8719,
    10.9951
];

let iiii = valeurs.length;

console.log("Première valeure : " + valeurs[0]); // Première valeure du tableau

console.log("Deuxième valeure : " + valeurs[1]); // Deuxième valeure du tableau

console.log("Dernière valeure : " + valeurs[iiii - 1]); // Deuxième valeure du tableau

console.log(valeurs.length); // Combien de valeures dans le tableau ?


// valeurs.forEach(valeur => {
//         document.write(valeurs[0] + "<br>");
// });

valeurs.forEach(valeur => {
    document.querySelector("div.valeurs").innerHTML += valeur + "<br>";
});

document.querySelector("div.valeurs").innerHTML += "<br>";

for (let i = 0; i < valeurs.length; i++) {
    document.querySelector("div.valeurs").innerHTML += "la valeur " + i + " du tableau est " + valeurs[i] + "<br>";
}

document.querySelector("div.valeurs").innerHTML += "<br>";

for(let i=0 ; i < valeurs.length ; i++) {
    document.querySelector("div.valeurs").innerHTML += `<div class="barres" style="width:${valeurs[i] * 100}px"></div>`;
}