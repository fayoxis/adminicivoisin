<div class="col-sm-12">
    {!! Form::label('first_name', 'First Name:') !!}
    <p>{{ $prestataire->first_name }}</p>
</div>
<div class="col-sm-12">
    {!! Form::label('last_name', 'Last Name:') !!}
    <p>{{ $prestataire->last_name }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $prestataire->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $prestataire->updated_at }}</p>
</div>

