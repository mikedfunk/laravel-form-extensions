<?php
/**
 * @package LaravelFormExtensions
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace MikeFunk\LaravelFormExtensions;

use Illuminate\Support\Facades\Form as LaravelForm;

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
        // set up the hidden field, start the main checkbox, check it if true
        $return = '<input type="hidden" name="'.$name.'" value="0" />'."\n";
        $return .= '<input type="checkbox" name="'.$name.'" value="1" ';
        $return .= $checked ? 'checked="checked" ' : '';

        // for each html param passed, add it to the input and close it up
        foreach ($options as $key => $value) {
            $return .= $key.'="'.$value.'" ';
        }
        $return .= '/>'."\n";
        return $return;
    }
}
