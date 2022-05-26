@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Data Sekolah SD</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($dataSekolahDasar, ['route' => ['pendidikan.dataSekolahDasars.update', $dataSekolahDasar->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('pendidikan.data_sekolah_dasars.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('pendidikan.dataSekolahDasars.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
