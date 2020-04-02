<article @php post_class() @endphp>
  <header>
    <h2 class="entry-title text-pink-500"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
    @include('partials/entry-meta')
  </header>
  <div class="lg:flex -mx-6">
    <div class="entry-summary">
    <div id="navwrapper" class="h-full overflow-y-auto scrolling-touch lg:h-auto lg:block lg:relative lg:sticky lg:top-16 bg-white lg:bg-transparent">
      @include('partials/sidebar')
    </div>
      @php the_excerpt() @endphp
    </div>
  </div>
</article>
