<x-guest-layout>
  <x-auth-form
    title="Laravel Base"
    method="POST"
    image="bg-login"
    action="{{ route('login') }}"
  >

    @csrf

    @if (session('status'))
      <div class="alert alert--info">
        {{ session('status') }}
      </div>
    @endif

    <div>
      @if (Route::has('register'))
        <a
          class="link"
          href="{{ route('register') }}"
        >
          {{ __('Create new account') }}
        </a>
      @endif
    </div>

    <x-input
      label="Email"
      placeholder="ex: johndoe@gmail.com"
      type="text"
      name="email"
      value="{{ old('email') }}"
      autofocus
    />

    <x-input
      label="Password"
      placeholder="Enter your password"
      type="password"
      name="password"
    />

    <label
      class="check"
      for="remember_me"
    >
      <input
        class="check__input"
        id="remember_me"
        type="checkbox"
        name="remember"
      >
      <span class="check__label">{{ __('Remember me') }}</span>
    </label>

    <div>
      @if (Route::has('password.request'))
        <a
          class="link"
          href="{{ route('password.request') }}"
        >
          {{ __('Forgot your password?') }}
        </a>
      @endif
    </div>

    <x-button type="submit"> Login </x-button>

  </x-auth-form>
</x-guest-layout>
