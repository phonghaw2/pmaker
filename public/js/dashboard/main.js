
$( document ).ready(function() {
    $('#open-headbar-site').click(function (e) {
        e.preventDefault();
        $('#headbar-site').toggleClass('open');
    });

    $('#profile-dropdown').click(function (e) {
        e.preventDefault();
        if ($('#profile-area').hasClass('open')) {
            $('#profile-area').removeClass('open');
        } else {
            window.requestAnimationFrame(popup);
        }
    });

    $('body').click(function (e) {
        $('#profile-area').removeClass('open');
    });

    function popup() {
        $('#profile-area').toggleClass('open');
    }
});



var TodoList =
function () {
function TodoList(element, config) {
    this._config = config;
    this._element = element;

    this._init();
}

var _proto = TodoList.prototype;

_proto.toggle = function toggle(item) {
    item.parents('li').toggleClass(ClassName.TODO_LIST_DONE);

    if (!$(item).prop('checked')) {
    this.unCheck($(item));
    return;
    }

    this.check(item);
};

_proto.check = function check(item) {
    this._config.onCheck.call(item);
};

_proto.unCheck = function unCheck(item) {
    this._config.onUnCheck.call(item);
} // Private
;

_proto._init = function _init() {
    var that = this;
    $(Selector.DATA_TOGGLE).find('input:checkbox:checked').parents('li').toggleClass(ClassName.TODO_LIST_DONE);
    $(Selector.DATA_TOGGLE).on('change', 'input:checkbox', function (event) {
    that.toggle($(event.target));
    });
} // Static
;

TodoList._jQueryInterface = function _jQueryInterface(config) {
    return this.each(function () {
    var data = $(this).data(DATA_KEY);

    var _options = $.extend({}, Default, $(this).data());

    if (!data) {
        data = new TodoList($(this), _options);
        $(this).data(DATA_KEY, data);
    }

    if (config === 'init') {
        data[config]();
    }
    });
};

return TodoList;
}();


$(window).on('load', function () {
  TodoList._jQueryInterface.call($(Selector.DATA_TOGGLE));
});
