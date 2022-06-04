@extends('admin.layouts.master')

@section('admin_content')
    <div class="content-wrapper">
        <div class="content">

            <div class="breadcrumb-wrapper">
                <h1>Banner</h1>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <span class="mdi mdi-home"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            All
                        </li>
                        <li class="breadcrumb-item" aria-current="page">table</li>
                    </ol>
                </nav>

            </div>

            <div class="row">

                <div class="col-lg-12">
                    <div class="card card-default">

                        <div class="card-body">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">S.N</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">photo</th>
                                        <th scope="col">Condition</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($banners as $banner)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>{{ $banner->title }}</td>
                                            <td>{{ $banner->description }}</td>
                                            <td><img src="{{ $banner->photo }}" style="width:70px;height:70px"></td>
                                            <td>
                                                @if ($banner->condition == 'banner')
                                                    <span class="badge badge-success">{{ $banner->condition }}</span>
                                                @else
                                                    <span class="badge badge-primary">{{ $banner->condition }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($banner->status == 'active')
                                                    <span class="badge badge-success">{{ $banner->status }}</span>
                                                @else
                                                    <span class="badge badge-primary">{{ $banner->status }}</span>
                                                @endif

                                            </td>
                                            <td>
                                                <a href="{{ url('admin/show/banner/' . $banner->id) }}"
                                                    class="btn btn-warning">edit</a>

                                                <a id="delete" href="{{ route('banner.destroy' , $banner->id) }}" class="btn btn-danger">delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        @endsection
