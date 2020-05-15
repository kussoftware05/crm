<?php

namespace backend\controllers;

use backend\models\ShippingMaster; 
use backend\models\BillingMaster;
use backend\models\OrderMaster;
use common\models\User;

class OrderController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * create a new order
     */
    public function actionCreate()
    {
        $shipping_model = new ShippingMaster;
        $billing_model = new BillingMaster;
        $order_model = new OrderMaster;

        return $this->render('create', [
            'shipping_model' => $shipping_model,
            'billing_model' => $billing_model,
            'order_model'   => $order_model,
            'customer_list' => User::getAllUserWithNames()
        ]);
    }

    public function actionTest()
    {
        echo '<pre>';
        print_r(User::getAllUserWithNames()); 
        echo '</pre>';
    }

}
