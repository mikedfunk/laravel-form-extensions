<?php
/**
 * @package LaravelFormExtensions
 * @copyright 2013 Xulon Press, Inc. All Rights Reserved.
 */
namespace MikeFunk\LaravelFormExtensions\Tests;

use MikeFunk\LaravelFormExtensions\LaravelFormExtensions as Form;

/**
 * LaravelFormExtensionsTest
 *
 * @author Michael Funk <mfunk@christianpublishing.com>
 */
class LaravelFormExtensionsTest extends \PHPUnit_Framework_TestCase
{

    /**
     * setUp
     *
     * @return void
     */
    public function setUp()
    {
        $this->form = new Form;
    }

    /**
     * testBooleanCheckbox
     *
     * @return void
     */
    public function testBooleanCheckbox()
    {
        $expected = '<input type="hidden" name="joe" value="0" />' . "\n";
        $expected .= '<input type="checkbox" name="joe" value="1" checked="checked" class="awesome" />' . "\n";
        $actual = $this->form->booleanCheckbox('joe', true, array('class' => 'awesome'));
        $this->assertEquals($expected, $actual);
    }
}
