@include('kutty.partials.meta')

@include('kutty.partials.header')

{{-- <div x-data="dialog()">
  <button class="btn btn-primary" x-spread="trigger">Open Dialog</button>
  <div class="dialog" x-spread="dialog" x-cloak>
    <div class="dialog-content">
      <div class="dialog-header">Dialog Title
        <button type="button" class="btn btn-light btn-sm btn-icon" aria-label="Close" x-on:click="close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
      </div>
      <div class="dialog-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eius fugiat illum repudiandae commodi inventore magnam unde vero cupiditate molestiae?</div>
      <div class="dialog-footer">
        <button type="button" class="btn btn-light" x-on:click="close">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> --}}

<main class="main-content">
<div
      class="container w-full p-20 m-4 mx-auto my-16 text-center bg-white border-2 border-gray-300 border-dashed rounded-xl"
    >
      {{-- <p class="mt-20 italic text-gray-500 text-md"> --}}
        @yield('content')
        
      {{-- </p> --}}
    </div>
</main>

@include('kutty.partials.footer')


