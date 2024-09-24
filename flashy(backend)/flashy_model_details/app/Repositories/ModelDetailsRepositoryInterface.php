<?php

namespace App\Repositories;

use Illuminate\Http\Request;

interface ModelDetailsRepositoryInterface
{

    public function getModels();
    public function addModel(Request $request);
    public function updateModel(Request $request);
}
