<?php

namespace app\Http\Controllers;

use Acme\Commanding\CommandBus;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * BaseController.
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $commandBus;
    /**
     * Initializes command bus for every controller.
     *
     * @param CommandBus $commandBus [description]
     */
    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }
}
