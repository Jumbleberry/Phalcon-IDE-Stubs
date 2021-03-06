<?php

namespace Phalcon\Cache\Frontend;

use Phalcon\Cache\FrontendInterface;
use Phalcon\Cache\Exception;

/**
 * Phalcon\Cache\Frontend\Msgpack
 *
 * Allows to cache native PHP data in a serialized form using msgpack extension
 * This adapter uses a Msgpack frontend to store the cached content and requires msgpack extension.
 *
 * @link https://github.com/msgpack/msgpack-php
 *
 * <code>
 * use Phalcon\Cache\Backend\File;
 * use Phalcon\Cache\Frontend\Msgpack;
 *
 * // Cache the files for 2 days using Msgpack frontend
 * $frontCache = new Msgpack(
 *     [
 *         "lifetime" => 172800,
 *     ]
 * );
 *
 * // Create the component that will cache "Msgpack" to a "File" backend
 * // Set the cache file directory - important to keep the "/" at the end of
 * // of the value for the folder
 * $cache = new File(
 *     $frontCache,
 *     [
 *         "cacheDir" => "../app/cache/",
 *     ]
 * );
 *
 * $cacheKey = "robots_order_id.cache";
 *
 * // Try to get cached records
 * $robots = $cache->get($cacheKey);
 *
 * if ($robots === null) {
 *     // $robots is null due to cache expiration or data do not exist
 *     // Make the database call and populate the variable
 *     $robots = Robots::find(
 *         [
 *             "order" => "id",
 *         ]
 *     );
 *
 *     // Store it in the cache
 *     $cache->save($cacheKey, $robots);
 * }
 *
 * // Use $robots
 * foreach ($robots as $robot) {
 *     echo $robot->name, "\n";
 * }
 * </code>
 */
class Msgpack extends \Phalcon\Cache\Frontend\Data implements \Phalcon\Cache\FrontendInterface
{

    /**
     * Phalcon\Cache\Frontend\Msgpack constructor
     *
     * @param array $frontendOptions
     */
    public function __construct($frontendOptions = null)
    {
    }

    /**
     * Returns the cache lifetime
     *
     * @return int
     */
    public function getLifetime(): int
    {
    }

    /**
     * Check whether if frontend is buffering output
     *
     * @return bool
     */
    public function isBuffering(): bool
    {
    }

    /**
     * Starts output frontend. Actually, does nothing
     */
    public function start()
    {
    }

    /**
     * Returns output cached content
     *
     * @return null
     */
    public function getContent()
    {
    }

    /**
     * Stops output frontend
     */
    public function stop()
    {
    }

    /**
     * Serializes data before storing them
     *
     * @param mixed $data
     * @return string
     */
    public function beforeStore($data): string
    {
    }

    /**
     * Unserializes data after retrieval
     *
     * @param mixed $data
     * @return mixed
     */
    public function afterRetrieve($data)
    {
    }

}
