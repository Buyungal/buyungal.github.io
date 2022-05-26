@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Data Luas Panen Cabe Rawit</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($dataLuasPanenCabeRawit, ['route' => ['pertanian.dataLuasPanenCabeRawits.update', $dataLuasPanenCabeRawit->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('pertanian.data_luas_panen_cabe_rawits.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('pertanian.dataLuasPanenCabeRawits.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
