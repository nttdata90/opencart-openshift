<?php 
$query['pavsliderlayer'][]  = "  DROP TABLE IF EXISTS `".DB_PREFIX ."pavoslidergroups`; ";
$query['pavsliderlayer'][]  = "  DROP TABLE IF EXISTS `".DB_PREFIX ."pavosliderlayers`; ";
$query['pavsliderlayer'][] = "
CREATE TABLE `".DB_PREFIX ."pavoslidergroups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `params` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

"; 

$query['pavsliderlayer'][] = "
CREATE TABLE `".DB_PREFIX ."pavosliderlayers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `params` text NOT NULL,
  `layersparams` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
"; 


$query['pavsliderlayer'][] ="
INSERT INTO `".DB_PREFIX ."pavoslidergroups` (`id`, `title`, `params`) VALUES(4, 'Slideshow', 'a:28:{s:5:\"title\";s:9:\"Slideshow\";s:5:\"delay\";s:4:\"9000\";s:9:\"fullwidth\";s:0:\"\";s:5:\"width\";s:4:\"1180\";s:6:\"height\";s:3:\"425\";s:12:\"touch_mobile\";s:1:\"1\";s:13:\"stop_on_hover\";s:1:\"0\";s:12:\"shuffle_mode\";s:1:\"0\";s:14:\"image_cropping\";s:1:\"0\";s:11:\"shadow_type\";s:1:\"0\";s:14:\"show_time_line\";s:1:\"0\";s:18:\"time_line_position\";s:3:\"top\";s:16:\"background_color\";s:7:\"#d9d9d9\";s:6:\"margin\";s:12:\"0px 0px 18px\";s:7:\"padding\";s:7:\"5px 5px\";s:16:\"background_image\";s:1:\"0\";s:14:\"background_url\";s:0:\"\";s:14:\"navigator_type\";s:6:\"bullet\";s:16:\"navigator_arrows\";s:16:\"verticalcentered\";s:16:\"navigation_style\";s:5:\"round\";s:17:\"offset_horizontal\";s:1:\"0\";s:15:\"offset_vertical\";s:1:\"0\";s:14:\"show_navigator\";s:1:\"1\";s:20:\"hide_navigator_after\";s:3:\"200\";s:15:\"thumbnail_width\";s:3:\"100\";s:16:\"thumbnail_height\";s:2:\"50\";s:16:\"thumbnail_amount\";s:1:\"5\";s:17:\"hide_screen_width\";s:0:\"\";}');

"; 
	

$query['pavsliderlayer'][] = "
INSERT INTO `".DB_PREFIX ."pavosliderlayers` (`id`, `title`, `parent_id`, `group_id`, `params`, `layersparams`, `image`, `status`, `position`) VALUES
(8, 'image slideshow1', 0, 4, 'a:16:{s:2:\"id\";s:1:\"8\";s:15:\"slider_group_id\";s:1:\"4\";s:12:\"slider_title\";s:16:\"image slideshow1\";s:13:\"slider_status\";s:1:\"1\";s:17:\"slider_transition\";s:18:\"slotslide-vertical\";s:11:\"slider_slot\";s:1:\"7\";s:15:\"slider_rotation\";s:1:\"0\";s:15:\"slider_duration\";s:3:\"700\";s:12:\"slider_delay\";s:1:\"0\";s:11:\"slider_link\";s:0:\"\";s:16:\"slider_thumbnail\";s:0:\"\";s:15:\"slider_usevideo\";s:1:\"0\";s:14:\"slider_videoid\";s:0:\"\";s:16:\"slider_videoplay\";s:1:\"0\";s:9:\"slider_id\";s:1:\"8\";s:12:\"slider_image\";s:23:\"data/slider/bg-mask.png\";}', 'O:8:\"stdClass\":1:{s:6:\"layers\";a:4:{i:0;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:0:\"\";s:17:\"layer_video_width\";s:0:\"\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:1;s:13:\"layer_content\";s:26:\"data/slider/img-slide2.png\";s:10:\"layer_type\";s:5:\"image\";s:11:\"layer_class\";s:0:\"\";s:13:\"layer_caption\";s:17:\"Your Image Here 1\";s:15:\"layer_animation\";s:3:\"sfr\";s:12:\"layer_easing\";s:14:\"easeInOutQuint\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:2:\"14\";s:10:\"layer_left\";s:3:\"840\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:3:\"400\";}i:1;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:0:\"\";s:17:\"layer_video_width\";s:0:\"\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:2;s:13:\"layer_content\";s:26:\"data/slider/img-slide1.png\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:9:\"cus_black\";s:13:\"layer_caption\";s:7:\"Posuere\";s:15:\"layer_animation\";s:3:\"sft\";s:12:\"layer_easing\";s:14:\"easeInOutQuint\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:2:\"64\";s:10:\"layer_left\";s:3:\"109\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:3:\"800\";}i:2;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:0:\"\";s:17:\"layer_video_width\";s:0:\"\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:3;s:13:\"layer_content\";s:26:\"data/slider/img-slide1.png\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:9:\"cus_color\";s:13:\"layer_caption\";s:5:\"Offer\";s:15:\"layer_animation\";s:3:\"sfl\";s:12:\"layer_easing\";s:14:\"easeInOutQuart\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"136\";s:10:\"layer_left\";s:3:\"194\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"1200\";}i:3;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:0:\"\";s:17:\"layer_video_width\";s:0:\"\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:4;s:13:\"layer_content\";s:26:\"data/slider/img-slide1.png\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:0:\"\";s:13:\"layer_caption\";s:137:\"Curabitur tempus velit in leo fermentum quis tincidunt  &lt;br&gt;lorem lacinia volutpat alique lorem lacinia volutpat aliquet &lt;br&gt;\";s:15:\"layer_animation\";s:3:\"sfb\";s:12:\"layer_easing\";s:14:\"easeInOutQuart\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"229\";s:10:\"layer_left\";s:3:\"110\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"1600\";}}}', 'data/slider/bg-mask.png', 1, 1),
(10, 'image slideshow2', 0, 4, 'a:16:{s:2:\"id\";s:2:\"10\";s:15:\"slider_group_id\";s:1:\"4\";s:12:\"slider_title\";s:16:\"image slideshow2\";s:13:\"slider_status\";s:1:\"1\";s:17:\"slider_transition\";s:18:\"slotslide-vertical\";s:11:\"slider_slot\";s:1:\"7\";s:15:\"slider_rotation\";s:1:\"0\";s:15:\"slider_duration\";s:3:\"700\";s:12:\"slider_delay\";s:1:\"0\";s:11:\"slider_link\";s:0:\"\";s:16:\"slider_thumbnail\";s:0:\"\";s:15:\"slider_usevideo\";s:1:\"0\";s:14:\"slider_videoid\";s:0:\"\";s:16:\"slider_videoplay\";s:1:\"0\";s:9:\"slider_id\";s:2:\"10\";s:12:\"slider_image\";s:23:\"data/slider/bg-mask.png\";}', 'O:8:\"stdClass\":1:{s:6:\"layers\";a:4:{i:0;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:0:\"\";s:17:\"layer_video_width\";s:0:\"\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:1;s:13:\"layer_content\";s:26:\"data/slider/img-slide1.png\";s:10:\"layer_type\";s:5:\"image\";s:11:\"layer_class\";s:0:\"\";s:13:\"layer_caption\";s:17:\"Your Image Here 1\";s:15:\"layer_animation\";s:3:\"sfl\";s:12:\"layer_easing\";s:14:\"easeInOutQuint\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:1:\"7\";s:10:\"layer_left\";s:2:\"25\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:3:\"400\";}i:1;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:0:\"\";s:17:\"layer_video_width\";s:0:\"\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:2;s:13:\"layer_content\";s:26:\"data/slider/img-slide1.png\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:9:\"cus_black\";s:13:\"layer_caption\";s:7:\"Posuere\";s:15:\"layer_animation\";s:3:\"sft\";s:12:\"layer_easing\";s:14:\"easeInOutQuint\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:2:\"41\";s:10:\"layer_left\";s:3:\"701\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:3:\"800\";}i:2;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:0:\"\";s:17:\"layer_video_width\";s:0:\"\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:3;s:13:\"layer_content\";s:26:\"data/slider/img-slide1.png\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:9:\"cus_color\";s:13:\"layer_caption\";s:5:\"Offer\";s:15:\"layer_animation\";s:3:\"sfl\";s:12:\"layer_easing\";s:14:\"easeInOutQuart\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"115\";s:10:\"layer_left\";s:3:\"770\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"1200\";}i:3;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:0:\"\";s:17:\"layer_video_width\";s:0:\"\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:4;s:13:\"layer_content\";s:26:\"data/slider/img-slide1.png\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:0:\"\";s:13:\"layer_caption\";s:119:\"Ut elit nulla, posuere non euismod sed, blandit sit  posuere&lt;br&gt; non euismod  leo fermentum quis tincidunt lorem \";s:15:\"layer_animation\";s:3:\"lfb\";s:12:\"layer_easing\";s:14:\"easeInOutQuart\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"223\";s:10:\"layer_left\";s:3:\"710\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"1600\";}}}', 'data/slider/bg-mask.png', 1, 1);
"; 

$query['pavmegamenu'][]  = "  DROP TABLE IF EXISTS `".DB_PREFIX ."megamenu`; ";
$query['pavmegamenu'][]  = "   DROP TABLE IF EXISTS `".DB_PREFIX ."megamenu_description`; ";
$query['pavmegamenu'][]  = "   DROP TABLE IF EXISTS `".DB_PREFIX ."megamenu_widgets`; ";
$query['pavmegamenu'][]  = "	
CREATE TABLE `".DB_PREFIX ."megamenu` (
  `megamenu_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL DEFAULT '',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `is_group` smallint(6) NOT NULL DEFAULT '2',
  `width` varchar(255) DEFAULT NULL,
  `submenu_width` varchar(255) DEFAULT NULL,
  `colum_width` varchar(255) DEFAULT NULL,
  `submenu_colum_width` varchar(255) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `colums` varchar(255) DEFAULT '1',
  `type` varchar(255) NOT NULL,
  `is_content` smallint(6) NOT NULL DEFAULT '2',
  `show_title` smallint(6) NOT NULL DEFAULT '1',
  `type_submenu` varchar(10) NOT NULL DEFAULT '1',
  `level_depth` smallint(6) NOT NULL DEFAULT '0',
  `published` smallint(6) NOT NULL DEFAULT '1',
  `store_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `position` int(11) unsigned NOT NULL DEFAULT '0',
  `show_sub` smallint(6) NOT NULL DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `target` varchar(25) DEFAULT NULL,
  `privacy` smallint(5) unsigned NOT NULL DEFAULT '0',
  `position_type` varchar(25) DEFAULT 'top',
  `menu_class` varchar(25) DEFAULT NULL,
  `description` text,
  `content_text` text,
  `submenu_content` text,
  `level` int(11) NOT NULL,
  `left` int(11) NOT NULL,
  `right` int(11) NOT NULL,
  `widget_id` int(11) DEFAULT '0',
  PRIMARY KEY (`megamenu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
";

$query['pavmegamenu'][]  = "
	CREATE TABLE `".DB_PREFIX ."megamenu_description` (
  `megamenu_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`megamenu_id`,`language_id`),
  KEY `name` (`title`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
	";
	

$query['pavmegamenu'][]  = "
	CREATE TABLE `".DB_PREFIX ."megamenu_widgets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `type` varchar(255) NOT NULL,
  `params` text NOT NULL,
  `store_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
	";
	
	$query['pavmegamenu'][] = "	
		INSERT INTO `".DB_PREFIX ."megamenu` (`megamenu_id`, `image`, `parent_id`, `is_group`, `width`, `submenu_width`, `colum_width`, `submenu_colum_width`, `item`, `colums`, `type`, `is_content`, `show_title`, `type_submenu`, `level_depth`, `published`, `store_id`, `position`, `show_sub`, `url`, `target`, `privacy`, `position_type`, `menu_class`, `description`, `content_text`, `submenu_content`, `level`, `left`, `right`, `widget_id`) VALUES
(1, '', 0, 2, NULL, NULL, NULL, NULL, NULL, '1', '', 2, 1, '1', 0, 1, 0, 0, 0, NULL, NULL, 0, 'top', NULL, NULL, NULL, NULL, -5, 34, 47, 0),
(20, '', 1, 0, NULL, NULL, NULL, '', '', '1', 'url', 0, 1, 'menu', 0, 1, 0, 1, 0, '?route=common/home', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0, 0),
(21, '', 1, 0, NULL, NULL, NULL, '', '17', '1', 'category', 0, 1, 'menu', 0, 1, 0, 2, 0, 'Bike parts', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0, 0),
(22, '', 1, 0, NULL, NULL, NULL, 'col=12', '34', '1', 'category', 0, 1, 'menu', 0, 1, 0, 3, 0, '', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0, 1),
(23, '', 1, 0, NULL, NULL, NULL, '', '61', '1', 'category', 0, 1, 'menu', 0, 1, 0, 4, 0, '', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0, 0),
(24, '', 1, 0, NULL, NULL, NULL, '', '33', '1', 'category', 0, 1, 'menu', 0, 1, 0, 5, 0, '', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0, 0),
(25, '', 1, 0, NULL, NULL, NULL, '', '8', '1', 'url', 0, 1, 'menu', 0, 1, 0, 6, 0, 'index.php?route=product/manufacturer', NULL, 0, 'top', 'box-brand', NULL, '', '', 0, 0, 0, 0),
(26, '', 40, 1, NULL, NULL, NULL, '', '', '1', 'url', 0, 1, 'menu', 0, 1, 0, 1, 0, '#', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0, 0),
(27, '', 40, 1, NULL, NULL, NULL, '', '', '1', 'url', 0, 1, 'menu', 0, 1, 0, 99, 0, '#', NULL, 0, 'top', '', NULL, '&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n', '&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n', 0, 0, 0, 0),
(28, '', 26, 0, NULL, NULL, NULL, '', '', '1', 'url', 0, 1, 'menu', 0, 1, 0, 5, 0, '#', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0, 0),
(31, '', 26, 0, NULL, NULL, NULL, '', '17', '1', 'category', 0, 1, 'menu', 0, 1, 0, 1, 0, '', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0, 0),
(32, '', 26, 0, NULL, NULL, NULL, '', '33', '1', 'category', 0, 1, 'menu', 0, 1, 0, 2, 0, '', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0, 0),
(33, '', 26, 0, NULL, NULL, NULL, '', '60', '1', 'category', 0, 1, 'menu', 0, 1, 0, 3, 0, '', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0, 0),
(34, '', 26, 0, NULL, NULL, NULL, '', '34', '1', 'category', 0, 1, 'menu', 0, 1, 0, 4, 0, '', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0, 0),
(37, '', 23, 0, NULL, NULL, NULL, '', '20', '1', 'category', 0, 1, 'menu', 0, 1, 0, 3, 0, '', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0, 0),
(38, '', 23, 0, NULL, NULL, NULL, '', '51', '1', 'product', 0, 1, 'menu', 0, 1, 0, 4, 0, '', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0, 0),
(42, '', 27, 0, NULL, NULL, NULL, '', '', '1', 'html', 0, 1, 'menu', 0, 1, 0, 99, 0, '', NULL, 0, 'top', '', NULL, '&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n', '', 0, 0, 0, 0),
(44, '', 1, 0, NULL, NULL, NULL, '', '', '1', 'url', 0, 1, 'menu', 0, 1, 0, 7, 0, 'index.php?route=pavblog/blogs', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0, 0),
(46, '', 23, 0, NULL, NULL, NULL, '', '', '1', 'category', 0, 1, 'menu', 0, 1, 0, 1, 0, '', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0, 1),
(47, '', 23, 0, NULL, NULL, NULL, '', '18', '1', 'category', 0, 1, 'menu', 0, 1, 0, 2, 0, '', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0, 1);
";
	
	$query['pavmegamenu'][] = "	
INSERT INTO `".DB_PREFIX ."megamenu_description` (`megamenu_id`, `language_id`, `title`, `description`) VALUES
(1, 1, 'ROOT', 'Menu Root'),
(20, 3, 'Home', ''),
(21, 3, 'Footwear', ''),
(22, 1, 'Men', ''),
(23, 1, 'Women', ''),
(25, 1, 'Brand', ''),
(26, 3, 'Nulla a odio', ''),
(26, 1, 'Nulla a odio', ''),
(26, 2, 'Nulla a odio', ''),
(27, 3, ' Sed quam lore', ''),
(28, 3, 'Siam eget arcu', ''),
(31, 1, 'Aenean placerat', ''),
(31, 3, 'Aenean placerat', ''),
(31, 2, 'Aenean placerat', ''),
(32, 3, 'Hendrerit libero', ''),
(32, 1, 'Hendrerit libero', ''),
(32, 2, 'Hendrerit libero', ''),
(33, 1, 'Luctus et eu', ''),
(33, 3, 'Luctus et eu', ''),
(33, 2, 'Luctus et eu', ''),
(34, 1, 'Cliquet lectus rutrum', ''),
(34, 3, 'Cliquet lectus rutrum', ''),
(34, 2, 'Cliquet lectus rutrum', ''),
(46, 3, 'Nullam aliquet ant', ''),
(46, 1, 'Nullam aliquet ant', ''),
(47, 1, 'Pellentesque mauris', ''),
(47, 3, 'Pellentesque mauris', ''),
(37, 1, 'Quisque eu augue', ''),
(37, 3, 'Quisque eu augue', ''),
(37, 2, 'Quisque eu augue', ''),
(38, 2, 'Item page', ''),
(38, 1, 'Item page', ''),
(38, 3, 'Item page', ''),
(42, 3, 'Curabitur tempus', ''),
(42, 1, 'Curabitur tempus', ''),
(27, 1, ' Sed quam lore', ''),
(28, 1, 'Siam eget arcu', ''),
(20, 1, 'Home', ''),
(21, 1, 'Footwear', ''),
(23, 3, 'Women', ''),
(24, 1, 'Jewelry', ''),
(25, 3, 'Brand', ''),
(24, 3, 'Jewelry', ''),
(44, 3, 'Blog', ''),
(44, 1, 'Blog', ''),
(22, 3, 'Men', '');
";
$query['pavmegamenu'][] = "	
INSERT INTO `".DB_PREFIX ."megamenu_widgets` (`id`, `name`, `type`, `params`, `store_id`) VALUES
(1, 'Video Opencart Installation', 'video_code', 'a:1:{s:10:\"video_code\";s:126:\"&lt;iframe width=&quot;300&quot; height=&quot;240&quot; src=&quot;//www.youtube.com/embed/cUhPA5qIxDQ&quot;&gt;&lt;/iframe&gt;\";}', 0),
(2, 'Demo HTML Sample', 'html', 'a:1:{s:4:\"html\";a:1:{i:1;s:275:\"Dorem ipsum dolor sit amet consectetur adipiscing elit congue sit amet erat roin tincidunt vehicula lorem in adipiscing urna iaculis vel. Dorem ipsum dolor sit amet consectetur adipiscing elit congue sit amet erat roin tincidunt vehicula lorem in adipiscing urna iaculis vel.\";}}', 0),
(3, 'Products Latest', 'product_list', 'a:4:{s:9:\"list_type\";s:7:\"special\";s:5:\"limit\";s:1:\"3\";s:11:\"image_width\";s:2:\"80\";s:12:\"image_height\";s:2:\"67\";}', 0),
(4, 'Products In Cat 20', 'product_category', 'a:4:{s:11:\"category_id\";s:2:\"20\";s:5:\"limit\";s:1:\"6\";s:11:\"image_width\";s:3:\"120\";s:12:\"image_height\";s:3:\"120\";}', 0),
(5, 'Manufactures', 'banner', 'a:4:{s:8:\"group_id\";s:1:\"8\";s:11:\"image_width\";s:2:\"80\";s:12:\"image_height\";s:2:\"80\";s:5:\"limit\";s:2:\"12\";}', 0),
(6, 'PavoThemes Feed', 'feed', 'a:1:{s:8:\"feed_url\";s:55:\"http://www.pavothemes.com/opencart-themes.feed?type=rss\";}', 0),
(7, 'Categories', 'html', 'a:1:{s:4:\"html\";a:2:{i:1;s:649:\"&lt;ul&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=17&quot;&gt;Footwear&lt;/a&gt;\r\n  &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=34&quot;&gt;Men&lt;/a&gt;\r\n  &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=61&quot;&gt;Women&lt;/a&gt;\r\n  &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=33&quot;&gt;Jewelry&lt;/a&gt;\r\n  &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/manufacturer&quot;&gt;Brand&lt;/a&gt;\r\n  &lt;/li&gt;\r\n&lt;/ul&gt;\";i:3;s:649:\"&lt;ul&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=17&quot;&gt;Footwear&lt;/a&gt;\r\n  &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=34&quot;&gt;Men&lt;/a&gt;\r\n  &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=61&quot;&gt;Women&lt;/a&gt;\r\n  &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=33&quot;&gt;Jewelry&lt;/a&gt;\r\n  &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/manufacturer&quot;&gt;Brand&lt;/a&gt;\r\n  &lt;/li&gt;\r\n&lt;/ul&gt;\";}}', 0),
(9, 'Nulla a odio', 'html', 'a:1:{s:4:\"html\";a:2:{i:1;s:699:\"&lt;ul&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=17&quot;&gt;Aenean placerat&lt;/a&gt;\r\n  &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=34&quot;&gt;Hendrerit libero&lt;/a&gt;\r\n  &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=61&quot;&gt;Luctus et eu&lt;/a&gt;\r\n  &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=33&quot;&gt;Cliquet lectus rutrum&lt;/a&gt;\r\n  &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/manufacturer&quot;&gt;Siam eget arcu&lt;/a&gt;\r\n  &lt;/li&gt;\r\n&lt;/ul&gt;\";i:3;s:699:\"&lt;ul&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=17&quot;&gt;Aenean placerat&lt;/a&gt;\r\n  &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=34&quot;&gt;Hendrerit libero&lt;/a&gt;\r\n  &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=61&quot;&gt;Luctus et eu&lt;/a&gt;\r\n  &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/category&amp;amp;path=33&quot;&gt;Cliquet lectus rutrum&lt;/a&gt;\r\n  &lt;/li&gt;\r\n  &lt;li&gt;\r\n      &lt;a href=&quot;index.php?route=product/manufacturer&quot;&gt;Siam eget arcu&lt;/a&gt;\r\n  &lt;/li&gt;\r\n&lt;/ul&gt;\";}}', 0),
(8, 'Banner', 'html', 'a:1:{s:4:\"html\";a:2:{i:1;s:68:\"&lt;img src=&quot;image/data/img_menu.jpg&quot; alt=&quot;&quot;&gt;\";i:3;s:68:\"&lt;img src=&quot;image/data/img_menu.jpg&quot; alt=&quot;&quot;&gt;\";}}', 0);
";	

 
$query['pavmegamenu'][]  = "DELETE FROM `".DB_PREFIX ."setting` WHERE `group`='pavmegamenu' and `key` = 'pavmegamenu_module'";
$query['pavmegamenu'][] =  " 
INSERT INTO `".DB_PREFIX ."setting` (`setting_id`, `store_id`, `group`, `key`, `value`, `serialized`) VALUES
(0, 0, 'pavmegamenu', 'pavmegamenu_module', 'a:1:{i:0;a:4:{s:9:\"layout_id\";s:5:\"99999\";s:8:\"position\";s:8:\"mainmenu\";s:6:\"status\";s:1:\"1\";s:10:\"sort_order\";s:1:\"1\";}}', 1);";

$query['pavmegamenu'][]  = "DELETE FROM `".DB_PREFIX ."setting` WHERE `group`='pavmegamenu_params' and `key` = 'params'";
$query['pavmegamenu'][] =  " 
INSERT INTO `".DB_PREFIX ."setting` (`setting_id`, `store_id`, `group`, `key`, `value`, `serialized`) VALUES
(0, 0, 'pavmegamenu_params', 'params', '[{\"submenu\":1,\"subwidth\":600,\"cols\":1,\"group\":0,\"id\":21,\"rows\":[{\"cols\":[{\"widgets\":\"wid-3\",\"colwidth\":5},{\"widgets\":\"wid-1\",\"colwidth\":7}]}]},{\"submenu\":1,\"subwidth\":480,\"id\":22,\"cols\":1,\"group\":0,\"rows\":[{\"cols\":[{\"widgets\":\"wid-7\",\"colclass\":\"widget-category\",\"colwidth\":6},{\"widgets\":\"wid-9\",\"colclass\":\"widget-category\",\"colwidth\":6}]},{\"cols\":[{\"widgets\":\"wid-8\",\"colwidth\":12,\"colclass\":\"hidden-title\"}]}]},{\"submenu\":1,\"cols\":1,\"group\":0,\"id\":23,\"rows\":[{\"cols\":[{\"colwidth\":12,\"type\":\"menu\"}]}]}]', 0);
";  




$query['pavblog'][]  = "DROP TABLE IF EXISTS `".DB_PREFIX ."pavblog_blog`; ";
$query['pavblog'][]  = "DROP TABLE IF EXISTS `".DB_PREFIX ."pavblog_blog_description`; ";
$query['pavblog'][]  = "DROP TABLE IF EXISTS `".DB_PREFIX ."pavblog_category`; ";
$query['pavblog'][]  = "DROP TABLE IF EXISTS `".DB_PREFIX ."pavblog_category_description`; ";
$query['pavblog'][]  = "DROP TABLE IF EXISTS `".DB_PREFIX ."pavblog_comment`; ";


	$query['pavblog'][]  = "	
CREATE TABLE `".DB_PREFIX ."pavblog_blog` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `created` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hits` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `date_modified` date NOT NULL,
  `video_code` varchar(255) NOT NULL,
  `params` text NOT NULL,
  `tags` varchar(255) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;
				
			";
	$query['pavblog'][]  = "	
CREATE TABLE `".DB_PREFIX ."pavblog_blog_description` (
  `blog_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
			";
	$query['pavblog'][]  = "	
CREATE TABLE `".DB_PREFIX ."pavblog_category` (
  `category_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL DEFAULT '',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `is_group` smallint(6) NOT NULL DEFAULT '2',
  `width` varchar(255) DEFAULT NULL,
  `submenu_width` varchar(255) DEFAULT NULL,
  `colum_width` varchar(255) DEFAULT NULL,
  `submenu_colum_width` varchar(255) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `colums` varchar(255) DEFAULT '1',
  `type` varchar(255) NOT NULL,
  `is_content` smallint(6) NOT NULL DEFAULT '2',
  `show_title` smallint(6) NOT NULL DEFAULT '1',
  `meta_keyword` varchar(255) NOT NULL DEFAULT '1',
  `level_depth` smallint(6) NOT NULL DEFAULT '0',
  `published` smallint(6) NOT NULL DEFAULT '1',
  `store_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `position` int(11) unsigned NOT NULL DEFAULT '0',
  `show_sub` smallint(6) NOT NULL DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `target` varchar(25) DEFAULT NULL,
  `privacy` smallint(5) unsigned NOT NULL DEFAULT '0',
  `position_type` varchar(25) DEFAULT 'top',
  `menu_class` varchar(25) DEFAULT NULL,
  `description` text,
  `meta_description` text,
  `meta_title` varchar(255) DEFAULT NULL,
  `level` int(11) NOT NULL,
  `left` int(11) NOT NULL,
  `right` int(11) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;
			";
			
	$query['pavblog'][]  = "	
CREATE TABLE `".DB_PREFIX ."pavblog_category_description` (
  `category_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`category_id`,`language_id`),
  KEY `name` (`title`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
			";	
			
	$query['pavblog'][]  = "	
CREATE TABLE `".DB_PREFIX ."pavblog_comment` (
  `comment_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) unsigned NOT NULL,
  `comment` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `FK_blog_comment` (`blog_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;
			";				

	$query['pavblog'][] ="
INSERT INTO `".DB_PREFIX ."pavblog_blog` (`blog_id`, `category_id`, `position`, `created`, `status`, `user_id`, `hits`, `image`, `meta_keyword`, `meta_description`, `meta_title`, `date_modified`, `video_code`, `params`, `tags`, `featured`, `keyword`) VALUES
(7, 21, 2, '2013-03-09', 1, 1, 47, 'data/pavblog/img-blog1.jpg', '', '', '', '2013-07-15', '', '', 'joomla, prestashop, magento', 1, ''),
(9, 21, 0, '2013-03-09', 1, 1, 77, 'data/pavblog/img-blog2.jpg', '', '', '', '2013-07-15', '', '', 'prestashop, magento', 0, ''),
(10, 21, 0, '2013-03-09', 1, 1, 0, 'data/pavblog/img-blog3.jpg', 'test test', '', 'Custom SEO Titlte', '2013-07-15', '&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;http://www.youtube.com/embed/-ZsFrs2O8pI&quot; frameborder=&quot;0&quot; allowfullscreen&gt;&lt;/iframe&gt;', '', 'prestashop', 0, ''),
(11, 21, 0, '2013-03-11', 1, 1, 71, 'data/pavblog/img-blog.jpg', '', '', '', '2013-06-27', '', '', 'opencart', 0, '');
"; 
			
$query['pavblog'][] ="
INSERT INTO `".DB_PREFIX ."pavblog_blog_description` (`blog_id`, `language_id`, `title`, `description`, `content`) VALUES
(11, 1, 'Donec tellus lorem elit id ut', '&lt;p&gt;Donec tellus Nulla lorem Nullam elit id ut elit feugiat lacus. Congue eget dapibus congue tincidunt senectus nibh risus Phasellus tristique justo. Justo Pellentesque Donec lobortis faucibus Vestibulum Praesent mauris volutpat vitae metus. Ipsum cursus vestibulum at interdum Vivamus nunc fringilla Curabitur ac quis. Nam lacinia wisi tortor orci quis vitae.&lt;/p&gt;\r\n', '&lt;div class=&quot;itemFullText&quot;&gt;\r\n&lt;p&gt;Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur magna. Euismod euismod Suspendisse tortor ante adipiscing risus Aenean Lorem vitae id. Odio ut pretium ligula quam Vestibulum consequat convallis fringilla Vestibulum nulla. Accumsan morbi tristique auctor Aenean nulla lacinia Nullam elit vel vel. At risus pretium urna tortor metus fringilla interdum mauris tempor congue.&lt;/p&gt;\r\n\r\n&lt;p&gt;Donec tellus Nulla lorem Nullam elit id ut elit feugiat lacus. Congue eget dapibus congue tincidunt senectus nibh risus Phasellus tristique justo. Justo Pellentesque Donec lobortis faucibus Vestibulum Praesent mauris volutpat vitae metus. Ipsum cursus vestibulum at interdum Vivamus nunc fringilla Curabitur ac quis. Nam lacinia wisi tortor orci quis vitae.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sed mauris Pellentesque elit Aliquam at lacus interdum nascetur elit ipsum. Enim ipsum hendrerit Suspendisse turpis laoreet fames tempus ligula pede ac. Et Lorem penatibus orci eu ultrices egestas Nam quam Vivamus nibh. Morbi condimentum molestie Nam enim odio sodales pretium eros sem pellentesque. Sit tellus Integer elit egestas lacus turpis id auctor nascetur ut. Ac elit vitae.&lt;/p&gt;\r\n\r\n&lt;p&gt;Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum faucibus. At Nulla id tincidunt ut sed semper vel Lorem condimentum ornare. Laoreet Vestibulum lacinia massa a commodo habitasse velit Vestibulum tincidunt In. Turpis at eleifend leo mi elit Aenean porta ac sed faucibus. Nunc urna Morbi fringilla vitae orci convallis condimentum auctor sit dui. Urna pretium elit mauris cursus Curabitur at elit Vestibulum.&lt;/p&gt;\r\n&lt;/div&gt;\r\n'),
(11, 3, '', '', ''),
(9, 1, 'Commodo laoreet semper', '&lt;p&gt;Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur magna. Euismod euismod Suspendisse tortor ante adipiscing risus Aenean Lorem vitae id. Odio ut pretium ligula quam Vestibulum consequat convallis fringilla Vestibulum nulla. Accumsan morbi tristique auctor Aenean nulla lacinia Nullam elit vel vel. At risus pretium urna tortor metus fringilla interdum mauris tempor congue&lt;/p&gt;\r\n', '&lt;div class=&quot;itemFullText&quot;&gt;\r\n&lt;p&gt;Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur magna. Euismod euismod Suspendisse tortor ante adipiscing risus Aenean Lorem vitae id. Odio ut pretium ligula quam Vestibulum consequat convallis fringilla Vestibulum nulla. Accumsan morbi tristique auctor Aenean nulla lacinia Nullam elit vel vel. At risus pretium urna tortor metus fringilla interdum mauris tempor congue.&lt;/p&gt;\r\n\r\n&lt;p&gt;Donec tellus Nulla lorem Nullam elit id ut elit feugiat lacus. Congue eget dapibus congue tincidunt senectus nibh risus Phasellus tristique justo. Justo Pellentesque Donec lobortis faucibus Vestibulum Praesent mauris volutpat vitae metus. Ipsum cursus vestibulum at interdum Vivamus nunc fringilla Curabitur ac quis. Nam lacinia wisi tortor orci quis vitae.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sed mauris Pellentesque elit Aliquam at lacus interdum nascetur elit ipsum. Enim ipsum hendrerit Suspendisse turpis laoreet fames tempus ligula pede ac. Et Lorem penatibus orci eu ultrices egestas Nam quam Vivamus nibh. Morbi condimentum molestie Nam enim odio sodales pretium eros sem pellentesque. Sit tellus Integer elit egestas lacus turpis id auctor nascetur ut. Ac elit vitae.&lt;/p&gt;\r\n\r\n&lt;p&gt;Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum faucibus. At Nulla id tincidunt ut sed semper vel Lorem condimentum ornare. Laoreet Vestibulum lacinia massa a commodo habitasse velit Vestibulum tincidunt In. Turpis at eleifend leo mi elit Aenean porta ac sed faucibus. Nunc urna Morbi fringilla vitae orci convallis condimentum auctor sit dui. Urna pretium elit mauris cursus Curabitur at elit Vestibulum.&lt;/p&gt;\r\n&lt;/div&gt;\r\n'),
(9, 3, '', '', ''),
(10, 1, 'Neque porro quisquam ipsum', '&lt;p&gt;&quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.&lt;/p&gt;\r\n', '&lt;p&gt;&lt;img align=&quot;left&quot; alt=&quot;&quot; src=&quot;http://localhost/opencart-work/opencart-1.5.5.1/upload/image/data/demo/htc_touch_hd_3.jpg&quot; style=&quot;width: 350px; height: 350px;&quot; /&gt;Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&lt;/p&gt;\r\n'),
(10, 3, '', '', ''),
(7, 1, 'Ac tincidunt pendisse males', '&lt;p&gt;Ac tincidunt Suspendisse malesuada velit in Nullam elit magnis netus Vestibulum. Praesent Nam adipiscing Aliquam elit accumsan wisi sit semper scelerisque convallis. Sed quisque cum velit&lt;/p&gt;\r\n', '&lt;div class=&quot;itemFullText&quot;&gt;\r\n&lt;p&gt;Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur magna. Euismod euismod Suspendisse tortor ante adipiscing risus Aenean Lorem vitae id. Odio ut pretium ligula quam Vestibulum consequat convallis fringilla Vestibulum nulla. Accumsan morbi tristique auctor Aenean nulla lacinia Nullam elit vel vel. At risus pretium urna tortor metus fringilla interdum mauris tempor congue.&lt;/p&gt;\r\n\r\n&lt;p&gt;Donec tellus Nulla lorem Nullam elit id ut elit feugiat lacus. Congue eget dapibus congue tincidunt senectus nibh risus Phasellus tristique justo. Justo Pellentesque Donec lobortis faucibus Vestibulum Praesent mauris volutpat vitae metus. Ipsum cursus vestibulum at interdum Vivamus nunc fringilla Curabitur ac quis. Nam lacinia wisi tortor orci quis vitae.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sed mauris Pellentesque elit Aliquam at lacus interdum nascetur elit ipsum. Enim ipsum hendrerit Suspendisse turpis laoreet fames tempus ligula pede ac. Et Lorem penatibus orci eu ultrices egestas Nam quam Vivamus nibh. Morbi condimentum molestie Nam enim odio sodales pretium eros sem pellentesque. Sit tellus Integer elit egestas lacus turpis id auctor nascetur ut. Ac elit vitae.&lt;/p&gt;\r\n\r\n&lt;p&gt;Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum faucibus. At Nulla id tincidunt ut sed semper vel Lorem condimentum ornare. Laoreet Vestibulum lacinia massa a commodo habitasse velit Vestibulum tincidunt In. Turpis at eleifend leo mi elit Aenean porta ac sed faucibus. Nunc urna Morbi fringilla vitae orci convallis condimentum auctor sit dui. Urna pretium elit mauris cursus Curabitur at elit Vestibulum.&lt;/p&gt;\r\n&lt;/div&gt;\r\n'),
(7, 3, '', '', '');
"; 		

$query['pavblog'][] ="
INSERT INTO `".DB_PREFIX ."pavblog_category` (`category_id`, `image`, `parent_id`, `is_group`, `width`, `submenu_width`, `colum_width`, `submenu_colum_width`, `item`, `colums`, `type`, `is_content`, `show_title`, `meta_keyword`, `level_depth`, `published`, `store_id`, `position`, `show_sub`, `url`, `target`, `privacy`, `position_type`, `menu_class`, `description`, `meta_description`, `meta_title`, `level`, `left`, `right`, `keyword`) VALUES
(1, '', 0, 2, NULL, NULL, NULL, NULL, NULL, '1', '', 2, 1, '1', 0, 1, 0, 0, 0, NULL, NULL, 0, 'top', NULL, NULL, NULL, NULL, -5, 34, 47, ''),
(20, 'data/pavblog/img-blog.jpg', 22, 2, NULL, NULL, NULL, NULL, NULL, '1', '', 2, 1, '1', 0, 1, 0, 3, 0, NULL, NULL, 0, 'top', 'test test', NULL, '', '', 0, 0, 0, ''),
(21, 'data/pavblog/img-blog.jpg', 22, 2, NULL, NULL, NULL, NULL, NULL, '1', '', 2, 1, '1', 0, 1, 0, 1, 0, NULL, NULL, 0, 'top', '', NULL, '', '', 0, 0, 0, ''),
(22, 'data/pavblog/img-blog.jpg', 1, 2, NULL, NULL, NULL, NULL, NULL, '1', '', 2, 1, '1', 0, 1, 0, 1, 0, NULL, NULL, 0, 'top', '', NULL, '', '', 0, 0, 0, ''),
(23, 'data/pavblog/img-blog.jpg', 22, 2, NULL, NULL, NULL, NULL, NULL, '1', '', 2, 1, '1', 0, 1, 0, 2, 0, NULL, NULL, 0, 'top', '', NULL, '', '', 0, 0, 0, ''),
(24, 'data/pavblog/img-blog.jpg', 1, 2, NULL, NULL, NULL, NULL, NULL, '1', '', 2, 1, '1', 0, 1, 0, 2, 0, NULL, NULL, 0, 'top', '', NULL, '', '', 0, 0, 0, ''),
(25, '', 1, 2, NULL, NULL, NULL, NULL, NULL, '1', '', 2, 1, '', 0, 1, 0, 99, 0, NULL, NULL, 0, 'top', '', NULL, '', '', 0, 0, 0, ''),
(26, 'data/pavblog/img-blog.jpg', 1, 2, NULL, NULL, NULL, NULL, NULL, '1', '', 2, 1, '', 0, 1, 0, 99, 0, NULL, NULL, 0, 'top', '', NULL, '', '', 0, 0, 0, '');
"; 		

$query['pavblog'][] ="
INSERT INTO `".DB_PREFIX ."pavblog_category_description` (`category_id`, `language_id`, `title`, `description`) VALUES
(1, 1, 'ROOT', 'Menu Root'),
(21, 3, '', ''),
(20, 3, '', ''),
(23, 3, '', ''),
(24, 3, '', ''),
(25, 1, 'Curabitur varius', ''),
(25, 3, '', ''),
(26, 1, 'Nulla adipiscing', '&lt;p&gt;Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur magna. Euismod euismod Suspendisse tortor ante adipiscing risus Aenean Lorem vitae id. Odio ut pretium ligula quam Vestibulum consequat convallis fringilla Vestibulum nulla.&lt;/p&gt;\r\n'),
(22, 1, 'Tortor augue', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus dignissim aliquam. Vestibulum dapibus adipiscing magna, non ultrices felis tincidunt non. Vestibulum non sagittis odio. Nulla adipiscing massa magna, ac rhoncus mi volutpat in.&lt;/p&gt;\r\n'),
(21, 1, 'Lerisque convallis', '&lt;p&gt;Ac tincidunt Suspendisse malesuada velit in Nullam elit magnis netus Vestibulum. Praesent Nam adipiscing Aliquam elit accumsan wisi sit semper scelerisque convallis&lt;/p&gt;\r\n'),
(23, 1, 'Ac tincidunt', '&lt;p&gt;Ac tincidunt Suspendisse malesuada velit in Nullam elit magnis netus Vestibulum. Praesent Nam adipiscing Aliquam elit accumsan wisi sit semper scelerisque convallis&lt;/p&gt;\r\n'),
(20, 1, 'Magnis netus ', '&lt;p&gt;Ac tincidunt Suspendisse malesuada velit in Nullam elit magnis netus Vestibulum. Praesent Nam adipiscing Aliquam elit accumsan wisi sit semper scelerisque convallis&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n'),
(24, 1, 'Accumsan wisi', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus dignissim aliquam. Vestibulum dapibus adipiscing magna, non ultrices felis tincidunt non. Vestibulum non sagittis odio. Nulla adipiscing massa magna, ac rhoncus mi volutpat in.&lt;/p&gt;\r\n'),
(26, 3, '', ''),
(22, 3, '', '');
"; 	

$query['pavblog'][] ="
INSERT INTO `".DB_PREFIX ."pavblog_comment` (`comment_id`, `blog_id`, `comment`, `status`, `created`, `user`, `email`) VALUES
(6, 10, 'Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur mag Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur mag', 1, '2013-03-12 14:23:09', 'ha cong tien', 'hatuhn@gmail.com'),
(7, 10, 'Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur mag', 1, '2013-03-12 14:25:19', 'ha cong tien', 'hatuhn@gmail.com'),
(8, 10, 'Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur mag Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur mag', 1, '2013-03-12 14:30:17', 'Test Test ', 'ngoisao@aa.com');

"; 			
?>