{{-- 成功提示框和失败提示框 --}}
        <!-- 成功信息  -->
@if (Session::has('success'))
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert"
            aria-hidden="true">
        &times;
    </button>
    成功！{{ Session::get('success') }}
</div>
@endif
<!-- 警告信息 -->
@if (Session::has('error'))
<div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert"
            aria-hidden="true">
        &times;
    </button>
    错误！{{ Session::get('error') }}
</div>
   @endif