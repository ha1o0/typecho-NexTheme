$(document).ready(function() {
    preloadImages([logo])
    listenSideBar()
    listenScroll()
    logoAnimate()
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

function logoAnimate() {
    var logoLines = document.querySelectorAll('.site-meta .logo-line');
    var siteTitle = document.querySelector('.site-meta .site-title');

    // 延迟一段时间再触发动画，确保页面元素已经渲染
    setTimeout(function() {
        logoLines.forEach(function(line) {
            line.classList.add('animate');
        });
        siteTitle.classList.add('animate');
    }, 100); // 延迟时间可以根据实际情况调整
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

function listenScroll() {
    $('#body-container').scroll(function() {
        // 获取滚动容器
        var $container = $(this);
        // 计算滚动百分比
        var scrollPercentage = ($container.scrollTop() / ($container[0].scrollHeight - $container.height())) * 100;
        if (scrollPercentage > 0) {
            $('#scroll-percentage').css('visibility', 'visible');
            $('#scroll-percentage').css('opacity', 1);
        } else {
            $('#scroll-percentage').css('visibility', 'hidden');
            $('#scroll-percentage').css('opacity', 0);
        }
        // 更新 #scroll-percentage 元素的文本内容
        $('#scroll-percentage span').text((scrollPercentage > 100 ? 100 : scrollPercentage).toFixed(0) + '%');
    });

    $("#scroll-percentage").click(function() {
        $('#body-container').animate({ scrollTop: 0 }, 'slow');
    })
}
