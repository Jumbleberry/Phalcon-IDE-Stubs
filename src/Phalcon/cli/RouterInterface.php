<?php

namespace Phalcon\Cli;

use Phalcon\Cli\Router\RouteInterface;

/**
 * Phalcon\Cli\RouterInterface
 *
 * Interface for Phalcon\Cli\Router
 */
interface RouterInterface
{


    /**
     * Sets the name of the default module
     *
     * @param string $moduleName
     * @return void
     */
    public function setDefaultModule(string $moduleName): void;

    /**
     * Sets the default task name
     *
     * @param string $taskName
     * @return void
     */
    public function setDefaultTask(string $taskName): void;

    /**
     * Sets the default action name
     *
     * @param string $actionName
     * @return void
     */
    public function setDefaultAction(string $actionName): void;

    /**
     * Sets an array of default paths
     *
     * @param array $defaults
     * @return void
     */
    public function setDefaults(array $defaults): void;

    /**
     * Handles routing information received from the rewrite engine
     *
     * @param array $arguments
     * @return void
     */
    public function handle($arguments = null): void;

    /**
     * Adds a route to the router on any HTTP method
     *
     * @param string $pattern
     * @param mixed $paths
     * @return RouteInterface
     */
    public function add(string $pattern, $paths = null): RouteInterface;

    /**
     * Returns processed module name
     *
     * @return string
     */
    public function getModuleName(): string;

    /**
     * Returns processed task name
     *
     * @return string
     */
    public function getTaskName(): string;

    /**
     * Returns processed action name
     *
     * @return string
     */
    public function getActionName(): string;

    /**
     * Returns processed extra params
     *
     * @return array
     */
    public function getParams(): array;

    /**
     * Returns the route that matches the handled URI
     *
     * @return RouteInterface
     */
    public function getMatchedRoute(): RouteInterface;

    /**
     * Return the sub expressions in the regular expression matched
     *
     * @return array
     */
    public function getMatches(): array;

    /**
     * Check if the router matches any of the defined routes
     *
     * @return bool
     */
    public function wasMatched(): bool;

    /**
     * Return all the routes defined in the router
     *
     * @return array|\Phalcon\Cli\Router\RouteInterface[]
     */
    public function getRoutes(): array;

    /**
     * Returns a route object by its id
     *
     * @param mixed $id
     * @return RouteInterface
     */
    public function getRouteById($id): RouteInterface;

    /**
     * Returns a route object by its name
     *
     * @param string $name
     * @return RouteInterface
     */
    public function getRouteByName(string $name): RouteInterface;
}
