@extends('_layouts.guest')
@section('content')
    <div class="container py-20 lg:px-20">

        <div class="information-container mb-5 flex flex-col gap-5">
            {{-- Section 1 --}}
            <div>
                <h1 class="font-bold mb-3">K-Means Algorithm</h1>
                <p>
                    K-Means adalah salah satu algoritma unsupervised learning yang digunakan untuk
                    <span class="bg-gray-300">clustering</span>
                    atau pengelompokan
                    data. Tujuannya adalah membagi data ke dalam sejumlah
                    <span class="bg-gray-300">kelompok cluster</span>
                    berdasarkan kemiripan atribut mereka.
                </p>
            </div>

            {{-- Konsep Dasar Algoritma K-Means --}}
            <div class="my-4">
                <h2 class="font-bold mb-3">Konsep Dasar</h2>
                <ul class="list-disc pl-5 flex flex-col gap-3">
                    <li>
                        <span class="font-bold">Centroid:</span>
                        Titik pusat dari setiap cluster.
                    </li>
                    <li>
                        <span class="font-bold">Cluster:</span>
                        Sekelompok data yang memiliki karakteristik atau fitur yang mirip.
                    </li>
                    <li>
                        <span class="font-bold">Jarak:</span>
                        Pengukuran kemiripan antara data dengan centroid.
                    </li>
                    <li>
                        <span class="font-bold">Iterasi:</span>
                        Proses algoritma dilakukan berulang kali hingga menemukan hasil optimal.
                    </li>
                </ul>
            </div>

            {{-- Langkah atau Step  --}}
            <div>
                <h2 class="font-bold mb-3">Langkah Algoritma</h2>
                <ol class="list-decimal pl-8 flex flex-col gap-3">
                    <li>
                        <span class="font-bold">Inisialisasi:</span>
                        Pilih k centroid secara acak.
                    </li>
                    <li>
                        <span class="font-bold">Assignment:</span>
                        Kelompokkan data ke centroid terdekat.
                    </li>
                    <li>
                        <span class="font-bold">Update:</span>
                        Hitung ulang posisi centroid berdasarkan rata-rata data yang dikelompokkan.
                    </li>
                    <li>
                        <span class="font-bold">Iterasi:</span>
                        Ulangi langkah 2 dan 3 hingga posisi centroid tidak berubah.
                    </li>
                </ol>
            </div>
        </div>

        {{-- Button --}}
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
