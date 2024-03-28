@extends('front.app_front')

@section('content')

<div class="page-banner" style="background-image: url('{{ asset('uploads/page_banners/'.$faq->banner) }}')">
    <div class="page-banner-bg"></div>
    <h1>{{ $faq->name }}</h1>
    <nav>
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ HOME }}</a></li>
            <li class="breadcrumb-item active">{{ $faq->name }}</li>
        </ol>
    </nav>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-5">
                <div class="flex-lg-row-fluid ms-lg-10">
                    <div class="card card-flush mb-8 mb-xl-8">
                        <div class="card m-2 ">
                            <div class="card-body">
                                <form action="{{ route('my_review_store') }}" method="post">
                                    @csrf
                                    <div class="row justify-content-center">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for=""> Vehicle </label>
                                                <select name="listing_id" class="form-control">
                                                    <option >{{ CHOOSE_VEHICLE }}</option>
                                                    @foreach($listings as $listing)
                                                        <option value="{{ $listing->id }}">{{ $listing->listing_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">{{ RATING }}</label>
                                                <select name="rating" class="form-control">
                                                    @for($i=1;$i<=5;$i++)
                                                        <option value="{{ $i }}" >{{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">{{ REVIEW }}</label>
                                                <textarea name="review" class="form-control h-100" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="text-center"> 
                                        <button type="submit" class="btn btn-primary mt_10">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="flex-lg-row-fluid ms-lg-2">
                    <div class="card card-flush mb-2 mb-xl-2 p-2 contact-form">
                        <button type="button" class="btn btn-primary  mb-2">Google Review</button>
                        <button type="button" class="btn btn-primary  mb-1">Facebook Review</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection