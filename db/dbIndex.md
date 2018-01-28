# FINDER系统数据字典

---

[TOC]

---

|日期|时间|修改内容|修改人|
|:----:|:---:|:--|:-----:|
|2018-01-01|19:30|文档模板|Ricky|

## 系统主要功能


## 数据表及字段描述


### finder_user 用户基础信息表
|字段|类型|长度|是否为空|说明|备注|
|:-:|:-:|:-:|:-:|:--:|:-:|
|user_id|int|11|no|主键、自增|用户id|
|user_name|varchar|100|yes|用户昵称|用户昵称|
|user_token|varchar|255|yes|用户token 唯一验证信息|无 defautl null |
|password|char|32|yes|无|用户密码|
|realname|varchar|50|no|无|用户真实姓名|
|email|varchar|100|no|无|用户邮箱|
|phone|varchar|100|no|defautl null|用户手机号|
|header_url|varchar|1000|no|无|用户头像地址|
|company_info|varchar|255|no|无|公司信息|
|position|varchar|255|no|无|职位|
|introduce|varchar|1000|no|无|简介|
|blog_address|varchar|255|no|无|博客地址|
|create_time|int|11|no|无|用户注册 创建时间|
|register_ip|varchar|100|no|无|用户注册ip 地址|
|login_ip|varchar|100|no|无|用户登陆ip|
|login_time|int|11|no|无|用户 登录时间|
|update_time|int|11|no|无|修改时间|
|is_del|tinyint|4|yes|是否已删除 0:未删除，1：已删除,默认:0|无|


###	finder_user_auths 用户授权信息表
|字段|类型|长度|是否为空|说明|备注|
|:-:|:-:|:-:|:-:|:--:|:-:|
|id|int|11|no|主键、自增|认证id 自增|
|user_id|int|20|no|用户id|无|
|uid|varchar|255|no|第三方用户id||
|identity_type|varchar|255|yes|登录类型 登录类型（手机号 邮箱 用户名）或第三方应用名称（微信 微博等）|无|
|identifier|varchar|255|yes|标识（手机号 邮箱 用户名或第三方应用的唯一标识）|无|
|access_token|varchar|255|yes|用户token 第三方token|无|
|access_expire|int|11|yes|用户访问 token 有效期时间|无|

###	finder_article 文章表
|字段|类型|长度|是否为空|说明|备注|
|:-:|:-:|:-:|:-:|:--:|:-:|
|id|int|11|no|主键、自增|认证id 自增|
|category_id|int|11|no|文章分类标签id|无|
|user_id|int|11|no|用户id|无|
|name|varchar|100|yes|作者昵称|无|
|title|varchar|100|yes|文章标题|无|
|desc|text|无|yes|文章描述|无|
|create_time|int|11|yes|创建时间|无|
|update_time|int|11|yes|修改时间|无|
|is_del|tinyint|4|yes|是否已删除 0:未删除，1：已删除,默认:0|无|


###	finder_follow_user 关注的作者列表
|字段|类型|长度|是否为空|说明|备注|
|:-:|:-:|:-:|:-:|:--:|:-:|
|id|int|11|no|主键、自增|关注id|
|user_id|int|11|no|用户id|无|
|create_time|int|11|yes|关注时间|无|
|update_time|int|11|yes|修改时间|无|
|is_del|tinyint|4|yes|是否删除|DEFAULT '0' COMMENT '0:未删除，1：已删除,default:0'|

###	finder_fans_user 粉丝（被关注）列表
|字段|类型|长度|是否为空|说明|备注|
|:-:|:-:|:-:|:-:|:--:|:-:|
|id|int|11|no|主键、自增|关注id|
|user_id|int|11|no|粉丝的用户id|无|
|create_time|int|11|yes|关注时间|无|
|update_time|int|11|yes|修改时间|无|
|is_del|tinyint|4|yes|是否删除|DEFAULT '0' COMMENT '0:未删除，1：已删除,default:0'|

###	finder_like_artical 喜欢的文章表
|字段|类型|长度|是否为空|说明|备注|
|:-:|:-:|:-:|:-:|:--:|:-:|
|id|int|11|no|主键、自增|id|
|artical_id|int|11|yes|文章id|DEFAULT NULL|
|user_id|int|11|no|粉丝的用户id|无|
|create_time|int|11|yes|喜欢时间|无|
|update_time|int|11|yes|更新时间|无|
|is_del|tinyint|4|yes|是否删除|DEFAULT '0' COMMENT '0:未删除，1：已删除,default:0'|

###	finder_collection_artical 收藏的文章列表
|字段|类型|长度|是否为空|说明|备注|
|:-:|:-:|:-:|:-:|:--:|:-:|
|id|int|11|no|主键、自增|收藏id|
|artical_id|int|11|yes|文章id|DEFAULT NULL|
|user_id|int|11|no|收藏的用户id|无|
|create_time|int|11|yes|收藏时间|无|
|update_time|int|11|yes|修改时间|无|
|is_del|tinyint|4|yes|是否删除|DEFAULT '0' COMMENT '0:未删除，1：已删除,default:0'|

###	finder_history_artical 用户的文章浏览记录
|字段|类型|长度|是否为空|说明|备注|
|:-:|:-:|:-:|:-:|:--:|:-:|
|id|int|11|no|主键、自增|浏览历史id|
|artical_id|int|11|yes|文章id|DEFAULT NULL|
|user_id|int|11|yes|用户id|无|
|create_time|int|11|yes|浏览时间|无|
|update_time|int|11|yes|修改时间|无|
|is_del|tinyint|4|yes|是否删除|DEFAULT '0' COMMENT '0:未删除，1：已删除,default:0'|
