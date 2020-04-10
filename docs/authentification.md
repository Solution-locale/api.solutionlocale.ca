# Authentification et limites

Ou comment avoir accès à l'API aux données de solutionlocale.ca.

## Principe

L'API est ouverte, gratuitement, à toute personne qui désire la consulter. Mais afin de donner un répit à nos (petites) ressources informatiques, nous imposons un mécanisme de contrôle de congestion (_rate limiting_) pour chaque appel à l'API. Afin de mettre en place ce mécanisme, vous devrez donc obtenir une clé d'API que vous pouvez générer en vous créant un compte.

## Attribution

La seule contrainte d'utilisation de notre API est d'en faire l'attribution si vous utilisez ses données. Une mention devrait se trouver dans votre site, ou application, qui devrait se lire comme suit: `Données provenant en tout, ou en partie, de solutionlocale.ca`.

## Contrôle de congestion (_rate limiting_)

Par défaut, le mécanisme de contrôle de gestion est extrêmement limitatif. Il permet un maximum de `2` appels d'API par minute, par clé d'API. Cette limite vous permet de consulter tranquillement les ressources de l'API.

Si vous avez un projet actif et nécessitez plus d'appels à la minute, vous devez contacter le développeur principal du projet à l'adresse inscrite dans votre compte. Bien que nous n'ayons aucune intention d'empêcher qui que ce soit d'obtenir un accès aux données, nous nous réservons le droit de refuser une demande de limite plus élevée qui pourrait mettre en péril la stabilité de nos serveurs.

### Surveillez votre limite actuelle

Le server répond `429 Too Many Requests` lorsque vous dépassez votre limite.

Vous pouvez également consulter les en-têtes `X-RateLimit-Limit`, `X-RateLimit-Remaining`, `Retry-After` et `X-RateLimit-Reset` afin de vous aider dans vos requêtes.

## Création d'un compte

Il suffit de se rendre sur [la page d'inscription](https://api.solutionlocale.ca/register) et de remplir les champs demandés. Vous aurez ensuite accès à l'interface de gestion des clés.

Deux choix s'offriront à vous: authentification par `oauth` et par `clé d'api`.

Nous préconisons la méthode par `clé`. Cependant, si votre application est compatible, la méthode `oauth` est la plus sécuritaire (et donc à privilégier si vous avez obtenus une limite plus élevée).

!> Les clés générés par l'API sont valides pour une année. Vous devrez soit vous réautoriser ponctuellement en méthode `oauth` ou regénérer une nouvelle `clé d'api` après une année.

## Authentification Oauth2

Suivre les instructions à l'écrans. *Nous n’offrons aucun support pour mettre en oeuvre une implémentation Oauth2 à vos applicationss*. Si vous êtes incertain de vos capacités à implémenter ce support, référez vous à l'authentification par clé d'API.

## Authentification par clé d'API.

Entrez un nom pour votre clé et choisissez les permisions associées à celle-ci.

- `read` vous permet d'accéder aux routes de lecture de l'API;
- `write` vous permet d'accéder aux routes d'écriture de l'API;

!> Il n'y a présentement aucune route dans l'API permettant d'opérations en écriture, ni de plans futurs à ce sujet pour l'instant. Mais nous sommes ouverts aux suggestions !

### Utilisation
Vous n'avez qu'à fournir votre clé d'API dans l'en-tête `Authorization` de vos requêtes par un _bearer token_ : `Authorization : Bearer VOTRE_TOKEN`.