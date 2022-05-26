<!-- Desa Field -->
<div class="col-sm-12">
    {!! Form::label('Desa', 'Desa:') !!}
    <p>{{ $dataMA->Desa }}</p>
</div>

<!-- Jumlahsekolahmadrasahaliyah Field -->
<div class="col-sm-12">
    {!! Form::label('JumlahSekolahMadrasahAliyah', 'Jumlahsekolahmadrasahaliyah:') !!}
    <p>{{ $dataMA->JumlahSekolahMadrasahAliyah }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $dataMA->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $dataMA->updated_at }}</p>
</div>

