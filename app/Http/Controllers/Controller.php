<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $NOTE = 1;
    public $DOC = 2;
    public $PICTURE = 3;
    public $MUSIC = 4;
    public $VIDEO = 5;
    public $RESOURCE = 6;
}
