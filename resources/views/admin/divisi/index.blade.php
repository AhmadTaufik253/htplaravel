@extends('admin.layout.appadmin')

@section('content')
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <!-- <i class="fas fa-table me-1"></i>
                                DataTable Example -->
                                <!-- membuat tombol mengarahkan ke file produk_form.php -->
                               
                                <a href="{{url('admin/divisi/create')}}" class="btn btn-primary btn-sm"> Tambah</a>
                                
                            </div>

                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <!-- hapus dari baris 64 sampai 511 -->
                                        <!-- dari <tr> ke </tr> -->
                                        @php
                                        $no = 1;
                                        @endphp
                                        @foreach($divisi as $d)
                                        <tr>
                                            <td>{{$no}}</td>
                                            <td>{{$d->nama}}</td>
                                            <td>
                                                <form action="#" method="POST">
                                                  
                                                <a class="btn btn-info btn-sm" href="#">Detail</a>
                                                
                                                
                                        <a class="btn btn-warning btn-sm" href="{{url('admin/divisi/edit/'.$d->id)}}">Ubah</a>
                                                    
                                                    <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" 
                                                    onclick="return confirm('Anda yakin akan dihapus?')">Hapus</button>

                                                    

                                                    
                                                </form>
                                            </td>
                                        </tr>
                                        @php 
                                        $no++

                                        @endphp
                                        @endforeach
                                      
                                    </tbody>
                                </table>
                            </div>

</div>
</div>
@endsection

               