<?php
/**
 * @package LaravelFormExtensions
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace MikeFunk\LaravelFormExtensions;

use Illuminate\Support\Facades\Form as LaravelForm;
use Illuminate\Support\Facades\View;

/**
 * Form helper
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
class LaravelFormExtensions extends LaravelForm
{

    /**
     * booleanCheckbox
     *
     * @param string $name
     * @param bool $checked
     * @param array $options
     * @return string
     */
    public static function booleanCheckbox($name, $checked = null, $options = array())
    {
        return View::make(
            'laravel-form-extensions:boolean_checkbox_view',
            compact('name, checked, options')
        );
    }
}
