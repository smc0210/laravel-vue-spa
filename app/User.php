<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
//        DB::listen(function($sql) {
//            var_dump($sql->sql, $sql->bindings);
//        });
        //DB::enableQueryLog();
        // query blah blah
        //DB::getQueryLog();

//        select * from `profiles` where `profiles`.`user_id` = ? and `profiles`.`user_id` is not null limit 1
        return $this->hasOne(Profile::class);
    }

    public function experience()
    {
        return $this->hasOne(Experience::class);
    }

    public function achievements()
    {
        return [
            [
                'name'  => 'forwasrd',
                'title' => 'cors token',
            ],
            [
                'name'  => 'test',
                'title' => 'lorem ipsum',
            ],
        ];
    }
}
