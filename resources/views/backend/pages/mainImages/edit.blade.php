@extends('backend.layouts.app', [
'namePage' => 'mainImages',
'class' => 'sidebar-mini',
'activePage' => 'mainImages',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="pull-right">
                    <a href="{{ route('backend.mainImages.index') }}">
                        <button class="btn btn-dark" style="margin-right: 15px;">Back</button>
                    </a>
                </div>
                <div class="card-header">
                    <h4 class="card-title"> Update Main Images</h4>
                </div>
                <div class="card-body">
                    <form id="riddle_update" method="post"
                        action="{{ route('backend.mainImages.update', $mainImage->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        @include('backend.alerts.success')
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="description">{{__(" Description")}}</label>
                                    <textarea type="text" rows="20" name="description" class="form-control"
                                        style="border:1px solid #E3E3E3">{{ old('description',$mainImage->description)  }}</textarea>
                                    @include('backend.alerts.feedback', ['field' => 'description'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="status">{{__(" Status")}}</label>
                                    <select name="status" class="form-control" style="border:1px solid #E3E3E3">
                                        <option {{$mainImage->status == 'active' ? 'selected' : ''}}  value="active">Active</option>
                                        <option {{$mainImage->status == 'deactive' ? 'selected' : ''}}  value="deactive">Deactive</option>
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
                                        src="{{$mainImage->image_url!=null?$mainImage->image_url:('assets/img/dummy.jpg')}}">
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
