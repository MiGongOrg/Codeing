<?php get_header(); 
/**
 * Template Name:pageCode
 *
 * @package Migong.org
 * @subpackage Ming
 * @since coding 1.0
 */
?>
<div class="row">
  <?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
  <?php else : ?>
  <div class="col-xs-12 preview">
    没有找到你想要的页面！
  </div>
  <?php endif; ?>
  <div class="col-xs-12 description">
    <div class="col-xs-12 listOne">
      <div class="col-sm-4">
        <ul class="list-unstyled">
          <li class="">HTML5 Canvas Element</li>
          <li><span>Html5 canvas element</span>
            <pre lang="html" line="1">&lt;canvas id="myCanvas" width="500" height="300"&gt;&lt;/canvas&gt;</pre></li>
          <li><span>Canvas 错误提示</span>
<pre lang="html" line="1">
&lt;canvas id="myCanvas" width="500" height="300"&gt;
    您的浏览器不支持 Canvas!
&lt;/canvas&gt;
</pre>
           </li>
           <li><span>2D 环境</span>
               <pre lang="javascript" line="1">var context = canvas.getContext('2d');</pre>
           </li>
           <li><span>Webgl 环境 (3D)</span>
               <pre lang="javascript" line="1">var context = canvas.getContext('webgl');</pre>
           </li>
        </ul>
        <ul class="list-unstyled">
          <li class="">Paths 路径</li>
          <li><span>开始路径</span>
            <pre lang="javascript" line="1">context.beginPath();</pre>
          </li>
          <li><span>Line 直线</span>
            <pre lang="javascript" line="1">context.lineTo(x, y);</pre>
          </li>
          <li><span>Arc 圆/弧</span>
            <pre lang="javascript" line="1">context.arc(x, y, radius, startAngle, endAngle, counterClockwise);</pre>
          </li>
          <li><span>二次曲线</span>
            <pre lang="javascript" line="1">context.quadraticCurveTo(cx, cy, x, y);</pre>
          </li>
          <li><span>三次曲线</span>
            <pre lang="javascript" line="1">context.bezierCurveTo(cx1, cy1, cx2, cy2, x, y);</pre>
          </li>
          <li><span>结束路径</span>
            <pre lang="javascript" line="1">context.closePath();</pre>
          </li>
        </ul>
        <ul class="list-unstyled">
          <li class="">形状</li>
          <li><span>绘制矩形</span>
            <pre lang="javascript" line="1">
context.rect(x, y, width, height);
context.fill();
context.stroke();</pre>
          </li>
          <li><span>填充矩形</span>
            <pre lang="javascript" line="1">context.fillRect(x, y, width, height);</pre>
          </li>
          <li><span>绘制矩形</span>
            <pre lang="javascript" line="1">context.strokeRect(x, y, width, height);</pre>
          </li>
          <li><span>绘制圆</span>
            <pre lang="javascript" line="1">
context.arc(x, y, radius, 0, Math.PI * 2);
context.fill();
context.stroke();</pre>
          </li>
        </ul>
        <ul class="list-unstyled">
          <li class="">Text 文本</li>
          <li><span>Fill Text 填充文本</span>
            <pre lang="javascript" line="1">
context.font = '40px Arial';
context.fillStyle = 'red';
context.fillText('Hello World!', x, y);</pre>
          </li>
          <li><span>Stroke Text 比划文本</span>
            <pre lang="javascript" line="1">
context.font = '40pt Arial';
context.strokeStyle = 'red';
context.strokeText('Hello World!', x, y);</pre>
          </li>
          <li><span>Bold Text 粗体文本</span>
            <pre lang="javascript" line="1">context.font = 'bold 40px Arial';</pre>
          </li>
          <li><span>Italic Text 斜体文本</span>
            <pre lang="javascript" line="1">context.font = 'italic 40px Arial';</pre>
          </li>
          <li><span>Text Align 文本对齐</span>
            <pre lang="javascript" line="1">context.textAlign = 'start|end|left|center|right';</pre>
          </li>
          <li><span>Text Baseline 文本基线</span>
            <pre lang="javascript" line="1">context.textBaseline = 'top|hanging|middle|alphabetic|ideographic|bottom';</pre>
          </li>
          <li><span>获取文本宽度</span>
            <pre lang="javascript" line="1">var width = context.measureText('Hello world').width;</pre>
          </li>
        </ul>
      </div>
      <div class="col-sm-4">
        <ul class="list-unstyled">
          <li class="">Style 样式</li>
          <li><span>Fill 填充</span>
            <pre lang="javascript" line="1">
context.fillStyle = 'red';
context.fill();</pre>
          </li>
          <li><span>Stroke</span>
              <pre lang="javascript" line="1">
context.strokeStyle = 'red';
context.stroke();</pre>
          </li>
          <li><span>线性渐变</span>
            <pre lang="javascript" line="1">
var grd = context.createLinearGradient(x1, y1, x2, y2);
grd.addColorStop(0, 'red');   
grd.addColorStop(1, 'blue');
context.fillStyle = grd;
context.fill();</pre>
          </li>
          <li><span>放射渐变</span>
            <pre lang="javascript" line="1">
var grd = context.createRadialGradient(x1, y1, radius1, x2, y2, radius2);
grd.addColorStop(0, 'red');
grd.addColorStop(1, 'blue');
context.fillStyle = grd;
context.fill();</pre>
          </li>
          <li><span>Line Join</span>
            <pre lang="javascript" line="1">context.lineJoin = 'miter|round|bevel';</pre>
          </li>
          <li><span>Line Cap 线帽</span>
            <pre lang="javascript" line="1">context.lineCap = 'butt|round|square';</pre>
          </li>
          <li><span>Showdow 阴影</span>
            <pre lang="javascript" line="1">
context.shadowColor = 'black';
context.shadowBlur = 20;
context.shadowOffsetX = 10;
context.shadowOffsetY = 10;</pre>
          </li>
          <li><span>Alpha (Opacity) 透明度</span>
            <pre lang="javascript" line="1">context.globalAlpha = 0.5; // 0 到 1</pre>
          </li>
        </ul>
        <ul class="list-unstyled">
          <li class="">Color 颜色</li>
          <li><span>String 字符串</span>
            <pre lang="javascript" line="1">context.fillStyle = 'red';</pre>
          </li>
          <li><span>Hex 十六进制（完整）</span>
            <pre lang="javascript" line="1">context.fillStyle = '#ff0000';</pre>
          </li>
          <li><span>Hex 十六进制（简写）</span>
            <pre lang="javascript" line="1">context.fillStyle = '#f00';</pre>
          </li>
          <li><span>RGB</span>
            <pre lang="javascript" line="1">context.fillStyle = 'rgb(255,0,0)';</pre>
          </li>
          <li><span>RGBA</span>
            <pre lang="javascript" line="1">context.fillStyle = 'rgba(255,0,0,1)';</pre>
          </li>
        </ul>
        <ul class="list-unstyled">
          <li class="">Transforms</li>
          <li><span>Translate</span>
            <pre lang="javascript" line="1">context.translate(x, y);</pre>
          </li>
          <li><span>Scale</span>
            <pre lang="javascript" line="1">context.scale(x, y);</pre>
          </li>
          <li><span>Rotate</span>
            <pre lang="javascript" line="1">context.rotate(radians);</pre>
          </li>
          <li><span>水平翻转</span>
            <pre lang="javascript" line="1">context.scale(-1, 1);</pre>
          </li>
          <li><span>垂直翻转</span>
            <pre lang="javascript" line="1">context.scale(1, -1);</pre>
          </li>
          <li><span>自定义 Transforms</span>
            <pre lang="javascript" line="1">context.transform(a, b, c, d ,e, f);</pre>
          </li>
        </ul>
        <ul class="list-unstyled">
          <li class="">剪切操作</li>
          <li><span>剪切</span>
            <pre lang="javascript" line="1">context.clip();</pre>
          </li>
        </ul>
      </div>
      <div class="col-sm-4">
        <ul class="list-unstyled">
          <li class="">Images 图像</li>
          <li><span>绘制图像默认大小</span>
            <pre lang="javascript" line="1">
var imageObj = new Image();
imageObj.onload = function() {
context.drawImage(imageObj, x, y);
};
imageObj.src = 'images/image.jpg';</pre>
          </li>
          <li><span>绘制图像并设置大小</span>
            <pre lang="javascript" line="1">
var imageObj = new Image();
imageObj.onload = function() {
context.drawImage(imageObj, x, y, width, height);
};
imageObj.src = 'images/image.jpg';</pre>
          </li>
          <li><span>剪切图像</span>
            <pre lang="javascript" line="1">
var imageObj = new Image();
imageObj.onload = function() {
context.drawImage(imageObj, sx, sy, sw, sh, dx, dy, dw, dh);
};
imageObj.src = 'images/image.jpg';</pre>
          </li>
        </ul>
        <ul class="list-unstyled">
          <li class="">Images Data 图像数据</li>
          <li><span>获取图像数据</span>
            <pre lang="javascript" line="1">
var imageData = context.getImageData(x, y, width, height);
var data = imageData.data;</pre>
          </li>
          <li><span>遍历图像像素</span>
            <pre lang="javascript" line="1">
var imageData = context.getImageData(x, y, width, height);
var data = imageData.data;
var len = data.length;
var i, red, green, blue, alpha;

for(i = 0; i < len; i += 4) {
red = data[i];
green = data[i + 1];
blue = data[i + 2];
alpha = data[i + 3];
}</pre>
          </li>
          <li><span>遍历图像像素坐标</span>
            <pre lang="javascript" line="1">
var imageData = context.getImageData(x, y, width, height);
var data = imageData.data;
var x, y, red, green, blue, alpha;

for(y = 0; y < imageHeight; y++) {
for(x = 0; x < imageWidth; x++) {
red = data[((imageWidth * y) + x) * 4];
green = data[((imageWidth * y) + x) * 4 + 1];
blue = data[((imageWidth * y) + x) * 4 + 2];
alpha = data[((imageWidth * y) + x) * 4 + 3];
}
}</pre>
          </li>
          <li><span>设置图像数据</span>
            <pre lang="javascript" line="1">context.putImageData(imageData, x, y);</pre>
          </li>
        </ul>
        <ul class="list-unstyled">
          <li class="">Image Data URL 图像数据 URL</li>
          <li><span>获取他图像数据 URL</span>
            <pre lang="javascript" line="1">var dataURL = canvas.toDataURL();</pre>
          </li>
          <li><span>将图像数据 URL 绘制在 Canvas 上</span>
            <pre lang="javascript" line="1">
var imageObj = new Image();
imageObj.onload = function() {
context.drawImage(imageObj, 0, 0);
};

imageObj.src = dataURL;</pre>
          </li>
        </ul>
        <ul class="list-unstyled">
          <li class="">保存/还原当前环境</li>
          <li><span>保存</span>
            <pre lang="javascript" line="1">context.save();</pre>
          </li>
          <li><span>还原</span>
            <pre lang="javascript" line="1">context.restore();</pre>
          </li>
        </ul>
        <ul class="list-unstyled">
          <li class="">绘图符合操作</li>
          <li><span>合成操作</span>
            <pre lang="javascript" line="1">context.globalCompositeOperation = 'source-atop|source-in|source-out|source-over|destination-atop|destination-in|destination-out|destination-over|lighter|xor|copy';</pre>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<footer>
  <blockquote>
    <p>学习 Canvas 从注释开始，在这里你可以：阅读、修改、创作！</p>
    <footer>示例代码来源于网络！</footer>
  </blockquote>
<?php get_footer(); ?>