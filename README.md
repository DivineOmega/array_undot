# array_undot

[![Build Status](https://travis-ci.org/rapidwebltd/array_undot.svg?branch=master)](https://travis-ci.org/rapidwebltd/array_undot)

This package provides a helper function called `array_undot`, which expands a dot notation array into a full multi-dimensional array. 
It is, therefore, the opposite of the `array_dot` helper function provided by Laravel.

Usage example:

```php
$dotNotationArray = ['products.desk.price' => 100];

$expanded = array_undot($dotNotationArray)

// ['products' => ['desk' => ['price' => 100]]];
```

```php
$dotNotationArray = ['products.desk.price' => 100, 
                     'products.desk.name' => 'Oak Desk',
                     'products.lamp.price' => 15,
                     'products.lamp.name' => 'Red Lamp'];

$expanded = array_undot($dotNotationArray)

/*
[
    'products' => [
        'desk' => [
            'price' => 100,
            'name' => 'Oak Desk'
        ],
        'lamp' => [
            'price' => 15,
            'name' => 'Red Lamp'
        ]
    ]
]
*/

```