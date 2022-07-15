<x-guest-layout>

  <section
    class="flex min-h-screen w-full items-center justify-center bg-gray-100 p-4"
  >
    <div
      class="flex w-full max-w-[600px] flex-col gap-6 rounded bg-white p-4 shadow-2xl"
    >

      <h1 class="title text-lg"> {{ config('app.name') }} </h1>

      <p class="text">
        {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
      </p>

      @if (session('status') == 'verification-link-sent')
        <div class="alert alert--info">
          {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
        </div>
      @endif

      <form
        method="POST"
        action="{{ route('verification.send') }}"
      >
        @csrf
        <div>
          <x-button
            class="btn--success"
            type="submit"
          >
            {{ __('Resend Verification Email') }}
          </x-button>
        </div>
      </form>

      <hr>

      <div class="flex justify-between gap-4">
        <a
          href="{{ route('profile.show') }}"
          class="btn-outline"
        >
          {{ __('Edit Profile') }}
        </a>
        <form
          method="POST"
          action="{{ route('logout') }}"
          class="inline"
        >
          @csrf
          <button
            type="submit"
            class="btn-outline btn-outline btn-outline--danger"
          >
            {{ __('Log Out') }}
          </button>
        </form>
      </div>

    </div>
  </section>

</x-guest-layout>
