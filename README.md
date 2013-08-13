# Laravel Form Extensions

At the moment this only contains ```booleanCheckbox()```.

## Installation

Put this in your composer.json require object:

```"mike-funk/laravel-form-extensions": "dev-master"```

Then put this in your ```app/config/app.php``` under providers:

```MikeFunk\LaravelFormExtensions\LaravelFormExtensionsServiceProvider```

Then change the binding for the Form facade in app/config/app.php under aliases:

```'Form' => 'MikeFunk\LaravelFormExtensions\LaravelFormExtensions'```

Then run ```composer dump-autoload``` and you should be good to go.

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
