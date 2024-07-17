@php
  $data=\App\Models\Thumbnail::orderBy('created_at', 'desc')->take(4)->get()
@endphp

<section class="section">
    <div class="container">
        <div class="gallery-title">
            <h2>Gallery and Photos</h2>
            <a href="{{ route('home.thumbnail') }}">View All</a>
        </div>


                 <div class="gallery-grid">
                    @foreach ($data as $item)
                    <a href="{{ " /gallery/".$item['id'] }}">
                        <div class="gallery-item">
                            <img src="{{ asset('upload/thumbnail/'.$item->thumbnail_image) }}" alt="">
                            <h4>{{ $item->title }}</h4>
                            <!-- <p>16th year of Durga Puja Celebrations at Bengaluru Tripura Mondoli.</p> -->
                        </div>
                    </a>

                @endforeach
                </div>


    </div>
</section>
