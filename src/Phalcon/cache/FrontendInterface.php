<?php

namespace Phalcon\Cache;

/**
 * Phalcon\Cache\FrontendInterface
 *
 * Interface for Phalcon\Cache\Frontend adapters
 */
interface FrontendInterface
{

    /**
     * Returns the cache lifetime
     *
     * @return int
     */
    public function getLifetime(): int;

    /**
     * Check whether if frontend is buffering output
     *
     * @return bool
     */
    public function isBuffering(): bool;

    /**
     * Starts the frontend
     */
    public function start();

    /**
     * Returns output cached content
     *
     * @return string
     */
    public function getContent();

    /**
     * Stops the frontend
     */
    public function stop();

    /**
     * Serializes data before storing it
     *
     * @param mixed $data
     */
    public function beforeStore($data);

    /**
     * Unserializes data after retrieving it
     *
     * @param mixed $data
     */
    public function afterRetrieve($data);

}
