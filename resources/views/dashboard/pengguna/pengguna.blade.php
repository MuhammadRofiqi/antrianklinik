@extends('dashboard.layouts.main')

@section('content')
<div >
    <livewire:dashboard.pengguna.show-pengguna>
</div>
@endsection

@section('script')
<script>
    window.addEventListener('closeModal', event => {
        $('#createPengguna').modal('hide')
        $('#editPengguna').modal('hide')
        $('#deletePengguna').modal('hide')
    })

</script>
