# Delivery types

Un `deliveryType` est une entité qui qualifie la ou les méthodes de distributions d'une entité d'entreprise (`place`) selon les critères établis par Solution locale.

## Attributs de l'objet `deliveryType`

- `id` : identifiant numérique de l'entité.
- `name` : nom de l'entité.

## GET /delivery-types

Retourne l'entièreté des `deliveryType`, paginé à 15 entités par page.

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

## GET /delivery-types/{id}

Retournera l'entité `deliveryType` correspondante à `id` ou une erreur `404` lorsque l'entité est introuvable.

### Exemple de réponse

```json
{
  "data": {
    "id": 1,
    "name": "Collecte sans contact sur place"
  }
}
```