
    @include('layout.header')
    <title>Home - Care of Clean</title>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                 <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Data Pickup</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <a href="{{route('tambahpickup')}}" class="btn btn-primary mb-2" title="Tambah Atlet" style="color: #fff">
                                            <i class="feather icon-plus"></i>&nbsp; Tambah Pickup
                                        </a>
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Pembayaran</th>
                                                        <th>Jenis Sampah</th>
                                                        <th>Berat Sampah</th>
                                                        <th>Alamat</th>
                                                        <th>Foto</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1; ?>
                                                    @foreach($tb_pickup as $tb_pickup)

                                                    <tr>
                                                        <td><?php echo $no++ ?></td>

                                                        <td>{{ $tb_pickup->pembayaran }}</td>
                                                        <td>{{ $tb_pickup->jenis_sampah }}</td>
                                                        <td>{{ $tb_pickup->berat_sampah}}</td>
                                                        <td>{{ $tb_pickup->alamat}}</td>
                                                        <td><img src="data_file/{{$tb_pickup->foto}}" width="50"></td>
                                                        <td>
                                                            <a href="{{ url('editpickup/'.$tb_pickup->id) }}" class="btn btn-warning mr-1 mb-1 waves-effect waves-light"><i class="fa fa-edit"></i></a>
                                                            @can('delete_listuser' , \App\Models\User::class)
                                                            <a href="{{ url('deletepickup/'.$tb_pickup->id) }}" class="btn btn-danger mr-1 mb-1 waves-effect waves-light" onclick="return confirm('Apakah anda yakin akan menghapus?')"><i class="fa fa-trash"></i></a>

                                                            @endcan


                                                        </td>

                                                    </tr>
                                                    @endforeach




                                                </tbody>
                                            </table>
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
    <script type="text/javascript">
        function return(clicked_id)
        {
            alert(clicked_id);
        }
    </script>
@include('sweetalert::alert')

@include ('layout.footer')
