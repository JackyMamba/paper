<?php
namespace Qyjiang\Paper;
use Illuminate\Database\Capsule\Manager as Capsule;

class Paper{
    public function __construct() {
        $capsule = new Capsule;

        $capsule->addConnection([
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'test',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);

        // Make this Capsule instance available globally via static methods... (optional)
        $capsule->setAsGlobal();

        // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
        $capsule->bootEloquent();
        $users = Capsule::table('users')->where('votes', '>', 100)->get();
        var_dump($users);
    }
}
