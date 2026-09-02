<section class="s-team" style="{{ $styles }}">
  <div class="container text-center">

    <x-title_text name="s-team" :title="$title" :description="$description"/>

    <div class="s-team-list">
      @if(count($teams) <= 4)
        <div class="s-team-list-wrapper">
          @foreach($teams as $team)
            <div class="c-team">
              <x-media :media="$team['image']"/>
              <h3 class="c-team__title">{{ $team['name'] }}</h3>
              <div class="c-team__text">{{ $team['job'] }}</div>
            </div>
          @endforeach
        </div>
      @else
        <x-slider
          name="team"
          :per="4"
          :perMd="3"
          :perSm="2"
          :perXs="1"
          :modules="['navigation']"
          :extra="['spaceBetween' => 0]"
        >
          @foreach($teams as $team)
            <div class="swiper-slide">
              <div class="c-team">
                <x-media :media="$team['image']"/>
                <h3 class="c-team__title">{{ $team['name'] }}</h3>
                <div class="c-team__text">{{ $team['job'] }}</div>
              </div>
            </div>
          @endforeach
        </x-slider>
      @endif
    </div>
  </div>
</section>
