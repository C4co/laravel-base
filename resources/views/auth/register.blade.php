<x-guest-layout>
  <x-auth-form
    title="Create new account"
    method="POST"
    action="{{ route('register') }}"
    image="bg-register"
  >
    @csrf

    {{-- name --}}
    <x-input
      label="Name"
      placeholder="ex: John Doe"
      type="text"
      name="name"
      value="{{ old('name') }}"
      autofocus
    />

    {{-- email --}}
    <x-input
      label="Email"
      placeholder="ex: johndoe@gmail.com"
      id="email"
      type="email"
      name="email"
      value="{{ old('email') }}"
    />

    {{-- password --}}
    <x-input
      label="Password"
      id="password"
      placeholder="enter your name"
      type="password"
      name="password"
    />

    {{-- confirm your password --}}
    <x-input
      label="Password confirmation"
      id="password_confirmation"
      placeholder="confirm password"
      type="password"
      name="password_confirmation"
    />

    <a
      class="link"
      href="{{ route('login') }}"
    >
      {{ __('Already registered?') }}
    </a>

    <x-button>
      {{ __('Register') }}
    </x-button>

  </x-auth-form>
</x-guest-layout>
