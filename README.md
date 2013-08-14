[![Build Status](https://secure.travis-ci.org/mikedfunk/laravel-form-extensions.png?branch=master)](http://travis-ci.org/mikedfunk/laravel-form-extensions)

# Laravel Form Extensions

At the moment this only contains ```booleanCheckbox()```.

## Installation

Put this in your composer.json require object:

```json
"mike-funk/laravel-form-extensions": "dev-master"
```

Then run ```composer update```

Then put this in your ```app/config/app.php``` under providers:

```php
'MikeFunk\LaravelFormExtensions\LaravelFormExtensionsServiceProvider'
```

Then change the binding for the Form facade in app/config/app.php under aliases:

```php
'Form' => 'MikeFunk\LaravelFormExtensions\LaravelFormExtensions'
```

You should be ready to rock!

## Usage

### booleanCheckbox()

```php
// in the view
{{ Form::booleanCheckbox('input_name', true, array('class' => 'awesome')) }}
```

Will return this HTML:
```html
<input type="hidden" name="input_name" value="0" />
<input type="checkbox" name="input_name" value="1" checked="checked" class="awesome" />
```
