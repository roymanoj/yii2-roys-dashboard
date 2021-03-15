# yii2-roys-dashboard
Basic Dashboard with Yii2 &amp; AdminLTE 3 along with User registration and login . Key layout to start any basic application

**Installation**

        composer create-project roymanoj/yii2-roys-dashboard

then run

        Composer Install


Setup config/db.php

         return [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=roys-dashboard',
        'username' => 'root',
        'password' => 'tipl',
        'charset' => 'utf8',

        // Schema cache options (for production environment)
        //'enableSchemaCache' => true,
        //'schemaCacheDuration' => 60,
        //'schemaCache' => 'cache',
        ];



 To migrate database       

        php yii2 migrate/up



To add Admin Account - On your browser

        localhost/yii2-roys-dashboard/app/site/add-admin


for Amzon S3 Credentials (components/Aws.php)



getclient for windows 10
===========================

  public function getClient() { 

      $secret='your secret key generated from amazon account';
      $key='key value of amazon ';
    
        $s3Client = new S3Client([
      //  'profile' => 'default',
        'region' => 'ap-south-1',
        'version' => 'latest',
       'credentials' => [
          'key' => $key,
          'secret' => $secret,
    ]

  }




getclient for ubuntu / linux
===========================

public function getClient() { 

    
   
        $s3Client = new S3Client([
       'profile' => 'default',
        'region' => 'ap-south-1',
        'version' => 'latest',

// make sure your "credentials" files is in the .aws folder under root directory


}  

