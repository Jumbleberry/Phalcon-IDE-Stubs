<?php

namespace Phalcon\Mvc\Collection;

use Phalcon\Mvc\CollectionInterface;

/**
 * Phalcon\Mvc\Collection\BehaviorInterface
 *
 * Interface for Phalcon\Mvc\Collection\Behavior
 */
interface BehaviorInterface
{

    /**
     * This method receives the notifications from the EventsManager
     *
     * @param string $type
     * @param \Phalcon\Mvc\CollectionInterface $collection
     */
    public function notify(string $type, \Phalcon\Mvc\CollectionInterface $collection);

    /**
     * Calls a method when it's missing in the collection
     *
     * @param \Phalcon\Mvc\CollectionInterface $collection
     * @param string $method
     * @param mixed $arguments
     */
    public function missingMethod(\Phalcon\Mvc\CollectionInterface $collection, string $method, $arguments = null);

}
