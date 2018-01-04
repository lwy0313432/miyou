<?php
/**
 * @describe:
 * @author: liuwy(liuwy@yindou.com)
 * */

/* vim:set ts=4 sw=4 et fdm=marker: */
class indexAction extends ApiBaseAction{
    public function beforeExecute(){
        echo 12345;
        die;
    }
    public function run($args=null){
        $userObj  = new User();
        $this->data = $userObj->getUserInfo(0);
    }
}
