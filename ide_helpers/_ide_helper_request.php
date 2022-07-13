<?php

namespace Illuminate\Support\Facades {

    /**
     *
     *
     * @method static mixed filterFiles(mixed $files)
     * @see \Illuminate\Http\Request
     */
    class Request
    {
        /**
         * Create a new Illuminate HTTP request from server variables.
         *
         * @return static
         * @static
         */
        public static function capture()
        {
            return \Illuminate\Http\Request::capture();
        }

        /**
         * Return the Request instance.
         *
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function instance()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->instance();
        }

        /**
         * Get the request method.
         *
         * @return string
         * @static
         */
        public static function method()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->method();
        }

        /**
         * Get the root URL for the application.
         *
         * @return string
         * @static
         */
        public static function root()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->root();
        }

        /**
         * Get the URL (no query string) for the request.
         *
         * @return string
         * @static
         */
        public static function url()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->url();
        }

        /**
         * Get the full URL for the request.
         *
         * @return string
         * @static
         */
        public static function fullUrl()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fullUrl();
        }

        /**
         * Get the full URL for the request with the added query string parameters.
         *
         * @param array $query
         * @return string
         * @static
         */
        public static function fullUrlWithQuery($query)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fullUrlWithQuery($query);
        }

        /**
         * Get the full URL for the request without the given query string parameters.
         *
         * @param array|string $query
         * @return string
         * @static
         */
        public static function fullUrlWithoutQuery($keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fullUrlWithoutQuery($keys);
        }

        /**
         * Get the current path info for the request.
         *
         * @return string
         * @static
         */
        public static function path()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->path();
        }

        /**
         * Get the current decoded path info for the request.
         *
         * @return string
         * @static
         */
        public static function decodedPath()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->decodedPath();
        }

        /**
         * Get a segment from the URI (1 based index).
         *
         * @param int $index
         * @param string|null $default
         * @return string|null
         * @static
         */
        public static function segment($index, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->segment($index, $default);
        }

        /**
         * Get all of the segments for the request path.
         *
         * @return array
         * @static
         */
        public static function segments()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->segments();
        }

        /**
         * Determine if the current request URI matches a pattern.
         *
         * @param mixed $patterns
         * @return bool
         * @static
         */
        public static function is(...$patterns)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->is(...$patterns);
        }

        /**
         * Determine if the route name matches a given pattern.
         *
         * @param mixed $patterns
         * @return bool
         * @static
         */
        public static function routeIs(...$patterns)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->routeIs(...$patterns);
        }

        /**
         * Determine if the current request URL and query string match a pattern.
         *
         * @param mixed $patterns
         * @return bool
         * @static
         */
        public static function fullUrlIs(...$patterns)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fullUrlIs(...$patterns);
        }

        /**
         * Determine if the request is the result of an AJAX call.
         *
         * @return bool
         * @static
         */
        public static function ajax()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->ajax();
        }

        /**
         * Determine if the request is the result of a PJAX call.
         *
         * @return bool
         * @static
         */
        public static function pjax()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->pjax();
        }

        /**
         * Determine if the request is the result of a prefetch call.
         *
         * @return bool
         * @static
         */
        public static function prefetch()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->prefetch();
        }

        /**
         * Determine if the request is over HTTPS.
         *
         * @return bool
         * @static
         */
        public static function secure()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->secure();
        }

        /**
         * Get the client IP address.
         *
         * @return string|null
         * @static
         */
        public static function ip()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->ip();
        }

        /**
         * Get the client IP addresses.
         *
         * @return array
         * @static
         */
        public static function ips()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->ips();
        }

        /**
         * Get the client user agent.
         *
         * @return string|null
         * @static
         */
        public static function userAgent()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->userAgent();
        }

        /**
         * Merge new input into the current request's input array.
         *
         * @param array $input
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function merge($input)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->merge($input);
        }

        /**
         * Merge new input into the request's input, but only when that key is missing from the request.
         *
         * @param array $input
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function mergeIfMissing($input)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->mergeIfMissing($input);
        }

        /**
         * Replace the input for the current request.
         *
         * @param array $input
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function replace($input)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->replace($input);
        }

        /**
         * This method belongs to Symfony HttpFoundation and is not usually needed when using Laravel.
         *
         * Instead, you may use the "input" method.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function get($key, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->get($key, $default);
        }

        /**
         * Get the JSON payload for the request.
         *
         * @param string|null $key
         * @param mixed $default
         * @return \Symfony\Component\HttpFoundation\ParameterBag|mixed
         * @static
         */
        public static function json($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->json($key, $default);
        }

        /**
         * Create a new request instance from the given Laravel request.
         *
         * @param \Illuminate\Http\Request $from
         * @param \Illuminate\Http\Request|null $to
         * @return static
         * @static
         */
        public static function createFrom($from, $to = null)
        {
            return \Illuminate\Http\Request::createFrom($from, $to);
        }

        /**
         * Create an Illuminate request from a Symfony instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @return static
         * @static
         */
        public static function createFromBase($request)
        {
            return \Illuminate\Http\Request::createFromBase($request);
        }

        /**
         * Clones a request and overrides some of its parameters.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @return static
         * @return static
         * @static
         */
        public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->duplicate($query, $request, $attributes, $cookies, $files, $server);
        }

        /**
         * Get the session associated with the request.
         *
         * @return \Illuminate\Session\Store
         * @throws \RuntimeException
         * @static
         */
        public static function session()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->session();
        }

        /**
         * Get the session associated with the request.
         *
         * @return \Illuminate\Session\Store|null
         * @static
         */
        public static function getSession()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getSession();
        }

        /**
         * Set the session instance on the request.
         *
         * @param \Illuminate\Contracts\Session\Session $session
         * @return void
         * @static
         */
        public static function setLaravelSession($session)
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->setLaravelSession($session);
        }

        /**
         * Get the user making the request.
         *
         * @param string|null $guard
         * @return mixed
         * @static
         */
        public static function user($guard = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->user($guard);
        }

        /**
         * Get the route handling the request.
         *
         * @param string|null $param
         * @param mixed $default
         * @return \Illuminate\Routing\Route|object|string|null
         * @static
         */
        public static function route($param = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->route($param, $default);
        }

        /**
         * Get a unique fingerprint for the request / route / IP address.
         *
         * @return string
         * @throws \RuntimeException
         * @static
         */
        public static function fingerprint()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fingerprint();
        }

        /**
         * Set the JSON payload for the request.
         *
         * @param \Symfony\Component\HttpFoundation\ParameterBag $json
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function setJson($json)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setJson($json);
        }

        /**
         * Get the user resolver callback.
         *
         * @return \Closure
         * @static
         */
        public static function getUserResolver()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getUserResolver();
        }

        /**
         * Set the user resolver callback.
         *
         * @param \Closure $callback
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function setUserResolver($callback)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setUserResolver($callback);
        }

        /**
         * Get the route resolver callback.
         *
         * @return \Closure
         * @static
         */
        public static function getRouteResolver()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getRouteResolver();
        }

        /**
         * Set the route resolver callback.
         *
         * @param \Closure $callback
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function setRouteResolver($callback)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setRouteResolver($callback);
        }

        /**
         * Get all of the input and files for the request.
         *
         * @return array
         * @static
         */
        public static function toArray()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->toArray();
        }

        /**
         * Determine if the given offset exists.
         *
         * @param string $offset
         * @return bool
         * @static
         */
        public static function offsetExists($offset)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->offsetExists($offset);
        }

        /**
         * Get the value at the given offset.
         *
         * @param string $offset
         * @return mixed
         * @static
         */
        public static function offsetGet($offset)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->offsetGet($offset);
        }

        /**
         * Set the value at the given offset.
         *
         * @param string $offset
         * @param mixed $value
         * @return void
         * @static
         */
        public static function offsetSet($offset, $value)
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->offsetSet($offset, $value);
        }

        /**
         * Remove the value at the given offset.
         *
         * @param string $offset
         * @return void
         * @static
         */
        public static function offsetUnset($offset)
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->offsetUnset($offset);
        }

        /**
         * Sets the parameters for this request.
         *
         * This method also re-initializes all properties.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @param string|resource|null $content The raw body data
         * @static
         */
        public static function initialize($query = [], $request = [], $attributes = [], $cookies = [], $files = [], $server = [], $content = null)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->initialize($query, $request, $attributes, $cookies, $files, $server, $content);
        }

        /**
         * Creates a new request with values from PHP's super globals.
         *
         * @return static
         * @static
         */
        public static function createFromGlobals()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::createFromGlobals();
        }

        /**
         * Creates a Request based on a given URI and configuration.
         *
         * The information contained in the URI always take precedence
         * over the other information (server and parameters).
         *
         * @param string $uri The URI
         * @param string $method The HTTP method
         * @param array $parameters The query (GET) or request (POST) parameters
         * @param array $cookies The request cookies ($_COOKIE)
         * @param array $files The request files ($_FILES)
         * @param array $server The server parameters ($_SERVER)
         * @param string|resource|null $content The raw body data
         * @return static
         * @static
         */
        public static function create($uri, $method = 'GET', $parameters = [], $cookies = [], $files = [], $server = [], $content = null)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
        }

        /**
         * Sets a callable able to create a Request instance.
         *
         * This is mainly useful when you need to override the Request class
         * to keep BC with an existing system. It should not be used for any
         * other purpose.
         *
         * @static
         */
        public static function setFactory($callable)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::setFactory($callable);
        }

        /**
         * Overrides the PHP global variables according to this request instance.
         *
         * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
         * $_FILES is never overridden, see rfc1867
         *
         * @static
         */
        public static function overrideGlobals()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->overrideGlobals();
        }

        /**
         * Sets a list of trusted proxies.
         *
         * You should only list the reverse proxies that you manage directly.
         *
         * @param array $proxies A list of trusted proxies, the string 'REMOTE_ADDR' will be replaced with $_SERVER['REMOTE_ADDR']
         * @param int $trustedHeaderSet A bit field of Request::HEADER_*, to set which headers to trust from your proxies
         * @static
         */
        public static function setTrustedProxies($proxies, $trustedHeaderSet)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::setTrustedProxies($proxies, $trustedHeaderSet);
        }

        /**
         * Gets the list of trusted proxies.
         *
         * @return array
         * @static
         */
        public static function getTrustedProxies()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getTrustedProxies();
        }

        /**
         * Gets the set of trusted headers from trusted proxies.
         *
         * @return int A bit field of Request::HEADER_* that defines which headers are trusted from your proxies
         * @static
         */
        public static function getTrustedHeaderSet()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getTrustedHeaderSet();
        }

        /**
         * Sets a list of trusted host patterns.
         *
         * You should only list the hosts you manage using regexs.
         *
         * @param array $hostPatterns A list of trusted host patterns
         * @static
         */
        public static function setTrustedHosts($hostPatterns)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::setTrustedHosts($hostPatterns);
        }

        /**
         * Gets the list of trusted host patterns.
         *
         * @return array
         * @static
         */
        public static function getTrustedHosts()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getTrustedHosts();
        }

        /**
         * Normalizes a query string.
         *
         * It builds a normalized query string, where keys/value pairs are alphabetized,
         * have consistent escaping and unneeded delimiters are removed.
         *
         * @return string
         * @static
         */
        public static function normalizeQueryString($qs)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::normalizeQueryString($qs);
        }

        /**
         * Enables support for the _method request parameter to determine the intended HTTP method.
         *
         * Be warned that enabling this feature might lead to CSRF issues in your code.
         * Check that you are using CSRF tokens when required.
         * If the HTTP method parameter override is enabled, an html-form with method "POST" can be altered
         * and used to send a "PUT" or "DELETE" request via the _method request parameter.
         * If these methods are not protected against CSRF, this presents a possible vulnerability.
         *
         * The HTTP method can only be overridden when the real HTTP method is POST.
         *
         * @static
         */
        public static function enableHttpMethodParameterOverride()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::enableHttpMethodParameterOverride();
        }

        /**
         * Checks whether support for the _method request parameter is enabled.
         *
         * @return bool
         * @static
         */
        public static function getHttpMethodParameterOverride()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getHttpMethodParameterOverride();
        }

        /**
         * Whether the request contains a Session which was started in one of the
         * previous requests.
         *
         * @return bool
         * @static
         */
        public static function hasPreviousSession()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasPreviousSession();
        }

        /**
         * Whether the request contains a Session object.
         *
         * This method does not give any information about the state of the session object,
         * like whether the session is started or not. It is just a way to check if this Request
         * is associated with a Session instance.
         *
         * @param bool $skipIfUninitialized When true, ignores factories injected by `setSessionFactory`
         * @return bool
         * @static
         */
        public static function hasSession()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasSession();
        }

        /**
         *
         *
         * @static
         */
        public static function setSession($session)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setSession($session);
        }

        /**
         *
         *
         * @param \Symfony\Component\HttpFoundation\callable():  SessionInterface $factory
         * @static
         * @internal
         */
        public static function setSessionFactory($factory)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setSessionFactory($factory);
        }

        /**
         * Returns the client IP addresses.
         *
         * In the returned array the most trusted IP address is first, and the
         * least trusted one last. The "real" client IP address is the last one,
         * but this is also the least trusted one. Trusted proxies are stripped.
         *
         * Use this method carefully; you should use getClientIp() instead.
         *
         * @return array
         * @see getClientIp()
         * @static
         */
        public static function getClientIps()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getClientIps();
        }

        /**
         * Returns the client IP address.
         *
         * This method can read the client IP address from the "X-Forwarded-For" header
         * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
         * header value is a comma+space separated list of IP addresses, the left-most
         * being the original client, and each successive proxy that passed the request
         * adding the IP address where it received the request from.
         *
         * If your reverse proxy uses a different header name than "X-Forwarded-For",
         * ("Client-Ip" for instance), configure it via the $trustedHeaderSet
         * argument of the Request::setTrustedProxies() method instead.
         *
         * @return string|null
         * @see getClientIps()
         * @see https://wikipedia.org/wiki/X-Forwarded-For
         * @static
         */
        public static function getClientIp()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getClientIp();
        }

        /**
         * Returns current script name.
         *
         * @return string
         * @static
         */
        public static function getScriptName()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getScriptName();
        }

        /**
         * Returns the path being requested relative to the executed script.
         *
         * The path info always starts with a /.
         *
         * Suppose this request is instantiated from /mysite on localhost:
         *
         *  * http://localhost/mysite              returns an empty string
         *  * http://localhost/mysite/about        returns '/about'
         *  * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
         *  * http://localhost/mysite/about?var=1  returns '/about'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static
         */
        public static function getPathInfo()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPathInfo();
        }

        /**
         * Returns the root path from which this request is executed.
         *
         * Suppose that an index.php file instantiates this request object:
         *
         *  * http://localhost/index.php         returns an empty string
         *  * http://localhost/index.php/page    returns an empty string
         *  * http://localhost/web/index.php     returns '/web'
         *  * http://localhost/we%20b/index.php  returns '/we%20b'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static
         */
        public static function getBasePath()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getBasePath();
        }

        /**
         * Returns the root URL from which this request is executed.
         *
         * The base URL never ends with a /.
         *
         * This is similar to getBasePath(), except that it also includes the
         * script filename (e.g. index.php) if one exists.
         *
         * @return string The raw URL (i.e. not urldecoded)
         * @static
         */
        public static function getBaseUrl()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getBaseUrl();
        }

        /**
         * Gets the request's scheme.
         *
         * @return string
         * @static
         */
        public static function getScheme()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getScheme();
        }

        /**
         * Returns the port on which the request is made.
         *
         * This method can read the client port from the "X-Forwarded-Port" header
         * when trusted proxies were set via "setTrustedProxies()".
         *
         * The "X-Forwarded-Port" header must contain the client port.
         *
         * @return int|string|null Can be a string if fetched from the server bag
         * @static
         */
        public static function getPort()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPort();
        }

        /**
         * Returns the user.
         *
         * @return string|null
         * @static
         */
        public static function getUser()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getUser();
        }

        /**
         * Returns the password.
         *
         * @return string|null
         * @static
         */
        public static function getPassword()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPassword();
        }

        /**
         * Gets the user info.
         *
         * @return string|null A user name if any and, optionally, scheme-specific information about how to gain authorization to access the server
         * @static
         */
        public static function getUserInfo()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getUserInfo();
        }

        /**
         * Returns the HTTP host being requested.
         *
         * The port name will be appended to the host if it's non-standard.
         *
         * @return string
         * @static
         */
        public static function getHttpHost()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getHttpHost();
        }

        /**
         * Returns the requested URI (path and query string).
         *
         * @return string The raw URI (i.e. not URI decoded)
         * @static
         */
        public static function getRequestUri()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getRequestUri();
        }

        /**
         * Gets the scheme and HTTP host.
         *
         * If the URL was called with basic authentication, the user
         * and the password are not added to the generated string.
         *
         * @return string
         * @static
         */
        public static function getSchemeAndHttpHost()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getSchemeAndHttpHost();
        }

        /**
         * Generates a normalized URI (URL) for the Request.
         *
         * @return string
         * @see getQueryString()
         * @static
         */
        public static function getUri()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getUri();
        }

        /**
         * Generates a normalized URI for the given path.
         *
         * @param string $path A path to use instead of the current one
         * @return string
         * @static
         */
        public static function getUriForPath($path)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getUriForPath($path);
        }

        /**
         * Returns the path as relative reference from the current Request path.
         *
         * Only the URIs path component (no schema, host etc.) is relevant and must be given.
         * Both paths must be absolute and not contain relative parts.
         * Relative URLs from one resource to another are useful when generating self-contained downloadable document archives.
         * Furthermore, they can be used to reduce the link size in documents.
         *
         * Example target paths, given a base path of "/a/b/c/d":
         * - "/a/b/c/d"     -> ""
         * - "/a/b/c/"      -> "./"
         * - "/a/b/"        -> "../"
         * - "/a/b/c/other" -> "other"
         * - "/a/x/y"       -> "../../x/y"
         *
         * @return string
         * @static
         */
        public static function getRelativeUriForPath($path)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getRelativeUriForPath($path);
        }

        /**
         * Generates the normalized query string for the Request.
         *
         * It builds a normalized query string, where keys/value pairs are alphabetized
         * and have consistent escaping.
         *
         * @return string|null
         * @static
         */
        public static function getQueryString()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getQueryString();
        }

        /**
         * Checks whether the request is secure or not.
         *
         * This method can read the client protocol from the "X-Forwarded-Proto" header
         * when trusted proxies were set via "setTrustedProxies()".
         *
         * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
         *
         * @return bool
         * @static
         */
        public static function isSecure()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isSecure();
        }

        /**
         * Returns the host name.
         *
         * This method can read the client host name from the "X-Forwarded-Host" header
         * when trusted proxies were set via "setTrustedProxies()".
         *
         * The "X-Forwarded-Host" header must contain the client host name.
         *
         * @return string
         * @throws SuspiciousOperationException when the host name is invalid or not trusted
         * @static
         */
        public static function getHost()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getHost();
        }

        /**
         * Sets the request method.
         *
         * @static
         */
        public static function setMethod($method)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setMethod($method);
        }

        /**
         * Gets the request "intended" method.
         *
         * If the X-HTTP-Method-Override header is set, and if the method is a POST,
         * then it is used to determine the "real" intended HTTP method.
         *
         * The _method request parameter can also be used to determine the HTTP method,
         * but only if enableHttpMethodParameterOverride() has been called.
         *
         * The method is always an uppercased string.
         *
         * @return string
         * @see getRealMethod()
         * @static
         */
        public static function getMethod()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getMethod();
        }

        /**
         * Gets the "real" request method.
         *
         * @return string
         * @see getMethod()
         * @static
         */
        public static function getRealMethod()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getRealMethod();
        }

        /**
         * Gets the mime type associated with the format.
         *
         * @return string|null
         * @static
         */
        public static function getMimeType($format)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getMimeType($format);
        }

        /**
         * Gets the mime types associated with the format.
         *
         * @return array
         * @static
         */
        public static function getMimeTypes($format)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getMimeTypes($format);
        }

        /**
         * Gets the format associated with the mime type.
         *
         * @return string|null
         * @static
         */
        public static function getFormat($mimeType)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getFormat($mimeType);
        }

        /**
         * Associates a format with mime types.
         *
         * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
         * @static
         */
        public static function setFormat($format, $mimeTypes)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setFormat($format, $mimeTypes);
        }

        /**
         * Gets the request format.
         *
         * Here is the process to determine the format:
         *
         *  * format defined by the user (with setRequestFormat())
         *  * _format request attribute
         *  * $default
         *
         * @return string|null
         * @static
         * @see getPreferredFormat
         */
        public static function getRequestFormat($default = 'html')
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getRequestFormat($default);
        }

        /**
         * Sets the request format.
         *
         * @static
         */
        public static function setRequestFormat($format)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setRequestFormat($format);
        }

        /**
         * Gets the format associated with the request.
         *
         * @return string|null
         * @static
         */
        public static function getContentType()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getContentType();
        }

        /**
         * Sets the default locale.
         *
         * @static
         */
        public static function setDefaultLocale($locale)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setDefaultLocale($locale);
        }

        /**
         * Get the default locale.
         *
         * @return string
         * @static
         */
        public static function getDefaultLocale()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getDefaultLocale();
        }

        /**
         * Sets the locale.
         *
         * @static
         */
        public static function setLocale($locale)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setLocale($locale);
        }

        /**
         * Get the locale.
         *
         * @return string
         * @static
         */
        public static function getLocale()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getLocale();
        }

        /**
         * Checks if the request method is of specified type.
         *
         * @param string $method Uppercase request method (GET, POST etc)
         * @return bool
         * @static
         */
        public static function isMethod($method)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isMethod($method);
        }

        /**
         * Checks whether or not the method is safe.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.1
         * @return bool
         * @static
         */
        public static function isMethodSafe()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isMethodSafe();
        }

        /**
         * Checks whether or not the method is idempotent.
         *
         * @return bool
         * @static
         */
        public static function isMethodIdempotent()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isMethodIdempotent();
        }

        /**
         * Checks whether the method is cacheable or not.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.3
         * @return bool
         * @static
         */
        public static function isMethodCacheable()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isMethodCacheable();
        }

        /**
         * Returns the protocol version.
         *
         * If the application is behind a proxy, the protocol version used in the
         * requests between the client and the proxy and between the proxy and the
         * server might be different. This returns the former (from the "Via" header)
         * if the proxy is trusted (see "setTrustedProxies()"), otherwise it returns
         * the latter (from the "SERVER_PROTOCOL" server parameter).
         *
         * @return string|null
         * @static
         */
        public static function getProtocolVersion()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getProtocolVersion();
        }

        /**
         * Returns the request body content.
         *
         * @param bool $asResource If true, a resource will be returned
         * @return string|resource
         * @static
         */
        public static function getContent($asResource = false)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getContent($asResource);
        }

        /**
         * Gets the Etags.
         *
         * @return array
         * @static
         */
        public static function getETags()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getETags();
        }

        /**
         *
         *
         * @return bool
         * @static
         */
        public static function isNoCache()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isNoCache();
        }

        /**
         * Gets the preferred format for the response by inspecting, in the following order:
         *   * the request format set using setRequestFormat;
         *   * the values of the Accept HTTP header.
         *
         * Note that if you use this method, you should send the "Vary: Accept" header
         * in the response to prevent any issues with intermediary HTTP caches.
         *
         * @static
         */
        public static function getPreferredFormat($default = 'html')
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPreferredFormat($default);
        }

        /**
         * Returns the preferred language.
         *
         * @param string[] $locales An array of ordered available locales
         * @return string|null
         * @static
         */
        public static function getPreferredLanguage($locales = null)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPreferredLanguage($locales);
        }

        /**
         * Gets a list of languages acceptable by the client browser ordered in the user browser preferences.
         *
         * @return array
         * @static
         */
        public static function getLanguages()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getLanguages();
        }

        /**
         * Gets a list of charsets acceptable by the client browser in preferable order.
         *
         * @return array
         * @static
         */
        public static function getCharsets()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getCharsets();
        }

        /**
         * Gets a list of encodings acceptable by the client browser in preferable order.
         *
         * @return array
         * @static
         */
        public static function getEncodings()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getEncodings();
        }

        /**
         * Gets a list of content types acceptable by the client browser in preferable order.
         *
         * @return array
         * @static
         */
        public static function getAcceptableContentTypes()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getAcceptableContentTypes();
        }

        /**
         * Returns true if the request is an XMLHttpRequest.
         *
         * It works if your JavaScript library sets an X-Requested-With HTTP header.
         * It is known to work with common JavaScript frameworks:
         *
         * @see https://wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
         * @return bool
         * @static
         */
        public static function isXmlHttpRequest()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isXmlHttpRequest();
        }

        /**
         * Checks whether the client browser prefers safe content or not according to RFC8674.
         *
         * @see https://tools.ietf.org/html/rfc8674
         * @static
         */
        public static function preferSafeContent()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->preferSafeContent();
        }

        /**
         * Indicates whether this request originated from a trusted proxy.
         *
         * This can be useful to determine whether or not to trust the
         * contents of a proxy-specific header.
         *
         * @return bool
         * @static
         */
        public static function isFromTrustedProxy()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isFromTrustedProxy();
        }

        /**
         * Determine if the request is sending JSON.
         *
         * @return bool
         * @static
         */
        public static function isJson()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isJson();
        }

        /**
         * Determine if the current request probably expects a JSON response.
         *
         * @return bool
         * @static
         */
        public static function expectsJson()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->expectsJson();
        }

        /**
         * Determine if the current request is asking for JSON.
         *
         * @return bool
         * @static
         */
        public static function wantsJson()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->wantsJson();
        }

        /**
         * Determines whether the current requests accepts a given content type.
         *
         * @param string|array $contentTypes
         * @return bool
         * @static
         */
        public static function accepts($contentTypes)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->accepts($contentTypes);
        }

        /**
         * Return the most suitable content type from the given array based on content negotiation.
         *
         * @param string|array $contentTypes
         * @return string|null
         * @static
         */
        public static function prefers($contentTypes)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->prefers($contentTypes);
        }

        /**
         * Determine if the current request accepts any content type.
         *
         * @return bool
         * @static
         */
        public static function acceptsAnyContentType()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->acceptsAnyContentType();
        }

        /**
         * Determines whether a request accepts JSON.
         *
         * @return bool
         * @static
         */
        public static function acceptsJson()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->acceptsJson();
        }

        /**
         * Determines whether a request accepts HTML.
         *
         * @return bool
         * @static
         */
        public static function acceptsHtml()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->acceptsHtml();
        }

        /**
         * Determine if the given content types match.
         *
         * @param string $actual
         * @param string $type
         * @return bool
         * @static
         */
        public static function matchesType($actual, $type)
        {
            return \Illuminate\Http\Request::matchesType($actual, $type);
        }

        /**
         * Get the data format expected in the response.
         *
         * @param string $default
         * @return string
         * @static
         */
        public static function format($default = 'html')
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->format($default);
        }

        /**
         * Retrieve an old input item.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null
         * @static
         */
        public static function old($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->old($key, $default);
        }

        /**
         * Flash the input for the current request to the session.
         *
         * @return void
         * @static
         */
        public static function flash()
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->flash();
        }

        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void
         * @static
         */
        public static function flashOnly($keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->flashOnly($keys);
        }

        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void
         * @static
         */
        public static function flashExcept($keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->flashExcept($keys);
        }

        /**
         * Flush all of the old input from the session.
         *
         * @return void
         * @static
         */
        public static function flush()
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->flush();
        }

        /**
         * Retrieve a server variable from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null
         * @static
         */
        public static function server($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->server($key, $default);
        }

        /**
         * Determine if a header is set on the request.
         *
         * @param string $key
         * @return bool
         * @static
         */
        public static function hasHeader($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasHeader($key);
        }

        /**
         * Retrieve a header from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null
         * @static
         */
        public static function header($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->header($key, $default);
        }

        /**
         * Get the bearer token from the request headers.
         *
         * @return string|null
         * @static
         */
        public static function bearerToken()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->bearerToken();
        }

        /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
         * @return bool
         * @static
         */
        public static function exists($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->exists($key);
        }

        /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
         * @return bool
         * @static
         */
        public static function has($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->has($key);
        }

        /**
         * Determine if the request contains any of the given inputs.
         *
         * @param string|array $keys
         * @return bool
         * @static
         */
        public static function hasAny($keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasAny($keys);
        }

        /**
         * Apply the callback if the request contains the given input item key.
         *
         * @param string $key
         * @param callable $callback
         * @param callable|null $default
         * @return $this|mixed
         * @static
         */
        public static function whenHas($key, $callback, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->whenHas($key, $callback, $default);
        }

        /**
         * Determine if the request contains a non-empty value for an input item.
         *
         * @param string|array $key
         * @return bool
         * @static
         */
        public static function filled($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->filled($key);
        }

        /**
         * Determine if the request contains an empty value for an input item.
         *
         * @param string|array $key
         * @return bool
         * @static
         */
        public static function isNotFilled($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isNotFilled($key);
        }

        /**
         * Determine if the request contains a non-empty value for any of the given inputs.
         *
         * @param string|array $keys
         * @return bool
         * @static
         */
        public static function anyFilled($keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->anyFilled($keys);
        }

        /**
         * Apply the callback if the request contains a non-empty value for the given input item key.
         *
         * @param string $key
         * @param callable $callback
         * @param callable|null $default
         * @return $this|mixed
         * @static
         */
        public static function whenFilled($key, $callback, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->whenFilled($key, $callback, $default);
        }

        /**
         * Determine if the request is missing a given input item key.
         *
         * @param string|array $key
         * @return bool
         * @static
         */
        public static function missing($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->missing($key);
        }

        /**
         * Get the keys for all of the input and files.
         *
         * @return array
         * @static
         */
        public static function keys()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->keys();
        }

        /**
         * Get all of the input and files for the request.
         *
         * @param array|mixed|null $keys
         * @return array
         * @static
         */
        public static function all($keys = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->all($keys);
        }

        /**
         * Retrieve an input item from the request.
         *
         * @param string|null $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function input($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->input($key, $default);
        }

        /**
         * Retrieve input as a boolean value.
         *
         * Returns true when value is "1", "true", "on", and "yes". Otherwise, returns false.
         *
         * @param string|null $key
         * @param bool $default
         * @return bool
         * @static
         */
        public static function boolean($key = null, $default = false)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->boolean($key, $default);
        }

        /**
         * Retrieve input from the request as a Carbon instance.
         *
         * @param string $key
         * @param string|null $format
         * @param string|null $tz
         * @return \Illuminate\Support\Carbon|null
         * @static
         */
        public static function date($key, $format = null, $tz = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->date($key, $format, $tz);
        }

        /**
         * Retrieve input from the request as a collection.
         *
         * @param array|string|null $key
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static function collect($key = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->collect($key);
        }

        /**
         * Get a subset containing the provided keys with values from the input data.
         *
         * @param array|mixed $keys
         * @return array
         * @static
         */
        public static function only($keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->only($keys);
        }

        /**
         * Get all of the input except for a specified array of items.
         *
         * @param array|mixed $keys
         * @return array
         * @static
         */
        public static function except($keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->except($keys);
        }

        /**
         * Retrieve a query string item from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null
         * @static
         */
        public static function query($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->query($key, $default);
        }

        /**
         * Retrieve a request payload item from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null
         * @static
         */
        public static function post($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->post($key, $default);
        }

        /**
         * Determine if a cookie is set on the request.
         *
         * @param string $key
         * @return bool
         * @static
         */
        public static function hasCookie($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasCookie($key);
        }

        /**
         * Retrieve a cookie from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null
         * @static
         */
        public static function cookie($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->cookie($key, $default);
        }

        /**
         * Get an array of all of the files on the request.
         *
         * @return array
         * @static
         */
        public static function allFiles()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->allFiles();
        }

        /**
         * Determine if the uploaded data contains a file.
         *
         * @param string $key
         * @return bool
         * @static
         */
        public static function hasFile($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasFile($key);
        }

        /**
         * Retrieve a file from the request.
         *
         * @param string|null $key
         * @param mixed $default
         * @return \Illuminate\Http\UploadedFile|\Illuminate\Http\UploadedFile[]|array|null
         * @static
         */
        public static function file($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->file($key, $default);
        }

        /**
         * Dump the request items and end the script.
         *
         * @param mixed $keys
         * @return void
         * @static
         */
        public static function dd(...$keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->dd(...$keys);
        }

        /**
         * Dump the items.
         *
         * @param mixed $keys
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function dump($keys = [])
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->dump($keys);
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
            \Illuminate\Http\Request::macro($name, $macro);
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
            \Illuminate\Http\Request::mixin($mixin, $replace);
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
            return \Illuminate\Http\Request::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Http\Request::flushMacros();
        }

        /**
         *
         *
         * @param array $rules
         * @param mixed $params
         * @static
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         */
        public static function validate($rules, ...$params)
        {
            return \Illuminate\Http\Request::validate($rules, ...$params);
        }

        /**
         *
         *
         * @param string $errorBag
         * @param array $rules
         * @param mixed $params
         * @static
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         */
        public static function validateWithBag($errorBag, $rules, ...$params)
        {
            return \Illuminate\Http\Request::validateWithBag($errorBag, $rules, ...$params);
        }

        /**
         *
         *
         * @param mixed $absolute
         * @static
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         */
        public static function hasValidSignature($absolute = true)
        {
            return \Illuminate\Http\Request::hasValidSignature($absolute);
        }

        /**
         *
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @static
         */
        public static function hasValidRelativeSignature()
        {
            return \Illuminate\Http\Request::hasValidRelativeSignature();
        }

    }
}
