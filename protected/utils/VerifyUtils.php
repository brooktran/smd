<?php
/**
 * 验证类工具
 * Created by cenyc.
 * Date: 13-8-6
 * Time: 下午6:03
 * To change this template use File | Settings | File Templates.
 */
class VerifyUtils{
    //正则验证 用户名 邮箱 电话 author cenyc 2013年5月20日
    public function checkLoginName($name){
        return preg_match('/^[a-zA-Z0-9_]{4,16}$/u',$name);
    }
    public 	function checkEmail($email)
    {
        return preg_match('/^[_.0-9a-z-a-z-]+@([0-9a-z][0-9a-z-]+.)+[a-z]{1,4}$/',$email);
    }
    public function checkMobile($str){
        return preg_match("/^13[0-9]{1}[0-9]{8}$|15[0189]{1}[0-9]{8}$|189[0-9]{8}$/", $str);
    }
    //正则验证 end

    /**
     * 邮箱,手机号码,帐号 认证
     *
     * @param $account  帐号
     * @return string
     *
     * @author cenyc
     */
    public function checkAccount($account){
        $userService = new UserService();
        if(is_numeric($account)){
            if(self::checkMobile($account)){
                if($userService->isExistPhoneNumber($account)){
                    return 'exist';
                }
                return 'successMobile';
            }else{
                return 'mobile_Fail';
            }
        }
        if(is_string($account)&&stristr($account,'@')){
            if(self::checkEmail($account)){
                if($userService->isExistEmail($account)){
                    return 'exist';
                }
                return 'successEmail';
            }else{
                return 'email_Fail';
            }
        }
        if(self::checkLoginName($account)){
            if($userService->isExistAccount($account)){
                return 'exist';
            }
            return 'successLoginName';
        }else{
            return 'loginName_Fail';
        }
    }

    /**
     * 生成一段随机码
     * @param length 长度
     * @param type 类型 1：纯数字 ，2：纯英文，3：数字、英文混合
     * @author john
     * @return string
     */
    public static function getRandomCode($length,$type=1){
        switch ($type){
            case 1 :
                $originCode = '0123456789';
                break;
            case 2 :
                $originCode = 'abcdefghijklmnopqrstuvwxyz';
                break;
            case 3 :
                $originCode = '0123456789abcdefghijklmnopqrstuvwxyz';
                break;
            default:
                $originCode = '0123456789';
        }
        $code = '';
        $codeLenth = strlen($originCode);
        for($i=0;$i<$length;$i++){
            $index = rand(0, $codeLenth-1);
            $code .= $originCode[$index];
        }
        return $code;
    }

}