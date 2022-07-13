<?php

namespace Illuminate\Http {
    /**
     *
     *
     */
    class Request
    {
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
