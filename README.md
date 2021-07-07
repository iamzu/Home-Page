[![Website](https://img.shields.io/website-up-down-green-red/http/i.dmego.cn.svg)](http://lsoex.com/)
[![License](https://img.shields.io/github/license/dmego/home.github.io.svg)](/LICENSE)

### 个人主页

>这是我的个人主页

>衍生自 [Vno](https://github.com/onevcat/vno-jekyll) Jekyll 主题

>页面部分加载效果借鉴于 [Mno](https://github.com/mcc108/mno) Ghost 主题

>借鉴了[北岛向南的小屋](https://javef.github.io/)的头像样式


### 开箱即用
>项目根目录下的`webConfig.js`文件中配置网站基本信息
```js
const Counter = {
    data() {
        return {
            //网站描述
            description: 'Lsoex Home',
            //网站关键词
            keywords: 'Lsoex,Homepage',
            //网站作者
            author: 'Lsoex',
            //网站标题
            title: 'Lsoex Home',
            //头像
            avatar: 'https://q2.qlogo.cn/headimg_dl?dst_uin=210849049&spec=100',
            //头像翻页文字
            infoBackH2: 'Fighting',
            infoBackP: '2021 · 自律',
            //名称
            name: 'lsoex',
            //副标题
            subTitle: 'Just Do It Later',
            //文字导航栏
            wordNavigation: [
                {label: '首页', href: '/', target: false},
            ],
            //图标导航栏
            iconNavigation: [
                {
                    label: 'github',
                    title: 'github',
                    href: 'https://github.com/lsoex',
                    icon: 'icon-github',
                    target: true
                },
                {
                    label: 'email',
                    title: 'email',
                    href: 'http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=HHVccG9zeWQyf3Nx',
                    icon: 'icon-email',
                    target: true
                },
            ],
            //年份
            year: (new Date()).getFullYear(),
            //备案号
            code: '苏ICP备17068687号',

        }
    }
}

```


### 注

- 访问地址：[个人主页](http://lsoex.com/)
- 原先 YQL 服务将被淘汰，现改用 [JsonBird](https://bird.ioliu.cn/)

