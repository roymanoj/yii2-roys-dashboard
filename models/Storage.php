<?php
namespace app\models;
use Yii;
use yii\base\Model;

class Storage extends Model
{

  public $aws;
  public $s3;

   function __construct() {
     $this->aws = Yii::$app->awssdk->getAwsSdk();
     $this->s3 = $this->aws->createS3();
  }





public function browse($bucket='',$prefix='') {
    $result = $this->s3->listObjects(['Bucket' => $bucket,"Prefix" => $prefix])->toArray();
    foreach ($result as $r) {
      if (is_array($r)) {
        if (array_key_exists('statusCode',$r)) {
            echo 'Effective URL: '.$r['effectiveUri'].'<br />';
        } else {
          foreach ($r as $item) {
            echo $item['Key'].'<br />';
          }
        }
      } else {
          echo $r.'<br />';
        }
    }
  }



  public function download($bucket='',$key ='') {
    //get the last object from s3
    //$object = end($result['Contents']);
    // $key = $object['Key'];
    $file = $this->s3->getObject([
        'Bucket' => $bucket,
        'Key' => $key,
    ]);
    return $file;
    // save it to disk
  }


  public function create($bucket='',$key ='') {

    $result = $this->s3->createBucket([
        'Bucket' => $bucket,
        'Key' => $key,
    ]);
    //$client->createBucket(['bucket' => 'mybucket']);
    return $result;
  }




}