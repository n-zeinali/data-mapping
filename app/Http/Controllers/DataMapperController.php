<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
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
    #[NoReturn] public function mapping(ApiResponses $apiResponses, EntityInterface $entity, Request $request, string $type): void
    {
        $file = 'api.'.$type;
        $data = $apiResponses->getData($file);
        try {
            $result = $this->startMapping($data, $entity);

            echo 'API Input';
            dump($apiResponses->getData($file));
            echo 'Mapping Result';
            dd($result);

        } catch (\Exception $e) {
           echo  "Error : ". $e->getMessage();
        }


    }

}
