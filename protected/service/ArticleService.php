<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Laojiu
 * Date: 13-10-19
 * Time: 下午2:45
 * To change this template use File | Settings | File Templates.
 */
class ArticleService extends AbstractService{

    /**
     * Returns the static model.
     * @return ArticleService the static model class
     */
    public static function factory()
    {
        return  parent::factory(__CLASS__);
    }

    public function getArticleContent(){

    }
}