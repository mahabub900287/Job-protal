@extends('layouts.frontend')
<!-- title -->
@section('title', 'all job')
<!-- meta title-->
@section('meta_title', 'all job')
<!-- meta desciption-->
@section('meta_description', 'all job')
<!-- internal css -->
@push('styles')
@endpush

@section('main-content')
    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center"
            data-background="{{ asset('') }}img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>All Jobs</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <!-- job post company Start -->
    <section class="featured-job-area feature-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <!-- single-job-content -->
                    @forelse ($jobs as $data)
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="{{ route('job.details', ['slug' => $data->slug]) }}"><img
                                            src="{{ $data->image }}" alt="" style="height: 100px;width:100px"></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="{{ route('job.details', ['slug' => $data->slug]) }}">
                                        <h4>{{ $data->category->name }}</h4>
                                    </a>
                                    <ul>
                                        <li>{{ $data->company_name }}</li>
                                        <li><i class="fas fa-map-marker-alt"></i>{{ $data->address }}</li>
                                        <li>{{ $data->selary_rang }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="{{ route('job.details', ['slug' => $data->slug]) }}">Details Job</a>
                                <span>{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</span>
                            </div>
                        </div>
                    @empty
                    @endforelse
                    <div class="pagination justify-content-end">
                        {{ $jobs->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- job post company End -->
@endsection
<!-- internal js -->
@push('scripts')
    <script></script>
@endpush
