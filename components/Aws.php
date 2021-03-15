<?php
namespace app\components;

use Yii;
use yii\helpers\Html;
use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\helpers\Url;

use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;
use Aws\S3\ObjectUploader;
use Aws\S3\S3ClientInterface;



class Aws extends Component
{ 


    public function getClient() { 

      $secret='secret key from amazon';
      $key='Key from amazon';
    //  $provider = CredentialProvider::defaultProvider();
        $s3Client = new S3Client([
      //  'profile' => 'default',
        'region' => 'ap-south-1',
        'version' => 'latest',
       'credentials' => [
          'key' => $key,
          'secret' => $secret,
    ]
     //   'credentials' => CredentialProvider::defaultProvider(),
     //   'credentials' => CredentialProvider::defaultProvider()
     //   'credentials' => $provider
        ]);

        return $s3Client;
  
    } // End of constructor

    public function getFileicon($file){

        $fileicon='';    
        $ext=pathinfo($file, PATHINFO_EXTENSION);
        
        switch (strtolower($ext)) {
        
        
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
        
            switch (strtolower($ext)) {
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


       
public function showBucket($bucket='',$prefix='') {
       $s3 = $this->getClient();

        echo '<h2 class="text text-success text-center">Bucket Name:  <b class="text text-danger">'.$bucket.'</b></h2><br />';

          $table='<table class="table table-hover">
          <thead>
            <tr>
              <th>Name</th>
              <th>Last Update</th>
              <th> Size </th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>'  ;

          $tablebottom='</tbody>
          </table>
        </div>
        
        <br />
        <br />';

echo $table;

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
                   // $url = '#';//$s3->getUrl($folder);    
                   $url=Url::base().'/aws/open?bucket='.$bucket.'&key='.$folder;
                  
                   $date=date('d-m-Y h:i:s',strtotime($item['LastModified']));
                    $button=Html::a('<i class="fa fa-folder-open text-blue" style="font-size:1em;"></i> ', ['/aws/open?bucket='.$bucket.'&key='.$folder], ['class'=>'btn btn-default']); 
                    $button1=Html::a('<i class="fa fa-trash text-red" style="font-size:1em;"></i> ', ['/aws/remove?bucket='.$bucket.'&key='.$folder], ['class'=>'btn btn-default']);   
                    $button2=Html::a('<button class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></button>', $url, [
                      'title' => Yii::t('app', 'delete'),
                      'data' => [
                        'confirm' => 'Are you sure you want to delete the record?',
                        'method' => 'post',
                    ],
                      ]);
                    //echo  '<i class="fa fa-folder text-yellow" style="font-size:3em;"></i><a style="font-size:2em;" href='.$url.'> '.$folder.'</a><br />';
                    echo  '<tr><td><i class="fa fa-folder text-yellow" style="font-size:3em;"></i><a style="font-size:2em;" href='.$url.'> '.$folder.'</a></td><td>'.$date.'</td><td>'.$item['Size'].'</td><td>'.$button .''.$button1.'</td></tr>';
                  
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
                  $urldelete=Url::base().'/aws/remove?bucket='.$bucket.'&keyname='.$folder;
                  $date=date('d-m-Y h:i:s',strtotime($item['LastModified'])); 
                  $size=Yii::$app->aws->getSize($item['Size']);
                  $new=str_replace('/', '', $folder) ;
                //  $button=Html::a('<i class="fa fa-download text-blue" style="font-size:1em;"></i> ', ['/aws/download?bucket='.$bucket.'&keyname='.$folder], ['class'=>'btn btn-default']); 
                  $button=Html::a('<button class="btn btn-success btn-xs"><i class="fa fa-download" style="font-size:1.5em;"></i></button>', ['/aws/download?bucket='.$bucket.'&keyname='.$folder],['title' => Yii::t('app', 'Download'),]); 
                 // $button1=Html::a('<i class="fa fa-trash text-red" style="font-size:1em;"></i> ', ['/aws/remove?bucket='.$bucket.'&keyname='.$folder], ['class'=>'btn btn-default']); 
                  $button2=Html::a('<button class="btn btn-danger btn-xs"><i class="fa fa-trash" style="font-size:1.5em;"></i></button>', $urldelete, [
                    'title' => Yii::t('app', 'Delete'),
                    'data' => [
                      'confirm' => 'Are you sure you want to delete the record?',
                      'method' => 'post',
                  ],
                    ]);
                 
                  if($s3->doesObjectExist($bucket,$new))  {
                        $icon=Yii::$app->aws->getFileicon($folder);
                        echo  '<tr><td><i class="fa '.$icon.'" style="font-size:3em;"></i><a style="font-size:2em;" href='.$urldelete.'> '.$folder.'</a></td><td>'.$date.'</td><td>'.$size.'</td><td>'.$button .' '.$button2.'</td></tr>';
                      }
                } 
                     
              }
            }
          } else {
          
             // echo $r.'<br />';
            }
        }

        echo $tablebottom;
          }
        


          public function listAllBuckets(){

            $s3Client = $this->getClient();
        
            //Listing all S3 Bucket
            $table='<table class="table table-hover">
            <thead>
              <tr>
                <th>Name</th>
                <th>Last Update</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>'  ;
  
            $tablebottom='</tbody>
            </table>
          </div>
          
          <br />
          <br />';

          

          echo $table;

            $buckets = $s3Client->listBuckets();
            foreach ($buckets['Buckets'] as $bucket) {
                $url=Url::base().'/aws/openbucket?bucket='.$bucket['Name'];
                $button=Html::a('<i class="fa fa-folder-open text-blue" style="font-size:1em;"></i> ', ['/aws/openbucket?bucket='.$bucket['Name']], ['class'=>'btn btn-default']); 
                $button1=Html::a('<i class="fa fa-trash text-red" style="font-size:1em;"></i> ', ['/aws/removebucket?bucket='.$bucket['Name']], ['class'=>'btn btn-default']);
                $actionButton=Html::a($bucket['Name'], ['/aws/open?bucket='.$bucket['Name']], ['class'=>'btn btn-default'])  ;   
                
            echo "<tr><td><h3><i class=\"fa fa-cloud text-red \"></i><a href=".$url.">".' '.$bucket['Name'] . "</a></h3></td><td></td><td>".$button .''.$button1."</td></tr>";
        }
            echo $tablebottom;

        }     
        
        

   public function download($bucket='',$keyname=''){

    $s3 =$this->getClient();
    
    try {
        // Get the object.
        $result = $s3->getObject([
            'Bucket' => $bucket,
            'Key'    => $keyname,
            'ACL' => 'private'
        ]);
    
       // var_dump($result);
        // Display the object in the browser.
        header("Content-Type: {$result['ContentType']}");
        header ( "Content-Disposition: attachment; filename=" . $keyname);
        header ('Pragma: public');
       // header ('Pragma: private');
        echo $result ['Body'];
        die ();
        //return $result;
       // return Yii::$app->response->sendFile($path, $filename);
      //  echo '<img src="'.$result['Body'].'" alt="My File">';
       // echo "Got the file";
    } catch (S3Exception $e) {
        echo $e->getMessage();
    }
   }  
   
   

 public function deleteFile($bucket='',$keyname=''){

    $s3 =$this->getClient();

        
    // 1. Delete the object from the bucket.
    try
    {
      //  echo 'Attempting to delete ' . $keyname . '...<br />' ;
    
        $result = $s3->deleteObject([
            'Bucket' => $bucket,
            'Key'    => $keyname
        ]);

       // var_dump($result);
    
       if($result)
            return true;

            return false;
    }
    catch (S3Exception $e) {
        exit('Error: ' . $e->getAwsErrorMessage() .'<br />');
    }
    
    // 2. Check to see if the object was deleted.
    try
    {
        echo 'Checking to see if ' . $keyname . ' still exists...<br />' ;
    
        $result = $s3->getObject([
            'Bucket' => $bucket,
            'Key'    => $keyname
        ]);
    
        echo 'Error: ' . $keyname . ' still exists. <br />';
    }
    catch (S3Exception $e) {
        exit($e->getAwsErrorMessage());
    } 

 } 



 public function uploadFile($bucket='',$model=''){

    $s3 = $this->getClient();

   // $keyname=basename($file_Path);

   $file_Path =$model->filename->tempName;
   $key = basename($model->filename->name);
   $file_content=file_get_contents($model->filename->tempName);



    try {
        // Upload data.
        $result = $s3->putObject([
            'Bucket' => $bucket,
            'Key'    => $key,
            'Body' =>  $file_content, //fopen($file_Path, 'r'),
            'Content-Type' => $model->filename->type,
            'SourceFile' => $file_Path,
            'ACL'    => 'private' // public-read
        ]);
    
        // Print the URL to the object.
        if($result)
            return true;

            return false;
    } catch (S3Exception $e) {
               return $e->getMessage();
    }


 }



 public function objectUpload($bucket='',$model=''){

  $s3 = $this->getClient();

  $file_Path =$model->filename->tempName;
  $key = basename($model->filename->name);
  // $file_content=file_get_contents($model->filename->tempName);

$source = fopen($file_Path, 'rb');

$uploader = new ObjectUploader(
  $s3,
  $bucket,
  $key,
  $source
);


do {
  try {
      $result = $uploader->upload();
      if ($result["@metadata"]["statusCode"] == '200') {
        return true;
      }
      print($result);
  } catch (MultipartUploadException $e) {
      rewind($source);
      $uploader = new MultipartUploader($s3Client, $source, [
          'state' => $e->getState(),
      ]);
  }
} while (!isset($result));


 }




 public function getSize($size){

      $result='';

      if($size<1024)
                $result =$size.' Bit ';


      if($size>=1024 && $size<1048576) 
               $result =round($size/1024,2) .' Kb';     
               
               

      if($size>=1048576)
                $result =round($size/1048576,2) .' Mb';
      


return $result;
      
}
   



public function createBucket($bucket=''){

  $s3 = $this->getClient();
 $result=null;
  
   try {


    if(!$s3->doesBucketExist($bucket))  
        {          
          $result = $s3->createBucket([
            'Bucket' => $bucket,
         ]);      
         
        }


       

   

     if($result)
          return true;
                       
          return false;   
        /*
        return 'The bucket\'s location is: ' .
            $result['Location'] . '. ' .
            'The bucket\'s effective URI is: ' . 
            $result['@metadata']['effectiveUri'];   */
    } catch (AwsException $e) {
   
        return 'Error: ' . $e->getAwsErrorMessage();
    }

}



}