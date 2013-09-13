<script lang="javascript">
$(document).ready(function() {
      $('.popup').popover();
});
</script>

<h1>Documentation</h1>

<p>On this page you will find a collection of documents that will help you get used to FORM.</p>

<p>For new users, we recommend the tutorial list below. The reference manual is less didactic and puts more emphasis on completeness and preciseness. This document is updated regularly.</p>

<p>For people who would like to understand a bit more about FORM and how to write efficient FORM programs there is <a href="http://www.nikhef.nl/~form/maindir/documentation/lattice.pdf">a paper</a> about the writing of a program to evaluate chromatic polynomials on rectangular lattices. This project was originally suggested by Denny Fliegner.</p>

<h2>Installation</h2>
<p>Installation should be fairly straightforward on most systems.</p>

<h3>Step 1.</h3>
<p>Download the source code or the binaries.</p>
 <a href="https://github.com/vermaseren/form" class="btn btn-primary">Download</a></p>

<h3>Step 2.</h3>
Build and install:
<pre>
autoreconf -i

./configure
make
make install
</pre>

<p><span class="label label-info">Info</span> For detailed instructions, read the INSTALL file.</p>

<h2>Tutorial</h2>
<p>There is also an extensive tutorial available, written by André Heck:</p>

<a href="http://www.nikhef.nl/~form/maindir/documentation/tutorial/book.pdf"><img style="width:50px" src="img/pdf.svg" alt="Download pdf" /> Tutorial</a>

<h2>Reference manual</h2>
<p>The reference manual by Jos Vermaseren is available here:</p>

<a href="http://www.nikhef.nl/~form/maindir/documentation/reference/man.pdf"><img style="width:50px" src="img/pdf.svg" alt="Download pdf" /> Reference</a>

<h2>Courses</h2>
<ul>
  <li>Introductory lectures about FORM -- Nikhef, January 2006
	<ul>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course1/sheets1.pdf">First lecture</a></li>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course1/sheets2.pdf">Second lecture</a></li>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course1/sheets3.pdf">Third lecture</a></li>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course1/sheets4.pdf">Fourth lecture</a></li>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course1/sheets5.pdf">Fifth lecture</a></li>
	</ul>
</li>
  <li><span class="popup" style="text-decoration: none;border-bottom: 1px dashed #000000;"  href="#" data-content="This course consists of 6 sessions. There are three introductory-level sessions and three advanced sessions." rel="popover" data-placement="top" data-trigger="hover">Lectures about the use of FORM -- Nikhef, November 2012</span>
	<ul>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course2/one.pdf">First lecture</a></li>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course2/two.pdf">Second lecture</a></li>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course2/three.pdf">Third lecture</a></li>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course2/four.pdf">Fourth lecture</a>, <a href="http://www.nikhef.nl/~form/maindir/courses/course2/programs4.tgz">code</a></li>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course2/five.pdf">Fifth lecture</a>, <a href="http://www.nikhef.nl/~form/maindir/courses/course2/programs5.tgz">code</a></li>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course2/six.pdf">Sixth lecture</a>, <a href="http://www.nikhef.nl/~form/maindir/courses/course2/programs6.tgz">code</a></li>
	</ul>
  </li>
  <li><span class="popup" style="text-decoration: none;border-bottom: 1px dashed #000000;"  href="#" data-content="This course teaches master students how to calculate simple tree level reactions with the use of computers. The lectures start with the basics of phasespace and phasespace integration by Monte Carlo techniques. At this stage the matrix elements are provided. In the later stages the students learn a bit about FORM and have to calculate their own matrix elements." rel="popover" data-placement="top" data-trigger="hover">Calculations of Particle Reactions -- UAM, Feb./Mar. 2013</span>
	<ul>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course3/manual.pdf">Linux install manual</a></li>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course3/part1.pdf">The introduction. It explains what you need to do to get started</a></li>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course3/part2.pdf">Overal factors and some simple phase space</a></li>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course3/part3.pdf">Monte Carlo integration</a>, <a href="http://www.nikhef.nl/~form/maindir/courses/course2/programs4.tgz">code</a></li>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course3/part4.pdf">Some crosssections</a></li>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course3/kinc.tar.gz">Kinematics routines and examples</a></li>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course3/formprogs.tar.gz">A number of FORM programs that were be used</a></li>
	</ul>
</li>
  <li>Introductory lectures about FORM  -- Zeuthen, CAPP2011, March 21-25 2011
	<ul>
	<li><a href="http://www.nikhef.nl/~form/maindir/courses/course4/c11.pdf">Lecture notes</a></li>
	<li><a href="http://www.nikhef.nl/~form/maindir/courses/course4/capp2011.tgz">Supplements</a></li>
	</ul>
</li>
  <li>Lectures about the use of FORM -- Granada, February 2013
	<ul>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course5/one.pdf">First lecture</a>, <a href="http://www.nikhef.nl/~form/maindir/courses/course5/programs1.tgz">code</a></li>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course5/two.pdf">Second lecture</a>, <a href="http://www.nikhef.nl/~form/maindir/courses/course5/programs2.tgz">code</a></li>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course5/three.pdf">Third lecture</a>, <a href="http://www.nikhef.nl/~form/maindir/courses/course5/programs3.tgz">code</a></li>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course5/four.pdf">Fourth lecture</a>, <a href="http://www.nikhef.nl/~form/maindir/courses/course5/programs4.tgz">code</a></li>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course5/five.pdf">Fifth lecture</a>, <a href="http://www.nikhef.nl/~form/maindir/courses/course5/programs5.tgz">code</a></li>
</ul>
</li>
  <li>Introductory lectures about FORM -- Zeuthen, CAPP2013, March 11-15 2013
	<ul>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course6/one.pdf">First lecture</a>, <a href="http://www.nikhef.nl/~form/maindir/courses/course6/programs1.tgz">code</a></li>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course6/two.pdf">Second lecture</a>, <a href="http://www.nikhef.nl/~form/maindir/courses/course6/programs2.tgz">code</a></li>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course6/three.pdf">Third lecture</a>, <a href="http://www.nikhef.nl/~form/maindir/courses/course6/programs3.tgz">code</a></li>
		<li><a href="http://www.nikhef.nl/~form/maindir/courses/course6/three-a.pdf">Fourth lecture</a>, <a href="http://www.nikhef.nl/~form/maindir/courses/course6/programs3a.tgz">code</a></li>
</ul>
</li>
</ul>

<p><span class="label label-info">Contribute?</span> If you would like to contribute a course you have given or a link to one, please send an e-mail to one of the authors.</p>

<h2>Publications</h2>

<ul>
  <li><a href="http://www.nikhef.nl/~form/maindir/publications/form3.0.pdf">The article about the release of version 3.0</a></li>
  <li><a href="http://www.nikhef.nl/~form/maindir/publications/parform1.pdf">An early paper about ParForm</a></li>
  <li><a href="http://www.nikhef.nl/~form/maindir/publications/parform2.pdf">Another early paper about ParForm</a></li>
  <li><a href="http://www.nikhef.nl/~form/maindir/publications/form3.1.pdf">Shows new features of version 3.1. In particular it shows how to use the tablebase facility</a></li>
  <li><a href="http://www.nikhef.nl/~form/maindir/publications/parform3.pdf">About recent developments with ParFORM</a></li>
  <li><a href="http://www.nikhef.nl/~form/maindir/publications/extform.pdf">Introduces the external channels and shows how to use them</a></li>
  <li><a href="http://www.nikhef.nl/~form/maindir/publications/tform.pdf">About the implementation of the use of multiple threads</a></li>
  <li><a href="http://arxiv.org/pdf/1203.6543.pdf">The article about the release of version 4.0</a></li>
</ul>
