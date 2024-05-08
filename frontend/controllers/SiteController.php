<?php

namespace frontend\controllers;

use common\models\Banner;
use common\models\Gallery;
use common\models\Lot;
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
        $lots = Lot::find()->where(['status' => 1])->all();
        return $this->render('index', [
            'banners' => $banners,
            'posts' => $posts,
            'lots' => $lots,
        ]);
    }

    public function actionContacts()
    {
        return $this->render('contacts');
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
    public function actionPosts()
    {
        $posts = Post::find()->where('status = 1')->all();
        return $this->render('posts/index', [
            'posts' => $posts
        ]);
    }
    public function actionLots()
    {
        $lots = Lot::find()->where('status = 1')->all();
        return $this->render('lots/index', [
            'lots' => $lots
        ]);
    }
    public function actionPostDetails($id)
    {
        $post = Post::find()->where('status = 1')->andWhere(['id' => $id])->one();
        return $this->render('posts/details', [
            'post' => $post
        ]);
    }
    public function actionLotDetails($id)
    {
        $lot = Lot::find()->where('status = 1')->andWhere(['id' => $id])->one();
        return $this->render('lots/details', [
            'lot' => $lot
        ]);
    }
}
