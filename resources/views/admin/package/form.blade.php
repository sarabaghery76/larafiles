<div class="row">
    <div class="col-xs-12 col-md-6">
        @include('admin.partials.errors')
        <form action="" method="post">
            {{ csrf_field()  }}
            <div class="form-group">
                <label for="package_title">عنوان پکیج :</label>
                <input type="text" class="form-control" name="package_title" id="package_title" value="{{ old('package_title', isset($packageItem) ? $packageItem->package_title : '' ) }}" >
            </div>
            <div class="form-group">
                <label for="package_price">قیمت پکیج :</label>
                <input type="text" class="form-control" name="package_price" id="package_price" value="{{ old('package_price', isset($packageItem) ? $packageItem->package_price : '' ) }}">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit" > ذخیره اطلاعات </button>
            </div>
        </form>
    </div>
</div>