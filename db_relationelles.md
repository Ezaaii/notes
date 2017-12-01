# Notes sur les bases de données relationnelles

## Exemple tables
### Table : Creatures
<!-- On crée une table pour lister les créatures -->
| id | nom |
|---|---|
| 1 | Bulbizarre |
| 2 | Abra |
| 3 | Salamèche |
| 4 | Evoli |

### Table : Types
<!-- On crée une table pour leur donner un type -->
| id | type |
|---|---|
| 1 | Plante |
| 2 | Feu |
| 3 | Psy |
| 4 | Eau |

### Table : relationnelles
<!-- On crée une table pour lier les créatures aux types correspondants -->
| id_creature | id_type |
|---|---|
| 1 | 1 |
| 2 | 3 |
| 3 | 2 |
| 4 | 1 |
| 4 | 2 |
| 4 | 3 |
| 4 | 4 |

## Relations

```
SELECT * FROM 'creatures','type' WHERE creatures.types_id=types.types_id and types.type='eau';
```
