@extends('layouts.admin')
@section('content')
<div class="crumb_warp">
    <i class="fa fa-home"></i> <a href="{{ url('admin/info') }}">首页</a> &raquo;  编辑自定义导航
</div>

<div class="result_wrap">
    <div class="result_title">
        <h3 class="bg-info bgtitle">编辑自定义导航</h3>
        @if(count($errors)>0)
            <div class="mark" style="margin-left: 150px;width:40%">
                @if(is_object($errors))
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                @else
                    <p>{{$errors}}</p>
                @endif
            </div>
        @endif

    </div>
    <div class="result_content">
        <div class="short_wrap">
            <a href="{{ url('admin/navi/create') }}"><i class="fa fa-plus"></i>添加自定义导航</a>
            <a href="{{ url('admin/navi') }}"><i class="fa fa-list"></i>自定义导航列表</a>
        </div>
    </div>

</div>
<!--结果集标题与导航组件 结束-->

<div class="result_wrap">
    <form action="{{url('admin/navi/'.$info->nv_id)}}" method="post">
        <input type="hidden" name='_method' value="put">
        {{csrf_field()}}
        <table class="add_tab">
            <tbody>

            <tr>
                <th><i class="require">*</i>导航名称：</th>
                <td>
                    <input type="text" class="md" required name="nv_name" value="{{$info->nv_name}}">
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>排序：</th>
                <td>
                    <input type="text" required class="md" name="nv_order" value="{{$info->nv_order}}">

                </td>
            </tr>

            <tr>
                <th>导航别名：</th>
                <td>
                    <input type='text'class="md"  name="nv_alias" value="{{$info->nv_alias}}">
                </td>
            </tr>
            <tr>
                <th>导航地址：</th>
                <td>
                    <input  type="text" class="md" name="nv_url" value="{{$info->nv_url}}">
            </tr>

            <tr>
                <th></th>
                <td>
                    <input type="submit" class="btn btn-primary" value="提交">
                    <input type="button" class="back btn" onclick="history.go(-1)"  value="返回">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
@endsection

