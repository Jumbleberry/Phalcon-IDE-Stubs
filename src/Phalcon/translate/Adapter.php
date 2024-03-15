<?php

namespace Phalcon\Translate;

use Phalcon\Translate\Exception;
use Phalcon\Translate\InterpolatorInterface;
use Phalcon\Translate\Interpolator\AssociativeArray;

/**
 * Phalcon\Translate\Adapter
 *
 * Base class for Phalcon\Translate adapters
 */
abstract class Adapter implements \Phalcon\Translate\AdapterInterface
{

    /**
     * @var Phalcon\Translate\InterpolatorInterface
     */
    protected $_interpolator;

    /**
     * @param array $options
     */
    public function __construct(array $options)
    {
    }

    /**
     * @param \Phalcon\Translate\InterpolatorInterface $interpolator
     * @return Adapter
     */
    public function setInterpolator(\Phalcon\Translate\InterpolatorInterface $interpolator): Adapter
    {
    }

    /**
     * Returns the translation string of the given key
     *
     * @param string $translateKey
     * @param array $placeholders
     * @return string
     */
    public function t(string $translateKey, $placeholders = null): string
    {
    }

    /**
     * Returns the translation string of the given key (alias of method 't')
     *
     * @param string $translateKey
     * @param array $placeholders
     * @return string
     */
    public function _(string $translateKey, $placeholders = null): string
    {
    }

    /**
     * Sets a translation value
     *
     * @param mixed $offset
     * @param mixed $value
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
    }

    /**
     * Check whether a translation key exists
     *
     * @param mixed $translateKey
     * @return bool
     */
    public function offsetExists($translateKey): bool
    {
    }

    /**
     * Unsets a translation from the dictionary
     *
     * @param mixed $offset
     * @return void
     */
    public function offsetUnset($offset): void
    {
    }

    /**
     * Returns the translation related to the given key
     *
     * @param mixed $translateKey
     * @return mixed
     */
    public function offsetGet($translateKey)
    {
    }

    /**
     * Replaces placeholders by the values passed
     *
     * @param string $translation
     * @param mixed $placeholders
     * @return string
     */
    protected function replacePlaceholders(string $translation, $placeholders = null): string
    {
    }
}
