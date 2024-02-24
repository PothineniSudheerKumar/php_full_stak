<?php
	// user roles
	define('ADMIN', 1);
	define('SUB_ADMIN', 2);
	define('STAFF', 3);
	define('ACCOUNTS', 4);
	define('USER', 5);

	// user status
	define('IN_ACTIVE', 0);
	define('ACTIVE', 1);
	define('WAITING_FOR_ADMIN_APPROVAL', 2);
	define('DELETE', '-1');

	// http status codes
	// informational
	define('CONTINUE', 100);

	// successful
	define('OK', 200);

	// redirection
	define('MOVED_PERMANENTLY', 301);
	define('NOT_MODIFIED', 304);
	define('TEMPORARY_REDIRECT', 307);
	define('PERMANENT_REDIRECT', 308);

	// 	client error
	define('BAD_REQUEST', 400);
	define('UNAUTHORIZED', 401);
	define('PAYMENT_REQUIRED', 402);
	define('FORBIDDEN', 403);
	define('NOT_FOUND', 404);
	define('METHOD_NOT_ALLOWED', 405);

	// server error
	define('INTERNAL_SERVER_ERROR', 500);
	define('NOT_IMPLEMENTED', 501);
	define('BAD_GATEWAY', 502);
	define('SERVICE_UNAVAILABLE', 503);
	define('GATEWAY_TIMEOUT', 504);
	define('INSUFFICIENT_STORAGE', 507);
	define('NETWORK_AUTHENTICATION_REQUIRED', 511);

	// result status
	define('SUCCESS', 1);
	define('FAILURE', 0);
?>