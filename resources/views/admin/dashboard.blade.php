@extends('layout.default')
@section('content')
    <div class="row">
        <div class="col-3">
            @include('admin.shared.left-sidebar')
        </div>
        <div class="col-9">
            <h1>Admin Dashboard</h1>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    @include('admin.shared.widget', [
                        'title' => 'Users',
                        'icon' => 'fas fa-users',
                        'data' => $totalUsers
                    ])
                </div>
                <div class="col-sm-6 col-md-4">
                    @include('admin.shared.widget', [
                        'title' => 'Ideas',
                        'icon' => 'fas fa-lightbulb',
                        'data' => $totalIdeas
                    ])
                </div>
                <div class="col-sm-6 col-md-4">
                    @include('admin.shared.widget', [
                        'title' => 'Comments',
                        'icon' => 'fas fa-comment',
                        'data' => $totalComments
                    ])
                </div>
            </div>
        </div>
    </div>
@endsection


