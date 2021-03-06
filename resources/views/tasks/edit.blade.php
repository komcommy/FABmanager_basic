@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <!-- Display Validation Errors -->
                @include('common.status')

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Apparaat aanpassen: <strong>{{$task->name}}</strong>
                    </div>
                    <div class="panel-body">

                        {!! Form::model($task, array('action' => array('TasksController@update', $task->id), 'method' => 'PUT')) !!}

                            <div class="form-group row">
                                {!! Form::label('name', 'Ruimte', array('class' => 'col-sm-3 col-sm-offset-1 control-label text-right')) !!}
                                <div class="col-sm-6">
                                    {!! Form::text('name', null, array('class' => 'form-control')) !!}
                                </div>
                            </div>


                            <div class="form-group row">
                                {!! Form::label('description', 'MAC/SWI/Overige info', array('class' => 'col-sm-3 col-sm-offset-1 control-label text-right')) !!}
                                <div class="col-sm-6">
                                    {!! Form::text('description', null, array('class' => 'form-control')) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                {!! Form::label('patchnumber', 'Patchnummer', array('class' => 'col-sm-3 col-sm-offset-1 control-label text-right')) !!}
                                <div class="col-sm-6">
                                    {!! Form::text('patchnumber', null, array('class' => 'form-control')) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                {!! Form::label('updated_at', 'Laatste wijziging', array('class' => 'col-sm-3 col-sm-offset-1 control-label text-right')) !!}
                                <div class="col-sm-6">
                                    <span class="label label-default">{{ $task->updated_at }}</span>
                                </div>
                            </div>


                            <!-- Task Status -->

                            <div class="alert alert-success" role="alert">
                                <div class="form-group row">
                                        <label for="status" class="col-sm-3 col-sm-offset-1 control-label text-right">Status</label>
                                        <div class="col-sm-6">
                                            <div class="checkbox">
                                                <label for="status">
                                                    {!! Form::checkbox('completed', 1, null, ['id' => 'status']) !!} Afgehandeld
                                                </label>
                                            </div>
                                        </div>
                                </div>
                            </div>


                            <!-- Add Task Button -->
                            <div class="form-group row">
                                <div class="col-sm-offset-4 col-sm-6">
                                     {{Form::button('<span class="fa fa-save fa-fw" aria-hidden="true"></span> <span class="hidden-xs">Wijzigingen</span> <span class="hidden-xxs">Opslaan</span>', array('type' => 'submit', 'class' => 'btn btn-lg btn-success btn-block'))}}
                                </div>
                            </div>


                        {!! Form::close() !!}

                    </div>
                    <div class="panel-footer">
                        <a href="{{ route('tasks.index') }}" class="btn btn-sm btn-info" type="button">
                            <span class="fa fa-reply" aria-hidden="true"></span> Terug naar overzicht
                        </a>

{{--                        {!! Form::open(array('class' => 'form-inline pull-right', 'method' => 'DELETE', 'route' => array('tasks.destroy', $task->id))) !!}--}}
{{--                            {{ method_field('DELETE') }}--}}
{{--                            {{Form::button('<span class="fa fa-trash fa-fw" aria-hidden="true"></span> <span class="hidden-xxs">Verwijderen</span> <span class="hidden-sm hidden-xs">Bestelling</span>', array('type' => 'submit', 'class' => 'btn btn-sm btn-danger'))}}--}}
{{--                        {!! Form::close() !!}--}}

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <strong>DANGERZONE</strong>
                    </div>
                    <div class="panel-body">
                        <p>
                            <i>“It's supposed to be automatic, but actually you have to push this button. ”</i><br>
                            <b>― John Brunner, Stand on Zanzibar</b>
                        </p>
                        {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('tasks.destroy', $task->id))) !!}
                        {{ method_field('DELETE') }}
                        {{Form::button('<span class="fa fa-trash fa-fw" aria-hidden="true"></span> <span class="hidden-xxs">Verwijderen</span>', array('type' => 'submit', 'class' => 'btn btn btn-danger'))}}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection