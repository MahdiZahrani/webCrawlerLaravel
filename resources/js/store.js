$(document).ready(function() {
    getProduct();
})

$('#searchSubmit').click(function(e) {
    let id = $('#searchInput').val();
    e.preventDefault();
    getProduct(id);
});

function getProduct(id){
    $.LoadingOverlay("show");
    $.ajax({
        url: `/product/${(typeof id !== 'undefined') ? `${id}` : ''}`,
        type: 'GET',
        success: (response) => {
            $("#title").html(response.title);
            $("#price").html(response.price + " تومان ");
            $("#pro_image").attr("src",response.image);
            $.LoadingOverlay("hide");
            $.toaster('اطلاعات با موفقیت دریافت شد.' ,'','success');
        },
        error: (errors) => {
            if (errors.status == '404'){
                $.toaster(errors.responseJSON.message ,'','danger')
            } else{
                $.toaster('خطا در دریافت اطلاعات.' ,'','danger');
            }
            $.LoadingOverlay("hide");
        }
    })
}
