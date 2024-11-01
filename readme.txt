=== Super Secret ===
Contributors: aizatto
Author: Ezwan Aizat Bin Abdullah Faiz
Tags: privacy, block
Requires at least: 2.9
Tested up to: 3
Stable tag: 0.1
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=FG9V2AV9T37FY&lc=MY&item_name=Ezwan%20Aizat%20Bin%20Abdullah%20Faiz&item_number=Super%20Secret&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted

== Description ==

Super Secret makes your blog private. This means, to whoever is registered on the system. The biggest difference between Super Secret and other membership plugins is that the membership plugin redirects you to the WordPres login page, Super Secret does not. Super Secret will return a proper 404 HTTP Header, telling browsers that the website is not found. It will also display a "Not Found" generic dummy page.

This doesn't mean your website is 100% hidden from everyone who attends it. Users can still see `wp-login.php`

When you publish a post, WordPress notifies other blogs linked to from your post. This could give away the presense of your blog!  Make sure you disable all of these!

Inside "Settings > Discussion Settings > Default article settings":

* Disable <em>"Attempt to notify any blogs linked to from the article."</em></em></em></em>
* Disable <em>"Allow link notifications from other blogs (pingbacks and trackbacks.)"</em>"

Inside "Settings > Privacy Settings":

* Select <em>"I would like to block search engines, but allow normal visitors"</em>.

Other give aways that your blog exist is trying to access 'wp-admin' (without the blackslash at the end). If configured correctly, Apache will redirect you to 'wp-admin/'. This is a clear sign that a blog exists at your domain.

This is not a full proof plugin. There is no such thing as truly secure. You can only deter people.

== Installation ==

1. Upload the `super-secret` folder into your plugin directory.
1. Activate the plugin through the 'Plugins' menu in WordPress

== Screenshots ==

1. When trying to view without logging in on a remote server
1. When trying to view without logging in on a local server

== Why I Created It ==

1. Other plugins that blocked people from viewing the site redirected them to the login page.
1. I wanted to return a proper 404 error, and generic dummy page. This is to prevent anyone or computer form guessing the website exists.
