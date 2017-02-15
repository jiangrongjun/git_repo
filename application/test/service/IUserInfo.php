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
     * ���һ���û�
     * @param UserInfo $userInfo
     */
    public function addUserInfo($userInfo);

    /*
     * ɾ��һ���û�
     * @param array(int) $userIds
     */
    public function deleteUserInfo($userIds);

    /*
     * �޸��û���Ϣ
     * @param UserInfo $userInfo
     */
    public function updateUserInfo($userInfo);
}