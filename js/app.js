function ouvrirPage () {
    var a = document.getElementById("Recherche").value;
    if(a=="liste"){
        window.open("../simplon/pages/liste.html");
    }
    if(a=="ADRESSE"|| a=="adr"){
        window.open("../Hallo docteur/pages/contact.html");
    }
    if(a=="denterie"|| a=="adr"){
        window.open("../Hallo docteur/pages/dent.html");
    }
    if(a=="laboratoire"|| a=="labo"){
        window.open("../Hallo docteur/pages/labo.html");
    }
    if(a=="radiologie"|| a=="radio"){
        window.open("../Hallo docteur/pages/labo.html");
    }
 }
  