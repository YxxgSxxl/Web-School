let main = document.querySelector("main");

function fetchData(path) {
    return fetch(path)
    .then(r=>{return r.json()})
    .then(json=>{
        return json;
    });
}

function processData(partitions, etudiants) {
    // main.innerHTML += "<div>" + JSON.stringify(partitions) + "</div>";
    // main.innerHTML += "<div>" + JSON.stringify(etudiants) + "</div>";

    // main.innerHTML += "<div>" + partitions + "</div>";
    // main.innerHTML += "<div>" + etudiants.forEach(etudiant => {
        
    // }); + "</div>";


    etudiants.sort((a,b)=>{
        if(a.nom_disp < b.nom_disp){
            return -1
        } else {
            return 1
        }
    });
    etudiants.forEach(etudiant => {
        main.innerHTML += `<div> ${etudiant.nom_disp} ${etudiant.prenom} </div> `
    });
}

go();


async function go() {
    let partitions = await fetchData("./TD2_DATA/partitions.json");
    let etudiants = await fetchData("./TD2_DATA/etudiants.json");

    processData(partitions, etudiants);
}

// async function templateEleves() {
//     let div = document.createElement("div");
// }

