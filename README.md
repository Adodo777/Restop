## 🍽️ Restop - WordPress E-commerce  
### Reproduction du site Metics Fashion  

![Restop](https://meticsfashion.com/wp-content/uploads/2023/01/logo.png)  

---

### 📌 **À propos du projet**  
**Restop** est une reproduction fidèle du site **[Metics Fashion](https://meticsfashion.com/)**, développée dans le cadre de notre formation. Ce projet WordPress utilise **WooCommerce** pour la gestion des produits et Elementor pour une personnalisation avancée.  

---

### ⚙️ **Technologies utilisées**  
- **WordPress** (CMS)  
- **WooCommerce** (Gestion des produits)  
- **Elementor** (Page Builder)  
- **PHP, HTML, CSS, JavaScript**  
- **MySQL** (Base de données)  

---

### 🚀 **Installation et configuration**  

#### 📥 **1. Cloner le projet**  
```bash
git clone https://github.com/nom-de-ton-repo/restop.git
cd restop
```

#### ⚡ **2. Installer WordPress**  
1. Installe un serveur local (**XAMPP, WAMP, MAMP**).  
2. Déplace le dossier du projet dans `htdocs` (ou `www` si WAMP).  
3. Crée une base de données nommée **restop_db** via **phpMyAdmin**.  
4. Configure **wp-config.php** avec ces paramètres :  
```php
define('DB_NAME', 'restop_db');
define('DB_USER', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_HOST', 'localhost');
```

#### 📦 **3. Importer la base de données**  
- Ouvre **phpMyAdmin**  
- Sélectionne la base de données **restop_db**  
- Importe le fichier **restop_db.sql** fourni  

#### 🔥 **4. Lancer le site**  
Dans le navigateur, entre l'URL suivante :  
```
http://localhost/restop
```

---

### 🎨 **Personnalisation**  
Tu peux modifier :  
- **Les couleurs et polices** via l'outil de personnalisation de WordPress  
- **Les pages et sections** avec **Elementor**  
- **Les produits et catégories** via **WooCommerce**  

---

### 🛠️ **Fonctionnalités clés**  
✅ Page d'accueil moderne et dynamique  
✅ Système de panier et paiement WooCommerce  
✅ Gestion des commandes et des clients  
✅ Site responsive & optimisé SEO  
✅ Blog intégré pour les nouveautés  

---

### 📌 **Crédits & Auteurs**  
- **Développé par** : Marcos
- **Formation** : DCLIC/Ecole229
- **Référence originale** : [Metics Fashion](https://meticsfashion.com/)  

---

### 📢 **Note importante**  
🚨 Ce projet est une reproduction réalisée à des fins pédagogiques uniquement. 🚨  

