<?php



/**
 *  应用入口
 */
class YUYApplication extends SApplication {
    private $domain;

    protected function init(){
        parent::init();
        $host = Yii::app()->request->hostInfo;
        if( strpos($host,'http://')===0){
            $host = substr($host,7);
        }
  //      $this->domain=Domain::model()->findByAttributes("fdHost=$host");
  //      print_r($host);
    }

    public function getDomainID(){
        if($this->domain)
            return $this->domain->id;
        throw new CHttpException(404,'page not found');
    }

}

?>