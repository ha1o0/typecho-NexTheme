$(document).ready(function() {
    console.log('ready...')
    initTheme()
    initSearch()
})

function initTheme() {
    var storage = window.storageModule;
    const currentTheme = storage.getLocalStorage('theme');
    $('#switch-theme').html(getThemeIcon(currentTheme));
    $("#switch-theme").click(function() {
        // // 移除所有主题类
        // document.body.classList.remove('theme-dark');

        // // 根据选择的主题添加相应的类
        // switch(currentTheme) {
        //     case 'dark':
        //         document.body.classList.add('theme-dark');
        //         break;
        //     // 默认主题不需要添加类
        // }
        var storage = window.storageModule;
        const currentTheme = storage.getLocalStorage('theme');
        const nextTheme = currentTheme === 'dark' ? 'light' : 'dark';
        storage.setLocalStorage('theme', nextTheme);
        document.documentElement.classList.toggle('theme-dark');
        $('#switch-theme').html(getThemeIcon(nextTheme));
    })
}

function getThemeIcon(theme) {
    return theme === 'dark' ? '&#xe654;' : '&#xe839;';
}

function initSearch() {
    // 获取搜索按钮和弹窗元素
    var modal = $("#search-model");
    var btn = $("#search-trigger");
    var span = $("#modal-close");

    // 点击搜索按钮弹出弹窗
    btn.click(function() {
        modal.css('display', 'block');
    })

    // 点击关闭按钮关闭弹窗
    span.click(function() {
        modal.css('display', 'none');
    })

    // 在用户点击弹窗外部时，除了关闭按钮外，关闭弹窗
    $(window).on('click', function(event) {
        if (event.target == modal) {
            modal.css('display', 'none');
        }
    });
}