<?php
/**
 * Created by PhpStorm.
 * User: webcoder
 * Date: 9/4/17
 * Time: 17:03
 */
    namespace VideoClub\Repo;

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
    }