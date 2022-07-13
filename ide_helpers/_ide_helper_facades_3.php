<?php

// @formatter:off
// phpcs:ignoreFile

namespace Illuminate\Support\Facades {

    /**
     *
     *
     * @method static mixed reset(array $credentials, \Closure $callback)
     * @method static string sendResetLink(array $credentials, \Closure $callback = null)
     * @method static \Illuminate\Contracts\Auth\CanResetPassword getUser(array $credentials)
     * @method static string createToken(\Illuminate\Contracts\Auth\CanResetPassword $user)
     * @method static void deleteToken(\Illuminate\Contracts\Auth\CanResetPassword $user)
     * @method static bool tokenExists(\Illuminate\Contracts\Auth\CanResetPassword $user, string $token)
     * @method static \Illuminate\Auth\Passwords\TokenRepositoryInterface getRepository()
     * @see \Illuminate\Auth\Passwords\PasswordBroker
     */
    class Password
    {
        /**
         * Attempt to get the broker from the local cache.
         *
         * @param string|null $name
         * @return \Illuminate\Contracts\Auth\PasswordBroker
         * @static
         */
        public static function broker($name = null)
        {
            /** @var \Illuminate\Auth\Passwords\PasswordBrokerManager $instance */
            return $instance->broker($name);
        }

        /**
         * Get the default password broker name.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var \Illuminate\Auth\Passwords\PasswordBrokerManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Set the default password broker name.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function setDefaultDriver($name)
        {
            /** @var \Illuminate\Auth\Passwords\PasswordBrokerManager $instance */
            $instance->setDefaultDriver($name);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Queue\QueueManager
     * @see \Illuminate\Queue\Queue
     */
    class Queue
    {
        /**
         * Register an event listener for the before job event.
         *
         * @param mixed $callback
         * @return void
         * @static
         */
        public static function before($callback)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->before($callback);
        }

        /**
         * Register an event listener for the after job event.
         *
         * @param mixed $callback
         * @return void
         * @static
         */
        public static function after($callback)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->after($callback);
        }

        /**
         * Register an event listener for the exception occurred job event.
         *
         * @param mixed $callback
         * @return void
         * @static
         */
        public static function exceptionOccurred($callback)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->exceptionOccurred($callback);
        }

        /**
         * Register an event listener for the daemon queue loop.
         *
         * @param mixed $callback
         * @return void
         * @static
         */
        public static function looping($callback)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->looping($callback);
        }

        /**
         * Register an event listener for the failed job event.
         *
         * @param mixed $callback
         * @return void
         * @static
         */
        public static function failing($callback)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->failing($callback);
        }

        /**
         * Register an event listener for the daemon queue stopping.
         *
         * @param mixed $callback
         * @return void
         * @static
         */
        public static function stopping($callback)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->stopping($callback);
        }

        /**
         * Determine if the driver is connected.
         *
         * @param string|null $name
         * @return bool
         * @static
         */
        public static function connected($name = null)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            return $instance->connected($name);
        }

        /**
         * Resolve a queue connection instance.
         *
         * @param string|null $name
         * @return \Illuminate\Contracts\Queue\Queue
         * @static
         */
        public static function connection($name = null)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            return $instance->connection($name);
        }

        /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param \Closure $resolver
         * @return void
         * @static
         */
        public static function extend($driver, $resolver)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->extend($driver, $resolver);
        }

        /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param \Closure $resolver
         * @return void
         * @static
         */
        public static function addConnector($driver, $resolver)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->addConnector($driver, $resolver);
        }

        /**
         * Get the name of the default queue connection.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Set the name of the default queue connection.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function setDefaultDriver($name)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->setDefaultDriver($name);
        }

        /**
         * Get the full name for the given connection.
         *
         * @param string|null $connection
         * @return string
         * @static
         */
        public static function getName($connection = null)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            return $instance->getName($connection);
        }

        /**
         * Get the application instance used by the manager.
         *
         * @return \Illuminate\Contracts\Foundation\Application
         * @static
         */
        public static function getApplication()
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            return $instance->getApplication();
        }

        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         * @return \Illuminate\Queue\QueueManager
         * @static
         */
        public static function setApplication($app)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            return $instance->setApplication($app);
        }

        /**
         * Assert if a job was pushed based on a truth-test callback.
         *
         * @param string|\Closure $job
         * @param callable|int|null $callback
         * @return void
         * @static
         */
        public static function assertPushed($job, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->assertPushed($job, $callback);
        }

        /**
         * Assert if a job was pushed based on a truth-test callback.
         *
         * @param string $queue
         * @param string|\Closure $job
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertPushedOn($queue, $job, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->assertPushedOn($queue, $job, $callback);
        }

        /**
         * Assert if a job was pushed with chained jobs based on a truth-test callback.
         *
         * @param string $job
         * @param array $expectedChain
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertPushedWithChain($job, $expectedChain = [], $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->assertPushedWithChain($job, $expectedChain, $callback);
        }

        /**
         * Assert if a job was pushed with an empty chain based on a truth-test callback.
         *
         * @param string $job
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertPushedWithoutChain($job, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->assertPushedWithoutChain($job, $callback);
        }

        /**
         * Determine if a job was pushed based on a truth-test callback.
         *
         * @param string|\Closure $job
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertNotPushed($job, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->assertNotPushed($job, $callback);
        }

        /**
         * Assert that no jobs were pushed.
         *
         * @return void
         * @static
         */
        public static function assertNothingPushed()
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->assertNothingPushed();
        }

        /**
         * Get all of the jobs matching a truth-test callback.
         *
         * @param string $job
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static function pushed($job, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->pushed($job, $callback);
        }

        /**
         * Determine if there are any stored jobs for a given class.
         *
         * @param string $job
         * @return bool
         * @static
         */
        public static function hasPushed($job)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->hasPushed($job);
        }

        /**
         * Get the size of the queue.
         *
         * @param string|null $queue
         * @return int
         * @static
         */
        public static function size($queue = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->size($queue);
        }

        /**
         * Push a new job onto the queue.
         *
         * @param string|object $job
         * @param mixed $data
         * @param string|null $queue
         * @return mixed
         * @static
         */
        public static function push($job, $data = '', $queue = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->push($job, $data, $queue);
        }

        /**
         * Push a raw payload onto the queue.
         *
         * @param string $payload
         * @param string|null $queue
         * @param array $options
         * @return mixed
         * @static
         */
        public static function pushRaw($payload, $queue = null, $options = [])
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->pushRaw($payload, $queue, $options);
        }

        /**
         * Push a new job onto the queue after a delay.
         *
         * @param \DateTimeInterface|\DateInterval|int $delay
         * @param string|object $job
         * @param mixed $data
         * @param string|null $queue
         * @return mixed
         * @static
         */
        public static function later($delay, $job, $data = '', $queue = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->later($delay, $job, $data, $queue);
        }

        /**
         * Push a new job onto the queue.
         *
         * @param string $queue
         * @param string|object $job
         * @param mixed $data
         * @return mixed
         * @static
         */
        public static function pushOn($queue, $job, $data = '')
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->pushOn($queue, $job, $data);
        }

        /**
         * Push a new job onto the queue after a delay.
         *
         * @param string $queue
         * @param \DateTimeInterface|\DateInterval|int $delay
         * @param string|object $job
         * @param mixed $data
         * @return mixed
         * @static
         */
        public static function laterOn($queue, $delay, $job, $data = '')
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->laterOn($queue, $delay, $job, $data);
        }

        /**
         * Pop the next job off of the queue.
         *
         * @param string|null $queue
         * @return \Illuminate\Contracts\Queue\Job|null
         * @static
         */
        public static function pop($queue = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->pop($queue);
        }

        /**
         * Push an array of jobs onto the queue.
         *
         * @param array $jobs
         * @param mixed $data
         * @param string|null $queue
         * @return mixed
         * @static
         */
        public static function bulk($jobs, $data = '', $queue = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->bulk($jobs, $data, $queue);
        }

        /**
         * Get the jobs that have been pushed.
         *
         * @return array
         * @static
         */
        public static function pushedJobs()
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->pushedJobs();
        }

        /**
         * Get the connection name for the queue.
         *
         * @return string
         * @static
         */
        public static function getConnectionName()
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->getConnectionName();
        }

        /**
         * Set the connection name for the queue.
         *
         * @param string $name
         * @return \Illuminate\Support\Testing\Fakes\QueueFake
         * @static
         */
        public static function setConnectionName($name)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->setConnectionName($name);
        }

        /**
         * Get the backoff for an object-based queue handler.
         *
         * @param mixed $job
         * @return mixed
         * @static
         */
        public static function getJobBackoff($job)
        {            //Method inherited from \Illuminate\Queue\Queue
            /** @var \Illuminate\Queue\SyncQueue $instance */
            return $instance->getJobBackoff($job);
        }

        /**
         * Get the expiration timestamp for an object-based queue handler.
         *
         * @param mixed $job
         * @return mixed
         * @static
         */
        public static function getJobExpiration($job)
        {            //Method inherited from \Illuminate\Queue\Queue
            /** @var \Illuminate\Queue\SyncQueue $instance */
            return $instance->getJobExpiration($job);
        }

        /**
         * Register a callback to be executed when creating job payloads.
         *
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function createPayloadUsing($callback)
        {            //Method inherited from \Illuminate\Queue\Queue
            \Illuminate\Queue\SyncQueue::createPayloadUsing($callback);
        }

        /**
         * Get the container instance being used by the connection.
         *
         * @return \Illuminate\Container\Container
         * @static
         */
        public static function getContainer()
        {            //Method inherited from \Illuminate\Queue\Queue
            /** @var \Illuminate\Queue\SyncQueue $instance */
            return $instance->getContainer();
        }

        /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Container\Container $container
         * @return void
         * @static
         */
        public static function setContainer($container)
        {            //Method inherited from \Illuminate\Queue\Queue
            /** @var \Illuminate\Queue\SyncQueue $instance */
            $instance->setContainer($container);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Cache\RateLimiter
     */
    class RateLimiter
    {
        /**
         * Register a named limiter configuration.
         *
         * @param string $name
         * @param \Closure $callback
         * @return \Illuminate\Cache\RateLimiter
         * @static
         */
        public static function for($name, $callback)
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->for($name, $callback);
        }

        /**
         * Get the given named rate limiter.
         *
         * @param string $name
         * @return \Closure
         * @static
         */
        public static function limiter($name)
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->limiter($name);
        }

        /**
         * Attempts to execute a callback if it's not limited.
         *
         * @param string $key
         * @param int $maxAttempts
         * @param \Closure $callback
         * @param int $decaySeconds
         * @return mixed
         * @static
         */
        public static function attempt($key, $maxAttempts, $callback, $decaySeconds = 60)
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->attempt($key, $maxAttempts, $callback, $decaySeconds);
        }

        /**
         * Determine if the given key has been "accessed" too many times.
         *
         * @param string $key
         * @param int $maxAttempts
         * @return bool
         * @static
         */
        public static function tooManyAttempts($key, $maxAttempts)
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->tooManyAttempts($key, $maxAttempts);
        }

        /**
         * Increment the counter for a given key for a given decay time.
         *
         * @param string $key
         * @param int $decaySeconds
         * @return int
         * @static
         */
        public static function hit($key, $decaySeconds = 60)
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->hit($key, $decaySeconds);
        }

        /**
         * Get the number of attempts for the given key.
         *
         * @param string $key
         * @return mixed
         * @static
         */
        public static function attempts($key)
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->attempts($key);
        }

        /**
         * Reset the number of attempts for the given key.
         *
         * @param string $key
         * @return mixed
         * @static
         */
        public static function resetAttempts($key)
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->resetAttempts($key);
        }

        /**
         * Get the number of retries left for the given key.
         *
         * @param string $key
         * @param int $maxAttempts
         * @return int
         * @static
         */
        public static function remaining($key, $maxAttempts)
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->remaining($key, $maxAttempts);
        }

        /**
         * Get the number of retries left for the given key.
         *
         * @param string $key
         * @param int $maxAttempts
         * @return int
         * @static
         */
        public static function retriesLeft($key, $maxAttempts)
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->retriesLeft($key, $maxAttempts);
        }

        /**
         * Clear the hits and lockout timer for the given key.
         *
         * @param string $key
         * @return void
         * @static
         */
        public static function clear($key)
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            $instance->clear($key);
        }

        /**
         * Get the number of seconds until the "key" is accessible again.
         *
         * @param string $key
         * @return int
         * @static
         */
        public static function availableIn($key)
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->availableIn($key);
        }

        /**
         * Clean the rate limiter key from unicode characters.
         *
         * @param string $key
         * @return string
         * @static
         */
        public static function cleanRateLimiterKey($key)
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->cleanRateLimiterKey($key);
        }

    }
}
