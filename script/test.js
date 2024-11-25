//console.log("hello world!");//

//let userName = "pne2c"; //string
//let age = 24; //int
//let size = 1.75; //float
//let isCool = true; //bool

let resultathtml = document.querySelector('#resultat');
/*console.log(resultathtml);*/

let nombre1 = parseInt(prompt("donnez un premier nombre"))

while(isNaN(nombre1)) {
    nombre1 = prompt("Il faut écrire un nombre")
}

/*if(isNaN(nombre1)){
    console.log("Il faut écrire un chiffre")
} else { */

let nombre2 = parseInt(prompt("Donnez un deuxième nombre"))

while(isNaN(nombre2)) {
    nombre2 = prompt("Il faut écrire un nombre")
}

/*if(isNaN(nombre2)){
    console.log("Il faut écrire un chiffre")
} else { */

let resultat = nombre1 + nombre2;
let messageaddition = "<p>Le resultat de l'adittion de "+nombre1+" et de "+nombre2+" est "+resultat+"</p>";
resultathtml.innerHTML = messageaddition;

resultat = nombre1 - nombre2;
let messagesoustraction =`<p>Le résultat de la soustraction de ${nombre1} et de ${nombre2} est ${resultat}</p>`;
resultathtml.innerHTML += messagesoustraction;

resultat = nombre1 * nombre2;
let messagemultiplications = `<p>Le résultat de la multiplications de ${nombre1} et de ${nombre2} est ${resultat}</p>`;
resultathtml.innerHTML += messagemultiplications;

resultat = nombre1 / nombre2;
let messagedivisions = `<p>Le résultat de la divisions de ${nombre1} et de ${nombre2} est ${resultat}</p>`;
resultathtml.innerHTML += messagedivisions;

/*for(let i = 1; i<=10; i++) {
    console.log(`${i} - bonjour`)
}*/