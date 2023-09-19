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
                            <h4>New here?</h4>
                            <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                            <form class="pt-3" wire:submit.prevent="handleSubmit">
                                <div class="form-group">
                                    <label>Fullname</label>
                                    <input type="text" wire:model="fullname" class=" @error('fullname') bg-danger text-white @enderror form-control form-control-lg" placeholder="Ex. Juan Dela Cruz" />
                                    @error('fullname') <span class="text-error">{{$message}}</span>@enderror
                                </div>

                                <div class="form-group">
                                    <label>User Id</label>
                                    <input type="text" wire:model="user_id" class="@error('user_id') bg-danger text-white @enderror form-control form-control-lg" placeholder="Ex. Juandelacruz_123" />
                                    @error('user_id') <span class="text-error">{{$message}}</span>@enderror
                                </div>
                                <div class="form-group" wire:ignore>
                                    <label>Gender</label>

                                    <div class="form-check form-check-primary">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" id="male" value="0" wire:model="gender" checked> Male </label>
                                    </div>

                                    <div class="form-check form-check-danger">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" id="female" value="1" wire:model="gender"> Female </label>
                                    </div>

                                </div>
                                <hr>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" wire:model="password" class="@error('password') bg-danger text-white @enderror form-control form-control-lg" placeholder="********">
                                    @error('password') <span class="text-error">{{$message}}</span>@enderror
                                </div>

                                <div class="form-group">
                                    <label>Password Confirmation</label>
                                    <input type="password" wire:model="password_confirmation" class="@error('password') bg-danger text-white @enderror form-control form-control-lg" placeholder="********">
                                    @error('password') <span class="text-error">{{$message}}</span>@enderror
                                </div>
                                <div class="mb-4" wire:ignore>
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input wire:model.live="terms" value="true" type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    @if($terms && $adminCount <= 0 ) <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN UP</button>
                                        @endif
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