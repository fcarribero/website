<div class="contact">
    <div class="row">
        <div class="col-md-8">
            <div class="alert alert-success" style="display:none;" id="result-success">
                <i class="fa fa-check"></i> <?= lang('msg_message_sent') ?>
            </div>
            <div class="alert alert-danger" style="display:none;" id="result-error">
                <i class="fa fa-exclamation-circle"></i> <span class="content"></span>
            </div>
            <form action="" class="form">
                <div class="form-group">
                    <label class="control-label"><?= lang('label_name') ?></label>
                    <input type="text" class="form-control" name="nombre" required="required" autofocus="autofocus" />
                </div>
                <div class="form-group">
                    <label class="control-label"><?= lang('label_email') ?></label>
                    <input type="email" class="form-control" name="email" required="required" />
                </div>
                <div class="form-group">
                    <label class="control-label"><?= lang('label_message') ?></label>
                    <textarea class="form-control" name="mensaje" required="required" style="resize:vertical;height:200px;"></textarea>
                </div>
                <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6Lc04QYTAAAAAD8d8PCHNnUqE51RIQtbo0k6Bt2M"></div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary"><?= lang('label_send') ?></button><span id="mail-result"></span>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <div class="contact-location"><i class="fa fa-map-marker"></i> Capital Federal, Buenos Aires, Argentina</div>
            <div class="contact-phone"><i class="fa fa-phone"></i> <a href="callto:+5491164871203">+54 9 11 6487-1203</a></div>
            <div class="contact-mail"><i class="fa fa-envelope"></i> <a href="mailto:francisco.carribero@webneex.com">francisco.carribero@webneex.com</a></div>
        </div>
    </div>
</div>
<script>
    $('.contact .form').submit(function() {
        $('.contact .form button').attr('disabled', 'disabled').append($('<i class="fa fa-spinner fa-spin" style="margin-left:10px;"></i>'));
        $('#result-error').hide();
        $.ajax({
            url: '<?= site_url(lang('code') . '/contactame/enviar') ?>',
            type: 'post',
            dataType: 'JSON',
            data: $(this).serialize(),
            success: function(data) {
                $('.contact .form button').removeAttr('disabled').find('.fa').remove();
                if (data.success) {
                    $('.contact .form').hide();
                    $('#result-success').fadeIn();
                } else {
                    if (data.message) {
                        $('#result-error').fadeIn().find('.content').text(data.message);
                    } else {
                        $('#result-error').fadeIn().find('.content').text("<?= lang('msg_message_fail') ?>");
                    }
                }
            },
            error: function(data) {
                $('.contact .form button').removeAttr('disabled').find('.fa').remove();
                $('#result-error').fadeIn().find('.content').text("<?= lang('msg_fatal_error') ?>");
            }
        });

        return false;
    })
</script>