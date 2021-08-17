var element = "";
var nombre = 0;
var tabNb = [];

var result = false;

var opp = "";


function init() {
    nombre = 0;
    tabNb = [];
    result = false;
}

/*  ------------------------------------------------------------- */ 
                    // Gerer Nombre cliquer
function onClickListItem() {
    
    element = element + this.innerHTML;
    nombre = parseFloat(element);
    
    if(opp && result){
        afficheEcran(nombre, opp + " " + tabNb[0]);
    } else {
        afficheEcran(nombre, "");
    }
    console.log("Nombre : " + nombre + "   tab : " + tabNb[0]);
}


/*  ------------------------------------------------------------- */ 
                    // Gerer Calcul
function calculResultat() {
    // Gerer les oppérations
            if (opp == "+") {
                tabNb[0] = parseFloat(tabNb[0]) + parseFloat(tabNb[1]);
            } else if(opp == "-") {
                tabNb[0] = parseFloat(tabNb[0]) - parseFloat(tabNb[1]);
            } else if(opp == "*") {
                tabNb[0] = parseFloat(tabNb[0]) * parseFloat(tabNb[1]);
            } else if(opp == "/") { 
                if(tabNb[1] == "0") {
                    console.log("Alert");
                } else {
                    tabNb[0] = parseFloat(tabNb[0]) / parseFloat(tabNb[1]);
                }
            } else {
                tabNb[0] = parseFloat(tabNb[0]);
            }
        
            console.log(opp);
}


/*  ------------------------------------------------------------- */ 
                    // Gerer Action des boutons
function onClickAction() {

    var action = this.innerHTML;
    element = "";

    if(nombre) {
        if(action === "=") {

            addNombre(nombre);

            if(tabNb[1]) {
               calculResultat();
               supNombre();
            }

            afficheEcran(tabNb[0], ""); 

        } else if(action == "&lt;") {

            init();
            afficheEcran(nombre,"");

        } else {

            addNombre(nombre);

            if(tabNb[1]) {
                calculResultat();
                supNombre();
            }

            afficheEcran(action,tabNb[0]);
            opp = action;   
            result = true; 
        }

    }  else {
        
        if(action == "&lt;") {
            init();
            afficheEcran(nombre,"");
        }

    }
}


/*  ------------------------------------------------------------- */ 
                    // Gerer Affichage

function afficheEcran(elt, eltStk) {

    var ecran;
    var texte;
    var p;
    var ecranStock;
    var texteStock;
    var pStock;
    
    ecran = document.querySelector("p#nbr");
    texte = document.createTextNode(elt);
    p = ecran.childNodes[0];
    ecran.replaceChild(texte,p);

    ecranStock = document.querySelector("p#stock");
    texteStock = document.createTextNode(eltStk);
    pStock = ecranStock.childNodes[0];

    if(!pStock) {
        ecranStock.appendChild(texteStock);
    } else {
        ecranStock.replaceChild(texteStock,pStock);
    }
}



/*  ------------------------------------------------------------- */ 
                    // Gerer Boutons
var boutons;
var boutonsAction;
var index;
                
// Boutons Nombres
boutons = document.querySelectorAll("#nombres button");
for(index = 0; index < boutons.length; index++) {
    boutons[index].addEventListener("click", onClickListItem);
    
}

// Boutons Actions
boutonsAction = document.querySelectorAll("#action button");
for(index = 0; index < boutonsAction.length; index++) {
    boutonsAction[index].addEventListener("click", onClickAction);
}



/*  ------------------------------------------------------------- */ 
                    // Gerer Tableau Nombre
function addNombre(nb) {
    tabNb.push(nb);
}
function supNombre() {
    tabNb.pop();
}
