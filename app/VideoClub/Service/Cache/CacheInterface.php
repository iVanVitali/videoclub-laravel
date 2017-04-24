<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 23/4/17
 * Time: 21:17
 */

    namespace VideoClub\Service\Cache;

    interface CacheInterface {

        /**
         * Retrieve data from cache
         *
         * @param string    Cache item key
         * @return mixed    PHP data result fo cache
         */
        public function get($key);

        /**
         * Add data to the cache
         *
         * @param $key
         * @param $value
         * @param null $minutes
         * @return mixed
         */
        public function put($key, $value, $minutes=null);


        /**
         * Test if item exists in cache
         * Only returns true if exists && is not expirted
         *
         * @param $key
         * @return mixed
         */
        public function has($key);

    }