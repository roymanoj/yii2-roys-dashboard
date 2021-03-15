<?php
namespace app\components;

use Yii;
use yii\helpers\Html;
use yii\base\Component;
use yii\base\InvalidConfigException;

use app\models\Storage;
 
class S3cloud extends Component
{

 public function welcome()
 {
  echo "Hello..Welcome to S3cloud";
 }


 public function showMessage($message){

    echo $message;
 }


public function getFileicon($file){

$fileicon='';    
$ext=pathinfo($file, PATHINFO_EXTENSION);

switch ($ext) {


    case "pdf":                      
        $fileicon="fa-file-pdf text-red";
         break;

    case "zip":
    case "rar":
    case "7z":        
        $fileicon="fa-file-archive text-warning";
          break;    

   case "doc":  
   case "docx":                      
    $fileicon="fa-file-word text-blue";
         break;

   case "xls":  
   case "xlsx":  
   case "csv": 
   case "ods":                     
    $fileicon="fa-file-excel text-green";
        break;
        
   case "ppt":  
   case "pptx":  
    $fileicon="fa-file-powerpoint text-red";
       break;     
   
    case "txt":  
    case "":    
        $fileicon="fa-list-alt text-info";
       break;  

    case "mp4":  
     $fileicon="fa-file-movie text-blue";
      break;   
      
      case "pem":  
      case "ppk":  
        $fileicon="fa-key text-red";
         break;   
         
     case "ini":  
        $fileicon="fa-wrench text-red";
        break;     

    case "jpg":
    case "bmp": 
    case "ttf":    
    case "png":     
    case "jpeg":
      $fileicon="fa-file-image text-pink";
       break;       

    case "mp3":
    case "avi": 
    case "wav":        
       $fileicon="fa-file-audio text-info";
       break;      
    default:
       $fileicon="fa-file ";   
 


} 

return $fileicon;

}// end getIcon




public function getFiletypes($file){

    $filetype='';   
    $ext=pathinfo($file, PATHINFO_EXTENSION);

    switch ($ext) {
        case "doc":
        case "docx":
        case "xls":
        case "xlsx":
        case "txt": 
        case "pdf":                      
           $filetype="Document";
            break;
        case "zip":
        case "rar":
        case "7z":        
            $filetype="Compressed";
            break;
        case "mp4":
            $filetype="Video";
            break;
        case "mp3":
        case "avi": 
        case "wav":        
            $filetype="Audio";
            break; 
        case "jpg":
        case "bmp": 
        case "ttf":    
        case "png":     
        case "jpeg":
            $filetype="Image";
            break;  
        case "ppt": 
        case "pptx":
            $filetype="Presentation";                   
        default:
            $filetype="Unknown File Type";
    }


    return $filetype;


} // End gettype


public function showBucket(){


        $path='';
        $s3 = Yii::$app->get('s3');
        $result = $s3->list($path);


        if(!$result){

            echo "<h2 class=\"text text-danger\">Bucket not available</h2>";
        }


        // Getting Folder Name
 foreach ($result as $r) {
    if (is_array($r)) {
      if (array_key_exists('statusCode',$r)) {
         // echo 'Effective URL: '.$r['effectiveUri'].'<br />';
      } else {
        foreach ($r as $item) {
       //  var_dump($item);
       //  break;
     
          if(substr($item['Key'],-1)=='/') {
          
            //Getting Only Folder name of the location
            $folder=substr($item['Key'],0,-1);   // Deleting the last / string and extracting the folder name
            $url = $s3->getUrl($folder);      
            //echo  '<i class="fa fa-folder text-yellow" style="font-size:3em;"></i><a style="font-size:2em;" href='.$url.'> '.$folder.'</a><br />';
            echo  '<tr><td><i class="fa fa-folder text-yellow" style="font-size:3em;"></i><a style="font-size:2em;" href='.$url.'> '.$folder.'</a></td><td>'.$item['LastModified'].'</td></tr>';
          
          } 
               
        }
      }
    } else {
    
       // echo $r.'<br />';
      }
  }


//Getting File Name
foreach ($result as $r) {
  if (is_array($r)) {
    if (array_key_exists('statusCode',$r)) {
       // echo 'Effective URL: '.$r['effectiveUri'].'<br />';
    } else {
      foreach ($r as $item) {

        if(!(substr($item['Key'],-1)=='/')) {
          
          //Getting Only Folder name of the location
          $folder=$item['Key'];   // Deleting the last / string and extracting the folder name
          $url = $s3->getUrl($folder);    
          $new=str_replace('/', '', $folder) ;
          $button=Html::a('<i class="fa fa-download text-blue" style="font-size:1em;"></i> ', ['/amazon/download?file='.$folder], ['class'=>'btn btn-default']); 
          $button1=Html::a('<i class="fa fa-trash text-red" style="font-size:1em;"></i> ', ['/amazon/remove?file='.$folder], ['class'=>'btn btn-default']); 
          if($s3->exist($new))  {
                $icon=Yii::$app->s3cloud->getFileicon($folder);
                echo  '<tr><td><i class="fa '.$icon.'" style="font-size:3em;"></i><a style="font-size:2em;" href='.$url.'> '.$folder.'</a></td><td>'.$item['LastModified'].'</td><td>'.$button .''.$button1.'</td></tr>';
              }
        } 
             
      }
    }
  } else {
  
     // echo $r.'<br />';
    }
}

}




public function createBucket($bucket='',$key ='') {

    $model=new Storage();
 
    $model->aws = Yii::$app->awssdk->getAwsSdk();
    $model->s3 = $model->aws->createS3();

    $result = $model->s3->createBucket([
        'Bucket' => $bucket,
        'Key' => $key,
    ]);
    //$client->createBucket(['bucket' => 'mybucket']);
    return $result;
  }


 
}