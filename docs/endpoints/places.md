# Places

Une `place` est une entité d'entreprise _qui à été approuvée par les modérateurs de Solution locale_, donc qui s'affiche publiquement au répertoire. 

## Attributs de l'objet `place`

- `id` : identifiant numérique de l'entité.
- `name` : nom de l'entreprise.
- `slug` : un « slug » basé sur le nom de l'entreprise et, potentiellement, une chaîne de caractère unique. Utilisé pour générer les URL sur solutionlocale.ca
- `address` : contient de l'information sur l'emplacement du commerce.
	- `postal` : contient un des trois choix suivant: `null` si l'adresse est inconnue; `false` si le commerçant a demandé de garder l'adressse secrète ou un objet contenant les informations d'adresse postale.
	- `administrative` : contient un objet contenant certains autres renseignements au sujet de l'emplacement de l'entreprise. Spécifiquement: `region` retourne un objet [region](/endpoints/regions) (une région administrative du Québec) et, si l'information est connue, un objet [rcm](/endpoints/RCMs) (une municipalité régionale de comté) ou `null` le cas échéant.
- `geo` : contient un objet contenant de l'information de géolocalisation.
	- `lat` : une valeur de latitude.
	- `lng` : une valeur de longitude.
	- `plus_code` : le [Plus Code](https://plus.codes/) permetant un lien sur les services qui implémentent ce standard, notamment Google Maps, s'il est connu.
- `contact` : `null` lorsque l'information est inconnue, `false` lorsque l'information est cachée du public, ou un objet contenant les divers moyens de contact connu de l'entreprise comprenant courriels, numéros de téléphone et URL de site web et facebook.
- `place_types` : contient une ou plusieurs entité [placeType](/endpoints/placeTypes) associées à cette entreprise.
- `categories` : contient une ou plusieurs entité [category](/endpoints/categories) associées à cette entreprise.
- `covid19`: contient certaines informations connues relative à la crise sanitaire et la situation de l'entreprise, notamment:
	- `delivery_type` : contient une ou plusieurs entité [deliveryType](/endpoints/deliveryTypes) associées à cette entreprise.
	- `delivery_zone` : les restrictions de livraisons, lorsque l'entreprise offre la livraison sans contact.
- `source` : la provenance de l'information au sujet de l'entreprise.
	- `public` : `true` si l'entreprise à été inscrite par notre formulaire sur le site web, `false` le cas échéant.
	- `partner` :  contient une ou plusieurs entité [partners](/endpoints/partners) associées à cette entreprise.
- `url` : URL vers la fiche de l'entreprise sur le site de Solution locale.
- `created_at` : `timestamp` qui représente la date de création de cette fiche dans la base de donnée.
- `updated_at` : `timestamp` qui représente la date de la dernière modification de cette fiche dans la base de donnée. 

## GET /places

Retourne l'entièreté des `place`, paginée à 15 `places` par page.

### Exemple de réponse

```json
{
  "data": [
    {
      "id": 1,
      "name": "Solution locale",
      "slug": "solution-locale",
      "address": {
        "postal": {
          "line_1": "42 rue de l'Achat Local",
          "line_2": "Local 100",
          "city": "Sainte-Geneviève-de-Batiscan",
          "province": "Québec",
          "postal_code": "G0X 2R0",
          "country_code": "ca"
        },
        "administrative": {
          "region": {
            "region_id": 4,
            "name": "Mauricie",
            "slug": "mauricie"
          },
          "rcm": "Des Chenaux"
        }
      },
      "geo": {
        "lat": "51.4630788",
        "lng": "-3.1653315",
        "plus_code": null
      },
      "contact": {
        "email": null,
        "phone": {
          "main": false,
          "additionnal": null
        },
        "urls": {
          "site": "https:\/\/solutionlocale.ca\/",
          "facebook": "https:\/\/facebook.com/solutionlocale\/",
        }
      },
      "place_types": [
        {
          "id": 1,
          "name": "L'entreprise offre essentiellement des produits cultivés, fabriqués ou transformés au Québec"
        },
        {
          "id": 2,
          "name": "L'entreprise est un commerce de proximité au sein d'une municipalité"
        }
      ],
      "categories": [
        {
          "id": 6,
          "name": "Alimentation",
          "parent_id": null
        },
        {
          "id": 12,
          "name": "Épiceries",
          "parent_id": 6
        }
      ],
      "covid19": {
        "delivery_zone": "Magog et Sherbrooke",
        "delivery_types": [
          {
            "id": 2,
            "name": "Livraison à domicile sans contact"
          }
        ]
      },
      "source": {
        "public": true,
        "partner": null
      },
      "url": "https:\/\/solutionlocale.ca\/places\/fee-des-dents",
      "created_at": "2020-03-20T18:40:43.000000Z",
      "updated_at": "2020-03-31T16:49:16.000000Z"
    }
  ],
  "links": {
    "first": "http:\/\/api.solutionlocale.ca.test\/api\/v1\/places?page=1",
    "last": "http:\/\/api.solutionlocale.ca.test\/api\/v1\/places?page=2",
    "prev": null,
    "next": "http:\/\/api.solutionlocale.ca.test\/api\/v1\/places?page=2"
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 2,
    "path": "http:\/\/api.solutionlocale.ca.test\/api\/v1\/places",
    "per_page": 15,
    "to": 15,
    "total": 30
  }
}
```

## GET /places/{id}

Retourne l'entité `place` correspondante à `id` ou une erreur `404` lorsque l'entité est introuvable.

### Exemple de réponse

```json
{
  "data":
    {
      "id": 1,
      "name": "Solution locale",
      "slug": "solution-locale",
      "address": {
        "postal": {
          "line_1": "42 rue de l'Achat Local",
          "line_2": "Local 100",
          "city": "Sainte-Geneviève-de-Batiscan",
          "province": "Québec",
          "postal_code": "G0X 2R0",
          "country_code": "ca"
        },
        "administrative": {
          "region": {
            "region_id": 4,
            "name": "Mauricie",
            "slug": "mauricie"
          },
          "rcm": "Des Chenaux"
        }
      },
      "geo": {
        "lat": "51.4630788",
        "lng": "-3.1653315",
        "plus_code": null
      },
      "contact": {
        "email": null,
        "phone": {
          "main": false,
          "additionnal": null
        },
        "urls": {
          "site": "https:\/\/solutionlocale.ca\/",
          "facebook": "https:\/\/facebook.com/solutionlocale\/",
        }
      },
      "place_types": [
        {
          "id": 1,
          "name": "L'entreprise offre essentiellement des produits cultivés, fabriqués ou transformés au Québec"
        },
        {
          "id": 2,
          "name": "L'entreprise est un commerce de proximité au sein d'une municipalité"
        }
      ],
      "categories": [
        {
          "id": 6,
          "name": "Alimentation",
          "parent_id": null
        },
        {
          "id": 12,
          "name": "Épiceries",
          "parent_id": 6
        }
      ],
      "covid19": {
        "delivery_zone": "Magog et Sherbrooke",
        "delivery_types": [
          {
            "id": 2,
            "name": "Livraison à domicile sans contact"
          }
        ]
      },
      "source": {
        "public": true,
        "partner": null
      },
      "url": "https:\/\/solutionlocale.ca\/places\/fee-des-dents",
      "created_at": "2020-03-20T18:40:43.000000Z",
      "updated_at": "2020-03-31T16:49:16.000000Z"
    }
}
```