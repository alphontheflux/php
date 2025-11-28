# 🎮 RPG Simple - Gestionnaire de Personnages RPG

Application PHP simple pour gérer des classes et personnages RPG avec Docker.

## 🚀 Démarrage rapide

### Prérequis
- Docker Desktop installé et démarré
- Ports 8001, 8080 et 3306 disponibles

### Installation

1. **Cloner le projet**
```bash
git clone <votre-url-github>
cd rpg_simple5
```

2. **Démarrer les containers**
```bash
docker-compose up -d
```

3. **Accéder à l'application**
- **Application PHP** : http://localhost:8001
- **phpMyAdmin** : http://localhost:8080
- **MySQL** : localhost:3306

### Configuration Docker Desktop

Si vous êtes sur Mac, assurez-vous que Docker Desktop partage le chemin `/Applications/MAMP/htdocs` :
1. Docker Desktop → Settings → Resources → File Sharing
2. Ajoutez `/Applications/MAMP/htdocs`
3. Apply & Restart

## 📦 Structure du projet

```
rpg_simple5/
├── docker-compose.yml      # Configuration Docker
├── src/                    # Code PHP
│   ├── index.php
│   ├── controllers/
│   ├── models/
│   ├── views/
│   └── assets/
└── README.md
```

## 🗄️ Base de données

- **Base** : `mydb`
- **User** : `root`
- **Password** : `root`
- **Host** (depuis PHP) : `mysql`

### Importer la structure SQL

Si vous avez un fichier SQL :
```bash
docker exec -i rpg_mysql mysql -uroot -proot mydb < votre_fichier.sql
```

## 🛠️ Commandes utiles

```bash
# Démarrer les containers
docker-compose up -d

# Arrêter les containers
docker-compose down

# Voir les logs
docker-compose logs -f

# Redémarrer un service
docker-compose restart php
```

## 📚 Documentation

- `README_DOCKER.md` : Guide complet Docker
- `START.md` : Guide de démarrage rapide
- `PHPMYADMIN_GUIDE.md` : Guide phpMyAdmin

## 🎯 Fonctionnalités

- ✅ Gestion des classes RPG
- ✅ Gestion des personnages
- ✅ Génération automatique de stats (PV, ATK)
- ✅ Interface d'administration
- ✅ Base de données MySQL persistante

## 🐳 Technologies

- PHP 8.2 + Apache
- MySQL 8.0
- phpMyAdmin
- Docker Compose

## 📝 Licence

Projet personnel

