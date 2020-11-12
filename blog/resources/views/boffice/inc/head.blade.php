<!DOCTYPE html>
<html lang="ko"><head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>대방열림 관리자</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/css/back_office/reset.css">
	<link rel="stylesheet" href="/css/back_office/style.css">
	<link rel="stylesheet" href="/css/back_office/dev.css">
	<script src="//code.jquery.com/jquery-1.12.4.js"></script>
	<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="/js/jquery.mask.js"></script>
	<script src="/js/common.js"></script>
	<script src="/js/back_office/common.js"></script>
	<script src="/js/back_office/sort.js"></script>
</head>
@include('/boffice/inc/header')