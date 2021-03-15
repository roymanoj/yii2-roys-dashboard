<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Company;
use app\modules\admin\models\CompanySearch;
use app\models\user;
use app\components\helpers\UserHelpers;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CompanyController implements the CRUD actions for Company model.
 */
class CompanyController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Company models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CompanySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Company model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Company model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Company();
        $model->scenario=Company::SCENARIO_CREATE;
     

        if ($model->load(Yii::$app->request->post() )) 
        {

            if(UserHelpers::CheckUser($model->comuser)){ 

                if($model->save()) 
           {
              $comuser=new User();
              $comuser->cid=$model->id;
              $comuser->username=$model->comuser;
              $comuser->email=$model->comemail;
              $comuser->phone=$model->comphone; 
              $comuser->usrlevel=User::ROLE_ADMIN;
              $comuser->setPassword($model->compass);
              $comuser->generateAuthKey();
              $comuser->save();

              return $this->render('success',[
                'model'=>$model,
               ]);
           }
            

             return $this->render('success',[
                           'model'=>$model,
             ]);


            } else {
                \Yii::$app->getSession()->setFlash('danger', 'User Name Already Exist...');
            }



           
             

            // var_dump($model);
       
        }
           
       //    \Yii::$app->getSession()->setFlash('danger', 'User Name or Email Already Exist...');
         
        
        return $this->render('create', [
            'model' => $model,
                          ]);
    }

    /**
     * Updates an existing Company model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->scenario=Company::SCENARIO_UPDATE;

        $comuser= $this->LocateAdmin($id);

        if(!empty($comuser)){

            $model->comuser=$comuser->username;
            $model->comemail=$comuser->email;
            $model->comphone=$comuser->phone;
            $model->compass=null;
            
        }
            

        if ($model->load(Yii::$app->request->post())) {
           
            if($model->save()) 
           {
              
              $comuser->cid=$model->id;
              $comuser->username=$model->comuser;
              $comuser->email=$model->comemail;
              $comuser->phone=$model->comphone; 
              $comuser->usrlevel=User::ROLE_ADMIN;
                if(!empty($model->compass)){
                    $comuser->setPassword($model->compass);
                }

                if(!empty($comuser->auth_key))
                {
                    $comuser->generateAuthKey();
                }
               
                 
              $comuser->save();

              return $this->render('success',[
                'model'=>$model,
               ]);
           }
            

          return $this->render('update',[
              'model'=>$model,
             ]);


        
        } 

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Company model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionSuccess($id){

        $model = $this->findModel($id);

        return $this->render('success', [
            'model' => $model,
        ]);

    }

    /**
     * Finds the Company model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Company the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Company::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }



    public function LocateAdmin($companyid){
            $comuser=User::find()->where(['cid' => $companyid,'usrlevel' => User::ROLE_ADMIN])->one();
            return $comuser;


    }



}
