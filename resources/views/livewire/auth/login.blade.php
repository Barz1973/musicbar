<div>
    <div class="d-flex justify-content-center">
        <div class="col-md-5">
            @if (session('message'))
            <div class="alert bg-success text-center text-white"><small>{{ session('message') }}</small></div>
            @endif
            @if (session('error'))
            <div class="alert bg-danger text-center text-white"><small>{{ session('error') }}</small></div>
            @endif
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="card col-md-5">
            <div class="card-header">
                <h3 class="text-center">
                    Login
                </h3>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="login">
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
                    <div class="d-flex mt-3">
                        <p class="flex-grow">
                            <span>Don't have account yet?&nbsp;</span> <a href="/register">
                                <h5>Register here</h5>
                            </a>
                        </p>
                    </div>
                    <button type="submit" class="form-control bg-primary">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>