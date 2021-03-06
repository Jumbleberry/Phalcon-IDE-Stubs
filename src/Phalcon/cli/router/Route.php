<?php

namespace Phalcon\Cli\Router;

/**
 * Phalcon\Cli\Router\Route
 *
 * This class represents every route added to the router
 */
class Route
{

    const DEFAULT_DELIMITER = ' ';


    protected $_pattern;


    protected $_compiledPattern;


    protected $_paths;


    protected $_converters;


    protected $_id;


    protected $_name;


    protected $_beforeMatch;


    protected $_delimiter;


    static protected $_uniqueId;


    static protected $_delimiterPath;


    /**
     * Phalcon\Cli\Router\Route constructor
     *
     * @param string $pattern
     * @param array $paths
     */
    public function __construct(string $pattern, $paths = null)
    {
    }

    /**
     * Replaces placeholders from pattern returning a valid PCRE regular expression
     *
     * @param string $pattern
     * @return string
     */
    public function compilePattern(string $pattern): string
    {
    }

    /**
     * Extracts parameters from a string
     *
     * @param string $pattern
     * @return array|boolean
     */
    public function extractNamedParams(string $pattern)
    {
    }

    /**
     * Reconfigure the route adding a new pattern and a set of paths
     *
     * @param string $pattern
     * @param array $paths
     */
    public function reConfigure(string $pattern, $paths = null)
    {
    }

    /**
     * Returns the route's name
     *
     * @return string
     */
    public function getName(): string
    {
    }

    /**
     * Sets the route's name
     *
     * <code>
     * $router->add(
     *     "/about",
     *     [
     *         "controller" => "about",
     *     ]
     * )->setName("about");
     * </code>
     *
     * @param string $name
     * @return Route
     */
    public function setName(string $name): Route
    {
    }

    /**
     * Sets a callback that is called if the route is matched.
     * The developer can implement any arbitrary conditions here
     * If the callback returns false the route is treated as not matched
     *
     * @param callback $callback
     * @return \Phalcon\Cli\Router\Route
     */
    public function beforeMatch($callback): Route
    {
    }

    /**
     * Returns the 'before match' callback if any
     *
     * @return mixed
     */
    public function getBeforeMatch()
    {
    }

    /**
     * Returns the route's id
     *
     * @return string
     */
    public function getRouteId(): string
    {
    }

    /**
     * Returns the route's pattern
     *
     * @return string
     */
    public function getPattern(): string
    {
    }

    /**
     * Returns the route's compiled pattern
     *
     * @return string
     */
    public function getCompiledPattern(): string
    {
    }

    /**
     * Returns the paths
     *
     * @return array
     */
    public function getPaths(): array
    {
    }

    /**
     * Returns the paths using positions as keys and names as values
     *
     * @return array
     */
    public function getReversedPaths(): array
    {
    }

    /**
     * Adds a converter to perform an additional transformation for certain parameter
     *
     * @param string $name
     * @param callable $converter
     * @return \Phalcon\Cli\Router\Route
     */
    public function convert(string $name, $converter): Route
    {
    }

    /**
     * Returns the router converter
     *
     * @return array
     */
    public function getConverters(): array
    {
    }

    /**
     * Resets the internal route id generator
     */
    public static function reset()
    {
    }

    /**
     * Set the routing delimiter
     *
     * @param string $delimiter
     */
    public static function delimiter(string $delimiter = null)
    {
    }

    /**
     * Get routing delimiter
     *
     * @return string
     */
    public static function getDelimiter(): string
    {
    }

}
