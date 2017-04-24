<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 23/4/17
 * Time: 21:57
 */

    namespace VideoClub\Repo\Pelicula;


    abstract class AbstractMovieDecorator implements PeliculaInterface {

        protected $nextMovie;

        public function __construct(PeliculaInterface $nextMovie)
        {
            $this->nextMovie = $nextMovie;
        }

        /**
         * @param $id
         * @return mixed
         */
        public function byId($id)
        {
            // TODO: Implement byId() method.
            return $this->nextMovie->byId($id);
        }

        /**
         * @param int $page
         * @param int $limit
         * @param bool $all
         * @return mixed
         */
        public function byPage($page = 1, $limit = 10, $all = false)
        {
            // TODO: Implement byPage() method.
            return $this->nextMovie->byPage($page, $limit, $all);
        }

        /**
         * @param $slug
         * @return mixed
         */
        public function bySlug($slug)
        {
            // TODO: Implement bySlug() method.
            return $this->nextMovie->bySlug($slug);
        }

        /**
         * @param $tag
         * @param int $page
         * @param int $limit
         * @return mixed
         */
        public function byTag($tag, $page = 1, $limit = 10)
        {
            // TODO: Implement byTag() method.
            return $this->nextMovie->byTag($tag, $page, $limit);
        }

    }