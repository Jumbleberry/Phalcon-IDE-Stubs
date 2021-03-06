<?php

namespace Phalcon\Mvc;

use Phalcon\Application as BaseApplication;
use Phalcon\DiInterface;
use Phalcon\Mvc\ViewInterface;
use Phalcon\Mvc\RouterInterface;
use Phalcon\Http\ResponseInterface;
use Phalcon\Events\ManagerInterface;
use Phalcon\Mvc\DispatcherInterface;
use Phalcon\Mvc\Application\Exception;
use Phalcon\Mvc\Router\RouteInterface;
use Phalcon\Mvc\ModuleDefinitionInterface;

/**
 * Phalcon\Mvc\Application
 *
 * This component encapsulates all the complex operations behind instantiating every component
 * needed and integrating it with the rest to allow the MVC pattern to operate as desired.
 *
 * <code>
 * use Phalcon\Mvc\Application;
 *
 * class MyApp extends Application
 * {
 *     /
 * Register the services here to make them general or register
 * in the ModuleDefinition to make them module-specific
 * \/
 *     protected function registerServices()
 *     {
 *
 *     }
 *
 *     /
 * This method registers all the modules in the application
 * \/
 *     public function main()
 *     {
 *         $this->registerModules(
 *             [
 *                 "frontend" => [
 *                     "className" => "Multiple\\Frontend\\Module",
 *                     "path"      => "../apps/frontend/Module.php",
 *                 ],
 *                 "backend" => [
 *                     "className" => "Multiple\\Backend\\Module",
 *                     "path"      => "../apps/backend/Module.php",
 *                 ],
 *             ]
 *         );
 *     }
 * }
 *
 * $application = new MyApp();
 *
 * $application->main();
 * </code>
 */
class Application extends \Phalcon\Application
{

    protected $_implicitView = true;


    protected $_sendHeaders = true;


    protected $_sendCookies = true;


    /**
     * Enables or disables sending headers by each request handling
     *
     * @param bool $sendHeaders
     * @return Application
     */
    public function sendHeadersOnHandleRequest(bool $sendHeaders): Application
    {
    }

    /**
     * Enables or disables sending cookies by each request handling
     *
     * @param bool $sendCookies
     * @return Application
     */
    public function sendCookiesOnHandleRequest(bool $sendCookies): Application
    {
    }

    /**
     * By default. The view is implicitly buffering all the output
     * You can full disable the view component using this method
     *
     * @param bool $implicitView
     * @return Application
     */
    public function useImplicitView(bool $implicitView): Application
    {
    }

    /**
     * Handles a MVC request
     *
     * @param string $uri
     * @return bool|\Phalcon\Http\ResponseInterface
     */
    public function handle(string $uri = null)
    {
    }

}
