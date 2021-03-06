<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AttendeeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Attendees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="attendee-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Attendee', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'firstName',
            'lastName',
            'position',
            'city',
            'vk',
            'twitter',
            'facebook',
            'email:email',
            'showEmail:boolean',
            'phone',
            'showPhone:boolean',
            'description',
            'externalImagePath',
            'externalThumbnailPath',
            'isSpeaker:boolean',
            'company',
            'language',
            'networkingCode',
            'authorized:boolean',
            'confirmed:boolean',
            'moderated:boolean',
            'withdrawed:boolean',
            'privateInfo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
