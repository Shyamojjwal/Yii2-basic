//============== registration functionality ===============
openRegistrationModal = function () {
    $('#signup-modal').find('input').val('');
    $('#signup-modal').modal('show');
};

$('form#RegistrationFrom').submit(function (e) {
    e.preventDefault();
    var _this = $(this);
    var data = _this.serialize();
    var url = full_path + 'registration/signup';
    $.post(url, data,
            function (resp) {
                if (resp.flag == true) {

                } else {
                    if (resp.validationError == true) {
                        $.each(resp.errors, function (item, msg) {
                            _this.find('#usermaster-' + item).parent('div').addClass('has-error');
                            _this.find('#usermaster-' + item).parent('div').find('help-block').html(msg);
                        });
                    }else{
                        
                    }
                }
            }, 'json');
});