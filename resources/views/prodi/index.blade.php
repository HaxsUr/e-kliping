@extends('adminlte::page')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5><b>Program Study</b></h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <button type="button" class="btn btn-primary" id="btnModalProdi">
                            Tambah Data
                        </button>
                    </div>
                    <div class="table-responsive">
                        <table id="table-prodi" class="table table-bordered">
                            <thead class="table-success">
                                <tr>
                                    <th style="width: 5%">No.</th>
                                    <th style="width: 200px">Nama Program Studi</th>
                                    <th style="width: 10%"></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Data -->
<div class="modal fade" id="prodiModal" tabindex="-1" aria-labelledby="judul" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title" id="judul"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="closeprodi1"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3 row">
                        <label for="namaprodi" class="col-sm-5 col-form-label">Nama Prodi</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="namaprodi">
                            <input type="hidden" class="form-control" id="idprodi">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="closeprodi2">Tutup</button>
                <button type="button" class="btn btn-success" id="btnprodi">Save changes</button>
            </div>
        </div>
    </div>
</div>
@stop

@push('js')
<script type='text/javascript'>
    $(document).ready(function(){
        $('#table-prodi').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "processing": true,
        "pageLength": 5,
        "ordering": false,
        "info":false,
        "bDestroy": true,
        "ajax": "{{ route('prodi.index') }}",
        "colums": [
            { "data": null, render : function ( data, type, full, meta)
                {
                    return meta.row + 1;
                }
            },
            {"data": "nama",},
            {"data": null, render : function(data,type,row)
                {
                    return "<button tittle='Ubah Data' class='btn btn-edit-prodi btn-warning btn-xs'><i class='fafa-pencil'></i>Ubah</button>" + "<button title='Hapus Data' class='btn btn-hapus-prodi btn-danger btn-xs'><i class='fa fa-remove'></i>Hapus</button>";
                }
            }
        ]
    });
    //tambah data
    $('#btnModalProdi').click(function(){
        $('#prodiModal').modal();
        $('#prodiModal').modal('toggle');
        $('#btnprodi').text('Simpan');
    });
    $('#closeprodi1').click(function(){
        $('#prodiModal').modal('hide');
    });
    $('#closeprodi2').click(function(){
        $('#prodiModal').modal('hide');
    });

});
</script>

@endpush()
