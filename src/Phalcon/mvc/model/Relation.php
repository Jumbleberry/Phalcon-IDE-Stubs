<?php

namespace Phalcon\Mvc\Model;

use Phalcon\Mvc\Model\RelationInterface;

/**
 * Phalcon\Mvc\Model\Relation
 *
 * This class represents a relationship between two models
 */
class Relation implements \Phalcon\Mvc\Model\RelationInterface
{

    const BELONGS_TO = 0;


    const HAS_ONE = 1;


    const HAS_MANY = 2;


    const HAS_ONE_THROUGH = 3;


    const HAS_MANY_THROUGH = 4;


    const NO_ACTION = 0;


    const ACTION_RESTRICT = 1;


    const ACTION_CASCADE = 2;


    protected $_type;


    protected $_referencedModel;


    protected $_fields;


    protected $_referencedFields;


    protected $_intermediateModel;


    protected $_intermediateFields;


    protected $_intermediateReferencedFields;


    protected $_options;


    /**
     * Phalcon\Mvc\Model\Relation constructor
     *
     * @param int $type
     * @param string $referencedModel
     * @param string|array $fields
     * @param string|array $referencedFields
     * @param array $options
     */
    public function __construct($type, string $referencedModel, $fields, $referencedFields, $options = null)
    {
    }

    /**
     * Sets the intermediate model data for has--through relations
     *
     * @param string|array $intermediateFields
     * @param string $intermediateModel
     * @param string $intermediateReferencedFields
     */
    public function setIntermediateRelation($intermediateFields, string $intermediateModel, $intermediateReferencedFields)
    {
    }

    /**
     * Returns the relation type
     *
     * @return int
     */
    public function getType(): int
    {
    }

    /**
     * Returns the referenced model
     *
     * @return string
     */
    public function getReferencedModel(): string
    {
    }

    /**
     * Returns the fields
     *
     * @return string|array
     */
    public function getFields()
    {
    }

    /**
     * Returns the referenced fields
     *
     * @return string|array
     */
    public function getReferencedFields()
    {
    }

    /**
     * Returns the options
     *
     * @return string|array
     */
    public function getOptions()
    {
    }

    /**
     * Returns an option by the specified name
     * If the option doesn't exist null is returned
     *
     * @param string $name
     */
    public function getOption(string $name)
    {
    }

    /**
     * Check whether the relation act as a foreign key
     *
     * @return bool
     */
    public function isForeignKey(): bool
    {
    }

    /**
     * Returns the foreign key configuration
     *
     * @return string|array
     */
    public function getForeignKey()
    {
    }

    /**
     * Returns parameters that must be always used when the related records are obtained
     *
     * @return array
     */
    public function getParams()
    {
    }

    /**
     * Check whether the relation is a 'many-to-many' relation or not
     *
     * @return bool
     */
    public function isThrough(): bool
    {
    }

    /**
     * Check if records returned by getting belongs-to/has-many are implicitly cached during the current request
     *
     * @return bool
     */
    public function isReusable(): bool
    {
    }

    /**
     * Gets the intermediate fields for has--through relations
     *
     * @return string|array
     */
    public function getIntermediateFields()
    {
    }

    /**
     * Gets the intermediate model for has--through relations
     *
     * @return string
     */
    public function getIntermediateModel(): string
    {
    }

    /**
     * Gets the intermediate referenced fields for has--through relations
     *
     * @return string|array
     */
    public function getIntermediateReferencedFields()
    {
    }

}
