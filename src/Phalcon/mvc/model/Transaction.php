<?php

namespace Phalcon\Mvc\Model;

use Phalcon\DiInterface;
use Phalcon\Mvc\ModelInterface;
use Phalcon\Mvc\Model\Transaction\Failed as TxFailed;
use Phalcon\Mvc\Model\Transaction\ManagerInterface;
use Phalcon\Mvc\Model\TransactionInterface;

/**
 * Phalcon\Mvc\Model\Transaction
 *
 * Transactions are protective blocks where SQL statements are only permanent if they can
 * all succeed as one atomic action. Phalcon\Transaction is intended to be used with Phalcon_Model_Base.
 * Phalcon Transactions should be created using Phalcon\Transaction\Manager.
 *
 * <code>
 * use Phalcon\Mvc\Model\Transaction\Failed;
 * use Phalcon\Mvc\Model\Transaction\Manager;
 *
 * try {
 *     $manager = new Manager();
 *
 *     $transaction = $manager->get();
 *
 *     $robot = new Robots();
 *
 *     $robot->setTransaction($transaction);
 *
 *     $robot->name       = "WALL·E";
 *     $robot->created_at = date("Y-m-d");
 *
 *     if ($robot->save() === false) {
 *         $transaction->rollback("Can't save robot");
 *     }
 *
 *     $robotPart = new RobotParts();
 *
 *     $robotPart->setTransaction($transaction);
 *
 *     $robotPart->type = "head";
 *
 *     if ($robotPart->save() === false) {
 *         $transaction->rollback("Can't save robot part");
 *     }
 *
 *     $transaction->commit();
 * } catch(Failed $e) {
 *     echo "Failed, reason: ", $e->getMessage();
 * }
 * </code>
 */
class Transaction implements \Phalcon\Mvc\Model\TransactionInterface
{

    protected $_connection;


    protected $_activeTransaction = false;


    protected $_isNewTransaction = true;


    protected $_rollbackOnAbort = false;


    protected $_manager;


    protected $_messages;


    protected $_rollbackRecord;


    /**
     * Phalcon\Mvc\Model\Transaction constructor
     *
     * @param \Phalcon\DiInterface $dependencyInjector
     * @param bool $autoBegin
     * @param string $service
     */
    public function __construct(\Phalcon\DiInterface $dependencyInjector, bool $autoBegin = false, string $service = null)
    {
    }

    /**
     * Sets transaction manager related to the transaction
     *
     * @param \Phalcon\Mvc\Model\Transaction\ManagerInterface $manager
     */
    public function setTransactionManager(\Phalcon\Mvc\Model\Transaction\ManagerInterface $manager)
    {
    }

    /**
     * Starts the transaction
     *
     * @return bool
     */
    public function begin(): bool
    {
    }

    /**
     * Commits the transaction
     *
     * @return bool
     */
    public function commit(): bool
    {
    }

    /**
     * Rollbacks the transaction
     *
     * @param mixed $rollbackMessage
     * @param \Phalcon\Mvc\ModelInterface $rollbackRecord
     * @return bool
     */
    public function rollback($rollbackMessage = null, \Phalcon\Mvc\ModelInterface $rollbackRecord = null): bool
    {
    }

    /**
     * Returns the connection related to transaction
     *
     * @return \Phalcon\Db\AdapterInterface
     */
    public function getConnection(): \Phalcon\Db\AdapterInterface
    {
    }

    /**
     * Sets if is a reused transaction or new once
     *
     * @param bool $isNew
     */
    public function setIsNewTransaction(bool $isNew)
    {
    }

    /**
     * Sets flag to rollback on abort the HTTP connection
     *
     * @param bool $rollbackOnAbort
     */
    public function setRollbackOnAbort(bool $rollbackOnAbort)
    {
    }

    /**
     * Checks whether transaction is managed by a transaction manager
     *
     * @return bool
     */
    public function isManaged(): bool
    {
    }

    /**
     * Returns validations messages from last save try
     *
     * @return array
     */
    public function getMessages(): array
    {
    }

    /**
     * Checks whether internal connection is under an active transaction
     *
     * @return bool
     */
    public function isValid(): bool
    {
    }

    /**
     * Sets object which generates rollback action
     *
     * @param \Phalcon\Mvc\ModelInterface $record
     */
    public function setRollbackedRecord(\Phalcon\Mvc\ModelInterface $record)
    {
    }

}
