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

    class EloquentMovie implements PeliculaInterface {

        private $pelicula;

        public function __construct(Model $pelicula)
        {
            $this->pelicula = $pelicula;
        }

        /**
         * @return mixed
         */
        public function getAllMovies()
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
        public function addMovie(Request $request)
        {
            // TODO: Implement agregarPelicula() method.
            // Guardar nuevo miembro y obtenel su id
            $this->pelicula = $this->pelicula->create([
                'titulo' => $request['titulo'],
                'descripcion' => $request['descripcion']
            ]);

        }

        /**
         * Get paginated articles
         *
         * @param int $page
         * @param int $limit
         * @param bool $all
         * @return mixed
         */
        public function byPage($page = 1, $limit = 10, $all = false)
        {
            // TODO: Implement byPage() method.
            $result = new \StdClass;
            $result->page = $page;
            $result->limit = $limit;
            $result->totalItems = 0;
            $result->items = array();

            $peliculas = $this->pelicula
                ->orderBy('created_at', 'desc')
                ->skip($limit * ($page - 1))
                ->take($limit)
                ->get();

            // Create object to return data useful for pagination

            $result->items = $peliculas->all();
            $result->totalItems = $this->totalPeliculas();

            return $data;
        }

        /**
         * Get single article by URL
         *
         * @param $slug
         * @return mixed
         */
        public function bySlug($slug)
        {
            // TODO: Implement bySlug() method.
            // Iclude tags using Eloquent relationships
            return $this->pelicula
                ->first();
        }


        public function byTag($tag, $page = 1, $limit = 10)
        {
            // TODO: Implement byTag() method.
            //$foundTag = $this->
        }
    }