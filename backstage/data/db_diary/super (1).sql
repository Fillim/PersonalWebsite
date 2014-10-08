-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2010 年 08 月 23 日 17:17
-- 服务器版本: 5.0.89
-- PHP 版本: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `super`
--

-- --------------------------------------------------------

--
-- 表的结构 `diary`
--

CREATE TABLE IF NOT EXISTS `diary` (
  `ID` int(10) NOT NULL auto_increment,
  `username` varchar(10) NOT NULL,
  `content` text,
  `addtime` date NOT NULL,
  `gongkai` varchar(5) NOT NULL default '0',
  `xinqing` int(2) NOT NULL default '1',
  `tianqi` int(2) NOT NULL default '1',
  `title` text NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=145 ;

--
-- 转存表中的数据 `diary`
--

INSERT INTO `diary` (`ID`, `username`, `content`, `addtime`, `gongkai`, `xinqing`, `tianqi`, `title`) VALUES
(127, '123', '是的爱上打算大速度', '2010-08-06', '1', 7, 1, '啊是打算打算'),
(128, '123', '中文乱码很困扰我！。。。\r\n记录，需要用到txt来转utf-8\r\n<？ header("Content-Type: text/html; charset=utf-8") ？>\r\nmysql_query("SET NAMES ''utf8''");//SET NAMES这个啊，注意大写！！！\r\n<meta http-equiv="Content-Type" content="text/html; charset=utf-8">\r\n\r\n还有注意数据库的编码！！！！！！！！！', '2010-08-06', '1', 2, 2, '再次解决了中文！'),
(98, 'z', ' 啊是大三大四的！ ', '2010-07-31', '1', 0, 0, ''),
(99, 'z', '', '2010-07-31', '1', 0, 0, ''),
(101, 'z', '  中文啦！！！！\r\n  ', '2010-07-31', '1', 0, 0, ''),
(102, 'z', '解决中文问题！！！', '2010-07-31', '', 0, 0, ''),
(116, '123', 'asd', '2010-08-05', '0', 1, 1, 'asd'),
(117, '123', '\r\n[b]?????????[/b]\r\n[i]?????????[/i]\r\n[u]?????????[/u]', '2010-08-05', '1', 9, 4, '???????????'),
(105, 'z', '我的日记本，天气心情', '2010-07-31', '1', 1, 1, '私有'),
(107, 'z', '<INPUT type="radio" name="is_open" value="0">', '2010-07-31', '1', 1, 1, '测试html'),
(126, '123', ' 阿萨德爱上阿萨德爱上', '2010-08-06', '1', 12, 1, '阿萨德爱上打算'),
(122, '123', ' 打算打算打算的阿萨德萨 ', '2010-08-06', '1', 1, 1, '阿萨德阿萨德 ！！~213'),
(110, 'z', '  [b]asd[/b][b]asd[/b]\r\n  ', '2010-07-31', '1', 1, 1, '测试拉'),
(111, 'z', '  测试完全\r\n\r\n回车  空格     几个\r\n\r\nubb\r\n\r\n[b]asd[/b][i]阿萨德[/i][u]阿萨德[/u][align=center]阿萨德[/align][url][uaddr]http://www.ttphp.com[/uaddr]阿萨德[/url]\r\n[img]http://127.0.0.1/job/htdocs/job/3/add_files/diary_feel12.gif[/img]\r\n  ', '2010-07-31', '1', 1, 1, '测试ubb'),
(112, 'z', '[url=http://www.ttphp.com]go[/url]', '2010-07-31', '1', 1, 1, '测试啦！'),
(113, 'z', '  \r\n  [center]阿萨德[/center]啊是打算大是阿萨德阿萨德爱上打算大', '2010-07-31', '1', 7, 2, '测试啊阿萨德阿萨德爱上的'),
(132, 'iii', '不公开！！！！！！！！！！！！！', '2010-08-06', '0', 1, 1, '我测试！！！'),
(131, '123', '很多问题需要改进的。！', '2010-08-06', '1', 3, 2, '测试中文！'),
(133, 'iii', '看看新的公开！！~~', '2010-08-06', '1', 1, 1, '公开的！'),
(138, '123', '增加朋友圈功能！', '2010-08-07', '1', 1, 1, '写日记！'),
(139, '123', '测试日记啦！公开篇~', '2010-08-09', '1', 10, 2, '测试日记啦~'),
(141, '123', '！！！！！！！！！！！我是不公开的啦~~~~~~~~~~~~', '2010-08-09', '1', 10, 1, '测试不公开！！'),
(142, 'lizhaowen', '测试吧！测试修改不公开了！！！！！！！！！！！！！！！', '2010-08-09', '0', 1, 1, '我还没有日记啊！'),
(143, 'lizhaowen', '???д??????', '2010-08-09', '1', 1, 1, '???д??????'),
(144, 'lizhaowen', '无法写日记了！', '2010-08-09', '1', 1, 1, '无法写日记了！');

-- --------------------------------------------------------

--
-- 表的结构 `friend`
--

CREATE TABLE IF NOT EXISTS `friend` (
  `uid` int(11) NOT NULL auto_increment,
  `username` varchar(100) character set gbk NOT NULL,
  `friend` varchar(100) character set gbk NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- 转存表中的数据 `friend`
--

INSERT INTO `friend` (`uid`, `username`, `friend`) VALUES
(1, 'z', '123'),
(36, '123', 'qq'),
(29, '123', 'jwenlee'),
(35, '123', 'asd'),
(24, '123', 'zxc'),
(47, '123', 'lizhaowen'),
(46, '123', 'z'),
(44, 'lizhaowen', '123'),
(45, 'lizhaowen', 'z'),
(48, 'lizhaowen', '1');

-- --------------------------------------------------------

--
-- 表的结构 `msglist`
--

CREATE TABLE IF NOT EXISTS `msglist` (
  `uid` int(11) NOT NULL auto_increment,
  `username` varchar(256) character set gbk default NULL,
  `content` varchar(256) character set gbk default NULL,
  `yourfriend` varchar(256) character set gbk default NULL,
  `title` varchar(256) character set gbk default NULL,
  `senttime` date default NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=124 ;

--
-- 转存表中的数据 `msglist`
--

INSERT INTO `msglist` (`uid`, `username`, `content`, `yourfriend`, `title`, `senttime`) VALUES
(1, 'z', '中文测试！', '123', NULL, NULL),
(14, '123', '!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!', 'lizhaowen', '测试!!!!!!!!!!!', '2010-08-08'),
(7, '123', 'qwe', 'z', 'qwe', '2010-08-08'),
(6, '123', '测试中文测试中文测试中文', 'z', '测试中文', '2010-08-08'),
(13, '123', '靠！测试！', 'z', '靠！测试', '2010-08-08'),
(9, '123', '测试验证码！', 'z', '测试验证码！', '2010-08-08'),
(12, 'lizhaowen', '????????????????LIZHAOWEN', '123', '????????????????LIZHAOWEN', '2010-08-08'),
(15, '123', 'sdasda', 'lizhaowen', 'adasda', '2010-08-08'),
(16, 'lizhaowen', '~????????????????????????????', '123', '???????????????', '2010-08-08'),
(17, 'lizhaowen', '啊时间快到拉岁的卡拉斯觉得卡拉是', '123', '测试！！四大皆空连锁店', '2010-08-08'),
(123, 'jwenlee123', '中文测试！', '123', '中文测试！', '2010-08-20');

-- --------------------------------------------------------

--
-- 表的结构 `music`
--

CREATE TABLE IF NOT EXISTS `music` (
  `uid` int(5) NOT NULL auto_increment,
  `username` varchar(256) character set gbk NOT NULL,
  `mname` varchar(256) character set gbk NOT NULL,
  `murl` varchar(256) NOT NULL,
  `mren` varchar(256) character set gbk NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `music`
--

INSERT INTO `music` (`uid`, `username`, `mname`, `murl`, `mren`) VALUES
(1, '123', '1111', 'http://audio8.top100.cn/201008191325/299628A801525998DDA9F3BA7927A6F5/streaming2/Special_329208/M0329208004.mp3', '1111');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL auto_increment,
  `mid` varchar(5) character set gbk NOT NULL default '1',
  `username` varchar(64) character set gbk NOT NULL,
  `password` varchar(64) character set gbk NOT NULL,
  `email` varchar(256) NOT NULL,
  `wenti` varchar(256) NOT NULL,
  `daan` varchar(256) NOT NULL,
  `face` varchar(256) NOT NULL,
  `qq` varchar(12) NOT NULL,
  `lasttime` date NOT NULL,
  `star` varchar(256) character set gbk NOT NULL,
  `sex` varchar(256) character set gbk NOT NULL default '1',
  `kai` varchar(256) character set gbk NOT NULL default '0',
  `bground` varchar(256) NOT NULL default '1.gif',
  `guajian` varchar(256) NOT NULL default '01.gif',
  `jiashao` varchar(256) character set gbk NOT NULL,
  `gg` varchar(256) character set gbk default '你还没有设置你的公告噢!',
  `nichen` varchar(256) character set gbk default NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=128 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `mid`, `username`, `password`, `email`, `wenti`, `daan`, `face`, `qq`, `lasttime`, `star`, `sex`, `kai`, `bground`, `guajian`, `jiashao`, `gg`, `nichen`) VALUES
(2, '1', 'admin', '3acbf97c2600cd10c21e8f5c098e905d', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '你还没有设置你的公告噢!', NULL),
(21, '1', 'jwenlee', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '你还没有设置你的公告噢!', NULL),
(23, '1', 'a', 'fc85e38a19812ec2978cd820da0c08e2', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '你还没有设置你的公告噢!', NULL),
(24, '1', 's', 'dde8397475bc3b3ece3376e52bc84952', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '你还没有设置你的公告噢!', NULL),
(25, '2', 'd', 'f369461d374dacd4379798d987f44a72', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '你还没有设置你的公告噢!', NULL),
(26, '1', 'q', '321e0b1ce28db868b99c38a7f9f0d63a', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '你还没有设置你的公告噢!', NULL),
(53, '1', 'l', '015df07c66552b693c25d52a6d3279d0', 'l', 'l', 'l', '10,', 'l', '0000-00-00', '', '', '', '', '', '', '你还没有设置你的公告噢!', NULL),
(54, '1', 'asd', '755f85c2723bb39381c7379a604160d8', 'asd', 'asd', 'asd', '1', 'asd', '0000-00-00', '', '', '', '', '', '', '你还没有设置你的公告噢!', NULL),
(59, '1', 'z', '755f85c2723bb39381c7379a604160d8', 'z', 'z', 'z', '2', 'z', '0000-00-00', '', '', '', '', '', '', '你还没有设置你的公告噢!', NULL),
(60, '1', 'a', 'fc85e38a19812ec2978cd820da0c08e2', 'a', 'a', 'a', '1', 'a', '0000-00-00', '', '', '', '', '', '', '你还没有设置你的公告噢!', NULL),
(61, '1', 'o', '383bbdbf96949d669803e9002202bc9b', 'o', 'o', 'o', '1', 'o', '0000-00-00', '', '', '', '', '', '', '你还没有设置你的公告噢!', NULL),
(72, '1', 'zxc', 'bb4c883466e4b675673c48a5986ca4e3', 'zxc', 'zxc', 'zxc', '1', '123', '0000-00-00', '', '', '', '', '', '', '你还没有设置你的公告噢!', NULL),
(73, '1', 'qq', '321e0b1ce28db868b99c38a7f9f0d63a', 'qwe', 'q', 'qwe', '1', '123', '0000-00-00', '', '', '', '', '', '', '你还没有设置你的公告噢!', NULL),
(74, '1', 'asd', '7232fd7918ed110ccf00556cb4d4e5bc', '', '', '', '1', '', '0000-00-00', '', '', '', '', '', '', '你还没有设置你的公告噢!', NULL),
(75, '1', '1', '67740c476a13be1cedb20a592612cb5d', '1', '1', '1', '1', '1', '0000-00-00', '', '', '', '', '', '', '你还没有设置你的公告噢!', NULL),
(76, '1', '1234', '1c2977f1330e3f5d4ab81821a1c512a9', '123', '123', '123', '1', '123', '0000-00-00', '', '', '', '', '', '', '你还没有设置你的公告噢!', NULL),
(77, '1', '000', '1c2977f1330e3f5d4ab81821a1c512a9', '123', '123', '123', '1', '1234', '0000-00-00', '', '', '', '', '', '', '你还没有设置你的公告噢!', NULL),
(78, '1', '123', '755f85c2723bb39381c7379a604160d8', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '你还没有设置你的公告噢!', NULL),
(79, '1', 'bbb', '740c99224c957398987609770bbe44a8', 'b@b.com', 'b', 'b', '1', '1234', '0000-00-00', '', '', '', '', '', '', '你还没有设置你的公告噢!', NULL),
(85, '1', 'lizhaowen', 'e036612af1d31bda9c7166595d620fb8', '999@999.com', '999', '999', '1', '123456', '0000-00-00', '', '', '', '', '', '', '你还没有设置你的公告噢!', NULL),
(90, '', 'qqq', '1c2977f1330e3f5d4ab81821a1c512a9', '123@123.com', '123', '123', '1', '123', '2010-08-14', '', '', '', '', '', '', '你还没有设置你的公告噢!', NULL),
(1, '1', '1', '32', '412', '45', '64', '546457', '7457', '2010-08-17', '23', '1', '0', '1.gif', '1.gif', '52', '你还没有设置你的公告噢!', '5'),
(123, '1', '4', '5', '6', '7', '8', '9', '0', '2010-08-24', '0', '1', '0', '1.gif', '1.gif', '9', '你还没有设置你的公告噢!', '8'),
(124, '1', '4', '5', '6', '7', '8', '9', '0', '2010-08-24', '0', '1', '0', '1.gif', '1.gif', '9', '你还没有设置你的公告噢!', '8'),
(125, '1', '4', '5', '6', '7', '8', '9', '0', '2010-08-24', '0', '1', '0', '1.gif', '1.gif', '9', '你还没有设置你的公告噢!', '8'),
(126, '1', '4', '5', '6', '7', '8', '9', '0', '2010-08-24', '0', '1', '0', '1.gif', '1.gif', '9', '你还没有设置你的公告噢!', '8'),
(127, '1', 'jwenlee123', '755f85c2723bb39381c7379a604160d8', '123456', '123456中文', '123456中文', '1.gif', '123456', '2010-08-14', '不知道', '0', '0', '07.gif', '01.gif', '你还没有设置你的介绍噢!', '你还没有设置你的公告噢!', 'Sx.自由。.');
