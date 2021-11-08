# Locale Library

### simple package for Languages Support in your website

# how to use:

## lang/ar.php
```php
<?php
return [
    'welcome' => 'مرحبا',
    'have a nice day' => 'اتمنى لك يوم جميل'
];
```
## lang/en.php
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

$dir = __DIR__ . '/lang';
Locale::set('ar', $dir);
?>
```

## and simple use:

```php
Locale::get('welcome') // output مرحبا
```

## Suggest

### Format

```php 

<h1><?= Locale::get('Hello') ?></h1>

```

### make function to help you

```php
function __($filed) {
    return Locale::get($filed);
}



<h1><?= __('Hello') ?></h1>

```


## get locale

```php
Locale::locale() // output ar
```

Example

Change ltr or rtl

```php
<html>
    <head></head>
    <body dir="<?= Locale::locale() == 'ar' ? 'rtl' : 'ltr' ?>">
    
    <!--Here is your Amazing code-->
    
    </body>
    
</html>
```

# Licence
[MIT license.](https://opensource.org/licenses/MIT)