<?php include "includes/header.php"?>

<h1>Flexbox</h1>
<p>
	The CSS Flexible Box Layout Module, also known as Flexbox, was created to eliminate the use of float or positioning. This one-dimensional layout model deals with a row or a column at a time, making it simpler to design responsive layouts. (Basic Concepts of Flexbox) The purpose is to allow the container to be able to change its items’ width, height, and/or order. It works by causing items to either flex or shrink to fill the space(Krammer, 2018). 
</p>
<p>
Flexbox is best used for smaller layouts because it is dependent on the content within its container. On larger layouts, flexbox can cause the content to shift during loading. CSS Grid would be best for larger layouts since it is less common for this to happen. Grid is a two-dimensional layout model that allows you to alter rows and columns at the same time. (Archibald, 2014) They are similar to one another and the two layouts work well with each other. There really isn’t a right or a wrong one to use. When deciding between the two, consider what you’re building and how you want it to look before you decide. It may require you to use one or the other or both.
</p>
<p>
There are many advantages to using flexbox. It’s supported by all major browsers, though there can be performance issues. The page content can go in any direction. There is the option to have some content visually be reversed or rearranged. It has the ability to have the items be aligned within the container or between it. It can center an element with just 3 lines of code, which makes it so much easier. When it comes to scaling, setting the display to flex on a parent element causes the child elements to have matching heights, despite the amount of content in each element. (Caldwell, 2016) Flexbox is fairly easy to learn and can help you produce an impressive responsive site.
</p>
</section>
<!-- End left col -->

<!-- Start right col -->
<aside>
<h2>Citations</h2>
<p>Archibald, Jake. “Don't Use Flexbox for Overall Page Layout.” JakeArchibald.com, Feb. 2014, jakearchibald.com/2014/dont-use-flexbox-for-page-layout/. </p>

<p>
“Basic Concepts of Flexbox.” MDN Web Docs, developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox.
</p>
<p>
Caldwell, Alex. “When to Use Flexbox.” The Brolik Blog, 20 Apr. 2016, brolik.com/blog/when-to-use-flexbox/.
</p>
<p>
Krammer, Christian. “A Friendly Introduction to Flexbox for Beginners.” SitePoint, 5 July 2018, www.sitepoint.com/flexbox-css-flexible-box-layout/.
</p>
</aside>
<!-- End right col -->
<?php include "includes/footer.php"?>

