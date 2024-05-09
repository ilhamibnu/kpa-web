@foreach ($riwayatPengaduan as $data )
<div class="col-lg-4 col-md-6">
    <div class="single-blog-item">


        <div class="blog-content">
            <ul class="post-meta">
                <li>
                    <span>Date:</span>
                    {{ $data->created_at }}
                </li>
            </ul>
            <div class="text-center">
                <h3>
                    <a href="blog-details.html">{{ $data->subjek }}</a>
                </h3>


                <div class="blog-btn">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#isiModal{{ $data->id }}" class="default-btn">Detail</a>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="isiModal{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Detail</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <h3>{{ $data->subjek }}</h3>
                                <p>
                                    {!! nl2br(e($data->isi)) !!}
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="default-btn" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach
