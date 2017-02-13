<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
	<title>@yield('title')</title>
	<!-- <link rel="stylesheet" href="D:/app/wnmp/nginx/html/github/laravelbook/public/css/weui.css"> -->
	
	<link rel="stylesheet" href="/css/weui.css">
	<link rel="stylesheet" href="/css/book.css">
</head>
<body>
	
	@yield('content')

	<div class="page">
		{{--<div class="page__hd">--}}
			{{--<h1 class="page__title">ActionSheet</h1>--}}
			{{--<p class="page__desc">弹出式菜单</p>--}}
		{{--</div>--}}
		<div class="page__bd page__bd_spacing">
			<a href="javascript:;" class="weui-btn weui-btn_default" id="showIOSActionSheet">iOS ActionSheet</a>
			{{--<a href="javascript:;" class="weui-btn weui-btn_default" id="showAndroidActionSheet">Android ActionSheet</a>--}}
		</div>
		<!--BEGIN actionSheet-->
		<div>
			<div class="weui-mask" id="iosMask" style="display: none"></div>
			<div class="weui-actionsheet" id="iosActionsheet">
				<div class="weui-actionsheet__menu">
					<div class="weui-actionsheet__cell">欧美风情</div>
					<div class="weui-actionsheet__cell">请我吃饭</div>
					<div class="weui-actionsheet__cell">请我唱歌</div>
					<div class="weui-actionsheet__cell">请我喝酒</div>
					<div class="weui-actionsheet__cell">请我桑拿</div>
					<div class="weui-actionsheet__cell">请我泡脚</div>
				</div>
				<div class="weui-actionsheet__action">
					<div class="weui-actionsheet__cell" id="iosActionsheetCancel">取消</div>
				</div>
			</div>
		</div>

		<div class="weui-skin_android" id="androidActionsheet" style="display: none">
			<div class="weui-mask"></div>
			<div class="weui-actionsheet">
				<div class="weui-actionsheet__menu">
					<div class="weui-actionsheet__cell">示例菜单</div>
					<div class="weui-actionsheet__cell">示例菜单</div>
					<div class="weui-actionsheet__cell">示例菜单</div>
				</div>
			</div>
		</div>
		<!--END actionSheet-->
		<div class="page__ft">
			<a href="javascript:home();"><img src="http://weui.cc/images/icon_footer_link.png" /></a>
		</div>
	</div>
</body>
<script src="/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript">
    // ios
    $(function(){
        var $iosActionsheet = $('#iosActionsheet');
        var $iosMask = $('#iosMask');

        function hideActionSheet() {
            $iosActionsheet.removeClass('weui-actionsheet_toggle');
            $iosMask.fadeOut(200);
        }

        $iosMask.on('click', hideActionSheet);
        $('#iosActionsheetCancel').on('click', hideActionSheet);
        $("#showIOSActionSheet").on("click", function(){
            $iosActionsheet.addClass('weui-actionsheet_toggle');
            $iosMask.fadeIn(200);
        });
    });

</script>
@yield('my-js')
</html>