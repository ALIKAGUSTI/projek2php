<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FORM REGISTER</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<h1 align="center">Form Pemesanan</h1>
<form action="index.php" method="POST">
   <div class="form-group row" >
    <label for="namapemesanan" class="col-4 col-form-label">  Nama pemesanan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="namapemesanan" name="namapemesanan" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="almt" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <input id="almt" name="almt" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="jmlhpesanan" class="col-4 col-form-label">Jumlah pesanan</label> 
    <div class="col-8">
      <select id="jmlhpesanan" name="jmlhpesanan" class="custom-select">
        <option value="buku tulis ">buku tulis</option>
        <option value="pensil">pensil</option>
        <option value="pulpen">pulpen</option>
        <option value="penggaris">penghapus </option>
        <option value="penslwarna">pensil warna </option>
        <option value="pngrs">penggaris</option>
      </select>
    </div>
  </div>
  
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Merk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="merk" id="merk_0" type="radio" class="custom-control-input" value="Sinar Dunia"> 
        <label for="merk_0" class="custom-control-label">Sinar Dunia</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="merk" id="merk_1" type="radio" class="custom-control-input" value="Joyko"> 
        <label for="merk_1" class="custom-control-label">Joyko</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="merk" id="merk_2" type="radio" class="custom-control-input" value="Stabilo"> 
        <label for="merk_2" class="custom-control-label">Stabilo</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="merk" id="merk_3" type="radio" class="custom-control-input" value="Jotter"> 
        <label for="merk_3" class="custom-control-label">Jotter</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="komentar" class="col-4 col-form-label">Komentar</label> 
    <div class="col-8">
      <textarea id="komentar" name="komentar" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="kirim" type="submit" class="btn btn-primary">kirim</button>
    </div>
  </div>
</form>

</body>
</html>