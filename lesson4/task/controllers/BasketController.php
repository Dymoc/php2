<?php


namespace app\controllers;


use app\models\Product;

class BasketController extends Controller
{
     public function actionShow() {  
  
          echo $this->render('basket', []);
      }
}