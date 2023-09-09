<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
 /**
    * @OA\Info(
    *     version="1.0.0",
    *     title="Sultan Ecommerce Rest API",
    *     description="Rest Api Documentation",
    *     @OA\Contact(
    *         name="Sultan Ammar",
    *         email="info@sultanammar.com"
    *     ),
    *     @OA\License(
    *         name="Apache 2.0",
    *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
    *     )
    * ),
    * @OA\Server(
    *     url="/api",
    * ),
    */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
