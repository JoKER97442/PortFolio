var element = "";
var nombre = "";
var nombreStock = "";
var result = false;

var opp;
var test;

var boutons;
var boutonsAction;
var index;

function init() {
    nombre = "";
    nombreStock = "";
    result = false;
}

function onClickListItem() {
    
    element = element + this.innerHTML;
    if(result == false) {
        nombre = element;
    } else {
        nombreStock = element;
    }

    afficheEcran(element,"");
    console.log("Nombre1 " + nombre + " Nombre2 " + nombreStock);
}

function onClickAction() {

    var action;

    action = this.innerHTML;    
    result = true;
    element = "";

    if(nombre) {
        if(action == "=") {
            
            // Gerer les oppérations
            if (opp == "+") {
                test = parseFloat(nombre) + parseFloat(nombreStock);
            } else if(opp == "-") {
                test = parseFloat(nombre) - parseFloat(nombreStock);
            } else if(opp == "*") {
                test = parseFloat(nombre) * parseFloat(nombreStock);
            } else if(opp == "/") {
                test = parseFloat(nombre) / parseFloat(nombreStock);
            } else {
                test = parseFloat(nombreStock);
            }

            if(nombre && nombreStock) {
                afficheEcran(test,"");
                init();
            }

        } else if(action == "&lt;") {

            afficheEcran("0","");
            init();

        } else {

            afficheEcran(action,"");
            opp = action;
            
        }
    }  else {
        nombre = nombreStock;
        if(action == "&lt;") {

            afficheEcran("0","");
            init();
    
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


