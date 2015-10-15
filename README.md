Installation
------------

Get Composer

```bash
curl -sS https://getcomposer.org/installer | php
php composer.phar install
```

composer.json

```json
{
  "require": {
    "phpninjas/observable": "dev-master"
  }
}
```

JSON Library
----

A simple wrapper around the json_encode and json_decode functions that handle errors with exceptions as opposed to using the built-in functions from PHP.


Encoding
--------

Turn a php variable into a json string (and throw an error during failure).

```php
<?php

use phpninjas\JSON\JSON;
use phpninjas\JSON\JsonEncodingException;

try {
    $jsonString = JSON::encode($var);
}catch(JsonEncodingException $e){
    // handle exception
}
```


Decoding
--------

Turn a JSON string into a php variable (and throw an error during failure).

```php
<?php

use phpninjas\JSON\JSON;
use phpninjas\JSON\JsonDecodingException;

try {
    $var = JSON::decode($jsonString);
}catch(JsonDecodingException $e){
    // handle exception
}
```
