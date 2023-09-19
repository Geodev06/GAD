<div>
    <div class="card">
        <div class="card-body">
            @include('partials.flash-message')

            <h4 class="card-title">Add new User </h4>
            <p class="card-description"> Please complete the given fields. </p>

            <form class="forms-sample" wire:submit.prevent="save">
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


                <div class="form-group">
                    <label>Gender</label>

                    <div class=" ">
                        <label class="form-check-label">
                            <input type="radio" class="" id="male" value="0" wire:model="gender" checked> Male </label>
                    </div>

                    <div class=" ">
                        <label class="form-check-label">
                            <input type="radio" class="" id="female" value="1" wire:model="gender"> Female </label>
                    </div>

                </div>
                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                <a class="btn btn-light" href="/manage-users" wire:navigate>Cancel</a>
            </form>
        </div>
    </div>

</div>