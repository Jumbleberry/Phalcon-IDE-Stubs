<?php

namespace Phalcon\Mvc\Model;

use Phalcon\Mvc\ModelInterface;
use Phalcon\Mvc\Model\BehaviorInterface;

/**
 * Phalcon\Mvc\Model\Behavior
 *
 * This is an optional base class for ORM behaviors
 */
abstract class Behavior implements \Phalcon\Mvc\Model\BehaviorInterface
{

    protected $_options;


    /**
     * Phalcon\Mvc\Model\Behavior
     *
     * @param array $options
     */
    public function __construct($options = null)
    {
    }

    /**
     * Checks whether the behavior must take action on certain event
     *
     * @param string $eventName
     * @return bool
     */
    protected function mustTakeAction(string $eventName): bool
    {
    }

    /**
     * Returns the behavior options related to an event
     *
     * @param string $eventName
     * @return array
     */
    protected function getOptions(string $eventName = null)
    {
    }

    /**
     * This method receives the notifications from the EventsManager
     *
     * @param string $type
     * @param \Phalcon\Mvc\ModelInterface $model
     */
    public function notify(string $type, \Phalcon\Mvc\ModelInterface $model)
    {
    }

    /**
     * Acts as fallbacks when a missing method is called on the model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $method
     * @param array $arguments
     */
    public function missingMethod(\Phalcon\Mvc\ModelInterface $model, string $method, $arguments = null)
    {
    }

}
