@extends('admin.layouts.master')
@section('title', settings()->website_title . ' | ' . __('words.show_gallery'))
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-dark font-weight-bold my-1 mr-5">{{ __('words.galleries') }}</h5>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.home') }}" class="text-muted">{{ __('words.home') }}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('galleries.index') }}" class="text-muted">{{ __('words.show_galleries') }}</a>
            </li>
            <li class="breadcrumb-item">
                <span class="text-muted">{{ __('words.show_gallery') }}</span>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@section('content')
    <div class="card card-custom card-stretch gutter-b">
        <div class="card card-custom">
            <div class="card-header card-header-tabs-line">
                <div class="card-title">
                    <h3 class="card-label">{{ __('words.show_gallery') }}</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-8">
                        <a href="{{$gallery->image}}"
                           data-toggle="lightbox"
                           data-gallery="gallery">
                            <img src="{{ $gallery->image }}" class="img-fluid mb-2 image-galley"
                                 onerror="this.src='{{ asset('uploads/default_image.png') }}'" alt="gallery image"/>
                        </a>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.created_at') }}:</h5>
                            </div>
                            <p class="m-0">{{ formatDate($gallery->created_at) }}</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.updated_at') }}:</h5>
                            </div>
                            <p class="m-0">
                                {{ formatDate($gallery->created_at) == formatDate($gallery->updated_at) ? '--' : formatDate($gallery->updated_at) }}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.activity') }}:</h5>
                            </div>
                            <p class="m-0"><span
                                    class="badge rounded-pill text-white {{$gallery->status == 1 ? 'bg-success' : 'bg-danger'}}">{{ $gallery->getActive() }}</span>
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            @permission('update-galleries')
            <div class="card-footer">
                <div class="row">
                    <div class="col-4">
                        <a href="{{ route('galleries.edit', $gallery->id) }}" class="btn btn-block btn-outline-info">
                            {{ __('words.edit') }}
                        </a>
                    </div>
                </div>
            </div>
            @endpermission
        </div>
    </div>
@endsection
