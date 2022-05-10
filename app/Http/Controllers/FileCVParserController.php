<?php

namespace App\Http\Controllers;

use App\Services\TestService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class FileCVParserController
{
    public function index(TestService $testService): mixed
    {
//        $response = Http::asForm()->withHeaders([
//            'Authorization' => 'Bearer c54e5087a1c50bfa85fb6db45784cfa402290e7b',
//            'Accept-Encoding' => 'gzip, deflate',
//            'Content-Type' => 'multipart/form-data',
//            'accept' => ' */*',
//        ])
//            ->post('https://api.affinda.com/v2/resumes/',[
//                'url'=> 'https://www.clickdimensions.com/links/TestPDFfile.pdf'
//            ]);
//        return response()->json(json_decode($response->body()));
        return 'test';
    }
}
