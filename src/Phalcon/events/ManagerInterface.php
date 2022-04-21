<?php

namespace Phalcon\Events;

/**
 * Phalcon\Events\ManagerInterface
 *
 * Interface for Phalcon\Events managers.
 */
interface ManagerInterface
{

    /**
     * Attach a listener to the events manager
     *
     * @param string $eventType
     * @param object|callable $handler
     */
    public function attach(string $eventType, $handler);

    /**
     * Detach the listener from the events manager
     *
     * @param string $eventType
     * @param object $handler
     */
    public function detach(string $eventType, $handler);

    /**
     * Removes all events from the EventsManager
     *
     * @param string $type
     */
    public function detachAll(string $type = null);

    /**
     * Fires an event in the events manager causing the active listeners to be notified about it
     *
     * @param string $eventType
     * @param object $source
     * @param mixed $data
     * @return mixed
     */
    public function fire(string $eventType, $source, $data = null);

    /**
     * Returns all the attached listeners of a certain type
     *
     * @param string $type
     * @return array
     */
    public function getListeners(string $type);

}
