$(document).ready(function() {
    preloadImages([
        logo,
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
    // 在用户点击sidebar外部时，除了关闭按钮外，关闭sidebar
    const sidebar = $("#right-sidebar");
    $(window).click(function(event) {
        if (!sidebar.hasClass('right-sidebar-open')) {
            return;
        }
        var target = $(event.target);
        // var searchModalContent = $('#search-modal-content');
        if (target.closest(sidebar).length === 0) {
            toggleRightSidebar(null);
        }
    });
}

function toggleRightSidebar(event) {
    if (event) {
        event.stopPropagation();
    }
    $('#right-sidebar').toggleClass('right-sidebar-open');
    $('.body-container-overlay').toggleClass('body-container-overlay-show');
    $('.body-container').toggleClass('container-with-sidebar');
    $('.right-sidebar-panel').toggleClass('right-sidebar-panel-active');
    $('.sidebar-toggle').toggleClass('sidebar-toggle-active')
    $('.toggle').toggleClass('toggle-close')
}
