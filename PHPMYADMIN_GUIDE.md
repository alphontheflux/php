# 📊 Guide phpMyAdmin - Voir vos modifications

## ✅ Vérification : Les données sont bien sauvegardées !

Vos personnages sont **bien créés** dans la base de données `mydb`. 

## 🔍 Comment voir vos données dans phpMyAdmin

### Étape 1 : Accéder à phpMyAdmin
Ouvrez : **http://localhost:8080**

### Étape 2 : Sélectionner la bonne base de données
1. Dans le menu de gauche, cliquez sur **`mydb`** (pas sur `rpg_simple` si elle existe)
2. Vous verrez alors les tables : `classes` et `personnages`

### Étape 3 : Voir les personnages
1. Cliquez sur la table **`personnages`**
2. Cliquez sur l'onglet **"Afficher"** ou **"Parcourir"**
3. Vous verrez tous vos personnages, y compris les nouveaux !

### ⚠️ Si vous ne voyez pas vos modifications

**Solution 1 : Rafraîchir la page**
- Appuyez sur **F5** ou **Cmd+R** (Mac) dans phpMyAdmin

**Solution 2 : Vérifier la base de données**
- Assurez-vous d'avoir sélectionné **`mydb`** dans le menu de gauche
- Pas `rpg_simple` ou une autre base

**Solution 3 : Vérifier directement dans MySQL**
```bash
docker exec -i rpg_mysql mysql -uroot -proot mydb -e "SELECT * FROM personnages;"
```

## 📝 Base de données utilisée

- **Nom de la base** : `mydb`
- **User** : `root`
- **Password** : `root`
- **Host** : `mysql` (depuis PHP) ou `localhost:3306` (depuis votre Mac)

## ✅ Test rapide

1. Créez un personnage sur http://localhost:8001
2. Allez sur http://localhost:8080
3. Cliquez sur **`mydb`** → **`personnages`** → **Afficher**
4. Vous devriez voir votre nouveau personnage !

