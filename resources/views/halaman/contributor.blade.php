@extends('layout/tampilan')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="margin-top: 50px;">
        <h3 style="text-align: center; color:white">Nama Para Penyusun Module Pembelajaran </h3>
        <div class="row" style="margin-top: 100px;">
            <div class="col-12 col-md-6 col-xl-3 mb-4">
                <div class="card border-0" style="padding: 30px; background-color: #D9D9D9;">
                    <img src="./gambar/puan.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div style="display: flex; justify-content: center;">
                            <h5>Dwi Cahyono R</h5>
                        </div>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3 mb-4">
                <div class="card border-0" style="padding: 30px; background-color: #D9D9D9;">
                    <img src="./gambar/puan.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div style="display: flex; justify-content: center;">
                            <h5>Faiz Rizky S</h5>
                        </div>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3 mb-4">
                <div class="card border-0" style="padding: 30px; background-color: #D9D9D9;">
                    <img src="./gambar/puan.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div style="display: flex; justify-content: center;">
                            <h5>Fikar Dwi R</h5>
                        </div>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3 mb-4">
                <div class="card border-0" style="padding: 30px; background-color: #D9D9D9;">
                    <img src="./gambar/puan.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div style="display: flex; justify-content: center;">
                            <h5>Saiful Hidayat</h5>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
@endsection