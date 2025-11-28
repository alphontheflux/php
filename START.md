# 🚀 Démarrage rapide

## ✅ Ce qui fonctionne déjà

- ✅ MySQL : démarré (port 3306)
- ✅ phpMyAdmin : démarré (http://localhost:8080)

## ⚠️ Action requise pour PHP

**Docker Desktop doit partager le chemin `/Applications/MAMP/htdocs`**

### Étapes :

1. Ouvrez **Docker Desktop**
2. Allez dans **Settings** (⚙️) → **Resources** → **File Sharing**
3. Cliquez sur **"+"** et ajoutez : `/Applications/MAMP/htdocs`
4. Cliquez sur **"Apply & Restart"**

### Ensuite, redémarrez PHP :

```bash
docker-compose restart php
```

Ou si ça ne marche pas :

```bash
docker-compose up -d php
```

## 🌐 Accès

- **PHP** : http://localhost:8000
- **phpMyAdmin** : http://localhost:8080
- **MySQL** : localhost:3306 (user: root, password: root, database: mydb)

## 📋 Commandes utiles

```bash
# Voir l'état des containers
docker-compose ps

# Voir les logs
docker-compose logs -f php

# Arrêter tout
docker-compose down

# Redémarrer tout
docker-compose up -d
```
