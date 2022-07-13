<?php

// @formatter:off
// phpcs:ignoreFile

namespace Illuminate\Support\Facades {


    /**
     *
     *
     * @see \Illuminate\Routing\Redirector
     */
    class Redirect
    {
        /**
         * Create a new redirect response to the "home" route.
         *
         * @param int $status
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function home($status = 302)
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->home($status);
        }

        /**
         * Create a new redirect response to the previous location.
         *
         * @param int $status
         * @param array $headers
         * @param mixed $fallback
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function back($status = 302, $headers = [], $fallback = false)
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->back($status, $headers, $fallback);
        }

        /**
         * Create a new redirect response to the current URI.
         *
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function refresh($status = 302, $headers = [])
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->refresh($status, $headers);
        }

        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function guest($path, $status = 302, $headers = [], $secure = null)
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->guest($path, $status, $headers, $secure);
        }

        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param string $default
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function intended($default = '/', $status = 302, $headers = [], $secure = null)
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->intended($default, $status, $headers, $secure);
        }

        /**
         * Set the intended url.
         *
         * @param string $url
         * @return void
         * @static
         */
        public static function setIntendedUrl($url)
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            $instance->setIntendedUrl($url);
        }

        /**
         * Create a new redirect response to the given path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function to($path, $status = 302, $headers = [], $secure = null)
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->to($path, $status, $headers, $secure);
        }

        /**
         * Create a new redirect response to an external URL (no validation).
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function away($path, $status = 302, $headers = [])
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->away($path, $status, $headers);
        }

        /**
         * Create a new redirect response to the given HTTPS path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function secure($path, $status = 302, $headers = [])
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->secure($path, $status, $headers);
        }

        /**
         * Create a new redirect response to a named route.
         *
         * @param string $route
         * @param mixed $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function route($route, $parameters = [], $status = 302, $headers = [])
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->route($route, $parameters, $status, $headers);
        }

        /**
         * Create a new redirect response to a signed named route.
         *
         * @param string $route
         * @param mixed $parameters
         * @param \DateTimeInterface|\DateInterval|int|null $expiration
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function signedRoute($route, $parameters = [], $expiration = null, $status = 302, $headers = [])
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->signedRoute($route, $parameters, $expiration, $status, $headers);
        }

        /**
         * Create a new redirect response to a signed named route.
         *
         * @param string $route
         * @param \DateTimeInterface|\DateInterval|int|null $expiration
         * @param mixed $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function temporarySignedRoute($route, $expiration, $parameters = [], $status = 302, $headers = [])
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->temporarySignedRoute($route, $expiration, $parameters, $status, $headers);
        }

        /**
         * Create a new redirect response to a controller action.
         *
         * @param string|array $action
         * @param mixed $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function action($action, $parameters = [], $status = 302, $headers = [])
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->action($action, $parameters, $status, $headers);
        }

        /**
         * Get the URL generator instance.
         *
         * @return \Illuminate\Routing\UrlGenerator
         * @static
         */
        public static function getUrlGenerator()
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->getUrlGenerator();
        }

        /**
         * Set the active session store.
         *
         * @param \Illuminate\Session\Store $session
         * @return void
         * @static
         */
        public static function setSession($session)
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            $instance->setSession($session);
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
            \Illuminate\Routing\Redirector::macro($name, $macro);
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
            \Illuminate\Routing\Redirector::mixin($mixin, $replace);
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
            return \Illuminate\Routing\Redirector::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Routing\Redirector::flushMacros();
        }

    }

    /**
     *
     *
     * @see \Illuminate\Contracts\Routing\ResponseFactory
     */
    class Response
    {
        /**
         * Create a new response instance.
         *
         * @param mixed $content
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\Response
         * @static
         */
        public static function make($content = '', $status = 200, $headers = [])
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->make($content, $status, $headers);
        }

        /**
         * Create a new "no content" response.
         *
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\Response
         * @static
         */
        public static function noContent($status = 204, $headers = [])
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->noContent($status, $headers);
        }

        /**
         * Create a new response for a given view.
         *
         * @param string|array $view
         * @param array $data
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\Response
         * @static
         */
        public static function view($view, $data = [], $status = 200, $headers = [])
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->view($view, $data, $status, $headers);
        }

        /**
         * Create a new JSON response instance.
         *
         * @param mixed $data
         * @param int $status
         * @param array $headers
         * @param int $options
         * @return \Illuminate\Http\JsonResponse
         * @static
         */
        public static function json($data = [], $status = 200, $headers = [], $options = 0)
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->json($data, $status, $headers, $options);
        }

        /**
         * Create a new JSONP response instance.
         *
         * @param string $callback
         * @param mixed $data
         * @param int $status
         * @param array $headers
         * @param int $options
         * @return \Illuminate\Http\JsonResponse
         * @static
         */
        public static function jsonp($callback, $data = [], $status = 200, $headers = [], $options = 0)
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->jsonp($callback, $data, $status, $headers, $options);
        }

        /**
         * Create a new streamed response instance.
         *
         * @param \Closure $callback
         * @param int $status
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\StreamedResponse
         * @static
         */
        public static function stream($callback, $status = 200, $headers = [])
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->stream($callback, $status, $headers);
        }

        /**
         * Create a new streamed response instance as a file download.
         *
         * @param \Closure $callback
         * @param string|null $name
         * @param array $headers
         * @param string|null $disposition
         * @return \Symfony\Component\HttpFoundation\StreamedResponse
         * @static
         */
        public static function streamDownload($callback, $name = null, $headers = [], $disposition = 'attachment')
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->streamDownload($callback, $name, $headers, $disposition);
        }

        /**
         * Create a new file download response.
         *
         * @param \SplFileInfo|string $file
         * @param string|null $name
         * @param array $headers
         * @param string|null $disposition
         * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
         * @static
         */
        public static function download($file, $name = null, $headers = [], $disposition = 'attachment')
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->download($file, $name, $headers, $disposition);
        }

        /**
         * Return the raw contents of a binary file.
         *
         * @param \SplFileInfo|string $file
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
         * @static
         */
        public static function file($file, $headers = [])
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->file($file, $headers);
        }

        /**
         * Create a new redirect response to the given path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function redirectTo($path, $status = 302, $headers = [], $secure = null)
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->redirectTo($path, $status, $headers, $secure);
        }

        /**
         * Create a new redirect response to a named route.
         *
         * @param string $route
         * @param mixed $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function redirectToRoute($route, $parameters = [], $status = 302, $headers = [])
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->redirectToRoute($route, $parameters, $status, $headers);
        }

        /**
         * Create a new redirect response to a controller action.
         *
         * @param string $action
         * @param mixed $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function redirectToAction($action, $parameters = [], $status = 302, $headers = [])
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->redirectToAction($action, $parameters, $status, $headers);
        }

        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function redirectGuest($path, $status = 302, $headers = [], $secure = null)
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->redirectGuest($path, $status, $headers, $secure);
        }

        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param string $default
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function redirectToIntended($default = '/', $status = 302, $headers = [], $secure = null)
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->redirectToIntended($default, $status, $headers, $secure);
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
            \Illuminate\Routing\ResponseFactory::macro($name, $macro);
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
            \Illuminate\Routing\ResponseFactory::mixin($mixin, $replace);
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
            return \Illuminate\Routing\ResponseFactory::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Routing\ResponseFactory::flushMacros();
        }

    }

    /**
     *
     *
     * @method static \Illuminate\Routing\RouteRegistrar as(string $value)
     * @method static \Illuminate\Routing\RouteRegistrar controller(string $controller)
     * @method static \Illuminate\Routing\RouteRegistrar domain(string $value)
     * @method static \Illuminate\Routing\RouteRegistrar middleware(array|string|null $middleware)
     * @method static \Illuminate\Routing\RouteRegistrar name(string $value)
     * @method static \Illuminate\Routing\RouteRegistrar namespace(string|null $value)
     * @method static \Illuminate\Routing\RouteRegistrar prefix(string $prefix)
     * @method static \Illuminate\Routing\RouteRegistrar scopeBindings()
     * @method static \Illuminate\Routing\RouteRegistrar where(array $where)
     * @method static \Illuminate\Routing\RouteRegistrar withoutMiddleware(array|string $middleware)
     * @see \Illuminate\Routing\Router
     */
    class Route
    {
        /**
         * Register a new GET route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function get($uri, $action = null)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->get($uri, $action);
        }

        /**
         * Register a new POST route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function post($uri, $action = null)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->post($uri, $action);
        }

        /**
         * Register a new PUT route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function put($uri, $action = null)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->put($uri, $action);
        }

        /**
         * Register a new PATCH route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function patch($uri, $action = null)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->patch($uri, $action);
        }

        /**
         * Register a new DELETE route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function delete($uri, $action = null)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->delete($uri, $action);
        }

        /**
         * Register a new OPTIONS route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function options($uri, $action = null)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->options($uri, $action);
        }

        /**
         * Register a new route responding to all verbs.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function any($uri, $action = null)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->any($uri, $action);
        }

        /**
         * Register a new Fallback route with the router.
         *
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function fallback($action)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->fallback($action);
        }

        /**
         * Create a redirect from one URI to another.
         *
         * @param string $uri
         * @param string $destination
         * @param int $status
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function redirect($uri, $destination, $status = 302)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->redirect($uri, $destination, $status);
        }

        /**
         * Create a permanent redirect from one URI to another.
         *
         * @param string $uri
         * @param string $destination
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function permanentRedirect($uri, $destination)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->permanentRedirect($uri, $destination);
        }

        /**
         * Register a new route that returns a view.
         *
         * @param string $uri
         * @param string $view
         * @param array $data
         * @param int|array $status
         * @param array $headers
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function view($uri, $view, $data = [], $status = 200, $headers = [])
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->view($uri, $view, $data, $status, $headers);
        }

        /**
         * Register a new route with the given verbs.
         *
         * @param array|string $methods
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function match($methods, $uri, $action = null)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->match($methods, $uri, $action);
        }

        /**
         * Register an array of resource controllers.
         *
         * @param array $resources
         * @param array $options
         * @return void
         * @static
         */
        public static function resources($resources, $options = [])
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->resources($resources, $options);
        }

        /**
         * Route a resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         * @return \Illuminate\Routing\PendingResourceRegistration
         * @static
         */
        public static function resource($name, $controller, $options = [])
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->resource($name, $controller, $options);
        }

        /**
         * Register an array of API resource controllers.
         *
         * @param array $resources
         * @param array $options
         * @return void
         * @static
         */
        public static function apiResources($resources, $options = [])
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->apiResources($resources, $options);
        }

        /**
         * Route an API resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         * @return \Illuminate\Routing\PendingResourceRegistration
         * @static
         */
        public static function apiResource($name, $controller, $options = [])
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->apiResource($name, $controller, $options);
        }

        /**
         * Create a route group with shared attributes.
         *
         * @param array $attributes
         * @param \Closure|string $routes
         * @return void
         * @static
         */
        public static function group($attributes, $routes)
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->group($attributes, $routes);
        }

        /**
         * Merge the given array with the last group stack.
         *
         * @param array $new
         * @param bool $prependExistingPrefix
         * @return array
         * @static
         */
        public static function mergeWithLastGroup($new, $prependExistingPrefix = true)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->mergeWithLastGroup($new, $prependExistingPrefix);
        }

        /**
         * Get the prefix from the last group on the stack.
         *
         * @return string
         * @static
         */
        public static function getLastGroupPrefix()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getLastGroupPrefix();
        }

        /**
         * Add a route to the underlying route collection.
         *
         * @param array|string $methods
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function addRoute($methods, $uri, $action)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->addRoute($methods, $uri, $action);
        }

        /**
         * Create a new Route object.
         *
         * @param array|string $methods
         * @param string $uri
         * @param mixed $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function newRoute($methods, $uri, $action)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->newRoute($methods, $uri, $action);
        }

        /**
         * Return the response returned by the given route.
         *
         * @param string $name
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */
        public static function respondWithRoute($name)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->respondWithRoute($name);
        }

        /**
         * Dispatch the request to the application.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */
        public static function dispatch($request)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->dispatch($request);
        }

        /**
         * Dispatch the request to a route and return the response.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */
        public static function dispatchToRoute($request)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->dispatchToRoute($request);
        }

        /**
         * Gather the middleware for the given route with resolved class names.
         *
         * @param \Illuminate\Routing\Route $route
         * @return array
         * @static
         */
        public static function gatherRouteMiddleware($route)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->gatherRouteMiddleware($route);
        }

        /**
         * Create a response instance from the given value.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @param mixed $response
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */
        public static function prepareResponse($request, $response)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->prepareResponse($request, $response);
        }

        /**
         * Static version of prepareResponse.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @param mixed $response
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */
        public static function toResponse($request, $response)
        {
            return \Illuminate\Routing\Router::toResponse($request, $response);
        }

        /**
         * Substitute the route bindings onto the route.
         *
         * @param \Illuminate\Routing\Route $route
         * @return \Illuminate\Routing\Route
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
         * @static
         */
        public static function substituteBindings($route)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->substituteBindings($route);
        }

        /**
         * Substitute the implicit Eloquent model bindings for the route.
         *
         * @param \Illuminate\Routing\Route $route
         * @return void
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
         * @static
         */
        public static function substituteImplicitBindings($route)
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->substituteImplicitBindings($route);
        }

        /**
         * Register a route matched event listener.
         *
         * @param string|callable $callback
         * @return void
         * @static
         */
        public static function matched($callback)
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->matched($callback);
        }

        /**
         * Get all of the defined middleware short-hand names.
         *
         * @return array
         * @static
         */
        public static function getMiddleware()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getMiddleware();
        }

        /**
         * Register a short-hand name for a middleware.
         *
         * @param string $name
         * @param string $class
         * @return \Illuminate\Routing\Router
         * @static
         */
        public static function aliasMiddleware($name, $class)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->aliasMiddleware($name, $class);
        }

        /**
         * Check if a middlewareGroup with the given name exists.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMiddlewareGroup($name)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->hasMiddlewareGroup($name);
        }

        /**
         * Get all of the defined middleware groups.
         *
         * @return array
         * @static
         */
        public static function getMiddlewareGroups()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getMiddlewareGroups();
        }

        /**
         * Register a group of middleware.
         *
         * @param string $name
         * @param array $middleware
         * @return \Illuminate\Routing\Router
         * @static
         */
        public static function middlewareGroup($name, $middleware)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->middlewareGroup($name, $middleware);
        }

        /**
         * Add a middleware to the beginning of a middleware group.
         *
         * If the middleware is already in the group, it will not be added again.
         *
         * @param string $group
         * @param string $middleware
         * @return \Illuminate\Routing\Router
         * @static
         */
        public static function prependMiddlewareToGroup($group, $middleware)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->prependMiddlewareToGroup($group, $middleware);
        }

        /**
         * Add a middleware to the end of a middleware group.
         *
         * If the middleware is already in the group, it will not be added again.
         *
         * @param string $group
         * @param string $middleware
         * @return \Illuminate\Routing\Router
         * @static
         */
        public static function pushMiddlewareToGroup($group, $middleware)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->pushMiddlewareToGroup($group, $middleware);
        }

        /**
         * Flush the router's middleware groups.
         *
         * @return \Illuminate\Routing\Router
         * @static
         */
        public static function flushMiddlewareGroups()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->flushMiddlewareGroups();
        }

        /**
         * Add a new route parameter binder.
         *
         * @param string $key
         * @param string|callable $binder
         * @return void
         * @static
         */
        public static function bind($key, $binder)
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->bind($key, $binder);
        }

        /**
         * Register a model binder for a wildcard.
         *
         * @param string $key
         * @param string $class
         * @param \Closure|null $callback
         * @return void
         * @static
         */
        public static function model($key, $class, $callback = null)
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->model($key, $class, $callback);
        }

        /**
         * Get the binding callback for a given binding.
         *
         * @param string $key
         * @return \Closure|null
         * @static
         */
        public static function getBindingCallback($key)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getBindingCallback($key);
        }

        /**
         * Get the global "where" patterns.
         *
         * @return array
         * @static
         */
        public static function getPatterns()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getPatterns();
        }

        /**
         * Set a global where pattern on all routes.
         *
         * @param string $key
         * @param string $pattern
         * @return void
         * @static
         */
        public static function pattern($key, $pattern)
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->pattern($key, $pattern);
        }

        /**
         * Set a group of global where patterns on all routes.
         *
         * @param array $patterns
         * @return void
         * @static
         */
        public static function patterns($patterns)
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->patterns($patterns);
        }

        /**
         * Determine if the router currently has a group stack.
         *
         * @return bool
         * @static
         */
        public static function hasGroupStack()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->hasGroupStack();
        }

        /**
         * Get the current group stack for the router.
         *
         * @return array
         * @static
         */
        public static function getGroupStack()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getGroupStack();
        }

        /**
         * Get a route parameter for the current route.
         *
         * @param string $key
         * @param string|null $default
         * @return mixed
         * @static
         */
        public static function input($key, $default = null)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->input($key, $default);
        }

        /**
         * Get the request currently being dispatched.
         *
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function getCurrentRequest()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getCurrentRequest();
        }

        /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route|null
         * @static
         */
        public static function getCurrentRoute()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getCurrentRoute();
        }

        /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route|null
         * @static
         */
        public static function current()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->current();
        }

        /**
         * Check if a route with the given name exists.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function has($name)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->has($name);
        }

        /**
         * Get the current route name.
         *
         * @return string|null
         * @static
         */
        public static function currentRouteName()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->currentRouteName();
        }

        /**
         * Alias for the "currentRouteNamed" method.
         *
         * @param mixed $patterns
         * @return bool
         * @static
         */
        public static function is(...$patterns)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->is(...$patterns);
        }

        /**
         * Determine if the current route matches a pattern.
         *
         * @param mixed $patterns
         * @return bool
         * @static
         */
        public static function currentRouteNamed(...$patterns)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->currentRouteNamed(...$patterns);
        }

        /**
         * Get the current route action.
         *
         * @return string|null
         * @static
         */
        public static function currentRouteAction()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->currentRouteAction();
        }

        /**
         * Alias for the "currentRouteUses" method.
         *
         * @param array $patterns
         * @return bool
         * @static
         */
        public static function uses(...$patterns)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->uses(...$patterns);
        }

        /**
         * Determine if the current route action matches a given action.
         *
         * @param string $action
         * @return bool
         * @static
         */
        public static function currentRouteUses($action)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->currentRouteUses($action);
        }

        /**
         * Set the unmapped global resource parameters to singular.
         *
         * @param bool $singular
         * @return void
         * @static
         */
        public static function singularResourceParameters($singular = true)
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->singularResourceParameters($singular);
        }

        /**
         * Set the global resource parameter mapping.
         *
         * @param array $parameters
         * @return void
         * @static
         */
        public static function resourceParameters($parameters = [])
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->resourceParameters($parameters);
        }

        /**
         * Get or set the verbs used in the resource URIs.
         *
         * @param array $verbs
         * @return array|null
         * @static
         */
        public static function resourceVerbs($verbs = [])
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->resourceVerbs($verbs);
        }

        /**
         * Get the underlying route collection.
         *
         * @return \Illuminate\Routing\RouteCollectionInterface
         * @static
         */
        public static function getRoutes()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getRoutes();
        }

        /**
         * Set the route collection instance.
         *
         * @param \Illuminate\Routing\RouteCollection $routes
         * @return void
         * @static
         */
        public static function setRoutes($routes)
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->setRoutes($routes);
        }

        /**
         * Set the compiled route collection instance.
         *
         * @param array $routes
         * @return void
         * @static
         */
        public static function setCompiledRoutes($routes)
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->setCompiledRoutes($routes);
        }

        /**
         * Remove any duplicate middleware from the given array.
         *
         * @param array $middleware
         * @return array
         * @static
         */
        public static function uniqueMiddleware($middleware)
        {
            return \Illuminate\Routing\Router::uniqueMiddleware($middleware);
        }

        /**
         * Set the container instance used by the router.
         *
         * @param \Illuminate\Container\Container $container
         * @return \Illuminate\Routing\Router
         * @static
         */
        public static function setContainer($container)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->setContainer($container);
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
            \Illuminate\Routing\Router::macro($name, $macro);
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
            \Illuminate\Routing\Router::mixin($mixin, $replace);
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
            return \Illuminate\Routing\Router::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Routing\Router::flushMacros();
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
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->macroCall($method, $parameters);
        }

    }
}
