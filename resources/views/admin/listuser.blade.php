
    @include('layout.header')
    <title>Data User - Care of Clean</title>
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
                                    <h4 class="card-title">Data User</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <a href="{{route('tambahuser')}}" class="btn btn-primary mb-2" title="Tambah Atlet" style="color: #fff">
                                            <i class="feather icon-plus"></i>&nbsp; Tambah User
                                        </a>
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Username</th>
                                                        <th>Email</th>
                                                        <th>Alamat</th>
                                                        <th>Nomor Handphone</th>
                                                        <th>Gender</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1; ?>
                                                    @foreach($users as $users)

                                                    <tr>
                                                        <td><?php echo $no++ ?></td>

                                                        <td>{{ $users->nama }}</td>
                                                        <td>{{ $users->username }}</td>
                                                        <td>{{ $users->email}}</td>
                                                        <td>{{ $users->alamat}}</td>
                                                        <td>{{ $users->no_hp}}</td>
                                                        <td>{{ $users->gender}}</td>

                                                        <td>
                                                            <a href="{{ url('edituser/'.$users->id) }}" class="btn btn-warning mr-1 mb-1 waves-effect waves-light"><i class="fa fa-edit"></i></a>
                                                            <a href="{{ url('deleteuser/'.$users->id) }}" class="btn btn-danger mr-1 mb-1 waves-effect waves-light" onclick="return confirm('Apakah anda yakin akan menghapus?')"><i class="fa fa-trash"></i> </a>
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
