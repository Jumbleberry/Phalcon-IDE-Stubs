<?php

namespace Phalcon\Mvc\Model\Query;

use Phalcon\Mvc\ModelInterface;
use Phalcon\Mvc\Model\Query\StatusInterface;

/**
 * Phalcon\Mvc\Model\Query\Status
 *
 * This class represents the status returned by a PHQL
 * statement like INSERT, UPDATE or DELETE. It offers context
 * information and the related messages produced by the
 * model which finally executes the operations when it fails
 *
 * <code>
 * $phql = "UPDATE Robots SET name = :name:, type = :type:, year = :year: WHERE id = :id:";
 *
 * $status = $app->modelsManager->executeQuery(
 *     $phql,
 *     [
 *         "id"   => 100,
 *         "name" => "Astroy Boy",
 *         "type" => "mechanical",
 *         "year" => 1959,
 *     ]
 * );
 *
 * // Check if the update was successful
 * if ($status->success() === true) {
 *     echo "OK";
 * }
 * </code>
 */
class Status implements \Phalcon\Mvc\Model\Query\StatusInterface
{

    protected $_success;


    protected $_model;


    /**
     * Phalcon\Mvc\Model\Query\Status
     *
     * @param bool $success
     * @param \Phalcon\Mvc\ModelInterface $model
     */
    public function __construct(bool $success, \Phalcon\Mvc\ModelInterface $model = null)
    {
    }

    /**
     * Returns the model that executed the action
     *
     * @return ModelInterface
     */
    public function getModel(): ModelInterface
    {
    }

    /**
     * Returns the messages produced because of a failed operation
     *
     * @return array|\Phalcon\Mvc\Model\MessageInterface[]
     */
    public function getMessages(): array
    {
    }

    /**
     * Allows to check if the executed operation was successful
     *
     * @return bool
     */
    public function success(): bool
    {
    }

}
