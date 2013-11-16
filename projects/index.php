<?php
$_PAGETITLE = "Projects";
include("../head.php");
?>

<a href="http://www.github.com/yerich/">View my code on GitHub &raquo;</a>

<h2>Imprinter: A Powerful CMS for Small Newspapers</h2>
<div class="project_image">
	<img src="/images/projects/imprinter.png" alt="Imprinter"/>
	<a href="/images/projects/imprinter/1.png" rel="lightbox[imprinter]">See More Screenshots</a>
	<a href="/images/projects/imprinter/2.png" rel="lightbox[imprinter]" class="hidden"></a>
	<a href="/images/projects/imprinter/3.png" rel="lightbox[imprinter]" class="hidden"></a>
	<a href="/images/projects/imprinter/4.png" rel="lightbox[imprinter]" class="hidden"></a>
	<a href="/images/projects/imprinter/5.png" rel="lightbox[imprinter]" class="hidden"></a>
</div>
<p>In 2012, I worked extensively with <em>Imprint</em>, the Student Newspaper of the University of Waterloo,
	to build a new CMS to power a brand new website. Built in PHP, Imprinter powers the many features of
	<em>Imprint's</em> new website, including:</p>

<ul>
	<li><strong>Usability and Performance Speed:</strong> Features like drag-and-drop image upload and auto-complete
		on many form fields make tedious tasks faster and easier, and a framworkless architecture means that pages
		load quickly, even in high traffic</li>
	<li><strong>Flexible Templating:</strong> Content generation and presentation are seperated with a simple but
		fexible templating engine that adapts Imprinter to a newspaper's specific needs, and a unique "frontpage"
		template automatically fills the homepage and section pages with dynamic content.</li>
	<li><strong>Tagging and Filtering:</strong> Sophisticated filtering lets the most important stories occupy the
		most important spots on the homepage, while several different types of tags let articles be sorted
		quickly and effectively.</li>
</ul>

<p><strong><a href="http://www.github.com/yerich/Imprinter">View Imprinter on GitHub &raquo;</a></strong></p>

<h2>Graphr, The JavaScript Graphing Calculator</h2>
<div class="project_image">
	<img src="/images/projects/graphr.png" alt="Graphr" />
</div>
<p>A fully-fuctional graphing calculator made using HTML5 and JavaScript. By using the <code>&lt;canvas&gt;</code> tag,
	I was able to plot functions without the use of Flash.</p>
	
<p>Though not the only JavaScript graphing calculator,
	Graphr is the only one to support common mathematical functions on graphs, such as finding the first derivative,
	the maxima/minima of a function, the intersection between two functions and the roots of a function.</p>
	
<p>It also sports a intuitive user interface, with mouse panning and scrolling support.</p>

<p><strong><a href="http://www.graphr.org/">Graphr, the JavaScript Graphing Calculator &raquo;</a></strong></p>

<h2>Convertr: Unit Conversion Done Right</h2>
<div class="project_image">
	<iframe src="http://www.fryeapps.com/" border="0"  style="width: 360px; height: 300px; border: 0;" ></iframe>
	A web demo version of Convertr.
</div>
<p>A unit converter is a simple app that performs calculations such as "how many feet are in a mile?" However, 
	because they are so easy to implement, they are often done hastily and without much thought. The result
	is often a barebones app that is cluttered with menus and devoid of features.</p>

<p>Convertr changes that. It is fast, fully-featured, accurate and polished. 
	It features a single input field that predicts the conversion that the
	user is looking for as soon as they start typing. As a result, users can get answers up to 90% faster,
	and they no longer have to navigate multiple menus just to get a simple conversion.</p>

<p><strong><a href="http://apps.microsoft.com/windows/en-ca/app/convertr/481c1d40-84a1-4047-9f2d-6144f6c62f2e">
Convertr, free on the Windows 8 Store &raquo;</strong></a></p>

<h2>Other Projects</h2>
<p><b>Bell High School Website</b> - <a href="http://www.bellhs.net/">www.bellhs.net</a> &mdash; While in high school,
	I created a new CMS for the school's website in PHP. Though it was my first foray into serious programming, it
	nonetheless was quite powerful, with a full-featured web-based CMS, file manager, photo manager and user-friendly
	editors for several databases (such as the staff and courses database).</p>


<p><b><a href="/projects/captchar">Captchar: a simple Captcha in PHP</a></b> &mdash; an implementation
of a CAPTCHA in PHP. Easily readable by humans but very difficult to read by computers. Features a novel
English-like word generator using tuplet analysis to generate random plausible words.</p>

<p><b>The GloBELL Roar</b> - <a href="http://roar.bellhs.net/">roar.bellhs.net</a> &mdash; a digital version of the
school's student newspaper, with an easy-to-use backend that is capable of processing the same articles, images and
features as the print version &mdash; a subset of the features of Imprinter.</p>

<p><b><a href="/projects/ulguestbook">UL Guestbook</a></b> &mdash; a very light-weight guestbook, written in
PHP and designed to be embeddable in a simple website with minimal code work.</p>

<p><b><a href="/projects/calculator/">AJAX Calculator</a></b> &mdash; a relatively complete scientific calculator completed
for a class project. With a fully-functional parser (i.e. not using the eval() function) with support for
hexadecimal, functions, variables and (very) basic statistics. Also partially <a href="/projects/calculator/c_port.cpp.txt">ported to C++</a>.</p>

<p><b><a href="/projects/unitconverter/">AJAX Unit Converter</a></b> - a unit converter that can handle conversions via text input, fast
and easy to use. Gives suggestions for other units if one one measurement is added. Has all the features you'd expect from a unit converter
and much more! This script is also optimized for the iPhone/iPod Touch</p>

<p><b><a href="/userbox/">The Super-Simple Userbox Generator</a></b> &mdash; Userboxes are little boxes that on Wikis
(such as Wikipedia) tell a bit of information about the user, i.e. "This user is fluent in French." This makes
generating the markup much easier. <a href="http://www.yerich.net/test3/userbox-gen.php">Old Version
(different code)</a>.</p>

<?php include("../bottom.php");