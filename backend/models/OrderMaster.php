<?php

namespace backend\models;

use Yii;
use common\models\User;
/**
 * This is the model class for table "order_master".
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $billing_id
 * @property int|null $shipping_id
 * @property string|null $order_date
 * @property float $order_amount
 * @property float $order_discount
 * @property float $shipping_cost
 * @property float $tax
 * @property string|null $order_status
 *
 * @property OrderDetails[] $orderDetails
 * @property BillingMaster $billing
 * @property ShippingMaster $shipping
 * @property User $user
 */
class OrderMaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_master';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'billing_id', 'shipping_id'], 'integer'],
            [['order_date'], 'safe'],
            [['order_amount', 'order_discount', 'shipping_cost', 'tax'], 'number'],
            [['order_status'], 'string'],
            [['billing_id'], 'exist', 'skipOnError' => true, 'targetClass' => BillingMaster::className(), 'targetAttribute' => ['billing_id' => 'id']],
            [['shipping_id'], 'exist', 'skipOnError' => true, 'targetClass' => ShippingMaster::className(), 'targetAttribute' => ['shipping_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'billing_id' => 'Billing ID',
            'shipping_id' => 'Shipping ID',
            'order_date' => 'Order Date',
            'order_amount' => 'Order Amount',
            'order_discount' => 'Order Discount',
            'shipping_cost' => 'Shipping Cost',
            'tax' => 'Tax',
            'order_status' => 'Order Status',
        ];
    }

    /**
     * Gets query for [[OrderDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderDetails()
    {
        return $this->hasMany(OrderDetails::className(), ['order_id' => 'id']);
    }

    /**
     * Gets query for [[Billing]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBilling()
    {
        return $this->hasOne(BillingMaster::className(), ['id' => 'billing_id']);
    }

    /**
     * Gets query for [[Shipping]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShipping()
    {
        return $this->hasOne(ShippingMaster::className(), ['id' => 'shipping_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
