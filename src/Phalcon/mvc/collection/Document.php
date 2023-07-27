<?php

namespace Phalcon\Mvc\Collection;

use Phalcon\Mvc\EntityInterface;
use Phalcon\Mvc\Collection\Exception;

/**
 * Phalcon\Mvc\Collection\Document
 *
 * This component allows Phalcon\Mvc\Collection to return rows without an associated entity.
 * This objects implements the ArrayAccess interface to allow access the object as object->x or array[x].
 */
class Document implements \Phalcon\Mvc\EntityInterface, \ArrayAccess
{


    /**
     * Checks whether an offset exists in the document
     *
     * @param int $index
     * @return boolean
     */
    public function offsetExists($index): bool
    {
    }

    /**
     * Returns the value of a field using the ArrayAccess interfase
     *
     * @param mixed $index
     * @return mixed
     */
    public function offsetGet($index)
    {
    }

    /**
     * Change a value using the ArrayAccess interface
     *
     * @param mixed $index
     * @param mixed $value
     * @return void
     */
    public function offsetSet($index, $value): void
    {
    }

    /**
     * Rows cannot be changed. It has only been implemented to meet the definition of the ArrayAccess interface
     *
     * @param string $offset
     * @return void
     */
    public function offsetUnset($offset): void
    {
    }

    /**
     * Reads an attribute value by its name
     *
     * <code>
     *  echo $robot->readAttribute("name");
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
     *  $robot->writeAttribute("name", "Rosey");
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
    public function toArray()
    {
    }
}
