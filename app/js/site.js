/**
 * Override the default yii confirm dialog. This function is
 * called by yii when a confirmation is requested.
 *
 * @param message the message to display
 * @param okCallback triggered when confirmation is true
 * @param cancelCallback callback triggered when cancelled
 */
/*yii.confirm = function (message, okCallback, cancelCallback) {
    swal({
        title: message,
        type: 'warning',
        showCancelButton: true,
        closeOnConfirm: true,
        allowOutsideClick: true
    }, okCallback);
};*/



jQuery(document).ready(function ($) {
    // --- Delete action (bootbox) ---
    yii.confirm = function (message, ok, cancel) {
        var title = $(this).data("title");
        var confirm_label = $(this).data("ok");
        var cancel_label = $(this).data("cancel");

        bootbox.confirm(
            {
                title: title,
                message: message,
                buttons: {
                    confirm: {
                        label: confirm_label,
                        className: 'btn-danger btn-flat'
                    },
                    cancel: {
                        label: cancel_label,
                        className: 'btn-default btn-flat'
                    }
                },
                callback: function (confirmed) {
                    if (confirmed) {
                        !ok || ok();
                    } else {
                        !cancel || cancel();
                    }
                }
            }
        );
        // confirm will always return false on the first call
        // to cancel click handler
        return false;
    }
});