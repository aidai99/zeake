/*
    * HOST是主持人项目。数据格式：每一项只有四个属性，多了一定会出错
    * 由于专题页面没有主持人，所以默认设置为null，请不要修改
    * 
    * RELATED是相关文章。数据格式：每一项只有三个属性，多了一定会出错
    * var RELATED = {
    *   0: {
    *     src: '文章图片链接',
    *     href: '文章链接',
    *     title: '文章标题'
    *   },
    *   1: {..}
    * }
    * 
    * CONTENT主要区域的显示内容。
    * 专题内容格式统一，只有三个属性。而且只有一张图片
    * var CONTENT = {
    *     time: '发布时间',
    *     content: '文字说明',
    *     href: '文章链接',
    *     img: {
    *         0: '图片链接'    
    *     }   
    * }
    * 
    * 只需修改格式中的中文内容即可
    * 
    * 由于数据格式为JavaScript对象，所以在每一项内容之后都需要加入英文逗号（,）进行分隔，不然会对着电脑哭出来的。
    * 最后一项内容后不要加入逗号（这是由于这个语言的设计缺陷，不服去砍了Brendan Eich。
    * 冒号（:）后面所有的内容（除了single之后的）都是JavaScript字符串，可以使用单引号（''）或者双引号（""）包围起来。
    * 注意所有使用的标点符号都是英文标点，否则会对着电脑哭出来的。
    */
var HOST = null
var RELATED = {}
var CONTENT = {}