<?php
// @formatter:off
// phpcs:ignoreFile
namespace Illuminate\Support\Facades {

    /**
     *
     *
     * @see \Illuminate\Database\Schema\Builder
     */
    class Schema
    {
        /**
         * Create a database in the schema.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function createDatabase($name)
        {
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->createDatabase($name);
        }

        /**
         * Drop a database from the schema if the database exists.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function dropDatabaseIfExists($name)
        {
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->dropDatabaseIfExists($name);
        }

        /**
         * Determine if the given table exists.
         *
         * @param string $table
         * @return bool
         * @static
         */
        public static function hasTable($table)
        {
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->hasTable($table);
        }

        /**
         * Get the column listing for a given table.
         *
         * @param string $table
         * @return array
         * @static
         */
        public static function getColumnListing($table)
        {
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->getColumnListing($table);
        }

        /**
         * Drop all tables from the database.
         *
         * @return void
         * @static
         */
        public static function dropAllTables()
        {
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->dropAllTables();
        }

        /**
         * Drop all views from the database.
         *
         * @return void
         * @static
         */
        public static function dropAllViews()
        {
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->dropAllViews();
        }

        /**
         * Get all of the table names for the database.
         *
         * @return array
         * @static
         */
        public static function getAllTables()
        {
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->getAllTables();
        }

        /**
         * Get all of the view names for the database.
         *
         * @return array
         * @static
         */
        public static function getAllViews()
        {
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->getAllViews();
        }

        /**
         * Set the default string length for migrations.
         *
         * @param int $length
         * @return void
         * @static
         */
        public static function defaultStringLength($length)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            \Illuminate\Database\Schema\MySqlBuilder::defaultStringLength($length);
        }

        /**
         * Set the default morph key type for migrations.
         *
         * @param string $type
         * @return void
         * @throws \InvalidArgumentException
         * @static
         */
        public static function defaultMorphKeyType($type)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            \Illuminate\Database\Schema\MySqlBuilder::defaultMorphKeyType($type);
        }

        /**
         * Set the default morph key type for migrations to UUIDs.
         *
         * @return void
         * @static
         */
        public static function morphUsingUuids()
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            \Illuminate\Database\Schema\MySqlBuilder::morphUsingUuids();
        }

        /**
         * Determine if the given table has a given column.
         *
         * @param string $table
         * @param string $column
         * @return bool
         * @static
         */
        public static function hasColumn($table, $column)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->hasColumn($table, $column);
        }

        /**
         * Determine if the given table has given columns.
         *
         * @param string $table
         * @param array $columns
         * @return bool
         * @static
         */
        public static function hasColumns($table, $columns)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->hasColumns($table, $columns);
        }

        /**
         * Get the data type for the given column name.
         *
         * @param string $table
         * @param string $column
         * @return string
         * @static
         */
        public static function getColumnType($table, $column)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->getColumnType($table, $column);
        }

        /**
         * Modify a table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function table($table, $callback)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->table($table, $callback);
        }

        /**
         * Create a new table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function create($table, $callback)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->create($table, $callback);
        }

        /**
         * Drop a table from the schema.
         *
         * @param string $table
         * @return void
         * @static
         */
        public static function drop($table)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->drop($table);
        }

        /**
         * Drop a table from the schema if it exists.
         *
         * @param string $table
         * @return void
         * @static
         */
        public static function dropIfExists($table)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->dropIfExists($table);
        }

        /**
         * Drop columns from a table schema.
         *
         * @param string $table
         * @param string|array $columns
         * @return void
         * @static
         */
        public static function dropColumns($table, $columns)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->dropColumns($table, $columns);
        }

        /**
         * Drop all types from the database.
         *
         * @return void
         * @throws \LogicException
         * @static
         */
        public static function dropAllTypes()
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->dropAllTypes();
        }

        /**
         * Rename a table on the schema.
         *
         * @param string $from
         * @param string $to
         * @return void
         * @static
         */
        public static function rename($from, $to)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->rename($from, $to);
        }

        /**
         * Enable foreign key constraints.
         *
         * @return bool
         * @static
         */
        public static function enableForeignKeyConstraints()
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->enableForeignKeyConstraints();
        }

        /**
         * Disable foreign key constraints.
         *
         * @return bool
         * @static
         */
        public static function disableForeignKeyConstraints()
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->disableForeignKeyConstraints();
        }

        /**
         * Register a custom Doctrine mapping type.
         *
         * @param string $class
         * @param string $name
         * @param string $type
         * @return void
         * @static
         */
        public static function registerCustomDoctrineType($class, $name, $type)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->registerCustomDoctrineType($class, $name, $type);
        }

        /**
         * Get the database connection instance.
         *
         * @return \Illuminate\Database\Connection
         * @static
         */
        public static function getConnection()
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->getConnection();
        }

        /**
         * Set the database connection instance.
         *
         * @param \Illuminate\Database\Connection $connection
         * @return \Illuminate\Database\Schema\MySqlBuilder
         * @static
         */
        public static function setConnection($connection)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->setConnection($connection);
        }

        /**
         * Set the Schema Blueprint resolver callback.
         *
         * @param \Closure $resolver
         * @return void
         * @static
         */
        public static function blueprintResolver($resolver)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->blueprintResolver($resolver);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Session\SessionManager
     * @see \Illuminate\Session\Store
     */
    class Session
    {
        /**
         * Determine if requests for the same session should wait for each to finish before executing.
         *
         * @return bool
         * @static
         */
        public static function shouldBlock()
        {
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->shouldBlock();
        }

        /**
         * Get the name of the cache store / driver that should be used to acquire session locks.
         *
         * @return string|null
         * @static
         */
        public static function blockDriver()
        {
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->blockDriver();
        }

        /**
         * Get the session configuration.
         *
         * @return array
         * @static
         */
        public static function getSessionConfig()
        {
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->getSessionConfig();
        }

        /**
         * Get the default session driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Set the default session driver name.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function setDefaultDriver($name)
        {
            /** @var \Illuminate\Session\SessionManager $instance */
            $instance->setDefaultDriver($name);
        }

        /**
         * Get a driver instance.
         *
         * @param string|null $driver
         * @return mixed
         * @throws \InvalidArgumentException
         * @static
         */
        public static function driver($driver = null)
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->driver($driver);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return \Illuminate\Session\SessionManager
         * @static
         */
        public static function extend($driver, $callback)
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->extend($driver, $callback);
        }

        /**
         * Get all of the created "drivers".
         *
         * @return array
         * @static
         */
        public static function getDrivers()
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->getDrivers();
        }

        /**
         * Get the container instance used by the manager.
         *
         * @return \Illuminate\Contracts\Container\Container
         * @static
         */
        public static function getContainer()
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->getContainer();
        }

        /**
         * Set the container instance used by the manager.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return \Illuminate\Session\SessionManager
         * @static
         */
        public static function setContainer($container)
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->setContainer($container);
        }

        /**
         * Forget all of the resolved driver instances.
         *
         * @return \Illuminate\Session\SessionManager
         * @static
         */
        public static function forgetDrivers()
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->forgetDrivers();
        }

        /**
         * Start the session, reading the data from a handler.
         *
         * @return bool
         * @static
         */
        public static function start()
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->start();
        }

        /**
         * Save the session data to storage.
         *
         * @return void
         * @static
         */
        public static function save()
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->save();
        }

        /**
         * Age the flash data for the session.
         *
         * @return void
         * @static
         */
        public static function ageFlashData()
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->ageFlashData();
        }

        /**
         * Get all of the session data.
         *
         * @return array
         * @static
         */
        public static function all()
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->all();
        }

        /**
         * Get a subset of the session data.
         *
         * @param array $keys
         * @return array
         * @static
         */
        public static function only($keys)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->only($keys);
        }

        /**
         * Checks if a key exists.
         *
         * @param string|array $key
         * @return bool
         * @static
         */
        public static function exists($key)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->exists($key);
        }

        /**
         * Determine if the given key is missing from the session data.
         *
         * @param string|array $key
         * @return bool
         * @static
         */
        public static function missing($key)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->missing($key);
        }

        /**
         * Checks if a key is present and not null.
         *
         * @param string|array $key
         * @return bool
         * @static
         */
        public static function has($key)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->has($key);
        }

        /**
         * Get an item from the session.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function get($key, $default = null)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->get($key, $default);
        }

        /**
         * Get the value of a given key and then forget it.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function pull($key, $default = null)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->pull($key, $default);
        }

        /**
         * Determine if the session contains old input.
         *
         * @param string|null $key
         * @return bool
         * @static
         */
        public static function hasOldInput($key = null)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->hasOldInput($key);
        }

        /**
         * Get the requested item from the flashed input array.
         *
         * @param string|null $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function getOldInput($key = null, $default = null)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->getOldInput($key, $default);
        }

        /**
         * Replace the given session attributes entirely.
         *
         * @param array $attributes
         * @return void
         * @static
         */
        public static function replace($attributes)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->replace($attributes);
        }

        /**
         * Put a key / value pair or array of key / value pairs in the session.
         *
         * @param string|array $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function put($key, $value = null)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->put($key, $value);
        }

        /**
         * Get an item from the session, or store the default value.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed
         * @static
         */
        public static function remember($key, $callback)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->remember($key, $callback);
        }

        /**
         * Push a value onto a session array.
         *
         * @param string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function push($key, $value)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->push($key, $value);
        }

        /**
         * Increment the value of an item in the session.
         *
         * @param string $key
         * @param int $amount
         * @return mixed
         * @static
         */
        public static function increment($key, $amount = 1)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->increment($key, $amount);
        }

        /**
         * Decrement the value of an item in the session.
         *
         * @param string $key
         * @param int $amount
         * @return int
         * @static
         */
        public static function decrement($key, $amount = 1)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->decrement($key, $amount);
        }

        /**
         * Flash a key / value pair to the session.
         *
         * @param string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function flash($key, $value = true)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->flash($key, $value);
        }

        /**
         * Flash a key / value pair to the session for immediate use.
         *
         * @param string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function now($key, $value)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->now($key, $value);
        }

        /**
         * Reflash all of the session flash data.
         *
         * @return void
         * @static
         */
        public static function reflash()
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->reflash();
        }

        /**
         * Reflash a subset of the current flash data.
         *
         * @param array|mixed $keys
         * @return void
         * @static
         */
        public static function keep($keys = null)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->keep($keys);
        }

        /**
         * Flash an input array to the session.
         *
         * @param array $value
         * @return void
         * @static
         */
        public static function flashInput($value)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->flashInput($value);
        }

        /**
         * Remove an item from the session, returning its value.
         *
         * @param string $key
         * @return mixed
         * @static
         */
        public static function remove($key)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->remove($key);
        }

        /**
         * Remove one or many items from the session.
         *
         * @param string|array $keys
         * @return void
         * @static
         */
        public static function forget($keys)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->forget($keys);
        }

        /**
         * Remove all of the items from the session.
         *
         * @return void
         * @static
         */
        public static function flush()
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->flush();
        }

        /**
         * Flush the session data and regenerate the ID.
         *
         * @return bool
         * @static
         */
        public static function invalidate()
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->invalidate();
        }

        /**
         * Generate a new session identifier.
         *
         * @param bool $destroy
         * @return bool
         * @static
         */
        public static function regenerate($destroy = false)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->regenerate($destroy);
        }

        /**
         * Generate a new session ID for the session.
         *
         * @param bool $destroy
         * @return bool
         * @static
         */
        public static function migrate($destroy = false)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->migrate($destroy);
        }

        /**
         * Determine if the session has been started.
         *
         * @return bool
         * @static
         */
        public static function isStarted()
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->isStarted();
        }

        /**
         * Get the name of the session.
         *
         * @return string
         * @static
         */
        public static function getName()
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->getName();
        }

        /**
         * Set the name of the session.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function setName($name)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->setName($name);
        }

        /**
         * Get the current session ID.
         *
         * @return string
         * @static
         */
        public static function getId()
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->getId();
        }

        /**
         * Set the session ID.
         *
         * @param string $id
         * @return void
         * @static
         */
        public static function setId($id)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->setId($id);
        }

        /**
         * Determine if this is a valid session ID.
         *
         * @param string $id
         * @return bool
         * @static
         */
        public static function isValidId($id)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->isValidId($id);
        }

        /**
         * Set the existence of the session on the handler if applicable.
         *
         * @param bool $value
         * @return void
         * @static
         */
        public static function setExists($value)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->setExists($value);
        }

        /**
         * Get the CSRF token value.
         *
         * @return string
         * @static
         */
        public static function token()
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->token();
        }

        /**
         * Regenerate the CSRF token value.
         *
         * @return void
         * @static
         */
        public static function regenerateToken()
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->regenerateToken();
        }

        /**
         * Get the previous URL from the session.
         *
         * @return string|null
         * @static
         */
        public static function previousUrl()
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->previousUrl();
        }

        /**
         * Set the "previous" URL in the session.
         *
         * @param string $url
         * @return void
         * @static
         */
        public static function setPreviousUrl($url)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->setPreviousUrl($url);
        }

        /**
         * Specify that the user has confirmed their password.
         *
         * @return void
         * @static
         */
        public static function passwordConfirmed()
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->passwordConfirmed();
        }

        /**
         * Get the underlying session handler implementation.
         *
         * @return \SessionHandlerInterface
         * @static
         */
        public static function getHandler()
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->getHandler();
        }

        /**
         * Determine if the session handler needs a request.
         *
         * @return bool
         * @static
         */
        public static function handlerNeedsRequest()
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->handlerNeedsRequest();
        }

        /**
         * Set the request on the handler instance.
         *
         * @param \Illuminate\Http\Request $request
         * @return void
         * @static
         */
        public static function setRequestOnHandler($request)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->setRequestOnHandler($request);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Filesystem\FilesystemManager
     */
    class Storage
    {
        /**
         * Get a filesystem instance.
         *
         * @param string|null $name
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function drive($name = null)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->drive($name);
        }

        /**
         * Get a filesystem instance.
         *
         * @param string|null $name
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function disk($name = null)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->disk($name);
        }

        /**
         * Get a default cloud filesystem instance.
         *
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function cloud()
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->cloud();
        }

        /**
         * Build an on-demand disk.
         *
         * @param string|array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function build($config)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->build($config);
        }

        /**
         * Create an instance of the local driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function createLocalDriver($config)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->createLocalDriver($config);
        }

        /**
         * Create an instance of the ftp driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function createFtpDriver($config)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->createFtpDriver($config);
        }

        /**
         * Create an instance of the sftp driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function createSftpDriver($config)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->createSftpDriver($config);
        }

        /**
         * Create an instance of the Amazon S3 driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Cloud
         * @static
         */
        public static function createS3Driver($config)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->createS3Driver($config);
        }

        /**
         * Set the given disk instance.
         *
         * @param string $name
         * @param mixed $disk
         * @return \Illuminate\Filesystem\FilesystemManager
         * @static
         */
        public static function set($name, $disk)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->set($name, $disk);
        }

        /**
         * Get the default driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Get the default cloud driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultCloudDriver()
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->getDefaultCloudDriver();
        }

        /**
         * Unset the given disk instances.
         *
         * @param array|string $disk
         * @return \Illuminate\Filesystem\FilesystemManager
         * @static
         */
        public static function forgetDisk($disk)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->forgetDisk($disk);
        }

        /**
         * Disconnect the given disk and remove from local cache.
         *
         * @param string|null $name
         * @return void
         * @static
         */
        public static function purge($name = null)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            $instance->purge($name);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return \Illuminate\Filesystem\FilesystemManager
         * @static
         */
        public static function extend($driver, $callback)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->extend($driver, $callback);
        }

        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         * @return \Illuminate\Filesystem\FilesystemManager
         * @static
         */
        public static function setApplication($app)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->setApplication($app);
        }

        /**
         * Assert that the given file exists.
         *
         * @param string|array $path
         * @param string|null $content
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function assertExists($path, $content = null)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->assertExists($path, $content);
        }

        /**
         * Assert that the given file does not exist.
         *
         * @param string|array $path
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function assertMissing($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->assertMissing($path);
        }

        /**
         * Determine if a file exists.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function exists($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->exists($path);
        }

        /**
         * Determine if a file or directory is missing.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function missing($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->missing($path);
        }

        /**
         * Get the full path for the file at the given "short" path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function path($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->path($path);
        }

        /**
         * Get the contents of a file.
         *
         * @param string $path
         * @return string
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static
         */
        public static function get($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->get($path);
        }

        /**
         * Create a streamed response for a given file.
         *
         * @param string $path
         * @param string|null $name
         * @param array|null $headers
         * @param string|null $disposition
         * @return \Symfony\Component\HttpFoundation\StreamedResponse
         * @static
         */
        public static function response($path, $name = null, $headers = [], $disposition = 'inline')
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->response($path, $name, $headers, $disposition);
        }

        /**
         * Create a streamed download response for a given file.
         *
         * @param string $path
         * @param string|null $name
         * @param array|null $headers
         * @return \Symfony\Component\HttpFoundation\StreamedResponse
         * @static
         */
        public static function download($path, $name = null, $headers = [])
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->download($path, $name, $headers);
        }

        /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param \Psr\Http\Message\StreamInterface|\Illuminate\Http\File|\Illuminate\Http\UploadedFile|string|resource $contents
         * @param mixed $options
         * @return bool
         * @static
         */
        public static function put($path, $contents, $options = [])
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->put($path, $contents, $options);
        }

        /**
         * Store the uploaded file on the disk.
         *
         * @param string $path
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile|string $file
         * @param mixed $options
         * @return string|false
         * @static
         */
        public static function putFile($path, $file, $options = [])
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->putFile($path, $file, $options);
        }

        /**
         * Store the uploaded file on the disk with a given name.
         *
         * @param string $path
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile|string $file
         * @param string $name
         * @param mixed $options
         * @return string|false
         * @static
         */
        public static function putFileAs($path, $file, $name, $options = [])
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->putFileAs($path, $file, $name, $options);
        }

        /**
         * Get the visibility for the given path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function getVisibility($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->getVisibility($path);
        }

        /**
         * Set the visibility for the given path.
         *
         * @param string $path
         * @param string $visibility
         * @return bool
         * @static
         */
        public static function setVisibility($path, $visibility)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->setVisibility($path, $visibility);
        }

        /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
         * @param string $separator
         * @return bool
         * @static
         */
        public static function prepend($path, $data, $separator = '
')
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->prepend($path, $data, $separator);
        }

        /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
         * @param string $separator
         * @return bool
         * @static
         */
        public static function append($path, $data, $separator = '
')
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->append($path, $data, $separator);
        }

        /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
         * @return bool
         * @static
         */
        public static function delete($paths)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->delete($paths);
        }

        /**
         * Copy a file to a new location.
         *
         * @param string $from
         * @param string $to
         * @return bool
         * @static
         */
        public static function copy($from, $to)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->copy($from, $to);
        }

        /**
         * Move a file to a new location.
         *
         * @param string $from
         * @param string $to
         * @return bool
         * @static
         */
        public static function move($from, $to)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->move($from, $to);
        }

        /**
         * Get the file size of a given file.
         *
         * @param string $path
         * @return int
         * @static
         */
        public static function size($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->size($path);
        }

        /**
         * Get the mime-type of a given file.
         *
         * @param string $path
         * @return string|false
         * @static
         */
        public static function mimeType($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->mimeType($path);
        }

        /**
         * Get the file's last modification time.
         *
         * @param string $path
         * @return int
         * @static
         */
        public static function lastModified($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->lastModified($path);
        }

        /**
         * Get the URL for the file at the given path.
         *
         * @param string $path
         * @return string
         * @throws \RuntimeException
         * @static
         */
        public static function url($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->url($path);
        }

        /**
         * Get a resource to read the file.
         *
         * @param string $path
         * @return resource|null The path resource or null on failure.
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static
         */
        public static function readStream($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->readStream($path);
        }

        /**
         * Write a new file using a stream.
         *
         * @param string $path
         * @param resource $resource
         * @param array $options
         * @return bool
         * @throws \InvalidArgumentException If $resource is not a file handle.
         * @throws \Illuminate\Contracts\Filesystem\FileExistsException
         * @static
         */
        public static function writeStream($path, $resource, $options = [])
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->writeStream($path, $resource, $options);
        }

        /**
         * Get a temporary URL for the file at the given path.
         *
         * @param string $path
         * @param \DateTimeInterface $expiration
         * @param array $options
         * @return string
         * @throws \RuntimeException
         * @static
         */
        public static function temporaryUrl($path, $expiration, $options = [])
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->temporaryUrl($path, $expiration, $options);
        }

        /**
         * Get a temporary URL for the file at the given path.
         *
         * @param \League\Flysystem\AwsS3v3\AwsS3Adapter $adapter
         * @param string $path
         * @param \DateTimeInterface $expiration
         * @param array $options
         * @return string
         * @static
         */
        public static function getAwsTemporaryUrl($adapter, $path, $expiration, $options)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->getAwsTemporaryUrl($adapter, $path, $expiration, $options);
        }

        /**
         * Get an array of all files in a directory.
         *
         * @param string|null $directory
         * @param bool $recursive
         * @return array
         * @static
         */
        public static function files($directory = null, $recursive = false)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->files($directory, $recursive);
        }

        /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string|null $directory
         * @return array
         * @static
         */
        public static function allFiles($directory = null)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->allFiles($directory);
        }

        /**
         * Get all of the directories within a given directory.
         *
         * @param string|null $directory
         * @param bool $recursive
         * @return array
         * @static
         */
        public static function directories($directory = null, $recursive = false)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->directories($directory, $recursive);
        }

        /**
         * Get all (recursive) of the directories within a given directory.
         *
         * @param string|null $directory
         * @return array
         * @static
         */
        public static function allDirectories($directory = null)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->allDirectories($directory);
        }

        /**
         * Create a directory.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function makeDirectory($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->makeDirectory($path);
        }

        /**
         * Recursively delete a directory.
         *
         * @param string $directory
         * @return bool
         * @static
         */
        public static function deleteDirectory($directory)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->deleteDirectory($directory);
        }

        /**
         * Flush the Flysystem cache.
         *
         * @return void
         * @static
         */
        public static function flushCache()
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            $instance->flushCache();
        }

        /**
         * Get the Flysystem driver.
         *
         * @return \League\Flysystem\FilesystemInterface
         * @static
         */
        public static function getDriver()
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->getDriver();
        }

        /**
         * Define a custom temporary URL builder callback.
         *
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function buildTemporaryUrlsUsing($callback)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            $instance->buildTemporaryUrlsUsing($callback);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Filesystem\FilesystemAdapter::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Filesystem\FilesystemAdapter::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Filesystem\FilesystemAdapter::flushMacros();
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed
         * @throws \BadMethodCallException
         * @static
         */
        public static function macroCall($method, $parameters)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->macroCall($method, $parameters);
        }

    }


}
