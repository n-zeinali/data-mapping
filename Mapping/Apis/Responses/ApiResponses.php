<?php

namespace Mapping\Apis\Responses;

use Illuminate\Support\Facades\Storage;
use Mapping\Classes\JsonData;
use Mapping\Classes\XmlData;

class ApiResponses
{
    /**
     * This Method Is an Array That Is like a api response
     * we used it because the speed of fetching data from API is so low
     * EX(Http::get('https://api.sampleapis.com/countries/countries')->body()
     * @param $url
     * @return array
     */
    public function getData($url): array
    {
        // switch between XML And JSON Files

        $driver = [
            'json'=> JsonData::class,
            'xml'=> XmlData::class
        ][pathinfo(storage_path('app/' . $url), PATHINFO_EXTENSION)] ?? dd("Unsupported Data");

        return $driver::getData(Storage::disk('local')->get($url));
    }

}
