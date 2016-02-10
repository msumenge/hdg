<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Contact</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 marg-top-25">
            <div class="col-md-12">
                <?php
                    if(isset($_SESSION['error'])) {
                ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php echo $_SESSION['error']; ?>
                </div>
                <?php
                    }
                    if(isset($_SESSION['success'])) {
                ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    Your message has been sent successfully. <strong>Thank you!</strong>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
        <form action="<?php echo base_url('contact/submit'); ?>" method="post">
            <div class="col-md-6">
                <div class="col-md-12">
                    <h4>Full name *</h4>
                    <input type="text" class="form-control" name="contact-name" required value="<?php echo $form = isset($_SESSION['form_data']) ? $_SESSION['form_data']['name'] : ''; ?>"/>
                </div>
                <div class="col-md-12 marg-top-15">
                    <h4>Email address *</h4>
                    <input type="email" class="form-control" name="contact-email" required value="<?php echo $form = isset($_SESSION['form_data']) ? $_SESSION['form_data']['email'] : ''; ?>"/>
                </div>
                <div class="col-md-12 marg-top-15">
                    <h4>Phone</h4>
                    <input type="text" class="form-control" name="contact-phone" value="<?php echo $form = isset($_SESSION['form_data']) ? $_SESSION['form_data']['phone'] : ''; ?>"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-12">
                    <h4>Message *</h4>
                    <textarea class="fullwidth" style="height: 155px; padding: 6px 12px; border: 1px solid #ccc; max-width: 100%;" placeholder="Message..." name="contact-message" required><?php echo $form = isset($_SESSION['form_data']) ? $_SESSION['form_data']['message'] : ''; ?></textarea>
                </div>
                <div class="col-md-12 marg-top-15">
                    <input type="submit" class="btn btn-primary fullwidth" value="Submit">
                </div>
            </div>
        </form>
    </div>
</div>