<x-guest-layout>

  <x-auth-form
    title="Two factor"
    method="POST"
    image="bg-two-factor"
    action="{{ route('two-factor.login') }}"
  >

    <div
      x-data="{ recovery: false }"
      class="flex flex-col gap-4"
    >

      <p
        class="text"
        x-show="! recovery"
      >
        {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
      </p>

      <p
        class="text"
        x-show="recovery"
      >
        {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
      </p>

      @csrf

      <div x-show="! recovery">
        <x-input
          label="Code"
          id="code"
          type="text"
          inputmode="numeric"
          name="code"
          autofocus
          x-ref="code"
          autocomplete="one-time-code"
        />
      </div>

      <div x-show="recovery">
        <x-input
          label="Recovery code"
          id="recovery_code"
          class="mt-1 block w-full"
          type="text"
          name="recovery_code"
          x-ref="recovery_code"
          autocomplete="one-time-code"
        />
      </div>

      <div class="xs:flex-col xs:gap-4 flex justify-between">
        <button
          type="button"
          class="btn-outline btn-outline--info"
          x-show="! recovery"
          x-on:click="
                recovery = true;
                $nextTick(() => { $refs.recovery_code.focus() })
              "
        >
          {{ __('Use a recovery code') }}
        </button>

        <button
          type="button"
          class="btn-outline btn-outline--info"
          x-show="recovery"
          x-on:click="
              recovery = false;
              $nextTick(() => { $refs.code.focus() })
            "
        >
          {{ __('Use an authentication code') }}
        </button>

        <x-button>
          {{ __('Log in') }}
        </x-button>
      </div>

    </div>

  </x-auth-form>
</x-guest-layout>
