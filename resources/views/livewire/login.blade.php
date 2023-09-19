<div>
    @include('partials.head')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-5 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <img src="../../assets/images/logo.svg">
                            </div>

                            @include('partials.flash-message')

                            <h4>Hello, Welcome back!</h4>
                            <h6 class="font-weight-light">Please sign in to continue.</h6>
                            <form class="pt-3" wire:submit.prevent="authenticate">


                                <div class=" form-group">
                                    <label>User Id</label>
                                    <input type="text" wire:model="user_id" class="form-control form-control-lg" placeholder="Ex. Juandelacruz_123" />
                                    @error('user_id') <span class="text-danger">{{$message}}</span>@enderror
                                </div>


                                @if($userType == '0')
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" wire:model="password" class="@error('password') bg-danger text-white @enderror form-control form-control-lg" placeholder="********">
                                    @error('password') <span class="text-error">{{$message}}</span>@enderror
                                </div>
                                @endif

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">User Type</label>
                                    <select class="form-control form-control-lg" wire:model.live="userType" id="exampleFormControlSelect1">
                                        <option value="">Choose one</option>
                                        <option value="0">Adminstrator</option>
                                        <option value="1">Teacher</option>
                                        <option value="2">Student</option>
                                    </select>
                                </div>


                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    @include('partials.scripts')

</div>