<?php
// @formatter:off
// phpcs:ignoreFile
namespace Illuminate\Support\Facades {

    /**
     *
     *
     * @see \Illuminate\Routing\UrlGenerator
     */
    class URL
    {
        /**
         * Get the full URL for the current request.
         *
         * @return string
         * @static
         */
        public static function full()
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->full();
        }

        /**
         * Get the current URL for the request.
         *
         * @return string
         * @static
         */
        public static function current()
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->current();
        }

        /**
         * Get the URL for the previous request.
         *
         * @param mixed $fallback
         * @return string
         * @static
         */
        public static function previous($fallback = false)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->previous($fallback);
        }

        /**
         * Generate an absolute URL to the given path.
         *
         * @param string $path
         * @param mixed $extra
         * @param bool|null $secure
         * @return string
         * @static
         */
        public static function to($path, $extra = [], $secure = null)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->to($path, $extra, $secure);
        }

        /**
         * Generate a secure, absolute URL to the given path.
         *
         * @param string $path
         * @param array $parameters
         * @return string
         * @static
         */
        public static function secure($path, $parameters = [])
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->secure($path, $parameters);
        }

        /**
         * Generate the URL to an application asset.
         *
         * @param string $path
         * @param bool|null $secure
         * @return string
         * @static
         */
        public static function asset($path, $secure = null)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->asset($path, $secure);
        }

        /**
         * Generate the URL to a secure asset.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function secureAsset($path)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->secureAsset($path);
        }

        /**
         * Generate the URL to an asset from a custom root domain such as CDN, etc.
         *
         * @param string $root
         * @param string $path
         * @param bool|null $secure
         * @return string
         * @static
         */
        public static function assetFrom($root, $path, $secure = null)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->assetFrom($root, $path, $secure);
        }

        /**
         * Get the default scheme for a raw URL.
         *
         * @param bool|null $secure
         * @return string
         * @static
         */
        public static function formatScheme($secure = null)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->formatScheme($secure);
        }

        /**
         * Create a signed route URL for a named route.
         *
         * @param string $name
         * @param mixed $parameters
         * @param \DateTimeInterface|\DateInterval|int|null $expiration
         * @param bool $absolute
         * @return string
         * @throws \InvalidArgumentException
         * @static
         */
        public static function signedRoute($name, $parameters = [], $expiration = null, $absolute = true)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->signedRoute($name, $parameters, $expiration, $absolute);
        }

        /**
         * Create a temporary signed route URL for a named route.
         *
         * @param string $name
         * @param \DateTimeInterface|\DateInterval|int $expiration
         * @param array $parameters
         * @param bool $absolute
         * @return string
         * @static
         */
        public static function temporarySignedRoute($name, $expiration, $parameters = [], $absolute = true)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->temporarySignedRoute($name, $expiration, $parameters, $absolute);
        }

        /**
         * Determine if the given request has a valid signature.
         *
         * @param \Illuminate\Http\Request $request
         * @param bool $absolute
         * @return bool
         * @static
         */
        public static function hasValidSignature($request, $absolute = true)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->hasValidSignature($request, $absolute);
        }

        /**
         * Determine if the given request has a valid signature for a relative URL.
         *
         * @param \Illuminate\Http\Request $request
         * @return bool
         * @static
         */
        public static function hasValidRelativeSignature($request)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->hasValidRelativeSignature($request);
        }

        /**
         * Determine if the signature from the given request matches the URL.
         *
         * @param \Illuminate\Http\Request $request
         * @param bool $absolute
         * @return bool
         * @static
         */
        public static function hasCorrectSignature($request, $absolute = true)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->hasCorrectSignature($request, $absolute);
        }

        /**
         * Determine if the expires timestamp from the given request is not from the past.
         *
         * @param \Illuminate\Http\Request $request
         * @return bool
         * @static
         */
        public static function signatureHasNotExpired($request)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->signatureHasNotExpired($request);
        }

        /**
         * Get the URL to a named route.
         *
         * @param string $name
         * @param mixed $parameters
         * @param bool $absolute
         * @return string
         * @throws \Symfony\Component\Routing\Exception\RouteNotFoundException
         * @static
         */
        public static function route($name, $parameters = [], $absolute = true)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->route($name, $parameters, $absolute);
        }

        /**
         * Get the URL for a given route instance.
         *
         * @param \Illuminate\Routing\Route $route
         * @param mixed $parameters
         * @param bool $absolute
         * @return string
         * @throws \Illuminate\Routing\Exceptions\UrlGenerationException
         * @static
         */
        public static function toRoute($route, $parameters, $absolute)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->toRoute($route, $parameters, $absolute);
        }

        /**
         * Get the URL to a controller action.
         *
         * @param string|array $action
         * @param mixed $parameters
         * @param bool $absolute
         * @return string
         * @throws \InvalidArgumentException
         * @static
         */
        public static function action($action, $parameters = [], $absolute = true)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->action($action, $parameters, $absolute);
        }

        /**
         * Format the array of URL parameters.
         *
         * @param mixed|array $parameters
         * @return array
         * @static
         */
        public static function formatParameters($parameters)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->formatParameters($parameters);
        }

        /**
         * Get the base URL for the request.
         *
         * @param string $scheme
         * @param string|null $root
         * @return string
         * @static
         */
        public static function formatRoot($scheme, $root = null)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->formatRoot($scheme, $root);
        }

        /**
         * Format the given URL segments into a single URL.
         *
         * @param string $root
         * @param string $path
         * @param \Illuminate\Routing\Route|null $route
         * @return string
         * @static
         */
        public static function format($root, $path, $route = null)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->format($root, $path, $route);
        }

        /**
         * Determine if the given path is a valid URL.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function isValidUrl($path)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->isValidUrl($path);
        }

        /**
         * Set the default named parameters used by the URL generator.
         *
         * @param array $defaults
         * @return void
         * @static
         */
        public static function defaults($defaults)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            $instance->defaults($defaults);
        }

        /**
         * Get the default named parameters used by the URL generator.
         *
         * @return array
         * @static
         */
        public static function getDefaultParameters()
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->getDefaultParameters();
        }

        /**
         * Force the scheme for URLs.
         *
         * @param string|null $scheme
         * @return void
         * @static
         */
        public static function forceScheme($scheme)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            $instance->forceScheme($scheme);
        }

        /**
         * Set the forced root URL.
         *
         * @param string|null $root
         * @return void
         * @static
         */
        public static function forceRootUrl($root)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            $instance->forceRootUrl($root);
        }

        /**
         * Set a callback to be used to format the host of generated URLs.
         *
         * @param \Closure $callback
         * @return \Illuminate\Routing\UrlGenerator
         * @static
         */
        public static function formatHostUsing($callback)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->formatHostUsing($callback);
        }

        /**
         * Set a callback to be used to format the path of generated URLs.
         *
         * @param \Closure $callback
         * @return \Illuminate\Routing\UrlGenerator
         * @static
         */
        public static function formatPathUsing($callback)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->formatPathUsing($callback);
        }

        /**
         * Get the path formatter being used by the URL generator.
         *
         * @return \Closure
         * @static
         */
        public static function pathFormatter()
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->pathFormatter();
        }

        /**
         * Get the request instance.
         *
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function getRequest()
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->getRequest();
        }

        /**
         * Set the current request instance.
         *
         * @param \Illuminate\Http\Request $request
         * @return void
         * @static
         */
        public static function setRequest($request)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            $instance->setRequest($request);
        }

        /**
         * Set the route collection.
         *
         * @param \Illuminate\Routing\RouteCollectionInterface $routes
         * @return \Illuminate\Routing\UrlGenerator
         * @static
         */
        public static function setRoutes($routes)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->setRoutes($routes);
        }

        /**
         * Set the session resolver for the generator.
         *
         * @param callable $sessionResolver
         * @return \Illuminate\Routing\UrlGenerator
         * @static
         */
        public static function setSessionResolver($sessionResolver)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->setSessionResolver($sessionResolver);
        }

        /**
         * Set the encryption key resolver.
         *
         * @param callable $keyResolver
         * @return \Illuminate\Routing\UrlGenerator
         * @static
         */
        public static function setKeyResolver($keyResolver)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->setKeyResolver($keyResolver);
        }

        /**
         * Set the root controller namespace.
         *
         * @param string $rootNamespace
         * @return \Illuminate\Routing\UrlGenerator
         * @static
         */
        public static function setRootControllerNamespace($rootNamespace)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->setRootControllerNamespace($rootNamespace);
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
            \Illuminate\Routing\UrlGenerator::macro($name, $macro);
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
            \Illuminate\Routing\UrlGenerator::mixin($mixin, $replace);
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
            return \Illuminate\Routing\UrlGenerator::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Routing\UrlGenerator::flushMacros();
        }

    }

    /**
     *
     *
     * @see \Illuminate\Validation\Factory
     */
    class Validator
    {
        /**
         * Create a new Validator instance.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         * @param array $customAttributes
         * @return \Illuminate\Validation\Validator
         * @static
         */
        public static function make($data, $rules, $messages = [], $customAttributes = [])
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->make($data, $rules, $messages, $customAttributes);
        }

        /**
         * Validate the given data against the provided rules.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         * @param array $customAttributes
         * @return array
         * @throws \Illuminate\Validation\ValidationException
         * @static
         */
        public static function validate($data, $rules, $messages = [], $customAttributes = [])
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->validate($data, $rules, $messages, $customAttributes);
        }

        /**
         * Register a custom validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string|null $message
         * @return void
         * @static
         */
        public static function extend($rule, $extension, $message = null)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->extend($rule, $extension, $message);
        }

        /**
         * Register a custom implicit validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string|null $message
         * @return void
         * @static
         */
        public static function extendImplicit($rule, $extension, $message = null)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->extendImplicit($rule, $extension, $message);
        }

        /**
         * Register a custom dependent validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string|null $message
         * @return void
         * @static
         */
        public static function extendDependent($rule, $extension, $message = null)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->extendDependent($rule, $extension, $message);
        }

        /**
         * Register a custom validator message replacer.
         *
         * @param string $rule
         * @param \Closure|string $replacer
         * @return void
         * @static
         */
        public static function replacer($rule, $replacer)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->replacer($rule, $replacer);
        }

        /**
         * Indicate that unvalidated array keys should be excluded, even if the parent array was validated.
         *
         * @return void
         * @static
         */
        public static function excludeUnvalidatedArrayKeys()
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->excludeUnvalidatedArrayKeys();
        }

        /**
         * Set the Validator instance resolver.
         *
         * @param \Closure $resolver
         * @return void
         * @static
         */
        public static function resolver($resolver)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->resolver($resolver);
        }

        /**
         * Get the Translator implementation.
         *
         * @return \Illuminate\Contracts\Translation\Translator
         * @static
         */
        public static function getTranslator()
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->getTranslator();
        }

        /**
         * Get the Presence Verifier implementation.
         *
         * @return \Illuminate\Validation\PresenceVerifierInterface
         * @static
         */
        public static function getPresenceVerifier()
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->getPresenceVerifier();
        }

        /**
         * Set the Presence Verifier implementation.
         *
         * @param \Illuminate\Validation\PresenceVerifierInterface $presenceVerifier
         * @return void
         * @static
         */
        public static function setPresenceVerifier($presenceVerifier)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->setPresenceVerifier($presenceVerifier);
        }

        /**
         * Get the container instance used by the validation factory.
         *
         * @return \Illuminate\Contracts\Container\Container
         * @static
         */
        public static function getContainer()
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->getContainer();
        }

        /**
         * Set the container instance used by the validation factory.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return \Illuminate\Validation\Factory
         * @static
         */
        public static function setContainer($container)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->setContainer($container);
        }

    }

    /**
     *
     *
     * @see \Illuminate\View\Factory
     */
    class View
    {
        /**
         * Get the evaluated view contents for the given view.
         *
         * @param string $path
         * @param \Illuminate\Contracts\Support\Arrayable|array $data
         * @param array $mergeData
         * @return \Illuminate\Contracts\View\View
         * @static
         */
        public static function file($path, $data = [], $mergeData = [])
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->file($path, $data, $mergeData);
        }

        /**
         * Get the evaluated view contents for the given view.
         *
         * @param string $view
         * @param \Illuminate\Contracts\Support\Arrayable|array $data
         * @param array $mergeData
         * @return \Illuminate\Contracts\View\View
         * @static
         */
        public static function make($view, $data = [], $mergeData = [])
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->make($view, $data, $mergeData);
        }

        /**
         * Get the first view that actually exists from the given list.
         *
         * @param array $views
         * @param \Illuminate\Contracts\Support\Arrayable|array $data
         * @param array $mergeData
         * @return \Illuminate\Contracts\View\View
         * @throws \InvalidArgumentException
         * @static
         */
        public static function first($views, $data = [], $mergeData = [])
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->first($views, $data, $mergeData);
        }

        /**
         * Get the rendered content of the view based on a given condition.
         *
         * @param bool $condition
         * @param string $view
         * @param \Illuminate\Contracts\Support\Arrayable|array $data
         * @param array $mergeData
         * @return string
         * @static
         */
        public static function renderWhen($condition, $view, $data = [], $mergeData = [])
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->renderWhen($condition, $view, $data, $mergeData);
        }

        /**
         * Get the rendered content of the view based on the negation of a given condition.
         *
         * @param bool $condition
         * @param string $view
         * @param \Illuminate\Contracts\Support\Arrayable|array $data
         * @param array $mergeData
         * @return string
         * @static
         */
        public static function renderUnless($condition, $view, $data = [], $mergeData = [])
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->renderUnless($condition, $view, $data, $mergeData);
        }

        /**
         * Get the rendered contents of a partial from a loop.
         *
         * @param string $view
         * @param array $data
         * @param string $iterator
         * @param string $empty
         * @return string
         * @static
         */
        public static function renderEach($view, $data, $iterator, $empty = 'raw|')
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->renderEach($view, $data, $iterator, $empty);
        }

        /**
         * Determine if a given view exists.
         *
         * @param string $view
         * @return bool
         * @static
         */
        public static function exists($view)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->exists($view);
        }

        /**
         * Get the appropriate view engine for the given path.
         *
         * @param string $path
         * @return \Illuminate\Contracts\View\Engine
         * @throws \InvalidArgumentException
         * @static
         */
        public static function getEngineFromPath($path)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getEngineFromPath($path);
        }

        /**
         * Add a piece of shared data to the environment.
         *
         * @param array|string $key
         * @param mixed|null $value
         * @return mixed
         * @static
         */
        public static function share($key, $value = null)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->share($key, $value);
        }

        /**
         * Increment the rendering counter.
         *
         * @return void
         * @static
         */
        public static function incrementRender()
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->incrementRender();
        }

        /**
         * Decrement the rendering counter.
         *
         * @return void
         * @static
         */
        public static function decrementRender()
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->decrementRender();
        }

        /**
         * Check if there are no active render operations.
         *
         * @return bool
         * @static
         */
        public static function doneRendering()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->doneRendering();
        }

        /**
         * Determine if the given once token has been rendered.
         *
         * @param string $id
         * @return bool
         * @static
         */
        public static function hasRenderedOnce($id)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->hasRenderedOnce($id);
        }

        /**
         * Mark the given once token as having been rendered.
         *
         * @param string $id
         * @return void
         * @static
         */
        public static function markAsRenderedOnce($id)
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->markAsRenderedOnce($id);
        }

        /**
         * Add a location to the array of view locations.
         *
         * @param string $location
         * @return void
         * @static
         */
        public static function addLocation($location)
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->addLocation($location);
        }

        /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return \Illuminate\View\Factory
         * @static
         */
        public static function addNamespace($namespace, $hints)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->addNamespace($namespace, $hints);
        }

        /**
         * Prepend a new namespace to the loader.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return \Illuminate\View\Factory
         * @static
         */
        public static function prependNamespace($namespace, $hints)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->prependNamespace($namespace, $hints);
        }

        /**
         * Replace the namespace hints for the given namespace.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return \Illuminate\View\Factory
         * @static
         */
        public static function replaceNamespace($namespace, $hints)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->replaceNamespace($namespace, $hints);
        }

        /**
         * Register a valid view extension and its engine.
         *
         * @param string $extension
         * @param string $engine
         * @param \Closure|null $resolver
         * @return void
         * @static
         */
        public static function addExtension($extension, $engine, $resolver = null)
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->addExtension($extension, $engine, $resolver);
        }

        /**
         * Flush all of the factory state like sections and stacks.
         *
         * @return void
         * @static
         */
        public static function flushState()
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->flushState();
        }

        /**
         * Flush all of the section contents if done rendering.
         *
         * @return void
         * @static
         */
        public static function flushStateIfDoneRendering()
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->flushStateIfDoneRendering();
        }

        /**
         * Get the extension to engine bindings.
         *
         * @return array
         * @static
         */
        public static function getExtensions()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getExtensions();
        }

        /**
         * Get the engine resolver instance.
         *
         * @return \Illuminate\View\Engines\EngineResolver
         * @static
         */
        public static function getEngineResolver()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getEngineResolver();
        }

        /**
         * Get the view finder instance.
         *
         * @return \Illuminate\View\ViewFinderInterface
         * @static
         */
        public static function getFinder()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getFinder();
        }

        /**
         * Set the view finder instance.
         *
         * @param \Illuminate\View\ViewFinderInterface $finder
         * @return void
         * @static
         */
        public static function setFinder($finder)
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->setFinder($finder);
        }

        /**
         * Flush the cache of views located by the finder.
         *
         * @return void
         * @static
         */
        public static function flushFinderCache()
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->flushFinderCache();
        }

        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher
         * @static
         */
        public static function getDispatcher()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getDispatcher();
        }

        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void
         * @static
         */
        public static function setDispatcher($events)
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->setDispatcher($events);
        }

        /**
         * Get the IoC container instance.
         *
         * @return \Illuminate\Contracts\Container\Container
         * @static
         */
        public static function getContainer()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getContainer();
        }

        /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return void
         * @static
         */
        public static function setContainer($container)
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->setContainer($container);
        }

        /**
         * Get an item from the shared data.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function shared($key, $default = null)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->shared($key, $default);
        }

        /**
         * Get all of the shared data for the environment.
         *
         * @return array
         * @static
         */
        public static function getShared()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getShared();
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
            \Illuminate\View\Factory::macro($name, $macro);
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
            \Illuminate\View\Factory::mixin($mixin, $replace);
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
            return \Illuminate\View\Factory::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\View\Factory::flushMacros();
        }

        /**
         * Start a component rendering process.
         *
         * @param \Illuminate\Contracts\View\View|\Illuminate\Contracts\Support\Htmlable|\Closure|string $view
         * @param array $data
         * @return void
         * @static
         */
        public static function startComponent($view, $data = [])
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->startComponent($view, $data);
        }

        /**
         * Get the first view that actually exists from the given list, and start a component.
         *
         * @param array $names
         * @param array $data
         * @return void
         * @static
         */
        public static function startComponentFirst($names, $data = [])
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->startComponentFirst($names, $data);
        }

        /**
         * Render the current component.
         *
         * @return string
         * @static
         */
        public static function renderComponent()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->renderComponent();
        }

        /**
         * Get an item from the component data that exists above the current component.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed|null
         * @static
         */
        public static function getConsumableComponentData($key, $default = null)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getConsumableComponentData($key, $default);
        }

        /**
         * Start the slot rendering process.
         *
         * @param string $name
         * @param string|null $content
         * @param array $attributes
         * @return void
         * @static
         */
        public static function slot($name, $content = null, $attributes = [])
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->slot($name, $content, $attributes);
        }

        /**
         * Save the slot content for rendering.
         *
         * @return void
         * @static
         */
        public static function endSlot()
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->endSlot();
        }

        /**
         * Register a view creator event.
         *
         * @param array|string $views
         * @param \Closure|string $callback
         * @return array
         * @static
         */
        public static function creator($views, $callback)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->creator($views, $callback);
        }

        /**
         * Register multiple view composers via an array.
         *
         * @param array $composers
         * @return array
         * @static
         */
        public static function composers($composers)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->composers($composers);
        }

        /**
         * Register a view composer event.
         *
         * @param array|string $views
         * @param \Closure|string $callback
         * @return array
         * @static
         */
        public static function composer($views, $callback)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->composer($views, $callback);
        }

        /**
         * Call the composer for a given view.
         *
         * @param \Illuminate\Contracts\View\View $view
         * @return void
         * @static
         */
        public static function callComposer($view)
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->callComposer($view);
        }

        /**
         * Call the creator for a given view.
         *
         * @param \Illuminate\Contracts\View\View $view
         * @return void
         * @static
         */
        public static function callCreator($view)
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->callCreator($view);
        }

        /**
         * Start injecting content into a section.
         *
         * @param string $section
         * @param string|null $content
         * @return void
         * @static
         */
        public static function startSection($section, $content = null)
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->startSection($section, $content);
        }

        /**
         * Inject inline content into a section.
         *
         * @param string $section
         * @param string $content
         * @return void
         * @static
         */
        public static function inject($section, $content)
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->inject($section, $content);
        }

        /**
         * Stop injecting content into a section and return its contents.
         *
         * @return string
         * @static
         */
        public static function yieldSection()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->yieldSection();
        }

        /**
         * Stop injecting content into a section.
         *
         * @param bool $overwrite
         * @return string
         * @throws \InvalidArgumentException
         * @static
         */
        public static function stopSection($overwrite = false)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->stopSection($overwrite);
        }

        /**
         * Stop injecting content into a section and append it.
         *
         * @return string
         * @throws \InvalidArgumentException
         * @static
         */
        public static function appendSection()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->appendSection();
        }

        /**
         * Get the string contents of a section.
         *
         * @param string $section
         * @param string $default
         * @return string
         * @static
         */
        public static function yieldContent($section, $default = '')
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->yieldContent($section, $default);
        }

        /**
         * Get the parent placeholder for the current request.
         *
         * @param string $section
         * @return string
         * @static
         */
        public static function parentPlaceholder($section = '')
        {
            return \Illuminate\View\Factory::parentPlaceholder($section);
        }

        /**
         * Check if section exists.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasSection($name)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->hasSection($name);
        }

        /**
         * Check if section does not exist.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function sectionMissing($name)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->sectionMissing($name);
        }

        /**
         * Get the contents of a section.
         *
         * @param string $name
         * @param string|null $default
         * @return mixed
         * @static
         */
        public static function getSection($name, $default = null)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getSection($name, $default);
        }

        /**
         * Get the entire array of sections.
         *
         * @return array
         * @static
         */
        public static function getSections()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getSections();
        }

        /**
         * Flush all of the sections.
         *
         * @return void
         * @static
         */
        public static function flushSections()
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->flushSections();
        }

        /**
         * Add new loop to the stack.
         *
         * @param \Countable|array $data
         * @return void
         * @static
         */
        public static function addLoop($data)
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->addLoop($data);
        }

        /**
         * Increment the top loop's indices.
         *
         * @return void
         * @static
         */
        public static function incrementLoopIndices()
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->incrementLoopIndices();
        }

        /**
         * Pop a loop from the top of the loop stack.
         *
         * @return void
         * @static
         */
        public static function popLoop()
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->popLoop();
        }

        /**
         * Get an instance of the last loop in the stack.
         *
         * @return \stdClass|null
         * @static
         */
        public static function getLastLoop()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getLastLoop();
        }

        /**
         * Get the entire loop stack.
         *
         * @return array
         * @static
         */
        public static function getLoopStack()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getLoopStack();
        }

        /**
         * Start injecting content into a push section.
         *
         * @param string $section
         * @param string $content
         * @return void
         * @static
         */
        public static function startPush($section, $content = '')
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->startPush($section, $content);
        }

        /**
         * Stop injecting content into a push section.
         *
         * @return string
         * @throws \InvalidArgumentException
         * @static
         */
        public static function stopPush()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->stopPush();
        }

        /**
         * Start prepending content into a push section.
         *
         * @param string $section
         * @param string $content
         * @return void
         * @static
         */
        public static function startPrepend($section, $content = '')
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->startPrepend($section, $content);
        }

        /**
         * Stop prepending content into a push section.
         *
         * @return string
         * @throws \InvalidArgumentException
         * @static
         */
        public static function stopPrepend()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->stopPrepend();
        }

        /**
         * Get the string contents of a push section.
         *
         * @param string $section
         * @param string $default
         * @return string
         * @static
         */
        public static function yieldPushContent($section, $default = '')
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->yieldPushContent($section, $default);
        }

        /**
         * Flush all of the stacks.
         *
         * @return void
         * @static
         */
        public static function flushStacks()
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->flushStacks();
        }

        /**
         * Start a translation block.
         *
         * @param array $replacements
         * @return void
         * @static
         */
        public static function startTranslation($replacements = [])
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->startTranslation($replacements);
        }

        /**
         * Render the current translation.
         *
         * @return string
         * @static
         */
        public static function renderTranslation()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->renderTranslation();
        }

    }
}
