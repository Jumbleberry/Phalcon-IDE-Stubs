<?php

namespace Phalcon\Paginator;

/**
 * Phalcon\Paginator\AdapterInterface
 *
 * Interface for Phalcon\Paginator adapters
 */
interface AdapterInterface
{

    /**
     * Set the current page number
     *
     * @param int $page
     */
    public function setCurrentPage(int $page);

    /**
     * Returns a slice of the resultset to show in the pagination
     *
     * @deprecated will be removed after 4.0
     * @return \stdClass
     */
    public function getPaginate(): \stdClass;

    /**
     * Set current rows limit
     *
     * @param int $limit
     */
    public function setLimit(int $limit);

    /**
     * Get current rows limit
     *
     * @return int
     */
    public function getLimit(): int;

}
