<?php

namespace frontend\controllers;

use common\models\Banner;
use common\models\Gallery;
use common\models\Post;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
            'captcha' => [
                'class' => \yii\captcha\CaptchaAction::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $banners = Banner::find()->where(['status' => 1])->all();
        $posts = Post::find()->where(['status' => 1])->all();
        return $this->render('index', [
            'banners' => $banners,
            'posts' => $posts,
        ]);
    }

    public function actionPhotoGallery()
    {
        $photos = Gallery::find()->where(['type' => Gallery::TYPE_1])->all();

        return $this->render('photo-gallery', [
            'photos' => $photos,
        ]);
    }
    public function actionVideoGallery()
    {
        $videos = Gallery::find()->where(['type' => Gallery::TYPE_2])->all();

        return $this->render('video-gallery', [
            'videos' => $videos,
        ]);
    }
}
