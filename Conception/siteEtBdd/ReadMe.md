# Le site et de la base de données

## CRUD

Dans le dev CRUD est la base en ce qui concerne un site et ses interactions avec sa base de données.

CRUD signifie :

- CREATE (créer)
- READ (lire/afficher)
- UPDATE (mettre à jour/modifier)
- DELETE (supprimer)

Sur le site le CRUD est donc géré via la partie administration du site accessible via le bouton ["Administration Site"](image.png). Ici on peut créer des nouveaux évènements, des nouvelles entrées pour le calendrier d'une activité, supprimer ou modifier des donnée existante provenant de la base de données.

Concernant cette page elle est bien faite et claire, les nouveaux élément créé s'envoient bien dans la base de donnée, toutes les infos sont bien récupérées (animateur, calendrier, etc). On peut supprimer des éléments et les modifier du site et donc de la base de données, je pense que celà aurais été mieux de tous faire dans un seule fichier (un fichier pour la suppression et un fichier pour la modification au lieu d'avoir un fichier qui en appelle un autre) mais ça marche.

## les évènement et "la une"

Concernant la table des évènements (EVEN_actucalend) il n'y a pas de problême particulier elle est très complête.
La table accueil_choix devrait cependant avoir une association avec la table évènements, avec chaque ligne correspondant à l'évènement que l'on veut afficher au lieu d'une seule ligne avec chaque évènement marqué à la suite (max 10). Je pense qu'il faudrait remplacer le fonctionnement de cette table par une association en ayant chaque ligne coresspondant a un évènement.
Exemple :

```SQL
CREATE TABLE new_accueil_choix VALUE
"id" INT PRIMARY KEY,
"EVEN_id" INT -- on mettra l'id des évènement que l'on veut mettre
FOREIGN KEY ("EVEN_id") REFERENCES EVEN_actucalend(id) -- on indique que EVEN_id correspond aux id provenant de la table EVEN_actucalend
```

Vous pouvez consulter le [MCD (modèle de conceptualisation des données)](mcd/mcd.svg) que j'ai fait qui montre comment je veux réorganiser.

Faire ainsi permettra de ne pas fixer de limite de contenu à "la une" et de récupérer les données plus facilement.

Une autre chose que je pensais changer: les fichiers html créés pour afficher les évènements. Ainsi au lieu de créer un fichier html, on récupèrerait les données directement depuis la base de données dans une boucle (un peu comme c'est déjà fait finalement). Un des problêmes avec cette méthode pourrait être la façon dont on récupère l'image(s) de l'évènement mais on peut changer la façon d etéléversement des image également. Au lieu de téléverser dans une page à part autant donner la possibilté de téléverser directement à la création de l'évènement et de récupérer l'url de l'image qui a été ajouté au dossier dans la base de données.
