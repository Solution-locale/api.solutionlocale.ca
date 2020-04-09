# Delivery types

Un `deliveryType` est un objet qui représente une entité qualifiant les méthodes de distributions d'une `place` selon des critères établis par Solution locale.

## Attributs de l'objet `deliveryType`

- `id` : identifiant numérique de l'entité dans la base de donnée.
- `name` : nom du `deliveryType`.

## GET /delivery-types

Retournera l'entièreté des `deliveryType` de notre base de donnée, paginée à 15 `deliveryType` par page.

### Exemple de réponse

```json
{
  "data": [
    {
      "id": 1,
      "name": "Collecte sans contact sur place"
    },
    {
      "id": 2,
      "name": "Livraison à domicile sans contact"
    },
    {
      "id": 3,
      "name": "Livraison par la poste"
    },
    {
      "id": 4,
      "name": "Service offert en ligne uniquement"
    }
  ],
  "links": {
    "first": "http:\/\/api.solutionlocale.ca.test\/api\/v1\/delivery-types?page=1",
    "last": "http:\/\/api.solutionlocale.ca.test\/api\/v1\/delivery-types?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "http:\/\/api.solutionlocale.ca.test\/api\/v1\/delivery-types",
    "per_page": 15,
    "to": 4,
    "total": 4
  }
}
```

## GET /delivery-type/{id}

Retournera l'entité `deliveryType` de notre base de donnée, correspondante à `id` ou une erreur `404` lorsque l'entité est introuvable.

### Exemple de réponse

```json
{
  "data": {
    "id": 1,
    "name": "Collecte sans contact sur place"
  }
}
```