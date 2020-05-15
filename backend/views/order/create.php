<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Order */

$this->title = 'Create Order';
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="Order-create">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'shipping_model' => $shipping_model,
        'billing_model' => $billing_model,
        'order_model' => $order_model,
        'customer_list' => $customer_list
    ]) ?>

</div>
