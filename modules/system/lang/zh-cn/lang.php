<?php

return [
    'app' => [
        'name' => '9377 企业内网',
        'tagline' => '欢迎来到 9377 企业内网，请输入账号密码登录',
    ],
    'locale' => [
        'en' => 'English',
        'de' => 'German',
        'es' => 'Spanish',
        'es-ar' => 'Spanish (Argentina)',
        'fa' => 'Persian',
        'fr' => 'French',
        'hu' => 'Hungarian',
        'it' => 'Italian',
        'ja' => 'Japanese',
        'nl' => 'Dutch',
        'pt-br' => 'Brazilian Portuguese',
        'ro' => 'Romanian',
        'ru' => 'Russian',
        'se' => 'Swedish',
        'tr' => 'Turkish',
        'zh-cn' => '简体中文',
        'zh-tw' => '正體中文'
    ],
    'directory' => [
        'create_fail' => "不能创建目录: :name",
    ],
    'file' => [
        'create_fail' => "不能创建文件: :name",
    ],
    'combiner' => [
        'not_found' => "combiner 文件 ':name' 未找到",
    ],
    'system' => [
        'name' => '系统',
        'menu_label' => '系统',
        'categories' => [
            'cms' => '内容管理',
            'misc' => '杂项',
            'logs' => '日志',
            'mail' => '邮件',
            'shop' => '商店',
            'team' => '团队',
            'users' => '用户',
            'system' => '系统',
            'social' => '社交',
            'events' => '事件',
            'customers' => '客户',
            'my_settings' => '我的设定',
        ],
    ],
    'plugin' => [
        'unnamed' => '未命名插件',
        'name' => [
            'label' => '插件名',
            'help' => '插件的唯一代码',
        ],
    ],
    'plugins' => [
        'manage' => '插件管理',
        'enable_or_disable' => '启用或禁用',
        'enable_or_disable_title' => '启用或禁用插件',
        'remove' => '移除',
        'refresh' => '刷新',
        'disabled_label' => '禁用',
        'disabled_help' => '被禁用的插件将被应用忽略',
        'selected_amount' => '已选插件: :amount',
        'remove_confirm' => '确定?',
        'remove_success' => "移除插件成功",
        'refresh_confirm' => '确定?',
        'refresh_success' => "成功刷新插件",
        'disable_confirm' => '确定?',
        'disable_success' => "成功禁用插件",
        'enable_success' => "成功启用插件",
        'unknown_plugin' => "插件文件已被删除",
    ],
    'project' => [
        'name' => '项目',
        'owner_label' => '拥有者',
        'attach' => '绑定项目',
        'detach' => '解除绑定项目',
        'none' => '无',
        'id' => [
            'label' => '项目 ID',
            'help' => '如何查找项目 ID',
            'missing' => '指定一个项目 ID',
        ],
        'detach_confirm' => '确定解除绑定这个项目?',
        'unbind_success' => '项目成功解除绑定',
    ],
    'settings' => [
        'menu_label' => '设置',
        'not_found' => '无法查找到指定设置',
        'missing_model' => '设置页面缺少已定义模型',
        'update_success' => ':name 的设置已成功更新',
        'return' => '返回系统设置',
        'search' => '搜索'
    ],
    'mail' => [
        'log_file' => '日志文件',
        'menu_label' => '邮件配置',
        'menu_description' => '邮件配置管理',
        'general' => '通用',
        'method' => '发邮件方法',
        'sender_name' => '发送者姓名',
        'sender_email' => '发送者电子邮箱',
        'php_mail' => 'PHP mail',
        'sendmail' => 'Sendmail',
        'smtp' => 'SMTP',
        'smtp_address' => 'SMTP 地址',
        'smtp_authorization' => 'SMTP 验证',
        'smtp_authorization_comment' => '需要对 SMTP 进行验证请勾选',
        'smtp_username' => '用户名',
        'smtp_password' => '密码',
        'smtp_port' => 'SMTP 端口',
        'smtp_ssl' => 'SSL 连接',
        'sendmail_path' => 'Sendmail 路径',
        'sendmail_path_comment' => '指定 Sendail 的程序路径',
        'mailgun' => 'Mailgun',
        'mailgun_domain' => 'Mailgun 域名',
        'mailgun_domain_comment' => '请指定 Mailgun 域名',
        'mailgun_secret' => 'Mailgun 密钥',
        'mailgun_domain_secret' => '请输入 Mailgun API 密钥.',
    ],
    'mail_templates' => [
        'menu_label' => '邮件模板',
        'menu_description' => '修改发送给用户、管理员的邮件模板，管理邮件布局',
        'new_template' => '新增模板',
        'new_layout' => '新增布局',
        'template' => '模板',
        'templates' => '模板',
        'menu_layouts_label' => '邮件布局',
        'layout' => '布局',
        'layouts' => '布局',
        'name' => '名称',
        'name_comment' => '该模板的唯一名称',
        'code' => '标识',
        'code_comment' => '该模板的唯一标识',
        'subject' => '标题',
        'subject_comment' => '邮件的标题',
        'description' => '描述',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => '纯文本',
        'test_send' => '发送测试邮件',
        'test_success' => '测试邮件已成功发送',
        'return' => '返回模板列表'
    ],
    'install' => [
        'project_label' => '绑定到项目',
        'plugin_label' => '安装插件',
        'missing_plugin_name' => '指定插件名去安装',
        'install_completing' => '安装完成',
        'install_success' => '插件已成功安装',
    ],
    'updates' => [
        'title' => '更新管理',
        'name' => '软件更新',
        'menu_label' => '更新',
        'menu_description' => '更新系统，管理、更新插件与模板主题',
        'check_label' => '检查更新',
        'retry_label' => '重试',
        'plugin_name' => '插件名',
        'plugin_description' => '描述',
        'plugin_version' => '版本',
        'plugin_author' => '作者',
        'core_build' => '当前版本',
        'core_build_old' => '当前版本 :build',
        'core_build_new' => '版本 :build',
        'core_build_new_help' => '有可用更新',
        'core_downloading' => '下载应用文件',
        'core_extracting' => '解包应用文件',
        'plugin_downloading' => '下载插件 :name',
        'plugin_extracting' => '解包插件 :name',
        'plugin_version_none' => '添加插件',
        'plugin_version_old' => '当前版本 :version',
        'plugin_version_new' => '版本 :version',
        'theme_label' => '模板主题',
        'theme_new_install' => '新模板主题安装',
        'theme_downloading' => '下载模板主题: :name',
        'theme_extracting' => '解包模板主题: :name',
        'update_label' => '更新软件',
        'update_completing' => '完成更新',
        'update_loading' => '载入可用更新...',
        'update_success' => '更新已成功执行',
        'update_failed_label' => '更新失败',
        'force_label' => '强制更新',
        'found' => [
            'label' => '有新的更新!',
            'help' => '点击开始进行更新',
        ],
        'none' => [
            'label' => '没有更新',
            'help' => '没有更新的可用版本',
        ],
    ],
    'server' => [
        'connect_error' => '连接服务器错误',
        'response_not_found' => '更新服务器无法找到',
        'response_invalid' => '服务器返回无效相应',
        'response_empty' => '服务器返回空',
        'file_error' => '服务器传送包失败',
        'file_corrupt' => '从服务器下载下来的文件被破坏',
    ],
    'behavior' => [
        'missing_property' => '类 :class 必须定义行为 :behavior 用到的属性 $:property',
    ],
    'config' => [
        'not_found' => '无法找到 :location 的配置文件',
        'required' => ":location 的配置必须提供值 ':property'",
    ],
    'zip' => [
        'extract_failed' => "无法解压缩核心文件 ':file'.",
    ],
    'event_log' => [
        'hint' => '该日志显示了应用的潜在错误，比如各种异常以及调试信息',
        'menu_label' => '事件日志',
        'menu_description' => '查看带有记录时间与细节的系统日志消息',
        'empty_link' => '清空事件日志',
        'empty_loading' => '清空时间日志中...',
        'empty_success' => '成功清空事件日志',
        'return_link' => '返回',
        'id' => 'ID',
        'id_label' => '事件 ID',
        'created_at' => '时间',
        'message' => '内容',
        'level' => '等级',
    ],
    'request_log' => [
        'hint' => '该日志显示了一些值得注意的浏览器请求，比如如果一个访客打开了不存在的页面，将产生 404 错误日志记录',
        'menu_label' => '请求日志',
        'menu_description' => '查看错误与重定向请求，比如页面没有找到的 404 错误',
        'empty_link' => '清空请求日志',
        'empty_loading' => '清空请求日志中...',
        'empty_success' => '成功清空了请求日志',
        'return_link' => '返回',
        'id' => 'ID',
        'id_label' => '日志 ID',
        'count' => '次数',
        'referer' => '来源',
        'url' => 'URL',
        'status_code' => '状态码',
    ],
    'permissions' => [
        'manage_system_settings' => '系统设置管理',
        'manage_software_updates' => '更新管理',
        'manage_mail_templates' => '邮件模板管理',
        'manage_other_administrators' => '管理员管理',
        'view_the_dashboard' => '查看首页'
    ]
];