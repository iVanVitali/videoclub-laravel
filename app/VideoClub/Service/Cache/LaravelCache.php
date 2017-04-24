<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 23/4/17
 * Time: 21:29
 */

    namespace VideoClub\Service\Cache;

    use Illuminate\Cache\CacheManager;

    class LaravelCache implements CacheInterface {

        protected $cache;
        protected $cachekey;
        protected $minutes;

        public function __construct(CacheManager $cache, $cachekey, $minutes=null)
        {
            $this->cache = $cache;
            $this->cachekey = $cachekey;
            $this->minutes = $minutes;
        }

        public function get($key)
        {
            // TODO: Implement get() method.
            return $this->cache->section($this->cachekey)->get($key);
        }

        public function put($key, $value, $minutes = null)
        {
            // TODO: Implement put() method.
            if(is_null($minutes)) {
                $minutes = $this->minutes;
            }

            return $this->cache->section($this->cachekey)->put($key, $value, $minutes);
        }

        public function has($key)
        {
            // TODO: Implement has() method.
            return $this->cache->section($this->cachekey)->has($key);
        }


    }