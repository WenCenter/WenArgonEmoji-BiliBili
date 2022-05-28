<?php # -*- coding: utf-8 -*-
/**
 * Plugin Name: Wen Argon Emoji BiliBili
 * Text Domain: WenArgonEmojiBiliBili
 * Domain Path: /languages
 * Description: Argon 主题的"BiliBili"表情包
 * Version:     1.92
 * Author:      干净T松鼠
 * Author URI:  https://wenlei.club/
 * License:     GPLv3+
 */

    function add_more_emotions($emotionList){
		$assets_dir = plugins_url( 'assets/', __FILE__ );
        array_push(
            $emotionList,
            array(
                'groupname' => '哔哩哔哩', 
				'description' => 'Github：https://github.com/Andy17269/WenArgonEmoji-BiliBili', 
                'list' => array(
					array('type' => 'sticker', 'code' => '2233-baodachu', 'src' => $assets_dir . '233yumen.png'),
					array('type' => 'sticker', 'code' => '2233-cahan', 'src' => $assets_dir . '233yiwen.png'),
					array('type' => 'sticker', 'code' => '2233-chibao', 'src' => $assets_dir . '233ye.png'),
					array('type' => 'sticker', 'code' => '2233-chiyu', 'src' => $assets_dir . '233wuyan.png'),
					array('type' => 'sticker', 'code' => '2233-chuibao', 'src' =>$assets_dir .  '233weiqu.png'),
					array('type' => 'sticker', 'code' => '2233-dacall', 'src' => $assets_dir . '233tuhun.png'),
					array('type' => 'sticker', 'code' => '2233-daxiao', 'src' => $assets_dir . '233nu.png'),
					array('type' => 'sticker', 'code' => '2233-dianzan', 'src' =>$assets_dir .  '233maimeng.png'),
					array('type' => 'sticker', 'code' => '2233-guaiqiao', 'src' => $assets_dir . '233kunhuo.png'),
					array('type' => 'sticker', 'code' => '2233-heilian', 'src' => $assets_dir . '233heshui.png'),
					array('type' => 'sticker', 'code' => '2233-huachi', 'src' => $assets_dir . '233han.png'),
					array('type' => 'sticker', 'code' => '2233-jiaxiao', 'src' => $assets_dir . '233diyi.png'),
					array('type' => 'sticker', 'code' => '2233-jiujie', 'src' => $assets_dir . '233daxiao.png'),
					array('type' => 'sticker', 'code' => '2233-kaixin', 'src' => $assets_dir . '233daku.png'),
					array('type' => 'sticker', 'code' => '2233-kuku', 'src' => $assets_dir . '233chijing.png'),
					array('type' => 'sticker', 'code' => 'tv-zhuakuang', 'src' => $assets_dir . 'zhuakuang.png'),
				    array('type' => 'sticker', 'code' => 'tv-zhoumei', 'src' => $assets_dir . 'zhoumei.png'),
				    array('type' => 'sticker', 'code' => 'tv-zaijian', 'src' => $assets_dir . 'zaijian.png'),
				    array('type' => 'sticker', 'code' => 'tv-yun', 'src' => $assets_dir . 'yun.png'),
				    array('type' => 'sticker', 'code' => 'tv-yiwen', 'src' =>$assets_dir .  'yiwen.png'),
				    array('type' => 'sticker', 'code' => 'tv-xieyanxiao', 'src' => $assets_dir . 'xieyanxiao.png'),
				    array('type' => 'sticker', 'code' => 'tv-xiaoku', 'src' => $assets_dir . 'xiaoku.png'),
				    array('type' => 'sticker', 'code' => 'tv-wunai', 'src' =>$assets_dir .  'wunai.png'),
				    array('type' => 'sticker', 'code' => 'tv-weixiao', 'src' => $assets_dir . 'weixiao.png'),
				    array('type' => 'sticker', 'code' => 'tv-weiqu', 'src' => $assets_dir . 'weiqu.png'),
			    	array('type' => 'sticker', 'code' => 'tv-tuxie', 'src' => $assets_dir . 'tuxie.png'),
			    	array('type' => 'sticker', 'code' => 'tv-touxiao', 'src' => $assets_dir . 'touxiao.png'),
			    	array('type' => 'sticker', 'code' => 'tv-tiaopi', 'src' => $assets_dir . 'tiaopi.png'),
			    	array('type' => 'sticker', 'code' => 'tv-taokan', 'src' => $assets_dir . 'taokan.png'),
			    	array('type' => 'sticker', 'code' => 'tv-shuizhao', 'src' => $assets_dir . 'shuizhao.png'),
					array('type' => 'sticker', 'code' => 'tv-shengqi', 'src' => $assets_dir . 'shengqi.png'),
				    array('type' => 'sticker', 'code' => 'tv-shengbing', 'src' => $assets_dir . 'shengbing.png'),
				    array('type' => 'sticker', 'code' => 'tv-se', 'src' => $assets_dir . 'se.png'),
				    array('type' => 'sticker', 'code' => 'tv-qishi', 'src' => $assets_dir . 'qishi.png'),
				    array('type' => 'sticker', 'code' => 'tv-qinqin', 'src' =>$assets_dir .  'qinqin.png'),
				    array('type' => 'sticker', 'code' => 'tv-outu', 'src' => $assets_dir . 'outu.png'),
				    array('type' => 'sticker', 'code' => 'tv-nanguo', 'src' => $assets_dir . 'nanguo.png'),
				    array('type' => 'sticker', 'code' => 'tv-mudengkoudai', 'src' =>$assets_dir .  'mudengkoudai.png'),
				    array('type' => 'sticker', 'code' => 'tv-miantian', 'src' => $assets_dir . 'miantian.png'),
				    array('type' => 'sticker', 'code' => 'tv-liulei', 'src' => $assets_dir . 'liulei.png'),
			    	array('type' => 'sticker', 'code' => 'tv-liuhan', 'src' => $assets_dir . 'liuhan.png'),
			    	array('type' => 'sticker', 'code' => 'tv-liubixie', 'src' => $assets_dir . 'liubixie.png'),
			    	array('type' => 'sticker', 'code' => 'tv-lengmo', 'src' => $assets_dir . 'lengmo.png'),
			    	array('type' => 'sticker', 'code' => 'tv-kun', 'src' => $assets_dir . 'kun.png'),
			    	array('type' => 'sticker', 'code' => 'tv-koubi', 'src' => $assets_dir . 'koubi.png'),
                    array('type' => 'sticker', 'code' => 'tv-keai', 'src' => $assets_dir . 'keai.png'),
				    array('type' => 'sticker', 'code' => 'tv-jingxia', 'src' => $assets_dir . 'jingxia.png'),
				    array('type' => 'sticker', 'code' => 'tv-huaixiao', 'src' => $assets_dir . 'huaixiao.png'),
				    array('type' => 'sticker', 'code' => 'tv-heirenwenhao', 'src' => $assets_dir . 'heirenwenhao.png'),
				    array('type' => 'sticker', 'code' => 'tv-haixiu', 'src' =>$assets_dir .  'haixiu.png'),
				    array('type' => 'sticker', 'code' => 'tv-guzhang', 'src' => $assets_dir . 'guzhang.png'),
				    array('type' => 'sticker', 'code' => 'tv-guilian', 'src' => $assets_dir . 'guilian.png'),
				    array('type' => 'sticker', 'code' => 'tv-goutou', 'src' =>$assets_dir .  'goutou.png'),
				    array('type' => 'sticker', 'code' => 'tv-ganga', 'src' => $assets_dir . 'ganga.png'),
				    array('type' => 'sticker', 'code' => 'tv-fanu', 'src' => $assets_dir . 'fanu.png'),
			    	array('type' => 'sticker', 'code' => 'tv-facai', 'src' => $assets_dir . 'facai.png'),
			    	array('type' => 'sticker', 'code' => 'tv-dianzan', 'src' => $assets_dir . 'dianzan.png'),
			    	array('type' => 'sticker', 'code' => 'tv-dalian', 'src' => $assets_dir . 'dalian.png'),
			    	array('type' => 'sticker', 'code' => 'tv-dalao', 'src' => $assets_dir . 'dalao.png'),
			    	array('type' => 'sticker', 'code' => 'tv-daku', 'src' => $assets_dir . 'daku.png'),
			    	array('type' => 'sticker', 'code' => 'tv-dai', 'src' => $assets_dir . 'dai.png'),
			    	array('type' => 'sticker', 'code' => 'tv-chan', 'src' => $assets_dir . 'chan.png'),
			    	array('type' => 'sticker', 'code' => 'tv-bizui', 'src' => $assets_dir . 'bizui.png'),
			    	array('type' => 'sticker', 'code' => 'tv-baiyan', 'src' => $assets_dir . 'baiyan.png'),
                    //Bata Open
			    	array('type' => 'sticker', 'code' => 'xhr-yinxian', 'src' => $assets_dir . '/smallyellowpeople/yinxian.png'),
			    	array('type' => 'sticker', 'code' => 'xhr-xusheng', 'src' => $assets_dir . '/smallyellowpeople/xusheng.png'),
			    	array('type' => 'sticker', 'code' => 'xhr-sijierli', 'src' => $assets_dir . '/smallyellowpeople/xijierli.png'),
                    array('type' => 'sticker', 'code' => 'xhr-xiaoku', 'src' => $assets_dir . '/smallyellowpeople/xiaoku.png'),
				    array('type' => 'sticker', 'code' => 'xhr-xianqi', 'src' => $assets_dir . '/smallyellowpeople/xianqi.png'),
				    array('type' => 'sticker', 'code' => 'xhr-xianqi', 'src' => $assets_dir . '/smallyellowpeople/xianqi.png'),
				    array('type' => 'sticker', 'code' => 'xhr-xiangzhi', 'src' => $assets_dir . '/smallyellowpeople/xiangzhi.png'),
				    array('type' => 'sticker', 'code' => 'xhr-xia', 'src' =>$assets_dir .  '/smallyellowpeople/xia.png'),
				    array('type' => 'sticker', 'code' => 'xhr-wuyu', 'src' => $assets_dir . '/smallyellowpeople/wuyu.png'),
				    array('type' => 'sticker', 'code' => 'xhr-wulian', 'src' => $assets_dir . '/smallyellowpeople/wulian.png'),
				    array('type' => 'sticker', 'code' => 'xhr-weixiao', 'src' =>$assets_dir .  '/smallyellowpeople/weixiao.png'),
				    array('type' => 'sticker', 'code' => 'xhr-weiqu', 'src' => $assets_dir . '/smallyellowpeople/weiqu.png'),
				    array('type' => 'sticker', 'code' => 'xhr-tu', 'src' => $assets_dir . '/smallyellowpeople/tu.png'),
			    	array('type' => 'sticker', 'code' => 'xhr-touxiao', 'src' => $assets_dir . '/smallyellowpeople/touxiao.png'),
			    	array('type' => 'sticker', 'code' => 'xhr-tiaopi', 'src' => $assets_dir . '/smallyellowpeople/tiaopi.png'),
			    	array('type' => 'sticker', 'code' => 'xhr-teng', 'src' => $assets_dir . '/smallyellowpeople/teng.png'),
			    	array('type' => 'sticker', 'code' => 'xhr-suanle', 'src' => $assets_dir . '/smallyellowpeople/suanle.png'),
			    	array('type' => 'sticker', 'code' => 'xhr-shengqi', 'src' => $assets_dir . '/smallyellowpeople/shengqi.png'),
			    	array('type' => 'sticker', 'code' => 'xhr-shengbing', 'src' => $assets_dir . '/smallyellowpeople/shengbing.png'),
			    	array('type' => 'sticker', 'code' => 'xhr-sajiao', 'src' => $assets_dir . '/smallyellowpeople/sajiao.png'),
			    	array('type' => 'sticker', 'code' => 'xhr-miaoya', 'src' => $assets_dir . '/smallyellowpeople/miaoya.png'),
			    	array('type' => 'sticker', 'code' => 'xhr-leng', 'src' => $assets_dir . '/smallyellowpeople/leng.png'),
					//Bata Close
                )
            )
        );
        return $emotionList;
    }
    add_filter('argon_emotion_list' , 'add_more_emotions');
// 在WordPress后台仪表盘处添加一个子菜单
add_action('admin_menu', 'dashboard_submenu');
function dashboard_submenu() {
    add_dashboard_page(__('仪表盘设置'), __('Wen Argon Emoji设置'), 'read', 'your-unique-identifier', 'add_dashboard_submenu');
}
function add_dashboard_submenu() {
  echo '<div><p><h1><strong>Wen Argon Emoji-BiliBili</strong></h1></p></div>';
  echo '<div><p>版本1.92&nbsp;&nbsp;&nbsp;<a href="http://wenlei.club/index.php/wen-argon-emoji/">检查更新</a></p></div>';
  echo '<div><p><a href="https://wenlei.club">作者博客</a>&nbsp;&nbsp;<a href="https://space.bilibili.com/1272602094">B站</a></p></div>';
  echo '<div><p>支持我的开发，就到<a href="https://github.com/Andy17269/WenArgonEmoji-BiliBili">Github</a>里点颗Star⭐吧！</p></div>';
}
?>