<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

use Mapping\Apis\Responses\ApiResponses;
use Mapping\Interfaces\EntityInterface;
use Mapping\Traits\DataMapper;

class DataMapperController extends Controller
{
    use DataMapper;

    /**
     * @param ApiResponses $apiResponses
     * @param EntityInterface $entity
     * @return void
     */
     public function mapping(ApiResponses $apiResponses, EntityInterface $entity, Request $request, string $type)
     {
         $file = 'api.' . $type;
         $data = $apiResponses->getData($file, $type);
         try {
             $result = $this->startMapping($data, $entity, $type);

             return response($result->toJson(), 200);

         } catch (\Exception $e) {
             return response($e->getMessage(), 500);
         }
     }

        public function test(ApiResponses $apiResponses, EntityInterface $entity, Request $request, string $type)
    {
        $file = 'api.'.$type;
        $data = $apiResponses->getData($file, $type);
        try {
            $result = $this->startMapping($data, $entity, $type);

            echo 'API Input';
            dump($data);
            echo 'Mapping Result';
            dd($result);

        } catch (\Exception $e) {
            echo  "Error : ". $e->getMessage();
        }

    }

}
