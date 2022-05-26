<!-- Desa Field -->
<div class="col-sm-12">
    {!! Form::label('Desa', 'Desa:') !!}
    <p>{{ $dataSMA->Desa }}</p>
</div>

<!-- Jumlahsekolahmenengahatas Field -->
<div class="col-sm-12">
    {!! Form::label('JumlahSekolahMenengahAtas', 'Jumlahsekolahmenengahatas:') !!}
    <p>{{ $dataSMA->JumlahSekolahMenengahAtas }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $dataSMA->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $dataSMA->updated_at }}</p>
</div>

