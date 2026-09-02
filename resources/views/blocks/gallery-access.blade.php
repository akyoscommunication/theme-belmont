<section class="s-gallery" style="{{ $styles }}">
  <div class="container">
    <x-title_text name="s-gallery" :title="$title" :description="$description"/>

    <div class="s-gallery-grid">
      @foreach($gallery as $item)
        @include('akyos-access::partials.gallery-media', ['media' => $item])
      @endforeach
    </div>
  </div>
</section>
