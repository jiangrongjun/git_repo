<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/14
 * Time: 15:00
 */

/*
 * Logic负责代码的核心业务逻辑部分，从继承上看其实它也是Model的一部分，只是为了和基础的crud操作区分，便于复用
 */
namespace app\test\logic;
use think\Model;
class UserInfo extends Model{

    //注册
    public function register(){

    }

    //登录
    public function login(){

    }

    //修改密码
    public function modifyPwd(){

    }

    //退出
    public function loginOut(){

    }

    //检测账号是否存在
    public function checkAccount(){

    }

    ############################################
    ###----关联用户忘记密码与激活信息动作-----###
    ############################################

    //申请激活账号
    public function applyActiveAccount(){

    }

    //激活账号
    public function activeAccount(){

    }

    //忘记密码第一步-确认账号
    public function forgetPwdStepOne(){

    }

    //忘记密码第二步-邮箱中链接进行核对用户信息与口令
    public function forgetPwdStepTwo(){

    }

    //过渡页面-验证重置密码口令
    public function verfiyResetPwdToken(){

    }

    //重置密码
    public function resetPwd(){

    }
}