<div class="{{ $block->classes }} flex items-center justify-center h-screen">
  <div class="text-center">
    @if ($heading)
    <h1 class="text-4xl text-black">{{ $heading }}</h1>
    @else
    <h1 class="text-4xl text-black">Enter Heading Here</h1>
    @endif
  </div>

  @if ($background_image)
  <div class="absolute top-0 left-0 w-full h-full bg-cover bg-center" style="background-image: url('{{ $background_image }}');"></div>
  @endif
</div>