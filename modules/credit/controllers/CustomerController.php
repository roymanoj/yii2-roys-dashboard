<?php

namespace app\modules\credit\controllers;

use Yii;
use app\models\base\Customer;
use app\models\base\CustomerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\forms\import\ImportCustomerForm;

/**
 * CustomerController implements the CRUD actions for Customer model.
 */
class CustomerController extends Controller
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
     * Lists all Customer models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CustomerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Customer model.
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
     * Creates a new Customer model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Customer();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Customer model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Customer model.
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

    /**
     * Finds the Customer model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Customer the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Customer::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

  

    public function actionImport(){

        $model = new ImportCustomerForm();
         $uploadDir = Yii::getAlias('@web/uploads');

        if (Yii::$app->request->isPost) {

            $model->csvFile = UploadedFile::getInstance($model, 'csvFile');

           

            if ($model->csvFile) {

                    $time = time();
                    $model->csvFile->saveAs('uploads/' .$time. '.' . $model->csvFile->extension);
                    $model->csvFile = 'uploads/' .$time. '.' . $model->csvFile->extension;


               
                $count=0;
                $cid=Yii::$app->user->identity->comp;
                $areaid=1;

                $handle = fopen( $model->csvFile, 'r');

                while (($fileop = fgetcsv($handle, 1000, ",")) !== false) 
                {
                    $count=$count+1;

                    $tid = $fileop[0];
                    $cusname = $fileop[1];
                    $phone = $fileop[2];
                    $city = $fileop[3];


                    //$cusname = 'manoj agency'; //$fileop[1];
                    //$phone = '9483552045'; //$fileop[8];
                    //$city = 'Bangalore'; //$fileop[11];
                       
                                     
                   
                   // print_r($fileop);exit();
                  $sql = "INSERT INTO customer(tid,cid,areaid,customername,cuscity,cusphone) VALUES ($tid,2,1,'$cusname', '$city', '$phone')";
                  $query = Yii::$app->db->createCommand($sql)->execute();

                 // echo "Rcord No : ".$count. "Imported Successfully...";
                }

                if ($query) 
                {
                    return $this->render('success');
                }





                
                return;
            }
        }

        return $this->render('import', ['model' => $model]);

    }

}
