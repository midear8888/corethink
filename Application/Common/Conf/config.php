<?php
// +----------------------------------------------------------------------
// | CoreThink [ Simple Efficient Excellent ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.corethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: jry <598821125@qq.com> <http://www.corethink.cn>
// +----------------------------------------------------------------------

/**
 * CoreThink全局配置文件
 */
const THINK_ADDON_PATH = './Addons/';
return array(
    //CoreThink当前版本
    'CORETHINK_VERSION' => '1.0Beta',

    //数据库配置
    'DB_TYPE'   => $_SERVER[ENV_PRE.'DB_TYPE'] ? : 'mysql', // 数据库类型
    'DB_HOST'   => $_SERVER[ENV_PRE.'DB_HOST'] ? : '127.0.0.1', // 服务器地址
    'DB_NAME'   => $_SERVER[ENV_PRE.'DB_NAME'] ? : 'corethink', // 数据库名
    'DB_USER'   => $_SERVER[ENV_PRE.'DB_USER'] ? : 'root', // 用户名
    'DB_PWD'    => $_SERVER[ENV_PRE.'DB_PWD']  ? : '', // 密码
    'DB_PORT'   => $_SERVER[ENV_PRE.'DB_PORT'] ? : '3306', // 端口
    'DB_PREFIX' => $_SERVER[ENV_PRE.'DB_PREFIX'] ? : 'ct_', // 数据库表前缀

    //URL模式
    'URL_MODEL' => '3',

    //全局过滤配置
    'DEFAULT_FILTER' => '', //默认为htmlspecialchars

    //预先加载的标签库
    'TAGLIB_PRE_LOAD' => 'Home\\TagLib\\Corethink',

    //URL配置
    'URL_CASE_INSENSITIVE' => true, //不区分大小写

    //应用配置
    'DEFAULT_MODULE'     => 'Home',
    'MODULE_DENY_LIST'   => array('Common'),
    'MODULE_ALLOW_LIST'  => array('Home','Admin','Install'),
    'AUTOLOAD_NAMESPACE' => array('Addons' => THINK_ADDON_PATH), //扩展模块列表

    //表单类型
    'FORM_ITEM_TYPE' => array(
        'hidden'     => '隐藏',
        'num'        => '数字',
        'text'       => '字符串',
        'textarea'   => '文本',
        'array'      => '数组',
        'password'   => '密码',
        'radio'      => '单选按钮',
        'checkbox'   => '复选框',
        'select'     => '下拉框',
        'icon'       => '图标',
        'date  '     => '日期',
        'datetime'   => '时间',
        'picture'    => '图片',
        'pictures'   => '图片(多图)',
        'kindeditor' => '编辑器',
        'tags'       => '标签',
        'board  '    => '拖动排序',
    ),

    //栏目分类前台用户投稿权限
    'CATEGORY_POST_AUTH' => array(
        '1'  => '允许投稿',
        '0'  => '禁止投稿',
    ),

    //注册注册列表
    'REG_TYPE_LIST' => array(
        '1'  => '邮箱',
        '2'  => '手机号',
        '3'  => '第三方',
        '4'  => '后台添加',
    ),

    //前台用户类型
    'USER_TYPE_LIST' => array(
        '0'  => '个人',
        '1'  => '企业',
    ),

    //前台用户VIP等级
    'USER_VIP_LEVEL' => array(
        '0'  => '普通用户',
        '1'  => '普通VIP',
        '2'  => '高级VIP',
    ),

    //前台用户性别
    'USER_SEX_LIST' => array(
        '1'  => '男',
        '-1' => '女',
        '0'  => '保密',
    ),

    //插件类型
    'ADDON_TYPE_LIST' => array(
        '0'  => '系统插件',
        '1'  => '微＋插件',
    ),

    //评论及Digg数据表ID
    'TABLE_LIST' => array(
        '1'  => 'Document',
        '2'  => 'Category',
        '3'  => 'User',
    ),

    //Digg类型
    'DIGG_TYPE_LIST' => array(
        '1'  => 'good', //赞
        '2'  => 'bad',  //踩
        '3'  => 'mark', //收藏
    ),

    //文件上传相关配置
    'UPLOAD_CONFIG' => array(
        'mimes'    => '', //允许上传的文件MiMe类型
        'maxSize'  => 2*1024*1024, //上传的文件大小限制 (0-不做限制，默认为2M，后台配置会覆盖此值)
        'autoSub'  => true, //自动子目录保存文件
        'subName'  => array('date', 'Y-m-d'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
        'rootPath' => './Uploads/', //保存根路径
        'savePath' => '', //保存路径
        'saveName' => array('uniqid', ''), //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
        'saveExt'  => '', //文件保存后缀，空则使用原后缀
        'replace'  => false, //存在同名是否覆盖
        'hash'     => true, //是否生成hash编码
        'callback' => false, //检测文件是否存在回调函数，如果存在返回文件信息数组
    ),
);
