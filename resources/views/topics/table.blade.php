 <table class="table table-responsive" id="topics-table">
    <thead>
        <th>Title</th>
        <th>Description</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($topics as $topic)
        <tr>
            <td>{!! $topic->title !!}</td>
            <td>{!! $topic->description !!}</td>
            <td>
                {!! Form::open(['route' => ['topics.destroy', $topic->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('topics.show', [$topic->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('topics.edit', [$topic->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<div class="row">
<h1>title:{!! $topic->title !!}</h1>
<p>description:{!! $topic->description !!}</p>

 {!! Form::open(['route' => ['topics.destroy', $topic->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('topics.show', [$topic->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('topics.edit', [$topic->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}

</div>