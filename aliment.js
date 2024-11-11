
    function id_aliment(_this) {
        var ok = new Information("id_aliment.php"); // création de la classe 
        ok.add("id_aliment", _this.title); // ajout de l'information pour lenvoi 
        ok.add("id_general", _this.className);    
        console.log(ok.info());  
        ok.push(); // envoie l'information au code php 
    }
    function id_aliment_r(_this) {
        var ok = new Information("id_aliment.php"); // création de la classe 
        ok.add("id_aliment", _this.title); // ajout de l'information pour lenvoi 
        ok.add("id_general", _this.className);    
        console.log(ok.info());  
        ok.push(); // envoie l'information au code php
        
        const myTimeout = setTimeout(r, 250);

function r() {
  location.reload(); 
}
    }
    function nom_aliment(_this) {
        var ok = new Information("nom_aliment.php"); // création de la classe 
        ok.add("nom_aliment", _this.title); // ajout de l'information pour lenvoi 
        ok.add("id_general", _this.className);    
        console.log(ok.info());  
        ok.push(); // envoie l'information au code php 
    }
    function nom_aliment_r(_this) {
        var ok = new Information("nom_aliment.php"); // création de la classe 
        ok.add("nom_aliment", _this.title); // ajout de l'information pour lenvoi 
        ok.add("id_general", _this.className);    
        console.log(ok.info());  
        ok.push(); // envoie l'information au code php
        
        const myTimeout = setTimeout(r, 250);

function r() {
  location.reload(); 
}
    }
