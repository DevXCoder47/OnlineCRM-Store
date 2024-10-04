<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('../css/home_page_css/components.css') }}">
</head>
<body>
    <div id = "menu_container_id">@include('components.home_page_components.menu')</div>
    <div id = "image_container_id">@include('components.home_page_components.image')</div>
    <div id = "logo_container_id">@include('components.home_page_components.logo')</div>
    <div id = "description_container_id">@include('components.home_page_components.about_us_ref')</div>
    <div id = "promotion_container_id">Promotion</div>
</body>
</html>

