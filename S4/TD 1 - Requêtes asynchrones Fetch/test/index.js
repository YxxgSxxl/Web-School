function test(abra, cadabra) {
    let abra = 1;
    let cadabra = 2;
    return abra + cadabra;
}

let site = document.querySelector("div");

// site.innerText = abra + " " + cadabra;
site.innerHTML = "le numéro est " + test();