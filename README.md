# Locale Library

### simple package for Languages Support in your website

# how to use:

## langs/ar.php
```php
<?php
return [
    'welcome' => 'مرحبا',
    'have a nice day' => 'اتمنى لك يوم جميل'
];
```
## langs/en.php
```php
<?php
return [
    
]
```
## index.php 

```php
<?php
// setup
require __dir__ . '/vendor/autoload.php';

use I74ifa/Locale/Locale;

// directory to languages

$dir = __DIR__ . '/langs';
Locale::set('ar', $dir);
?>
```

## and simple use:


```php
Locale::get('welcome') // output مرحبا
```

## get locale

```php
Locale::locale() // output ar
```

# Licence
[MIT license.](https://opensource.org/licenses/MIT)