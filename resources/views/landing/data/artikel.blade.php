@foreach ($artikel as $data )
<div class="col-lg-4 col-md-6">
    <div class="single-blog-item">
        <div class="blog-image">
            <a href="#">
                <img src="{{ asset('artikel/image/'.$data->foto) }}" alt="image">
            </a>
        </div>

        <div class="blog-content">
            <ul class="post-meta">
                <li>
                    <span>By Admin:</span>
                    <a href="#">{{ $data->user->name }}</a>
                </li>
                <li>
                    <span>Date:</span>
                    {{ $data->created_at }}
                </li>
            </ul>
            <h3>
                <a href="blog-details.html">{{ $data->judul }}</a>
            </h3>
            <p>
                {{ $str = Str::limit($data->isi, 100) }}
            </p>

            <div class="blog-btn">
                <a href="/user/artikel/{{ $data->id }}" class="default-btn">Read More</a>
            </div>
        </div>
    </div>
</div>
@endforeach
