@include('layout.header')
<title>Tambah User - Care of Clean</title>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
              <section id="row-post-editor">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form User</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                        <a  href="{{route('dashboard_view')}}"  class="btn btn-warning mr-1 mb-1 waves-effect waves-light">Kembali</a>
                                <form action="{{route('simpanuser')}}" id="form-konten" enctype="multipart/form-data"  class='form-horizontal' method="POST">
                                   @csrf
                                    <div class="box-body">
                                        <div class='form-group'>
                                            <label for='name' class='control-label' >Nama :</label>
                                            <input type="text" name="nama" class="form-control" placeholder="Nama"   required="">
                                        </div>
                                        <div class='form-group'>
                                            <label for='name' class='control-label' >Username :</label>
                                            <input type="text" name="username" class="form-control" placeholder="Username" required="">
                                        </div>
                                        <div class='form-group'>
                                            <label for='name' class='control-label' >Email :</label>
                                            <input type="email" name="email" class="form-control" placeholder="email" required="">
                                        </div>
                                        <div class='form-group'>
                                            <label for='name' class='control-label' >Password :</label>
                                            <input type="password" name="password" class="form-control" placeholder="Password"  required="">
                                        </div>
                                        <div class='form-group'>
                                            <label for='name' class='control-label'>Alamat :</label>
                                            <input type="text" name="alamat" class="form-control" placeholder="Alamat"  required="">
                                        </div>
                                        <div class='form-group'>
                                            <label for='name' class='control-label' >Nomor Handphone :</label>
                                            <input type="number" name="no_hp" class="form-control" placeholder="Nomor Handphone" required="">
                                        </div>
                                         <div class='form-group'>
                                            <label for='name' class='control-label'>Gender :</label>
                                            <select name="gender" class="form-control">
                                                <option value="Laki-Laki"> Laki-Laki </option>
                                                <option value="Perempuan"> Perempuan </option>
                                            </select>
                                        </div>
                                    </div>
                                   <div class="box-footer">
                                        <input type="submit" class="btn btn-primary pull-right" value="Simpan" name="submit">
                                    </div>
                                     <br>
                                    <br>
                                </form>
                          </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        </div>
    </div>
</div>
@include ('layout.footer')
