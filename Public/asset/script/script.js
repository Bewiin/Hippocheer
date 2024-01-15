/*const menu = document.getElementById("bt-menu");
menu.style.backgroundColor = "red";
menu.style.border = "red";*/

// Récupère l'élément dont vous souhaitez récupérer la propriété CSS

//THEME 1 :
var theme1 =document.querySelector('#theme1');
let value1 = getComputedStyle(theme1);
const bgt1 = value1.backgroundImage;
console.log(bgt1);

theme1.addEventListener('click',()=>{
    let tableau = document.getElementById('tableau');
    let rewards = document.getElementById('rewards');
    let pratiques = document.getElementById('pratiques');
    let history = document.getElementById('history');
    tableau.style.color = '#FFF7AD';
    rewards.style.color = '#FFA9F9';
    pratiques.style.color = '#FFF7AD';
    history.style.color = '#FFA9F9';
    let mainContent=document.getElementById("main-content");
    mainContent.style.setProperty("background", bgt1);
})

//THEME 2 :
var theme2 = document.querySelector('#theme2');
let value2 = getComputedStyle(theme2);
console.log(value2);
const bgt2 = value2.backgroundImage;
console.log(bgt2);
  




theme2.addEventListener('click',()=>{
    let tableau = document.getElementById('tableau');
    let rewards = document.getElementById('rewards');
    let pratiques = document.getElementById('pratiques');
    let history = document.getElementById('history');
    tableau.style.color = '#fccb90';
    rewards.style.color = '#d57eeb';
    pratiques.style.color = '#fccb90';
    history.style.color = '#d57eeb';
    let mainContent = document.getElementById("main-content");
    mainContent.style.setProperty("background", bgt2);
})
//THEME 3 :
var theme3 = document.querySelector("#theme3");
let value3 = getComputedStyle(theme3);
const bgt3 = value3.backgroundImage;

theme3.addEventListener("click", ()=>{
    let tableau = document.getElementById('tableau');
    let rewards = document.getElementById('rewards');
    let pratiques = document.getElementById('pratiques');
    let history = document.getElementById('history');
    tableau.style.color = '#F69F98';
    rewards.style.color = '#5EE1F1';
    pratiques.style.color = '#F69F98';
    history.style.color = '#5EE1F1';
    let mainContent = document.getElementById("main-content");
    let origin = getComputedStyle(mainContent);
    mainContent.style.setProperty("background", bgt3);
})
//THEME 4 :
let theme4 = document.querySelector('#theme4');
let value4 = getComputedStyle(theme4);
const bgt4 = value4.backgroundImage;

theme4.addEventListener('click', ()=>{
    let tableau = document.getElementById('tableau');
    let rewards = document.getElementById('rewards');
    let pratiques = document.getElementById('pratiques');
    let history = document.getElementById('history');
    tableau.style.color = '#6BBBFF';
    rewards.style.color = '#B8DCFF';
    pratiques.style.color = '#B8DCFF';
    history.style.color = '#6BBBFF';
    let mainContent = document.getElementById("main-content");
    let origin = getComputedStyle(mainContent);
    mainContent.style.setProperty("background", bgt4);
})
//MENU BURGER
let menu = document.getElementById('menu');
let nav = document.querySelector('nav');

 menu.addEventListener('click', ()=>{
    nav.style.transform = 'translateY(0)';
 })
 let croix = document.getElementById('croix');
 croix.addEventListener('click',()=>{
    nav.style.transform = 'translateY(-70vh)';
 })
//FIN MENU


/* Modifier les variables bootstrap
//récupérer la valeur d'une variable CSS
function getCssVariable(attribut){
    const rootAttr = getComputedStyle(root)
    return rootAttr.getPropertyValue(attribut);
}
//fonction pour modifier la valeur d'une variable
function setCssValue(attribut, value){
    root.style.setProperty(attribut, value);
}
setCssValue('--bg', 'yellow');*/