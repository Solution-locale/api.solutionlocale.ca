# Authentification et limites

Ou comment avoir accès à l'API et les données de solutionlocale.ca.

## Principe

L'API est ouvert, gratuitement, à toute personne qui désire la consulter. Mais afin de donner un répis à nos (petites) resources informatique, nous imposons un mécanisme de contrôle de congestion (_rate limiting_) pour chaque appel à l'API. Afin de mettre en place ce mécanisme, vous devrez donc obtenir une clé d'API que vous pouvez générer en créant vous un compte.

## Attribution

La seule contrainte d'utilisation de notre API est d'en faire l'attribution si vous utilisez ses données. Une mention devrait se trouver dans votre site, ou application, qui devrait se lire comme suit: `Données provenant en tout, ou en partie, de solutionlocale.ca`.

## Contrôle de congestion (_rate limiting_)

Par défaut, le mécanisme de contrôle de gestion est extrêmement limitatif. Il permet un maximum de `2` appels d'API par minutes, par clé d'API. Cette limite vous permet de consulter tranquillement les ressources de l'API.

Si vous avez un projet actif et nécessitez plus d'appels à la minute, vous devez contacter le développeur principal au projet à l'adresse inscrite dans votre compte. Bien que nous n'ayons aucune intention d'empêcher qui que ce soit d'obtenir un accès aux données, nous nous réservons le droit de refuser une demande de limite plus élevé qui pourrait mettre en péril la stabilité de nos serveurs.

### Surveiller votre limite actuelle

Le server réponds `429 Too Many Requests` lorsque vous dépassez votre limite.

Vous pouvez également consulter les entêtes `X-RateLimit-Limit`, `X-RateLimit-Remaining`, `Retry-After` et `X-RateLimit-Reset` afin de vous aider dans vos requêtes.

## Création d'un compte

Il ne suffit que de se rendre sur [la page d'inscription](https://api.solutionlocale.ca/register) et renseigner les champs demandés. Vous aurez ensuite accès à l'interface de gestion des clés.

Deux choix s'offriront à vous: authentification par `oauth` et par `clé d'api`.

Nous préconisons la méthode par `clé`, cependant, si votre application est compatible, la méthode `oauth` est la plus sécuritaire (et donc à privilégier plus votre limite de congestion est permissive).

!> Les clés générés par l'API sont valide pour une année. Vous devrez soit vous réautoriser ponctuellement en méthode `oauth` ou regénérer une nouvelle `clé d'api` après une année.

## Authentification Oauth2

Suivre les instructions à l'écrans. *Nous ne donnons pas de support pour mettre en oeuvre une implémentation Oauth2 à vos applications*. Si vous êtes incertains de vos capacités à implémenter ce support, référez vous à l'autentication par clé d'API.

## Authentification par clé d'API.

Entrez un nom pour votre clé et choisisse les permisions associés à celle-ci.

- `read` vous permet d'accéder aux routes de lecture de l'API;
- `write` vous permet d'accéder aux routes d'écriture de l'API;

!> Il n'y a présentemnet aucune route dans l'API permettant d'opérations en écriture, ni de plan futurs à ce sujet pour l'instant.

### Utilisation
Vous n'avez qu'à fournir votre clé d'API dans l'entête `Authorization` de vos requêtes par un _bearer token_ : `Authorization : Bearer VOTRE_TOKEN`.