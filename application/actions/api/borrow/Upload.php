<?php
/**
 * @describe:上传用户身份证接口
 * @author: weixiaotong(weixt@yindou.com)
 * */
/* vim:set ts=4 sw=4 et fdm=marker: */
class uploadAction extends ApiBaseAction{
    private $file_name = '';
    public function beforeExecute(){
        $this->file_name        = isset($_FILES['img_name'])?$_FILES['img_name']:array();
        /*if (!$this->uid) {
            WLog::warning('uid is error'.json_encode(array('uid'=>$this->uid)), array(), 'add_first');
            throw new CException(Errno::USER_IS_NO_LOGIN_ERROR);
        }*/
        if(!$this->file_name){
            throw new CException(Errno::USER_UPLOAD_FILE_IS_ERROR);
        }
    }
    public function run($args=null){
        $upload=new UploadYpy();
        $res=$upload->upload_image($admin_id=0, Config::UPLOAD_TYPE,19,Config::UPLOAD_DEFAULT_TITLE, $this->file_name);
        $this->data['list']=$res;
    }
}
