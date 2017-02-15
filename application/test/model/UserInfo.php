<?php
/**
 * Created by PhpStorm.
 * User: Jiang
 * Date: 2017/2/10
 * Time: 17:26
 */
namespace app\test\model;
use think\Model;
class UserInfo extends Model{
    protected $table = 'user_info';

    //create
    public function add($data = array()){
        return $this->isUpdate(true)->save($data);
    }

    //update
    public function modify($data = array(), $where = array()){
        if(is_array($where)){
            return 0;
        }
        return $this->isUpdate(true)->save($data, $where);
    }

    //delete
    public function del($data = array()){
        if(empty($data)){
            return 0;
        }
        return $this->where($data)->delete();
    }

    //read one object
    public function getUserInfo($options = array()){
        return $this->where($options['conditions'])->field($options['fields'])->find();
    }

    //read list
    public function getUserInfoList($options = array()){
        if($options['is_page'] == true){
            return $this->field($options['fields'])->where($options['conditions'])->order($options['order'])
                ->page($options['page'],$options['offset'])->group($options['group'])->select();
        }else{
            return $this->field($options['fields'])->where($options['conditions'])->order($options['order'])
                ->group($options['group'])->select();
        }
    }
}