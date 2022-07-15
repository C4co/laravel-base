<x-guest-layout>

  <section
    class="flex min-h-screen w-full items-center justify-center bg-gray-200 p-4"
  >

    <div
      class="flex w-full max-w-[500px] flex-col gap-4 rounded bg-white p-6 shadow-2xl"
    >
      <h1 class="title text-lg"> Secure area </h1>

      <div class="text-gray-500">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
      </div>

      <form
        class="flex flex-col gap-4"
        method="POST"
        action="{{ route('password.confirm') }}"
      >

        @csrf

        <x-input
          label="Password"
          placeholder="Enter your password"
          type="password"
          name="password"
        />

        <x-button type="submit">
          {{ __('Confirm') }}
        </x-button>

      </form>
    </div>

  </section>

</x-guest-layout>
