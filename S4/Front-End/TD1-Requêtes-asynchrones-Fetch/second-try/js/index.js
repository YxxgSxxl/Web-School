let div1 = document.getElementById("one");
let div2 = document.getElementById("two");

fetch('fetch.php')        // Appel à un fichier.
.then(function(response) {  // Prétraitement de la réponse.
     return response.text(); 
})
.then(function(txt) {       // Utilisation de la réponse.
    div1.innerText += txt;
    // Du code JS pour traiter la réponse.
});

fetch('fetch.json')        // Appel à un fichier.
.then(function(response) {  // Prétraitement de la réponse.
     return response.text(); 
})
.then(function(txt) {       // Utilisation de la réponse.
    div2.innerText += txt;
    // Du code JS pour traiter la réponse.
});