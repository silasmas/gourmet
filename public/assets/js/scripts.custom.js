/**
 * Custom scripts
 * 
 * @author Xanders Samoth
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
// Dynamically call the host
var currentHost = $(location).attr('port') ? $(location).attr('protocol') + '//' + $(location).attr('hostname') + ':' + $(location).attr('port') : $(location).attr('protocol') + '//' + $(location).attr('hostname');

$(document).ready(function () {
    /* Return false when click on "#" link */
    $('[href="#"]').on('click', function (e) {
        return false;
    });

    $('.back-to-top').click(function (e) {
        $("html, body").animate({ scrollTop: '0' });
    });

    /* Upload cropped image */
    var modalImage = $('#cropModalImage');
    var retrievedAvatar = document.getElementById('retrieved_image');
    var cropper;

    $('#avatar').on('change', function (e) {
        var files = e.target.files;
        var done = function (url) {
            retrievedAvatar.src = url;
            var modal = new bootstrap.Modal(document.getElementById('cropModalImage'), {
                keyboard: false
            });

            modal.show();
        };

        if (files && files.length > 0) {
            var reader = new FileReader();

            reader.onload = function () {
                done(reader.result);
            };
            reader.readAsDataURL(files[0]);
        }
    });

    $(modalImage).on('shown.bs.modal', function () {
        cropper = new Cropper(retrievedAvatar, {
            aspectRatio: 1,
            viewMode: 3,
            preview: '#cropModal1 .preview'
        });

    }).on('hidden.bs.modal', function () {
        cropper.destroy();

        cropper = null;
    });

    $('#cropModalImage #crop').click(function () {
        // Ajax loading image to tell user to wait
        $('.user-image').attr('src', currentHost + '/assets/img/ajax-loader.gif');

        var canvas = cropper.getCroppedCanvas({
            width: 700,
            height: 700
        });

        canvas.toBlob(function (blob) {
            URL.createObjectURL(blob);
            var reader = new FileReader();

            reader.readAsDataURL(blob);
            reader.onloadend = function () {
                var base64_data = reader.result;
                var user_id = document.getElementById('user_id').value;
                var url = currentHost + '/account/update_avatar/' + parseInt($('#userId').val());
                var datas = { 'id': parseInt($('#userId').val()), 'user_id': user_id, 'image_64': base64_data };

                modalImage.hide();

                $.ajax({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    type: 'POST',
                    url: url,
                    data: datas,
                    success: function (res) {
                        $('.user-image').attr('src', res.avatar_url);
                        window.location.reload();
                    },
                    error: function (xhr, error, status_description) {
                        console.log(xhr.responseJSON);
                        console.log(xhr.status);
                        console.log(error);
                        console.log(status_description);
                    }
                });
            };
        });
    });

    /* Auto-resize textarea */
    autosize($('textarea'));

    /* jQuery Date picker */
    var currentLanguage = $('html').attr('lang');

    $('#register_birthdate').datepicker({
        dateFormat: currentLanguage.startsWith('fr') ? 'dd/mm/yy' : 'mm/dd/yy',
        onSelect: function () {
            $(this).focus();
        }
    });

    /* Hover stretched link */
    $('.card-body + .stretched-link').each(function () {
        $(this).hover(function () {
            $(this).addClass('changed');

        }, function () {
            $(this).removeClass('changed');
        });
    });
});
