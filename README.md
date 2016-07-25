# Seminarsystem mit Doctrine

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
