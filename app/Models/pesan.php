<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pesan extends Model
{
 public function tampil(){
     return DB::table('pesan')->get();
 }  

 public function hapuspesan($id){
    DB::table('pesan')->where('id', $id)->delete();
}
public function addpesan($data){
    return DB::table('pesan')->insert($data);
 }


}
