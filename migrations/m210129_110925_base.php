<?php

use yii\db\Migration;

/**
 * Class m210129_110925_base
 */
class m210129_110925_base extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
                
         
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

     
$this->createTable('{{%company}}', [  
'id' => $this->primaryKey(),
'companyname'=>$this->string()->unique(),
'comprintname'=>$this->string(),
'compcode'=>$this->string(5),  // can be used for software serial no
'compaddress'=>$this->string(),
'compcity'=>$this->string(30),
'comppin'=>$this->string(6),
'compphone'=>$this->string(25),
'compemail'=>$this->string(100),
'compcontact'=>$this->string(),
'compgstin'=>$this->string(15),
'image'=> $this->string(),
'compstatus'=>$this->integer()->defaultValue('10'),
'updated_at' => $this->timestamp(),
'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
 ], $tableOptions);


 $this->insert('company', [
    'companyname' => 'Demo Company',
    'comprintname'=>'Demo Company',
    'compcode' => '00001',
]);




$this->createTable('user', [  
    'id' => $this->primaryKey(),
    'cid'=>$this->integer()->notNull(),
    'username'=> $this->string()->notNull()->unique(),
    'password_hash' => $this->string()->notNull(),
    'auth_key' => $this->string(32)->notNull(),
    'password_reset_token' => $this->string()->unique(),
    'email' => $this->string()->notNull()->unique(),
    'phone'=> $this->string(20),
    'image'=> $this->string(),
    'status' => $this->smallInteger()->notNull()->defaultValue(10), //10 active 20 inactive 0 deleted
    'usrlevel'=>$this->smallInteger()->notNull()->defaultValue(10), // 10 user 20 admin
    'updated_at' => $this->timestamp(),
    'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
 ]);
 
 $this->addForeignKey(
    'fk-usr-comp-id',
    'user',
    'cid',
    'company',
    'id',
    'CASCADE'
); 


  

             
        
            
    

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
         $this->dropTable('user');
         $this->dropTable('company');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210129_110925_base cannot be reverted.\n";

        return false;
    }
    */
}
