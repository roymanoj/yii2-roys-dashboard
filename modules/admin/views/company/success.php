<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Success';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
   
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
        
          
        <span class="label label-success center-block" style="font-size:1.8em;">Company Created Successfully</span><br>
        
        <span class="label label-info center-block" style="font-size:1.8em;">Company Name:<?=$model->companyname ?></span><br>
        
      
      <h4>User Details</h4>  
        <ul class="list-group">
            <li class="list-group-item">User Name:<?=$model->comuser?> </li>
            <li class="list-group-item">Email:<?=$model->comemail ?></li>
            <li class="list-group-item">Phone:<?=$model->comphone ?></li>
            <li class="list-group-item">Password: ********** (As Set While Creation)</li>

        </ul>
                
        
    
    
    
    </div>


</div>