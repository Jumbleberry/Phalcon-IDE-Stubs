<?php

namespace Phalcon\Db\Adapter;

use Phalcon\Db\Adapter;
use Phalcon\Db\Exception;
use Phalcon\Db\Column;
use Phalcon\Db\ResultInterface;
use Phalcon\Events\ManagerInterface;
use Phalcon\Db\Result\Pdo as ResultPdo;

/**
 * Phalcon\Db\Adapter\Pdo
 *
 * Phalcon\Db\Adapter\Pdo is the Phalcon\Db that internally uses PDO to connect to a database
 *
 * <code>
 * use Phalcon\Db\Adapter\Pdo\Mysql;
 *
 * $config = [
 *     "host"     => "localhost",
 *     "dbname"   => "blog",
 *     "port"     => 3306,
 *     "username" => "sigma",
 *     "password" => "secret",
 * ];
 *
 * $connection = new Mysql($config);
 * </code>
 */
abstract class Pdo extends Adapter
{
    /**
     * PDO Handler
     *
     * @var \Pdo
     */
    protected $_pdo;

    /**
     * Last affected rows
     */
    protected $_affectedRows;


    /**
     * Constructor for Phalcon\Db\Adapter\Pdo
     *
     * @param array $descriptor
     */
    public function __construct(array $descriptor)
    {
    }

    /**
     * This method is automatically called in \Phalcon\Db\Adapter\Pdo constructor.
     *
     * Call it when you need to restore a database connection.
     *
     * <code>
     * use Phalcon\Db\Adapter\Pdo\Mysql;
     *
     * // Make a connection
     * $connection = new Mysql(
     *     [
     *         "host"     => "localhost",
     *         "username" => "sigma",
     *         "password" => "secret",
     *         "dbname"   => "blog",
     *         "port"     => 3306,
     *     ]
     * );
     *
     * // Reconnect
     * $connection->connect();
     * </code>
     *
     * @param array $descriptor
     * @return bool
     */
    public function connect(array $descriptor = null): bool
    {
    }

    /**
     * Returns a PDO prepared statement to be executed with 'executePrepared'
     *
     * <code>
     * use Phalcon\Db\Column;
     *
     * $statement = $db->prepare(
     *     "SELECT FROM robots WHERE name = :name"
     * );
     *
     * $result = $connection->executePrepared(
     *     $statement,
     *     [
     *         "name" => "Voltron",
     *     ],
     *     [
     *         "name" => Column::BIND_PARAM_INT,
     *     ]
     * );
     * </code>
     *
     * @param string $sqlStatement
     * @return \PDOStatement
     */
    public function prepare(string $sqlStatement): \PDOStatement
    {
    }

    /**
     * Executes a prepared statement binding. This function uses integer indexes starting from zero
     *
     * <code>
     * use Phalcon\Db\Column;
     *
     * $statement = $db->prepare(
     *     "SELECT FROM robots WHERE name = :name"
     * );
     *
     * $result = $connection->executePrepared(
     *     $statement,
     *     [
     *         "name" => "Voltron",
     *     ],
     *     [
     *         "name" => Column::BIND_PARAM_INT,
     *     ]
     * );
     * </code>
     *
     * @param \PDOStatement $statement
     * @param array $placeholders
     * @param array $dataTypes
     * @return \PDOStatement
     */
    public function executePrepared(\PDOStatement $statement, array $placeholders, $dataTypes): \PDOStatement
    {
    }

    /**
     * Sends SQL statements to the database server returning the success state.
     * Use this method only when the SQL statement sent to the server is returning rows
     *
     * <code>
     * // Querying data
     * $resultset = $connection->query(
     *     "SELECT FROM robots WHERE type = 'mechanical'"
     * );
     *
     * $resultset = $connection->query(
     *     "SELECT FROM robots WHERE type = ?",
     *     [
     *         "mechanical",
     *     ]
     * );
     * </code>
     *
     * @param string $sqlStatement
     * @param mixed $bindParams
     * @param mixed $bindTypes
     * @return bool|\Phalcon\Db\ResultInterface
     */
    public function query(string $sqlStatement, $bindParams = null, $bindTypes = null)
    {
    }

    /**
     * Sends SQL statements to the database server returning the success state.
     * Use this method only when the SQL statement sent to the server doesn't return any rows
     *
     * <code>
     * // Inserting data
     * $success = $connection->execute(
     *     "INSERT INTO robots VALUES (1, 'Astro Boy')"
     * );
     *
     * $success = $connection->execute(
     *     "INSERT INTO robots VALUES (?, ?)",
     *     [
     *         1,
     *         "Astro Boy",
     *     ]
     * );
     * </code>
     *
     * @param string $sqlStatement
     * @param mixed $bindParams
     * @param mixed $bindTypes
     * @return bool
     */
    public function execute(string $sqlStatement, $bindParams = null, $bindTypes = null): bool
    {
    }

    /**
     * Returns the number of affected rows by the latest INSERT/UPDATE/DELETE executed in the database system
     *
     * <code>
     * $connection->execute(
     *     "DELETE FROM robots"
     * );
     *
     * echo $connection->affectedRows(), " were deleted";
     * </code>
     *
     * @return int
     */
    public function affectedRows(): int
    {
    }

    /**
     * Closes the active connection returning success. Phalcon automatically closes and destroys
     * active connections when the request ends
     *
     * @return bool
     */
    public function close(): bool
    {
    }

    /**
     * Escapes a value to avoid SQL injections according to the active charset in the connection
     *
     * <code>
     * $escapedStr = $connection->escapeString("some dangerous value");
     * </code>
     *
     * @param string $str
     * @return string
     */
    public function escapeString(string $str): string
    {
    }

    /**
     * Converts bound parameters such as :name: or ?1 into PDO bind params ?
     *
     * <code>
     * print_r(
     *     $connection->convertBoundParams(
     *         "SELECT FROM robots WHERE name = :name:",
     *         [
     *             "Bender",
     *         ]
     *     )
     * );
     * </code>
     *
     * @param string $sql
     * @param array $params
     * @return array
     */
    public function convertBoundParams(string $sql, array $params = array()): array
    {
    }

    /**
     * Returns the insert id for the auto_increment/serial column inserted in the latest executed SQL statement
     *
     * <code>
     * // Inserting a new robot
     * $success = $connection->insert(
     *     "robots",
     *     [
     *         "Astro Boy",
     *         1952,
     *     ],
     *     [
     *         "name",
     *         "year",
     *     ]
     * );
     *
     * // Getting the generated id
     * $id = $connection->lastInsertId();
     * </code>
     *
     * @param string $sequenceName
     * @return int|boolean
     */
    public function lastInsertId($sequenceName = null)
    {
    }

    /**
     * Starts a transaction in the connection
     *
     * @param bool $nesting
     * @return bool
     */
    public function begin(bool $nesting = true): bool
    {
    }

    /**
     * Rollbacks the active transaction in the connection
     *
     * @param bool $nesting
     * @return bool
     */
    public function rollback(bool $nesting = true): bool
    {
    }

    /**
     * Commits the active transaction in the connection
     *
     * @param bool $nesting
     * @return bool
     */
    public function commit(bool $nesting = true): bool
    {
    }

    /**
     * Returns the current transaction nesting level
     *
     * @return int
     */
    public function getTransactionLevel(): int
    {
    }

    /**
     * Checks whether the connection is under a transaction
     *
     * <code>
     * $connection->begin();
     *
     * // true
     * var_dump(
     *     $connection->isUnderTransaction()
     * );
     * </code>
     *
     * @return bool
     */
    public function isUnderTransaction(): bool
    {
    }

    /**
     * Return internal PDO handler
     *
     * @return \Pdo
     */
    public function getInternalHandler(): \Pdo
    {
    }

    /**
     * Return the error info, if any
     *
     * @return array
     */
    public function getErrorInfo()
    {
    }

}
