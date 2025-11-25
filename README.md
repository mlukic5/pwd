# Passwortmanagement

## Allgemeines

Mit dieser Bibliothek kann ein fünfstelliges Passwort mit Großbuchstaben
und Zahlen erstellt werden.


## Verwendung

Composer-Package sinbinden mittels:

```php
require 'vendor/autoload.php'
```

Namespace angeben:
```php
use 'Manue\Pwd\Password';
```

Passwort generieren:

```php
$passwd = new Password();

// Passwort erstellen
$password = $passwd-> generate();
```