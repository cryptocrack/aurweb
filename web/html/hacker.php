<?
include("hacker_po.inc");
include("aur.inc");
set_lang();
html_header();

print __("Your session id is invalid.");
print "<p>\n";
print __("If this problem persists, please contact the site administrator.");
print "</p>\n";

html_footer("\$Id$");
# vim: ts=2 sw=2 noet ft=php
?>
