<?php

//MOVIES !
//
//La page d'accueil de ce site doit afficher des affiches de films.
//
//Les données sur les films sont disponibles dans un array, lui-même disponible dans le fichier data.php
//
//etape 1 Création dossier film
//etape 2 Création de index.php ( HTML5, CSS3 ), compartimenter le code header.php  footer.php dans dossier include
//etape 3 include data.php
//etape 4 Vous pouvez maintenant essayer, grâce à une boucle for() ou foreach(), d'afficher tous les titres de chacun des films contenu
// dans l'array. Chacun de ces titres de film devrait être affiché dans un div ayant une classe de votre choix.
//
//etape 5 Ensuite, au lieu d'afficher le titre du film, vous pouvez tenter d'afficher les posters des-dits films. N'oubliez pas d'ajouter le titre du film à l'attribut "alt" de l'image.
//Remarque: Les posters se trouvent sur internet, à cette adresse : https://formation.weblitzer.fr/posters/
// par exemple : https://formation.weblitzer.fr/posters/4767.jpg
// le chiffre etant l'id du film
//etape 6 faire une fonction pour récuperer image
//
//Les posters sont tous au format jpg, et sont nommés comme l'id de chaque film.
//(pour info, elles ont des hauteurs différentes, mais font toutes 220px de large).
//
//Notez que les posters doivent être cliquable...
//
//Essayer de faire quelque chose de joli.!!

///////////////////////////////////////////////////////////////////////////////////////////

//MOVIES ! Suite...
//  Une fois l'affichage des posters réalisés en page d'accueil, il est temps de créer la page qui présente les détails du film cliqué.
//Cette page pourrait être nommé details.php.
//Nous utiliserons la stratégie du passage de paramètres par l'URL afin de récupérer facilement le film à afficher sur cette page details.php. Ainsi, les liens sur les posters devraient tous mener vers la page details.php, tout en passant un paramètre GET dans l'URL.
//Une fois sur la page details.php, vous devrez récupérer la donnée présente dans l'URL, puis rechercher cette donnée dans l'array de films. Attention, vous devez inclure encore une fois le même fichier data.php pour que votre array $movies soit de nouveau disponible dans cette nouvelle page.
//
//Lorsque vous aurez trouvé le film en question dans l'array, vous pourrez ensuite en afficher tous les détails.
//
//  ==============================
//
//
//  Une fois ceci réalisé, vous pouvez créer 3 liens sur cette page de détails :
//    un lien permettant de revenir en page d'accueil
//    un lien permettant de naviguer directement vers le film suivant dans l'array,
//    et un dernier permettant de naviguer vers le film précédent.