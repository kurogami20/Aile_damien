# Le site et de la base de données

## CRUD

Dans le dev CRUD est la base en ce qui concerne un site et ses interactions avec sa base de données.

CRUD signifie :

- CREATE (créer)
- READ (lire/afficher)
- UPDATE (mettre à jour/modifier)
- DELETE (supprimer)

Sur le site le CRUD est donc géré via la partie administration du site accessible via le bouton ["Administration Site"](image.png). Ici on peut créer des nouveaux évènements, des nouvelles entrées pour le calendrier d'une activité, supprimer ou modifier des donnée existante provenant de la base de données.

Concernant cette page elle est bien faite et claire, les nouveaux élément créé s'envoient bien dans la base de donnée, toutes les infos sont bien récupérées (animateur, calendrier, etc). On peut supprimer des éléments mais ils restent dans la base de données au cas où on veuille les réutiliser

## les évènement et "la une"

### Problêmes

Concernant la table des évènements (EVEN_actucalend) il n'y a pas de problême particulier elle est très complête.
La table accueil_choix devrait cependant avoir une association avec la table évènements, avec chaque ligne correspondant à l'évènement que l'on veut afficher au lieu d'une seule ligne avec chaque évènement marqué à la suite (max 10).
