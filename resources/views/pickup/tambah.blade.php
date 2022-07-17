@include('layout.header')
<title>Tambah - Care of Clean</title>
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
                        <h4 class="card-title">Form Pickup</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                        <a  href="{{route('dashboard_view')}}"  class="btn btn-warning mr-1 mb-1 waves-effect waves-light">Kembali</a>
                                <form action="{{route('simpanpickup')}}" id="form-konten" enctype="multipart/form-data"  class='form-horizontal' method="POST">
                                   @csrf
                                    <div class="box-body">
                                        <div class='form-group'>
                                            <label for='name' class='control-label'>Pembayaran:</label>
                                            <select name="pembayaran" class="form-control">
                                                <option value="POINT"> POINT </option>
                                                <option value="CASH"> CASH </option>
                                                <option value="VOUCHER"> VOUCHER </option>
                                            </select>
                                        </div>

                                        <div class='form-group'>
                                            <label for='name' class='control-label'>Jenis Sampah:</label>
                                            <select name="jenis_sampah" class="form-control">
                                                <option value="Aluminium"> Aluminium </option>
                                                <option value="Kertas"> Kertas </option>
                                                <option value="Plastik"> Plastik </option>
                                            </select>
                                        </div>

                                         <div class='form-group'>
                                            <label for='name' class='control-label' >Berat Sampah:</label>
                                            <input type="number" name="berat_sampah" class="form-control" placeholder="Berat Sampah"  min = "1" required="">
                                        </div>

                                        <div class='form-group'>
                                            <label for='name' class='control-label'>Alamat:</label>
                                            <input type="text" name="alamat" class="form-control" placeholder="Alamat"  required="">
                                        </div>

                                         <h6>Foto</h6>
                                            <fieldset>
                                                <div class="row mb-5">
                                                    <div class="col-sm-3">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="foto">Foto :</label>
                                                        <input name="foto" type="file" accept="images/jpeg, images/png, images/jpg, images/gif" class="form-control"/>
                                                    </div>
                                                    <div class="col-sm-3">
                                                    </div>
                                                </div>
                                            </fieldset>
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
