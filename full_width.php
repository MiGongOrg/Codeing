<?php get_header(); 
/**
 * Template Name:Canvas Page
 *
 * @package Migong.org
 * @subpackage Ming
 * @since coding 1.0
 */
?>
<div class="row">
  <?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
  <div class="col-xs-12 preview">
    <div class="previewLeft">
      <iframe id="preview" scrolling="no" frameborder="0" height="100%" width="100%"></iframe>
    </div>
    <div class="previewRight">
      <textarea id="code">
<?php
    $code = get_post_meta($post->ID, 'code', true);
    echo $code;
?></textarea>
    </div>
    <span class="fullScreen" data-toggle="tooltip" data-placement="bottom" title="全屏"><i></i></span>
  </div>
  <?php else : ?>
  <div class="col-xs-12 preview">
    没有找到你想要的页面！
  </div>
  <?php endif; ?>
  <div class="col-xs-12 description">
    <div class="col-xs-12 listOne">
      <div class="col-sm-2">
        <ul class="list-unstyled">
          <li class="">Lines</li>
          <li data-toggle="modal" data-target=".textDescription">Line
            <div style="display:none">
              <h2>Line 线条/直线 <small><code>beginPath()</code> <code>moveTo()</code> <code>lineTo()</code> <code>stroke()</code></small></h2>
              <div class="descriptionContent">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>方法 / 属性</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>beginPath()</code></td>
                      <td>起始一条路径，或重置当前路径</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><code>moveTo()</code></td>
                      <td>把路径移动到画布中的指定点，不创建直线</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><code>lineTo()</code></td>
                      <td>添加一个新点，然后在画布中创建从该点到最后指定点的直线</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td><code>stroke()</code></td>
                      <td>在画布上绘制文本（无填充）</td>
                    </tr>
                  </tbody>
                </table>
                <h3>使用说明：</h3>
                <p>在 HTML5 Canvas 上绘制线条/直线，我们需要用到 <code>beginPath()</code> <code>moveTo()</code> <code>lineTo()</code> <code>stroke()</code> 方法。首先使用 <code>beginPath()</code> 方法来声明，起始一条路径。接下来使用 <code>moveTo()</code> 把路径移动到画布中的指定点，然后使用 <code>lineTo()</code> 方法来添加一个新点，然后在画布中创建从该点到最后指定点的直线，最后使用 <code>stroke()</code> 来实现绘制效果，默认颜色是黑色。</p>
              </div>
            </div>
          </li>
          <li data-toggle="modal" data-target=".textDescription">Line Width
            <div style="display:none">
              <h2>Line Width 线条/直线宽度 <small><code>lineWidth</code></small></h2>
              <div class="descriptionContent">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>方法 / 属性</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>lineWidth</code></td>
                      <td>设置或返回当前的线条/直线宽度</td>
                    </tr>
                  </tbody>
                </table>
                <h3>使用说明：</h3>
                <p>使用 <code>lineWidth</code> 来定义 HTML5 Canvas 线条/直线宽度，注：<code>lineWidth</code> 必须定义在 <code>stroke()</code> 之前。</p>
                <h3>JavaScript 语法：</h3>
                <pre>context.lineWidth = number;</pre>
              </div>
            </div>
          </li>
          <li data-toggle="modal" data-target=".textDescription">Line Color
            <div style="display:none">
              <h2>Line Color 线条/直线颜色 <small><code>strokeStyle</code></small></h2>
              <div class="descriptionContent">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>方法 / 属性</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>strokeStyle</code></td>
                      <td>设置或返回用于笔触的颜色、渐变或模式</td>
                    </tr>
                  </tbody>
                </table>
                <h3>使用说明：</h3>
                <p>在 HTML5 Canvas 绘制线条/直线颜色时使用 <code>strokeStyle</code> 可设置的颜色值有：字符串（red, green, blue 等），十六进制（#FFF000, #CCC 等）或 rgb / rgba / hsl / hsla 等。</p>
                <h3>JavaScript 语法：</h3>
                <pre>context.strokeStyle = color|gradient|pattern;</pre>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>参数：值</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>color</code></td>
                      <td>指示绘图填充色的 CSS 颜色值。默认值是 #000000 （黑色）。</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><code>gradient</code></td>
                      <td>用于填充绘图的渐变对象（线性或放射性）。</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><code>pattern</code></td>
                      <td>用于创建 pattern 笔触的 pattern 对象。</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
          <li data-toggle="modal" data-target=".textDescription">Line Cap
            <div style="display:none">
              <h2>Line Cap 线条/直线线帽 <small><code>lineCap</code></small></h2>
              <div class="descriptionContent">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>方法 / 属性</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>lineCap</code></td>
                      <td>设置或返回线条结束端点的线帽样式</td>
                    </tr>
                  </tbody>
                </table>
                <h3>使用说明：</h3>
                <p>绘制一个 HTML5 Canvas 线条/直线线帽样式可使用 <code>lineCap</code> 可设置的值有三种风格。注：<code>lineCap</code> 必须定义在 <code>stroke()</code> 之前。</p>
                <h3>JavaScript 语法：</h3>
                <pre>context.lineCap = "butt|round|square";</pre>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>属性：值</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>butt</code></td>
                      <td>默认，向线条的每个末端添加平直的边缘。</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><code>round</code></td>
                      <td>向线条的每个末端添加圆形线帽。</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><code>square</code></td>
                      <td>向线条的每个末端添加正方形线帽。</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-sm-2">
        <ul class="list-unstyled">
          <li class="">Curves</li>
          <li data-toggle="modal" data-target=".textDescription">Quadratic Curve
            <div style="display:none">
              <h2>Quadratic Curve 二次贝塞尔曲线 <small><code>quadraticCurveTo()</code></small></h2>
              <div class="descriptionContent">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>方法 / 属性</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>quadraticCurveTo()</code></td>
                      <td>创建二次贝塞尔曲线</td>
                    </tr>
                  </tbody>
                </table>
                <h3>使用说明：</h3>
                <p>使用 <code>quadraticCurveTo()</code> 方法在 HTML5 Canvas 中创建二次贝塞尔曲线，<code>quadraticCurveTo()</code> 方法拥有一个控制点和一个结束点，共四个参数值。控制点（cpx，cpy）和结束点（x，y），在创建二次贝塞尔曲线时还可以使用 <code>lineWidth</code> <code>strokeStyle</code> <code>lineCap</code> 等属性定义样式。</p>
                <h3>JavaScript 语法：</h3>
                <pre>context.quadraticCurveTo(cpx,cpy,x,y);</pre>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>参数：值</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>cpx</code></td>
                      <td>贝塞尔控制点（Control Point）的 x 坐标。</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><code>cpy</code></td>
                      <td>贝塞尔控制点（Control Point）的 y 坐标。</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><code>x</code></td>
                      <td>结束点的 x 坐标。</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td><code>y</code></td>
                      <td>结束点的 y 坐标。</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
          <li data-toggle="modal" data-target=".textDescription">Bezier Curve
            <div style="display:none">
              <h2>Bezier Curve 三次方贝塞尔曲线 <small><code>bezierCurveTo()</code></small></h2>
              <div class="descriptionContent">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>方法 / 属性</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>bezierCurveTo()</code></td>
                      <td>创建三次方贝塞尔曲线</td>
                    </tr>
                  </tbody>
                </table>
                <h3>使用说明：</h3>
                <p>使用 <code>bezierCurveTo()</code> 方法在 HTML5 Canvas 中创建三次方贝塞尔曲线，<code>bezierCurveTo()</code> 方法拥有两个控制点和一个结束点，共六个参数值。控制点1（cp1x，cp1y），控制点2（cp2x，cp2y）和结束点（x，y），在创建三次方贝塞尔曲线时还可以使用 <code>lineWidth</code> <code>strokeStyle</code> <code>lineCap</code> 等属性定义样式。</p>
                <h3>JavaScript 语法：</h3>
                <pre>context.bezierCurveTo(cp1x,cp1y,cp2x,cp2y,x,y);</pre>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>参数：值</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>cp1x</code></td>
                      <td>第一个贝塞尔控制点（Control Point）的 x 坐标。</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><code>cp1y</code></td>
                      <td>第一个贝塞尔控制点（Control Point）的 y 坐标。</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><code>cp2x</code></td>
                      <td>第二个贝塞尔控制点（Control Point）的 x 坐标。</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td><code>cp2y</code></td>
                      <td>第二个贝塞尔控制点（Control Point）的 y 坐标。</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td><code>x</code></td>
                      <td>结束点的 x 坐标。</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td><code>y</code></td>
                      <td>结束点的 y 坐标。</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-sm-2">
        <ul class="list-unstyled">
          <li class="">Paths</li>
          <li data-toggle="modal" data-target=".textDescription">Line Join
            <div style="display:none">
              <h2>Line Join 线条拐角 <small><code>lineJoin</code></small></h2>
              <div class="descriptionContent">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>方法 / 属性</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>lineJoin</code></td>
                      <td>设置或返回两条线相交时，所创建的拐角类型</td>
                    </tr>
                  </tbody>
                </table>
                <h3>使用说明：</h3>
                <p>在 HTML5 Canvas 中创建一条带拐角的线条，可以使用 <code>lineJoin</code> 属性来设置或返回两条线相交时，所创建的拐角类型。<code>lineJoin</code> 属性的可选值有：<code>bevel</code> <code>round</code> <code>miter</code>，注：<code>miter</code> 受 <code>miterLimit</code> 属性的影响，如果 <code>lineWidth</code> 值太小将难以分辨出线条拐角（不同值）之间的区别。</p>
                <h3>JavaScript 语法：</h3>
                <pre>context.lineJoin = "bevel|round|miter";</pre>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>参数：值</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>bevel</code></td>
                      <td>创建斜角。</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><code>round</code></td>
                      <td>创建圆角。</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><code>miter</code></td>
                      <td>默认。创建尖角。</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
          <li data-toggle="modal" data-target=".textDescription">Rounded Corners
            <div style="display:none">
              <h2>Rounded Corners 圆角 <small><code>arcTo()</code></small></h2>
              <div class="descriptionContent">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>方法 / 属性</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>arcTo()</code></td>
                      <td>创建两条线之间的弧/曲线。</td>
                    </tr>
                  </tbody>
                </table>
                <h3>使用说明：</h3>
                <p>在 HTML5 Canvas 中创建圆角，可以使用 <code>arcTo()</code> 方法来创建两条线之间的弧/曲线。。</p>
                <h3>JavaScript 语法：</h3>
                <pre>context.fillRect(x1,y1,x2,y2,r);</pre>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>参数：值</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>x1</code></td>
                      <td>弧的起点 x 坐标。</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><code>y1</code></td>
                      <td>弧的起点 y 坐标。</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><code>x2</code></td>
                      <td>弧的终点 x 坐标。</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td><code>y2</code></td>
                      <td>弧的终点 y 坐标。</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td><code>r</code></td>
                      <td>弧的半径（radius）。</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
          <li data-toggle="modal" data-target=".textDescription">Path
            <div style="display:none">
              <h2>Path 绘制路径（汇总） <small><code>lineTo()</code> <code>arcTo()</code> <code>quadraticCurveTo()</code> <code>bezierCurveTo()</code></small></h2>
              <div class="descriptionContent">
                <h3>使用说明：</h3>
                <p>在 HTML5 Canvas 中创建一条路径，可以使用 <code>lineTo()</code> <code>arcTo()</code> <code>quadraticCurveTo()</code> <code>bezierCurveTo()</code> 方法来绘制一条复杂曲折的线条路径。</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-sm-2">
        <ul class="list-unstyled">
          <li class="">Shapes</li>
            <li data-toggle="modal" data-target=".textDescription">Custom Shape
              <div style="display:none">
                <h2>Custom Shape 自定义形状 <small><code>closePath()</code></small></h2>
                <div class="descriptionContent">
                  <h3>使用说明：</h3>
                  <p>在 HTML5 Canvas 中绘制自定义形状，可以使用 <code>closePath()</code> 方法创建从当前点回到起始点的路径，关闭绘制路径。</p>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>方法 / 属性</th>
                        <th>相关描述</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><code>closePath()</code></td>
                        <td>创建从当前点回到起始点的路径，关闭绘制路径。</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </li>
            <li data-toggle="modal" data-target=".textDescription">Rectangle
              <div style="display:none">
                <h2>Rectangle 矩形 <small><code>rect()</code></small></h2>
                <div class="descriptionContent">
                  <h3>使用说明：</h3>
                  <p>在 HTML5 Canvas 中绘制矩形，可以使用 <code>rect()</code> 方法创建矩形，其参数值有四个。</p>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>方法 / 属性</th>
                        <th>相关描述</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><code>rect()</code></td>
                        <td>创建矩形</td>
                      </tr>
                    </tbody>
                  </table>
                  <h3>JavaScript 语法：</h3>
                  <pre>context.rect(x,y,width,height);</pre>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>参数：值</th>
                        <th>相关描述</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><code>x</code></td>
                        <td>矩形左上角的 x 坐标。</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td><code>y</code></td>
                        <td>矩形左上角的 y 坐标。</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td><code>width</code></td>
                        <td>矩形的宽度，以像素计。</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td><code>height</code></td>
                        <td>矩形的高度，以像素计。</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </li>
            <li data-toggle="modal" data-target=".textDescription">Arc
              <div style="display:none">
                <h2>Arc 弧/曲线 <small><code>arc()</code></small></h2>
                <div class="descriptionContent">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>方法 / 属性</th>
                        <th>相关描述</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><code>arc()</code></td>
                        <td>创建弧/曲线（用于创建圆形或部分圆）</td>
                      </tr>
                    </tbody>
                  </table>
                  <h3>使用说明：</h3>
                  <p>在 HTML5 Canvas 中绘制圆形或部分圆需要使用 <code>arc()</code> 方法，创建圆形时是由一个中心点，一个半径，一个开始角，一个结束角和绘制方向（顺时针或逆时针）组成的。在绘制弧形时还可以使用 <code>lineWidth</code> <code>strokeStyle</code> <code>lineCap</code> 等属性定义样式。</p>
                  <h3>JavaScript 语法：</h3>
                  <pre>context.arc(x,y,r,sAngle,eAngle,counterclockwise);</pre>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>参数：值</th>
                        <th>相关描述</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><code>x</code></td>
                        <td>圆的中心的 x 坐标。</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td><code>y</code></td>
                        <td>圆的中心的 y 坐标。</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td><code>r</code></td>
                        <td>圆的半径（Radius）。</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td><code>sAngle</code></td>
                        <td>起始角（Starting Angle），以弧度计（弧的圆形的三点钟位置是 0 度）。</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td><code>eAngle</code></td>
                        <td>结束角（Ending Angle），以弧度计。</td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td><code>counterclockwise</code></td>
                        <td>可选，规定应该逆时针还是顺时针绘图。False = 顺时针，true = 逆时针。</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </li>
          </ul>
      </div>
      <div class="col-sm-2">
          <ul class="list-unstyled">
            <li class="">Fill Styles</li>
            <li data-toggle="modal" data-target=".textDescription">Color Fill
              <div style="display:none">
                <h2>Color Fill 填充颜色 <small><code>fillStyle</code></small></h2>
                <div class="descriptionContent">
                  <h3>使用说明：</h3>
                  <p><code>fillStyle</code> 在 HTML5 Canvas 中设置或返回用于填充绘画的颜色、渐变或模式。可设置的颜色值有：字符串（red, green, blue 等），十六进制（#FFF000, #CCC 等）或 rgb / rgba / hsl / hsla 等。</p>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>方法 / 属性</th>
                        <th>相关描述</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><code>fillStyle</code></td>
                        <td>设置或返回用于填充绘画的颜色、渐变或模式。</td>
                      </tr>
                    </tbody>
                  </table>
                  <h3>JavaScript 语法：</h3>
                  <pre>context.fillStyle = color|gradient|pattern;</pre>
                </div>
              </div>
            </li>
              <li data-toggle="modal" data-target=".textDescription">Linear Gradient
                  <div style="display:none">
                      <h2>Linear Gradient 线性渐变 <small><code>createLinearGradient()</code></small></h2>
                      <div class="descriptionContent">
                          <h3>使用说明：</h3>
                          <p>在 HTML5 Canvas 中创建线性渐变 可使用 <code>createLinearGradient()</code> 方法，线性渐变方法可用于填充矩形、圆形、线条、文本等等。在创建线性渐变时需要使用 <code>addColorStop()</code> 插入颜色属性和停止位置。</p>
                          <table class="table table-hover">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>方法 / 属性</th>
                                      <th>相关描述</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td><code>createLinearGradient()</code></td>
                                      <td>创建线性渐变。</td>
                                  </tr>
                              </tbody>
                          </table>
                          <h3>JavaScript 语法：</h3>
                          <pre>context.createLinearGradient(x0,y0,x1,y1);</pre>
                          <table class="table table-hover">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>参数：值</th>
                                      <th>相关描述</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td><code>x0</code></td>
                                      <td>渐变开始点的 x 坐标。</td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td><code>y0</code></td>
                                      <td>渐变开始点的 y 坐标。</td>
                                  </tr>
                                  <tr>
                                      <td>3</td>
                                      <td><code>x1</code></td>
                                      <td>渐变结束点的 x 坐标。</td>
                                  </tr>
                                  <tr>
                                      <td>4</td>
                                      <td><code>y1</code></td>
                                      <td>渐变结束点的 y 坐标。</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </li>
              <li data-toggle="modal" data-target=".textDescription">Radial Gradient
                  <div style="display:none">
                      <h2>Radial Gradient 放射渐变 <small><code>createRadialGradient()</code></small></h2>
                      <div class="descriptionContent">
                          <h3>使用说明：</h3>
                          <p>在 HTML5 Canvas 中创建放射渐变 可使用 <code>createRadialGradient()</code> 方法，放射渐变方法可用于填充矩形、圆形、线条、文本等等。在创建放射渐变时需要使用 <code>addColorStop()</code> 插入颜色属性和停止位置。</p>
                          <table class="table table-hover">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>方法 / 属性</th>
                                      <th>相关描述</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td><code>createRadialGradient()</code></td>
                                      <td>创建线性渐变。</td>
                                  </tr>
                              </tbody>
                          </table>
                          <h3>JavaScript 语法：</h3>
                          <pre>context.createRadialGradient(x0,y0,r0,x1,y1,r1);</pre>
                          <table class="table table-hover">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>参数：值</th>
                                      <th>相关描述</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td><code>x0</code></td>
                                      <td>渐变的开始圆的 x 坐标。</td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td><code>y0</code></td>
                                      <td>渐变的开始圆的 y 坐标。</td>
                                  </tr>
                                  <tr>
                                      <td>3</td>
                                      <td><code>r0</code></td>
                                      <td>开始圆的半径。</td>
                                  </tr>
                                  <tr>
                                      <td>4</td>
                                      <td><code>x1</code></td>
                                      <td>渐变的结束圆的 x 坐标。</td>
                                  </tr>
                                  <tr>
                                      <td>5</td>
                                      <td><code>y1</code></td>
                                      <td>渐变的结束圆的 y 坐标。</td>
                                  </tr>
                                  <tr>
                                      <td>6</td>
                                      <td><code>r1</code></td>
                                      <td>结束圆的半径。</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </li>
              <li data-toggle="modal" data-target=".textDescription">Pattern
                  <div style="display:none">
                      <h2>Pattern 模式元素 <small><code>createPattern()</code></small></h2>
                      <div class="descriptionContent">
                          <h3>使用说明：</h3>
                          <p>在 HTML5 Canvas 中创建模式元素（可以是图片、视频，或者其他 Canvas 元素）可使用 <code>createPattern()</code> 方法，被重复的元素可用于绘制/填充矩形、圆形或线条等等。</p>
                          <table class="table table-hover">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>方法 / 属性</th>
                                      <th>相关描述</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td><code>createPattern()</code></td>
                                      <td>创建模式元素（可以是图片、视频，或者其他 Canvas 元素）。</td>
                                  </tr>
                              </tbody>
                          </table>
                          <h3>JavaScript 语法：</h3>
                          <pre>context.createPattern(image,"repeat|repeat-x|repeat-y|no-repeat");</pre>
                          <table class="table table-hover">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>参数：值</th>
                                      <th>相关描述</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td><code>image</code></td>
                                      <td>规定要使用的图片、画布或视频元素。</td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td><code>repeat</code></td>
                                      <td>默认。该模式在水平和垂直方向重复。</td>
                                  </tr>
                                  <tr>
                                      <td>3</td>
                                      <td><code>repeat-x</code></td>
                                      <td>该模式只在水平方向重复。</td>
                                  </tr>
                                  <tr>
                                      <td>4</td>
                                      <td><code>repeat-y</code></td>
                                      <td>该模式只在垂直方向重复。</td>
                                  </tr>
                                  <tr>
                                      <td>5</td>
                                      <td><code>no-repeat</code></td>
                                      <td>该模式只显示一次（不重复）。</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </li>
          </ul>
      </div>
      <div class="col-sm-2">
        <ul class="list-unstyled">
          <li class="">Images</li>
          <li data-toggle="modal" data-target=".textDescription">Draw Image
            <div style="display:none">
              <h2>Draw Image 绘制图像 <small><code>drawImage()</code></small></h2>
              <div class="descriptionContent">
                <h3>使用说明：</h3>
                <p>在 HTML5 Canvas 中绘制图像、画布或视频可使用 <code>drawImage()</code> 方法，该方法也能够绘制图像的某些部分，以及/或者增加或减少图像的尺寸。</p>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>方法 / 属性</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>drawImage()</code></td>
                      <td>绘制图像、画布或视频或绘制图像的某些部分，以及/或者增加或减少图像的尺寸。</td>
                    </tr>
                  </tbody>
                </table>
                <h3>JavaScript 语法：</h3>
                <pre>context.drawImage(img,sx,sy,swidth,sheight,x,y,width,height);</pre>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>参数：值</th>
                        <th>相关描述</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><code>img</code></td>
                        <td>规定要使用的图像、画布或视频。</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td><code>sx</code></td>
                        <td>开始剪切的 x 坐标位置（sourceX）。</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td><code>sy</code></td>
                        <td>开始剪切的 y 坐标位置（sourceY）。</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td><code>swidth</code></td>
                        <td>被剪切图像的宽度（sourceWidth）。</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td><code>sheight</code></td>
                        <td>被剪切图像的高度（sourceHeight）。</td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td><code>x</code></td>
                        <td>在画布上放置图像的 x 坐标位置。</td>
                      </tr>
                      <tr>
                        <td>7</td>
                        <td><code>y</code></td>
                        <td>在画布上放置图像的 y 坐标位置。</td>
                      </tr>
                      <tr>
                        <td>8</td>
                        <td><code>width</code></td>
                        <td>要使用的图像的宽度。（伸展或缩小图像）</td>
                      </tr>
                      <tr>
                        <td>9</td>
                        <td><code>height</code></td>
                        <td>要使用的图像的高度。（伸展或缩小图像）</td>
                      </tr>
                    </tbody>
                </table>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-xs-12 listTwo">
      <div class="col-sm-2">
        <ul class="list-unstyled">
          <li class="">Text</li>
          <li data-toggle="modal" data-target=".textDescription">Font &amp; Size &amp; Style
            <div style="display:none">
              <h2>Font &amp; Size &amp; Style 字体样式 <small><code>font</code> <code>fillText()</code></small></h2>
              <div class="descriptionContent">
                <h3>使用说明：</h3>
                <p>在 HTML5 Canvas 中可以使用 <code>font</code> 属性设置文字的字体、大小和风格等，或返回 Canvas 上文本内容的当前字体属性，使用 <code>fillText()</code> 绘制文本</p>
                <h3>JavaScript 语法：</h3>
                <pre>context.fillText(text,x,y,maxWidth);</pre>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>参数：值</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>text</code></td>
                      <td>规定在画布上输出的文本。</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><code>x</code></td>
                      <td>开始绘制文本的 x 坐标位置（相对于画布）。</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><code>y</code></td>
                      <td>开始绘制文本的 y 坐标位置（相对于画布）。</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><code>maxWidth</code></td>
                      <td>可选。允许的最大文本宽度，以像素计。</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
          <li data-toggle="modal" data-target=".textDescription">Text Stroke
            <div style="display:none">
              <h2>Text Stroke 文字 <small><code>strokeStyle</code></small></h2>
              <div class="descriptionContent">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>方法 / 属性</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>strokeStyle</code></td>
                      <td>设置或返回用于笔触的颜色、渐变或模式</td>
                    </tr>
                  </tbody>
                </table>
                <h3>使用说明：</h3>
                <p>在 HTML5 Canvas 中设置或返回文字颜色时可使用 <code>strokeStyle</code> 该属性可设置的颜色值有：字符串（red, green, blue 等），十六进制（#FFF000, #CCC 等）或 rgb / rgba / hsl / hsla 等。</p>
                <h3>JavaScript 语法：</h3>
                <pre>context.strokeStyle = color|gradient|pattern;</pre>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>参数：值</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>color</code></td>
                      <td>指示绘图填充色的 CSS 颜色值。默认值是 #000000 （黑色）。</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><code>gradient</code></td>
                      <td>用于填充绘图的渐变对象（线性或放射性）。</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><code>pattern</code></td>
                      <td>用于创建 pattern 笔触的 pattern 对象。</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
          <li data-toggle="modal" data-target=".textDescription">Text Align
            <div style="display:none">
              <h2>Text Align 文本对齐方式 <small><code>textAlign</code></small></h2>
              <div class="descriptionContent">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>方法 / 属性</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>textAlign</code></td>
                      <td>设置或返回文本内容的当前对齐方式</td>
                    </tr>
                  </tbody>
                </table>
                <h3>使用说明：</h3>
                <p>在 HTML5 Canvas 中需要设置或返回文本内容的当前对齐方式时可使用 <code>textAlign</code> </p>
                <h3>JavaScript 语法：</h3>
                <pre>context.textAlign = "center|end|left|right|start";</pre>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>参数：值</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>start</code></td>
                      <td>默认值。文本在指定的位置开始。</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><code>end</code></td>
                      <td>文本在指定的位置结束。</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><code>center</code></td>
                      <td>文本的中心被放置在指定的位置。</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td><code>left</code></td>
                      <td>文本左对齐。</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td><code>right</code></td>
                      <td>文本右对齐。</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
          <li data-toggle="modal" data-target=".textDescription">Text Baseline
              <div style="display:none">
                <h2>Text Baseline 文本基线 <small><code>textBaseline</code></small></h2>
                <div class="descriptionContent">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>方法 / 属性</th>
                        <th>相关描述</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><code>textBaseline</code></td>
                        <td>设置或返回在绘制文本时使用的当前文本基线</td>
                      </tr>
                    </tbody>
                  </table>
                  <h3>使用说明：</h3>
                  <p>在 HTML5 Canvas 中使用 <code>textAlign</code> 设置或返回在绘制文本时使用的当前文本基线。</p>
                  <h3>JavaScript 语法：</h3>
                  <pre>context.textBaseline = "alphabetic|top|hanging|middle|ideographic|bottom";</pre>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>参数：值</th>
                        <th>相关描述</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><code>alphabetic</code></td>
                        <td>默认值。文本基线是普通的字母基线。</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td><code>top</code></td>
                        <td>文本基线是 em 方框的顶端。</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td><code>hanging</code></td>
                        <td>文本基线是悬挂基线。</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td><code>middle</code></td>
                        <td>文本基线是 em 方框的正中。</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td><code>ideographic</code></td>
                        <td>文本基线是表意基线。</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td><code>bottom</code></td>
                        <td>文本基线是 em 方框的底端。</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
          </li>
          <li data-toggle="modal" data-target=".textDescription">Text Metrics
            <div style="display:none">
              <h2>Text Metrics 文本测量（文本宽度对象） <small><code>measureText()</code></small></h2>
              <div class="descriptionContent">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>方法 / 属性</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>measureText()</code></td>
                      <td>返回包含指定文本宽度的对象</td>
                    </tr>
                  </tbody>
                </table>
                <h3>使用说明：</h3>
                <p>在 HTML5 Canvas 测量一段字符串的宽度可使用 <code>measureText()</code> 文本对象来获得该对象包含以像素计的指定文本宽度。</p>
                <h3>JavaScript 语法：</h3>
                <pre>context.measureText(text).width;</pre>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>参数：值</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>text</code></td>
                      <td>要测量的文本。</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-sm-2">
        <ul class="list-unstyled">
          <li class="">Transformations</li>
          <li data-toggle="modal" data-target=".textDescription">Translate
            <div style="display:none">
              <h2>Translate 改变/转变 <small><code>translate()</code></small></h2>
              <div class="descriptionContent">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>方法 / 属性</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>translate()</code></td>
                      <td>重新映射 Canvas 上的 (0,0) 位置</td>
                    </tr>
                  </tbody>
                </table>
                <h3>使用说明：</h3>
                <p>在 HTML5 Canvas 可使用 <code>translate()</code> 重新映射 Canvas 上的 (0,0) 位置。</p>
                <h3>JavaScript 语法：</h3>
                <pre>context.translate(x,y);</pre>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>参数：值</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>x</code></td>
                      <td>添加到水平坐标（x）上的值。</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><code>y</code></td>
                      <td>添加到垂直坐标（y）上的值。</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
          <li data-toggle="modal" data-target=".textDescription">Scale
            <div style="display:none">
              <h2>Scale 缩放 <small><code>scale()</code></small></h2>
              <div class="descriptionContent">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>方法 / 属性</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>scale()</code></td>
                      <td>缩放当前绘图的大小，更大或更小。</td>
                    </tr>
                  </tbody>
                </table>
                <h3>使用说明：</h3>
                <p>在 HTML5 Canvas 改变绘图大小可使用 <code>scale()</code> 进行缩放。</p>
                <h3>JavaScript 语法：</h3>
                <pre>context.scale(scalewidth,scaleheight);</pre>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>参数：值</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>scalewidth</code></td>
                      <td>缩放当前绘图的宽度 (1=100%, 0.5=50%, 2=200%, 依次类推)</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><code>scaleheight</code></td>
                      <td>缩放当前绘图的高度 (1=100%, 0.5=50%, 2=200%, etc.)</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
          <li data-toggle="modal" data-target=".textDescription">Rotate
            <div style="display:none">
              <h2>Rotate 旋转 <small><code>rotate()</code></small></h2>
              <div class="descriptionContent">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>方法 / 属性</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>rotate()</code></td>
                      <td>旋转当前绘图。</td>
                    </tr>
                  </tbody>
                </table>
                <h3>使用说明：</h3>
                <p>在 HTML5 Canvas 旋转绘图可使用 <code>rotate()</code> 进行旋转。</p>
                <h3>JavaScript 语法：</h3>
                <pre>context.rotate(angle);</pre>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>参数：值</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>angle</code></td>
                      <td>旋转角度，以弧度计。<br>如需将角度转换为弧度，请使用 degrees*Math.PI/180 公式进行计算。<br>举例：如需旋转 5 度，可规定下面的公式：5*Math.PI/180。</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
          <li data-toggle="modal" data-target=".textDescription">Custom Transform
            <div style="display:none">
              <h2>Custom Transform 自定义改变 <small><code>transform()</code></small></h2>
              <div class="descriptionContent">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>方法 / 属性</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>transform()</code></td>
                      <td>自定义缩放、旋转、移动和倾斜。</td>
                    </tr>
                  </tbody>
                </table>
                <h3>使用说明：</h3>
                <p>在 HTML5 Canvas 可使用 <code>transform()</code> 对绘图进行自定义缩放、旋转、移动和倾斜。</p>
                <h3>JavaScript 语法：</h3>
                <pre>context.transform(a,b,c,d,e,f);</pre>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>参数：值</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>a</code></td>
                      <td>水平缩放绘图。</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><code>b</code></td>
                      <td>水平倾斜绘图。</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><code>c</code></td>
                      <td>垂直倾斜绘图。</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td><code>d</code></td>
                      <td>垂直缩放绘图。</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td><code>e</code></td>
                      <td>水平移动绘图。</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td><code>f</code></td>
                      <td>垂直移动绘图。</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-sm-2">
        <ul class="list-unstyled">
          <li class="">Composites</li>
          <li data-toggle="modal" data-target=".textDescription">Shadows
            <div style="display:none">
              <h2>Shadows 阴影 <small><code>shadowColor</code> <code>shadowBlur</code> <code>shadowOffsetX</code> <code>shadowOffsetY</code></small></h2>
              <div class="descriptionContent">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>方法 / 属性</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>shadowColor</code></td>
                      <td>设置或返回用于阴影的颜色。</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><code>shadowBlur</code></td>
                      <td>设置或返回用于阴影的模糊级别。</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><code>shadowOffsetX</code></td>
                      <td>设置或返回阴影距形状的水平距离。</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td><code>shadowOffsetY</code></td>
                      <td>设置或返回阴影距形状的垂直距离。</td>
                    </tr>
                  </tbody>
                </table>
                <h3>使用说明：</h3>
                <p>在 HTML5 Canvas 中给绘图添加阴影可使用 <code>shadowColor</code> 设置阴影的颜色，<code>shadowBlur</code> 设置模糊度， <code>shadowOffsetX</code> 设置阴影距形状的水平距离， <code>shadowOffsetY</code> 设置阴影距形状的垂直距离。</p>
                <h3>JavaScript 语法：</h3>
                <pre>context.shadowColor = color;</pre>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>参数：值</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>color</code></td>
                      <td>用于阴影的 CSS 颜色值。默认值是 #000000（黑色）。</td>
                    </tr>
                  </tbody>
                </table>
                <pre>context.shadowBlur = number;</pre>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>参数：值</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>number</code></td>
                      <td>阴影的模糊级数。</td>
                    </tr>
                  </tbody>
                </table>
                <pre>context.shadowOffsetX = number;</pre>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>参数：值</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>number</code></td>
                      <td>正值或负值，定义阴影与形状的水平距离。</td>
                    </tr>
                  </tbody>
                </table>
                <pre>context.shadowOffsetY = number;</pre>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>参数：值</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>number</code></td>
                      <td>正值或负值，定义阴影与形状的垂直距离。</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
          <li data-toggle="modal" data-target=".textDescription">Global Alpha
            <div style="display:none">
              <h2>Global Alpha 透明/Alpha <small><code>globalAlpha</code></small></h2>
              <div class="descriptionContent">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>方法 / 属性</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>globalAlpha</code></td>
                      <td>设置或返回绘图的当前 alpha 或透明值。</td>
                    </tr>
                  </tbody>
                </table>
                <h3>使用说明：</h3>
                <p>在 HTML5 Canvas 中设置或返回绘图的当前 alpha 或透明值，使用 <code>globalAlpha</code></p>
                <h3>JavaScript 语法：</h3>
                <pre>context.globalAlpha = number;</pre>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>参数：值</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>number</code></td>
                      <td>透明值。必须介于 0（完全透明） 与 1（不透明） 之间。</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
          <li data-toggle="modal" data-target=".textDescription">Clipping Region
            <div style="display:none">
              <h2>Clipping Region 剪切区域 <small><code>clip()</code></small></h2>
              <div class="descriptionContent">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>方法 / 属性</th>
                        <th>相关描述</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><code>clip()</code></td>
                        <td>从原始 Canvas 剪切任意形状和尺寸的区域。</td>
                      </tr>
                    </tbody>
                </table>
                <h3>使用说明：</h3>
                <p>在 HTML5 Canvas 中使用 <code>clip()</code> 从原始 Canvas 剪切任意形状和尺寸的区域</p>
              </div>
            </div>
          </li>
          <li data-toggle="modal" data-target=".textDescription">Operations
            <div style="display:none">
              <h2>Operations 合成操作 <small><code>globalCompositeOperation</code></small></h2>
              <div class="descriptionContent">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>方法 / 属性</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>globalCompositeOperation</code></td>
                      <td>设置或返回新图像如何绘制到已有的图像上。</td>
                    </tr>
                  </tbody>
                </table>
                <h3>使用说明：</h3>
                <p>在 HTML5 Canvas 中使用 <code>globalCompositeOperation</code> 设置或返回新图像如何绘制到已有图像上的合成绘图效果。</p>
                <h3>JavaScript 语法：</h3>
                <pre>context.globalCompositeOperation = "source-atop|source-in|source-out|source-over|destination-atop|destination-in|destination-out|destination-over|lighter|darker|xor|copy";</pre>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>参数：值</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>source-over</code></td>
                      <td>默认。在目标图像上显示源图像。</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><code>source-atop</code></td>
                      <td>在目标图像顶部显示源图像。源图像位于目标图像之外的部分是不可见的。</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><code>source-in</code></td>
                      <td>在目标图像中显示源图像。只有目标图像内的源图像部分会显示，目标图像是透明的。</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td><code>source-out</code></td>
                      <td>在目标图像之外显示源图像。只会显示目标图像之外源图像部分，目标图像是透明的。</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td><code>destination-over</code></td>
                      <td>在源图像上方显示目标图像。</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td><code>destination-atop</code></td>
                      <td>在源图像顶部显示目标图像。源图像之外的目标图像部分不会被显示。</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td><code>destination-in</code></td>
                      <td>在源图像中显示目标图像。只有源图像内的目标图像部分会被显示，源图像是透明的。</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td><code>destination-out</code></td>
                      <td>透明值。必须介于 0（完全透明） 与 1（不透明） 之间。</td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td><code>lighter</code></td>
                      <td>显示源图像 + 目标图像。</td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td><code>darker</code></td>
                      <td>在图形重叠的地方，颜色由两个颜色值相减后决定</td>
                    </tr>
                    <tr>
                      <td>11</td>
                      <td><code>xor</code></td>
                      <td>使用异或操作对源图像与目标图像进行组合。</td>
                    </tr>
                    <tr>
                      <td>12</td>
                      <td><code>copy</code></td>
                      <td>显示源图像。忽略目标图像。</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-sm-2">
        <ul class="list-unstyled">
          <li class="">Image Data &amp; URLs</li>
          <li data-toggle="modal" data-target=".textDescription">Image Data
            <div style="display:none">
              <h2>Image Data 图像数据/对象 <small><code>getImageData()</code></small></h2>
              <div class="descriptionContent">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>方法 / 属性</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>getImageData()</code></td>
                      <td>返回 ImageData 对象，该对象为 Canvas 上指定的矩形复制像素数据。</td>
                    </tr>
                  </tbody>
                </table>
                <h3>使用说明：</h3>
                <p>在 HTML5 Canvas 中使用 <code>getImageData()</code> 返回指定图像的 ImageData 对象，该对象为 Canvas 上指定的矩形复制像素数据。</p>
                <h3>JavaScript 语法：</h3>
                <pre>var imgData = context.getImageData(x,y,width,height);</pre>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>参数：值</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>x</code></td>
                      <td>开始复制的左上角位置的 x 坐标。</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><code>y</code></td>
                      <td>开始复制的左上角位置的 y 坐标。</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><code>width</code></td>
                      <td>将要复制的矩形区域的宽度。</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td><code>height</code></td>
                      <td>将要复制的矩形区域的高度。</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
          <li data-toggle="modal" data-target=".textDescription">Invert Colors
            <div style="display:none">
              <h2>Invert Colors 图像反色 <small><code>putImageData()</code></small></h2>
              <div class="descriptionContent">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>方法 / 属性</th>
                        <th>相关描述</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><code>putImageData()</code></td>
                        <td>把图像数据（从指定的 ImageData 对象）放回 Canvas 上。</td>
                      </tr>
                    </tbody>
                </table>
                <h3>使用说明：</h3>
                <p>在 HTML5 Canvas 中使用 <code>putImageData()</code> 把图像数据（从指定的 ImageData 对象）放回 Canvas 上，并反转 Canvas 上的图像的每个像素的颜色。</p>
                <h3>JavaScript 语法：</h3>
                <pre>context.putImageData(imgData,x,y,dirtyX,dirtyY,dirtyWidth,dirtyHeight);</pre>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>参数：值</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>imgData</code></td>
                      <td>规定要放回画布的 ImageData 对象。</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><code>x</code></td>
                      <td>ImageData 对象左上角的 x 坐标，以像素计。</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><code>y</code></td>
                      <td>ImageData 对象左上角的 y 坐标，以像素计。</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td><code>dirtyX</code></td>
                      <td>可选。水平值（x），以像素计，在画布上放置图像的位置。</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td><code>dirtyY</code></td>
                      <td>可选。水平值（y），以像素计，在画布上放置图像的位置。</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td><code>dirtyWidth</code></td>
                      <td>可选。在画布上绘制图像所使用的宽度。</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td><code>dirtyHeight</code></td>
                      <td>可选。在画布上绘制图像所使用的高度。</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
          <li data-toggle="modal" data-target=".textDescription">Get Data URL
            <div style="display:none">
              <h2>Get Data URL 获取图像数据/对象 URL <small><code>toDataURL()</code></small></h2>
              <div class="descriptionContent">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>方法 / 属性</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>toDataURL()</code></td>
                      <td>获得 base64 编码 PNG 图像 URL，可引用在 img 中。</td>
                    </tr>
                  </tbody>
                </table>
                <h3>使用说明：</h3>
                <p>在 HTML5 Canvas 中使用 <code>toDataURL()</code> 获得 base64 编码 PNG 图像 URL，可引用在 img 中，可以通过 toDataURL("image/jpeg",0.5) 参数得到不同格式与质量的图像</p>
                <h3>JavaScript 语法：</h3>
                <pre>context.toDataURL(format,number);</pre>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>参数：值</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>format</code></td>
                      <td>可选，image/jpeg 得到 jpeg 格式的图像</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><code>number</code></td>
                      <td>可选，0-1 之间的数值改变图像像素质量。</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-sm-2">
        <ul class="list-unstyled">
          <li class="">Animation</li>
          <li data-toggle="modal" data-target=".textDescription">Clear Canvas
            <div style="display:none">
              <h2>Clear Canvas 清除 Canvas <small><code>clearRect()</code></small></h2>
              <div class="descriptionContent">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>方法 / 属性</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>clearRect()</code></td>
                      <td>清除 Canvas 中指定的图形像素</td>
                    </tr>
                  </tbody>
                </table>
                <h3>使用说明：</h3>
                <p>在 HTML5 Canvas 中使用 <code>clearRect()</code> 清除 Canvas 中指定的图形像素。</p>
                <h3>JavaScript 语法：</h3>
                <pre>context.clearRect(x,y,width,height);</pre>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>参数：值</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>x</code></td>
                      <td>要清除的矩形左上角的 x 坐标。</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><code>y</code></td>
                      <td>要清除的矩形左上角的 y 坐标。</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><code>width</code></td>
                      <td>要清除的矩形的宽度，以像素计。</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td><code>height</code></td>
                      <td>要清除的矩形的高度，以像素计。</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
          <li data-toggle="modal" data-target=".textDescription">Animation Frames
            <div style="display:none">
              <h2>Animation Frames 动画框架 <small><code>requestAnimFrame</code></small></h2>
              <div class="descriptionContent">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>方法 / 属性</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>requestAnimFrame</code></td>
                      <td>可使动画效果更加流畅</td>
                    </tr>
                  </tbody>
                </table>
                <h3>使用说明：</h3>
                <p>在 HTML5 Canvas 中使用 <code>requestAnimFrame</code> 让浏览器优化动画 FPS，使动画达到最优质的效果。</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-sm-2">
        <ul class="list-unstyled">
          <li class="">Mouse Detection</li>
          <li data-toggle="modal" data-target=".textDescription">Mouse Coordinates
            <div style="display:none">
              <h2>Mouse Coordinates 鼠标坐标 <small><code>getMousePos()</code></small></h2>
              <div class="descriptionContent">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>方法 / 属性</th>
                      <th>相关描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><code>getMousePos()</code></td>
                      <td>获取鼠标移动坐标。</td>
                    </tr>
                  </tbody>
                </table>
                <h3>使用说明：</h3>
                <p>在 HTML5 Canvas 中使用 <code>getMousePos()</code> 获取鼠标移动坐标。</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!-- Modal 语法使用说明 -->
    <div class="modal fade textDescription" tabindex="-1" role="dialog" aria-labelledby="textDescription">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="col-xs-12 listThree" style="">
            <div class="page-header">
              <h2></h2>
            </div>
            <div class="article">
            </div>
            <span class="close" aria-label="Close" data-dismiss="modal"></span>
          </div>
        </div>
      </div>
    </div><!-- Modal End -->
  </div>
</div>
<footer>
  <blockquote>
    <p>学习 Canvas 从注释开始，在这里你可以：阅读、修改、创作！</p>
    <footer>示例代码来源于网络！</footer>
  </blockquote>
<?php get_footer(); ?>