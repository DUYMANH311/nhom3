@extends('Backend.layoutAdmin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading " style="font-weight: bold;">
                 Cập nhật danh mục phòng
            </header>
            <?php
            $message = Session::get('message');
            if ($message) {
                echo '<span style="color:red; text-align:center;width: 100%;font-weight: bold;">', $message, '</span>';
                Session::put('message', null);
            }
            ?>
            <div class="panel-body">
                @foreach($edit_room as $key =>$edit_room)
                <div class="position-center">
                    <form role="form" action="{{URL::to('/update-category-room')}}" method="" enctype="multipart/form-data">
                    {{csrf_field()}}
                       
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" name="category_room_name" class="form-control" value="{{$edit_room->ten_loai}}" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Số Giường</label>
                            <select name="sogiuong" class="form-control input-sm m-bot15"  >
                                <option selected value="{{$edit_room->so_giuong}}"></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tỉ Suất sử dụng</label>
                            <select name="tisuat" class="form-control input-sm m-bot15"  >
                                <option selected value="{{$edit_room->so_nguoi}}"></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Diện Tích Phòng</label>
                            <select name="dientich" class="form-control input-sm m-bot15">
                                <option selected value="{{$edit_room->dien_tich}}"><sup >2</sup></option>
                               
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh phòng</label>
                            <input type="file" name="image" class="form-control" id="exampleInputEmail1">
                            <img src="{{URL::to('public/uploads/img/'.$edit_room->image)}}" height="100px" width="150px">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá Phòng</label>
                            <input type="text" name="category_room_price" class="form-control" id="exampleInputEmail1" value="{{$edit_room->gia_phong}}" >
                        </div>
                        <div class="form-group">
                            <color ></color>
                            <label for="exampleInputPassword1">Mô tả phòng</label>
                            <textarea rows="10"  class="form-control " value="{{$edit_room->room_desc}}"  name="room_desc">{{$edit_room->room_desc}} </textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="room_status" class="form-control input-sm m-bot15">
                                @if($edit_room->category_status==1)
                                <option  selected value="{{$edit_room->category_status}}">Ẩn </option>
                                <option  value="0">hiện</option>
                                @else($edit_room->category_status==0)
                                <option selected value="{{$edit_room->category_status}}">hiện</option>
                                <option  value="1">ẩn</option>
                                @endif
                            </select>
                        </div>
                        <button type="submit" name="add_category_room" class="btn btn-info">Cập nhật danh mục</button>
                    </form>
                </div>
                @endforeach

            </div>
        </section>
    </div>
</div>

@endsection