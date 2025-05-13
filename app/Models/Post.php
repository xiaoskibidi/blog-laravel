<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

// use Illuminate\Support\Arr;
class Post extends Model
{
    //  protected $table = 'blog_posts';
    use HasFactory;
     protected $fillable = ['title','author','slug','body'];

     public function author(): BelongsTo
     {
        return $this->belongsTo(User::class);
     }
}