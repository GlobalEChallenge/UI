<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class ApiController extends Controller
{
    const CACHE_RESULTS = 600; //10 minutes

    public function actionIndex($s)
    {
        $keywords = urlencode($s);
        $results = Yii::$app->cache->get($keywords);
        if($results === false){
            $results = file_get_contents('http://52.36.149.39:8080/?customer='.$keywords);
            Yii::$app->cache->set($keywords,$results,self::CACHE_RESULTS);
        }

        return $results;
    }

}
