@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Data Tenaga Kesehatan</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($dataTenagaKesehatan, ['route' => ['kesehatan.dataTenagaKesehatans.update', $dataTenagaKesehatan->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('kesehatan.data_tenaga_kesehatans.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('kesehatan.dataTenagaKesehatans.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
