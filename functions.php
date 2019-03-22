<?php

/**
 * @return \Psr\Log\LoggerInterface
 */
function getLogger()
{
    $logger = new \Monolog\Logger('app');
    $stream = getenv('LOG_STREAM');
    if (! in_array($stream, [ 'php://stderr' ])) {
        $stream = APP_ROOT . '/' . trim($stream, '/') . '/log-' . date('Y-m-d') . '.log';
    }
    $logger->pushHandler(new \Monolog\Handler\StreamHandler($stream));
    return $logger;
}
