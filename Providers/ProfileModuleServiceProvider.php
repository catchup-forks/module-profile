<?php namespace Cms\Modules\Profile\Providers;

use Cms\Modules\Core\Providers\BaseModuleProvider;

class ProfileModuleServiceProvider extends BaseModuleProvider
{

    /**
     * Register the defined middleware.
     *
     * @var array
     */
    protected $middleware = [
        'Profile' => [
        ],
    ];

    /**
     * The commands to register.
     *
     * @var array
     */
    protected $commands = [
        'Profile' => [
        ],
    ];

    /**
     * Register view composers
     *
     * @var array
     */
    protected $composers = [
        'Profile' => [
        ],
    ];

    /**
     * Register repository bindings to the IoC
     *
     * @var array
     */
    protected $bindings = [

    ];

    /**
     * Register Auth related stuffs
     */
    public function register()
    {
        parent::register();

    }

}
