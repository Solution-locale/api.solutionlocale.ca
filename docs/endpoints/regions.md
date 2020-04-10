# Regions

Une `region` est une entité qui représente une entité administrative provinciale (région administrative) à la province de Québec.

Une `region` est une entité qui représente un type de découpage géographique de la province de Québec, les régions d'administratives.

## Attributs de l'objet `region`

- `id` : identifiant numérique de l'entité.
- `name` : nom de l'entité.
- `slug` : un « slug » basé sur le nom de l'entreprise et, potentiellement, une chaîne de caractère unique. Utilisé pour générer les URL sur solutionlocale.ca

## GET /regions

Retourne l'entièreté des `region`, paginée à 15 `region` par page.

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

## GET /regions/{id}

Retourne l'entité `region` correspondante à `id` ou une erreur `404` lorsque l'entité est introuvable.

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