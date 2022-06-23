<div class="widget">
    <h2 class="widget-title">Recent Posts</h2>
    <div class="blog-list-widget">
        <div class="list-group">
            @forelse ($recentpost as $recent)
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="w-100 justify-content-between">
                    <img src="{{asset('uploads/' . $recent->gambar_artikel)}}" alt="" class="img-fluid float-left">
                    <h5 class="mb-1">{!! $recent->judul !!}</h5>
                    <small>{{ $recent->created_at }}</small>
                </div>
            </a>
            @empty
            Null
            @endforelse

        </div>
    </div><!-- end blog-list -->
</div><!-- end widget -->
