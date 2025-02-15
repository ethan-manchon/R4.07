# 🐘 Symfony Web Project with Docker

Développement d'une application web robuste en **Symfony** avec un environnement conteneurisé grâce à **Docker**.

## 🚀 Installation

1. **Cloner le dépôt :**

   ```sh
   git clone https://github.com/ethan-manchon/R4.07.git
   ```
## 🎯 Objectif du Projet

Ce projet vise à fournir une base solide pour développer des applications web en **Symfony**, tout en exploitant **Docker** pour faciliter le déploiement et la gestion des dépendances.

## 🛠 Technologies utilisées<br>

## Sauvegarder votre base de données
Si vous avez accès à la base de données, faites un export depuis phpMyAdmin en cliquant sur la base dans le menu à gauche, puis sur l'onglet "Exporter". Vous pouvez ensuite sauvegarder le fichier avec le nom lego_store.sql dans le répertoire docker/mysql/ de votre projet. De cette manière, si la base de données est vierge, le fichier sera automatiquement chargé et vous retrouverez la base que vous aviez auparavant.

## ✨ Fonctionnalités<br>

**Pensez à commit la version de votre projet et à faire un export de votre base de données au moins une fois en fin de séance!**

Pour faire un commit:
S'il y a besoin, commencez par mettre à jour votre Fork avec les derniers commits du repository de base. Pour cela, allez sur votre repository sur GitHub, puis faites "Sync Fork" -> "Update branch".

Ensuite exécutez ces commandes:
```
# Positionnez-vous dans le répertoire du projet si ce n'est pas déjà fait
cd R4.DWeb-DI.07/

# Faites le commit (vous pouvez personnaliser le message entre guillemets)
git add .
git commit -m "TPX - Exercice X" 

# Mettez à jour votre repository local avec la dernière version du repository distant
git fetch
git rebase

# Mettez à jour le repository sur GitHub
git push -u
```

## Bugs connus
### Fichiers avec l'extension :Zone.Identifier
Si votre projet contient un ou plusieurs fichiers avec l'extension :Zone.Identifier, c'est certainement parce que vous avez déplacé des fichiers provenant de votre système de fichiers Windows vers votre distribution Linux.
Ils ne sont pas utiles, vous pouvez les supprimer avec cette commande : `sudo find . -name "*:Zone.Identifier" -type f -delete`. Le mot de passe est celui du user de votre distribution Linux.

Si vous souhaitez désactiver définitivement la création de ces fichiers, [vous pouvez suivre les instructions juste ici](https://codedesign.fr/snippet/supprimer-fichier-zone-identifier-windows-wsl/).

## Liens
[TP1 : Introduction à Symfony](https://docs.google.com/document/d/1p57bF8mDKqiQ3j7rnpXmQ3zNeGixdrL8mB9-7ei4xPw/edit?usp=sharing)

[TP2 : Symfony / Twig](https://docs.google.com/document/d/11uuAOaOj0v4lq472WgB8HtH0jFywj6eqPpf_MF6erPA/edit?usp=sharing)

[TP3 : Symfony / Database as a Service](https://docs.google.com/document/d/1cR5Er7pTwAj1ihKRMcsArq_EEaEUslYvOdaPq20NPmY/edit?usp=sharing)

[TP4 : Symfony / Doctrine](https://docs.google.com/document/d/1Og8lNe1Afz20ExA_TRfgnvA7vMFhnnEaoDwHnVdpzNk/edit?usp=sharing)

[TP5 : Symfony / Doctrine #2](https://docs.google.com/document/d/1uHgIVIQJMGPuTIubSbYgccfyh6NRQjEE3leYa9K2bLg/edit?usp=sharing)
