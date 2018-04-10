<?php
namespace App\Models;
use App\BaseModels\BaseUserModel;

class UserModel extends BaseUserModel
{
    public function saveUser($name,$email,$password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->passsword = bcrypt($password);
        $this->save();

    }

}