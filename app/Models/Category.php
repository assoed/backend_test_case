<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;




class Category extends Model
{
    use HasFactory;

    protected $table = 'categories'; // Имя вашей таблицы

    protected $primaryKey = 'id'; // Имя первичного ключа

    protected $fillable = ['name', 'parent_id'];


    // Связь с самой собой (для родительских и дочерних элементов)
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }
}
