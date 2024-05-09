@extends('landing.layout.main')

@section('content')
<!-- Start Page Banner -->
<div class="page-banner-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Artikel</h2>
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>Artikel</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Blog Area -->
<section class="blog-area pt-100 pb-100">
    <div id="test" class="container">
        <div class="row">
            @include('landing.data.artikel')
        </div>
    </div>
    @if($jumlah_data > 3)
    <div class="ajax-load text-center mb-3">
        <button id="loadmore" class="default-btn">More</button>
    </div>
    @else
    <div class="ajax-load text-center mb-3">
        <button id="loadmore" class="default-btn" style="display: none;">More</button>
    </div>
    @endif
</section>
<!-- End Blog Area -->
@endsection

@section('script')
<script>
    var page = 1;
    var ENDPOINT = "/user/artikel?";

    $("#loadmore").click(function() {
        page++;
        loadMoreData(page);
    });

    function loadMoreData(page) {
        $.ajax({
                url: ENDPOINT + '&page=' + page
                , type: "get"
                , beforeSend: function() {
                    $('#loadmore').show();
                }
            })
            .done(function(data) {
                if (data.html == "") {
                    $('.ajax-load').html("No more records found");
                    return;
                }
                $('#loadmore').show();
                $("#test").append('<div class="row">' + data.html + '</div>');
            })
            .fail(function(jqXHR, ajaxOptions, thrownError) {});
    }

</script>
@endsection
