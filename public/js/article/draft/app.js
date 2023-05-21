$("#add-cover").click(function (e) {
    e.preventDefault();
    $("#upload-cover").addClass("open");
});


$("#close-upload-cover").click(function (e) {
    e.preventDefault();
    $("#upload-cover").removeClass("open");
});


function open_file(){
    document.getElementById('inputUpload').click();
}
