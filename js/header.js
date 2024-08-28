$(document).ready(function() {
    console.log('ready...')
    initTheme()
})



function initTheme() {
    var storage = window.storageModule;
    const currentTheme = storage.getLocalStorage('theme');
    $('#switch-theme').html(getThemeIcon(currentTheme));
    $("#switch-theme").click(function() {
        console.log('.....')
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
