<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsereMdl extends Model
{
    protected $table='users';
    protected $fillable=['role_id','name','username','email','password','remember_token','active'];
    protected $primaryKey='id';
    public $timestamps=true;

   public function role()
    {
          return $this->hasOne('App\Role','id','role_id');
    }

    private function checkIfUserHasRole($need_role)
    {
        return (strtolower($need_role)==strtolower($this->role->name))? true : null;
    }
    public function hasRole($roles)
    {
        if (is_array($roles))
        {
            foreach ($roles as $need_role)
            {
                if($tis->checkIfUserHasRole($need_role))
                {
                    return true;
                }
            }
        }else {
            return $this->checkIfUserHasRole($roles);
        }
        return false;
    }


}
