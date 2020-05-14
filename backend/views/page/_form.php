<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Page */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="page-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <label class="control-label" for="page-content">Content</label>
    <?php echo froala\froalaeditor\FroalaEditorWidget::widget([
        'model' => $model,
        'attribute' => 'content',
        'options' => [
            'id'=>'content'
        ],
        'clientOptions' => [
            'toolbarInline' => false,
            'toolbarButtons' => ['fullscreen', 'bold', 'italic', 'underline',
                                'paragraphStyle', '|', 'paragraphFormat', 'align', 
                                'outdent', 'indent', '-', 'insertLink', 'insertTable', '|', 
                                'emoticons', 'specialCharacters', 'insertHR', 'selectAll', 'clearFormatting', '|', 
                                'help', 'html', '|', 'undo', 'redo'],
            'theme' => 'royal', 
            'language' => 'en_gb',
            'height' => 350,
        ]
    ]); ?>

    <div class="form-group mt-3">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
