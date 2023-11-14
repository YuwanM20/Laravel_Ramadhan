@extends('admin.fn')

@section('isi')

<style>
    .dark-mode #card-body {
  background-color: #454545;
}
.dark-mode label {
  color: #fff;
}

label{
    color: #000;
}
#card-body{
    background: #fff;
}



</style>

<form action="/savepesan" method="POST" enctype="multipart/form-data">
    @csrf

<div class="card shadow mb-4">
    <div class="card-header py-3" style="background: #18d26e">
        <h4 class="m-0  text-white">Kirim Pesan</h4>
    </div>
    <div class="card-body" id="card-body">

        <div class="form row">

           {{-- NAMA --}}
           <div class="form-group col-sm-6">
            <br>
               <label for="formGroupExampleInput2">Nama</label>
               <input name="nama" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Nama">
               @error('nama')
               <small class="form-text text-danger">{{$message}}</small>
           @enderror
             </div>

             <div class="form-group col-sm-6">
                <br>
               <label for="exampleFormControlSelect1">Pilih type Kamu</label>
               <select class="form-control" name="status" id="exampleFormControlSelect1">
                   <option value="Wibu">Wibu</option>
                 <option value="Orang" >orang</option>
                 <option value="Cantik">cantik</option>
                 <option value="Ganteng">ganteng</option>
                 <option value="Gak main ep ep">gak main ep ep</option>
                 <option value="Galak">galak</option>
               </select>
             </div>
             

             <div class="form-group col-sm-6">
                <br>
                   <label for="formGroupExampleInput2">Pesan</label>
                   <div class="form-group mt-3">
                    <textarea class="form-control" type="text" name="pesan" rows="5" id="formGroupExampleInput2" placeholder="Pesan Kaka" required></textarea>
                    @error('pesan')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
                  </div>
                
                 </div>

                
             
             <input type="hidden" name="tgl" value="<?php echo date("Y-m-d"); ?>">



           </div>
           <br>
           <button type="submit" class="btn " style="background: #18d26e" class="text-left" >Tambah</button>
         </form>
         
    </div>
</div>
<a href="/ramadhan" type="button" class="btn text-white" style="background: #f39; float: right">Kembali</a>
    <br>

    @endsection
