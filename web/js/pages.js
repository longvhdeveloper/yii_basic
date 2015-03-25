$(document).ready(function(){
    console.log(root_url);
    $('.bs-example-modal-lg').on('shown.bs.modal', function (e) {
        $('.modal-content').load(root_url+'/media/add-ajax');
    })
});
