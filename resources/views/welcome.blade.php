<x-guest-layout>

  <div
    class="flex min-h-screen w-full flex-col items-center justify-center gap-8 bg-gray-100"
  >

    <span class="text-6xl"> 🍎 </span>

    <p class="text-2xl text-gray-500"> Laravel base </p>

    <div class="flex gap-4">
      <a
        class="link"
        href="{{ route('login') }}"
      > Login </a>

      •

      <a
        class="link"
        href={{ route('register') }}
      > Create new account </a>
    </div>

  </div>

</x-guest-layout>
