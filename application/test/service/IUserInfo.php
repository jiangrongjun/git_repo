<?php
/**
 * Created by PhpStorm.
 * User: Jiang
 * Date: 2017/2/15
 * Time: 18:32
 */
namespace app\test\service;
interface IUserInfo{
    /*
     * 添加一个用户
     * @param UserInfo $userInfo
     */
    public function addUserInfo($userInfo);

    /*
     * 删除一个用户
     * @param array(int) $userIds
     */
    public function deleteUserInfo($userIds);

    /*
     * 修改用户信息
     * @param UserInfo $userInfo
     */
    public function updateUserInfo($userInfo);
}