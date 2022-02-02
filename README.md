# aminnairi/siren

French SIREN number validator

[![Test](https://github.com/aminnairi/php-siren/actions/workflows/test.yaml/badge.svg)](https://github.com/aminnairi/php-siren/actions/workflows/test.yaml)

## Installation

```bash
mkdir project
cd project
composer init
composer require aminnairi/siren
```

## Usage

```bash
touch index.php
```

```php
<?php

use Aminnairi\Siren\Siren;

require "./vendor/autoload.php";

var_dump(Siren::isValid("732829320"));
var_dump(Siren::isValid("732829321"));
```

```bash
php index.php
```

```
bool(true)
bool(false)
```
