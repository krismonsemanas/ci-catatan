$(document).ready(function() {
    const flashData = $('.success').data('message');
    const error = $('.error').data('message');
    const btnDelete = $('.btn-hapus');
    const btnLogout = $('.btn-logout');
    const login = $('.login').data('pesan');
    if (flashData) {
        Swal.fire({
            title: 'Success',
            text: flashData,
            type: 'success'
        })
    }else if(error){
        Swal.fire({
            title: 'Gagal',
            text: error,
            type: 'error'
        })
    }
    function customAlert(btn) {
        $(btn).click(function (e) {
            if (btn == btnLogout) {
                var textMessage = '';
                var btnConf = 'Logout';
            } else {
                var textMessage = "You won't be able to revert this!"
                var btnConf = 'Yes, delete it!';
            }
            const url = $(this).attr('href');
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: textMessage,
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: btnConf
            }).then((result) => {
                if (result.value) {
                    document.location.href = url;
                } else {
                    if (btn == btnDelete) {
                        Swal.fire(
                            'Cancelled',
                            'Your imaginary file is safe :)',
                            'error'
                        )
                    }
                }
            })
        })
    }
    // delete
    customAlert(btnDelete);
    // logout
    customAlert(btnLogout);
     
    $("li .menu").filter(function(){
        $('li .menu').parent().removeClass('active');
        return this.href == location.href.replace(/#.*/, "");
    }).parent().addClass("active");
})
