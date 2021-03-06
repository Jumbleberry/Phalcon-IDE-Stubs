<?php

namespace Phalcon\Debug;

use Phalcon\Di;

/**
 * Phalcon\Debug\Dump
 *
 * Dumps information about a variable(s)
 *
 * <code>
 * $foo = 123;
 *
 * echo (new \Phalcon\Debug\Dump())->variable($foo, "foo");
 * </code>
 *
 * <code>
 * $foo = "string";
 * $bar = ["key" => "value"];
 * $baz = new stdClass();
 *
 * echo (new \Phalcon\Debug\Dump())->variables($foo, $bar, $baz);
 * </code>
 */
class Dump
{

    protected $_detailed = false;


    protected $_methods = array();


    protected $_styles;



    public function getDetailed()
    {
    }

    /**
     * @param mixed $detailed
     */
    public function setDetailed($detailed)
    {
    }

    /**
     * Phalcon\Debug\Dump constructor
     *
     * @param boolean $detailed debug object's private and protected properties
     * @param array $styles
     */
    public function __construct(array $styles = array(), bool $detailed = false)
    {
    }

    /**
     * Alias of variables() method
     *
     * @param mixed $variable
     * @param ...
     * @return string
     */
    public function all(): string
    {
    }

    /**
     * Get style for type
     *
     * @param string $type
     * @return string
     */
    protected function getStyle(string $type): string
    {
    }

    /**
     * Set styles for vars type
     *
     * @param array $styles
     * @return array
     */
    public function setStyles(array $styles = array()): array
    {
    }

    /**
     * Alias of variable() method
     *
     * @param mixed $variable
     * @param string $name
     * @return string
     */
    public function one($variable, string $name = null): string
    {
    }

    /**
     * Prepare an HTML string of information about a single variable.
     *
     * @param mixed $variable
     * @param string $name
     * @param int $tab
     * @return string
     */
    protected function output($variable, string $name = null, int $tab = 1): string
    {
    }

    /**
     * Returns an HTML string of information about a single variable.
     *
     * <code>
     * echo (new \Phalcon\Debug\Dump())->variable($foo, "foo");
     * </code>
     *
     * @param mixed $variable
     * @param string $name
     * @return string
     */
    public function variable($variable, string $name = null): string
    {
    }

    /**
     * Returns an HTML string of debugging information about any number of
     * variables, each wrapped in a "pre" tag.
     *
     * <code>
     * $foo = "string";
     * $bar = ["key" => "value"];
     * $baz = new stdClass();
     *
     * echo (new \Phalcon\Debug\Dump())->variables($foo, $bar, $baz);
     * </code>
     *
     * @param mixed $variable
     * @param ...
     * @return string
     */
    public function variables(): string
    {
    }

    /**
     * Returns an JSON string of information about a single variable.
     *
     * <code>
     * $foo = [
     *     "key" => "value",
     * ];
     *
     * echo (new \Phalcon\Debug\Dump())->toJson($foo);
     *
     * $foo = new stdClass();
     * $foo->bar = "buz";
     *
     * echo (new \Phalcon\Debug\Dump())->toJson($foo);
     * </code>
     *
     * @param mixed $variable
     * @return string
     */
    public function toJson($variable): string
    {
    }

}
