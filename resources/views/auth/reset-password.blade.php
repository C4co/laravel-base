<x-guest-layout>
  <x-auth-form
    title="Reset password"
    method="POST"
    image="bg-reset-password"
    action="{{ route('password.update') }}"
  >

    @csrf

    {{-- password token --}}
    <input
      type="hidden"
      name="token"
      value="{{ $request->route('token') }}"
    >

    {{-- email --}}
    <x-input
      label="Email"
      id="email"
      type="email"
      name="email"
      value="{{ old('email', $request->email) }}"
      required
      autofocus
    />

    {{-- password --}}
    <x-input
      label="Password"
      type="password"
      name="password"
      placeholder="Enter your password"
    />

    {{-- confirm password --}}
    <x-input
      label="Password confirmation"
      id="password_confirmation"
      type="password"
      name="password_confirmation"
      placeholder="Confirm your password"
    />

    <x-button>
      {{ __('Reset Password') }}
    </x-button>
  </x-auth-form>
</x-guest-layout>
