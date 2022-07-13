<?php
// @formatter:off
// phpcs:ignoreFile
namespace Facade\Ignition\Facades {
    /**
     * Class Flare.
     *
     * @see \Facade\FlareClient\Flare
     */
    class Flare
    {
        /**
         *
         *
         * @static
         */
        public static function register($apiKey, $apiSecret = null, $contextDetector = null, $container = null)
        {
            return \Facade\FlareClient\Flare::register($apiKey, $apiSecret, $contextDetector, $container);
        }

        /**
         *
         *
         * @static
         */
        public static function determineVersionUsing($determineVersionCallable)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->determineVersionUsing($determineVersionCallable);
        }

        /**
         *
         *
         * @static
         */
        public static function reportErrorLevels($reportErrorLevels)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->reportErrorLevels($reportErrorLevels);
        }

        /**
         *
         *
         * @static
         */
        public static function filterExceptionsUsing($filterExceptionsCallable)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->filterExceptionsUsing($filterExceptionsCallable);
        }

        /**
         *
         *
         * @return null|string
         * @static
         */
        public static function version()
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->version();
        }

        /**
         *
         *
         * @static
         */
        public static function getMiddleware()
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->getMiddleware();
        }

        /**
         *
         *
         * @static
         */
        public static function registerFlareHandlers()
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->registerFlareHandlers();
        }

        /**
         *
         *
         * @static
         */
        public static function registerExceptionHandler()
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->registerExceptionHandler();
        }

        /**
         *
         *
         * @static
         */
        public static function registerErrorHandler()
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->registerErrorHandler();
        }

        /**
         *
         *
         * @static
         */
        public static function registerMiddleware($callable)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->registerMiddleware($callable);
        }

        /**
         *
         *
         * @static
         */
        public static function getMiddlewares()
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->getMiddlewares();
        }

        /**
         *
         *
         * @static
         */
        public static function glow($name, $messageLevel = 'info', $metaData = [])
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->glow($name, $messageLevel, $metaData);
        }

        /**
         *
         *
         * @static
         */
        public static function handleException($throwable)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->handleException($throwable);
        }

        /**
         *
         *
         * @static
         */
        public static function handleError($code, $message, $file = '', $line = 0)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->handleError($code, $message, $file, $line);
        }

        /**
         *
         *
         * @static
         */
        public static function applicationPath($applicationPath)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->applicationPath($applicationPath);
        }

        /**
         *
         *
         * @static
         */
        public static function report($throwable, $callback = null)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->report($throwable, $callback);
        }

        /**
         *
         *
         * @static
         */
        public static function reportMessage($message, $logLevel, $callback = null)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->reportMessage($message, $logLevel, $callback);
        }

        /**
         *
         *
         * @static
         */
        public static function sendTestReport($throwable)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->sendTestReport($throwable);
        }

        /**
         *
         *
         * @static
         */
        public static function reset()
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->reset();
        }

        /**
         *
         *
         * @static
         */
        public static function anonymizeIp()
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->anonymizeIp();
        }

        /**
         *
         *
         * @static
         */
        public static function censorRequestBodyFields($fieldNames)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->censorRequestBodyFields($fieldNames);
        }

        /**
         *
         *
         * @static
         */
        public static function createReport($throwable)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->createReport($throwable);
        }

        /**
         *
         *
         * @static
         */
        public static function createReportFromMessage($message, $logLevel)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->createReportFromMessage($message, $logLevel);
        }

        /**
         *
         *
         * @static
         */
        public static function stage($stage)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->stage($stage);
        }

        /**
         *
         *
         * @static
         */
        public static function messageLevel($messageLevel)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->messageLevel($messageLevel);
        }

        /**
         *
         *
         * @static
         */
        public static function getGroup($groupName = 'context', $default = [])
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->getGroup($groupName, $default);
        }

        /**
         *
         *
         * @static
         */
        public static function context($key, $value)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->context($key, $value);
        }

        /**
         *
         *
         * @static
         */
        public static function group($groupName, $properties)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->group($groupName, $properties);
        }

    }
}
