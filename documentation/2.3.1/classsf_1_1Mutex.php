<?php
    $version = '2.3.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Mutex Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.10 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Mutex.php">Mutex</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="classsf_1_1Mutex-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Mutex Class Reference<div class="ingroups"><a class="el" href="group__system.php">System module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Blocks concurrent access to shared resources from multiple threads.  
 <a href="classsf_1_1Mutex.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Mutex_8hpp_source.php">Mutex.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::Mutex:</div>
<div class="dyncontent">
 <div class="center">
  <img src="classsf_1_1Mutex.png" usemap="#sf::Mutex_map" alt=""/>
  <map id="sf::Mutex_map" name="sf::Mutex_map">
<area href="classsf_1_1NonCopyable.php" title="Utility class that makes any derived class non-copyable. " alt="sf::NonCopyable" shape="rect" coords="0,0,105,24"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a9bd52a48320fd7b6db8a78037aad276e"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Mutex.php#a9bd52a48320fd7b6db8a78037aad276e">Mutex</a> ()</td></tr>
<tr class="memdesc:a9bd52a48320fd7b6db8a78037aad276e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a9bd52a48320fd7b6db8a78037aad276e">More...</a><br /></td></tr>
<tr class="separator:a9bd52a48320fd7b6db8a78037aad276e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9f76a67b7b6d3918131a692179b4e3f2"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Mutex.php#a9f76a67b7b6d3918131a692179b4e3f2">~Mutex</a> ()</td></tr>
<tr class="memdesc:a9f76a67b7b6d3918131a692179b4e3f2"><td class="mdescLeft">&#160;</td><td class="mdescRight">Destructor.  <a href="#a9f76a67b7b6d3918131a692179b4e3f2">More...</a><br /></td></tr>
<tr class="separator:a9f76a67b7b6d3918131a692179b4e3f2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1a16956a6bbea764480c1b80f2e45763"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Mutex.php#a1a16956a6bbea764480c1b80f2e45763">lock</a> ()</td></tr>
<tr class="memdesc:a1a16956a6bbea764480c1b80f2e45763"><td class="mdescLeft">&#160;</td><td class="mdescRight"><a class="el" href="classsf_1_1Lock.php" title="Automatic wrapper for locking and unlocking mutexes. ">Lock</a> the mutex.  <a href="#a1a16956a6bbea764480c1b80f2e45763">More...</a><br /></td></tr>
<tr class="separator:a1a16956a6bbea764480c1b80f2e45763"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ade71268ffc5e80756652058b01c23c33"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Mutex.php#ade71268ffc5e80756652058b01c23c33">unlock</a> ()</td></tr>
<tr class="memdesc:ade71268ffc5e80756652058b01c23c33"><td class="mdescLeft">&#160;</td><td class="mdescRight">Unlock the mutex.  <a href="#ade71268ffc5e80756652058b01c23c33">More...</a><br /></td></tr>
<tr class="separator:ade71268ffc5e80756652058b01c23c33"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Blocks concurrent access to shared resources from multiple threads. </p>
<p><a class="el" href="classsf_1_1Mutex.php" title="Blocks concurrent access to shared resources from multiple threads. ">Mutex</a> stands for "MUTual EXclusion".</p>
<p>A mutex is a synchronization object, used when multiple threads are involved.</p>
<p>When you want to protect a part of the code from being accessed simultaneously by multiple threads, you typically use a mutex. When a thread is locked by a mutex, any other thread trying to lock it will be blocked until the mutex is released by the thread that locked it. This way, you can allow only one thread at a time to access a critical region of your code.</p>
<p>Usage example: </p><div class="fragment"><div class="line">Database database; <span class="comment">// this is a critical resource that needs some protection</span></div>
<div class="line"><a class="code" href="classsf_1_1Mutex.php">sf::Mutex</a> mutex;</div>
<div class="line"></div>
<div class="line"><span class="keywordtype">void</span> thread1()</div>
<div class="line">{</div>
<div class="line">    mutex.<a class="code" href="classsf_1_1Mutex.php#a1a16956a6bbea764480c1b80f2e45763">lock</a>(); <span class="comment">// this call will block the thread if the mutex is already locked by thread2</span></div>
<div class="line">    database.write(...);</div>
<div class="line">    mutex.<a class="code" href="classsf_1_1Mutex.php#ade71268ffc5e80756652058b01c23c33">unlock</a>(); <span class="comment">// if thread2 was waiting, it will now be unblocked</span></div>
<div class="line">}</div>
<div class="line"></div>
<div class="line"><span class="keywordtype">void</span> thread2()</div>
<div class="line">{</div>
<div class="line">    mutex.<a class="code" href="classsf_1_1Mutex.php#a1a16956a6bbea764480c1b80f2e45763">lock</a>(); <span class="comment">// this call will block the thread if the mutex is already locked by thread1</span></div>
<div class="line">    database.write(...);</div>
<div class="line">    mutex.<a class="code" href="classsf_1_1Mutex.php#ade71268ffc5e80756652058b01c23c33">unlock</a>(); <span class="comment">// if thread1 was waiting, it will now be unblocked</span></div>
<div class="line">}</div>
</div><!-- fragment --><p>Be very careful with mutexes. A bad usage can lead to bad problems, like deadlocks (two threads are waiting for each other and the application is globally stuck).</p>
<p>To make the usage of mutexes more robust, particularly in environments where exceptions can be thrown, you should use the helper class <a class="el" href="classsf_1_1Lock.php" title="Automatic wrapper for locking and unlocking mutexes. ">sf::Lock</a> to lock/unlock mutexes.</p>
<p>SFML mutexes are recursive, which means that you can lock a mutex multiple times in the same thread without creating a deadlock. In this case, the first call to <a class="el" href="classsf_1_1Mutex.php#a1a16956a6bbea764480c1b80f2e45763" title="Lock the mutex. ">lock()</a> behaves as usual, and the following ones have no effect. However, you must call <a class="el" href="classsf_1_1Mutex.php#ade71268ffc5e80756652058b01c23c33" title="Unlock the mutex. ">unlock()</a> exactly as many times as you called <a class="el" href="classsf_1_1Mutex.php#a1a16956a6bbea764480c1b80f2e45763" title="Lock the mutex. ">lock()</a>. If you don't, the mutex won't be released.</p>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Lock.php" title="Automatic wrapper for locking and unlocking mutexes. ">sf::Lock</a> </dd></dl>

<p>Definition at line <a class="el" href="Mutex_8hpp_source.php#l00047">47</a> of file <a class="el" href="Mutex_8hpp_source.php">Mutex.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="a9bd52a48320fd7b6db8a78037aad276e"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Mutex::Mutex </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>

</div>
</div>
<a class="anchor" id="a9f76a67b7b6d3918131a692179b4e3f2"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Mutex::~Mutex </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Destructor. </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="a1a16956a6bbea764480c1b80f2e45763"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Mutex::lock </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p><a class="el" href="classsf_1_1Lock.php" title="Automatic wrapper for locking and unlocking mutexes. ">Lock</a> the mutex. </p>
<p>If the mutex is already locked in another thread, this call will block the execution until the mutex is released.</p>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Mutex.php#ade71268ffc5e80756652058b01c23c33" title="Unlock the mutex. ">unlock</a> </dd></dl>

</div>
</div>
<a class="anchor" id="ade71268ffc5e80756652058b01c23c33"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Mutex::unlock </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Unlock the mutex. </p>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Mutex.php#a1a16956a6bbea764480c1b80f2e45763" title="Lock the mutex. ">lock</a> </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="Mutex_8hpp_source.php">Mutex.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>