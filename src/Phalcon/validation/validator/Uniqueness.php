<?php

namespace Phalcon\Validation\Validator;

use Phalcon\Validation;
use Phalcon\Validation\CombinedFieldsValidator;
use Phalcon\Validation\Exception;
use Phalcon\Validation\Message;
use Phalcon\Mvc\ModelInterface;
use Phalcon\Mvc\CollectionInterface;
use Phalcon\Mvc\Model;
use Phalcon\Mvc\Collection;

/**
 * Phalcon\Validation\Validator\Uniqueness
 *
 * Check that a field is unique in the related table
 *
 * <code>
 * use Phalcon\Validation;
 * use Phalcon\Validation\Validator\Uniqueness as UniquenessValidator;
 *
 * $validator = new Validation();
 *
 * $validator->add(
 *     "username",
 *     new UniquenessValidator(
 *         [
 *             "model"   => new Users(),
 *             "message" => ":field must be unique",
 *         ]
 *     )
 * );
 * </code>
 *
 * Different attribute from the field:
 * <code>
 * $validator->add(
 *     "username",
 *     new UniquenessValidator(
 *         [
 *             "model"     => new Users(),
 *             "attribute" => "nick",
 *         ]
 *     )
 * );
 * </code>
 *
 * In model:
 * <code>
 * $validator->add(
 *     "username",
 *     new UniquenessValidator()
 * );
 * </code>
 *
 * Combination of fields in model:
 * <code>
 * $validator->add(
 *     [
 *         "firstName",
 *         "lastName",
 *     ],
 *     new UniquenessValidator()
 * );
 * </code>
 *
 * It is possible to convert values before validation. This is useful in
 * situations where values need to be converted to do the database lookup:
 *
 * <code>
 * $validator->add(
 *     "username",
 *     new UniquenessValidator(
 *         [
 *             "convert" => function (array $values) {
 *                 $values["username"] = strtolower($values["username"]);
 *
 *                 return $values;
 *             }
 *         ]
 *     )
 * );
 * </code>
 */
class Uniqueness extends CombinedFieldsValidator
{

    private $columnMap = null;


    /**
     * Executes the validation
     *
     * @param \Phalcon\Validation $validation
     * @param mixed $field
     * @return bool
     */
    public function validate(\Phalcon\Validation $validation, $field): bool
    {
    }

    /**
     * @param \Phalcon\Validation $validation
     * @param mixed $field
     * @return bool
     */
    protected function isUniqueness(\Phalcon\Validation $validation, $field): bool
    {
    }

    /**
     * The column map is used in the case to get real column name
     *
     * @param mixed $record
     * @param string $field
     * @return string
     */
    protected function getColumnNameReal($record, string $field): string
    {
    }

    /**
     * Uniqueness method used for model
     *
     * @param mixed $record
     * @param array $field
     * @param array $values
     */
    protected function isUniquenessModel($record, array $field, array $values)
    {
    }

    /**
     * Uniqueness method used for collection
     *
     * @param mixed $record
     * @param array $field
     * @param array $values
     */
    protected function isUniquenessCollection($record, array $field, array $values)
    {
    }

}
