<div class="card overflow-hidden">
    <div class="card-body pt-3">
        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.dashboard') ? 'text-white bg-primary rounded' : '' }}" href="{{ route('admin.dashboard') }}">
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.users') ? 'text-white bg-primary rounded' : '' }}" href="{{ route('admin.users') }}">
                    <span>Users</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.ideas') ? 'text-white bg-primary rounded' : '' }}" href="{{ route('admin.ideas') }}">
                    <span>Ideas</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.comments') ? 'text-white bg-primary rounded' : '' }}" href="{{ route('admin.comments') }}">
                    <span>Comments</span></a>
            </li>
        </ul>
    </div>
    <div class="card-footer text-center py-2">
        <a class="btn btn-link btn-sm" href="{{ route('profile') }}">View Profile </a>
        <hr>
        <a class="btn btn-link btn-sm" href="{{ route('lang', 'vn') }}">Viet Nam</a>
        <a class="btn btn-link btn-sm" href="{{ route('lang', 'es') }}">English</a>
    </div>
</div>
