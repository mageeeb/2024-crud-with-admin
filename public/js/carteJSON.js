/* Carte centrée sur la Grand'Place de Bruxelles */
const carte = L.map('carte').setView([50.8467139,4.3525151], 16);

/* fond de carte */
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(carte);

// Options pour le fetch() qui va récupérer les données
const fetchOptions = { method:'GET', mode:"cors", cache:'default' };

// Demande de recupération des données
fetch('./?loadDatas', fetchOptions)
    // si la promesse est résolue, c'est-à-dire qu'on reçoit les données
    .then(function(response){
        response.json().then(function(data){
            console.log(data);
            afficheMarqueurs(data);
            afficheListe(data);
        });
    })
    // si la promesse est rejetée, c'est-à-dire qu'il y a eu un problème
    .catch(function(error){
        console.log('Problèmes avec le fetch : '+error.message);
    });



/* Ajout d'un tableau contenant tous les marqueurs pour l'utilisation d'un FeatureGroup */
/* Ceci permet d'adapter l'affichage en fonction de la position des marqueurs */
const lesMarqueurs = [];

/* Ajout d'un marqueur centré sur le CF2M */
const markerCF2M = L.marker([50.825540,4.338905]);
/* Ajout d'un popup sur le CF2M */
markerCF2M.bindPopup("<h3>CF2M Vous êtes ici !</h3>");

/* ajout du marqueur au tableau */
lesMarqueurs.push(markerCF2M);

function afficheMarqueurs(pointsGeo){
    /* Lire la liste des points du tableau pointsGeo */
    for (let item in pointsGeo) {
        /* définition d'un marqueur */
        // Les coordonnées des points se trouvent dans les champs lat et long (voir dans la DB)
        let unMarqueur = L.marker([pointsGeo[item].latitude,pointsGeo[item].longitude]).addTo(carte);

        /* ajout d'un popup */
        // Il faut regarder dans le fichier JSON (ou dans la DB) où se trouvent les différentes infos
        // le nom du lieu se trouve dans le champ name
        // l'adresse du lieu se trouve dans le champ adresse
        // l'URL de l'image se trouve dans le champ img_url
        unMarqueur.bindPopup(
            `<h3>${pointsGeo[item].title}</h3>
            <p>${pointsGeo[item].ourdesc}</p>
            `);

        /* ajouter aussi ce marqueur au tableau */
        lesMarqueurs.push(unMarqueur);
    }

    /* définition du FeatureGroup */
    const groupe = new L.featureGroup(lesMarqueurs);

    /* adaptation des limites de la carte aux positions extrêmes des marqueurs */
    carte.fitBounds(groupe.getBounds());
}

/* Cette fonction sert à générer la liste des points à afficher à côté de la carte */
function afficheListe(donnees){
    const liste = document.getElementById('liste');

    // création d'une balise <ul> à placer dans le DIV id=liste */
    const UL = document.createElement("ul");

    // Lire tous les éléments du tableau JSON pour créer les items de la liste
    donnees.forEach(function(item,index){
        // créer la balise <li> vide
        let LI = document.createElement("li");
        // ajouter son contenu
        LI.innerHTML = `${item.title} | ${item.ourdesc} | `;
        // ajouter des attributs spécifiques à chaque élément pour pouvoir les distinguer
        LI.setAttribute("lat",`${item.latitude}`);
        LI.setAttribute("lng",`${item.longitude}`);
        LI.setAttribute("id",`${item.idourdatas}`);
        // ajouter un écouteur d'événement pour savoir si on a cliqué sur cet élément
        LI.addEventListener('click', clicItem);
        // la relier à la liste
        UL.appendChild(LI);
    });

    // relier la balise <ul> remplie au DIV id=liste
    liste.appendChild(UL);
}

function clicItem() {
    console.log('Item cliqué');
    let latitude = this.getAttribute('lat');
    let longitude= this.getAttribute('lng');
    let id= this.getAttribute('id');
    console.log(`${latitude} ${longitude}`);

    let marqueur = lesMarqueurs[id];

    carte.flyTo([latitude,longitude],17);

    marqueur.togglePopup();
}
