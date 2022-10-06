<?php
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Login extends Model
{
    use HasFactory;

    protected $table = 'login';
  
    public function hashPassword($password)
    {
        return md5($password);
    }
}