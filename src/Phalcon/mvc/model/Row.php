<?php

namespace Phalcon\Mvc\Model;

use stdClass;
use JsonSerializable;
use ArrayAccess;
use Phalcon\Mvc\ModelInterface;
use Phalcon\Mvc\EntityInterface;
use Phalcon\Mvc\Model\Exception;
use Phalcon\Mvc\Model\ResultInterface;

/**
 * Phalcon\Mvc\Model\Row
 *
 * This component allows Phalcon\Mvc\Model to return rows without an associated entity.
 * This objects implements the ArrayAccess interface to allow access the object as object->x or array[x].
 */
class Row extends stdClass implements \ArrayAccess, \Phalcon\Mvc\EntityInterface, \Phalcon\Mvc\Model\ResultInterface, \JsonSerializable
{


    /**
     * Set the current object's state
     *
     * @param int $dirtyState
     * @return bool
     */
    public function setDirtyState(int $dirtyState): bool
    {
    }

    /**
     * Rows cannot be changed. It has only been implemented to meet the definition of the ArrayAccess interface
     * Checks whether offset exists in the row
     *
     * @param mixed $index
     * @return bool
     */
    public function offsetExists($index): bool
    {
    }

    /**
     * Gets a record in a specific position of the row
     *
     * @param mixed $index
     * @return mixed
     */
    public function offsetGet($index)
    {
    }

    /**
     * Rows cannot be changed. It has only been implemented to meet the definition of the ArrayAccess interface
     *
     * @param mixed $element
     * @param mixed $value
     * @return void
     */
    public function offsetSet($element, $value): void
    {
    }

    /**
     * Rows cannot be changed. It has only been implemented to meet the definition of the ArrayAccess interface
     *
     * @param mixed $element
     * @return void
     */
    public function offsetUnset($element): void
    {
    }

    /**
     * Reads an attribute value by its name
     *
     * <code>
     * echo $robot->readAttribute("name");
     * </code>
     *
     * @param string $attribute
     * @return mixed
     */
    public function readAttribute($attribute)
    {
    }

    /**
     * Writes an attribute value by its name
     *
     * <code>
     * $robot->writeAttribute("name", "Rosey");
     * </code>
     *
     * @param string $attribute
     * @param mixed $value
     * @return void
     */
    public function writeAttribute(string $attribute, $value): void
    {
    }

    /**
     * Returns the instance as an array representation
     *
     * @return array
     */
    public function toArray(): array
    {
    }

    /**
     * Serializes the object for json_encode
     *
     * @return array
     */
    public function jsonSerialize(): array
    {
    }
}
