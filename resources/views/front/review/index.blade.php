@extends('front.app_front')

@section('content')

<div class="page-banner" style="background-image: url('{{ asset('uploads/page_banners/'.$faq->banner) }}')">
    <div class="page-banner-bg"></div>
    <h1>{{ REVIEW }}</h1>
    <nav>
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ HOME }}</a></li>
            <li class="breadcrumb-item active">{{ REVIEW }}</li>
        </ol>
    </nav>
</div>

<div class="page-content">
    <div class="container ">
        <div class="row">
            <div class="col-md-8 mx-5">
                <div class="flex-lg-row-fluid ms-lg-10">
                    <div class="card card-flush mb-8 mb-xl-8">
                        @php $i=0; @endphp
                        @foreach($reviews as $row)
                        @php
                        $single_listing_item = \App\Models\Listing::where('id', $row->listing_id)->first();
                        $customer_detail = \App\Models\User::where('id',$row->agent_id)->first();
                        @endphp
                        @php $i++; @endphp
                        <div class="card m-2 ">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="{{ asset('uploads/listing_featured_photos/'.$single_listing_item->listing_featured_photo) }}" alt="" class="w_150 h-100">
                                    </div>
                                    <div class="col-md-9">
                                        <h5 class="card-title">{{ $single_listing_item->listing_name }} </h5>
                                        <p class="card-text">{!! clean(nl2br($row->review)) !!}</p>
                                        <p class="text-muted float-right">{{ $customer_detail->name }} , {{ $row->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="mt-4">
                        {{ $reviews }}
                    </div>
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="flex-lg-row-fluid ms-lg-2 mb-2">
                    <div class="card card-flush mb-2 mb-xl-2 p-2">
                        <a href="{{route('my_review_create')}}"  class="btn btn-primary">Add Review</a>
                    </div>
                </div>
                <div class="flex-lg-row-fluid ms-lg-2">
                    <div class="card card-flush mb-2 mb-xl-2 p-2">
                        <button type="button" class="btn btn-primary mb-2">Google Review</button>
                        <button type="button" class="btn btn-primary mb-1">Facebook Review</button>
                    </div>
            </div>
        </div>
    </div>
</div>
                </div>
@endsection