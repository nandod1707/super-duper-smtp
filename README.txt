=== Super Duper SMTP ===
Contributors: nandod1707
Tags: gmail smtp, sendgrid smtp, smtp, wp smtp, wpmail, mailer, email, transactional, phpmailer
Requires at least: 3.0.1
Tested up to: 5.4.1
Stable tag: 1.0.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A crazy simple SMTP plugin.

== Description ==

Super Duper SMTP is a very simple to use plugin to send all email through SMTP and avoid delivery issues and extra set up on the WP admin panel. Just install it, activate it, and you're good to go!

The free version of this plugin supports up to 10 emails per month per domain, with premium pricing starting at $1.49 for up to 100 emails per month.

== Installation ==

1. Install the plugin through the 'Add New' page in the plugins menu or download the .zip file and extract it to wp-content/plugins.
2. Activate the plugin through the 'Plugins' menu in WordPress
3. That's it! Your emails are now being sent through an SMTP relay.

= Use of Third Party Services =

Super Duper SMTP relies on an external API currently found at https://api.superdupersmtp.com/. This service takes care of:

- Creating user accounts
- Upgrading and downgrading user accounts
- Finding user accounts and checking sends available
- Sending emails through the Sendgrid SMTP relay

You can find more information on the data we receive and how it's used on our [privacy policy](https://superdupersmtp.com/privacy-policy/).

== Changelog ==
= 1.0.3 =
* Corrected issue not creating user accounts on plugin activation

= 1.0.2 =
* Upadted API URL after migration to prevent error messages from sleeping dev server
* Corrected installation description

= 1.0.1 =
* First release