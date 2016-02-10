<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">New Blog</h1>
        </div>
        <form action="<?php echo base_url('admin/post'); ?>" method="post">
            <div class="col-md-12 col-md-12 marg-top-25">
                <h4>Title *</h4>
                <input type="text" name="blog-title" class="form-control" required />
            </div>
            <div class="col-md-12 marg-top-25">
                <h4>Blog *</h4>
                <textarea name="blog-body" class="fullwidth blog-body-input" placeholder="Insert text or HTML..."></textarea>
            </div>
            <div class="col-md-12 marg-top-25 text-right">
                <input type="submit" class="btn btn-primary" value="Post" style="width: 150px;">
            </div>
        </form>
    </div>
    
    <hr class="marg-top-50">
    
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Posted Blog</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Title</td> 
                        <td>Posted on</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $loop = count($blogs);
                        foreach($blogs as $blog) {
                    ?>
                    <tr>
                        <td><h4><?php echo $loop; ?></h4></td>
                        <td data-postid="<?php echo $blog['id']; ?>">
                            <h4 class="admin-blog-title"><?php echo $blog['title']; ?></h4>
                            <textarea class="admin-blog-body fullwidth"><?php echo $blog['post']; ?></textarea>
                            <button class="btn btn-warning admin-blog-action" disabled >Save changes</button>
                            <button class="btn btn-danger admin-blog-action2">Delete this blog</button>
                            <i class="fa fa-spinner fa-pulse pull-right admin-blog-loading"></i>
                            <span class="admin-blog-notif pull-right"></span>
                        </td> 
                        <td><h4><?php echo date('j/n/Y',strtotime($blog['timestamp'])); ?></h4></td>
                    </tr>
                    <?php
                            $loop--;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $('.admin-blog-title').on('click', function() {
        $(this).siblings('.admin-blog-body, .admin-blog-action, .admin-blog-action2').toggle();
    });
    
    $('.admin-blog-body').on('change keyup', function() {
        $(this).siblings('.admin-blog-action').prop('disabled', false);
    });
    
    $('.admin-blog-action').on('click', function() {
        
        var selected = $(this);
        
        selected.siblings('.admin-blog-loading').show();
        
        var postId = selected.parent().data('postid');
        var post = selected.siblings('.admin-blog-body').val();
        
        $.ajax({
            method: 'post',
            url: '<?php echo base_url('admin/update'); ?>',
            data: 'id='+postId+'&post='+post,
            success: function(res) {
                console.log(res);
                
                if(res == 'Saved') {
                    selected.siblings('.admin-blog-loading').hide();
                    selected.siblings('.admin-blog-action').prop('disabled', true);
                }
                
                selected.siblings('.admin-blog-notif').text(res);
            }
        });
    });
    
    $('.admin-blog-action2').on('click', function() {
        var selected = $(this);
        
        if(confirm('Are you sure want to delete this blog post?')) {
            var postId = selected.parent().data('postid');
            var del_url = '<?php echo base_url('admin/delete'); ?>';
            window.location.replace(del_url+'/'+postId);
        }
    });
    
</script>