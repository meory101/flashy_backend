<?php

namespace App\Repositories;

use App\Models\ModelDetailsModel;
use Illuminate\Http\Request;



class ModelDetailsRepository implements ModelDetailsRepositoryInterface
{

    protected $model;

    public function __construct(ModelDetailsModel $modelDetails)
    {
        $this->model = $modelDetails;
    }

    public function getModels()
    {
        $models = $this->model->all();
        if ($models) {

            return response()->json([
                'result' => [
                    'models' => $models
                ]
            ], 200);
        }
        return response()->json([], 500);
    }

    public function addModel(Request $request)
    {
        $model = new  ModelDetailsModel;
        if ($request->name == null) {
            return response()->json([

                'error' =>
                [
                    'en' => 'Name Is Required',
                    'ar' => 'الاسم مطلوب'
                ]

            ], 400);
        }
        $model->name =   $request->name;
        $result = $model->save();
        if ($result) {
            return response()->json(['result' => ['model' => $model]], 200);
        }
        return response()->json(['error' => []], 500);
    }
    public function updateModel(Request $request)
    {
        $model =   ModelDetailsModel::find($request->modelId);
        if ($model) {
            $model->name =   $request->name;
            $model = $model->save();
            if ($model) {
                return response()->json(['result' => ['model' => $model]], 200);
            }
        } else {
            return response()->json([

                'error' =>
                [
                    'en' => 'Model Is Not Found',
                    'ar' => 'الموديل غير موجود'
                ]

            ], 400);
        }

        return response()->json([], 500);
    }
}
