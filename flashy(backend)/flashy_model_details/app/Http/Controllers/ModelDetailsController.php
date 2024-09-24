<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Services\ModelDetailsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ModelDetailsController extends Controller
{
    public function getModels()
    {
        $modelDetailsService = App::make(ModelDetailsService::class);
        return $modelDetailsService->getModels();
    }

    public function addModel(Request $request)
    {
        $modelDetailsService = App::make(ModelDetailsService::class);
        return $modelDetailsService->addModel($request);
    }

    public function updateModel(Request $request)
    {
        $modelDetailsService = App::make(ModelDetailsService::class);
        return $modelDetailsService->updateModel($request);
    }
}
