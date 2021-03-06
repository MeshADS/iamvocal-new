<div class="modal fade stick-up" id="addvideo" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header clearfix text-left">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
                        class="pg-close fs-14"></i>
                </button>
                <h5>Add <span class="semi-bold">Video Details</span></h5>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('eventgallery.store')); ?>" method="POST" enctype="multipart/form-data" name="media"
                    id="media">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Video Name</label>
                                <input type="text" name="event_theme" placeholder="video name" class="form-control"
                                    required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Event Name</label>
                                <input type="text" name="event_name" placeholder="event name" class="form-control"
                                    required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Youtube Embed Url</label>
                                <input type="text" rows="9" name="embed" 
                                    class="form-control" placeholder="" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Video Image</label>
                                <input type="file" id="file_path" name="file_path" accept="image/*" class="form-control"
                                    required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                        </div>
                        <div class="col-md-4 m-t-10 sm-m-t-10">
                            <button type="submit" name="submit" id="submit" value="submit"
                                class="btn btn-primary btn-block m-t-5">Save</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/tedxiydt/public_html/resources/views/admin/partials/modals/addvideo.blade.php ENDPATH**/ ?>