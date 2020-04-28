@extends('admin.appmain')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Edit User # {{$user->name}}</div>
        <div class="card-body">
          <form method="post" action="{{ route('admin.update', $user->id) }}">

            @csrf

            <!-- Name -->
            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- Surname -->
            <div class="form-group row">
              <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

              <div class="col-md-6">
                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ $user->surname }}" required autocomplete="surname" autofocus>

                @error('surname')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- User IIN-->
            <div class="form-group row">
              <label for="user_iin" class="col-md-4 col-form-label text-md-right">{{ __('User IIN') }}</label>

              <div class="col-md-6">
                <input id="user_iin" type="text" class="form-control @error('user_iin') is-invalid @enderror" name="user_iin" value="{{ $user->user_iin }}" required autocomplete="user_iin" autofocus>

                @error('user_iin')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- Card Number -->
            <div class="form-group row">
              <label for="card_number" class="col-md-4 col-form-label text-md-right">{{ __('Card number') }}</label>

              <div class="col-md-6">
                <input id="card_number" type="text" class="form-control @error('card_number') is-invalid @enderror" name="card_number" value="{{ $user->card_number }}" required autocomplete="card_number" autofocus>

                @error('card_number')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- Email -->
            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-warning">
                  {{ __('Update') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>

  </div>
</div>

@endsection
