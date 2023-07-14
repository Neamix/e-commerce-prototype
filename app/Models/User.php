<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /*** Authunticate User */
    static function login($cred)
    {
       return Auth::attempt(['email' => $cred['email'], 'password' => $cred['password']]);
    }

    /*** Check if product whished */
    public function is_whished($product_id)
    {
        return Auth::user()->whishlist->where('id',$product_id)->count();
    }

    /*** Create New User */
    static function register($cred)
    {
        // Create User
        $user = User::create([
            'name' => $cred['name'],
            'email' => $cred['email'],
            'password' => bcrypt($cred['password'])
        ]);

        // Authunticate User
        $user->login(['email' => $user->email,'password' => $cred['password']]);

        return $user;
    }

    public function addToWhishlist($product_id)
    {
        return Auth::user()->whishlist()->toggle(['product_id' => $product_id]);
    }

    // Relations 
    public function whishlist()
    {
        return $this->belongsToMany(Product::class,'whishlist');
    }
}
