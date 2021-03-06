<?php

namespace Phalcon\Mvc;

use Phalcon\DiInterface;
use Phalcon\Di\Injectable;
use Phalcon\Mvc\View\Exception;
use Phalcon\Mvc\ViewInterface;
use Phalcon\Cache\BackendInterface;
use Phalcon\Events\ManagerInterface;
use Phalcon\Mvc\View\Engine\Php as PhpEngine;

/**
 * Phalcon\Mvc\View
 *
 * Phalcon\Mvc\View is a class for working with the "view" portion of the model-view-controller pattern.
 * That is, it exists to help keep the view script separate from the model and controller scripts.
 * It provides a system of helpers, output filters, and variable escaping.
 *
 * <code>
 * use Phalcon\Mvc\View;
 *
 * $view = new View();
 *
 * // Setting views directory
 * $view->setViewsDir("app/views/");
 *
 * $view->start();
 *
 * // Shows recent posts view (app/views/posts/recent.phtml)
 * $view->render("posts", "recent");
 * $view->finish();
 *
 * // Printing views output
 * echo $view->getContent();
 * </code>
 */
class View extends Injectable implements \Phalcon\Mvc\ViewInterface
{
    /**
     * Render Level: To the main layout
     */
    const LEVEL_MAIN_LAYOUT = 5;

    /**
     * Render Level: Render to the templates "after"
     */
    const LEVEL_AFTER_TEMPLATE = 4;

    /**
     * Render Level: To the controller layout
     */
    const LEVEL_LAYOUT = 3;

    /**
     * Render Level: To the templates "before"
     */
    const LEVEL_BEFORE_TEMPLATE = 2;

    /**
     * Render Level: To the action view
     */
    const LEVEL_ACTION_VIEW = 1;

    /**
     * Render Level: No render any view
     */
    const LEVEL_NO_RENDER = 0;

    /**
     * Cache Mode
     */
    const CACHE_MODE_NONE = 0;


    const CACHE_MODE_INVERSE = 1;


    protected $_options;


    protected $_basePath = '';


    protected $_content = '';


    protected $_renderLevel = 5;


    protected $_currentRenderLevel = 0;


    protected $_disabledLevels;


    protected $_viewParams = array();


    protected $_layout;


    protected $_layoutsDir = '';


    protected $_partialsDir = '';


    protected $_viewsDirs = array();


    protected $_templatesBefore = array();


    protected $_templatesAfter = array();


    protected $_engines = false;

    /**
     * @var array
     */
    protected $_registeredEngines;


    protected $_mainView = 'index';


    protected $_controllerName;


    protected $_actionName;


    protected $_params;


    protected $_pickView;


    protected $_cache;


    protected $_cacheLevel = 0;


    protected $_activeRenderPaths;


    protected $_disabled = false;



    public function getRenderLevel()
    {
    }


    public function getCurrentRenderLevel()
    {
    }

    /**
     * @return array
     */
    public function getRegisteredEngines(): array
    {
    }

    /**
     * Phalcon\Mvc\View constructor
     *
     * @param array $options
     */
    public function __construct(array $options = array())
    {
    }

    /**
     * Checks if a path is absolute or not
     *
     * @param string $path
     */
    protected final function _isAbsolutePath(string $path)
    {
    }

    /**
     * Sets the views directory. Depending of your platform,
     * always add a trailing slash or backslash
     *
     * @param mixed $viewsDir
     * @return View
     */
    public function setViewsDir($viewsDir): View
    {
    }

    /**
     * Gets views directory
     *
     * @return string|array
     */
    public function getViewsDir()
    {
    }

    /**
     * Sets the layouts sub-directory. Must be a directory under the views directory.
     * Depending of your platform, always add a trailing slash or backslash
     *
     * <code>
     * $view->setLayoutsDir("../common/layouts/");
     * </code>
     *
     * @param string $layoutsDir
     * @return View
     */
    public function setLayoutsDir(string $layoutsDir): View
    {
    }

    /**
     * Gets the current layouts sub-directory
     *
     * @return string
     */
    public function getLayoutsDir(): string
    {
    }

    /**
     * Sets a partials sub-directory. Must be a directory under the views directory.
     * Depending of your platform, always add a trailing slash or backslash
     *
     * <code>
     * $view->setPartialsDir("../common/partials/");
     * </code>
     *
     * @param string $partialsDir
     * @return View
     */
    public function setPartialsDir(string $partialsDir): View
    {
    }

    /**
     * Gets the current partials sub-directory
     *
     * @return string
     */
    public function getPartialsDir(): string
    {
    }

    /**
     * Sets base path. Depending of your platform, always add a trailing slash or backslash
     *
     * <code>
     *     $view->setBasePath(__DIR__ . "/");
     * </code>
     *
     * @param string $basePath
     * @return View
     */
    public function setBasePath(string $basePath): View
    {
    }

    /**
     * Gets base path
     *
     * @return string
     */
    public function getBasePath(): string
    {
    }

    /**
     * Sets the render level for the view
     *
     * <code>
     * // Render the view related to the controller only
     * $this->view->setRenderLevel(
     *     View::LEVEL_LAYOUT
     * );
     * </code>
     *
     * @param int $level
     * @return View
     */
    public function setRenderLevel(int $level): View
    {
    }

    /**
     * Disables a specific level of rendering
     *
     * <code>
     * // Render all levels except ACTION level
     * $this->view->disableLevel(
     *     View::LEVEL_ACTION_VIEW
     * );
     * </code>
     *
     * @param mixed $level
     * @return View
     */
    public function disableLevel($level): View
    {
    }

    /**
     * Sets default view name. Must be a file without extension in the views directory
     *
     * <code>
     * // Renders as main view views-dir/base.phtml
     * $this->view->setMainView("base");
     * </code>
     *
     * @param string $viewPath
     * @return View
     */
    public function setMainView(string $viewPath): View
    {
    }

    /**
     * Returns the name of the main view
     *
     * @return string
     */
    public function getMainView(): string
    {
    }

    /**
     * Change the layout to be used instead of using the name of the latest controller name
     *
     * <code>
     * $this->view->setLayout("main");
     * </code>
     *
     * @param string $layout
     * @return View
     */
    public function setLayout(string $layout): View
    {
    }

    /**
     * Returns the name of the main view
     *
     * @return string
     */
    public function getLayout(): string
    {
    }

    /**
     * Sets a template before the controller layout
     *
     * @param mixed $templateBefore
     * @return View
     */
    public function setTemplateBefore($templateBefore): View
    {
    }

    /**
     * Resets any "template before" layouts
     *
     * @return View
     */
    public function cleanTemplateBefore(): View
    {
    }

    /**
     * Sets a "template after" controller layout
     *
     * @param mixed $templateAfter
     * @return View
     */
    public function setTemplateAfter($templateAfter): View
    {
    }

    /**
     * Resets any template before layouts
     *
     * @return View
     */
    public function cleanTemplateAfter(): View
    {
    }

    /**
     * Adds parameters to views (alias of setVar)
     *
     * <code>
     * $this->view->setParamToView("products", $products);
     * </code>
     *
     * @param string $key
     * @param mixed $value
     * @return View
     */
    public function setParamToView(string $key, $value): View
    {
    }

    /**
     * Set all the render params
     *
     * <code>
     * $this->view->setVars(
     *     [
     *         "products" => $products,
     *     ]
     * );
     * </code>
     *
     * @param array $params
     * @param bool $merge
     * @return View
     */
    public function setVars(array $params, bool $merge = true): View
    {
    }

    /**
     * Set a single view parameter
     *
     * <code>
     * $this->view->setVar("products", $products);
     * </code>
     *
     * @param string $key
     * @param mixed $value
     * @return View
     */
    public function setVar(string $key, $value): View
    {
    }

    /**
     * Returns a parameter previously set in the view
     *
     * @param string $key
     */
    public function getVar(string $key)
    {
    }

    /**
     * Returns parameters to views
     *
     * @return array
     */
    public function getParamsToView(): array
    {
    }

    /**
     * Gets the name of the controller rendered
     *
     * @return string
     */
    public function getControllerName(): string
    {
    }

    /**
     * Gets the name of the action rendered
     *
     * @return string
     */
    public function getActionName(): string
    {
    }

    /**
     * Gets extra parameters of the action rendered
     *
     * @deprecated Will be removed in 4.0.0
     * @deprecated
     * @return array
     */
    public function getParams(): array
    {
    }

    /**
     * Starts rendering process enabling the output buffering
     *
     * @return View
     */
    public function start(): View
    {
    }

    /**
     * Loads registered template engines, if none is registered it will use Phalcon\Mvc\View\Engine\Php
     *
     * @return array
     */
    protected function _loadTemplateEngines(): array
    {
    }

    /**
     * Checks whether view exists on registered extensions and render it
     *
     * @param array $engines
     * @param string $viewPath
     * @param boolean $silence
     * @param boolean $mustClean
     * @param \Phalcon\Cache\BackendInterface $cache
     */
    protected function _engineRender($engines, string $viewPath, bool $silence, bool $mustClean, \Phalcon\Cache\BackendInterface $cache = null)
    {
    }

    /**
     * Register templating engines
     *
     * <code>
     * $this->view->registerEngines(
     *     [
     *         ".phtml" => "Phalcon\\Mvc\\View\\Engine\\Php",
     *         ".volt"  => "Phalcon\\Mvc\\View\\Engine\\Volt",
     *         ".mhtml" => "MyCustomEngine",
     *     ]
     * );
     * </code>
     *
     * @param array $engines
     * @return View
     */
    public function registerEngines(array $engines): View
    {
    }

    /**
     * Checks whether view exists
     *
     * @param string $view
     * @return bool
     */
    public function exists(string $view): bool
    {
    }

    /**
     * Executes render process from dispatching data
     *
     * <code>
     * // Shows recent posts view (app/views/posts/recent.phtml)
     * $view->start()->render("posts", "recent")->finish();
     * </code>
     *
     * @param string $controllerName
     * @param string $actionName
     * @param array $params
     * @return bool|View
     */
    public function render(string $controllerName, string $actionName, $params = null)
    {
    }

    /**
     * Choose a different view to render instead of last-controller/last-action
     *
     * <code>
     * use Phalcon\Mvc\Controller;
     *
     * class ProductsController extends Controller
     * {
     *    public function saveAction()
     *    {
     *         // Do some save stuff...
     *
     *         // Then show the list view
     *         $this->view->pick("products/list");
     *    }
     * }
     * </code>
     *
     * @param mixed $renderView
     * @return View
     */
    public function pick($renderView): View
    {
    }

    /**
     * Renders a partial view
     *
     * <code>
     * // Retrieve the contents of a partial
     * echo $this->getPartial("shared/footer");
     * </code>
     *
     * <code>
     * // Retrieve the contents of a partial with arguments
     * echo $this->getPartial(
     *     "shared/footer",
     *     [
     *         "content" => $html,
     *     ]
     * );
     * </code>
     *
     * @param string $partialPath
     * @param mixed $params
     * @return string
     */
    public function getPartial(string $partialPath, $params = null): string
    {
    }

    /**
     * Renders a partial view
     *
     * <code>
     * // Show a partial inside another view
     * $this->partial("shared/footer");
     * </code>
     *
     * <code>
     * // Show a partial inside another view with parameters
     * $this->partial(
     *     "shared/footer",
     *     [
     *         "content" => $html,
     *     ]
     * );
     * </code>
     *
     * @param string $partialPath
     * @param mixed $params
     */
    public function partial(string $partialPath, $params = null)
    {
    }

    /**
     * Perform the automatic rendering returning the output as a string
     *
     * <code>
     * $template = $this->view->getRender(
     *     "products",
     *     "show",
     *     [
     *         "products" => $products,
     *     ]
     * );
     * </code>
     *
     * @param string $controllerName
     * @param string $actionName
     * @param array $params
     * @param mixed $configCallback
     * @return string
     */
    public function getRender(string $controllerName, string $actionName, $params = null, $configCallback = null): string
    {
    }

    /**
     * Finishes the render process by stopping the output buffering
     *
     * @return View
     */
    public function finish(): View
    {
    }

    /**
     * Create a Phalcon\Cache based on the internal cache options
     *
     * @return BackendInterface
     */
    protected function _createCache(): BackendInterface
    {
    }

    /**
     * Check if the component is currently caching the output content
     *
     * @return bool
     */
    public function isCaching(): bool
    {
    }

    /**
     * Returns the cache instance used to cache
     *
     * @return BackendInterface
     */
    public function getCache(): BackendInterface
    {
    }

    /**
     * Cache the actual view render to certain level
     *
     * <code>
     * $this->view->cache(
     *     [
     *         "key"      => "my-key",
     *         "lifetime" => 86400,
     *     ]
     * );
     * </code>
     *
     * @param mixed $options
     * @return View
     */
    public function cache($options = true): View
    {
    }

    /**
     * Externally sets the view content
     *
     * <code>
     * $this->view->setContent("<h1>hello</h1>");
     * </code>
     *
     * @param string $content
     * @return View
     */
    public function setContent(string $content): View
    {
    }

    /**
     * Returns cached output from another view stage
     *
     * @return string
     */
    public function getContent(): string
    {
    }

    /**
     * Returns the path (or paths) of the views that are currently rendered
     *
     * @return string|array
     */
    public function getActiveRenderPath()
    {
    }

    /**
     * Disables the auto-rendering process
     *
     * @return View
     */
    public function disable(): View
    {
    }

    /**
     * Enables the auto-rendering process
     *
     * @return View
     */
    public function enable(): View
    {
    }

    /**
     * Resets the view component to its factory default values
     *
     * @return View
     */
    public function reset(): View
    {
    }

    /**
     * Magic method to pass variables to the views
     *
     * <code>
     * $this->view->products = $products;
     * </code>
     *
     * @param string $key
     * @param mixed $value
     */
    public function __set(string $key, $value)
    {
    }

    /**
     * Magic method to retrieve a variable passed to the view
     *
     * <code>
     * echo $this->view->products;
     * </code>
     *
     * @param string $key
     * @return mixed|null
     */
    public function __get(string $key)
    {
    }

    /**
     * Whether automatic rendering is enabled
     *
     * @return bool
     */
    public function isDisabled(): bool
    {
    }

    /**
     * Magic method to retrieve if a variable is set in the view
     *
     * <code>
     * echo isset($this->view->products);
     * </code>
     *
     * @param string $key
     * @return bool
     */
    public function __isset(string $key): bool
    {
    }

    /**
     * Gets views directories
     *
     * @return array
     */
    protected function getViewsDirs(): array
    {
    }

}
