<html>
<head>

    <title>Edit Data Pickup - Care of Clean</title>
 <script src="https://kit.fontawesome.com/2c8521810d.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <style type="text/css">

body {

    margin: 0;

    padding: 0;

   }

 * {

  box-sizing: border-box;

}

form {

  padding: 1em;

  background: #f9f9f9;

  border: 1px solid #c1c1c1;

  margin-top: 2rem;

  max-width: 600px;

  margin-left: auto;

  margin-right: auto;

  padding: 1em;

}

form input {

  margin-bottom: 1rem;

  background: #fff;

  border: 1px solid #9c9c9c;

}

form button {

  background: lightgrey;

  padding: 0.7em;

  border: 0;

}












label {

  text-align: right;

  display: block;

  padding: 0.5em 1.5em 0.5em 0;

}

input {



  padding: 0.7em;

  margin-bottom: 0.5rem;

}

input:focus {

  outline: 3px solid green;

}

select {

  width: 100%;

  padding: 0.7em;

  margin-bottom: 0.5rem;

}

select:focus {

  outline: 3px solid green;

}

@media (min-width: 400px) {

  form {

    overflow: hidden;

  }
  a{
      float: left;
  }

  label {

    float: left;



  }

  input {

    float: left;


  }



    select {

    float: left;



  }

  button {

    float: left;



  }

 </style>


</head>

<body>

    <form action="{{ route('simpaneditpickup')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <a href="{{route('dashboard_view')}}" class="btn btn-warning"><i class="fas fa-chevron-left"></i> Kembali</a > <br><br>
                <div class="form-group">
                    <input type="hidden" name="fotolama" value="{{$data->foto}}">
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <label for='name' class='control-label'>Pembayaran:</label>
                    <select name="pembayaran" class="form-control">
                        <option value="{{$data->pembayaran}}">{{$data->pembayaran}}</option>
                        <option value="POINT"> POINT </option>
                        <option value="CASH"> CASH </option>
                        <option value="VOUCHER"> VOUCHER </option>
                    </select>
                  </div>

                  <div class="form-group">
                <label for='name' class='control-label'>Jenis Sampah:</label>
                <select name="jenis_sampah" class="form-control">
                     <option value="{{$data->jenis_sampah}}">{{$data->jenis_sampah}}</option>
                     <option value="Alumnium"> Alumnium </option>
                     <option value="Kertas"> Kertas </option>
                     <option value="Plastik"> Plastik </option>
                </select>
                  </div>

                  <div class="form-group">
                    <label for='name' class='control-label'>Berat Sampah:</label>
                    <input type="number" name="berat_sampah" class="form-control" placeholder="Berat Sampah" value="{{$data->berat_sampah}}" min= "1" required="">
                  </div>

                  <div class="form-group">
                    <label for='name' class='control-label'>Alamat:</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{$data->alamat}}" required="">
                  </div>

                  <div class="form-group">
                    <label for="foto">Foto :</label>
                    <input name="foto" type="file" accept="images/jpeg, images/png, images/jpg, images/gif" class="form-control"/>
                  </div>

                  <div class="form-group">

                    <button type="submit" class="btn btn-success " value="Simpan" name="submit"><i class="fas fa-save"></i>
                     Simpan</button>
                </div>
            </div>
        </form>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
