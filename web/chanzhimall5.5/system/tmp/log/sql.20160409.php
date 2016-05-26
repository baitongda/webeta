<?php die();?> 
20160409 18:31:39: /install.php?m=install&f=step1

20160409 18:31:41: /install.php?m=install&f=step2

20160409 18:32:49: /install.php?m=install&f=step3

20160409 18:32:54: /install.php?m=install&f=step3

20160409 18:34:07: /install.php?m=install&f=step4

20160409 18:34:20: /install.php?m=install&f=step4
  INSERT INTO eps_user SET `account` = 'admin',`realname` = 'admin',`password` = '628b8c959da0b628400dd490436edaee',`admin` = 'super',`join` = '2016-04-09 18:34:20',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'global',`key` = 'version',`value` = '5.2',`lang` = 'all'

20160409 18:34:21: /install.php?m=install&f=step5
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'lang',`value` = 'zh-cn',`lang` = 'all'

20160409 18:34:30: /admin.php?m=user&f=login&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum','page') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE u.account  = 'admin'
  SELECT * FROM eps_user WHERE account  = 'admin'
  INSERT INTO eps_log SET `account` = 'admin',`date` = '2016-04-09 18:34:30',`ip` = '117.28.163.93',`location` = '中国 福建 厦门 ',`browser` = 'chrome 45',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 10.0) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/45.0.2454.93 Safari\\/537.36\"}'
  UPDATE eps_user SET `id` = '1',`account` = 'admin',`password` = '628b8c959da0b628400dd490436edaee',`realname` = 'admin',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '1',`ip` = '117.28.163.93',`last` = '2016-04-09 18:34:30',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2016-04-09 18:34:20',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`os` = '',`browser` = '',`lang` = 'zh-cn' WHERE account  = 'admin'
  UPDATE eps_user SET  `browser`  = 'chrome 45', `os` = 'Windows 10' WHERE id  = '1' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM eps_usergroup AS t1  LEFT JOIN eps_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin' AND  t1.lang in('zh-cn', 'all') 

20160409 18:34:59: /admin.php?m=tree&f=children&t=html&type=article&root=0
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum','page') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE parent  = '0' AND  type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `order`

20160409 18:35:18: /admin.php?m=ui&f=setTemplate&template=default&theme=clean&custom=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum','page') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'desktop',`value` = '{\"name\":\"default\",\"theme\":\"clean\"}',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'parser',`value` = 'default',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'customTheme',`value` = 'clean',`lang` = 'zh-cn'

20160409 18:35:33: /admin.php?m=ui&f=setTemplate&template=default&theme=tartan&custom=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum','page') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'desktop',`value` = '{\"name\":\"default\",\"theme\":\"tartan\"}',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'parser',`value` = 'default',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'customTheme',`value` = 'tartan',`lang` = 'zh-cn'

20160409 18:35:42: /admin.php?m=ui&f=setTemplate&template=default&theme=default&custom=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum','page') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'desktop',`value` = '{\"name\":\"default\",\"theme\":\"default\"}',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'parser',`value` = 'default',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'customTheme',`value` = 'default',`lang` = 'zh-cn'

20160409 18:52:31: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum','page') AND  eps_category.lang in('zh-cn', 'all') 

20160409 18:58:32: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum','page') AND  eps_category.lang in('zh-cn', 'all') 

20160409 19:04:32: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum','page') AND  eps_category.lang in('zh-cn', 'all') 

20160409 19:10:33: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum','page') AND  eps_category.lang in('zh-cn', 'all') 

20160409 19:13:46: /admin.php?m=ui&f=themestore&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum','page') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

