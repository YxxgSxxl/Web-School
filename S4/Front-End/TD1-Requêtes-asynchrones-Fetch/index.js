fetch('fetch.php')        // Appel à un fichier.
.then(function(response) {  // Prétraitement de la réponse.
     return response.text(); 
})
.then(function(txt) {       // Utilisation de la réponse.
    document.querySelector("div").innerText = txt;
    // Du code JS pour traiter la réponse.
});

// fetch('fetch.json')
// .then(function(r) {
//     return r.text();
// })
// .then(function(rep) {
//     document.querySelector("div").innerText = rep;
// })

fetch('fetch.json')
.then(function(r) {
    return r.json();
})
.then(function(rep) {
    document.querySelector("div").innerText = rep;
})