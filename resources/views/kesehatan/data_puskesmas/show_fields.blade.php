<!-- Desa Field -->
<div class="col-sm-12">
    {!! Form::label('Desa', 'Desa:') !!}
    <p>{{ $dataPuskesmas->Desa }}</p>
</div>

<!-- Puskesmasrawatinap Field -->
<div class="col-sm-12">
    {!! Form::label('PuskesmasRawatInap', 'Puskesmasrawatinap:') !!}
    <p>{{ $dataPuskesmas->PuskesmasRawatInap }}</p>
</div>

<!-- Puskesmastanparawatinap Field -->
<div class="col-sm-12">
    {!! Form::label('PuskesmasTanpaRawatInap', 'Puskesmastanparawatinap:') !!}
    <p>{{ $dataPuskesmas->PuskesmasTanpaRawatInap }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $dataPuskesmas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $dataPuskesmas->updated_at }}</p>
</div>

