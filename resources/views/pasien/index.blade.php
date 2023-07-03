@extends('layouts.master')

@section('content')


<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Tambah Identitas Pasien</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            @if($auth_user->can('category add'))
                            @endif
                            <button type='button'  onclick='baru()' class="float-right mr-1 btn btn-sm btn-primary"><i class="fa fa-plus-circle"></i>Tambah Identitas</button>
                        </div>
                    </div>
                    <div class="iq-card-body p-3">
                            <table  id="datatable" class="table text-center w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor KTP</th>
                                        <th>Nama</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis kelamin</th>
                                        <th>Nomor Telp</th>
                                        <th>Pekerjaan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach ( $pasien as $key => $data)
                                 <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $data->no_ktp }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->tgl_lahir }}</td>
                                    <td>{{ $data->jenis_kelamin }}</td>
                                    <td>{{ $data->no_tlp }}</td>
                                    <td>{{ $data->pekerjaan }}</td>
                                    <td>
                                        <div class="flex align-items-center list-user-action">
                                        <a href="{{ route('pasien.edit', $data->id) }}" title="Edit Pasien"><i class="ri-pencil-line"></i></a>
                                        <form action="{{ route('pasien.delete', $data->id) }}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                             <a title="Hapus Data"  onclick="return confirm('Hapus data')"><i class="ri-delete-bin-line"></i></a>
                                        </form>

                                    </div>
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
    {{-- > --}}
@endsection

