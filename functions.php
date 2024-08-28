<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form)
{
    // $logoUrl = new \Typecho\Widget\Helper\Form\Element\Text(
    //     'logoUrl',
    //     null,
    //     null,
    //     _t('站点 LOGO 地址'),
    //     _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO')
    // );

    // $form->addInput($logoUrl);

    // $sidebarBlock = new \Typecho\Widget\Helper\Form\Element\Checkbox(
    //     'sidebarBlock',
    //     [
    //         'ShowRecentPosts'    => _t('显示最新文章'),
    //         'ShowRecentComments' => _t('显示最近回复'),
    //         'ShowCategory'       => _t('显示分类'),
    //         'ShowArchive'        => _t('显示归档'),
    //         'ShowOther'          => _t('显示其它杂项')
    //     ],
    //     ['ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'],
    //     _t('侧边栏显示')
    // );

    // $form->addInput($sidebarBlock->multiMode());
    // Favicon 图标
	$favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', NULL, NULL, _t('favicon 图标'), _t('图片地址'));
	$form->addInput($favicon);

	// 网站 LOGO
	$logo = new Typecho_Widget_Helper_Form_Element_Text('logo', NULL, NULL, _t('网站 LOGO'), _t('图片地址'));
	$form->addInput($logo);

	// 网站描述
	$summary = new Typecho_Widget_Helper_Form_Element_Text('summary', NULL, NULL, _t('网站描述'), _t('网站描述文字'));
	$form->addInput($summary);

	// Twitter
	$socialTwitter = new Typecho_Widget_Helper_Form_Element_Text('socialTwitter', NULL, NULL, _t('Twitter'), _t('Twitter 用户页地址'));
	$form->addInput($socialTwitter);

	// Facebook
	$socialFacebook = new Typecho_Widget_Helper_Form_Element_Text('socialFacebook', NULL, NULL, _t('Facebook'), _t('Facebook 用户页地址'));
	$form->addInput($socialFacebook);

	// Weibo
	$socialWeibo = new Typecho_Widget_Helper_Form_Element_Text('socialWeibo', NULL, NULL, _t('微博'), _t('微博用户页地址'));
	$form->addInput($socialWeibo);

	// Bilibili
	$socialBilibili = new Typecho_Widget_Helper_Form_Element_Text('socialBilibili', NULL, NULL, _t('哔哩哔哩'), _t('哔哩哔哩用户页地址'));
	$form->addInput($socialBilibili);

	// YouTube
	$socialYouTube = new Typecho_Widget_Helper_Form_Element_Text('socialYouTube', NULL, NULL, _t('YouTube'), _t('YouTube 频道页地址'));
	$form->addInput($socialYouTube);

	// GitHub
	$socialGitHub = new Typecho_Widget_Helper_Form_Element_Text('socialGitHub', NULL, 'https://github.com/', _t('GitHub'), _t('GitHub 用户页地址'));
	$form->addInput($socialGitHub);

	// 电子邮件
	$socialEMailTo = new Typecho_Widget_Helper_Form_Element_Text('socialEMailTo', NULL, NULL, _t('E-Mail To'), _t('邮件地址'));
	$form->addInput($socialEMailTo);

	// ICP 备案号
	$ICPBeiAn = new Typecho_Widget_Helper_Form_Element_Text('ICP', NULL, NULL, _t('ICP 备案号'), _t('ICP 备案号，留空则不显示'));
	$form->addInput($ICPBeiAn);

    // 建站时间
	$siteStartAt = new Typecho_Widget_Helper_Form_Element_Text('siteStartAt', NULL, NULL, _t('建站时间'), _t('底部运行时间，格式：2000/01/01 00:00:00，复制修改。留空则不显示'));
	$form->addInput($siteStartAt);
}

function custom_category_list($that, $widget) {
    $output = '';
    while($widget->next()):
        $output .= '<a href="'.$widget->permalink.'">'.$widget->name.'</a>';
    endwhile;
    return $output;
}
/*
function themeFields($layout)
{
    $logoUrl = new \Typecho\Widget\Helper\Form\Element\Text(
        'logoUrl',
        null,
        null,
        _t('站点LOGO地址'),
        _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO')
    );
    $layout->addItem($logoUrl);
}
*/
