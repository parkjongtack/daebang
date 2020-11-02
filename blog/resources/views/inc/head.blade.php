<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>대방열림고시학원</title>
        <!-- <link href="//fonts.googleapis.com/css?family=Noto+Sans+KR&display=swap" rel="stylesheet"> -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/swiper.min.css">
        <link rel="stylesheet" href="/css/index.css">
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/font.css">
        <script src="https://kit.fontawesome.com/7f5faa19ba.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="/js/index.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        
    </head>
    @if (request()->segment(1) == '')    
        @include('inc/header')
    @elseif(request()->segment(1) == 'bookstore')
        @include('inc/book_header')
    @else
        @include('inc/sub_header')
    @endif