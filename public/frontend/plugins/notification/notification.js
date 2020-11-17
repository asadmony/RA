
$(function () {

    function Toast(type, css, msg, title, TimeStamp1) {
        this.type = type;
        this.css = css;
        this.title = title;
        this.TimeStamp1 = TimeStamp1;
        this.msg = '<span class="badge badge-pill badge-warning"> ' + title + '</span>' + '<br/>' + msg + '<br/>' + TimeStamp1;
    }
    var toasts = [];

    $.get("/home/getLists", {
        id: "0",
        tabName: "getStudyAreaNotification"
    }, function (response) {
        var d = JSON.parse(response);
        var Toasters = [];
        for (var i = 0; i < d.length; i++) {
            Toasters.push(
                new Toast('info', 'toast-bottom-left', d[i].message, d[i].notification_type, d[i].TimeStamp1)
            );
        }
        toasts = Toasters;
        showToast();
    });
    

    toastr.options.positionClass = 'toast-top-full-width';
    toastr.options.extendedTimeOut = 0; //1000;
    toastr.options.timeOut = 6000;
    toastr.options.fadeOut = 3000;
    toastr.options.fadeIn = 5000;

    var i = 0;
    $(document).ready(function () {
        $('#tryMe').prop('disabled', true);
        //delayToasts();
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "positionClass": "toast-bottom-full-width",
            "onclick": null,
            "showDuration": "1000",
            "hideDuration": "0",
            //"timeOut": "0",
            //"extendedTimeOut": "1000",
            //"showEasing": "swing",
            //"hideEasing": "linear",
            //"showMethod": "fadeIn",
            //"hideMethod": "fadeOut"
        };
    });


    function delayToasts() {
        if (i === toasts.length) { return; }
        var delay = i === 0 ? 0 : 8000;
        window.setTimeout(function () { showToast(); }, delay);

        // re-enable the button        
        if (i === toasts.length - 1) {
            window.setTimeout(function () {
                $('#tryMe').prop('disabled', false);
                i = 0;
            }, delay + 8000);
        }
    }

    function showToast() {
        var t = toasts[i];
        toastr.options.positionClass = t.css;
        toastr[t.type](t.msg);
        i++;
        delayToasts();
    }
});
