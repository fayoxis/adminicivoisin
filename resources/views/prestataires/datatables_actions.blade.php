{!! Form::open(['route' => ['prestataires.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('prestataires.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="fa fa-eye"></i>
    </a>
    <a href="{{ route('prestataires.edit', $id) }}" class='btn btn-default btn-xs'>
        <i class="fa fa-edit"></i>
    </a>
    <a href="{{ route('prestataires.activate', $id) }}" class='btn btn-success btn-xs'>
        <i class="fa fa-check"></i>
    </a>

    {!! Form::button('<i class="fa fa-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
