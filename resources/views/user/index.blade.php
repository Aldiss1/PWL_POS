@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools">
            <a class="btn btn-sm btn-primary mt-1" href="{{ url('user/create') }}">Tambah</a>
        </div>
    </div>
    <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <table class="table table-bordered table-striped table-hover table-sm" id="table_user">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Level Pengguna</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection

<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="modalHapusLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalHapusLabel">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger" id="btnHapusKonfirmasi">Ya, Hapus!</button>
            </div>
        </div>
    </div>
</div>

<!-- Form tersembunyi untuk submit DELETE -->
<form id="formHapusUser" method="POST" action="" style="display:none;">
    @csrf
    @method('DELETE')
</form>


@push('css')
@endpush

@push('js')
<script>
    $(document).ready(function() {
        var dataUser = $('#table_user').DataTable({
            serverSide: true,
            ajax: {
                "url": "{{ url('user/list') }}",
                "dataType": "json",
                "type": "POST"
            },
            columns: [{
                data: "DT_RowIndex",
                className: "text-center",
                orderable: false,
                searchable: false
            }, {
                data: "username",
                className: "",
                orderable: true,
                searchable: true
            }, {
                data: "nama",
                className: "",
                orderable: true,
                searchable: true
            }, {
                data: "level.level_nama",
                className: "",
                orderable: false,
                searchable: false
            }, {
                data: "aksi",
                className: "",
                orderable: false,
                searchable: false
            }]
        });

        $('#btnHapusKonfirmasi').on('click', function() {
            $('#formHapusUser').submit();
        });
    });

    function hapusUser(id) {
        $('#formHapusUser').attr('action', '{{ url("/user") }}/' + id);
        $('#modalHapus').modal('show');
    }
</script>
@endpush