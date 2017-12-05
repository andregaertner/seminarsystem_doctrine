# Seminarsystem mit Doctrine
<!--
<div align="center">
  <br />
  <p>
    <a href="https://discord.js.org"><img src="https://discord.js.org/static/logo.svg" width="546" alt="discord.js" /></a>
  </p>
  <br />
  <p>
    <a href="https://discord.gg/bRCvFy9"><img src="https://discordapp.com/api/guilds/222078108977594368/embed.png" alt="Discord server" /></a>
    <a href="https://www.npmjs.com/package/discord.js"><img src="https://img.shields.io/npm/v/discord.js.svg?maxAge=3600" alt="NPM version" /></a>
    <a href="https://www.npmjs.com/package/discord.js"><img src="https://img.shields.io/npm/dt/discord.js.svg?maxAge=3600" alt="NPM downloads" /></a>
    <a href="https://travis-ci.org/hydrabolt/discord.js"><img src="https://travis-ci.org/hydrabolt/discord.js.svg" alt="Build status" /></a>
    <a href="https://david-dm.org/hydrabolt/discord.js"><img src="https://img.shields.io/david/hydrabolt/discord.js.svg?maxAge=3600" alt="Dependencies" /></a>
    <a href="https://www.patreon.com/discordjs"><img src="https://img.shields.io/badge/donate-patreon-F96854.svg" alt="Patreon" /></a>
  </p>
  <p>
    <a href="https://nodei.co/npm/discord.js/"><img src="https://nodei.co/npm/discord.js.png?downloads=true&stars=true" alt="NPM info" /></a>
  </p>
</div>
-->

![alt text](https://andregaertner.com/wp-content/uploads/seminarsystem_doctrine.png)

#Projekt installieren

Um das Projekt auf Ihrem System zu installieren, müssen Sie folgende Schritte tätigen.  

<strong>Schritt 1</strong>

Laden Sie das Repository in Ihr locales Verzeichnis.

<strong>Schritt 2</strong>

Erstellen Sie eine Datenbank in MySQL.

<strong>Schritt 3</strong>

Ändern Sie die Logindaten für Ihre MySQL-Verbindung und Ihrer Datenbank in der Datei config.inc.php im Verzeichnis:

```
seminarsystem_doctrine/
├── inc/
│   ├── config.inc.php
```

<strong>Schritt 4</strong>

Rufen Sie die Seite http://localhost:8888/seminarsystem-mvc/setup.php auf.

<strong>Schritt 5</strong>

Rufen Sie die Seite http://localhost:8888/seminarsystem-mvc/reset.php auf.

<strong>Schritt 6</strong>

Laden Sie alle Abhängigkeiten mit Composer nach!

```
$ php composer.phar install
```

# Applikation

Danach sollte die MySQL Datenbank mit Inhalten erstellt sein und die Applikation lauffähig.

Danach können Sie unter:

<strong>http://localhost:8888/ihr_verzeichnis</strong><br>
<strong>http://localhost:8888/ihr_verzeichnis/admin</strong>

das Frontend und Backend der Applikation abrufen.
