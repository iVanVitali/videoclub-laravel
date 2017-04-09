<?php
/**
 * Created by PhpStorm.
 * User: webcoder
 * Date: 9/4/17
 * Time: 17:43
 */

    namespace VideoClub\Repo;

    use App\Models\Pelicula;
    use Illuminate\Support\ServiceProvider;
    use VideoClub\Repo\Pelicula\EloquentPelicula;

    class RepoServiceProvider extends ServiceProvider {

        /**
         * Register the binding
         *
         * @return void
         */
        public function register() {

            $this->app->bind('VideoClub\Repo\Pelicula\PeliculaInterface', function ($app) {
                return new EloquentPelicula(new Pelicula);
            });

        }
    }