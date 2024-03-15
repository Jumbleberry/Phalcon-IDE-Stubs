<?php

namespace Phalcon\Config;

use Phalcon\Support\Collection\CollectionInterface;

/**
 * Phalcon\Config\ConfigInterface
 *
 * Interface for Phalcon\Config class
 */
interface ConfigInterface extends \Phalcon\Support\Collection\CollectionInterface
{


    /**
     * @return string
     */
    public function getPathDelimiter(): string;

    /**
     * @param array|ConfigInterface $toMerge
     *
     * @return ConfigInterface
     */
    public function merge($toMerge): ConfigInterface;

    /**
     * @param string      $path
     * @param mixed|null  $defaultValue
     * @param string|null $delimiter
     *
     * @return mixed
     */
    public function path(string $path, $defaultValue = null, string $delimiter = null);

    /**
     * @param string|null $delimiter
     *
     * @return ConfigInterface
     */
    public function setPathDelimiter(string $delimiter = null): ConfigInterface;
}
