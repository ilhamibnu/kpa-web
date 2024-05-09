@extends('landing.layout.main')

@section('content')
<!-- Start Page Banner -->
<div class="page-banner-area item-bg3">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Riwayat Pengaduan</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Riwayat Pengaduan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Event Area -->
<section class="event-area event-item-two pt-100 pb-70">
    <div id="test" class="container-fluid">
        <div class="row">
            @include('landing.data.riwayat-pengaduan')
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
<!-- End Event Area -->
@endsection

@section('script')
<script>
    var page = 1;
    var ENDPOINT = "/user/riwayat-pengaduan?";

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
