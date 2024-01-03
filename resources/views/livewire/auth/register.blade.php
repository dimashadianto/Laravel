<div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Register</div>
                <div class="card-body">
                    <form wire:submit.prevent="registerUser">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="name" placeholder="Enter your name" wire:model.defer="name">
                            @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter your email" wire:model.defer="email">
                            @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter your password" wire:model.defer="password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" placeholder="Enter your confirm password" wire:model.defer="password_confirmation">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary">Register</button>
                        </div>
                        <a href="{{route('login')}}" class="text-primary">Already have an account? Login</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>