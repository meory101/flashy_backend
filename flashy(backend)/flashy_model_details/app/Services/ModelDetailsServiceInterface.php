<?php

namespace App\Services;

use Illuminate\Http\Request;

interface ModelDetailsServiceInterface
{

    public function getModels();
    public function addModel(Request $request);
    public function updateModel(Request $request);
}
