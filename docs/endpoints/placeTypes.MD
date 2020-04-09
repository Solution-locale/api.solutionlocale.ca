# Place types

Un `placeType` est un objet qui représente une entité qualifiant une `place` selon des critères établis par Solution locale.

## Attributs de l'objet `placeType`

- `id` : identifiant numérique de l'entité dans la base de donnée.
- `name` : nom du `placeType`.

## GET /place-types

Retournera l'entièreté des `placeType` de notre base de donnée, paginée à 15 `placeType` par page.

### Exemple de réponse

```json
{
  "data": [
    {
      "id": 1,
      "name": "L'entreprise offre essentiellement des produits cultivés, fabriqués ou transformés au Québec"
    },
    {
      "id": 2,
      "name": "L'entreprise est un commerce de proximité au sein d'une municipalité"
    },
    {
      "id": 3,
      "name": "L'entreprise est une bannière ou une franchise"
    }
  ],
  "links": {
    "first": "http:\/\/api.solutionlocale.ca.test\/api\/v1\/place-types?page=1",
    "last": "http:\/\/api.solutionlocale.ca.test\/api\/v1\/place-types?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "http:\/\/api.solutionlocale.ca.test\/api\/v1\/place-types",
    "per_page": 15,
    "to": 3,
    "total": 3
  }
}
```

## GET /place-type/{id}

Retournera l'entité `placeType` de notre base de donnée, correspondante à `id` ou une erreur `404` lorsque l'entité est introuvable.

### Exemple de réponse

```json
{
  "data": {
    "id": 1,
    "name": "L'entreprise offre essentiellement des produits cultivés, fabriqués ou transformés au Québec"
  }
}
```