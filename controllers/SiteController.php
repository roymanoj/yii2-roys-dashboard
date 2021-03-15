<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\helpers\Url;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\User;
use app\models\Company;

use app\models\forms\user\Registration;
use app\models\forms\user\SignupForm;
use app\models\forms\user\PasswordResetRequestForm;
use app\models\forms\user\ResetPasswordForm;
use app\models\forms\user\ChangePasswordForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
          
            'verbs' => [
                'class' => VerbFilter::className(),
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
                'class' => 'yii\web\ErrorAction',
            ],
         /*   'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ], */

           'captcha' => [
                'class' => 'app\components\MathCaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? '42' : null,
            ],
           
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
           // return $this->goBack();

          /* if(Yii::$app->user->identity->cid===null){
               
                Yii::$app->user->logout();
                Yii::$app->session->setFlash('danger','Your Id not linked with company ID. Please contact support');
                return $this->render('index');
           } */
                   
            return Yii::$app->response->redirect(Url::to(['/dashboard']));
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }


    public function actionAddAdmin() {
        $model = User::find()->where(['username' => 'admin'])->one();
        if (empty($model)) {
            $user = new User();
            $user->username = 'admin';
            $user->cid='1';
            $user->email = 'admin@example.com';
            $user->setPassword('admin');
            $user->generateAuthKey();
            $user->usrlevel='30';
            if ($user->save()) {
                echo 'Admin ID Created';
            } else {
                echo 'Admin Creation Failed';
            }
        }
    }

    public function actionSignup()
    {
        $model = new Registration();
 
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }
 
        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionAccessdenied(){
        return $this->render('acessdenied');
    }
      

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
 
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
 
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
 
        }
        // requestPasswordResetToken
        return $this->render('passwordResetRequestForm', [
            'model' => $model,
        ]);
    } 
 
    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
 
        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');
            return $this->goHome();
        }
 
        return $this->render('resetPasswordForm', [
            'model' => $model,
            ]);
 
    }


public function actionPending(){
    return $this->render('pending');
}


 public function actionChangePassword(){
   
   
    $appuser=User::findByUsername(Yii::$app->user->identity->username);
    $model=new ChangePasswordForm();

      
    if ($model->load(Yii::$app->request->post()) && $model->validate()){ 

           
        if($appuser->validatePassword($model->oldpassword)){

            if($model->changePassword(Yii::$app->user->identity->id,$model->password) ){
                $model->oldpassword=null;
                $model->password=null;
                $model->password_repeat=null;
                Yii::$app->session->setFlash('success', 'Password Changed Successfully');
                $this->redirect(\Yii::$app->urlManager->createUrl("/dashboard"));

               } else {

                $model->oldpassword=null;
                $model->password=null;
                $model->password_repeat=null;
                Yii::$app->session->setFlash('danger', 'Something Went Wrong...');
                return $this->render('changepassword', [
                  
                    'model' => $model,
                    ]);
   
               
               } // End ChangePassword 


          } else {

            $model->oldpassword=null;
            $model->password=null;
            $model->password_repeat=null;
            Yii::$app->session->setFlash('danger', 'Old Pasword Is Not Correct');
            return $this->render('changepassword', [
              
                'model' => $model,
                ]);

           

        } // End of cheking Old Password
        
         
       


    } // end post model

   // Yii::$app->session->setFlash('danger', 'Old Password Not Correct');
    return $this->render('changepassword', [
    'model' => $model,
    ]);
    
    } // End Action


public function actionS3write(){

    $s3 = Yii::$app->get('s3');

    if($result = $s3->commands()->upload('zips/TrainingSimulatorAssets.zip', '//home/manoj/Desktop/test/TrainingSimulatorAssets.zip')->withAcl('private')->execute()){

        Yii::$app->session->setFlash('Success', 'File Uploaded Successfully');

    } else {

        Yii::$app->session->setFlash('danger', 'File upload error!');
    }

  

}





}
