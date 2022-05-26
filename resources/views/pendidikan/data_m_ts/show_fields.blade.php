<!-- Desa Field -->
<div class="col-sm-12">
    {!! Form::label('Desa', 'Desa:') !!}
    <p>{{ $dataMTS->Desa }}</p>
</div>

<!-- Jumlahsekolahmadrasahtsanawiyah Field -->
<div class="col-sm-12">
    {!! Form::label('JumlahSekolahMadrasahTsanawiyah', 'Jumlahsekolahmadrasahtsanawiyah:') !!}
    <p>{{ $dataMTS->JumlahSekolahMadrasahTsanawiyah }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $dataMTS->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $dataMTS->updated_at }}</p>
</div>

