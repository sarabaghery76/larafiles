<div class="row">
    <div class="col-xs-12 col-md-6">
        @include('admin.partials.errors')
        <form action="" method="post" enctype="multipart/form-data">
            {{ csrf_field()  }}
            <div class="form-group">
                <label for="file_title">عنوان فایل :</label>
                <input type="text" class="form-control" name="file_title" id="file_title" value="{{ old('file_title', isset($fileItem) ? $fileItem->file_title : '' ) }}" >
            </div>
            <div class="form-group">
                <label for="file_description">توضیحات فایل :</label>
                <textarea class="form-control" name="file_description" id="file_description" cols="30" rows="10"> {{ old('file_description', isset($fileItem) ? $fileItem->file_description : '' ) }} </textarea>
            </div>
            <div class="form-group">
                <label for="file_title">فایل : </label>
                <input type="file" name="fileItem">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit" > ذخیره اطلاعات </button>
            </div>
        </form>
    </div>
</div>