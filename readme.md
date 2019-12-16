A barebones JS-free WordPress theme for my blog, based on [Tania Rascia's 'Start Wordpress' theme][0].
Gives a transfer size of about 3kb for a 500 word article, with gzip. It doesn't support comments, or many other WP features. Customisations are baked in. It does have some syntax highlighting customisations for C# and SQL, which work with the [WP-GeSHi-Highlight plugin][1].

Abandoned for now as I'm moving towards a markdown and github-based site, with support for more languages.

Usage:
- This folder should go in wp-content/themes on the Wordpress server
- For syntax highlighting, install [WP-GeSHi-Highlight][1]

[0]: https://github.com/taniarascia/startwordpress
[1]: https://wordpress.org/plugins/wp-geshi-highlight/