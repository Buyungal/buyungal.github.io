<!-- Desa Field -->
<div class="col-sm-12">
    {!! Form::label('Desa', 'Desa:') !!}
    <p>{{ $dataSMP->Desa }}</p>
</div>

<!-- Jumlahsekolahmenengahpertama Field -->
<div class="col-sm-12">
    {!! Form::label('JumlahSekolahMenengahPertama', 'Jumlahsekolahmenengahpertama:') !!}
    <p>{{ $dataSMP->JumlahSekolahMenengahPertama }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $dataSMP->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $dataSMP->updated_at }}</p>
</div>

