<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * 会员
 * @package App\Model
 */
class Member extends Model
{
    protected $table = 'member';

    /**
     * @param $name  姓名
     * @param $email 电子邮件
     * @param $mobile 手机
     * @param string $password 密码
     * @return bool|mixed
     */
    public static function saveMember($name = '', $mobile = '', $password = '123456')
    {
        if (\Session::get('id')){
            return \Session::get('id');
        }
        //查询会员信息
        $member = self::where('username', '=', $mobile)->first();
        if (empty($member)) {//会员不存在：新增
            $member_model = new self;
            $member_model->username = $mobile;
            $member_model->password = md5($password);
            $member_model->name = $name;
            $member_model->mobile = $mobile;
            $member_model->created_at = date('Y-m-d H:i:s');
            $rs = $member_model->save();
            if ($rs) {
                return $member_model->id;
            } else {
                return false;
            }
        } else {
            return true;
        }
    }
}
