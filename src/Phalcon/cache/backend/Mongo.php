<?php

namespace Phalcon\Cache\Backend;

use Phalcon\Cache\Backend;
use Phalcon\Cache\Exception;
use Phalcon\Cache\FrontendInterface;

/**
 * Phalcon\Cache\Backend\Mongo
 *
 * Allows to cache output fragments, PHP data or raw data to a MongoDb backend
 *
 * <code>
 * use Phalcon\Cache\Backend\Mongo;
 * use Phalcon\Cache\Frontend\Base64;
 *
 * // Cache data for 2 days
 * $frontCache = new Base64(
 *     [
 *         "lifetime" => 172800,
 *     ]
 * );
 *
 * // Create a MongoDB cache
 * $cache = new Mongo(
 *     $frontCache,
 *     [
 *         "server"     => "mongodb://localhost",
 *         "db"         => "caches",
 *         "collection" => "images",
 *     ]
 * );
 *
 * // Cache arbitrary data
 * $cache->save(
 *     "my-data",
 *     file_get_contents("some-image.jpg")
 * );
 *
 * // Get data
 * $data = $cache->get("my-data");
 * </code>
 */
class Mongo extends Backend
{

    protected $_collection = null;


    /**
     * Phalcon\Cache\Backend\Mongo constructor
     *
     * @param \Phalcon\Cache\FrontendInterface $frontend
     * @param array $options
     */
    public function __construct(\Phalcon\Cache\FrontendInterface $frontend, $options = null)
    {
    }

    /**
     * Returns a MongoDb collection based on the backend parameters
     *
     * @return MongoCollection
     */
    protected final function _getCollection()
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
    public function delete($keyName): bool
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
     * gc
     *
     * @return collection->remove(...)
     */
    public function gc()
    {
    }

    /**
     * Increment of a given key by $value
     *
     * @param int|string $keyName
     * @param int $value
     * @return int|null
     */
    public function increment($keyName, int $value = 1): ?int
    {
    }

    /**
     * Decrement of a given key by $value
     *
     * @param int|string $keyName
     * @param int $value
     * @return int|null
     */
    public function decrement($keyName, int $value = 1): ?int
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
