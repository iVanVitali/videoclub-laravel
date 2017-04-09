<?php
/**
 * Created by PhpStorm.
 * User: webcoder
 * Date: 9/4/17
 * Time: 17:08
 */
    namespace VideoClub\Repo\Pelicula;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Http\Request;

    class EloquentPelicula implements PeliculaInterface {

        private $pelicula;

        public function __construct(Model $pelicula)
        {
            $this->pelicula = $pelicula;
        }

        /**
         * @return mixed
         */
        public function obtenerTodasPeliculas()
        {
            // TODO: Implement obtenerTodasPeliculas() method.
            // Consultar los miembros con su genero
            $query = $this->pelicula;
            // Obtener los datos de la consulta
            $peliculas = $query->get();

            // Devolver la coleccion de miembros
            return $peliculas;
        }

        /**
         * @param Request $request
         * @return mixed
         */
        public function agregarPelicula(Request $request)
        {
            // TODO: Implement agregarPelicula() method.
            // Guardar nuevo miembro y obtenel su id
            $this->pelicula = $this->pelicula->create([
                'titulo' => $request['titulo'],
                'descripcion' => $request['descripcion']
            ]);

        }

    }