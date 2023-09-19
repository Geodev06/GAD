<div>
    @include('partials.head')


    <div class="container-scroller">

        <!-- partial:partials/_navbar.html -->
        @include('partials.nav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('partials.sidebar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white me-2">
                                <i class="mdi mdi-home"></i>
                            </span> User management
                        </h3>

                        <button class="btn btn-sm btn-primary" wire:click="toggleForm">{{ $createForm ? 'Hide Form':'Create new user'}}</button>
                    </div>

                    <div class="row">

                        @if($createForm)
                        <div class="col-lg-12">
                            <livewire:create-new-user-form lazy>
                        </div>
                        @else

                        <div class="form-group">
                            <label>Search {{ $search}}</label>
                            <input type="text" wire:model.live.debounce500ms="search" class=" form-control form-control-lg" placeholder="Ex. Juan Dela Cruz" />
                        </div>


                        @foreach($users as $user)
                        <div class="col-lg-4 mb-2">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar text-uppercase">{{ $user->fullname[0]}}</span>
                                        <p class="text-capitalize mt-2 mx-2">{{ $user->fullname }}</p>
                                    </div>
                                    <p>UID: {{ $user->user_id}}</p>

                                    @if($user->role == 1)
                                    <span class="badge bg-dark">Teacher</span>
                                    @else
                                    <span class="badge bg-danger">Student</span>
                                    @endif

                                    @if($user->status == 1)
                                    <span class="badge bg-success">Active</span>
                                    @else
                                    <span class="badge bg-secondary">Inactive</span>
                                    @endif

                                    @if($user->gender == 0)
                                    <span class="badge bg-danger">Male</span>
                                    @else
                                    <span class="badge bg-info">Female</span>
                                    @endif

                                    <div class="mt-2">
                                        @if($user->status == 1)
                                        <button class="btn btn-sm btn-danger" wire:click="deactivate('{{ $user->user_id }}')">Deactivate</button>

                                        @else
                                        <button class="btn btn-sm btn-success" wire:click="deactivate('{{ $user->user_id }}')">Activate</button>

                                        @endif
                                        <button class="btn btn-sm btn-primary">Edit</button>

                                    </div>

                                </div>
                                <span class="card-footer">Created - {{ $user->created_at->diffForHumans()}}</span>

                            </div>
                        </div>
                        @endforeach

                        {{ $users->links()}}


                        @endif
                    </div>


                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="container-fluid d-flex justify-content-between">
                        <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © Application name 2023</span>
                        <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->


    </div>
    @include('partials.scripts')
</div>