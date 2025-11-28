# 🐳 Guide Docker - Projet PHP

## 📁 Arborescence minimale du projet

```
rpg_simple5/
├── docker-compose.yml          # Configuration Docker
├── src/                        # Code PHP (monté dans le container)
│   ├── index.php
│   ├── controllers/
│   ├── models/
│   └── views/
└── README_DOCKER.md            # Ce fichier
```

### ⚠️ Important : Organisation du code

Votre code PHP doit être dans le dossier `./src/`.

**Option 1 : Déplacer le code dans src** (recommandé)

```bash
# Depuis la racine du projet
mv index.php controllers models views assets src/
```

**Option 2 : Modifier docker-compose.yml**
Si vous préférez garder le code à la racine, modifiez la ligne 12 de `docker-compose.yml` :

```yaml
volumes:
  - .:/var/www/html # Au lieu de ./src:/var/www/html
```

## 🚀 Commandes essentielles

### Démarrer les containers

```bash
docker-compose up -d
```

### Arrêter les containers

```bash
docker-compose down
```

### Arrêter et supprimer les volumes (⚠️ supprime les données MySQL)

```bash
docker-compose down -v
```

### Voir les logs

```bash
docker-compose logs -f
```

### Redémarrer un service spécifique

```bash
docker-compose restart php
```

## 🌐 Accès aux services

- **PHP/Apache** : http://localhost:8000
- **phpMyAdmin** : http://localhost:8080
- **MySQL** : localhost:3306

## 🔧 Configuration MySQL

- **Host** (depuis PHP) : `mysql` (nom du service Docker)
- **Host** (depuis votre Mac) : `localhost`
- **User** : `root`
- **Password** : `root`
- **Database** : `mydb`

## 📝 Explication du docker-compose.yml

### Service `php`

- **Image** : `php:8.2-apache` (PHP 8.2 avec Apache, compatible ARM)
- **Platform** : `linux/arm64` (pour Mac M1/M2)
- **Port** : `8000:80` (votre Mac:8000 → container:80)
- **Volume** : `./src:/var/www/html` (votre code dans le container)
- **Dépendance** : attend que MySQL soit prêt

### Service `mysql`

- **Image** : `mysql:8.0` (compatible ARM)
- **Port** : `3306:3306` (MySQL standard)
- **Variables d'environnement** : configure root password et database
- **Volume** : `mysql_data` (persiste les données)

### Service `phpmyadmin`

- **Image** : `phpmyadmin/phpmyadmin` (compatible ARM)
- **Port** : `8080:80`
- **Configuration** : se connecte automatiquement à MySQL

### Volume `mysql_data`

- Persiste les données MySQL même après `docker-compose down`
- Stocké dans Docker (gestion automatique)

## ✅ Vérification

1. **Démarrer** : `docker-compose up -d`
2. **Vérifier** : `docker-compose ps` (tous les containers doivent être "Up")
3. **Tester PHP** : http://localhost:8000
4. **Tester phpMyAdmin** : http://localhost:8080

## 🐛 Dépannage

### Les containers ne démarrent pas

```bash
docker-compose logs
```

### Port déjà utilisé

Modifiez les ports dans `docker-compose.yml` (ex: `8001:80` au lieu de `8000:80`)

### Réinitialiser MySQL

```bash
docker-compose down -v
docker-compose up -d
```
