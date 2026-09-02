@php $shortcode = "[forminator_form id=".$form."]" @endphp

<section class="s-form bg-color-primary {{ $classes }}" style="{{ $styles }}">
  <div class="container {{ $content_position }}">
    <div class="s-form-wrapper">
      <div class="s-form-infos">
        {!! $options['address'] !!}
        <div>
          <a href="tel:+33{{ $options['phone'] }}">@icon('phone') {!! $options['phone'] !!}</a>
          <a href="mailto:{{ $options['email'] }}">@icon('mail') {!! $options['email'] !!}</a>
        </div>
        <x-socials/>
      </div>
      {!! $shortcode !!}
    </div>
    <div class="s-form-wrapper">
      <x-media :media="$image"/>
    </div>
  </div>
</section>
