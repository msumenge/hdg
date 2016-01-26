<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Developer Blogs</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 blogs">
<?php
            foreach($blogs as $blog) {
                $date_posted = date('j M Y', strtotime($blog['timestamp']));
?>
            <div class="blog-container marg-top-25">
                <h2><?php echo $blog['title']; ?></h2>
                <div><?php echo $blog['post']; ?></div>
                <div class="time-posted text-center">
                    <?php echo $date_posted; ?>
                </div>
            </div>
<?php
             }
?>
        </div>
        <div class="col-md-3 padd-0">
            <p class="marg-top-25">
                <a class="twitter-timeline" href="https://twitter.com/AHandsomeDragon" data-widget-id="597748770755858432">Tweets by @AHandsomeDragon</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 marg-top-25 text-center">
            <button id="load-more-blog" class="btn btn-primary">Load More &nbsp; <i class="fa fa-angle-down"></i>&nbsp;</button>
        </div>
    </div>
</div>
<script>
    $('#load-more-blog').on('click', function() {
        var offset = $('.blog-container').length;
        
        $.ajax({
            url: '<?php echo base_url('devlog/more'); ?>',
            data: 'offset='+offset,
            type: 'post',
            success: function(r) {
                if(r == 'false') {
                    $('#load-more-blog').prop('disabled', true);
                } else {
                    var res = JSON.parse(r)[0];
                
                    //convert to js Date()
                    var js_t = new Date(Date.parse(res.timestamp.replace('-','/','g')))

                    var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

                    //get Date info
                    var day = js_t.getDate();
                    var monthIndex = js_t.getMonth();
                    var year = js_t.getFullYear();

                    var timestamp = day+' '+monthNames[monthIndex]+' '+year;

                    var blog = '<div class="blog-container marg-top-25"><h2>'+res.title+'</h2><div>'+res.post+'</div><div class="time-posted text-center">'+timestamp+'</div></div>';

                    $('.blogs').append(blog);
                }
            }
        });
    });
</script>