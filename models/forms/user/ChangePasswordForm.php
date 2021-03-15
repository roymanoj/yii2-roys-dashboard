<?php
 
namespace app\models\forms\user;
 
use Yii;
use yii\base\Model;
use app\models\User;
 
/**
 * Password reset request form
 */
class ChangePasswordForm extends Model
{
    public $oldpassword;
    public $password;
    public $password_repeat;
 
    public function rules() {
        return [
           
            [['oldpassword','password', 'password_repeat'], 'string'],
            [['oldpassword','password', 'password_repeat'], 'string'],
            [
                'password_repeat', 'compare', 'compareAttribute' => 'password',
                'message' => "Passwords don't match", 'skipOnEmpty' => false,
                'when' => function ($model) {
                    return $model->password !== null && $model->password !== '';
                },
            ],
        ];
    }


public function changePassword($id,$password){
    
    
    if (!$this->validate()) {
        return null;
    }

   // $user = new Users();
    
    $user=User::findIdentity($id);
  
    if(!empty($user)){
        $user->setPassword($password);
    } else {
        return null;
    }
   

    return $user->save() ? $user : null;

}


 
}