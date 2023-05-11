# Oiseaux de Paris - les oiseaux de Paris et de sa région

### version du 26 avr. 2023

```sh
  "name": "www.oiseaux.paris",
  "version": "1.0.0",
  "description": "les oiseaux de Paris et de sa région",
```

## Installation

**Composer** est nécessaire ! 

```sh
  //Récupérer le dépôt
  git clone git@github.com:M-LR/oiseaux.paris.git

  //Changer de répertoire
  cd oiseaux.paris

  //Installer les dépendances 
  composer update
```

## Initialisation
```sh
  //Lancer le serveur PHP
  cd public/
  php -S localhost:8000
```

## Tests exemples (phpUnit)
```sh
  //php unit
  php vendor/bin/phpunit tests/ExampleTest.php
  php vendor/bin/phpunit tests/ExampleTest.php --filter testProductFunction
  php vendor/bin/phpunit tests/ExampleTest.php --colors --testdox  
```
