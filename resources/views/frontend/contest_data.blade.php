<style>
    .mb-20 {
        margin-bottom: 20px;
    }

</style>
<section class="page-section" id="schedule" style="background-color: #9999992b;">
    <div class="container">
        <h1 class="section-title">
            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span
                    class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i
                        class="fa fa-star fa-stack-1x"></i></span></span>
            <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">Latest Contest</span>
        </h1>
        <div class="row">

            <!-- -->
            @foreach ($data as $value)

                <div class="col-md-3">
                    <article class="post-wrap" data-animation="fadeInUp" data-animation-delay="100">
                        <div class="post-media">
                            <img src="{{ URL::asset('upload-contest-banner/' . $value->contest_banner) }}"
                                class="img" alt="" />
                        </div>
                        <div class="post-header">
                            <h3 class="post-title"><a href="#">{{ $value->contest_name }}</a></h3>

                            <div class="post-meta">
                                <span class="post-date">
                                    <li style="list-style:none;color:black">Start-Date :<span class="day" style="font-size:15px;">{{ $value->start_date }}</span></li>
                                    <li style="list-style:none;color:black">End-Date : <span class="day" style="font-size:15px;">{{ $value->end_date }}</span></li>
                                </span>
                            </div>
                        </div>
                        <div class="post-body">
                            <div class="post-excerpt">
                                <p>{{ $value->contest_description }}</p>
                            </div>
                        </div>
                        <div class="post-footer">
                            <span class="post-readmore">
                                <a href="{{ route('contest-Registration')}}" class="btn btn-theme btn-theme-transparent">participate</a>
                            </span>
                        </div>
                    </article>
                </div>

            @endforeach
        </div>
    </div>
</section>
