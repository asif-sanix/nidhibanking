@extends('admin.layouts.master')
@section('title','Create Slider')
@push('links')
 <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/vendors/css/forms/toggle/switchery.min.css')}}">

   <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">

   <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/vendors/css/forms/selects/select2.min.css')}}">
@endpush
@section('main')

<div class="content-header row">

    <div class="content-header-left col-md-6 col-12 mb-2">
      <h5 class="content-header-title mb-0">Loan Account</h5>
    </div>

    <div class="content-header-right col-md-6 col-12">
      <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
        <div class="btn-group" role="group">
            @can('add_agent_ranking')
                <a href="{{ route('admin.'.request()->segment(2).'.create') }}" class="btn btn-primary btn-sm">Add  Loan Account</a>
            @endcan
       </div>
    </div>
</div>
</div>

<div class="card">
    <div class="card-content">
        <div class="card-body">
          {!! Form::open(['route'=>['admin.'.request()->segment(2).'.update',$data->id],'method'=>'put','files'=>true]) !!}

             <div class="row">
                <div class="col-md-6 col-sm-12">
                    
                    <div class="form-group{{ $errors->has('rank') ? ' has-error' : '' }}">
                        {!! Form::label('rank', 'Rank') !!}
                        {!! Form::select('rank', ['9'=>'9','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15'], $data->rank, ['id' => 'rank', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'Rank']) !!}
                        <small class="text-danger">{{ $errors->first('rank') }}</small>
                    </div>

                   

                    <div class="form-group{{ $errors->has('rank_definition') ? ' has-error' : '' }}">
                        {!! Form::label('rank_definition', 'Rank Definition') !!}
                        {!! Form::text('rank_definition', $data->rank_definition, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Rank Definition']) !!}
                        <small class="text-danger">{{ $errors->first('rank_definition') }}</small>
                    </div>

                    {!! Form::submit('Save', ['class' => 'btn btn-info pull-right']) !!}


                </div>

                <div class="col-md-6 col-sm-12">

                    <div class="form-group">
                        <div class="checkbox{{ $errors->has('active_status') ? ' has-error' : '' }}">
                            {!! Form::label('active_status', 'Active State') !!}<br>
                             {!! Form::checkbox('active_status', '1', $data->status, ['id' => 'switch1','class'=>'switch']) !!} 
                        </div>
                        <small class="text-danger">{{ $errors->first('active_status') }}</small>
                    </div>

                     <div class="form-group{{ $errors->has('rank_name') ? ' has-error' : '' }}">
                        {!! Form::label('rank_name', 'Rank Name') !!}
                        {!! Form::text('rank_name', $data->rank_name, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Rank Name']) !!}
                        <small class="text-danger">{{ $errors->first('rank_name') }}</small>
                    </div>
                    

                </div>

            </div>
                
            {!! Form::close() !!}

        </div>
             
    </div>
</div>
@endsection
@push('scripts')


 <script src="{{asset('admin-assets/app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"
  type="text/javascript"></script>

  <script src="{{asset('admin-assets/app-assets/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>

  <script src="{{asset('admin-assets/app-assets/js/scripts/forms/switch.js')}}" type="text/javascript"></script>


@endpush