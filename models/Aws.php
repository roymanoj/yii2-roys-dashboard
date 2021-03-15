<?php
namespace app\models;

use Yii;
use yii\base\Model;

use Aws\Sts\StsClient;
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;
use yii\helpers\Html;




class Aws extends Model
{

    function __construct() { 
            $s3Client = new S3Client([
            'profile' => 'default',
            'region' => 'ap-south-1',
            'version' => 'latest'
        ]);
       /* $s3Client = new S3Client([
            'profile' => 'default',
            'region' => 'ap-south-1',
            'version' => 'latest'
        ]);*/
    } // End of constructor
    


function createBucket($s3Client, $bucketName)
{
    try {
        $result = $s3Client->createBucket([
            'Bucket' => $bucketName,
        ]);
        return 'The bucket\'s location is: ' .
            $result['Location'] . '. ' .
            'The bucket\'s effective URI is: ' . 
            $result['@metadata']['effectiveUri'];
    } catch (AwsException $e) {
        return 'Error: ' . $e->getAwsErrorMessage();
    }
}

function createTheBucket()
{
   /* $s3Client = new S3Client([
        'profile' => 'default',
        'region' => 'ap-south-1',
        'version' => 'latest'
    ]);*/

    echo createBucket($s3Client, 'tipl-manoj');
}

// Uncomment the following line to run this code in an AWS account.
// createTheBucket();



public function Upload($bucket,$file_Path){

    $key=basename($file_Path);
    

    try {
        //Create a S3Client
       
        $result = $s3Client->putObject([
            'Bucket' => $bucket,
            'Key' => $key,
            'SourceFile' => $file_Path,
        ]);
    } catch (S3Exception $e) {
        echo $e->getMessage() . "\n";
    }



}


public function listBucket(){

    $s3Client = new S3Client([
        'profile' => 'default',
        'region' => 'ap-south-1',
        'version' => 'latest'
    ]);

    //Listing all S3 Bucket
    $buckets = $s3Client->listBuckets();
    foreach ($buckets['Buckets'] as $bucket) {
    echo "<a href=#>".$bucket['Name'] . "</a><br />";
}
}


public function Download($bucket,$key){

    $s3 = new S3Client([
        'profile' => 'default',
        'version' => 'latest',
        'region'  => 'ap-south-1'
    ]);
    
    try {
        // Get the object.
        $result = $s3->getObject([
            'Bucket' => $bucket,
            'Key'    => $key
        ]);
    
        // Display the object in the browser.
        header("Content-Type: {$result['ContentType']}");
        echo $result['Body'];
    } catch (S3Exception $e) {
        echo $e->getMessage() . PHP_EOL;
    }
}




public function showBucket($bucket){

    $s3 = new S3Client([
        'profile' => 'default',
        'version' => 'latest',
        'region'  => 'ap-south-1'
    ]);
    
    // Retrieve the list of buckets.
    $result = $s3->listBuckets();
    
    try {
        // Retrieve a paginator for listing objects.
        $objects = $s3->getPaginator('ListObjects', [
            'Bucket' => $bucket
        ]);
    
        echo "Keys retrieved! form bucket ".$bucket . PHP_EOL;
        
       
        // Print the list of objects to the page.
        foreach ($objects as $object) {
            echo $object['Key'] . PHP_EOL;
        }
    } catch (S3Exception $e) {
        echo $e->getMessage() . PHP_EOL;
    }
}


public function browse($bucket='',$prefix='') {
    $s3 = new S3Client([
        'profile' => 'default',
        'version' => 'latest',
        'region'  => 'ap-south-1'
    ]);

    $result = $s3->listObjects(['Bucket' => $bucket,"Prefix" => $prefix])->toArray();
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
            $url = '#';//$s3->getUrl($folder);      
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
          $url ='#'; //$s3->getUrl($folder);    
          $new=str_replace('/', '', $folder) ;
          $button=Html::a('<i class="fa fa-download text-blue" style="font-size:1em;"></i> ', ['/amazon/download?file='.$folder], ['class'=>'btn btn-default']); 
          $button1=Html::a('<i class="fa fa-trash text-red" style="font-size:1em;"></i> ', ['/amazon/remove?file='.$folder], ['class'=>'btn btn-default']); 
          if($s3->doesObjectExist($bucket,$new))  {
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
    
    
    public function listmyBucket($bucket='',$prefix=''){


        $s3 = new S3Client([
            'profile' => 'default',
            'version' => 'latest',
            'region'  => 'ap-south-1'
        ]);
    
        $result = $s3->listObjects(['Bucket' => $bucket,"Prefix" => $prefix])->toArray();


      


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
                $icon=getFileicon($folder);
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
    


} // EOC