# Categories

Une `categorie` est un objet qui qualifie une entité d'entreprise (`place`).

## Attributs de l'objet `category`

- `id` : identifiant numérique de l'entité.
- `name` : nom de l'entité.
- `parent_id` : `id` de la catégorie parent ou `null` si l'entité est une catégorie de premier niveau.

## GET /categories

Retourne l'entièreté des `category`, paginé à 15 entités par page.

### Exemple de réponse

```json
{
  "data": [
    {
      "id": 6,
      "name": "Alimentation",
      "parent_id": null
    },
    {
      "id": 20,
      "name": "Hygiène et produits naturels",
      "parent_id": 7
    }
  ],
  "links": {
    "first": "http:\/\/api.solutionlocale.ca.test\/api\/v1\/categories?page=1",
    "last": "http:\/\/api.solutionlocale.ca.test\/api\/v1\/categories?page=3",
    "prev": null,
    "next": "http:\/\/api.solutionlocale.ca.test\/api\/v1\/categories?page=2"
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 3,
    "path": "http:\/\/api.solutionlocale.ca.test\/api\/v1\/categories",
    "per_page": 15,
    "to": 15,
    "total": 42
  }
}
```

## GET /categories/{id}

Retourne l'entité `category` correspondante à `id` ou une erreur `404` lorsque l'entité est introuvable.

### Exemple de réponse

```json
{
  "data": {
    "id": 6,
    "name": "Alimentation",
    "parent_id": null
  }
}
```