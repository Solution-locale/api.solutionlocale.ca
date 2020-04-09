# RCMs

Une `rcm` est un objet qui représente une entité administrative municipale (municipalité régionale de comté) à la province de Québec.

## Attributs de l'objet `rcm`

- `id` : identifiant numérique de l'entité dans la base de donnée.
- `name` : nom de la catégorie.
- `slug` : un _slug_ basé sur le nom de la région et, potentiellement, une chaîne de caractère unique. Utilisé pour générer les URL sur solutionlocale.ca.

## GET /rcms

Retournera l'entièreté des `rcm` de notre base de donnée, paginée à 15 `rcm` par page.

### Exemple de réponse

```json
{
  "data": [
    {
      "id": 1,
      "name": "La Matapédia",
      "slug": "la-matapedia"
    },
    {
      "id": 2,
      "name": "La Matanie",
      "slug": "la-matanie"
    }
  ],
  "links": {
    "first": "http:\/\/api.solutionlocale.ca.test\/api\/v1\/rcms?page=1",
    "last": "http:\/\/api.solutionlocale.ca.test\/api\/v1\/rcms?page=7",
    "prev": null,
    "next": "http:\/\/api.solutionlocale.ca.test\/api\/v1\/rcms?page=2"
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 7,
    "path": "http:\/\/api.solutionlocale.ca.test\/api\/v1\/rcms",
    "per_page": 15,
    "to": 15,
    "total": 99
  }
}
```

## GET /rcms/{id}

Retournera l'entité `rcm` de notre base de donnée, correspondante à `id` ou une erreur `404` lorsque l'entité est introuvable.

### Exemple de réponse

```json
{
  "data": {
    "id": 1,
    "name": "La Matapédia",
    "slug": "la-matapedia"
  }
}
```