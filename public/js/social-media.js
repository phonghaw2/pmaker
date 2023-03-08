$(document).ready(function() {
    // //=================Select handle======================
    // let select_all = document.getElementById('selectAll')
    // let select = document.getElementsByClassName('select')

    // select_all.onclick = ()=> {
    //     if (select_all.checked == true) {
    //         for (let i = 0; i < select.length; i++) {
    //             select[i].checked = true;

    //         }
    //     } else {
    //         for (let i = 0; i < select.length; i++) {
    //             select[i].checked = false;
    //         }

    //=================Select option social media======================
    const selectField = document.getElementById('selectField'),
        selectText = document.getElementById('selectText'),
        options = document.getElementsByClassName('options'),
        list = document.getElementById('list'),
        arrowIcon = document.getElementById('arrowIcon');

    selectField.onclick = function () {
        list.classList.toggle('hide');
        arrowIcon.classList.toggle('rotate');
    };

    for (option of options) {
        option.onclick = function () {
            selectText.innerHTML = this.textContent;
            list.classList.toggle('hide');
            arrowIcon.classList.toggle('rotate');
            $('#social_icon').attr('disabled', false);
            $('#file_path').attr('disabled', false);
            $('#upload-submit').attr('disabled', false);
            $('#platform_social').val(this.textContent);
        };
    }

    //=================MODAL RENAME======================
    $('.modal-close').click(function (e) {
        $('.box-lightbox').removeClass('open');
    });

    $('.delete-cancel').click(function (e) {
        deleteCancelled();
    });

    $('.upload-cancel').click(function (e) {
        $('.box-lightbox').removeClass('open');
    });

    $('#rename-form').submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var actionUrl = form.attr('action');
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form.serialize(),
            dataType: 'json',
            success: function (response) {
                $('.box-lightbox').removeClass('open');
            },
            error: function (response) {
                console.log('error submit');
            }
        });
    });

    $('#delete-form').submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var actionUrl = form.attr('action');
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form.serialize(),
            dataType: 'json',
            success: function (response) {
                deleteSuccess()
                createFileAndFolderDataBase();
                deleteCancelled();
            },
            error: function (response) {
                alert('error delete');
                deleteCancelled();
            }
        });
    });

    $('#upload-form').submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var actionUrl = form.attr('action');
        var formData = new FormData($(form)[0]);
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: formData,
            dataType: 'json',
            async: false,
            cache: false,
            contentType: false,
            enctype: 'multipart/form-data',
            processData: false,
            success: function (response) {
                $('.upload-modal').removeClass('open');
                document.location.reload(true);
            },
            error: function (response) {
                alert('error upload:' + response.responseJSON.message);
            }
        });
    });
})
    /*----------Folder And Files Icons---------------|START---------*/
$('.big-file-manager.theme-structure ul > li > b').contents().filter(function() {
    return this.nodeType == 3 && $.trim(this.textContent) != '';
}).wrap('<span autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" contenteditable="false" class="name" />')
/*----------Folder And Files Icons---------------|END-------*/

/*----------Folder Default Behaviour----------|START------*/
$('.big-file-manager > ul').addClass('active-folder-wrapper');
$('.big-file-manager').addClass('small');


$(document).on('dblclick', '.big-file-manager ul li', function(e) {
    e.stopPropagation();
});

/*---------Context Menu Start------------|START---------*/
$(document).on('contextmenu', '[data-file-icon]:not(.show-up)', function(e) {
    var off = $(this).offset();
    var topPos = e.pageY;
    var leftPos = e.pageX;
    $('.append-option-box').remove();
    $(this).addClass('context-visible').addClass('select');
    $(this).append('<div class="append-option-box" style="top:' + topPos + 'px;left:' + leftPos + 'px;"><div class="inner-contenxt-box"><div data-open="data-move">Open</div><div data-function="data-copy">Copy</div> <div data-function="data-move">Move</div> <div data-function="data-rename">Rename</div> <div data-function="data-delete">Delete</div> <div class="">Share</div> <div data-function="data-properties">Properties</div></div></div>');
    $('.append-option-box>div>div:has(div)').addClass('has-sub-context');
    if ($(this).attr('data-file-icon') != "folder") {
        $('.append-option-box .inner-contenxt-box').append('<div data-function="data-copy-path">Copy Path</div>');
    }
    return false;
});
$(document).on('contextmenu', '.theme-structure', function(e) {
    var off = $(this).offset();
    var topPos = e.pageY;
    var leftPos = e.pageX;
    $('.append-option-box').remove();
    $(this).append('<div class="append-option-box" style="top:' + topPos + 'px;left:' + leftPos + 'px;"><div class="inner-contenxt-box"> <div data-function="view"> <span>View</span> <div class="main-sub-menu"> <div data-size="small">Small</div> <div data-size="medium">Medium</div> <div data-size="large">Large</div> </div> </div> <div data-function="short"> <span>Short</span> <div class="main-sub-menu"> <div>Name</div> <div>Date Modified</div> <div>Size</div> <div>Type</div> </div> </div> <div data-function="new"> <span>New Files</span> <div class="main-sub-menu"> <div>HTML File</div> <div>CSS File</div> <div>JS File</div> <div>PHP File</div> <div>Custom File</div> </div> </div> <div data-function="upload-new-icon">Upload new icon</div> <div class="" data-function="paste-data">Paste</div> <div data-function="folder-properties">Properties</div> </div> </div>');
    $('.append-option-box>div>div:has(div)').addClass('has-sub-context');
    $('.has-sub-context').append('<i class="fas fa-chevron-right"></i>');
    return false;
});
$(document).on('click contextmenu dblclick', function() {
    $('[data-file-icon]').removeClass('context-visible').removeClass('select renaming');
    $('.append-option-box').remove();
	removeUnwanted();
    if ($('[contenteditable=true]').length > 0) {
        var rename_before = $('[contenteditable=true]').closest('[data-path]').attr('data-path');
        var id = $('[contenteditable=true]').closest('[data-path]').data('id');
        var rename_after = $('[contenteditable=true]')[0].innerText;
        $('#rename_before').html(rename_before);
        $('#rename_after').html(rename_after);
        // set value to form hidden
        $('#rename_id').val(id);
        $('#rename_file_path').val(rename_after);
        $('#rename_file_path_old').val(rename_before);
        $('.rename-modal').addClass('open');
        $('[contenteditable=true]').closest('[data-path]').attr('data-path', rename_after);
    }
	$('.name').attr('contenteditable', false);
});
$(document).on('click contextmenu', '.append-option-box', function(e) {
    e.stopPropagation();
    $('[data-file-icon]').removeClass('context-visible').removeClass('select');
    $('.append-option-box').remove();
});
$(document).on('click contextmenu', '[data-file-icon]', function(e) {
    e.stopPropagation();
});

function pasteData() {
    $('.data-copy').each(function() {
        if ($('.active-folder-wrapper:has(.no-item-inside-folder)')) {
            $('.active-folder-wrapper.no-item-inside-folder').children('span').remove();
            $('.active-folder-wrapper.no-item-inside-folder').removeClass('no-item-inside-folder');
            let file_copy = $(this).clone().removeClass('data-copy');
            let file_path_copy_arr = file_copy.children().children().closest('span')[0].innerText.split('.');
            let file_name = file_path_copy_arr[0];
            let file_ext = file_path_copy_arr[1];
            file_copy.children().children().closest('span')[0].innerText = file_name + '_copy' + '.' + file_ext;
            file_copy.appendTo('.active-folder-wrapper');

            // $(this).clone().removeClass('data-copy').appendTo('.active-folder-wrapper');
            $('.active-folder-wrapper').find('li').show();
            $('.data-copy').removeClass('data-copy');
        } else {
            let file_copy = $(this).clone().removeClass('data-copy');
            file_copy.appendTo('.active-folder-wrapper');
            $('.data-copy').removeClass('data-copy');
        }
    });
}

function deleteSuccess() {
    $('.delete-picked').remove();
    return false;
}

function renameData(renameClass) {
    $('.renaming').removeClass('renaming');
    $(renameClass).closest('li').addClass('renaming');
    $(renameClass).closest('li').find('.name').attr('contenteditable', true).select().focus();
    // $('.renaming').removeClass('select');
}

$(window).on('keydown', function(ev) {
    if (ev.keyCode === 39) { /*left arrow*/
        $('.select').next('[data-file-icon]').addClass('select').siblings().removeClass('select');
    } else if (ev.keyCode === 37) { /*right arrow*/
        $('.select').prev('[data-file-icon]').addClass('select').siblings().removeClass('select');
    } else if (ev.keyCode === 13) { /*enter*/
        $('.select:not(:last)').each(function() {
            $(this).removeClass('select');

        });
        $('.select').dblclick();
    } else if (ev.ctrlKey && ev.keyCode === 67) { /*copy*/
        $('.data-copy').removeClass('data-copy');
        $('.select').addClass('data-copy');
        return false;
    } else if (ev.ctrlKey && ev.keyCode === 86) { /*paste*/
        pasteData();
        createFileAndFolderDataBase();
    } else if (ev.keyCode === 46) { /*delete*/
        deleteData()
    } else if (ev.ctrlKey && ev.keyCode === 65) { /*Shift Select*/

    } else if (ev.keyCode === 113) { /*Rename*/
        renameData('.select');
    }
    // else if (ev.ctrlKey && ev.keyCode === 88) { /*move*/
    //     $('.data-moving,.data-copy').removeClass('data-moving').removeClass('data-copy');
    //     $('.select').addClass('data-moving').removeClass('data-copy');
    //     return false;
    // }
    // else if (ev.keyCode === 27 || ev.keyCode === 8) { /*Back*/
    //     $('.big-file-manager.theme-structure ul > li.show-up > b > .cm-folder-back').click();
    // }
});
/*---------Select Folder------------|START---------*/
$(document).on('click', '[data-file-icon]', function(e) {
    if (e.ctrlKey) {
        $(this).addClass('select');
		$(this).removeClass('renaming');
    } else {
        if ($(this).hasClass('renaming')) {
            $('.select').removeClass('select');
            $(this).addClass('select').siblings().removeClass('select');
        } else {
            $('.select').removeClass('select');
            $('.renaming').removeClass('renaming');
            $(this).addClass('select').siblings().removeClass('select');
            $(this).removeClass('renaming');
            $('.name').attr('contenteditable', false);
        }
    }
});
/*---------Select Folder------------|END---------*/
/*---------Open Data Context Menu------------|START---------*/
$(document).on('click', '[data-function="data-open"]', function() {
    $('.select').dblclick();
});
//---------Copy File
$(document).on('click', '[data-function="data-copy"]', function() {
	$('.data-copy').removeClass('data-copy');
	$('.select').addClass('data-copy');
});
//---------Paste File
$(document).on('click', '[data-function="paste-data"]', function() {
    pasteData();
});
//---------Properties Context Menu
$(document).on('click', '[data-function="data-properties"]', function() {
    $('.cm-properties-popup-section').addClass('open');
});
$(document).on('click', '.cm-properties-close', function() {
    $('.cm-properties-popup-section').removeClass('open');
});
//---------Rename File
$(document).on('click', '[data-function="data-rename"]', function() {
    renameData(this);
});
//---------Move File
$(document).on('click', '[data-function="data-move"]', function() {
	// mo modal len
});
//---------Delete File
$(document).on('click', '[data-function="data-delete"]', function() {
    deleteData()
});
/*---------Copied to Clipboard------------|START---------*/
function copyToClipboardPath(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    var txt = $(element).closest('[data-path]').attr('data-path');
    $temp.val(txt).select();
    document.execCommand("copy");
    $temp.remove();
    $('.theme-structure').append('<div class="copied">Copied !</div>');
    setTimeout(function() {
        $('.copied').addClass('copied-visible');
    }, 500);
    setTimeout(function() {
        $('.copied').remove();
    }, 3000);
}
$(document).on('click', '[data-function="data-copy-path"]', function() {
    copyToClipboardPath(this);
});
/*---------Copied to Clipboard------------|END---------*/
/*----------Creating Path For Data------------|START----------*/
function createFileAndFolderDataBase() {
    $('.big-file-manager.theme-structure > ul li').each(function() {
        var fileSlug = $(this).children('b')[0].innerText;
        $(this).attr('data-slug', fileSlug);
    });
    $('[data-slug]').each(function() {
        var b = $(this).attr('data-slug');
        $(this).attr('data-path',b);
    });
    var folderStructureJson = [];
    $('[data-file-id]').each(function() {
        var folderStructure = {};
        var fileID = $(this).attr('data-file-id');
        var filePath = $(this).attr('data-path');
        folderStructure.fileID = "{{" + fileID + "}}";
        folderStructure.filePath = filePath;
        folderStructureJson.push(folderStructure);
    });
}
createFileAndFolderDataBase();
/*-------Creating Path For Data------------|END----------*/

/*-------Folder And Files Size-----------------------|START-------*/
$(document).on('click', '[data-size]', function() {
    var getSize = $(this).attr('data-size');
    $('.big-file-manager').removeClass('small medium large');
    $('.big-file-manager').addClass(getSize);
});
/*-------Folder And Files Size-----------------------|END-------*/

/*-------New Folder---------------------|START------------*/
function removeUnwanted(){
	$('.active-folder-wrapper ~ .active-folder-wrapper,.active-folder-wrapper ~ .no-item-inside-folder').remove();
}
$(document).on('click', '[data-function="upload-new-icon"]', function() {
	$('.upload-modal').addClass('open');
});

function deleteCancelled() {
    $('.delete-modal').removeClass('open');
    $('#delete-div').empty();
    $('.delete-picked').removeClass('delete-picked');
}

function deleteData() {
    var id = new Array();
    $('.select').each(function() {
        id.push($(this).data('id'));
        $(this).addClass('delete-picked');
        $('#delete-div').append('<p>' + $(this).attr('data-path') + '</p>');
    });
    $('#delete_id').val(id);
    $('.delete-modal').addClass('open');
}

$(document).on('click', '[data-media]', function(e) {
    var media = $(this).data('media');

    var url = new URL(document.location.href);

    let searchParams = new URLSearchParams(window.location.search);

    if (searchParams.has('media')) {
        url.searchParams.set('media', media);
    } else {
        url.searchParams.append('media', media);
    };

    window.location.replace(url);
    // document.location = url;
    // document.location.reload(true);
});
