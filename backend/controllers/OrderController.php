<?php

namespace backend\controllers;

use Yii;
use backend\models\ShippingMaster; 
use backend\models\BillingMaster;
use backend\models\OrderMaster;
use backend\models\Product;
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

        if(Yii::$app->request->isPost)
        {
            // echo '<pre>';
            // print_r(Yii::$app->request->post());
            // echo '</pre>';

            // $billing_details = Yii::$app->request->post('BillingMaster');
            // $shipping_details = Yii::$app->request->post('ShippingMaster');
            // $order_details = Yii::$app->request->post('OrderMaster');
            $product_list = Yii::$app->request->post('productlist');

            if($order_model->createNewOrder(Yii::$app->request->post(),$product_list))
                echo 'order finished';
        }

        return $this->render('create', [
            'shipping_model' => $shipping_model,
            'billing_model' => $billing_model,
            'order_model'   => $order_model,
            'customer_list' => User::getAllUserWithNames(),
            'product_list' => Product::getAllProductNameWithPrice()
        ]);
    }

    public function actionTest()
    {
        echo '<pre>';
        print_r(Product::getAllProductNameWithPrice()); 
        echo '</pre>';
    }

}
