<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body class="vh-100 d-flex justify-content-center align-items-center">

    <div class="row row shadow" style="min-width: 780px;">
        <div class="col-6  d-flex flex-column justify-content-center" style="background-color: #FD841F; ">
            <h4 class="text-center " style="font-weight: bold; color: white; ">Welcome to Create Account</h4>
            <p class="text-center fs-7" style="color: white; margin-top: 6px; font-size: 15px; ">You have Account ?</p>
            <button type="button mx-5" class="btn btn-primary rounded-pill bg-transparent" style="--bs-btn-padding-y: .50rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; width: 70px; 
            margin-left: 152px; border-color: white;">
                <a href="Login.php" style="color: white;"> Sign In </a> </button>
        </div>
        <div class="col-6 p-4" style="background-color: #fcfcfc; ">
            <form action="actionRegis.php" method="POST">
                <div class="mb-3">
                    <h2 class="mb-4 " style=" margin-bottom: 24px; font-size: 25px;">Create Account</h2>
                    <label for="exampleInputEmail1" class="form-label " style="font-size: 14px ">No KTM</label>
                    <input type="text" class="form-control rounded-pill" name="no_ktm" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label " style="font-size: 14px ">No Plat</label>
                    <input type="text" class="form-control rounded-pill" name="no_plat" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label" style="font-size: 14px ">Email</label>
                    <input type="email" class="form-control rounded-pill" name="email" id="exampleInputPassword1 ">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label " style="font-size: 14px ">Alamat</label>
                    <input type="text" class="form-control rounded-pill" name="alamat" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label " style="font-size: 14px ">Jenis Kendaraan</label><br>
                    <select name="jenis_kendaraan" class="rounded-pill" style="width: 350px; padding: 5px;">
                        <option value="Mobil">Mobil</option>
                        <option value="Motor">Motor</option>
                    </select>
                </div>

                <!-- <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
                <button type="button mx-5" class="btn btn-primary rounded-pill" style="--bs-btn-padding-y: .50rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; 
                width: 350px;  height: 40px; background-color: #FD841F; border: none; font-size: 14px; color: black; margin-top: 10px;">
                    Sign In
                </button>
            </form>
        </div>

    </div>



</body>

</html>

<style>
    body {
        
        background: #fff;
        background-image: url('bg.png');
        background-size: 600px;
        background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.97) 0%, rgba(255, 255, 255, 0.97) 100%), url('bg.png');
    }

    
</style>