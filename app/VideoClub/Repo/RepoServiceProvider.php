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
    use VideoClub\Repo\Pelicula\CacheDecorator;
    use VideoClub\Repo\Pelicula\EloquentPelicula;
    use VideoClub\Service\Cache\LaravelCache;

    class RepoServiceProvider extends ServiceProvider {

        /**
         * Register the binding
         *
         * @return void
         */
        public function register() {

            $app = $this->app;

            $this->app->bind('VideoClub\Repo\Pelicula\PeliculaInterface', function ($app) {

                //$pelicula = new EloquentPelicula(new Pelicula);

                //return new CacheDecorator($pelicula, new LaravelCache($app['cache'], 'peliculas', 10));

                return new EloquentPelicula(new Pelicula);

            });

        }
    }