<?php

namespace Phalcon\Cache\Backend;

use Phalcon\Cache\Backend;
use Phalcon\Cache\Exception;
use Phalcon\Cache\FrontendInterface;

/**
 * Phalcon\Cache\Backend\Memcache
 *
 * Allows to cache output fragments, PHP data or raw data to a memcache backend
 *
 * This adapter uses the special memcached key "_PHCM" to store all the keys internally used by the adapter
 *
 * <code>
 * use Phalcon\Cache\Backend\Memcache;
 * use Phalcon\Cache\Frontend\Data as FrontData;
 *
 * // Cache data for 2 days
 * $frontCache = new FrontData(
 *     [
 *         "lifetime" => 172800,
 *     ]
 * );
 *
 * // Create the Cache setting memcached connection options
 * $cache = new Memcache(
 *     $frontCache,
 *     [
 *         "host"       => "localhost",
 *         "port"       => 11211,
 *         "persistent" => false,
 *     ]
 * );
 *
 * // Cache arbitrary data
 * $cache->save("my-data", [1, 2, 3, 4, 5]);
 *
 * // Get data
 * $data = $cache->get("my-data");
 * </code>
 */
class Memcache extends Backend
{

    protected $_memcache = null;


    /**
     * Phalcon\Cache\Backend\Memcache constructor
     *
     * @param Phalcon\Cache\FrontendInterface $frontend
     * @param array $options
     */
    public function __construct(\Phalcon\Cache\FrontendInterface $frontend, $options = null)
    {
    }

    /**
     * Create internal connection to memcached
     */
    public function _connect()
    {
    }

    /**
     * Add servers to memcache pool
     *
     * @param string $host
     * @param int $port
     * @param bool $persistent
     * @return bool
     */
    public function addServers(string $host, int $port, bool $persistent = false): bool
    {
    }

    /**
     * Returns a cached content
     *
     * @param string $keyName
     * @param int $lifetime
     * @return mixed|null
     */
    public function get(string $keyName, int $lifetime = null)
    {
    }

    /**
     * Stores cached content into the file backend and stops the frontend
     *
     * @param int|string $keyName
     * @param string $content
     * @param int $lifetime
     * @param boolean $stopBuffer
     * @return bool
     */
    public function save($keyName = null, $content = null, $lifetime = null, bool $stopBuffer = true): bool
    {
    }

    /**
     * Deletes a value from the cache by its key
     *
     * @param int|string $keyName
     * @return boolean
     */
    public function delete($keyName)
    {
    }

    /**
     * Query the existing cached keys.
     *
     * <code>
     * $cache->save("users-ids", [1, 2, 3]);
     * $cache->save("projects-ids", [4, 5, 6]);
     *
     * var_dump($cache->queryKeys("users")); // ["users-ids"]
     * </code>
     *
     * @param string $prefix
     * @return array
     */
    public function queryKeys(string $prefix = null): array
    {
    }

    /**
     * Checks if cache exists and it isn't expired
     *
     * @param string $keyName
     * @param int $lifetime
     * @return bool
     */
    public function exists($keyName = null, int $lifetime = null): bool
    {
    }

    /**
     * Increment of given $keyName by $value
     *
     * @param string $keyName
     * @param int $value
     * @return int|bool
     */
    public function increment($keyName = null, int $value = 1)
    {
    }

    /**
     * Decrement of $keyName by given $value
     *
     * @param string $keyName
     * @param int $value
     * @return int|bool
     */
    public function decrement($keyName = null, int $value = 1)
    {
    }

    /**
     * Immediately invalidates all existing items.
     *
     * @return bool
     */
    public function flush(): bool
    {
    }

}
