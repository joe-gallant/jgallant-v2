<p>Burger menus are a great way to trigger a sites navigation. In this article I will share how I create my burger menus using HTML, CSS and JS. Below is an example of what can be achieved with just a few lines of code.</p>

<div class="burger_demo">

	<div class="burger_menu_demo" onclick="openMenu(this)"><span></span></div>
	<br /><i>Click Me!</i>

	<style>
	.burger_demo {
		width:100%;
		text-align: center;
		margin:40px 0;
	}
	.burger_menu_demo {
	  cursor: pointer;
	  padding:30px 20px;
	  background:#eaeaea;
	  display: inline-block;
	  text-align: center;
	}
	.burger_menu_demo span {
	  background: #000000;
	  height: 2px;
	  width: 32px;
	  display: block;
	  position: relative;
	  transition:all ease 0.1s;
	}
	.burger_menu_demo span:after, .burger_menu_demo span:before {
	  background: #000000;
	  height: 2px;
	  width: 32px;
	  display: block;
	  position: absolute;
	  content: '';
	  left: 0;
	  top: 7px;
	  transition:all ease 0.2s;
	}
	.burger_menu_demo span:before {
	  top: -7px;
	}
	/* Open Menu */
	.burger_menu_demo.open span {
		background:transparent;
	}
	.burger_menu_demo.open span:before {
		transform:rotate(45deg);
		top:0;
	}
	.burger_menu_demo.open span:after {
		transform:rotate(-45deg);
		top:0;
	}
	</style>	

	<script>
	function openMenu(element){
	  element.classList.toggle('open');
	}
	</script>
</div>


<p>I have also created a Gist of the following code here:<br><a href="https://gist.github.com/joe-gallant/7878eceacf2e6e76de774b4a02d0d9cb">https://gist.github.com/joe-gallant/7878eceacf2e6e76de774b4a02d0d9cb</a></p>

<h2>HTML</h2>

<pre class="language-markup line-numbers">
<code>&lt;div class="burger_menu" onclick="openMenu(this)"&gt; 
	&lt;span&gt;&lt;/span&gt;
&lt;div&gt;</code>
</pre>

<p>For the HTML all we need is a containing div and an empty span. Give the div a class and also an 'onclick' event which will trigger the JS function.</p>

<h2>CSS</h2>

<p>The following CSS is split into two parts, the closed state and the open state.</p>

<pre class="language-markup line-numbers">
<code class="language-css">.burger_menu {
  cursor: pointer;
  padding:30px 20px;
  background:#eaeaea;
  display: inline-block;
}

/* Middle line */
.burger_menu span {
  background: #000000;
  height: 3px;
  width: 32px;
  display: block;
  position: relative;
  transition:all ease 0.1s;
}

/* Top & Bottom line */
.burger_menu span:after, .burger_menu span:before {
  background: #000000;
  height: 3px;
  width: 32px;
  display: block;
  position: absolute;
  content: '';
  left: 0;
  top: 7px;
  transition:all ease 0.2s;
}

.burger_menu span:before {
  top: -7px;
}</code>
</pre>

<p>The first block of CSS we are just adding a background colour and a bit of padding. The reason for the padding is so that there is a bigger target area for the users touch/click.</p>

<p>From lines 8 - 31 is where we are defining those famous 3 horizontal lines. The span is the middle line and we are using CSS pseudo elements for the top and bottom lines. Also by increasing the transition slightly on the top and bottom lines we are able to get a smoother animation.</p>

<pre class="language-markup line-numbers">
<code class="language-css">/* Open Menu */
.burger_menu.open span {
	background:transparent;
}
.burger_menu.open span:before {
	transform:rotate(45deg);
	top:0;
}
.burger_menu.open span:after {
	transform:rotate(-45deg);
	top:0;
}</code>
</pre>

<p>Here is where we define the <i>open</i> state of the icon so that the lines can animate into the close icon.</p>

<p>First we want to hide the middle icon by changing the background to transparent. Then we are using CSS transforms to rotate the top and bottom line at a 45 degree angle. We also need to give the a top of 0 to ensure they are centered.</p>

<h2>JavaScript</h2>

<p>Below is the simple function that will get called when a user clicks on the menu icon.</p>

<pre class="language-markup line-numbers">
<code class="language-js">function openMenu(element){
  element.classList.toggle('open');
}</code>
</pre>

<p>All we are doing here is toggling the class 'open' when the user clicks on the element.</p>

<p>So there you have it, that's pretty much how I achieve the burger menu using HTML, CSS & JS. This code can be easily tweaked to achieve different transition effects, check some out below.</p>

<h2>Variations</h2>


<div class="row">

<div class="col-md-2 col-sm-2 burger_demo_variation">
	<div class="burger_menu_demo var1" onclick="openMenu(this)"><span></span></div>
	<style>
	.burger_demo_variation {
		margin-bottom:24px;
	}
	.burger_menu_demo.var1 span {
		transition:all ease 0.5s;
	}
	/* Open Menu */
	.burger_menu_demo.var1.open span {
		transform:rotate(360deg);
		background:transparent;
	}
	</style>	
</div>

<div class="col-md-2 col-sm-2 burger_demo_variation">
	<div class="burger_menu_demo var2" onclick="openMenu(this)"><span></span></div>
	<style>
	.burger_menu_demo.var2.open span:before {
		transform:rotate(0);
		animation: topClose ease 0.2s forwards;
		animation-delay:0.2s;
		-webkit_animation: topClose ease 0.2s forwards;
		-webkit_animation-delay:0.2s;
	}
	.burger_menu_demo.var2.open span:after {
		transform:rotate(0);
		animation: bottomClose ease 0.2s forwards;
		animation-delay:0.2s;
		-webkit-animation: bottomClose ease 0.2s forwards;
		-webkit-animation-delay:0.2s;
	}
	@keyframes topClose {
		0% {
			transform:rotate(0);
		}
		100% {
			transform:rotate(45deg);
		}
	}
	@keyframes bottomClose {
		0% {
			transform:rotate(0);
		}
		100% {
			transform:rotate(-45deg);
		}
	}
	@-webkit-keyframes topClose {
		0% {
			transform:rotate(0);
		}
		100% {
			transform:rotate(45deg);
		}
	}
	@-webkit-keyframes bottomClose {
		0% {
			transform:rotate(0);
		}
		100% {
			transform:rotate(-45deg);
		}
	}
	</style>
</div>

<div class="col-md-2 col-sm-2 burger_demo_variation">
	<div class="burger_menu_demo var3" onclick="openMenu(this)"><div><span class="lines"></span><span class="cross"></span></div></div>
	<style>
	.burger_menu_demo {
		overflow: hidden;
	}
	.burger_menu_demo.var3 span {
		transition:all ease 0.2s;
	}
	/* Open Menu */
	.burger_menu_demo.var3.open span.lines {
		transform:translateY(50px);
	}
	.burger_menu_demo span.cross {
		transform:translateY(-50px);
	}
	.burger_menu_demo.var3.open span.cross {
		transform:translateY(0px);
	}
	.burger_menu_demo span.cross {
		background:transparent;
	}
	.burger_menu_demo span.cross:before {
		transform:rotate(45deg);
		top:0;
	}
	.burger_menu_demo span.cross:after {
		transform:rotate(-45deg);
		top:0;
	}
	.burger_menu_demo.var3.open span.lines:before {
		transform:rotate(0);
		top:-7px;
	}
	.burger_menu_demo.var3.open span.lines:after {
		transform:rotate(0);
		top:7px;
	}
	</style>	
</div>


</div>