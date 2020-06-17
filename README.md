# W1_Final_Project_G5_Back

* Cousin Charles
* Ferreira Raphael

## Adresse du serveur :
  ``ocean-api.vdpn.io/``

## Back Office :
Pour acceder au back office, vous rendez-vous a cette adresse :
  ``ocean-api.vdpn.io/admin/pages/back_office.php``
Depuis le back office, vous pouvez ajouter , editer ou supprimer des poissons.

## API :
Pour acceder a l'API, vous rendez-vous a cette adresse :
  ```ocean-api.vdpn.io/API/index.php```
  
### Description des URI
Pour obtenir une reponse, vous devez entrer un filtre et une value.
  ```ocean-api.vdpn.io/API/index.php?filter=[votre_filtre]&value=[votre_valeur]```
  
### Exemples : 
Recuperer les poissons de la zone 3 :
  ```ocean-api.vdpn.io/API/index.php?filter=zone&value=3```
Recuperer le poissons numero 12:
  ```ocean-api.vdpn.io/API/index.php?filter=id_animals&value=12```

## Choix technique

### Architecture
Nous avons decide de separer l'API et le back office pour limiter l'acces au back office avec un .htaccess.

### Outils
Les outils utilises ont ete selectionner pour nous rendre a l'aise possible avec le developpement back.
Nous avons donc utilise :
  PHP
  MariaDB
  phpMyAdmin
  Apache
