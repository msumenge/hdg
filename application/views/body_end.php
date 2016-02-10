    <div id="footer-replacement fullwidth" style="height: 80px; margin-top: 80px;"></div>
    <footer>
        <h4>&copy; <a href="http://handsomedragongames.com/">Handsome Dragon Games</a> 2016</h4>
        <span class="author">by <a href="http://maryo.info" target="_blank">Maryo Sumenge</a></span>
    </footer>
    
    <script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
    <script>
        var adminFormVisible = false;
        $('#login-link').on('click', function(e) {
            e.preventDefault();
            if(adminFormVisible) {
                $('#admin-login-form').css('right', '-151px');
                adminFormVisible = false;
            } else {
                $('#admin-login-form').css('right', '0px');
                adminFormVisible = true;
            }
        });
    </script>
</body>
</html>