<?php

namespace App\Services;

use App\Repositories\ModelDetailsRepository;
use Illuminate\Http\Request;

class ModelDetailsService implements ModelDetailsServiceInterface
{

    protected $modelDetailsRepository;

    public function __construct(ModelDetailsRepository $modelDetailsRepository)
    {
        $this->modelDetailsRepository = $modelDetailsRepository;
    }

    public function getModels()
    {
        return  $this->modelDetailsRepository->getModels();
    }
    public function addModel(Request $request)
    {
        return $this->modelDetailsRepository->addModel($request);
    }

    public function updateModel(Request $request)
    {
        return $this->modelDetailsRepository->addModel($request);
    }
}
