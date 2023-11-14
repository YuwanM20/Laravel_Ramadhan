<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tebak Angka</title>
  </head>
  <body style="background: #f39;" > 

    <div class="container">

      <!-- Outer Row -->
      <div class="row justify-content-center">

          <div class="col-xl-5 col-md-9">

              <div class="card o-hidden border-0 shadow-lg my-5">
                  <div class="card-body p-0">
                      <!-- Nested Row within Card Body -->
                      <div class="row">
                          <div class="col-sm-6 d-none d-lg-block"></div>
                          <div class="col-lg-12">
                              <div class="p-5">
                                  <div class="text-center">
                                    <h3>Game Tebak Angka 1 - 100</h3>
                                    <h6>Yuwanm20</h6>
                                  </div>
                                  <br>
                                  <br>
                                      
                                      <div class="form-group">
                                          <input class="form-control form-control-user"
                                          type="number" name="inputan" id="inputan"
                                              placeholder="Masukan Username">
                                      </div>
                                      <br>
                                      
                                      <button class="btn text-white" id="cek" onclick="cekAngka()">
                                          Cek Angka
                                      </button>
                                      <br>
                                      <br>
                            
                               
                                  <button class="btn text-white" id="reset" onclick="randomAngka()">
                                    Reset Angka
                                </button>

                                  <hr>
                                  <br>
                                  {{-- <div class="text-center " >
                                    <a class="medium" style="color: #f39;" href="/game1">BUKA DI WEB</a>
                                </div> --}}
                                  {{-- <div class="text-center " >
                                      <a class="medium" style="color: #f39;" href="/">Kembali</a>
                                  </div> --}}
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>

      </div>

  </div>
  <script type="text/javascript">
    var angka;
    function randomAngka(){
     angka = Math.floor(Math.random() * 100);
     return angka;     
    }
    randomAngka();
    function cekAngka() {
     var inputan = document.getElementById('inputan').value;
     if (inputan == angka) {
      alert('BENAR Kaka Hebat angkanya adalah '+ angka);
     }else if(inputan<angka){
      alert('Kaka Angka terlalu kecil')
     }else{
      alert('Kaka Angka terlalu besar')
     }
    }
   </script>

  <style>
    #cek{
         background: #f39;
         align-items: center;
         width: 100%;
        }
        #reset{
         background: #f39;
         align-items: center;
         width: 100%;
        }
        
  </style>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>