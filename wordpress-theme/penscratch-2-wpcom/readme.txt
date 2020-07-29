=== Penscratch 2 ===
Contributors: automattic
Donate link:
Tags: blog, classic-menu, clean, custom-background, custom-colors, custom-header, custom-menu, editor-style, education, flexible-header, full-width-template, gray, infinite-scroll, journal, light, minimal, one-column, responsive-layout, right-sidebar, rtl-language-support, school, simple, site-logo, translation-ready, two-columns, white
Tested up to: 4.7
Stable tag: 4.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Penscratch 2 is based on Underscores http://underscores.me/, (C) 2012-2017 Automattic, Inc.

== Description ==

Penscratch 2 is a fresh, stylish design for sharing your writing. Whether you're working on an analytical essay, an anthology of poems, or a piece of long-form fiction, Penscratch 2 makes for a pleasant reading and writing experience all around.

Choose between a one- or two-column layout by adding widgets, add links to your favorite social networks, customize with a site logo or header image, or add fancy pull quotes throughout your content.

== Licenses ==

* Genericons from genericons.com, SIL Open Font license

== Installation ==

1. In your admin panel, go to Appearance -> Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

== Where can I add widgets? ==

Penscratch 2 includes four widget areas; one optional Sidebar, and three Footer areas. If no widgets are active, the theme automatically uses a narrower content column.

== Does Penscratch 2 use Featured Images? ==

Featured Images are displayed on the blog, archives, single posts, and pages at 656 by 300. Use Jetpack Content Options (jetpack.me) to show or hide the Featured Images if you wish.

== How can I add a site logo? ==

Penscratch 2 includes support for a Site Logo, which appears in the header above the site title at a maximum of 600 pixels wide by 200 pixels tall.

== How can I add links to my social networks? ==

You can add links to a multitude of social services in the footer using Jetpack Social Links (jetpack.me).

1. Create a new Custom Menu, and assign it to the Social Links menu location.
2. Add links to each of your social services using the Links panel.
3. Icons for your social links will appear in the footer.

Linking to any of the following sites will automatically display its icon in your menu:

* CodePen
* Digg
* Dribbble
* Dropbox
* Facebook
* Flickr
* GitHub
* Google+
* Instagram
* LinkedIn
* Email (mailto: links)
* Pinterest
* Pocket
* Polldaddy
* Reddit
* RSS Feed (urls with /feed/)
* StumbleUpon
* Tumblr
* Twitter
* Vimeo
* WordPress
* YouTube

== Special formatting styles ==

Penscratch 2 includes special text styles for pull quotes. See examples and instructions for these on the demo site at http://penscratch2demo.wordpress.com/pull-quotes/

= Quick Specs (all measurements in pixels) =

* The main column width is 656, except in the full-width template, where it's 937.
* The Custom Header is 656, except in the full-width template, where it's 937.
* Featured Images are 656 by 300.
* The sidebar width is 234.
* The three footer widget area widths vary depending on screen size and the number of active widgets.
* The site logo has a maximum width of 600 and height of 200.


== Changelog ==

= 22 November 2018 =
* Minor fixes to Gutenberg implementation, including: * Add missing styles for pre tag in classic editor. * Update button styles, to make sure shine is only applied to buttons without a background, but that the background colour still applies as a fallback.

= 8 November 2018 =
* Add Gutenberg styles and support to theme.

= 5 April 2018 =
* Optimize images

= 7 March 2018 =
* Improve the appearance of contact forms.

= 15 January 2018 =
* Simplify Headstart annotations for all themes in signup.

= 28 August 2017 =
* Ensure full-width page template retains its width when no sidebar is present.

= 24 August 2017 =
* Make sure double separators are not displayed when author is hidden from post meta.

= 6 July 2017 =
* Swap footer credit and social menu order in footer.php - the social menu was originally last, so any links to WordPress.com were screwing up the regex used for the custom footer credits.

= 23 June 2017 =
* Removes unnecessary borders from social icons

= 8 June 2017 =
* Add JavaScript to fire resize event, to fix video aspect ratio issues with video widget. Add styles for lists and too-long text in the text widget.

= 6 June 2017 =
* Fix colour annotations regarding the hover state of links in widgets.

= 31 May 2017 =
* Add missing urlencode for fonts URLs added to the editor.

= 30 May 2017 =
* Update font annotations so custom fonts are applied the same for the site-title on the landing page, as they are for the site-title on subpages.

= 21 April 2017 =
* Add support for Smarter Featured Images, off by default.

= 22 March 2017 =
* add Custom Colors annotations directly to the theme
* move fonts annotations directly into the theme

= 27 February 2017 =
* Style .button class for links

= 24 February 2017 =
* Updated screenshot
* Updated readme.txt
* Fix line height/spacing around tags in the tags widget
* Update comment nav with proper escaping and rasquo/lasquo
* Escape cat links string
* Escaping for comment strings
* Minor code cleanup; fix full-width page template slug in content width function; remove Genericons enqueue from editor styles
* Minor indentation cleanup
* Fix full-width page template to match correct filename; remove bottom border/margins on last widget in each widget area
* Update Headstart annotations; minor cleanup in custom-header.php; escaping for post date function; correct script/style handles in wpcom.php
* Ensure raquo/laquo are able to be translated for RTL languages
* Add POT file
* Remove unused content width global; this is set in functions.php
* Swap out lt/gt symbols for quote symbols

= 23 February 2017 =
* Delete genericons; using inline SVG instead.
* Delete unused expand icon and Genericons enqueue function
* Swap out Genericon expand for standard font in submenu indicators.
* Change out Genericons quote icon for default fonts.
* Add new Genericons icons and implement new menu SVG
* Removing Genericons to update with latest version and SVG; ensure Sticky posts display Featured instead of post date

= 22 February 2017 =
* Begin adding submenu indicators; add a small amount of padding around the site area on mobile devices so custom backgrounds don't get hidden.
* Make font size for tag links smaller
* Updated $content_width functionality; updated headstart annotations; minor tweaks to styles for entry author and transitions
* Widget list indentation and cleanup
* Remove post formats support
* Remove Title tag from header.php.
* Initial commit to repo
