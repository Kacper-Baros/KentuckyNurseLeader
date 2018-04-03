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
        'name', 'email', 'first_name', 'last_name', 'prefix', 'password','verified','email_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function verified()
    {
        $this->verified = 1;
        $this->email_token = null;
        $this->save();
    }

    public function plan_expired()
    {
        $query = "select start_date, expire_date from subscriptions where id = ".$this->user_id." order by expire_date desc limit 1";
        $results = DB::select($query);
        if (count($query) == 0)
        {
            return false;
        }
        if ($query['start_date'] >= $query['expire_date'])
        {
            return true;
        }
        return false;
    }

    public function plan_on_going()
    {
        $query = "select start_date, expire_date from subscriptions where id = ".$this->user_id." order by expire_date desc limit 1";
        $results = DB::select($query);
        if (count($query) == 0)
        {
            return false;
        }
        if ($query['start_date'] < $query['expire_date'])
        {
            return true;
        }
        return false;
    }
}
