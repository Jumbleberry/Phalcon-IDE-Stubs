<?php

namespace Phalcon\Mvc\View;

use Phalcon\DiInterface;
use Phalcon\Mvc\ViewBaseInterface;

/**
 * Phalcon\Mvc\View\EngineInterface
 *
 * Interface for Phalcon\Mvc\View engine adapters
 */
interface EngineInterface
{

    /**
     * Returns cached output on another view stage
     *
     * @return string
     */
    public function getContent(): string;

    /**
     * Renders a partial inside another view
     *
     * @param string $partialPath
     * @param mixed $params
     * @return string
     */
    public function partial(string $partialPath, $params = null): string;

    /**
     * Renders a view using the template engine
     *
     * @param string $path
     * @param mixed $params
     * @param bool $mustClean
     */
    public function render(string $path, $params, bool $mustClean = false);

}
