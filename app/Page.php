<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Page extends Model
{
    /**
     * Массово присваиваемые атрибуты.
     *
     * @var array
     */
    protected $fillable = ['name', 'alias', 'text', 'linked_products', 'active'];

    public static function deletePage($idPage)
    {
        DB::table('pages')->where('id', $idPage)->delete();
    }
}
