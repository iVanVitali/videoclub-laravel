<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 23/4/17
 * Time: 22:07
 */

    namespace VideoClub\Repo\Pelicula;

    use VideoClub\Service\Cache\CacheInterface;

    class CacheDecorator extends AbstractMovieDecorator {

        protected $cache;


        public function __construct(PeliculaInterface $nextMovie, CacheInterface $cache)
        {
            parent::__construct($nextMovie);
            $this->cache = $cache;
        }

        /**
         * Attempt to retrieve from cache by ID
         *
         * @param $id
         * @return mixed
         */

        public function byId($id)
        {
            $key = md5('id.'.$id);

            if($this->cache->has($key)) {

                return $this->cache->get($key);

            }

            $pelicula = $this->nextMovie->byId($id);

            $this->cache->put($key, $pelicula);

            return $pelicula;
        }

        /**
         * Attempt to retrieve from cache
         *
         * @param int $page
         * @param int $limit
         * @return mixed
         */
        public function byPage($page = 1, $limit = 10)
        {
            $key = md5('page.'.$page.'.'.$limit);

            if($this->cache->has($key)) {

                return $this->cache->get($key);

            }

            $paginated = $this->nextMovie->byPage($page, $limit);

            $this->cache->put($key, $paginated);

            return $paginated;
        }

        /**
         * Attempt to retrieve from cache
         *
         * @param $slug
         * @return mixed
         */
        public function bySlug($slug)
        {
            $key = md5('slug.'.$slug);

            if($this->cache->has($key)) {
                return $this->cache->get($key);
            }

            $pelicula = $this->nextMovie->bySlug($slug);

            $this->cache->put($key, $pelicula);

            return $pelicula;
        }

        /**
         * Attempt retrive from cache
         *
         * @param $tag
         * @param int $page
         * @param int $limit
         * @return mixed
         */
        public function byTag($tag, $page = 1, $limit = 10)
        {
            $key = md5('tag.'.$tag.'.'.$page.'.'.$limit);

            if($this->cache->has($key)) {

                return $this->cache->get($key);

            }

            $paginated = $this->nextMovie->byId($tag, $page, $limit);

            $this->cache->put($key, $paginated);

            return $paginated;
        }

    }