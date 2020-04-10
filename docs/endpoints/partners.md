# Partners

Une `partner` est une entité qui représente un partenaire de Solution Locale qui a fourni plusieurs entités `places` pour la base de donnée. Cette entité sert à reconnaître la provenance de l'entité auquel elle est associée.

## Attributs de l'objet `partner`

- `id` : identifiant numérique de l'entité.
- `name` : nom de l'entité.
- `slug` : un « slug » basé sur le nom de l'entreprise et, potentiellement, une chaîne de caractère unique. Utilisé pour générer les URL sur solutionlocale.ca

## GET /partners

Retourne l'entièreté des `partner`, paginée à 15 `partner` par page.

### Exemple de réponse

```json
{
  "data": [
    {
      "id": 1,
      "name": "UPA",
      "url": "https:\/\/www.upa.qc.ca\/"
    }
  ],
  "links": {
    "first": "http:\/\/api.solutionlocale.ca.test\/api\/v1\/partners?page=1",
    "last": "http:\/\/api.solutionlocale.ca.test\/api\/v1\/partners?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "http:\/\/api.solutionlocale.ca.test\/api\/v1\/partners",
    "per_page": 15,
    "to": 1,
    "total": 1
  }
}
```

## GET /partners/{id}

Retourne l'entité `partner` correspondante à `id` ou une erreur `404` lorsque l'entité est introuvable.

### Exemple de réponse

```json
{
  "data": {
    "id": 1,
    "name": "UPA",
    "url": "https:\/\/www.upa.qc.ca\/"
  }
}
```