<?php
/**
 * @package LaravelFormExtensions
 * @copyright 2013 Xulon Press, Inc. All Rights Reserved.
 */
namespace MikeFunk\LaravelFormExtensions\Tests;

use Illuminate\Support\Facades\View;
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
        View::shouldReceive('make');
        $this->form->booleanCheckbox('joe');
        $this->markTestIncomplete();
    }
}
