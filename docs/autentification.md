# Autentification

Ou comment avoir accès à l'API et les données de solutionlocale.ca.

## Principe

L'API est ouvert, gratuitement, à toute personne qui désire la consulter. Mais afin de donner un répis à nos (petites) resources informatique, nous imposons un mécanisme de contrôle de congestion (_rate limiting_) pour chaque appel à l'API. Afin de mettre en place ce mécanisme, vous devrez donc obtenir une clé d'API que vous pouvez générer en créant vous un compte.

## Contrôle de congestion (_rate limiting_)

Par défaut, le mécanisme de contrôle de gestion est extrêmement limitatif. Il permet un maximum de `2` appels d'API par minutes, par clé d'API. Cette limite vous permet de consulter tranquillement les ressources de l'API.

Si vous avez un projet actif et nécessitez plus d'appels à la minute, vous devez contacter le développeur principal au projet à l'adresse inscrite dans votre compte. Bien que nous n'ayons aucune intention d'empêcher qui que ce soit d'obtenir un accès aux données, nous nous réservons le droit de refuser une demande de limite plus élevé qui pourrait mettre en péril la stabilité de nos serveurs.

## Création d'un compte

Il ne suffit que de se rendre sur [la page d'inscription](https://api.solutionlocale.ca/register) et renseigner les champs demandés. Vous aurez ensuite accès à l'interface de gestion des clés.

Deux choix s'offriront à vous: autentication par `oauth` et par `clé d'api`.

Nous préconisons la méthode par `clé`, cependant, si votre application est compatible, la méthode `oauth` est la plus sécuritaire (et donc à privilégier plus votre limite de congestion est permissive).