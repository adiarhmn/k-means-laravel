@extends('_layouts.guest')
@section('content')
    <div class="container py-20 lg:px-20">

        <div class="information mb-5">
            <h1 class="font-bold mb-3">K-Means Algorithm</h1>
            <p>
                K-Means is a clustering algorithm that aims to partition n observations into k clusters in which each
                observation belongs to the cluster with the nearest mean, serving as a prototype of the cluster.
            </p>
        </div>

        <div class="flex gap-2">
            <a href="{{ route('k-means') }}" class="bg-gray-800  border border-gray-800 p-2 text-white">
                Start K-Means
            </a>
            <a href="" class="p-2 border border-gray-800">
                About Me
            </a>
        </div>

    </div>
@endsection
