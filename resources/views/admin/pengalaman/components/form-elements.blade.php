<div class="form-group row align-items-center" :class="{'has-danger': errors.has('pengalaman'), 'has-success': this.fields.pengalaman && this.fields.pengalaman.valid }">
    <label for="pengalaman" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.pengalaman.columns.pengalaman') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.pengalaman" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('pengalaman'), 'form-control-success': this.fields.pengalaman && this.fields.pengalaman.valid}" id="pengalaman" name="pengalaman" placeholder="{{ trans('admin.pengalaman.columns.pengalaman') }}">
        <div v-if="errors.has('pengalaman')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('pengalaman') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('date'), 'has-success': this.fields.date && this.fields.date.valid }">
    <label for="date" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.pengalaman.columns.date') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.date" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('date'), 'form-control-success': this.fields.date && this.fields.date.valid}" id="date" name="date" placeholder="{{ trans('admin.pengalaman.columns.date') }}">
        <div v-if="errors.has('date')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('date') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('perusahaan'), 'has-success': this.fields.perusahaan && this.fields.perusahaan.valid }">
    <label for="perusahaan" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.pengalaman.columns.perusahaan') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.perusahaan" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('perusahaan'), 'form-control-success': this.fields.perusahaan && this.fields.perusahaan.valid}" id="perusahaan" name="perusahaan" placeholder="{{ trans('admin.pengalaman.columns.perusahaan') }}">
        <div v-if="errors.has('perusahaan')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('perusahaan') }}</div>
    </div>
</div>


