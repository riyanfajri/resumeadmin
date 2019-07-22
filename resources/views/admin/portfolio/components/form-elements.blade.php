<div class="form-group row align-items-center" :class="{'has-danger': errors.has('image'), 'has-success': this.fields.image && this.fields.image.valid }">
    <label for="image" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.portfolio.columns.image') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.image" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('image'), 'form-control-success': this.fields.image && this.fields.image.valid}" id="image" name="image" placeholder="{{ trans('admin.portfolio.columns.image') }}">
        <div v-if="errors.has('image')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('image') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('judul'), 'has-success': this.fields.judul && this.fields.judul.valid }">
    <label for="judul" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.portfolio.columns.judul') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.judul" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('judul'), 'form-control-success': this.fields.judul && this.fields.judul.valid}" id="judul" name="judul" placeholder="{{ trans('admin.portfolio.columns.judul') }}">
        <div v-if="errors.has('judul')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('judul') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('keterangan'), 'has-success': this.fields.keterangan && this.fields.keterangan.valid }">
    <label for="keterangan" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.portfolio.columns.keterangan') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <wysiwyg v-model="form.keterangan" v-validate="'required'" id="keterangan" name="keterangan" :config="mediaWysiwygConfig"></wysiwyg>
        </div>
        <div v-if="errors.has('keterangan')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('keterangan') }}</div>
    </div>
</div>


