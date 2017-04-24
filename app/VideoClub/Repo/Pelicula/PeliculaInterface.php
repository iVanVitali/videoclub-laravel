<?php
/**
 * Created by PhpStorm.
 * User: webcoder
 * Date: 9/4/17
 * Time: 17:03
 */
    namespace VideoClub\Repo\Pelicula;

    use Illuminate\Http\Request;

    interface PeliculaInterface {

        /**
         * @return mixed
         */
        public function obtenerTodasPeliculas();

        /**
         * @param Request $request
         * @return mixed
         */
        public function agregarPelicula(Request $request);

        /**
         * @param $id
         * @return mixed
         */
        public function byId($id);

        /**
         * @param int $page
         * @param int $limit
         * @param bool $all
         * @return mixed
         */
        public function byPage($page=1, $limit=10, $all=false);

        /**
         * @param $slug
         * @return mixed
         */
        public function bySlug($slug);

        /**
         * @param $tag
         * @param int $page
         * @param int $limit
         * @return mixed
         */
        public function byTag($tag, $page=1, $limit=10);


    }