fetch('fetch.php')        // Appel à un fichier.
.then(function(response) {  // Prétraitement de la réponse.
     return response.text(); 
})
.then(function(txt) {       // Utilisation de la réponse.
    document.querySelector("div").innerText = txt;
    // Du code JS pour traiter la réponse.
});
