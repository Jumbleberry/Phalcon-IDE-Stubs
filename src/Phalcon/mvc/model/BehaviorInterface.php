<?php

namespace Phalcon\Mvc\Model;

use Phalcon\Mvc\ModelInterface;

/**
 * Phalcon\Mvc\Model\BehaviorInterface
 *
 * Interface for Phalcon\Mvc\Model\Behavior
 */
interface BehaviorInterface
{

    /**
     * This method receives the notifications from the EventsManager
     *
     * @param string $type
     * @param \Phalcon\Mvc\ModelInterface $model
     */
    public function notify(string $type, \Phalcon\Mvc\ModelInterface $model);

    /**
     * Calls a method when it's missing in the model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $method
     * @param array $arguments
     */
    public function missingMethod(\Phalcon\Mvc\ModelInterface $model, string $method, $arguments = null);

}
