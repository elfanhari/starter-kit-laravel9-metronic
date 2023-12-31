<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    protected $guarded = ['id'];

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

    public function setPasswordAttribute($password) {
      $this->attributes['password'] = bcrypt($password);
    }

    public function role(){
      return $this->belongsTo(Role::class);
    }

    // HELPER
    public function isAktif() {
      return $this->is_aktif == '1';
    }

    public function notAktif() {
      return $this->is_aktif == '0';
    }

    public function is_aktif() {
      return $this->is_aktif == '1' ? '<span class="badge badge-lg badge-light-success">AKTIF</span>' : '<span class="badge badge-lg badge-light-danger">NON-AKTIF</span>';
    }
}
