// JavaScript Document
var i=0; 
function addSelect(){ 

i++; 
// On récupère l'endroit où devra être ajouté la liste 
var ajout = document.getElementById("ajout"); 
// On récupère la liste modèle 
var selModele = document.getElementById("cadre"); 
// On la clone dans une nouvelle variable 

var nvxSel = selModele.cloneNode(true); 
// (pour la présentation, on crée un retour à la ligne) 

var br = document.createElement("<br>"); 

// On adapte les attributs de la nouvelle liste : nom, id et affichage 
nvxSel.name = "nom"+i; 
nvxSel.id = "cadre"+i; 


// On ajoute tout ça à l'emplacement voulu 
Ajouter(); 
nvxSel.value=''; 
divCible.appendChild(nvxSel); 
divCible.appendChild(br); 

} 

var nlignes = 1; 
function Ajouter(){ 
nlignes++; 
ajout.insertAdjacentHTML('BeforeEnd',''); 
/*divCible.innerHTML='<strong> <br>Patente'+nlignes+' :</strong>';*/ 
return nlignes; 
}  