# Places

Une `place` est un objet qui représente une entité de commerce dans la base de donnée, _qui à été approuvé par les modérateurs_, donc qui s'affiche publiquement au répertoire. 

## Attributs de l'objet `place`

- `id` : identifiant numérique de l'entité dans la base de donnée.
- `name` : nom de l'entreprise.
- `slug` : un _slug_ basé sur le nom de l'entreprise et, potentiellement, une chaîne de caractère unique. Utilisé pour générer les URL sur solutionlocale.ca
- `address` : contient de l'information sur l'emplacement du commerce.
	- `postal` : contient un des trois choix suivant: `null` si l'adresse est inconnue; `false` si le commerçant à choisi de garder l'adressse secrète ou un objet d'adresse postale.
	- `administrative` : contient un objet renseignant certains renseignements autres au sujet de l'emplacement de l'entreprise, spécifiquement: `region` retourne un objet [region](/endpoints/regions) (région administrative québécoise) et, si l'information est connue, `rcm` objet [rcm](/endpoints/RCMs) (municipalité régionale de comté) ou `null` le cas échéant.
- `geo` : contient un objet aidant à la géolocalisation de l'emplacement.
	- `lat` : une valeur de latitude.
	- `lng` : une valeur de longitude.
	- `plus_code` : le [Plus Code](https://plus.codes/) permetant un lien sur les services le supportant, notamment Google Maps, s'il est connu.
- `contact` : `null` lorsque l'information est inconnue, `false` lorsque l'information est cachée du public, ou un objet contenant les divers moyens de contact connu de l'entreprise comprenant courriels, numéros de téléphone et URL de site web et facebook.
- `place_types` : contient un `array` d'objets [placeType](/endpoints/placeTypes) associés à cette entreprise.
- `categories` : contient un `array` d'objets [category](/endpoints/categories) associés à cette entreprise.
- `covid19`: contient un objet renseignant certaines informations connues relative à la crise sanitaire et l'entreprise, notemment:
	- `delivery_type` : contient un `array` d'objets [deliveryType](/endpoints/deliveryTypes) associés à cette entreprise.
	- `delivery_zone` : les restrictions de livraisons, lorsque l'entreprise offre la livraison sans contact.
- `source` : la provenance de l'information.
	- `public` : `true` si l'entreprise à été inscrite via notre formulaire sur le site web.
	- `partner` :  contient l'information du partenaire si l'information nous à été fourni par un organisme externe à Solution locale.
- `url` : URL vers la fiche de l'entreprise sur le site de Solution locale.
- `created_at` : `timestamp` qui représente la date de création de cette fiche dans la base de donnée.
- `updated_at` : `timestamp` qui représente la date de la dernière modification de cette fiche dans la base de donnée. 

## GET /places

Retournera l'entièreté des `place` de notre base de donnée, paginée à 15 `places` par page.

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

Retournera l'entité `place` de notre base de donnée, correspondante à `id` ou une erreur `404` lorsque l'entité est introuvable.

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