<section class="s-text-image {{ $classes }}" style="{{ $styles }}">
  <div class="container {{ $position }}">
    <div class="s-text-image-wrapper">
      <x-title_text name="s-text-image" :title="$title" :description="$content"/>
      @if($button && $button['link'])
        <x-button
          href="{{ $button['link']['url'] }}"
          target="{{ $button['link']['target'] }}"
          appearance="{{ $button['color'] }}"
          icon="{{ $button['icon'] }}"
        >
          {!! $button['link']['title'] !!}
        </x-button>
      @endif
    </div>
    <div class="s-text-image-wrapper">
      @if($images)
        <div animation-stagger>
          <x-image :lg="$images[0]"/>
        </div>
        @if(count($images) > 1)
          <div animation-stagger>
            <x-image :lg="$images[1]"/>
          </div>
        @endif
      @endif
    </div>
  </div>
</section>
