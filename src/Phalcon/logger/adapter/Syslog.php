<?php

namespace Phalcon\Logger\Adapter;

use Phalcon\Logger\Exception;
use Phalcon\Logger\Adapter;
use Phalcon\Logger\Formatter\Syslog as SyslogFormatter;

/**
 * Phalcon\Logger\Adapter\Syslog
 *
 * Sends logs to the system logger
 *
 * <code>
 * use Phalcon\Logger;
 * use Phalcon\Logger\Adapter\Syslog;
 *
 * // LOG_USER is the only valid log type under Windows operating systems
 * $logger = new Syslog(
 *     "ident",
 *     [
 *         "option"   => LOG_CONS | LOG_NDELAY | LOG_PID,
 *         "facility" => LOG_USER,
 *     ]
 * );
 *
 * $logger->log("This is a message");
 * $logger->log(Logger::ERROR, "This is an error");
 * $logger->error("This is another error");
 * </code>
 */
class Syslog extends Adapter
{

    protected $_opened = false;


    /**
     * Phalcon\Logger\Adapter\Syslog constructor
     *
     * @param string $name
     * @param array $options
     */
    public function __construct($name, $options = null)
    {
    }

    /**
     * Returns the internal formatter
     *
     * @return \Phalcon\Logger\FormatterInterface
     */
    public function getFormatter(): \Phalcon\Logger\FormatterInterface
    {
    }

    /**
     * Writes the log to the stream itself
     *
     * @param string $message
     * @param int $type
     * @param int $time
     * @param array $context
     */
    public function logInternal(string $message, int $type, int $time, array $context)
    {
    }

    /**
     * Closes the logger
     *
     * @return bool
     */
    public function close(): bool
    {
    }

}
