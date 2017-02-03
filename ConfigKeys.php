<?php

/*
 * Descriptors of configuration keys
 * for config
 *
 * Reminder: The maximum length of keys cannot exceed 64 chars. This is the limit for the name attribute in form fields.
 */

$keys = array(
	'cluster.messagebus.debug' => array(
		'type' => 'boolean',
		'default' => false
	),
	'cluster.messagebus.enabled' => array(
		'type' => 'boolean',
		'default' => false
	),
	'cluster.messagebus.sns.region' => array(
		'type' => 'string',
		'default' => ''
	),
	'cluster.messagebus.sns.api_key' => array(
		'type' => 'string',
		'default' => ''
	),
	'cluster.messagebus.sns.api_secret' => array(
		'type' => 'string',
		'default' => ''
	),
	'cluster.messagebus.sns.topic_arn' => array(
		'type' => 'string',
		'default' => ''
	),

	'dbcache.configuration_overloaded' => array(
		'type' => 'boolean',
		'default' => false
	),
	'dbcache.debug' => array(
		'type' => 'boolean',
		'default' => false
	),
	'dbcache.enabled' => array(
		'type' => 'boolean',
		'default' => false
	),
	'dbcache.engine' => array(
		'type' => 'string',
		'default' => 'file'
	),
	'dbcache.file.gc' => array(
		'type' => 'integer',
		'default' => 3600
	),
	'dbcache.file.locking' => array(
		'type' => 'boolean',
		'default' => false
	),
	'dbcache.lifetime' => array(
		'type' => 'integer',
		'default' => 180
	),
	'dbcache.memcached.persistent' => array(
		'type' => 'boolean',
		'default' => true
	),
	'dbcache.memcached.aws_autodiscovery' => array(
		'type' => 'boolean',
		'default' => false
	),
	'dbcache.memcached.servers' => array(
		'type' => 'array',
		'default' => array(
			'127.0.0.1:11211'
		)
	),
	'dbcache.memcached.username' => array(
		'type' => 'string',
		'default' => ''
	),
	'dbcache.memcached.password' => array(
		'type' => 'string',
		'default' => ''
	),
	'dbcache.redis.persistent' => array(
		'type' => 'boolean',
		'default' => true
	),
	'dbcache.redis.servers' => array(
		'type' => 'array',
		'default' => array(
			'127.0.0.1:6379'
		)
	),
	'dbcache.redis.password' => array(
		'type' => 'string',
		'default' => ''
	),
	'dbcache.redis.dbid' => array(
		'type' => 'integer',
		'default' => 0
	),
	'dbcache.reject.constants' => array(
		'type' => 'array',
		'default' => array(
			'APP_REQUEST',
			'DOING_CRON',
			'DONOTCACHEDB',
			'SHORTINIT',   // WPMU and WP 3.0 short init
			'XMLRPC_REQUEST'
		)
	),
	'dbcache.reject.cookie' => array(
		'type' => 'array',
		'default' => array()
	),
	'dbcache.reject.logged' => array(
		'type' => 'boolean',
		'default' => true
	),
	'dbcache.reject.sql' => array(
		'type' => 'array',
		'default' => array(
			'gdsr_',
			'wp_rg_',
			'_wp_session_'
		)
	),
	'dbcache.reject.uri' => array(
		'type' => 'array',
		'default' => array()
	),
	'dbcache.reject.words' => array(
		'type' => 'array',
		'default' =>  array(
			'^\s*insert\b',
			'^\s*delete\b',
			'^\s*update\b',
			'^\s*replace\b',
			'^\s*create\b',
			'^\s*alter\b',
			'^\s*show\b',
			'^\s*set\b',
			'\bautoload\s+=\s+\'yes\'',
			'\bsql_calc_found_rows\b',
			'\bfound_rows\(\)'
		)
	),

	'objectcache.configuration_overloaded' => array(
		'type' => 'boolean',
		'default' => false
	),
	'objectcache.enabled' => array(
		'type' => 'boolean',
		'default' => false
	),
	'objectcache.debug' => array(
		'type' => 'boolean',
		'default' => false
	),
	'objectcache.enabled_for_wp_admin' => array(
		'type' => 'boolean',
		'default' => true
	),
	'objectcache.fallback_transients' => array(
		'type' => 'boolean',
		'default' => true
	),
	'objectcache.engine' => array(
		'type' => 'string',
		'default' => 'file'
	),
	'objectcache.file.gc' => array(
		'type' => 'integer',
		'default' => 3600
	),
	'objectcache.file.locking' => array(
		'type' => 'boolean',
		'default' => false
	),
	'objectcache.memcached.servers' => array(
		'type' => 'array',
		'default' => array(
			'127.0.0.1:11211'
		)
	),
	'objectcache.memcached.persistent' => array(
		'type' => 'boolean',
		'default' => true
	),
	'objectcache.memcached.aws_autodiscovery' => array(
		'type' => 'boolean',
		'default' => false
	),
	'objectcache.memcached.username' => array(
		'type' => 'string',
		'default' => ''
	),
	'objectcache.memcached.password' => array(
		'type' => 'string',
		'default' => ''
	),
	'objectcache.redis.persistent' => array(
		'type' => 'boolean',
		'default' => true
	),
	'objectcache.redis.servers' => array(
		'type' => 'array',
		'default' => array(
			'127.0.0.1:6379'
		)
	),
	'objectcache.redis.password' => array(
		'type' => 'string',
		'default' => ''
	),
	'objectcache.redis.dbid' => array(
		'type' => 'integer',
		'default' => 0
	),
	'objectcache.groups.global' => array(
		'type' => 'array',
		'default' => array(
			'users',
			'userlogins',
			'usermeta',
			'user_meta',
			'site-transient',
			'site-options',
			'site-lookup',
			'blog-lookup',
			'blog-details',
			'rss',
			'global-posts'
		)
	),
	'objectcache.groups.nonpersistent' => array(
		'type' => 'array',
		'default' => array(
			'comment',
			'counts',
			'plugins'
		)
	),
	'objectcache.lifetime' => array(
		'type' => 'integer',
		'default' => 180
	),
	'objectcache.purge.all' => array(
		'type' => 'boolean',
		'default' => false
	),

	'pgcache.configuration_overloaded' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.enabled' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.comment_cookie_ttl' => array(
		'type' => 'integer',
		'default' => 1800
	),
	'pgcache.debug' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.engine' => array(
		'type' => 'string',
		'default' => 'file_generic'
	),
	'pgcache.file.gc' => array(
		'type' => 'integer',
		'default' => 3600
	),
	'pgcache.file.nfs' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.file.locking' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.lifetime' => array(
		'type' => 'integer',
		'default' => 3600
	),
	'pgcache.memcached.servers' => array(
		'type' => 'array',
		'default' => array(
			'127.0.0.1:11211'
		)
	),
	'pgcache.memcached.persistent' => array(
		'type' => 'boolean',
		'default' => true
	),
	'pgcache.memcached.aws_autodiscovery' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.memcached.username' => array(
		'type' => 'string',
		'default' => ''
	),
	'pgcache.memcached.password' => array(
		'type' => 'string',
		'default' => ''
	),
	'pgcache.redis.persistent' => array(
		'type' => 'boolean',
		'default' => true
	),
	'pgcache.redis.servers' => array(
		'type' => 'array',
		'default' => array(
			'127.0.0.1:6379'
		)
	),
	'pgcache.redis.password' => array(
		'type' => 'string',
		'default' => ''
	),
	'pgcache.redis.dbid' => array(
		'type' => 'integer',
		'default' => 0
	),
	'pgcache.cache.query' => array(
		'type' => 'boolean',
		'default' => true
	),
	'pgcache.cache.home' => array(
		'type' => 'boolean',
		'default' => true
	),
	'pgcache.cache.feed' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.cache.nginx_handle_xml' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.cache.ssl' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.cache.404' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.cache.headers' => array(
		'type' => 'array',
		'default' => array(
			'Last-Modified',
			'Content-Type',
			'X-Pingback',
			'P3P',
			'Link'
		)
	),
	'pgcache.compatibility' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.remove_charset' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.accept.uri' => array(
		'type' => 'array',
		'default' => array(
			'sitemap(_index)?\.xml(\.gz)?',
			'([a-z0-9_\-]+)?sitemap\.xsl',
			'[a-z0-9_\-]+-sitemap([0-9]+)?\.xml(\.gz)?'
		)
	),
	'pgcache.accept.files' => array(
		'type' => 'array',
		'default' => array(
			'wp-comments-popup.php',
			'wp-links-opml.php',
			'wp-locations.php'
		)
	),
	'pgcache.accept.qs' => array(
		'type' => 'array',
		'default' => array()
	),
	'pgcache.late_init' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.late_caching' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.mirrors.enabled' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.mirrors.home_urls' => array(
		'type' => 'array',
		'default' => array()
	),
	'pgcache.reject.front_page' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.reject.logged' => array(
		'type' => 'boolean',
		'default' => true
	),
	'pgcache.reject.logged_roles' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.reject.roles' => array(
		'type' => 'array',
		'default' => array()
	),
	'pgcache.reject.uri' => array(
		'type' => 'array',
		'default' => array(
			'wp-.*\.php',
			'index\.php'
		)
	),
    'pgcache.reject.categories' => array(
        'type' => 'array',
        'default' => array()
    ),
    'pgcache.reject.tags' => array(
        'type' => 'array',
        'default' => array()
    ),
    'pgcache.reject.authors' => array(
        'type' => 'array',
        'default' => array()
    ),
    'pgcache.reject.custom' => array(
        'type' => 'array',
        'default' => array(
            'w3tc=dontcache'
        )
    ),
	'pgcache.reject.ua' => array(
		'type' => 'array',
		'default' => array()
	),
	'pgcache.reject.cookie' => array(
		'type' => 'array',
		'default' => array( 'wptouch_switch_toggle' )
	),
	'pgcache.reject.request_head' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.purge.front_page' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.purge.home' => array(
		'type' => 'boolean',
		'default' => true
	),
	'pgcache.purge.post' => array(
		'type' => 'boolean',
		'default' => true
	),
	'pgcache.purge.comments' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.purge.author' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.purge.terms' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.purge.archive.daily' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.purge.archive.monthly' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.purge.archive.yearly' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.purge.feed.blog' => array(
		'type' => 'boolean',
		'default' => true
	),
	'pgcache.purge.feed.comments' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.purge.feed.author' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.purge.feed.terms' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.purge.feed.types' => array(
		'type' => 'array',
		'default' => array(
			'rss2'
		)
	),
	'pgcache.purge.postpages_limit' => array(
		'type' => 'integer',
		'default' => 10
	),
	'pgcache.purge.pages' => array(
		'type' => 'array',
		'default' => array()
	),
	'pgcache.purge.sitemap_regex' => array(
		'type' => 'string',
		'default' => '([a-z0-9_\-]*?)sitemap([a-z0-9_\-]*)?\.xml'
	),
	'pgcache.prime.enabled' => array(
		'type' => 'boolean',
		'default' => false
	),
	'pgcache.prime.interval' => array(
		'type' => 'integer',
		'default' => 900
	),
	'pgcache.prime.limit' => array(
		'type' => 'integer',
		'default' => 10
	),
	'pgcache.prime.sitemap' => array(
		'type' => 'string',
		'default' => ''
	),
	'pgcache.prime.post.enabled' => array(
		'type' => 'boolean',
		'default' => false
	),

	'stats.enabled' => array(
		'type' => 'boolean',
		'default' => false
	),

	'minify.configuration_overloaded' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.enabled' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.auto' => array(
		'type' => 'boolean',
		'default' => true
	),
	'minify.debug' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.engine' => array(
		'type' => 'string',
		'default' => 'file'
	),
	'minify.error.notification' => array(
		'type' => 'string',
		'default' => ''
	),
	'minify.file.gc' => array(
		'type' => 'integer',
		'default' => 86400
	),
	'minify.file.nfs' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.file.locking' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.memcached.servers' => array(
		'type' => 'array',
		'default' => array(
			'127.0.0.1:11211'
		)
	),
	'minify.memcached.persistent' => array(
		'type' => 'boolean',
		'default' => true
	),
	'minify.memcached.aws_autodiscovery' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.memcached.username' => array(
		'type' => 'string',
		'default' => ''
	),
	'minify.memcached.password' => array(
		'type' => 'string',
		'default' => ''
	),
	'minify.redis.persistent' => array(
		'type' => 'boolean',
		'default' => true
	),
	'minify.redis.servers' => array(
		'type' => 'array',
		'default' => array(
			'127.0.0.1:6379'
		)
	),
	'minify.redis.password' => array(
		'type' => 'string',
		'default' => ''
	),
	'minify.redis.dbid' => array(
		'type' => 'integer',
		'default' => 0
	),
	'minify.rewrite' => array(
		'type' => 'boolean',
		'default' => true
	),
	'minify.options' => array(
		'type' => 'array',
		'default' => array()
	),
	'minify.symlinks' => array(
		'type' => 'array',
		'default' => array()
	),
	'minify.lifetime' => array(
		'type' => 'integer',
		'default' => 86400
	),
	'minify.upload' => array(
		'type' => 'boolean',
		'default' => true
	),
	'minify.html.enable' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.html.engine' => array(
		'type' => 'string',
		'default' => 'html'
	),
	'minify.html.reject.feed' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.html.inline.css' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.html.inline.js' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.html.strip.crlf' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.html.comments.ignore' => array(
		'type' => 'array',
		'default' => array(
			'google_ad_',
			'RSPEAK_'
		)
	),
	'minify.css.combine' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.css.enable' => array(
		'type' => 'boolean',
		'default' => true
	),
	'minify.css.engine' => array(
		'type' => 'string',
		'default' => 'css'
	),
	'minify.css.http2push' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.css.strip.comments' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.css.strip.crlf' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.css.embed' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.css.imports' => array(
		'type' => 'string',
		'default' => ''
	),
	'minify.css.groups' => array(
		'type' => 'array',
		'default' => array()
	),
	'minify.js.http2push' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.js.enable' => array(
		'type' => 'boolean',
		'default' => true
	),
	'minify.js.engine' => array(
		'type' => 'string',
		'default' => 'js'
	),
	'minify.js.combine.header' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.js.header.embed_type' => array(
		'type' => 'string',
		'default' => 'blocking'
	),
	'minify.js.combine.body' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.js.body.embed_type' => array(
		'type' => 'string',
		'default' => 'blocking'
	),
	'minify.js.combine.footer' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.js.footer.embed_type' => array(
		'type' => 'string',
		'default' => 'blocking'
	),
	'minify.js.strip.comments' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.js.strip.crlf' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.js.groups' => array(
		'type' => 'array',
		'default' => array()
	),
	'minify.yuijs.path.java' => array(
		'type' => 'string',
		'default' => 'java'
	),
	'minify.yuijs.path.jar' => array(
		'type' => 'string',
		'default' => 'yuicompressor.jar'
	),
	'minify.yuijs.options.line-break' => array(
		'type' => 'integer',
		'default' => 5000
	),
	'minify.yuijs.options.nomunge' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.yuijs.options.preserve-semi' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.yuijs.options.disable-optimizations' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.yuicss.path.java' => array(
		'type' => 'string',
		'default' => 'java'
	),
	'minify.yuicss.path.jar' => array(
		'type' => 'string',
		'default' => 'yuicompressor.jar'
	),
	'minify.yuicss.options.line-break' => array(
		'type' => 'integer',
		'default' => 5000
	),
	'minify.ccjs.path.java' => array(
		'type' => 'string',
		'default' => 'java'
	),
	'minify.ccjs.path.jar' => array(
		'type' => 'string',
		'default' => 'compiler.jar'
	),
	'minify.ccjs.options.compilation_level' => array(
		'type' => 'string',
		'default' => 'SIMPLE_OPTIMIZATIONS'
	),
	'minify.ccjs.options.formatting' => array(
		'type' => 'string',
		'default' => ''
	),
	'minify.csstidy.options.remove_bslash' => array(
		'type' => 'boolean',
		'default' => true
	),
	'minify.csstidy.options.compress_colors' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.csstidy.options.compress_font-weight' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.csstidy.options.lowercase_s' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.csstidy.options.optimise_shorthands' => array(
		'type' => 'integer',
		'default' => 0
	),
	'minify.csstidy.options.remove_last_;' => array(
		'type' => 'boolean',
		'default' => false
	),
    'minify.csstidy.options.remove_space_before_important' => array(
        'type' => 'boolean',
        'default' => false
    ),
	'minify.csstidy.options.case_properties' => array(
		'type' => 'integer',
		'default' => 1
	),
	'minify.csstidy.options.sort_properties' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.csstidy.options.sort_selectors' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.csstidy.options.merge_selectors' => array(
		'type' => 'integer',
		'default' => 0
	),
    'minify.csstidy.options.discard_invalid_selectors' => array(
        'type' => 'boolean',
        'default' => false
    ),
	'minify.csstidy.options.discard_invalid_properties' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.csstidy.options.css_level' => array(
		'type' => 'string',
		'default' => 'CSS3.0'
	),
	'minify.csstidy.options.preserve_css' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.csstidy.options.timestamp' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.csstidy.options.template' => array(
		'type' => 'string',
		'default' => 'highest_compression'
	),
	'minify.htmltidy.options.clean' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.htmltidy.options.hide-comments' => array(
		'type' => 'boolean',
		'default' => true
	),
	'minify.htmltidy.options.wrap' => array(
		'type' => 'integer',
		'default' => 0
	),
	'minify.reject.logged' => array(
		'type' => 'boolean',
		'default' => false
	),
	'minify.reject.ua' => array(
		'type' => 'array',
		'default' => array()
	),
	'minify.reject.uri' => array(
		'type' => 'array',
		'default' => array()
	),
	'minify.reject.files.js' => array(
		'type' => 'array',
		'default' => array()
	),
	'minify.reject.files.css' => array(
		'type' => 'array',
		'default' => array()
	),
	'minify.cache.files' => array(
		'type' => 'array',
		'default' => array( '' )
	),
	'minify.cache.files_regexp' => array(
		'type' => 'boolean',
		'default' => false
	),

	'cdn.configuration_overloaded' => array(
		'type' => 'boolean',
		'default' => false
	),
	'cdn.enabled' => array(
		'type' => 'boolean',
		'default' => false
	),
	'cdn.debug' => array(
		'type' => 'boolean',
		'default' => false
	),
	'cdn.engine' => array(
		'type' => 'string',
		'default' => 'maxcdn'
	),
	'cdn.uploads.enable' => array(
		'type' => 'boolean',
		'default' => true
	),
	'cdn.includes.enable' => array(
		'type' => 'boolean',
		'default' => true
	),
	'cdn.includes.files' => array(
		'type' => 'string',
		'default' => '*.css;*.js;*.gif;*.png;*.jpg;*.xml'
	),
	'cdn.theme.enable' => array(
		'type' => 'boolean',
		'default' => true
	),
	'cdn.theme.files' => array(
		'type' => 'string',
		'default' => '*.css;*.js;*.gif;*.png;*.jpg;*.ico;*.ttf;*.otf,*.woff,*.less'
	),
	'cdn.minify.enable' => array(
		'type' => 'boolean',
		'default' => true
	),
	'cdn.custom.enable' => array(
		'type' => 'boolean',
		'default' => true
	),
	'cdn.custom.files' => array(
		'type' => 'array',
		'default' => array(
			'favicon.ico',
			'{wp_content_dir}/gallery/*',
			'{wp_content_dir}/uploads/avatars/*',
			'{plugins_dir}/wordpress-seo/css/xml-sitemap.xsl',
			'{plugins_dir}/wp-minify/min*',
			'{plugins_dir}/*.js',
			'{plugins_dir}/*.css',
			'{plugins_dir}/*.gif',
			'{plugins_dir}/*.jpg',
			'{plugins_dir}/*.png',
		)
	),
	'cdn.import.files' => array(
		'type' => 'string',
		'default' => false
	),
	'cdn.queue.interval' => array(
		'type' => 'integer',
		'default' => 900
	),
	'cdn.queue.limit' => array(
		'type' => 'integer',
		'default' => 25
	),
	'cdn.force.rewrite' => array(
		'type' => 'boolean',
		'default' => false
	),
	'cdn.autoupload.enabled' => array(
		'type' => 'boolean',
		'default' => false
	),
	'cdn.autoupload.interval' => array(
		'type' => 'integer',
		'default' => 3600
	),
	'cdn.canonical_header' => array(
		'type' => 'boolean',
		'default' => false
	),

	'cdn.ftp.host' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.ftp.type' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.ftp.user' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.ftp.pass' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.ftp.path' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.ftp.pasv' => array(
		'type' => 'boolean',
		'default' => false
	),
	'cdn.ftp.domain' => array(
		'type' => 'array',
		'default' => array()
	),
	'cdn.ftp.ssl' => array(
		'type' => 'string',
		'default' => 'auto'
	),

	'cdn.google_drive.client_id' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.google_drive.refresh_token' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.google_drive.folder.id' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.google_drive.folder.title' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.google_drive.folder.url' => array(
		'type' => 'string',
		'default' => ''
	),

	'cdn.highwinds.account_hash' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.highwinds.api_token' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.highwinds.host.hash_code' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.highwinds.host.domains' => array(
		'type' => 'array',
		'default' => array()
	),
	'cdn.highwinds.ssl' => array(
		'type' => 'string',
		'default' => 'auto'
	),

	'cdn.s3.key' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.s3.secret' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.s3.bucket' => array(
		'type' => 'string',
		'default' => ''
	),
    'cdn.s3.bucket.location' => array(
        'type' => 'string',
        'default' => 'us-east-1'
    ),
	'cdn.s3.cname' => array(
		'type' => 'array',
		'default' => array()
	),
	'cdn.s3.ssl' => array(
		'type' => 'string',
		'default' => 'auto'
	),

	'cdn.s3_compatible.api_host' => array(
		'type' => 'string',
		'default' => 'auto'
	),

	'cdn.cf.key' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.cf.secret' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.cf.bucket' => array(
		'type' => 'string',
		'default' => ''
	),
    'cdn.cf.bucket.location' => array(
        'type' => 'string',
        'default' => 'us-east-1'
    ),
	'cdn.cf.id' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.cf.cname' => array(
		'type' => 'array',
		'default' => array()
	),
	'cdn.cf.ssl' => array(
		'type' => 'string',
		'default' => 'auto'
	),
	'cdn.cf2.key' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.cf2.secret' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.cf2.id' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.cf2.cname' => array(
		'type' => 'array',
		'default' => array()
	),
	'cdn.cf2.ssl' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.rscf.user' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.rscf.key' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.rscf.location' => array(
		'type' => 'string',
		'default' => 'us'
	),
	'cdn.rscf.container' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.rscf.cname' => array(
		'type' => 'array',
		'default' => array()
	),
	'cdn.rscf.ssl' => array(
		'type' => 'string',
		'default' => 'auto'
	),
	'cdn.rackspace_cdn.user_name' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.rackspace_cdn.api_key' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.rackspace_cdn.region' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.rackspace_cdn.service.access_url' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.rackspace_cdn.service.id' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.rackspace_cdn.service.name' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.rackspace_cdn.service.protocol' => array(
		'type' => 'string',
		'default' => 'http'
	),
	'cdn.rackspace_cdn.domains' => array(
		'type' => 'array',
		'default' => array()
	),

	'cdn.azure.user' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.azure.key' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.azure.container' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.azure.cname' => array(
		'type' => 'array',
		'default' => array()
	),
	'cdn.azure.ssl' => array(
		'type' => 'string',
		'default' => 'auto'
	),
	'cdn.mirror.domain' => array(
		'type' => 'array',
		'default' => array()
	),
	'cdn.mirror.ssl' => array(
		'type' => 'string',
		'default' => 'auto'
	),
	'cdn.netdna.alias' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.netdna.consumerkey' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.netdna.consumersecret' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.netdna.authorization_key' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.netdna.domain' => array(
		'type' => 'array',
		'default' => array()
	),
	'cdn.netdna.ssl' => array(
		'type' => 'string',
		'default' => 'auto'
	),
	'cdn.netdna.zone_id' => array(
		'type' => 'integer',
		'default' => 0
	),
	'cdn.maxcdn.authorization_key' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.maxcdn.domain' => array(
		'type' => 'array',
		'default' => array()
	),
	'cdn.maxcdn.ssl' => array(
		'type' => 'string',
		'default' => 'auto'
	),
	'cdn.maxcdn.zone_id' => array(
		'type' => 'integer',
		'default' => 0
	),
	'cdn.cotendo.username' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.cotendo.password' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.cotendo.zones' => array(
		'type' => 'array',
		'default' => array()
	),
	'cdn.cotendo.domain' => array(
		'type' => 'array',
		'default' => array()
	),
	'cdn.cotendo.ssl' => array(
		'type' => 'string',
		'default' => 'auto'
	),
	'cdn.akamai.username' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.akamai.password' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.akamai.email_notification' => array(
		'type' => 'array',
		'default' => array()
	),
	'cdn.akamai.action' => array(
		'type' => 'string',
		'default' => 'invalidate'
	),
	'cdn.akamai.zone' => array(
		'type' => 'string',
		'default' => 'production'
	),
	'cdn.akamai.domain' => array(
		'type' => 'array',
		'default' => array()
	),
	'cdn.akamai.ssl' => array(
		'type' => 'string',
		'default' => 'auto'
	),
	'cdn.edgecast.account' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.edgecast.token' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.edgecast.domain' => array(
		'type' => 'array',
		'default' => array()
	),
	'cdn.edgecast.ssl' => array(
		'type' => 'string',
		'default' => 'auto'
	),
	'cdn.att.account' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.att.token' => array(
		'type' => 'string',
		'default' => ''
	),
	'cdn.att.domain' => array(
		'type' => 'array',
		'default' => array()
	),
	'cdn.att.ssl' => array(
		'type' => 'string',
		'default' => 'auto'
	),
	'cdn.reject.admins' => array(
		'type' => 'boolean',
		'default' => false
	),
	'cdn.reject.logged_roles' => array(
		'type' => 'boolean',
		'default' => false
	),
	'cdn.reject.roles' => array(
		'type' => 'array',
		'default' => array()
	),
	'cdn.reject.ua' => array(
		'type' => 'array',
		'default' => array()
	),
	'cdn.reject.uri' => array(
		'type' => 'array',
		'default' => array()
	),
	'cdn.reject.files' => array(
		'type' => 'array',
		'default' => array(
			'{uploads_dir}/wpcf7_captcha/*',
			'{uploads_dir}/imagerotator.swf',
			'{plugins_dir}/wp-fb-autoconnect/facebook-platform/channel.html'
		)
	),
	'cdn.reject.ssl' => array(
		'type' => 'boolean',
		'default' => false
	),
	'cdn.admin.media_library' => array(
		'type' => 'boolean',
		'default' => false
	),
	'varnish.configuration_overloaded' => array(
		'type' => 'boolean',
		'default' => false
	),
	'varnish.enabled' => array(
		'type' => 'boolean',
		'default' => false
	),
	'varnish.debug' => array(
		'type' => 'boolean',
		'default' => false
	),
	'varnish.servers' => array(
		'type' => 'array',
		'default' => array()
	),

	'browsercache.configuration_overloaded' => array(
		'type' => 'boolean',
		'default' => false
	),
	'browsercache.enabled' => array(
		'type' => 'boolean',
		'default' => true
	),
	'browsercache.rewrite' => array(
		'type' => 'boolean',
		'default' => false
	),
	'browsercache.no404wp' => array(
		'type' => 'boolean',
		'default' => false
	),
	'browsercache.no404wp.exceptions' => array(
		'type' => 'array',
		'default' => array(
			'robots\.txt',
			'[a-z0-9_\-]*sitemap[a-z0-9_\-]*\.(xml|xsl|html)(\.gz)?'
		)
	),
	'browsercache.cssjs.last_modified' => array(
		'type' => 'boolean',
		'default' => true
	),
	'browsercache.cssjs.compression' => array(
		'type' => 'boolean',
		'default' => true
	),
	'browsercache.cssjs.expires' => array(
		'type' => 'boolean',
		'default' => false
	),
	'browsercache.cssjs.lifetime' => array(
		'type' => 'integer',
		'default' => 31536000
	),
	'browsercache.cssjs.nocookies' => array(
		'type' => 'boolean',
		'default' => false
	),
	'browsercache.cssjs.cache.control' => array(
		'type' => 'boolean',
		'default' => false
	),
	'browsercache.cssjs.cache.policy' => array(
		'type' => 'string',
		'default' => 'cache_public_maxage'
	),
	'browsercache.cssjs.etag' => array(
		'type' => 'boolean',
		'default' => false
	),
	'browsercache.cssjs.w3tc' => array(
		'type' => 'boolean',
		'default' => false
	),
	'browsercache.cssjs.replace' => array(
		'type' => 'boolean',
		'default' => false
	),
	'browsercache.html.compression' => array(
		'type' => 'boolean',
		'default' => true
	),
	'browsercache.html.last_modified' => array(
		'type' => 'boolean',
		'default' => true
	),
	'browsercache.html.expires' => array(
		'type' => 'boolean',
		'default' => false
	),
	'browsercache.html.lifetime' => array(
		'type' => 'integer',
		'default' => 3600
	),
	'browsercache.html.cache.control' => array(
		'type' => 'boolean',
		'default' => false
	),
	'browsercache.html.cache.policy' => array(
		'type' => 'string',
		'default' => 'cache_public_maxage'
	),
	'browsercache.html.etag' => array(
		'type' => 'boolean',
		'default' => false
	),
	'browsercache.html.w3tc' => array(
		'type' => 'boolean',
		'default' => false
	),
	'browsercache.html.replace' => array(
		'type' => 'boolean',
		'default' => false
	),
	'browsercache.other.last_modified' => array(
		'type' => 'boolean',
		'default' => true
	),
	'browsercache.other.compression' => array(
		'type' => 'boolean',
		'default' => true
	),
	'browsercache.other.expires' => array(
		'type' => 'boolean',
		'default' => false
	),
	'browsercache.other.lifetime' => array(
		'type' => 'integer',
		'default' => 31536000
	),
	'browsercache.other.nocookies' => array(
		'type' => 'boolean',
		'default' => false
	),
	'browsercache.other.cache.control' => array(
		'type' => 'boolean',
		'default' => false
	),
	'browsercache.other.cache.policy' => array(
		'type' => 'string',
		'default' => 'cache_public_maxage'
	),
	'browsercache.other.etag' => array(
		'type' => 'boolean',
		'default' => false
	),
	'browsercache.other.w3tc' => array(
		'type' => 'boolean',
		'default' => false
	),
    'browsercache.security.session.cookie_httponly' => array(
        'type' => 'boolean',
        'default' => false
    ),
    'browsercache.security.session.cookie_secure' => array(
        'type' => 'boolean',
        'default' => false
    ),
    'browsercache.security.session.use_only_cookies' => array(
        'type' => 'boolean',
        'default' => true
    ),
    'browsercache.security.hsts' => array(
        'type' => 'boolean',
        'default' => false
    ),
    'browsercache.security.hsts.directive' => array(
        'type' => 'string',
        'default' => 'maxage'
    ),
	'browsercache.security.xfo' => array(
		'type' => 'boolean',
		'default' => false
	),
	'browsercache.security.xfo.directive' => array(
		'type' => 'string',
		'default' => 'same'
	),
    'browsercache.security.xfo.allow' => array(
            'type' => 'string',
            'default' => ''
    ),
	'browsercache.security.xss' => array(
		'type' => 'boolean',
		'default' => false
	),
    'browsercache.security.xss.directive' => array(
		'type' => 'string',
		'default' => 'block'
	),
    'browsercache.security.xcto' => array(
        'type' => 'boolean',
        'default' => false
    ),
    'browsercache.security.pkp' => array(
        'type' => 'boolean',
        'default' => false
    ),
    'browsercache.security.pkp.pin' => array(
        'type' => 'string',
        'default' => ''
    ),
    'browsercache.security.pkp.pin.backup' => array(
        'type' => 'string',
        'default' => ''
    ),
    'browsercache.security.pkp.extra' => array(
        'type' => 'string',
        'default' => 'maxage'
    ),
    'browsercache.security.pkp.report.url' => array(
        'type' => 'string',
        'default' => ''
    ),
    'browsercache.security.pkp.report.only' => array(
        'type' => 'string',
        'default' => '0'
    ),
    'browsercache.security.csp' => array(
        'type' => 'boolean',
        'default' => false
    ),
    'browsercache.security.csp.base' => array(
        'type' => 'string',
        'default' => ''
    ),
    'browsercache.security.csp.frame' => array(
        'type' => 'string',
        'default' => ''
    ),
    'browsercache.security.csp.connect' => array(
        'type' => 'string',
        'default' => ''
    ),
    'browsercache.security.csp.font' => array(
        'type' => 'string',
        'default' => ''
    ),
    'browsercache.security.csp.script' => array(
        'type' => 'string',
        'default' => ''
    ),
    'browsercache.security.csp.style' => array(
        'type' => 'string',
        'default' => ''
    ),
    'browsercache.security.csp.img' => array(
        'type' => 'string',
        'default' => ''
    ),
    'browsercache.security.csp.media' => array(
        'type' => 'string',
        'default' => ''
    ),
    'browsercache.security.csp.object' => array(
        'type' => 'string',
        'default' => ''
    ),
    'browsercache.security.csp.plugin' => array(
        'type' => 'string',
        'default' => ''
    ),
    'browsercache.security.csp.form' => array(
        'type' => 'string',
        'default' => ''
    ),
    'browsercache.security.csp.frame.ancestors' => array(
        'type' => 'string',
        'default' => ''
    ),
    'browsercache.security.csp.sandbox' => array(
        'type' => 'string',
        'default' => ''
    ),
    'browsercache.security.csp.default' => array(
        'type' => 'string',
        'default' => ''
    ),
	'browsercache.other.replace' => array(
		'type' => 'boolean',
		'default' => false
	),
	'browsercache.replace.exceptions' => array (
		'type' => 'array',
		'default' => array()
	),

	'mobile.configuration_overloaded' => array(
		'type' => 'boolean',
		'default' => false
	),
	'mobile.enabled' => array(
		'type' => 'boolean',
		'default' => false
	),
	'mobile.rgroups' => array(
		'type' => 'array',
		'default' => array(
			'high' => array(
				'theme' => '',
				'enabled' => false,
				'redirect' => '',
				'agents' => array(
					'android',
					'mobi',
					'bada',
					'incognito',
					'kindle',
					'maemo',
					'opera\ mini',
					's8000',
					'series60',
					'ucbrowser',
					'ucweb',
					'webmate',
					'webos'
				)
			),
			'low' => array(
				'theme' => '',
				'enabled' => false,
				'redirect' => '',
				'agents' => array(
					'2\.0\ mmp',
					'240x320',
					'alcatel',
					'amoi',
					'asus',
					'au\-mic',
					'audiovox',
					'avantgo',
					'benq',
					'bird',
					'blackberry',
					'blazer',
					'cdm',
					'cellphone',
					'danger',
					'ddipocket',
					'docomo',
					'dopod',
					'elaine/3\.0',
					'ericsson',
					'eudoraweb',
					'fly',
					'haier',
					'hiptop',
					'hp\.ipaq',
					'htc',
					'huawei',
					'i\-mobile',
					'iemobile',
					'iemobile/7',
					'iemobile/9',
					'j\-phone',
					'kddi',
					'konka',
					'kwc',
					'kyocera/wx310k',
					'lenovo',
					'lg',
					'lg/u990',
					'lge\ vx',
					'midp',
					'midp\-2\.0',
					'mmef20',
					'mmp',
					'mobilephone',
					'mot\-v',
					'motorola',
					'msie\ 10\.0',
					'netfront',
					'newgen',
					'newt',
					'nintendo\ ds',
					'nintendo\ wii',
					'nitro',
					'nokia',
					'novarra',
					'o2',
					'openweb',
					'opera\ mobi',
					'opera\.mobi',
					'p160u',
					'palm',
					'panasonic',
					'pantech',
					'pdxgw',
					'pg',
					'philips',
					'phone',
					'playbook',
					'playstation\ portable',
					'portalmmm',
					'\bppc\b',
					'proxinet',
					'psp',
					'qtek',
					'sagem',
					'samsung',
					'sanyo',
					'sch',
					'sch\-i800',
					'sec',
					'sendo',
					'sgh',
					'sharp',
					'sharp\-tq\-gx10',
					'small',
					'smartphone',
					'softbank',
					'sonyericsson',
					'sph',
					'symbian',
					'symbian\ os',
					'symbianos',
					'toshiba',
					'treo',
					'ts21i\-10',
					'up\.browser',
					'up\.link',
					'uts',
					'vertu',
					'vodafone',
					'wap',
					'willcome',
					'windows\ ce',
					'windows\.ce',
					'winwap',
					'xda',
					'xoom',
					'zte'
				)
			)
		)
	),


	'referrer.configuration_overloaded' => array(
		'type' => 'boolean',
		'default' => false
	),
	'referrer.enabled' => array(
		'type' => 'boolean',
		'default' => false
	),
	'referrer.rgroups' => array(
		'type' => 'array',
		'default' => array(
			'search_engines' => array(
				'theme' => '',
				'enabled' => false,
				'redirect' => '',
				'referrers' => array(
					'google\.com',
					'yahoo\.com',
					'bing\.com',
					'ask\.com',
					'msn\.com'
				)
			)
		)
	),


	'common.edge' => array(
		'type' => 'boolean',
		'default' => false
	),
	'common.support' => array(
		'type' => 'string',
		'default' => ''
	),
	'common.track_usage' => array(
		'type' => 'boolean',
		'default' => false
	),
	'common.tweeted' => array(
		'type' => 'boolean',
		'default' => false
	),
	'config.check' => array(
		'type' => 'boolean',
		'default' => true
	),
	'config.path' => array(
		'type' => 'string',
		'default' => ''
	),
	'widget.latest.items' => array(
		'type' => 'integer',
		'default' => 3
	),
	'widget.latest_news.items' => array(
		'type' => 'integer',
		'default' => 5
	),
	'widget.pagespeed.enabled' => array(
		'type' => 'boolean',
		'default' => true
	),
	'widget.pagespeed.key' => array(
		'type' => 'string',
		'default' => ''
	),
    'widget.pagespeed.key.restrict.referrer' => array(
        'type' => 'string',
        'default' => ''
    ),
	'widget.pagespeed.show_in_admin_bar' => array(
		'type' => 'boolean',
		'default' => false
	),
	'timelimit.email_send' => array(
		'type' => 'integer',
		'default' => 180
	),
	'timelimit.varnish_purge' => array(
		'type' => 'integer',
		'default' => 300
	),
	'timelimit.cache_flush' => array(
		'type' => 'integer',
		'default' => 600
	),
	'timelimit.cache_gc' => array(
		'type' => 'integer',
		'default' => 600
	),
	'timelimit.cdn_upload' => array(
		'type' => 'integer',
		'default' => 600
	),
	'timelimit.cdn_delete' => array(
		'type' => 'integer',
		'default' => 300
	),
	'timelimit.cdn_purge' => array(
		'type' => 'integer',
		'default' => 300
	),
	'timelimit.cdn_import' => array(
		'type' => 'integer',
		'default' => 600
	),
	'timelimit.cdn_test' => array(
		'type' => 'integer',
		'default' => 300
	),
	'timelimit.cdn_container_create' => array(
		'type' => 'integer',
		'default' => 300
	),
	'timelimit.domain_rename' => array(
		'type' => 'integer',
		'default' => 120
	),
	'timelimit.minify_recommendations' => array(
		'type' => 'integer',
		'default' => 600
	),
	'common.instance_id' => array(
		'type' => 'integer',
		'default' => 0
	),
	'common.force_master' => array(
		'type' => 'boolean',
		'default' => true,
		'master_only' => 'true'
	),

	'extensions.active' => array(
		'type' => 'array',
		'default' => array(
			'newrelic' => 'w3-total-cache/Extension_NewRelic_Plugin.php',
			'fragmentcache' => 'w3-total-cache/Extension_FragmentCache_Plugin.php'
		)
	),
	'extensions.active_frontend' => array(
		'type' => 'array',
		'default' => array()
	),
	'plugin.license_key' => array(
		'type' => 'string',
		'default' => '',
		'master_only' => true
	),
	'plugin.type' => array(
		'type' => 'string',
		'default' => '',
		'master_only' => true
	),


	// extensions keys:
	//
	// cloudflare =>
	//   'enabled'
	//   'email'
	//   'key'
	//   'zone'
	//   'widget_interval' => '30'
	//   'widget_cache_mins' => '5'

	// genesis.theme =>
	//   'wp_head' => '0',
	//   'genesis_header' => '1',
	//   'genesis_do_nav' => '0',
	//   'genesis_do_subnav' => '0',
	//   'loop_front_page' => '1',
	//   'loop_terms' => '1',
	//   'flush_terms' => '1',
	//   'loop_single' => '1',
	//   'loop_single_excluded' => '',
	//   'loop_single_genesis_comments' => '0',
	//   'loop_single_genesis_pings' => '0',
	//   'sidebar' => '0',
	//   'sidebar_excluded' => '',
	//   'genesis_footer' => '1',
	//   'wp_footer' => '0',
	//   'reject_logged_roles' => '1',
	//   'reject_logged_roles_on_actions' => array(
	//       0 => 'genesis_loop',
	//       1 => 'wp_head',
	//       2 => 'wp_footer',
	//   ),
	//   'reject_roles' => array(
	//       0 => 'administrator',
	//   ),
	//
	// feedbuner =>
	//   'urls'
	//
	// newrelic.configuration_overloaded
	// newrelic => array
	//   'api_key' => '',
	//   'monitoring_type' => 'apm',
	//   'browser.application_id' => '',
	//   'apm.application_name' => '',
	//   'accept.logged_roles' => true,
	//   'accept.roles' => array('contributor'),
	//   'use_php_function' => true,
	//   'cache_time' => 5,
	//   'enable_xmit' => false,
	//   'include_rum' => true
);



/*
 * Descriptors how sealed configuration keys affect overriding
 */
$overloading_keys_scope = array(
	array(
		'key' => 'browsercache.configuration_overloaded',
		'prefix' => 'browsercache.'
	),
	array(
		'key' => 'cdn.configuration_overloaded',
		'prefix' => 'cdn.'
	),
	array(
		'key' => 'dbcache.configuration_overloaded',
		'prefix' => 'dbcache.'
	),
	array(
		'key' => 'minify.configuration_overloaded',
		'prefix' => 'minify.'
	),
	array(
		'key' => 'objectcache.configuration_overloaded',
		'prefix' => 'objectcache.'
	),
	array(
		'key' => 'fragmentcache.configuration_overloaded',
		'prefix' => 'fragmentcache.'
	),
	array(
		'key' => 'pgcache.configuration_overloaded',
		'prefix' => 'pgcache.'
	),
	array(
		'key' => 'varnish.configuration_overloaded',
		'prefix' => 'varnish.'
	)
);