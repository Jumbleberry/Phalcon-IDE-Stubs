<?php

namespace Phalcon\Cache\Backend;

use Phalcon\Cache\Exception;
use Phalcon\Cache\Backend;
use Phalcon\Cache\FrontendInterface;

/**
 * Phalcon\Cache\Backend\File
 *
 * Allows to cache output fragments using a file backend
 *
 * <code>
 * use Phalcon\Cache\Backend\File;
 * use Phalcon\Cache\Frontend\Output as FrontOutput;
 *
 * // Cache the file for 2 days
 * $frontendOptions = [
 *     "lifetime" => 172800,
 * ];
 *
 * // Create an output cache
 * $frontCache = FrontOutput($frontOptions);
 *
 * // Set the cache directory
 * $backendOptions = [
 *     "cacheDir" => "../app/cache/",
 * ];
 *
 * // Create the File backend
 * $cache = new File($frontCache, $backendOptions);
 *
 * $content = $cache->start("my-cache");
 *
 * if ($content === null) {
 *     echo "<h1>", time(), "</h1>";
 *
 *     $cache->save();
 * } else {
 *     echo $content;
 * }
 * </code>
 */
class File extends Backend
{
    /**
     * Default to false for backwards compatibility
     *
     * @var boolean
     */
    private $_useSafeKey = false;


    /**
     * Phalcon\Cache\Backend\File constructor
     *
     * @param \Phalcon\Cache\FrontendInterface $frontend
     * @param array $options
     */
    public function __construct(\Phalcon\Cache\FrontendInterface $frontend, array $options)
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
     * @return bool
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
     * @param string|int $keyName
     * @param int $lifetime
     * @return bool
     */
    public function exists($keyName = null, int $lifetime = null): bool
    {
    }

    /**
     * Increment of a given key, by number $value
     *
     * @param string|int $keyName
     * @param int $value
     * @return int|null
     */
    public function increment($keyName = null, int $value = 1): ?int
    {
    }

    /**
     * Decrement of a given key, by number $value
     *
     * @param string|int $keyName
     * @param int $value
     * @return int|null
     */
    public function decrement($keyName = null, int $value = 1): ?int
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

    /**
     * Return a file-system safe identifier for a given key
     *
     * @param mixed $key
     * @return string
     */
    public function getKey($key): string
    {
    }

    /**
     * Set whether to use the safekey or not
     *
     * @param bool $useSafeKey
     * @return File
     */
    public function useSafeKey(bool $useSafeKey): File
    {
    }

}
