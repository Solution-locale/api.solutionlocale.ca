# Regions

Une `region` est un objet qui représente une entité administrative provinciale (région administrative) à la province de Québec.

## Attributs de l'objet `region`

- `id` : identifiant numérique de l'entité dans la base de donnée.
- `name` : nom de la catégorie.
- `slug` : un _slug_ basé sur le nom de la région et, potentiellement, une chaîne de caractère unique. Utilisé pour générer les URL sur solutionlocale.ca.

## GET /regions

Retournera l'entièreté des `region` de notre base de donnée, paginée à 15 `region` par page.

### Exemple de réponse

```json
{
  "data": [
    {
      "region_id": 1,
      "name": "Bas-Saint-Laurent",
      "slug": "bas-saint-laurent"
    }
  ],
  "links": {
    "first": "http:\/\/api.solutionlocale.ca.test\/api\/v1\/regions?page=1",
    "last": "http:\/\/api.solutionlocale.ca.test\/api\/v1\/regions?page=2",
    "prev": null,
    "next": "http:\/\/api.solutionlocale.ca.test\/api\/v1\/regions?page=2"
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 2,
    "path": "http:\/\/api.solutionlocale.ca.test\/api\/v1\/regions",
    "per_page": 15,
    "to": 15,
    "total": 17
  }
}
```

## GET /region/{id}

Retournera l'entité `region` de notre base de donnée, correspondante à `id` ou une erreur `404` lorsque l'entité est introuvable.

### Exemple de réponse

```json
{
  "data": {
    "region_id": 1,
    "name": "Bas-Saint-Laurent",
    "slug": "bas-saint-laurent"
  }
}
```