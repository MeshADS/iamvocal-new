<?php $__env->startSection('title'); ?>
Speaker Details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="section section--singular">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <br>
                <div class="container">
                    <div class="mypanel">

                        <ul style="padding:0px !important;">
                            <li style="list-style:none;">
                                <div class="board board--left">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 nopadding">
                                            <div style="height:442px; width:auto;" class="board__image poster in-view">
                                                <img class="lazyload--el lazyload in-view__child"
                                                    src="<?php echo e(asset('files/media/mrD.jpg')); ?>" alt="'.$row['name'].'"
                                                    width="100%" height="100%">
                                                <div class="poster--cover in-view in-view__child">
                                                </div>
                                            </div>
                                        </div>

                                        <div style="background-color: #000;"
                                            class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div style="padding-top:2px;" class="in-view">

                                                <div
                                                    class=" member__name member__name1 in-view__child in-view__child--fadein in-view__child--in js-video-lead">
                                                    <img style="object-fit: cover;  width:555px; height:370px;"
                                                        src="<?php echo e(asset('files/media/lb.png')); ?>" alt="" width="555px "
                                                        height="370px">
                                                    <div style="position:relative; overflow:hidden; margin-bottom:0px;"
                                                        class=' newvideo member__name1 in-view__child in-view__child--fadein in-view__child--in'>
                                                        <iframe width="560" height="315"
                                                            src="https://www.youtube.com/embed/sX_BUWjspoY"
                                                            frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen></iframe>

                                                    </div>
                                                </div>

                                            </div>
                                            <script>
                                                function video_lead_play_state(element, active) {
                                                    var $active = $(element).closest(
                                                        ".js-video-lead").find(
                                                        ".btn-play-active");
                                                    var $default = $(element).closest(
                                                        ".js-video-lead").find(
                                                        ".btn-play-default");

                                                    if (active) {
                                                        $active.show();
                                                        $default.hide();
                                                    } else {
                                                        $active.hide();
                                                        $default.show();
                                                    }
                                                }


                                                $(document).ready(function () {
                                                    // hide the videos and show the images
                                                    var $videos = $(
                                                        ".js-video-lead iframe");
                                                    $videos.hide();
                                                    $(".js-video-lead > img").not(
                                                        ".btn-play").show();

                                                    // position the video holders
                                                    $(".js-video-lead").css("position",
                                                        "relative");

                                                    // prevent autoplay on load and add the play button
                                                    $videos.each(function (index, video) {
                                                        var $video = $(video);

                                                        // prevent autoplay due to normal navigation
                                                        var url = $video.attr(
                                                            "src");
                                                        if (url.indexOf(
                                                                "&autoplay") > -1) {
                                                            url = url.replace(
                                                                "&autoplay=1",
                                                                "");
                                                        } else {
                                                            url = url.replace(
                                                                "?autoplay=1",
                                                                "");
                                                        }
                                                        $video.attr("src", url)
                                                            .removeClass(
                                                                "js-video-lead-autoplay"
                                                            );

                                                        // add and position the play button
                                                        var top = parseInt(
                                                            parseFloat($video
                                                                .css("height")
                                                            ) / 2) - 15;
                                                        var left = parseInt(
                                                            parseFloat($video
                                                                .css("width")) /
                                                            2) - 21;
                                                        var $btn_default = $(
                                                            "<img />").attr(
                                                            "src",
                                                            "files/media/play-default.png"
                                                        ).css({
                                                            "position": "absolute",
                                                            "top": top +
                                                                "px",
                                                            "left": left +
                                                                "px",
                                                            "z-index": 100
                                                        }).addClass(
                                                            "btn-play btn-play-default"
                                                        );
                                                        var $btn_active = $(
                                                            "<img />").attr(
                                                            "src",
                                                            "files/media/play-active.png"
                                                        ).css({
                                                            "display": "none",
                                                            "position": "absolute",
                                                            "top": top +
                                                                "px",
                                                            "left": left +
                                                                "px",
                                                            "z-index": 110
                                                        }).addClass(
                                                            "btn-play btn-play-active"
                                                        );
                                                        $(".js-video-lead").append(
                                                                $btn_default)
                                                            .append($btn_active);
                                                    });


                                                    $(".js-video-lead img").on("click",
                                                        function (event) {
                                                            var $holder = $(this)
                                                                .closest(
                                                                    ".js-video-lead");
                                                            var $video = $holder.find(
                                                                "iframe");
                                                            var url = $video.attr(
                                                                "src");
                                                            url += (url.indexOf("?") > -
                                                                1) ? "&" : "?";
                                                            url += "autoplay=1";
                                                            $video.addClass(
                                                                "js-video-lead-autoplay"
                                                            ).attr("src", url);
                                                            $holder.find("img")
                                                                .remove();
                                                            $video.show();
                                                        });

                                                    $(".js-video-lead > img").on(
                                                        "mouseenter",
                                                        function (event) {
                                                            video_lead_play_state(this,
                                                                true);
                                                        });

                                                    $(".js-video-lead > img").not(
                                                        ".btn-play").on("mouseleave",
                                                        function (event) {
                                                            video_lead_play_state(this,
                                                                false);
                                                        });
                                                });

                                            </script>

                                            <div style=" padding-top:10px;" class="board__copy in-view">
                                                <p
                                                    class="sub-head dashed in-view__child in-view__child--fadein text-white">
                                                    DEALING WITH DESIGN
                                                    </span> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li style="list-style:none;">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="board__copy in-view">
                                            <h2 style="text-transform: uppercase;"
                                                class="in-view__child in-view__child--fadein text-black">
                                                Donald Okudu
                                            </h2>
                                            <p style="text-transform: uppercase;"
                                                class="sub-head dashed in-view__child in-view__child--fadein text-black">
                                                ART/CREATIVE DIRECTOR
                                            </p>
                                            <p style="margin-left:0px;"
                                                class="indent in-view__child in-view__child--fadein text-black">
                                                Donald Okudu is a Creative Director with a deep experience in many
                                                disciplines ranging from digital to classical advertising & event
                                                organization. Specialized in creating multi-platform campaigns with a
                                                strong creative and strategic approach. His aim is to motivate teams on
                                                pushing creative boundaries and discovering new disciplines. Leads and
                                                manages ideas into concrete processes, from concept to completion.
                                            </p>
                                            <p style="margin-left:0px;"
                                                class="board__copy--links indent in-view__child in-view__child--fadein">
                                                <span
                                                    class="sub-head dashed dashed--reverse dashed--hover in-view__child">
                                                    <a href=""><span class="sr-only">Follow us on
                                                            instagram</span><i class="fa fa-lg fa-instagram"></i></a>
                                                    <a href=""><span class="sr-only">Follow us on
                                                            linkedin</span><i
                                                            class="fa fa-lg fa-linkedin-square"></i></a>
                                                    <a href=""><span class="sr-only">Follow us on
                                                            twitter</span><i class="fa fa-lg fa-twitter-square"></i></a>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div style="display:flex; align-items:flex-end;"
                                        class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="board__copy in-view">

                                            <div style="display:flex; justify-content:flex-start; margin:0px !important;"
                                                class="board__copy--links indent in-view__child in-view__child--fadein">
                                                    <input type="hidden" name="event_speaker_id" value="">
                                                    <a style="cursor:pointer; border:0px; background:none;"
                                                        class="nopadding"  name="add_eventspeaker_btn">
                                                        <p style="text-transform: uppercase; line-height:1.1; "
                                                            class="sub-head  in-view__child in-view__child--fadein">
                                                            <i style="font-size:20px; color:#f71735;"
                                                                class="fa fa-arrow-circle-left"></i>
                                                            Back To Event</p>
                                                    </a>
                                            </div>

                                        </div>

                                        <div class="board__copy in-view">

                                            <div style="display:flex; justify-content:flex-end;" class="">
                                                <img class="lazyload--el lazyload in-view__child nextimg"
                                                    src="<?php echo e(asset('files/media/mrD.jpg')); ?>" alt="" >
                                            </div>
                                            <div style="display:flex; justify-content:flex-end;"
                                                class="board__copy--links indent in-view__child in-view__child--fadein">
                                                    <input type="hidden" name="speaker_details_id" value="">
                                                    <input type="hidden" name="events_details_id" value="">
                                                    <a style="cursor:pointer; border:0px; background:none;"
                                                        class="nopadding"  name="speaker_details_btn">
                                                        <p style="text-transform: uppercase; padding-top:12px;"
                                                            class="sub-head in-view__child in-view__child--fadein">
                                                            Next Talk <i style=" font-size:20px; color:#f71735;"
                                                                class="fa fa-arrow-circle-right"></i>
                                                        </p>
                                                    </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tedxiydt/public_html/resources/views/pages/speaker.blade.php ENDPATH**/ ?>