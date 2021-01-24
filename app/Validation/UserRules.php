<?php 
namespace App\Validation;

use App\Models\UserModel;

class UserRules{
    /** validate login username and password */
    public function validateUser(string $str, string $fields, array $data){
        $model= new UserModel();
        $user= $model->where('username', $data['username'])->first();

        if (!$user) {
            return false;
        }else{ 
            return password_verify($data['password'], $user['password']);
        }

    }
    /** validate edit password (check old password) */
    public function vaolidateOldPassword(string $str, string $fields, array $data){
        $model = new UserModel();
        $user = $model->where('username', $data['username'])->first();

        if(!$user){
            return false;
        }else {
            return password_verify($data['opassword'], $user['password']);
        }

    }
}