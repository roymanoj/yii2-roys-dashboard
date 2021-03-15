<?php

namespace app\models\forms;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class Awsupload extends Model
{
    public $filename;
    public $filepath;
    public $filetype;
    public $fileicon;


    public $bucketname;



    /**
     * @return array the validation rules.
     */
    public function rules()
    {

//'skipOnEmpty' => false, 'extensions' => 'png, jpg ,xlsx'],

        return [
           
            [['filename' ], 'required','on'=>['upload']],
            [['filename'], 'file','maxSize' => 50*1024*1024], 
            [['filepath','filetype','fileicon'], 'string'],
            [['bucketname' ], 'required','on'=>['create']],
           // [['bucketname'],'string','length' => [3, 63]],
            [['bucketname'], 'match', 'pattern' => '/^[a-z0-9-\d_]{6,63}$/i','message'=>'Bucket name must be 6 - 63 characters. Lower case later only. "-" special character allowed.'],
           // ['bucketname', 'match', 'pattern' => '^[a-z0-9-]{6,63}.*?$','message'=>'Bucket name must be 6 - 63 characters and only "-" other than any lower case later'],
            [['bucketname'],'filter','filter'=>'trim'],
            [['bucketname'],'filter','filter'=>'strtolower'],
           
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'filename' => 'File Name',
            'filepath'=>'File Path',
            'filetype'=>'File Type',
            'fileicon'=>'File Icon',
            'bucketname'=>'Bucket Name'
        ];
    }


    public function getTypes(){

       
        $ext=pathinfo($this->filename, PATHINFO_EXTENSION);

        switch ($ext) {
            case "doc":
            case "docx":
            case "xls":
            case "xlsx":
            case "txt": 
            case "pdf":                      
               $this->filetype="Document";
                break;
            case "zip":
            case "rar":
            case "7z":        
                $this->filetype="Compressed";
                break;
            case "mp4":
                $this->filetype="Video";
                break;
            case "mp3":
            case "avi": 
            case "wav":        
                $this->filetype="Audio";
                break; 
            case "jpg":
            case "bmp": 
            case "ttf":    
            case "png":     
            case "jpeg":
                $this->filetype="Image";
                break;  
            case "ppt": 
            case "pptx":
                $this->filetype="Presentation";                   
            default:
                $this->filetype="Unknown File Type";
        }


        return $this->filetype;


    }


   public function getUpload(){

    $path='';
    $s3 = Yii::$app->get('s3');


    $result = $s3->commands()->upload($this->filename, realpath($this->filename))->withAcl('private')->execute();


        if($result)
            return true;



            return false;

   }




   public function fileRemove($file){
    
    $s3 = Yii::$app->get('s3');

    $result = $s3->commands()->delete($file)->withAcl('private')->execute();

    if($result)
        return true;


        return false;

   }



   public function getIcon(){

    $ext=pathinfo($this->filename, PATHINFO_EXTENSION);

    switch ($ext) {


        case "pdf":                      
             $this->fileicon="fa-file-pdf";
             break;

        case "zip":
        case "rar":
        case "7z":        
              $this->fileicon="fa-file-archive-o";
              break;    

       case "doc":  
       case "docx":                      
             $this->fileicon="fa-file-word-o";
             break;

       case "xls":  
       case "xlsx":  
       case "csv":                     
            $this->fileicon="fa-file-excel-o";
            break;
            
       case "ppt":  
       case "pptx":  
           $this->fileicon="fa-file-text";
           break;     
       
        case "txt":  
           $this->fileicon="fa-file-powerpoint-o";
           break;  

        case "mp4":  
          $this->fileicon="fa-file-movie-o";
          break;        

        case "jpg":
        case "bmp": 
        case "ttf":    
        case "png":     
        case "jpeg":
           $this->fileicon="fa-file-image-o";
           break;       

        case "mp3":
        case "avi": 
        case "wav":        
           $this->fileicon="fa-file-audio-o";
           break;      
        default:
           $this->fileicon="fa-file";   
     
    
    
    } 

    return $this-fileicon;

   }// end getIcon





    
    

    



}