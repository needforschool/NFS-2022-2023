<?php

//======================================================================
// BLOG => Exo sur deux jours
//======================================================================

//Un blog permet de :
/*
-   lister des articles
-   créer et éditer des articles
-   supprimer des articles
-   commenter des articles
-   trier des articles, recherche dans titre et ou contenu de l'article
-   paginer des articles.
-   modérer des commentaires;
-   supprimer des commentaires;
*/

// Il n’y a pas de droit spécifique pour la lecture d’un article ou d’un commentaire.
// Vous devrez créer un back-office, mais qui auras un design différents et un header avec des liens différents.
// C'est dans le back-office que vous pouvez créer/modifier/supprimer un article.
// Pour pouvoir modérer/supprimer un commentaire, Cela se fera dans la partie Back-office.
// Dans un exercice futur nous ferons en sorte que ce back-office soit sécurisé et accessible aux utilisateurs connectés et administrateur

//======================================================================
// Etape 1: Création de la base de données avec les tables suivantes :
//======================================================================

// blog_users ( id, pseudo, email, password, created_at, role, token)

// blog_articles (id, title(255), content(text), auteur, created_at, modified_at, status, image(null))
// blog_comments (id, id_article, content(text), auteur, created_at(datetime), modified_at, status(varchar 20))

// Exemple de status 'draft', 'new', 'publish'

//======================================================================
// Etape 1 bis: Création d'un back-office, Création front-office
//======================================================================

// faire quelque chose de jolie...

//======================================================================
// Etape 2: Développement du formulaire de création d’un article. (Back-office)
//======================================================================

// faire un lien de la page dashboard vers le fichier. ( admin/index.php )
// Création du fichier newpost.php , lien accessible dans back-office
// Cette étape comprend le développement du formulaire en HTML et l’enregistrement des informations en base de données.
// Créez si possible des fonctions pour la validation de formulaire. qui vous serviront toujours pour la suite

//======================================================================
// Etape 3: Développement du formulaire d’édition d’un article existant. (Back-office)
//======================================================================

// Création du fichier editpost.php, lien accessible dans back-office à partir de la liste des articles
// Cette étape comprend le développement du formulaire en HTML et l’update des informations en base de données.

//======================================================================
// Etape 4: Lister les articles créés sur la page blog (Front)
//======================================================================

// Création fichier blog.php
// le status des articles doit être égale à 'publish'
// seulement leurs titres, le nom de l’auteur et la date de publication au format (JJ/MM/AAAA)

//======================================================================
// Etape 5: Permettre de consulter le détail d’un article. (Front)
//======================================================================

// Création fichier single.php
// On y voit le titre de l’article, son contenu, l’auteur, la date de publication et la date de modification si elle existe.

//======================================================================
// Etape 6: Permettre de supprimer un article. (Back-office)
//======================================================================

// La suppression d’un article est fictive. Il s’agit en fait de mettre le status d’un article à 'draft'.
// Limiter la liste des articles aux articles qui ont un statut à 'publish' sur blog.php

//======================================================================
// Etape 7: Dans le détail d’un article, Ajouter un formulaire pour commenter un article. (Front)
//======================================================================

//=====================================================================
// Etape 8: Dans le détail d’un article, ajouter la liste des commentaires publiés. (Front)
//=====================================================================

//======================================================================
// Etape 9: Création d'une pagination sur liste des articles ( front ou back ou les deux)
//======================================================================

// Savoir comment créer des liens vers la page suivante et précédente
// helper paramètre d'URI ?page=2, et "limit" et "offset" MySQL,

//======================================================================
// Etape 10: SYSTEME DE FILTRE/recherche (front)
//======================================================================

// Création fichier search.php à la racine du site et envoyer la recherche vers ce fichier
// Création formulaire method get vers fichier search.php dans header.php
// Utiliser les paramètres d'URI, de type search.php?search=motclef
// Affichage des articles qui correspondent à la recherche dans le title et le content

//======================================================================
// Etape 11: Mise en place d'une modération des commentaires avant publication (Back-office)
//======================================================================

//======================================================================
// Etape 12: Pagination numérotée sur les listings dans le back-office
//======================================================================

//======================================================================
// Etape 13: Gestion de l'image des articles ( Lundi )
//======================================================================

//======================================================================
// Etape 14: Création système d’inscription et de connexion au site.  ( Lundi )
//======================================================================

// Ce système d’inscription permettra aux internautes de laisser un commentaire,
// et s'ils sont admin d'accéder à l'administration (Back-office)
