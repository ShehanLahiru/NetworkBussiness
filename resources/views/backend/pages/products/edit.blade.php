@extends('backend.layouts.app', [
'namePage' => 'projects',
'class' => 'sidebar-mini',
'activePage' => 'projects',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="pull-right">
                    <a href="{{ route('backend.projects.index') }}">
                        <button class="btn btn-dark" style="margin-right: 15px;">Back</button>
                    </a>
                </div>
                <div class="card-header">
                    <h4 class="card-title"> Update Projects</h4>
                </div>
                <div class="card-body">
                    <form id="riddle_update" method="post" action="{{ route('backend.projects.update', $project->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        @include('backend.alerts.success')
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="title">{{__(" title ")}}</label>
                                    <input type="text" name="title" class="form-control"
                                        value="{{ old('title',$project->title) }}">
                                    @include('backend.alerts.feedback', ['field' => 'title'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="description">{{__(" Description")}}</label>
                                    <textarea type="text" rows="20" name="description" class="form-control"
                                        style="border:1px solid #E3E3E3">{{ old('description',$project->description)  }}</textarea>
                                    @include('backend.alerts.feedback', ['field' => 'description'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="category">{{__(" Category")}}</label>
                                    <select name="category" class="form-control" style="border:1px solid #E3E3E3">
                                        <option {{$project->category == 'Waste water treatment plants' ? 'selected' : ''}}  value="Waste water treatment plants">Waste water treatment plants</option>
                                        <option {{$project->category == 'Water treatment plants' ? 'selected' : ''}}  value="Water treatment plants">Water treatment plants</option>
                                        <option {{$project->category == 'Commercial & Domestic RO plant' ? 'selected' : ''}}  value="Commercial & Domestic RO plant">Commercial & Domestic RO plant</option>
                                        <option {{$project->category == 'Preventive maintenance any kind of water & waste water treatment plants' ? 'selected' : ''}}  value="Preventive maintenance any kind of water & waste water treatment plants">Preventive maintenance any kind of water & waste water treatment plants</option>
                                        <option {{$project->category == 'Water treatment chemicals' ? 'selected' : ''}}  value="Water treatment chemicals">Water treatment chemicals</option>
                                        <option {{$project->category == 'Water treatment equipments' ? 'selected' : ''}}  value="Water treatment equipments">Water treatment equipments</option>
                                    </select>
                                    @include('backend.alerts.feedback', ['field' => 'category'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="status">{{__(" Status")}}</label>
                                    <select name="status" class="form-control" style="border:1px solid #E3E3E3">
                                        <option {{$project->status == 'normal' ? 'selected' : ''}}  value="normal">Normal</option>
                                        <option {{$project->status == 'main' ? 'selected' : ''}}  value="main">Main</option>
                                        <option {{$project->status == 'deactive' ? 'selected' : ''}}  value="deactive">Deactive</option>
                                    </select>
                                    @include('backend.alerts.feedback', ['field' => 'status'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label class="d-block" for="image">{{__(" Image")}}</label>
                                    <img class="gal-img prev_img" id="prev_img2"
                                        src="{{$project->image_url!=null?$project->image_url:('assets/img/dummy.jpg')}}">
                                    <input type="file" class="custom-file-input2" name="image" id="custom-file-input2">
                                    @include('backend.alerts.feedback', ['field' => 'image'])
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <button type="submit"
                                class="btn btn-primary float-right btn-round">{{__('Update')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <!-- Laravel Javascript Validation -->--}}
{{-- <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>--}}
{{-- {!! JsValidator::formRequest('App\Http\Requests\CMS\AdCreateRequest', '#traditional_song_update') !!}--}}
@endsection

