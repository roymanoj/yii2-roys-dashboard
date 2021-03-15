<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;
use app\models\PermissionHelpers;



/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{

    
// first function inside the class
public function behaviors()
{
    return [
        'access' => [
            'class' => AccessControl::className(),
            'only' => ['index'],
            'rules' => [
                [
                    'actions' => ['index'],
                    'allow' => true,
                    'roles' => ['@'],
                    'matchCallback' => function($rule, $action) {
                            return PermissionHelpers::requireAdmin();
                        }
                ],
            ],
        ],
    ];
}


    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
