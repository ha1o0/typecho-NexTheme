$(document).ready(function() {
    console.log('ready index...')
    preloadImages([
        'https://static.objc.eu.org/pc-logo.png',
    ])
    listenSideBar()
    var logoLines = document.querySelectorAll('.site-meta .logo-line');
    var siteTitle = document.querySelector('.site-meta .site-title');

    // 延迟一段时间再触发动画，确保页面元素已经渲染
    setTimeout(function() {
        logoLines.forEach(function(line) {
            line.classList.add('animate');
        });
        siteTitle.classList.add('animate');
    }, 100); // 延迟时间可以根据实际情况调整
})

function preloadImages(imagePaths) {
    $(imagePaths).each(function() {
        var img = new Image();
        img.src = this;
        img.onerror = function() {
            console.error('Image failed to load:', this.src);
        };
    });
}

function listenSideBar() {
    $(".toggle-right-sidebar").click(toggleRightSidebar)
}

function toggleRightSidebar() {
    $('.right-sidebar').toggleClass('right-sidebar-open');
    $('.body-container').toggleClass('container-with-sidebar');
    $('.right-sidebar-panel').toggleClass('right-sidebar-panel-active');
    $('.sidebar-toggle').toggleClass('sidebar-toggle-active')
    $('.toggle').toggleClass('toggle-close')
}
