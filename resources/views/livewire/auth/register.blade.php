<div class=" d-flex justify-content-center">
    <div class="card col-md-5">
        <div class="card-header">
            <h3 class="text-center">
                Register
            </h3>
        </div>
        <div class="card-body">
        <form wire:submit.prevent="register">
            <div class="form-group mb-3">
                <label for="name">Name:</label>
                <input type="text" id="name" class="form-control" wire:model.defer="name" placeholder="Name">
                @error('name')
                <h6 class="text-danger">*{{ $message }}</h6>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="email">Email:</label>
                <input type="email" id="email" class="form-control" wire:model.defer="email" placeholder="Email">
                @error('email')
                <h6 class="text-danger">*{{ $message }}</h6>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="password">Password:</label>
                <input type="password" id="password" class="form-control" wire:model.defer="password" placeholder="Password">
                @error('password')
                <h6 class="text-danger">*{{ $message }}</h6>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" id="password_confirmation" class="form-control" wire:model.defer="password_confirmation" placeholder="Comfirm Password">
                @error('password_confirmation')
                <h6 class="text-danger">*{{ $message }}</h6>
                @enderror
            </div>
            <div class="d-flex mt-3">
                    <p class="flex-grow">
                        <span>Already have an account?&nbsp;</span> <a href="/login">
                            <h5>Go to Login</h5>
                        </a>
                    </p>
                </div>
            <button type="submit" class="form-control bg-primary">
                Register
            </button>
        </form>
        </div>
    </div>
</div>