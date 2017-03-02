<?php
    $version = '2.4.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Color.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.12 -->
<script type="text/javascript" src="menudata.js"></script>
<script type="text/javascript" src="menu.js"></script>
<script type="text/javascript">
$(function() {
  initMenu('',false,false,'search.php','Search');
});
</script>
<div id="main-nav"></div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_a2d5a90f1bdcb5808a62d5b0d5da2693.php">shared</a></li><li class="navelem"><a class="el" href="dir_43d543a298a049144b52f1b4453e3c7a.php">include</a></li><li class="navelem"><a class="el" href="dir_58a6f29869daa158b2acc7d96b6fe230.php">SFML</a></li><li class="navelem"><a class="el" href="dir_33aa9c32c91f6e372580815084672c3b.php">Graphics</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">shared/include/SFML/Graphics/Color.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2016 Laurent Gomila (laurent@sfml-dev.org)</span></div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_COLOR_HPP</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_COLOR_HPP</span></div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Graphics/Export.hpp&gt;</span></div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;</div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;{</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;<span class="keyword">class </span>SFML_GRAPHICS_API Color</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;{</div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;<span class="keyword">public</span>:</div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;    Color();</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;</div><div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;    Color(Uint8 red, Uint8 green, Uint8 blue, Uint8 alpha = 255);</div><div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;</div><div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;    <span class="keyword">explicit</span> Color(Uint32 color);</div><div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;</div><div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;    Uint32 toInteger() <span class="keyword">const</span>;</div><div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;</div><div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;    <span class="comment">// Static member data</span></div><div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;<span class="comment"></span>    <span class="keyword">static</span> <span class="keyword">const</span> Color Black;       </div><div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> Color White;       </div><div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> Color Red;         </div><div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> Color Green;       </div><div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> Color Blue;        </div><div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> Color Yellow;      </div><div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> Color Magenta;     </div><div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> Color Cyan;        </div><div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> Color Transparent; </div><div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;</div><div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;    <span class="comment">// Member data</span></div><div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;<span class="comment"></span>    Uint8 r; </div><div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;    Uint8 g; </div><div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;    Uint8 b; </div><div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;    Uint8 a; </div><div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;};</div><div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;</div><div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;SFML_GRAPHICS_API <span class="keywordtype">bool</span> operator ==(<span class="keyword">const</span> Color&amp; left, <span class="keyword">const</span> Color&amp; right);</div><div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;</div><div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;SFML_GRAPHICS_API <span class="keywordtype">bool</span> operator !=(<span class="keyword">const</span> Color&amp; left, <span class="keyword">const</span> Color&amp; right);</div><div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;</div><div class="line"><a name="l00143"></a><span class="lineno">  143</span>&#160;SFML_GRAPHICS_API Color operator +(<span class="keyword">const</span> Color&amp; left, <span class="keyword">const</span> Color&amp; right);</div><div class="line"><a name="l00144"></a><span class="lineno">  144</span>&#160;</div><div class="line"><a name="l00158"></a><span class="lineno">  158</span>&#160;SFML_GRAPHICS_API Color operator -(<span class="keyword">const</span> Color&amp; left, <span class="keyword">const</span> Color&amp; right);</div><div class="line"><a name="l00159"></a><span class="lineno">  159</span>&#160;</div><div class="line"><a name="l00175"></a><span class="lineno">  175</span>&#160;SFML_GRAPHICS_API Color operator *(<span class="keyword">const</span> Color&amp; left, <span class="keyword">const</span> Color&amp; right);</div><div class="line"><a name="l00176"></a><span class="lineno">  176</span>&#160;</div><div class="line"><a name="l00191"></a><span class="lineno">  191</span>&#160;SFML_GRAPHICS_API Color&amp; operator +=(Color&amp; left, <span class="keyword">const</span> Color&amp; right);</div><div class="line"><a name="l00192"></a><span class="lineno">  192</span>&#160;</div><div class="line"><a name="l00207"></a><span class="lineno">  207</span>&#160;SFML_GRAPHICS_API Color&amp; operator -=(Color&amp; left, <span class="keyword">const</span> Color&amp; right);</div><div class="line"><a name="l00208"></a><span class="lineno">  208</span>&#160;</div><div class="line"><a name="l00225"></a><span class="lineno">  225</span>&#160;SFML_GRAPHICS_API Color&amp; operator *=(Color&amp; left, <span class="keyword">const</span> Color&amp; right);</div><div class="line"><a name="l00226"></a><span class="lineno">  226</span>&#160;</div><div class="line"><a name="l00227"></a><span class="lineno">  227</span>&#160;} <span class="comment">// namespace sf</span></div><div class="line"><a name="l00228"></a><span class="lineno">  228</span>&#160;</div><div class="line"><a name="l00229"></a><span class="lineno">  229</span>&#160;</div><div class="line"><a name="l00230"></a><span class="lineno">  230</span>&#160;<span class="preprocessor">#endif // SFML_COLOR_HPP</span></div><div class="line"><a name="l00231"></a><span class="lineno">  231</span>&#160;</div><div class="line"><a name="l00232"></a><span class="lineno">  232</span>&#160;</div><div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Audio_2AlResource_8hpp_source.php#l00034">include/SFML/Audio/AlResource.hpp:34</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>