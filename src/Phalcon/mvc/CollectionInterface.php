<?php

namespace Phalcon\Mvc;

use Phalcon\Mvc\Model\MessageInterface;

/**
 * Phalcon\Mvc\CollectionInterface
 *
 * Interface for Phalcon\Mvc\Collection
 */
interface CollectionInterface
{

    /**
     * Sets a value for the _id property, creates a MongoId object if needed
     *
     * @param mixed $id
     */
    public function setId($id);

    /**
     * Returns the value of the _id property
     *
     * @return MongoId
     */
    public function getId();

    /**
     * Returns an array with reserved properties that cannot be part of the insert/update
     *
     * @return array
     */
    public function getReservedAttributes(): array;

    /**
     * Returns collection name mapped in the model
     *
     * @return string
     */
    public function getSource(): string;

    /**
     * Sets a service in the services container that returns the Mongo database
     *
     * @param string $connectionService
     */
    public function setConnectionService(string $connectionService);

    /**
     * Retrieves a database connection
     *
     * @return MongoDb
     */
    public function getConnection();

    /**
     * Sets the dirty state of the object using one of the DIRTY_STATE_ constants
     *
     * @param int $dirtyState
     * @return \Phalcon\Mvc\CollectionInterface
     */
    public function setDirtyState(int $dirtyState): \Phalcon\Mvc\CollectionInterface;

    /**
     * Returns one of the DIRTY_STATE_ constants telling if the record exists in the database or not
     *
     * @return int
     */
    public function getDirtyState(): int;

    /**
     * Returns a cloned collection
     *
     * @param CollectionInterface $collection
     * @param array $document
     * @return CollectionInterface
     */
    public static function cloneResult(CollectionInterface $collection, array $document): CollectionInterface;

    /**
     * Fires an event, implicitly calls behaviors and listeners in the events manager are notified
     *
     * @param string $eventName
     * @return bool
     */
    public function fireEvent(string $eventName): bool;

    /**
     * Fires an event, implicitly listeners in the events manager are notified
     * This method stops if one of the callbacks/listeners returns boolean false
     *
     * @param string $eventName
     * @return bool
     */
    public function fireEventCancel(string $eventName): bool;

    /**
     * Check whether validation process has generated any messages
     *
     * @return bool
     */
    public function validationHasFailed(): bool;

    /**
     * Returns all the validation messages
     *
     * @return array|\Phalcon\Mvc\Model\MessageInterface[]
     */
    public function getMessages(): array;

    /**
     * Appends a customized message on the validation process
     *
     * @param \Phalcon\Mvc\Model\MessageInterface $message
     */
    public function appendMessage(\Phalcon\Mvc\Model\MessageInterface $message);

    /**
     * Creates/Updates a collection based on the values in the attributes
     *
     * @return bool
     */
    public function save(): bool;

    /**
     * Find a document by its id
     *
     * @param string $id
     * @return \Phalcon\Mvc\Collection
     */
    public static function findById($id): ?CollectionInterface;

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param array $parameters
     * @return array
     */
    public static function findFirst(array $parameters = null);

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param array $parameters
     * @return  array
     */
    public static function find(array $parameters = null);

    /**
     * Perform a count over a collection
     *
     * @param array $parameters
     * @return array
     */
    public static function count(array $parameters = null);

    /**
     * Deletes a model instance. Returning true on success or false otherwise
     *
     * @return bool
     */
    public function delete(): bool;

}
