<section class="s-text-image-inline" style="{{ $styles }}" animation-background="{{ $classes }}">

  <div class="container">

    <div class="s-text-image-inline-row {{ $position }}">
      <div class="s-text-image-inline-wrapper s-text-image-inline-wrapper--text" animation-stagger>

        <x-title :tag="$title['tag']" animation-mask>{!! $title['value'] !!}</x-title>

        {!! $content !!}

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
      @if($images && isset($images[0]))
        <div class="s-text-image-inline-wrapper s-text-image-inline-wrapper--image" animation-stagger>
          <x-slider
            name="content--2"
            :per="1"
            :perMd="1 "
            :perSm="1"
            :perXs="1"
            :modules="['navigation']"
            :extra="['spaceBetween' => 0]"
          >
            @foreach($images as $image)
              <div class="swiper-slide">
                <x-media :media="$image" animation-wipe animation-stagger/>
              </div>
            @endforeach
          </x-slider>
        </div>
      @endif
    </div>
  </div>

</section>
