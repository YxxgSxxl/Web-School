/* Première question
document.querySelector("main").remove(); */

/* Deuxième question
console.log(document.querySelector("h1"));*/

/* Troisième question
console.log(document.querySelector("h1>span").innerText);
console.log(document.querySelector("div.flex>div").innerText);
document.querySelector("div.flex div svg").remove(); */

/* Quatrième question
document.querySelector("h1").innerHTML="Parce que <a href=\"https://www.meetic.fr/\" target=\"about_blank\"><span>"
document.querySelector("h1 span").innerHTML="Je suis beau</a>";
document.querySelector("h1 span").classList.add("fruit_de_mer");
document.querySelector("h1 span").style="color: yellow";

document.querySelector("div.flex div").innerHTML="<a href=\"https://www.google.fr\" target=\"about_blank\">Coucou bb je suis trop beau</a>"

/* Cinquième question
document.querySelector("div.flex a.button").innerText+=" maintenant";

document.querySelector("div.flex a.button").addEventListener("click", clique)

function clique() {
    console.log("ok ça marche gros");
} */

/* Sixième question
let button = document.querySelector("header div a.button");

button.innerHTML+=" , c'est gratos";

button.addEventListener("click", couleur)

function couleur() {
    button.classList.toggle("couleur");
} */

/* Septième question */
let compteur = document.querySelector("section.exemple div.zoneExemple div.contenu div.flex.flex1 div div.gros").innerText;
let nombre = 0;
let euro = " €";

document.querySelector("section.exemple div.zoneExemple div.contenu div.flex.flex1 div div.gros").addEventListener("click", ajouter);

function ajouter() {
    document.querySelector("section.exemple div.zoneExemple div.contenu div.flex.flex1 div div.gros").innerText= nombre++   ;
    document.querySelector("section.exemple div.zoneExemple div.contenu div.flex.flex1 div div.gros").innerText+= euro;
}