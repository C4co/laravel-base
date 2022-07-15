<x-guest-layout>
  <x-auth-form
    title="Recover password"
    method="POST"
    image="bg-forgot-password"
    action="{{ route('password.email') }}"
  >
    @csrf

    <div class="text">
      {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    @if (session('status'))
      <div class="alert alert--info">
        {{ session('status') }}
      </div>
    @endif

    <!-- Email Address -->
    <x-input
      label="Email"
      placeholder="ex: johndoe@gmail.com"
      type="email"
      name="email"
      value="{{ old('email') }}"
      autofocus
    />

    <x-button>
      {{ __('Send email ') }}
    </x-button>

    <div>
      <a
        class="link"
        href="{{ route('login') }}"
      >
        {{ __('Login page') }}
      </a>
    </div>

  </x-auth-form>
</x-guest-layout>
